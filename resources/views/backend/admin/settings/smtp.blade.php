@extends('backend.layout.content')
@section('title', __('MAIL Settings'))

@section('content')
  <div class="row my-4">
    <div class="col-xl-5 mx-auto">
      <h5 class="mb-2">
        {{__('SMTP Settings')}}
      </h5>
      <div class="card mb-4">
        <div class="card-body p-3">
          <form id="setting_save">
            <div class="row">
              <div class="mb-3 col-12">
                <label class="form-label" for="smtp_host">{{__('SMTP Host')}}</label>
                <input type="text" class="form-control" id="smtp_host" name="smtp_host"
                       value="{{getSetting('smtp_host')}}">
              </div>

              <div class="mb-3 col-12">
                <label class="form-label" for="smtp_port">{{__('SMTP Port')}}</label>
                <input type="text" class="form-control" id="smtp_port" name="smtp_port"
                       value="{{getSetting('smtp_port')}}">
              </div>

              <div class="mb-3 col-12">
                <label class="form-label" for="smtp_username">{{__('SMTP Username')}}</label>
                <input type="text" class="form-control" id="smtp_username" name="smtp_username"
                       value="{{getSetting('smtp_username')}}">
              </div>

              <div class="mb-3 col-12">
                <label class="form-label" for="smtp_password">{{__('SMTP Password')}}</label>
                <input type="password" class="form-control" id="smtp_password" name="smtp_password"
                       value="{{getSetting('smtp_password')}}">
              </div>

              <div class="mb-3 col-12">
                <label class="form-label" for="smtp_email">{{__('SMTP Sender Email')}}</label>
                <input type="text" class="form-control" id="smtp_email" name="smtp_email"
                       value="{{getSetting('smtp_email')}}">
              </div>

              <div class="mb-3 col-12">
                <label class="form-label" for="smtp_sender_name">{{__('SMTP Sender Name')}}</label>
                <input type="text" class="form-control" id="smtp_sender_name" name="smtp_sender_name"
                       value="{{getSetting('smtp_email')}}">
              </div>

              <div class="mb-3 col-12">
                <label class="form-label" for="smtp_encryption">{{__('SMTP Encryption')}}</label>
                <input type="text" class="form-control" id="smtp_encryption" name="smtp_encryption"
                       value="{{getSetting('smtp_encryption')}}">
              </div>

              <div class="col-12 d-flex items-center justify-content-center">
                <button type="submit" id="btn_save" class="btn btn-primary w-100">{{__('Save')}}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-xl-5 mx-auto">
      <h5 class="mb-2">
        {{__('SMTP Test')}}
      </h5>
      <div class="card mb-4">
        <div class="card-body p-3">
          <form id="smtp_test" action="{{route('dashboard.admin.settings.mail.test')}}" method="POST">
            @csrf
            <div class="row">
              <div class="mb-3 col-12">
                <label class="form-label">{{__('Test Email')}}</label>
                <input type="text" class="form-control" name="test_email" placeholder="Email to send test email.">
              </div>

              <div class="col-12 d-flex items-center justify-content-center">
                <button type="submit" class="btn btn-primary w-100">{{__('Send')}}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
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
        formData.append("smtp_host", $("#smtp_host").val());
        formData.append("smtp_port", $("#smtp_port").val());
        formData.append("smtp_username", $("#smtp_username").val());
        formData.append("smtp_password", $("#smtp_password").val());
        formData.append("smtp_email", $("#smtp_email").val());
        formData.append("smtp_sender_name", $("#smtp_sender_name").val());
        formData.append("smtp_encryption", $("#smtp_encryption").val());

        $.ajax({
          type: "POST",
          url: '{{route('dashboard.admin.settings.mail.store')}}',
          data: formData,
          contentType: false,
          processData: false,
          success: function(data) {
            toastr.success("Settings saved successfully.");
            location.href = '{{route('dashboard.admin.settings.mail')}}';
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
