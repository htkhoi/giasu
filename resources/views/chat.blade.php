<!DOCTYPE html>
<html>
<head>
<title>Laravel</title>
@if (config('app.debug'))
<!-- build:css(public) css/vendor.css -->
<!-- bower:css -->
<!-- endbower -->
<!-- endbuild -->
@else
<link rel="stylesheet" href="{{ elixir('css/vendor.css') }}">
<link rel="stylesheet" href="{{ elixir('css/app.css') }}">
@endif

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>Chat Room Demo</h1>

            <!-- 訊息列表 -->
            <div id="chat-room">

            </div>

            <!-- 傳送訊息的表單 -->
            <form id="send-message" method="post" action="/send-message">
                {!! csrf_field() !!}
                <input type="hidden" name="username" value="{{ $username }}" />
                <div class="input-group">
                    <label class="input-group-addon">
                        {{ $username }}
                    </label>
                    <input type="text" value="" name="message" class="form-control" />
                </div>
            </form>
        </div>
    </div>
</div>

@if (config('app.debug'))
<!-- build:js(public) js/vendor.js -->
<!-- bower:js -->
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<!-- endbower -->
<script src="https://cdn.socket.io/socket.io-1.3.5.js"></script>
<!-- endbuild -->
<script src='app.js'></script>
@else
<script src="{{ elixir('js/vendor.js') }}"></script>
<script src="{{ elixir('js/app.js') }}"></script>
@endif
</body>
</html>
