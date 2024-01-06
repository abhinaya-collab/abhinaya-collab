<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gallery Slider</title>
<style>
  body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-image: url('background.jpeg');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    backdrop-filter: blur(10px);
  }

  .slider-container {
    width: 80%;
    margin: 0 auto;
    overflow: hidden;
    position: relative;
   
  }

  .slider {
    display: flex;
    transition: transform 0.5s ease-in-out;
  }

  .slide {
    flex: 0 0 100%;
    max-width: 100%;
  }

  .slide img {
    width: 100%;
    height: 100vh;
    display: block;
  }

  .prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    font-size: 100px;
    color:black;
    z-index: 1;
  }

  .prev {
    left: 10px;
  }

  .next {
    right: 10px;
  }
  .back-link {
      display: block;
      text-align: center;
      text-decoration: underline;
      font-size:100px;
      color:white;
      margin-top: 20px;
  }

</style>
</head>
<body>
  <div class="slider-container">
    <div class="slider">
      <div class="slide">
        <img src="img/image1.png" alt="Image 1">
      </div>
      <div class="slide">
        <img src="img/image2.png" alt="Image 2">
      </div>
      <div class="slide">
        <img src="img/image3.png" alt="Image 3">
      </div>
      <div class="slide">
        <img src="img/image4.png" alt="Image 3">
      </div>
      <div class="slide">
        <img src="img/placement1.png" alt="Image 3">
      </div>
      <div class="slide">
        <img src="img/placement2.png" alt="Image 3">
      </div>
      <div class="slide">
        <img src="img/placement3.png" alt="Image 3">
      </div>
      <div class="slide">
        <img src="img/placement4.png" alt="Image 3">
      </div>
    </div>
    <div class="prev">&#10094;</div>
    <div class="next">&#10095;</div>
  </div>

  <script>
    const slider = document.querySelector('.slider');
    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');
    let slideIndex = 0;

    prevButton.addEventListener('click', () => {
      slideIndex = (slideIndex - 1 + slider.children.length) % slider.children.length;
      updateSlider();
    });

    nextButton.addEventListener('click', () => {
      slideIndex = (slideIndex + 1) % slider.children.length;
      updateSlider();
    });

    function updateSlider() {
      slider.style.transform = `translateX(-${slideIndex * 100}%)`;
    }
  </script>
  <a class="back-link" href="welcome.php"><b>Home</b></a>
</body>
</html>
