@extends('admin.adminMaster')
@section('content')
    <div class="row">
        <div class="col">

            <div class="card card-outline card-dark">

                <div class="card-header">
                    <h2 class="font-weight-bold">Update Event</h2>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h4 class="font-weight-bold">Event</h4>

                        </div>
                        <!-- form start -->
                        <form  method="post" action="{{route('admin.event.update')}}" enctype="multipart/form-data">
                            <div class="card-body">
                                @csrf
                                @method('put')
                                <input hidden name="event_id" value="{{$event->id}}">
                                <div class="form-group">
                                    <label for="exampleInputTitle">Event Title</label>
                                    <input  name="title" type="text" class="form-control" id="exampleInputTitle" value="{{$event->title}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectLocation">Select Location</label>
                                    <select class="custom-select form-control-border border-width-2" id="exampleSelectLocation" name="location_id">
                                        <option value="{{$event->location_id}}">{{$event->location->name}}</option>

                                        @foreach($locations as $location)
                                            <option value="{{$location->id}}">{{$location->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputTitle">Event Date</label>
                                    <input  name="date" type="date" class="form-control" id="exampleInputDate" value="{{$event->date}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputStartTime">Start Time</label>
                                    <input   name="start_at" type="time" class="form-control" id="exampleInputStartTime" value="{{$event->startAtTime}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEndTime">End Time</label>
                                    <input   name="end_at" type="time" class="form-control" id="exampleInputEndTime" value="{{$event->endAtTime}}">
                                </div>
                                <div class="form-group">
                                    <label>Event Slug</label>
                                    <textarea name="slug" class="form-control" rows="3"  style="height: 90px;">
                                        {{$event->slug}}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Event Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input  name="image" type="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputTitle">Event Div Color</label>
                                    <input  name="color" type="text" class="form-control" id="exampleInputTitle" value=" {{$event->color}}">
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
        </div>
    </div>
@endsection
