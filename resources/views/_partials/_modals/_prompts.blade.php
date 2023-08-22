<div class="modal fade" id="prompts_modal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalPromptsMainTitle">{{__('Personnage')}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="{{__('Close')}}"></button>
      </div>
      <div class="modal-body">
        <div class="ai-wrapper d-flex flex-wrap justify-content-center align-items-center position-relative">
          <div class="card bg-label-secondary shadow-none rounded-2 mb-4">
            @include('backend.user.ai._partials.search-mapper')
          </div>

          <div class="row">
            @include('backend.user.ai._partials.list')
          </div>
        </div>
        <div class="modal-footer d-none">
          <div class="col-12 mt-4 text-center">
            <button type="reset" class="btn btn-label-secondary btn-reset" data-bs-dismiss="modal" aria-label="Close">
              {{__('Cancel')}}
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
