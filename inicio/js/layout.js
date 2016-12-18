$(document).ready(function () {
    $('article').readmore({
        speed: 75,
        maxHeight: 500,
        moreLink: '<a href="#">Leer mas</a>',
        lessLink: '<a href="#">Leer menos</a>'
    });
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.3&appId=1608437069443308";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
});
