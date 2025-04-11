<script>
  @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
      case 'info':
        toastr.info("{{ Session::get('message') }}");
        break;

      case 'warning':
        toastr.warning("{{ Session::get('message') }}");
        break;

      case 'success':
        toastr.success("{{ Session::get('message') }}");
        break;

      case 'error':
        toastr.error("{{ Session::get('message') }}");
        break;
    }
  @endif
  @if(count($errors) > 0)
    @foreach($errors->all() as $error)
      toastr.error("{{ $error }}");
    @endforeach
  @endif
</script>
{{--@if (session()->has('success'))
<div class="row alert_box_2">
  <div class="alert alert-dismissible success_box">
    <i class="fa fa-check"></i>
    <button type="button" class="close" data-dismiss="alert">×</button>
    <span> {{ session()->get('success') }}</span>
  </div>
</div>
@endif
@if (session()->has('info'))
<div class="row alert_box_2">
  <div class="alert alert-dismissible info_box">
    <i class="fa fa-info"></i>
    <button type="button" class="close" data-dismiss="alert">×</button>
    <span> {{ session()->get('info') }}</span>
  </div>
</div>
@endif
@if (session()->has('warning'))
<div class="row alert_box_2">
  <div class="alert alert-dismissible warning_box">
    <i class="fa fa-exclamation"></i>
    <button type="button" class="close" data-dismiss="alert">×</button>
    <span> {{ session()->get('warning') }}</span>
  </div>
</div>
@endif
@if (session()->has('error'))
<div class="row alert_box_2">
  <div class="alert alert-dismissible danger_box">
    <i class="fa fa-times"></i>
    <button type="button" class="close" data-dismiss="alert">×</button>
    <span> {{ session()->get('error') }}</span>
  </div>
</div>
@endif
@if (session()->has('primary'))
<div class="row alert_box_2">
  <div class="alert alert-dismissible primary_box">
    <i class="fa fa-star fa-2x"></i>
    <button type="button" class="close" data-dismiss="alert">×</button>
    <span> {{ session()->get('primary') }}</span>
  </div>
</div>
@endif
@if (session()->has('secondary'))
<div class="row alert_box_2">
  <div class="alert alert-dismissible secondary_box">
    <i class="far fa-star fa-2x"></i>
    <button type="button" class="close" data-dismiss="alert">×</button>
    <span> {{ session()->get('secondary') }}</span>
  </div>
</div>
@endif
@if (session()->has('dark'))
<div class="row alert_box_2">
  <div class="alert alert-dismissible dark_box">
    <i class="fa fa-bell fa-2x"></i>
    <button type="button" class="close" data-dismiss="alert">×</button>
    <span> {{ session()->get('dark') }}</span>
  </div>
</div>
@endif
@if (session()->has('light'))
<div class="row alert_box_2">
  <div class="alert alert-dismissible no-margin-bottom light_box">
    <i class="far fa-bell fa-2x"></i>
    <button type="button" class="close" data-dismiss="alert">×</button>
    <span> {{ session()->get('light') }}</span>
  </div>
</div>
@endif
@if (session()->has('status'))
<div class="row alert_box_2">
  <div class="alert alert-dismissible dark_box">
    <i class="fa fa-bell fa-2x"></i>
    <button type="button" class="close" data-dismiss="alert">×</button>
    <span> {{ session()->get('status') }}</span>
  </div>
</div>
@endif--}}