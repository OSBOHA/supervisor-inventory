<div id="app">
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                <div class="d-flex justify-content-between">
                    <div class="logo">
                        <a href="#"><img src="assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                    </div>
                    <div class="toggler">
                        <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <h5><i class="bi bi-person-circle"></i></h5>
                            <span>
                                <h5> Super Test </h5>
                            </span>
                            <ul class="submenu ">
                                <div class="submenu-item">
                                    <a href="#" class="submenu-item">
                                        <i class="bi bi-envelope-fill"></i>
                                        <span>استفسارات الموجه</span>

                                </div>


                            </ul>

                    </li>


                    <li class="sidebar-item  ">
                        <a href="/" class='sidebar-link'>
                            <i class="bi bi-person-lines-fill"></i>
                            <span>الرئيســـية </span>
                        </a>

                    </li>

                    <li class="sidebar-item ">
                        <a href="{{route('leaderdutyCreate')}}" class='sidebar-link'>
                            <i class="bi bi-pencil-square"></i>
                            <span>الجرد لأسبوعي</span>
                        </a>
                    </li>

                    <li class="sidebar-item  ">
                        <a href="{{route('showInventoryResult')}}" class='sidebar-link'>
                            <i class="bi bi-receipt-cutoff"></i>
                            <span>عرض نتيجة الجرد</span>
                        </a>

                    </li>
                    <li class="sidebar-item  ">
                        <a href="{{ route('createNotes') }}" class='sidebar-link'>
                            <i class="bi bi-receipt-cutoff"></i>
                            <span>ملاحظـات مكررة</span>
                        </a>
                    </li>

                    <li class="sidebar-item ">
                        <a href="form-layout.html" class='sidebar-link'>
                            <i class="bi bi-exclamation-circle-fill"></i>
                            <span>صندوق اعتراضاتك</span>
                        </a>
                    </li>

                    <li class="sidebar-item  ">
                        <a href="{{route('list-all-messages')}}" class='sidebar-link'>
                            <i class="bi bi-chat-dots"></i>
                            <span>صندوق الرسائل</span>
                        </a>

                    </li>

                    <li class="sidebar-item  ">
                        <a href="{{url('/')}}" class='sidebar-link'>
                            <i class="bi bi-receipt-cutoff"></i>
                            <span>الاضافات على عمل المراقب</span>
                        </a>
                    </li>


                </ul>

            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>
</div>
