<?php 
require_once 'config.php'; 
require_once DBAPI;

$db = open_database();
include(HEADER_TEMPLATE); ?>
<h1>Painel de Controle</h1>
<hr />
<style>
	.text-center {
		margin-left: auto;
		margin-right: auto;
	}
</style>

<?php if ($db) : ?>
<div class="container-fluid">
<div class="row">
	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="produtos/add.php" class="btn btn-primary">
			<div class="row">
				<div class="col-12 text-center" align="center">
					<i class="fa fa-plus fa-5x"></i>
				</div>
				<div class="col-12 text-center" align="center">
					<p>Novo Produto</p>
				</div>
			</div>
		</a>
	</div>
	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="produtos/" class="btn btn-default">
			<div class="row">
				<div class="col-12 text-center" align="center">
					<i class="fa fa-tags fa-5x"></i>
				</div>
				<div class="col-12 text-center" align="center">
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Produtos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
				</div>
			</div>
		</a>
	</div>
</div>
<hr>
<div class="row">
	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="customers/add.php" class="btn btn-primary">
			<div class="row">
				<div class="col-12 text-center" align="center">
					<i class="fa fa-plus fa-5x"></i>
				</div>
				<div class="col-12 text-center" align="center">
					<p>Novo Cliente</p>
				</div>
			</div>
		</a>
	</div>
	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="customers/" class="btn btn-default">
			<div class="row">
				<div class="col-12 text-center" align="center">
					<i class="fa fa-tags fa-5x"></i>
				</div>
				<div class="col-12 text-center" align="center">
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Clientes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
				</div>
			</div>
		</a>
	</div>
</div>

<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
	</div>

<?php endif; ?>
</div>
<?php include(FOOTER_TEMPLATE); ?>