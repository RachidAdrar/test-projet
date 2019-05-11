
<!DOCTYPE html >
<html>
	<head>
    </head>
	<body>
		<!--//////////Solutions//////-->
		
		<input id="SolA"   type="hidden" dir="rtl" value="بينا أنا أمشي إذ سمعت صوتا من السماء فرفعت بصري" />
		<input id="SolB"   type="hidden" dir="rtl" value="يا أيها المدثر قم فأنذر" />
	<!--	<input id="SolN"    type="hidden" dir="rtl" value="" />-->
	
    <div class="container"  style="width:100%;  height:690px; font-size:1.5em;  ">
    <div  class="container" style="width:100%;  height:auto; background:#eaece5">
		
		<!--//////////////////div///////////////////--->
		<h3 style="text-align:center; background:#e0e2e4; margin-left:1%; width:98%; color:black;" >إملأ الفراغ بما يناسب</h3>
		<table class="table table-striped"  dir="rtl">	
	<tr>
						<td id="PA"  style="  margin-left:1%; width:98%; "  >
							<a > قال ابن شهاب وأخبرني أبو سلمة بن عبد الرحمن أن جابر بن عبد الله الأنصاري قال وهو يحدث عن فترة الوحي فقال في حديثه</a>
							<input   id="InputA" type="text"  style=" color:black; width:98%; font-size:0.8em;  background:white"/> 
							<a id="SolutionA"  dir="ltr" style="width:auto; color:green;"></a>	
							<a id="SolutionA1"  dir="ltr" style="width:auto; color:rgb(118,118,118);"></a>	
							<a id="SolutionSA"  dir="ltr" style="width:auto; color:red;"></a>	
					</td>			
				</tr>
			<tr>
							<td id="PB"  style="  margin-left:1%; width:98%; "  >
								<a >فإذا الملك الذي جاءني بحراء جالس على كرسي بين السماء والأرض فرعبت منه فرجعت فقلت زملوني زملوني فأنزل الله تعالى</a>
								<input   id="InputB" type="text"  style=" color:black; width:98%; font-size:0.8em;  background:white"/> 
								<a id="SolutionB"  dir="ltr" style="width:auto; color:green;"></a>	
								<a id="SolutionB1"  dir="ltr" style="width:auto; color:rgb(118,118,118);"></a>	
								<a id="SolutionSB"  dir="ltr" style="width:auto; color:red;"></a>	
						</td>			
				</tr>
			<tr>
							<td id="PC"  style="  margin-left:1%; width:98%; "  >
								<a>إلى قوله والرجز فاهجر، فحمي الوحي وتتابع تابعه عبد الله بن يوسف وأبو صالح وتابعه هلال بن رداد عن الزهري وقال يونس ومعمر بوادره</a>
						</td>			
				</tr>
		</table>
		</div>   
		 <button  id="Compar" onclick="ComparFunc()" style=" font-size:15px; bottom:0px; width:100%;">تصحيح</button>
	</div> 
		
		<!--//////////////////////////button//////-->
		
		<!--//////////////////script/////////////////////-->
		<script>
			function ComparFunc(){
			var a = document.getElementById("InputA").value;
			var b = document.getElementById("InputB").value;
							
			var Sa = document.getElementById("SolA").value;
			var Sb = document.getElementById("SolB").value;
			
				
				if (a == Sa) {
					document.getElementById("SolutionA").innerHTML='الجواب صحيح';						
				}else{
					document.getElementById("SolutionA1").innerHTML='الجواب خطأ والصحيح هو  ';
					document.getElementById("SolutionSA").innerHTML=Sa;
				}
				
				if (b == Sb) {
					document.getElementById("SolutionB").innerHTML='الجواب صحيح';					
				}else{
					document.getElementById("SolutionB1").innerHTML='الجواب خطأ والصحيح هو  ';
					document.getElementById("SolutionSB").innerHTML=Sb;
				}
				
				
			}
		</script>

	</body>
</html>
    
       
