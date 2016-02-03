<?php get_header(); ?>

  <?php include(locate_template('layouts/cover-contact.php')) ?>
  <section class="u-paddingSection-xs container Contacts">
    <div class="row">
      <address class="col-xs-12 col-sm-4 phones">
        <h3 style="padding-left:0;">Teléfono</h3>
      <?php if(have_rows('contact_phones')):
        while(have_rows('contact_phones')) : the_row(); ?>
        <p> <?php the_sub_field('phone'); ?> </p>
      <?php endwhile;
        else :
        endif;
      ?>
      </address>
      <address class="col-xs-12 col-sm-4">
        <h3 style="padding-left:0;">Dirección</h3>
      <?php if(have_rows('contact_addresses')):
        while(have_rows('contact_addresses')) : the_row(); ?>
        <p> <?php the_sub_field('contact_address'); ?> </p>
      <?php endwhile;
        else :
        endif;
      ?>
      </address>
      <address class="col-xs-12 col-sm-4">
        <h3 style="padding-left:0;">Mail</h3>
      <?php if(have_rows('contact_mails')):
        while(have_rows('contact_mails')) : the_row(); ?>
        <p> <?php the_sub_field('contact_mail'); ?> </p>
      <?php endwhile;
        else :
        endif;
      ?>
      </address>
    </div>
  </section>

  <section class="googleMap">
    <?php include(locate_template('layouts/google-maps.php')) ?>
  </section>

<?php get_footer(); ?>
