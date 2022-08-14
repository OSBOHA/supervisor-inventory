@extends('layouts.app')

@section('content')
    @section('sidebar')
        @extends('layouts.sidebar')
    @endsection
    <div class="container" style ="padding-top :12% ">
    
</div> 
<div class ="container" style ="padding-top :2%">
    <form action="{{route('updateObjection',$Objection->id)}}" method="POST">
        @csrf

              <div class="form-group">
            <label for="exampleFormControlInput1">عنوان الاعتراض</label>
            <input type="text" name ="reviewer_id"  value="{{$Objection->title}}" class="form-control"  placeholder="  رقم المراجع">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">اسم المعترض</label><br>
                
                
            <input type="text" name ="status"  value="{{$Objection->objector->name}}" class="form-control"  placeholder="الحالة">
            
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">اضافة ملاحظات المراجع</label><br>
            <textarea id="story" name="reviewer_note" class="form-control"  placeholder="{{$Objection->reviewer_note}}" value="{{$Objection->reviewer_note}}" rows="5" cols="50">{{$Objection->reviewer_note}}
            </textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">حفظ</button>
        </div>
    </form>
</div>    
@endsection