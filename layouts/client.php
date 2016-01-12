<div class="clientesContainer col-xs-12 col-sm-4">
  <div class="clientesData ">
    <div class="clientesContent">
      <div class="clientesFoto" style="background-image:url('<?= the_sub_field('client_imagen') ?>');">
      </div>
      <h4><a href="<?= the_sub_field('client_url') ?> "><?php the_sub_field('client_nickname') ?></a></h4>
    </div>
    <p class=""><?php the_sub_field('client_testimonial') ?></p>
  </div>
</div>
