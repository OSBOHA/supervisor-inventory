@extends('layouts.app')

@section('content')
    @section('sidebar')
        @extends('layouts.sidebar')
    @endsection
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>صندوق الرسائل</h3>
                <p class="text-subtitle text-muted">هنا صندوق رسائلك</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Chatbox</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="media d-flex align-items-center">
                            <div class="avatar me-3">
                                <img src="assets/images/faces/1.jpg" alt="" srcset="">
                                <span class="avatar-status bg-success"></span>
                            </div>
                            <div class="name flex-grow-1">
                                <h6 class="mb-0">الموجه</h6>
                                <span class="text-xs">متصل لآن</span>
                            </div>
                            <button class="btn btn-sm">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body pt-4 bg-grey">
                        <div class="chat-content" >
                            @foreach ($messages as $msg)
                                @if ( $msg->sender_id == 1 )
                                    <div class="chat" style="float: left; width: 100%">
                                        <div class="chat-body">
                                        <div class="chat-message">{{ $msg->body }} </div>
                                        @if ($loop->last)
                                            @if ($msg->status == 1 )
                                                <span class="bi bi-check-circle-fill"
                                                style="float: right;margin-top: 32px;margin-right: 4px;
                                                   font-size:15px; color: #cacbcc"
                                                ></span>
                                                @else
                                                <span class="bi bi-record"
                                                style="float: right;margin-top: 30px;
                                                font-size:22px; color: #cacbcc"
                                                ></span>
                                            @endif
                                        @endif

                                    </div>
                                </div>
                                @else
                                <div class="chat chat-left" style="float: left; width: 100%">
                                <div class="chat-body" >
                                    <div class="chat-message">{{ $msg->body }} </div>
                                    @if ($loop->last)
                                        @if ($msg->status == 1 )
                                            <span class="bi bi-check-circle-fill"
                                            style="float: left;margin-top: 32px;margin-left: 6px;
                                            font-size:15px; color: #5a8dee"
                                            ></span>
                                            @elseif ($msg->status == 0)
                                            <span class="bi bi-record"
                                            style="float: left;margin-top: 30px;margin-left: 8px;
                                            font-size:22px; color: #5a8dee"
                                            ></span>
                                        @endif
                                    @endif

                                </div>

                                </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="message-form d-flex flex-direction-column align-items-center">
                            <a href="http://" class="black"><i data-feather="smile"></i></a>
                            <div class="d-flex flex-grow-1 ml-4">
                                <form action="addM" method="POST">
                                    @csrf
                                    <input type="text" class="form-control" name="body" placeholder="اكتب رسالتك هنا.." style="display:inline-block; width:380px;">
                                    <button type="submit" class="bi bi-telegram" style="font-size:28px; padding-top: -3px; display:inline-block; color: #5a8dee; border:none; background:none"></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<link rel="stylesheet" href="assets/css/widgets/chat.css">
@endsection
