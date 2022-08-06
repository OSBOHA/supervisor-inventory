@extends('layouts.app')

@section('content')
@section('sidebar')
@extends('layouts.sidebar')
@endsection
<div class="page-heading">
    <h3> الملاحظات المكررة</h3>
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
                        <h5 class="card-title"> عرض نتيجة الملاحظات المكررة</h5>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            
                                <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">رقم المراقب</th>
                                 <th scope="col">رقم الاسبوع </th>
                                 <th scope="col">قادة لا يوصلون الاخبار</th>
                                 <th scope="col">قادة يتأخرون بالمنشورات </th>
                                 <th scope="col">قادة يتاخرون بالعلامات الاولية </th>
                                 <th scope="col"> قادة تم بالانابة عنهم </th>
                                 <th scope="col"> قادة الاسبوع المخفف</th> 
                                </tr>
                           

                            <tbody>
                               @php
                                 $i = 0;
                               @endphp
                               @foreach ($data as $item)
                                   <tr>
                                     <th scope="row">{{++$i}}</th>
                                     <td>{{ $item['supervisor_id']}}</td>
                                     <td>{{ $item['week_id'] }}</td>
                                     <td>{{ $item['didnt_publish_news']}}</td>
                                     <td>{{ $item['post_late'] }}</td>
                                     <td>{{ $item['elementary_marks_late'] }}</td>
                                     <td>{{ $item['deputized_for'] }}</td>
                                     <td>{{ $item['light_week'] }}</td>
                                  </tr>
                              @endforeach 
                            </tbody>

                        </table>
                       


                        
                    </div>
                </div>

            </div>
    </section>
</div>
<script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/vendors/apexcharts/apexcharts.js"></script>
<script src="assets/js/pages/dashboard.js"></script>

<script src="assets/js/main.js"></script>
@endsection




       

     

