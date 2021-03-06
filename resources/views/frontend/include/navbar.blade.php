<!-- navbar start -->
<section class="navbar-pc for-pc wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
	<div class="container">
		<div class="row">
			
			<!-- logo start -->
			<div class="col-md-3">
				<a href="{{ route('index') }}">
					@foreach( App\Models\Backend\Logo::orderBy('id','asc')->get() as $logo )
					<img src="{{ asset('images/logo/' . $logo->image) }}" class="img-fluid">
					@endforeach
				</a>
			</div>
			<!-- logo end -->

			<!-- navbar item start -->
			<div class="col-md-9">
				<div class="navbar-item-pc">
					<ul>
						<li>
							<a href="{{route('index')}}"> <i class="fas fa-home"></i> home</a>
						</li>
						<li class="parent-nav">
							<a href="{{ route('about') }}">about</a>

							{{-- <div class="child-nav">
								<ul>
									<li>
										<a href="">blogs</a>
									</li>
									<li>
										<a href="">zaman groups</a>
									</li>
									<li>
										<a href="gallery.php">gallery</a>
									</li>
								</ul>
							</div> --}}

						</li>
						<li>
							<a href="{{ route('shop') }}">shop</a>
						</li>
						<li>
							<a href="{{ route('gallery') }}">gallery</a>
						</li>
						<li>
							<a href="{{ route('contact') }}">contact</a>
						</li>
						<li class="cart">
							<a href="{{route('checkout')}}">cart <i class="fas fa-shopping-cart"></i> </a>
							<div class="cart-number" id="cartNumber">

								@php
									use App\Http\Controllers\Frontend\CartController;							
								
									$cartController = new CartController();
								@endphp
								<p>{{$cartController->Quantity(request())}}</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<!-- navbar item end -->

		</div>
	</div>
</section>
<!-- navbar end -->



<!-- navbar mob start -->
<section class="navbar-mob for-mob wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
	<div class="container">
		<div class="row" style="padding: 15px 0">
			
			<!-- logo start -->
			<div class="col-4">
				<a href="{{ route('index') }}">
					@foreach( App\Models\Backend\Logo::orderBy('id','asc')->get() as $logo )
					<img src="{{ asset('images/logo/' . $logo->image) }}" class="img-fluid">
					@endforeach
				</a>
			</div>
			<!-- logo end -->

			<!-- bar start -->
			<div class="col-8 bar">
				<i class="fas fa-bars show-nav"></i>
			</div>
			<!-- bar end -->

		</div>
	</div>

	<!-- navbar item start -->
	<div class="navbar-ite-mob">
		<ul>
			<li>
				<a href="{{ route('index') }}"> <i class="fas fa-home"></i> home</a>
			</li>
			{{-- <li>
				<div class="row">
					<div class="col-8">
						 <a href="{{ route('about') }}">about</a>
					</div>

					<div class="col-4 text-right">
						<i class="fas fa-plus show-mega-menu" id="menu-01"></i>
					</div>
				</div>

				<div class="row megamenu menu-01">
					<div class="col-md-12">
						<ul>
							<li>
								<a href="">blogs</a>
							</li>
							<li>
								<a href="">zaman groups</a>
							</li>
							<li>
								<a href="gallery.php">gallery</a>
							</li>
						</ul>
					</div>
				</div>				
			</li> --}}
			<li>
				<a href="{{ route('gallery') }}">gallery</a>
			</li>
			<li>
				<a href="{{ route('shop') }}">shop</a>
			</li>
			<li>
				<a href="">product</a>
			</li>
			<li>
				<a href="{{ route('contact') }}">contact</a>
			</li>
		</ul>
	</div>
	<!-- navbar item end -->

	<!-- cart option start -->
	<div class="cart-mob cart">
		<a href="">shopping cart <i class="fas fa-shopping-cart"></i> </a>
		<div class="cart-number">
			<p>3</p>
		</div>
	</div>
	<!-- cart option end -->

</section>
<!-- navbar mob end-->