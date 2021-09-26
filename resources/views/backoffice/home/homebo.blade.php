@extends('template.backoffice')
@section('content')
<h1>BACK OFFICE HOME</h1>
<div class="glob">
    <div class="rangée">
        <div class="case">
            <a href="{{route('abouts.index')}}">
                ABOUT

            </a>
        </div>
        <div class="case">
        <a href="{{route('chefs.index')}}">
                        CHEF

                    </a>
        </div>
    </div>
    <div class="rangée">
        <div class="case">
        <a href="{{route('commentaires.index')}}">
                        Commentaires

                    </a>
        </div>
        <div class="case">
        <a href="{{route()}}">
                        NAVBAR

                    </a>
        </div>
    </div>
    <div class="rangée">
            <div class="case">
                    <a href="">
                            RESERVATION

                        </a>
            </div>
            <div class="case">
                    <a href="">
                            IMAGE

                        </a>
            </div>
        </div>
        <div class="rangée">
            <div class="case">
                    <a href="">
                            FOOTER

                        </a>
            </div>
            <div class="case">
                    <a href="">
                            USER

                    </a>
                </div>
            </div>

</div>


@endsection
