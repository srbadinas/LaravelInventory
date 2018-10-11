
<div id="navigation-wrapper">
    <div id="navigation-header">
        <div></div>
    </div>
    <ul id="navigation">
        {{-- Dashboard --}}
        <li class="navigation-menu {{ Request::is('/') ? "active" : "" }} navigation-hide">
            <a href="#" onclick="location.href='{{ url('/') }}'">
                <i class="fa fa-home"></i>Dashboard
            </a>
        </li>
        {{-- User Management --}}
        <li class="navigation-menu navigation-hide">
            <a href="#" data-target="#user">
                <i class="fa fa-users"></i>User Management
                <span class="glyphicon glyphicon-chevron-down"></span>
                <ul class="navigation-sub-menu collapse" id="user">
                    <li onclick="location.href='{{ route('users.index') }}'"><i class="fa fa-user"></i>Users</li>
                    <li onclick="location.href=''"><i class="fa fa-cogs"></i>User Roles</li>
                </ul>
            </a>
        </li>
        {{-- Inventory Management --}}
        <li class="navigation-menu navigation-hide">
            <a href="#" data-target="#inventory">
                <i class="fa fa-boxes"></i>Inventory Management
                <span class="glyphicon glyphicon-chevron-down"></span>
                <ul class="navigation-sub-menu collapse" id="inventory">
                    <li onclick="location.href=''"><i class="fa fa-box"></i>Products</li>
                    <li onclick="location.href=''"><i class="fa fa-tags"></i>Category</li>
                </ul>
            </a>
        </li>

    </ul>
</div>
