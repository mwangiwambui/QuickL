{{-- Side Navigation --}}
<div class="col-md-2">
    <div class="sidebar content-box" style="display: block;">
        <ul class="nav">
            <!-- Main menu -->
            <li class="current"><a href="#"><i class="glyphicon glyphicon-home"></i>
                    Dashboard</a></li>
            @can('isIndustry')
            <li class="submenu">
                <a href="{{route('admin.index')}}">
                    <i class="glyphicon glyphicon-list"></i> Products
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{route('product.index')}}">Products</a></li>
                    <li><a href="{{route("product.create")}}">Add Product</a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Category
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{route('category.index')}}">Category</a></li>
                </ul>
            </li>

            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Orders
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{url('admin/orders/pending')}}">Pending Orders</a></li>
                    <li><a href="{{url('admin/orders/delivered')}}">Delivered Orders</a></li>
                    <li><a href="{{url('admin/orders')}}">All Orders</a></li>
                </ul>
            </li>
            @endcan
            @can('isAdmin')
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Manage Users
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{url('admin/requests/pending')}}">Pending Request</a></li>
                    <li><a href="{{url('admin/requests/accepted')}}">Approved Industries</a></li>
                    <li><a href="{{url('admin/requests')}}">All Industries</a></li>
                </ul>
            </li>
              @endcan
        </ul>
    </div>
</div> <!-- ADMIN SIDE NAV-->