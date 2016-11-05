<?php /* template name: home */ ?>
<?php get_header(); ?>

<section class="banner">
    <img src="<?php echo get_template_directory_uri() ?>/images/banner.jpg" alt="" class="img-responsive"/>
</section>

<section class="produto">
  <div class="container">
    <h2 class="titulo-section">Produtos</h2>
    <div class="row">
      <div class="col-md-4">
        <p align="center">
          <img src="<?php echo get_template_directory_uri() ?>/images/armario.jpg" alt="" class="img-responsive"/>
        </p>
      </div>
      <div class="col-md-4">
        <p align="center">
          <img src="<?php echo get_template_directory_uri() ?>/images/balcoes_negativo.jpg" alt="" class="img-responsive"/>
        </p>
      </div>
      <div class="col-md-4">
        <p align="center">
          <img src="<?php echo get_template_directory_uri() ?>/images/estante.jpg" alt="" class="img-responsive"/>
        </p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4 col-md-offset-2">
        <p align="center">
          <img src="<?php echo get_template_directory_uri() ?>/images/gondolas.jpg" alt="" class="img-responsive img-produto"/>
        </p>
      </div>
      <div class="col-md-4">
        <p align="center">
          <img src="<?php echo get_template_directory_uri() ?>/images/porta-pallets.jpg" alt="" class="img-responsive img-produto"/>
        </p>
      </div>
    </div>
  </div>
</section>

<section class="sobre">
  <div class="container">
    <h2 class="titulo-section">Sobre</h2>
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <p align="center">
          <img src="<?php echo get_template_directory_uri() ?>/images/sobre_icone.png" alt="" class="img-responsive img-sobre"/>
        </p>
        <p class="texto-sobre">
          Lorem <strong>ipsum dolor</strong> sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation.
        </p>
        <p class="texto-sobre">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <strong>tempor incididunt</strong>
          ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="localizacao">
  <h2 class="titulo-section">localização</h2>
  <div class="endereco">
  </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <p align="center">
            <img src="<?php echo get_template_directory_uri() ?>/images/localizaçao_icone.png" alt="" class="icon-localiza"/>
            <span class="end-home">
               Av. Pedro II,2425, Carlos Prates<br>
              Belo Horizonte / MG
              30710-010, Brasil
            </span>
          </p>
        </div>
        <div class="col-md-4">
          <p align="center">
            <img src="<?php echo get_template_directory_uri() ?>/images/localização_email.png" alt="" class="icon-localiza"/>
            <span class="end-home">Av. Pedro II,2425, Carlos Prates<br>
           Belo Horizonte / MG<br>
           30710-010, Brasil</span>
          </p>
        </div>
        <div class="col-md-4">
          <p align="center">
            <img src="<?php echo get_template_directory_uri() ?>/images/localização_telefone.png" alt="" class="icon-localiza"/>
            <span class="end-home">Av. Pedro II,2425, Carlos Prates<br>
           Belo Horizonte / MG<br>
           30710-010, Brasil</span>
          </p>
        </div>
      </div>
    </div>
</section>

<?php get_footer() ?>
