@extends('layouts.store')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					You are logged in!
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('findstore')
	{{Form::open(array('url'=>'findstore','method'=>'post'))}}
        <div>
            <select class="select-menu" name="post">
                <option value="Ho Chi Minh">Ho Chi Minh</option>
            </select>
        </div>

        <div>
            <select class="select-menu" name="pre">
                <option value="Tan Binh">Tan Binh</option>
            </select>
        </div>
        <!-- {{Form::token()}} -->
        <div>
            <input id="find-store-button" class="button button-green" type="submit" style="margin: 15px 100px;" value="Find Store"/>
        </div>
    {{Form::close()}}
@stop

@section('shop-product-list')
	@if(isset($store))
		Hello
	@else
		<h3>No result match</h3>
	@endif
@stop