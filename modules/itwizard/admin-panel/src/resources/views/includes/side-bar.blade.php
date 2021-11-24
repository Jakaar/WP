<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"
            style="background:url('{{ Config::get('setting.Admin_logo') ?? '/aPanel/imgs/logo.png' }}') "></div>
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
            <ul class="vertical-nav-menu metismenu">
                @foreach ($data['menu'] as $index)
                    @if ($index->url == Request::getRequestUri())
                        <li class="app-sidebar__heading">{{ $t->translateText($index->title) }} </li>
                        @foreach ($index->child as $child)
                            <li class=" @if (Request::getRequestUri() == $child->url)  mm-active  @endif">
                                <a href="{{ $child->url }}" aria-expanded="true">
                                    <i class="metismenu-icon {{ $child->icon ?? 'pe-7s-menu' }}"></i>
                                    {{ $t->translateText($child->title) }}
                                    @if ($child->child->count() != 0)
                                        <i class="metismenu-state-icon pe-7s-angle-up caret-left"></i>
                                    @endif
                                </a>

                                @if ($child->child->count() != 0)
                                    <ul class="mm-collapse">
                                        @foreach ($child->child as $subchild)
                                            <li>
                                                <a href="{{ $subchild->url }}">
                                                    {{ $t->translateText($subchild->title) }} </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    @else
                        @foreach ($index->child as $childs)
                            {{-- {{ dd($child) }} --}}
                            @if (Request::getRequestUri() == $childs->url)
                                <li class="app-sidebar__heading">{{ $t->translateText($childs->parent->title) }} </li>
                                @foreach ($childs->parent->child as $sub)
                                    <li class=" @if (Request::getRequestUri() == $sub->url)  mm-active  @endif">
                                        <a href="{{ $sub->url }}" aria-expanded="true">
                                            <i class="metismenu-icon {{ $sub->icon ?? 'pe-7s-menu' }}"></i>
                                            {{ $t->translateText($sub->title) }}
                                            @if ($sub->child->count() != 0)
                                            <i class="metismenu-state-icon pe-7s-angle-up caret-left"></i>
                                            @endif
                                        </a>
                                        @if ($sub->child->count() != 0)
                                            <ul class="mm-collapse mm-show">
                                                @foreach ($sub->child as $subchild)
                                                    <li>
                                                        <a href="{{ $subchild->url }}">
                                                            {{ $t->translateText($subchild->title) }} </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            @endif

                            @foreach ($childs->child as $ach)

                                @if (Request::getRequestUri() == $ach->url)
                                    <li class="app-sidebar__heading">
                                        {{ $t->translateText($ach->parent->parent->title) }}
                                    </li>
                                    @foreach ($ach->parent->parent->child as $sub)
                                        <li class=" @if (Request::getRequestUri() == $sub->url)  mm-active  @endif">
                                            <a href="{{ $sub->url }}" aria-expanded="true">
                                                <i class="metismenu-icon {{ $sub->icon ?? 'pe-7s-menu' }}"></i>
                                                {{ $t->translateText($sub->title) }}
                                                @if ($sub->child->count() != 0)
                                                    <i class="metismenu-state-icon pe-7s-angle-up caret-left"></i>
                                                @endif
                                            </a>
                                            @if ($sub->child->count() != 0)
                                                <ul class="mm-collapse mm-show">
                                                    @foreach ($sub->child as $subchild)
                                                        <li class=" @if (Request::getRequestUri() == $subchild->url)  mm-active  @endif" >
                                                            <a href="{{ $subchild->url }}">
                                                                {{ $t->translateText($subchild->title) }} </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach

                                @endif
                            @endforeach

                        @endforeach
                    @endif

                @endforeach
            </ul>
        </div>
    </div>
</div>
