@extends('backend.layout.content')
@section('title', __('My Account'))

@section('content')
  <div class="row my-4">
    <div class="col-xl-6 mx-auto">
      <form id="user_save" action="" enctype="multipart/form-data">
        <h5 class="mb-2">
          {{__('Global Settings')}}
        </h5>
        <div class="card mb-4">
          <div class="card-body p-3">
            <div class="row">

              <div class="mb-3 col-12">
                <label class="form-label" for="logo">{{__('Avatar')}}</label>
                <input type="file" class="form-control" id="avatar" name="avatar" accept="image/*">
              </div>

              <div class="mb-3 col-md-6">
                <label class="form-label" for="name">{{__('Name')}}</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
              </div>

              <div class="mb-3 col-md-6">
                <label class="form-label" for="surname">{{__('Surname')}}</label>
                <input type="text" class="form-control" id="surname" name="surname" value="{{$user->surname}}">
              </div>


              <div class="mb-3 col-md-6">
                <label class="form-label" for="phone">{{__('Phone')}}</label>
                <input type="tel" class="form-control" id="phone" name="phone" value="{{$user->phone}}">
              </div>

              <div class="mb-3 col-md-6">
                <label class="form-label">{{__('Email')}}</label>
                <input type="email" class="form-control" value="{{$user->email}}" disabled>
              </div>

              <div class="mb-3 col-12">
                <label class="form-label" for="country">{{__('Country')}}</label>
                <select class="form-select" name="country" id="country">
                  @include('backend.admin.settings.countries')
                </select>
              </div>
            </div>
          </div>
        </div>

        <h5 class="mb-2">
          {{__('Password')}}
        </h5>
        <div class="card mb-4">
          <div class="card-body p-3">
            <div class="row">
              <div class="mb-3 col-12 mb-0">
                <div class="alert alert-primary d-flex align-items-center" role="alert">
                <span class="alert-icon text-primary me-2">
                   {!! get_svg_icon('info-circle-fill', 'fs-5', '', '', ['height' => '20', 'width' => '20'])!!}
                </span>
                  {{__('You can leave empty if you don’t want to change your password.')}}
                </div>
              </div>

              <div class="mb-3 col-md-6">
                <label class="form-label" for="old_password">{{__('Old Password')}}</label>
                <input type="password" name="old_password" id="old_password" class="form-control"
                       autocomplete="off" />
              </div>

              <div class="mb-3 col-md-6">
                <label class="form-label" for="new_password">{{__('New Password')}}</label>
                <input type="password" name="new_password" id="new_password" class="form-control"
                       autocomplete="off" />
              </div>

              <div class="mb-3 col-md-6">
                <label class="form-label" for="new_password_confirmation">{{__('Confirm Your New Password')}}</label>
                <input type="password" name="new_password_confirmation" id="new_password_confirmation"
                       class="form-control" autocomplete="off" />
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
    function userSave() {
      $("#user_save").on("submit", function(e) {
        "use strict";
        e?.preventDefault();
        e?.stopPropagation();

        document.getElementById("btn_save").disabled = true;

        let formData = new FormData();
        formData.append("name", $("#name").val());
        formData.append("surname", $("#surname").val());
        formData.append("phone", $("#phone").val());
        formData.append("country", $("#country").val());

        if ($( '#old_password' ).val() != null ) {
          formData.append( 'old_password', $( "#old_password" ).val() );
          formData.append( 'new_password', $( "#new_password" ).val() );
          formData.append( 'new_password_confirmation', $( "#new_password_confirmation" ).val() );
        }

        if ($('#avatar' ).val() !== 'undefined' ) {
          formData.append( 'avatar', $( '#avatar' ).prop( 'files' )[ 0 ] );
        }

        $.ajax({
          type: "POST",
          url: '{{route('dashboard.user.settings.store')}}',
          data: formData,
          contentType: false,
          processData: false,
          success: function(data) {
            toastr.success("{{__('Updated successfully.')}}");
            location.href = '{{route('dashboard.admin.settings.index')}}';
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

    userSave();
  </script>
@endsection
