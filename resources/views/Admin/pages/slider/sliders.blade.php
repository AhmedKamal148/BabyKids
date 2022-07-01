@extends('Admin.adminMaster')
@section('content')


<div class="row  ">
    <div class="col">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Slider</h3>
            </div>
        </div>
        <div class="card-body bg-white">
            <div class="row">
                 @foreach($sliders as $slider)
             <div class="col-md-3 overflow-hidden">
                <div class="slider_info border border-secondary rounded rounded-3">
                    <div class="slider_image" >
                        <img width="260px" height="200px"  src="{{asset( $slider->image_url)}}" alt="" srcset="" class="img-fluid" >
                    </div>
                    <div class="slider_controllers mt-3 d-flex justify-content-between align-items-center p-2">
                        <a href="{{route('admin.slider.edit' , [$slider->id])}}" class="btn btn-primary ">Edit</a>
                        <form  action="{{route('admin.slider.delete')}}" method="post" >
                            @csrf
                            @method('delete')
                            <input type="hidden" name="slider_id" value="{{$slider->id}}">
                            <button type="submit" class="btn btn-danger ">Delete</button>
                        </form>
                    </div>
                </div>

            </div>
            @endforeach
            </div>

            <div class=" my-3">
                <a href="{{route('admin.slider.create')}}" class="btn btn-dark">Create Slider</a>
            </div>
        </div>
    </div>
</div>

@endsection
