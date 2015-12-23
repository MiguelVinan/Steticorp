<div class="">    
  <a href="#" data-toggle="modal" data-target="#myModal-<?php the_ID(); ?> ">
    <article class="singleService col-xs-12 col-sm-4">
      <figure class="imgService" style="background-image:url('<?= $url ?>');">
      </figure>
      <div class="infoService">
        <h4 class="text-center"><?php the_title(); ?></h4>
        <p><?php the_field('treatment_benefits'); ?></p>
        <i class="icon-info3 text-right"></i>
      </div>
    </article>
  </a>

  <div class="modal fade" id="myModal-<?php the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="icon-cross"></i></span></button>
          <h4 class="modal-title"><?php the_title(); ?></h4>
        </div>

        <div class="modal-body">
          <div class="row">
            <article class="col-xs-12">
              <h4>¿Qué es?</h4>
              <p><?php the_field('question_one') ?></p>
            </article>
            <article class="col-xs-12">
              <h4>¿Para qué sirve?</h4>
              <p><?php the_field('question_two') ?></p>
            </article>
            <article class="col-xs-12">
              <h4>¿Qué resultados y beneficios obtendrás?</h4>
              <p><?php the_field('question_three') ?></p>
            </article>
            <article class="col-xs-12">
              <h4>¿Cuantas sesiones aproximadamente necesitas para ver resultados?</h4>
              <p><?php the_field('question_four') ?></p>
            </article>
          </div>
        </div>

        <div class="modal-footer">
          <small>¿Tienes alguna inquietud o necesitas más información?</small>
          <a href="<?= get_page_link(4) ?>" class="btn-contact" role="button">
            <span>Contáctanos</span><i class="icon-heart"></i>
          </a>
        </div>
      </div>
    </div>  
  </div>
</div>