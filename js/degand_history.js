$(document).ready(function(){
    $(document).on('keypress', 'input', function(e) {
        if(e.keyCode == 13 && e.target.type !== 'submit') {
            e.preventDefault();
            var search_name = $("#customer_name").val();
            if(search_name.length == 0) {
                toastr.warning("Input Customer Search Name!");
            } else {
                data = {
                    name: search_name
                  }
              
                  $.post("php/Customer.php",
                  data,
                  function(response, status){
                    $("#selection_table").empty();
                    $("#selection_table").append(response);
                });
            }    
        }
    });

    $("#btn_search").click(function() {
        var search_name = $("#customer_name").val();
        if(search_name.length == 0) {
            toastr.warning("Input Customer Search Name!");
        } else {
            data = {
                name: search_name
              }
          
              $.post("php/Customer.php",
              data,
              function(response, status){
                $("#selection_table").empty();
                $("#selection_table").append(response);
            });

        }
    });

    $("#tblselection tbody").delegate('tr', 'click', function(e) {
        var id = $(this).find("td:first");        
        cid = id.text();
        cid_data = {
            cid: cid
          }
          $.post("php/History.php",
          cid_data,
          function(response, status){
            $("#history_table").empty();
            $("#history_table").append(response);
        });
    });    
});
  
  
  