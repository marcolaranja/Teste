<?php include 'header.php'; ?>

<div class="container">

	<h1>Home</h1>

	<form id="cadastro">

		<div class="row">

			<div class="col-md-5">
				<div class="form-group">
					<label>Nome:</label>
					<input type="text" name="nome" id="nome" class="form-control" placeholder="Rafael">
				</div>
			</div>

			<div class="col-md-5">
				<div class="form-group">
					<label>E-mail:</label>
					<input type="email" name="email" id="email" class="form-control" placeholder="john@doe.com">
				</div>
			</div>

			<div class="col-md-2">
				<div class="form-group">
					<label for="idade">Idade</label>
					<input type="number" class="form-control" id="idade" placeholder="30">
				</div>
			</div>

		</div>

		<div class="row">

			<div class="col-md-4 col-md-offset-4">
				<button class="btn btn-success btn-lg btn-block" id="enviar">Enviar</button>
			</div>

		</div>

	</form>

</div>

<br clear="all" />
<br clear="all" />

<?php include 'footer.php'; ?>