@extends('Admin.adminMaster')
@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col ">
            <!-- general form elements -->
            <div class="card card-outline card-blue">
                <div class="card-header">
                    <h3 class="card-title">Location</h3>
                </div>
                <!-- /.card-header -->

                <!-- form start -->
                <form method="post" action="{{route('admin.location.store')}}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="Locaion">Locaion</label>
                            <input type="text" class="form-control" name="name" id="locaion" placeholder="Enter Your Location">
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
    </div>
@endsection
