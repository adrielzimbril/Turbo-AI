@extends('backend.layout.content')
@section('title', __('Openai Settings'))

@section('content')
  <div class="row my-4">
    <div class="col-xl-6 mx-auto">
      <form id="setting_save">
        <h5 class="mb-2">
          {{__('OpenAI Settings')}}
        </h5>
        <div class="card mb-4">
          <div class="card-body p-3">
            <div class="row">
              <div class="mb-3 col-12">
                <label class="form-label" for="openai_api_secret">{{__('OpenAi API Secret')}}</label>
                <select class="form-select select2 tag" name="openai_api_secret" id="openai_api_secret" multiple>
                  @foreach(explode(',', getSetting('openai_api_secret')) as $secret)
                    <option value="{{$secret}}" selected>{{$secret}}</option>
                  @endforeach
                </select>

                <div class="alert alert-primary d-flex align-items-center mt-3" role="alert">
                <span class="alert-icon text-primary mb-0 me-2">
                   {!! get_svg_icon('info-circle-fill', 'fs-5', '', '', ['height' => '20', 'width' => '20'])!!}
                </span>
                  <div class="d-flex flex-column ps-1">
                    {{__('You can enter as much API KEY as you want. Click "Enter" after each api key.')}}
                  </div>
                </div>

                <div class="alert alert-warning d-flex align-items-start mb-0" role="alert">
                <span class="alert-icon text-warning mb-0 me-2">
                   {!! get_svg_icon('info-circle-fill', 'fs-5', '', '', ['height' => '20', 'width' => '20'])!!}
                </span>
                  <div class="d-flex flex-column ps-1">
                    {{__('Please ensure that your OpenAI API key is fully functional and billing defined on your OpenAI account.')}}
                    <a href="{{route('dashboard.admin.settings.ai.test', 'openai')}}" target="_blank"
                       class="btn btn-primary mt-1">
                      {{__('After Saving Setting, Click Here to Test Your Api Keys')}}
                    </a>
                  </div>
                </div>
              </div>

              <div class="mb-3 col-12">
                <label class="form-label" for="openai_default_model">{{__('Default Openai Model')}}</label>
                <select class="form-select" name="openai_default_model" id="openai_default_model">
                  <option
                    value="text-davinci-003" {{getSetting('openai_default_model') == 'text-davinci-003' ? 'selected' : null}}>{{__('Davinci (Expensive & Capable)')}}</option>
                  <option
                    value="gpt-3.5-turbo" {{getSetting('openai_default_model') == 'gpt-3.5-turbo' ? 'selected' : null}}>{{__('ChatGPT (Fastest & Builded for Chatbot)')}}</option>
                  <option
                    value="gpt-4" {{getSetting('openai_default_model') == 'gpt-4' ? 'selected' : null}}>{{__('ChatGPT-4 (Most Expensive & Fastest & Most Capable)')}}</option>
                </select>

                <div class="alert alert-primary d-flex align-items-baseline mt-3 mb-0" role="alert">
                 <span class="alert-icon alert-icon-lg text-primary me-2">
                      {!! get_svg_icon('info-circle-fill', 'fs-5', '', '', ['height' => '20', 'width' => '20'])!!}
                </span>
                  <div
                    class="d-flex flex-column ps-1">
                    {{__('Please note GPT-4 is not working with every api_key. You have to have an api key which can work with GPT-4.')}}
                    <br>
                    {{__('Also please note that Chat models works with ChatGPT and GPT-4 models. So if you choose below it will automatically use ChatGPT.')}}
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <label class="form-label" for="openai_default_language">{{__('Default Openai Language')}}</label>
                <select class="form-select" name="openai_default_language" id="openai_default_language">
                  @include('backend.admin.settings.languages')
                </select>
              </div>

              <div class="mb-3 col-12">
                <label class="form-label" for="openai_default_tone_of_voice">{{__('Default Tone of Voice')}}</label>
                <select class="form-select" name="openai_default_tone_of_voice" id="openai_default_tone_of_voice">
                  <option
                    value="Professional" {{getSetting('openai_default_tone_of_voice') == 'Professional' ? 'selected' : null}}>{{__('Professional')}}</option>
                  <option
                    value="Funny" {{getSetting('openai_default_tone_of_voice') == 'Funny' ? 'selected' : null}}>{{__('Funny')}}</option>
                  <option
                    value="Casual" {{getSetting('openai_default_tone_of_voice') == 'Casual' ? 'selected' : null}}>{{__('Casual')}}</option>
                  <option
                    value="Excited" {{getSetting('openai_default_tone_of_voice') == 'Excited' ? 'selected' : null}}>{{__('Excited')}}</option>
                  <option
                    value="Witty" {{getSetting('openai_default_tone_of_voice') == 'Witty' ? 'selected' : null}}>{{__('Witty')}}</option>
                  <option
                    value="Sarcastic" {{getSetting('openai_default_tone_of_voice') == 'Sarcastic' ? 'selected' : null}}>{{__('Sarcastic')}}</option>
                  <option
                    value="Feminine" {{getSetting('openai_default_tone_of_voice') == 'Feminine' ? 'selected' : null}}>{{__('Feminine')}}</option>
                  <option
                    value="Masculine" {{getSetting('openai_default_tone_of_voice') == 'Masculine' ? 'selected' : null}}>{{__('Masculine')}}</option>
                  <option
                    value="Bold" {{getSetting('openai_default_tone_of_voice') == 'Bold' ? 'selected' : null}}>{{__('Bold')}}</option>
                  <option
                    value="Dramatic" {{getSetting('openai_default_tone_of_voice') == 'Dramatic' ? 'selected' : null}}>{{__('Dramatic')}}</option>
                  <option
                    value="Grumpy" {{getSetting('openai_default_tone_of_voice') == 'Grumpy' ? 'selected' : null}}>{{__('Grumpy')}}</option>
                  <option
                    value="Secretive" {{getSetting('openai_default_tone_of_voice') == 'Secretive' ? 'selected' : null}}>{{__('Secretive')}}</option>
                </select>
              </div>

              <div class="mb-3 col-12">
                <label class="form-label" for="openai_default_creativity">{{__('Default Creativity')}}</label>
                <select type="text" class="form-select" name="openai_default_creativity"
                        id="openai_default_creativity" required>
                  <option
                    value="0.25" {{getSetting('openai_default_creativity') == 0.25 ? 'selected' : ''}}>{{__('Economic')}}</option>
                  <option
                    value="0.5" {{getSetting('openai_default_creativity') == 0.5 ? 'selected' : ''}}>{{__('Average')}}</option>
                  <option
                    value="0.75" {{getSetting('openai_default_creativity') == 0.75 ? 'selected' : ''}}>{{__('Good')}}</option>
                  <option
                    value="1" {{getSetting('openai_default_creativity') == 1 ? 'selected' : ''}}>{{__('Premium')}}</option>
                </select>
              </div>

              <div class="mb-3 col-12">
                <label class="form-label" for="openai_max_input_length">{{__('Maximum Input Length')}}</label>
                <input type="number" class="form-control" id="openai_max_input_length" name="openai_max_input_length"
                       min="10" max="4500" value="{{getSetting('openai_max_input_length')}}" required>

                <div class="alert alert-primary d-flex align-items-center mt-3 mb-0" role="alert">
                <span class="alert-icon text-primary me-2">
                   {!! get_svg_icon('info-circle-fill', 'fs-5', '', '', ['height' => '20', 'width' => '20'])!!}
                </span>
                  {{__('In Characters')}}
                </div>
              </div>

              <div class="mb-3 col-12">
                <label class="form-label" for="openai_max_output_length">{{__('Maximum Output Length')}}</label>
                <input type="number" class="form-control" id="openai_max_output_length" name="openai_max_output_length"
                       min="0" max="4500" value="{{getSetting('openai_max_output_length')}}" required>

                <div class="alert alert-primary d-flex align-items-start mt-3" role="alert">
                 <span class="alert-icon text-primary mb-0 me-2">
                    {!! get_svg_icon('info-circle-fill', 'fs-5', '', '', ['height' => '20', 'width' => '20'])!!}
                </span>
                  {{__('In Words. OpenAI has a hard limit based on Token limits for each model. Refer to OpenAI documentation to learn more. As a recommended by OpenAI, max result length is capped at 2500 Words')}}
                </div>
              </div>
            </div>
          </div>
        </div>
        <h5 class="mb-2">
          {{__('Image Settings')}}
        </h5>
        <div class="card mb-4">
          <div class="card-body p-3">
            <div class="row">
              <div class="mb-3 col-12">
                <div class="mb-3 col-12">
                  <label class="form-label" for="image_processor">{{__('Default Image processor')}}</label>
                  <select class="form-select" name="image_processor" id="image_processor">
                    <option
                      value="dall-e" {{getSetting('image_processor') == 'dall-e' ? 'selected' : null}}>DALL-E
                    </option>
                    <option
                      value="stable-diffusion" {{getSetting('image_processor') == 'stable-diffusion' ? 'selected' : null}}>
                      Stable Diffusion
                    </option>
                  </select>
                </div>

                <div class="mb-3 col-12">
                  <label class="form-label" for="stable_diffusion_key">{{__('Stable Diffusion API Key')}}</label>
                  <input type="text" class="form-control" id="stable_diffusion_key" name="stable_diffusion_key"
                         value="{{getSetting('stable_diffusion_key')}}">
                </div>

                <label class="form-label" for="stable_diffusion_engine">{{__('Stable Diffusion Engine')}}</label>
                <select class="form-select" name="stable_diffusion_engine" id="stable_diffusion_engine"
                        required>
                  <option
                    value='stable-diffusion-v1-5' {{getSetting('stable_diffusion_engine') == 'stable-diffusion-v1-5' ? 'selected' : null}}>{{ __('Stable Diffusion v1.5') }}</option>
                  <option
                    value='stable-diffusion-512-v2-1' {{getSetting('stable_diffusion_engine') == 'stable-diffusion-512-v2-1' ? 'selected' : null}}> {{ __('Stable Diffusion v2.1') }}</option>
                  <option
                    value='stable-diffusion-768-v2-1' {{getSetting('stable_diffusion_engine') == 'stable-diffusion-768-v2-1' ? 'selected' : null}}> {{ __('Stable Diffusion v2.1-768') }}</option>
                  <option
                    value='stable-diffusion-xl-beta-v2-2-2' {{getSetting('stable_diffusion_engine') == 'stable-diffusion-xl-beta-v2-2-2' ? 'selected' : null}}> {{ __('Stable Diffusion v2.2.2-XL Beta') }}</option>
                </select>
              </div>

              <div class="col-12 d-flex items-center justify-content-center">
                <button type="submit" id="btn_save" class="btn btn-primary w-100">{{__('Save')}}</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection

