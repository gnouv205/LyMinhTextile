<!-- ...... -->
<div class="agency-page-wrapper py-5">
    <div class="container">
        <div class="agency-header text-center mb-5">
            <div class="map-wrapper mx-auto">
                <img src="assets/img/maplyminh" alt="" class="img-fluid rounded shadown-sm">
            </div>
            <h3 class="mt-4 fw-bold">LY MINH TEXTILE CO., LTD</h3>
        </div>

        <div class="row g-5">
            <div class="col-lg-6">
                <div class="contact-info-content">
                    <h4 class="mb-4 text-uppercase fw-bold" style="color: #00796b">
                        Thông tin liên hệ
                    </h4>
                    <div class="info-list">
                        <div class="info-item">
                            <strong>Address: </strong>B410-B411-B412, 319B STREET, VINATEX-TAN TAO INDUSTRIAL ZONE, NHON TRACH DISTRICT, DONG NAI PROVINCE, VIETNAM
                        </div>
                        <div class="info-item">
                            <strong>Email: </strong> sales@lyminhtextile.com.vn
                        </div>
                        <div class="info-item">
                            <strong>Fax: </strong> (0) 251. 3560594
                        </div>
                        <div class="info-item">
                            <strong>Website: </strong>
                            <a href="http://www.lyminhtextile.com.vn">lyminhtextile.com.vn</a>
                        </div>
                    </div>

                    <div class="google-map-embed mt-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3920.3836566743075!2d106.93192327573531!3d10.70486246050821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317522b5d8388c41%3A0x4fcd6eb8b2712a37!2zQ8O0bmcgVHkgVE5ISCBE4buHdCBMw70gTWluaA!5e0!3m2!1sen!2s!4v1776393024798!5m2!1sen!2s" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="contact-from-wrapper p-4 border rounded shadow-sm bg-light">
                    <h4 class="mb-4 text-uppercase fw-bold" style="color:#00796b">
                        Gửi lời nhắn
                    </h4>
                    <form action="pages/process-contact.php" method="POST">
                        <div class="mb-3">
                            <input type="text" name="name" class="form-control form-custom" placeholder="Họ và tên *" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="phone" class="form-control form-custom" placeholder="Số điện thoại *" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control control-custom" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="subject" class="form-control form-custom" placeholder="Chủ đề">
                        </div>
                        <div class="mb-3">
                            <textarea name="message" rows="4" class="form-control form-custom" placeholder="Nội dung" required></textarea>
                        </div>
                        <div class="d-flex gap-2">
                            <button type="submit" style="background: #00796b; margin-right: 10px" class="btn btn-primary px-4 py-2 fw-bold">
                                Gửi
                            </button>
                            <button class="btn btn-secondary px-4 py-2 fw-bold" style="border-radius: 35px">
                                Nhập lại
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <hr class="my-5">

        <div class="row align-items-center mt-5">
            <div class="col-md-7">
                <div class="product-text">
                    <p class="lead">
                        Chúng tôi là một trong những công ty dệt may cam kết chất lượng sản phẩm ren, nội y, đồ thể thao và vải cô dâu hàng đầu Việt Nam.
                    </p>
                    <p>Để mở rộng kinh doanh, chúng tôi đang tìm kiếm đại lý. Nếu bạn muốn trở thành đại lý của chúng tôi, vui lòng gửi thông tin cho chúng tôi qua:
                        <strong class="text-danger">agents@lyminhtextile.com.vn</strong>
                    </p>
                </div>
            </div>
            <div class="col-md-5 text-center">
                <img src="assets/img/agent.jpg" alt="Hợp tác đại lý" class="img-fluid blue-glow rounded shadow">
            </div>
        </div>
    </div>
</div>
<!-- ...... -->

<style>
    /* Tổng thể trang */
    .agency-page-wrapper {
        padding-top: 120px;
        padding-bottom: 80px;
        background-color: #ffffff;
    }

    /* Khối tiêu đề và Ảnh bản đồ/Văn phòng */
    .agency-header h3 {
        color: #00796b;
        letter-spacing: 1px;
        position: relative;
    }

    .agency-header h3::after {
        content: "";
        display: block;
        width: 80px;
        height: 3px;
        background: #00796b;
        margin: 15px auto 0;
    }

    .map-wrapper {
        max-width: 800px;
    }

    .map-wrapper img {
        border: 5px solid #fff;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .info-item {
        padding: 12px 0;
        border-bottom: 1px dashed #eee;
        font-size: 15px;
    }

    .info-item strong {
        display: inline-block;
        width: 100%;
        color: #00796b;
        text-transform: uppercase;
        font-size: 13px;
    }

    .form-custom {
        border-radius: 4px;
        padding: 12px;
        border: 1px solid #ced4da;
    }

    .form-custom:focus {
        border-color: #00796b;
        box-shadow: 0 0 0 0.2rem rgba(0, 121, 107, 0.15);
    }

    .blue-glow {
        filter: drop-shadow(0 0 10px rgba(0, 121, 107, 0.1));
        transition: 0.3s;
    }

    .blue-glow:hover {
        transform: scale(1.02);
        filter: drop-shadow(0 0 20px rgba(0, 121, 107, 0.3));
    }

    @media (max-width: 768px) {
        .agency-page-wrapper {
            padding-top: 80px;
        }

        .info-item strong {
            width: 100%;
            margin-bottom: 5px;
        }
    }
</style>