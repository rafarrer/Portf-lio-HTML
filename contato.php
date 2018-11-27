<!DOCTYPE HTML>
<html>
	<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
		
		<title>Portfólio - Rafael Farrer</title>
		<meta name="author" content="Rafael Farrer">
		<meta name="keywords" content="HTML,CSS,JavaScript">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link rel="javascript" type="text/javascript" href="script.js">
		<link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- FontAwesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Fonte Raleway -->
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119026147-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		
		  gtag('config', 'UA-119026147-1');
		</script>
	</head>
	<body>
		<nav class="menu">
			<a href="index.html"><img id="logo" src="img/logo-rafael-farrer.png" alt="logo rafael farrer"></a>
			<ul class="menu-direito">
				<li><a href="index.html">Portfólio</a></li>
				<li><a href="sobre.html">Sobre</a></li>
				<li class="ativo"><a href="contato.php">Contato</a></li>
				<li class="deletar-mobile"><a href="https://br.linkedin.com/in/rafael-farrer-159093118" target="_blank"><i class="fa fa-linkedin"></i></a></li>
				<li class="deletar-mobile"><a href="https://github.com/rafarrer" target="_blank"><i class="fa fa-github"></i></a></li>
				<li class="ultimo-item-menu deletar-mobile"><a href="contato.php"><i class="fa fa-envelope"></i></a></li>
			</ul>
		</nav> 
		<div class="clear-fix"></div>
			<h1 class="center padding-bottom">Contato</h1>
			<div class="col-sm-6 center force-padding-left coluna-contato top padding-bottom">
				<p><i class="fa icones fa-envelope-o" aria-hidden="true"></i> Email:<br /><span >rafaelfarrer@gmail.com</span></p>
				<p><i class="fa icones fa-linkedin" aria-hidden="true"></i> Linkedin:<br /><a href="https://br.linkedin.com/in/rafael-farrer-159093118" target="_blank">br.linkedin.com/in/rafael-farrer-159093118</a></p>
				<p><i class="fa fa-github"></i> Github:<br /><a class="text-contato" href="https://github.com/rafarrer" target="_blank">github.com/rafarrer</a></p>
			</div>
			<div  class="col-sm-6  force-padding-right top padding-bottom">
				<form id="contact-form" method="post" action="contact.php" role="form">
   				<div class="messages"></div>
				<div class="controls">
        			<div class="row">
            			<div class="col-md-6">
                			<div class="form-group">
                    			<input id="form_name" type="text" name="name" class="form-control" placeholder="Nome" required="required" data-error="Firstname is required.">
                    			<div class="help-block with-errors"></div>
                			</div>
            			</div>
            			<div class="col-md-6">
                			<div class="form-group">
                    			<input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Sobrenome" required="required" data-error="Lastname is required.">
                    			<div class="help-block with-errors"></div>
                			</div>
            			</div>
        			</div>
       				<div class="row">
            			<div class="col-md-6">
                			<div class="form-group">
                    			<input id="form_email" type="email" name="email" class="form-control" placeholder="E-mail" required="required" data-error="Valid email is required.">
                    			<div class="help-block with-errors"></div>
                			</div>
            			</div>
            			<div class="col-md-6">
                			<div class="form-group">
                    			<input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Telefone">
                    			<div class="help-block with-errors"></div>
                			</div>
            			</div>
        			</div>
       				<div class="row">
            			<div class="col-md-12">
                			<div class="form-group">
                    			<textarea id="form_message" name="message" class="form-control" placeholder="Mensagem" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                    			<div class="help-block with-errors"></div>
                			</div>
            			</div>
            			<div class="col-md-12">
                			<input style="float:right;" type="submit" class="btn btn-success btn-send" value="Enviar">
            			</div>
        			</div>
   			</div>
		</form>
	</div>	
	<div class="clear-fix"></div>		
	<footer>
		<p>Desenvolvido por Rafael Farrer</p>
	</footer>
	<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="validator.js"></script>
    <script src="contact.js"></script>
	</body>
</html>