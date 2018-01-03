</main>
        <footer class="footer navbar-fixed-bottom bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <p class="copyright font-alt">&copy; 2017&nbsp;<a href="index.html">Nélzio Sitoe</a> All Rights Reserved</p>
              </div>
              <div class="col-sm-6">
                <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
      <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDK2Axt8xiFYMBMDwwG1XzBQvEbYpzCvFU"></script>
    
    <!--======================================JavaScripts=================================-->
    <!--===================Bootstrap=================================-->
    <script src="../_cssEjs/bootstrap-3.3.7-dist/jquery-3.2.1.js"></script>
    <script src="../_cssEjs/bootstrap-3.3.7-dist/js/bootstrap.js"></script>  
    <!--=========../_cssEjs/=========================JavaScript de Outros Tamplaters=========================-->
    <script src="../_cssEjs/assets/js/main.js"></script>
    <script src="js/custom.js"></script>
    <!--===================================Google Map====================================-->
    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDK2Axt8xiFYMBMDwwG1XzBQvEbYpzCvFU"></script>

    <script>
    $("#pai").hide(0);
$("#mae").hide(0);
$("#crianca").hide(0);
$("#dificiencia").hide(0);

      $(document).ready(function(){
                $(".btnresponsavel").click(function(event){
                    event.preventDefault();
                    $("#crianca").hide("slow");
                    $("#responsavel").hide("slow");
                    $("#mae").hide("slow");
                    $("#pai").show("slow");

                });

                $(".btnpai").click(function(event){
                    event.preventDefault();
                    $("#crianca").hide("slow");
                    $("#pai").hide("slow");
                    $("#responsavel").hide("slow");
                    $("#mae").show("slow");
                    
                });

                $(".btnmae").click(function(event){
                    event.preventDefault();
                    $("#pai").hide("slow");
                    $("#mae").hide("slow");
                    $("#responsavel").hide("slow");
                    $("#crianca").show("slow");
                    
                });



                $(".btncrianca").click(function(event){
                    event.preventDefault();
                    $("#pai").hide("slow");
                    $("#mae").hide("slow");
                    $("#crianca").hide("slow");
                    $("#responsavel").show("slow");
                    
                });
/*
Funcoes para fazer retroceder para section anterion
 */

                $(".btnvoltarR").click(function(event){
                    event.preventDefault();
                    $("#pai").hide("slow");
                    $("#mae").hide("slow");
                    $("#crianca").hide("slow");
                    $("#responsavel").show("slow");
                    
                });

                $(".btnvoltarP").click(function(event){
                    event.preventDefault();
                    $("#responsavel").hide("slow");
                    $("#mae").hide("slow");
                    $("#crianca").hide("slow");
                    $("#pai").show("slow");
                    
                });

                $(".btnvoltarM").click(function(event){
                    event.preventDefault();
                    $("#pai").hide("slow");
                    $("#responsavel").hide("slow");
                    $("#crianca").hide("slow");
                    $("#mae").show("slow");
                    
                });

                $(".btnDificienciaS").click(function(event){
                    event.preventDefault();
                    $("#dificiencia").show("slow");
                    
                });
                $(".btnDificienciaN").click(function(event){
                    event.preventDefault();
                    $("#dificiencia").hide("slow");
                    
                });


             });

       $(document).ready(function () {

   $("#btnDificienciaS").click(function () {  
      if( $("#btnDificienciaS").is(':checked') ){
            /*alert('Field is checked - language:english'); 
            alert('Campo esta selecionado - language:pt-br'); */
            $("#dificiencia").show("slow");
            
      } else {
            /*alert('Field isn t checked! language: english');
            alert('Campo não selecionado! language: pt-br');*/
            $("#dificiencia").hide("slow");
      }
  
   });

   $("#btnDificienciaN").click(function () {  
      if( $("#btnDificienciaN").is(':checked') ){
            /*alert('Field is checked - language:english'); 
            alert('Campo esta selecionado - language:pt-br'); */
            $("#dificiencia").hide("slow");
             $("input[name='dificiencia']").val('');
      } else {
            /*alert('Field isn t checked! language: english');
            alert('Campo não selecionado! language: pt-br');*/
            $("#dificiencia").hide("slow");
      }
  
   });

 
});

       var inputDataNascimento = document.getElementById("data_nascimentoRes");
if (inputDataNascimento != null && inputDataNascimento.addEventListener) {                   
    inputDataNascimento.addEventListener("keypress", function(){mascaraTexto(this, '##/##/####')});
} else if (inputDataNascimento != null && inputDataNascimento.attachEvent) {                  
    inputDataNascimento.attachEvent("onkeypress", function(){mascaraTexto(this, '##/##/####')});
}

      var inputDataNascimentoP = document.getElementById("data_nascimentoP");
      if (inputDataNascimentoP != null && inputDataNascimentoP.addEventListener) {                   
          inputDataNascimentoP.addEventListener("keypress", function(){mascaraTexto(this, '##/##/####')});
} else if (inputDataNascimentoP != null && inputDataNascimentoP.attachEvent) {                  
    inputDataNascimento.attachEvent("onkeypress", function(){mascaraTexto(this, '##/##/####')});
}

       var inputDataNascimentoM = document.getElementById("data_nascimentoM");
if (inputDataNascimentoM != null && inputDataNascimentoM.addEventListener) {                   
    inputDataNascimentoM.addEventListener("keypress", function(){mascaraTexto(this, '##/##/####')});
} else if (inputDataNascimentoM != null && inputDataNascimentoM.attachEvent) {                  
    inputDataNascimentoM.attachEvent("onkeypress", function(){mascaraTexto(this, '##/##/####')});
}

       var inputDataNascimentoC = document.getElementById("data_nascimentoC");
if (inputDataNascimentoC != null && inputDataNascimentoC.addEventListener) {                   
    inputDataNascimentoC.addEventListener("keypress", function(){mascaraTexto(this, '##/##/####')});
} else if (inputDataNascimentoC != null && inputDataNascimentoC.attachEvent) {                  
    inputDataNascimentoC.attachEvent("onkeypress", function(){mascaraTexto(this, '##/##/####')});
}
    </script>


  </body>
</html>