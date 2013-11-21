<div class="main_carousel">
	        <div class="carousel_itself">
            <ul>
            	<?php foreach ($carousels as $carousel): ?>
					<li>
						<div style="background-image: url(assets/uploads/carousel/<?php echo $carousel['photo_url']?>)"> 
								<div class="carousel_text">
									<span style="line-height: 48px;"><?php echo $carousel['text']?></span>
									<a class="main_button" href="<?php echo $carousel['url']?>">
										<div class="main_button" style="width: 70px;text-align: center;margin: 0 auto;">еще</div>
									</a>
								</div>
							</div>
						</li>
				<?php endforeach; ?>
            </ul>
        </div>
    <div class="carousel_button prev"></div>
    <div class="carousel_button next"></div>
</div>

<script>
        // Карусель на главной
$( document ).ready(function() {
    $(".carousel_itself").jCarouselLite({
        btnNext: ".next",
        btnPrev: ".prev",
        auto: 4000,
        speed: 500,
        visible: 1
    });
});
</script>
