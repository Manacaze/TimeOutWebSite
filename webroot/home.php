<main>
	<div class='modal fade' id='modalEmail'>
		<div class='modal-dialog'>
			<div class='modal-content'>
				<div class='modal-header'>
					<button type='button' class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
					<h4 class='modal-title'>TimeOut</h4>
				</div>
				<div class='modal-body' style="background-color: rgba(205,205,205,.5); text-align: center;">
					<h2>Mensagem Enviada</h2>
					<p style="font-size: 14px;">Obrigado por caontactar-nos</p>
				</div>
				<div class='modal-footer'>
					<a href='#' type='button' class='btn btn-default' data-dismiss='modal'>OK</a>
				</div>
			</div>
		</div>
	</div>

	<!--modal error-->
	<div class='modal fade' id='modalEmailError'>
		<div class='modal-dialog'>
			<div class='modal-content'>
				<div class='modal-header'>
					<button type='button' class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>
					<h4 class='modal-title'>TimeOut</h4>
				</div>
				<div class='modal-body' style="background-color: rgba(205,205,205,.5); text-align: center;">
					<h2>Mensagem Nao enviada</h2>
					<p style="font-size: 14px;">Preenha corectamente os campos</p>
				</div>
				<div class='modal-footer'>
					<a href='#' type='button' class='btn btn-default' data-dismiss='modal'>OK</a>
				</div>
			</div>
		</div>
	</div>
	<!--/modal error-->
	<section class="full-height" id="top">
		<div class="container-fluid">
			<div class="">
				
			</div>
	</div>
	</section>
	<section id="service">
		<div class="container">
			<div class="row">
					<h2>Our Service</h2>
			</div>
			<div class="col-">
			<div class="row">
				<div class="col-md-6 service"><img  src="static/img/Components/Images/12-Courses-for-Starting-Your-Web-Development-Journey.jpg" alt=""></div>
				<div class="col-md-6 service"><img  src="static/img/Components/Images/macbook-2617705_1920-1030x687.jpg" alt=""></div>
			</div>
			 <div class="row">
			 <div class="service col-md-6"><img  src="static/img/Components/Images/p25.jpg" alt=""></div>
			 <div class="service col-md-6"><img  src="static/img/Components/Images/web-design-development-training-courses-jaipur.jpg" alt=""></div>

			</div>
		</div>
		</div>
	</section>

	<!--tem-->
	<section id="team">
		<div class="container">
			<div class="row">
				<div class="col-md-2 team"><img src="static/img/AvatarNelzio.png" alt="">
					<div class="name">
						<span>Sheila Ferrao</span>
					</div>
					<div class="description">
						<span>CEO </span>
					</div>
				</div>
				<div class="col-md-2 team"><img src="static/img/AvatarNelzio.png" alt="">
					<div class="name">
						<span>Ricardo Shiziane</span>
					</div>
					<div class="description">
						<span>Maneger </span>
					</div>
				</div>
				<div class="col-md-2 team"><img src="static/img/AvatarNelzio.png" alt="">
					<div class="name">
						<span>Edson Ventura</span>
					</div>
					<div class="description">
						<span>Software Enginei </span>
					</div>
				</div>
				<div class="col-md-2 team"><img src="static/img/AvatarNelzio.png" alt="">
					<div class="name">
						<span>Ivo Matavel</span>
					</div>
					<div class="description">
						<span>Designer </span>
					</div>
				</div>
				<div class="col-md-2 team"><img src="static/img/AvatarNelzio.png" alt="">
					<div class="name">
						<span>Andre Manacave</span>
					</div>
					<div class="description">
						<span>Developer </span>
					</div>
				</div>
				<div class="col-md-2 team" id="nelzio"><img src="static/img/team/Nel.png" alt="">
					<div class="name">
						<span>Nelzio Sitoe</span>
					</div>
					<div class="description">
						<span>Progect Maneger </span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--contact-->
	<section id="contact">
		<div class="row">
			<div class="col-md-6">
				<h1>Contact us</h1>
				<div class="col-md-offset-1">
				<form action="email/email.php" method="POST">
					<div class="form-group">
                    <label class="sr-only" for="name">Nome</label>
                    <input class="form-control" type="text" id="name" name="name" placeholder="Nome*" required="required" data-validation-required-message="Por favor, introduza o seu Nome."/>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">

                    <label class="sr-only" for="email">Email</label>
                    <div class="input-group">
        <span class="input-group-addon">@</span>
        
      
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email*" required="required" data-validation-required-message="Por favor, introduza o seu email."/>
                    </div>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" rows="5" id="message" name="message" placeholder="Mensagem*" required="required" data-validation-required-message="Por favor, escreva a sua mensagem"></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="text-center">
                    <button class="btn btn-block" id="" type="submit" style="background-color: red;">Enviar</button>
                  </div>
				</form>
				</div>
			</div>
			<div class="col-md-6">
				<h1>About us</h1>
				<!--<button class="btn btn-block" id="btnEmail" type="" style="background-color: red;" data-toggle="modal" data-target="#modalEmail">Enviar</button>-->
			</div>
		</div>
	</section>
	
</main>
