<script src="/client/assets/js/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script>
    // Story slider
    var swiper = new Swiper(".story__container", {
        // تعریف تنظیمات واکنش‌گرا (Responsive)
        breakpoints: {
            // برای دستگاه‌های بزرگ (دسکتاپ) با عرض 1200 پیکسل یا بیشتر
            1200: {
                slidesPerView: 10, // نمایش ۳ اسلاید همزمان
                spaceBetween: 30, // فاصله ۳۰ پیکسل بین هر اسلاید
            },
            // برای دستگاه‌های متوسط (تبلت) با عرض بین 768 تا 1199 پیکسل
            768: {
                slidesPerView: 7, // نمایش ۲ اسلاید همزمان
                spaceBetween: 20, // فاصله ۲۰ پیکسل بین هر اسلاید
            },
            // برای دستگاه‌های کوچک (موبایل) با عرض کمتر از 768 پیکسل
            0: {
                slidesPerView: 3, // نمایش ۱ اسلاید همزمان
                spaceBetween: 10, // فاصله ۱۰ پیکسل بین هر اسلاید
            },
        },
    });

    // Primary slider
    var swiper = new Swiper(".primary-slider__container", {
        slidesPerView: 1,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    // Incredible offers
    var swiper = new Swiper(".incredible-offers__slider-container", {
        slidesPerView: 6,
        spaceBetween: 10,
    });
    // Popular brands
    var swiper = new Swiper(".popular-brands__container", {
        slidesPerView: 6,
        spaceBetween: 10,

        breakpoints: {
            1200: {
                slidesPerView: 7,
                spaceBetween: 30,
            },

            768: {
                slidesPerView: 4,
                spaceBetween: 20,
            },

            0: {
                slidesPerView: 3,
                spaceBetween: 10,
            },
        },
    });
    // Best selling slider
    var swiper = new Swiper(".best-selling__container", {
        slidesPerView: 6,
        spaceBetween: 10,
    });
</script>
@stack('')
