@extends('backend.layout.content')
@section('title', __('Sign in'))

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
                    {{__('Sign in')}} 👋
                  </h3>
                </div>
               <form id="auth_form" novalidate="novalidate">
                  <div class="mb-3">
                    <label for="email" class="form-label">{{__('Email')}}</label>
                    <input type="text" class="form-control" id="email" name="email"
                           placeholder="your@email.com" autofocus>
                  </div>
                  <div class="mb-3 form-password-toggle">
                    <div class="d-flex justify-content-between">
                      <label class="form-label" for="password">{{__('Password')}}</label>
                      <a href="{{route('forgot.password')}}">
                        <small>{{__('Forgot Password?')}}</small>
                      </a>
                    </div>
                    <div class="input-group input-group-merge">
                      <input type="password" id="password" class="form-control" name="password"
                             placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                             aria-describedby="password" />
                      <span class="input-group-text cursor-pointer">
                        {!! get_svg_icon('eye', 'eye-icon eye-open fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
                        {!! get_svg_icon('eye-slash', 'd-none eye-icon eye-closed fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
                      </span>
                    </div>
                  </div>
                  <div class="mb-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="remember" name="remember">
                      <label class="form-check-label" for="remember">
                        {{__('Remember Me')}}
                      </label>
                    </div>
                  </div>
                  <button type="submit" id="auth_submit" class="btn btn-primary rounded-pill my-2 w-100">
                    <div class="btn-loading visually-hidden">
                      <span class="spinner-border me-1" role="status" aria-hidden="true"></span>
                      {{__('Loading...')}}
                    </div>
                    <span class="btn-mode">{{__('Sign in')}}</span>
                  </button>
                </form>

                @if(getSetting('register_active') == 1)
                  <p class="text-center mt-4">
                    <span>{{__('Don\'t have a account yet?')}}</span>
                    <a href="{{route('register')}}">
                      <span>{{__('Create an account')}}</span>
                    </a>
                  </p>
                @endif

                @if ( getSetting('github_active') || getSetting('twitter_active') ||getSetting('google_active') ||getSetting('facebook_active'))
                  <div class="divider my-4">
                    <div class="divider-text">{{__('or')}}</div>
                  </div>
                  <div class="d-flex flex-wrap gap-1 justify-content-center">
                    @if(getSetting('google_active'))
                      <a href="{{route('login.google')}}" class="btn btn-label-danger m-1">
                        {!! get_svg_icon('google', 'fs-4 me-1', '', '', ['height' => '22' , 'width' => '22'])!!}
                      </a>
                    @endif
                    @if(getSetting('github_active'))
                      <a href="{{route('login.github')}}" class="btn btn-label-secondary m-1">
                        {!! get_svg_icon('github', 'fs-4 me-1', '', '', ['height' => '22' , 'width' => '22'])!!}
                      </a>
                    @endif
                    @if(getSetting('twitter_active'))
                      <a href="{{route('login.twitter')}}" class="btn btn-label-primary m-1">
                        {!! get_svg_icon('twitter-2', 'fs-4 me-1', '', '', ['height' => '22' , 'width' => '22'])!!}
                      </a>
                    @endif
                    @if(getSetting('facebook_active'))
                      <a href="{{route('login.facebook')}}" class="btn btn-label-primary m-1">
                        {!! get_svg_icon('facebook', 'fs-4 me-1', '', '', ['height' => '22' , 'width' => '22'])!!}
                      </a>
                    @endif
                  </div>
                @endif
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

        const email = $("#email").val();
        if (email === "") {
          btn.disabled = false;
          btn.find("btn-loading")?.classList?.add("visually-hidden");
          btn.find("btn-mode")?.classList?.remove("visually-hidden");
          return false;
        }
        const password = $("#password").val();
        if (password === "") {
          btn.disabled = false;
          btn.find("btn-loading")?.classList?.add("visually-hidden");
          btn.find("btn-mode")?.classList?.remove("visually-hidden");
        }

        const formData = new FormData();
        formData.append("email", $("#email").val());
        formData.append("password", $("#password").val());
        formData.append("remember", $("#remember").val());

        $.ajax({
          type: "POST",
          url: '{{route('login')}}',
          data: formData,
          contentType: false,
          processData: false,
          cache: false,
          success: function(data) {
            toastr.success('{{__('Login Successfully, Redirecting...')}}');
            setTimeout(function() {
              location.reload();
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
