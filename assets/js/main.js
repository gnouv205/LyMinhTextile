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

document.querySelectorAll(".dropdown > a").forEach((item) => {
  item.addEventListener("click", function (e) {
    if (window.innerWidth <= 768) {
      e.preventDefault();
      this.parentElement.classList.toggle("active");
    }
  });
});

// PHẦN PRODUCT SLIDER
let slideIndex = 0;
let slideTimer;

function showSlides() {
  let slides = document.getElementsByClassName("slide");
  let dots = document.getElementsByClassName("dot");

  if (slides.length === 0) return;

  // 1. Ẩn tất cả và dọn dẹp class
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
    slides[i].classList.remove("active");
  }
  for (let i = 0; i < dots.length; i++) {
    dots[i].classList.remove("active");
  }

  // 2. Tăng index
  slideIndex++;
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }

  // 3. Hiển thị slide hiện tại
  slides[slideIndex - 1].style.display = "block";

  // Tạo khoảng nghỉ cực ngắn để animation CSS có thể kích hoạt
  setTimeout(() => {
    slides[slideIndex - 1].classList.add("active");
  }, 20);

  if (dots[slideIndex - 1]) {
    dots[slideIndex - 1].classList.add("active");
  }

  // 4. Thiết lập thời gian (Đã sửa từ 1000 thành 5000)
  clearTimeout(slideTimer);
  slideTimer = setTimeout(showSlides, 5000);
}

// Hàm click vào chấm (Phải reset đúng cách)
function currentSlide(n) {
  // n nhận từ HTML là 1, 2, 3... nên cần -1 để khớp mảng
  slideIndex = n - 1;

  clearTimeout(slideTimer);

  let slides = document.getElementsByClassName("slide");
  let dots = document.getElementsByClassName("dot");

  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
    slides[i].classList.remove("active");
    if (dots[i]) dots[i].classList.remove("active");
  }

  slides[slideIndex].style.display = "block";
  setTimeout(() => {
    slides[slideIndex].classList.add("active");
  }, 20);

  if (dots[slideIndex]) dots[slideIndex].classList.add("active");

  // Tăng Index lên để lần tự động tiếp theo sẽ nhảy sang slide kế tiếp
  slideIndex++;
  slideTimer = setTimeout(showSlides, 5000);
}

// Kích hoạt khi trang đã sẵn sàng
document.addEventListener("DOMContentLoaded", function () {
  showSlides();
});
