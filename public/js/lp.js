$(document).ready(function(){
    //Efeito navegação
    var w = $(window),
        h = $('.header-lp'),
        b = $('body');
        $(w).on('scroll', function(){
           if(w.scrollTop() > h.height()){
               h.addClass('white-nav');
           }else{
               h.removeClass('white-nav');
           }
        });

        var frm = $('form[name="form-lead"]');
        frm.submit(function(){
            $.ajax({
                url: 'leads',
                type: 'POST',
                dataType: 'JSON',
                data:frm.serialize(),
                beforeSend: function(){
                    frm.find('button').attr('disabled', 'disabled').text('Enviando sua solicitação...');
                },
                success: function(data){
                    frm.find('button').removeAttr('disabled').text('Quero experimentar agora!');
                    if(data.status == 1){
                        localStorage.setItem('lead', JSON.stringify(data.data));
                        var l = localStorage.getItem('lead');
                        $(location).attr('href', 'obrigado');
                    }else{
                        frm.find('button').attr('disabled', 'disabled').text('Falha ao enviar solicitação');
                    }
                },
                error: function(data){
                    console.log(data);
                }
            });
            return false;
        });

        $('#planos').click(function(){
            $("html, body").animate({scrollTop: $('.sc-planos').offset().top -40 }, 1000);
            return false;
        });
        $('#experimentar').click(function(){
            $("html, body").animate({scrollTop: $('body').offset().top }, 1000);
            return false;
        });
});