@extends('Admin.adminMaster')
@section('content')
<div class="row ">
    <!-- left column -->
    <div class="col ">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Upload Image</h3>
            </div>
            <!-- /.card-header -->

            <!-- form start -->
            <form method="post" enctype="multipart/form-data" action="{{route('admin.slider.store')}}  ">
                @csrf
                <div class="card-body">
                    <div class="input-group">
                        <div class="custom-file">
                            <label class="custom-file-label"  for="sliderImg">Choose file</label>
                            <input type="file" class="custom-file-input"  id="image" name="image">
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Add Image</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</div>
@endsection
