<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ms-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">

                @foreach(Config::get('admin_menus') as $menu=>$menus)
                    <li class="app-sidebar__heading">{{__($menus['title'])}}</li>
                    @foreach($menus['menus'] as $mainmenu)
                        <li>
                            <a href="{{$mainmenu['url']}}" {{ Request::is('/users/*') ? ' class="mm-active"' : null }}>
                                <i class="metismenu-icon {{$mainmenu['icon']}}"></i>
                                {{__($mainmenu['name'])}}
                            </a>
                        </li>
                    @endforeach
                @endforeach

            </ul>
        </div>
    </div>
</div>
