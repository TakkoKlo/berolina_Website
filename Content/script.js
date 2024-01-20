// Zum Start des Webseite: Prüfen ob Begrüßung oder Dark Mode gesetzt wurde
$(document).ready(() => {
    checkForFirstSiteVisitOfDay();
});

// Animation in Navigation Mobile
$('#navbar-toggler').on('click', () => {
    if ($('#navbar-toggler').hasClass('menuOpen')) {
        $('#navbar-toggler').removeClass('menuOpen');
        $('#navTogglerLine1').removeClass('menuOpen');
        $('#navTogglerLine2').removeClass('menuOpen');
        $('#navTogglerLine3').removeClass('menuOpen');
    }
    else {
        $('#navbar-toggler').addClass('menuOpen');
        $('#navTogglerLine1').addClass('menuOpen');
        $('#navTogglerLine2').addClass('menuOpen');
        $('#navTogglerLine3').addClass('menuOpen');
    }
});

// Schließt das Fenster um auf die Seite zu kommen
$('#closeGreetings').click(() => {
    setDayCookie();
    checkForFirstSiteVisitOfDay();
});

// Navtigation Scroll Line
$(window).scroll(function () {
    // Progress Line
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    $("#progress-line").css("width", scrolled + '%');
});

// Erkennen des Dark Modes
if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
    $('#body-content').addClass('dark-mode');
    $('#dark-mode-toggler').addClass('dark-mode');
}

window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', event => {
    const newColorScheme = event.matches ? "dark" : "light";
});

// Prüft ob Cookie für Seitenaufruf vorhanden ist
// Gibt Zirkel Gif wider, wenn nicht
function checkForFirstSiteVisitOfDay() {
    var dayCookie = getCookie("daylyVisitOnWebsite");
    if (dayCookie == null) {
        $('#greetings').removeClass('d-none');
        $('#dark-mode-toggler').addClass('d-none');
        $('main').addClass('d-none');
        $('header').addClass('d-none');
        $('nav').addClass('d-none');
    }
    else {
        checkForDarkModeCookie();
        $('#greetings').addClass('d-none');
        $('#dark-mode-toggler').removeClass('d-none');
        $('main').removeClass('d-none');
        $('header').removeClass('d-none');
        $('nav').removeClass('d-none');
    }
}

// Ermittelt den nächsten Tag eines Datums
function make_next_date(adate) {
    next_date = new Date(adate);
    next_date.setDate(next_date.getDate() + 1);
    return next_date.toISOString().split('T')[0];
}

// Setzt einen Cookue mit dem Namen 'daylyVisitOnWebsite'
// Löscht sich automatisch um 00:00 Uhr des Folgetages
function setDayCookie() {
    var now = new Date();
    var nextDayDate = new Date(make_next_date(now));
    nextDayDate = new Date(nextDayDate.getTime() - (nextDayDate.getTimezoneOffset() * 1)).toISOString();
    var b = nextDayDate.split(/\D+/);
    nextDayDate = new Date(Date.UTC(b[0], --b[1], b[2], b[3], b[4], b[5], b[6]));
    var secondsBetweenDates = (nextDayDate.getTime() - now.getTime());
    var expireTime = now.setTime(now.getTime() + secondsBetweenDates);
    now.setTime(expireTime);
    document.cookie = 'daylyVisitOnWebsite=ok;expires=' + now.toUTCString();
}


// Funktion des Dark Mode Buttons
$('#dark-mode-toggler').click(() => {
    if ($('#dark-mode-toggler').hasClass('dark-mode')) {
        deleteCookie('darkModeChecked');
        $('#body-content').removeClass('dark-mode');
        $('#dark-mode-toggler').removeClass('dark-mode');
    } else {
        setDarkModeCookie();
        $('#body-content').addClass('dark-mode');
        $('#dark-mode-toggler').addClass('dark-mode');
    }
});


function checkForDarkModeCookie() {
    var darkModeCookie = getCookie('darkModeChecked');
    if (darkModeCookie == null) {
        $('#body-content').removeClass('dark-mode');
        $('#dark-mode-toggler').removeClass('dark-mode');
    }
    else {
        $('#body-content').addClass('dark-mode');
        $('#dark-mode-toggler').addClass('dark-mode');
    }
}

// Prüft, ob ein Cookie mit eingegebenem Namen auf der Seite gesetzt ist
function getCookie(name) {
    var dc = document.cookie;
    var prefix = name + "=";
    var begin = dc.indexOf("; " + prefix);
    if (begin == -1) {
        begin = dc.indexOf(prefix);
        if (begin != 0) return null;
    }
    else {
        begin += 2;
        var end = document.cookie.indexOf(";", begin);
        if (end == -1) {
            end = dc.length;
        }
    }
    // because unescape has been deprecated, replaced with decodeURI
    //return unescape(dc.substring(begin + prefix.length, end));
    return decodeURI(dc.substring(begin + prefix.length, end));
}

function setDarkModeCookie() {
    var now = new Date();
    // Set Time: 1000 Milisekunden * 60 Sekunden * 60 Minuten * 24 Stunden * 14 Tage
    now.setTime(now.getTime() + 1000 * 60 * 60 * 24 * 14);
    document.cookie = 'darkModeChecked=ok;expires=' + now.toUTCString();
}
function deleteCookie(name) {
    if (getCookie(name)) {
        document.cookie = name + "=" +
            ";expires=Thu, 01 Jan 1970 00:00:01 GMT";
    }
}