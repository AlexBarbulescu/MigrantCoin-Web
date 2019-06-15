var arrLang = (function () {
    var json = null;
    $.ajax({
        'async': false,
        'global': false,
        'url': "./assets/js/language.json",
        'dataType': "json",
        'success': function (data) {
            json = data;
        }
    });
    return json;
})();

// The default language is English
var lang = getCookie('active_language');
// Check for localStorage support
if ('localStorage' in window) {
    var usrLang = localStorage.getItem('uiLang');
    if (usrLang) {
        lang = usrLang
    }

}

// console.log(lang);

$(document).ready(function () {

    $(".lang").each(function (index, element) {
        $(this).text(arrLang[lang][$(this).attr("key")]);
    });

    $(".dropdown-menu a").click(function () {
        $(this).parents(".dropdown").find('.dropdown-toggle').html($(this).text());
        $(this).parents(".dropdown").find('.dropdown-toggle').val($(this).data('value'));
    });

});


// get/set the selected language
$(".translate").click(function () {
    var lang = $(this).attr("id");

    // update localStorage key
    if ('localStorage' in window) {
        localStorage.setItem('uiLang', lang);
        console.log(localStorage.getItem('uiLang'));
    }

    setCookie('active_language', lang ,7);

    $(".lang").each(function (index, element) {
        $(this).text(arrLang[lang][$(this).attr("key")]);
    });

    $(".dropdown-toggle").each(function (index, element) {
        // $(".dropdown-menu a").parents(".dropdown").find('.dropdown-toggle').html($(this).text(lang));
        // $(".dropdown-menu a").parents(".dropdown").find('.dropdown-toggle').val($(this).data(lang));

        $(this).text(arrLanguage[lang][$(this).attr("id")]);
    });
});


function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}
function eraseCookie(name) {   
    document.cookie = name+'=; Max-Age=-99999999;';  
}