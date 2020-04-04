<div class="card card-h">
    <div class="card-header msg_head">
        <div class="d-flex bd-highlight">
            <div class="img_cont">
                <img src="{{$user->avatar}}" class="rounded-circle user_img">
                <span class="online_icon"></span>
            </div>
            <div class="user_info">
                <span>Chat with {{$user->name}}</span>
                <p>1767 Messages</p>
            </div>
            <div class="video_cam">
                <span><i class="fas fa-video"></i></span>
                <span><i class="fas fa-phone"></i></span>
            </div>
        </div>
        <span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
        <div class="action_menu">
            <ul>
                <li><i class="fas fa-user-circle"></i>Delete Histroy</li>
                <li><i class="fas fa-plus"></i> Add to close friends</li>
                <li><i class="fas fa-ban"></i> Block</li>
            </ul>
        </div>
    </div>
    <div class="card-body msg_card_body">
        @foreach ($messages as $message)
            @if($message->from == Auth::id())

                <div class="d-flex justify-content-end mb-4">
                    <div class="msg_cotainer_send">
                        {{ $message->message }}
                        <span class="msg_time_send">{{ date('d M y, h:i a', strtotime($message->created_at)) }}</span>
                    </div>
                    <div class="img_cont_msg">
                <img src="{{$auth->avatar}}" class="rounded-circle user_img_msg">
                    </div>
                </div>

            @else
                <div class="d-flex justify-content-start mb-4">
                    <div class="img_cont_msg">
                        <img src="{{$user->avatar}}" class="rounded-circle user_img_msg">
                    </div>
                    <div class="msg_cotainer">
                        {{ $message->message }}
                        <span class="msg_time">{{ date('d M y, h:i a', strtotime($message->created_at)) }}</span>
                    </div>
                </div>

            @endif

        @endforeach


    </div>
    <div class="card-footer">
        <div class="input-group">
            <div class="input-group-append">
                <span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
            </div>
            <input type="text" name="message" class="form-control type_msg submit" placeholder="Type your message...">
            <div class="input-group-append">
                <span class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></span>
            </div>
        </div>
    </div>
</div>
