
<!DOCTYPE html >
<html>
	<head>
    </head>
	<body>
		<!--//////////Solutions//////-->
		
		<input dir="rtl" id="SolA" type="hidden" name="SolA" type="text" value="مثل صلصلة الجرس" />
		<input id="SolB"  name="SolB"  type="hidden" dir="rtl" value="فيفصم عني"/>
		<input id="SolC"  name="SolC"  type="hidden" dir="rtl" value="يتمثل لي الملك رجلا فيكلمني" />
		<input id="SolD"  name="SolD"  type="hidden" dir="rtl" value="ينزل عليه الوحي" />
		<input id="SolE"  name="SolE"  type="hidden" dir="rtl" value="الشديد البرد فيفصم عنه" />
		<input id="SolF"  name="SolF"  type="hidden" dir="rtl" value="ليتفصد عرقا" />
    <div class="container"  style="width:100%;  height:690px; font-size:1.5em;  ">
    <div  class="container" style="width:100%;  height:auto; background:#eaece5">
		
		<!--//////////////////div///////////////////--->
		<h3 style="text-align:center; background:#e0e2e4; margin-left:1%; width:98%; color:black;" >إملأ الفراغ بما يناسب</h3>
		<table class="table table-striped"  dir="rtl">	
			<tr>
				<td id="PA"   style=" margin-top:2px; margin-left:1%; width:98%; ">
						<a >أحيانا يأتيني</a>			
						<input  id="InputA" name="InputA" type="text" style=" color:black;  font-size:0.8em; background:#f1f2f6; width:98%; "/>
						<a id="SolutionA"   dir="ltr" style="color:green;"></a>	
						<a id="SolutionA1"   dir="ltr" style=" color:rgb(118,118,118);"></a>		
						<a id="SolutionSA"   dir="ltr" style=" color:red;"></a>	
				</td>			
			</tr>
			<tr>
				<td id="PB"  style=" width:98%; ">
						<a >وهو أشده علي</a>			  
						<input  id="InputB" type="text" style=" color:black; width:98%; font-size:0.8em; background:white"/>  
						<a id="SolutionB"  dir="ltr" style=" color:green;"></a>	
						<a id="SolutionB1"  dir="ltr" style=" color:rgb(118,118,118);"></a>	
						<a id="SolutionSB"   dir="ltr" style="color:red;"></a>
				</td>			
			</tr>
			<tr>
				<td id="PC"  style=" margin-left:1%; width:98%; ">
						<a >وقد وعيت عنه ما قال، وأحيانا </a>
						<input   id="InputC" type="text"  style=" color:black; width:98%; font-size:0.8em;  background:white"/> 
						<a id="SolutionC"  dir="ltr" style="width:auto; color:green;"></a>	
						<a id="SolutionC1"   dir="ltr" style="width:auto; color:rgb(118,118,118);"></a>	
						<a id="SolutionSC"   dir="ltr" style="width:auto; color:red;"></a>	
				</td>			
			</tr>
			<tr>
				<td>
					<a  style="  margin-left:1%; width:98%; "  >فأعي ما يقول			
					</a>			
				</td>			
			</tr>
			<tr>
				<td id="PD"  style="  margin-left:1%; width:98%; " >
						<a >قالت عائشة رضي الله عنها: ولقد رأيته </a>
						<input   id="InputD" type="text"  style=" color:black; width:98%; font-size:0.8em;  background:white"/> 
						<a id="SolutionD"   dir="ltr" style="width:auto; color:green;"></a>	
						<a id="SolutionD1"   dir="ltr" style="width:auto; color:rgb(118,118,118);"></a>	
						<a id="SolutionSD"   dir="ltr" style="width:auto; color:red;"></a>
				</td>
			</tr>
			<tr>
				<td id="PE"  style="  margin-left:1%; width:98%;"  >
						<a >في اليوم </a>
						<input   id="InputE" type="text"  style=" color:black; width:98%; font-size:0.8em;  background:white"/> 
						<a id="SolutionE"   dir="ltr" style="width:auto; color:green;"></a>	
						<a id="SolutionE1"   dir="ltr" style="width:auto; color:rgb(118,118,118);"></a>	
						<a id="SolutionSE"   dir="ltr" style="width:auto; color:red;"></a>
				</td>			
			</tr>
			<tr>
					<td id="PF"  style="  margin-left:1%; width:98%; "  >
						<a >وإن جبينه </a>
						<input   id="InputF" type="text"  style=" color:black; width:98%; font-size:0.8em;  background:white"/> 
						<a id="SolutionF"  dir="ltr" style="width:auto; color:green;"></a>	
						<a id="SolutionF1"  dir="ltr" style="width:auto; color:rgb(118,118,118);"></a>	
						<a id="SolutionSF"  dir="ltr" style="width:auto; color:red;"></a>	
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
			var c = document.getElementById("InputC").value;
			var d = document.getElementById("InputD").value;
			var e = document.getElementById("InputE").value;
			var f = document.getElementById("InputF").value;
				
			var Sa = document.getElementById("SolA").value;
			var Sb = document.getElementById("SolB").value;
			var Sc = document.getElementById("SolC").value;
			var Sd = document.getElementById("SolD").value;
			var Se = document.getElementById("SolE").value;
			var Sf = document.getElementById("SolF").value;
				
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
				if (c == Sc) {
					document.getElementById("SolutionC").innerHTML='الجواب صحيح';					
				}else{
					document.getElementById("SolutionC1").innerHTML='الجواب خطأ والصحيح هو  ';
					document.getElementById("SolutionSC").innerHTML=Sc;
				}
				if (d == Sd) {
					document.getElementById("SolutionD").innerHTML='الجواب صحيح';					
				}else{
					document.getElementById("SolutionD1").innerHTML='الجواب خطأ والصحيح هو  ';
					document.getElementById("SolutionSD").innerHTML=Sd;
				}
				if (e == Se) {
					document.getElementById("SolutionE").innerHTML='الجواب صحيح';					
				}else{
					document.getElementById("SolutionE1").innerHTML='الجواب خطأ والصحيح هو  ';
					document.getElementById("SolutionSE").innerHTML=Se;
				}
				if (f == Sf) {
					document.getElementById("SolutionF").innerHTML='الجواب صحيح';					
				}else{
					document.getElementById("SolutionF1").innerHTML='الجواب خطأ والصحيح هو  ';
					document.getElementById("SolutionSF").innerHTML=Sf;
				}
			}
		</script>

	</body>
</html>
    
       
