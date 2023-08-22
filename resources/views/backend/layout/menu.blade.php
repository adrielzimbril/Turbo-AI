<div id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

  <div class="app-brand demo">
    <a href="{{url('/')}}" class="app-link">
      <img src="{{asset(getSetting('logo') ?? getSetting('logo_dark'))}}"
           class="w-full mw-100 h-px-30">
    </a>

    <a href="javascript:void(0);"
       class="layout-menu-toggle d-flex align-items-center d-xl-none btn-icon btn-sm translate-middle start-100">
      {!! get_svg_icon('cross-square', 'fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
    </a>
  </div>

  <ul class="menu-inner py-1">
    <li class="menu-header small text-uppercase">
      <span class="badge bg-label-secondary rounded-pill menu-header-text">{{__('User')}}</span>
    </li>
    <li class="menu-item {{activeRoute('dashboard.user.index')}}">
      <a href="{{route('dashboard.user.index')}}" class="menu-link">
        {!! get_svg_icon('columns-gap-fill', 'me-2 fs-5 menu-icon', 'mb-1', '', ['height' => '22' , 'width' => '22'])!!}
        <div>{{__('Library')}}</div>
      </a>
    </li>

    <li class="menu-item {{activeRoute('dashboard.user.ai.documents.index')}}">
      <a href="{{route('dashboard.user.ai.documents.index')}}" class="menu-link">
        {!! get_svg_icon('Documents', 'me-2 fs-5 menu-icon', 'mb-1', '', ['height' => '22' , 'width' => '22'])!!}
        <div>{{__('Documents')}}</div>
      </a>
    </li>

    @if ( getSetting('feature_ai_writer') )
      <li class="menu-item {{activeRouteBulk(['dashboard.user.ai.index', 'dashboard.user.ai.creator.view'])}}">
        <a href="{{route('dashboard.user.ai.index')}}" class="menu-link">
          {!! get_svg_icon('pen-square', 'me-2 fs-5 menu-icon', 'mb-1', '', ['height' => '22' , 'width' => '22'])!!}
          <div>{{__('AI Writer')}}</div>
        </a>
      </li>
    @endif
    @if ( getSetting('feature_ai_image') )
      <li
        class="menu-item {{ route('dashboard.user.ai.image.index') == url()->current() ? 'active' : '' }}">
        <a href="{{route('dashboard.user.ai.image.index')}}" class="menu-link">
          {!! get_svg_icon('image-fill', 'me-2 fs-5 menu-icon', 'mb-1', '', ['height' => '22' , 'width' => '22'])!!}
          <div>{{__('AI Image')}}</div>
        </a>
      </li>
    @endif
    @if ( getSetting('feature_ai_code') )
      <li
        class="menu-item {{ route('dashboard.user.ai.code.index') == url()->current() ? 'active' : '' }}">
        <a href="{{route('dashboard.user.ai.code.index')}}" class="menu-link">
          {!! get_svg_icon('code', 'me-2 fs-5 menu-icon', 'mb-1', '', ['height' => '22' , 'width' => '22'])!!}
          <div>{{__('AI Code')}}</div>
        </a>
      </li>
    @endif
    @if ( getSetting('feature_ai_chat') )
      <li class="menu-item {{activeRoute('dashboard.user.ai.chat.index')}}">
        <a href="{{route('dashboard.user.ai.chat.index')}}" class="menu-link">
          {!! get_svg_icon('chat-round-call', 'me-2 fs-5 menu-icon', 'mb-1', '', ['height' => '22' , 'width' => '22'])!!}
          <div>{{__('AI Chat')}}</div>
        </a>
      </li>
    @endif
    @if ( getSetting('feature_ai_speech_to_text') )
      <li
        class="menu-item {{ route('dashboard.user.ai.stt.index') == url()->current() ? 'active' : '' }}">
        <a href="{{route('dashboard.user.ai.stt.index')}}" class="menu-link">
          {!! get_svg_icon('translation-2', 'me-2 fs-5 menu-icon', 'mb-1', '', ['height' => '22' , 'width' => '22'])!!}
          <div>{{__('AI Speech to Text')}}</div>
        </a>
      </li>
    @endif

    @if(Auth::user()->type == 'admin')
      <li class="menu-header small text-uppercase">
        <span class="badge bg-label-secondary rounded-pill menu-header-text">{{__('Admin Panel')}}</span>
      </li>
      <li class="menu-item {{activeRoute('dashboard.admin.index')}}">
        <a href="{{route('dashboard.admin.index')}}" class="menu-link">
          {!! get_svg_icon('widget-3', 'me-2 fs-5 menu-icon', 'mb-1', '', ['height' => '22' , 'width' => '22'])!!}
          <div>{{__('Dashboard')}}</div>
        </a>
      </li>
      <li class="menu-item {{activeRouteBulk(['dashboard.admin.users.index', 'dashboard.admin.users.edit'])}}">
        <a href="{{route('dashboard.admin.users.index')}}" class="menu-link">
          {!! get_svg_icon('user-group-rounded', 'me-2 fs-5 menu-icon', 'mb-1', '', ['height' => '22' , 'width' => '22'])!!}
          <div>{{__('User Management')}}</div>
        </a>
      </li>

      <li
        class="menu-item {{activeRouteBulk(['dashboard.admin.ai.categories.index','dashboard.admin.ai.categories.createEdit','dashboard.admin.ai.index', 'dashboard.admin.ai.state', 'dashboard.admin.ai.custom.index',  'dashboard.admin.ai.custom.createEdit', 'dashboard.admin.ai.chat.index', 'dashboard.admin.ai.chat.createEdit'])}}">
        <a href="javascript:void(0)"
           class="menu-link menu-toggle">
          {!! get_svg_icon('pallet-2', 'me-2 fs-5 menu-icon', 'mb-1', '', ['height' => '22' , 'width' => '22'])!!}
          <div>
            {{__('Templates')}}
          </div>
        </a>
        <ul
          class="menu-sub">
          <li
            class="menu-item {{activeRouteBulk(['dashboard.admin.ai.categories.index','dashboard.admin.ai.categories.createEdit'])}}">
            <a href="{{route('dashboard.admin.ai.categories.index')}}" class="menu-link">
              <div>{{__('AI Categories')}}</div>
            </a>
          </li>
          <li
            class="menu-item {{activeRouteBulk(['dashboard.admin.ai.index', 'dashboard.admin.ai.state'])}}">
            <a href="{{route('dashboard.admin.ai.index')}}" class="menu-link">
              <div>{{__('AI System')}}</div>
            </a>
          </li>
          <li
            class="menu-item {{activeRouteBulk(['dashboard.admin.ai.custom.index','dashboard.admin.ai.custom.createEdit'])}}">
            <a href="{{route('dashboard.admin.ai.custom.index')}}" class="menu-link">
              <div>{{__('AI Custom')}}</div>
            </a>
          </li>
          <li
            class="menu-item {{activeRouteBulk(['dashboard.admin.ai.chat.index','dashboard.admin.ai.chat.createEdit'])}}">
            <a href="{{route('dashboard.admin.ai.chat.index')}}" class="menu-link">
              <div>{{__('Chat Personage')}}</div>
            </a>
          </li>
        </ul>
      </li>

      <li
        class="menu-item {{activeRouteBulk(['dashboard.admin.frontend.settings','dashboard.admin.frontend.sections', 'dashboard.admin.frontend.features.index', 'dashboard.admin.frontend.features.createEdit', 'dashboard.admin.frontend.usecases.index', 'dashboard.admin.frontend.usecases.createEdit','dashboard.admin.frontend.howItWorks.index','dashboard.admin.frontend.howItWorks.createEdit', 'dashboard.admin.frontend.testimonials.index', 'dashboard.admin.frontend.testimonials.createEdit','dashboard.admin.frontend.partners.index','dashboard.admin.frontend.partners.createEdit', 'dashboard.admin.frontend.faq.index', 'dashboard.admin.frontend.faq.createEdit'])}}">
        <a href="javascript:void(0)" class="menu-link menu-toggle">
          {!! get_svg_icon('layers', 'me-2 fs-5 menu-icon', 'mb-1', '', ['height' => '22' , 'width' => '22'])!!}
          <div>
            {{__('Frontend')}}
          </div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item {{activeRouteBulk(['dashboard.admin.frontend.settings'])}}">
            <a href="{{route('dashboard.admin.frontend.settings')}}" class="menu-link">
              <div>{{__('Frontend Settings')}}</div>
            </a>
          </li>
          <li class="menu-item {{activeRouteBulk(['dashboard.admin.frontend.sections'])}}">
            <a href="{{route('dashboard.admin.frontend.sections')}}" class="menu-link">
              <div>{{__('Frontend Sections')}}</div>
            </a>
          </li>
          <li
            class="menu-item {{activeRouteBulk(['dashboard.admin.frontend.features.index','dashboard.admin.frontend.features.createEdit'])}}">
            <a href="{{route('dashboard.admin.frontend.features.index')}}" class="menu-link">
              <div>{{__('Features Section')}}</div>
            </a>
          </li>
          <li
            class="menu-item {{activeRouteBulk(['dashboard.admin.frontend.usecases.index','dashboard.admin.frontend.usecases.createEdit'])}}">
            <a href="{{route('dashboard.admin.frontend.usecases.index')}}" class="menu-link">
              <div>{{__('Usecases Section')}}</div>
            </a>
          </li>
          <li
            class="menu-item {{activeRouteBulk(['dashboard.admin.frontend.howitWorks.index','dashboard.admin.frontend.howItWorks.createEdit'])}}">
            <a href="{{route('dashboard.admin.frontend.howItWorks.index')}}" class="menu-link">
              <div>{{__('How it Works Section')}}</div>
            </a>
          </li>
          <li
            class="menu-item {{activeRouteBulk(['dashboard.admin.frontend.testimonials.index','dashboard.admin.frontend.testimonials.createEdit'])}}">
            <a href="{{route('dashboard.admin.frontend.testimonials.index')}}" class="menu-link">
              <div>{{__('Testimonials Section')}}</div>
            </a>
          </li>
          <li
            class="menu-item {{activeRouteBulk(['dashboard.admin.frontend.partners.index','dashboard.admin.frontend.partners.createEdit'])}}">
            <a href="{{route('dashboard.admin.frontend.partners.index')}}" class="menu-link">
              <div>{{__('Partners Section')}}</div>
            </a>
          </li>
          <li
            class="menu-item {{activeRouteBulk(['dashboard.admin.frontend.faq.index','dashboard.admin.frontend.faq.createEdit'])}}">
            <a href="{{route('dashboard.admin.frontend.faq.index')}}" class="menu-link">
              <div>{{__('F.A.Q')}}</div>
            </a>
          </li>
        </ul>
      </li>

      <li
        class="menu-item {{activeRouteBulk(['dashboard.admin.finance.plans.index','dashboard.admin.finance.gateways.index','dashboard.admin.finance.plans.plansCreateEdit','dashboard.admin.finance.plans.subscriptionsCreateEdit'])}}">
        <a href="javascript:void(0)" class="menu-link menu-toggle">
          {!! get_svg_icon('money-bag', 'me-2 fs-5 menu-icon', 'mb-1', '', ['height' => '22' , 'width' => '22'])!!}
          <div>
            {{__('Finance')}}
          </div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item {{activeRoute('dashboard.admin.finance.plans.index')}}">
            <a href="{{route('dashboard.admin.finance.plans.index')}}" class="menu-link">
              <div>{{__('Membership Plans')}}</div>
            </a>
          </li>
          <li class="menu-item {{activeRoute('dashboard.admin.finance.gateways.index')}}">
            <a href="{{route('dashboard.admin.finance.gateways.index')}}" class="menu-link">
              <div>{{__('Payment Gateways')}}</div>
            </a>
          </li>
          <li class="menu-item {{activeRoute('dashboard.admin.finance.plans.plansCreateEdit')}}">
            <a href="{{route('dashboard.admin.finance.plans.plansCreateEdit')}}" class="menu-link">
              <div>{{__('Create New Plan Pack')}}</div>
            </a>
          </li>
          <li class="menu-item {{activeRoute('dashboard.admin.finance.plans.subscriptionsCreateEdit')}}">
            <a href="{{route('dashboard.admin.finance.plans.subscriptionsCreateEdit')}}" class="menu-link">
              <div>{{__('Create New Subscription')}}</div>
            </a>
          </li>
        </ul>
      </li>

      <li
        class="menu-item {{activeRouteBulk(['dashboard.admin.settings.index', 'dashboard.admin.settings.invoice', 'dashboard.admin.settings.ai','dashboard.admin.settings.mail', 'amamarul.translations.home'])}}">
        <a href="javascript:void(0)"
           class="menu-link menu-toggle">
          {!! get_svg_icon('settings', 'me-2 fs-5 menu-icon', 'mb-1', '', ['height' => '22' , 'width' => '22'])!!}
          <div>
            {{__('Settings')}}
          </div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item {{activeRoute('dashboard.admin.settings.index')}}">
            <a href="{{route('dashboard.admin.settings.index')}}" class="menu-link">
              <div>{{__('General')}}</div>
            </a>
          <li class="menu-item  {{activeRoute('dashboard.admin.settings.invoice')}}">
            <a href="{{route('dashboard.admin.settings.invoice')}}" class="menu-link">
              <div>{{__('Invoice')}}</div>
            </a>
          </li>
          <li class="menu-item {{activeRoute('dashboard.admin.settings.ai')}}">
            <a href="{{route('dashboard.admin.settings.ai')}}" class="menu-link">
              <div>{{__('AI Config')}}</div>
            </a>
          </li>
          <li class="menu-item {{activeRoute('dashboard.admin.settings.mail')}}">
            <a href="{{route('dashboard.admin.settings.mail')}}" class="menu-link">
              <div>{{__('Mail')}}</div>
            </a>
          </li>
          <li class="menu-item {{activeRoute('amamarul.translations.home')}}">
            <a href="{{LaravelLocalization::localizeUrl( route('amamarul.translations.home') )}}" class="menu-link">
              <div>{{__('Translate Strings')}}</div>
            </a>
          </li>
        </ul>
      </li>

      <li class="menu-item {{activeRoute('dashboard.admin.update.index')}}">
        <a href="#" class="menu-link">
          {!! get_svg_icon('refresh', 'me-2 fs-5 menu-icon', 'mb-1', '', ['height' => '22' , 'width' => '22'])!!}
          <div>
            {{__('Update')}}
          </div>
        </a>
      </li>
    @endif


    <div class="menu-divider d-none"></div>
    <div class="w-100 p-3 mt-auto">
      <a class="d-flex align-items-center btn btn-sm rounded-pill btn-secondary text-white"
         href="{{route('dashboard.user.payment.subscription')}}">
        {!! get_svg_icon('rocket-3', 'me-2 fs-5 menu-icon', 'mb-1', '', ['height' => '22' , 'width' => '22'])!!}
        {{__('Upgrade')}}
      </a>
    </div>
  </ul>
</div>
