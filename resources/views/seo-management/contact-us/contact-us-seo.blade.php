@extends('layouts.master')
@section('title', 'Conatct Us Page SEO')

@section('backend-page-style')
<style>

</style>
@endsection

@section('content')
@if(session('message'))
    <div class="alert alert-{{ session('alert-type') }}" id="myAlert">
        {{ session('message') }}
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $("#myAlert").fadeOut("slow");
            }, 4000); // 5000 milliseconds = 5 seconds (adjust as needed)
        });
    </script>
@endif
     <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contact Us Page SEO</h1>
          </div>
           <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item text-white"><a class="text-white" href="/">Home</a></li>
                        <li class="breadcrumb-item active"><a class="text-white" href="{{route('add-contact-us-page-title-description')}}">Add Contact Us Page SEO</a></li>
                        <!-- <li class="breadcrumb-item"><a  class="text-white" href="team-list">Edit Team</a></li> -->
                    </ol>
                </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <!-- <h3 class="card-title">B with default features</h3> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>SR.NO</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Auther</th>
                    <th>Canonical URL</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php
                    $i = 1;
                    @endphp
                    @foreach($seos as $seo)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$seo->title}}</td>
                    <td>{{$seo->description}}</td>
                    <td>{{$seo->author}}</td>
                    <td>{{$seo->canonical_url}}</td>
                    <td class="d-flex justify-content-center">
                      <a href="{{ route('edit-contact-us-page-seo', ['id' => $seo->seo_id]) }}" class="btn text-primary"><i class="fas fa-edit fa-fw"></i></a>
                      <!-- <form action="" method="post">
                        @csrf
                        <input type="hidden" name="dataId" value="{{$seo->seo_id}}">
                        <button type="submit" class="btn text-red"><i class="fas fa-trash fa-fw"></i></button>
                      </form> --> 
                       <a href="javascript:void(0);" onclick="handleDeleteDriver({{ $seo->seo_id }});" class="btn text-red"> <i class="fas fa-trash fa-fw"></i></a> 
                    </td>
                  </tr>
                  @endforeach
                
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
@section('backend-page-script')
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
  function handleDeleteDriver(id) {
        // Show a confirmation popup using SweetAlert with an input field
        Swal.fire({
            title: 'Delete Contact Us Page SEO',
            html: `
                <div class="row" style="text-align:center !important;justify-content: center;">
                    <p class="text-danger" style="font-size:18px;">Are You Sure you want to delete contact Us page SEO?</p>
                </div>
                <div class="d-none">
                    <p></p>
                    <form id="deleteDriver" action="{{route('contact-us-page-seo-delete')}}" method="post">
                    @csrf
                        <input type="text" name="dataId" class="swal2-input" value="${id}" readonly>
                    </form>
                </div> 
            `,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Delete',
            preConfirm: () => {
                // Submit the form to perform the delete action
                document.getElementById('deleteDriver').submit();
            },
        });
    }
</script>
@endsection