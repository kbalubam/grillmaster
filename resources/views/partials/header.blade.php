@foreach ($header as $data)
    

<header id="headerwrap" class="backstretched fullheight">
        <div class="container-fluid fullheight">
            <div class="vertical-center row">
                <div class="col-sm-1 pull-left text-center slider-control match-height">
                    <a href="#" class="prev-bs-slide vertical-center wow fadeInLeft" data-wow-delay="0.8s"><i class="{{$data->icon1}}"></i></a>
                </div>
                <div class="intro-text text-center smoothie col-sm-10 match-height">
                    <div class="intro-heading wow fadeIn heading-font" data-wow-delay="0.8s"><img src="{{$data->img}}"></div>
                </div>
                <div class="col-sm-1 pull-right text-center slider-control match-height">
                    <a href="#" class="next-bs-slide vertical-center wow fadeInRight" data-wow-delay="0.8s"><i class="{{$data->icon2}}"></i></a>
                </div>
            </div>
        </div>
    </header>

    @endforeach