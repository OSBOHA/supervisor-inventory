@extends('layouts.app')

@section('content')
@section('sidebar')
@extends('layouts.sidebar')
@endsection
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                اكتب اعتراضك هنا
            </div>
            <div class="card-body">
                <form action="{{route('objections.store')}}" method="post">
                    @csrf
                    @if ($errors->any())
                    <div class="alert alert-light-danger color-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <div class="form-group">
                        <div class="form-group mb-3">
                            <label for="objectionTitle" class="form-label">عنوان الاعتراض</label>
                            <input type="=text" name='title' class="form-control" id="objectionTitle" rows="3"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="objectionBody" class="form-label">وصف الاعتراض</label>
                            <textarea name='body' class="form-control" id="objectionBody" rows="3"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">حفظ</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection