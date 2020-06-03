$("#caution").css("lineHeight", "20px"); //init
function textarea_height_auto() {
    editor = $('#caution');
    lineHeight = Number(editor.css("lineHeight").split("px")[0]);
    editor.height(editor[0].scrollHeight - lineHeight);
}

textarea_height_auto();

$("#caution").on("input", function (evt) {
    textarea_height_auto();
});
