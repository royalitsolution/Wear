@extends('layouts.front')

@section('content')

	@if($ps->slider == 1)

		@if(count($sliders))
			@include('includes.slider-style')
		@endif
	@endif

	@if($ps->slider == 1)
		<!-- Hero Area Start -->
		<section class="hero-area">
			@if($ps->slider == 1)

				@if(count($sliders))
					<div class="hero-area-slider">
						<div class="slide-progress"></div>
						<div class="intro-carousel">
							@foreach($sliders as $data)
								<div class="intro-content {{$data->position}}" style="background-image: url({{asset('assets/images/sliders/'.$data->photo)}})">
									<div class="container">
										<div class="row">
											<div class="col-lg-12">
												<div class="slider-content">
													<!-- layer 1 -->
													<div class="layer-1">
														<h4 style="font-size: {{$data->subtitle_size}}px; color: {{$data->subtitle_color}}" class="subtitle subtitle{{$data->id}}" data-animation="animated {{$data->subtitle_anime}}">{{$data->subtitle_text}}</h4>
														<h2 style="font-size: {{$data->title_size}}px; color: {{$data->title_color}}" class="title title{{$data->id}}" data-animation="animated {{$data->title_anime}}">{{$data->title_text}}</h2>
													</div>
													<!-- layer 2 -->
													<div class="layer-2">
														<p style="font-size: {{$data->details_size}}px; color: {{$data->details_color}}"  class="text text{{$data->id}}" data-animation="animated {{$data->details_anime}}">{{$data->details_text}}</p>
													</div>
													<!-- layer 3 -->
													<div class="layer-3">
														<a href="{{$data->link}}" target="_blank" class="mybtn1"><span>{{ $langg->lang25 }} <i class="fas fa-chevron-right"></i></span></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							@endforeach
						</div>
					</div>
				@endif

			@endif

		</section>
		<!-- Hero Area End -->
	@endif

	
	@if($ps->featured_category == 1)

	{{-- Slider buttom Category Start --}}
	<!-- <section class="slider-buttom-category d-none d-md-block">
		<div class="container-fluid">
			<div class="row">
				@foreach($categories->where('is_featured','=',1) as $cat)
					<div class="col-xl-2 col-lg-3 col-md-4 sc-common-padding">
						<a href="{{ route('front.category',$cat->slug) }}" class="single-category">
							<div class="left">
								<h5 class="title">
									{{ $cat->name }}
								</h5>
								<p class="count">
									{{ count($cat->products) }} {{ $langg->lang4 }}
								</p>
							</div>
							<div class="right">
								<img src="{{asset('assets/images/categories/'.$cat->image) }}" alt="">
							</div>
						</a>
					</div>
				@endforeach
			</div>
		</div>
	</section> -->
	{{-- Slider buttom banner End --}}

	@endif

	@if($ps->featured == 1)
		<!-- Trending Item Area Start -->
		<section  class="trending">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 remove-padding">
						<div class="section-top">
							<h2 class="section-title">
								{{ $langg->lang26 }}
							</h2>
							{{-- <a href="#" class="link">View All</a> --}}
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 remove-padding">
						<div class="trending-item-slider">
							@foreach($feature_products as $prod)
								@include('includes.product.slider-product')
							@endforeach
						</div>
					</div>

				</div>
			</div>
		</section>
<!-- <section class="section trend-part">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="section-heading">
                  <h2 class="title">Deals of The Day</h2>

               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
               <div class="product-slider slider-arrow">
 -->
