<?php if (!isset($session['user'])) { ?>
<div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6"></div>
	<div class="jumbotron">
		<div class="container">
			<h1><a name="login"></a>Login</h1>
			<form action="<?php echo LINK_GLOBAL; ?>index.php/index/login" method="post" role="form">
				<div class="form-group">
					<label class="sr-only" for="username">Username</label>
					<input class="form-control" id="username" type="text" name="username" placeholder="Username" required>
				</div>
				<div class="form-group">
					<label class="sr-only" for="password">Password</label>
					<input class="form-control" id="password" type="password" name="password" placeholder="Password" required>
				</div>
				<button class="btn btn-primary btn-lg" type="submit">Login</button>
				<a class="btn btn-primary btn-lg" href="<?php echo LINK_GLOBAL; ?>index.php/register" role="button">Registrar</a>
			</form>
		</div>
	</div>
</div>
<?php } ?>