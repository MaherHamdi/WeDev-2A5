	$(document).ready(function(){
		$(".btn").click(function(){
			var attr = $(this).attr("data-li");


            
			$(".btn").removeClass("active");
			$(this).addClass("active");

           
			if(attr == "banques"){
				$(".img-responsive").show();
			    $(".img-responsive2").hide();
                $(".img-responsive3").hide();

			}
			else if (attr == "assurances"){
				$(".img-responsive2").show();
				$(".img-responsive").hide();
				$(".img-responsive3").hide();

				

			}
			else if (attr == "entreprises"){
				$(".img-responsive3").show();
				$(".img-responsive").hide();
				$(".img-responsive2").hide();
				
			

			}
			else if (attr == "all"){
				$(".img-responsive").show();
			    $(".img-responsive2").show();
                $(".img-responsive3").show();				
			

			}



          
		})
		
	    });