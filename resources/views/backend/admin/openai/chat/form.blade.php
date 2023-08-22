@extends('backend.layout.content')
@section('title', 'Add or Edit Chat Template')
@section('content')
  <div class="row my-4">
    <div class="col-xl-6 mx-auto">
      <form id="chat_save" data-form-id="{{$prompt != null ? $prompt->id : ''}}">
        <h5 class="mb-2">{{__('AI Info')}}
        </h5>
        <div class="card mb-4">
          <div class="card-body p-3">
            <div class="mb-3 col-12">
              <label class="form-label" for="avatar">
                {{__('Avatar')}}
              </label>
              <input type="file" class="form-control" id="avatar" name="avatar">
            </div>
            <div class="mb-3 col-12">
              <label class="form-label d-flex align-items-center" for="name">
                {{__('Personage Name')}}
                {!! get_svg_icon('info-circle-fill', 'fs-5', 'ms-2 mb-1', '', ['height' => '20', 'width' => '20','data-bs-toggle'=> "tooltip", 'data-bs-placement'=> "top" ,'title'=> __('Pick a name to your personage.')])!!}
              </label>
              <input type="text" class="form-control" id="name" name="name"
                     value="{{$prompt != null ? $prompt->name : ''}}" placeholder="Albert Einstein">
            </div>
            <div class="mb-3 col-12">
              <label class="form-label d-flex align-items-center" for="short_name">
                {{__('Personage Short Name')}}
                {!! get_svg_icon('info-circle-fill', 'fs-5', 'ms-2 mb-1', '', ['height' => '20', 'width' => '20','data-bs-toggle'=> "tooltip", 'data-bs-placement'=> "top" ,'title'=> __('Shortened name of the personage or human name. Maximum 3 letters is suggested.')])!!}
              </label>
              <input type="text" class="form-control" id="short_name" name="short_name"
                     value="{{$prompt != null ? $prompt->short_name : ''}}" placeholder="AEP">
            </div>
            <div class="mb-3 col-12">
              <label class="form-label d-flex align-items-center" for="description">
                {{__('Description')}}
                {!! get_svg_icon('info-circle-fill', 'fs-5', 'ms-2 mb-1', '', ['height' => '20', 'width' => '20','data-bs-toggle'=> 'tooltip', 'data-bs-placement'=> 'top' ,'title'=> __('A short description of what this chat template can do.')])!!}
              </label>
              <textarea class="form-control" id="description"
                        name="description" rows="4">{{$prompt != null ? $prompt->description : ''}}</textarea>
            </div>
          </div>
        </div>

        <h5 class="mb-2">
          {{__('Personality')}}
        </h5>
        <div class="card mb-4">
          <div class="card-body p-3">
            <div class="mb-3 col-12">
              <label class="form-label d-flex align-items-center" for="perso_name">
                {{__('AI Name')}}
                {!! get_svg_icon('info-circle-fill', 'fs-5', 'ms-2 mb-1', '', ['height' => '20', 'width' => '20','data-bs-toggle'=> 'tooltip', 'data-bs-placement'=> 'top' ,'title'=> __('Give a name to chatbot to give it more personality.')])!!}
              </label>
              <input type="text" class="form-control" id="perso_name" placeholder="John Doe" name="perso_name"
                     value="{{$prompt != null ? $prompt->perso_name : ''}}">
            </div>
            <div class="mb-3 col-12">
              <label class="form-label d-flex align-items-center" for="role">
                {{__('Role')}}
                {!! get_svg_icon('info-circle-fill', 'fs-5', 'ms-2 mb-1', '', ['height' => '20', 'width' => '20','data-bs-toggle'=> 'tooltip', 'data-bs-placement'=> 'top' ,'title'=> __('A role of your chatbot that can define what it can help with')])!!}
              </label>
              <input type="text" class="form-control" id="role" name="role" placeholder="Albert Einstein Assistant Bot"
                     value="{{$prompt != null ? $prompt->role : ''}}">
            </div>
            <div class="mb-3 col-12">
              <label class="form-label d-flex align-items-center" for="prompt_with">
                {{__('Helps With')}}
                {!! get_svg_icon('info-circle-fill', 'fs-5', 'ms-2 mb-1', '', ['height' => '20', 'width' => '20','data-bs-toggle'=> 'tooltip', 'data-bs-placement'=> 'top' ,'title'=> __('Describe what your chatbot can do. It\'s your chatbot introduce that will be shows when a conversation are started.')])!!}
              </label>
              <textarea class="form-control" id="prompt_with"
                        placeholder="I can help you for reflexive think about universe"
                        name="prompt_with" rows="4">{{$prompt != null ? $prompt->prompt_with : ''}}</textarea>
            </div>
            <div class="mb-3 col-12">
              <label class="form-label d-flex align-items-center" for="chat_completions">
                {{__('Chatbot Training')}}
                {!! get_svg_icon('info-circle-fill', 'fs-5', 'ms-2 mb-1', '', ['height' => '20', 'width' => '20','data-bs-toggle'=> 'tooltip', 'data-bs-placement'=> 'top' ,'title'=> __('Chat models take a list of messages as input and return a model-generated message as output. Add your custom JSON data.')])!!}
              </label>
              @php
                $temp = '
    [
        {"role": "system", "content": "You are a helpful assistant."},
        {"role": "user", "content": "Who won the world series in 2020?"},
        {"role": "assistant", "content": "The Los Angeles Dodgers won the World Series in 2020."},
        {"role": "user", "content": "Where was it played?"}
    ]'
              @endphp
              <textarea class="form-control" id="chat_completions"
                        name="chat_completions"
                        rows="10">{{$prompt != null ? $prompt->chat_completions : $temp}}</textarea>
              <div class="alert alert-primary d-flex align-items-center mt-2 mb-0" role="alert">
                <span class="alert-icon text-primary me-2">
                  {!! get_svg_icon('info-circle-fill', 'fs-5', 'ms-2 mb-1', '', ['height' => '20', 'width' => '20','data-bs-toggle'=> 'tooltip', 'data-bs-placement'=> 'top' ,'title'=> __('Chat models take a list of messages as input and return a model-generated message as output. Add your custom JSON data.')])!!}
                </span>
                <a class="d-flex align-center" href="https://platform.openai.com/docs/guides/gpt/chat-completions-api"
                   target="_blank">
                  {{__('More Info')}}
                  {!! get_svg_icon('arrow-up-right', 'fs-4 ms-1', '', '', ['height' => '18', 'width' => '18'])!!}
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 d-flex items-center justify-content-center">
          <button type="submit" id="btn_save" class="btn btn-primary w-100">{{__('Save')}}</button>
        </div>
      </form>
    </div>
  </div>
