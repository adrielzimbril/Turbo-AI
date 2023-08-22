@extends('backend.layout.content')
@section('title', __('Custom Templates'))

@section('content')
  <div class="d-flex justify-content-between my-2">
    <div class="m-0">
      <h5 class="mb-0 mt-2">
        {{__('Custom Templates')}}
      </h5>
    </div>
    <div class="d-flex align-items-center">
      <a href="{{route('dashboard.admin.ai.custom.createEdit')}}"
         class="btn btn-primary">{{__('Add Template')}}</a>
    </div>
  </div>
  <div class="card mb-4">
    <div class="table-responsive">
      <table class="table">
        <thead>
        <tr>
          <th>{{__('Status')}}</th>
          <th>{{__('Template Name')}}</th>
          <th>{{__('Template Description')}}</th>
          <th>{{__('Package')}}</th>
          <th>{{__('Updated At')}}</th>
          <th>{{__('Actions')}}</th>
        </tr>
        </thead>
        <tbody class="table-border-bottom-0">
        @foreach($list as $entry)
          <tr>
            <td><span
                class="badge bg-label-{{$entry->active == 1 ? 'success' : 'danger' }} me-1">{{$entry->active == 1 ? __('Active') : __('Passive') }}</span>
            </td>
            <td>{{__($entry->name)}}</td>
            <td>{{__($entry->description)}}</td>
            <td>{{$entry->premium == 1 ? __('Premium') : __('Regular')}}</td>
            <td>
              {{date('j F, Y h:i:s A', strtotime($entry->updated_at))}}
            </td>
            <td>
              <div class="d-flex justify-content-end">
                <a href="{{route('dashboard.admin.ai.custom.createEdit', $entry->id)}}"
                   class="d-flex btn-icon rounded-2 me-2 bg-label-secondary cursor-pointer"
                   title="{{__('Edit')}}">

                  {!! get_svg_icon('pen-alt-2', 'fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
                </a>
                <a href="{{route('dashboard.admin.ai.custom.delete', $entry->id)}}"
                   class="d-flex btn-icon rounded-2 me-2 bg-label-danger cursor-pointer" title="{{__('Delete')}}">
                  {!! get_svg_icon('trash-bin-minimalistic', 'fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
                </a>
              </div>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
