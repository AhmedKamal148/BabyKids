@extends('Admin.adminMaster')
@section('content')


<div class="row">
    @foreach($sliders as $slider)
    <div class="col-md-4">
        <div class="slider_info">
            <img src="{{$slider->image}}" alt="" srcset="">

        </div>
    </div>
    @endforeach
</div>

@endsection
