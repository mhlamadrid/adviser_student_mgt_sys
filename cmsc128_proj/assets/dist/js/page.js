ajax_paging = function(){
    $("p.pagination a").click(function() {               
               $.ajax({
                 type: "GET",
                 url: $(this).get(),
                 success: function(html){
         $("#display-content").html(html);
                  }
               });               
             });            
       return false;
     }; 