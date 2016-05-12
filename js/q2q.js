//All the custom JS functions go here!

//Open the menu, by adding the menu-open class to it
function openMainMenu(e) {
    jQuery('#main-menu').addClass('menu-open');
    jQuery('#the_page').addClass('menu-open');
    if (e) {
        e.stopImmediatePropagation();
        e.preventDefault();
    } else {
        return false;
    }
}
//Close the menu, by removing the menu-open class from it
function closeMainMenu(e) {
    jQuery('#main-menu').removeClass('menu-open');
    jQuery('#the_page').removeClass('menu-open');
    if (e) {
        e.stopImmediatePropagation();
        e.preventDefault();
    } else {
        return false;
    }
}

jQuery('#the_page').on('click', function(){
   if(jQuery('#the_page').hasClass('menu-open')) {
       closeMainMenu();
   }    
});

jQuery('#main-content-container').on( 'click', '.js-ajax-load-more', function(e){
   
    e.preventDefault();
    
    var prevLink = jQuery(this).closest('.ajax-nav').find('.nav-previous a')[0]
    var prevUrl = jQuery(prevLink).attr('href');
    
    
    if( prevUrl ) {
        
        jQuery('body').addClass('loadingAjax');
        
        jQuery.get(prevUrl, function(results){ 
            
            jQuery(results).find("#main-content-container article").appendTo("#main-content-container");
            jQuery('#main-content-container').find('.ajax-nav').remove();
            jQuery(results).find("#main-content-container .ajax-nav").appendTo("#main-content-container");
            
            jQuery('body').removeClass('loadingAjax');
            
        
        });
    }
    
});
