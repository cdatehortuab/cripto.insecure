<div class="col-xs-12 col-sm-offset-2 col-sm-8">
	<div class="jumbotron">
		<div class="container">
			<h1 style="text-align:center;">Enviar Mensaje</h1>
			<form role="form" class="form-horizontal" action="<?php echo LINK_GLOBAL; ?>index.php/message/sendMessage" method="post">
				<div class="form-group">
					<label for="to_user" class="form-label col-sm-2">Para:</label>
					<div class="col-sm-10">
						<input id="to_user" class="form-control" type="text" name="to_user" placeholder="johndoe" required>
					</div>
				</div>
				<div class="form-group">
					<label for="subject" class="form-label col-sm-2">Asunto:</label>
					<div class="col-sm-10">
						<input id="subject" class="form-control" type="text" name="subject" placeholder="Asunto" required>
					</div>
				</div>
				<div class="form-group">
					<label for="message" class="form-label col-sm-2">Mensaje:</label>
					<div class="col-sm-10">
						<textarea id="message" class="form-control" type="text" name="message" placeholder="Tu mensaje..." rows="10" required></textarea>
					</div>
				</div>
				<div class="pull-right">
					<button class="btn btn-primary" type="sumbit">Enviar</button>
				</div>
			</form>
		</div>
	</div>
</div>