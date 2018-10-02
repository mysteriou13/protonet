
<html>
<body>

<?php 
include("header.php");
include("head.php");
?>

<div id = "b" style  = "margin-top:1%; font-size:2em">

<center>
vecchioboard
</br>
gesionaire de projet
</center>


<center>
<form method="post" action="https://kanboard.vecchionet.com/?controller=AuthController&amp;action=check">

        <input type="hidden" name="csrf_token" value="4a6df7c470343657061308879bd324a7fb100a9ea98b3f5f5efa9b4f32b6"/>
        <label for="form-username" >Username</label>        <input type="text" name="username" id="form-username"  class="" autofocus required><span class="form-required">*</span>
</br>        <label for="form-password" >Password</label>        <input type="password" name="password" id="form-password"  class="" required><span class="form-required">*</span>
        
                

        
        <div class="form-actions">
            <button type="submit" class="btn btn-blue">Sign in</button>
        </div>
                    <div class="reset-password">
                <a href="/?controller=PasswordResetController&amp;action=create" style = "color:white;" title='' >mot de pass oublié</a>            </div>
            </form>
</center>

</div>


</div>
</body>
</html>
