@extends('admin.template.master')

@section('title', 'List Category')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>List Category</h3>
                <p class="text-subtitle text-muted">Menampilkan list seluruh category web BUMI</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('adminhome')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">List Cateogry</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                {{-- <h3>List Category</h3> --}}
                <a href="{{route('category.create')}}"><button class="btn btn-primary" type="button">Add</button></a>
            </div>
            <div class="card-body">
                <table class="data-table table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Nama Category</th>
                            <th>Date Created</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($category as $data)
                        <tr>
                            <td>{{ $data->nama_category }}</td>
                            <td>{{$data->created_at}}</td>
                            <td>
                                <a href="{{route('category.edit', $data->id)}}" class="btn btn-warning"><i class="bi bi-pencil">Edit</i></a>
                                <form action="{{ route('category.destroy', [$data->id]) }}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger"> <i class="bi bi-trash"></i> Delete</button>
                                </form>
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
