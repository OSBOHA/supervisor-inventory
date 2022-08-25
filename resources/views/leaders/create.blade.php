@extends('layouts.app')

@section('content')
@section('sidebar')
@extends('layouts.sidebar')
@endsection
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                أدخل معلومات القائد
            </div>
            <div class="card-body">
                <form action="{{route('leaders.store')}}" method="post">
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
                            <label for="name" class="form-label">اسم القائد</label>
                            <input type="text" name='name' class="form-control" id="leaderName" rows="3">
                        </div>
                        <div class="form-group mb-3">
                            <label for="team" class="form-label">فريق المتابعة</label>
                            <input type="text" name='team' class="form-control" id="leaderTeam" rows="3">
                        </div>
                        <div class="form-group mb-3">
                            <label for="type" class="form-label">نوع القائد</label>
                            <select name='type' class="form-control form-select" id="leaderType" >
                            <option value="دائم">دائم</option>
                            <option value="دعم">دعم </option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">اضافة</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection