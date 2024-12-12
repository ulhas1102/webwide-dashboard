@extends('layouts.master')
@section('title', 'Edit Blog')

@section('backend-page-style')
<style>
.ck-content {
    color: black;
}
</style>
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Blog</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item text-white"><a class="text-white" href="/">Home</a></li>
                        <li class="breadcrumb-item active">Edit Blog</li>
                        <li class="breadcrumb-item"><a  class="text-white" href="blog-list"><i class="fas fa-list fa-fw"></i></a></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
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
                            <h3 class="card-title">Edit Blog</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="posteditblog" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="auther_name" id="auther_name" value="{{ Auth::user()->name }}">
                            <input type="hidden" name="dataId" id="dataId" value="{{ $blog->blog_id }}">

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Blog Title</label>
                                    <input type="text" name="blog_title" value="{{$blog->blog_title}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Blog Title" required>
                                    @error('blog_title')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Uploaded Image</label><br>
                                    <img src="{{ asset('backend/blog-images/'.$blog->blog_images) }}" alt="Blog Image" width="290px" height="180px">
                                </div>
                                <div class="form-group">
                                    <label for="blog_images">Change Image</label>
                                    <input type="file" class="form-control" name="blog_images" required>
                                </div>
								 <div class="form-group">
                                    <label>Blog Description</label>
                                    <textarea id="blog_description" name="blog_description" rows="12" required>{{ $blog->blog_description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Blog Meta Title</label>
                                    <input type="text" value="{{$blog->blog_meta_title}}" name="blog_meta_title" class="form-control" placeholder="Enter Blog Meta Title" required>
                                </div>
                                <div class="form-group">
                                    <label>Blog Meta Description</label>
                                    <textarea id="blog_meta_description" name="blog_meta_description" rows="12" required>{{ $blog->blog_meta_description }}</textarea>
                                </div>
                               
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
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
@section('backend-page-script')
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#blog_description'),
    {
        ckfinder:
        {
            uploadUrl: "{{route('ckeditor.upload', ['_token'=>csrf_token()])}}",
        }
    })
        .catch(error => {
            console.error(error);
        });
</script>

<script>
    ClassicEditor
        .create(document.querySelector('#blog_meta_description'),
    {
        ckfinder:
        {
            uploadUrl: "{{route('ckeditor.upload', ['_token'=>csrf_token()])}}",
        }
    })
        .catch(error => {
            console.error(error);
        });
</script>
@endsection
