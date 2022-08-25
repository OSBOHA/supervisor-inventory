
@extends('layouts.app')

@section('content')
@if (auth()->user()->hasRole('admin'))
    @section('sidebar')
        @include('layouts.AdvisorSidebar')
    @endsection
@else
    @section('sidebar')
    @include('layouts.sidebar')
    @endsection
@endif
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <p> عنوان الخبر  ||  {{$news->title}}</p>
            </div>
            <div class="card-body">
                <form action="{{route('news.update',  ['id' => $news->id])}}" method="post">
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
                            <label for="newsTilte" class="form-label">عنوان الاعتراض</label>
                            <input type="=text" name='title' class="form-control" id="newsTilte" rows="3" value="{{$news->title}}"></textarea>
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


