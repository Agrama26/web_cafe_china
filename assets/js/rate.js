$(document).ready(function () {
  $(".star").click(function () {
    const ratingValue = $(this).data("value");

    // Mengaktifkan bintang sesuai urutan yang diklik
    $(".star").removeClass("active");
    $(this).addClass("active");
    $(this).prevAll(".star").addClass("active");

    $(".pe").text(`Terima kasih atas rating ${ratingValue} bintang Anda!`);
  });
});
