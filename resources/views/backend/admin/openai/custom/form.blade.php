@extends('backend.layout.content')
@section('title', __('Add or Edit Custom Template'))
@section('content')

  <div class="row my-4">
    <div class="col-xl-6 mx-auto">
      <form id="custom_save" data-form-id="{{$prompt != null ? $prompt->id : ''}}">
        <h5 class="mb-2">{{__('AI Info')}}
        </h5>
        <div class="card mb-4">
          <div class="card-body p-3">
            <div class="mb-3 col-12">
              <label class="form-label d-flex align-items-center" for="name">
                {{__('Template Name')}}
                {!! get_svg_icon('info-circle-fill', 'fs-5', 'ms-2 mb-1', '', ['height' => '20', 'width' => '20','data-bs-toggle'=> 'tooltip', 'data-bs-placement'=> 'top' ,'title'=> __('Title for the template that will be show in templates library')])!!}
              </label>
              <input type="text" class="form-control" id="name" name="name"
                     value="{{$prompt != null ? $prompt->name : ''}}">
            </div>
            <div class="mb-3 col-12">
              <label class="form-label d-flex align-items-center" for="description">
                {{__('Template Description')}}
                {!! get_svg_icon('info-circle-fill', 'fs-5', 'ms-2 mb-1', '', ['height' => '20', 'width' => '20','data-bs-toggle'=> 'tooltip', 'data-bs-placement'=> 'top' ,'title'=> __('A short description about what this template do.')])!!}
              </label>
              <textarea class="form-control" rows="3" id="description"
                        name="description">{{$prompt != null ? $prompt->description : ''}}</textarea>
            </div>
            <div class="mb-3 col-12">
              <label class="form-label d-flex align-items-center" for="icon">
                {{__('Template Icon')}}
                <a target="_blank" class="mx-1"
                   href="https://fontawesome.com/v6/search?o=r&s=duotone&f=classic%2Cbrands">Font Awesome SVG</a>
                {!! get_svg_icon('info-circle-fill', 'fs-5', 'ms-1 mb-1', '', ['height' => '20', 'width' => '20','data-bs-toggle'=> 'tooltip', 'data-bs-placement'=> 'top' ,'title'=> __('Paste the svg code you get from the Font Awesome Icons or any other icon library')])!!}
              </label>
              <input type="text" class="form-control" id="icon" name="icon"
                     value="{{$prompt != null ? $prompt->icon : ''}}">
            </div>
            <div class="mb-3 col-12">
              <label class="form-label d-flex align-items-center" for="category">
                {{__('Template Category')}}
                {!! get_svg_icon('info-circle-fill', 'fs-5', 'ms-2 mb-1', '', ['height' => '20', 'width' => '20','data-bs-toggle'=> 'tooltip', 'data-bs-placement'=> 'top' ,'title'=> __('Categories of the template. For filtering in the templates list.')])!!}
              </label>
              <select class="form-select" name="category" id="category">
                @foreach($categories as $category)
                  <option
                    value="{{$category->name}}" {{isset($prompt) && isset($prompt->category) && in_array($category->name, explode(',', $prompt->category)) ? 'selected' : ''}}>
                    {{$category->name}}
                  </option>
                @endforeach
              </select>
            </div>
          </div>
        </div>

        <div class="d-flex justify-content-between my-2">
          <div class="m-0">
            <h5 class="mb-0 mt-2">
              {{__('Inputs')}}
            </h5>
          </div>
          <div class="d-flex align-items-center">
            <a href="javascript:void(0)" id="input_more"
               class="btn btn-primary p-2">
              {!! get_svg_icon('add-circle', 'fs-4', '', '', ['height' => '20' , 'width' => '20'])!!}
            </a>
          </div>
        </div>
        <div class="card mb-4">
          <div class="card-body p-3">
            @if($prompt != null)
              @php $i = 1 @endphp
              @foreach(json_decode($prompt->fields) as $field)
                <div class="input_group border rounded-2 p-3 mb-4" data-input-name="{{$field->question}}"
                     data-inputs-id="{{$i}}">
                  <div class="mb-3 col-12">
                    <label class="form-label d-flex align-items-center">
                      {{__('Select Input Type')}}
                      {!! get_svg_icon('info-circle-fill', 'fs-5', 'ms-2 mb-1', '', ['height' => '20', 'width' => '20','data-bs-toggle'=> 'tooltip', 'data-bs-placement'=> 'top' ,'title'=> __('Input fields for short texts and Textarea fields are good for long text.')])!!}
                    </label>
                    <select class="form-select more_type">
                      <option
                        value="text" {{$field->type == 'text' ? 'selected' : ''}}>{{__('Input Field')}}</option>
                      <option
                        value="textarea" {{$field->type == 'textarea' ? 'selected' : ''}}>{{__('Textarea Field')}}</option>
                    </select>
                  </div>
                  <div class="mb-3 col-12">
                    <label class="form-label d-flex align-items-center">
                      {{__('Input Name')}}
                      {!! get_svg_icon('info-circle-fill', 'fs-5', 'ms-2 mb-1', '', ['height' => '20', 'width' => '20','data-bs-toggle'=> 'tooltip', 'data-bs-placement'=> 'top' ,'title'=> __('Unique input name that you can use in your prompts later.')])!!}
                    </label>
                    <input type="text" class="form-control more_name" value="{{$field->question}}">
                  </div>
                  <div class="mb-3 col-12">
                    <label class="form-label d-flex align-items-center">
                      {{__('Input Description')}}
                      {!! get_svg_icon('info-circle-fill', 'fs-5', 'ms-2 mb-1', '', ['height' => '20', 'width' => '20','data-bs-toggle'=> 'tooltip', 'data-bs-placement'=> 'top' ,'title'=> __('A description for the input.')])!!}
                    </label>
                    <input type="text" class="form-control more_description" value="{{$field->description}}">
                  </div>
                  <div class="col-12 d-flex justify-content-end">
                    <button class="remove btn btn-label-danger"
                            type="button" disabled>
                      {!! get_svg_icon('minus-circle', 'fs-4', 'me-1', '', ['height' => '22' , 'width' => '22'])!!}
                      {{__('Remove')}}
                    </button>
                  </div>
                </div>
                <div id="ai_more"></div>
                @php $i++ @endphp
              @endforeach
            @else
              <div class="input_group border rounded-2 p-3 mb-4" data-inputs-id="1">
                <div class="mb-3 col-12">
                  <label class="form-label d-flex align-items-center">
                    {{__('Select Input Type')}}
                    {!! get_svg_icon('info-circle-fill', 'fs-5', 'ms-2 mb-1', '', ['height' => '20', 'width' => '20','data-bs-toggle'=> 'tooltip', 'data-bs-placement'=> 'top' ,'title'=> __('Input fields for short texts and Textarea fields are good for long text.')])!!}
                  </label>
                  <select class="form-select more_type">
                    <option value="text">{{__('Input Field')}}</option>
                    <option value="textarea">{{__('Textarea Field')}}</option>
                  </select>
                </div>
                <div class="mb-3 col-12">
                  <label class="form-label d-flex align-items-center">
                    {{__('Input Name')}}
                    {!! get_svg_icon('info-circle-fill', 'fs-5', 'ms-2 mb-1', '', ['height' => '20', 'width' => '20','data-bs-toggle'=> 'tooltip', 'data-bs-placement'=> 'top' ,'title'=> __('Unique input name that you can use in your prompts later.')])!!}
                  </label>
                  <input type="text" class="form-control more_name" placeholder="{{__('Enter Name Here')}}">
                </div>
                <div class="mb-3 col-12">
                  <label class="form-label d-flex align-items-center">
                    {{__('Input Description')}}
                    {!! get_svg_icon('info-circle-fill', 'fs-5', 'ms-2 mb-1', '', ['height' => '20', 'width' => '20','data-bs-toggle'=> 'tooltip', 'data-bs-placement'=> 'top' ,'title'=> __('A description for the input.')])!!}
                  </label>
                  <input type="text" class="form-control more_description"
                         placeholder="{{__('Enter Description Here')}}">
                </div>
                <div class="col-12 d-flex justify-content-end">
                  <button class="remove btn btn-label-danger"
                          type="button" disabled>
                    {!! get_svg_icon('minus-circle', 'fs-4', 'me-1', '', ['height' => '22' , 'width' => '22'])!!}
                    {{__('Remove')}}
                  </button>
                </div>
              </div>
              <div id="ai_more"></div>
            @endif
          </div>
        </div>

        <h5 class="mb-2">
          {{__('Prompt')}}
        </h5>
        <div class="card mb-4">
          <div class="card-body p-3">
            <div class="mb-3 col-12">
              <label class="form-label d-flex align-items-center" for="human_name">
                {{__('Created Inputs')}}
                {!! get_svg_icon('info-circle-fill', 'fs-5', 'ms-2 mb-1', '', ['height' => '20', 'width' => '20','data-bs-toggle'=> 'tooltip', 'data-bs-placement'=> 'top' ,'title'=> __('Click on each item to get the dynamic data from users input.')])!!}
              </label>
              <div id="add_more_btn" class="form-control d-flex flex-wrap">
                @if($prompt != null)
                  @php $i = 1 @endphp
                  @foreach(json_decode($prompt->fields) as $field)
                    <button type="button"
                            class="btn py-1 bg-label-secondary rounded-2 px-2 ms-1"
                            data-input-name="{{$field->question}}" data-inputs-id="{{$i}}">
                      {{$field->name}}
                    </button>
                    @php $i++ @endphp
                  @endforeach
                @endif
              </div>
            </div>
            <div class="mb-3 col-12">
              <label class="form-label" for="prompt">{{__('Custom Prompt')}}</label>
              <textarea class="form-control" id="prompt" name="prompt"
                        rows="5">{{$prompt != null ? $prompt->prompt : ''}}</textarea>
            </div>
          </div>
        </div>

        <div class="col-12 d-flex items-center justify-content-center">
          <button type="submit" id="btn_save" class="btn btn-primary w-100">{{__('Save')}}</button>
        </div>
      </form>
    </div>
  </div>

  <template id="more_temp">
    <div class="input_group border rounded-2 p-3 mb-4" data-inputs-id="1">
      <div class="mb-3 col-12">
        <label class="form-label d-flex align-items-center">
          {{__('Select Input Type')}}
          {!! get_svg_icon('info-circle-fill', 'fs-5', 'ms-2 mb-1', '', ['height' => '20', 'width' => '20','data-bs-toggle'=> 'tooltip', 'data-bs-placement'=> 'top' ,'title'=> __('Input fields for short texts and Textarea fields are good for long text.')])!!}
        </label>
        <select class="form-select more_type">
          <option value="text">{{__('Input Field')}}</option>
          <option value="textarea">{{__('Textarea Field')}}</option>
        </select>
      </div>
      <div class="mb-3 col-12">
        <label class="form-label d-flex align-items-center">
          {{__('Input Name')}}
          {!! get_svg_icon('info-circle-fill', 'fs-5', 'ms-2 mb-1', '', ['height' => '20', 'width' => '20','data-bs-toggle'=> 'tooltip', 'data-bs-placement'=> 'top' ,'title'=> __('Unique input name that you can use in your prompts later.')])!!}
        </label>
        <input type="text" class="form-control more_name" placeholder="{{__('Enter Name Here')}}">
      </div>
      <div class="mb-3 col-12">
        <label class="form-label d-flex align-items-center">
          {{__('Input Description')}}
          {!! get_svg_icon('info-circle-fill', 'fs-5', 'ms-2 mb-1', '', ['height' => '20', 'width' => '20','data-bs-toggle'=> 'tooltip', 'data-bs-placement'=> 'top' ,'title'=> __('A description for the input.')])!!}
        </label>
        <input type="text" class="form-control more_description"
               placeholder="{{__('Enter Description Here')}}">
      </div>
      <div class="col-12 d-flex justify-content-end">
        <button class="remove btn btn-label-danger"
                type="button" disabled>
          {!! get_svg_icon('minus-circle', 'fs-4', 'me-1', '', ['height' => '22' , 'width' => '22'])!!}
          {{__('Remove')}}
        </button>
      </div>
    </div>
  </template>
