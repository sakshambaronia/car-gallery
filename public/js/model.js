$(document).ready(function(){

    $("#makevalues").load("model/make.php");
    
    $('#makevalues').change(function() {
        
      if ($('#makevalues').val() != 0)
      {  
        $('#model').show();
        $("#content").hide();
        $("#modelvalues").load("model/makemodel.php?choice=" + $("#makevalues").val());
        $('#modelvalues').change(function(){
            $('#content').show();
            $("#modelcontent").load("model/model.php?modelchoice=" + $("#modelvalues").val());
        });
      }
      else
      {
        $('#model').hide();
        $("#content").hide();
      }
    });
});