


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
						url: "/index.php/add_to_cart",
						data:  {
							user_id: user_id, 
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
		
		return false

		});
};

	setClickToAddToCart();

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
		url: "/index.php/catalogue/index_by_category",
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
