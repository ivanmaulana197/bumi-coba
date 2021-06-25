<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\EventResource;
use App\Models\Event;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Carbon\Carbon;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //mengambil data event yang publish saja
    public function index()
    {
        $event = Event::latest()->where('status', 'Published')->get();
        return response([
            'total' => $event->count(),
            'messages' => 'Retrieved successfuly',
            'data' => EventResource::collection($event)
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
            'title' => 'required|max:100',
            'deskripsi' => 'required',
            'gambar' => 'required|mimes:jpg,jpeg,bmp,png,svg|max:10000',
            'status' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'category_id' => 'required',
        ]);
        if ($validator->fails()) {
            return response([
                'error' => $validator->errors(),
                'status' => 'Validation Error'
            ]);
        }
        if ($request->file('gambar')) {
            $file = $request->file('gambar');
            $nama_file = time() . '_' . Str::slug($request->title) . '.' . $file->extension();
            $file->move('img/event', $nama_file);
        }
        $event = Event::create([
            'title' => $request->title,
            'deskripsi' => $request->deskripsi,
            'gambar' => $nama_file,
            'slug' => Str::slug($request->title),
            'status' => $request->status,
            'start_date' => $request->start_date,
            'end_date' => $request->start_date,
            'category_id' => $request->category_id,
        ]);
        return response(['data' => new EventResource($event), 'message' => 'Event has beencreated!'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        if ($event != null) {
            $namaCategory = Category::find($event->category_id);
            $event->category_id = $namaCategory;
            return response(['project' => new EventResource($event), 'message' => 'Retrieved successfully'], 200);
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
            'title' => 'required|max:100',
            'deskripsi' => 'required',
        ]);
        if ($validator->fails()) {
            return response([
                'error' => $validator->errors(),
                'status' => 'Validation Error'
            ]);
        }
        $event = Event::find($id);
        if ($event != null) {
            $event->update($request->all());
            return response(['data' => new EventResource($event), 'message' => 'Event has been updated!'], 202);
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
        $event = Event::find($id);

        if ($event != null) {
            $gambar = public_path('/img/event/') . $event->gambar;
            if (file_exists($gambar)) {
                @unlink($gambar);
            }
            $event->delete();
            return response(['message' => 'Supplier has been deleted!']);
        } else {
            return response([
                'message' => 'No data found!',
            ], 403);
        }
    }


    public function search(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'search' => 'required',
        ]);
        if ($validator->fails()) {
            return response([
                'error' => $validator->errors(),
                'status' => 'Validation Error'
            ]);
        }
        $search = $request->search;
        $event_search = Event::where('status', 'Published')
            ->where(function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%', 'or')
                    ->orWhere("deskripsi", "like", "%" . $search . "%");
            })->get();

        if ($event_search != null) {
            return response(['project' => new EventResource($event_search), 'message' => 'Retrieved successfully'], 200);
        } else {
            return response([
                'message' => 'No data found!',
            ], 403);
        }
    }

    public function random()
    {
        $event = Event::where('status', 'Published')->get()->random();
        return response(['message' => 'successfully', 'data_random' => new EventResource($event)], 200);
    }

    public function eventTerdekat()
    {
        $dt = Carbon::now();
        $event = Event::where('status', 'Published')
            ->whereBetween('end_date', [Carbon::now(), $dt->addDays(10)])->orderBy('end_date', 'asc')->get();

        if ($event != null) {
            return response(['message' => 'event yang ditutup dalam 10 hari mendatang', 'succes' => true, 'event' => new EventResource($event),], 200);
        } else {
            return response([
                'message' => 'No data found!',
            ], 403);
        }
    }
}
