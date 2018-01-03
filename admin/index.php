<?php
?>
	<?php
		unset($_SESSION['usuarioId'],			
		      $_SESSION['usuarioNome'], 		
		      $_SESSION['usuarioNivelAcesso'], 
		      $_SESSION['usuarioLogin'], 		
		      $_SESSION['usuarioSenha']);
	?>
    <div class="container module">		
      <form class="form-signin" method="POST" action="<?=principal?>login">
        <h2 class="form-signin-heading text-center">Área para TimeOut</h2>
        <label for="inputEmail" class="sr-only">Usuário</label>
		
        <input type="text" name="usuario" class="form-control" placeholder="Digitar o Usuário" required autofocus><br />
		
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha" class="form-control" placeholder="Digite a Senha" required >
          <input type="hidden" name="login" id="login">
        <button class="btn btn-lg btn-danger btn-block btn-quadrado" type="submit">Acessar</button>
      </form>
		<p class="text-center" style="font-size: 18px;">
			<?php
				if(isset($_SESSION['loginErro'])){
					echo $_SESSION['loginErro'];
					unset($_SESSION['loginErro']);
				}
			?>
		</p>
    </div> <!-- /container -->