@if ($errors->any())
    <div class="view-err position-absolute p-3">
        <ul dir="rtl">
            @foreach ($errors->all() as $error)
                <li class="f-13 color-b-100 my-3 text-end">
                    {{$error}}
                </li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif

@if (session('warning'))
    <div class="alert alert-danger">
        یک خطا رخ داد.کد خطا: {{session('warning')}}
    </div>
@endif
