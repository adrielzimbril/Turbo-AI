<div class="alert alert-{{getSubscriptionStatus() ? 'info' : 'warning'}} d-flex align-items-center" role="alert">
    <span class="alert-icon text-{{getSubscriptionStatus() ? 'info' : 'warning'}} mb-0 me-2">
        {!! get_svg_icon('info-circle-fill', 'fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
    </span>
  <div class="d-flex justify-content-between w-100 gap-2 align-items-center ps-1">
    @if(Auth::user()->activePlan() != null)
      <div class="">
        <span>{{__('You have currently subscribed to')}} {{ucwords(getSubscriptionName())}} {{__('plan.')}}</span>
        <span>{{__('Your plan will be refill automatically in')}} {{getSubscriptionDaysLeft()}} {{__('Days.')}}</span>
      </div>
    @else
      <span>{{__('You have no subscription at the moment. Please select a subscription plan or a token pack.')}}</span>
    @endif
    @if(getSubscriptionStatus())
      <a href="{{route('dashboard.user.payment.cancelActiveSubscription')}}" target="_blank"
         class="btn btn-info ms-1">
        {{__('Cancel My Plan')}}
      </a>
    @else
      <a href="{{route('dashboard.user.payment.subscription')}}" target="_blank"
         class="btn btn-warning ms-1">
        {{__('Select a Plan')}}
      </a>
    @endif
  </div>
</div>
