const video = document.querySelector(".hero video");

window.addEventListener("scroll", function () {
  const header = document.querySelector("header");
  if (header) {
    header.classList.toggle("sticky", window.scrollY > 0);
  }
});

if (video) {
  video.addEventListener("ended", function () {
    this.currentTime = 0;
    this.play();
  });

  window.addEventListener("load", () => {
    video.play().catch(() => {});
  });
}

function toggleMenu() {
  document.querySelector("nav ul").classList.toggle("active");
}

// dropdown mobile click
document.querySelectorAll(".dropdown > a").forEach((item) => {
  item.addEventListener("click", function (e) {
    if (window.innerWidth <= 768) {
      e.preventDefault();
      this.parentElement.classList.toggle("active");
    }
  });
});
