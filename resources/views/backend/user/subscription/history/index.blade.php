@extends('backend.layout.content')
@section('title', __('My Subscriptions History'))

@section('content')
  <h5 class="mb-2">
    {{__('Subscriptions History Management')}}
  </h5>
  <div class="card">
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
        <tr>
          <th>{{__('Order Id')}}</th>
          <th>{{__('Plan')}}</th>
          <th>{{__('Price')}}</th>
          <th>{{__('Status')}}</th>
          <th>{{__('Words')}}</th>
          <th>{{__('Images')}}</th>
          <th>{{__('Type')}}</th>
          <th>{{__('Date')}}</th>
          {{--<th>{{__('Actions')}}</th>--}}
        </tr>
        </thead>
        <tbody class="table-border-bottom-0">
        @foreach($orders as $order)
          <tr>
            <td>{{$order->order_id}}</td>
            <td>{{ucwords(@$order->plan->name ?? 'Ended Plan')}}</td>
            <td>{{currency()->symbol}}{{$order->price}}</td>
            <td>
              @php
                if($order->status == 'Success') {
                    $color = 'success';
                } elseif($order->status == 'Waiting'){
                    $color = 'warning';
                } elseif($order->status == 'Updated'){
                    $color = 'info';
                } else {
                    $color = 'danger';
                }
              @endphp
              <span
                class="badge bg-label-{{$color}} me-1">
                {{ucwords($order->status)}}
              </span>
            </td>
            <td>{{(@$order->plan->total_words < 0 ? 'Unlimited' : @$order->plan->total_words) ?? '-'}}</td>
            <td>{{(@$order->plan->total_images < 0 ? 'Unlimited' : @$order->plan->total_images ) ?? '-'}}</td>
            <td>
              <span
                class="badge bg-label-{{$order->type == 'prepaid' ? 'secondary' : 'info' }} me-1">
                {{ucwords($order->type)}}
              </span>
            </td>
            <td>
              {{date('j F, Y h:i:s A', strtotime($order->created_at))}}
            </td>
            {{--<td>
                <div class="d-flex">
                  <a href="{{route('dashboard.user.subscriptions.history.invoice', $order->order_id)}}"
                     class="d-flex btn-icon rounded-2 me-2 btn-label-secondary cursor-pointer"
                     title="{{__('Edit')}}">
              {!! get_svg_icon('eye', 'fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
                  </a>
                </div>
              </td>--}}
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection

