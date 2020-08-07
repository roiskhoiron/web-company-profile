			<div class="h_slider_container services_slider_container">
				<div class="service_slider_outer">
					<!-- Services Slider -->
					<div class="owl-carousel owl-theme services_slider">
						<?php foreach ($products as $product): ?>
						<!-- Services Slider Item-->
						<div class="owl-item services_item">
							<div class="services_item_inner">
								<div class="service_item_content">
									<div class="service_item_icon">
										<div class="img_link"><img src="<?php echo base_url('images/img-link/'.$product->image) ?>"></div>
									</div>
									</br>
									</br>
									<div class="service_item_title">
										<h2><?php echo $product->name ?></h2>
									</div>
									<p><?php echo $product->description ?></p>
									<div class="button service_item_button trans_200">
										<a href="<?php echo $product->link ?>" class="trans_200">discover more</a>
									</div>
								</div>
							</div>
						</div>
						<?php endforeach;?>
					</div>
					<div class="services_slider_nav services_slider_nav_left"><i
							class="fas fa-chevron-left trans_200"></i></div>
					<div class="services_slider_nav services_slider_nav_right"><i
							class="fas fa-chevron-right trans_200"></i></div>
				</div>
			</div>