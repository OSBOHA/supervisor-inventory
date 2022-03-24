@extends('layouts.app')

@section('content')

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
               <div class="sidebar-header">
                   <div class="d-flex justify-content-between">
                        <div class="logo">
                            <h2 class="">Osboha180</h2>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                  </div>  
             </div> 
             <div class="sidebar-menu">
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
             </div>
           </div>

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    
<div class="container">

<table class="table">
  <thead>
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
  </thead>

  <tbody>
      @php
        $i = 0;
      @endphp
        @foreach ($data as $item)
        <tr>
            <th scope="row">{{++$i}}</th>
            <td>{{ $item['supervisor_id'] }}</td>
            <td>{{ $item['week_id'] }}</td>
            <td>{{ $item['didnt_publish_news'] }}</td>
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
       </div>
           </body>

