@extends('layouts.app')

@extends('layouts.sidebar')

@section('content')

    <div class="container">
        <div id="main-content" >
            <div class="page-heading">
                    {{-- <header class="mb-3">
                        <a href="#" class="burger-btn d-block d-xl-none">
                            <i class="bi bi-justify fs-3"></i>
                            <div class="row">
                                <div class="col-12 col-md-6 order-md-1 order-last">
                                    <h3> الاضافات على عمل المراقب </h3>
                                </div>
                            </div>
                        </a>
                    </header> --}}
                    <div class="page-heading page-title row">
                        <div class="col-10">
                            <h3>  الإضافات على عمل المراقب : </h3><br>
                        </div>
                        <div class="alert alert-light-danger color-danger">
                            <i class="bi bi-exclamation-circle"></i>
                        في هذا الجزء ستقوم بوضع أي عمل إضافي تقوم به كمراقب <b>( اختياري* )</b> عدا سكرين المنسحبين <b>( إجباري )</b>
                        </div>
                    </div>
            </div>
        </div>
        <form class="" action="{{route('extra_work_sotre')}}" enctype="multipart/form-data" method="POST">
          @csrf
            <section id="basic-modals">
                <div class="row">
                    <div class="col-10">
                        <div class="card">
                            <div class="card-header" style="background:#dce7f1;">
                                <h3 class="card-title">التواصل مع القائد الذي لم يدخل روابط  المنسحبين</h3>
                                <p id="leaders_didnt_enter_withdraw_msg" style="color: red"></p>
                            </div>
                            <div class="card-content">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>اختر اسم القادة الذين لم يدخلوا روابط المنسحبين</label><br>
                                    @foreach ($leader as $item )
                                        <input type="checkbox" class="leaders_didnt_enter_withdraw_id" name="leaders_didnt_enter_withdraw_id[]" value="{{$item->id}}">{{$item->name}} <br>
                                    @endforeach <br>
                                    <label>  ارفق صورة للتواصل مع أحد القادة </label><br>
                                    <input type="file" id="leaders_didnt_enter_withdraw_img" name="leaders_didnt_enter_withdraw_img" class="form-control radius" disabled><br>
                                </div>
                            </div></div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                    <div class="row">
                        <div class="col-10">
                            <div class="card">
                                <div class="card-header" style="background:#dce7f1;">
                                    <h3 class="card-title">التواصل مع باقي القادة للإطمئنان</h3>
                                    <p id="communicate_with_leaders_msg" style="color:red"></p>
                                </div>
                                <div class="card-content">
                                <div class="card-body">
                                    {{-- <div class="col-md-12 mb-3">
                                        <label><h3>التواصل مع باقي القادة للإطمئنان</h3> </label>
                                    </div><br> --}}
                                    <div class="form-group">
                                        <label> هل تم التواصل مع باقي القادة؟</label><br>
                                        <input type="radio" name="Leader_communicat_status"  value="تم" onclick="Leader_communicat_status_done()">  تم <br>
                                        <input type="radio" name="Leader_communicat_status"  value="لم يتم" onclick="Leader_communicat_status_not_done()">  لم يتم <br>
                                        <label>اختر اسم القادة الذين تم التواصل معهم</label><br>
                                        @foreach ($leader as $item )
                                            <input type="checkbox" class="communicate_with_leaders_id" name="communicate_with_leaders_id[]" value="{{$item->id}}" disabled>{{$item->name}} <br>
                                        @endforeach<br>
                                        <label> ارفق صورة للتواصل مع أحد القادة </label><br>
                                        <input type="file" class="form-control radius" name="communicate_with_leaders_img" id='communicate_with_leaders_img' disabled><br><br>
                                    </div>
                                </div></div>
                            </div>
                        </div>
                    </div>
            </section>


            <div class="row">
                <div class="col-10">
                    <div class="card">
                        <div class="card-header" style="background:#dce7f1;">
                            <h3 class="card-title">الأنشطة</h3>
                            {{-- <p id="follow_up_msg" style="color: red"></p> --}}
                        </div>
                        <div class="card-content">
                            @for ($i = 1; $i < 4; $i++)
                                <div class="card-body" style="direction: rtl">
                                    @if ($i==1)
                                    <label style="align-content: center"><h4>اكتب شرح موجز للفكرة الأولى</h4></label>
                                    @endif
                                    @if ($i==2)
                                    <label style="align-content: center"><h4> اكتب شرح موجز للفكرة الثانية</h4></label>
                                    @endif
                                    @if ($i==3)
                                    <label style="align-content: center"><h4>اكتب شرح موجز للفكرة الثالثة</h4></label>
                                    @endif
                                    <div class="form-group with-title mb-3" style="direction: rtl">
                                        <textarea class="form-control" name="activity_description[]" id="exampleFormControlTextarea1[]" rows="5"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>  ارفق صورة للنشاط الخاص بك </label><br>
                                        <input type="file" id="activity_img" name="activity_img_{{$i}}" class="form-control radius">
                                    </div><hr><hr>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                    <button id="extra_save" type="submit" onclick="extra_work_check()" class="btn btn-success rounded-pill">حفظ  التغييرات </button>
            </div> <br><br>
        </form>
    </div>

    {{-- <footer>
        <div class="footer clearfix mb-0 text-muted float-start">
            <p> Developed by <a href="http://osboha180.com">Osboha 180 </a>  Programers  &copy; </p>
        </div>
    </footer> --}}

@endsection


