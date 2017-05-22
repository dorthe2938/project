@extends('layouts.app')

@section('content')
<style>
    
    .row {
        margin: 0;
    }
    .createShoppinglist h2 {
        text-align:center;
    }
    
    .createShoppinglist {
        width: 80%;
        margin: 100px auto;
    }
    
    .form-control:focus {
        border-color: #f39200;
        box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(243,146,0,.6);
    }
    
    .btnLogin {
        color: #fff;
        background-color: #f39200;
        width: 100%;
    }
    
    .btnTermsAndCond {
        color: #fff;
        background-color: #f39200;
        width: 100%;
    }
    
    .btnTermsAndCond a{
        color: #fff;
        font-size: 20px;
    }
    
    .btnTermsAndCond {
        padding: 5px;
    }
    
    .btnNew {
        color: #fff;
        background-color: #f39200;
        width: 100%;
    }
    
</style>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="createShoppinglist">
                <h2>Ny indkøbsliste:</h2>
                <br />
                <!-- Display Validation Errors -->
                @include('common.errors')

                <!-- New Task Form -->
                <form action="/newShoppinglist" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    
                    <div class="form-group">
                        <label for="shoppinglistName" class="col-sm-3 control-label">Navn på indkøbsliste</label>

                        <div class="col-sm-6">
                            <input type="text" name="shoppinglistName" id="shoppinglist-name" class="form-control">
                        </div>
                    </div>

                    <!-- Add Shoppinglist Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btnNew">
                                <i class="fa fa-plus"></i> Tilføj ny indkøbsliste
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="navbar-fixed-bottom">
         <div type="submit" class="btnTermsAndCond">
             <a href="home">
                 <div class="row">
                     <div class="col-xs-2"><</div>
                     <div class="pull-right col-xs-10">Tilbage</div>
                 </div>
             </a>
         </div>         
    </div>
</div>
@endsection
