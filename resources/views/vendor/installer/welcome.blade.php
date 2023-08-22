@extends('vendor.installer.layouts.master')

@section('template_title')
  {{ trans('installer_messages.welcome.templateTitle') }}
@endsection

@section('title')
  {{ trans('installer_messages.welcome.title') }}
@endsection

@section('container')
  <div class="w-4/5 mx-auto">
    <h5 class="inline-bl ock text-xl px-6 py-2 bg-[#5000d060] rounded-xl font-semibold">
      TURBO AI - {{__('Installation Wizard')}}</h5>
    <p
      class="inline-block my-12 text-md px-4 py-2 bg-[#f8f8f8] rounded-2xl">
      Thanks for purchasing Turbo AI 😎🪄!
      <br>
      <br>
      You are about to discover a unique script that will offer you endless possibilities 🔮😍
    </p>
  </div>
  <a
    class="inline-flex items-center justify-center w-2/5 py-2 rounded-2xl shadow-md bg-[#03003e] text-white font-medium transition-all hover:scale-105"
    href="{{ route('LaravelInstaller::requirements') }}">
    {{__('Start Installation')}}
    {!! get_svg_icon('box-arrow-up-right', 'ml-2 fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
  </a>
@endsection
