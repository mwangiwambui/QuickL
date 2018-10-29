{{-- Side Navigation --}}
<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="{{asset('theme-assets/images/backgrounds/02.jpg')}}">
  <div class="navbar-header">
    <ul class="nav navbar-nav flex-row">
      <li class="nav-item mr-auto">
        <a class="navbar-brand" href="{{url('admin')}}"><img class="brand-logo" alt="Chameleon admin logo" src="{{asset('theme-assets/images/logo/logo.png')}}"/>
          <h3 class="brand-text">Quick Link</h3></a></li>
      <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
    </ul>
  </div>
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
      <li class="active"><a href="{{url('/admin')}}"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
      </li>

      @can('isIndustry')

      <li class="submenu nav-item"><a href="{{route('admin.index')}}"><i class="ft-pie-chart"></i><span class="menu-title" data-i18n="">Products</span></a>
        <ul>
            <li><a href="{{route('product.index')}}">Products</a></li>
            <li><a href="{{route('product.create')}}">Add Product</a></li>
        </ul>
      </li>
      <li class="submenu nav-item"><a href="#"><i class="ft-layers"></i><span class="menu-title" data-i18n="">Category</span></a>
        <ul>
            <li><a href="{{route('category.index')}}">Category</a></li>
        </ul>
      </li>
      <li class="submenu nav-item"><a href="#"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Orders</span></a>
        <ul>
            <li><a href="{{url('admin/orders/pending')}}">Pending Orders</a></li>
            <li><a href="{{url('admin/orders/delivered')}}">Delivered Orders</a></li>
            <li><a href="{{url('admin/orders')}}">All Orders</a></li>
        </ul>
      </li>

      @endcan

      @can('isAdmin')

      <li class="nav-item"><a href="#"><i class="la la-wrench"></i><span class="menu-title" data-i18n="">Manage Users</span></a>
      </li>
      <li class="nav-item"><a href="{{url('admin/requests/pending')}}"><i class="la la-hourglass-half"></i><span class="menu-title" data-i18n="">Pending Requests</span></a>
      </li>
      <li class="nav-item"><a href="{{url('admin/requests/accepted')}}"><i class="la la-thumbs-up"></i><span class="menu-title" data-i18n="">Approved Industries</span></a>
      </li>
      <li class="nav-item"><a href="{{url('admin/requests')}}"><i class="la la-university"></i><span class="menu-title" data-i18n="">All Industries</span></a>
      </li>

        <li class="nav-item"><a href="{{route('users.index')}}"><i class="la la-university"></i><span class="menu-title" data-i18n="">Manage Roles</span></a>
        </li>



      @endcan

    </ul>
  </div><a class="btn btn-danger btn-block btn-glow btn-upgrade-pro mx-1" href="#" target="_blank">website</a>
  <div class="navigation-background"></div>
</div>
