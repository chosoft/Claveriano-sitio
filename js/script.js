//esta parte esta hecha con jquery y seria la parte del menu para que se pueda
//abrir cuando este en un telefono movil
$(document).ready(function(){
    $('#mn').click(function(){
        if($('#lol').css('display') === 'none' ){
            $('#lol').css('display','flex')
        }
        else{
            $('#lol').css('display','none')

        }
    })

})