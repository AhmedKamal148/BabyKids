@extends('admin.adminMaster')
@section('content')
    <div class="row ">
        <div class="col">
            <div class="teacher_header ">
                <div class="card card-dark">
                    <div class="card-header">
                        <h3 class="bg-dark font-weight-bold">
                            Teachers
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach($teachers as $teacher)
                                <div class="col-md-4">
                                    <div  class="teacher">
                                        <div class="card card-primary card-outline">
                                            <div class="card-body box-profile">
                                                <div class="text-center">
                                                    <img class="profile-user-img img-fluid img-circle" src="{{asset($teacher->image_url)}}" alt="User profile picture">
                                                </div>

                                                <h3 class="profile-username text-center">{{$teacher->name}}</h3>

                                                <p class="text-muted text-center">{{$teacher->description}}</p>
                                                <div class="card card-gray card-outline">
                                                <ul class="list-group list-group-unbordered mb-3">
                                                    <li class="list-group-item">
                                                        <div class="card-header">
                                                        <b>Course Name</b> <span class="float-right">Students</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="card-body ">
                                                            <b>{{$teacher->course->name}}</b>
                                                            <a class="float-right active">1,322</a>
                                                        </div>
                                                    </li>

                                                </ul>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="course_controllers">

                                                    <a href="{{route('admin.teacher.edit',[$teacher->id])}}" class="btn btn-block btn-outline-primary my-2">Edit</a>

                                                    <form action="{{route('admin.teacher.delete')}}" enctype="multipart/form-data" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <input type="hidden" name="teacher_id" value="{{$teacher->id}}">
                                                        <button type="submit" class="btn btn-block btn-outline-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- /.card-footer-->
                                            <!-- /.card-body -->
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="card-footer">
                            <a type="button" href="{{route('admin.teacher.create')}}" class="btn btn-outline-primary"> <i class="fas fa-edit"></i> Create Teacher</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
