$(document).ready(function() {
  
  $("#country").change(function() {
    
    var el = $(this) ;
    
    if(el.val() === "ARGENTINA" ) {
    $("#state").append("   <option>SHIPPED</option>");
    }
      else if(el.val() === "COLOMBIA" ) {
        $("#state option:last-child").remove() ; }
  });
  
});