<nav class="side-nav">
    <ul>
        <li>
            <a href="{{ route('admin.home') }}"
               class="side-menu side-menu{{ request()->is("admin") ? "--active" : "" }}">
                <div class="side-menu__icon"><i data-lucide="home"></i></div>
                <div class="side-menu__title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="{{ route("admin.slider") }}"
               class="side-menu side-menu{{ request()->is("admin/slider") || request()->is("admin/slider/*") ? "--active" : "" }}">
                <div class="side-menu__icon"><i data-lucide="align-justify"></i></div>
                <div class="side-menu__title">Sliders</div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="side-menu side-menu{{ request()->is("admin/zipper/") || request()->is("admin/zipper/*") ? "--active" : "" }}">
                <div class="side-menu__icon">
                    <img style="width: 24px; height: 24px;" src="{{ asset('zipper.svg') }}"/>
                </div>
                <div class="side-menu__title">
                    Zipper
                    <div class="side-menu__sub-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="chevron-down" data-lucide="chevron-down" class="lucide lucide-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </div>
                </div>
            </a>
            <ul class="{{ request()->is("admin/zipper/") || request()->is("admin/zipper/*") ? "side-menu__sub-open" : "" }}" {{ request()->is("admin/zipper/") || request()->is("admin/zipper/*") ? 'style="display: none;"' : "" }}>
                <li>
                    <a href="#" class="side-menu">
                        <div class="side-menu__icon">
                        </div>
                        <div class="side-menu__title">
                            Zippers
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.zipper.puller') }}" class="side-menu">
                        <div class="side-menu__icon">
                            {{--ICON--}}
                        </div>
                        <div class="side-menu__title">
                            Pullers
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.zipper.slider') }}" class="side-menu">
                        <div class="side-menu__icon">
                            {{--ICON--}}
                        </div>
                        <div class="side-menu__title">
                            Sliders
                        </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{ route('admin.categories') }}"
               class="side-menu side-menu{{ request()->is("admin/categories") || request()->is("admin/categories/*") ? "--active" : "" }}">
                <div class="side-menu__icon"><i data-lucide="image"></i></div>
                <div class="side-menu__title">Categories</div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.products') }}"
               class="side-menu side-menu{{ request()->is("admin/products") || request()->is("admin/products/*") ? "--active" : "" }}">
                <div class="side-menu__icon"><i data-lucide="camera"></i></div>
                <div class="side-menu__title">Products</div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.partners') }}"
               class="side-menu side-menu{{ request()->is("admin/partners") || request()->is("admin/partners/*") ? "--active" : "" }}">
                <div class="side-menu__icon"><i data-lucide="briefcase"></i></div>
                <div class="side-menu__title">Partners</div>
            </a>
        </li>
    </ul>
</nav>
