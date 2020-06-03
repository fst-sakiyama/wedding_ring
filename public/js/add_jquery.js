$("#textarea").css("lineHeight", "20px"); //init
function textarea_height_auto() {
    editor = $('#textarea');
    lineHeight = Number(editor.css("lineHeight").split("px")[0]);
    editor.height(editor[0].scrollHeight - lineHeight);
}

textarea_height_auto();

$("#textarea").on("input", function (evt) {
    textarea_height_auto();
});

function copyToClipboard() {
    // コピー対象をJavaScript上で変数として定義する
    var copyTarget = document.getElementById("textarea");
    // コピー対象のテキストを選択する
    copyTarget.select();
    // 選択しているテキストをクリップボードにコピーする
    document.execCommand("Copy");
}

$(function(){
    $('#cntContact').on('click', function(event){
        event.preventDefault();
        $(this).toggleClass('active');

        var str = $('#textarea').val();
        // .replace(/\s\r?\n/g,'\n');
        // str=str.replace(/(^\s+)|(\s+$)/g, "");
        // alert(str);

        var ex = str.match(/マイナビウエディングキャンペーン事務局です。\r?\nこのたびはマイナビウエディングをご利用いただき誠にありがとうございます。\r?\nご連絡いただいた件に関して、回答をさせていただきます。/);
        if (ex == null){
          ex = str.match(/マイナビウエディングキャンペーン事務局です。\r?\nご連絡いただいた件に関して、回答をさせていただきます。/);
          if (ex == null){
            alert('文頭を修正してください。');
            $(this).blur();
            exit;
          }
        }

        if($(this).hasClass('active')){
            var text = $(this).data('text-clicked');
            $(this).removeAttr('class');
            $(this).addClass('w-50 btn btn-outline-danger mr-auto active');
            var newstr = str.replace(/マイナビウエディングキャンペーン事務局です。\r?\nこのたびはマイナビウエディングをご利用いただき誠にありがとうございます。\r?\nご連絡いただいた件に関して、回答をさせていただきます。/,'マイナビウエディングキャンペーン事務局です。\nご連絡いただいた件に関して、回答をさせていただきます。');
        } else {
            var text = $(this).data('text-default');
            $(this).removeAttr('class');
            $(this).addClass('w-50 btn btn-outline-primary mr-auto');
            var newstr = str.replace(/マイナビウエディングキャンペーン事務局です。\r?\nご連絡いただいた件に関して、回答をさせていただきます。/,'マイナビウエディングキャンペーン事務局です。\nこのたびはマイナビウエディングをご利用いただき誠にありがとうございます。\nご連絡いただいた件に関して、回答をさせていただきます。');
        }

        // alert(newstr);
        $(this).html(text);
        $('#textarea').val(newstr);
        $(this).blur();
    });
});
