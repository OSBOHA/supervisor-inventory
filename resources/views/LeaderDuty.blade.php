@extends('layouts.app')
@extends('layouts.sidebar')

@section('page_title')
<div class="row" style="direction: rtl">
    <div  class="col-12 col-md-6 order-md-1 order-first" style="direction: rtl">
        <h3>الجرد الأسبوعي</h3>
        <p class="text-subtitle text-muted">لطفاً نقوم بإدخال الجرد الأسبوعي لكل قائد على حدا</p>
    </div>
    <div class="col-12 col-md-6 order-md-2 order-last" style="direction:ltr;" >
        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-start">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Leader Duty</li>
                <li class="breadcrumb-item"><a href="index.html"> Dashboard</a></li>
            </ol>
        </nav>
    </div>
    <div class="w-100"></div>
    @if(session()->has('message'))
       <div class="alert alert-success " style="justify-content: center;">
        {{ session()->get('message') }}
       </div>
    @endif
</div>
@endsection

@section('content')
@if (count($errors)> 0)
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
@endif

<div id="basic-horizontal-layouts">
    <div class="card-body">
        <div class="row">
        <div class="row justify-content-sm-center" >
            <div class="alert col-sm-6 " id="leader_name_select" style="background:#dce7f1; text-align: center;">
                <h5>اختر القائد الذي تريد إدخال الجرد الإسبوعي له </h5>
            </div>
        </div>
            <div class="w-100"></div>
            <div class="col-sm-4">
                <h6>القائد</h6>
                <div class="input-group mb-3" >
                    <label class="input-group-text" for="inputGroupSelect01" style="border-radius:0rem .25rem .25rem 0rem"> اسم القائد</label>
                    <select class="form-select" id="leader_id" style="border-radius:.25rem 0rem 0rem .25rem" dir="rtl">
                        <option class="dropdown-item" value="empty">اختر اسم القائد</option>
                        @foreach ($leader as $item )
                        <option class="dropdown-item" value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>
    <form class="leader_duty_form" action="{{route('store')}}" enctype="multipart/form-data" method="POST" style="display: none">
        @csrf
        <input type="hidden" name="leader_id" id="leader_id_set">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-4">
                    <h6>عدد الفريق</h6>
                    <input class="form-control current_team_members" id="current_team_members" name="current_team_members" type="number" min="1" max="30" placeholder="ادخل عدد أعضاء الفريق الحالي" required>
                </div>
                <div class="col-sm-4">
                    <h6>معدل الفريق</h6>
                    <input class="form-control team_final_mark" name="team_final_mark" type="number" min="0" max="100.00" step="0.01" placeholder="ادخل معدل الفريق" required>
                </div>
                <div class="w-100"></div>
                <div class="col-sm-4">
                    <p id="team_member_msg" style="color: red"></p>
                </div>
                <div class="col-sm-4">
                    <p id="team_mark_msg" style="color: red"></p>
                </div>
            </div>
        </div>
        <div class="row match-height">
            <div class="col-md-6 col-12" dir="rtl">
                <div class="card">
                    <div class="card-header" style="background:#dce7f1;">
                        <h4 class="card-title">منشور المتابعة الإسبوعي</h4>
                        <p id="follow_up_msg" style="color: red"></p>
                        <p id="follow_up_missing_standard_msg" style="color: red"></p>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="form form-horizontal">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="radio" class="follow_up" name="follow_up_post" value="تم النشر" onclick="follow_up_disable()"> نشر
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" class="follow_up" name="follow_up_post" value="لم يتم النشر" onclick="follow_up_disable()"> لم ينشر
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" class="follow_up" name="follow_up_post" value="تم بالنيابة" onclick="follow_up_disable()"> تم بالنيابة
                                        </div>
                                        <div class="col-md-4">
                                        <br> <input type="radio" class="follow_up_missing_standards follow_up" id="follow_up" name="follow_up_post" value="غير مستوف المعايير" onclick="follow_up_enable()"> غير مستوف المعايير
                                        </div>
                                        <div class="col-md-8 form-group">
                                        <br><br>
                                            <div>
                                                <input type="checkbox" class="follow_up_standard" id="follow_up_standard_1" name="follow_up_standard_1" value="وقت النشر" disabled> نشره الأحد في وقت مناسب<br>
                                                <input type="checkbox" class="follow_up_standard" id="follow_up_standard_2" name="follow_up_standard_2" value="تاغ" disabled> تاغ للسفراء<br>
                                                <input type="checkbox" class="follow_up_standard" id="follow_up_standard_3" name="follow_up_standard_3" value="رقم الأسبوع والشهر" disabled> ذكر رقم الإسبوع والشهر<br>
                                                <input type="checkbox" class="follow_up_standard" id="follow_up_standard_4" name="follow_up_standard_4" value="عبارة تشجيعية" disabled> عبارة تشجيعية<br>
                                                <input type="checkbox" class="follow_up_standard" id="follow_up_standard_5" name="follow_up_standard_5" value="الصورة" disabled> صورة مناسبة<br>
                                                <input type="checkbox" class="follow_up_standard" id="follow_up_standard_6" name="follow_up_standard_6" value="سؤال عن الإنجاز" disabled> سؤال واضح عن الإنجاز<br>
                                                <input type="checkbox" class="follow_up_standard" id="follow_up_standard_7" name="follow_up_standard_7" value="وضع الأطروحة في مجموعة السفراء" disabled> التذكير بوضع الأطروحة في السفراء<br>
                                                <input type="checkbox" class="follow_up_standard" id="follow_up_standard_8" name="follow_up_standard_8" value="تعليق لكل سفير" disabled> تعليق منفصل لكل سفير<br>
                                                <input type="checkbox" class="follow_up_standard" id="follow_up_standard_9" name="follow_up_standard_9" value="تعليق الأخبار" disabled> تعليق الاخبار<br>
                                                <input type="checkbox" class="follow_up_standard" id="follow_up_standard_10" name="follow_up_standard_10" value="أسبوع مخفف" disabled> أسبوع مخفف<br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12" dir="rtl">
                <div class="card" style="height: 426.219px;">
                    <div class="card-header" style="background:#dce7f1;">
                        <h4 class="card-title">الدعم الإعلامي</h4>
                        <p id="support_msg" style="color: red"></p>
                        <p id="support_missing_standard_msg" style="color: red"></p>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="form form-horizontal">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="radio" class="support_post" name="support_post" value="تم النشر" onclick="support_disable()"> نشر
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" class="support_post" name="support_post" value="لم يتم النشر" onclick="support_disable()"> لم ينشر
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" class="support_post" name="support_post" value="تم بالنيابة" onclick="support_disable()"> تم بالنيابة
                                        </div>
                                        <div class="col-md-4">
                                        <br> <input type="radio" class="support_missing_standards support_post" name="support_post" value="غير مستوف المعايير" onclick="support_enable()"> غير مستوف المعايير
                                        </div>
                                        <div class="col-md-8 form-group"> <br><br>
                                            <div>
                                                <input type="checkbox" class="support_standard" id="support_standard_1" name="support_standard_1" value="وقت النشر" disabled> نشره في وقت مناسب (الخميس)<br>
                                                <input type="checkbox" class="support_standard" id="support_standard_2" name="support_standard_2" value="التاغ" disabled> تاغ للسفراء<br>
                                                <input type="checkbox" class="support_standard" id="support_standard_3" name="support_standard_3" value="سؤال عن الدعم" disabled> السؤال عن كيفية الدعم<br>
                                                <input type="checkbox" class="support_standard" id="support_standard_4" name="support_standard_4" value="الصورة" disabled> صورة مناسبة<br>
                                                <input type="checkbox" class="support_standard" id="support_standard_5" name="support_standard_5" value="طريقة التصويت" disabled> ذكر طريقة التصويت<br>
                                                <input type="checkbox" class="support_standard" id="support_standard_6" name="support_standard_6" value="منشن يوم الجمعة" disabled> إعادة المنشن يوم الجمعة<br>
                                                <input type="checkbox" class="support_standard" id="support_standard_7" name="support_standard_7" value="خيارات الدعم" disabled> ذكر خيارات الدعم <br>
                                                <input type="checkbox" class="support_standard" id="support_standard_8" name="support_standard_8" value="أسبوع مخفف" disabled> أسبوع مخفف <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12" dir="rtl">
                <div class="card" style="height: 247.031px;">
                    <div class="card-header" style="background:#dce7f1;" >
                        <h4 class="card-title" >إيصال الأخبار</h4>
                        @if(count($news) > 1)
                        <p id="error_msg" style="color: red"></p>
                        @endif
                    </div>
                    @if(count($news) < 1)
                    <div class="form form-horizontal" style="padding-top: 30px">
                        <div class="form-body">
                            <div class="row">
                                <h5 style="text-align:center">لا يوجد أخبار لهذا الأسبوع</h5>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="card-content" >
                        <div class="card-body">
                            <div class="input-group mb-3" >
                                <label class="input-group-text" for="inputGroupSelect01" >أخبار الأسبوع</label>
                                <select class="form-select" id="newselect" onselect="newsSelect()" style="direction: rtl">
                                    <option value="empty" >اختر خبر الأسبوع من قائمة الأخبار</option>
                                    @foreach ($news as $item)
                                    @if ($item->title == 'leader')
                                        <option class="dropdown-item leader" id="leader" value="leader" style="text-align: right"><span
                                                  class="dropdown-item-emoji"> &nbsp; 👩‍💻 &nbsp;</span>
                                                    دورة القادة
                                        </option>
                                    @endif
                                    @if ($item->title == 'discussion')
                                        <option class="dropdown-item discussion" id="discussion" value="discussion" style="text-align: right" ><span
                                            class="dropdown-item-emoji">&nbsp; 👥 &nbsp;</span>
                                         النقاش المنهجي
                                        </option>
                                    @endif
                                    @if ($item->title == 'writing')
                                        <option class="dropdown-item writing" id="writing" value="writing" style="text-align: right"><span
                                            class="dropdown-item-emoji">&nbsp; 🖋 &nbsp; </span>
                                        دورة كتابة الأطروحة
                                        </option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>


                            <div class="form form-horizontal"  id="leader_select" style="display: none">
                                <div class="form-body">
                                    <div class="row">
                                        <h5>دورة القادة</h5>
                                        <div class="col-md-4">
                                            <input type="radio" class="news_leader" name="news_leader" value="تم النشر" > نشر
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" class="news_leader" name="news_leader" value="لم يتم النشر"> لم ينشر
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" class="news_leader" name="news_leader" value="غير مستوف المعايير"> غير مستوف المعايير
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form form-horizontal" id="discussion_select" style="display: none">
                                <div class="form-body">
                                    <div class="row">
                                        <h5> دورة النقاش المهنجي</h5>
                                        <div class="col-md-4">
                                            <input type="radio" class="news_discussion" name="news_discussion" value="تم النشر"> نشر
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" class="news_discussion" name="news_discussion" value="لم يتم النشر"> لم ينشر
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" class="news_discussion" name="news_discussion" value="غير مستوف المعايير"> غير مستوف المعايير
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form form-horizontal" id="writing_select" style="display: none">
                                <div class="form-body">
                                    <div class="row">
                                        <h5>دورة كتابة الأطروحة</h5>
                                        <div class="col-md-4">
                                            <input type="radio" class="news_writing" name="news_writing" value="تم النشر" > نشر
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" class="news_writing" name="news_writing" value="لم يتم النشر" > لم ينشر
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" class="news_writing" name="news_writing" value="غير مستوف المعايير" > غير مستوف المعايير
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-md-6 col-12" dir="rtl">
                <div class="card">
                    <div class="card-header" style="background:#dce7f1;">
                        <h4 class="card-title"> جرد قراءة القائد</h4>
                        <p id="leader_reading_msg" style="color: red"></p>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="form form-horizontal">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <input type="radio" class="leader_reading" name="leader_reading" value="قرأ"> قرأ<br>
                                            <input type="radio" class="leader_reading" name="leader_reading" value="لم يقرأ"> لم يقرأ<br>
                                            <input type="radio" class="leader_reading" name="leader_reading" value="لم يكمل الورد"> لم يكمل الورد<br>
                                            <input type="radio" class="leader_reading" name="leader_reading" value="لم يصوت في مجموعة الرقابة"> قرأ ولم يصوت في مجموعة الرقابة<br>
                                            <input type="radio" class="leader_reading" name="leader_reading" value="تأخر بالتصويت"> تم التصويت بعد إغلاق الموقع<br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12" dir="rtl">
                <div class="card">
                    <div class="card-header" style="background:#dce7f1;">
                        <h4 class="card-title">العلامات الأولية</h4>
                        <p id="elementary_mark_msg" style="color: red"></p>
                        <p id="elementary_missing_standard_msg" style="color: red"></p>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="form form-horizontal">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="radio" class="elementary_mark" name="elementary_mark" value="تم النشر" onclick="elementary_disable()"> نشر
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" class="elementary_mark" name="elementary_mark" value="لم يتم النشر" onclick="elementary_disable()"> لم ينشر
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" class="elementary_mark" name="elementary_mark" value="تم بالنيابة" onclick="elementary_disable()"> تم بالنيابة
                                        </div>
                                        <div class="col-md-4">
                                        <br> <input type="radio" class="elementary_missing_standards elementary_mark" name="elementary_mark" value="غير مستوف المعايير" onclick="elementary_enable()"> غير مستوف المعايير
                                        </div>
                                        <div class="col-md-8 form-group"> <br><br>
                                            <div>
                                                <input type="checkbox" class="elementary_standard" id="elementary_standard_1" name="elementary_standard_1" value="وقت النشر" disabled> نشره في وقت مناسب<br>
                                                <input type="checkbox" class="elementary_standard" id="elementary_standard_2" name="elementary_standard_2" value="التاغ" disabled> تاغ للسفراء<br>
                                                <input type="checkbox" class="elementary_standard" id="elementary_standard_3" name="elementary_standard_3" value="ذكر النقص للسفراء" disabled> ذكر النقص للسفراء<br>
                                                <input type="checkbox" class="elementary_standard" id="elementary_standard_4" name="elementary_standard_4" value="الصورة" disabled> صورة من الموقع<br>
                                                <input type="checkbox" class="elementary_standard" id="elementary_standard_5" name="elementary_standard_5" value="أسبوع مخفف" disabled> أسبوع مخفف<br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12" dir="rtl">
                <div class="card" style="height: 306.219px">
                    <div class="card-header" style="background:#dce7f1;">
                        <h4 class="card-title">العلامات النهائية</h4>
                        <p id="final_mark_msg" style="color: red"></p>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="form form-horizontal">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="radio" class="final_mark" name="final_mark" value="تم النشر"> نشر <br> <br>
                                            <input type="radio" class="final_mark" name="final_mark" value="لم يتم النشر"> لم ينشر <br> <br>
                                            <input type="radio" class="final_mark" name="final_mark" value="تم بالنيابة"> تم بالنيابة <br> <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12" dir="rtl">
                <div class="card">
                    <div class="card-header" style="background:#dce7f1;">
                        <h4 class="card-title" >تدقيق العلامات النهائية</h4>
                        <p id="audit_final_mark_msg" style="color: red"></p>
                        <p id="audit_final_mark_upload_pic_msg" style="color: red"></p>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="form form-horizontal">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <input type="radio" class="audit_final_mark_done audit_final_mark" name="audit_final_mark" value="تم التدقيق" onclick="image_upload_enable()"> تم
                                        </div>
                                        <div class="col-md-3">
                                            <input type="radio" class="audit_final_mark" name="audit_final_mark" value="لم يتم التدقيق" onclick="image_upload_disable()">  لم يتم
                                        </div>
                                        <div class="col-md-6">
                                            <input type="radio" class="audit_final_mark" name="audit_final_mark" value="لم يكن التدقيق لهذا القائد" onclick="image_upload_disable()">  لم يكن التدقيق لهذا القائد هذا الإسبوع
                                        </div>
                                        <div class="col-md-8 form-group"> <br>
                                            <div>
                                                <label>سكرين للتواصل مع القائد</label><br>
                                                <input type="file" id="leader_message_1" name="leader_message_1" class="form-control radius" disabled><br>
                                                <input type="file" id="leader_message_2" name="leader_message_2" class="form-control radius" disabled><br>
                                                <input type="file" id="leader_message_3" name="leader_message_3" class="form-control radius" disabled><br>

                                                <label>سكرين لرد القائد على رسالتك</label> <br>
                                                <input type="file" id="leader_reply_message" name="leader_reply_message" class="form-control radius" disabled>
                                                @error('file')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12" dir="rtl">
                <div class="card">
                    <div class="card-header" style="background:#dce7f1;" >
                        <h4 class="card-title">إدخال روابط المنسحبين</h4>
                        <p id="withdrawn_ambassadors_msg" style="color: red"></p>
                        <p id="withdrawn_number_required_msg" style="color: red"></p>
                        <p id="withdrawn_number_msg" style="color: red"></p>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="form form-horizontal">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <input type="radio" class="withdrawn_ambassadors_done withdrawn_ambassadors" name="withdrawn_ambassadors" value="تم الإدخال" onclick="withdrawn_number_enable()"> تم الإدخال  <br> <br>
                                            <input type="radio" class="withdrawn_ambassadors_not_done withdrawn_ambassadors" name="withdrawn_ambassadors" value="لم يتم الإدخال" onclick="withdrawn_number_enable()">  لم يتم الإدخال  <br> <br>
                                            <input type="radio" class="withdrawn_ambassadors" name="withdrawn_ambassadors" value="لا يوجد منسحبين" onclick="withdrawn_number_disable()">  لا يوجد لديه منسحبين <br> <br>
                                        </div>
                                        <div class="col-md-8 form-group"> <br>
                                            <div>
                                                <label>عدد المنسحبين</label>
                                                <input type="number" id="withdrawn_number" name="num_defective" min="1" max="30" class="form-control radius" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <button id="save" type="submit"  onclick="Check()" class="btn btn-outline-success btn-block btn-lg rounded-pill" {{--style="width:575px"--}}>حفظ</button>
            </div>
        </div>
    </form>
</div>
@endsection
