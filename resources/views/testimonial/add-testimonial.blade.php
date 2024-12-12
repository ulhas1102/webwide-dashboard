@extends('layouts.master')
@section('title', 'Add Testimonial')

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
                    <h1>Add Testimonial</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item text-white"><a class="text-white" href="/">Home</a></li>
                        <li class="breadcrumb-item active">Add Testimonial</li>
                        <li class="breadcrumb-item"><a  class="text-white" href="testimonial-list"><i class="fas fa-list fa-fw"></i></a></li>
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
                            <h3 class="card-title">Quick Add <small>new Testimonial</small></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="posttestimonial" method="post" enctype="multipart/form-data">
                        	@csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">First Name</label>
                                    <input type="text" name="first_name" class="form-control" id="exampleInputEmail1" placeholder="Enter First Name" required>
                                    @error('first_name')
			                          <div class="alert alert-danger">{{ $message }}</div>
			                        @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Last Name</label>
                                    <input type="text" name="last_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Last Name" required>
                                    @error('last_name')
			                          <div class="alert alert-danger">{{ $message }}</div>
			                        @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email Address" required>
                                    @error('email')
			                          <div class="alert alert-danger">{{ $message }}</div>
			                        @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Organization/Company</label>
                                    <input type="text" name="organization" class="form-control" id="exampleInputEmail1" placeholder="Enter organization" required>
                                    @error('organization')
			                          <div class="alert alert-danger">{{ $message }}</div>
			                        @enderror
                                </div>
                                <div class="form-group">
                                	<label>Testimonial</label>
                                	<textarea name="testimonial" class="form-control" class="form-control" rows="4" required>
              						</textarea>
              						 @error('testimonial')
			                          <div class="alert alert-danger">{{ $message }}</div>
			                        @enderror
                                </div>
                                 <div class="form-group">
                                	<label for="rating">Rating</label>
									<input type="number" id="rating" class="form-control" name="rating" min="1" max="5" placeholder="Enter Rating">
              						 @error('rating')
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
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
<script type="text/javascript">
  $(function () {
    // Summernote
    $('#summernote1').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
@endsection