<!DOCTYPE html>
<html>
  @section('htmlheader')
    @include('sbadmin::layouts.partials.htmlheader')
@show
<body id="page-top">
	<div id="wrapper">

    @include('sbadmin::layouts.partials.sidebar')

    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">

    @include('sbadmin::layouts.partials.mainheader')
        <div class="container-fluid">          
            @yield('main-content')
        </div>
    </div>

    @include('sbadmin::layouts.partials.footer')

</div>
</div>
@include('sbadmin::layouts.partials.modal')
@section('scripts')
    @include('sbadmin::layouts.partials.scripts')
@show
</body>
</html>