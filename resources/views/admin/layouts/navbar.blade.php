<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
    <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="./index.html" class="brand-link"> <!--begin::Brand Image--> <img src="{{asset('img/AdminLTELogo.png')}}" alt="Admin Logo" class="brand-image opacity-75 shadow"> <!--end::Brand Image--> <!--begin::Brand Text--> <span class="brand-text fw-light">Admin Page</span> <!--end::Brand Text--> </a> <!--end::Brand Link--> </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2"> <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item"> <a href="{{ route('admin.index') }}" class="nav-link active"> <i class="nav-icon bi bi-speedometer"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-header">ACCOUNT</li>
                <li class="nav-item"> <a href="/admin/admin-user" class="nav-link"> <i class="nav-icon bi bi-circle"></i></i>
                        <p>
                            List Account
                        </p>
                    </a>
                </li>
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle"></i></i>
                        <p>
                            Add Account
                        </p>
                    </a>
                </li>
                <li class="nav-header">CATEGORY</li>
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                        <p>List Category</p>
                    </a> </li>
                <li class="nav-item"> <a href="./docs/layout.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                        <p>Add Category</p>
                    </a> </li>
                <li class="nav-header">PRODUCT</li>
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle-fill"></i>
                        <p>List Product</p>
                    </a> </li>
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle-fill"></i>
                        <p>
                            Add Product
                        </p>
                    </a>
                </li>
            </ul> <!--end::Sidebar Menu-->
        </nav>
    </div> <!--end::Sidebar Wrapper-->
</aside>