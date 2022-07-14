@extends('Admin.adminMaster')
@section('content')
    <div class="row ">
        <div class="col">
            <div class="events">
                <div class="card card-outline card-danger">
                    <div class="card-header">
                        <h3 class=" font-weight-bold ">
                            Events
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach($events as $event)
                                <div class="col-md-4">
                                    <div  class="event">
                                        <div class="card card-danger card-outline">
                                            <div class="card-body box-profile">
                                                <div class="card card-gray card-outline">
                                                    <div class="card-header">
                                                        <h3 class="font-weight-bold">#{{$event->id}}</h3>
                                                    </div>
                                                    <div class="card-body">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>Image</b>
                                                            <span class="float-right text-muted">
                                                                 <img  style="width: 100px ; height: 100px" src="{{asset($event->image_url)}}" alt="Event picture">
                                                            </span>
                                                        </li>

                                                        <li class="list-group-item">
                                                            <b>Date</b> <span class="float-right text-muted">{{$event->dateTime}} </span>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Location</b> <span class="float-right text-muted m">{{$event->location->name}}  </span>

                                                        </li>
                                                        <li class="list-group-item">
                                                                <b>Event Start At :</b>
                                                                <span class="float-right text-muted ">{{$event->start_at_time}}</span>

                                                        </li>
                                                        <li class="list-group-item">
                                                                <b>Event End At :</b>
                                                                <span class="float-right text-muted">{{$event->end_at_time}}</span>
                                                        </li>
                                                        <li class="list-group-item">
                                                                <b>Slug</b> <span class="float-right text-muted">{{$event->slug}} </span>
                                                        </li>
                                                        <li class="list-group-item">
                                                                <b>Div Color </b> <span class="float-right text-muted">{{$event->color}} </span>
                                                        </li>
                                                    </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="event_controllers">
                                                    <a href="{{route('admin.event.edit',[$event->id])}}" class="btn btn-block btn-outline-primary my-2">Edit</a>

                                                    <form action="{{route('admin.event.delete')}}" enctype="multipart/form-data" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <input type="hidden" name="event_id" value="{{$event->id}}">
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
                        <div class="">
                            <a type="button" href="{{route('admin.event.create')}}" class="btn btn-outline-primary"> <i class="fas fa-edit"></i> Create Event</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
