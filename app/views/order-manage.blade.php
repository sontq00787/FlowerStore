@extends('admin.order-manage')

@section('content')
	@if($order)
	{{HTML::script('_libs/jquery-2.1.1.min.js')}}
		<script type="text/javascript">
			function setCancel(e){
				var dataString = "action=cancel&id="+e.name;
			    $.ajax({
			    	url: "order/state",
                    type: "GET",
                    data: dataString,
                    cache: false,
                    success: function(data){
                    },
                    complete: function(){
                    	window.location.reload();
                    },
                    error: function(error){
                        alert("So sorry! Now, cannot connect to server.");
                    }
			    });
			}

			function setShipping(e){
			    var dataString = "action=shipping&id="+e.name;
			    $.ajax({
			    	url: "order/state",
                    type: "GET",
                    data: dataString,
                    cache: false,
                    success: function(data){
                    },
                    complete: function(){
                    	window.location.reload();
                    },
                    error: function(error){
                        alert("So sorry! Now, cannot connect to server.");
                    }
			    });
			}

			function setPending(e){
			    var dataString = "action=pending&id="+e.name;
			    $.ajax({
			    	url: "order/state",
                    type: "GET",
                    data: dataString,
                    cache: false,
                    success: function(data){
                    },
                    complete: function(){
                    	window.location.reload();
                    },
                    error: function(error){
                        alert("So sorry! Now, cannot connect to server.");
                    }
			    });
			}
		</script>
		<table>
			<thead>
			<tr>
				<td>ID</td>
				<td>Email</td>
				<td>Phone</td>
				<td>Name</td>
				<td>Address</td>
				<td>Postcode</td>
				<td>Note</td>
				<td>State</td>
			</tr>
			</thead>
			<tbody>
			@foreach($order as $row)
				<tr>
					<td><a href="{{URL::route('order-detail-id', $row->id)}}">{{$row->id}}</a></td>
					<td>{{$row->email}}</td>
					<td>{{$row->phone}}</td>
					<td>{{{$row->first_name}}} {{{$row->last_name}}}</td>
					<td>{{{$row->address_detail}}} {{{$row->address}}},{{{$row->town_city}}},{{{$row->state_country}}}</td>
					<td>{{$row->postcode}}</td>
					<td>{{{$row->notes}}}</td>
					<td>
						<label for="cancel{{$row->id}}">Cancel</label>
						<input id="cancel{{$row->id}}"  name="{{$row->id}}" onclick="setCancel(this)" type="radio" value="0" {{($row->state==0) ? 'checked':''}}>
						<label for="pending{{$row->id}}">Pending</label>
						<input id="pending{{$row->id}}" name="{{$row->id}}" onclick="setPending(this)" type="radio" value="1" {{($row->state==2) ? 'checked':''}}>
						<label for="shipping{{$row->id}}">Shipped</label>
						<input id="shipping{{$row->id}}"  name="{{$row->id}}" onclick="setShipping(this)" type="radio" value="2" {{($row->state==1) ? 'checked':''}}>
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>

	@endif
@endsection