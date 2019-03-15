import $ from 'jquery';

class MobileMenu {
    constructor(){
        this.menuIcon = $(".header__menu-icon");
        this.menuContent = $(".mobile_menu");
        this.userOnline = $(".header__online");
        this.events();
    }
    
    events() {
        this.menuIcon.click(this.toggleTheMenu.bind(this));
    }
    
    toggleTheMenu() {
        this.menuContent.toggleClass("d-block");
        this.menuIcon.toggleClass("header__menu-icon--close-x");
        this.userOnline.toggleClass("d-none");
        // if( this.menuContent.css("visibility") == 'hidden'){
        //     this.menuContent.animate({opacity : 1}, 1000);
        //     this.menuContent.css("visibility", "visible");
        // } else {
        //     this.menuContent.animate({opacity : 0}, 1000);
        //     setTimeout(this.menuContent.css("visibility", 'hidden'), 1000);
        //     this.menuContent.css("visibility", 'hidden');
        // }
    }
}

export default MobileMenu;