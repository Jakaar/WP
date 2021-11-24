<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ms-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic">
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
                @foreach (Config::get('Menu') as $menu => $menus)
                    @if (Request::is($menus['url'] . '*') == $menus['url'])
                        <li class="app-sidebar__heading">{{ __($menus['title']) }}</li>
                        @foreach ($menus['menus'] as $mainmenu)
                            @if ($mainmenu['child'])
                                <li class="{{ Request::is($mainmenu['url'] . '/*') ? 'mm-active' : null }}">
                                    <a href="#"
                                        aria-expanded="{{ Request::is($mainmenu['url'] . '/*') ? 'true' : null }}">
                                        <i
                                            class="metismenu-icon {{ $mainmenu['icon'] }} {{ $mainmenu['colorClass'] ?? '' }}"></i>
                                        {{ __($mainmenu['name']) }}
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul class="{{ Request::is($mainmenu['url']) ? 'mm-collapse mm-show' : null }}"
                                        style="">
                                        @foreach ($mainmenu['child'] as $child)
                                            <li>
                                                <a href="/{{ __($child['url']) }}"
                                                    class="{{ Request::is($child['url']) ? 'mm-active' : null }}">
                                                    {{-- <i class="metismenu-icon"></i> --}}
                                                    {{ __($child['name']) }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li>
                                    <a href="/{{ $mainmenu['url'] }}"
                                        class="{{ Request::is($mainmenu['url']) ? 'mm-active' : null }}">
                                        <i
                                            class="metismenu-icon {{ $mainmenu['icon'] }} {{ $mainmenu['colorClass'] ?? '' }}"></i>
                                        {{ __($mainmenu['name']) }}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            </ul>
        </div>

        <div class="app-sidebar__inner leftbottom">
            <ul class="vertical-nav-menu ">
                <li>
                    <a onclick="document.getElementById('frm-logout').submit(); return false;" class="mm-active" style="cursor: pointer">
                        <i class="metismenu-icon pe-7s-back "></i>
                        {{ __('Logout')}}
                    </a>
                </li>
                <li>
                    <a href="/cms" class="mm-active">
                        <i class="metismenu-icon pe-7s-home "></i>
                        {{ __('Homepage')}}
                    </a>
                </li>
            </ul>
        </div>

        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none"></form>

    </div>
</div>
<script>

</script>
<style>
    .leftbottom {
        margin-left: 15px;
        bottom: 0;
        position: fixed;
    }

    .leftbottom .vertical-nav-menu li a.mm-active {
        color: #3f6ad8 !important;
        background: none !important;
        font-weight: bold !important;
    }

    .leftbottom .vertical-nav-menu li {
        margin-left: 0px;
        width: 100%;
    }

</style>
