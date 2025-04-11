<section class="about" id="about">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="about_bg"><img class="img-fluid" src="assets/images/about_bg.jpg" alt="about_bg"></div>
        <div class="video_bg">
          <div class="video_img_box"><img class="img-fluid" src="assets/images/video_bg.jpg" alt="video_bg"></div>
          <div class="video_play"><span class="youtube-link" youtubeid="yPu6qV5byu4"><img class="img-fluid" src="assets/images/video_play.png" alt="video_play"></span></div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="title_box about_title">
          <h2>About Us</h2>
          <div class="title_border"></div>
          <p>{{$about->description ?? ''}}</p>
          <p>{{$about->short_description ?? ''}}</p>
          {{--<div class="readmore"> <a href="about.html" class="about_btn">Read More</a> </div>--}}
        </div>
      </div>
    </div>
  </div>
</section>