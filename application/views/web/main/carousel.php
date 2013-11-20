<div class="main_carousel">
	        <div class="carousel_itself">
            <ul>
            	<?php foreach ($carousels as $carousel): ?>
					<li>
						<div style="background-image: url(assets/uploads/carousel/<?php echo $carousel['photo_url']?>)"> 
								<div class="carousel_text">
									<span><?php echo $carousel['text']?></span>
									<a class="main_button" href="<?php echo $carousel['url']?>">
										<div class="main_button">еще</div>
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

<style>

.main_carousel
{
	position: relative;
}

.carousel_itself > ul > li > div
{
	width: 940px;
	height: 380px;
	position: relative;
}

div.carousel_text
{
	position: absolute;
	width: 100px;
	height: 50px;
	top: 50%;
	margin: -22px 400px;
	text-align: center;
	color: white;
}

div.carousel_text > span
{
	font-size: 50px;
	/*font-weight: bold;*/
	/*text-shadow: 0px 0px 10px #000;*/
	font-family: Arial Helvetica sans-serif;
	text-transform: uppercase;
	color: white;
}

div.carousel_text > .main_button
{
	color: white;
}

.carousel_button
{
	border-radius: 50px;
	width: 50px;
	height: 50px;
	cursor: pointer;
	position: absolute;
	top: 50%;
	margin-top: -25px;
	z-index: 100;
}

.next:active
{
	margin-right: -1px;
}

.prev:active
{
	margin-left: -1px;
}

.next
{
	right: 10px;
	background-image: url(assets/img/carousel_next.png);
}

.prev
{
	left: 10px;
	background-image: url(assets/img/carousel_prev.png);
}
	
</style>