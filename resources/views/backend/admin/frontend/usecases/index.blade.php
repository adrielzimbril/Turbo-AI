@extends('backend.layout.content')
@section('title', __('Usecases'))

@section('content')
  <div class="mb-2 d-flex justify-content-between">
    <div class="card-title m-0">
      <h5 class="mb-0 mt-2">
        {{__('Usecases')}}
      </h5>
    </div>
    <div class="d-flex align-items-center">
      <a href="{{route('dashboard.admin.frontend.usecases.createEdit')}}"
         class="btn btn-primary me-2">{{__('Add new')}}</a>
    </div>
  </div>
  <div class="card">
    <div class="card-body p-2 pb-3">
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
          <tr>
            <th>{{__('Tab Title')}}</th>
            <th>{{__('Title')}}</th>
            <th>{{__('Image')}}</th>
            <th>{{__('Created At')}}</th>
            <th>{{__('Actions')}}</th>
          </tr>
          </thead>
          <tbody class="table-border-bottom-0">
          @foreach($usecases as $usecase)
            <tr>
              <td>{{$usecase->tab_title}}</td>
              <td>{{$usecase->title}}</td>
              <td>
                <div class="d-flex rounded-2">
                  <img src="{{asset($usecase->image)}}" width="160px;" alt="{{$usecase->title}}">
                </div>
              </td>
              <td>
                {{date('j F, Y h:i:s A', strtotime($usecase->created_at))}}
              </td>
              <td>
                <div class="d-flex">
                  <a
                    href="{{route('dashboard.admin.frontend.usecases.createEdit', $usecase->id)}}"
                    class="d-flex btn-icon rounded-2 me-2 bg-label-primary"
                    title="{{__('Edit')}}">
                    {!! get_svg_icon('pen-alt-2', 'fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
                  </a>
                  <a data-toast-type="error"
                     data-toast-confirm="true"
                     data-toast-msg="{{__('This will be deleted, This action can be reverted.')}}"
                     data-toast-link="{{route('dashboard.admin.frontend.usecases.delete', $usecase->id)}}"
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
