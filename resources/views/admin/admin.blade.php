@extends('admin.template.master')

@section('title', 'Admin Dashboard')

@section('content')

<div class="page-heading">
    <h3>Profile Statistics</h3>
</div>

<div class="page-content">
    <section class="row">

        <div class="row">
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-3 py-4-5">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="stats-icon purple">
                                    <i class="iconly-boldShow"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h6 class="text-muted font-semibold">Profile Views</h6>
                                <h6 class="font-extrabold mb-0">112.000</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-3 py-4-5">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="stats-icon blue">
                                    <i class="iconly-boldProfile"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h6 class="text-muted font-semibold">Followers</h6>
                                <h6 class="font-extrabold mb-0">183.000</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-3 py-4-5">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="stats-icon green">
                                    <i class="iconly-boldAdd-User"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h6 class="text-muted font-semibold">Following</h6>
                                <h6 class="font-extrabold mb-0">80.000</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-3 py-4-5">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="stats-icon red">
                                    <i class="iconly-boldBookmark"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h6 class="text-muted font-semibold">Saved Post</h6>
                                <h6 class="font-extrabold mb-0">112</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Update Today</h3>
                        <p>Event yang di Update pada hari ini</p>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>Judul</th>
                                    <th>Poster</th>
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th>End Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($event_today as $data)
                                <tr>
                                    <td>{{$data->title}}</td>
                                    <td>
                                        <img class="img-fluid w-50" src="{{asset('img/event')}}/{{$data->gambar}}" alt="" srcset="">
                                    </td>
                                    <td>{{$data->Category->nama_category}}</td>
                                    <td>{{$data->deskripsi}}</td>
                                    <td>{{$data->end_date}}</td>
                                    <td>
                                        @if($data->status == "Published")
                                        <span class="badge bg-success">Published</span>
                                        @else
                                        <span class="badge bg-light-warning">Draft</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{route('event.edit', $data->id)}}" class="btn btn-warning" name="edit"><i class="bi bi-pencil"></i></a>
                                            <a href="{{'hapus/event/'.$data->id}}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Deadline Approaching</h3>
                        <p>Pendaftaran Event yang akan berakhir dalam 10 hari mendatang</p>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="table2">
                            <thead>
                                <tr>
                                    <th>Judul</th>
                                    <th>Poster</th>
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th>End Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($deadlineApproaching as $data)
                                <tr>
                                    <td>{{$data->title}}</td>
                                    <td>
                                        <img class="img-fluid w-50" src="{{asset('img/event')}}/{{$data->gambar}}" alt="" srcset="">
                                    </td>
                                    <td>{{$data->Category->nama_category}}</td>
                                    <td>{{$data->deskripsi}}</td>
                                    <td>{{$data->end_date}}</td>
                                    <td>
                                        @if($data->status == "Published")
                                        <span class="badge bg-success">Published</span>
                                        @else
                                        <span class="badge bg-light-warning">Draft</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{route('event.edit', $data->id)}}" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                                            <a href="{{'hapus/event/'.$data->id}}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>

@endsection
