<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <title>Bikcraft - Conheça as linhas Passeio, Retrô e Esporte</title>
    <meta
      name="description"
      content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Retrô e Esporte."
    />

    <meta property="og:type" content="website" />
    <meta
      property="og:title"
      content="Bikcraft - Conheça as linhas Passeio, Retrô e Esporte"
    />
    <meta
      property="og:description"
      content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Retrô e Esporte."
    />
    <meta property="og:url" content="http://bikcraft.com/produtos.html" />
    <meta property="og:image" content="http://bikcraft.com/img/og-image.png" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="shortcut icon" href="favicon.ico" />

    <link rel="stylesheet" href="css/style.css" />
    <script src="js/libs/modernizr.custom.45655.js"></script>
  </head>
  <body>
    <header class="header">
      <div class="container">
        <a href="index.html" class="grid-4">
          <img src="img/bikcraft.png" alt="Bikcraft" />
        </a>
        <nav class="grid-12 header_menu">
          <ul>
            <li><a href="sobre.html">Sobre</a></li>
            <li><a href="produtos.html" class="menu_ativo">Produtos</a></li>
            <li><a href="portfolio.html">Portfólio</a></li>
            <li><a href="contato.html">Contato</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section class="introducao-interna interna_produtos">
      <div class="container">
        <h1>Produtos</h1>
        <p>conheça todos os nossos produtos</p>
      </div>
    </section>

    <section class="container produto_item animar-interno">
      <div class="grid-11">
        <img src="img/produtos/bikcraft-passeio-1.jpg" alt="Bikcraft Passeio" />
        <h2>Passeio</h2>
      </div>
      <div class="grid-5 produto_icone">
        <img src="img/produtos/passeio.png" alt="Icone Passeio" />
      </div>
      <div class="grid-8">
        <img src="img/produtos/bikcraft-passeio-2.jpg" alt="Bikcraft Passeio" />
      </div>
      <div class="grid-8 produto_info">
        <p>
          Muito melhor do que passear pela orla a vidros fechados. A Bikcraft
          Passeio é uma bicicleta que une conforto e praticidade para o seu dia
          a dia. Você nunca mais vai querer saber de outra.
        </p>
        <ul>
          <li>Conforto</li>
          <li>Praticidade</li>
          <li>Design</li>
          <li>Versatilidade</li>
        </ul>
      </div>
    </section>

    <section class="container produto_item">
      <div class="grid-11">
        <img src="img/produtos/bikcraft-esporte-1.jpg" alt="Bikcraft Esporte" />
        <h2>Esporte</h2>
      </div>
      <div class="grid-5 produto_icone">
        <img src="img/produtos/esporte.png" alt="Icone Esporte" />
      </div>
      <div class="grid-8">
        <img src="img/produtos/bikcraft-esporte-2.jpg" alt="Bikcraft Esporte" />
      </div>
      <div class="grid-8 produto_info">
        <p>
          Mais rápida do que Forrest Gump, ninguém vai pegar você. A Bikcraft
          Esporte é uma bicicleta desenhada para a máxima performance. O seu
          desenpenho supera qualquer uma da categoria.
        </p>
        <ul>
          <li>Precisão</li>
          <li>Velocidade</li>
          <li>Design</li>
          <li>Versatilidade</li>
        </ul>
      </div>
    </section>

    <section class="container produto_item">
      <div class="grid-11">
        <img src="img/produtos/bikcraft-retro-1.jpg" alt="Bikcraft Retrô" />
        <h2>Retrô</h2>
      </div>
      <div class="grid-5 produto_icone">
        <img src="img/produtos/retro.png" alt="Icone Retrô" />
      </div>
      <div class="grid-8">
        <img src="img/produtos/bikcraft-retro-2.jpg" alt="Bikcraft Retrô" />
      </div>
      <div class="grid-8 produto_info">
        <p>
          O passado volta para lembrarmos o que devemos fazer no futuro. A
          Bikcraft Retrô é uma bicicleta estiloza, feita para você que gosta do
          clássico, mas que não abre mão do conforto.
        </p>
        <ul>
          <li>Conforto</li>
          <li>Velocidade</li>
          <li>Design</li>
          <li>Versatilidade</li>
        </ul>
      </div>
    </section>

    <section class="orcamento">
      <div class="container">
        <h2 class="subtitulo">Orçamento</h2>
        <form
          action="enviar.php"
          method="post"
          name="form"
          class="formphp form grid-8"
        >
          <label for="nome">Nome</label>
          <input id="nome" name="nome" type="text" />
          <label for="email">E-mail</label>
          <input id="email" name="email" type="text" />
          <label for="telefone">Telefone</label>
          <input id="telefone" name="telefone" type="text" />

          <label class="nao-aparece"
            >Se você não é um robô, deixe em branco.</label
          >
          <input type="text" class="nao-aparece" name="leaveblank" />
          <label class="nao-aparece"
            >Se você não é um robô, não mude este campo.</label
          >
          <input
            type="text"
            class="nao-aparece"
            name="dontchange"
            value="http://"
          />

          <label for="mensagem">Especificações</label>
          <textarea name="mensagem" id="mensagem"></textarea>

          <button id="enviar" name="enviar" type="submit" class="btn">
            Enviar
          </button>
        </form>
        <div class="orcamento_dados grid-8">
          <h3>Dados</h3>
          <span>+55 21 9999-9999</span>
          <span>orcamento@bikcraft.com</span>
          <h3>Monte a sua Bikcraft</h3>
          <p>Escolha as especificações:</p>
          <ul>
            <li>- Cores</li>
            <li>- Estilo</li>
            <li>- Medidas</li>
            <li>- Acessórios</li>
            <li>- E Outros</li>
          </ul>
        </div>
      </div>
    </section>

    <div class="quebra">
      <blockquote class="quote-externo container">
        <p>
          “o verdadeiro segredo da felicidade está em ter um genuíno interesse
          por todos os detalhes da vida cotidiana.”
        </p>
        <cite>WILLIAM MORRIS</cite>
      </blockquote>
    </div>

    <footer>
      <div class="footer">
        <div class="container">
          <div class="grid-8 footer_historia">
            <h3>Nossa História</h3>
            <p>
              Quando iniciamos a Bikcraft queriamos apenas um produto que
              adoraríamos utilizar. Eramos apaixonados por pedalar e também por
              fazer as coisas com as nossas próprias mãos. Assim surgiu um sonho
              na garagem da nossa casa.
            </p>
          </div>

          <div class="grid-4 footer_contato">
            <h3>Contato</h3>
            <ul>
              <li>- 21 9999-9999</li>
              <li>- contato@bikcraft.com</li>
              <li>- Botafago - RJ</li>
            </ul>
          </div>

          <div class="grid-4 footer_redes">
            <h3>Contato</h3>
            <ul>
              <li>
                <a href="http://facebook.com" target="_blank"
                  ><img
                    src="img/redes-sociais/facebook.png"
                    alt="Facebook Bikcraft"
                /></a>
              </li>
              <li>
                <a href="http://instagram.com" target="_blank"
                  ><img
                    src="img/redes-sociais/instagram.png"
                    alt="Instagram Bikcraft"
                /></a>
              </li>
              <li>
                <a href="http://twitter.com" target="_blank"
                  ><img
                    src="img/redes-sociais/twitter.png"
                    alt="Twitter Bikcraft"
                /></a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="copy">
        <div class="container">
          <p class="grid-16">Bikcraft 2015 - Alguns direitos reservados.</p>
        </div>
      </div>
    </footer>

    <!-- JavaScript -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
      window.jQuery ||
        document.write('<script src="js/libs/jquery-1.11.2.min.js"><\/script>');
    </script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <!-- JavaScript -->

    <script>
      (function (i, s, o, g, r, a, m) {
        i["GoogleAnalyticsObject"] = r;
        (i[r] =
          i[r] ||
          function () {
            (i[r].q = i[r].q || []).push(arguments);
          }),
          (i[r].l = 1 * new Date());
        (a = s.createElement(o)), (m = s.getElementsByTagName(o)[0]);
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m);
      })(
        window,
        document,
        "script",
        "//www.google-analytics.com/analytics.js",
        "ga"
      );

      ga("create", "UA-60088262-1", "auto");
      ga("send", "pageview");
    </script>
  </body>
</html>
