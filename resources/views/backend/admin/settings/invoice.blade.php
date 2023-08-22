@extends('backend.layout.content')
@section('title', 'Billing Settings')

@section('content')
  <div class="row my-4">
    <div class="col-xl-6 mx-auto">
      <h5 class="mb-2">
        {{__('Billing Settings')}}
      </h5>
      <div class="card mb-4">
        <div class="card-body p-3">
          <form id="setting_save">

            <div class="row">
              <div class="mb-3 col-md-12">
                <label class="form-label" for="invoice_name">{{__('Invoice Name')}}</label>
                <input type="text" class="form-control" id="invoice_name" name="invoice_name"
                       value="{{getSetting('invoice_name')}}">
              </div>
              <div class="mb-3 col-md-12">
                <label class="form-label" for="invoice_website">{{__('Invoice Website')}}</label>
                <input type="text" class="form-control" id="invoice_website" name="invoice_website"
                       value="{{getSetting('invoice_website')}}">
              </div>
              <div class="mb-3 col-md-12">
                <label class="form-label" for="invoice_address">{{__('Invoice Address')}}</label>
                <textarea type="text" class="form-control" id="invoice_address"
                          name="invoice_address">{{getSetting('invoice_address')}}</textarea>
              </div>
              <div class="mb-3 col-md-6">
                <label class="form-label" for="invoice_city">{{__('Invoice City')}}</label>
                <input type="text" class="form-control" id="invoice_city" name="invoice_city"
                       value="{{getSetting('invoice_city')}}">
              </div>
              <div class="mb-3 col-md-6">
                <label class="form-label" for="invoice_state">{{__('Invoice State')}}</label>
                <input type="text" class="form-control" id="invoice_state" name="invoice_state"
                       value="{{getSetting('invoice_state')}}">
              </div>
              <div class="mb-3 col-md-6">
                <label class="form-label" for="invoice_postal">{{__('Invoice Postal')}}</label>
                <input type="text" class="form-control" id="invoice_postal" name="invoice_postal"
                       value="{{getSetting('invoice_postal')}}">
              </div>
              <div class="mb-3 col-md-6">
                <label class="form-label" for="invoice_country">{{__('Invoice Country')}}</label>
                <input type="text" class="form-control" id="invoice_country" name="invoice_country"
                       value="{{getSetting('invoice_country')}}">
              </div>

              <div class="mb-3 col-md-12">
                <label class="form-label" for="invoice_phone">{{__('Invoice Phone')}}</label>
                <input type="text" class="form-control" id="invoice_phone" name="invoice_phone"
                       value="{{getSetting('invoice_phone')}}">
              </div>

              <div class="mb-4 col-12">
                <label class="form-label" for="invoice_vat">{{__('Invoice VAT')}}%</label>
                <input type="number" class="form-control" id="invoice_vat" name="invoice_vat"
                       value="{{getSetting('invoice_vat')}}">
              </div>

              <div class="col-12 d-flex items-center justify-content-center">
                <button type="submit" id="btn_save" class="btn btn-primary w-100">{{__('Save')}}</button>
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
        formData.append("invoice_name", $("#invoice_name").val());
        formData.append("invoice_website", $("#invoice_website").val());
        formData.append("invoice_address", $("#invoice_address").val());
        formData.append("invoice_city", $("#invoice_city").val());
        formData.append("invoice_state", $("#invoice_state").val());
        formData.append("invoice_postal", $("#invoice_postal").val());
        formData.append("invoice_country", $("#invoice_country").val());
        formData.append("invoice_phone", $("#invoice_phone").val());
        formData.append("invoice_vat", $("#invoice_vat").val());

        $.ajax({
          type: "POST",
          url: '{{route('dashboard.admin.settings.invoice.store')}}',
          data: formData,
          contentType: false,
          processData: false,
          success: function(data) {
            toastr.success("Settings saved successfully.");
            location.href = '{{route('dashboard.admin.settings.invoice')}}';
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
