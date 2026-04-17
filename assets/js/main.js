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

  // 4. Thiết lập thời gian
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

// =================== Cert
let certIndex = 0;
let certTimer;
const certImages = [
  "assets/img/cc1.jpeg",
  "assets/img/cc2.jpg",
  "assets/img/cc3.jpg",
  "assets/img/cc4.jpg",
  "assets/img/cc5.jpg",
  "assets/img/cc6.jpg",
];

function startCertTimer() {
  clearTimeout(certTimer);
  certTimer = setTimeout(() => {
    certIndex++;
    if (certIndex >= certImages.length) certIndex = 0;
    updateCertDisplay();
    startCertTimer();
  }, 3000); // Đổi ảnh sau mỗi 3 giây
}

function showCert(index) {
  certIndex = index;
  updateCertDisplay();
  startCertTimer(); // Reset lại timer khi người dùng chủ động click
}

function updateCertDisplay() {
  const mainImg = document.getElementById("mainCertImage");
  const thumbs = document.querySelectorAll(".thumb-cert");

  if (!mainImg) return;

  // Bước 1: Kích hoạt hiệu ứng mờ dần (fadeOut)
  mainImg.classList.add("fading");

  // Bước 2: Chờ hiệu ứng mờ kết thúc (khoảng 300ms) rồi mới đổi ảnh
  setTimeout(() => {
    mainImg.src = certImages[certIndex];

    // Bước 3: Đợi trình duyệt tải nhẹ ảnh mới rồi hiện lên (fadeIn)
    mainImg.onload = () => {
      mainImg.classList.remove("fading");
    };

    // Backup trường hợp ảnh đã cache không kích hoạt onload
    setTimeout(() => {
      mainImg.classList.remove("fading");
    }, 50);

    // Cập nhật trạng thái thumbnail
    thumbs.forEach((t, i) => {
      if (i === certIndex) t.classList.add("active");
      else t.classList.remove("active");
    });
  }, 300);
}

// Khởi chạy khi tải trang
document.addEventListener("DOMContentLoaded", () => {
  startCertTimer();
});

// =========================== Trang Thông tin công ty
const colorImages = [
  "assets/img/pantone1.jpg",
  "assets/img/pantone2.jpg",
  "assets/img/pantone3.jpg",
];

let currentColorIndex = 0;
let colorTimer;

// Hàm chỉ thực hiện thay đổi giao diện
function updateColorUI(index) {
  const imgElement = document.getElementById("mainColorImg");
  const buttons = document.querySelectorAll(".series-btn");

  if (!imgElement) return; // Tránh lỗi nếu không tìm thấy element

  // Hiệu ứng mờ dần
  imgElement.style.opacity = 0;

  setTimeout(() => {
    imgElement.src = colorImages[index];
    imgElement.style.opacity = 1;

    // Cập nhật trạng thái nút Active
    buttons.forEach((btn, i) => {
      if (i === index) btn.classList.add("active");
      else btn.classList.remove("active");
    });
  }, 300);
}

// Hàm được gọi khi người dùng CLICK
function changeColorSeries(index) {
  currentColorIndex = index;
  updateColorUI(index);

  // Dừng tự động chạy và khởi động lại để tính lại 3 giây từ đầu
  clearInterval(colorTimer);
  startAutoChange();
}

// Hàm khởi tạo tự động chạy
function startAutoChange() {
  // Xóa timer cũ nếu có để tránh chạy chồng chéo
  clearInterval(colorTimer);

  colorTimer = setInterval(() => {
    currentColorIndex = (currentColorIndex + 1) % colorImages.length;
    updateColorUI(currentColorIndex);
  }, 3000);
}

// Khởi chạy khi trang tải xong
document.addEventListener("DOMContentLoaded", () => {
  // Chỉ chạy nếu trên trang có element này (tránh lỗi ở các trang khác)
  if (document.getElementById("mainColorImg")) {
    startAutoChange();
  }
});

// =================================================NHÓM SẢN PHẨM
const fabricImages = [
  "assets/img/nhomsp1.jpg",
  "assets/img/nhomsp2.jpg",
  "assets/img/nhomsp3.jpg",
  "assets/img/nhomsp4.jpg",
];

let currentFabricIndex = 0;
let fabricTimer;

