@extends('layouts.app')
<style>
    table.dataTable td{
        padding: 15px 8px;
    }
    .fontawesome-icons .the-icon svg {
        font-size: 24px;
    }
    .form-select{
        direction: ltr;
    }
</style>
<link rel="stylesheet" href="{{asset('assets/vendors/jquery-datatables/jquery.dataTables.bootstrap5.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendors/fontawesome/all.min.css')}}">

            
@section('content')
    

<div class="page-heading">
    <h3>{{$title}} </h3>
</div>

<div class="page-content">
    <section class="row">
        <div class="col-12">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-responsive" id="table1">
                    <thead>
                        <tr>
                            <th>الاسم</th>
                            <th>الايميل</th>
                            <th>اسم الفريق</th>
                            <th>الموجه الحالي</th>
                            <th>عدد القادة </th>
                            <th>الحالة </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($supervisors->isNotEmpty())
                            @foreach($supervisors as $supervisor)
                        <tr>
                            <td><a href="#">{{$supervisor->user->name}}</a></td>
                            <td>{{$supervisor->user->email}}</td>
                            <td>{{$supervisor->team}}</td>
                            @if($supervisor->current_advisor)
                                <td>{{$supervisor->current_advisor_info->user->name}}</td>
                            @else
                            <td>لا يوجد</td>
                            @endif
                            <td>{{$supervisor->leaders_count}}</td>
                            <td>
                                @if($supervisor->current_advisor)
                                <span class="badge bg-success">Active</span>
                                @else
                                <span class="badge bg-danger">Inactive</span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                    @endif
                </div>
                </div>

            </div>
    </section>
</div>
    <script src="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    
<script src="{{asset('assets/vendors/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendors/jquery-datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/vendors/jquery-datatables/custom.jquery.dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendors/fontawesome/all.min.js')}}"></script>
<script>
    // Jquery Datatable
    let jquery_datatable = $("#table1").DataTable()
</script>

    <script src="{{asset('assets/js/mazer.js')}}"></script>
@endsection