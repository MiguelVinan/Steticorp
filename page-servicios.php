<?php get_header(); ?>

<?php include(locate_template('layouts/cover.php')) ?>
<section class="allServices u-paddingSection container-fluid">
  <div class="row">
    <a href="#"><article class="corporalCare col-xs-12 col-sm-4" style="background-image:url('<?= get_template_directory_uri() . "/assets/images/wellness-massage.jpg"?>');">
        <h3 class="text-center">Tratamientos Corporales</h3>
      </article>
    </a>
    <a href="#">
      <article class="skinCare col-xs-12 col-sm-4" style="background-image:url('<?= get_template_directory_uri() . "/assets/images/wellness-skinCare.jpg"?>');">
        <h3 class="text-center">Tratamientos faciales</h3>
      </article>
    </a>
    <a href="#">      
      <article class="servicesAdded col-xs-12 col-sm-4" style="background-image:url('<?= get_template_directory_uri() . "/assets/images/spa-rocks.jpg"?>');">
        <h3 class="text-center">Agregados</h3>
      </article>    
    </a>
  </div>
</section>

<section class="recomendServices u-paddingSection container">
  <div class="row">
    <h4 class="text-center" style="margin-bottom:30px;">Te recomendanos</h4>
  </div>

  <div class="row">
    <div class="">    
      <a href="#" data-toggle="modal" data-target="#myModal">
        <article class="singleService col-xs-12 col-sm-4">
          <figure class="imgService" style="background-image:url('<?= get_template_directory_uri() . "/assets/images/spa-rocks.jpg"?>');">
          </figure>
          <div class="infoService">
            <h4 class="text-center">Ultracavitación</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, enim sunt unde, recusandae, corporis iure quo quibusdam voluptatibus laborum numquam eos magni veritatis harum illum, non voluptatem blanditiis aliquam molestiae.</p>
            <i class="icon-info3 text-right"></i>
          </div>
        </article>
      </a>

      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="icon-cross"></i></span></button>
              <h4 class="modal-title">Ultracavitación</h4>
            </div>

            <div class="modal-body">
              <div class="row">
                <article class="col-xs-12 col-md-6">
                  <h4>¿Que és ultracavitación?</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non sapiente, inventore possimus iste accusantium unde? Natus velit repudiandae doloremque, ipsum nisi, minus dolorum nam reiciendis nihil similique eius repellat voluptate?</p>
                </article>
                <article class="col-xs-12 col-md-6">
                  <h4>¿Para qué sirve?</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non sapiente, inventore possimus iste accusantium unde? Natus velit repudiandae doloremque, ipsum nisi, minus dolorum nam reiciendis nihil similique eius repellat voluptate?</p>
                </article>
                <article class="col-xs-12 col-md-6">
                  <h4>¿Que resultados tendré y en que tiempo?</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non sapiente, inventore possimus iste accusantium unde? Natus velit repudiandae doloremque, ipsum nisi, minus dolorum nam reiciendis nihil similique eius repellat voluptate?</p>
                </article>
                <article class="col-xs-12 col-md-6">
                  <h4>¿Cuantas sesiones aproximadamente necesito para ver resultados?</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non sapiente, inventore possimus iste accusantium unde? Natus velit repudiandae doloremque, ipsum nisi, minus dolorum nam reiciendis nihil similique eius repellat voluptate?</p>
                </article>
              </div>

              <div class="row modal-footer">
                <small>¿Tienes alguna inquietud o necesitas más información?</small>
                <a href="<?php bloginfo('url') ?>" class="btn-contact" role="button">
                  <span>Contáctanos</span><i class="icon-heart"></i>
                </a>
              </div>
            </div>
          </div>
        </div>  
      </div>
    </div>
    <a href="#" data-toggle="modal" data-target="#myModal">
        <article class="singleService col-xs-12 col-sm-4">
          <figure class="imgService" style="background-image:url('<?= get_template_directory_uri() . "/assets/images/spa-rocks.jpg"?>');">
          </figure>
          <div class="infoService">
            <h4 class="text-center">Ultracavitación</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, enim sunt unde, recusandae, corporis iure quo quibusdam voluptatibus laborum numquam eos magni veritatis harum illum, non voluptatem blanditiis aliquam molestiae.</p>
            <i class="icon-info3 text-right"></i>
          </div>
        </article>
      </a>
      <a href="#" data-toggle="modal" data-target="#myModal">
        <article class="singleService col-xs-12 col-sm-4">
          <figure class="imgService" style="background-image:url('<?= get_template_directory_uri() . "/assets/images/spa-rocks.jpg"?>');">
          </figure>
          <div class="infoService">
            <h4 class="text-center">Ultracavitación</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, enim sunt unde, recusandae, corporis iure quo quibusdam voluptatibus laborum numquam eos magni veritatis harum illum, non voluptatem blanditiis aliquam molestiae.</p>
            <i class="icon-info3 text-right"></i>
          </div>
        </article>
      </a>
  </div>
  
</section>


<?php get_footer(); ?>
