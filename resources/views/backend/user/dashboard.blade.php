@extends('backend.layout.content')
@section('title', 'Dashboard')

@section('content')
  @include('_partials.subscription_status')

  <div class="row">
    <div class="col-xl-3 col-sm-6 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <div class="d-flex align-items-start">
            <div class="badge rounded bg-label-info p-2 me-3 rounded">
              {!! get_svg_icon('text-cross', 'fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
            </div>
            <div class="d-flex justify-content-between w-100 gap-2 align-items-center">
              <div class="me-2">
                <h6 class="mb-0">
                  {{Auth::user()->remaining_words == -1 ? __('Unlimited') : number_format((int)Auth::user()->remaining_words)}}
                </h6>
                <small class="text-muted">{{__('Words Left')}}</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <div class="d-flex align-items-start">
            <div class="badge rounded bg-label-primary p-2 me-3 rounded">
              {!! get_svg_icon('images-fill', 'fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
            </div>
            <div class="d-flex justify-content-between w-100 gap-2 align-items-center">
              <div class="me-2">
                <h6 class="mb-0">
                  {{Auth::user()->remaining_images == -1 ? __('Unlimited') : number_format((int)Auth::user()->remaining_images)}}
                </h6>
                <small class="text-muted">{{__('Images Left')}}</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <div class="d-flex align-items-start">
            <div class="badge rounded bg-label-success p-2 me-3 rounded">
              {!! get_svg_icon('history-2', 'fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
            </div>
            <div class="d-flex justify-content-between w-100 gap-2 align-items-center">
              <div class="me-2">
                <h6 class="mb-0">
                  {{number_format($total_words * 0.5 / 60)}}</h6>
                <small class="text-muted">{{__('Hours Saved')}}</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <div class="d-flex align-items-start">
            <div class="badge rounded bg-label-warning p-2 me-3 rounded">
              {!! get_svg_icon('book', 'fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
            </div>
            <div class="d-flex justify-content-between w-100 gap-2 align-items-center">
              <div class="me-2">
                <h6 class="mb-0">{{$total_documents}}</h6>
                <small class="text-muted">{{__('Documents')}}</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="ai-wrapper my-4">
    <h5 class="d-inline-flex bg-label-secondary rounded-pill px-3 py-1 mb-3">
      {{__('AI Creator')}}
    </h5>
    <div class="card bg-label-secondary shadow-none rounded-2 mb-4">
      @include('backend.user.ai._partials.search-mapper')
    </div>

    <div class="row">
      @include('backend.user.ai._partials.list')
    </div>
  </div>
@endsection


@section('page-scripts')
  <script>
    $(document).on("keyup", ".search-ai", function() {
      let searchTerm = $(this).val().toLowerCase();
      let par = $(this).closest(".card .card-body");

      let search = par.find(".filter-map > a");

      $(".ai-container").find("div[data-grid-el]").each(function() {
        if ($(this).filter(function() {
          return $(this).find("h5").text().toLowerCase().indexOf(searchTerm) > -1;
        }).length > 0 || searchTerm.length < 1) {
          $(this).show();
        } else {
          $(this).hide();
          $(".templates-panel-group").hide();
        }
      });
    });
  </script>
@endsection
