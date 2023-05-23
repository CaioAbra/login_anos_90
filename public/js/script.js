$(document).ready(function () {
    // Movimento suave do título
    $('h1').hover(function () {
        $(this).animate({
            marginLeft: '10px'
        }, 200);
    }, function () {
        $(this).animate({
            marginLeft: '0'
        }, 200);
    });
    // Esconder o formulário de login inicialmente
    $('#login-form').hide();

    // Exibir o formulário de login com um efeito de fade-in
    $('#login-form').fadeIn(1500);
});



