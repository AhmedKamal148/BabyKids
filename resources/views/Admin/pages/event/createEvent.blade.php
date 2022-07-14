@extends('admin.adminMaster')
@section('content')
    <div class="row">
        <div class="col">

            <div class="card card-outline card-dark">

                <div class="card-header">
                    <h2 class="card-header">Create Event</h2>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h4 class="card-header"> Event</h4>

                        </div>
                            <!-- form start -->
                            <form  method="post" action="{{route('admin.event.store')}}" enctype="multipart/form-data">
                                <div class="card-body">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputTitle">Event Title</label>
                                    <input required name="title" type="text" class="form-control" id="exampleInputTitle" placeholder="Enter Title">
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectLocation">Select Location</label>
                                    <select class="custom-select form-control-border border-width-2" id="exampleSelectLocation" name="location_id">
                                        <option>Select</option>
                                        @foreach($locations as $location)
                                            <option value="{{$location->id}}">{{$location->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputTitle">Event Date</label>
                                    <input required name="date" type="date" class="form-control" id="exampleInputDate" placeholder="Enter Date">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputStartTime">Start Time</label>
                                    <input required  name="start_at" type="time" class="form-control" id="exampleInputStartTime" placeholder="Enter Start Time">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEndTime">End Time</label>
                                    <input required  name="end_at" type="time" class="form-control" id="exampleInputEndTime" placeholder="Enter End Time">
                                </div>
                                <div class="form-group">
                                    <label>Event Slug</label>
                                    <textarea name="slug" class="form-control" rows="3" placeholder="Enter Description" style="height: 90px;"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Event Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input required name="image" type="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputTitle">Event Div Color</label>
                                    <input required name="color" type="text" class="form-control" id="exampleInputTitle" placeholder="Enter Div Color Such As #fff">
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
        </div>
    </div>
@endsection
