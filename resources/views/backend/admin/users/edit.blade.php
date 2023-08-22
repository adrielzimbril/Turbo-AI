@extends('backend.layout.content')
@section('title', 'Edit User')

@section('content')
  <div class="row my-4">
    <div class="col-xl-6 mx-auto">
      <h5 class="mb-2">
        {{__('Edit')}} {{$user->fullName()}}
      </h5>
      <div class="card mb-4">
        <div class="card-body p-3">
          <form id="user_save" data-user-id="{{$user->id}}">
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
              <input type="text" name="phone" id="phone" class="form-control" data-mask="+000000000000"
                     data-mask-visible="true" placeholder="+000000000000" autocomplete="off"
                     value="{{$user->phone}}" />
            </div>

            <div class="mb-3 col-md-6">
              <label class="form-label" for="email">{{__('Email')}}</label>
              <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
            </div>

            <div class="mb-3 col-12">
              <label class="form-label" for="country">{{__('Country')}}</label>
              <select type="text" class="form-select" name="country" id="country">
                @include('backend.admin.users.countries')
              </select>
            </div>

            <div class="mb-3 col-md-6">
              <label class="form-label" for="type">{{__('Type')}}</label>
              <select class="form-select" id="type" name="type">
                <option value="admin" {{$user->type == 'admin' ? 'selected' : ''}}>{{__('Admin')}}</option>
                <option value="user" {{$user->type == 'user' ? 'selected' : ''}}>{{__('User')}}</option>
              </select>
            </div>
            <div class="mb-3 col-md-6">
              <label class="form-label" for="status">{{__('Status')}}</label>
              <select class="form-select" id="status" name="status">
                <option value="1" {{$user->status == 1 ? 'selected' : ''}}>{{__('Active')}}</option>
                <option value="0" {{$user->status == 0 ? 'selected' : ''}}>{{__('Passive')}}</option>
              </select>
            </div>

            <div class="mb-3 col-md-6">
              <label class="form-label" for="remaining_words">{{__('Remaining Words')}}</label>
              <input type="number" name="remaining_words" id="remaining_words" class="form-control"
                     value="{{$user->remaining_words}}" />
            </div>
            <div class="mb-3 col-md-6">
              <label class="form-label" for="remaining_images">{{__('Remaining Images')}}</label>
              <input type="number" name="remaining_images" id="remaining_images" class="form-control"
                     value="{{$user->remaining_images}}" />
            </div>

            <div class="col-12 d-flex items-center justify-content-center">
              <button type="submit" id="btn_save" class="btn btn-primary w-100">{{__('Save')}}</button>
            </div>
          </form>
        </div>
      </div>
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

        const id = $(this).attr("data-user-id");
        document.getElementById("btn_save").disabled = true;

        let formData = new FormData();
        formData.append("user_id", id);
        formData.append("name", $("#name").val());
        formData.append("surname", $("#surname").val());
        formData.append("phone", $("#phone").val());
        formData.append("email", $("#email").val());
        formData.append("country", $("#country").val());
        formData.append("type", $("#type").val());
        formData.append("status", $("#status").val());
        formData.append("remaining_words", $("#remaining_words").val());
        formData.append("remaining_images", $("#remaining_images").val());

        $.ajax({
          type: "POST",
          url: '{{route('dashboard.admin.users.store')}}',
          data: formData,
          contentType: false,
          processData: false,
          success: function(data) {
            toastr.success("Settings saved successfully.");
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
