@extends('layout.app')
@section('content')
  @if(getFrontSection('hero_active') == 1)
    <section class="relative isolate mx-3 lg:mx-7 bg-white hero rounded-[1.5rem]" id="home">
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

      <div class="container relative overflow-hidden rounded-3xl">
        <div class="pointer-events-none absolute inset-x-0 top-0 -z-10"
             style="background: radial-gradient(circle at 0% -20%, rgb(229, 229, 229), rgba(112,61,201,0.37), transparent, transparent, transparent)">
        </div>
        <div class="mx-auto max-w-5xl mb-16 pt-16 pb-4 text-center">
          <div
            class="relative overflow-hidden inline-flex items-center rounded-3xl border border-slate-200 px-4 py-1 text-white space-x-3 bg-dark">
            <span class="inline-block text-md">🚀</span>
            <span
              class="text-xs font-bold uppercase tracking-wide">#1 {{ucwords(getFrontSection('hero_tag'))}}</span>
            <div class="overlay-wip pointer-events-none ">
              <div class="progress-glow-wip animate-progressWip"></div>
            </div>
          </div>
          <h1 class="mt-8 mb-5 text-5xl font-semibold text-slate-800 lg:text-6xl">
            {{getFrontSection('hero_title')}}
            <br>
            <span class="animate-gradient">{{getFrontSection('hero_subtitle')}}</span>
          </h1>
          <div class="inline-block">
            <a
              class="rounded-2xl block bg-slate-600 px-8 py-4 font-medium text-white transition-all text-md hover:bg-slate-700 focus:outline-none focus:ring-4 focus:ring-slate-300 hover:scale-125"
              href="{{getFrontSection('hero_link') ?? route('login')}}">
              {{getFrontSection('hero_button')}}
            </a>
          </div>
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
    </section>
  @endif

  @if(getFrontSection('chats_slider_active') == 1)
    <section class="relative py-16 z-11 z-2 bg-white">
      <div class="mx-auto mb-8 max-w-xl text-center">
        <div
          class="relative inline-flex overflow-hidden items-center rounded-full bg-[#737EF2] text-white px-3 py-1 text-md font-bold">
          <span class="mr-2 inline-block text-md">🔮</span>
          {{__('+20 Chats Animator')}}
          <div class="overlay-wip pointer-events-none ">
            <div class="progress-glow-wip animate-progressWip"></div>
          </div>
        </div>
      </div>

      <div class="relative overflow-hidden">
        <div class="flex animate-slide space-x-4 !pb-5 pointer-events-none">
          @for($i = 1; $i < 35; $i++)
            <div
              class="flex flex-shrink-0 align-center justify-center pointer-events-none border border-slate-100 bg-white transition-shadow rounded-xl p-[.575rem] hover:shadow-lg">
              <figure class="overflow-hidden rounded-[0.625rem]">
                <img alt="Chat Animator {{$i}}" class="max-w-full h-[3.5rem]" loading="lazy"
                     src="{{asset('media/img/avatars/' . rand(1, 116) . '.png')}}" />
              </figure>
            </div>
          @endfor
        </div>
      </div>
    </section>
  @endif

  @if(getFrontSection('features_active') == 1)
    <section class="relative pb-8">
      <div class="pointer-events-none absolute inset-0 z-1"
           style="background: radial-gradient(circle at 187% 410%, transparent, rgba(4,92,232,0.25), transparent, transparent);">
      </div>
      <div class="container">
        <div class="mx-auto mb-8 max-w-xl text-center">
          <div
            class="relative inline-flex overflow-hidden items-center rounded-full bg-[#B9A0FF] text-white px-3 py-1 text-md font-bold">
            <span class="mr-2 inline-block text-md">🪄</span>
            {{getFrontSection('features_heading')}}
            <div class="overlay-wip pointer-events-none ">
              <div class="progress-glow-wip animate-progressWip"></div>
            </div>
          </div>
        </div>

        <div class="flex flex-row flex-wrap align-center justify-center gap-3 md:gap-[1.875rem]">
          @foreach($features as $feature)
            <div
              class="flex basis-1/1 md:basis-[23%] lg:basis-1/4 border border-slate-100 bg-white px-4 py-2 transition-shadow rounded-2xl hover:shadow-lg">
              <figure class="mr-4 shrink-0 transition-all group-hover:scale-125">
                <div class="relative block">
                <span class="flex align-center justify-center bg-[#f5f4f3] rounded-lg p-2">
                  {!! get_svg_icon_db($feature->icon, 'fs-icon', ['height' => '18' , 'width' => '18'], false, '#039BE5') !!}
                </span>
                </div>
              </figure>
              <div>
                <span class="block font-semibold text-slate-700 hover:text-slate-900">{{$feature->title}}</span>
                <span class="text-sm">{!!$feature->description!!}</span>
              </div>
            </div>
          @endforeach
        </div>
        <div class="mt-6 text-center">
          <div class="inline-block">
            <a
              class="rounded-2xl inline-block bg-slate-600 px-10 py-3 font-medium text-white transition-all text-md hover:bg-slate-700 focus:outline-none focus:ring-4 focus:ring-slate-300 hover:scale-110"
              href="{{getFrontSection('features_link') ?? route('login')}}">
              {{getFrontSection('features_button') ?? __('Join US')}}
            </a>
          </div>
        </div>
      </div>
    </section>
  @endif

  @if(getFrontSection('usecases_active') == 1)
    <section class="relative py-16" id="features">
      <div class="container">
        <div class="mx-auto mb-8 max-w-xl text-center">
          <div
            class="relative inline-flex overflow-hidden items-center rounded-full bg-[#B9A0FF] text-white px-3 py-1 text-md font-bold">
            <span class="mr-2 inline-block text-md">🏆</span>
            {{getFrontSection('usecases_heading')}}
            <div class="overlay-wip pointer-events-none ">
              <div class="progress-glow-wip animate-progressWip"></div>
            </div>
          </div>
        </div>
        <div class="p-6 relative overflow-hidden bg-[#f8f8f8] rounded-3xl">
          <div class="relative">
            <ul class="mb-5 flex flex-wrap items-center justify-center self-stretch" role="tablist">
              @foreach($useCases as $usage)
                <li class="my-1 mr-2.5">
                  <button
                    class="flex items-center rounded-[1.875rem] border border-slate-100 px-5 py-3 font-semibold bg-white shadow-sm transition-all group lg:w-auto text-slate-700 hover:shadow-md hover:bg-[#CDDFFB] [&.active]:bg-[#CDDFFB] [&.active]:border-0 [&.active]:shadow-md {{$loop->first ? 'active' : ''}}"
                    data-bs-target="#{{Str::slug($usage->tab_title)}}" data-bs-toggle="tab">
                    <span>{{$usage->tab_title}}</span></button>
                </li>
              @endforeach
            </ul>
          </div>
          <div class="relative rounded-2xl bg-white p-5 tab-content">
            @foreach($useCases as $usage)
              <div class="tab-pane lg:p-3 fade {{$loop->first ? 'active' : ''}}"
                   id="{{Str::slug($usage->tab_title)}}"
                   tabindex="0">
                <div class="flex items-center justify-center lg:flex">
                  <div class="max-w-4xl max-auto">
                    <div class="flex items-center justify-center space-x-7">
                      <figure class="relative">
                        <img alt="{{$usage->tab_title}}" class="rounded-3xl" src="{{asset($usage->image)}}" />
                      </figure>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
  @endif

  @if(getFrontSection('prompts_active') == 1)
    <section class="overflow-hidden pb-8">
      <div class="container relative overflow-hidden rounded-3xl p-6">
        <div class="mx-auto mb-14 max-w-xl text-center">
          <div
            class="relative inline-flex overflow-hidden items-center rounded-full bg-[#CDDFFB] text-slate-900 px-3 py-1 text-md font-bold">
            <span class="mr-2 inline-block text-md">✒️</span>
            {{getFrontSection('prompts_heading')}}
            <div class="overlay-wip pointer-events-none ">
              <div class="progress-glow-wip animate-progressWip"></div>
            </div>
          </div>
          <p class="mt-3 text-xl text-slate-400">
            {{getFrontSection('prompts_description')}}
          </p>
        </div>
        <div class="relative mx-auto max-w-4xl overflow-hidden">
          <div class="gradient-feature"></div>
          <div class="gradient-feature-right"></div>
          <div class="mb-4 flex animate-brandRight space-x-4">
            @foreach($templates as $item)
              <div
                class="flex flex-shrink-0 items-center justify-center overflow-hidden border border-slate-100 bg-white p-2 rounded-2.5xl">
                <span class="flex align-center justify-center bg-[#f5f4f3] rounded-xl p-2 me-3">
                  {!! get_svg_icon_db($item->icon, 'fs-icon', ['height' => '24' , 'width' => '24'], true) !!}
                </span>
                <span class="mr-2">{{$item->name}}</span>
              </div>
            @endforeach
          </div>
          <div class="mb-4 flex animate-brand space-x-4">
            @foreach($templates->sortBy('name') as $item)
              <div
                class="flex flex-shrink-0 items-center justify-center overflow-hidden border border-slate-100 bg-white p-2 rounded-2.5xl">
                <span class="flex align-center justify-center bg-[#f5f4f3] rounded-xl p-2 me-3">
                  {!! get_svg_icon_db($item->icon, 'fs-icon', ['height' => '24' , 'width' => '24'], true) !!}
                </span>
                <span class="mr-2">{{$item->name}}</span>
              </div>
            @endforeach
          </div>
          <div class="mb-4 flex animate-brandRight space-x-4">
            @foreach($templates->sortBy('description') as $item)
              <div
                class="flex flex-shrink-0 items-center justify-center overflow-hidden border border-slate-100 bg-white p-2 rounded-2.5xl">
                <span class="flex align-center justify-center bg-[#f5f4f3] rounded-xl p-2 me-3">
                  {!! get_svg_icon_db($item->icon, 'fs-icon', ['height' => '24' , 'width' => '24'], true) !!}
                </span>
                <span class="mr-2">{{$item->name}}</span>
              </div>
            @endforeach
          </div>
          <div class="mb-4 flex animate-brand space-x-4">
            @foreach($templates->sortBy('icon') as $item)
              <div
                class="flex flex-shrink-0 items-center justify-center overflow-hidden border border-slate-100 bg-white p-2 rounded-2.5xl">
                <span class="flex align-center justify-center bg-[#f5f4f3] rounded-xl p-2 me-3">
                  {!! get_svg_icon_db($item->icon, 'fs-icon', ['height' => '24' , 'width' => '24'], true) !!}
                </span>
                <span class="mr-2">{{$item->name}}</span>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
  @endif

  @if(getFrontSection('how_it_works_active') == 1)
    <section class="relative py-16" id="hiw">
      <div class="container">
        <div class="relative z-10 overflow-hidden px-8 py-16 bg-dark rounded-2.5xl lg:px-24">
          <div class="pointer-events-none absolute inset-0"
               style="background: radial-gradient(circle at 0% -20%, rgb(229, 229, 229), rgba(112,61,201,0.67), transparent, transparent, transparent)">
          </div>
          <div class="pointer-events-none absolute inset-0"
               style="background: radial-gradient(circle at 187% 216%, transparent,rgba(4,92,232,0.85), transparent, transparent);">
          </div>
          <div class="relative text-center text-white">
            <div class="mx-auto mb-24 max-w-md text-center">
              <div
                class="relative inline-flex overflow-hidden items-center rounded-full bg-[#111827] px-3 py-1 text-md font-bold">
                <span class="mr-2 inline-block text-md">🤩</span>
                {{getFrontSection('how_it_works_heading')}}
                <div class="overlay-wip pointer-events-none ">
                  <div class="progress-glow-wip animate-progressWip"></div>
                </div>
              </div>
              <h2 class="my-3 text-3xl font-medium">
                {{getFrontSection('how_it_works_title')}}
              </h2>
              <p class="mb-12 text-lg">
                {{getFrontSection('how_it_works_description')}}
              </p>
            </div>

            <div class="mt-4 grid gap-7 md:grid-cols-3">
              @foreach($howItWorks as $work)
                <div class="p-8 pt-0 text-center rounded-2.5xl">
                  <div
                    class="mb-9 -mt-8 inline-flex h-[5.5rem] w-[5.5rem] items-center justify-center rounded-full text-3xl border border-[#111827] bg-[#111827]">
                    {{ $loop->index + 1 }}
                  </div>

                  <h3 class="mb-4 text-lg">{{$work->title}}</h3>
                  <p class="">
                    {{$work->content}}
                  </p>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
  @endif

  @if(getFrontSection('image_slider_active') == 1)
    <section class="relative pt-10 pb-10">
      <div class="pointer-events-none absolute inset-0 z-1"
           style="background: radial-gradient(circle at -61% -43%, rgb(229, 229, 229), rgba(112,61,201,0.27), transparent, transparent, transparent)">
      </div>
      <div class="pointer-events-none absolute inset-0 z-1"
           style="background: radial-gradient(circle at 187% 216%, transparent,rgba(4,92,232,0.15), transparent, transparent);">
      </div>
      <div class="container relative">
        <div class="mx-auto mb-4 max-w-xl text-center">
          <h2
            class="relative mb-8 inline-flex items-center overflow-hidden rounded-3xl px-3 py-1 text-white bg-dark text-md">
            <span class="mr-2 inline-block text-md">😍</span>
            {{getFrontSection('image_slider_heading')}}
            <div class="overlay-wip pointer-events-none ">
              <div class="progress-glow-wip animate-progressWip"></div>
            </div>
          </h2>
        </div>

        <div class="relative">
          <div class="swiper card-slider-4-columns !py-5">
            <div class="swiper-wrapper">
              @for($i = 1; $i < 24; $i++)
                <div class="px-4 swiper-slide">
                  <div
                    class="block overflow-hidden border border-slate-100 bg-white rounded-2.5xl transition-all  hover:scale-105">
                    <figure>
                      <img alt="AI Generated Image {{$i}}"
                           class="min-w-full object-cover object-center h-[280px] rounded-[0.625rem]"
                           loading="lazy" src="{{asset('frontend/img/generator/' . $i . '.png')}}" />
                    </figure>
                  </div>
                </div>
              @endfor
            </div>
          </div>

          <div
            class="absolute top-1/2 -left-4 z-10 -mt-6 flex h-12 w-12 cursor-pointer items-center justify-center rounded-full p-3 text-base shadow-sm swiper-button-prev swiper-button-prev-1 group bg-dark sm:-left-6">
            <svg class="fill-white group-hover:fill-slate-100" height="24" viewBox="0 0 24 24" width="24"
                 xmlns="http://www.w3.org/2000/svg">
              <path d="M0 0h24v24H0z" fill="none" />
              <path d="M10.828 12l4.95 4.95-1.414 1.414L8 12l6.364-6.364 1.414 1.414z" />
            </svg>
          </div>
          <div
            class="absolute top-1/2 -right-4 z-10 -mt-6 flex h-12 w-12 cursor-pointer items-center justify-center rounded-full p-3 text-base shadow-sm swiper-button-next swiper-button-next-1 group bg-dark sm:-right-6">
            <svg class="fill-white group-hover:fill-slate-100" height="24" viewBox="0 0 24 24" width="24"
                 xmlns="http://www.w3.org/2000/svg">
              <path d="M0 0h24v24H0z" fill="none" />
              <path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z" />
            </svg>
          </div>
        </div>
      </div>
    </section>
  @endif

  @if(getFrontSection('testimonials_active') == 1)
    <section class="relative bg-[#001] text-white py-16 !md:rounded-[3.5rem] overflow-hidden" id="testimonials">
      <div class="pointer-events-none absolute inset-0 z-1"
           style="background: radial-gradient(circle at 0% -20%, rgb(229, 229, 229), rgba(112,61,201,0.67), transparent, transparent, transparent)">
      </div>
      <div class="pointer-events-none absolute inset-0 z-1"
           style="background: radial-gradient(circle at 187% 216%, transparent,rgba(4,92,232,0.85), transparent, transparent);">
      </div>
      <div
        class="container z-3 relative overflow-hidden xl:left-[calc((100vw-1202px)/4)] xl:max-w-[calc(1202px+((100vw-1202px)/2))] xl:pr-[calc((100vw-1176px)/2)]">
        <div class="mx-auto mb-2 max-w-md text-center">
          <div
            class="relative inline-flex overflow-hidden items-center rounded-full bg-[#111827] text-md px-3 py-1 font-bold">
            <span class="mr-2 inline-block text-md">🥇</span>
            {{getFrontSection('testimonials_heading')}}
            <div class="overlay-wip pointer-events-none ">
              <div class="progress-glow-wip animate-progressWip"></div>
            </div>
          </div>

          <h2 class="mt-3 text-center text-3xl font-medium">{{getFrontSection('testimonials_title')}}</h2>
        </div>

        <div class="max-w-4xl overflow-hidden swiper card-slider">
          <div class="swiper-wrapper">
            @foreach($testimonials as $testimonial)
              <div class="swiper-slide">
                <div class="flex flex-wrap gap-5 p-12">
                  <div class="text-center">
                    <div class="relative flex justify-center">
                      <img alt="" class="max-h-[5rem] self-center rounded-full lg:max-h-24"
                           src="{{asset($testimonial->avatar ?? 'media/img/defaults/avatar.png')}}" />
                    </div>
                    <div class="relative my-3 block">
                      <span class="mt-6 block text-sm font-medium">{{$testimonial->name}}</span>
                      <span class="block font-medium text-2xs tracking-tight0">{{$testimonial->work}}</span>
                    </div>

                    <div class="mb-5 flex justify-center">
                      @for($i = 1; $i < 5; $i++)
                        {!! get_svg_icon('star-2', '', 'h-5 w-5 text-orange', '', ['height' => '22' , 'width' => '22'])!!}
                      @endfor
                    </div>

                    <p class="leading-normal text-md">{!!__('“'.$testimonial->content.'”')!!}</p>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>

        <div class="mt-0 text-center swiper-pagination"></div>
      </div>
    </section>
  @endif

  @if(getFrontSection('partners_active') == 1)
    <div class="relative py-16">
      <div class="container">
        <div class="relative overflow-hidden">
          <div class="flex space-x-8 z-2">
            @foreach($partners as $partner)
              <div class="flex flex-shrink-0 items-center justify-center overflow-hidden rounded-2.5xl">
                <img class="w-[100px]" alt="{{$partner->name}}" title="{{$partner->name}}"
                     src="{{asset($partner->image ?? 'media/img/defaults/avatar.png')}}" />
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  @endif

  @if(getFrontSection('pricing_active') == 1)
    <section class="relative pb-8" id="pricing">
      <div class="container">
        <div class="mx-auto mb-4 max-w-xl text-center">
          <div class="relative text-3xl text-slate-700 ont-display">
            <div
              class="relative inline-flex overflow-hidden items-center rounded-full bg-[#33ff0060] px-3 py-1 text-md font-bold text-slate-900">
              <span class="mr-2 inline-block text-md">🙂</span>
              {{getFrontSection('pricing_heading')}}
              <div class="overlay-wip pointer-events-none ">
                <div class="progress-glow-wip animate-progressWip"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="mx-auto px-6 py-8">
          <div class="sm:flex sm:items-center sm:justify-between">
            <div>
              <h2 class="text-3xl font-bold text-slate-700">{{getFrontSection('pricing_title')}}</h2>
              <p class="mt-4 text-slate-300">{{getFrontSection('pricing_description')}}</p>
            </div>

            <div
              class="overflow-hidden py-2 px-3 mt-6 bg-[#f8f8f8] border border-[#f8f8f8] rounded-2xl">
              <ul class="flex flex-wrap items-center justify-center self-stretch text-slate-800 sm:-mx-0.5"
                  role="tablist">
                <li class="m-1">
                  <button
                    class="flex items-center focus:outline-none px-5 py-2 bg-white rounded-xl hover:bg-[#9E7CFF] [&.active]:bg-[#9E7CFF] [&.active]:text-white focus:bg-[#9E7CFF] focus:text-white hover:text-white active"
                    data-bs-target="#pricing-monthly" data-bs-toggle="tab">
                    {{__('Monthly Billing ')}}
                    @if(getFrontSection('pricing_save_percent') != null)
                      <span
                        class="ml-2 bg-white px-2 py-1 rounded-xl text-[#F35BC7]">{{getFrontSection('pricing_save_percent')}}</span>
                    @endif
                  </button>
                </li>
                <li class="m-1">
                  <button
                    class="flex items-center focus:outline-none px-6 py-3 bg-white rounded-xl hover:bg-[#9E7CFF] [&.active]:bg-[#9E7CFF] [&.active]:text-white focus:bg-[#9E7CFF] focus:text-white hover:text-white"
                    data-bs-target="#pricing-onetime" data-bs-toggle="tab">{{__('One-Time')}} 😎
                  </button>
                </li>
              </ul>
            </div>
          </div>

          <div class="relative rounded-2xl bg-white px-5 py-3 lg:py-5 tab-content">
            <div class="tab-pane lg:p-3 fade show active" id="pricing-monthly" tabindex="0">
              <div class="-mx-6 mt-16 grid gap-6 sm:gap-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                <div class="transform rounded-xl px-3">
                  <div class="flex items-center justify-center pb-2">
                    <img class="max-h-[150px]" src="{{asset(getFrontSection('pricing_monthly_img'))}}"
                         alt="{{getFrontSection('pricing_monthly_text')}}">
                  </div>
                  <p class="rounded-xl bg-light-base px-4 py-1 mt-4 text-slate-900 text-center">
                    {{__('Access to AI writer features to help you.')}}
                  </p>

                  <div class="mt-8 space-y-4">
                    <div class="flex items-center">
                      {!! get_svg_icon('check-circle', '', 'h-5 w-5 text-green')!!}
                      <span class="mx-2 text-slate-700">{{__('PDF, Word, and Text Export')}}</span>
                    </div>

                    <div class="flex items-center">
                      {!! get_svg_icon('check-circle', '', 'h-5 w-5 text-green')!!}
                      <span class="mx-2 text-slate-700">{{__('70+ Languages')}}</span>
                    </div>

                    <div class="flex items-center">
                      {!! get_svg_icon('check-circle', '', 'h-5 w-5 text-green')!!}
                      <span class="mx-2 text-slate-700">{{__('Synthesize text up to 10K characters')}}</span>
                    </div>
                    <div class="flex items-center">
                      {!! get_svg_icon('check-circle', '', 'h-5 w-5 text-green')!!}
                      <span class="mx-2 text-slate-700">{{__('Chatbot support')}}</span>
                    </div>

                    <div class="flex items-center">
                      {!! get_svg_icon('check-circle', '', 'h-5 w-5 text-green')!!}
                      <span class="mx-2 text-slate-700">{{__('Advance Editor Tool')}}</span>
                    </div>

                  </div>
                </div>

                @foreach($plansSubscription as $plan)
                  <div
                    class="transform rounded-2xl border {{$plan->is_featured == 1 ? 'border-4 border-[#8358FF]' : 'border-2 border-slate-200'}} px-6 py-[3.2rem] text-center transition-colors duration-200">
                    <span
                      class="text-md text-slate-800 inline-block mx-auto font-medium bg-[#CDDFFB] leading-none rounded-xl px-3 py-1">{{ucwords($plan->name)}}</span>
                    <h4 class="mt-2 text-4xl font-semibold text-gray-800">
                      {{currency()->symbol}} {{$plan->price}}
                      <span
                        class="text-base font-normal text-gray-600 dark:text-gray-400">/ {{__('Month')}}</span>
                    </h4>

                    <div class="my-8 text-start space-y-4">
                      @if($plan->trial_days > 0)
                        <div class="flex items-center">
                          {!! get_svg_icon('check-circle', '', 'h-5 w-5 text-green')!!}
                          <span class="mx-2 text-slate-700">{{ $trialDays." ".__('Days of free trial.') }}</span>
                        </div>
                      @endif

                      @if (!empty( $plan->features ) )
                        @foreach( explode( ',', $plan->features ) as $feature )
                          <div class="flex items-center">
                            {!! get_svg_icon('check-circle', '', 'h-5 w-5 text-green')!!}
                            <span class="mx-2 text-slate-700">{{ucwords(trim(__($feature)))}}</span>
                          </div>
                        @endforeach
                      @endif

                      <div class="flex items-center">
                        {!! get_svg_icon('check-circle', '', 'h-5 w-5 text-green')!!}
                        <span
                          class="mx-2 text-slate-700"><strong>{{ (int)$plan->total_words >= 0 ? $plan->total_words : __('Unlimited')}}</strong> {{__('Words Tokens')}}</span>
                      </div>
                      <div class="flex items-center">
                        {!! get_svg_icon('check-circle', '', 'h-5 w-5 text-green')!!}
                        <span
                          class="mx-2 text-slate-700"><strong>{{ (int)$plan->total_images >= 0 ? $plan->total_images : __('Unlimited')}}</strong> {{__('Images Tokens')}}</span>
                      </div>
                    </div>

                    <a href="{{route('login')}}"
                       class="mt-10 w-full block rounded-2xl px-4 py-2 font-medium capitalize tracking-wide {{$plan->is_featured == 1 ? 'bg-[#7eff00b5] text-slate-800' : 'bg-slate-100'}} transition-all transform hover:scale-105 hover:bg-slate-600 hover:text-white focus:text-white focus:outline-none focus:bg-slate-600">
                      {{$plan->trial_days > 0 ? __('Start Free Trial') : __('Choose') . ' '. ucwords($plan->name)}}
                    </a>
                  </div>
                @endforeach
              </div>
            </div>
            <div class="tab-pane lg:p-3 fade" id="pricing-onetime" tabindex="0">
              <div class="-mx-6 mt-16 grid gap-6 sm:gap-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                <div class="transform rounded-xl px-3">
                  <div class="flex items-center justify-center pb-2">
                    <img class="max-h-[150px]" src="{{asset(getFrontSection('pricing_onetime_img'))}}"
                         alt="{{__('One-Time')}}">
                  </div>
                  <p class="rounded-xl bg-light-base px-4 py-1 mt-4 text-slate-900 text-center">
                    {{getFrontSection('pricing_onetime_text')}}
                  </p>

                  <div class="mt-8 space-y-4">
                    <div class="flex items-center">
                      {!! get_svg_icon('check-circle', '', 'h-5 w-5 text-green')!!}
                      <span class="mx-2 text-slate-700">{{__('PDF, Word, and Text Export')}}</span>
                    </div>

                    <div class="flex items-center">
                      {!! get_svg_icon('check-circle', '', 'h-5 w-5 text-green')!!}
                      <span class="mx-2 text-slate-700">{{__('70+ Languages')}}</span>
                    </div>

                    <div class="flex items-center">
                      {!! get_svg_icon('check-circle', '', 'h-5 w-5 text-green')!!}
                      <span class="mx-2 text-slate-700">{{__('Synthesize text up to 10K characters')}}</span>
                    </div>
                    <div class="flex items-center">
                      {!! get_svg_icon('check-circle', '', 'h-5 w-5 text-green')!!}
                      <span class="mx-2 text-slate-700">{{__('Chatbot support')}}</span>
                    </div>

                    <div class="flex items-center">
                      {!! get_svg_icon('check-circle', '', 'h-5 w-5 text-green')!!}
                      <span class="mx-2 text-slate-700">{{__('Advance Editor Tool')}}</span>
                    </div>

                  </div>
                </div>

                @foreach($plansOnetime as $plan)
                  <div
                    class="transform rounded-2xl border {{$plan->is_featured == 1 ? 'border-4 border-[#8358FF]' : 'border-2 border-slate-200'}} px-6 py-[3.2rem] text-center transition-colors duration-200">
                    <span
                      class="text-md text-slate-800 inline-block mx-auto font-medium bg-[#ffa500c9] leading-none rounded-xl px-3 py-1">{{ucwords($plan->name)}}</span>
                    <h4 class="mt-2 text-4xl font-semibold text-gray-800">
                      {{currency()->symbol}} {{$plan->price}}
                      <span
                        class="text-base font-normal text-gray-600 dark:text-gray-400">/ {{__('One-Time')}}</span>
                    </h4>

                    <div class="my-8 text-start space-y-4">
                      @if($plan->trial_days > 0)
                        <div class="flex items-center">{!! get_svg_icon('check-circle', '', 'h-5 w-5 text-green')!!}
                          <span class="mx-2 text-slate-700">{{ $trialDays." ".__('Days of free trial.') }}</span>
                        </div>
                      @endif

                      @if (!empty( $plan->features ) )
                        @foreach( explode( ',', $plan->features ) as $feature )
                          <div class="flex items-center">{!! get_svg_icon('check-circle', '', 'h-5 w-5 text-green')!!}
                            <span class="mx-2 text-slate-700">{{ucwords(trim(__($feature)))}}</span>
                          </div>
                        @endforeach
                      @endif

                      <div class="flex items-center">
                        {!! get_svg_icon('check-circle', '', 'h-5 w-5 text-green')!!}
                        <span
                          class="mx-2 text-slate-700"><strong>{{ (int)$plan->total_words >= 0 ? $plan->total_words : __('Unlimited')}}</strong> {{__('Words Tokens')}}</span>
                      </div>
                      <div class="flex items-center">
                        {!! get_svg_icon('check-circle', '', 'h-5 w-5 text-green')!!}
                        <span
                          class="mx-2 text-slate-700"><strong>{{ (int)$plan->total_images >= 0 ? $plan->total_images : __('Unlimited')}}</strong> {{__('Images Tokens')}}</span>
                      </div>
                    </div>

                    <a href="{{route('login')}}"
                       class="mt-10 w-full block rounded-2xl px-4 py-2 font-medium capitalize tracking-wide {{$plan->is_featured == 1 ? 'bg-[#7eff00b5] text-slate-800' : 'bg-slate-100'}} transition-all transform hover:scale-105 hover:bg-slate-600 hover:text-white focus:text-white focus:outline-none focus:bg-slate-600">
                      {{$plan->trial_days > 0 ? __('Start Free Trial') : __('Choose') . ' '. ucwords($plan->name)}}
                    </a>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  @endif

  @if(getFrontSection('faq_active') == 1)
    <section class="relative py-8" id="faq">
      <div class="container">
        <div class="mx-auto mb-12 max-w-xl text-center">
          <div class="relative mb-2 text-3xl text-slate-900 ont-display">
            <div
              class="relative inline-flex overflow-hidden items-center rounded-full bg-[#CDDFFB] px-3 py-1 text-md font-bold">
              <span class="mr-2 inline-block text-md">🤔</span>
              {{getFrontSection('faq_heading')}}
              <div class="overlay-wip pointer-events-none ">
                <div class="progress-glow-wip animate-progressWip"></div>
              </div>
            </div>
          </div>
          <h2 class="my-3 text-xl font-medium text-slate-700">
            {{getFrontSection('faq_title')}} </h2>
          <p class="mx-auto text-lg text-slate-300">
            {{getFrontSection('faq_description')}}
          </p>
        </div>

        <div class="mx-auto accordion max-w-[35rem]" id="faq_wrapper">
          @foreach($faq as $item)
            <div class="mb-5 overflow-hidden rounded-2xl border border-slate-100 accordion-item">
              <h2 class="accordion-header" id="faq-{{$loop->index}}-heading">
                <button aria-controls="faq-1" aria-expanded="false"
                        class="relative flex w-full items-center justify-between bg-white px-10 py-5 text-left text-slate-700 accordion-button collapsed"
                        data-bs-target="#faq-{{$loop->index}}" data-bs-toggle="collapse" type="button">
                  <span>{{ $item->question }}</span>
                  <svg class="h-4 w-4 shrink-0 fill-slate-700 transition-transform accordion-arrow"
                       height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 13.172l4.95-4.95 1.414 1.414L12 16 5.636 9.636 7.05 8.222z"></path>
                  </svg>
                </button>
              </h2>
              <div aria-labelledby="faq-{{$loop->index}}" class="accordion-collapse collapse"
                   data-bs-parent="#faq_wrapper" id="faq-{{$loop->index}}">
                <div class="bg-white px-10 py-4 accordion-body">
                  <p class="">{!! $item->answer !!}</p>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>
  @endif

  @if(getFrontSection('try_it_active') == 1)
    <section class="relative py-8">
      <div class="container">
        <div class="relative z-10 overflow-hidden px-8 py-16 bg-[#001] rounded-2.5xl lg:px-24">
          <div class="pointer-events-none absolute inset-0"
               style="background: radial-gradient(circle at 0% -20%, rgb(229, 229, 229), rgba(112,61,201,0.67), transparent, transparent, transparent)">
          </div>
          <div class="pointer-events-none absolute inset-0"
               style="background: radial-gradient(circle at 187% 216%, transparent,rgba(4,92,232,0.85), transparent, transparent);">
          </div>
          <div class="flex items-center justify-center">
            <div class="mb-6 max-w-xl text-center lg:mb-0">
              <h2 class="mb-5 font-bold text-white text-[4rem] leading-2">{{getFrontSection('try_it_title')}}</h2>
              <p class="mb-8 text-lg text-white">{{getFrontSection('try_it_description')}}</p>
              <div class="inline-block">
                <a
                  class="rounded-2xl block bg-slate-500 px-8 py-4 font-medium text-white transition-all transform text-md hover:bg-slate-700 focus:outline-none focus:ring-4 focus:ring-slate-300 hover:scale-110"
                  href="{{getFrontSection('try_it_link') ?? route('login')}}">
                  {{getFrontSection('try_it_button') ?? __('Join US')}}
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  @endif
@endsection
