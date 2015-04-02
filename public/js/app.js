


$(document).ready(function(){

fillInput();
    $(function(){

        $(".datepicker").each(function(){
            $(this).datepicker({dateFormat: "yy-mm-dd"});
        });

        $(".timepicker").each(function(){
            $(this).timepicker();
        });
    });

  

    $(".btn-week").click(function(){

        if($(this).hasClass('btn-primary')){
            $(this).removeClass('btn-primary');
            $(this).addClass('btn-default');
            var input = $("#week").val();
            var deleteText = $(this).text() + ",";
            var result =   input.replace(deleteText, "");
            $("#week").val(result);

        }else{

            $(this).removeClass('btn-default');
            $(this).addClass('btn-primary');
            var $input = $("#week");
            $input.val($input.val()+$(this).text()+",");

        }
    });
});



  var fillInput = function(){
        var input = $("#week").val();
        if( $("#week").val() ){
            $(".btn-week").each(function(){
               var selectionValue = ($(this).text()).trim();
                if(input.indexOf(selectionValue) >= 0 ){
                    $(this).removeClass('btn-default');
                    $(this).addClass('btn-primary');
                }
            });
        }
    };

