@extends('shared.base')

@section('content')
<section class="obrigado">
    <div class="container">
        <div class="box-obrigado">
        <h1><span id="nome"></span>, obrigado pelo contato!</h1>
        <div class="dados">
        <p>Recebemos os seus dados iniciais:</p>
        <strong>E-mail:</strong>
        <span id="email"></span>
        <strong>Telefone:</strong>
        <span id="telefone"></span>
        <strong>Endereço:</strong>
        <span id="end"></span>
        <strong>Bairro:</strong>
        <span id="bairro"></span>
        <strong>Cidade:</strong>
        <span id="cidade"></span>
        <p style="display: block; text-align: center;">Aguarde, acabamos de enviar algumas instruções no seu e-mail.</p>
        </div>
        </div>
    </div>
</section>
<script type="text/javascript">
$(window).on('load', function(){
    var lead = localStorage.getItem('lead');
    if(lead){
        var dados = JSON.parse(lead);
        $('#nome').html(dados.nome);
        $('#email').html(dados.email);
        $('#telefone').html(dados.telefone);
        $('#end').html(dados.endereco + ' ' + dados.numero);
        $('#bairro').html(dados.bairro);
        $('#cidade').html(dados.cidade + '/' + dados.uf);
    }else{
        $('.dados').hide();
    }
});
</script>
@endsection()