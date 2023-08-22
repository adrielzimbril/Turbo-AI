@extends('backend.layout.content')
@section('title', __('AI Image'))

@section('content')

  <div class="card bg-label-secondary shadow-none rounded-2 mb-4">
    <div class="card-body p-2 p-lg-4 pb-3">
      <form id="content_create">
        <div class="d-flex align-items-center rounded-2 bg-white py-1 px-2 mb-3"
             href="javascript:void(0);">
          <input type="text" class="form-control h-px-50 border-0" id="prompt" name="prompt"
                 placeholder="E.g: '3D Cyberpunk avatar', 'Natural Future Buildings', 'People immersed in a thrilling virtual reality experience.'"
                 aria-label="E.g: '3D Cyberpunk avatar', 'Natural Future Buildings', 'People immersed in a thrilling virtual reality experience.'">
          <button type="submit" id="create_btn" class="btn rounded-pill bg-primary text-white mx-1">
            {{__('Generate')}}
            {!! get_svg_icon('bol-circle', 'fs-4 ms-2', 'mb-1', '', ['height' => '22' , 'width' => '22'])!!}
          </button>
        </div>

        <div class="filter-map d-flex flex-wrap align-items-center rounded-3 bg-white m-0 p-2">
          <div class="flex-grow-1 p-2 m-1 rounded-2 bg-label-secondary">
            <label for="size" class="form-label">{{__('Image Size')}}</label>
            <select class="form-control form-select" name="size" id="size">
              <option value="256x256">256x256</option>
              <option value="512x512">512x512</option>
              <option value="1024x1024">1024x1024</option>
            </select>
          </div>
          <div class="flex-grow-1 p-2 m-1 rounded-2 bg-label-secondary">
            <label for="style" class="form-label text-heading">{{__('Art Style')}}</label>
            <select name="style" id="style"
                    class="form-control form-select bg-[#fff] placeholder:text-black">
              <option value="" selected="selected">{{__('None')}}</option>
              <option value="3d_render">{{__('3D Render')}}</option>
              <option value="anime">{{__('Anime')}}</option>
              <option value="ballpoint_pen">{{__('Ballpoint Pen Drawing')}}</option>
              <option value="bauhaus">{{__('Bauhaus')}}</option>
              <option value="cartoon">{{__('Cartoon')}}</option>
              <option value="clay">{{__('Clay')}}</option>
              <option value="contemporary">{{__('Contemporary')}}</option>
              <option value="cubism">{{__('Cubism')}}</option>
              <option value="cyberpunk">{{__('Cyberpunk')}}</option>
              <option value="glitchcore">{{__('Glitchcore')}}</option>
              <option value="impressionism">{{__('Impressionism')}}</option>
              <option value="isometric">{{__('Isometric')}}</option>
              <option value="line">{{__('Line Art')}}</option>
              <option value="low_poly">{{__('Low Poly')}}</option>
              <option value="minimalism">{{__('Minimalism')}}</option>
              <option value="modern">{{__('Modern')}}</option>
              <option value="origami">{{__('Origami')}}</option>
              <option value="pencil">{{__('Pencil Drawing')}}</option>
              <option value="pixel">{{__('Pixel')}}</option>
              <option value="pointillism">{{__('Pointillism')}}</option>
              <option value="pop">{{__('Pop')}}</option>
              <option value="realistic">{{__('Realistic')}}</option>
              <option value="renaissance">{{__('Renaissance')}}</option>
              <option value="retro">{{__('Retro')}}</option>
              <option value="steampunk">{{__('Steampunk')}}</option>
              <option value="sticker">{{__('Sticker')}}</option>
              <option value="ukiyo">{{__('Ukiyo')}}</option>
              <option value="vaporwave">{{__('Vaporwave')}}</option>
              <option value="vector">{{__('Vector')}}</option>
              <option value="watercolor">{{__('Watercolor')}}</option>
            </select>
          </div>
          <div class="flex-grow-1 p-2 m-1 rounded-2 bg-label-secondary">
            <label for="lighting" class="form-label text-heading">{{__('Lightning Style')}}</label>
            <select id="lighting" name="lighting"
                    class="form-control form-select">
              <option value="" selected="selected">{{ __('None') }}</option>
              <option value="ambient">{{ __('Ambient') }}</option>
              <option value="backlight">{{ __('Backlight') }}</option>
              <option value="blue_hour">{{ __('Blue Hour') }}</option>
              <option value="cinematic">{{ __('Cinematic') }}</option>
              <option value="cold">{{ __('Cold') }}</option>
              <option value="dramatic">{{ __('Dramatic') }}</option>
              <option value="foggy">{{ __('Foggy') }}</option>
              <option value="golden_hour">{{ __('Golden Hour') }}</option>
              <option value="hard">{{ __('Hard') }}</option>
              <option value="natural">{{ __('Natural') }}</option>
              <option value="neon">{{ __('Neon') }}</option>
              <option value="studio">{{ __('Studio') }}</option>
              <option value="warm">{{ __('Warm') }}</option>
            </select>
          </div>
          <div class="flex-grow-1 p-2 m-1 rounded-2 bg-label-secondary">
            <label for="mood" class="form-label text-heading">{{__('Mood')}}</label>
            <select id="mood" name="mood"
                    class="form-control form-select">
              <option value="" selected="selected">{{ __('None') }}</option>
              <option value="aggressive">{{ __('Aggressive') }}</option>
              <option value="angry">{{ __('Angry') }}</option>
              <option value="boring">{{ __('Boring') }}</option>
              <option value="bright">{{ __('Bright') }}</option>
              <option value="calm">{{ __('Calm') }}</option>
              <option value="cheerful">{{ __('Cheerful') }}</option>
              <option value="chilling">{{ __('Chilling') }}</option>
              <option value="colorful">{{ __('Colorful') }}</option>
              <option value="dark">{{ __('Dark') }}</option>
              <option value="neutral">{{ __('Neutral') }}</option>
            </select>
          </div>
          <div class="flex-grow-1 p-2 m-1 rounded-2 bg-label-secondary">
            <label for="number_of_images"
                   class="form-label text-heading">{{__('Number of Images')}}</label>
            <select name="number_of_images" id="number_of_images"
                    class="form-control form-select">
              <option value="1" selected="selected">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
        </div>
      </form>
    </div>
  </div>


  <h5 class="d-inline-flex mb-2 mt-4">
    {{__('Your generation results')}}
  </h5>
  <div class="card shadow-none {{isset($promptUsage) ? 'border' : 'p-0'}} mb-4">
    <div class="card-body {{isset($promptUsage) ? '' : 'p-0'}}">
      <div id="lightgallery" class="row">
        @foreach($promptUsage as $usage)
          @include('backend.user.ai._partials.image')
        @endforeach
      </div>

      <div class="mt-2">
        {{$promptUsage->links('pagination::bootstrap-5')}}
      </div>
    </div>
  </div>
