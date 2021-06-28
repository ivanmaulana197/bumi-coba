<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Category;
use Illuminate\Support\Str;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Event::latest()->get();

        return view('admin.data_master.event.list-event', compact('event'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::select('id', 'nama_category')->get();
        return view('admin.data_master.event.add-event', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:100',
            'deskripsi' => 'required',
            'gambar' => 'required|mimes:jpg,jpeg,bmp,png,svg|max:10000',
            'status' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'category_id' => 'required',
        ]);
        if ($request->file('gambar')) {
            $file = $request->file('gambar');
            $nama_file = time() . '_' . Str::slug($request->title) . '.' . $file->extension();
            $store = \Storage::disk("google")->putFileAs("", $file, $nama_file);
            $url = \Storage::disk('google')->url($store);
        }
        Event::create([
            'title' => $request->title,
            'deskripsi' => $request->deskripsi,
            'gambar' => $url,
            'slug' => Str::slug($request->title),
            'status' => $request->status,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'category_id' => $request->category_id,
        ]);
        return redirect('admin/event');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $category = Category::select('id', 'nama_category')->get();
        $event = Event::find($id);
        return view('admin.data_master.event.edit-event', compact('category', 'event'));

        // return view('admin.event.edit-event', compact('category', 'event'));
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
        $request->validate([
            'title' => 'required|max:100',
            'deskripsi' => 'required',
            'status' => 'required',
            'category_id' => 'required',
        ]);
        $event = Event::find($id);
        if ($request->file('gambar')) {
            $file = $request->file('gambar');
            $nama_file = time() . '_' . Str::slug($request->title) . '.' . $file->extension();
            $store = \Storage::disk("google")->putFileAs("", $file, $nama_file);
            $url = \Storage::disk('google')->url($store);
            $event->update([
                'title' => $request->title,
                'deskripsi' => $request->deskripsi,
                'gambar' => $url,
                'slug' => Str::slug($request->title),
                'status' => $request->status,
                'category_id' => $request->category_id,
            ]);
        } else {
            $event->update([
                'title' => $request->title,
                'deskripsi' => $request->deskripsi,
                'slug' => Str::slug($request->title),
                'status' => $request->status,
                'category_id' => $request->category_id,
            ]);
        }
        return redirect('admin/event');
        // Storage::delete($event->gambar);

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
        $event->delete();
        return redirect()->back();
    }
}
