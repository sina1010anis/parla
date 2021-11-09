@if ($errors->any())
    <div class="view-err position-fixed p-3">
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
    <div class="alert alert-success text-center f-13">
        {{session('success')}}
    </div>
@endif

@if (session('warning'))
    <div class="alert alert-danger text-center f-13">
         {{session('warning')}}
    </div>
@endif

<span class="msg-sm py-1 px-4 f-12 rounded-pill shadow" style="z-index:40"></span>
