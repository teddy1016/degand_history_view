$(document).ready(function(){
  const CL_text = document.getElementById('CL_textarea');
  const CL_input = document.getElementById('CLitem');
  
  $("#btn_CL_generator").click(function() {
    if(CL_input.value.length != 0) {
      data = {
        id: CL_input.value
      }
  
      $.post("php/CLGenerator.php",
      data,
      function(response, status){
        var arr = JSON.parse(response);
        for(var i = 0; i < arr.length; i++) {
          CL_text.value  = CL_text.value + "L" + arr[i] + "\n";
        };
        CL_cnt = parseInt($("#CL_cnt").text()) + arr.length;
        $("#CL_cnt").text(CL_cnt);    
        CL_input.value = '';  
      });  
    } else {
      toastr.warning("Enter IDs!");
      return;
    }
  });

  $("#btn_CL_clear").click(function() {
    localStorage.removeItem("CLids");
    CL_text.value = '';
    CL_input.value = "";
    $("#CL_cnt").text(0);
  });
  $("#btn_CL_one").click(function() {
    if(CL_input.value == 0)
      CL_input.value = 1;
    else
      CL_input.value = parseInt(CL_input.value) + 1;
  });

  $("#btn_CL_five").click(function() {
    if(CL_input.value == 0)
      CL_input.value = 5;
    else
      CL_input.value = parseInt(CL_input.value) + 5;
  });

  $("#btn_CL_ten").click(function() {
    if(CL_input.value == 0)
      CL_input.value = 10;
    else
      CL_input.value = parseInt(CL_input.value) + 10;
  });

  $("#btn_CL_twenty").click(function() {
    if(CL_input.value == 0)
      CL_input.value = 20;
    else
      CL_input.value = parseInt(CL_input.value) + 20;
  });
});


