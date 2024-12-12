@extends('layouts.master')
@section('title', 'Add Department')

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
                    <h1>Add Department</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item text-white"><a class="text-white" href="/">Home</a></li>
                        <li class="breadcrumb-item active">Add Department</li>
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
                            <h3 class="card-title">Quick Add <small>new department</small></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="postdepartment" method="post" enctype="multipart/form-data">
                        	@csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Department Name</label>
                                    <input type="text" name="department_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Department Name" required>
                                    @error('blog_title')
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