@extends('admin.index')

@section('admin')
    <div class="col-12 col-md-6 offset-md-3 bg-white p-4 rounded-3 shadow">
        <p class="f-16 font-S color-b-700 text-end">هزینه ارسال رایگان</p>
        <form action="{{route('admin.edit.free.send')}}" method="post">
            @csrf
            <input id="task-text" type="number" style="height: 40px" value="{{$free_send->price}}" name="price" class="form-control f-12 color-b-600">
            <button type="submit" class="btn btn-lg btn-danger f-13 ms-3 mt-3">
                ویرایش
            </button>
        </form>
    </div>
@endsection
