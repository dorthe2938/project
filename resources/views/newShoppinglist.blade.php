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
                <form action="/newShoppinglist" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    
                    <div class="form-group">
                        <label for="shoppinglistName" class="col-sm-3 control-label">Shoppinglist name</label>

                        <div class="col-sm-6">
                            <input type="text" name="shoppinglistName" id="shoppinglist-name" class="form-control">
                        </div>
                    </div>

                    <!-- Add Shoppinglist Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-plus"></i> Add Shoppinglist
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
