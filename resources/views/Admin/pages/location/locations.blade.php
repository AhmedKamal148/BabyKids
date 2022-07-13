@extends('Admin.adminMaster')
@section('content')
<div class="row">
    <div class="col">
        <div class="card card-outline card-danger">
            <div class="card-header">
                <h1>Locations</h1>
            </div>
            <div class="card-body">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Locations</h3>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Location</th>
                                <th>Update</th>
                                <th style="width: 40px">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($locations as $location)
                                <tr>
                                    <td>{{$location->id}}</td>
                                    <td>{{$location->name}}</td>
                                    <td>
                                        <a class="btn btn-outline-primary" name="location_id" href="{{route('admin.location.edit' , [$location->id])}}">Edit</a>
                                    </td>
                                    <td>
                                        <form method="post" action="{{route('admin.location.delete')}}">
                                            @csrf
                                            @method('delete')
                                            <input type="hidden" name="location_id" value="{{$location->id}}">
                                            <button class="btn btn-outline-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>

            <div class="card-footer">
                <a type="button" href="{{route('admin.location.create')}}" class="btn btn-outline-primary"> <i class="fas fa-edit"></i> Create Location</a>

            </div>
        </div>
    </div>
</div>
@endsection
