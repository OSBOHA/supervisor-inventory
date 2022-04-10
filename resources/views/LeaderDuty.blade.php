@extends('layouts.app')

@section('page_title')
<div class="container" style="padding-top:2%">
    <div class="row">
        <div class="card-body">
        @if (count($errors)> 0)
        <ul>
            @foreach ($errors->all() as $item)
             <li>
              {{$item}}
             </li>
            @endforeach
        </ul>
        @endif
        </div>
      </div>
</div>
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
</div>
@endsection

@section('content')
 <div id="basic-horizontal-layouts">
    <form action="{{route('store')}}" enctype="multipart/form-data" method="POST">
        @csrf

        <div class="card-body">
            <div class="row">
                <div class="col-sm-4">
                    <h6>عدد الفريق</h6>
                    <input class="form-control" name="current_team_members" type="number" placeholder="ادخل عدد أعضاء الفريق الحالي">
                </div>
                <div class="col-sm-4">
                    <h6>معدل الفريق</h6>
                    <input class="form-control" name="team_final_mark" type="number" placeholder="ادخل معدل الفريق">
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
                                            <input type="radio" name="follow_up_post" value="published"> نشر
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" name="follow_up_post" value="not_published" > لم ينشر
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" name="follow_up_post" value="published_on_behalf"> تم بالنيابة
                                        </div>
                                        <div class="col-md-4">
                                        <br> <input type="radio" name="follow_up_post" value="missing_standards"> غير مستوف المعايير
                                        </div>
                                        <div class="col-md-8 form-group">
                                        <br><br>
                                            <div>
                                                <input type="checkbox" name="follow_up_standard_1" value="time"> نشره الأحد في وقت مناسب<br>
                                                <input type="checkbox" name="follow_up_standard_2" value="tag"> تاغ للسفراء<br>
                                                <input type="checkbox" name="follow_up_standard_3" value="week_num"> ذكر رقم الإسبوع والشهر<br>
                                                <input type="checkbox" name="follow_up_standard_4" value="quote"> عبارة تشجيعية<br>
                                                <input type="checkbox" name="follow_up_standard_5" value="image"> صورة مناسبة<br>
                                                <input type="checkbox" name="follow_up_standard_6" value="question"> سؤال واضح عن الإنجاز<br>
                                                <input type="checkbox" name="follow_up_standard_7" value="thesis"> التذكير بوضع الأطروحة في السفراء<br>
                                                <input type="checkbox" name="follow_up_standard_8" value="Ambassador_comment"> تعليق منفصل لكل سفير<br>
                                                <input type="checkbox" name="follow_up_standard_9" value="news_comment"> تعليق الاخبار<br>
                                                <input type="checkbox" name="follow_up_standard_10" value="lite_week"> أسبوع مخفف<br>
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
                                            <input type="radio" name="support_post" value="published"> نشر
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" name="support_post" value="not_published"> لم ينشر
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" name="support_post" value="published_on_behalf"> تم بالنيابة
                                        </div>
                                        <div class="col-md-4">
                                        <br> <input type="radio" name="support_post" value="missing_standards"> غير مستوف المعايير
                                        </div>
                                        <div class="col-md-8 form-group"> <br><br>
                                            <div>
                                                <input type="checkbox" name="support_standard_1" value="time"> نشره في وقت مناسب (الخميس)<br>
                                                <input type="checkbox" name="support_standard_2" value="tag"> تاغ للسفراء<br>
                                                <input type="checkbox" name="support_standard_3" value="question"> السؤال عن كيفية الدعم<br>
                                                <input type="checkbox" name="support_standard_4" value="image"> صورة مناسبة<br>
                                                <input type="checkbox" name="support_standard_5" value="voting_method"> ذكر طريقة التصويت<br>
                                                <input type="checkbox" name="support_standard_6" value="re-mention"> إعادة المنشن يوم الجمعة<br>
                                                <input type="checkbox" name="support_standard_7" value="support_options"> ذكر خيارات الدعم <br>
                                                <input type="checkbox" name="support_standard_8" value="lite_week"> أسبوع مخفف <br>
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
                    </div>
                    <div class="card-content" >
                        <div class="card-body">
                            <div class="input-group mb-3" >
                                <label class="input-group-text" for="inputGroupSelect01" >أخبار الأسبوع</label>
                                <select class="form-select" id="inputGroupSelect01" style="direction: rtl; ">
                                    <option class="dropdown-item" style="text-align: right"><span
                                                    class="dropdown-item-emoji"> &nbsp; 👩‍💻 &nbsp;</span>
                                                دورة القادة
                                    </option>
                                    <option class="dropdown-item" style="text-align: right" ><span
                                                    class="dropdown-item-emoji">&nbsp; 👥 &nbsp;</span>
                                                النقاش المنهجي
                                    </option>
                                    <option class="dropdown-item" style="text-align: right"><span
                                                    class="dropdown-item-emoji">&nbsp; 🖋 &nbsp; </span>
                                                دورة كتابة الأطروحة
                                    </option>
                                </select>
                            </div>
                            <div class="form form-horizontal">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                        <br> <input type="radio" name="news" value="published"> نشر
                                        </div>
                                        <div class="col-md-4">
                                            <br> <input type="radio" name="news" value="not_published"> لم ينشر
                                        </div>
                                        <div class="col-md-4">
                                            <br> <input type="radio" name="news" value="missing_standards"> غير مستوف المعايير
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
                                            <input type="radio" name="elementary_mark" value="published" > نشر
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" name="elementary_mark" value="not_published"> لم ينشر
                                        </div>
                                        <div class="col-md-4">
                                            <input type="radio" name="elementary_mark" value="published_on_behalf"> تم بالنيابة
                                        </div>
                                        <div class="col-md-4">
                                        <br> <input type="radio" name="elementary_mark" value="missing_standards"> غير مستوف المعايير
                                        </div>
                                        <div class="col-md-8 form-group"> <br><br>
                                            <div>
                                                <input type="checkbox" name="elementary_standard_1" value="time"> نشره في وقت مناسب<br>
                                                <input type="checkbox" name="elementary_standard_2" value="tag"> تاغ للسفراء<br>
                                                <input type="checkbox" name="elementary_standard_3" value="shortage"> ذكر النقص للسفراء<br>
                                                <input type="checkbox" name="elementary_standard_4" value="image"> صورة من الموقع<br>
                                                <input type="checkbox" name="elementary_standard_5" value="lite_week"> أسبوع مخفف<br>
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
                                            <input type="radio" name="audit_final_mark" value="done"> تم
                                        </div>
                                        <div class="col-md-3">
                                            <input type="radio" name="audit_final_mark" value="not_done">  لم يتم
                                        </div>
                                        <div class="col-md-6">
                                            <input type="radio" name="audit_final_mark" value="off_audit">  لم يكن التدقيق لهذا القائد هذا الإسبوع
                                        </div>
                                        <div class="col-md-8 form-group"> <br>
                                            <div>
                                                <label>سكرين للتواصل مع القائد</label><br>
                                                <input type="file" name="leader_image_1" class="form-control radius"><br>
                                                <input type="file" name="leader_image_2" class="form-control radius"><br>
                                                <input type="file" name="leader_image_3" class="form-control radius"><br>

                                                <label>سكرين لرد القائد على رسالتك</label> <br>
                                                <input type="file" name="leader_reply_image" class="form-control radius">
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
                                            <input type="radio" name="withdrawn_ambassadors" value="done"> تم الإدخال  <br> <br>
                                            <input type="radio" name="withdrawn_ambassadors" value="not_done">  لم يتم الإدخال  <br> <br>
                                            <input type="radio" name="withdrawn_ambassadors" value="no_withdrawn">  لا يوجد لديه منسحبين <br> <br>
                                        </div>
                                        <div class="col-md-8 form-group"> <br>
                                            <div>
                                                <label>عدد المنسحبين</label>
                                                <input type="number" name="num_defective" class="form-control radius">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <button type="submit"  class="btn btn-success rounded-pill" style="width:575px">حفظ</button>
            </div>
        </div>
    </form>
</div>
@endsection
