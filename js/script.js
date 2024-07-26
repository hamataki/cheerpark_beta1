$(function () {
  $("#youtube").change(function () {
    var videoURL = $("#youtube").val();
    $("#preview").html(videoURL);
  });
});