<!-- 
               	@foreach($feature_products as $prod)
                  <div class="product-card">
                     <div class="product-img">
                        <img src="{{ $prod->thumbnail ? asset('assets/images/thumbnails/'.$prod->thumbnail):asset('assets/images/noimage.png') }}" alt="product-6">
                        <ul class="product-widget">
                           <li><button><i class="fas fa-eye"></i></button></li>
                           <li><button><i class="fas fa-heart"></i></button></li>
                           <li><button><i class="fas fa-exchange-alt"></i></button></li>
                        </ul>
                     </div>
                     <div class="product-content">
                        <div class="product-name">
                           <h6><a href="{{ route('front.product', $prod->slug) }}">Heirloom Quinoa</a></h6>
                        </div>
                        <div class="product-price">
                           <h6><del>₹80</del> ₹150</h6>
                           <div class="product-rating"> <i class="fas fa-star"></i> <span>4.5/2</span></div>
                        </div>
                        <div class="product-btn"> <a href="#"> <i class="fas fa-shopping-basket"></i> <span>Add to
                                 Cart</span> </a></div>
                     </div>
                  </div>
                  @endforeach
                   -->
                 <!--  <div class="product-card">
                     <div class="product-img">
                        <img src="assets/images/deal/2.png" alt="product-7">
                        <ul class="product-widget">
                           <li><button><i class="fas fa-eye"></i></button></li>
                           <li><button><i class="fas fa-heart"></i></button></li>
                           <li><button><i class="fas fa-exchange-alt"></i></button></li>
                        </ul>
                     </div>
                     <div class="product-content">
                        <div class="product-name">
                           <h6><a href="products.html">Heirloom Quinoa</a></h6>
                        </div>
                        <div class="product-price">
                           <h6><del>₹80</del> ₹150</h6>
                           <div class="product-rating"> <i class="fas fa-star"></i> <span>4.5/2</span></div>
                        </div>
                        <div class="product-btn"> <a href="#"> <i class="fas fa-shopping-basket"></i> <span>Add to
                                 Cart</span> </a></div>
                     </div>
                  </div> -->
                  <!-- <div class="product-card">
                     <div class="product-img">
                        <img src="assets/images/deal/3.png" alt="product-8">
                        <ul class="product-widget">
                           <li><button><i class="fas fa-eye"></i></button></li>
                           <li><button><i class="fas fa-heart"></i></button></li>
                           <li><button><i class="fas fa-exchange-alt"></i></button></li>
                        </ul>
                     </div>
                     <div class="product-content">
                        <div class="product-name">
                           <h6><a href="products.html">Heirloom Quinoa</a></h6>
                        </div>
                        <div class="product-price">
                           <h6><del>₹80</del> ₹150</h6>
                           <div class="product-rating"> <i class="fas fa-star"></i> <span>4.5/2</span></div>
                        </div>
                        <div class="product-btn"> <a href="#"> <i class="fas fa-shopping-basket"></i> <span>Add to
                                 Cart</span> </a></div>
                     </div>
                  </div>
                  <div class="product-card">
                     <div class="product-img">
                        <img src="assets/images/deal/4.png" alt="product-9">
                        <ul class="product-widget">
                           <li><button><i class="fas fa-eye"></i></button></li>
                           <li><button><i class="fas fa-heart"></i></button></li>
                           <li><button><i class="fas fa-exchange-alt"></i></button></li>
                        </ul>
                     </div>
                     <div class="product-content">
                        <div class="product-name">
                           <h6><a href="products.html">Heirloom Quinoa</a></h6>
                        </div>
                        <div class="product-price">
                           <h6><del>₹80</del> ₹150</h6>
                           <div class="product-rating"> <i class="fas fa-star"></i> <span>4.5/2</span></div>
                        </div>
                        <div class="product-btn"> <a href="#"> <i class="fas fa-shopping-basket"></i> <span>Add to
                                 Cart</span> </a></div>
                     </div>
                  </div>
                  <div class="product-card">
                     <div class="product-img">
                        <img src="assets/images/deal/5.png" alt="product-10">
                        <ul class="product-widget">
                           <li><button><i class="fas fa-eye"></i></button></li>
                           <li><button><i class="fas fa-heart"></i></button></li>
                           <li><button><i class="fas fa-exchange-alt"></i></button></li>
                        </ul>
                     </div>
                     <div class="product-content">
                        <div class="product-name">
                           <h6><a href="products.html">Heirloom Quinoa</a></h6>
                        </div>
                        <div class="product-price">
                           <h6><del>₹80</del> ₹150</h6>
                           <div class="product-rating"> <i class="fas fa-star"></i> <span>4.5/2</span></div>
                        </div>
                        <div class="product-btn"> <a href="#"> <i class="fas fa-shopping-basket"></i> <span>Add to
                                 Cart</span> </a></div>
                     </div>
                  </div> -->
              <!--     <div class="product-card">
                     <div class="product-img">
                        <img src="assets/images/deal/6.png" alt="product-11">
                        <ul class="product-widget">
                           <li><button><i class="fas fa-eye"></i></button></li>
                           <li><button><i class="fas fa-heart"></i></button></li>
                           <li><button><i class="fas fa-exchange-alt"></i></button></li>
                        </ul>
                     </div>
                     <div class="product-content">
                        <div class="product-name">
                           <h6><a href="products.html">Heirloom Quinoa</a></h6>
                        </div>
                        <div class="product-price">
                           <h6><del>₹80</del> ₹150</h6>
                           <div class="product-rating"> <i class="fas fa-star"></i> <span>4.5/2</span></div>
                        </div>
                        <div class="product-btn"> <a href="#"> <i class="fas fa-shopping-basket"></i> <span>Add to
                                 Cart</span> </a></div>
                     </div>
                  </div> -->
   <!--             </div>
            </div>
         </div>
      </div>
   </section>

 -->




		<!-- Tranding Item Area End -->
	@endif

	@if($ps->small_banner == 1)

		<!-- Banner Area One Start -->
	 <section class="banner-section">
			<div class="container">
				@foreach($top_small_banners->chunk(2) as $chunk)
					<div class="row">
						@foreach($chunk as $img)
							<div class="col-lg-6 remove-padding">
								<div class="left">
									<a class="banner-effect" href="{{ $img->link }}" target="_blank">
										<img src="{{asset('assets/images/banners/'.$img->photo)}}" alt="">
									</a>
								</div>
							</div>
						@endforeach
					</div>
				@endforeach
			</div>
		</section>
		<!-- Banner Area One Start -->
	@endif

	<section id="extraData">
		<div class="text-center">
			<img src="{{asset('assets/images/'.$gs->loader)}}">
		</div>
	</section>


@endsection

@section('scripts')
	<script>
        $(window).on('load',function() {

            setTimeout(function(){

                $('#extraData').load('{{route('front.extraIndex')}}');

            }, 500);
        });

	</script>
@endsection