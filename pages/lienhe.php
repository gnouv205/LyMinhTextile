<div class="agency-page-wrapper py-5">
    <div class="container">
        <div class="agency-header">
            <div class="map-wrapper">
                <img src="assets/img/maplyminh.jpg" alt="Toàn cảnh Lý Minh" class="img-fluid rounded shadow-sm">
            </div>
            <h3 class="mt-3 fw-bold">LY MINH TEXTILE CO., LTD</h3>
        </div>

        <div class="contact-info-grid mb-5">
            <div class="info-item"><strong>Address:</strong> B410-B411-B412, 319B STREET, VINATEX-TAN TAO INDUSTRIAL ZONE, NHON TRACH DISTRICT, DONG NAI PROVINCE, VIETNAM</div>
            <div class="info-item"><strong>Email:</strong> sales@lyminhtextile.com.vn</div>
            <div class="info-item"><strong>Phone:</strong> (0) 251. 3560594</div>
            <div class="info-item"><strong>Staffs phone:</strong> 0933 933 555 | 0931 887 610 | 0931 887 620 | 0931 887 630</div>
            <div class="info-item"><strong>Fax:</strong> (0) 251. 3560593</div>
            <div class="info-item"><strong>Website:</strong> <a href="http://www.lyminhtextile.com.vn">http://www.lyminhtextile.com.vn</a></div>
        </div>

        <hr class="my-5">

        <div class="product-alternate-grid align-items-center">
            <div class="product-text">
                <p>Chúng tôi là một trong những công ty dệt may cam kết chất lượng sản phẩm ren, nội y, đồ thể thao và vải cô dâu hàng đầu Việt Nam.</p>
                <p>Để mở rộng kinh doanh, chúng tôi đang tìm kiếm đại lý. Nếu bạn muốn trở thành đại lý của chúng tôi, vui lòng gửi thông tin cho chúng tôi qua email: <strong>agents@lyminhtextile.com.vn</strong></p>
            </div>
            <div class="product-visual">
                <img src="assets/img/agent.jpg" alt="Hợp tác đại lý" class="img-fluid blue-glow">
            </div>
        </div>
    </div>
</div>

<style>
    /* Tổng thể trang */
    .agency-page-wrapper {
        padding-top: 150px;
        padding-bottom: 80px;
        background-color: #ffffff;
    }

    /* Khối tiêu đề và Ảnh bản đồ/Văn phòng */
    .agency-header {
        display: flex;
        flex-direction: column;
        /* Sắp xếp các phần tử theo chiều dọc */
        align-items: center;
        /* Căn giữa tất cả phần tử con theo chiều ngang */
        text-align: center;
        margin-bottom: 50px;
        width: 100%;
    }

    .map-wrapper {
        width: 100%;
        max-width: 700px;
        /* Giữ nguyên kích thước 700px như yêu cầu của bạn */
        display: flex;
        justify-content: center;
        /* Căn ảnh ra giữa bên trong wrapper */
        margin: 0 auto;
    }

    .map-wrapper img {
        width: 100%;
        height: auto;
        border: 4px solid #fff;
        /* Tạo viền trắng cho ảnh nổi bật hơn */
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1) !important;
    }

    /* Định dạng tiêu đề dưới ảnh */
    .agency-header h3 {
        color: #00796b;
        /* Màu xanh thương hiệu đặc trưng */
        margin-top: 25px;
        position: relative;
        display: inline-block;
    }

    .agency-header h3 {
        color: #00796b;
        /* Màu xanh thương hiệu */
        letter-spacing: 1px;
        margin-top: 30px;
        position: relative;
        display: inline-block;
    }

    /* Hiệu ứng gạch chân trang trí dưới tiêu đề */
    .agency-header h3::after {
        content: "";
        display: block;
        width: 60px;
        height: 3px;
        background: #00796b;
        margin: 10px auto 0;
    }

    /* Khối thông tin liên hệ (Contact Info) */
    .contact-info-grid {
        max-width: 850px;
        margin: 0 auto;
        background: #fdfdfd;
        padding: 40px;
        border-radius: 12px;
        border: 1px solid #eee;
        display: grid;
        grid-template-columns: 1fr;
        gap: 15px;
    }

    .info-item {
        display: flex;
        align-items: flex-start;
        padding: 10px 0;
        border-bottom: 1px dashed #eee;
        color: #444;
    }

    .info-item:last-child {
        border-bottom: none;
    }

    .info-item strong {
        min-width: 140px;
        /* Tăng độ rộng để nhãn không bị lệch */
        color: #00796b;
        font-weight: 700;
        text-transform: uppercase;
        font-size: 13px;
    }

    .info-item a {
        color: #00796b;
        text-decoration: none;
        transition: 0.3s;
    }

    .info-item a:hover {
        color: #ff9800;
        /* Màu cam nổi bật khi hover */
        text-decoration: underline;
    }

    /* Khối mời gọi Đại lý (Dưới đường kẻ) */
    .agency-invite {
        margin-top: 60px;
    }

    .agency-invite .product-text p {
        font-size: 16px;
        line-height: 1.8;
        color: #555;
    }

    /* Email nổi bật trong văn bản */
    .agency-invite strong {
        color: #d32f2f;
        /* Màu đỏ đô để gây chú ý vào thông tin quan trọng */
        background: #fff5f5;
        padding: 2px 6px;
        border-radius: 4px;
    }

    /* Ảnh hiệu ứng Blue Glow */
    .blue-glow {
        filter: drop-shadow(0 0 15px rgba(0, 121, 107, 0.2));
        border-radius: 8px;
        transition: 0.5s;
    }

    .blue-glow:hover {
        filter: drop-shadow(0 0 25px rgba(0, 121, 107, 0.4));
    }

    /* Responsive cho mobile */
    @media (max-width: 768px) {
        .agency-page-wrapper {
            padding-top: 100px;
        }

        .info-item {
            flex-direction: column;
        }

        .info-item strong {
            margin-bottom: 5px;
        }

        .contact-info-grid {
            padding: 20px;
        }
    }
</style>