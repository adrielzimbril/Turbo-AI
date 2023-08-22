@extends('vendor.installer.layouts.master')

@section('template_title')
  {{ trans('installer_messages.environment.wizard.templateTitle') }}
@endsection

@section('title')
  <i class="fa fa-magic fa-fw" aria-hidden="true"></i>
  {!! trans('installer_messages.environment.wizard.title') !!}
@endsection

@section('container')
  <h5
    class="inline-block text-md px-6 py-2 mb-4 text-white bg-[#7d44e7] rounded-2xl">{{__('Setup')}}</h5>

  <div class="tabs tabs-full rounded-xl bg-[#f8f8f8] p-2">

    <input class="peer/tab1 tab-input absolute w-0 h-0 invisible" id="tab1" type="radio" name="tabs"
           checked />
    <label for="tab1"
           class="inline-flex px-6 py-2 mx-2 font-medium cursor-pointer rounded-xl shadow-sm transition-all peer-checked/tab1:bg-white">
      {{ trans('installer_messages.environment.wizard.tabs.environment') }}
    </label>

    <input class="peer/tab2 tab-input absolute w-0 h-0 invisible" id="tab2" type="radio" name="tabs" />
    <label for="tab2"
           class="inline-flex px-6 py-2 mx-2 font-medium cursor-pointer rounded-xl shadow-sm transition-all peer-checked/tab2:bg-white">
      {{ trans('installer_messages.environment.wizard.tabs.database') }}
    </label>

    <form
      class="
		text-left bg-white rounded-xl px-2 my-4 py-3
		[&_label]:block [&_label]:mt-6 [&_label]:mb-1
		[&_input]:border-[#dad9ddb3] [&_select]:border-[#dad9ddb3]
		[&_input:not([type=radio])]:block [&_input:not([type=radio])]:w-full [&_input:not([type=radio])]:h-10 [&_input:not([type=radio])]:px-4 [&_input:not([type=radio])]:rounded-xl [&_input:not([type=radio])]:border [&_input:not([type=radio])]:bg-transparent
		[&_select]:block [&_select]:w-full [&_select]:h-10 [&_select]:px-4 [&_select]:rounded-xl [&_select]:border [&_select]:border-solid [&_select]:bg-transparent
		peer-checked/tab1:[&_#tab1content]:block
		peer-checked/tab2:[&_#tab2content]:block
		peer-checked/tab3:[&_#tab3content]:block"
      method="post"
      action="{{ route('LaravelInstaller::environmentSaveWizard') }}">
      <div class="hidden" id="tab1content">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group {{ $errors->has('app_name') ? ' has-error ' : '' }}">
          <label for="app_name">
            {{ trans('installer_messages.environment.wizard.form.app_name_label') }}
          </label>
          <input type="text" name="app_name" id="app_name" value="TURBO AI"
                 placeholder="{{ trans('installer_messages.environment.wizard.form.app_name_placeholder') }}" />
          @if ($errors->has('app_name'))
            <span class="block px-2 py-1 rounded-md mt-1 bg-yellow text-sm">
                            {!! get_svg_icon('exclamation-triangle', 'mr-2 fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
              {{ $errors->first('app_name') }}
                        </span>
          @endif
        </div>

        <div class="form-group {{ $errors->has('app_url') ? ' has-error ' : '' }}">
          <label for="app_url">
            {{ trans('installer_messages.environment.wizard.form.app_url_label') }}
          </label>

          <input type="url" name="app_url" id="app_url" value="{{url('/')}}"
                 placeholder="{{ trans('installer_messages.environment.wizard.form.app_url_placeholder') }}" />
          @if ($errors->has('app_url'))
            <span class="block px-2 py-1 rounded-md mt-1 bg-yellow text-sm">
            {!! get_svg_icon('exclamation-triangle', 'mr-2 fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
              {{ $errors->first('app_url') }}
                        </span>
          @endif
          <p class="p-4 rounded-lg text-center  bg-[#fff5dd] border border-dashed border-[#ffcb47] text-sm mt-2">
            {{__('Hi please do not enter / at the end of the url. For Example: https://oricodes.com')}}
          </p>
        </div>

        <details class="mt-12 mb-72 open:mb-4">
          <summary class="list-none flex items-center gap-4 cursor-pointer">
						<span class="inline-flex grow items-center">
							<span class="inline-block w-full h-px bg-black bg-opacity-5"></span>
						</span>
            <span class="inline-flex items-center font-medium rounded-xl px-4 py-2 bg-[#d0d5ff80]">
							{{__('Advanced Options')}}
              {!! get_svg_icon('arrow-down-circle', 'ml-2 fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
						</span>
            <span class="inline-flex grow items-center">
							<span class="inline-block w-full h-px bg-black bg-opacity-5"></span>
						</span>
          </summary>
          <div class="form-group {{ $errors->has('environment') ? ' has-error ' : '' }}">
            <label for="environment">
              {{ trans('installer_messages.environment.wizard.form.app_environment_label') }}
            </label>
            <select name="environment" id="environment" onchange='checkEnvironment(this.value);'>
              <option value="production"
                      selected>{{ trans('installer_messages.environment.wizard.form.app_environment_label_production') }}</option>
              <option
                value="local">{{ trans('installer_messages.environment.wizard.form.app_environment_label_local') }}</option>
              <option
                value="development">{{ trans('installer_messages.environment.wizard.form.app_environment_label_developement') }}</option>
              <option
                value="qa">{{ trans('installer_messages.environment.wizard.form.app_environment_label_qa') }}</option>
              <option
                value="other">{{ trans('installer_messages.environment.wizard.form.app_environment_label_other') }}</option>
            </select>
            <div id="environment_text_input" class="mt-2" style="display: none;">
              <input type="text" name="environment_custom" id="environment_custom"
                     placeholder="{{ trans('installer_messages.environment.wizard.form.app_environment_placeholder_other') }}" />
            </div>
            @if ($errors->has('environment'))
              <span class="block px-2 py-1 rounded-md mt-1 bg-yellow text-sm">
            {!! get_svg_icon('exclamation-triangle', 'mr-2 fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
                {{ $errors->first('environment') }}
							</span>
            @endif
          </div>

          <div class="form-group {{ $errors->has('app_debug') ? ' has-error ' : '' }}">
            <label class="!mb-2" for="app_debug">
              {{ trans('installer_messages.environment.wizard.form.app_debug_label') }}
            </label>
            <div class="flex items-center gap-3">
              <label class="!mt-0" for="app_debug_true">
                <input type="radio" name="app_debug" id="app_debug_true" value=true />
                {{ trans('installer_messages.environment.wizard.form.app_debug_label_true') }}
              </label>
              <label class="!mt-0" for="app_debug_false">
                <input type="radio" name="app_debug" id="app_debug_false" value=false checked />
                {{ trans('installer_messages.environment.wizard.form.app_debug_label_false') }}
              </label>
            </div>
            @if ($errors->has('app_debug'))
              <span class="block px-2 py-1 rounded-md mt-1 bg-yellow text-sm">
								{!! get_svg_icon('exclamation-triangle', 'mr-2 fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
                {{ $errors->first('app_debug') }}
							</span>
            @endif
          </div>

          <div class="form-group {{ $errors->has('app_log_level') ? ' has-error ' : '' }}">
            <label for="app_log_level">
              {{ trans('installer_messages.environment.wizard.form.app_log_level_label') }}
            </label>
            <select name="app_log_level" id="app_log_level">
              <option value="debug"
                      selected>{{ trans('installer_messages.environment.wizard.form.app_log_level_label_debug') }}</option>
              <option
                value="info">{{ trans('installer_messages.environment.wizard.form.app_log_level_label_info') }}</option>
              <option
                value="notice">{{ trans('installer_messages.environment.wizard.form.app_log_level_label_notice') }}</option>
              <option
                value="warning">{{ trans('installer_messages.environment.wizard.form.app_log_level_label_warning') }}</option>
              <option
                value="error">{{ trans('installer_messages.environment.wizard.form.app_log_level_label_error') }}</option>
              <option
                value="critical">{{ trans('installer_messages.environment.wizard.form.app_log_level_label_critical') }}</option>
              <option
                value="alert">{{ trans('installer_messages.environment.wizard.form.app_log_level_label_alert') }}</option>
              <option
                value="emergency">{{ trans('installer_messages.environment.wizard.form.app_log_level_label_emergency') }}</option>
            </select>
            @if ($errors->has('app_log_level'))
              <span class="block px-2 py-1 rounded-md mt-1 bg-yellow text-sm">
								{!! get_svg_icon('exclamation-triangle', 'mr-2 fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
                {{ $errors->first('app_log_level') }}
							</span>
            @endif
          </div>
        </details>

        <div class="mt-6 text-center">
          <button
            class="inline-flex items-center justify-center w-2/5 py-2 rounded-2xl shadow-md bg-[#03003e] text-white font-medium transition-all hover:scale-105"
            onclick="showDatabaseSettings();return false">
            {{ trans('installer_messages.environment.wizard.form.buttons.setup_database') }}
            {!! get_svg_icon('box-arrow-up-right', 'ml-2 fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
          </button>
        </div>
      </div>

      <div class="hidden" id="tab2content">
        <div class="form-group {{ $errors->has('database_connection') ? ' has-error ' : '' }}">
          <label for="database_connection">
            {{ trans('installer_messages.environment.wizard.form.db_connection_label') }}
          </label>
          <select name="database_connection" id="database_connection">
            <option value="mysql"
                    selected>{{ trans('installer_messages.environment.wizard.form.db_connection_label_mysql') }}</option>
            <option
              value="sqlite">{{ trans('installer_messages.environment.wizard.form.db_connection_label_sqlite') }}</option>
            <option
              value="pgsql">{{ trans('installer_messages.environment.wizard.form.db_connection_label_pgsql') }}</option>
            <option
              value="sqlsrv">{{ trans('installer_messages.environment.wizard.form.db_connection_label_sqlsrv') }}</option>
          </select>
          @if ($errors->has('database_connection'))
            <span class="block px-2 py-1 rounded-md mt-1 bg-yellow text-sm">
                            {!! get_svg_icon('exclamation-triangle', 'mr-2 fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
              {{ $errors->first('database_connection') }}
                        </span>
          @endif
        </div>

        <div class="form-group {{ $errors->has('database_hostname') ? ' has-error ' : '' }}">
          <label for="database_hostname">
            {{ trans('installer_messages.environment.wizard.form.db_host_label') }}
          </label>
          <input type="text" name="database_hostname" id="database_hostname" value="127.0.0.1"
                 placeholder="{{ trans('installer_messages.environment.wizard.form.db_host_placeholder') }}" />
          @if ($errors->has('database_hostname'))
            <span class="block px-2 py-1 rounded-md mt-1 bg-yellow text-sm">
                            {!! get_svg_icon('exclamation-triangle', 'mr-2 fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
              {{ $errors->first('database_hostname') }}
                        </span>
          @endif
        </div>

        <div class="form-group {{ $errors->has('database_port') ? ' has-error ' : '' }}">
          <label for="database_port">
            {{ trans('installer_messages.environment.wizard.form.db_port_label') }}
          </label>
          <input type="number" name="database_port" id="database_port" value="3306"
                 placeholder="{{ trans('installer_messages.environment.wizard.form.db_port_placeholder') }}" />
          @if ($errors->has('database_port'))
            <span class="block px-2 py-1 rounded-md mt-1 bg-yellow text-sm">
                            {!! get_svg_icon('exclamation-triangle', 'mr-2 fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
              {{ $errors->first('database_port') }}
                        </span>
          @endif
        </div>

        <div class="form-group {{ $errors->has('database_name') ? ' has-error ' : '' }}">
          <label for="database_name">
            {{ trans('installer_messages.environment.wizard.form.db_name_label') }}
          </label>
          <input type="text" name="database_name" id="database_name" value=""
                 placeholder="{{ trans('installer_messages.environment.wizard.form.db_name_placeholder') }}" />
          @if ($errors->has('database_name'))
            <span class="block px-2 py-1 rounded-md mt-1 bg-yellow text-sm">
                            {!! get_svg_icon('exclamation-triangle', 'mr-2 fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
              {{ $errors->first('database_name') }}
                        </span>
          @endif
        </div>

        <div class="form-group {{ $errors->has('database_username') ? ' has-error ' : '' }}">
          <label for="database_username">
            {{ trans('installer_messages.environment.wizard.form.db_username_label') }}
          </label>
          <input type="text" name="database_username" id="database_username" value=""
                 placeholder="{{ trans('installer_messages.environment.wizard.form.db_username_placeholder') }}" />
          @if ($errors->has('database_username'))
            <span class="block px-2 py-1 rounded-md mt-1 bg-yellow text-sm">
                            {!! get_svg_icon('exclamation-triangle', 'mr-2 fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
              {{ $errors->first('database_username') }}
                        </span>
          @endif
        </div>

        <div class="form-group {{ $errors->has('database_password') ? ' has-error ' : '' }}">
          <label for="database_password">
            {{ trans('installer_messages.environment.wizard.form.db_password_label') }}
          </label>
          <input type="password" name="database_password" id="database_password" value=""
                 placeholder="{{ trans('installer_messages.environment.wizard.form.db_password_placeholder') }}" />
          @if ($errors->has('database_password'))
            <span class="block px-2 py-1 rounded-md mt-1 bg-yellow text-sm">
                            {!! get_svg_icon('exclamation-triangle', 'mr-2 fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
              {{ $errors->first('database_password') }}
                        </span>
          @endif
        </div>

        <div class="mt-6 text-center">
          <button
            class="inline-flex items-center justify-center w-2/5 py-2 rounded-2xl shadow-md bg-[#03003e] text-white font-medium transition-all hover:scale-105"
            type="submit">
            {{ trans('installer_messages.environment.wizard.form.buttons.install') }}

            {!! get_svg_icon('box-arrow-up-right', 'ml-2 fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
          </button>
        </div>
      </div>
    </form>

  </div>
@endsection

@section('scripts')
  <script type="text/javascript">
    function checkEnvironment(val) {
      var element = document.getElementById("environment_text_input");
      if (val == "other") {
        element.style.display = "block";
      } else {
        element.style.display = "none";
      }
    }

    function showDatabaseSettings() {
      document.getElementById("tab2").checked = true;
    }

    function showApplicationSettings() {
      document.getElementById("tab3").checked = true;
    }
  </script>
@endsection
