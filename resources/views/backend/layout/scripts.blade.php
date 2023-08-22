<script src="{{ asset('backend/libs/jquery/jquery.js') }}?v{{getSetting('script_version')}}-1807200231247"></script>
<script src="{{ asset('backend/libs/popper/popper.js') }}?v{{getSetting('script_version')}}-1807200231247"></script>
<script src="{{ asset('backend/js/bootstrap.js') }}?v{{getSetting('script_version')}}-1807200231247"></script>
<script
  src="{{ asset('backend/libs/perfect-scrollbar/perfect-scrollbar.js') }}?v{{getSetting('script_version')}}-1807200231247"></script>
<script
  src="{{ asset('backend/libs/node-waves/node-waves.js') }}?v{{getSetting('script_version')}}-1807200231247"></script>
<script src="{{ asset('backend/libs/hammer/hammer.js') }}?v{{getSetting('script_version')}}-1807200231247"></script>
<script src="{{asset('backend/libs/toastr/toastr.js')}}?v{{getSetting('script_version')}}-1807200231247"></script>
<script src="{{asset('backend/libs/select2/select2.js')}}?v{{getSetting('script_version')}}-1807200231247"></script>

@if (Request::routeIs('dashboard.user.ai.creator.view') || Request::routeIs('dashboard.user.ai.stt.index') || Request::routeIs('dashboard.user.ai.documents.view'))
  <script
    src="{{asset('backend/libs/clipboard/clipboard.js')}}?v{{getSetting('script_version')}}-1807200231247"></script>
  <script src="{{asset('backend/libs/tinymce/tinymce.js')}}?v{{getSetting('script_version')}}-1807200231247"></script>
@endif
@if (Request::routeIs('dashboard.user.ai.code.index') || Request::routeIs('dashboard.user.ai.documents.view'))
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/9000.0.1/prism.min.js" data-manual></script>
  <script
    src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/plugins/line-numbers/prism-line-numbers.js"></script>
@endif
@if (Request::routeIs('dashboard.user.ai.image.index'))
  <script
    src="{{asset('backend/libs/lightgallery/lightgallery.js')}}?v{{getSetting('script_version')}}-1807200231247"></script>
@endif
@if (Request::routeIs('login') || Request::routeIs('register') || Request::routeIs('forgot.password') || Request::routeIs('password.reset'))
  <script
    src="{{asset('backend/libs/formvalidation/dist/js/FormValidation.min.js')}}?v{{getSetting('script_version')}}-1807200231247"></script>
  <script
    src="{{asset('backend/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}?v{{getSetting('script_version')}}-1807200231247"></script>
  <script
    src="{{asset('backend/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}?v{{getSetting('script_version')}}-1807200231247"></script>
  <script src="{{asset('backend/js/auth.js')}}?v{{getSetting('script_version')}}-1807200231247"></script>
@endif

@yield('vendor-script')
{{--<script src="{{ asset('backend/libs/swup/swup.js') }}?v{{getSetting('script_version')}}-1807200231247"></script>--}}
<script src="{{ asset('backend/js/app.bundle.js') }}?v{{getSetting('script_version')}}-1807200231247"></script>
<script src="{{ asset('backend/js/helpers.bundle.js') }}?v{{getSetting('script_version')}}-1807200231247"></script>

@if(Session::has('message'))
  <script>
    toastr.{{Session::get('type') ?? 'info'}}('{{Session::get('message')}}');
  </script>
@endif

@stack('pricing-script')
@yield('page-script')
