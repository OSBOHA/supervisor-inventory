@extends('layouts.app')

@section('content')
@section('sidebar')
@extends('layouts.sidebar')
@endsection
<div class="page-heading">
    <h3> الاعتراضات</h3>
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

                        @if($objections->isNotEmpty())
                        <div class="table-responsive">
                            <table class="table mb-0 table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>عنوان الاعتراض </th>
                                        <th>وصف الاعتراض</th>
                                        <th>اسم المراجع </th>
                                        <th> حالته </th>
                                        <th> ملاحظات المراجع </th>
                                        @if($objections->contains('status', '0'))
                                        <th> </th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $i=0;
                                    @endphp
                                    @foreach($objections as $objection)

                                    <tr>
                                        <td class="text-bold-500"> {{++ $i}}</td>

                                        <td>{{$objection->title}}</td>
                                        <td class="text-bold-500">{{$objection->body}}</td>
                                        @if($objection->reviewer_id==0)
                                        <td>{{'لا يوجد مراجع'}}</td>
                                        @else
                                        <td>{{$objection->reviewer->name}}</td>
                                        @endif
                                        <td>{{$objection->status}}</td>
                                        @if($objection->reviewer_note!='')
                                        <td>{{$objection->reviewer_note}}</td>
                                        @else
                                        <td>{{'لا يوجد ملاحظات '}}</td>
                                        @endif

                                        @if($objection->status ==0)
                                        <td>   
                                            <div class="card-body text-center">
                                                <div class="buttons">                                
                                                    <a href="{{route('edit_objection' , ['id' => $objection->id])}}" class="btn btn-success">رد</a>
                                                </div>
                                            </div>
                                        </td>
                                        @else
                                        <td></td>
                                        @endif


                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @else
                        <h3 class="text-center">لا يوجد اعتراضات</h3>
                        @endif
                    </div>
                </div>

            </div>
    </section>
</div>
@endsection