@extends('layouts.dashboard')

@section('content')
<style type="text/css" media="screen">
    @import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);

    body {padding-top:100px;}

    .box {
        border-radius: 3px;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
        padding: 10px 25px;
        text-align: right;
        display: block;
        margin-top: 60px;
    }
    .box-icon {
        background-color: #57a544;
        border-radius: 50%;
        display: table;
        height: 100px;
        margin: 0 auto;
        width: 100px;
        margin-top: -61px;
    }
    .box-icon span {
        color: #fff;
        display: table-cell;
        text-align: center;
        vertical-align: middle;
    }
    .info h4 {
        font-size: 26px;
        letter-spacing: 2px;
        text-transform: uppercase;
    }
    .info > p {
        color: #717171;
        font-size: 16px;
        padding-top: 10px;
        text-align: justify;
    }
    .info > a {
        background-color: #03a9f4;
        border-radius: 2px;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
        color: #fff;
        transition: all 0.5s ease 0s;
    }
    .info > a:hover {
        background-color: #0288d1;
        box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.16), 0 2px 5px 0 rgba(0, 0, 0, 0.12);
        color: #fff;
        transition: all 0.5s ease 0s;
    }
</style>    
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <div class="box-icon">
                    <span class="fa fa-4x fa-html5"></span>
                </div>
                <div class="info">
                    <h4 class="text-center">Title</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur corporis at explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem architecto perferendis quas aperiam debitis dolor soluta!</p>
                    <a href="" class="btn">Link</a>
                </div>
            </div>
        </div>
        
        
    </div>
</div>
@endsection
