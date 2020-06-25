function selectMenuItem(e) {
    // $('.menu-item').removeClass('active');
    // $(e.target).addClass('active');
    var elementClick = $(e.target).attr('data-link');
    var destination = $(elementClick).offset().top;
    $('html,body').animate({ scrollTop: destination }, 400);

    hideMenu();
}

function showMenu() {
    $('#menu').addClass('menu-on');
    $('#menu-back').addClass('menu-back-on');
}

function hideMenu() {
    $('#menu').removeClass('menu-on');
    $('#menu-back').removeClass('menu-back-on');
}

function darkThemeOn() {
    $('html').addClass('dark-theme');
    $('#night').css('display', 'none');
    $('#day').css('display', 'block');
}
function darkThemeOff() {
    $('html').removeClass('dark-theme');
    $('#day').css('display', 'none');
    $('#night').css('display', 'block');
}

function showVideo() {
    $('#pipecModal').modal('show');
    $('#pipecModal .modal-dialog').load('/site/video');
}