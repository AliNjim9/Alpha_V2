<div class="mt-5"></div>
<div class="carousel-container">
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('images/9-scaled.1.jpg') }}" alt="carousel0" class="d-block w-100">
        <div class="carousel-caption">
          <h3>Kitchen</h3>
          <p>The more elegant your kitchen is, the more happiness is spread out.</p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="{{ asset('images/3-scaled.jpg') }}" alt="carousel1" class="d-block w-100">
        <div class="carousel-caption">
          <h3>Hall</h3>
          <p>The Hall always symbolizes our path.</p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="{{ asset('images/8-scaled.jpg') }}" alt="carousel2" class="d-block w-100">
        <div class="carousel-caption">
          <h3>Bath</h3>
          <p>Pleasant bathroom.</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

<style>
.carousel-caption {
  position: absolute;
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
