<div  id="login">
<span style="color:red"><?php echo $this->session->flashdata('error');  ?></span></br></br>
<span style="text-align:center;">User Login</span></br></br>
<form  name="loginform"  action="<?php  echo  site_url('login/home'); ?>"  id="loginform"  method="post">
<label>Usernane</label>&nbsp;&nbsp;&nbsp;<label><input type="text"  name="username"  id="username"   /></label></br></br>

<label>Password</label>&nbsp;&nbsp;<label><input type="password"  name="password"  id="pass"   /></label></br></br>

<label></label><label><input style="margin-left:65px;" type="submit"  name="do_login"  id="submit"   value="Login" /></label>
</form>
</div>
<script>
function check(){

var err = true;
$("input").each(function(){
	 if($(this).val()=='') {
		$(this).css('border','1px solid red');
		err = false;	
	 }
});
return err;
}
</script>
