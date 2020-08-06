@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Edit User</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/home">Home</a></li>
          <li class="breadcrumb-item active">Edit User</li>
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
              <form action="/users/{{$user->id}}/update" method="POST">
              {{csrf_field()}}
                <div class="card-body">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Your username ..." value="{{$user->username}}">
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Your name ..." value="{{$user->name}}">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Your email ..." value="{{$user->email}}">
                    </div>
                    <div class="form-group">
                    <label>Role</label>
                    <select class="form-control select2" name="role" style="width: 100%;">
                        <option value="{{$user->role}}" selected="selected">{{$user->role}}</option>
                        <option value="superadmin">superadmin</option>
                        <option value="admin">admin</option>
                        <option value="user">user</option>
                        <option value="guest">guest</option>
                    </select>
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
