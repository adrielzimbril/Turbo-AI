@extends('backend.layout.content')
@section('title', __('Reset Password'))

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="authentication-wrapper authentication-cover authentication-bg">
          <div class="authentication-inner row">
            <div class="d-none d-lg-flex col-lg-7 p-0">
              <div
                class="d-flex justify-content-center ui-bg-center auth-cover-bg auth-cover-bg-color my-auto align-items-center"
                style="background-image: url({{asset('media/img/illustrations/app.auth-bg.jpg')}})">
                <img src="{{asset('media/img/illustrations/app.auth.png')}}"
                     alt="auth-login-cover" class="img-fluid my-5 auth-illustration rounded-3">
              </div>
            </div>

            <div class="d-flex col-12 col-lg-5 align-items-center p-sm-5 p-4">
              <div class="w-px-350 mx-auto">
                <div class="d-flex justify-content-center mb-4">
                  <a href="{{url('/')}}" class="app-link">
                    <img src="{{asset(getSetting('logo') ?? getSetting('logo_dark'))}}"
                         class="w-full mw-100 h-auto">
                  </a>
                </div>
                <div class="d-flex justify-content-center mt-2 mb-4">
                  <h3 class="badge bg-label-info rounded-pill fs-5 text-center px-4 py-1 mb-0 fw-normal">
                    {{__('Forgot Password?')}} 🔒
                  </h3>
                </div>
                <form id="auth_form" novalidate="novalidate">
                  <div class="mb-3">
                    <label for="email" class="form-label">{{__('Email')}}</label>
                    <input type="text" class="form-control" id="email" name="email"
                           placeholder="your@email.com" autofocus>
                  </div>
                  <button type="submit" id="auth_submit" class="btn btn-primary rounded-pill my-2 w-100">
                    <div class="btn-loading visually-hidden">
                      <span class="spinner-border me-1" role="status" aria-hidden="true"></span>
                      {{__('Loading...')}}
                    </div>
                    <span class="btn-mode">{{__('Send Instructions')}}</span>
                  </button>
                </form>

                <p class="text-center mt-4">
                  <a href="{{route('login')}}">
                    <span>{{__('Remember Your Password?')}}</span>
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('page-script')
  <script>
    function authForm() {
      $("#auth_form").on("submit", function(e) {
        "use strict";
        e?.preventDefault();
        e?.stopPropagation();

        const btn = $("#auth_submit");
        btn.disabled = true;
        btn.find("btn-loading")?.classList?.remove("visually-hidden");
        btn.find("btn-mode")?.classList?.add("visually-hidden");

        const formData = new FormData();
        formData.append("email", $("#email").val());

        $.ajax({
          type: "POST",
          url: '{{route('forgot.password')}}',
          data: formData,
          contentType: false,
          processData: false,
          cache: false,
          success: function(data) {
            toastr.success('{{__('Password reset link sent successfully. Please also check your spam folder.')}}');
            setTimeout(function() {
              location.href = '{{route('login')}}';
              btn.find("btn-loading")?.classList?.add("visually-hidden");
            }, 200);
          },
          error: function(data) {
            if (data.responseJSON.errors) {
              let err = data.responseJSON.errors;
              $.each(err, function(index, value) {
                toastr.error(value);
              });
            } else if (data.responseJSON.message) {
              toastr.error(data.responseJSON.message);
            }
            btn.disabled = false;
            btn.find("btn-loading")?.classList?.add("visually-hidden");
            btn.find("btn-mode")?.classList?.remove("visually-hidden");
          }
        });
        return false;
      });
    }

    authForm();
  </script>
@endsection

