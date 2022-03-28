
<div class="aside aside-left  d-flex flex-column flex-row-auto" id="kt_aside">
    <!--begin::Brand-->
    <div class="brand flex-column-auto" id="kt_brand">
        <!--begin::Logo-->
        <a href="{{route('admin.dashboard')}}" class="brand-logo">
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
                <li class="menu-item {{ Request::is('admin/dashboard') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{route('admin.dashboard')}}" class="menu-link">
                        <i class="menu-icon flaticon2-architecture-and-city"></i>
                        <span style="font-size: 15px;font-weight: bold" class="menu-text news">Dashboard</span>
                    </a>
                </li>

                <li class="menu-item {{ (Request::is('admin/departments') or Request::is('admin/departments/*')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{route('admin.departments.index')}}" class="menu-link">
                        <i class="menu-icon flaticon2-shield"></i>
                        <span style="font-size: 15px;" class="menu-text">Departments</span>
                    </a>
                </li>

                <li class="menu-item menu-item-submenu {{ (Request::is('admin/employees') or Request::is('admin/employees/*')  or Request::is('admin/awards/*') or Request::is('admin/awards')) ? 'menu-item-open' : ''  }}" aria-haspopup="true">
{{--                    <a href="{{route('admin.employees.index')}}" class="menu-link menu-toggle">--}}
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon2-user"></i>
                        <span style="font-size: 15px;" class="menu-text">Employees </span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                            <ul class="menu-subnav">
                                <li class="menu-item menu-item-parent" aria-haspopup="true">Z
                                    <span class="menu-link">
                                    <span class="menu-text">Actions</span>
                                </span>
                                </li>
                                <li class="menu-item {{ (Request::is('admin/employees') or Request::is('admin/employees/*')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                    <a href="{{route('admin.employees.index')}}" class="menu-link">
                                        <i class="menu-icon flaticon2-list"></i>
                                        <span style="font-size: 15px;" class="menu-text">Employee list</span>
                                    </a>
                                </li>

                                <li class="menu-item {{ (Request::is('admin/awards') or Request::is('admin/awards/*')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                    <a href="{{route('admin.awards.index')}}" class="menu-link">
                                        <i class="menu-icon flaticon2-cup"></i>
                                        <span style="font-size: 15px;" class="menu-text">Award</span>
                                    </a>
                                </li>

                                <li class="menu-item {{ (Request::is('admin/employee/salaries') or Request::is('admin/employee/salaries/*')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                    <a href="{{route('admin.salaries.index')}}" class="menu-link">
                                        <i class="menu-icon flaticon2-files-and-folders"></i>
                                        <span style="font-size: 15px;" class="menu-text">Salary</span>
                                    </a>
                                </li>
                            </ul>
                    </div>
                </li>


                <li class="menu-item {{ (Request::is('admin/expenses') or Request::is('admin/expenses/*')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{route('admin.expenses.index')}}" class="menu-link">
                        <i class="menu-icon flaticon2-sheet"></i>
                        <span style="font-size: 15px;" class="menu-text">Expenses</span>
                    </a>
                </li>


                <li class="menu-item {{ (Request::is('admin/noticeboards') or Request::is('admin/noticeboards/*')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{route('admin.noticeboards.index')}}" class="menu-link">
                        <i class="menu-icon flaticon2-notepad"></i>
                        <span style="font-size: 15px;" class="menu-text">Noticeboard</span>
                    </a>
                </li>


                <li class="menu-item {{ (Request::is('admin/settings') or Request::is('admin/settings/*')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{route('admin.settings.index')}}" class="menu-link">
                        <i class="menu-icon flaticon2-settings"></i>
                        <span style="font-size: 15px;" class="menu-text">Settings</span>
                    </a>
                </li>

                <li class="menu-item {{ (Request::is('admin/users') or Request::is('admin/users/*')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{route('admin.users.index')}}" class="menu-link">
                        <i class="menu-icon flaticon2-user-1"></i>
                        <span style="font-size: 15px;" class="menu-text">Admins </span>
                    </a>
                </li>


            </ul>
            </div>
            <!--end::Menu Nav-->
        </div>
        <!--end::Menu Container-->
    </div>
    <!--end::Aside Menu-->
</div>
