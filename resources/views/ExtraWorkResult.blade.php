@extends('layouts.app')

@section('content')
@section('sidebar')
@extends('layouts.sidebar')
@endsection
<div class="page-heading">
    <h3> إضافات على عمل المراقب</h3>
</div>

<div class="form-group">
    <label for="exampleFormControlInput1"></label>
</div>

<div class="page-content">
    <section class="row">
        <div class="col-12">
            <div class="row">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"> عرض النتيجة</h5>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="leaderData" role="tabpanel" aria-labelledby="leader_data">
                                <p class='my-2'>
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0" dir="rtl">
                                        <thead>
                                            <tr>
                                                <th>قادة لم يدخلوا روابط المنسحبين</th>
                                                <th>سكرين شوت التواصل معهم</th>
                                                <th>القادة الذين تم التواصل معهم للاطمئنان</th>
                                                <th>سكرين شوت التواصل معهم</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($extraWork as $item)
                                        <tr>
                                            <td>
                                                @if(($item->leaders_didnt_enter_withdraw[0]['leaders_didnt_enter_withdraw_id'])!= '')
                                                @php
                                                     $length = sizeof($item->leaders_didnt_enter_withdraw[0]['leaders_didnt_enter_withdraw_id']);
                                                @endphp
                                                @for ($i=0; $i< $length; $i++)
                                                @if ($item->leaders_didnt_enter_withdraw[0]['leaders_didnt_enter_withdraw_id'][$i]!= '')
                                                    @php
                                                    $id= $item->leaders_didnt_enter_withdraw[0]['leaders_didnt_enter_withdraw_id'][$i];
                                                    $name =DB::table('leaders')->where('id', $id)->latest()->first()->name;
                                                    @endphp
                                                {{$name}}<br>
                                                @endif
                                                @endfor
                                                @else
                                                {{"ادخل جميع القادة روابط المنسحبين "}}
                                                @endif

                                            </td>
                                            @if(($item->leaders_didnt_enter_withdraw[0]['leaders_didnt_enter_withdraw_img'])!=='null')
                                            <td>
                                                <img src="..\assets\images\{{$item->leaders_didnt_enter_withdraw[0]['leaders_didnt_enter_withdraw_img']}}" class="img-tumbnail" width="100" height="100">
                                            </td>
                                            @else
                                                <td> {{" لا يوجد سكرين شوت "}}</td>
                                             @endif

                                            <td>
                                                @if(($item->communicate_with_leaders[0]['communicate_with_leaders_id'])!= '')
                                                @php
                                                    $length = sizeof($item->communicate_with_leaders[0]['communicate_with_leaders_id']);
                                                @endphp
                                                @for ($i=0; $i< $length; $i++)
                                                @if ($item->communicate_with_leaders[0]['communicate_with_leaders_id'][$i]!= '')
                                                    @php
                                                    $id=$item->communicate_with_leaders[0]['communicate_with_leaders_id'][$i];
                                                    $name =DB::table('leaders')->where('id', $id)->latest()->first()->name;
                                                    @endphp
                                                    {{$name}}<br>
                                                @endif
                                                @endfor
                                                @else
                                                {{"لم يتم التواصل مع أي قائد للاطمئنان"}}
                                                @endif
                                            </td>
                                            @if(($item->communicate_with_leaders[0]['communicate_with_leaders_img'])!=='null')
                                            <td>
                                                <img src="..\assets\images\{{$item->communicate_with_leaders[0]['communicate_with_leaders_img']}}" class="img-tumbnail" width="100" height="100">
                                            </td>
                                            @else
                                                <td> {{" لا يوجد سكرين شوت "}}</td>
                                             @endif
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"> عرض الأنشطة</h5>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="leaderData" role="tabpanel" aria-labelledby="leader_data">
                                <p class='my-2'>
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0" dir="rtl">
                                        <thead>
                                            <tr>
                                                <th> رقم النشاط</th>
                                                <th>شرح فكرة النشاط</th>
                                                <th>سكرين شوت </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($extraWork as $item)
                                        @for ($i=0; $i<$length; $i++)
                                        @if(($item->activities[0]['activity_description'][$i])!= 'null')
                                        <tr>
                                            <td>
                                                @if ($i==0)
                                                الأول
                                                @endif
                                                @if ($i==1)
                                                الثاني
                                                @endif
                                                @if ($i==2)
                                                الثالث
                                                @endif
                                            </td>
                                            <td>
                                                {{$item->activities[0]['activity_description'][$i]}}
                                            </td>
                                            <td>
                                                @if ($i==0)
                                                @if(($item->activities[0]['activity_img_0'])!=='null')
                                                <img src="..\assets\images\{{$item->activities[0]['activity_img_0']}}" class="img-tumbnail" width="100" height="100">
                                                @else
                                                 {{''}}
                                                @endif
                                                @endif

                                                @if ($i==1)
                                                @if(($item->activities[0]['activity_img_1'])!=='null')
                                                <img src="..\assets\images\{{$item->activities[0]['activity_img_1']}}" class="img-tumbnail" width="100" height="100">
                                                @else
                                                    {{''}}
                                                @endif
                                                @endif

                                                @if ($i==2)
                                                @if(($item->activities[0]['activity_img_2'])!=='null')
                                                <img src="..\assets\images\{{$item->activities[0]['activity_img_2']}}" class="img-tumbnail" width="100" height="100">
                                                @else
                                                    {{''}}
                                                @endif
                                                @endif
                                            </td>
                                        </tr>
                                        @endif
                                        @endfor
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </section>
</div>
{{-- <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/vendors/apexcharts/apexcharts.js"></script>
<script src="assets/js/pages/dashboard.js"></script>

<script src="assets/js/main.js"></script> --}}
@endsection
