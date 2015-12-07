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
