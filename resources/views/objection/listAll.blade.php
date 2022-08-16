@extends('layouts.app')

@section('content')
@section('sidebar')
@extends('layouts.sidebar')
@endsection
<div class="page-heading">
    <h3>  الاعتراضات</h3>
</div>

<div class="form-group">
    <label for="exampleFormControlInput1"></label>
</div>




<div class="page-content">
    <section class="row">
        <div class="col-12">
            <div class="row">

                <div class="card">
                   
                    <div class="card-body">                      
                                                   
                        <table class="table table-striped mb-0" dir="rtl">
                                        <thead>
                                            <tr>
                                                <th >#</th>                                        
                                                <th >عنوان الاعتراض </th>
                                                <th >وصف الاعتراض</th>
                                                <th >اسم المراجع </th>
                                                <th > حالته </th>                
                                                <th > ملاحظات المراجع </th>                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                             $i=0;
                                             @endphp
                                        @foreach($Objection as $item)
                                        
                                            <tr>
                                            <td class="text-bold-500">  {{++ $i}}</td>
                                            
                                            <td>{{$item->title}}</td>
                                                <td class="text-bold-500">{{$item->body}}</td>
                                                @if($item->reviewer_id==0)
                                                    <td>{{'لا يوجد مراجع'}}</td>
                                                @else
                                                    <td>{{$item->reviewer->name}}</td>
                                                @endif
                                                <td>{{$item->status}}</td>
                                                @if($item->reviewer_note!='')
                                                    <td>{{$item->reviewer_note}}</td>
                                                @else
                                                    <td>{{'لا يوجد ملاحظات '}}</td>
                                                @endif
                                                <td>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-sm">
                                                                <a class="btn btn-success" href ="{{route ('editObjection',$item ->id,$item->reviewer_note)}}"><i class="fas fa-edit"></i>edit</a>
                                                            </div>                           
                                                        
                                                        </div>
                                                    </div>    
                                                </td>
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




       

     

