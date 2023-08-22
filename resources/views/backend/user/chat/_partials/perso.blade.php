<div class="modal fade" id="persomodal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="badge bg-label-info fs-6 modal-title" id="modalpersoTitle">{{__('Personage')}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="{{__('Close')}}"></button>
      </div>
      <div class="modal-body">
        <div class="d-flex flex-wrap justify-content-center align-items-center position-relative">
          @foreach ($chatPerso as $perso)
            <a
              href="javascript:void(0);"
              class="d-flex border justify-content-center align-items-center text-secondary rounded-2 p-2 m-2 {{ $loop->iteration == 1 ? 'active' : '' }}"
              data-grid-el="no-data" data-bs-toggle="tooltip"
              data-bs-title="{{ $perso->name }} {{ $perso->role == 'default'|| $perso->name ? '' : ' | ' . $perso->role }}"
              data-category_id="{{ $perso->id }}" onclick="getChats(this, {{ $perso->id }})">
              @if( $perso->slug === 'ai-chat-bot' )
                <img width="44" class="rounded-circle me-2"
                     src="{{asset('media/img/defaults/avatar.png')}}">
              @elseif ($perso->image)
                <img width="44" class="rounded-circle me-2" src="{{asset($perso->image)}}">
              @else
                <span class="badge bg-label-secondary rounded p-3 me-2"
                      style="background: {{$perso->color}}">{{$perso->short_name}}</span>
              @endif
              <span>{{$perso->name}}</span>
            </a>
          @endforeach

        </div>
        <div class="modal-footer d-none">
          <div class="col-12 mt-4 text-center">
            <button type="reset" class="btn btn-label-secondary btn-reset" data-bs-dismiss="modal" aria-label="Close">
              {{__('Cancel')}}
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
