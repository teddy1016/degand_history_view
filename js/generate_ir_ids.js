$(document).ready(function(){
  const IR_text = document.getElementById('IR_textarea');
  const IR_input = document.getElementById('IRitem');
  
  $("#btn_IR_generator").click(function() {
    if (IR_input.value.length != 0) {
      data = {
        id: IR_input.value
      }
  
      $.post("php/IRGenerator.php",
      data,
      function(response, status){
        var arr = JSON.parse(response);

        for(var i = 0; i < arr.length; i++) {
          IR_text.value  = IR_text.value + "S" + arr[i] + "\n";
        };

        IR_cnt = parseInt($("#IR_cnt").text()) + arr.length;
        $("#IR_cnt").text(IR_cnt);    
        IR_input.value = '';  
      });
    } else {
      toastr.warning("Enter IDs!");
      return;
    }

  });

  $("#btn_IR_clear").click(function() {
    localStorage.removeItem("IRids");
    IR_text.value = '';
    IR_input.value = "";
    $("#IR_cnt").text(0);
  });

  $("#btn_IR_one").click(function() {
    if(IR_input.value.length == 0)
      IR_input.value = 1;
    else
      IR_input.value = parseInt(IR_input.value) + 1;
  });

  $("#btn_IR_five").click(function() {
    if(IR_input.value.length == 0)
      IR_input.value = 5;
    else
      IR_input.value = parseInt(IR_input.value) + 5;
  });

  $("#btn_IR_ten").click(function() {
    if(IR_input.value.length == 0)
      IR_input.value = 10;
    else
      IR_input.value = parseInt(IR_input.value) + 10;
  });

  $("#btn_IR_twenty").click(function() {
    if(IR_input.value.length == 0)
      IR_input.value = 20;
    else
      IR_input.value = parseInt(IR_input.value) + 20;
  });

});


