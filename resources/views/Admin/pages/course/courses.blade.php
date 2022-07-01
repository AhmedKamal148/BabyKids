@extends('Admin.adminMaster')
@section('content')
    <div class="row">
        <div class="col">
            <div class="course_header">
                <div class="card card-dark">
                    <div class="card-header">
                        <h3 class="card-title"> Courses</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            @foreach($courses as $course)
                                <div class="col-md-4">
                                    <div class="card text-capitalize">
                                        <div class="card-header bg-dark">
                                            <h3 class="card-title font-weight-bold">{{$course->name}}</h3>

                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body overflow-hidden">
                                            <img width="300px" height="250px" src="{{asset($course->image_url)}}"  class="rounded rounded-2"/>
                                            <p class="font-weight-bold my-2"> {{$course->description}}</p>
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="card-footer">
                                            <div class="course_controllers">
                                                <a type="button" class="btn btn-block btn-outline-primary mb-2" href="{{route('admin.course.edit',[$course->id])}}">Edit</a>
                                                <form action="{{route('admin.course.delete')}}" enctype="multipart/form-data" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="hidden" name="course_id" value="{{$course->id}}">
                                                    <button type="submit" class="btn btn-block btn-outline-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- /.card-footer-->
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="card-footer">

                        <a type="button" href="{{route('admin.course.create')}}" class="btn btn-outline-primary"> <i class="fas fa-edit"></i> Create Course</a>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>

@endsection
