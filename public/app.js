'use strict';
var $chatRoom = $('#chat-room');
var $sendMessage = $('#send-message');
var $messageInput = $sendMessage.find('input[name=message]');
var io = window.io;
var socket = io('http://laravel.dev:9000');


$sendMessage.on('submit', function () {
    $.post(this.action, $sendMessage.serialize());
    $messageInput.val('');
    return false;
});

socket.on('chat-channel:App\\Events\\MessageCreated', function (payload) {

    var html = '<div class="message alert-info" style="display: none;">';
    html += payload.username + ': ';
    html += payload.message;
    html += '</div>';

    var $message = $(html);
    $chatRoom.append($message);
    $message.fadeIn('fast');
    $chatRoom.animate({scrollTop: $chatRoom[0].scrollHeight}, 1000);
});
