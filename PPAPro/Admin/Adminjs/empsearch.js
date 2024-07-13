$(document).ready(function(){
    $("#search").on("keyup", function(){
        var searchText = $(this).val();
        if(searchText != ''){
            $.ajax({
                url: "Adminhanlder/empsearcher.php",
                type: "post",
                data: {query: searchText},
                success: function(response){
                    if(response.trim() !== "") {
                        
                        $(".popup-content").html(response);
                        $(".popup").css("display", "block");
                    } else {
                        alert("No Employees found");
                    }
                }
            });
        }
    });

    
    $(document).on("click", function(e) {
        if ($(e.target).is(".popup") || $(e.target).is(".close")) {
            $(".popup").css("display", "none");
        }
    });
});