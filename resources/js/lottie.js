import Lottie from "lottie-web";

Lottie.loadAnimation({
  container: document.querySelector('#lottie'), // the dom element that will contain the animation
  renderer: 'svg',
  loop: true,
  autoplay: true,
  path: 'animations/developper.json' // the path to the animation json
});


// stop animation when it not visible
const lottie = document.querySelector('#lottie');
const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      Lottie.play();
    } else {
      Lottie.stop();
    }
  });
});

observer.observe(lottie);