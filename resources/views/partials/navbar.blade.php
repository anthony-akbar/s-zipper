<header>
    <nav class="fixed-top navbar navbar-expand-lg navbar-scroll navbar-dark">
        <a class="navbar-brand" href="#">S. Zipper Accessories</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ request()->is('/') ? "active" : "" }}">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item {{ request()->is('/products') ? "active" : "" }}">
                    <a class="nav-link" href="#">Products</a>
                </li>
                <li class="nav-item {{ request()->is('/gallery') ? "active" : "" }}">
                    <a class="nav-link" href="#">Gallery</a>
                </li>
            </ul>
            <div class="nav-item">
                 <a class ="nav-link button-28" role="button"> Button 28 </a>
            </div>
            <div class="nav-link my-2 my-lg-0">
                info@s-zipper.uz
            </div>
        </div>
    </nav>
</header>
