<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Forgot Password</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/recover.css">
	 	<link rel="stylesheet" type="text/css" href="../css/ionicons.min.css">

</head>
<body>

	<p class="questP"><?php echo $_SESSION['questionControl']; ?></p>
<div class="container">   

    <div id='for-message'></div>

    <form  name='ourForm'>

        <div class="dws-input">
            <input type="text" name='answer' placeholder="Answer">
        </div>

        <button class="dws-submit" type="submit" ><i class="ion-unlocked"></i> Change Password</button>

    </form>

</div>

<script>
var serverResponse = document.querySelector('#for-message');

document.forms.ourForm.onsubmit = function(e){
    e.preventDefault();
        
    var xhr = new XMLHttpRequest();

    xhr.open('POST', 'totalRecover.php');

    var formData =  new FormData(document.forms.ourForm);

    //xhr.setRequestHeader('Content-Type','application/x-www-from-urlencoded');

    xhr.onreadystatechange = function()
    {
        if(xhr.readyState===4 && xhr.status===200)
        {
            serverResponse.textContent = xhr.responseText;
            serverResponse.textContent.replace("\n", "");
            serverResponse.textContent.trim();
            console.log(serverResponse.textContent);

            if(serverResponse.textContent==="")
            {
              location.href='changePass.php';                
            }
        }
    }

    xhr.send(formData);
};
</script>

</body>
</html>