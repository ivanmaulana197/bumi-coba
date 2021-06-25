@extends('admin.template.master')

@section('title', 'List Event')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>List Event</h3>
                <p class="text-subtitle text-muted">List Seluruh Event yang terdapat pada web BUMI</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#">Data Master</a></li>
                        <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                {{-- <h3>List Event</h3>
                <p>Seluruh Event yang terdapat pada web BUMI</p> --}}
                <a href="{{ route('event.create')}}"><button class="btn btn-primary" type="button">Add</button></a>
            </div>
            <div class="card-body">
                <table class="data-table table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Poster</th>
                            <th>Category</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($event as $data)
                        <tr>
                            <td>{{$data->title}}</td>
                            <td>
                                @if(strlen($data->gambar)>0)
                                <img src="{{asset('img/event/'.$data->gambar)}}" alt="" width="200px">
                                @endif
                            </td>
                            <td>{{$data->Category->nama_category}}</td>
                            <td>{{$data->start_date}}</td>
                            <td>{{$data->end_date}}</td>
                            <td>
                                @if($data->status == "Published")
                                <span class="badge bg-success">Published</span>
                                @else
                                <span class="badge bg-light-warning">Draft</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('event.edit', $data->id)}}" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                                <a href="{{'hapus/event/'.$data->id}}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>


@endsection
