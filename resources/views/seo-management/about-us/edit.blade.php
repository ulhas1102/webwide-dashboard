@extends('layouts.master')
@section('title', 'About Us SEO edit')

@section('backend-page-style')
<style>

</style>
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item text-white"><a class="text-white" href="/">Home</a></li>
                        <li class="breadcrumb-item active">Add</li>
                        <li class="breadcrumb-item"><a  class="text-white" href="{{url('about-us-page-seo')}}"><i class="fas fa-list fa-fw"></i></a></li>
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
                            <h3 class="card-title">Quick Edit <small>About Us page SEO</small></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="posteditaboutuspageseo" method="post">
                        	@csrf
                        	<input type="hidden" name="page_id" value="2">

                        	<input type="hidden" name="dataId" id="dataId" value="{{$seo->seo_id }}">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter About Page Title" value="{{$seo->title}}" required>
                                    @error('tile')
			                          <div class="alert alert-danger">{{ $message }}</div>
			                        @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description</label>
                                    <textarea name="description" class="form-control" id="exampleInputEmail1" placeholder="Enter About Page description" required>{{$seo->description}}</textarea>
                                    @error('description')
			                          <div class="alert alert-danger">{{ $message }}</div>
			                        @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Author</label>
                                    <input type="text" name="author" class="form-control" value="{{$seo->author}}" id="exampleInputEmail1" placeholder="Enter About Page author" required>
                                    @error('author')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Robots Meta Tag</label>
                                    <input type="text" name="robot_meta_tag" value="{{$seo->robot_meta_tag}}" class="form-control" id="exampleInputEmail1" placeholder="Enter About Page Robots Meta Tag" required>
                                    @error('robot_meta_tag')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Canonical URL</label>
                                    <input type="text" name="canonical_url" value="{{$seo->canonical_url}}" class="form-control" id="exampleInputEmail1" placeholder="Enter About Page Canonical URL" required>
                                    @error('canonical_url')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
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
 <script type="text/javascript">
  
</script>
@endsection