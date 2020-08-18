@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Students</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/home">Home</a></li>
          <li class="breadcrumb-item active">Students</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg">
            Add Student
      </button>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
      </div>
    </div>
    <div class="card-body">
      <!-- <form action="" id="search-form" method="GET">
      <table>
        <tr>
          <td>Name</td>
          <td>&nbsp; &nbsp;</td>
          <td>&nbsp; &nbsp;</td>
          <td>&nbsp; &nbsp;</td>
        </tr>
        
        <tr>
          <td>
            <input class="typeahead form-control" name="name" id="name" type="text">
          </td>
          <td>&nbsp; &nbsp;</td>
          <td><button type="submit" class="btn btn-primary" name="submit">Search</button></td>
        </tr>
      </table>
      </form><br> -->
        <table id="students" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Religion</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      Footer
    </div>
    <!-- /.card-footer-->
  </div>
  <!-- /.card -->

  <div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Add Student</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="/students/insert" method="POST">
        {{csrf_field()}}
        <div class="modal-body">
            <div class="card-body">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Your name ...">
                </div>
                <div class="form-group">
                  <label>Gender</label>
                  <select class="form-control select2" name="gender" style="width: 100%;">
                    <option value="Laki-laki" selected="selected">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                    <option value="Other">Other</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Religion</label>
                  <select class="form-control select2" name="religion" style="width: 100%;">
                    <option value="Islam" selected="selected">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katholik">Katholik</option>
                    <option value="Budha">Budha</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Other">Other</option>
                  </select>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <textarea class="form-control" name="address" rows="3"></textarea>
                </div>
            </div>
            
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
        </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

</section>
<!-- /.content -->
@endsection
