<!--begin::Sidebar-->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
        <a href="/" class="brand-link">
            <img src="{{ asset('images/astras.png') }}" alt="لوگوی استراس" class="brand-image opacity-75 shadow" />
            <span class="brand-text fw-light">شرکت امارتی استراس</span>
        </a>
    </div>
    <!--end::Sidebar Brand-->

    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">

                <!-- آمریت خط استیشن -->
                <li class="nav-item {{ request()->is('train-station*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('train-station*') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-train-front"></i>
                        <p>
                            آمریت خط استیشن
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <!-- صادرات -->
                        <li class="nav-item {{ request()->is('train-station/export*') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ request()->is('train-station/export*') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-box-arrow-up"></i>
                                <p>
                                    صادرات
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/train-station/export/dry" class="nav-link {{ request()->is('train-station/export/dry*') ? 'active' : '' }}">
                                        <i class="nav-icon bi bi-box"></i>
                                        <p>خشکه باب</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/train-station/export/oil" class="nav-link {{ request()->is('train-station/export/oil*') ? 'active' : '' }}">
                                        <i class="nav-icon bi bi-droplet-half"></i>
                                        <p>مواد نفتی</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- واردات -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-down"></i>
                                <p>
                                    واردات
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/train-station/import/dry" class="nav-link">
                                        <i class="nav-icon bi bi-box"></i>
                                        <p>خشکه باب</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/train-station/import/oil" class="nav-link">
                                        <i class="nav-icon bi bi-droplet-half"></i>
                                        <p>مواد نفتی</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <!-- پورت نمبر ۱ -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-speedometer2"></i>
                        <p>
                            پورت نمبر ۱
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/port1/dispatch" class="nav-link">
                                <i class="nav-icon bi bi-truck"></i>
                                <p>دسپیچری</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/port1/warehouse" class="nav-link">
                                <i class="nav-icon bi bi-box-seam"></i>
                                <p>مدیریت تحویلخانه</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/port1/export" class="nav-link">
                                <i class="nav-icon bi bi-upload"></i>
                                <p>صادرات</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/port1/import" class="nav-link">
                                <i class="nav-icon bi bi-download"></i>
                                <p>واردات</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/port1/gate1" class="nav-link">
                                <i class="nav-icon bi bi-door-open"></i>
                                <p>دروازه ورودی و خروجی اول</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/port1/gate2" class="nav-link">
                                <i class="nav-icon bi bi-door-closed"></i>
                                <p>دروازه ورودی و خروجی دوم</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/port1/scale" class="nav-link">
                                <i class="nav-icon bi bi-speedometer"></i>
                                <p>ترازو</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
            <!--end::Sidebar Menu-->
        </nav>
    </div>
    <!--end::Sidebar Wrapper-->
</aside>
<!--end::Sidebar-->
