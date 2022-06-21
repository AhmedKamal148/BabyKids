@extends('Admin.adminMaster')
@section('content')


<div class="row">
    <div class="col">
        <table class="table table-striped">
    <thead>
        <th class="thead-dark">Question</th>
        <th> Answer</th>
        <th>Update</th>
        <th>Delete</th>
    </thead>
    <tbody>
    @foreach($faqs as $faq)
        <tr>
            <td>{{$faq->question}}</td>
            <td>{{$faq->answer}}</td>
            <td>
            <a class="btn btn-dark" href="{{route('admin.faq.edit',[$faq->id])}}">Edit</a>
            </td>
            <td>
                <form action="{{route('admin.faq.delete')}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="faq_id" value="{{$faq->id}}">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>

            </td>
        </tr>
    @endforeach

    </tbody>

</table>
        <hr>
        <a class="btn btn-dark " href="{{route('admin.faq.create')}}">Create Faq</a>
    </div>
</div>

@endsection
