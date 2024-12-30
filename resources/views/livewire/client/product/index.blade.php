<div>
    @push('style')
        <link rel="stylesheet" href="/client/css/product.css" />
    @endpush

    <!-- === mobile add to card === -->
    <div class="fixed-bottom bg-white d-lg-none border-top bg-danger py-4 px-3">
        <!-- text slider -->
        <div class="slider">
            <p class="active text-danger fs-9 fw-medium">❤️ ۵۰۰+ نفر به این کالا علاقه دارند</p>
            <p class="text-success fs-9 fw-medium">🤩 بهترین قیمت در ۳۰ روز گذشته</p>
            <p class="text-success fs-9 fw-medium">🧺 در سبد خرید ۱۰۰۰+ نفر</p>
        </div>
        <div class="d-flex align-items-center justify-content-between">
            <button class="btn btn-danger py-2 fs-9">افزودن به سبر خرید</button>
            <div class="d-flex align-items-center justify-content-end">
                <button
                    type="button"
                    class="bg-transparent border-0"
                    data-bs-toggle="tooltip"
                    data-bs-placement="left"
                    title="این کالا توسط فروشنده آن قیمت گذاری شده">
                    <svg
                        width="16"
                        height="16"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="size-6 text-secondary">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                    </svg>
                </button>
                <p class="fs-9">20,430,000</p>
                <p class="fs-9 fw-light me-1">تومان</p>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
    <div class="breadcrumb fs-8 text-secondary d-flex align-items-center gap-2">
        <a href="#" class="text-secondary">دیجی کالا</a>
        <p>/</p>
        <a href="#" class="text-secondary">کالای دیجیتال</a>
        <p>/</p>
        <a href="#" class="text-secondary">ساعت هوشمند</a>
    </div>

    <!-- ====== Product Detail ====== -->
    <section class="my-lg-5 row mx-lg-5">
        <!-- === Picture === -->
        <div class="col col-lg-4">
            <!-- ** desktop product image ** -->
            <div class="d-none d-lg-flex row flex-row-reverse flex-lg-row align-items-start">
                <div class="col col-lg-1 d-flex flex-lg-column gap-3">
                    <!-- like -->
                    <button class="bg-transparent border-0">
                        <svg
                            width="30"
                            heigth="30"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                        </svg>
                    </button>
                    <!-- share -->
                    <button class="bg-transparent border-0">
                        <svg
                            width="30"
                            height="30"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="size-6">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M7.217 10.907a2.25 2.25 0 1 0 0 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186 9.566-5.314m-9.566 7.5 9.566 5.314m0 0a2.25 2.25 0 1 0 3.935 2.186 2.25 2.25 0 0 0-3.935-2.186Zm0-12.814a2.25 2.25 0 1 0 3.933-2.185 2.25 2.25 0 0 0-3.933 2.185Z" />
                        </svg>
                    </button>
                    <!-- notfication -->
                    <button class="bg-transparent border-0">
                        <svg
                            width="30"
                            height="30"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="size-6">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5" />
                        </svg>
                    </button>
                    <!-- chart -->
                    <button class="bg-transparent border-0">
                        <svg
                            width="30"
                            height="30"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="size-6">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0 .5 1.5m-.5-1.5h-9.5m0 0-.5 1.5m.75-9 3-3 2.148 2.148A12.061 12.061 0 0 1 16.5 7.605" />
                        </svg>
                    </button>
                    <!-- Comparison -->
                    <button class="bg-transparent border-0">
                        <svg
                            width="30"
                            height="30"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor"
                            class="bi bi-vr"
                            viewBox="0 0 16 16">
                            <path
                                d="M3 12V4a1 1 0 0 1 1-1h2.5V2H4a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5v-1H4a1 1 0 0 1-1-1m6.5 1v1H12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H9.5v1H12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1zM8 16a.5.5 0 0 1-.5-.5V.5a.5.5 0 0 1 1 0v15a.5.5 0 0 1-.5.5" />
                        </svg>
                    </button>
                    <!-- list -->
                    <button class="bg-transparent border-0">
                        <svg
                            width="30"
                            height="30"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="size-6">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>
                    </button>
                </div>
                <div class="col col-lg-11">
                    <img src="/client/assets/Product/nothingPhone/1.webp" alt="nothingPhone" class="w-100" />
                </div>
            </div>
            <!-- == desktop gallery == -->
            <div>
                <!-- Button trigger modal -->
                <div class="d-none d-lg-flex align-items-center gap-2 mx-3">
                    <button
                        type="button"
                        class="border rounded-2 p-0 m-0 bg-transparent opacity-50"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <img src="/client/assets/Product/nothingPhone/1.webp" alt="image" class="w-75 h-50 p-1 object-fit-contain" />
                    </button>
                    <button
                        type="button"
                        class="border rounded-2 p-0 m-0 bg-transparent opacity-50"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <img src="/client/assets/Product/nothingPhone/3.webp" alt="image" class="w-75 h-50 p-1 object-fit-contain" />
                    </button>
                    <button
                        type="button"
                        class="border rounded-2 p-0 m-0 bg-transparent opacity-50"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <img src="/client/assets/Product/nothingPhone/4.webp" alt="image" class="w-75 h-50 p-1 object-fit-contain" />
                    </button>
                    <button
                        type="button"
                        class="border rounded-2 p-0 m-0 bg-transparent opacity-50"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <img src="/client/assets/Product/nothingPhone/5.webp" alt="image" class="w-75 h-50 p-1 object-fit-contain" />
                    </button>
                </div>

                <!-- Gallery Modal -->
                <div
                    class="modal fade"
                    id="exampleModal"
                    tabindex="-1"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl">
                        <div class="modal-content bg-transparent gallery border-0">
                            <div class="modal-header border-0">
                                <button
                                    type="button"
                                    class="btn-close bg-white"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div id="carouselExampleIndicators" class="carousel slide">
                                    <div class="carousel-indicators">
                                        <button
                                            type="button"
                                            data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="0"
                                            class="active"
                                            aria-current="true"
                                            aria-label="Slide 1"></button>
                                        <button
                                            type="button"
                                            data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="1"
                                            aria-label="Slide 2"></button>
                                        <button
                                            type="button"
                                            data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="2"
                                            aria-label="Slide 3"></button>
                                        <button
                                            type="button"
                                            data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="3"
                                            aria-label="Slide 4"></button>
                                        <button
                                            type="button"
                                            data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="4"
                                            aria-label="Slide 5"></button>
                                    </div>
                                    <div class="carousel-inner w-100">
                                        <div class="carousel-item active">
                                            <img
                                                src="/client/assets/Product/nothingPhone/1.webp"
                                                class="d-block mx-auto my-5 w-50 h-100"
                                                alt="nothingPhone" />
                                        </div>
                                        <div class="carousel-item">
                                            <video
                                                src="/client/assets/Product/nothingPhone/2.mp4"
                                                class="d-block mx-auto my-5 w-75 h-100"
                                                controls></video>
                                        </div>
                                        <div class="carousel-item">
                                            <img
                                                src="/client/assets/Product/nothingPhone/3.webp"
                                                class="d-block mx-auto my-5 w-50 h-100"
                                                alt="nothingPhone" />
                                        </div>
                                        <div class="carousel-item">
                                            <img
                                                src="/client/assets/Product/nothingPhone/4.webp"
                                                class="d-block mx-auto my-5 w-50 h-100"
                                                alt="nothingPhone" />
                                        </div>
                                        <div class="carousel-item">
                                            <img
                                                src="/client/assets/Product/nothingPhone/5.webp"
                                                class="d-block mx-auto my-5 w-50 h-100"
                                                alt="nothingPhone" />
                                        </div>
                                    </div>
                                    <button
                                        class="carousel-control-prev"
                                        type="button"
                                        data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button
                                        class="carousel-control-next"
                                        type="button"
                                        data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ** mobile gallery ** -->
            <div class="d-lg-none swiper myGallerySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="/client/assets/Product/nothingPhone/1.webp" class="w-100" alt="nothing phone" />
                    </div>
                    <div class="swiper-slide" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="/client/assets/Product/nothingPhone/3.webp" class="w-100" alt="nothing phone" />
                    </div>
                    <div class="swiper-slide" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="/client/assets/Product/nothingPhone/4.webp" class="w-100" alt="nothing phone" />
                    </div>
                    <div class="swiper-slide" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="/client/assets/Product/nothingPhone/5.webp" class="w-100" alt="nothing phone" />
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <!-- === Title & Details === -->
        <div class="col col-lg-5 mt-2 mt-lg-0 productDescription">
            <!-- Product breadcrumb -->
            <div class="d-flex align-items-center gap-2">
                <a href="#" class="text-info">ناتینگ</a>
                <span class="text-secondary fs-8 fw-lighter">/</span>
                <a href="#" class="text-info">گوشی موبایل ناتینگ</a>
            </div>
            <!-- Title -->
            <div>
                <h5 class="fw-bold mt-3">گوشی موبایل ناتینگ مدل Phone 2a ظرفیت 256 گیگابایت رم 12 گیگابایت</h5>
                <!-- subtitle -->
                <div class="d-none d-lg-flex align-items-center mt-3">
                    <p class="text-secondary fw-light fs-8 w-50">Nothing Phone 2a 256G and 8G Ram mobile phone</p>
                    <div class="w-50 border-top"></div>
                </div>
            </div>
            <!-- Rating -->
            <div class="mt-3 rating">
                <div class="d-flex align-items-center gap-2">
                    <!-- total score -->
                    <div class="d-flex gap-1">
                        <svg
                            width="14"
                            height="14"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            class="text-warning">
                            <path
                                fill-rule="evenodd"
                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                clip-rule="evenodd" />
                        </svg>
                        <p class="fs-8">۴.۶ <span class="text-secondary">(امتیاز ۳۲ خریدار)</span></p>
                    </div>
                    <span class="opacity-25">&bull;</span>
                    <a href="#" class="text-info fs-8">57 دیدگاه</a>
                    <span class="opacity-25">&bull;</span>
                    <a href="#" class="text-info fs-8">84 پرسش</a>
                </div>
                <div class="d-flex align-items-center mt-lg-3">
                    <p class="fs-8">
                        <svg
                            width="14"
                            height="14"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="text-success">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                        </svg>
                        ۸۸% (۱۰ نفر) از خریداران، این کالا را پیشنهاد کرده‌اند
                    </p>
                    <button
                        type="button"
                        class="bg-transparent border-0"
                        data-bs-toggle="tooltip"
                        data-bs-placement="bottom"
                        title="خریداران کالا با انتخاب یکی از گزینه های پیشنهاد یا عدم پیشنهاد، تجربه خرید خود را با کاربران به اشتراک میگذارند">
                        <svg
                            width="15"
                            height="15"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="text-secondary">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="d-block d-lg-none border-bottom mt-2 pb-3">
                <div class="swiper myProductFeatureSwiper">
                    <div class="swiper-wrapper">
                        <div
                            data-bs-toggle="modal"
                            data-bs-target="#productFeatureList"
                            class="swiper-slide rounded bg-secondary-subtle p-2">
                            <p class="text-secondary fs-9 text-nowrap">فناوری صفحه نمایش</p>
                            <p class="fw-bold fs-9">OLED</p>
                        </div>
                        <div
                            data-bs-toggle="modal"
                            data-bs-target="#productFeatureList"
                            class="swiper-slide rounded bg-secondary-subtle p-2">
                            <p class="text-secondary fs-9 text-nowrap">فناوری صفحه نمایش</p>
                            <p class="fw-bold fs-9">OLED</p>
                        </div>
                        <div
                            data-bs-toggle="modal"
                            data-bs-target="#productFeatureList"
                            class="swiper-slide rounded bg-secondary-subtle p-2">
                            <p class="text-secondary fs-9 text-nowrap">فناوری صفحه نمایش</p>
                            <p class="fw-bold fs-9">OLED</p>
                        </div>
                        <div
                            data-bs-toggle="modal"
                            data-bs-target="#productFeatureList"
                            class="swiper-slide rounded bg-secondary-subtle p-2">
                            <p class="text-secondary fs-9 text-nowrap">فناوری صفحه نمایش</p>
                            <p class="fw-bold fs-9">OLED</p>
                        </div>
                        <div
                            data-bs-toggle="modal"
                            data-bs-target="#productFeatureList"
                            class="swiper-slide rounded bg-secondary-subtle p-2">
                            <p class="text-secondary fs-9 text-nowrap">فناوری صفحه نمایش</p>
                            <p class="fw-bold fs-9">OLED</p>
                        </div>
                        <!-- more details -->
                        <div
                            data-bs-toggle="modal"
                            data-bs-target="#productFeatureList"
                            class="swiper-slide d-flex justify-content-center py-3 align-items-center rounded bg-info-subtle text-info p-2">
                            <p class="fs-9 text-nowrap fw-bold">مشاهده همه</p>
                            <svg
                                width="13"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="3"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- mobile product complete feature list -->
            <div
                class="modal"
                id="productFeatureList"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">مشخصات</h1>
                            <button type="button" class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">...</div>
                    </div>
                </div>
            </div>

            <!-- Color Picker -->
            <div>
                <div class="d-flex align-items-center justify-content-between">
                    <h6 id="colorText" class="mt-4 fw-bold">رنگ:</h6>
                    <p class="fs-9 text-secondary"><span>3</span> رنگ</p>
                </div>
                <div class="d-flex align-items-center gap-1 gap-lg-3 mt-4">
                    <div class="d-flex align-items-center gap-2 border p-2 rounded-5">
                        <div class="color-circle color1" data-color="مشکی">
                            <svg
                                class="check-svg"
                                xmlns="http://www.w3.org/2000/svg"
                                width="15"
                                height="15"
                                fill="white"
                                viewBox="0 0 16 16">
                                <path
                                    d="M13.485 1.929a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06 0l-3.5-3.5a.75.75 0 011.06-1.06L6 8.939l6.485-6.484a.75.75 0 011.06 0z" />
                            </svg>
                        </div>
                        <p class="d-block d-lg-none fs-9">مشکی</p>
                    </div>
                    <div class="d-flex align-items-center gap-2 border p-2 rounded-5">
                        <div class="color-circle color2" data-color="سبز">
                            <svg
                                class="check-svg"
                                xmlns="http://www.w3.org/2000/svg"
                                width="15"
                                height="15"
                                fill="white"
                                viewBox="0 0 16 16">
                                <path
                                    d="M13.485 1.929a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06 0l-3.5-3.5a.75.75 0 011.06-1.06L6 8.939l6.485-6.484a.75.75 0 011.06 0z" />
                            </svg>
                        </div>
                        <p class="d-block d-lg-none fs-9">سبز</p>
                    </div>
                    <div class="d-flex align-items-center gap-2 border p-2 rounded-5">
                        <div class="color-circle color3" data-color="آبی">
                            <svg
                                class="check-svg"
                                xmlns="http://www.w3.org/2000/svg"
                                width="15"
                                height="15"
                                fill="white"
                                viewBox="0 0 16 16">
                                <path
                                    d="M13.485 1.929a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06 0l-3.5-3.5a.75.75 0 011.06-1.06L6 8.939l6.485-6.484a.75.75 0 011.06 0z" />
                            </svg>
                        </div>
                        <p class="d-block d-lg-none fs-9">آبی</p>
                    </div>
                </div>
            </div>

            <!-- Product features -->
            <div class="mt-5 d-none d-lg-block">
                <h6 class="fw-bold mb-3">ویژگی ها</h6>
                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <div class="bg-secondary-subtle rounded-2 p-2 fs-8 w-25">
                        <p class="text-secondary">فناوری صفحه نمایش</p>
                        <p class="fw-medium">OLED</p>
                    </div>
                    <div class="bg-secondary-subtle rounded-2 p-2 fs-8 w-25">
                        <p class="text-secondary">رزولوشن دوربین</p>
                        <p class="fw-medium">50 مگاپیکسل</p>
                    </div>
                    <div class="bg-secondary-subtle rounded-2 p-2 fs-8 w-25">
                        <p class="text-secondary">نسخه سیستم عامل</p>
                        <p class="fw-medium">Android 14</p>
                    </div>
                    <div class="bg-secondary-subtle rounded-2 p-2 fs-8 w-25">
                        <p class="text-secondary">اندازه</p>
                        <p class="fw-medium">6.7</p>
                    </div>
                </div>
            </div>

            <!-- see more feature -->
            <div class="d-none d-lg-flex align-items-center justify-content-center mt-4">
                <div class="border-top w-100"></div>
                <a href="#details" class="border rounded-3 text-dark fs-8 fw-bold w-75 py-3 px-3 mx-3">
                    مشاهده همه ویژگی ها
                    <svg
                        width="16"
                        heigth="16"
                        class="me-3"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                    </svg>
                </a>
                <div class="border-top w-100"></div>
            </div>

            <!-- Cancellation of purchase (desktop)  -->
            <div class="d-none d-lg-flex gap-2 mt-4">
                <svg
                    width="18"
                    height="18"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    class="text-secondary">
                    <path
                        fill-rule="evenodd"
                        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 0 1 .67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 1 1-.671-1.34l.041-.022ZM12 9a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                        clip-rule="evenodd" />
                </svg>
                <p class="fs-8 w-100 text-secondary">
                    امکان برگشت کالا در گروه موبایل با دلیل "انصراف از خرید" تنها در صورتی مورد قبول است که پلمب کالا باز نشده
                    باشد. تمام گوشی‌های دیجی‌کالا ضمانت رجیستری دارند. در صورت وجود مشکل رجیستری، می‌توانید بعد از مهلت قانونی
                    ۳۰ روزه، گوشی خریداری‌شده را مرجوع کنید.
                </p>
            </div>

            <!-- Free delivery -->
            <div class="d-none d-lg-block border rounded-2 p-3 mt-4">
                <div class="d-flex gap-2">
                    <svg
                        width="22"
                        height="22"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="purple-color">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                    </svg>
                    <div class="mt-1">
                        <p class="purple-color fs-8">ارسال <strong>رایگان</strong> سفارش‌ها برای اعضای دیجی‌پلاس</p>
                        <p class="fs-9 text-secondary mt-2">ارسال فوری برای شهر تهران (رایگان)</p>
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-between mt-3">
                    <a href="#" class="text-info me-4 fs-8">
                        خرید اشتراک
                        <svg
                            width="15"
                            height="15"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>
                    </a>
                    <div>
                        <img src="/client/assets/Product/free-delivery.svg" alt="free delivery" />
                    </div>
                </div>
            </div>
        </div>
        <!-- === Seller Detail === -->
        <div class="col p-0 p-lg-auto col-lg-3 mt-5 mt-lg-0 seller">
            <div class="bg-light border rounded-4 p-3 p-lg-3 mb-3">
                <div class="d-flex align-items-center justify-content-between">
                    <h6 class="fw-bold">فروشنده</h6>
                    <p class="text-info fs-8">3 فروشنده دیگر</p>
                </div>

                <!-- market name and score -->
                <div class="d-flex gap-4 mx-lg-5 mx-3">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="25"
                        height="25"
                        fill="currentColor"
                        class="bi bi-shop"
                        viewBox="0 0 16 16">
                        <path
                            d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.37 2.37 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5M4 15h3v-5H4zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zm3 0h-2v3h2z" />
                    </svg>
                    <div>
                        <div class="d-flex my-3">
                            <p>پرشین مارکت</p>
                            <p class="text-success fs-8 fw-medium pe-3">منتخب</p>
                        </div>
                        <div class="d-flex gap-3 justify-content-center fs-8">
                            <p class="text-secondary"><span class="text-warning">77.6%</span> رضایت از کالا</p>
                            <p class="text-secondary">عملکرد <span class="text-success">عالی</span></p>
                        </div>
                    </div>
                </div>

                <hr />

                <!-- discount & price-->
                <div class="d-none d-lg-flex justify-content-between align-items-center">
                    <!-- Tooltip -->
                    <button
                        type="button"
                        class="bg-transparent border-0"
                        data-bs-toggle="tooltip"
                        data-bs-placement="left"
                        title="این کالا توسط فروشنده آن قیمت گذاری شده">
                        <svg
                            width="20"
                            height="20"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="size-6 text-secondary">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                        </svg>
                    </button>

                    <div>
                        <div class="d-flex gap-3">
                            <p class="text-secondary fs-8"><s>2,400,000</s></p>
                            <span class="bg-danger text-white fs-8 px-2 py-1 rounded-5">25%</span>
                        </div>
                        <p class="fw-bold mt-3">1,799,000 <span class="fs-8">تومان</span></p>
                    </div>
                </div>

                <!-- text slider -->
                <div class="d-none d-lg-block slider">
                    <p class="active text-danger fs-8 fw-medium">❤️ ۵۰۰+ نفر به این کالا علاقه دارند</p>
                    <p class="text-success fs-8 fw-medium">🤩 بهترین قیمت در ۳۰ روز گذشته</p>
                    <p class="text-success fs-8 fw-medium">🧺 در سبد خرید ۱۰۰۰+ نفر</p>
                </div>

                <!-- buy btn -->
                <button class="d-none d-lg-block bg-danger w-100 rounded-2 border-0 mt-3 py-3 text-center text-white fs-8">
                    افزودن به سبد خرید
                </button>

                <!-- Warranty Text -->
                <p class="mt-3 fs-8">
                    <svg
                        width="18"
                        height="18"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="2"
                        stroke="currentColor"
                        class="ms-3">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                    </svg>
                    گارانتی ۱۸ ماهه پیشتازان فناوری سیب طلایی (سی تلکام)
                </p>

                <hr />

                <button
                    class="w-100 border-0 bg-transparent my-2 d-flex justify-content-between"
                    data-bs-toggle="modal"
                    data-bs-target="#myModal">
                    <div class="text-end">
                        <p class="text-secondary fs-8 mb-2">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                fill="currentColor"
                                class="bi bi-truck text-danger"
                                viewBox="0 0 16 16">
                                <path
                                    d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5zm1.294 7.456A2 2 0 0 1 4.732 11h5.536a2 2 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456M12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2" />
                            </svg>
                            ارسال دیجی‌کالا
                        </p>
                        <p class="text-secondary fs-8">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                fill="currentColor"
                                class="bi bi-speedometer text-info"
                                viewBox="0 0 16 16">
                                <path
                                    d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2M3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707M2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.39.39 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.39.39 0 0 0-.029-.518z" />
                                <path
                                    fill-rule="evenodd"
                                    d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.95 11.95 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0" />
                            </svg>
                            ارسال امروز
                            <span class="fw-light">(فعلا در شهر تهران و کرج)</span>
                        </p>
                    </div>
                    <svg
                        width="23"
                        height="23"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="2"
                        stroke="currentColor"
                        class="text-secondary">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                    </svg>
                </button>

                <!-- The Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="false">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title" id="myModalLabel">جزئیات ارسال</h6>
                                <button type="button" class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h6 class="fw-bold">ارسال دیجی‌کالا</h6>
                                <p class="fs-8">
                                    این کالا در انبار دیجی‌کالا موجود و آماده پردازش است و توسط پیک دیجی‌کالا در بازه انتخابی ارسال
                                    خواهد شد.
                                </p>
                                <h6 class="fw-bold mt-5">ارسال امروز (فعلا در شهر تهران و کرج)</h6>
                                <p class="fs-8 mb-4">
                                    اگر سفارش را قبل از ساعت ۶ عصر ثبت کنید، همان روز ارسال می‌شود. در صورت ثبت سفارش بعد از ساعت ۶
                                    عصر، فردا ارسال خواهد شد.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <hr />

                <!-- Digiclub Score -->
                <div class="d-flex align-items-center gap-2">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="18"
                        height="18"
                        fill="currentColor"
                        class="bi bi-coin text-warning"
                        viewBox="0 0 16 16">
                        <path
                            d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518z" />
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                        <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11m0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12" />
                    </svg>
                    <p class="fs-8 mt-1 fw-semibold">150 امتیاز دیجی‌کلاب</p>
                    <!-- Tooltip -->
                    <button
                        type="button"
                        class="bg-transparent border-0 mt-1"
                        data-bs-toggle="tooltip"
                        data-bs-placement="bottom"
                        title="بعد از پایان مهلت مرجوعی،برای دریافت امتیاز به صفحه ماموریت های کلابی سر بزنید">
                        <svg
                            width="16"
                            height="16"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="text-secondary">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                        </svg>
                    </button>
                </div>

                <hr />

                <!-- Cancellation of purchase (mobile)  -->
                <div class="d-block d-lg-none gap-4 mb-5 mb-lg-0 mt-4">
                    <div class="d-flex gap-2">
                        <svg
                            width="18"
                            height="18"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            class="text-secondary">
                            <path
                                fill-rule="evenodd"
                                d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 0 1 .67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 1 1-.671-1.34l.041-.022ZM12 9a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        <p class="fs-8 w-100 text-secondary">
                            امکان برگشت کالا در گروه موبایل با دلیل "انصراف از خرید" تنها در صورتی مورد قبول است که پلمب کالا باز
                            نشده باشد. تمام گوشی‌های دیجی‌کالا ضمانت رجیستری دارند. در صورت وجود مشکل رجیستری، می‌توانید بعد از
                            مهلت قانونی ۳۰ روزه، گوشی خریداری‌شده را مرجوع کنید.
                        </p>
                    </div>
                    <div class="d-flex align-items-center justify-content-end">
                        <div class="d-flex align-items-center gap-2 text-secondary-emphasis">
                            <p class="fs-9">گزارش نادرستی مشخصات</p>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="size-6">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <a
                href="#"
                class="border rounded-2 p-3 d-flex align-items-center justify-content-between bg-white mb-3 mb-lg-0">
                <p class="text-secondary fs-8">
                    <svg
                        width="16"
                        height="16"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="text-secondary ms-1">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                    </svg>
                    قیمت‌گذاری و نظارت بر قیمت
                </p>
                <svg
                    width="16"
                    heigth="16"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="text-secondary">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
            </a>

            <div class="px-4 d-flex d-lg-none flex-column align-content-center justify-content-center mb-3">
                <div class="bg-white d-flex align-items-center justify-content-between px-3">
                    <p>ارسال رایگان برای این کالا</p>
                    <img src="/client/assets/Product/free-delivery.svg" alt="free delivery" />
                </div>
                <div class="bg-white px-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <p>با استفاده از تسهیلات دیجی‌پی</p>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="2.5"
                            stroke="currentColor"
                            class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <span class="text-primary fs-5">&bull;</span>
                        <p class="text-secondary">۲,۸۲۲,۳۰۰ تومان ماهانه (۱۲ ماه)</p>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <span class="text-primary fs-5">&bull;</span>
                        <p class="text-secondary">اعتبار تا سقف ۳۰,۰۰۰,۰۰۰ تومان</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== Product Options ====== -->
    <section class="container my-lg-5 mx-auto d-flex align-items-center justify-content-center gap-md-5 options">
        <a href="#" class="text-secondary d-flex flex-wrap align-items-center justify-content-center gap-2">
            <img src="/client/assets/Product/express-delivery.svg" alt="express-delivery" />
            <p class="fs-8">امکان تحویل اکسپرس</p>
        </a>
        <a href="#" class="text-secondary d-flex flex-wrap align-items-center justify-content-center gap-2">
            <img src="/client/assets/Product/support.svg" alt="express-delivery" />
            <p class="fs-8">24 ساعته، 7 روز هفته</p>
        </a>
        <a href="#" class="text-secondary d-flex flex-wrap align-items-center justify-content-center gap-2">
            <img src="/client/assets/Product/cash-on-delivery.svg" alt="express-delivery" />
            <p class="fs-8">امکان پرداخت در محل</p>
        </a>
        <a href="#" class="text-secondary d-flex flex-wrap align-items-center justify-content-center gap-2">
            <img src="/client/assets/Product/days-return.svg" alt="express-delivery" />
            <p class="fs-8">هفت روز ضمانت بازگشت کالا</p>
        </a>
        <a href="#" class="text-secondary d-flex flex-wrap align-items-center justify-content-center gap-2">
            <img src="/client/assets/Product/original-products.svg" alt="express-delivery" />
            <p class="fs-8">ضمانت اصل بودن کالا</p>
        </a>
    </section>

    <!-- ====== Seller ====== -->
    <section class="d-none d-lg-block py-lg-5 mx-lg-5 border-top border-bottom border-3">
        <h6 class="mt-lg-5 mt-3 fw-bold">
            <span class="border-bottom border-2 border-danger pb-3">فروشندگان </span>این کالا
        </h6>
        <!-- sellers shop -->
        <div id="sellers">
            <!-- seller no.1 -->
            <div class="w-100 rounded-3 p-3 row flex-wrap flex-lg-nowrap justify-content-around">
                <!-- Icon,ShopName,Score -->
                <div class="col col-lg-2">
                    <div class="d-flex gap-3">
                        <!-- icon -->
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="25"
                            height="25"
                            fill="currentColor"
                            class="bi bi-shop"
                            viewBox="0 0 16 16">
                            <path
                                d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.37 2.37 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5M4 15h3v-5H4zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zm3 0h-2v3h2z" />
                        </svg>
                        <div>
                            <!-- shop name -->
                            <p class="fw-medium">
                                پایاگستر شهر
                                <span class="fs-8 text-success me-2 fw-medium">منتخب</span>
                            </p>
                            <!-- shop score -->
                            <div class="d-flex align-content-center gap-2 my-3">
                                <p class="fs-8 border-start ps-2"><span class="text-success">91.2%</span> رضایت از کالا</p>
                                <p class="fs-8">عملکرد کلی <span class="text-success">عالی</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- delivery -->
                <div class="col col-lg-2">
                    <p class="fs-9">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            fill="currentColor"
                            class="bi bi-truck ms-2"
                            viewBox="0 0 16 16">
                            <path
                                d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5zm1.294 7.456A2 2 0 0 1 4.732 11h5.536a2 2 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456M12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2" />
                        </svg>
                        ارسال دیجی‌کالا
                    </p>
                    <p class="mt-3 fs-9">ارسال امروز (فعلا در شهر تهران و کرج)</p>
                </div>
                <!-- Warranty,price,addToCard -->
                <div class="col col-lg-5">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <!-- Warranty -->
                        <p class="fs-8">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="20"
                                height="20"
                                fill="currentColor"
                                class="bi bi-shield-check"
                                viewBox="0 0 16 16">
                                <path
                                    d="M5.338 1.59a61 61 0 0 0-2.837.856.48.48 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.7 10.7 0 0 0 2.287 2.233c.346.244.652.42.893.533q.18.085.293.118a1 1 0 0 0 .101.025 1 1 0 0 0 .1-.025q.114-.034.294-.118c.24-.113.547-.29.893-.533a10.7 10.7 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.8 11.8 0 0 1-2.517 2.453 7 7 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7 7 0 0 1-1.048-.625 11.8 11.8 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 63 63 0 0 1 5.072.56" />
                                <path
                                    d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0" />
                            </svg>
                            گارانتی ۱۸ ماهه پیشتازان فناوری سیب طلایی (سی تلکام)
                        </p>
                        <!-- price -->
                        <div class="d-flex align-items-center gap-1">
                            <del class="fs-9 text-secondary">۲۱,۱۰۰,۰۰۰</del>
                            <p class="fw-bold fs-5">۲۰,۵۹۹,۰۰۰ <span class="fs-9 text-secondary">تومان</span></p>
                            <p class="fs-8 bg-danger py-1 px-2 rounded-5 text-white fw-bold">6%</p>
                        </div>
                        <!-- add to card -->
                        <a href="#" class="btn btn-danger fs-8 fw-semibold"> افزودن به سبد </a>
                    </div>
                </div>
            </div>
            <!-- seller no.2 -->
            <div class="w-100 rounded-3 p-3 row flex-wrap flex-lg-nowrap justify-content-around">
                <!-- Icon,ShopName,Score -->
                <div class="col col-lg-2 d-flex gap-3">
                    <!-- icon -->
                    <img src="/client/assets/footer/footerlogo2.webp" width="30" height="30" alt="" />
                    <div>
                        <!-- shop name -->
                        <p class="fw-medium">دیجی‌کالا</p>
                        <!-- shop score -->
                        <div class="d-flex align-content-center gap-2 my-3">
                            <p class="fs-8 border-start ps-2"><span class="text-success">87.2%</span> رضایت از کالا</p>
                            <p class="fs-8">عملکرد کلی <span class="text-success">عالی</span></p>
                        </div>
                    </div>
                </div>
                <!-- delivery -->
                <div class="col col-lg-2">
                    <p class="fs-9">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            fill="currentColor"
                            class="bi bi-truck ms-2"
                            viewBox="0 0 16 16">
                            <path
                                d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5zm1.294 7.456A2 2 0 0 1 4.732 11h5.536a2 2 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456M12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2" />
                        </svg>
                        ارسال دیجی‌کالا
                    </p>
                    <p class="mt-3 fs-9">ارسال امروز (فعلا در شهر تهران و کرج)</p>
                </div>
                <!-- Warranty,price,addToCard -->
                <div class="col col-lg-5">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <!-- Warranty -->
                        <p>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="20"
                                height="20"
                                fill="currentColor"
                                class="bi bi-shield-check"
                                viewBox="0 0 16 16">
                                <path
                                    d="M5.338 1.59a61 61 0 0 0-2.837.856.48.48 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.7 10.7 0 0 0 2.287 2.233c.346.244.652.42.893.533q.18.085.293.118a1 1 0 0 0 .101.025 1 1 0 0 0 .1-.025q.114-.034.294-.118c.24-.113.547-.29.893-.533a10.7 10.7 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.8 11.8 0 0 1-2.517 2.453 7 7 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7 7 0 0 1-1.048-.625 11.8 11.8 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 63 63 0 0 1 5.072.56" />
                                <path
                                    d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0" />
                            </svg>
                            گارانتی ۱۸ ماهه سی تلکام
                        </p>
                        <!-- price -->
                        <div class="d-flex align-items-center gap-1">
                            <del class="fs-9 text-secondary">۲۱,۱۰۰,۰۰۰</del>
                            <p class="fw-bold fs-5">۲۰,۵۹۹,۰۰۰ <span class="fs-9 text-secondary">تومان</span></p>
                            <p class="fs-8 bg-danger py-1 px-2 rounded-5 text-white fw-bold">6%</p>
                        </div>
                        <!-- add to card -->
                        <a href="#" class="btn btn-danger fs-8 fw-semibold"> افزودن به سبد </a>
                    </div>
                </div>
            </div>
            <!-- seller no.3 -->
            <div class="w-100 rounded-3 p-3 row flex-wrap flex-lg-nowrap justify-content-around">
                <!-- Icon,ShopName,Score -->
                <div class="col col-lg-2 d-flex gap-3">
                    <!-- icon -->
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="25"
                        height="25"
                        fill="currentColor"
                        class="bi bi-shop"
                        viewBox="0 0 16 16">
                        <path
                            d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.37 2.37 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5M4 15h3v-5H4zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zm3 0h-2v3h2z" />
                    </svg>
                    <div>
                        <!-- shop name -->
                        <p class="fw-medium">دیجی‌کالا</p>
                        <!-- shop score -->
                        <div class="d-flex align-content-center gap-2 my-3">
                            <p class="fs-8 border-start ps-2"><span class="text-success">87.2%</span> رضایت از کالا</p>
                            <p class="fs-8">عملکرد کلی <span class="text-success">عالی</span></p>
                        </div>
                    </div>
                </div>
                <!-- delivery -->
                <div class="col col-lg-2">
                    <p class="fs-9">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            fill="currentColor"
                            class="bi bi-truck ms-2"
                            viewBox="0 0 16 16">
                            <path
                                d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5zm1.294 7.456A2 2 0 0 1 4.732 11h5.536a2 2 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456M12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2" />
                        </svg>
                        ارسال دیجی‌کالا
                    </p>
                    <p class="mt-3 fs-9">ارسال امروز (فعلا در شهر تهران و کرج)</p>
                </div>
                <!-- Warranty,price,addToCard -->
                <div class="col col-lg-5">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <!-- Warranty -->
                        <p>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="20"
                                height="20"
                                fill="currentColor"
                                class="bi bi-shield-check"
                                viewBox="0 0 16 16">
                                <path
                                    d="M5.338 1.59a61 61 0 0 0-2.837.856.48.48 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.7 10.7 0 0 0 2.287 2.233c.346.244.652.42.893.533q.18.085.293.118a1 1 0 0 0 .101.025 1 1 0 0 0 .1-.025q.114-.034.294-.118c.24-.113.547-.29.893-.533a10.7 10.7 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.8 11.8 0 0 1-2.517 2.453 7 7 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7 7 0 0 1-1.048-.625 11.8 11.8 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 63 63 0 0 1 5.072.56" />
                                <path
                                    d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0" />
                            </svg>
                            گارانتی ۱۸ ماهه سی تلکام
                        </p>
                        <!-- price -->
                        <div class="d-flex align-items-center gap-1">
                            <del class="fs-9 text-secondary">۲۱,۱۰۰,۰۰۰</del>
                            <p class="fw-bold fs-5">۲۰,۵۹۹,۰۰۰ <span class="fs-9 text-secondary">تومان</span></p>
                            <p class="fs-8 bg-danger py-1 px-2 rounded-5 text-white fw-bold">6%</p>
                        </div>
                        <!-- add to card -->
                        <a href="#" class="btn btn-danger fs-8 fw-semibold"> افزودن به سبد </a>
                    </div>
                </div>
            </div>
            <!-- seller no.4 -->
            <div class="w-100 rounded-3 p-3 row flex-wrap flex-lg-nowrap justify-content-around">
                <!-- Icon,ShopName,Score -->
                <div class="col col-lg-2 d-flex gap-3">
                    <!-- icon -->
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="25"
                        height="25"
                        fill="currentColor"
                        class="bi bi-shop"
                        viewBox="0 0 16 16">
                        <path
                            d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.37 2.37 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5M4 15h3v-5H4zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zm3 0h-2v3h2z" />
                    </svg>
                    <div>
                        <!-- shop name -->
                        <p class="fw-medium">دیجی‌کالا</p>
                        <!-- shop score -->
                        <div class="d-flex align-content-center gap-2 my-3">
                            <p class="fs-8 border-start ps-2"><span class="text-success">87.2%</span> رضایت از کالا</p>
                            <p class="fs-8">عملکرد کلی <span class="text-success">عالی</span></p>
                        </div>
                    </div>
                </div>
                <!-- delivery -->
                <div class="col col-lg-2">
                    <p class="fs-9">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            fill="currentColor"
                            class="bi bi-truck ms-2"
                            viewBox="0 0 16 16">
                            <path
                                d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5zm1.294 7.456A2 2 0 0 1 4.732 11h5.536a2 2 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456M12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2" />
                        </svg>
                        ارسال دیجی‌کالا
                    </p>
                    <p class="mt-3 fs-9">ارسال امروز (فعلا در شهر تهران و کرج)</p>
                </div>
                <!-- Warranty,price,addToCard -->
                <div class="col col-lg-5">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <!-- Warranty -->
                        <p>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="20"
                                height="20"
                                fill="currentColor"
                                class="bi bi-shield-check"
                                viewBox="0 0 16 16">
                                <path
                                    d="M5.338 1.59a61 61 0 0 0-2.837.856.48.48 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.7 10.7 0 0 0 2.287 2.233c.346.244.652.42.893.533q.18.085.293.118a1 1 0 0 0 .101.025 1 1 0 0 0 .1-.025q.114-.034.294-.118c.24-.113.547-.29.893-.533a10.7 10.7 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.8 11.8 0 0 1-2.517 2.453 7 7 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7 7 0 0 1-1.048-.625 11.8 11.8 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 63 63 0 0 1 5.072.56" />
                                <path
                                    d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0" />
                            </svg>
                            گارانتی ۱۸ ماهه سی تلکام
                        </p>
                        <!-- price -->
                        <div class="d-flex align-items-center gap-1">
                            <del class="fs-9 text-secondary">۲۱,۱۰۰,۰۰۰</del>
                            <p class="fw-bold fs-5">۲۰,۵۹۹,۰۰۰ <span class="fs-9 text-secondary">تومان</span></p>
                            <p class="fs-8 bg-danger py-1 px-2 rounded-5 text-white fw-bold">6%</p>
                        </div>
                        <!-- add to card -->
                        <a href="#" class="btn btn-danger fs-8 fw-semibold"> افزودن به سبد </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== Banner ====== -->
    <section class="my-5 container-lg container-fluid">
        <img src="/client/assets/Product/banner.jpg" alt="banner" class="w-100 rounded-3" />
    </section>

    <!-- ====== Product more Details ====== -->
    <section id="details">
        <ul class="swiper myProductFeatureSwiper nav nav-tabs px-0 px-lg-auto" id="nav">
            <div class="swiper-wrapper">
                <li class="swiper-slide nav-item border-0 fs-8 active" data-target="#intro-content">
                    <a class="nav-link d-flex flex-column" href="#">معرفی</a>
                    <span class="indicator"></span>
                </li>
                <li class="swiper-slide nav-item border-0 fs-8 d-flex flex-column" data-target="#review-content">
                    <a class="nav-link d-flex flex-column text-nowrap" href="#">بررسی تخصصی</a>
                    <span class="indicator"></span>
                </li>
                <li class="swiper-slide nav-item border-0 fs-8 d-flex flex-column" data-target="#detail-content">
                    <a class="nav-link d-flex flex-column" href="#">مشخصات</a>
                    <span class="indicator"></span>
                </li>
                <li class="swiper-slide nav-item border-0 fs-8 d-flex flex-column" data-target="#comment-content">
                    <a class="nav-link d-flex flex-column" href="#">دیدگاه‌ها</a>
                    <span class="indicator"></span>
                </li>
                <li class="swiper-slide nav-item border-0 fs-8 d-flex flex-column" data-target="#question-content">
                    <a class="nav-link d-flex flex-column" href="#">پرسش‌ها</a>
                    <span class="indicator"></span>
                </li>
            </div>
        </ul>
        <div id="content" class="mt-4">
            <!-- introduction -->
            <div id="intro-content" class="content-div mx-lg-5 active">
                <div class="d-flex flex-column mb-3">
                    <h5>معرفی</h5>
                    <div class="border-title"></div>
                </div>
                <div class="content-section">
                    <p class="fs-8">
                        پس از گذشت چند ماه از معرفی phone 2، کمپانی تازه‌نفس ناتینگ، سومین گوشی هوشمند خود با عنوان Phone 2a را
                        به بازار معرفی کرد. این گوشی موبایل با پیروی از طراحی زیبا و منحصر به فرد ناتینگ، سخت افزار قدرتمند و
                        صفحه نمایش با کیفیت، توانسته است همانند دو مدل پیشین در مدت زمان کمی طرفداران پرشماری در سراسر دنیا پیدا
                        کند. در طراحی پشت گوشی، همان فرم شفاف و شیشه‌ای که امضای ناتینگ است، حفظ شده است؛ با این تفاوت که، LEDها
                        در مقایسه با phone 2 به 3 عدد کاهش پیدا کرده‌اند. در پشت گوشی دو ..
                    </p>
                    <div class="more-content">
                        <p class="fs-8">
                            پس از گذشت چند ماه از معرفی phone 2، کمپانی تازه‌نفس ناتینگ، سومین گوشی هوشمند خود با عنوان Phone 2a
                            را به بازار معرفی کرد. این گوشی موبایل با پیروی از طراحی زیبا و منحصر به فرد ناتینگ، سخت افزار قدرتمند
                            و صفحه نمایش با کیفیت، توانسته است همانند دو مدل پیشین در مدت زمان کمی طرفداران پرشماری در سراسر دنیا
                            پیدا کند. در طراحی پشت گوشی، همان فرم شفاف و شیشه‌ای که امضای ناتینگ است، حفظ شده است؛ با این تفاوت
                            که، LEDها در مقایسه با phone 2 به 3 عدد کاهش پیدا کرده‌اند. در پشت گوشی دو دوربین 50 مگاپیکسلی عریض و
                            فوق عریض تعبیه شده‌اند که تصاویر فوق العاده با کیفیتی ثبت می‌کنند و در کنار دوربین سلفی 32 مگاپیکسلی،
                            یک پکیج دوربین قدرتمند را تشکیل می‌دهند. در جلوی گوشی، یک صفحه نمایش با کیفیت و شفاف 6.7 اینچی با
                            تراکم پیکسلی 394 تعبیه شده است که روشنایی فوق العاده‌ی 1300 نیت دارد. در بخش پردازنده، ناتینگ 2a به یک
                            پردازنده هشت هسته‌ای با چیپست Mediatek Dimensity 7200 Pro (4n) مجهز شده است که عملکرد قدرتمندی دارد.
                            باتری این گوشی ظرفیت 5000 میلی‌آمپرساعتی دارد و از شارژ سریع 45 واتی پشتیبانی می‌کند. در بخش سیستم
                            عامل، کمپانی ناتینگ، اندروید نسخه 14.0 با فضای کاربری Nothing OS2.5.5 را روی این گوشی نصب کرده است و
                            فناوری تشخیص چهره، حسگر اثر انگشت زیر صفحه نمایش و حافظه رم 12 گیگابایتی، ارزش خرید این موبایل را
                            افزایش داده‌اند.
                        </p>
                    </div>
                    <button class="toggle-btn fs-8 text-info mt-2">
                        بیشتر
                        <svg
                            width="15"
                            height="15"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>
                    </button>
                </div>
            </div>
            <!-- reviews -->
            <div id="review-content" class="content-div mx-lg-5">
                <div class="d-flex flex-column mb-3">
                    <h5>بررسی تخصصی</h5>
                    <div class="border-title"></div>
                </div>
                <div class="content-section">
                    <h6 class="my-2">ناتینگ فون 2a خاص ترین میان رده بازار</h6>
                    <p class="fs-8">
                        پس از گذشت چند ماه از معرفی phone 2، کمپانی تازه‌نفس ناتینگ، سومین گوشی هوشمند خود با عنوان Phone 2a را
                        به بازار معرفی کرد. این گوشی موبایل با پیروی از طراحی زیبا و منحصر به فرد ناتینگ، سخت افزار قدرتمند و
                        صفحه نمایش با کیفیت، توانسته است همانند دو مدل پیشین در مدت زمان کم، طرفداران پرشماری در سراسر دنیا پیدا
                        کند. در ادامه به بررسی کامل این گوشی پرداخته می‌پردازیم.
                    </p>
                    <div class="more-content">
                        <hr />

                        <p class="fw-bold my-lg-4">طراحی و ساخت</p>
                        <div class="row mb-3">
                            <div class="col col-lg-9">
                                <p class="fs-8 fw-medium">
                                    طراحی این گوشی در یک کلام خاص و دوست داشتنی است. در بخش پشتی گوشی، همان فرم شفاف که امضای ناتینگ
                                    است، حفظ شده است؛ با این تفاوت که، LEDهای گلیف اینترفیس در مقایسه با phone 2 به 3 عدد کاهش پیدا
                                    کرده‌اند. قاب پشتی از پلاستیک ساخته شده‌است که جذب بالایی در برابر اثر انگشت دارد. در زیر این قاب
                                    شفاف بخش‌هایی از سخت افزار گوشی دیده می‌شود که از الگوی خاصی پیروی می‌کند و طبق گفته‌ی کمپانی، این
                                    الگو از نقشه‌ی مترو نیویورک الهام گرفته شده است.
                                </p>
                            </div>
                            <div class="col col-lg-3 h-25">
                                <img
                                    src="/client/assets/Product/nothingPhone/review1.jpg"
                                    alt="review image"
                                    class="h-100 w-100 rounded-4" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col col-lg-3 h-25">
                                <img
                                    src="/client/assets/Product/nothingPhone/review2.jpg"
                                    alt="review image"
                                    class="h-100 w-100 rounded-4" />
                            </div>
                            <div class="col col-lg-9">
                                <p class="fs-8 fw-medium">
                                    طراحی و نوع قرارگیری دوربین‌ها هم به نوع خود جالب هستند و نسبت به ناتینگ 1 و 2 تغییر کرده‌اند.
                                    بیرون زدگی دوربین‌ها آزاردهنده نیست و به گونه‌ای طراحی شده‌اند که در نگاه اول شما را یاد شخصیت‌های
                                    کارتونی یا چشم‌های یک ربات می‌اندازند. ابعاد این گوشی 161.7 x 76.3 x 8.6 میلی‌متر است و با وزن 190
                                    گرمی، لبه‌های صاف و گوشه‌های خمیده، یک گوشی خوش‌دست محسوب می‌شود که حس خوبی را به کاربران خود
                                    منتقل می‌کند.
                                </p>
                            </div>
                        </div>
                        <hr />
                        <p class="fw-bold my-lg-4">GLYPH Interface</p>
                        <div class="row mb-3">
                            <div class="col col-lg-9">
                                <p class="fs-8 fw-medium">
                                    سیستم گلیف اینترفیس، همان LEDهای به کار رفته در پشت گوشی‌های ناتینگ است. همانطور که گفته شد، این
                                    LEDها در ناتینگ 2a به 3 عدد کاهش پیدا کرده‌اند. اما همچنان جذاب هستند و در هنگام روشن شدن، همه‌ی
                                    نگاه‌ها را به سمت گوشی شما جذب می‌کنند. در منوی تنظیمات، می‌توان جزییات بسیار زیادی برای اعلان‌ها
                                    مشخص کرد. به عنوان مثال، برای هر تماس گیرنده کدام LED و به چه صورت روشن و خاموش شود. یکی دیگر از
                                    قابلیت‌های جذاب این سیستم، در هنگام استفاده از تایمر گوشی است که با گذشت زمان، نور یکی از LEDها کم
                                    و کمتر می‌شود و لازم نیست دائما به صفحه نمایش گوشی خیره شوید.
                                </p>
                            </div>
                            <div class="col col-lg-3 h-25">
                                <img
                                    src="/client/assets/Product/nothingPhone/review3.jpg"
                                    alt="review image"
                                    class="h-100 w-100 rounded-4" />
                            </div>
                        </div>
                        <hr />
                        <p class="fw-bold my-lg-4">صفحه نمایش</p>
                        <div class="row mb-3">
                            <div class="col col-lg-3 h-25">
                                <img
                                    src="/client/assets/Product/nothingPhone/review2.jpg"
                                    alt="review image"
                                    class="h-100 w-100 rounded-4" />
                            </div>
                            <div class="col col-lg-9">
                                <p class="fs-8 fw-medium">
                                    صفحه نمایش 2a یکی از بزرگترین مزیت‌های این گوشی است که تفاوت خاصی با نسخه پرچمدار ناتینگ 2 ندارد و
                                    کیفیت فوق‌العاده‌ی آن حفظ شده است. در بخش روبروی گوشی، یک صفحه نمایش 6.7 اینچی AMOLED با رزولوشن
                                    1080X 2412 با پشتیبانی از 1 میلیارد رنگ قرار دارد. این صفحه نمایش با بهره‌مندی از روشنایی عالیِ
                                    1300 نیتی، تصاویر را با شفافیت و جزییات کم‌نظیری نمایش می‌دهد. از طرفی، حاشیه‌های بسیار کم این
                                    صفحه باعث شده است تا نسبت تصویر به بدنه آن به 87.6 درصد افزایش یابد که عدد فوق العاده‌ای محسوب
                                    می‌شود.
                                </p>
                            </div>
                        </div>
                        <hr />
                        <p class="fw-bold my-lg-4">دوربین‌های پشتی</p>
                        <div class="row mb-3">
                            <div class="col col-lg-9">
                                <p class="fs-8 fw-medium">
                                    ناتینگ فون، دو دوربین پشتی را در این گوشی حفظ کرده است و خبری از دوربین‌های ماکرو یا تله فوتو
                                    نیست. اما این دو دوربین با کیفیت بالایی ارائه شده‌اند. دوربین اصلی این گوشی به یک لنز عریض با
                                    رزولوشن 50 مگاپیکسل مجهز شده است که دیافراگم 1.9 دارد. تصاویر ثبت شده با این دوربین از کیفیت
                                    بالایی برخوردارند. در بحث عکاسی در شب هم، عملکرد عالی آن حفظ می‌شود و همانطور که در تصاویر مشاهده
                                    می‌کنید، عکس‌ها نویز بسیار کمی دارند. این دوربین امکان فیلم برداری 4k با نرخ 30 فریم بر ثانیه و
                                    فیلم‌برداری 1080p با سرعت 120 فریم بر ثانیه را دارد.
                                </p>
                            </div>
                            <div class="col col-lg-3 h-25">
                                <img
                                    src="/client/assets/Product/nothingPhone/review3.jpg"
                                    alt="review image"
                                    class="h-100 w-100 rounded-4" />
                            </div>
                        </div>
                    </div>
                    <button class="toggle-btn fs-8 text-info mt-2">
                        بیشتر
                        <svg
                            width="15"
                            height="15"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>
                    </button>
                </div>
            </div>
            <!-- details -->
            <div id="detail-content" class="content-div mx-lg-5">
                <div class="d-flex flex-column mb-3">
                    <h5>مشخصات</h5>
                    <div class="border-title"></div>
                </div>
                <div class="content-section">
                    <div class="d-flex justify-content-between justify-content-lg-start me-5 gap-5">
                        <p class="fw-semibold">مشخصات کلی</p>

                        <div class="content-section">
                            <div class="d-flex align-items-center flex-wrap gap-5">
                                <div class="d-flex flex-column gap-4 fs-8 text-secondary">
                                    <p>توضیحات سیم کارت</p>
                                    <p>تعداد سیم کارت</p>
                                    <p>دسته ‌بندی</p>
                                </div>
                                <div class="d-flex flex-column gap-4 fs-8">
                                    <p>توضیحات سیم کارت</p>
                                    <p>تعداد سیم کارت</p>
                                    <p>دسته ‌بندی</p>
                                </div>
                            </div>
                            <div class="more-content"></div>
                        </div>
                    </div>
                    <div class="more-content">
                        <hr />
                        <div class="d-flex justify-content-between justify-content-lg-start me-5 gap-5">
                            <p class="fw-semibold">پردازنده</p>

                            <div class="content-section">
                                <div class="d-flex align-items-center flex-wrap gap-5">
                                    <div class="d-flex flex-column gap-4 fs-8 text-secondary">
                                        <p>توضیحات سیم کارت</p>
                                        <p>تعداد سیم کارت</p>
                                        <p>دسته ‌بندی</p>
                                    </div>
                                    <div class="d-flex flex-column gap-4 fs-8">
                                        <p>توضیحات سیم کارت</p>
                                        <p>تعداد سیم کارت</p>
                                        <p>دسته ‌بندی</p>
                                    </div>
                                </div>
                                <div class="more-content"></div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between justify-content-lg-start me-5 gap-5">
                            <p class="fw-semibold">حافظه</p>

                            <div class="content-section">
                                <div class="d-flex align-items-center flex-wrap gap-5">
                                    <div class="d-flex flex-column gap-4 fs-8 text-secondary">
                                        <p>توضیحات سیم کارت</p>
                                        <p>تعداد سیم کارت</p>
                                        <p>دسته ‌بندی</p>
                                    </div>
                                    <div class="d-flex flex-column gap-4 fs-8">
                                        <p>توضیحات سیم کارت</p>
                                        <p>تعداد سیم کارت</p>
                                        <p>دسته ‌بندی</p>
                                    </div>
                                </div>
                                <div class="more-content"></div>
                            </div>
                        </div>
                    </div>
                    <button class="toggle-btn fs-8 text-info mt-2">
                        بیشتر
                        <svg
                            width="15"
                            height="15"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>
                    </button>
                </div>
            </div>
            <!-- comments -->
            <div id="comment-content" class="content-div mx-lg-5">
                <div class="d-flex flex-column mb-3">
                    <h5>امتیاز و دیدگاه کاربران</h5>
                    <div class="border-title"></div>
                </div>
                <div class="content-section row">
                    <!-- scores  -->
                    <div class="d-none d-lg-block col-lg-3 position-sticky top-0 start-0">
                        <!-- score -->
                        <div class="d-flex gap-2">
                            <p class="fs-4 fw-bold">4.6 <span class="fs-9">از 5</span></p>
                        </div>
                        <!-- stars -->
                        <div class="d-flex align-items-center gap-2">
                            <div>
                                <!-- fill stars -->
                                <svg
                                    width="15"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="currentColor"
                                    class="text-warning">
                                    <path
                                        fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg
                                    width="15"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="currentColor"
                                    class="text-warning">
                                    <path
                                        fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg
                                    width="15"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="currentColor"
                                    class="text-warning">
                                    <path
                                        fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg
                                    width="15"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="currentColor"
                                    class="text-warning">
                                    <path
                                        fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <!-- outline star -->
                                <svg
                                    width="15"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="text-warning">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                                </svg>
                            </div>
                            <p class="fs-9 text-secondary">از مجموع <span>۴۷</span> امتیاز</p>
                        </div>
                        <p class="text-secondary fs-9 mt-3">شما هم درباره این کالا دیدگاه ثبت کنید</p>

                        <button
                            class="btn btn-outline-danger w-75 fs-8 my-3"
                            data-bs-toggle="modal"
                            data-bs-target="#commentModal">
                            ثبت دیدگاه
                        </button>

                        <p class="fs-9">
                            <svg
                                width="20"
                                height="20"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="ms-1 text-secondary">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                            </svg>
                            با ثبت دیدگاه بر روی کالاهای خریداری شده ۵ امتیاز در دیجی‌کلاب دریافت کنید
                        </p>
                    </div>
                    <!-- comments -->
                    <div class="col col-lg-9">
                        <!-- people score -->
                        <div class="d-none d-lg-flex align-items-center gap-1">
                            <svg
                                width="16"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="text-success">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                            </svg>
                            <p class="fs-9 text-secondary">۹۳% (۲۰ نفر) از خریداران، این کالا را پیشنهاد کرده‌اند</p>
                            <button
                                type="button"
                                class="bg-transparent border-0"
                                data-bs-toggle="tooltip"
                                data-bs-placement="bottom"
                                title="خریداران کالا با انتخاب یکی از گزینه های پیشنهاد یا عدم پیشنهاد، تجربه خرید خود را با کاربران به اشتراک میگذارند">
                                <svg
                                    width="15"
                                    height="15"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="text-secondary">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                                </svg>
                            </button>
                        </div>
                        <!-- more image -->
                        <div class="d-flex align-items-center gap-2 my-4">
                            <button
                                style="width: 8%"
                                type="button"
                                class="border rounded-2 p-0 m-0 bg-transparent opacity-50"
                                data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <img
                                    src="/client/assets/Product/nothingPhone/1.webp"
                                    alt="image"
                                    class="w-75 h-50 p-1 object-fit-contain" />
                            </button>
                            <button
                                style="width: 8%"
                                type="button"
                                class="border rounded-2 p-0 m-0 bg-transparent opacity-50"
                                data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <img
                                    src="/client/assets/Product/nothingPhone/3.webp"
                                    alt="image"
                                    class="w-75 h-50 p-1 object-fit-contain" />
                            </button>
                        </div>
                        <button
                            class="d-none d-lg-block border-0 bg-transparent text-info fs-8"
                            style="width: 8%"
                            type="button"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            بیشتر
                        </button>

                        <hr />

                        <!-- sorting header -->
                        <div class="d-none d-lg-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-start">
                                <div class="d-flex align-items-center gap-1">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="16"
                                        fill="currentColor"
                                        class="bi bi-sort-down"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M3.5 2.5a.5.5 0 0 0-1 0v8.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L3.5 11.293zm3.5 1a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5M7.5 6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1z" />
                                    </svg>
                                    <p class="fs-8 fw-bold">مرتب سازی:</p>
                                </div>
                                <ul id="colorList" class="d-flex align-items-center gap-3 fs-8">
                                    <li class="text-danger">جدیدترین</li>
                                    <li>دیدگاه خریداران</li>
                                    <li>مفیدترین</li>
                                </ul>
                            </div>
                            <div>
                                <p class="fs-9 text-secondary">69 دیدگاه</p>
                            </div>
                        </div>

                        <!-- users rating -->
                        <div class="d-none d-lg-block mt-4">
                            <div class="d-flex gap-2">
                                <button type="button" class="btn border rounded-5 fs-8 fw-bold px-3 py-2">کیفیت و کارایی</button>
                                <button type="button" class="btn border rounded-5 fs-8 fw-bold px-3 py-2">قیمت و ارزش خرید</button>
                                <button type="button" class="btn border rounded-5 fs-8 fw-bold px-3 py-2">شباهت یا مغایرت</button>
                            </div>
                            <p class="fs-9 text-secondary mt-3">این دسته‌بندی توسط هوش مصنوعی انجام شده و ممکن است دقیق نباشد</p>
                        </div>

                        <hr />
                        <!-- comment componnet -->
                        <div>
                            <!-- comment header -->
                            <div class="d-flex align-items-center justify-content-between my-4">
                                <div class="d-flex gap-2 align-items-center">
                                    <p class="fs-9 text-secondary">دانیال دهقانی</p>
                                    <span class="text-success bg-success-subtle fs-9 fw-medium rounded-5 px-2 py-1">خریدار</span>
                                    <p class="opacity-25">&bull;</p>
                                    <p class="fs-9 text-secondary">۶ روز پیش</p>
                                </div>
                                <button class="bg-transparent border-0">
                                    <svg
                                        width="18"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="text-secondary">
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                                    </svg>
                                </button>
                            </div>
                            <!-- rating -->
                            <div>
                                <!-- stars -->
                                <div class="d-flex align-items-center gap-1">
                                    <svg
                                        width="22"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                        class="text-warning">
                                        <path
                                            fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <svg
                                        width="22"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                        class="text-warning">
                                        <path
                                            fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <svg
                                        width="22"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                        class="text-warning">
                                        <path
                                            fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <svg
                                        width="22"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                        class="text-warning">
                                        <path
                                            fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <svg
                                        width="22"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                        class="text-warning">
                                        <path
                                            fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <p class="text-success fs-8 fw-semibold mt-3">
                                    <svg
                                        width="16"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="size-6">
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                    </svg>
                                    پیشنهاد میکنم
                                </p>
                            </div>
                            <!-- comment text -->
                            <div class="my-4">
                                <h6 class="fw-bold mb-3">گوشی خاص و باحال</h6>
                                <p>
                                    گوشی ناتیفنگ فون جنس بدنه و پشت گوشی خیلی خوبه کیفیت ال ای دی های نورش هم خوبه اما این گوشی حسی که
                                    بهت میده انگار گوگل این گوشی رو ساخته و نه شرکت ناتینگ فون ، متریال استفاده شده همه واقعا عالی
                                    هستش ، بعلاوه اینکه بنظرم رابط کاربری و .. باید توسط ناتینگ فون بهینه بشه . در اخر بعنوان یک گوشی
                                    ۲۰ میلیونی بدون شارژر خوبه ولی برای خرید شارژر و گلس و قاب مناسب هم باید حدودا ۳ ۴ ت پول هزینه
                                    کنید که سرجمع این گوشی ۲۴ ت براتون آب میخوره
                                </p>
                            </div>
                            <!-- Positive and negative points -->
                            <div>
                                <!-- ++ Positive poinst ++ -->
                                <!-- number.1 -->
                                <div class="d-flex align-items-center gap-1 my-2">
                                    <svg
                                        width="18"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="text-success">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                    </svg>
                                    <p class="fs-8">اندروید</p>
                                </div>
                                <!-- number.2 -->
                                <div class="d-flex align-items-center gap-1 my-2">
                                    <svg
                                        width="18"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="text-success">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                    </svg>
                                    <p class="fs-8">رم ۱۲ و حافظه ۲۵۶ گیگ</p>
                                </div>
                                <!-- -- Negative poinst -- -->
                                <!-- number.1 -->
                                <div class="d-flex align-items-center gap-1 my-2">
                                    <svg
                                        width="18"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="text-danger">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                                    </svg>
                                    <p class="fs-8">رابط کاربری</p>
                                </div>
                            </div>
                            <!-- seller name , color , like-dislike -->
                            <div class="mt-4 d-flex align-items-center justify-content-between">
                                <!-- seller name , color -->
                                <div class="d-flex align-items-center gap-4">
                                    <div class="d-flex align-items-center gap-2">
                                        <svg
                                            width="20"
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            class="size-6">
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
                                        </svg>
                                        <p class="fs-9 text-secondary">دیجی‌کالا</p>
                                    </div>
                                    <div class="opacity-25">&bull;</div>
                                    <div class="d-flex align-items-center gap-2">
                                        <span style="width: 15px; height: 15px" class="bg-black rounded-5"></span>
                                        <p class="fs-8 text-secondary">مشکی</p>
                                    </div>
                                </div>
                                <!-- like and dis-like -->
                                <div class="d-flex align-items-center gap-3">
                                    <!-- like -->
                                    <button
                                        type="button"
                                        class="bg-transparent border-0 d-flex align-items-center gap-2 text-secondary">
                                        <p class="fs-8">2</p>
                                        <svg
                                            width="25"
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            class="size-6">
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                        </svg>
                                    </button>
                                    <!-- dislike -->
                                    <button
                                        type="button"
                                        class="bg-transparent border-0 d-flex align-items-center gap-2 text-secondary">
                                        <p class="fs-8">6</p>
                                        <svg
                                            width="25"
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            class="size-6">
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M7.498 15.25H4.372c-1.026 0-1.945-.694-2.054-1.715a12.137 12.137 0 0 1-.068-1.285c0-2.848.992-5.464 2.649-7.521C5.287 4.247 5.886 4 6.504 4h4.016a4.5 4.5 0 0 1 1.423.23l3.114 1.04a4.5 4.5 0 0 0 1.423.23h1.294M7.498 15.25c.618 0 .991.724.725 1.282A7.471 7.471 0 0 0 7.5 19.75 2.25 2.25 0 0 0 9.75 22a.75.75 0 0 0 .75-.75v-.633c0-.573.11-1.14.322-1.672.304-.76.93-1.33 1.653-1.715a9.04 9.04 0 0 0 2.86-2.4c.498-.634 1.226-1.08 2.032-1.08h.384m-10.253 1.5H9.7m8.075-9.75c.01.05.027.1.05.148.593 1.2.925 2.55.925 3.977 0 1.487-.36 2.89-.999 4.125m.023-8.25c-.076-.365.183-.75.575-.75h.908c.889 0 1.713.518 1.972 1.368.339 1.11.521 2.287.521 3.507 0 1.553-.295 3.036-.831 4.398-.306.774-1.086 1.227-1.918 1.227h-1.053c-.472 0-.745-.556-.5-.96a8.95 8.95 0 0 0 .303-.54" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <hr />

                        <!-- comment componnet -->
                        <div>
                            <!-- comment header -->
                            <div class="d-flex align-items-center justify-content-between my-4">
                                <div class="d-flex gap-2 align-items-center">
                                    <p class="fs-9 text-secondary">دانیال دهقانی</p>
                                    <span class="text-success bg-success-subtle fs-9 fw-medium rounded-5 px-2 py-1">خریدار</span>
                                    <p class="opacity-25">&bull;</p>
                                    <p class="fs-9 text-secondary">۶ روز پیش</p>
                                </div>
                                <button class="bg-transparent border-0">
                                    <svg
                                        width="18"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="text-secondary">
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                                    </svg>
                                </button>
                            </div>
                            <!-- rating -->
                            <div>
                                <!-- stars -->
                                <div class="d-flex align-items-center gap-1">
                                    <svg
                                        width="22"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                        class="text-warning">
                                        <path
                                            fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <svg
                                        width="22"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                        class="text-warning">
                                        <path
                                            fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <svg
                                        width="22"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                        class="text-warning">
                                        <path
                                            fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <svg
                                        width="22"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                        class="text-warning">
                                        <path
                                            fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <svg
                                        width="22"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                        class="text-warning">
                                        <path
                                            fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <p class="text-success fs-8 fw-semibold mt-3">
                                    <svg
                                        width="16"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="size-6">
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                    </svg>
                                    پیشنهاد میکنم
                                </p>
                            </div>
                            <!-- comment text -->
                            <div class="my-4">
                                <h6 class="fw-bold mb-3">گوشی خاص و باحال</h6>
                                <p>
                                    گوشی ناتیفنگ فون جنس بدنه و پشت گوشی خیلی خوبه کیفیت ال ای دی های نورش هم خوبه اما این گوشی حسی که
                                    بهت میده انگار گوگل این گوشی رو ساخته و نه شرکت ناتینگ فون ، متریال استفاده شده همه واقعا عالی
                                    هستش ، بعلاوه اینکه بنظرم رابط کاربری و .. باید توسط ناتینگ فون بهینه بشه . در اخر بعنوان یک گوشی
                                    ۲۰ میلیونی بدون شارژر خوبه ولی برای خرید شارژر و گلس و قاب مناسب هم باید حدودا ۳ ۴ ت پول هزینه
                                    کنید که سرجمع این گوشی ۲۴ ت براتون آب میخوره
                                </p>
                            </div>
                            <!-- Positive and negative points -->
                            <div>
                                <!-- ++ Positive poinst ++ -->
                                <!-- number.1 -->
                                <div class="d-flex align-items-center gap-1 my-2">
                                    <svg
                                        width="18"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="text-success">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                    </svg>
                                    <p class="fs-8">اندروید</p>
                                </div>
                                <!-- number.2 -->
                                <div class="d-flex align-items-center gap-1 my-2">
                                    <svg
                                        width="18"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="text-success">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                    </svg>
                                    <p class="fs-8">رم ۱۲ و حافظه ۲۵۶ گیگ</p>
                                </div>
                                <!-- -- Negative poinst -- -->
                                <!-- number.1 -->
                                <div class="d-flex align-items-center gap-1 my-2">
                                    <svg
                                        width="18"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="text-danger">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                                    </svg>
                                    <p class="fs-8">رابط کاربری</p>
                                </div>
                            </div>
                            <!-- seller name , color , like-dislike -->
                            <div class="mt-4 d-flex align-items-center justify-content-between">
                                <!-- seller name , color -->
                                <div class="d-flex align-items-center gap-4">
                                    <div class="d-flex align-items-center gap-2">
                                        <svg
                                            width="20"
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            class="size-6">
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
                                        </svg>
                                        <p class="fs-9 text-secondary">دیجی‌کالا</p>
                                    </div>
                                    <div class="opacity-25">&bull;</div>
                                    <div class="d-flex align-items-center gap-2">
                                        <span style="width: 15px; height: 15px" class="bg-black rounded-5"></span>
                                        <p class="fs-8 text-secondary">مشکی</p>
                                    </div>
                                </div>
                                <!-- like and dis-like -->
                                <div class="d-flex align-items-center gap-3">
                                    <!-- like -->
                                    <button
                                        type="button"
                                        class="bg-transparent border-0 d-flex align-items-center gap-2 text-secondary">
                                        <p class="fs-8">2</p>
                                        <svg
                                            width="25"
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            class="size-6">
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                        </svg>
                                    </button>
                                    <!-- dislike -->
                                    <button
                                        type="button"
                                        class="bg-transparent border-0 d-flex align-items-center gap-2 text-secondary">
                                        <p class="fs-8">6</p>
                                        <svg
                                            width="25"
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            class="size-6">
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M7.498 15.25H4.372c-1.026 0-1.945-.694-2.054-1.715a12.137 12.137 0 0 1-.068-1.285c0-2.848.992-5.464 2.649-7.521C5.287 4.247 5.886 4 6.504 4h4.016a4.5 4.5 0 0 1 1.423.23l3.114 1.04a4.5 4.5 0 0 0 1.423.23h1.294M7.498 15.25c.618 0 .991.724.725 1.282A7.471 7.471 0 0 0 7.5 19.75 2.25 2.25 0 0 0 9.75 22a.75.75 0 0 0 .75-.75v-.633c0-.573.11-1.14.322-1.672.304-.76.93-1.33 1.653-1.715a9.04 9.04 0 0 0 2.86-2.4c.498-.634 1.226-1.08 2.032-1.08h.384m-10.253 1.5H9.7m8.075-9.75c.01.05.027.1.05.148.593 1.2.925 2.55.925 3.977 0 1.487-.36 2.89-.999 4.125m.023-8.25c-.076-.365.183-.75.575-.75h.908c.889 0 1.713.518 1.972 1.368.339 1.11.521 2.287.521 3.507 0 1.553-.295 3.036-.831 4.398-.306.774-1.086 1.227-1.918 1.227h-1.053c-.472 0-.745-.556-.5-.96a8.95 8.95 0 0 0 .303-.54" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <hr />
                        <!-- more comment -->
                        <button class="text-info fs-9 border-0 bg-transparent mt-2">
                            65 دیدگاه دیگر
                            <svg
                                width="16"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- comment modal -->
            <div
                class="modal fade"
                id="commentModal"
                tabindex="-1"
                aria-labelledby="commentModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title fs-7" id="commentModalLabel">دیدگاه و امتیاز من</h6>
                            <button type="button" class="btn-close mx-0" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="d-flex align-items-start justify-content-center">
                                <div>
                                    <img src="/client/assets/Product/nothingPhone/1.webp" alt="phone" width="70" />
                                    <p class="fs-9 text-secondary fw-light mt-4">30 مرداد 1403</p>
                                </div>
                                <h5 class="fs-7 px-5">گوشی موبایل ناتینگ مدل Phone 2a ظرفیت 256 گیگابایت رم 12 گیگابایت</h5>
                            </div>
                            <hr />
                            <h6 class="fs-7 fw-bold my-5">دیدگاه خود را شرح دهید</h6>

                            <div class="mb-3">
                                <label for="commentTitle" class="form-label fs-8">عنوان نظر</label>
                                <input type="email" class="form-control fs-8" id="commentTitle" />
                            </div>

                            <!-- Positive Points Section -->
                            <h6 class="fs-8 mt-5">نکات مثبت</h6>
                            <div class="form-group mt-3 d-flex align-items-center justify-content-between border rounded-3">
                                <input type="text" id="inputTextPositive" class="form-control border-0" />
                                <button id="addButtonPositive" class="bg-transparent border-0 fs-3 m-2">+</button>
                            </div>
                            <ul id="positiveList" class="list-group p-0">
                                <!-- Positive points will be added here -->
                            </ul>

                            <!-- Negative Points Section -->
                            <h6 class="fs-8 mt-5">نکات منفی</h6>
                            <div class="form-group mt-3 d-flex align-items-center justify-content-between border rounded-3">
                                <input type="text" id="inputTextNegative" class="form-control border-0" />
                                <button id="addButtonNegative" class="bg-transparent border-0 fs-3 m-2">+</button>
                            </div>
                            <ul id="negativeList" class="list-group p-0">
                                <!-- Negative points will be added here -->
                            </ul>

                            <!-- comment textarea -->
                            <div class="mt-5">
                                <label for="exampleFormControlTextarea1" class="form-label fs-8"
                                >متن نظر<span class="text-danger">*</span></label
                                >
                                <textarea
                                    class="form-control"
                                    id="exampleFormControlTextarea1"
                                    rows="3"
                                    placeholder="برای ما بنویسید..."></textarea>
                            </div>

                            <div class="form-check d-flex justify-content-end flex-row-reverse align-items-center mt-4">
                                <label class="form-check-label fs-8 fw-bold" for="flexCheckDefault">
                                    ارسال دیدگاه به صورت ناشناس
                                </label>
                                <input class="form-check-input ms-2" type="checkbox" value="" id="flexCheckDefault" />
                            </div>

                            <hr />

                            <button type="button" class="btn btn-danger w-100 mt-3">ثبت امتیاز و دیدگاه</button>

                            <p class="fs-9 text-center my-3">
                                ثبت دیدگاه به معنی موافقت با<a href="#" class="text-info"> قوانین انتشار دیجی‌کالا </a>است.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- questions -->
            <div id="question-content" class="content-div mx-lg-5">
                <div class="d-flex flex-column mb-3">
                    <h5>پرسش‌ها</h5>
                    <div class="border-title"></div>
                </div>
                <div class="content-section row">
                    <div class="d-none d-lg-block col-lg-3 position-sticky top-0 start-0">
                        <p class="text-secondary fs-9 mt-3">شما هم درباره این کالا پرسش ثبت کنید</p>

                        <button
                            class="btn btn-outline-danger w-75 my-3 fs-8"
                            data-bs-toggle="modal"
                            data-bs-target="#questionModal">
                            ثبت پرسش
                        </button>
                    </div>
                    <div class="d-none d-lg-block col-lg-9">
                        <!-- sorting header -->
                        <div class="d-none d-lg-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-start">
                                <div class="d-flex align-items-center gap-1">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="16"
                                        fill="currentColor"
                                        class="bi bi-sort-down"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M3.5 2.5a.5.5 0 0 0-1 0v8.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L3.5 11.293zm3.5 1a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5M7.5 6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1z" />
                                    </svg>
                                    <p class="fs-8 fw-bold">مرتب سازی:</p>
                                </div>
                                <ul id="colorList" class="d-flex align-items-center gap-3 fs-8">
                                    <li class="text-danger">جدیدترین</li>
                                    <li>بیشتری پاسخ</li>
                                </ul>
                            </div>
                            <div>
                                <p class="fs-9 text-secondary">100 پرسش</p>
                            </div>
                        </div>
                        <!-- question has answer-->
                        <div>
                            <!-- question text -->
                            <div class="d-flex align-items-center gap-4 mt-4">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="20"
                                    height="20"
                                    fill="currentColor"
                                    class="bi bi-question-square text-info"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                    <path
                                        d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286m1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94" />
                                </svg>
                                <p>گوشی من شب تا صبح ۸ درصد باتری کم می‌کند طبیعیه یا ایراد داره</p>
                            </div>
                            <!-- answer -->
                            <div class="mt-4">
                                <div class="d-flex align-items-start gap-3">
                                    <p class="fs-9 fw-medium">پاسخ</p>
                                    <div>
                                        <p class="fs-8">آپدیت کن ایراد داره برا من دو روز یه بار شارژ میکنم عالیه</p>
                                        <div class="d-flex align-items-center gap-2 mt-3">
                                            <p class="fs-9 text-secondary">علی اصفر غلامی</p>
                                            <span class="text-success bg-success-subtle fs-9 fw-medium rounded-5 px-2 py-1">خریدار</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end gap-3">
                                    <p class="fs-8 text-secondary">آیا این پاسخ مفید بود؟</p>
                                    <!-- like and dis-like -->
                                    <div class="d-flex align-items-center gap-3">
                                        <!-- like -->
                                        <button
                                            type="button"
                                            class="bg-transparent border-0 d-flex align-items-center gap-2 text-secondary">
                                            <p class="fs-8">2</p>
                                            <svg
                                                width="25"
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke-width="1.5"
                                                stroke="currentColor"
                                                class="size-6">
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                            </svg>
                                        </button>
                                        <!-- dislike -->
                                        <button
                                            type="button"
                                            class="bg-transparent border-0 d-flex align-items-center gap-2 text-secondary">
                                            <p class="fs-8">6</p>
                                            <svg
                                                width="25"
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke-width="1.5"
                                                stroke="currentColor"
                                                class="size-6">
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M7.498 15.25H4.372c-1.026 0-1.945-.694-2.054-1.715a12.137 12.137 0 0 1-.068-1.285c0-2.848.992-5.464 2.649-7.521C5.287 4.247 5.886 4 6.504 4h4.016a4.5 4.5 0 0 1 1.423.23l3.114 1.04a4.5 4.5 0 0 0 1.423.23h1.294M7.498 15.25c.618 0 .991.724.725 1.282A7.471 7.471 0 0 0 7.5 19.75 2.25 2.25 0 0 0 9.75 22a.75.75 0 0 0 .75-.75v-.633c0-.573.11-1.14.322-1.672.304-.76.93-1.33 1.653-1.715a9.04 9.04 0 0 0 2.86-2.4c.498-.634 1.226-1.08 2.032-1.08h.384m-10.253 1.5H9.7m8.075-9.75c.01.05.027.1.05.148.593 1.2.925 2.55.925 3.977 0 1.487-.36 2.89-.999 4.125m.023-8.25c-.076-.365.183-.75.575-.75h.908c.889 0 1.713.518 1.972 1.368.339 1.11.521 2.287.521 3.507 0 1.553-.295 3.036-.831 4.398-.306.774-1.086 1.227-1.918 1.227h-1.053c-.472 0-.745-.556-.5-.96a8.95 8.95 0 0 0 .303-.54" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- new answer -->
                            <div class="mt-4 pt-3 border-top">
                                <button type="button" class="border-0 bg-transparent text-info fs-8">
                                    ثبت پاسخ جدید
                                    <svg
                                        width="14"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <hr style="opacity: 100; margin: 20px 0" />

                        <!-- question has no answer-->
                        <div>
                            <!-- question text -->
                            <div class="d-flex align-items-center gap-4 mt-4">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="20"
                                    height="20"
                                    fill="currentColor"
                                    class="bi bi-question-square text-info"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                    <path
                                        d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286m1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94" />
                                </svg>
                                <p>سفییدشش کی موجود میشهههه🥺😭</p>
                            </div>
                            <!-- new answer -->
                            <div class="mt-4 pt-3 border-top">
                                <button type="button" class="border-0 bg-transparent text-info fs-8">
                                    ثبت پاسخ
                                    <svg
                                        width="14"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <hr style="opacity: 100; margin: 20px 0" />
                        <!-- more question -->
                        <button class="text-info fs-9 border-0 bg-transparent mt-2">
                            100 پرسش دیگر
                            <svg
                                width="16"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                    </div>
                    <!-- mobile question -->
                    <div class="d-flex d-lg-none swiper myQuestionSwiper">
                        <div class="swiper-wrapper pe-2">
                            <!-- question has answer-->
                            <div class="swiper-slide ps-3">
                                <div class="p-3">
                                    <!-- question text -->
                                    <div class="d-flex gap-3 mt-4">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="13"
                                            height="13"
                                            fill="currentColor"
                                            class="bi bi-question-square text-info"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                            <path
                                                d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286m1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94" />
                                        </svg>
                                        <p class="fs-9">گوشی من شب تا صبح ۸ درصد باتری کم می‌کند طبیعیه یا ایراد داره</p>
                                    </div>
                                    <!-- answer -->
                                    <div class="mt-4">
                                        <div class="d-flex align-items-start gap-3">
                                            <p class="fs-9 fw-medium">پاسخ</p>
                                            <div>
                                                <p class="fs-9">آپدیت کن ایراد داره برا من دو روز یه بار شارژ میکنم عالیه</p>
                                                <div class="d-flex align-items-center gap-2 mt-5">
                                                    <p class="fs-9 text-secondary">علی اصفر غلامی</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- question has answer-->
                            <div class="swiper-slide ps-3">
                                <div class="p-3">
                                    <!-- question text -->
                                    <div class="d-flex gap-3 mt-4">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="13"
                                            height="13"
                                            fill="currentColor"
                                            class="bi bi-question-square text-info"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                            <path
                                                d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286m1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94" />
                                        </svg>
                                        <p class="fs-9">گوشی من شب تا صبح ۸ درصد باتری کم می‌کند طبیعیه یا ایراد داره</p>
                                    </div>
                                    <!-- answer -->
                                    <div class="mt-4">
                                        <div class="d-flex align-items-start gap-3">
                                            <p class="fs-9 fw-medium">پاسخ</p>
                                            <div>
                                                <p class="fs-9">آپدیت کن ایراد داره برا من دو روز یه بار شارژ میکنم عالیه</p>
                                                <div class="d-flex align-items-center gap-2 mt-5">
                                                    <p class="fs-9 text-secondary">علی اصفر غلامی</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- question has answer-->
                            <div class="swiper-slide ps-3">
                                <div class="p-3">
                                    <!-- question text -->
                                    <div class="d-flex gap-3 mt-4">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="13"
                                            height="13"
                                            fill="currentColor"
                                            class="bi bi-question-square text-info"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                            <path
                                                d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286m1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94" />
                                        </svg>
                                        <p class="fs-9">گوشی من شب تا صبح ۸ درصد باتری کم می‌کند طبیعیه یا ایراد داره</p>
                                    </div>
                                    <!-- answer -->
                                    <div class="mt-4">
                                        <div class="d-flex align-items-start gap-3">
                                            <p class="fs-9 fw-medium">پاسخ</p>
                                            <div>
                                                <p class="fs-9">آپدیت کن ایراد داره برا من دو روز یه بار شارژ میکنم عالیه</p>
                                                <div class="d-flex align-items-center gap-2 mt-5">
                                                    <p class="fs-9 text-secondary">علی اصفر غلامی</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- question has answer-->
                            <button class="swiper-slide bg-transparent text-info d-flex flex-column justify-content-center">
                                <svg
                                    width="25"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="size-6">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                همه
                            </button>
                        </div>
                    </div>

                    <div class="d-flex d-lg-none align-items-center justify-content-between mt-3">
                        <svg
                            width="20"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="size-6">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 0 1 1.037-.443 48.282 48.282 0 0 0 5.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                        </svg>
                        <div class="w-75">
                            <p class="fs-9">دیدگاه خود را درباره این کالا بنویسید</p>
                            <p class="fs-9 fw-light text-secondary">
                                با ثبت دیدگاه بر روی کالاهای خریداری شده ۵ امتیاز در دیجی‌کلاب دریافت کنید
                            </p>
                        </div>
                        <svg
                            width="14"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Question modal -->
            <div
                class="modal fade"
                id="questionModal"
                tabindex="-1"
                aria-labelledby="questionModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title fs-7" id="questionModalLabel">پرسش خود را درباره این کالا ثبت کنید</h6>
                            <button type="button" class="btn-close mx-0" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <textarea id="textArea" class="form-control" rows="5"></textarea>
                                <div id="charCount" class="text-muted fs-9 text-end">0 / 100</div>

                                <hr />

                                <button id="submitButton" class="btn btn-danger w-100 mt-2" disabled>ثبت پرسش</button>

                                <p class="fs-9 text-center my-3">
                                    ثبت دیدگاه به معنی موافقت با<a href="#" class="text-info"> قوانین انتشار دیجی‌کالا </a>است.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== Bought next to it ====== -->
    <section class="my-5 border rounded-3 p-3">
        <div class="d-flex flex-column mb-3">
            <h6>در کنارش خریداری شده</h6>
            <div class="border-title"></div>
        </div>
        <!-- products -->
        <div class="d-flex align-items-center overflow-x-scroll">
            <!-- has SpecialSell -->
            <div class="border-start px-4">
                <img src="/client/assets/Product/special sell/SpecialSell.svg" alt="special sell" />
                <img src="/client/assets/Product/special sell/1.webp" alt="" width="150" />
                <p class="fs-8 my-3">کاور مانستر مدل TNT مناسب برای گوشی موبایل ناتینگ فون 1</p>
                <div class="d-flex align-items-center justify-content-between">
                    <p class="text-white bg-danger rounded-5 px-2 py-1 fs-9">9%</p>
                    <div class="d-flex align-items-center gap-2">
                        <div class="fs-8">
                            <p class="fw-bold mb-3">150,000</p>
                            <del class="text-secondary opacity-50">165,000</del>
                        </div>
                        <p class="fs-9">تومان</p>
                    </div>
                </div>
            </div>
            <!-- has't SpecialSell -->
            <div class="border-start px-4">
                <img src="/client/assets/Product/special sell/2.webp" alt="" width="150" />
                <p class="fs-8 my-3">کاور مدل kapsooli مناسب برای گوشی موبایل ناتینگ Phone 1</p>
                <p class="fs-9 text-danger mb-3">تنها 3 عدد در انبار باقی مانده</p>
                <div class="d-flex align-items-center justify-content-end">
                    <div class="d-flex align-items-center gap-2">
                        <p class="fw-bold fs-8">150,000</p>
                        <p class="fs-9">تومان</p>
                    </div>
                </div>
            </div>
            <!-- has't SpecialSell -->
            <div class="border-start px-4">
                <img src="/client/assets/Product/special sell/3.webp" alt="" width="150" />
                <p class="fs-8 my-3">کاور هوکو مدل Capsule مناسب برای گوشی موبایل ناتینگ Nothing Phone 2</p>
                <p class="fs-9 text-danger mb-3">تنها 3 عدد در انبار باقی مانده</p>
                <div class="d-flex align-items-center justify-content-end">
                    <div class="d-flex align-items-center gap-2">
                        <p class="fw-bold fs-8">150,000</p>
                        <p class="fs-9">تومان</p>
                    </div>
                </div>
            </div>
            <!-- has SpecialSell -->
            <div class="border-start px-4">
                <img src="/client/assets/Product/special sell/SpecialSell.svg" alt="special sell" />
                <img src="/client/assets/Product/special sell/1.webp" alt="" width="150" />
                <p class="fs-8 my-3">کاور مانستر مدل TNT مناسب برای گوشی موبایل ناتینگ فون 1</p>
                <div class="d-flex align-items-center justify-content-between">
                    <p class="text-white bg-danger rounded-5 px-2 py-1 fs-9">9%</p>
                    <div class="d-flex align-items-center gap-2">
                        <div class="fs-8">
                            <p class="fw-bold mb-3">150,000</p>
                            <del class="text-secondary opacity-50">165,000</del>
                        </div>
                        <p class="fs-9">تومان</p>
                    </div>
                </div>
            </div>
            <!-- has't SpecialSell -->
            <div class="border-start px-4">
                <img src="/client/assets/Product/special sell/2.webp" alt="" width="150" />
                <p class="fs-8 my-3">کاور مدل kapsooli مناسب برای گوشی موبایل ناتینگ Phone 1</p>
                <p class="fs-9 text-danger mb-3">تنها 3 عدد در انبار باقی مانده</p>
                <div class="d-flex align-items-center justify-content-end">
                    <div class="d-flex align-items-center gap-2">
                        <p class="fw-bold fs-8">150,000</p>
                        <p class="fs-9">تومان</p>
                    </div>
                </div>
            </div>
            <!-- has't SpecialSell -->
            <div class="border-start px-4">
                <img src="/client/assets/Product/special sell/3.webp" alt="" width="150" />
                <p class="fs-8 my-3">کاور هوکو مدل Capsule مناسب برای گوشی موبایل ناتینگ Nothing Phone 2</p>
                <p class="fs-9 text-danger mb-3">تنها 3 عدد در انبار باقی مانده</p>
                <div class="d-flex align-items-center justify-content-end">
                    <div class="d-flex align-items-center gap-2">
                        <p class="fw-bold fs-8">150,000</p>
                        <p class="fs-9">تومان</p>
                    </div>
                </div>
            </div>
            <!-- has SpecialSell -->
            <div class="border-start px-4">
                <img src="/client/assets/Product/special sell/SpecialSell.svg" alt="special sell" />
                <img src="/client/assets/Product/special sell/1.webp" alt="" width="150" />
                <p class="fs-8 my-3">کاور مانستر مدل TNT مناسب برای گوشی موبایل ناتینگ فون 1</p>
                <div class="d-flex align-items-center justify-content-between">
                    <p class="text-white bg-danger rounded-5 px-2 py-1 fs-9">9%</p>
                    <div class="d-flex align-items-center gap-2">
                        <div class="fs-8">
                            <p class="fw-bold mb-3">150,000</p>
                            <del class="text-secondary opacity-50">165,000</del>
                        </div>
                        <p class="fs-9">تومان</p>
                    </div>
                </div>
            </div>
            <!-- has't SpecialSell -->
            <div class="border-start px-4">
                <img src="/client/assets/Product/special sell/3.webp" alt="" width="150" />
                <p class="fs-8 my-3">کاور هوکو مدل Capsule مناسب برای گوشی موبایل ناتینگ Nothing Phone 2</p>
                <p class="fs-9 text-danger mb-3">تنها 3 عدد در انبار باقی مانده</p>
                <div class="d-flex align-items-center justify-content-end">
                    <div class="d-flex align-items-center gap-2">
                        <p class="fw-bold fs-8">150,000</p>
                        <p class="fs-9">تومان</p>
                    </div>
                </div>
            </div>
            <!-- has SpecialSell -->
            <div class="border-start px-4">
                <img src="/client/assets/Product/special sell/SpecialSell.svg" alt="special sell" />
                <img src="/client/assets/Product/special sell/1.webp" alt="" width="150" />
                <p class="fs-8 my-3">کاور مانستر مدل TNT مناسب برای گوشی موبایل ناتینگ فون 1</p>
                <div class="d-flex align-items-center justify-content-between">
                    <p class="text-white bg-danger rounded-5 px-2 py-1 fs-9">9%</p>
                    <div class="d-flex align-items-center gap-2">
                        <div class="fs-8">
                            <p class="fw-bold mb-3">150,000</p>
                            <del class="text-secondary opacity-50">165,000</del>
                        </div>
                        <p class="fs-9">تومان</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

        @push('script')
            <script src="/client/js/product.js"></script>
        @endpush

</div>
