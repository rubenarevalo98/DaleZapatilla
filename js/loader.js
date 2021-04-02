/***************************************************************************/
/* MARCO FIORE // MFDESIGN.IT **********************************************/
/***************************************************************************/

$(window).load(function () {
  $("#loader-wrapper").fadeOut("slow");
});
$(document).ready(function () {
  $("ul.newsList").imagesLoaded(function () {
    $("ul.newsList").masonry({
      itemSelector: "li",
      isAnimated: true,
      isFitWidth: true,
    });
  });
  /**/
  $("div.gallery").imagesLoaded(function () {
    $("div.gallery").masonry({
      itemSelector: "figure",
      isAnimated: true,
      isFitWidth: true,
    });
  });
});