@endsection

@section('page-script')
  <script>
    function templateSave() {
      $("#custom_save").on("submit", function(e) {
        "use strict";
        e?.preventDefault();
        e?.stopPropagation();

        const id = $(this).attr("data-form-id");

        document.getElementById("btn_save").disabled = true;

        let more_name = [];
        $(".more_name").each(function() {
          more_name.push($(this).val());
        });
        let more_description = [];
        $(".more_description").each(function() {
          more_description.push($(this).val());
        });
        let more_type = [];
        $(".more_type").each(function() {
          more_type.push($(this).val());
        });

        let formData = new FormData();
        formData.append("id", id);
        formData.append("name", $("#name").val());
        formData.append("category", $("#category").val());
        formData.append("description", $("#description").val());
        formData.append("icon", $("#icon").val());
        formData.append("prompt", $("#prompt").val());
        formData.append("input_name", more_name);
        formData.append("input_description", more_description);
        formData.append("input_type", more_type);

        $.ajax({
          type: "post",
          url: '{{route('dashboard.admin.ai.custom.store')}}',
          data: formData,
          contentType: false,
          processData: false,
          success: function(data) {
            toastr.success("Saved successfully.");
            location.href = '{{route('dashboard.admin.ai.custom.index')}}';
            document.getElementById("btn_save").disabled = false;
          },
          error: function(data) {
            let err = data.responseJSON.errors;
            toastr.error("Error for save.");
            $.each(err, function(index, value) {
              toastr.error(value);
            });
            document.getElementById("btn_save").disabled = false;
          }
        });
        return false;
      });
    }

    templateSave();

    const slugify = str =>
      `/*##${str
        .toLowerCase()
        .trim()
        .replace(/[^\w\s-]/g, "")
        .replace(/[\s_-]+/g, "-")
        .replace(/^-+|-+$/g, "")}##*/`;

    function init() {
      let thisFields = document.querySelectorAll(".input_group");
      let fieldPar = [...thisFields].at(-1);
      let lastFieldsId = fieldPar ? parseInt(fieldPar.getAttribute("data-inputs-id"), 10) : 0;

      $("#input_more").click(function(e) {
        e?.preventDefault();
        e?.stopPropagation();

        const button = this;
        const thisFs = document.querySelectorAll(".more_name, .more_description, .more_type");
        let isEmpty = false;

        thisFs.forEach(input => {
          const { value } = input;
          if (!value || value.length === 0 || value.replace(/\s/g, "") === "") {
            return (isEmpty = true);
          }
        });

        if (isEmpty) {
          return toastr.error("Please fill all fields before create new group.");
        }

        const newFields = document.querySelector("#more_temp").content.cloneNode(true);
        const newFieldsCtn = newFields.firstElementChild;

        newFieldsCtn.dataset.inputsId = lastFieldsId + 1;

        document.querySelector("#ai_more").before(newFields);

        thisFields = document.querySelectorAll(".input_group");
        fieldPar = [...thisFields].at(-1);

        if (thisFields.length > 1) {
          document.querySelectorAll("[data-inputs-id] .remove").forEach(el => el.removeAttribute("disabled"));
        }

        lastFieldsId++;
        const timeout = setTimeout(() => {
          newFieldsCtn.querySelector(".more_name").focus();
          clearTimeout(timeout);
        }, 100);

        return false;
      });

      $("body").on("click", "[data-inputs-id] .remove", function(e) {
        e?.preventDefault();
        e?.stopPropagation();

        const button = $(this);
        const parent = button.closest(".input_group");
        const inputsId = parent.attr("data-inputs-id");
        const prompt = $("#prompt");
        const promptVal = prompt.val();

        prompt.val(promptVal.replaceAll(slugify(parent.attr("data-input-name")), ""));

        $(`[data-inputs-id=${inputsId}]`).remove();

        thisFields = document.querySelectorAll(".input_group");
        fieldPar = [...thisFields].at(-1);

        if (thisFields.length > 1) {
          document.querySelectorAll("[data-inputs-id] .remove").forEach(el => el.removeAttribute("disabled"));
        } else {
          document.querySelectorAll("[data-inputs-id] .remove").forEach(el => el.setAttribute("disabled", true));
        }

        return false;
      });

      $("body").on("click", "button[data-input-name]", function(e) {
        e?.preventDefault();
        e?.stopPropagation();

        const prompt = $("#prompt");
        const promptVal = prompt.val();
        prompt.val(promptVal + slugify($(this).attr("data-input-name")));

        return false;
      });

      $("body").on("input", ".more_name", function(e) {
        e?.preventDefault();
        e?.stopPropagation();

        const input = e.currentTarget;
        const par = input.closest(".input_group");
        const parId = par.getAttribute("data-inputs-id");
        const iName = slugify(input.value);
        let btn = document.querySelector(`button[data-inputs-id="${parId}"]`);

        if (!btn) {
          btn = document.createElement("button");
          btn.className = "btn py-1 bg-label-secondary rounded-2 px-2 ms-1";
          btn.dataset.inputsId = parId;
          btn.type = "button";
          document.querySelector("#add_more_btn").append(btn);
        }

        par.dataset.inputName = iName;
        btn.dataset.inputName = iName;
        btn.innerText = input.value;

        return false;
      });
    }

    init();

  </script>
@endsection

