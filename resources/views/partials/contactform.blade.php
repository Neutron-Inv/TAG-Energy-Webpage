<section class="contact_form" id="contact">
  <div class="container">
    <div class="row">
      <div class="offset-lg-2 col-lg-8">
        <div class="title_box">
          <h2>Contact Us</h2>
          <div class="title_border"></div>
          <p>Kindly submit your request via the contact form below, and we will get across to you.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="offset-lg-1 col-lg-10">
        <form class="contact__form" method="POST" action="{{ route('feedback.save') }}">  
          {!! csrf_field() !!}
          <div class="row">       
            <div class="col-md-4">
              <input name="name" class="contact_form_detail" type="text" placeholder="Your Name" required />
            </div>
            <div class="col-md-4">
              <input name="email" class="contact_form_detail" type="email" placeholder="Your Email Address" required />
            </div>
            <div class="col-md-4">
              <input name="phone" class="contact_form_detail" type="text" placeholder="Your Phone Number" required />
            </div>
            <div class="col-md-12">
              <textarea name="message" class="contact_form_detail1" placeholder="Your Message" minlength="15" required></textarea>
            </div>
            <div class="col-md-12">
              <div class="submit_btn_box">
                <input name="submit" class="submit_btn" type="submit" value="Send Message" />
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>