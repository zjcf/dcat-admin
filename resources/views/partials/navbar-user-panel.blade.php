@if($user)
<li class="dropdown dropdown-user nav-item">
    <a class="nav-link dropdown-user-link" href="#" data-toggle="dropdown" style="color:#000000">
        <div class="user-nav d-sm-flex d-none">
            <span class="user-name text-bold-600">{{ $user->name }}</span>
            <span class="user-status"><i class="fa fa-circle text-success"></i> {{ trans('admin.online') }}</span>
            <span class="fa fa-angle-down" style="line-height:30px;margin-left:20px"></span>
        </div>
    </a>
    <div class="dropdown-menu dropdown-menu-right">
        <a href="{{ admin_url('auth/setting') }}" class="dropdown-item">
            <i class="feather icon-user"></i> {{ trans('admin.setting') }}
        </a>

        <div class="dropdown-divider"></div>

        <a class="dropdown-item" href="{{ admin_url('auth/logout') }}">
            <i class="feather icon-power"></i> {{ trans('admin.logout') }}
        </a>
    </div>
</li>
<style>
li.nav-item.dropdown-user {
    position: absolute;
    right: 14px;
    top: 7px;
    line-height: 30px;
    font-size: 15px;
    padding: 5px 10px;
}
li.nav-item.dropdown-user .dropdown-item {
    padding: 0 0.5rem;
}
</style>
@endif
