
				
<!DOCTYPE html >
<html>
	<head>
        <Style>
		</Style>
		
		<script src='jquery-3.3.1.min.js'></script>
		
		<title>Les Videos</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		
	</head>
	
	
	<!--/////////////////////-fin de head /////////////////////-->
	<body>
			
	<!--	<form  method="post" enctype="multipart/form-data">-->
        <center>
            <div id="divVideos1" style="margin-top:1%;">
                <iframe id="ifr1" width="0%;" height="0%;"  src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </center>
		 
			 
			  <div id="div3alim1" class="div1" style="width:100%;   margin-top:1%; background:#f1f2f8;">
			  <table class="table-striped" style="width:100%; font-size:18px;">
				  <center><button  style="width:100%; font-size:18px;"> الشيخ عمر عبد الكاف </button></center>
				  <tr  style="width:100%; font-size:18px;">
					  <button id="btnD1" onclick="show1()" class="btn btn-info btn-block" style="width:100%; font-size:18px;"><center>قصة رائعة - حكاية المحتال مع أهل القرية </center> </button>
				  </tr>
                 <tr  style="width:100%; font-size:18px;">
					  <button id="btnD2" onclick="show1()" class="btn btn-default btn-block" style="width:100%; font-size:18px;"><center>درس الجمعة - الثعلب والقنفذ  </center> </button>
				  </tr>
                 <tr  style="width:100%; font-size:18px;">
					  <button id="btnD3" onclick="show1()" class="btn btn-info btn-block" style="width:100%; font-size:18px;"><center>إمام القرية وجمل العمدة مضحك جدا </center> </button>
				  </tr>
                  <tr  style="width:100%; font-size:18px;">
					  <button id="btnD4" onclick="show1()" class="btn btn-default btn-block" style="width:100%; font-size:18px;"><center>35 دقيقة من اجمل طرائف الشيخ عمر عبد الكافي واروع القصص الممتعة </center> </button>
				  </tr>
				  <tr  style="width:100%; font-size:18px;">
					  <button id="btnD5" onclick="show1()" class="btn btn-info btn-block" style="width:100%; font-size:18px;"><center>مجموعة مختارة من أروع أقوال الشيخ </center> </button>
				  </tr>
                 <tr  style="width:100%; font-size:18px;">
					  <button id="btnD6" onclick="show1()" class="btn btn-default btn-block" style="width:100%; font-size:18px;"><center> محاضرة رائعة - الدين والحياة </center> </button>
				  </tr>
                 <tr  style="width:100%; font-size:18px;">
					  <button id="btnD7" onclick="show1()" class="btn btn-info btn-block" style="width:100%; font-size:18px;"><center> الأعراب الثلاثة- قصة روعة في الذكاء والجمال </center> </button>
				  </tr>
                  <tr  style="width:100%; font-size:18px;">
					  <button id="btnD8" onclick="show1()" class="btn btn-info btn-block" style="width:100%; font-size:18px;"><center> اجمل 5 قصص رواها</center> </button>
				  </tr>
                 <tr  style="width:100%; font-size:18px;">
					  <button id="btnD9" onclick="show1()" class="btn btn-info btn-block" style="width:100%; font-size:18px;"><center>قصة عمير ابن وهب الجمعي</center> </button>
				  </tr>
                 <tr  style="width:100%; font-size:18px;">
					  <button id="btnD10" onclick="show1()" class="btn btn-info btn-block" style="width:100%; font-size:18px;"><center>درس الجمعة - مزامير داوود</center> </button>
				  </tr>
                 
			  </table>
		  </div>
		</body>
	</html>
<script>
    function show1(){
            document.getElementById("ifr1").style.width="60%";
    }        document.getElementById("ifr1").style.height="70%";
</script>	
<script >	
	////chercher ////////////////////
		$(document).ready(function(){               
                $("#btnD1").click(function(){
                    $("#ifr1").attr("src", "https://www.youtube.com/embed/VdbeCw2oFmc?start=21");
                });
  			             
                $("#btnD2").click(function(){
                    $("#ifr1").attr("src", "https://www.youtube.com/embed/HxB88-GED8g");
                });
  			              
                $("#btnD3").click(function(){
                    $("#ifr1").attr("src", "https://www.youtube.com/embed/9cSmlCLr49c");
                });
				$("#btnD4").click(function(){
                    $("#ifr1").attr("src", "https://www.youtube.com/embed/8G2gALLoK78");
                });
				$("#btnD5").click(function(){
                    $("#ifr1").attr("src", "https://www.youtube.com/embed/Vdh3f9lN2_E");
                });
				$("#btnD6").click(function(){
                    $("#ifr1").attr("src", "https://www.youtube.com/embed/yaw8Ws9h6FU");
                });
				$("#btnD7").click(function(){
                    $("#ifr1").attr("src", "https://www.youtube.com/embed/Eo-PIWFprDQ");
                });
				$("#btnD8").click(function(){
                    $("#ifr1").attr("src", "https://www.youtube.com/embed/DGM8DEdFpWM");
                });
				$("#btnD9").click(function(){
                    $("#ifr1").attr("src", "https://www.youtube.com/embed/kJz9t0uilnA");
                });
				$("#btnD10").click(function(){
                    $("#ifr1").attr("src", "https://www.youtube.com/embed/d8YnHXXaOWI");
                });
			
  			});  
</script>
<script >	
	////chercher ////////////////////
		$(document).ready(function(){
  			$("#txtSearch").on("keyup", function() {
    			var value = $(this).val().toLowerCase();
    			$("#tblfor tr").filter(function() {
      				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    			});
	  			//fixer l'entete du tableau
	  			$("#tblfor tr:first").show();     
  			});        
</script>

