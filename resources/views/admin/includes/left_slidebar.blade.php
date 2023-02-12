<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="/admin/index" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{asset('admin/assets/images/logo-sm.png')}}" alt="" height="22">
                    </span>
            <span class="logo-lg">
                        <img src="{{asset('admin/assets/images/logo-dark.png')}}" alt="" height="50">
                    </span>
        </a>
        <!-- Light Logo-->
        <a href="/admin/index" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{asset('admin/assets/images/logo-sm.png')}}" alt="" height="22" >
                    </span>
            <span class="logo-lg">
                        <img src="{{asset('admin/assets/images/logo-light.png')}}" alt="" >
                    </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarProducts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProducts">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Products Management</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarProducts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="/admin/product-category" class="nav-link" > Product Categories </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/products" class="nav-link" > Product Single </a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarPosts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPosts">
                        <i class="ri-layout-3-line"></i> <span>Posts Management</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPosts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="/admin/posts-category" class="nav-link" >Posts Categories</a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/posts" class="nav-link" >Posts Single</a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="/admin/customers" >
                        <i class="bx bx-user-circle"></i> <span>Customers</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="/admin/banners" >
                        <i class="las la-image"></i> <span>Banners</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="/admin/contacts" >
                        <i class=" las la-address-book"></i> <span>Contacts</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="/admin/bills" >
                        <i class="bx bx-shopping-bag"></i> <span>Bills</span>
                    </a>
                </li>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
