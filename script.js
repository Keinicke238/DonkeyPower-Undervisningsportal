//Velkommen tilbage funktion til dashboard
document.addEventListener("DOMContentLoaded", function() {
    // 1. Vi kigger op i jeres mørkeblå topmenu efter Ultimate Member-logoud-linket
    // Det er den eneste profilopsætning vi er sikre på er på skærmen!
    var userLink = document.querySelector('.main-header-menu a[href*="user"], .main-header-menu a[href*="profile"]');
    
    if (userLink) {
        // Hvis vi finder et link, snupper vi navnet deroppe fra
        var tekst = userLink.textContent || userLink.innerText;
        document.getElementById("dp-velkomst").innerHTML = "Velkommen tilbage, " + tekst;
    }
});




