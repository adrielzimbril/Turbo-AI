@extends('backend.layout.content')
@section('title', 'User Management')

@section('content')
  <h5 class="mb-2">
    {{__('User Management')}}
  </h5>
  <div class="card">
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
        <tr>
          <th>{{__('Name')}}</th>
          <th>{{__('Words Left')}}</th>
          <th>{{__('Images Left')}}</th>
          <th>{{__('Role')}}</th>
          <th>{{__('Status')}}</th>
          <th>{{__('Created At')}}</th>
          <th>{{__('Actions')}}</th>
        </tr>
        </thead>
        <tbody class="table-border-bottom-0">
        @foreach($users as $user)
          <tr>
            <td>{{$user->fullName()}}</td>
            <td>{{$user->remaining_words}}</td>
            <td>{{$user->remaining_images}}</td>
            <td><span class="badge bg-label-secondary me-1">{{ucwords($user->type)}}</span></td>
            <td><span
                class="badge bg-label-{{$user->active == 0 ? 'success' : 'danger' }} me-1">{{$user->active == 0 ? __('Active') : __('Disbaled') }}</span>
            </td>
            <td data-date="{{strtotime($user->created_at)}}">
              <span class="m-0">{{date('j F, Y h:i:s A', strtotime($user->created_at))}}</span>
            </td>
            <td>
              <div class="d-flex">
                <a href="{{route('dashboard.admin.users.edit', $user->id)}}"
                   class="d-flex btn-icon rounded-2 me-2 bg-label-secondary cursor-pointer"
                   title="{{__('Edit')}}">

                  {!! get_svg_icon('pen-alt-2', 'fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
                </a>
                <a data-toast-type="error"
                   data-toast-confirm="true"
                   data-toast-msg="{{__('This user will be deleted, This action can be reverted.')}}"
                   data-toast-link="{{route('dashboard.admin.users.delete', $user->id)}}"
                   class="confirm-toast d-flex btn-icon rounded-2 me-2 bg-label-danger cursor-pointer"
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
@endsection
