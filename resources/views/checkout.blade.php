@extends('layouts.app')
@section('title')
	Bookstore
@endsection
@section('brand_name')
	Bookstore
@endsection
@section('content')
	<div class = "row">
		<div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
			<h1>Checkout</h1>
			<h4>Your Total : ${{$total}}</h4>
			<form action="{{route('checkout')}}" method="post" id="checkout-form">
				<div class="row">
					<div class="col-xs-12"> 					
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" id="name" class="form-control" required="ture"></input>
						</div>
					</div>

					<div class="col-xs-12">					
						<div class="form-group">
							<label for="address">Address</label>
							<input type="text" id="address" class="form-control" required="ture"></input>
						</div>
					</div>

					<div class="col-xs-12">					
						<div class="form-group">
							<label for="card-holder-name">Card Holder Name</label>
							<input type="text" id="card-holder-name" class="form-control" required="ture"></input>
						</div>
					</div>

					<div class="col-xs-12">					
						<div class="form-group">
							<label for="credit-card-number">Credit Card Number</label>
							<input type="text" id="credit-card-number" class="form-control" required="ture"></input>
						</div>
					</div>

					<div class="col-xs-12">					
						<div class="row">
							<div class="col-xs-6">
								<div class="form-group">
									<label for="expiration-month">Expiration Month</label>
									<input type="text" id="expiration-month" class="form-control" required="ture"></input>
								</div>
							</div>
						</div>	
					</div>

					<div class="col-xs-12"> 					
						<div class="form-group">
							<label for="cvv">CVV</label>
							<input type="text" id="cvv" class="form-control" required="ture"></input>
						</div>
					</div>

				</div> <!--row ends -->

				{{csrf_field()}}	
				<button type="submit" class="btn btn-success"> Buy now</button>
			</form><!--End of Form -->
		</div>
	</div>	

@endsection