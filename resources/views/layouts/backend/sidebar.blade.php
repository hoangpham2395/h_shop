<aside class="main-sidebar sidebar-custom">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('images/avatar.png')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="active">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="header">PRODUCTS</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-mobile"></i> <span>Products</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-list-ul"></i> List of Products</a></li>
                    <li><a href="#"><i class="fa fa-plus"></i> Add new products</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-barcode"></i> <span>Categories</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-list-ul"></i> List of Categories</a></li>
                    <li><a href="#"><i class="fa fa-plus"></i> Add new category</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-apple"></i> <span>Brands</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-list-ul"></i> List of Brands</a></li>
                    <li><a href="#"><i class="fa fa-plus"></i> Add new brands</a></li>
                </ul>
            </li>
            <li class="header">ORDERS</li>
            <li>
                <a href="#">
                    <i class="fa fa-shopping-cart"></i> <span>List of Orders</span>
                </a>
            </li>
            <li class="header">EMPLOYEES</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i> <span>Employees</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-list-ul"></i> List of Employees</a></li>
                    <li><a href="#"><i class="fa fa-plus"></i> Add new employees</a></li>
                </ul>
            </li>
            <li>
                <a href="{{route('jobs.index')}}">
                    <i class="fa fa-suitcase"></i> <span>Jobs</span>
                </a>
            </li>
            <li class="header">ADMIN</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i> <span>Admin</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin.index')}}"><i class="fa fa-list-ul"></i> List of Admin</a></li>
                    <li><a href="{{route('admin.create')}}"><i class="fa fa-plus"></i> Add new admin</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>