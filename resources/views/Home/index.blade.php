@extends('shared.base')

@section('content')

<header class="header-lp">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-3">
                <a href="/"><img src="https://assets-site.dialhost.com.br/build/imgs/marca-dialhost.png" /></a>
            </div>
            <div class="col-md-9 col-xs-9">
                <ul class="cta-button">
                    <li><a href="#" id="planos">Planos</a></li>
                    <li><a href="#" id="experimentar">Experimentar</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<section class="cta-lp">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-12">
                <h1>Construa o seu próprio site!</h1>
                <ul class="gatilhos">
                    <li>
                        <i class="ion-checkmark-round"></i> Mais de 190 temas para usar.
                    </li>
                    <li>
                        <i class="ion-checkmark-round"></i> Certificado de SSL Grátis.
                    </li>
                    <li>
                        <i class="ion-checkmark-round"></i> Suporte 24 horas.
                    </li>
                </ul>
                <h3>Experimente agora nossa ferramenta!</h3>
            </div>
            <div class="col-md-4 col-xs-12">
               <div class="box-form">
               <form action="" name="form-lead" method="post">
                        {{ csrf_field() }}
                        <h2>Cadastre-se para testar</h2>
                        <span>É rápido e fácil, você vai amar!</span>
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input name="nome" type="text" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <label for="nome">E-mail</label>
                            <input name="email" type="email" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <div class="col-md-6">
                            <label for="nome">Telefone</label>
                            <input name="telefone" type="tel" data-mask="(00) 0000-0000" class="form-control" required />
                 
                            </div>
                            <div class="col-md-6">
                            <label for="nome">Data de Nascimento</label>
                            <input name="nascimento" data-mask="00/00/0000" type="text" class="form-control" required />
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <div class="col-md-6">
                            <label for="nome">CEP</label>
                            <input name="cep" type="text" data-mask="00000-000" class="form-control" required />
                 
                            </div>
                            <div class="col-md-6">
                            <label for="nome">Número</label>
                            <input name="numero" type="text" class="form-control" required />
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit">Quero experimentar agora!</button>
                            <strong><i class="ion-locked"></i> Também odiamos SPAM.</strong>
                        </div>
                    </form>
               </div>
            </div>
        </div>
    </div>
</section>
<section class="destaque destaque-1">
    <div class="container">
        <h2>Por que seu negócio precisa de um site?</h2>
        <div class="row">
            <div class="col-md-4">
                <i class="ion-search"></i>
                <h3>Para ser encontrado.</h3>
                <p>
                Ter um site é a forma mais simples de ser
encontrado hoje na internet. O principal canal de
busca que uma pessoa usa quando está
curiosa sobre qualquer assunto é o Google.
E se essa pessoa estiver curiosa sobre
seu nicho ou sua empresa, não será diferente.
                </p>
            </div>
            <div class="col-md-4">
            <i class="ion-heart"></i>
            <h3>Autoridade no mercado.</h3>
            <p>
            Com um site, sua empresa possui muito mais artifícios
para promover o seu produto. Além do mais, por meio
da criação de conteúdo você consegue provar para a sua
persona que entende do assunto e que tem capacidade
técnica para ser a solução dos problemas que ela enfrenta.
É um diferencial bastante eficiente nessa tomada de decisão.
            </p>
            </div>
            <div class="col-md-4">
            <i class="ion-ios-cart"></i>
            <h3>Faça vendas.</h3>
            </div>
        </div>
    </div>
</section>
<section class="sc-planos">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <ul class="planos">
                    <li>
                        <div class="box-plano">
                            <div class="header-plano">
                                <h3>Criador I</h3>
                            </div>
                            <div class="content-plano">
                                <h2>R$ 7<b>,90</b></h2>
                                <span>Total anual: R$ 94,80</span>
                                <strong><i class="ion-archive"></i> 500MB de espaço para o site</strong>
                                <strong><i class="ion-stats-bars"></i> Tráfego transparente</strong>
                                <strong><i class="ion-at"></i> 1 conta de e-mail (15GB/cada)</strong>
                            </div>
                            <div class="valor-plano">
                            <a href="#">Contratar</a>
                            </div>
                        </div>
                    </li>
                    <li>
                    <div class="box-plano">
                    <div class="header-plano">
                        <h3>Criador II</h3>
                    </div>
                    <div class="content-plano">
                    <h2>R$ 14<b>,90</b></h2>
                    <span>Total Anual: R$ 178,80</span>
                                <strong><i class="ion-archive"></i> 1GB de espaço para o site</strong>
                                <strong><i class="ion-stats-bars"></i> Tráfego transparente</strong>
                                <strong><i class="ion-at"></i> 10 contas de e-mail (15GB/cada)</strong>
                    </div>
                    <div class="valor-plano">
                        <a href="#">Contratar</a>
                    </div>
                </div>
                    </li>
                </ul>
                <span class="personalizado">Nenhum dos planos te atende? <a href="#" class="cta"> Você precisa de um personalizado.</a></span>
            </div>
        </div>
    </div>
</section>
@endsection()