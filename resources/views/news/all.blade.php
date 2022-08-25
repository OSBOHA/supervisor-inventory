@extends('layouts.app')

@section('content')
    @if (auth()->user()->hasRole('advisor'))
        @section('sidebar')
            @extends('layouts.AdvisorSidebar')
        @endsection
    @else
        @section('sidebar')
            @extends('layouts.sidebar')
        @endsection
    @endif
<div class="page-heading">
    <h3> الأخبار</h3>
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

                        @if($news->isNotEmpty())
                        <div class="table-responsive">
                            <table class="table mb-0 table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>عنوان الخبر </th>
                                        <th> الأسبوع </th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $i=0;
                                    @endphp
                                    @foreach($news as $n)

                                    <tr>
                                        <td class="text-bold-500"> {{++ $i}}</td>

                                        <td>{{$n->title}}</td>
                                        <td class="text-bold-500">{{$n->week->title}}</td>
                                        @if($n->week_id != $currentWeek->id)
                                        <td>
                                            <div class="card-body text-center">
                                                <div class="buttons">
                                                    <a href="{{route('news.edit' , ['id' => $n->id])}}" class="btn btn-success">تعديل</a>
                                                    <a href="{{route('news.delete', ['id' => $n->id])}}" class="btn btn-danger">حذف</a>
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