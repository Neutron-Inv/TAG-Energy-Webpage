<!-- /call_to_action start-->
<section id="new-project" class="new-project">
  <div class="container">
    <div class="new-project-details">
      <div class="row">
        <div class="offset-lg-1 col-lg-8 col-md-12">
          <div class="single-new-project">
            <h3> Want to obtain your school transcript with us?</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-12">
          <div class="single-new-project"> 
            @if (Auth::guest())
              <a href="{{ route('register') }}" class="slide-btn"> start now! </a> 
            @else
              <a href="{{ url('/home') }}" class="slide-btn"> start now! </a>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /call_to_action end--> 