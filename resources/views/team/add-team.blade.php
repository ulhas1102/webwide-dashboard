@extends('layouts.master')
@section('title', 'Add Team')

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
                    <h1>Add Team</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item text-white"><a class="text-white" href="/">Home</a></li>
                        <li class="breadcrumb-item active">Add Team</li>
                        <li class="breadcrumb-item"><a  class="text-white" href="team-list"><i class="fas fa-list fa-fw"></i></a></li>
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
                            <h3 class="card-title">Quick Add <small>new Team Member</small></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="postteam" method="post" enctype="multipart/form-data">
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
                                    <label for="exampleInputEmail1">Mobiler number</label>
                                    <input type="text" name="mobile_number" class="form-control" id="exampleInputEmail1" placeholder="Enter Mobile Number" required>
                                    @error('mobile_number')
			                          <div class="alert alert-danger">{{ $message }}</div>
			                        @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Designation</label>
                                    <select class="form-control" name="designation">
                                    	<option>--Select Designation--</option>
                                    	@foreach($designations as $designation)
                                    	<option value="{{$designation->department_name}}">{{$designation->department_name}}</option>
                                    	@endforeach
                                    </select>
                                    @error('designation')
			                          <div class="alert alert-danger">{{ $message }}</div>
			                        @enderror
                                </div>
                                <div class="form-group">
				                    <label for="blog_images">Profile photo</label>
				                    <input type="file" class="form-control" name="profile_photo" required>
				                     @error('profile_photo')
			                          <div class="alert alert-danger">{{ $message }}</div>
			                        @enderror
				                  </div>
                                <div class="form-group">
                                	<label>Address</label>
                                	<textarea name="address" class="form-control" rows="4" required>
              						</textarea>
              						 @error('address')
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