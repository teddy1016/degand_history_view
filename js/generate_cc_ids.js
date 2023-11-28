$(document).ready(function(){
  const CC_text = document.getElementById('CC_textarea');
  const CC_input = document.getElementById('CCitem');
  
  $("#btn_CC_generator").click(function() {
    if(CC_input.value.length !=0 ) {
      data = {
        id: CC_input.value
      }
  
      $.post("php/CCGenerator.php",
      data,
      function(response, status){
        var arr = JSON.parse(response);
        for(var i = 0; i < arr.length; i++) {
          CC_text.value  = CC_text.value + "C" + arr[i] + "\n";
        };
        CC_cnt = parseInt($("#CC_cnt").text()) + arr.length;
        $("#CC_cnt").text(CC_cnt);    
        CC_input.value = '';  
      });  
    } else {
      toastr.warning("Enter IDs");
      return;
    }
  });

  $("#btn_CC_clear").click(function() {
    localStorage.removeItem("CCids");
    CC_text.value = '';
    CC_input.value = "";
    $("#CC_cnt").text(0);
  });

  $("#btn_CC_one").click(function() {
    if(CC_input.value.length == 0) {
      CC_input.value = 1;
    } else {
      CC_input.value = parseInt(CC_input.value) + 1;
    }
  });

  $("#btn_CC_five").click(function() {
    if(CC_input.value.length == 0) {
      CC_input.value = 5;
    } else {
      CC_input.value = parseInt(CC_input.value) + 5;
    }
  });

  $("#btn_CC_ten").click(function() {
    if(CC_input.value.length == 0) {
      CC_input.value = 10;
    } else {
      CC_input.value = parseInt(CC_input.value) + 10;
    }
  });

  $("#btn_CC_twenty").click(function() {
    if(CC_input.value.length == 0) {
      CC_input.value = 20;
    } else {
      CC_input.value = parseInt(CC_input.value) + 20;
    }
  });
});


