@inject('t','App\Helper\Helper')
<nav id="navbar-main" class="navbar navbar-main navbar-expand-lg bg-default navbar-dark  headroom py-2">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global"
            aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar_global">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="">
                            <img src="{{ asset('/client/static/img/brand/blue.png') }}" alt="">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global"
                            aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav navbar-nav-hover align-items-lg-center ml-lg-auto">
                <a href="/" class="nav-link">
                    <i class="ni ni-app d-lg-none"></i>
                    <span class="nav-link-inner--text"><b>{{ __('Home') }}</b></span>
                </a>
                <a href="/customer/products" class="nav-link">
                    <i class="ni ni-app d-lg-none"></i>
                    <span class="nav-link-inner--text"><b>{{ __('Products') }}</b></span>
                </a>
                @foreach ($Main['menu'] as $menu)
                    @if (count($menu->childrenCategories) > 0)
                        <li class="nav-item gg ">
                            <a href="/{{ $menu->board_master_id }}/{{ $menu->id }}" class="nav-link">
{{--                                <i class="ni ni-app d-lg-none"></i>--}}
                                <span class="nav-link-inner-text"><b>{!! $t->translateText($menu->name) !!}</b></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                @foreach ($menu->childrenCategories as $childCategory)
                                    @include('client.includes.__nav', ['child_category' => $childCategory])
                                @endforeach
                            </div>
                        </li>
                    @else
                        <a href="/{{ $menu->board_master_id }}/{{ $menu->id }}" class="nav-link">
                            <i class="ni ni-app d-lg-none"></i>
                            <span class="nav-link-inner--text"><b>{!! $t->translateText($menu->name) !!}</b></span>
                        </a>
                    @endif
                @endforeach
                <li class="nav-item dropdown">
                    <a href="" class="nav-link" data-toggle="dropdown" role="button">
                        <i class="ni ni-tablet-button d-lg-none"></i>
                        <span class="nav-link-inner--text"><b>{{ __('Language') }}</b></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @foreach ($Main['language'] as $locale)
                            <a class="dropdown-item" href="/lang/{{ $locale->country_code }}">
                                {{-- <i class="ni ni-lock-circle-open text-muted"></i> --}}
                                <b>{{ $locale->country }}</b>
                            </a>
                        @endforeach
                    </div>
                </li>
                @if (auth()->check())
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#">
                            <span class="nav-link-inner--text">
                                <b>{{ auth()->user()->email }}</b></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <!--                        <a class="dropdown-item" href="#">-->
                            <!--                            <b>Profile</b>-->
                            <!--                        </a>-->
                            <a class="dropdown-item" href="{{ route('customer.logout') }}">
                                <b>Logout</b>
                            </a>
                        </div>
                    </li>
                @else
                    <a href="{{ route('customer.login') }}" class="nav-link">
                        <i class="ni ni-circle-08"></i>
                        <b>Login</b></a>
                @endif
            </ul>
        </div>
    </div>
</nav>
