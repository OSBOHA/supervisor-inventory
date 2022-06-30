@extends('layouts.app')
@extends('layouts.sidebar')

@section('content')

<div class="container" style="padding-top:2%"> 
 <div class="page-heading email-application">
     <div class="page-title">
        <div class="row">
            <div class="col-10 col-md-3 order-md-1 order-last" style="direction: rtl">
                <h3> عرض رسائل المراقب </h3> 
                <br>
            </div>
        </div>
     </div>
    
    
    <section class="section content-area-wrapper">
        <div class="sidebar-left">
            <div class="sidebar">
                <div class="sidebar-content email-app-sidebar d-flex">
                    <!-- sidebar close icon -->
                    <span class="sidebar-close-icon">
                        <i class="bx bx-x"></i>
                    </span>
                    <!-- sidebar close icon -->
                    <div class="email-app-menu">
                        <div class="form-group form-group-compose">
                            
                            <button type="button" class="btn btn-secondary btn-block my-4 compose-btn">
                                <i class="bx bx-plus"></i>
                                ارسال
                            </button>
                        </div>
                        <div class="sidebar-menu-list ps">
                            
                            <div class="list-group list-group-messages">
                                <a href="#" class="list-group-item pt-0 active" id="inbox-menu">
                                    <div class="fonticon-wrap d-inline me-3">

                                        <svg class="bi" width="1.5em" height="1.5em" fill="currentColor">
                                            <use xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#envelope"  />
                                        </svg>
                                        </i>
                                    </div>
                                    <label><h6> الصندوق الوارد</h6> </label>
                                    
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="fonticon-wrap d-inline me-3">

                                        <svg class="bi" width="1.5em" height="1.5em" fill="currentColor">
                                            <use
                                                xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#archive" />
                                        </svg>
                                    </div>
                                    <label><h6>رسالة مرسلة</h6> </label>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="fonticon-wrap d-inline me-3">
                                        <svg class="bi" width="1.5em" height="1.5em" fill="currentColor">
                                            <use
                                                xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#envelope" />
                                        </svg>
                                    </div>
                                    <label><h6> رسائل الاعتراض</h6> </label>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
        <div class="content-right">
            <div class="content-overlay"></div>
            <div class="content-wrapper">
                <div class="content-header row"></div>
                <div class="content-body">
                    <!-- email app overlay -->
                    <div class="app-content-overlay"></div>
                    <div class="email-app-area">
                        <!-- Email list Area -->
                        <div class="email-app-list-wrapper">
                            <div class="email-app-list">
                                <div class="email-action">
                                    <div
                                        class="action-right d-flex flex-grow-1 align-items-center justify-content-around">
                                        <!-- search bar  -->
                                        <div class="email-fixed-search flex-grow-1">
                                            <div class="sidebar-toggle d-block d-lg-none">
                                                <i class="bx bx-menu"></i>
                                            </div>

                                            <div class="form-group position-relative  mb-0 has-icon-left">
                                                <input type="text" class="form-control" placeholder="ابحث عن البريد الالكتروني..">
                                                <div class="form-control-icon">
                                                    <svg class="bi" width="1.5em" height="1.5em" fill="currentColor">
                                                        <use xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#search" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- pagination and page count -->
                                        <span class="d-none d-sm-block"> </span>
                                        <button class="btn btn-icon email-pagination-prev d-none d-sm-block">
                                            <svg class="bi" width="1.5em" height="1.5em" fill="currentColor">
                                                <use
                                                    xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#chevron-left" />
                                            </svg>
                                        </button>
                                        <button class="btn btn-icon email-pagination-next d-none d-sm-block">
                                            <svg class="bi" width="1.5em" height="1.5em" fill="currentColor">
                                                <use
                                                    xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#chevron-right" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <br>
                           
                             @php
                              $i = 0;
                             @endphp
                             
                                @foreach($data as $item)
                                 <div class="email-user-list list-group ps ">
                                    <ul class="users-list-wrapper media-list">
                                        <li class="media mail-read">
                                            <div class="user-action">
                                                <div class="checkbox-con me-3">
                                                    <div class="checkbox checkbox-shadow checkbox-sm">
                                                        <input type="checkbox" id="checkboxsmall1"
                                                            class='form-check-input'>
                                                        <label for="checkboxsmall1"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="pr-50">
                                                <div class="avatar">
                                                    <img src="assets/images/faces/{{++$i}}.jpg" alt="avtar img holder">
                                                </div>
                                            </div>
                                            
                                            <div class="media-body">

                                            <div hidden> {{$name = DB::table('users')->select('name')->where('id', '=', $item->sender_id)->get()}}</div>
                                            @foreach ($name as $namm)
                                               <div class="user-details">
                                                    <div class="mail-items">
                                                        <h6 class="list-group-item-text text-truncate">
                                                            
                                                        {{ $namm->name}} </h6>
                                                    </div>
                                               </div>
                                            
                                              
                                                <div class="mail-message">  
                                                <a href="{{ url('/chatbox') }}" >
                                                    <p class="list-group-item-text truncate mb-0">{{$item->body}} </p>
                                                    
                                                   <div class="mail-meta-item">
                                                        <span class="float-right">
                                                            <span class="bullet bullet-success bullet-sm"></span>
                                                        </span>
                                                    </div>
                                                </a>   
                                                </div>
                                            </div>
                                            <div>
                                                <span class="float-left">
                                                    <dt class="mail-date">{{date('d-m',strtotime($item->created_at)) }}</dt>
                                                </span>
                                            </div>
                                            @endforeach 
                                        </li>
                                    </ul>
                                
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
</div>
@endsection




 