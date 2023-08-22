<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@if (trim($__env->yieldContent('template_title')))
      @yield('template_title') |
    @endif {{ trans('installer_messages.title') }}</title>

  <link href="{{asset('frontend/css/app.bundle.css')}}" rel="stylesheet" />

  <link href="{{asset('media/img/favicon/favicon.ico')}}" rel="shortcut icon" />

  @yield('style')
  <script>
    window.Laravel = <?php echo json_encode([
      'csrfToken' => csrf_token(),
    ]); ?>
  </script>
</head>
<body class="font-normal text-[#272D38]  bg-[#272D38] bg-white">

<div class="container py-24">
  <div class="relative text-center">
    <div
      class="absolute pointer-events-none inset-x-0 -z-10 transform-gpu overflow-hidden blur-3xl top-[-10rem] sm:top-[-20rem]">
      <svg
        class="relative left-[calc(50%-11rem)] -z-10 h-[21.1875rem] max-w-none -translate-x-1/2 rotate-[30deg] sm:left-[calc(50%-30rem)] sm:h-[42.375rem]"
        viewBox="0 0 1155 678" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z"
          fill="url(#45de2b6b-92d5-4d68-a6a0-9b9b2abad533)"
          fill-opacity=".3" />
        <defs>
          <linearGradient gradientUnits="userSpaceOnUse" id="45de2b6b-92d5-4d68-a6a0-9b9b2abad533"
                          x1="1155.49" x2="-78.208"
                          y1=".177" y2="474.645">
            <stop offset="1" stop-color="#9089FC"></stop>
            <stop offset="1" stop-color="#FF80B5"></stop>
          </linearGradient>
        </defs>
      </svg>
    </div>

    @if (session('message') || session()->has('errors'))
      <div class="w-1/2 mx-auto relative px-10 text-start">
        <div class="flex flex-col mt-3 mb-8">
          @if (session('message'))
            <p class="alert text-center">
              <strong>
                @if(is_array(session('message')))
                  {{ session('message')['message'] }}
                @else
                  {{ session('message') }}
                @endif
              </strong>
            </p>
          @endif
          @if(session()->has('errors'))
            <div class="w-full bg-red-100 text-sm p-5 rounded-lg relative font-medium z-10" id="error_alert">
              <button type="button"
                      class="close flex items-center justify-center w-8 h-8 rounded-full absolute -top-4 -end-4 bg-red-900 text-white"
                      id="close_alert" data-dismiss="alert" aria-hidden="true">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M18 6l-12 12"></path>
                  <path d="M6 6l12 12"></path>
                </svg>
              </button>
              <h4 class="flex items-center mb-2">
                <svg class="me-2 text-red-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                     viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                     stroke-linejoin="round">
                  <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                  <path d="M12 9v4"></path>
                  <path d="M12 16v.01"></path>
                </svg>
                {{ trans('installer_messages.forms.errorTitle') }}
              </h4>
              <ol class="list-decimal list-inside ps-2 ms-[24px]">
                @foreach($errors->all() as $error)
                  <li class="mb-[2px] last:mb-0">{{ $error }}</li>
                @endforeach
              </ol>
            </div>
          @endif
        </div>
      </div>
    @endif

    <div class="w-3/5 mx-auto relative z-2">

      <div class="flex align-center items-center justify-center flex-wrap mb-5 gap-5 bg-white rounded-xl shadow-md p-2">
        @php
          if(Request::is('install') || Request::is('install/requirements') || Request::is('install/permissions') || Request::is('install/environment') || Request::is('install/environment/wizard'))
              $active = true; else $active = false;
        @endphp

        <div
          class="flex items-center gap-3 bg-[#f1f0f2] rounded-xl px-3 py-2 relative">
        <span
          class="inline-flex items-center justify-center px-3 py-1 opacity-50 [&.active]:opacity-100  bg-[#165df5] text-white rounded-xl font-medium text-sm {{ isActive('LaravelInstaller::welcome') }}">1</span>
          {{__('Welcome')}}
          @if($active)
            <a class="absolute inset-0" href="{{ route('LaravelInstaller::welcome') }}"></a>
          @endif
        </div>
        <div
          class="flex items-center gap-3 bg-[#f1f0f2] rounded-xl px-3 py-2 relative">
        <span
          class="inline-flex items-center justify-center px-3 py-1 opacity-50 [&.active]:opacity-100  bg-[#165df5] text-white rounded-xl font-medium text-sm {{ isActive('LaravelInstaller::requirements') }}">2</span>
          {{__('Server Requirements')}}
          @if($active)
            <a class="absolute inset-0" href="{{ route('LaravelInstaller::requirements') }}"></a>
          @endif
        </div>
        <div
          class="flex items-center gap-3 bg-[#f1f0f2] rounded-xl px-3 py-2 relative">
        <span
          class="inline-flex items-center justify-center px-3 py-1 opacity-50 [&.active]:opacity-100 bg-[#165df5] text-white rounded-xl font-medium text-sm {{ isActive('LaravelInstaller::environment')}} {{ isActive('LaravelInstaller::environmentWizard')}} {{ isActive('LaravelInstaller::environmentClassic')}}">3</span>
          {{__('Database Setup')}}
          @if($active)
            <a class="absolute inset-0" href="{{ route('LaravelInstaller::environmentWizard') }}"></a>
          @endif
        </div>
        <div
          class="flex items-center gap-3 bg-[#f1f0f2] rounded-xl px-3 py-2 relative">
          <span
            class="inline-flex items-center justify-center px-3 py-1 opacity-50 [&.active]:opacity-100  bg-[#165df5] text-white rounded-xl font-medium text-sm {{ isActive('LaravelInstaller::final') }}">4</span>
          {{__('Done')}}
        </div>
      </div>

      <div
        class="py-12 px-10 rounded-xl shadow-md relative bg-white/[.90] backdrop-blur-sm backdrop-saturate-150">
        @yield('container')
      </div>

    </div>

    <div
      class="absolute pointer-events-none inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]">
      <svg
        class="relative left-[calc(50%+3rem)] h-[21.1875rem] max-w-none -translate-x-1/2 sm:left-[calc(50%+36rem)] sm:h-[42.375rem]"
        viewBox="0 0 1155 678" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z"
          fill="url(#ecb5b0c9-546c-4772-8c71-4d3f06d544bc)"
          fill-opacity=".3" />
        <defs>
          <linearGradient gradientUnits="userSpaceOnUse" id="ecb5b0c9-546c-4772-8c71-4d3f06d544bc"
                          x1="1155.49" x2="-78.208"
                          y1=".177" y2="474.645">
            <stop offset="1" stop-color="#9089FC"></stop>
            <stop offset="1" stop-color="#FF80B5"></stop>
          </linearGradient>
        </defs>
      </svg>
    </div>
  </div>
</div>

<div class="fixed bottom-8 right-8">
  <a target="_blank" href="https://docs.oricodes.com/turboai"
     class="inline-flex items-center justify-center  bg-white shadow-2xl rounded-full p-2 text-[#5000d060] transition-all hover:scale-105">
    {!! get_svg_icon('question-square', 'fs-4', '', '', ['height' => '35' , 'width' => '35'])!!}
  </a>
</div>

@yield('scripts')

<script type="text/javascript">
  var errorAlert = document.getElementById("error_alert");
  var closeAlert = document.getElementById("close_alert");
  if (closeAlert) {
    closeAlert.onclick = function() {
      errorAlert.style.display = "none";
    };
  }
</script>
</body>
</html>
