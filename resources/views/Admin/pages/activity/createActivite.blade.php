@extends('admin.adminMaster')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card card-gray-dark">
                <div class="card-header">
                    <h3 class="card-title">Create Activity</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form  method="post" action="{{route('admin.activity.store')}}" >
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputTitle">Activity Title</label>
                            <input name="activity_title" type="text" class="form-control" id="exampleInputTitle" placeholder="Enter Activity Title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputSlug">Activity Slug</label>
                            <input  name="activity_slug" type="text" class="form-control" id="exampleInputSlug" placeholder="Enter Activity Slug">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Activity Icon</label>
                            <input  name="activity_icon" type="text" class="form-control" id="exampleInputSlug" placeholder="Enter Activity Icon">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
