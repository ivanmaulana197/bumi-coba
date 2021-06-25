@extends('admin.template.master')

@section('title', 'Edit Category')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>DataTable</h3>
                <p class="text-subtitle text-muted">For user to check they list</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section id="input-style">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Input Styles</h4>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <p>To set rounded border to input box, use <code>.round</code> class and
                                    to set square border to input box, use <code>.sqaure</code> class
                                    alongwith
                                    <code>.form-control</code> class.
                                </p>
                            </div>
                            <form action="{{ route('category.update', $category->id) }}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Kategory</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control" type="text" name="nama_category" placeholder="Input Category" value="{{ $category->nama_category }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">slug</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control" placeholder="input slug" name="slug" type="text" value="{{ $category->slug }}">
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <a onClick="goBack()" class="btn btn-danger">Kembali</a>
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
