<!DOCTYPE html>
<html lang="ru">
<!--begin::Head-->
<head>
    <title>
        @if(isset($title))
            Cabes - {{$title}}
        @else
            Cabes Software
        @endif
    </title>
    <link rel="shortcut icon" href="{{asset("public/assets/media/logos/favicon.ico")}}" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="{{asset("public/assets/plugins/custom/datatables/datatables.bundle.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("public/assets/plugins/custom/vis-timeline/vis-timeline.bundle.css")}}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{asset("public/assets/plugins/global/plugins.bundle.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("public/assets/css/style.bundle.css")}}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
      style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Aside-->
        @include('includes.aside')
        <!--end::Aside-->
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <!--begin::Header-->
            @include('includes.header')
            <!--end::Header-->
            <!--begin::Content-->
            @yield("app.content")
            <!--end::Content-->
            <!--begin::Footer-->
            @include('includes.footer')
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Root-->
<!--end::Main-->

<!--begin::Scrolltop-->
@include('includes.scroll_top')
<!--end::Scrolltop-->

<!--begin::Javascript-->
<script>var hostUrl = "assets/";</script>
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{asset("public/assets/plugins/global/plugins.bundle.js")}}"></script>
<script src="{{asset("public/assets/js/scripts.bundle.js")}}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="{{asset("public/assets/plugins/custom/datatables/datatables.bundle.js")}}"></script>
<script src="{{asset("public/assets/plugins/custom/vis-timeline/vis-timeline.bundle.js")}}"></script>
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>
