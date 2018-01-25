<!DOCTYPE html>
<html lang="en">
<html >
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Digital Service Canvas</title>
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>-->
  <link href="<?php echo asset_url();?>login/style.css" rel="stylesheet">

</head>
<body>
  <div class="login">
  <center><img src="<?php echo asset_url();?>img/Telkomsel_Logo_copy.png">
		<h3>Digital Service Canvas</h3></center>
    <form method="POST" action="<?php echo site_url('login');?>">
    	<input type="text" name="identity" placeholder="Username" required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Login</button>
    </form>
	
</div>
    <script  src="<?php echo asset_url();?>login/index.js"></script>

</body>
</html>
