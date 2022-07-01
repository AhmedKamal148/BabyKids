@extends('Admin.adminMaster')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card card-gray-dark">
                <div class="card-header">
                    <h3 class="card-title">update Teacher</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form  method="post" action="{{route('admin.teacher.update')}}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <input type="hidden" name="teacher_id" value="{{$teacher->id}}"/>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputName">Teacher Name</label>
                            <input name="name" type="text" class="form-control" id="exampleInputName" value="{{$teacher->name}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPrice">Price</label>
                            <input  name="price" type="text" class="form-control" id="exampleInputPrice" value="{{$teacher->price}}"/>
                        </div>

                        <div class="form-group">
                            <label>Teacher Description</label>
                            <textarea name="description" class="form-control" rows="3"  style="height:90px">{{$teacher->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Teacher Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name="image" type="file" class="custom-file-input" id="exampleInputFile"   >
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Select Course </label>
                            <select class="form-control w-50" name="course_id">
                                <option value="">Select</option>
                                @foreach($courses as $course)
                                    <option  value="{{$course->id}}">{{$course->name}}</option>
                                @endforeach
                            </select>
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