// Hàm xử lý logic đổi ảnh mượt mà
function updateFabricUI(index) {
  const mainImg = document.getElementById("mainFabricImg");
  const thumbs = document.querySelectorAll(".thumb-fabric");
  if (!mainImg) return;

  // Bước 1: Kích hoạt mờ dần (FadeOut)
  mainImg.classList.add("fading");

  // Bước 2: Chờ hiệu ứng mờ kết thúc rồi mới đổi src ảnh
  setTimeout(() => {
    mainImg.src = fabricImages[index];

    // Bước 3: Đợi trình duyệt tải nhẹ ảnh rồi hiện lên (FadeIn)
    mainImg.onload = () => {
      mainImg.classList.remove("fading");
    };

    // Backup trường hợp ảnh cache
    setTimeout(() => {
      mainImg.classList.remove("fading");
    }, 50);

    // Bước 4: Cập nhật trạng thái thumbnail active
    thumbs.forEach((t, i) => {
      if (i === index) t.classList.add("active");
      else t.classList.remove("active");
    });
  }, 300); // Khớp với 0.6s cubic-bezier
}

// Hàm được gọi khi người dùng CLICK thủ công
function changeFabricSeries(index) {
  // Dừng tự động chạy
  clearInterval(fabricTimer);

  // Cập nhật giao diện
  currentFabricIndex = index;
  updateFabricUI(index);

  // Khởi động lại tự động chạy (để tính lại 3 giây từ đầu)
  startFabricAutoChange();
}

// Hàm khởi tạo tự động chạy
function startFabricAutoChange() {
  // Xóa timer cũ nếu có để tránh chạy chồng chéo
  clearInterval(fabricTimer);

  fabricTimer = setInterval(() => {
    currentFabricIndex = (currentFabricIndex + 1) % fabricImages.length;
    updateFabricUI(currentFabricIndex);
  }, 3000); // 3000ms = 3 giây
}

// Khởi chạy khi tải trang (Chỉ chạy trên trang có nhóm vải)
document.addEventListener("DOMContentLoaded", () => {
  if (document.getElementById("mainFabricImg")) {
    startFabricAutoChange();
  }
});

const medicalImages = [
  "assets/img/face1.jpg",
  "assets/img/face2.jpg",
  "assets/img/face3.jpg",
  "assets/img/face4.jpg",
  "assets/img/face5.jpg",
  "assets/img/face6.jpg",
];

let currentMedicalIndex = 0;
let medicalTimer;

function updateMedicalUI(index) {
  const mainImg = document.getElementById("mainMedicalImg");
  const thumbs = document.querySelectorAll(".thumb-medical");
  if (!mainImg) return;

  mainImg.classList.add("fading");

  setTimeout(() => {
    mainImg.src = medicalImages[index];
    mainImg.onload = () => mainImg.classList.remove("fading");

    thumbs.forEach((t, i) => {
      t.classList.toggle("active", i === index);
    });
  }, 300);
}

function changeMedicalSeries(index) {
  clearInterval(medicalTimer);
  currentMedicalIndex = index;
  updateMedicalUI(index);
  startMedicalAutoChange();
}

function startMedicalAutoChange() {
  clearInterval(medicalTimer);
  medicalTimer = setInterval(() => {
    currentMedicalIndex = (currentMedicalIndex + 1) % medicalImages.length;
    updateMedicalUI(currentMedicalIndex);
  }, 3000); // 3 giây
}

// Khởi chạy
document.addEventListener("DOMContentLoaded", () => {
  if (document.getElementById("mainMedicalImg")) {
    startMedicalAutoChange();
  }
});

// Danh sách ảnh nhóm phụ liệu
const accessoryImages = [
  "assets/img/pl1.jpg",
  "assets/img/pl2.jpg",
  "assets/img/pl3.jpg",
  "assets/img/pl4.jpg",
];

let currentAccessoryIndex = 0;
let accessoryTimer;

function updateAccessoryUI(index) {
  const mainImg = document.getElementById("mainAccessoryImg");
  const thumbs = document.querySelectorAll(".thumb-accessory");
  if (!mainImg) return;

  // Hiệu ứng mờ dần
  mainImg.classList.add("fading");

  setTimeout(() => {
    mainImg.src = accessoryImages[index];
    mainImg.onload = () => mainImg.classList.remove("fading");

    // Cập nhật thumbnail
    thumbs.forEach((t, i) => {
      t.classList.toggle("active", i === index);
    });
  }, 300);
}

function changeAccessorySeries(index) {
  clearInterval(accessoryTimer);
  currentAccessoryIndex = index;
  updateAccessoryUI(index);
  startAccessoryAutoChange();
}

function startAccessoryAutoChange() {
  clearInterval(accessoryTimer);
  accessoryTimer = setInterval(() => {
    currentAccessoryIndex =
      (currentAccessoryIndex + 1) % accessoryImages.length;
    updateAccessoryUI(currentAccessoryIndex);
  }, 3000);
}

// Kích hoạt khi trang sẵn sàng
document.addEventListener("DOMContentLoaded", () => {
  if (document.getElementById("mainAccessoryImg")) {
    startAccessoryAutoChange();
  }
});
