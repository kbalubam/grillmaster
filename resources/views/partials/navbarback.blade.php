<div class="preloader">
    <div class="preloader-img">
        <span class="loading-animation animate-flicker"><img src="{{asset('img/loading.GIF')}}" alt="loading" /></span>
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
            <a class="navbar-brand smoothie" href="index.html">THE <span class="theme-accent-color">GRILL</span></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="nav navbar-nav navbar-right">
            <li><a href="{{route('aboutbo.index')}}" class="page-scroll">ABOUT</a></li>
                <li><a href="#about" class="page-scroll">CHEFS</a></li>
                <li><a href="#the-menu" class="page-scroll">COMMENTAIRE</a></li>
                <li><a href="#about" class="page-scroll">HEADER</a></li>
                <li><a href="#about" class="page-scroll">FOOTER</a></li>
                <li><a href="#about" class="page-scroll">NAVBAR</a></li>
                <li><a href="#search"><i class="fa fa-search"></i></a></li>
            </ul>

        </div>
        <!-- /.navbar-collapse -->

    </div>
    <!-- /.container-fluid -->
</nav>
<div id="search-wrapper">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="Enter Search Term" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
</div>