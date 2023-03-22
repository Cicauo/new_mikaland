<header id="header" class="header-section">
    <div class="container">
        <nav class="navbar">
            <a href="{{url('/')}}" class="navbar-brand"><img src="{{url('web/img/mikaland-logo.png')}}" style="width: 200px; height: auto;" alt="Arkit"></a>
            <div class="d-flex menu-wrap">
                <div id="mainmenu" class="mainmenu">
                    <ul class="nav">
                        <li><a data-scroll class="@if($link=='home') nav-link active @endif" href="{{url('/')}}">Home<span class="sr-only">(current)</span></a>

                        </li>
                        <li><a class="@if($link=='about') nav-link active @endif" href="{{url('about')}}">About</a>

                        </li>
                        <li><a href="#">Projects</a>
                        <ul id="project-menu">
                            @foreach (Helper::project() as $item)
                                <li><a href="{{url('project/'.$item->slug)}}">{{$item->name}}</a></li>
                            @endforeach
                            
                        </ul>
                    </li>
                    <li><a class="@if($link=='blog') nav-link active @endif"  href="{{url('blog')}}">Blog</a>

                    </li>
                    <li><a class="@if($link=='contact') nav-link active @endif"  href="{{url('contact')}}">Contact</a></li>
                    <li class="phone"><i class="fa fa-phone"></i> (+021) 599 5 888</li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
