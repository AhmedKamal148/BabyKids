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
                <form  method="post" action="{{route('admin.activity.update')}}" >
                    @csrf
                    @method('put')
                    <input hidden name="activity_id" value="{{$activity->id}}">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputTitle">Activity Title</label>
                            <input name="activity_title" type="text" class="form-control" id="exampleInputTitle" value="{{$activity->title}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputSlug">Activity Slug</label>
                            <input  name="activity_slug" type="text" class="form-control" id="exampleInputSlug" value="{{$activity->slug}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Activity Icon</label>
                            <input  name="activity_icon" type="text" class="form-control" id="exampleInputSlug" value="{{$activity->icon}}">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-dark">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
