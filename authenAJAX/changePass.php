<!DOCTYPE html>
<html lang="en">
<head>
	<title>Change Password</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/recover.css">
	 	<link rel="stylesheet" type="text/css" href="../css/ionicons.min.css">

</head>
<body>

<div class="container">   

    <div id='for-message'></div>

    <form  name='ourForm'>

        <div class="dws-input">
            <input type="password"  name='newPassword' autocomplete="on" placeholder="New Password">
        </div>   

        <div class="dws-input">
            <input type="password"  name='newPasswordRep' autocomplete="on" placeholder="Repeat Password">
        </div>  

        <button class="dws-submit" type="submit" ><i class="ion-unlocked"></i> Set password</button>
     
    </form>

</div>

<script>
var serverResponse = document.querySelector('#for-message');

document.forms.ourForm.onsubmit = function(e){
    e.preventDefault();
        
    var xhr = new XMLHttpRequest();

    xhr.open('POST', 'executeChangePass.php');

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
              location.href='login.html';                
            }
        }
    }

    xhr.send(formData);
};
</script>

</body>
</html>