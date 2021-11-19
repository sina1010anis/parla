<header class="d-flex p-2 flex-wrap justify-content-center bg-white py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center ms-1 mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <img src="{{url('image/logo/'.$logo_footer->src)}}" style="width: 40px;" alt="">
    </a>

    <ul class="nav nav-pills">
        <li>
            <button @click="view_page_support_admin" type="button" class="btn position-relative">
                <i class="bi bi-envelope f-18"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                {{$support_admin->whereView_admin(0)->whereStatus(0)->count()}}
                <span class="visually-hidden">unread messages</span></span>
            </button>
        </li>
    </ul>
</header>
@include('admin.include.support.support')
