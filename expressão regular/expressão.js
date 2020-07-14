    $(function(){

        abrirjanela();
        fechajanela();     
       
       //função para abri formulario

        function abrirjanela(){
            $('.btn').click(function(e){
                e.stopPropagation();
                $('.form').fadeIn();
            });
        };

        //função para fechar formulario 

        function fechajanela(){
             var el =  $('body,.fechar')

              el.click(function(){
                $('.form').fadeOut();
            });

            $('.form').click(function(e){
                e.stopPropagation();
            });
        };

          //funçoes para preencher campo

          $('#form').submit(function(e){
            e.stopPropagation();
            var nome = $('input[name=nome]').val();
            var telefone = $('input[name=telefone]').val();
            var email = $('input[name=email]').val();

             
            if(verificacampo(nome) == false){
                Invalido($('input[name=nome]'));

            }else if(verificatelefone(telefone) == false){
              Invalido($('input[name=telefone]'));
            }
            else if(verificaEmail(email) == false){
               Invalido($('input[name=email]')); 
            }
            else{
              alert("Enviado com sucesso !")
            }
           return false;

          });


          //funçoes para estilizar campo Invalido

         function Invalido(el){
          el.css('color','red');
          el.css('border',' 2px solid red');
          el.val('condição Invalida!');
         };

         function resetarcampoInvalido(el){
          el.css('color','black');
          el.css('border',' 2px solid #ccc');
          el.val('');
         }

         $('input[type=text]').focus(function(){
          resetarcampoInvalido($(this));
         });

          $('input[type=email]').focus(function(){
          resetarcampoInvalido($(this));
         });


          //funçoes para verificar campo 

          function verificacampo(nome){
            if(nome == ''){
              return false;
            }
             var amout = nome.split(" ").length;
            var splitstr = nome.split(" ");
            if (amout >= 2){
              for (var i = 0; i < amout; i++) {
                  if(splitstr[i].match(/^[A-Z]{1}[a-z]{1,}$/)){
                      
                  }else{
                    return false; 
                  }
              } 
           }else{
                return false;
              }
          };

          function verificatelefone(telefone){
            if(telefone == ''){
              return false;
            }
            
           if(telefone.match(/^\([0-9]{2}\)[0-9]{5}-[0-9]{4}$/) == null){
              return false;
           };
          };   

          function verificaEmail(email){
            if(email == ''){
              return false;
            }
              if(email.match(/^([a-z0-9-_.]{1,})+@+([a-z.]{1,})$/) == null) {
                return false;
              };
          
          };
          
      });          
        
          
        
$(function(){
  
  var indiceAtual = 0;
  var indiceMaximo = $('.slider img').length;




function inistSlider(){
  for(var i = 0; i < indiceMaximo; i++){
    if (i == 0){
    $('.buttom').append('<span style="background:black;"></span>');
    }else{
      $('.buttom').append('<span></span>');
    }
  }

   $('.slider img').eq(0).fadeIn();
  setInterval(function(){
    alterarSlider();
  },5000);
}
  
  function cliqueSlider(){
    $('.buttom span').click(function(){
     $('.slider img').eq(indiceAtual).stop().fadeOut(1000);
    indiceAtual = $(this).index();
     $('.slider img').eq(indiceAtual).stop().fadeIn(1000);
    $('.buttom span').css('background-color','grey');
    $(this).css('background-color','black');  
    });
  }

  function alterarSlider(){
     $('.slider img').eq(indiceAtual).stop().fadeOut(3000);
    indiceAtual+=1;
    if(indiceAtual == indiceMaximo)
      indiceAtual = 0;
      $('.buttom span').css('background-color','grey');
      $('.buttom span').eq(indiceAtual).css('background-color','black');
       $('.slider img').eq(indiceAtual).stop().fadeIn(3000);
  }

    inistSlider();
    cliqueSlider();
    
});



