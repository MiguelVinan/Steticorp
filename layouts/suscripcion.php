<section class="suscripcion u-paddingSection">
  <div class="suscripcionContainer">
    <div class="suscripcionData ">
      <h3>Obtén ofertas especiales además de cupones y descuentos para nuestros servicios.</h3>
      <p>
        Unete a nuestra lista de email y ten acceso a beneficios especialmente para tí en  la bandeja de entrada de tu mail.
      </p>
    </div>
    <div class="suscripcionBtn">
      <form class="suscripcionFormulario" action="index.html" method="post">
        <ol class="suscripcionOrdenada">
          <li><input type="text" placeholder="Escribe tu Nombre" name="name" value="" class="input-suscripcion"></li>
          <li><input type="email" placeholder="Escriben tu email" name="email" value="" class="input-suscripcion"></li>
          <li><button type="button" name="button" class="btn-secondary">Quiero Subscribirme</button></li>
        </ol>
      </form>
    </div>
    <div class="suscripcionImagen">
      <div class="suscripcionLinia " style="background-image:url('<?= get_template_directory_uri() . "/assets/images/subscription-line.svg" ?>');">
      </div>

    </div>

  </div>

</section>
