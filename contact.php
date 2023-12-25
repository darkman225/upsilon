    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact  section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contacts</h2>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Phone:</h4>
                <p>+225 27 24 33 80 73</p>
              </div>
              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4><?php echo $contact['email'] ; ?>:</h4>
                <p>info@upsilon-solutions.com</p>
              </div>
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4><?php echo $contact['localisation'] ; ?>:</h4>
                <p>Angré 7eme tranche, Immeuble LAH</p>
              </div>                      
              <div class="social-links justify-content-center align-items-center">
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" class="php-email-form">  <!-- role="form"-->
              <div class="row">
                                  
                <div class="form-group col-md-6">
                  <label for="name"><?php echo $contact['votre_email'] ; ?></label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <!--div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div-->
              <div class="form-group">
                <label for="name"><?php echo $contact['message'] ; ?></label>
                <textarea class="form-control" name="message" rows="6" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading"><?php echo $contact['patientez'] ; ?></div>
                <div class="error-message"></div>
                <div class="sent-message"><?php echo $contact['send_succes'] ; ?></div>
              </div>
              <div class="text-center"><button type="submit"><?php echo $contact['envoyez'] ; ?></button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <section>
      <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d528.4500490703018!2d-3.988196424256631!3d5.395505499841173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sci!4v1703022770282!5m2!1sfr!2sci" frameborder="0" width="100%" height="290px;" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </section>

  