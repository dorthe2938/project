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
    .btnHomePage, .btnTermsAndCond {
        color: #fff;
        background-color: #f39200;
        width: 100%;
    }
    
    .btnHomePage a, .btnTermsAndCond a{
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

                <div class="panel-body">
                    <button type="submit" class="btn btnHomePage"><a href="new_shoppinglist">Ny indkøbsliste</a></button>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-fixed-bottom">
         <div type="submit" class="btnTermsAndCond">
             <a href="create_shoppinglist">
                 <div class="row">
                     <div class="col-xs-10">Vilkår og betingelser</div>
                     <div class="col-xs-2"><div class="pull-right">></div></div>
                 </div>
             </a>
             
         </div>
                   
    </div>
</div>
@endsection
