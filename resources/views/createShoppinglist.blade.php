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
        margin: 50px auto;
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
    }
    
    .btnHomePage a {
        color: #fff;
        font-size: 20px;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="createShoppinglist">
                <h2>Lav shoppingliste</h2>
                <br />
                <!-- Display Validation Errors -->
                @include('common.errors')

                <!-- New Task Form -->
                <form action="/product" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    

                    <!-- Task Name -->
                    <div class="form-group">
                        <label for="task" class="col-sm-3 control-label">Product</label>

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
                            <button type="submit" class="btn btn-default">
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
                                    <th>Product</th>
                                    <th>Brand</th>
                                    <th>Price</th>
                                    <th>&nbsp;</th>
                                </thead>

                                <!-- Table Body -->
                                <tbody>
                                    @foreach ($filteredProducts as $product)
                                                <tr>
                                                <!-- Task Name -->
                                                <td class="table-text">
                                                    <div>{{ $product->name }}</div>
                                                </td>
                                                <td class="table-text">
                                                    <div>{{ $product->brand }}</div>
                                                </td>
                                                <td class="table-text">
                                                    <div>
                                                    @if($product->offer == 1)
                                                    {{ $product->price - $product->offerPrice }}<br />
                                                    <small><strike>{{ $product->price }}</strike></small>
                                                    @else
                                                    {{ $product->price }}
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
                                        <td><strong>Pris total:</strong></td>
                                        <td></td>
                                        <td>
                                            <strong>
                                            {{ $filteredProducts->sum('price') - $filteredProducts->sum('offerPrice') }}
                                            </strong>
                                        </td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif
            <div class="panel-body"><button class="btn btnHomePage"><a href="latest_shoppinglist">Se rute</a></button></div>
        </div>
    </div>
</div>
@endsection
