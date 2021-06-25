<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\EventResource;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::latest()->get();
        return response([
            'total' => $category->count(),
            'messages' => 'Retrieved successfuly',
            'data' => CategoryResource::collection($category)
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_category' => 'required|max:50',
            'slug' => 'required|max:50',
        ]);
        if ($validator->fails()) {
            return response([
                'error' => $validator->errors(),
                'status' => 'Validation Error'
            ]);
        }
        $category = Category::create($request->all());

        return response(['data' => new CategoryResource($category), 'message' => 'Category has beencreated!'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        if ($category != null) {
            $categoryId = $category->id;
            $event = Event::where('status', 'Published')
                ->where(function ($query) use ($categoryId) {
                    $query->where('category_id', '=', $categoryId);
                })->get();
            return response(['list event' => new EventResource($event), 'message' => 'Retrieved successfully'], 200);
        } else {
            return response([
                'message' => 'No data found!',
            ], 403);
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama_category' => 'required|max:50',
        ]);
        if ($validator->fails()) {
            return response([
                'error' => $validator->errors(),
                'status' => 'Validation Error'
            ]);
        }
        $category = Category::find($id);
        if ($category != null) {
            $category->update($request->all());
            return response(['data' => new CategoryResource($category), 'message' => 'Category has been updated!'], 202);
        } else {
            return response([
                'message' => 'No data found!',
            ], 403);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        if ($category != null) {
            $category->delete();
            return response(['message' => 'Category has been deleted!', 'data' => new CategoryResource($category)]);
        } else {
            return response([
                'message' => 'No data found!',
            ], 403);
        }
    }
}