@endsection

@section('page-script')
  <script>
    function light() {
      lightGallery(document.getElementById("lightgallery"), {
        plugins: [lgZoom, lgThumbnail, lgShare],
        download: true,
        selector: ".view",
        exThumbImage: "data-external-thumb-image",
        speed: 500
      });
    }

    light();

    function createContent(e) {
      $("#content_create").on("submit", function(e) {
        "use strict";
        e?.preventDefault();
        e?.stopPropagation();
        document.getElementById("create_btn").disabled = true;

        let formData = new FormData();
        formData.append("prompt", $("#prompt").val());
        formData.append("size", $("#size").val());
        formData.append("style", $("#style").val());
        formData.append("lighting", $("#lighting").val());
        formData.append("mood", $("#mood").val());
        formData.append("number_of_images", $("#number_of_images").val());

        $.ajax({
          type: "post",
          url: "{{route('dashboard.user.ai.image.process')}}",
          data: formData,
          contentType: false,
          processData: false,
          success: function(data) {
            $("#lightgallery").prepend(data.image);
            light();
            document.getElementById("create_btn").disabled = false;
          },
          error: function(data) {
            if (data.responseJSON.errors) {
              $.each(data.responseJSON.errors, function(index, value) {
                toastr.error(value);
              });
            } else if (data.responseJSON.message) {
              toastr.error(data.responseJSON.message);
            }
            document.getElementById("create_btn").disabled = false;
          }
        });
        return false;
      });
    }

    createContent();
  </script>
@endsection
