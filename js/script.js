$(function () {
  $("#imgfile").change(function (e) {
    var file = e.target.files[0];
    var reader = new FileReader();
    if (file.type.indexOf("image") < 0) {
      alert("画像ファイルを指定してください。");
      return false;
    }
    reader.onload = (function (file) {
      return function (e) {
        var imgTag = `<img src="${e.target.result}" title="${file.name}" class="w-full h-28">`;
        $(".preview").html(imgTag).removeClass('hidden');
        $('#ex-imgfile').addClass('hidden');
      };
    })(file);
    reader.readAsDataURL(file);
  });
});
