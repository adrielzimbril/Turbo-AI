@extends('backend.layout.content')
@section('title', __('AI Categories'))

@section('content')

  <div class="d-flex justify-content-between my-2">
    <div class="card-title m-0">
      <h5 class="mb-0 mt-2">
        {{__('AI Categories')}}
      </h5>
    </div>
    <div class="d-flex align-items-center">
      <a href="{{route('dashboard.admin.ai.categories.createEdit')}}"
         class="btn btn-primary">{{__('Add Category')}}</a>
    </div>
  </div>
  <div class="card mb-4">
    <div class="table-responsive">
      <table class="table">
        <thead>
        <tr>
          <th>{{__('Name')}}</th>
          <th>{{__('Actions')}}</th>
        </tr>
        </thead>
        <tbody class="table-border-bottom-0">
        @foreach($list as $entry)
          <tr>
            <td class="text-capitalize">{{__($entry->name)}}</td>
            <td>
              <div class="d-flex justify-content-end">
                <a href="{{route('dashboard.admin.ai.categories.createEdit', $entry->id)}}"
                   class="d-flex btn-icon rounded-2 me-2 bg-label-secondary cursor-pointer"
                   title="{{__('Edit')}}">
                  {!! get_svg_icon('pen-alt-2', 'fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
                </a>
                <a href="{{route('dashboard.admin.ai.categories.delete', $entry->id)}}"
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

