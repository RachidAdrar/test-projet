
<?php

    // Email configration
    $mail_to = 'rachidmarchica3@gmail.com';
    $subject = 'Info from my site';
    
    // Recevie Info
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $job = $_POST['job'];
    $info = $_POST['info'];
    
    $message = "Name : " . $name."n";
    $message .= "Email : " . $mail."n";
    $message .= "Job : " . $job."nn";
    $message .= "Info : " . $info."n";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script src='jquery-3.3.1.min.js'></script>
		
		
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <?php echo $name."<br /-->".$mail."<br>".$job."<br>".$info."<br>"; ?> 

<?php
    if(mail($mail_to,$subject ,$message)){
        echo "Thank you";
    }else{
        echo "Email failed";
    }

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact form php</title>
<link href="اcss/styleEmailMe.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="contanier">	
        <div id="header"></div>
        <div id="mail"></div>
        <div id="contact">
       	  <form id="form" name="form" method="post" action="emailMe.php">
          <table>
  <tr>
    <td width="100">Name :</td>
    <td width="500"><span id="sprytextfield1">
      <input type="text" name="name" id="name" />
      <span class="textfieldRequiredMsg">Full your infomation.</span></span></td>
  </tr>
  <tr>
    <td width="100">Email : </td>
    <td width="500"><span id="sprytextfield2">
    <input type="text" name="mail" id="mail2" />
    <span class="textfieldRequiredMsg">Full your infomation</span><span class="textfieldInvalidFormatMsg">Full your emailadress please.</span></span></td>
  </tr>
  <tr>
    <td width="100">Job : </td>
    <td width="500"><span id="spryselect1">
      <select name="job" id="job">
        <option value="webdesigner">Webdesigner</option>
        <option value="webdeveloper">Webdeveloper</option>
      </select>
      <span class="selectRequiredMsg">Please select an item.</span></span></td>
  </tr>
  <tr>
    <td width="100">Message : </td>
    <td width="500"><span id="sprytextarea1">
      <textarea name="info" id="info" cols="45" rows="5"></textarea>
      <span class="textfieldRequiredMsg">Full your infomation</span><span class="textfieldRequiredMsg">Full your infomation</span><span class="textfieldRequiredMsg">Full your infomation</span></span></td>
  </tr>
  <tr>
    <td width="100">&nbsp;</td>
    <td width="500"><input type="submit" name="send" id="send" value="Send Message" /></td>
  </tr>
</table>

      	  </form>
        </div>
        <div id="footer"></div>
  	</div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["blur", "change"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "email", {validateOn:["blur", "change"]});
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {validateOn:["blur", "change"]});
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {validateOn:["blur", "change"]});
</script>
</body>
</html>
