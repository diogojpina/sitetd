<?php 
if ($_POST) {
	$nome = $_POST['nome'];
	$empresa = $_POST['empresa'];
	$email = $_POST['email'];
	$fone = $_POST['fone'];
	$msg = $_POST['msg'];

	$to = 'diogojpina@gmail.com';
	$subject = 'Interesse Pesquisa';
	$message = "Nome: $nome\n";
	$message .= "Empresa: $empresa\n";
	$message .= "E-mail: $email\n";
	$message .= "Telefone: $fone\n";
	$message .= "Mensagem: $msg\n\n";

	$fp = fopen('contact.log', 'w');
	fwrite($fp, $message);
	fclose($fp);

	mail($to, $subject, $message);

}
?>
<!--
		<section class="download" id="download">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center wp4">
						<h1>Seen Enough?</h1>
						<a href="http://tympanus.net/codrops/?p=22554" class="download-btn">Download! <i class="fa fa-download"></i></a>
					</div>
				</div>
			</div>
		</section>
-->
		<section class="contact" id="contact">
			<div class="container">
				<div class="row">
                    <div class="col-md-2"></div>
					<div class="col-md-8 text-center wp4">
						<h1>Participe do Projeto de Pesquisa</h1>
<form method="post" action="#contact">
<div class="form-group">
<label for="nome">Nome:</label>
<br />
<input type="text" id="nome" name="nome" placeholder="Nome" class="form-control"/>
<br />
<label for="empresa">Nome da Empresa/Grupo:</label>
<br />
<input type="text" id="empresa" name="empresa" placeholder="Empresa/Grupo" class="form-control"/>
<br />
<label for="email">E-mail:</label>
<br />
<input type="email" id="email" name="email" placeholder="E-mail" class="form-control"/>
<br />
<label for="fone">Telefone:</label>
<br />
<input type="fone" id="fone" name="fone" placeholder="(XX) XXXX-XXXX" class="form-control"/>
<br />
<label for="msg">Mensagem:</label>
<br />
<textarea id="msg" name="msg" placeholder="" class="form-control" rows="5"></textarea>
<br />
<br />
<input type="submit" value="Participar" class="btn btn-default btn-lg" />
</div>
</form>						
					</div>
                    <div class="col-md-2"></div>
				</div>
			</div>
		</section>
