<!DOCTYPE html>
<html>
<head>
	<title>Passcode page  </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: url("physician.jpg");
  background-color: #cccccc;
  height: 500px;
   filter: blur(8px);
  -webkit-filter: blur(8px);
  
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}
</style>
</head>
<body >
	<div class="hero-image">
  <div class="hero-text">
   <!-- saving this passcodee.php as index.php -->
	<center><h2>Passcode please!</h2>
	<img src="img_avatar2.png" height="5%" width="10%">
	<form>
	<label for="pwd">Password:</label><br>
  <input type="password" id="pwd" value="anushka">
  <input type="button" onclick="location.href='./firstpage.php';" value= "Submit" />
</form>
  </center>
</div>
</div>
</body>
</html>