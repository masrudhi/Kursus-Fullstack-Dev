<html><head><meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tampil Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body><center><div style="width:30%">
	
<form method="post" action="<?=base_url('Login/login') ?>">
<?=csrf_field();?>	
<br/><input name="username" class="form-control" placeholder="USERNAME" required/>
<br/><input name="password" class="form-control" placeholder="PASSWORD" required type="password" />

<br/><input type="submit" value="LOGIN" class="btn btn-success btn-sm"/>
</form></div></center></body></html>