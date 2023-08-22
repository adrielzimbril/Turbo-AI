@extends('backend.layout.content')
@section('title', __('How it Works'))

@section('content')
  <div class="mb-2 d-flex justify-content-between">
    <div class="card-title m-0">
      <h5 class="mb-0 mt-2">
        {{__('How it Works')}}
      </h5>
    </div>
    <div class="d-flex align-items-center">
      <a href="{{route('dashboard.admin.frontend.howItWorks.createEdit')}}"
         class="btn btn-primary me-2">{{__('Add new')}}</a>
    </div>
  </div>

  <div class="card">
    <div class="card-body p-2 pb-3">
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
          <tr>
            <th>{{__('Order')}}</th>
            <th>{{__('Title')}}</th>
            <th>{{__('Updated At')}}</th>
            <th>{{__('Actions')}}</th>
          </tr>
          </thead>
          <tbody class="table-border-bottom-0">
          @foreach($howItWorks as $work)
            <tr>
              <td>{{$work->order}}</td>
              <td>{{$work->title}}</td>
              <td>
                {{date('j F, Y h:i:s A', strtotime($work->created_at))}}
              </td>
              <td>
                <div class="d-flex">
                  <a
                    href="{{route('dashboard.admin.frontend.howItWorks.createEdit', $work->id)}}"
                    class="d-flex btn-icon rounded-2 me-2 bg-label-primary"
                    title="{{__('Edit')}}">
                    {!! get_svg_icon('pen-alt-2', 'fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
                  </a>
                  <a data-toast-type="error"
                     data-toast-confirm="true"
                     data-toast-msg="{{__('This will be deleted, This action can be reverted.')}}"
                     data-toast-link="{{route('dashboard.admin.frontend.howItWorks.delete', $work->id)}}"
                     class="confirm-toast d-flex btn-icon rounded-2 me-2 bg-label-danger cursor-pointer"
                     data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
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
    </div>
  </div>
@endsection
