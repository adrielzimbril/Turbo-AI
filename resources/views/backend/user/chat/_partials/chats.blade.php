@empty($chats)
  <div class="chat-contact-list-item-title">
    <h5 class="badge bg-secondary mb-0 mx-3 mt-3">Chats</h5>
  </div>
@endempty

<ul class="list-unstyled chat-contact-list" id="chat-list">
  <li class="chat-not-found mt-3 d-flex align-items-center justify-content-center d-none">
    <span class="badge badge-lg bg-secondary fs-6">{{__('No Chats Found')}}</span>
  </li>
  @forelse($chats as $chat)
    <li
      class="chat-contact-list-item d-flex align-items-center text-muted mt-1 {{ $loop->iteration == 1 ? 'active' : '' }}"
      id="chat_{{$chat->id}}">
      <a href="javascript:void(0);"
         onclick="getMessages(this, {{ $chat->id }})" data-id="{{ $chat->id }}"
         class="d-flex align-items-center w-75 text-muted me-2">
                  <span class="flex-shrink-0 me-2">
                    {!! get_svg_icon('chat-round-line', 'fs-4', 'mb-1', '', ['height' => '22' , 'width' => '22'])!!}
                  </span>
        <div class="chat-contact-info">
          <span class="chat-contact-name text-truncate m-0" data-id="{{ $chat->id }}"
                data-name="chat-title-{{ $chat->id }}">{{ $chat->title }}</span>
        </div>
      </a>
      <div class="d-flex justify-content-end">
        <a class="delete d-flex p-1 cursor-pointer" onclick="deleteChat(this, {{$chat->id}})" title="{{__('Delete')}}">
          {!! get_svg_icon('trash-bin-minimalistic', 'fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
        </a>
      </div>
    </li>
  @empty
    <li class="mt-3 d-flex align-items-center justify-content-center">
      <span class="badge badge-lg bg-secondary fs-6">{{__('No Chats Found')}}</span>
    </li>
  @endforelse
</ul>
