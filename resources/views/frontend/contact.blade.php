@extends('frontend.layout.app')
@section('main')

<section class="ftco-section contact-section">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">
        <div class="col-md-3 d-flex">
            <div class="bg-light align-self-stretch box p-4 text-center">
                <h3 class="mb-4">Address</h3>
              <p>198 West 21th Street, Suite 721 New York NY 10016</p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="bg-light align-self-stretch box p-4 text-center">
                <h3 class="mb-4">Contact Number</h3>
              <p><a href="tel://1234567920">+ 1235 2355 98</a></p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="bg-light align-self-stretch box p-4 text-center">
                <h3 class="mb-4">Email Address</h3>
              <p><a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="bg-light align-self-stretch box p-4 text-center">
                <h3 class="mb-4">Website</h3>
              <p><a href="#">yoursite.com</a></p>
            </div>
        </div>
      </div>
    </div>
  </section>

      <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
          <div class="container">
              <div class="row d-flex align-items-stretch no-gutters">
                  <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
                      <form action="#">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Subject">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
          </form>
                  </div>
                  <div class="col-md-6 d-flex align-items-stretch">
                      <div id="map"></div>
                  </div>
              </div>
          </div>
      </section>

  
@endsection
