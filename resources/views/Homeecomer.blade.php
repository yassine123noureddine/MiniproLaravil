@include('views.Homeecomer')

@section('main')
      <!-- Hero Section -->
  <section class="bg-light text-center py-5">
    <div class="container">
      <h1 class="display-4">Welcome to Brand Noureddine</h1>
      <p class="lead">Discover innovation, creativity, and quality like never before.</p>
      <a href="#" class="btn btn-primary btn-lg">Learn More</a>
    </div>
  </section>

  <!-- Features Section -->
  <section class="py-5">
    <div class="container text-center">
      <h2 class="mb-4">Why Choose Us?</h2>
      <div class="row g-4">
        <div class="col-lg-4 col-md-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">High Quality</h5>
              <p class="card-text">We deliver products crafted with precision and care.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Innovative Designs</h5>
              <p class="card-text">Stay ahead of trends with our cutting-edge solutions.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Customer Support</h5>
              <p class="card-text">Our team is here to assist you 24/7.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Call-to-Action Section -->
  <section class="bg-primary text-white text-center py-5">
    <div class="container">
      <h2>Ready to Start Your Journey?</h2>
      <p class="mb-4">Join thousands of satisfied customers today.</p>
      <a href="#" class="btn btn-light btn-lg">Get Started</a>
    </div>
  </section>
@endsection