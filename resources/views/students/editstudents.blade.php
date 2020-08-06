@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Edit Student</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/home">Home</a></li>
          <li class="breadcrumb-item active">Edit Students</li>
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

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
      </div>
    </div>
    <div class="card-body">
    <div class="row">
          <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header">
              </div>
              <!-- /.card-header -->
              <form action="/students/{{$students->id}}/update" method="POST">
              {{csrf_field()}}
                <div class="card-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Your name ..." value="{{$students->name}}">
                    </div>
                    <div class="form-group">
                    <label>Gender</label>
                    <select class="form-control select2" name="gender" style="width: 100%;">
                        <option value="{{$students->gender}}" selected="selected">{{$students->gender}}</option>
                        <option value="Perempuan">Perempuan</option>
                        <option value="Other">Other</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <label>Religion</label>
                    <select class="form-control select2" name="religion" style="width: 100%;">
                        <option value="{{$students->religion}}" selected="selected">{{$students->religion}}</option>
                        <option value="Kristen">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katholik">Katholik</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Other">Other</option>
                    </select>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control" name="address" rows="3">{{$students->address}}</textarea>
                    </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Update</button>
                </div>
              </form>
            </div>
        </div>
    </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      Footer
    </div>
    <!-- /.card-footer-->
  </div>
  <!-- /.card -->

</section>
<!-- /.content -->
@endsection
