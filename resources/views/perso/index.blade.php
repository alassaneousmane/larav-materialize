@extends('welcome')

@section('content')
<div class="container">


    <div class="col s12 m8 offset-m2 l6 offset-l3">
        <div class="card-panel grey lighten-5 z-depth-1">
            <div class="row valign-wrapper">
                <div class="col s2">
                    <img src="https://materializecss.com/images/materialize_team.jpeg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                </div>
            <div class="col s10">
                <span class="black-text">
                    This is a square image. Add the "circle" class to it to make it appear circular.
                </span>
            </div>
        </div>
    </div>
    </div>
    <div class="collection">
        <a href="#!" class="collection-item"><span class="badge">1</span>Alan</a>
        <a href="#!" class="collection-item"><span class="new badge">4</span>Alan</a>
        <a href="#!" class="collection-item">Alan</a>
        <a href="#!" class="collection-item"><span class="badge">14</span>Alan</a>
    </div>
    <div class="video-container">
        <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
    </div>
    <br>

</div>
@endsection


