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
            <div class="col-sm-4">
                <h6>القائد</h6>
                <div class="input-group mb-3" >
                    <label class="input-group-text" for="inputGroupSelect01" style="border-radius:0rem .25rem .25rem 0rem"> اختر اسم القائد</label>
                    <select class="form-select" id="leader_id" style="border-radius:.25rem 0rem 0rem .25rem" onchange="newrecord()" dir="rtl"  >
                        <option class="dropdown-item" ></option>
                        @foreach ($leader as $item )
                        <option class="dropdown-item" value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>
    <form id="leader_duty"  class="form_hidden" action="{{route('store')}}" enctype="multipart/form-data" method="POST">
        @csrf
        <input type="hidden" name="leader_id" id="leader_id_set">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-4">
                    <h6>عدد الفريق</h6>
                    <input class="form-control" id="current_team_members" name="current_team_members" type="number" min="0" max="30" placeholder="ادخل عدد أعضاء الفريق الحالي" required>
                </div>
                <div class="col-sm-4">
                    <h6>معدل الفريق</h6>
                    <input class="form-control" name="team_final_mark" type="number" min="0" max="100" step="0.01" placeholder="ادخل معدل الفريق" required>
                </div>
            </div>
        </div>
        <div class="row match-height">
            <div class="col-md-6 col-12" dir="rtl">
                <div class="card">
                    <div class="card-header" style="background:#dce7f1;">
                        <h4 class="card-title">منشور المتابعة الإسبوعي</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="form form-horizontal">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="radio" id="follow_up" name="follow_up_post" value="published" onclick="follow_up_disable()"> نشر
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" id="follow_up" name="follow_up_post" value="not_published" onclick="follow_up_disable()"> لم ينشر
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" id="follow_up" name="follow_up_post" value="published_on_behalf" onclick="follow_up_disable()"> تم بالنيابة
                                        </div>
                                        <div class="col-md-4">
                                        <br> <input type="radio" id="follow_up" name="follow_up_post" value="missing_standards" onclick="follow_up_enable()"> غير مستوف المعايير
                                        </div>
                                        <div class="col-md-8 form-group">
                                        <br><br>
                                            <div>
                                                <input type="checkbox" id="follow_up_standard_1" name="follow_up_standard_1" value="time" disabled> نشره الأحد في وقت مناسب<br>
                                                <input type="checkbox" id="follow_up_standard_2" name="follow_up_standard_2" value="tag" disabled> تاغ للسفراء<br>
                                                <input type="checkbox" id="follow_up_standard_3" name="follow_up_standard_3" value="week_num" disabled> ذكر رقم الإسبوع والشهر<br>
                                                <input type="checkbox" id="follow_up_standard_4" name="follow_up_standard_4" value="quote" disabled> عبارة تشجيعية<br>
                                                <input type="checkbox" id="follow_up_standard_5" name="follow_up_standard_5" value="image" disabled> صورة مناسبة<br>
                                                <input type="checkbox" id="follow_up_standard_6" name="follow_up_standard_6" value="question" disabled> سؤال واضح عن الإنجاز<br>
                                                <input type="checkbox" id="follow_up_standard_7" name="follow_up_standard_7" value="thesis" disabled> التذكير بوضع الأطروحة في السفراء<br>
                                                <input type="checkbox" id="follow_up_standard_8" name="follow_up_standard_8" value="Ambassador_comment" disabled> تعليق منفصل لكل سفير<br>
                                                <input type="checkbox" id="follow_up_standard_9" name="follow_up_standard_9" value="news_comment" disabled> تعليق الاخبار<br>
                                                <input type="checkbox" id="follow_up_standard_10" name="follow_up_standard_10" value="lite_week" disabled> أسبوع مخفف<br>
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
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="form form-horizontal">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="radio"  name="support_post" value="published" onclick="support_disable()"> نشر
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" name="support_post" value="not_published" onclick="support_disable()"> لم ينشر
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" name="support_post" value="published_on_behalf" onclick="support_disable()"> تم بالنيابة
                                        </div>
                                        <div class="col-md-4">
                                        <br> <input type="radio" name="support_post" value="missing_standards" onclick="support_enable()"> غير مستوف المعايير
                                        </div>
                                        <div class="col-md-8 form-group"> <br><br>
                                            <div>
                                                <input type="checkbox" id="support_standard_1" name="support_standard_1" value="time" disabled> نشره في وقت مناسب (الخميس)<br>
                                                <input type="checkbox" id="support_standard_2" name="support_standard_2" value="tag" disabled> تاغ للسفراء<br>
                                                <input type="checkbox" id="support_standard_3" name="support_standard_3" value="question" disabled> السؤال عن كيفية الدعم<br>
                                                <input type="checkbox" id="support_standard_4" name="support_standard_4" value="image" disabled> صورة مناسبة<br>
                                                <input type="checkbox" id="support_standard_5" name="support_standard_5" value="voting_method" disabled> ذكر طريقة التصويت<br>
                                                <input type="checkbox" id="support_standard_6" name="support_standard_6" value="re-mention" disabled> إعادة المنشن يوم الجمعة<br>
                                                <input type="checkbox" id="support_standard_7" name="support_standard_7" value="support_options" disabled> ذكر خيارات الدعم <br>
                                                <input type="checkbox" id="support_standard_8" name="support_standard_8" value="lite_week" disabled> أسبوع مخفف <br>
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
                        <p id="error_msg" style="color: red"></p>
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
                                            <input type="radio" class="news_leader" name="news_leader" value="published" > نشر
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" class="news_leader" name="news_leader" value="not_published"> لم ينشر
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" class="news_leader" name="news_leader" value="missing_standards"> غير مستوف المعايير
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form form-horizontal" id="discussion_select" style="display: none">
                                <div class="form-body">
                                    <div class="row">
                                        <h5> دورة النقاش المهنجي</h5>
                                        <div class="col-md-4">
                                            <input type="radio" class="news_discussion" name="news_discussion" value="published"> نشر
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" class="news_discussion" name="news_discussion" value="not_published"> لم ينشر
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" class="news_discussion" name="news_discussion" value="missing_standards"> غير مستوف المعايير
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form form-horizontal" id="writing_select" style="display: none">
                                <div class="form-body">
                                    <div class="row">
                                        <h5>دورة كتابة الأطروحة</h5>
                                        <div class="col-md-4">
                                            <input type="radio" class="news_writing" name="news_writing" value="published" > نشر
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" class="news_writing" name="news_writing" value="not_published" > لم ينشر
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" class="news_writing" name="news_writing" value="missing_standards" > غير مستوف المعايير
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
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="form form-horizontal">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <input type="radio"  name="leader_reading" value="read"> قرأ<br>
                                            <input type="radio"  name="leader_reading" value="didn't_read"> لم يقرأ<br>
                                            <input type="radio"  name="leader_reading" value="un_completed"> لم يكمل الورد<br>
                                            <input type="radio"  name="leader_reading" value="missing_leaders_voting"> قرأ ولم يصوت في مجموعة الرقابة<br>
                                            <input type="radio"  name="leader_reading" value="late_voting"> تم التصويت بعد إغلاق الموقع<br>
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
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="form form-horizontal">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="radio" name="elementary_mark" value="published" onclick="elementary_disable()"> نشر
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" name="elementary_mark" value="not_published" onclick="elementary_disable()"> لم ينشر
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" name="elementary_mark" value="published_on_behalf" onclick="elementary_disable()"> تم بالنيابة
                                        </div>
                                        <div class="col-md-4">
                                        <br> <input type="radio" name="elementary_mark" value="missing_standards" onclick="elementary_enable()"> غير مستوف المعايير
                                        </div>
                                        <div class="col-md-8 form-group"> <br><br>
                                            <div>
                                                <input type="checkbox" id="elementary_standard_1" name="elementary_standard_1" value="time" disabled> نشره في وقت مناسب<br>
                                                <input type="checkbox" id="elementary_standard_2" name="elementary_standard_2" value="tag" disabled> تاغ للسفراء<br>
                                                <input type="checkbox" id="elementary_standard_3" name="elementary_standard_3" value="shortage" disabled> ذكر النقص للسفراء<br>
                                                <input type="checkbox" id="elementary_standard_4" name="elementary_standard_4" value="image" disabled> صورة من الموقع<br>
                                                <input type="checkbox" id="elementary_standard_5" name="elementary_standard_5" value="lite_week" disabled> أسبوع مخفف<br>
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
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="form form-horizontal">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="radio" name="final_mark" value="published"> نشر <br> <br>
                                            <input type="radio" name="final_mark" value="not_published"> لم ينشر <br> <br>
                                            <input type="radio" name="final_mark" value="published_on_behalf"> تم بالنيابة <br> <br>
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
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="form form-horizontal">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <input type="radio" name="audit_final_mark" value="done" onclick="image_upload_enable()"> تم
                                        </div>
                                        <div class="col-md-3">
                                            <input type="radio" name="audit_final_mark" value="not_done" onclick="image_upload_disable()">  لم يتم
                                        </div>
                                        <div class="col-md-6">
                                            <input type="radio" name="audit_final_mark" value="off_audit" onclick="image_upload_disable()">  لم يكن التدقيق لهذا القائد هذا الإسبوع
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
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="form form-horizontal">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <input type="radio" name="withdrawn_ambassadors" value="done" onclick="withdrawn_number_enable()"> تم الإدخال  <br> <br>
                                            <input type="radio" name="withdrawn_ambassadors" value="not_done" onclick="withdrawn_number_enable()">  لم يتم الإدخال  <br> <br>
                                            <input type="radio" name="withdrawn_ambassadors" value="no_withdrawn" onclick="withdrawn_number_disable()">  لا يوجد لديه منسحبين <br> <br>
                                        </div>
                                        <div class="col-md-8 form-group"> <br>
                                            <div>
                                                <label>عدد المنسحبين</label>
                                                <input type="number" id="withdrawn_number" name="num_defective" min="1" max="30" class="form-control radius" disabled required>
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
                <button id="save" type="submit"  onclick="news_Check()" class="btn btn-outline-success btn-block btn-lg rounded-pill" {{--style="width:575px"--}}>حفظ</button>
            </div>
        </div>
    </form>
</div>
@endsection
