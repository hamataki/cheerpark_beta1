$(function () {
  $("#youtube").change(function () {
    var videoURL = $("#youtube").val();
    $("#preview").html(videoURL);

    // #previewに何か内容があるかをチェック
    if ($("#preview").html() !== "") {
      // 内容があれば#before-previewを隠す
      $("#before-preview").hide();
      $("#preview").show();
    }
    
  });
});
