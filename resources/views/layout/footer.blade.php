<footer class="relative overflow-hidden page-footer bg-[#001] rounded-t-[2rem]">
  <div class="container py-8 text-white">
    <div class="flex flex-col items-center justify-between pt-8 pb-4 space-y-2 sm:flex-row sm:space-y-0">
      <div class="col-span-full sm:col-span-3 md:col-span-4">
        <a class="mb-6 flex" href="{{route('index')}}">
          <img alt="{{getSetting('site_name')}}" class="max-h-7" src="{{getSetting('logo')}}" />
        </a>
      </div>

      <div class="col-span-full sm:col-span-3 md:col-span-2">
        <div class="flex space-x-5">
          @if(getFrontSection('footer_facebook') != null)
            <a href="{{getFrontSection('footer_facebook')}}" class="flex flex-wrap space-x-5 group">
              {!! get_svg_icon('facebook', 'mr-1', 'h-[22px]')!!}
              {{__('Facebook')}}
            </a>
          @endif
          @if(getFrontSection('footer_instagram') != null)
            <a href="{{getFrontSection('footer_instagram')}}" class="flex flex-wrap space-x-5 group">
              {!! get_svg_icon('instagram-2', 'mr-1', 'h-[22px]')!!}
              {{__('Instagram')}}
            </a>
          @endif
          @if(getFrontSection('footer_twitter') != null)
            <a href="{{getFrontSection('footer_twitter')}}" class="flex flex-wrap space-x-5 group">
              {!! get_svg_icon('twitter-2', 'mr-1', 'h-[22px]')!!}
              {{__('Twitter')}}
            </a>
          @endif
        </div>
      </div>
    </div>

    <div
      class="flex flex-col items-center justify-center text-center border-t border-slate-900 pt-6 space-y-2 sm:flex-row sm:space-y-0">
            <span class="text-sm0">
              &copy; {{date('Y')}} {{getSetting('site_name')}} | {{__('All Rights Reserved.')}} — {{__('Made by')}}
              <a
                href="{{getSetting('footer_link') ?? route('index')}}">{{getSetting('footer_link_text') ?? 'Oricodes Inc.'}}</a>
            </span>
    </div>
  </div>
</footer>
