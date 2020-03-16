$(window).scroll(function() {
var scroll = $(window).scrollTop();
if (scroll >= 100) {
    $(".menu").addClass("gowhite");
} else {
    $(".menu").removeClass("gowhite");
}
});
$(window).scroll(function() {
var scroll = $(window).scrollTop();
if (scroll >= 100) {
    $(".gowhitetho").addClass("isgoing");
} else {
    $(".gowhitetho").removeClass("isgoing");
}
});

$(document).ready(function(){
    
// DONATE ICON ANIMATION   
  
    
    $(".pmore").click(function(){
        $(this).toggleClass("is-active");
    $(".phide").toggleClass("is-active");
  });
	$(".menu_click").click(function(){
        $(this).toggleClass("is-active");
  });
	$(".blog_category_others").click(function(){
        $(this).toggleClass("is-active");
    $(".blog_category_others_li").toggleClass("is-active");
  });
	
	$(".menu-icon").click(function(){
        $("body").toggleClass("nav-active");
  });
	
	$(".menu_closer").click(function(){
        $("body").removeClass("nav-active");
  });
	$(".ask_about").click(function(){
        $(this).addClass("is-active");
    $(".form_hide").addClass("is-active");
  });
	$(".share_about").click(function(){
        $(this).addClass("is-active");
    $(".share_hide").addClass("is-active");
  });

	
});


var cards = $(".lm_order");
for(var i = 0; i < cards.length; i++){
    var target = Math.floor(Math.random() * cards.length -1) + 1;
    var target2 = Math.floor(Math.random() * cards.length -1) +1;
    cards.eq(target).before(cards.eq(target2));
}



$(document).ready(function(){
      
  $('.container').mixItUp({
    controls: {
        enable: false,
        toggleLogic: 'and',
        toggleFilterButtons: true
    }
    
    });
    // Find filter buttons
    var $filters = $('.filter-container').find('li.filter');

    // Bind sorting logic to all filter buttons
    $filters.on('click', function () {
        var $t = $(this),
        filter = $t.attr('data-filter');

        // Find active filter
        $current = $('.filter-container').find('li.filter.active');
        //console.log($current.length + ' is how many active BEFORE');
        // Ff more than one active filter is returned in 'current' object
        if($current.length >= 1){
            // If the clicked filter is an active filter
            if($t.hasClass('active')){
                // Create a new filter string excluding the active filter
                var newFilterString = $current.map(function(){
                  return $(this).not($t).attr('data-filter');
                }).get().join('');
                // Filter the container based on the new string
				if(newFilterString != ''){ 
                $('.container').mixItUp('filter', newFilterString);
            } else {  
                 $('.container').mixItUp('filter', 'all');  
             }  
                // Remove active class
                $t.removeClass('active');
            } else {
                // Since clicked filter is not active, add it to new filter string
                var newFilterString = $current.map(function(){
                  return $(this).not($t.siblings()).attr('data-filter'); //$(this).attr('data-filter');
                }).get().join('');
                newFilterString = newFilterString + filter;
                // Mix the container with the new filter string
                $('.container').mixItUp('filter', newFilterString);
                
                // Remove active class from any siblings and add it to clicked filter
                $t.addClass('active').siblings().removeClass('active');
            }

        } else {
            // Since only one filter is active, check if clicked filter is active
            if ($t.hasClass('active')) {
                // Remove active class from current filter
                $t.removeClass('active');
                // Reset filter to all
                $('.container').mixItUp('filter', 'all');
				return;
             } else {
                $t.addClass('active').siblings().removeClass('active');
                $('.container').mixItUp('filter', filter);
             }

        }


        $current = $('.filter-container').find('li.filter.active');
        if($current.length == 0){
                $('.container').mixItUp('filter', 'all');
        }

         });

    });

(function($) {
    $('.accordion > li:eq(220) a').addClass('active').next().slideDown();

    $('.accordion a').click(function(j) {
        var dropDown = $(this).closest('li').find('p');

        $(this).closest('.accordion').find('p').not(dropDown).slideUp();

        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
        } else {
            $(this).closest('.accordion').find('a.active').removeClass('active');
            $(this).addClass('active');
        }

        dropDown.stop(false, true).slideToggle();

        j.preventDefault();
    });
})(jQuery);
