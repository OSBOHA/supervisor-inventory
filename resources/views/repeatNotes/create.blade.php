@extends('layouts.app')
@extends('layouts.sidebar')
@section('page_title')

<div class="container" style="padding-top:2%">
  <div class="row">       
       <div class="card-body">
            @if (count($errors)> 0)       
                @foreach ($errors->all() as $item)
                    <li class="alert alert-light-danger color-danger">
                    {{$item}}
                    </li>
                @endforeach        
            @endif
        </div>
   </div>
</div>
<div class="row text-end">
    <div  class="col-12 col-md-6 order-md-1 order-first">
        <h3 class="text-end">الجرد الأسبوعي</h3>
        <p class="text-subtitle text-muted">لطفاً نقوم بإدخال الجرد الأسبوعي لكل قائد على حدا</p>
    </div>
    <div class="col-12 col-md-6 order-md-2 order-last" style="direction:ltr;" >
        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-start">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Repeated Notes</li>
                <li class="breadcrumb-item"><a href="{{route('notes.index')}}">Show Notes</a></li>
            </ol>
        </nav>
    </div>
</div>
@endsection

@section('content')  
 <div id="basic-horizontal-layouts">
    <form action="{{route('notes.store')}}" enctype="multipart/form-data" method="POST">
        @csrf

        <div class="card-body">
            <div class="row">
                <div class="col-sm-4">
                    <h6> اضافة قائد</h6>
                    <fieldset class="form-group">
                        <select class="form-select" id="basicSelect">
                            <option value="Ahmed">Ahmed</option>
                            <option value="Amjade">Amjade</option>
                            <option value="Ali">Ali</option>
                        </select>
                    </fieldset>
                </div>

                <div class="col-sm-4">    
                    <h6>  أختر البنـد</h6>                             
                    <fieldset class="form-group">
                        <select class="form-select" id="basicSelect">
                            <option value="repeated-notes">ملاحظات متكررة</option>
                            <option value="">البنود الاساسية</option>
                            <option value="">اضافت علي عمل المراقب</option>
                        </select>
                    </fieldset>
                </div>
            </div>
        </div>
   
    <div class="row match-height">  
        <div class="col-md-6 col-12">                       
          <div class="card">
            <div class="card-header" style="background:#dce7f1;">
                <h4 class="card-title text-center">  قادة لا يوصلون  الأخبار </h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div class="form form-horizontal">
                        <div class="form-body">
                            <div class="row">               
                                <div class="col-md-8 form-group">

                                    @foreach ($Leaders as $item)
                                       <input type="checkbox" name="didnt_publish_news[]" value="{{$item->id}}">
                                      <label for="">{{$item->name}}</label> <br>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>

<div class="col-md-6 col-12"> 
   <div class="card">
    <div class="card-header" style="background:#dce7f1;">
        <h4 class="card-title text-center">  قادة يتاخرون بالمنشورات</h4>
    </div>
        <div class="card-content">
            <div class="card-body">
                <div class="form form-horizontal">
                    <div class="form-body">
                        <div class="row">                
                            <div class="col-md-8 form-group">

                                @foreach ($Leaders as $item)
                                  <input type="checkbox" name="post_late[]" value="{{$item->id}}">
                                  <label for="">{{$item->name}}</label> <br>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </div>
</div>
<div class="col-md-6 col-12"> 
        <div class="card">
            <div class="card-header" style="background:#dce7f1;">
                <h4 class="card-title text-center">  قادة يتأخرون  بالعلامات الأولية</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div class="form form-horizontal">
                        <div class="form-body">
                            <div class="row">                
                                <div class="col-md-8 form-group">

                                    @foreach ($Leaders as $item)
                                      <input type="checkbox" name="elementary_marks_late[]" value="{{$item->id}}">
                                      <label for="">{{$item->name}}</label> <br>
                                    @endforeach
  
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>
  </div>

 <div class="col-md-6 col-12"> 
     <div class="card">
        <div class="card-header" style="background:#dce7f1;">
                <h4 class="card-title text-center"> قادة الاسبوع المخفف</h4>
         </div>
            <div class="card-content">
                <div class="card-body">
                    <div class="form form-horizontal">
                        <div class="form-body">
                            <div class="row">                
                                <div class="col-md-8 form-group">

                                    @foreach ($Leaders as $item)
                                      <input type="checkbox" name="light_week[]" value="{{$item->id}}">
                                      <label for="">{{$item->name}}</label> <br>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
       </div>
   </div>
</div>

<div class="col-md-6 col-12"> 
    <div class="card">
       <div class="card-header" style="background:#dce7f1;">
               <h4 class="card-title text-center"> قادة تم الإنابة عنهم</h4>
        </div>
           <div class="card-content">
               <div class="card-body">
                   <div class="form form-horizontal">
                       <div class="form-body">
                           <div class="row">                
                               <div class="col-md-8 form-group">

                                    @foreach ($Leaders as $item)
                                      <input type="checkbox" name="deputized_for[]" value="{{$item->id}}">
                                      <label for="">{{$item->name}}</label> <br>
                                    @endforeach

                               </div>
                           </div>
                       </div>
                    </div>
               </div>
           </div>
      </div>
  </div>
</div>
    <button type="submit" class="btn btn-outline-primary me-3">حفظ</button>
        </form>
    </div>
 </div>  
 @endsection
