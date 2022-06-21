@extends('Admin.adminMaster')
@section('content')
<div class="row">
    <!-- left column -->
    <div class="col ">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">FaQ</h3>
            </div>
            <!-- /.card-header -->

            <!-- form start -->
            <form method="post" action="{{route('admin.faq.store')}}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="question">Question</label>
                        <input type="text" class="form-control" name="question" id="question" placeholder="Enter Your Question">
                    </div>
                    <div class="form-group">
                        <label for="answer">Answer</label>
                        <input type="text" class="form-control" name="answer" id="answer" placeholder="Answer">
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</div>
@endsection
