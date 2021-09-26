@foreach ($footer as $data)
    

<footer class="white-wrapper">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-md-12 wow fadeIn mb30" data-wow-delay="0.2s">
                    <span class="copyright">{{$data->copyright}}</span>
                </div>
                <div class="col-md-12">
                    <ul class="list-inline social-links wow fadeIn" data-wow-delay="0.2s">
                        <li>
                            <a href="#"><i class="{{$data->icon1}}"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="{{$data->icon2}}"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="{{$data->icon3}}"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="{{$data->icon4}}"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="{{$data->icon5}}"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="{{$data->icon6}}"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <div id="bottom-frame"></div>

    <a href="#" id="back-to-top"><i class="{{$data->icon7}}"></i></a>

</div>

@endforeach