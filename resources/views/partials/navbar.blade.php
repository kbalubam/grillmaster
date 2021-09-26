@foreach ($navbar as $data)
    

<div class="preloader">
        <div class="preloader-img">
            <span class="loading-animation animate-flicker"><img src="{{$data->img}}" alt="loading" /></span>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top fadeInDown" data-wow-delay="0.2s">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand smoothie" href="index.html">{{$data->titrePart1}} <span class="theme-accent-color">{{$data->titrePart2}}</span></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-navigation">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#about" class="page-scroll">{{$data->link1}}</a></li>
                    <li><a href="#about" class="page-scroll">{{$data->link2}}</a></li>
                    <li><a href="#the-menu" class="page-scroll">{{$data->link3}}</a></li>
                    <li><a href="#about" class="page-scroll">{{$data->link4}}</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">{{$data->link5}} <span class="pe-7s-angle-down"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="404.html">{{$data->ddlink5}}</a></li>
                        </ul>
                    </li>
                    <li><a href="#search"><i class="fa fa-search"></i></a></li>
                </ul>

            </div>
            <!-- /.navbar-collapse -->

        </div>
        <!-- /.container-fluid -->
    </nav>
    <div id="search-wrapper">
            <button type="button" class="close">{{$data->iconBtn}}</button>
            <form>
                <input type="search" value="" placeholder="Enter Search Term" />
                <button type="submit" class="btn btn-primary">{{$data->btnSearch}}</button>
            </form>
</div>

@endforeach