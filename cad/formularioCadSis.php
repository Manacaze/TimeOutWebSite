
<div class="container module-medium home-full-height" id="cadastro">









    <form class="form-horizontal" method="post" action="cadastro.php" enctype='multipart/form-data'>

        <section id="admin"><h2>Cadastro Para administração do Sistema</h2>
                <div class="row">
                    <label for="nome">Selecionar Foto</label>
                    <div class="col-md-2">
                        <a href="#" class="thumbnail">
                          <img src="fotos/padrao.jpg" height="190" width="150" id="foto-cliente">
                        </a>
                    </div>
                    <input type="file" name="foto" id="foto" >
                </div>
            <div class="form-group">
                <label for="nome" class="col-md-2 col-form-label">Nome Completo</label>
                <div class="col-md-8">
                    <input class="form-control" type="text" placeholder="nome" id="example-text-input" name="nome">
                </div>
            </div>



            <div class="form-group">
                <label for="login" class="col-md-2 col-form-label">Nome de Usuario</label>
                <div class="col-md-8">
                    <input class="form-control" type="text"  name="login">
                </div>
            </div>
        
            <div class="form-group">
            <label for="email" class="col-md-2 col-form-label">Email</label>
                <div class="col-md-8">
                    <input class="form-control" type="email" placeholder="email" name="email">
                </div>
            </div>



            <div class="form-group">
                <label for="senha" class="col-md-2 col-form-label">Senha</label>
                <div class="col-md-8">
                    <input class="form-control" type="password" name="senha">
                </div>
            </div>
            

        </section><!--Fim de Section Responsavel form-->




        <input type="hidden" name="acao" value="incluir"/>
        <div class='from-group'><br>
           <button class="btn btn-primary">Enviar</button> <!--type="submit" class="btn btn-primary">Enviar</button>-->
       </div>
    </form>
</div>