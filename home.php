
<!-- ======= About Us Section ======= -->
<section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>A propos</h2>
    </div>

    <div class="row content">
      <div class="col-lg-6">
        <p><?php echo $a_propos['value'] ; ?></p>
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0">
        <div class="col-lg mt-4" data-aos="zoom-in" data-aos-delay="400">
          <div class="member d-flex align-items-start">
            <div class="pic"><img src="assets/img/person.png" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>UPSILON BUSINESS SOLUTION</h4>
              <span><?php echo $a_propos['mot_dg']['title'] ; ?></span>
              <p><?php echo $a_propos['mot_dg']['value'] ; ?></p>
            </div>
          </div>
            
        </div>
    </div>

  </div>
</section><!-- End About Us Section -->

<!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us section-bg">
  <div class="container-fluid" data-aos="fade-up">
    <div class="row">
      <div class="col-lg d-flex flex-column justify-content-center align-items-stretch  order-lg-1">
        <div class="content">
          <h3><strong><?php echo $nos_valeurs['title'] ; ?></strong></h3>
          <p><?php echo $nos_valeurs['desc'] ; ?></p>
        </div>
        <div class="container col-lg-8">
          <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/img/work.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5><?php echo $nos_valeurs['engagement']['title'] ; ?></h5>
                  <p><?php echo $nos_valeurs['engagement']['value'] ; ?></p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/img/work.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5><?php echo $nos_valeurs['confiance']['title'] ; ?></h5>
                  <p><?php echo $nos_valeurs['confiance']['value'] ; ?><</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/img/work.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h5><?php echo $nos_valeurs['esprit_equipe']['title'] ; ?></h5>
                  <p><?php echo $nos_valeurs['esprit_equipe']['value'] ; ?><</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="assets/img/work.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5><?php echo $nos_valeurs['sens_innovation']['title'] ; ?></h5>
                    <p><?php echo $nos_valeurs['sens_innovation']['value'] ; ?><</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="assets/img/work.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                  <h5><?php echo $nos_valeurs['ambition']['title'] ; ?></h5>
                    <p><?php echo $nos_valeurs['ambition']['value'] ; ?><</p>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>

        </div>
    </div>

  </div>
</section><!-- End Why Us Section -->

  