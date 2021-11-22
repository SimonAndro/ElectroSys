var isMenuOpen = false;
var loadingIcon = 'loading3.svg';

$(document).ready(() => {
    // alert('done');
})

const menuOpen = () => {
    $('.menu-wrapper').css("height", "150px");
    // $('.menu-wrapper').css("border", "1px solid white");
    $('.menu-wrapper').css("opacity", "1");
    isMenuOpen = true;
}

const menuClose = () => {
    $('.menu-wrapper').css("height", "0px");
    $('.menu-wrapper').css("border", "0px solid white");
    $('.menu-wrapper').css("opacity", "0");

    isMenuOpen = false;
}

const menuToggle = () => {
    if (isMenuOpen == false) {
        menuOpen();
    } else {
        menuClose();
    }
}

const loadingShow = () => {
    $('.content').css('background', 'url(../svg/' + loadingIcon + ')');
}
const loadingHide = () => {
    $('.content').css('background', 'none');
}


$('.topBar-sandwich-wrapper').on('click', () => { menuToggle() });

var link2;
//LINKS
$('.link').on('click', (e) => {
    var id = '#' + e.target.id;
    // link = $(id).data('link');
    link = $(id).attr('data-link');
    console.log('LINK CLICKED :' + id);
    menuClose();
    $('.site-wrapper').css('animation', 'fadeUp 2s forwards');
    setTimeout(() => {
        window.location.href = link;
    }, 1000)
})