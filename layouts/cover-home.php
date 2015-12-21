<div id="carousel-generic" class="cover carousel slide" data-ride="carousel" data-pause="">
    <ol class="carousel-indicators">
        <li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-generic" data-slide-to="1"></li>
        <li data-target="#carousel-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->

    <div class="carousel-inner" role="listbox">
        <div class="coverLogo">
            <figure>
              <img class="logo" src="<?= get_template_directory_uri() . '/assets/images/logo.svg' ?>" alt="" />
            </figure>
            <p class="u-textWhite">
              Centro Cosmetologico Especializado
            </p>
        </div>

        <div class="item active" style="background-image:url('<?= get_template_directory_uri() . "/assets/images/wellness-massage.jpg" ?>');">
          <div class="carousel-caption">
              <div class="coverDatos u-textWhite">
                  <h1>Tratamientos Corporales</h1>
                  <p >“ Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. “</p>
              </div>
          </div>
        </div>
        <div class="item" style="background-image:url('<?= get_template_directory_uri() . "/assets/images/massage.jpg" ?>');">
          <div class="carousel-caption">
              <h3>Second Carousel</h3>
          </div>
        </div>
        <div class="item" style="background-image:url('<?= get_template_directory_uri() . "/assets/images/wellness-skinCare.jpg" ?>');">
          <div class="carousel-caption">
              <h3>Caption Text</h3>
          </div>
        </div>
    </div>

</div>