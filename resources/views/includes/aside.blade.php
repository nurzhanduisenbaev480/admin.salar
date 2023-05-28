<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true"
     data-kt-drawer-name="aside"
     data-kt-drawer-activate="{default: true, lg: false}"
     data-kt-drawer-overlay="true"
     data-kt-drawer-width="{default:'200px', '300px': '250px'}"
     data-kt-drawer-direction="start"
     data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <!--begin::Brand-->
    <div class="aside-logo flex-column-auto" id="kt_aside_logo">
        <!--begin::Logo-->
        <a href="{{route('dashboard.index')}}">
            <img alt="Logo" src="{{asset('public/assets/media/logos/cabeslogo.png')}}" class="h-25px logo" />
        </a>
        <!--end::Logo-->
        <!--begin::Aside toggler-->
        <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle"
             data-kt-toggle="true"
             data-kt-toggle-state="active"
             data-kt-toggle-target="body"
             data-kt-toggle-name="aside-minimize">

            @include('includes.svg_icons.arr079')
        </div>
        <!--end::Aside toggler-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid">
        <!--begin::Aside Menu-->
        <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper"
             data-kt-scroll="true"
             data-kt-scroll-activate="{default: false, lg: true}"
             data-kt-scroll-height="auto"
             data-kt-scroll-dependencies="#kt_aside_logo"
             data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
            <!--begin::Menu-->
            <div class="menu menu-column
                menu-title-gray-800
                menu-state-title-primary
                menu-state-icon-primary
                menu-state-bullet-primary
                menu-arrow-gray-500"

                 id="#kt_aside_menu"
                 data-kt-menu="true"
                 data-kt-menu-expand="false">
                <div class="menu-item">
                    <a class="menu-link" href="{{route('dashboard.index')}}">
                        <span class="menu-icon">
                            @include('includes.svg_icons.gen025')
                        </span>
                        <span class="menu-title">Панель управления</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link" href="{{route('order.index')}}">
                        <span class="menu-icon">
                            @include('includes.svg_icons.order_icon')
                        </span>
                        <span class="menu-title">Заявки</span>
                    </a>
                </div>

            </div>
            <!--end::Menu-->
        </div>
        <!--end::Aside Menu-->
    </div>
    <!--end::Aside menu-->
</div>
