@extends('layouts.app')

@section('page_title')
<div class="row"style="direction: ltr"  >
    <div  class="col-12 col-md-6 order-md-2 order-first" style="direction: rtl">
        <h3>الجرد الأسبوعي</h3>
        <p class="text-subtitle text-muted">لطفاً نقوم بإدخال الجرد الأسبوعي لكل قائد على حدا</p>
    </div>
    <div class="col-12 col-md-6 order-md-1 order-last" >
        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Leader Duty</li>
            </ol>
        </nav>
    </div>
</div>
@endsection

@section('content')
 <section id="basic-horizontal-layouts">
    <div class="row match-height">
        <div class="col-md-6 col-12" style="direction: rtl">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">منشور المتابعة الإسبوعي</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="radio" name="Publish" id="Publish1" value="1"> نشر
                                    </div>
                                    <div class="col-md-4">
                                        <input type="radio" name="Publish" id="Publish1" value="1"> لم ينشر
                                    </div>
                                    <div class="col-md-4">
                                        <input type="radio" name="Publish" id="Publish1" value="1"> تم بالنيابة
                                    </div>
                                    <div class="col-md-4">
                                       <br> <input type="radio" name="Publish" id="Publish1" value="1"> غير مستوف المعايير
                                    </div>
                                    <div class="col-md-8 form-group">
                                      <br>  <div>
                                            <input type="checkbox" name="Publish_check" id="Publish_check1" value="p1"> نشره الأحد في وقت مناسب<br>
                                            <input type="checkbox" name="Publish_check" id="Publish_check2" value="p2"> تاغ للسفراء<br>
                                            <input type="checkbox" name="Publish_check" id="Publish_check3" value="p3"> ذكر رقم الإسبوع والشهر<br>
                                            <input type="checkbox" name="Publish_check" id="Publish_check4" value="p4"> عبارة تشجيعية<br>
                                            <input type="checkbox" name="Publish_check" id="Publish_check5" value="p5"> صورة مناسبة<br>
                                            <input type="checkbox" name="Publish_check" id="Publish_check6" value="p6"> سؤال واضح عن الإنجاز<br>
                                            <input type="checkbox" name="Publish_check" id="Publish_check7" value="p7"> التذكير بوضع الأطروحة في السفراء<br>
                                            <input type="checkbox" name="Publish_check" id="Publish_check8" value="p8"> تعليق منفصل لكل سفير<br>
                                            <input type="checkbox" name="Publish_check" id="Publish_check9" value="p9"> تعليق الاخبار<br>
                                            <input type="checkbox" name="Publish_check" id="Publish_check10" value="p10"> أسبوع مخفف<br>
                                        </div>
                                    </div>
                                    {{-- <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit"
                                            class="btn btn-primary me-1 mb-1">Save</button>
                                        <button type="reset"
                                            class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div> --}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12" style="direction: rtl">
            <div class="card" style="height: 426.219px ">
                <div class="card-header">
                    <h4 class="card-title">الدعم الإعلامي</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="radio" name="Support_Publish" id="Support_Publish1" value="1"> نشر
                                    </div>
                                    <div class="col-md-4">
                                        <input type="radio" name="Support_Publish" id="Support_Publish2" value="1"> لم ينشر
                                    </div>
                                    <div class="col-md-4">
                                        <input type="radio" name="Support_Publish" id="Support_Publish3" value="1"> تم بالنيابة
                                    </div>
                                    <div class="col-md-4">
                                       <br> <input type="radio" name="Support_Publish" id="Support_Publish4" value="1"> غير مستوف المعايير
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <br> <div >
                                            <input type="checkbox" name="Support_Publish_check" id="Support_Publish_check1" value="s1"> نشره في وقت مناسب (الخميس)<br>
                                            <input type="checkbox" name="Support_Publish_check" id="Support_Publish_check2" value="s2"> تاغ للسفراء<br>
                                            <input type="checkbox" name="Support_Publish_check" id="Support_Publish_check3" value="s3"> السؤال عن كيفية الدعم<br>
                                            <input type="checkbox" name="Support_Publish_check" id="Support_Publish_check4" value="s4"> صورة مناسبة<br>
                                            <input type="checkbox" name="Support_Publish_check" id="Support_Publish_check5" value="s5"> ذكر طريقة التصويت<br>
                                            <input type="checkbox" name="Support_Publish_check" id="Support_Publish_check6" value="s6"> إعادة المنشن يوم الجمعة<br>
                                            <input type="checkbox" name="Support_Publish_check" id="Support_Publish_check7" value="s7"> ذكر خيارات الدعم <br>
                                            <input type="checkbox" name="Support_Publish_check" id="Support_Publish_check8" value="s8"> أسبوع مخفف <br>
                                        </div>
                                    </div>
                                    {{-- <div class="col-12 d-flex justify-content-end">
                                        <button type="submit"
                                            class="btn btn-primary me-1 mb-1">Submit</button>
                                        <button type="reset"
                                            class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div> --}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12" style="direction: rtl">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">إيصال الأخبار</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">أخبار الأسبوع</label>
                            <select class="form-select" id="inputGroupSelect01">
                                <option class="dropdown-item" style="text-align: right"><span
                                                class="dropdown-item-emoji">👩‍💻</span>
                                            دورة القادة
                                </option>
                                <option class="dropdown-item" style="text-align: right" ><span
                                                class="dropdown-item-emoji">👥</span>
                                            النقاش المنهجي
                                </option>
                                <option class="dropdown-item" style="text-align: right"><span
                                                class="dropdown-item-emoji">🖋</span>
                                            دورة كتابة الأطروحة
                                </option>
                            </select>
                        </div>
                        <form class="form form-horizontal">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                       <br> <input type="radio" name="Support_Publish" id="Support_Publish1" value="1"> نشر
                                    </div>
                                    <div class="col-md-4">
                                        <br> <input type="radio" name="Support_Publish" id="Support_Publish2" value="1"> لم ينشر
                                    </div>
                                    <div class="col-md-4">
                                        <br> <input type="radio" name="Support_Publish" id="Support_Publish4" value="1"> غير مستوف المعايير
                                    </div>
                                    {{-- <div class="col-12 d-flex justify-content-end">
                                        <button type="submit"
                                            class="btn btn-primary me-1 mb-1">Submit</button>
                                        <button type="reset"
                                            class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div> --}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12" style="direction: rtl">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> جرد قراءة القائد</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <input type="radio" value="1" name="leader_read" id="leader_read1"> قرأ<br>
                                        <input type="radio" value="0" name="leader_read" id="leader_read2"> لم يقرأ<br>
                                        <input type="radio" value="2" name="leader_read" id="leader_read3"> لم يكمل الورد<br>
                                        <input type="radio" value="-3" name="leader_read" id="leader_read4"> قرأ ولم يصوت في مجموعة الرقابة<br>
                                        <input type="radio" value="-4" name="leader_read" id="leader_read5"> تم التصويت بعد إغلاق الموقع<br>
                                    </div>
                                    {{-- <div class="col-12 d-flex justify-content-end">
                                        <button type="submit"
                                            class="btn btn-primary me-1 mb-1">Submit</button>
                                        <button type="reset"
                                            class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div> --}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12" style="direction: rtl">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">العلامات الأولية</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="radio" name="Publish" id="Publish1" value="1"> نشر
                                    </div>
                                    <div class="col-md-4">
                                        <input type="radio" name="Publish" id="Publish1" value="1"> لم ينشر
                                    </div>
                                    <div class="col-md-4">
                                        <input type="radio" name="Publish" id="Publish1" value="1"> تم بالنيابة
                                    </div>
                                    <div class="col-md-4">
                                       <br> <input type="radio" name="Publish" id="Publish1" value="1"> غير مستوف المعايير
                                    </div>
                                    <div class="col-md-8 form-group"> <br>
                                        <div>
                                            <input type="checkbox" name="First_Degree_Publish_check" value="f1" id="First_Degree_check1"> نشره في وقت مناسب<br>
                                            <input type="checkbox" name="First_Degree_Publish_check" value="f2" id="First_Degree_check2"> تاغ للسفراء<br>
                                            <input type="checkbox" name="First_Degree_Publish_check" value="f3" id="First_Degree_check3"> ذكر النقص للسفراء<br>
                                            <input type="checkbox" name="First_Degree_Publish_check" value="f4" id="First_Degree_check4"> صورة من الموقع<br>
                                            <input type="checkbox" name="First_Degree_Publish_check" value="f5" id="First_Degree_check5"> أسبوع مخفف<br>
                                      </div>
                                    </div>
                                    {{-- <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit"
                                            class="btn btn-primary me-1 mb-1">Save</button>
                                        <button type="reset"
                                            class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div> --}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12" style="direction: rtl">
            <div class="card" style="height: 306.219px">
                <div class="card-header">
                    <h4 class="card-title">العلامات النهائية</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="radio" name="Publish" id="Publish1" value="1"> نشر <br> <br>
                                        <input type="radio" name="Publish" id="Publish1" value="1"> لم ينشر <br> <br>
                                        <input type="radio" name="Publish" id="Publish1" value="1"> تم بالنيابة <br> <br>
                                        {{-- <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit"
                                                class="btn btn-primary me-1 mb-1">Save</button>
                                            <button type="reset"
                                                class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12" style="direction: rtl">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">تدقيق العلامات النهائية</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="radio" name="Publish" id="Publish1" value="1"> تم
                                    </div>
                                    <div class="col-md-3">
                                        <input type="radio" name="Publish" id="Publish1" value="1">  لم يتم
                                    </div>
                                    <div class="col-md-6">
                                        <input type="radio" name="Publish" id="Publish1" value="1">  لم يكن التدقيق لهذا القائد هذا الإسبوع
                                    </div>
                                    <div class="col-md-8 form-group"> <br>
                                        <div>
                                            <label>سكرين للتواصل مع القائد</label><br>
                                            <input type="file" id="aduit_mark_msg" class="form-control radius"><br>
                                            <input type="file" id="aduit_mark_msg_2" class="form-control radius"><br>
                                            <input type="file" id="aduit_mark_msg_3" class="form-control radius"><br>

                                            <label>سكرين لرد القائد على رسالتك</label> <br>
                                            <input type="file" id="aduit_mark_response" class="form-control radius">
                                        </div>
                                    </div>
                                    {{-- <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit"
                                            class="btn btn-primary me-1 mb-1">Save</button>
                                        <button type="reset"
                                            class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div> --}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12" style="direction: rtl">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">إدخال روابط المنسحبين</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <input type="radio" name="Publish" id="Publish1" value="1"> تم الإدخال  <br> <br>
                                        <input type="radio" name="Publish" id="Publish1" value="1">  لم يتم الإدخال  <br> <br>
                                        <input type="radio" name="Publish" id="Publish1" value="1">  لا يوجد لديه منسحبين <br> <br>
                                    </div>
                                    <div class="col-md-8 form-group"> <br>
                                        <div>
                                            <label>عدد المنسحبين</label>
                                            <input type="number" name="num_defective" id="num_defective" class="form-control radius">
                                      </div>
                                    </div>
                                    {{-- <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit"
                                            class="btn btn-primary me-1 mb-1">Save</button>
                                        <button type="reset"
                                            class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div> --}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>
@endsection
