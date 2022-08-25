@extends('layouts.app')

@section('content')
@section('sidebar')
@extends('layouts.sidebar')
@endsection
<div class="page-heading">
    <h3> عرض القادة</h3>
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

                        @if($leaders->isNotEmpty())
                        <div class="table-responsive">
                            <table class="table mb-0 table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>اسم القائد </th>
                                        <th> فريق المتابعة</th>
                                        <th>حالة القائد </th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $i=0;
                                    @endphp
                                    @foreach($leaders as $leader)

                                    <tr>
                                        <td class="text-bold-500"> {{++ $i}}</td>

                                        <td>{{$leader->name}}</td>
                                        <td class="text-bold-500">{{$leader->team}}</td>
                                        <td>{{$leader->type}}</td>
                                        <td>   
                                            <div class="card-body text-center">
                                                <div class="buttons">                                
                                                    <a href="{{route('edit_leader', ['id' => $leader->id])}}" class="btn btn-secondary">تعديل</a>
                                                    <a href="{{route('delete_leader', ['id' => $leader->id])}}" class="btn btn-danger">حذف</a>
                                                </div>
                                            </div>
                                        </td>


                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @else
                        <h3 class="text-center">لا يوجد لديك قادة</h3>
                        @endif

                        <div class="card-body text-center">
                            <div class="buttons">
                                <a href="{{route('leaders.create')}}" class="btn btn-outline-dark">إضافة قائد</a>
                        
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </section>
</div>
@endsection