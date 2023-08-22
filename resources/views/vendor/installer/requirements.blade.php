@extends('vendor.installer.layouts.master')

@section('template_title')
  {{ trans('installer_messages.requirements.templateTitle') }}
@endsection

@section('title')
  <i class="fa fa-list-ul fa-fw" aria-hidden="true"></i>
  {{ trans('installer_messages.requirements.title') }}
@endsection

@section('container')
  <h5
    class="inline-block text-md px-6 py-2 text-white bg-[#7d44e7] rounded-2xl">{{__('Server Requirements')}}</h5>

  @foreach($requirements['requirements'] as $type => $requirement)
    <ul class="text-start my-6">
      <li
        class="flex items-center justify-between -mx-5 mb-6 px-5 py-2 rounded-xl font-medium border border-dashed {{ $phpSupportInfo['supported'] ? 'border-[#4ed77f] bg-[#def8e7]' : 'border-[#fe3333] bg-[#ffdede]' }}">
				<span>
					{{ strtoupper($type) }}
          @if($type == 'php')
            {{__('Version required')}} : {{ $phpSupportInfo['minimum'] }}
          @endif
				</span>

        @if($type == 'php')
          <span class="flex items-center justify-between rounded-lg bg-white px-3 py-1 ms-auto">
                    {{ $phpSupportInfo['current'] }}
            {!! get_svg_icon($phpSupportInfo['supported'] ? 'check-circle' : 'exclamation-circle', $phpSupportInfo['supported'] ? 'ml-2 text-green' : 'ml-2 text-red', '', '', ['height' => '20' , 'width' => '20'])!!}
          </span>
        @endif
      </li>
      @foreach($requirements['requirements'][$type] as $extention => $enabled)
        <li class="flex items-center justify-between mb-2 {{ $enabled ? 'success' : 'error' }}">
          {{ $extention }}

          {!! get_svg_icon($enabled? 'check-circle' : 'exclamation-circle', 'ml-2' . $enabled ? 'text-green' : 'text-red', '', '', ['height' => '20' , 'width' => '20'])!!}
        </li>
      @endforeach
    </ul>
    @php
      if(isset($requirements['errors']) && $phpSupportInfo['supported']) $its_error = false
    @endphp
  @endforeach

  @if (!@$has_error)
    <a
      class="inline-flex items-center justify-center w-2/5 py-2 rounded-2xl shadow-md bg-[#03003e] text-white font-medium transition-all hover:scale-105"
      href="{{ route('LaravelInstaller::environmentWizard') }}">
      {{__('Next')}}
      {!! get_svg_icon('box-arrow-up-right', 'ml-2 fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
    </a>
  @endif

@endsection
