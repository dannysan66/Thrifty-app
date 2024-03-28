
        <div class="bg-dark col-auto col-md-4 col-lg-3 min-vh-100 d-flex flex-column justify-content-between">
            <div class="bg-dark p-2">
                <h1 style="text-align:center;">Thrifty</h1>
                <ul class="nav nav-pills flex-column mt-4">
                    <li class="nav-tiem py-2 py-sm-0">
                        <a href="{{ route('adminpanel') }}" class="nav-link text-white" style="text-align:center;"><i class="fs-5 fa-solid fa-list-ul"></i><span class="fs-4 ms-3 d-none d-sm-inline">Dashboard</span></a>
                    </li>
                    <li class="nav-tiem py-2 py-sm-0">
                        <a href="{{ route('adminpanel.products') }}" class="nav-link text-white" style="text-align:center;"><i class="fs-5 fa-solid fa-tag"></i><span class="fs-4 ms-3 d-none d-sm-inline">Products</span></a>
                    </li>
                    <li class="nav-tiem py-2 py-sm-0">
                        <a href="{{ route('adminpanel.categories') }}" class="nav-link text-white" style="text-align:center;"><i class="fs-5 fa-solid fa-layer-group"></i><span class="fs-4 ms-3 d-none d-sm-inline">Categories</span></a>
                    </li>
                    <li class="nav-tiem py-2 py-sm-0">
                        <a href="{{ route('adminpanel.colors') }}" class="nav-link text-white" style="text-align:center;"><i class="fs-5 fa-solid fa-palette"></i><span class="fs-4 ms-3 d-none d-sm-inline">Colors</span></a>
                    </li>
                    <li class="nav-tiem py-2 py-sm-0">
                        <a href="{{ route('adminpanel.orders') }}" class="nav-link text-white" style="text-align:center;"><i class="fs-5 fa-solid fa-cart-shopping"></i><span class="fs-4 ms-3 d-none d-sm-inline">Orders</span></a>
                    </li>
                </ul>
            </div>
            <div class="logout" style="text-align:center;">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                <button class="btn btn-primary" type="submit"><i class="fa-solid fa-right-from-bracket"></i> Logout</button>
            </form>
            </div>     
</div>
