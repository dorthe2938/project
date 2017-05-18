@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create shoppinglist</div>
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
                            <input type="text" name="productName" id="task-name" class="form-control">
                            <input type="text" name="shoppinglistId" id="task-name" class="hidden" value="{{$insertedId}}">
                        </div>
                    </div>

                    <!-- Add Task Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-plus"></i> Add Product
                            </button>
                        </div>
                    </div>
                </form>
                <!-- Current Tasks -->
                @if (count($products) > 0)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Current Products
                        </div>

                        <div class="panel-body">
                            <table class="table table-striped task-table">

                                <!-- Table Headings -->
                                <thead>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>&nbsp;</th>
                                </thead>

                                <!-- Table Body -->
                                <tbody>
                                    @foreach ($products as $product)
                                                <tr>
                                                <!-- Task Name -->
                                                <td class="table-text">
                                                    <div>{{ $product->name }}</div>
                                                </td>
                                                <td class="table-text">
                                                    <div>{{ $product->price }}</div>
                                                </td>
                                                <!-- Delete Button -->
                                                <td>
                                                    <form action="/product/{{ $product->id }}" method="POST">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        
                                                        <button>Delete Task</button>
                                                    </form>
                                                </td>
                                                </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
