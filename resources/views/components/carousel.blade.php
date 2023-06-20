<div class="" style="margin-top:5%;"></div>
<div class="carousel-container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="{{ asset('images/9-scaled.1.jpg') }}" alt="carousel0">
        <div class="carousel-caption">
          <h3>Kitchen</h3>
          <p>The more elegant your kitchen is, the more happiness is spread out.</p>
        </div>
      </div>

      <div class="item">
        <img src="{{ asset('images/3-scaled.jpg') }}" alt="carousel1">
        <div class="carousel-caption">
          <h3>Hall</h3>
          <p>The Hall always symbolise our path.</p>
        </div>
      </div>

      <div class="item">
        <img src="{{ asset('images/8-scaled.jpg') }}" alt="carousel2">
        <div class="carousel-caption">
          <h3>Bath</h3>
          <p>Pleasant bathroom .</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<style>
 .carousel-caption {
  position: fixed;
  bottom: 20px;
  left: 0;
  right: 0;
  background-color: rgba(0, 0, 0, 0.5);
  padding: 10px;
  color: #fff;
  z-index: 100; /* Adjust the z-index value as needed */
}
.carousel-inner img {
  width: 100%;
}
@media (max-width: 768px) {
  .carousel-inner img {
    max-width: 100%; /* Set a maximum width for smaller screens */
  }
}

</style>