$("#addBox").click(function(){

  var frm_cnt=$(".search").length;

  if(frm_cnt < 10){
    var oldObj=$("#search").parent();
    var newObj=oldObj.clone(true).appendTo("[id^='templateBox']");
    var inObj=newObj.find("input[id^='search']");
    $(inObj).attr('name','search[' + frm_cnt + ']');
    inObj.val('');
    inObj.focus();
    // var id=inObj.attr("name");
    // inObj.val(id);
  }
});

$("#delBtn").click(function(){

  var frm_cnt=$(".search").length;

  if(frm_cnt > 1){
    $(this).parent().remove();

    var frm_cnt=0;
    $(".search").each(function(index,formObj){
      $(formObj).attr('name','search[' + frm_cnt + ']');
      // $(formObj).val($(formObj).attr('name'));
      // alert($(formObj).attr('name'));
      frm_cnt++;
    });
  }
});
