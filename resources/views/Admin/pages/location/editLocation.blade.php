@extends('Admin.adminMaster')
@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col ">
            <!-- general form elements -->
            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title">Update Location</h3>
                </div>
                <!-- /.card-header -->

                <!-- form start -->
                <form method="post" action="{{route('admin.location.update')}}">
                    @csrf
                    @method('put')
                    <input type="hidden" name="location_id" value="{{$location->id}}">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="location">Location</label>
                            <input type="text" class="form-control" name="name" id="location" value="{{$location->name}}">
                        </div>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