@endsection

@section('page-script')
  <script>
    function chatSave() {
      $("#chat_save").on("submit", function(e) {
        "use strict";
        e?.preventDefault();
        e?.stopPropagation();

        const id = $(this).attr("data-form-id");

        document.getElementById("btn_save").disabled = true;

        let formData = new FormData();
        formData.append("id", id);
        formData.append("name", $("#name").val());
        formData.append("description", $("#description").val());
        formData.append("short_name", $("#short_name").val());
        formData.append("role", $("#role").val());
        formData.append("perso_name", $("#perso_name").val());
        formData.append("prompt_with", $("#prompt_with").val());
        formData.append("chat_completions", $("#chat_completions").val());

        if ($("#avatar").val() != "undefined") {
          formData.append("avatar", $("#avatar").prop("files")[0]);
        }

        $.ajax({
          type: "POST",
          url: '{{route('dashboard.admin.ai.chat.store')}}',
          data: formData,
          contentType: false,
          processData: false,
          success: function(data) {
            toastr.success("Chat Saved successfully.");
            location.href = '{{route('dashboard.admin.ai.chat.index')}}';
            document.getElementById("btn_save").disabled = false;
          },
          error: function(data) {
            let err = data.responseJSON.errors;
            $.each(err, function(index, value) {
              toastr.error(value);
            });
            document.getElementById("btn_save").disabled = false;
          }
        });
        return false;
      });
    }

    chatSave();
  </script>
@endsection
