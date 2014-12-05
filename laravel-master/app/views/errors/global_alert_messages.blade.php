@if( Session::has('global_success_flash_message'))
    <div class="alert alert-success" role="alert">{{ Session::get('global_success_flash_message') }}</div>
@endif
@if( Session::has('global_fail_flash_message'))
    <div class="alert alert-danger" role="alert">{{ Session::get('global_fail_flash_message') }}</div>
@endif