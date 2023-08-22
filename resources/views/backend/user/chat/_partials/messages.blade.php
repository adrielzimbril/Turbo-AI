@isset($messages)
  <div id="chat-history" class="chat-history my-5 pb-6 pb-lg-0">
    @foreach($messages as $message)
      @isset($message->input)
        <div
          class="row m-0 chat-message justify-content-start chat-message-right">
          <div class="col-11 col-md-7 mx-auto my-3">
            <div class="d-flex overflow-hidden">
              <div class="user-avatar flex-shrink-0 mt-1 me-3">
                <div class="avatar avatar-sm">
                  <img src="{{asset(auth()->user()->avatar)}}" alt="Avatar" class="rounded-circle">
                </div>
              </div>
              <div class="chat-message-wrapper flex-grow-1">
                <div class="chat-message-text">
                  {!! $message->input !!}
                </div>
              </div>
            </div>
          </div>
        </div>
      @endisset
      <div
        class="row m-0 chat-message justify-content-start">
        <div class="col-11 col-md-7 mx-auto my-3">
          <div class="d-flex overflow-hidden">
            <div class="user-avatar flex-shrink-0 mt-1 me-3">
              <div class="avatar avatar-sm">
                <img src="{{asset($message->chat->category->image ?? 'media/img/defaults/avatar.png')}}"
                     alt="Avatar" class="rounded-circle">
              </div>
            </div>
            <div class="chat-message-wrapper flex-grow-1">
              <div class="chat-message-text">
                {!! $message->result !!}
              </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endisset
