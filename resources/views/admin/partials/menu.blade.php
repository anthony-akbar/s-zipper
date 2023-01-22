<nav class="side-nav">
    <ul>
        <li>
            <a {{--href="{{ route('admin.home') }}"--}} class="side-menu side-menu{{ request()->is("admin") ? "--active" : "" }}">
                <div class="side-menu__icon"><i data-lucide="home"></i></div>
                <div class="side-menu__title">Dashboard</div>
            </a>
        </li>
        <li>
            <a {{--href="{{ route("admin.products") }}"--}}
               class="side-menu side-menu{{ request()->is("admin/products") || request()->is("admin/products/*") ? "--active" : "" }}">
                <div class="side-menu__icon"><i data-lucide="align-justify"></i></div>
                <div class="side-menu__title">Articles</div>
            </a>
        </li>
        <li>
            <a {{--href="{{ route('admin.categories') }}"--}}
               class="side-menu side-menu{{ request()->is("admin/categories") || request()->is("admin/categories/*") ? "--active" : "" }}">
                <div class="side-menu__icon"><i data-lucide="image"></i></div>
                <div class="side-menu__title">Gallery</div>
            </a>
        </li>
        <li>
            <a {{--href="{{ route('admin.clients') }}"--}}
               class="side-menu side-menu{{ request()->is("admin/clients") || request()->is("admin/clients/*") ? "--active" : "" }}">
                <div class="side-menu__icon"><i data-lucide="camera"></i></div>
                <div class="side-menu__title">Media</div>
            </a>
        </li>
    </ul>
</nav>
