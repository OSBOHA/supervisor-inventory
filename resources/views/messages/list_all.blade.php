@extends('layouts.app')
<style>
    .chat {
        border-radius: 5px
    }

    .chat.chat-left .chat-message {
        background: #5a8dee !important;
        color: #fff;
        float: left !important
    }

    .chat .chat-message {
        background-color: #fafbfb !important;
        border-radius: .267rem !important;
        box-shadow: 0 2px 6px 0 rgba(0, 0, 0, .3) !important;
        clear: both !important;
        color: #525361;
        float: right !important;
        margin: .2rem 0 1.8rem .2rem !important;
        max-width: calc(100% - 5rem) !important;
        padding: .75rem 1rem !important;
        position: relative !important;
        text-align: left !important;
        word-break: break-word !important
    }
    .card-footer{
        margin-top: 2%;
    }
</style>
@extends('layouts.sidebar')
@section('content')

<div class="page-heading email-application">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>صندوق الوارد</h3>
                <p class="text-subtitle text-muted"></p>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="row">
            <!-- User new mail right area -->
            <div class="compose-new-mail-sidebar ps col-md-3">
                <div class="card shadow-none quill-wrapper p-0">
                    <div class="card-header">
                        <h3 class="card-title" id="emailCompose">قائمة المراسلة</h3>
                    </div>
                    <hr>
                    <div class="card-body">
                        @if(isset($advisor))
                        @foreach($advisor->current_supervisors as $supervisor)
                        <a href="{{route('list_message',  ['partnerId' => $supervisor->user->id])}}">
                            <h6>{{$supervisor->user->name}}</h6>
                        </a>
                        @endforeach
                        @elseif(isset($supervisor))
                        <a href="{{route('list_message',  ['partnerId' => $supervisor->current_advisor_info->user->id])}}">
                            <h6 class="font-extrabold mb-0">{{$supervisor->current_advisor_info->user->name}}</h6>
                        </a>
                        @endif
                    </div>
                </div>
            </div>
            <!--/ User Chat profile right area -->

            <div class="col-md-9">
                @if($selected)
                <div class="card">
                    <div class="card-header">
                        <div class="media d-flex align-items-center">
                            <div class="avatar me-3">
                                <img src="{{('assets/images/faces/1.jpg')}}" alt="" srcset="">
                                <span class="avatar-status bg-success"></span>
                            </div>
                            <div class="name flex-grow-1">
                                <h6 class="mb-0">{{$partner->name}}</h6>
                                <input type="hidden" id="receiver_id" value="{{$partner->id}}">
                            </div>
                            <button class="btn btn-sm">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                    </div>
                    <div id="Scrollable" class="card-body pt-4 bg-grey" style="overflow-y: auto; height:400px; scroll-behavior: smooth;">
                        <div class="chat-content" id="chatContent">
                            @foreach ($messages as $message)
                            @if ( $message->sender_id == auth()->user()->id )
                            <div class="chat">
                                <div class="chat-body">
                                    <div class="chat-message">{{ $message->body }} </div>
                                    @if ($loop->last)
                                    @if ($message->status == 1 )
                                    <span class="bi bi-check-circle-fill" style="float: right;margin-top: 32px;margin-right: 4px;
                                                   font-size:15px; color: #cacbcc"></span>
                                    @else
                                    <span class="bi bi-record" style="float: right;margin-top: 30px;
                                                font-size:22px; color: #cacbcc"></span>
                                    @endif
                                    @endif

                                </div>
                            </div>
                            @else
                            <div class="chat chat-left">
                                <div class="chat-body">
                                    <div class="chat-message">{{ $message->body }} </div>
                                    @if ($loop->last)
                                    @if ($message->status == 1 )
                                    <span class="bi bi-check-circle-fill" style="float: left;margin-top: 32px;margin-left: 6px;
                                            font-size:15px; color: #5a8dee"></span>
                                    @else
                                    <span class="bi bi-record" style="float: left;margin-top: 30px;margin-left: 8px;
                                            font-size:22px; color: #5a8dee"></span>
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
                            <a id="sendMessage" class="btn btn-primary">ارسال</a>
                            <div class="d-flex flex-grow-1 ml-4">
                                <meta name="csrf-token" content="{{ csrf_token() }}">
                                <input type="text" class="form-control" id="message" placeholder="... أكتب رسالتك هنا">
                            </div>
                        </div>
                    </div>

                </div>
                @else
                <div class="card">
                    <div class="card-header">
                        <div class="media d-flex align-items-center">
                            <h6> عرض الرسائل </h6>
                        </div>
                    </div>
                    <div class="card-body pt-4 bg-grey">
                        <div class="chat-content">
                            <h4>اختر رسالة لعرضها</h4>
                        </div>
                    </div>
                </div>
                @endif
            </div>

        </div>

    </section>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#Scrollable').scrollTop($('#Scrollable')[0].scrollHeight);

        var APP_URL = document.getElementById("APP_URL").value;

        $("#sendMessage").click(function() {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                url: APP_URL + "/messages/send_message",
                data: {
                    body: document.getElementById("message").value,
                    receiver_id: document.getElementById("receiver_id").value
                },
                success: function(response) {
                    document.getElementById("message").value=""
                    attachMessage = '<div class="chat"> <div class="chat-body"> <div class="chat-message">'+response.body +' </div> </div></div>'
                    $('#chatContent').append(attachMessage);
                    $('#Scrollable').scrollTop($('#Scrollable')[0].scrollHeight);
                    
                },
                error: function(jqXhr, textStatus, errorMessage) {
                  console.log(errorMessage);
                }
            });
        });
    });
</script>
@endsection