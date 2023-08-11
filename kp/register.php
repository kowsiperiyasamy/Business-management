<?php include("head.html")
?>
<body>
<div class="register">
<form action="connect.php" method="post">
<br /><br />
<label for="username">USERNAME</label>
<input type="text" size="40" name="n" placeholder="enter your username" required  />
<br /><br />
<label for="age">AGE</label>
<input type="number" size="3" name="a"  />
<br /><br />
<label for="dob">DOB</label>
<input type="date" name="d"  /> 
<br /><br />
<label for="gender">GENDER</label>
<input type="radio" value="male" name="g"  />MALE
<input type="radio" value="female" name="g"  />FEMALE
<input type="radio" value="others" name="g"  />OTHERS
<br /><br />
<label for="email">EMAIL</label>
<input type="email" size="20" name="e"  />
<br /><br />
<label for="password">PASSWORD</label>
<input type="password" maxlength="10" name="p"  /> 
<br /><br />
<label for="dept">DEPT</label>
<select name="s">
<option value="cse">CSE</option>
<option value="eee">EEE</option>
<option value="ece">ECE</option>
<option value="mca">MCA</option>
<option value="it">IT</option>
<option value="mba">MBA</option>
<option value="aids">AIDS</option>
</select>
<br /><br />
<input type="submit" value="submit"  />
<input type="reset" value="cancel"  />
<br><br/>
</form>
</div>
</body>
<?php include("foot.html")
?>