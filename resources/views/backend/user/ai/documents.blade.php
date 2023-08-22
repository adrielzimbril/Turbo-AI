@extends('backend.layout.content')
@section('title', __('My Documents'))

@section('content')

  <h5 class="mb-2">
    {{__('My Documents')}}
  </h5>
  <div class="card">
    <div class="card-body">
      <div class="table-responsive text-nowrap mb-3">
        <table class="table">
          <thead>
          <tr>
            <th>{{__('Name')}}</th>
            <th>{{__('Category')}}</th>
            <th>{{__('Words/Size')}}</th>
            <th>{{__('Created Date')}}</th>
            <th>{{__('Actions')}}</th>
          </tr>
          </thead>
          <tbody class="table-border-bottom-0">
          @foreach($items as $entry)
            <tr class="position-relative">
              <td>
                <a class="text-secondary" href="{{route('dashboard.user.ai.documents.view', $entry->slug)}}">
                    <span class="badge bg-label-info px-1 me-1">
            @if($entry->content )
                        {!! get_svg_icon_db($entry->content->icon, 'fs-icon', ['height' => '22' , 'width' => '22']) !!}
                      @elseif($entry->content_type == 'stt')
                        {!! get_svg_icon('chat-square-call', 'fs-icon', '', '', ['height' => '22' , 'width' => '22']) !!}
                      @else
                        {!! get_svg_icon('programming', 'fs-icon', '', '', ['height' => '22' , 'width' => '22']) !!}
                      @endif
                    </span>
                  {{$entry->title}}
                </a>
              </td>
              <td>{{$entry->content ? $entry->content->name : ($entry->content_type == 'stt' ? 'Speech To Text' : 'AI Code Generator')}}</td>
              <td>{{$entry->credits}}</td>
              <td>
                {{date('j F, Y h:i:s A', strtotime($entry->created_at))}}
              </td>
              <td>
                <div class="d-flex justify-content-end">
                  <a href="{{route('dashboard.user.ai.documents.view', $entry->slug)}}"
                     class="d-flex rounded-3 btn-icon align-items-center justify-content-center bg-label-primary me-2"
                     title="{{__('Edit')}}">
                    {!! get_svg_icon('pen-alt-2', 'fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
                  </a>
                  <a href="{{route('dashboard.user.ai.documents.delete', $entry->slug)}}"
                     class="d-flex rounded-3 btn-icon align-items-center justify-content-center bg-label-danger cursor-pointer"
                     title="{{__('Delete')}}">
                    {!! get_svg_icon('trash-bin-minimalistic', 'fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
                  </a>
                </div>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>

      {{$items->links('pagination::bootstrap-5')}}
    </div>
  </div>

@endsection
