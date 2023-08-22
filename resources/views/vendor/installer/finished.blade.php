@extends('vendor.installer.layouts.master')

@section('template_title')
  {{ trans('installer_messages.final.templateTitle') }}
@endsection

@section('title')
  <i class="fa fa-flag-checkered fa-fw" aria-hidden="true"></i>
  {{ trans('installer_messages.final.title') }}
@endsection

@section('container')
  <div class="w-4/5 mx-auto">
    <h5 class="inline-bl ock text-xl px-6 py-2 bg-[#5000d040] rounded-xl font-semibold">
      TURBO AI - {{__('Installation Finished')}} ✨🎊</h5>

    <span
      class="flex items-center justify-center mt-8">
      {!! get_svg_icon('emoji-smile', 'text-green', '', '', ['height' => '200' , 'width' => '200'])!!}
    </span>

    <p
      class="inline-block my-12 text-md px-4 py-2 bg-[#f8f8f8] rounded-2xl">
      You can now discover your script Thanks for purchasing Turbo AI 😎🪄!
      <br>
      <br>
      Just enjoy we will give you endless possibilities 🔮😍
    </p>
  </div>
  <a
    class="inline-flex items-center justify-center w-2/5 py-2 rounded-2xl shadow-md bg-[#03003e] text-white font-medium transition-all hover:scale-105"
    href="{{ route('index') }}">
    {{__('Complete Activation')}}
    {!! get_svg_icon('box-arrow-up-right', 'ml-2 fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
  </a>

@endsection
