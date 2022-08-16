@extends('layouts.app')

@extends('layouts.sidebar')

@section('content')
   {{-- @if (count($errors)> 0)
                <div class="container" style="padding-top:2%">
                    <div class="row">
                        <div class=" col-md-6 alert alert-danger" style="justify-content: center;">
                        <ul>
                            @foreach ($errors->all() as $item)
                            <li>
                            {{$item}}
                            </li>
                            @endforeach
                        </ul>
                        </div>
                    </div>
                </div>
            @endif --}}
    <div class="container">
        <div class="row">
            <div class="col-12 ">
                <div class="page-heading page-title">
                    <h3>  الإضافات على عمل المراقب : </h3><br>
                </div>
                <div class="alert alert-light-danger color-danger">
                    <i class="bi bi-exclamation-circle"></i>
                    في هذا الجزء ستقوم بوضع أي عمل إضافي تقوم به كمراقب <b>( اختياري* )</b> عدا سكرين المنسحبين <b>( إجباري )</b>
                </div>
            </div>
        </div><br>

        <form class="" action="{{route('extra-work-sotre')}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header" style="background:#dce7f1;">
                                <h3 class="card-title">التواصل مع القائد الذي لم يدخل روابط  المنسحبين</h3>
                                <p id="leaders_didnt_enter_withdraw_msg" style="color: red"></p>
                            </div>
                            <div class="card-content">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>اختر اسم القادة الذين لم يدخلوا روابط المنسحبين</label><br>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-group">
                                            <select class="choices form-select multiple-remove leaders_didnt_enter_withdraw_id" name="leaders_didnt_enter_withdraw_id[]" multiple="multiple" >
                                                <optgroup>
                                                    @foreach ($leader as $item )
                                                    <option  value="{{$item->id}}"> {{$item->name}} </option>
                                                    @endforeach <br>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <label>  ارفق صورة للتواصل مع أحد القادة </label><br>
                                    <input type="file" id="leaders_didnt_enter_withdraw_img" name="leaders_didnt_enter_withdraw_img" class="form-control radius" disabled><br>
                                </div>
                            </div></div>
                        </div>
                    </div>
            </div>

            <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header" style="background:#dce7f1;">
                                    <h3 class="card-title">التواصل مع باقي القادة للإطمئنان</h3>
                                    <p id="communicate_with_leaders_msg" style="color:red"></p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <label>اختر اسم القادة الذين تم التواصل معهم</label><br>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-group">
                                                <select class="choices form-select multiple-remove communicate_with_leaders_id" name="communicate_with_leaders_id[]" multiple="multiple" >
                                                    <optgroup>
                                                        @foreach ($leader as $item )
                                                        <option value="{{$item->id}}"> {{$item->name}} </option>
                                                        @endforeach <br>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <label> ارفق صورة للتواصل مع أحد القادة </label><br>
                                        <input type="file" class="form-control radius" name="communicate_with_leaders_img" id='communicate_with_leaders_img' disabled><br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header" style="background:#dce7f1;">
                            <h3 class="card-title">الأنشطة</h3>
                            {{-- <p id="follow_up_msg" style="color: red"></p> --}}
                        </div>
                        <div class="card-content">
                            @for ($i = 0; $i < 3; $i++)
                                <div class="card-body" style="direction: rtl">
                                    @if ($i==0)
                                    <label style="align-content: center"><h4>اكتب شرح موجز للفكرة الأولى</h4></label>
                                    @endif
                                    @if ($i==1)
                                    <label style="align-content: center"><h4> اكتب شرح موجز للفكرة الثانية</h4></label>
                                    @endif
                                    @if ($i==2)
                                    <label style="align-content: center"><h4>اكتب شرح موجز للفكرة الثالثة</h4></label>
                                    @endif
                                    <div class="form-group with-title mb-3" style="direction: rtl">
                                        <textarea class="form-control activity_description" name="activity_description[]" id="activity_description_{{$i}}" rows="5"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>  ارفق صورة للنشاط الخاص بك </label><br>
                                        <input type="file" id="activity_img" name="activity_img_{{$i}}" class="form-control radius" disabled>
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


