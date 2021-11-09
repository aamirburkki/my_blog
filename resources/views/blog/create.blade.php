@extends('layouts.app')
@section('title')
<title>Create Blog | Dashboard</title>
@endsection
@section('page-css')
@endsection
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Create Blog</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Create Blog</li>
            </ol>
            </div>
        </div>
    </div>
</section>
 <!-- Main content -->
 <section class="content">
    <div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Create <small>Blog</small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="row">
                <!-- left column -->
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <form id="quickForm" method="POST" action="{{ url('blogs') }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputtitle">Blog title</label>
                                <input type="text" name="title" class="form-control" id="exampleInputtitle" placeholder="Enter Title">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputauthor1">Author</label>
                                <input type="text" name="author" class="form-control" id="exampleInputauthor1" placeholder="Author">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputimg">Add Image</label>
                                <input type="file" name="img" class="form-control" id="exampleInputimg">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputimg">Description</label>
                                <textarea name="description" class="form-control" ></textarea>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.card -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection
@section('page-scripts')
<!-- jquery-validation -->
<script src="{{ asset('assets/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-validation/additional-methods.min.js') }}"></script>
<script>
$(function () {

  $('#quickForm').validate({
    rules: {
      title: {
        required: true
      },
      author: {
        required: true
      },
      img: {
        required: true
      },
      description: {
        required: true
      },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
@endsection