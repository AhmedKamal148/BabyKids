@extends('admin.adminMaster')
@section('content')
    <div class="row">
        <div class="col">
            <div class="course_header">
                <div class="card card-dark">
                    <div class="card-header">
                        <h3 class="card-title"> Activites</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">

                        </div>
                    </div>
                    <div class="card-footer">

                        <a type="button" href="{{route('admin.activite.create')}}" class="btn btn-outline-primary"> <i class="fas fa-edit"></i> Create Activite</a>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>

@endsection
