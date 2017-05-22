@extends('layouts.app')

@section('content')

<style>
    .row {
        margin: 0;
    }
    .homePage {
        width: 80%;
        margin: 0 auto;
    }
    
    .homePage h2 {
        text-align: center;
    }
    
    .btnHomePage, .btnTermsAndCond {
        color: #fff;
        background-color: #f39200;
        width: 100%;
    }
    
    .panel-body a, .btnTermsAndCond a{
        color: #fff;
        font-size: 20px;
    }
    
    .btnTermsAndCond {
        padding: 5px;
    }
    
</style>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="homePage">
                <h2>Menu</h2>
                <div class="panel-body">
                    <a href="new_shoppinglist"><button type="submit" class="btn btnHomePage">Ny indkøbsliste</button></a>
                </div>
                <div class="panel-body">
                    <a href="#"><button type="submit" class="btn btnHomePage">Seneste indkøbsliste</button></a>
                </div>
                <div class="panel-body">
                    <a href="#"><button type="submit" class="btn btnHomePage">Se alle dine indkøbslister</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-fixed-bottom">
         <div type="submit" class="btnTermsAndCond">
             <a href="terms_and_conditions">
                 <div class="row">
                     <div class="col-xs-10">Vilkår og betingelser</div>
                     <div class="col-xs-2"><div class="pull-right">></div></div>
                 </div>
             </a>
         </div>         
    </div>
</div>
@endsection
