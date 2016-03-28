@extends('layouts.master')

@section('title', 'Page home index.php')

@section('sidebar')
    @parent

    <!-- Slider  homeslide-->
    <section class="slider">
        <div class="container">
            <div class="homeslide">
                <div class="flexslider">
                    <div class="flex-viewport" style="overflow: hidden; position: relative;">
                        <ul class="slides" style="width: 1000%; transition-duration: 0s; transform: translate3d(-1170px, 0px, 0px);">
                            <li class="clone" aria-hidden="true" style="width: 1170px; float: left; display: block;"><img src="http://lorempixel.com/1170/400/animals/1" alt="slide" draggable="false"></li>
                            <li class="flex-active-slide" style="width: 1170px; float: left; display: block;"><img src="http://lorempixel.com/1170/400/animals/2" alt="slide" draggable="false"></li>
                            <li style="width: 1170px; float: left; display: block;" class=""><img src=".http://lorempixel.com/1170/400/animals/3" alt="slide" draggable="false"></li>
                            <li style="width: 1170px; float: left; display: block;" class=""><img src="http://lorempixel.com/1170/400/animals/4" alt="slide" draggable="false"></li>
                            <li class="clone" aria-hidden="true" style="width: 1170px; float: left; display: block;"><img src="http://lorempixel.com/1170/400/animals/5" alt="slide" draggable="false"></li>
                        </ul>
                    </div>
                    <ol class="flex-control-nav flex-control-paging">
                        <li><a class="flex-active">1</a></li>
                        <li><a class="">2</a></li>
                        <li><a class="">3</a></li>
                    </ol>
                    <ul class="flex-direction-nav">
                        <li><a class="flex-prev" href="http://mercedesvietnamstar.vn/#">Previous</a></li>
                        <li><a class="flex-next" href="http://mercedesvietnamstar.vn/#">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Slider homeslide-->
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection
