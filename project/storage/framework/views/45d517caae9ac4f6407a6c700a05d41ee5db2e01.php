<?php $__env->startSection('content'); ?>

	<?php if($ps->slider == 1): ?>

		<?php if(count($sliders)): ?>
			<?php echo $__env->make('includes.slider-style', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php endif; ?>
	<?php endif; ?>

	<?php if($ps->slider == 1): ?>
		<!-- Hero Area Start -->
		<section class="hero-area">
			<?php if($ps->slider == 1): ?>

				<?php if(count($sliders)): ?>
					<div class="hero-area-slider">
						<div class="slide-progress"></div>
						<div class="intro-carousel">
							<?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="intro-content <?php echo e($data->position); ?>" style="background-image: url(<?php echo e(asset('assets/images/sliders/'.$data->photo)); ?>)">
									<div class="container">
										<div class="row">
											<div class="col-lg-12">
												<div class="slider-content">
													<!-- layer 1 -->
													<div class="layer-1">
														<h4 style="font-size: <?php echo e($data->subtitle_size); ?>px; color: <?php echo e($data->subtitle_color); ?>" class="subtitle subtitle<?php echo e($data->id); ?>" data-animation="animated <?php echo e($data->subtitle_anime); ?>"><?php echo e($data->subtitle_text); ?></h4>
														<h2 style="font-size: <?php echo e($data->title_size); ?>px; color: <?php echo e($data->title_color); ?>" class="title title<?php echo e($data->id); ?>" data-animation="animated <?php echo e($data->title_anime); ?>"><?php echo e($data->title_text); ?></h2>
													</div>
													<!-- layer 2 -->
													<div class="layer-2">
														<p style="font-size: <?php echo e($data->details_size); ?>px; color: <?php echo e($data->details_color); ?>"  class="text text<?php echo e($data->id); ?>" data-animation="animated <?php echo e($data->details_anime); ?>"><?php echo e($data->details_text); ?></p>
													</div>
													<!-- layer 3 -->
													<div class="layer-3">
														<a href="<?php echo e($data->link); ?>" target="_blank" class="mybtn1"><span><?php echo e($langg->lang25); ?> <i class="fas fa-chevron-right"></i></span></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
					</div>
				<?php endif; ?>

			<?php endif; ?>

		</section>
		<!-- Hero Area End -->
	<?php endif; ?>

	
	<?php if($ps->featured_category == 1): ?>

	
	<!-- <section class="slider-buttom-category d-none d-md-block">
		<div class="container-fluid">
			<div class="row">
				<?php $__currentLoopData = $categories->where('is_featured','=',1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="col-xl-2 col-lg-3 col-md-4 sc-common-padding">
						<a href="<?php echo e(route('front.category',$cat->slug)); ?>" class="single-category">
							<div class="left">
								<h5 class="title">
									<?php echo e($cat->name); ?>

								</h5>
								<p class="count">
									<?php echo e(count($cat->products)); ?> <?php echo e($langg->lang4); ?>

								</p>
							</div>
							<div class="right">
								<img src="<?php echo e(asset('assets/images/categories/'.$cat->image)); ?>" alt="">
							</div>
						</a>
					</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
	</section> -->
	

	<?php endif; ?>

	<?php if($ps->featured == 1): ?>
		<!-- Trending Item Area Start -->
		<section  class="trending">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 remove-padding">
						<div class="section-top">
							<h2 class="section-title">
								<?php echo e($langg->lang26); ?>

							</h2>
							
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 remove-padding">
						<div class="trending-item-slider">
							<?php $__currentLoopData = $feature_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<?php echo $__env->make('includes.product.slider-product', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
               	<?php $__currentLoopData = $feature_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="product-card">
                     <div class="product-img">
                        <img src="<?php echo e($prod->thumbnail ? asset('assets/images/thumbnails/'.$prod->thumbnail):asset('assets/images/noimage.png')); ?>" alt="product-6">
                        <ul class="product-widget">
                           <li><button><i class="fas fa-eye"></i></button></li>
                           <li><button><i class="fas fa-heart"></i></button></li>
                           <li><button><i class="fas fa-exchange-alt"></i></button></li>
                        </ul>
                     </div>
                     <div class="product-content">
                        <div class="product-name">
                           <h6><a href="<?php echo e(route('front.product', $prod->slug)); ?>">Heirloom Quinoa</a></h6>
                        </div>
                        <div class="product-price">
                           <h6><del>₹80</del> ₹150</h6>
                           <div class="product-rating"> <i class="fas fa-star"></i> <span>4.5/2</span></div>
                        </div>
                        <div class="product-btn"> <a href="#"> <i class="fas fa-shopping-basket"></i> <span>Add to
                                 Cart</span> </a></div>
                     </div>
                  </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
	<?php endif; ?>

	<?php if($ps->small_banner == 1): ?>

		<!-- Banner Area One Start -->
	 <section class="banner-section">
			<div class="container">
				<?php $__currentLoopData = $top_small_banners->chunk(2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="row">
						<?php $__currentLoopData = $chunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-lg-6 remove-padding">
								<div class="left">
									<a class="banner-effect" href="<?php echo e($img->link); ?>" target="_blank">
										<img src="<?php echo e(asset('assets/images/banners/'.$img->photo)); ?>" alt="">
									</a>
								</div>
							</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</section>
		<!-- Banner Area One Start -->
	<?php endif; ?>

	<section id="extraData">
		<div class="text-center">
			<img src="<?php echo e(asset('assets/images/'.$gs->loader)); ?>">
		</div>
	</section>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
	<script>
        $(window).on('load',function() {

            setTimeout(function(){

                $('#extraData').load('<?php echo e(route('front.extraIndex')); ?>');

            }, 500);
        });

	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>