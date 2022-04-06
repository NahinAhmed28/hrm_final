
<div class="aside aside-left  d-flex flex-column flex-row-auto " id="kt_aside" style="width:185px ">
    <!--begin::Brand-->
    <div class="brand flex-column-auto" id="kt_brand">
        <!--begin::Logo-->
        <a href="{{route('employee.dashboard')}}" class="brand-logo">
            <img alt="Logo" width="90px"
                 src="{{ asset('assets/global/image/logo.png') }}"/>
        </a>
        <!--end::Logo-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside Menu-->
    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
        <!--begin::Menu Container-->
        <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1"
             data-menu-dropdown-timeout="500">
            <!--begin::Menu Nav-->
            <div class="menu-nav">
                <li class="menu-item {{ Request::is('employee/dashboard') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{route('employee.dashboard')}}" class="menu-link">
                        <i class="menu-icon flaticon2-architecture-and-city"></i>
                        <span style="font-size: 15px;font-weight: bold" class="menu-text news">Dashboard</span>
                    </a>
                </li>

                <li class="menu-item {{ Request::is('employee/leaves') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{route('employee.leaves.index')}}" class="menu-link">
                        <i class="menu-icon flaticon2-google-drive-file"></i>
                        <span style="font-size: 15px;font-weight: bold" class="menu-text news">Leave Application</span>
                    </a>
                </li>


                <li class="menu-item {{ (Request::is('employee/noticeboards') or Request::is('employee/noticeboards/*')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{route('employee.noticeboards')}}" class="menu-link">
                        <i class="menu-icon flaticon2-notepad"></i>
                        <span style="font-size: 15px;" class="menu-text">Noticeboard</span>
                    </a>
                </li>


{{--                <li class="menu-item {{ (Request::is('employee/settings') or Request::is('employee/settings/*')) ? 'menu-item-active' : '' }}" aria-haspopup="true">--}}
{{--                    <a href="{{route('employee.settings.index')}}" class="menu-link">--}}
{{--                        <i class="menu-icon flaticon2-settings"></i>--}}
{{--                        <span style="font-size: 15px;" class="menu-text">Settings</span>--}}
{{--                    </a>--}}
{{--                </li>--}}

                <li class="menu-item {{ (Request::is('employee/profile') or Request::is('employee/profile/*')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{route('employee.profile.index')}}" class="menu-link">
                        <i class="menu-icon flaticon2-user-1"></i>
                        <span style="font-size: 15px;" class="menu-text"> Profile </span>
                    </a>
                </li>


            </div>
            <!--end::Menu Nav-->
        </div>
        <!--end::Menu Container-->
    </div>
    <!--end::Aside Menu-->
</div>
