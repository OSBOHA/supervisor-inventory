<div id="app">
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                <div class="d-flex justify-content-between">
                    <div class="logo">
                        <a href="#"><img src="assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-item ">
                        <a href="#" class='sidebar-link'>
                            <h5><i class="bi bi-person-circle"></i></h5>
                            <span>
                                <h5> {{auth()->user()->name}} </h5>
                            </span>
                        </a>
                    </li>


                    <li class="sidebar-item  ">
                        <a href="/" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>الرئيســـية </span>
                        </a>

                    </li>
                    <li class="sidebar-item has-sub ">
                        <a href="{{route('list_all_messages')}}" class='sidebar-link'>
                            <i class="bi bi-person-plus-fill"></i>
                            <span>طلبات الانضمام </span>
                        </a>
                        <ul class="submenu">
                            <li class="submenu-item ">
                                <a href="{{route('news.create')}}">المراقبين</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{route('news.all')}}">الموجهيين </a>
                            </li>
                        </ul>
      

                    </li>
                    <li class="sidebar-item  ">
                        <a href="{{url('/')}}" class='sidebar-link'>
                            <i class="bi bi-people-fill"></i>
                            <span>كل الموجهين</span>
                        </a>
                    </li>
                    <li class="sidebar-item  ">
                        <a href="{{route('supervisors.all_supervisors')}}" class='sidebar-link'>
                            <i class="bi bi-people-fill"></i>
                            <span>كل المراقبين</span>
                        </a>

                    </li>

                    <li class="sidebar-item ">
                        <a href="{{route('objections.all_objections')}}" class='sidebar-link'>
                        <i class="bi bi-chat-square-text-fill"></i>
                            <span>صندوق الاعتراضات</span>
                        </a>
                    </li>

                    <li class="sidebar-item  ">
                        <a href="{{route('list_all_messages')}}" class='sidebar-link'>
                            <i class="bi bi-chat-dots"></i>
                            <span>صندوق الرسائل</span>
                        </a>
                    </li>

                    <li class="sidebar-item has-sub">
                        <a class='sidebar-link'>
                            <i class="bi bi-newspaper"></i>
                            <span>الأخبار</span>
                        </a>
                        <ul class="submenu">
                            <li class="submenu-item ">
                                <a href="{{route('news.create')}}">إضافة خبر</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{route('news.all')}}">أخبار الأسبوع</a>
                            </li>

                            <li class="submenu-item ">
                                <a href="{{route('news.all')}}">كل الأخبار</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item  ">
                        <a href="{{url('/')}}" class='sidebar-link'>
                            <i class="bi bi-arrow-repeat"></i>
                            <span>نقل القادة</span>
                        </a>
                    </li>


                </ul>

            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>
</div>