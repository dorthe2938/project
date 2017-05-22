@extends('layouts.app')

@section('content')
<style>
    
    .row {
        margin: 0;
    }
    .createShoppinglist h2 {
        text-align:center;
        font-size: 27px;
    }
    
    .createShoppinglist {
        width: 80%;
        margin: 30px auto;
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
    
    .btnHomePage {
        color: #fff;
        background-color: #f39200;
        width: 100%;
        margin-bottom: 50px;
    }
    
    .panel-body a {
        color: #fff;
        font-size: 20px;
    }
    
    .btnTermsAndCond {
        color: #fff;
        background-color: #f39200;
        width: 100%;
    }
    
    .navbar-fixed-bottom a{
        color: #fff;
        font-size: 20px;
    }
    
    .btnTermsAndCond {
        padding: 5px;
    }
    
    .btnAdd {
        color: #fff;
        background-color: #f39200;
        width: 100%;
    }
    
    .panel-body {
        padding: 0px;
    }
    
    .btn-group {
        width: 48%;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="createShoppinglist">
                <h2>Lav indkøbslisteliste</h2>
                <br />
                <!-- Display Validation Errors -->
                @include('common.errors')

                <!-- New Task Form -->
                <form action="/product" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    

                    <!-- Task Name -->
                    <div class="form-group">
                        <label for="task" class="col-sm-3 control-label">Produkt</label>

                        <div class="col-sm-6">
                            <input type="hidden" name="shoppinglistId" value="{{ $insertedId }}">
                            <input type="text" list="browsers" name="productName" id="task-name" class="form-control">
                            <datalist id="browsers">
                                @foreach ($products as $product)
                                    <option value="{{ $product->id}}. {{$product->name }}">
                                @endforeach
                          </datalist>
                        </div>
                    </div>

                    <!-- Add Task Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btnAdd">
                                <i class="fa fa-plus"></i> Tilføj Produkt
                            </button>
                        </div>
                    </div>
                </form>
            </div>
                <!-- Current Tasks -->
                @if (count($products) > 0)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Nuværende produkter
                        </div>

                        <div class="panel-body">
                            <table class="table table-striped task-table">

                                <!-- Table Headings -->
                                <thead>
                                <th></th>
                                    <th>Produkt</th>
                                    <th>Pris</th>
                                    <th>&nbsp;</th>
                                </thead>

                                <!-- Table Body -->
                                <tbody>
                                    @foreach ($filteredProducts as $product)
                                                <tr>
                                                    <td><input type="checkbox"></td>
                                                <td class="table-text">
                                                    <div>{{ $product->brand }} {{ $product->name }}</div>
                                                </td>
                                                <td class="table-text">
                                                    <div>
                                                    @if($product->offer == 1)
                                                    Tilbud:<br /> {{ $product->price - $product->offerPrice }} DKK<br />
                                                    <small><strike>{{ $product->price }} DKK</strike></small>
                                                    @else
                                                    {{ $product->price }} DKK
                                                    @endif
                                                    </div>
                                                </td>
                                                <!-- Delete Button -->
                                                <td>
                                                    <form action="/product/{{ $product->id }}" method="POST">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        
                                                        <input type="hidden" name="shoppinglistId" value="{{ $insertedId }}">
                                                        
                                                        <button class="btn btn-default">Slet</button>
                                                    </form>
                                                </td>
                                                </tr>
                                    @endforeach
                                    <tr>
                                        <td></td>
                                        <td><strong>Pris total:</strong></td>
                                        <td>
                                            <strong>
                                            {{ $filteredProducts->sum('price') - $filteredProducts->sum('offerPrice') }}
                                            </strong>
                                        </td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif
            <div class="panel-body">
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <a href="latest_shoppinglist"><button class="btn btnHomePage">Se rute</button></a>
                    </div>
                    <div class="btn-group">
                        <a href="#"><button class="btn btnHomePage">Del listen</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-fixed-bottom">
         <a href="home">
             <div type="submit" class="btnTermsAndCond">
                 <div class="row">
                     <div class="col-xs-2"><</div>
                     <div class="pull-right col-xs-10">Tilbage</div>
                 </div>
            </div>
         </a>
    </div>
</div>
@endsection
