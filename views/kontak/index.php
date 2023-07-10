<!-- Contact Start -->
<div id="kontak" class="container-fluid pt-5 bg-kuning2">
  <div class="container">
    <div class="text-center pb-2">
      <p class="section-title px-5">
        <span class="px-2">--- Kontak ---</span>
      </p>
      <h1 class="mb-4">Hubungi Kami</h1>
    </div>
    <div class="row">
      <div  class="col-lg-7 mb-5">
        <div class="contact-form">
          <div id="success"></div>
          <form name="sentMessage" id="contactForm" novalidate="novalidate">
            <div class="control-group">
              <input
              type="text"
              class="form-control"
              id="name"
              placeholder="Nama Anda"
              required="required"
              data-validation-required-message="Please enter your name"
              />
              <p class="help-block text-danger"></p>
            </div>
            <div class="control-group">
              <input
              type="email"
              class="form-control"
              id="email"
              placeholder="Email Anda"
              required="required"
              data-validation-required-message="Please enter your email"
              />
              <p class="help-block text-danger"></p>
            </div>
            <div class="control-group">
              <input
              type="text"
              class="form-control"
              id="subject"
              placeholder="Topik"
              required="required"
              data-validation-required-message="Please enter a subject"
              />
              <p class="help-block text-danger"></p>
            </div>
            <div class="control-group">
              <textarea
              class="form-control"
              rows="6"
              id="message"
              placeholder="Pesan"
              required="required"
              data-validation-required-message="Please enter your message"
              ></textarea>
              <p class="help-block text-danger"></p>
            </div>
            <div>
              <button
              class="btn btn-primary py-2 px-4"
              type="submit"
              id="sendMessageButton"
              >
              Kirim Pesan
            </button>
          </div>
        </form>
      </div>
    </div>
    <div  class="col-lg-5 mb-5">
      <div class="d-flex">
        <div class="pr-2">
          <i
          class="fa fa-map-marker-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
          style="width: 45px; height: 45px"
          ></i>
        </div>
        <div class="pl-2">
          <h5>Alamat</h5>
          <p class="text-justify"><?= $data['kontak'][0]['alamat'];?></p>
        </div>
      </div>
      <div class="d-flex">
        <i
        class="fa fa-envelope d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
        style="width: 45px; height: 45px"
        ></i>
        <div class="pl-3">
          <h5>Email</h5>
          <p><?= $data['kontak'][0]['email'];?></p>
        </div>
      </div>
      <div class="d-flex">
        <i
        class="fa fa-phone-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
        style="width: 45px; height: 45px"
        ></i>
        <div class="pl-3">
          <h5>Telepon</h5>
          <p><?= $data['kontak'][0]['no_hp'];?></p>
        </div>
      </div>
      <div class="d-flex">
        <i
        class="far fa-clock d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
        style="width: 45px; height: 45px"
        ></i>
        <div class="pl-3">
          <h5>Waktu Pembelajaran</h5>
          <strong><?= $data['kontak'][0]['hari'];?></strong>
          <p class="m-0"><?= $data['kontak'][0]['jam'];?></p>
        </div>
      </div>
    </div>
  </div>

     <!-- ========================= map-section end ========================= -->
<!--         <section class="map-section">
            <div class="map-container">
                <object style="border:0; height: 690px; width: 100%;"
                    data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.8440849601366!2d123.01221737422262!3d-5.4406333542769465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2da4017fd8f07573%3A0x59c4441b4c569ba4!2sSMKN%208%20Buton!5e0!3m2!1sen!2sus!4v1685971282255!5m2!1sen!2sus"></object>
                </div>
            </div>
        </section>
 -->



</div>
</div>
    <!-- Contact End -->