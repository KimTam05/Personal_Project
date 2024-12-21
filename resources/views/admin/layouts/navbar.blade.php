<nav class="app-header navbar navbar-expand bg-body"> <!--begin::Container-->
    <div class="container-fluid"> <!--begin::Start Navbar Links-->
        <ul class="navbar-nav">
            <li class="nav-item"> <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"> <i class="bi bi-list"></i> </a> </li>
            <li class="nav-item d-none d-md-block"> <a href="{{route('admin.index')}}" class="nav-link">Home</a> </li>
        </ul> <!--end::Start Navbar Links--> <!--begin::End Navbar Links-->
        <ul class="navbar-nav ms-auto"> <!--begin::Navbar Search-->
            <li class="nav-item user-menu"> <a href="#" class="nav-link"> <img src="{{ asset('img/user2-160x160.jpg') }}" class="user-image rounded-circle shadow" alt="User Image"> <span class="d-none d-md-inline">{{ $user->username }}</span> </a>
            </li>
            <li class="user-body"> <!--begin::Row-->
                <a href="{{ route('admin.logout') }}" class="btn btn-danger btn-flat float-end">Sign out</a>
            </li>  <!--end::User Menu Dropdown-->
        </ul> <!--end::End Navbar Links-->
    </div> <!--end::Container-->
</nav>
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
    <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="/admin" class="brand-link"> <!--begin::Brand Image--> <img src="{{asset('img/AdminLTELogo.png')}}" alt="Admin Logo" class="brand-image opacity-75 shadow"> <!--end::Brand Image--> <!--begin::Brand Text--> <span class="brand-text fw-light">Admin Page</span> <!--end::Brand Text--> </a> <!--end::Brand Link--> </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2"> <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item"> <a href="{{ route('admin.index') }}" class="nav-link"> <i class="nav-icon bi bi-speedometer"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-header">ADMIN ACCOUNT</li>
                <li class="nav-item"> <a href="/admin/admin-user" class="nav-link"> <i class="nav-icon bi bi-circle"></i></i>
                        <p>
                            List Account
                        </p>
                    </a>
                </li>
                <li class="nav-item"> <a href="/admin/admin-user/create" class="nav-link"> <i class="nav-icon bi bi-circle"></i></i>
                        <p>
                            Add Account
                        </p>
                    </a>
                </li>
                <li class="nav-header">CATEGORY</li>
                <li class="nav-item"> <a href="/admin/category" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                        <p>List Category</p>
                    </a> </li>
                <li class="nav-item"> <a href="/admin/category/create" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                        <p>Add Category</p>
                    </a> </li>
                <li class="nav-header">PRODUCT</li>
                <li class="nav-item"> <a href="/admin/product" class="nav-link"> <i class="nav-icon bi bi-circle-fill"></i>
                        <p>List Product</p>
                    </a> </li>
                <li class="nav-item"> <a href="/admin/product/create" class="nav-link"> <i class="nav-icon bi bi-circle-fill"></i>
                        <p>
                            Add Product
                        </p>
                    </a>
                </li>
                <li class="nav-header">CUSTOMER</li>
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle-fill"></i>
                        <p>List Customer</p>
                    </a> </li>
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle-fill"></i>
                        <p>
                            Add Customer
                        </p>
                    </a>
                </li>
            </ul> <!--end::Sidebar Menu-->
        </nav>
    </div> <!--end::Sidebar Wrapper-->
</aside>
