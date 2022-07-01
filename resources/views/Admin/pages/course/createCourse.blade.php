@extends('Admin.adminMaster')

@section('content')
<div class="row">
    <div class="col">

        <div class="card card-gray-dark">
            <div class="card-header">
                <h3 class="card-title">Create Course</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form  method="post" action="{{route('admin.course.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputName">Course Name</label>
                        <input name="course_name" type="text" class="form-control" id="exampleInputName" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPrice">Price</label>
                        <input  name="course_price" type="text" class="form-control" id="exampleInputPrice" placeholder="Enter Price">
                    </div>

                    <div class="form-group">
                        <label>Course Description</label>
                        <textarea name="course_description" class="form-control" rows="3" placeholder="Enter Description" style="height: 90px;"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Course Image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input name="course_image" type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
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
