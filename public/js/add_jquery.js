$("#textarea").css("lineHeight", "20px"); //init
function textarea_height_auto() {
    editor = $('#textarea');
    lineHeight = Number(editor.css("lineHeight").split("px")[0]);
    editor.height(editor[0].scrollHeight - lineHeight + 10);
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

        if($(this).hasClass('active')){
            var text = $(this).data('text-clicked');
            $(this).removeAttr('class');
            $(this).addClass('w-100 btn btn-danger mr-auto active');
            var newstr = str.replace(/^(マイナビウエディングキャンペーン事務局です).*\r?\n.*\r?\n.*(回答をさせていただきます).*\r?\n/,'マイナビウエディングキャンペーン事務局です。\nご連絡いただいた件に関して、回答をさせていただきます。\n');
        } else {
            var text = $(this).data('text-default');
            $(this).removeAttr('class');
            $(this).addClass('w-100 btn btn-primary mr-auto');
            var newstr = str.replace(/^(マイナビウエディングキャンペーン事務局です).*\r?\n.*(回答をさせていただきます).*\r?\n/,'マイナビウエディングキャンペーン事務局です。\nこのたびはマイナビウエディングをご利用いただき誠にありがとうございます。\nご連絡いただいた件に関して、回答をさせていただきます。\n');
        }

        // alert(newstr);
        $(this).html(text);
        $('#textarea').val(newstr);
        $(this).blur();
    });
});

$(function(){
    $("#shortName").change(function(){
        var id = $(this).val();
        $("#basicData").find(".basicData").each( function( index, obj ) {
            $(obj).removeAttr('class');
            $(obj).addClass('basicData d-none');
        });
        if(id != 0) {
            var obj = $("#basicData").find('#' + id);
            $(obj).removeAttr('class');
            $(obj).addClass('basicData');
        }
    });
});

$('input[id="personalInfo"]').click(function(){
    var str = $('#textarea').val();
    var ex = str.match('※文中の情報は、個人情報のため一部伏字としております。');
    if(ex==null){
        var newstr = str.replace('ご連絡いただいた件に関して、回答をさせていただきます。','ご連絡いただいた件に関して、回答をさせていただきます。\n※文中の情報は、個人情報のため一部伏字としております。');
        $('#textarea').val(newstr);
        $("#personalInfoLabel").html('不要ならばチェックを外す');
        $("#personalInfo").prop('checked',true).change();
      } else {
        var newstr = str.replace('※文中の情報は、個人情報のため一部伏字としております。\n','');
        $('#textarea').val(newstr);
        $("#personalInfoLabel").html('必要ならばチェック');
        $("#personalInfo").prop('checked',false).change();
      }
});

$('input[id="footerCheck"]').click(function(){
    var str = $('#textarea').val();
    var ex = str.match(/※なお、ギフト券プレゼント対象判定に関しましては、全ての締め切り終了後に規約内容に沿って審査を実施させていただきます。プレゼント対象と確定した方につきましては、商品の発送をもってご連絡とかえさせていただいております。本メールは対象確定をお約束するものではございませんのでご注意ください。/);
    if(ex!=null){
        var newstr = str.replace(/※なお、ギフト券プレゼント対象判定に関しましては、全ての締め切り終了後に規約内容に沿って審査を実施させていただきます。プレゼント対象と確定した方につきましては、商品の発送をもってご連絡とかえさせていただいております。本メールは対象確定をお約束するものではございませんのでご注意ください。/,'');
        $("#footerCheckHidden").attr('type','');
        $("#footerCheckLabel").html('必要ならば該当箇所に貼り付ける');
        $('#textarea').val(newstr);
    }
    $("#footerCheck").prop('checked',false).change();
});

$(function() {
    var $input = $('#textarea');
    $input.on('input', function(event) {
        var str = $input.val();
        var ex = str.match(/(※なお、ギフト券プレゼント対象判定).*(本メールは対象確定をお約束するものではございませんのでご注意ください)/);
        if (ex !=null ){
            $("#footerCheckHidden").attr('type','hidden');
            $("footerCheckLabel").html('不要ならばチェックを外す');
            $("#footerCheck").prop('checked',true).change();
        } else {
            $("#footerCheckHidden").attr('type','');
            $("#footerCheckLabel").html('必要ならば該当箇所に貼り付ける');
            $('#textarea').val(newstr);
            $("#footerCheck").prop('checked',false).change();
        }
    });
});

$( 'input[name="op"]:radio' ).change( function() {
    var radioval = $(this).val();
    var str = $('#textarea').val();
    if (radioval == 'op1'){
        var newstr = str.replace(/.*(どうぞ宜しくお願い申し上げます).*/,'引き続き「マイナビウエディング」をどうぞ宜しくお願い申し上げます。');
    } else if (radioval == 'op2') {
        var newstr = str.replace(/.*(どうぞ宜しくお願い申し上げます).*/,'今後とも「マイナビウエディング」をどうぞ宜しくお願い申し上げます。');
    }else if (radioval == 'op3') {
        var newstr = str.replace(/.*(どうぞ宜しくお願い申し上げます).*/,'「マイナビウエディング」をどうぞ宜しくお願い申し上げます。');
    }
    $('#textarea').val(newstr);
});


// $(function() {
//     $('.correctBtn').on('click', function(){
//         var id=$(this).attr('name');
//         var obj=$("#areaBox").find('#' + id);
//         var str=obj.val();
//         $("#textarea").val(str);
//         textarea_height_auto();
//         alert(obj.val());
//         $(this).blur();
//     });
// });
