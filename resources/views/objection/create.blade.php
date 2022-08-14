@extends('layouts.app')

@section('content')
    @section('sidebar')
        @extends('layouts.sidebar')
    @endsection
    <div class="container" style ="padding-top :12% ">
    
</div>
<div class ="container" style ="padding-top :2%">
    <form action="{{route('storeObjection')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">title</label>
            <input type="text" name ="title" class="form-control"  placeholder="عنوان الاعتراض ">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">body</label>
            <input type="text" name ="body" class="form-control"  placeholder=" وصف الاعتراض">
        </div>
       
        
       
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary">حفظ</button>
        </div>
    </form>
</div>    
@endsection