@extends('Admin.adminMaster')
@section('content')
<div class="row">
    <!-- left column -->
    <div class="col ">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Update FaQ</h3>
            </div>
            <!-- /.card-header -->

            <!-- form start -->
            <form method="post" action="{{route('admin.faq.update')}}">
                @csrf
                @method('put')
                <input type="hidden" name="faqId" value="{{$faq->id}}">
                <div class="card-body">
                    <div class="form-group">
                        <label for="question">Question</label>
                        <input type="text" class="form-control" name="question" id="question" value="{{$faq->question}}">
                    </div>
                    <div class="form-group">
                        <label for="answer">Answer</label>
                        <input type="text" class="form-control" name="answer" id="answer" value="{{$faq->answer}}">
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</div>
@endsection
