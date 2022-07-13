@extends('admin.adminMaster')
@section('content')
    <div class="row">
        <div class="col">
            <div class="course_header">
                <div class="card card-dark">
                    <div class="card-header">
                        <h3 class="card-title">Activities</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            @foreach($activites as $activity)
                                <div class="col-md-4">
                                    <div class="card text-capitalize collapsed-card">
                                        <div class="card-header bg-dark">
                                            <h3 class="card-title font-weight-bold">Activity #{{$activity->id}}</h3>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body overflow-hidden" style="display: none;">
                                            <ul class="list-group list-group-unbordered mb-3">
                                                <li class="list-group-item">
                                                    <b>Title</b> <span class="float-right">{{$activity->title}}</span>
                                                </li>
                                                <li class="list-group-item">
                                                    <b>Slug</b> <span class="float-right">{{$activity->slug}}</span>
                                                </li>
                                                <li class="list-group-item">
                                                    <b>Icon</b> <span class="float-right">
                                                        <i class="{{$activity->icon}}"></i>
                                                    </span>
                                                </li>
                                            </ul>

                                        </div>
                                        <!-- /.card-body -->
                                        <div class="card-footer" style="display: none;">
                                            <div class="activities_controllers">
                                                <a type="button" class="btn btn-block btn-outline-primary mb-2" href="{{route('admin.activity.edit',[$activity->id])}}">Edit</a>
                                                <form action="{{route('admin.activity.delete')}}"  method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="hidden" name="activity_id" value="{{$activity->id}}">
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

                        <a type="button" href="{{route('admin.activity.create')}}" class="btn btn-outline-primary"> <i class="fas fa-edit"></i> Create Activite</a>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>

@endsection
