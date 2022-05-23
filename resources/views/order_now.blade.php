@extends('layouts.app')

@section('content')
<div class="container custom-product">
	<div class="row col-sm-10">
		<table class="table  table-striped">
			  
			  <tbody>
			    <tr>
			      <td>Amount</td>
			      <td>{{$total_price}} $</td>
			    </tr>
			    <tr>
			      <td>Tax</td>
			      <td>0 $ </td>
			    </tr>
			     <tr>
			      <td>Delivery</td>
			      <td>10 $ </td>
			    </tr>
			     <tr>
			      <td>Total Amount</td>
			      <td>{{$total_price + 10}} $</td>
			    </tr>
			  </tbody>
 		</table>
 		<div>
 			<form action="/orderPlace" method="POST">
 				@csrf
			  <div class="mb-3 mt-3">
			    <textarea name="address" type="email" class="form-control"> "enter your address"</textarea>
			  </div>
			  <div class="mb-3">
			    <label for="pwd" class="form-label">Payment Method:</label> <br> <br>
			    <input type="radio" value = "online" name="payment"> <span> online payment</span> <br> <br>
			    <input type="radio" value = "cash" name="payment"> <span>  Payment on delivery</span> <br> <br>
			  </div>
			  <button type="submit" class="btn btn-primary">Order Now</button>
			</form>
 		</div>
	</div>
</div>
@endsection