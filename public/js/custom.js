

    

    $(document).ready(function () {
      
        $('#chart').hide();
        $('#add').click(function(){
            $('#chart').toggle(); 
        });
        $('#ad').click(function(){
            $('#chart').toggle(); 
        });
    });

/*var navpos = $("#navbar").offset().top;
	$(window).scroll(function(){
		//echo("here");
		var windpos = $(window).scrollTop();
		if (windpos>navpos){
			$("#navbar").addClass("fixed-top");
		}else{
			$("#navbar").removeClass("fixed-top");
		}
    })
    */