@section('page-script')
  <script>
    function settingsSave() {
      $("#setting_save").on("submit", function(e) {
        "use strict";
        e?.preventDefault();
        e?.stopPropagation();

        document.getElementById("btn_save").disabled = true;

        let formData = new FormData();
        formData.append("openai_api_secret", $("#openai_api_secret").val());
        formData.append("openai_default_model", $("#openai_default_model").val());
        formData.append("openai_default_language", $("#openai_default_language").val());
        formData.append("openai_default_tone_of_voice", $("#openai_default_tone_of_voice").val());
        formData.append("openai_default_creativity", $("#openai_default_creativity").val());
        formData.append("openai_max_input_length", $("#openai_max_input_length").val());
        formData.append("openai_max_output_length", $("#openai_max_output_length").val());
        formData.append("image_processor", $("#image_processor").val());
        formData.append("stable_diffusion_key", $("#stable_diffusion_key").val());
        formData.append("stable_diffusion_engine", $("#stable_diffusion_engine").val());

        $.ajax({
          type: "POST",
          url: '{{route('dashboard.admin.settings.ai.store')}}',
          data: formData,
          contentType: false,
          processData: false,
          success: function(data) {
            toastr.success("Settings saved successfully.");
            location.href = '{{route('dashboard.admin.settings.ai')}}';
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

    settingsSave();
  </script>
@endsection
