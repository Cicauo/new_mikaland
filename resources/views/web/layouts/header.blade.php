<header id="header" class="header-section">
    <div class="container">
        <nav class="navbar ">
            <a href="/" class="navbar-brand"><img src="img/mikaland-logo.png" style="width: 200px; height: auto; alt=" Arkit"></a>
            <div class="d-flex menu-wrap">
                <div id="mainmenu" class="mainmenu">
                    <ul class="nav">
                        <li><a data-scroll class="nav-link active" href="/">Home<span class="sr-only">(current)</span></a>

                        </li>
                        <li><a href="about-company">About</a>

                        </li>
                        <li><a href="#">Projects</a>
                            <ul>
                                {{-- @if(isset($categories))
                                @foreach($categories as $category)
                                <li><a href="{{ route('category.show', $category->slug) }}">{{ $category->name }}</a>
                        </li>
                        @endforeach
                        @endif --}}
                        <li><a href="savana-list">Savana Park Resident</a></li>
                        <li><a href="rajawali-list">Rajawali Resident</a></li>
                        <li><a href="mega-pesona-list">Mega Pesona Resident</a></li>
                    </ul>
                    </li>
                    <li><a href="list-blog">Blog</a>
                        {{-- <ul>
                                <li><a href="listblog">Blog Grid</a></li>
                                <li><a href="blogdetail">Blog Detail</a></li>
                            </ul> --}}
                    </li>
                    <li><a href="contact">Contact</a></li>
                    <li class="phone"><i class="fa fa-phone"></i> (+021) 599 5 888</li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
