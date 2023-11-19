var header = document.getElementById("divku");
var btns = header.getElementsByClassName("btn-promo");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function () {
    var current = document.getElementsByClassName("activate");
    current[0].className = current[0].className.replace("activate", "");
    this.className += " activate";
  });
}

var btnall = $("#btnall");
var btndiskon = $("#btndiskon");
var btnbonus = $("#btnpromo");

var allview = $("#semuapromo");
var alldiskon = $("#promodiskon");
var allbonus = $("#promobonus");

alldiskon.hide();
allbonus.hide();

function showall() {
  btnbonus.removeClass("activate");
  btndiskon.removeClass("activate");

  allbonus.hide(1000);
  alldiskon.hide(1000);
  allview.show(1000);
}

function showdiskon() {
  btnall.removeClass("activate");
  btnbonus.removeClass("activate");
  // btndiskon.addClass("activate");

  allview.hide(1000);
  allbonus.hide(1000);
  alldiskon.show(1000);
}

function showbonus() {
  btnall.removeClass("activate");
  btndiskon.removeClass("activate");

  allview.hide(1000);
  alldiskon.hide(1000);
  allbonus.show(1000);
}
