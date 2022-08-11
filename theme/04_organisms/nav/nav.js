const navSlide = () => {
    const burger = $('.burger');
    const nav = $('.nav-links');
    let navopen = false;

    burger.on('click',()=>{
        if(!navopen){
            nav.removeClass('nav-nonactive');
            nav.addClass('nav-active');
            navopen = true;
        }
        else{
            nav.removeClass('nav-active');
            nav.addClass('nav-nonactive');
            navopen = false;
        }
        burger.toggleClass('burger-open');
    });

    document.onclick = function(clickEvent){
        if(clickEvent.target.id == "nav-links" || clickEvent.target.id == "link1" || clickEvent.target.id == "link2" || clickEvent.target.id == "link3" || clickEvent.target.id == "link4"){
            nav.removeClass('nav-active');
            nav.addClass('nav-nonactive');
            navopen = false;
            burger.removeClass('burger-open');
        }
    }
}

navSlide();