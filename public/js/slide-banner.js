let index = 0;
  const slider = document.getElementById('slider');
  const totalSlides = slider.children.length;

  function slideRight() {
    if (index < totalSlides - 1) {
      index++;
    } else {
      index = 0;
    }
    updateSlider();
  }

  function slideLeft() {
    if (index > 0) {
      index--;
    } else {
      index = totalSlides - 1;
    }
    updateSlider();
  }

  function updateSlider() {
    slider.style.transform = `translateX(-${index * 100}%)`;
  }