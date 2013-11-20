<div class="main_catalogue">
	<div class="main_cat_header">
		<p>КАТАЛОГ</p>
					<div class="main_horizontal_line"></div>
				</div>
				<div class="span2">
					<div class="cat_menu">
						<ul class="category">
							<?php foreach ($categories as $category): ?>
								<li parentid="<?php echo $category['parent_category_id']; ?>" categoryid="<?php echo $category['id']; ?>">
								<a class="category_link" categoryid="<?php echo $category['id']; ?>" parentid="<?php echo $category['parent_category_id']; ?>" href='#' onclick="return false;"><?php echo $category['title'] ?></a>
								<ul class="subcategory" parentid="<?php echo $category['parent_category_id']; ?>" categoryid="<?php echo $category['id']; ?>"></ul>
							</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
				<div class="span10">
					<div class="main_catalogue_index">
					</div>
				</div>
			</div>

			<div class="for_pop_up"></div>

<script>
var is_logged_in = <?php echo $this->session->userdata('is_logged_in'); ?>;

var popUpRender = function(message)
{
    var scrolled = window.pageYOffset || document.documentElement.scrollTop;
    var scrollBottomValue = document.documentElement.scrollHeight - document.documentElement.clientHeight - scrolled;

    if (scrollBottomValue >97){
        scrollBottomValue=97;
    }

    scrollBottomValue = 115 - scrollBottomValue;
    $('.for_pop_up').css('bottom',scrollBottomValue+'px');
    $('.for_pop_up').prepend('<div onclick="this.remove();" class="pop_up_div"><p>' + message + '</p></div>'); 
    $('.pop_up_div').fadeIn(1000);

    setTimeout('$(".for_pop_up").html("")', 5000);
}

var setClickToAddToCart = function(){

	$('a.add_to_cart').click(
		function(){
		
		//if ( $('div#is_logged_in').html()=='1' )
		if ( is_logged_in == '1' )
		{
			this_el = $(this);
					$.ajax({
						type: "POST",
						url: "/sladost.org/index.php/add_to_cart",
						data:  {
							user_id: <?php echo  $this->session->userdata('user_id'); ?>, 
							item_id: this_el.attr('itemid'), 
							price: this_el.siblings("p.price").html()
						},
						success: function (result) {
							//alert('Товар добавлен в корзину!');
							popUpRender('Товар добавлен в корзину!');
						}
					});
		}
		else
		{
			self.location='login';
		}
		
		});
};
</script>

<script>
 var main_catalogue_index = $('.main_catalogue_index')
 var currentLi = '';

$('a.category_link').click(function(){

	var c_link = $( this );
	main_catalogue_index.html('');


	$('a').removeClass('active');
	c_link.addClass('active');
	//$('li[categoryid=' + c_link.attr('categoryid') + ']').addClass('active');
	

	$('ul[parentid=' + c_link.attr('categoryid') +']').slideUp();

	if ( c_link.attr('parentid') == '0' && currentLi != $( this ).attr('categoryid') )
		{	
			$('ul.subcategory').slideUp(); 
			currentLi = $( this ).attr('categoryid');
		}

	$('ul[categoryid='+ $(this).attr('categoryid') +']').slideDown();

		$.ajax({
		type: "POST",
		url: "/sladost.org/index.php/catalogue/index_by_category",
		data: { category_id: c_link.attr('categoryid') },
		success: function (result) {
			main_catalogue_index.html(result);
			setClickToAddToCart();
		}
		});

});

       $('li').each(
                function(){
                	var parentid = $(this).attr('parentid');
                	var parent = $('ul[categoryid=' + parentid + ']')
                    if ( parent ) { $(this).appendTo(parent) }
                }
            );
</script>

<style>
	ul.subcategory
	{
		display: none;
	}

	.for_pop_up
	{
	        position: fixed;
	        bottom: 115px;
	        left: 15px;
	        z-index: 999;
	}

	.pop_up_div {
			border-radius: 10px;
	        border: 1px solid rgb(170,37,39);
	        background: rgb(255, 255, 255);
	        box-shadow: 0px 0px 20px -2px rgb(0, 0, 0);
	        width: 232px;
	        height: 60px;
	        color: rgb(26, 40, 49);
	        cursor: pointer;
	        opacity: 1;
	        position: relative;
	        text-align: center;
	        display: none;
	        font-size: 0.9em;
	        margin: 10px 0px 0px 0px;
	}

	.pop_up_div p {
	      	color: rgb(65, 61, 61);
			font-size: 20px;
			line-height: 30px;
	}


</style>


