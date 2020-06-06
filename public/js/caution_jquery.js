$("#caution").css("lineHeight", "20px"); //init
function caution_height_auto() {
    editor = $('#caution');
    lineHeight = Number(editor.css("lineHeight").split("px")[0]);
    editor.height(editor[0].scrollHeight - lineHeight);
}

caution_height_auto();

$("#caution").on("input", function (evt) {
    caution_height_auto();
});
