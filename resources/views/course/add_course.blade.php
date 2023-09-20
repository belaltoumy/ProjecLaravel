@extends('layout')
@section('content')
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Contact</h2>
        <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p>
      </div>

      <div class="row gx-lg-0 gy-4">

        <div class="col-lg-4">

          <div class="info-container d-flex flex-column align-items-center justify-content-center">
            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>Call:</h4>
                <p>+1 5589 55488 55</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-clock flex-shrink-0"></i>
              <div>
                <h4>Open Hours:</h4>
                <p>Mon-Sat: 11AM - 23PM</p>
              </div>
            </div><!-- End Info Item -->
          </div>

        </div>

        <div class="col-lg-8">
          <form action={{ route('storecourse') }} method="post" >
            @csrf

              <div class="form-group mt-3">
                <input type="text" name="name_course" class="form-control" id="name_course" placeholder=" Name course" required >
              </div>
              @error('name_course')
              <div class="alert alert-danger">{{ $message }}</div>
               @enderror
              <div class="form-group mt-3">
                <textarea  class="form-control" name="discreption" id="discreption" placeholder="discreption" required></textarea>
              </div>
              @error('discreption')
              <div class="alert alert-danger">{{ $message }}</div>
               @enderror

             <div class="text-center"><button id="send" type="submit">Send Message</button></div>
            {{-- <input type="submit" class='btn btn-secondary'/> --}}
          </form>
        </div><!-- End Contact Form -->

      </div>

    </div>

  </section><!-- End Contact Section -->
@endsection
