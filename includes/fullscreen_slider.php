<section id="home" class="fullscreen-slider">

    <!-- Swiper Slider -->
    <div class="swiper main-swiper">
        <div class="swiper-wrapper">

            <!-- Slide 1 -->
            <div class="swiper-slide">
                <img src="https://pgsc.edu.bd/admin/slide/slide1.jpg" alt="প্রধান ভবন"
                    class="slide-image" data-src="https://pgsc.edu.bd/admin/slide/slide1.jpg">
                <div class="slide-overlay">
                    <div class="slide-content">
                        <span class="slide-badge">
                            <i class="fas fa-university"></i> প্রধান ভবন
                        </span>
                        <h2 class="slide-title">আমাদের ঐতিহ্যবাহী প্রধান ভবন</h2>
                        <p class="slide-desc">১৯৫০ সাল থেকে শিক্ষাদানের এই পবিত্র স্থান, যেখানে তৈরি হচ্ছে আগামী দিনের নারী নেতৃত্ব</p>
                        <div class="slide-actions">
                            <a href="#notice" class="slide-btn-primary">
                                <i class="fas fa-info-circle"></i> বিস্তারিত জানুন
                            </a>
                            <a href="#gallery" class="slide-btn-secondary">
                                <i class="fas fa-images"></i> গ্যালারি
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="swiper-slide">
                <img src="https://pgsc.edu.bd/admin/slide/slide2.jpg" alt="লাইব্রেরি"
                    class="slide-image" data-src="https://pgsc.edu.bd/admin/slide/slide2.jpg">
                <div class="slide-overlay">
                    <div class="slide-content">
                        <span class="slide-badge" style="background:rgba(37,99,235,0.85)">
                            <i class="fas fa-book"></i> ডিজিটাল লাইব্রেরি
                        </span>
                        <h2 class="slide-title">আধুনিক ডিজিটাল লাইব্রেরি</h2>
                        <p class="slide-desc">২০,০০০+ বইয়ের সংগ্রহশালা ও ই-লাইব্রেরি সুবিধা, জ্ঞানের অপার সম্ভাবনা</p>
                        <div class="slide-actions">
                            <a href="#notice" class="slide-btn-primary">
                                <i class="fas fa-info-circle"></i> বিস্তারিত জানুন
                            </a>
                            <a href="#gallery" class="slide-btn-secondary">
                                <i class="fas fa-images"></i> গ্যালারি
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="swiper-slide">
                <img src="https://pgsc.edu.bd/admin/slide/slide3.jpg" alt="বিজ্ঞান ল্যাব"
                    class="slide-image" data-src="https://pgsc.edu.bd/admin/slide/slide3.jpg">
                <div class="slide-overlay">
                    <div class="slide-content">
                        <span class="slide-badge" style="background:rgba(124,58,237,0.85)">
                            <i class="fas fa-flask"></i> বিজ্ঞান গবেষণাগার
                        </span>
                        <h2 class="slide-title">আধুনিক বিজ্ঞান গবেষণাগার</h2>
                        <p class="slide-desc">প্রযুক্তিগত শিক্ষার জন্য সজ্জিত বিজ্ঞান ল্যাব, হাতে-কলমে শিক্ষার সুযোগ</p>
                        <div class="slide-actions">
                            <a href="#notice" class="slide-btn-primary">
                                <i class="fas fa-info-circle"></i> বিস্তারিত জানুন
                            </a>
                            <a href="#gallery" class="slide-btn-secondary">
                                <i class="fas fa-images"></i> গ্যালারি
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Custom Nav Buttons -->
        <button class="slide-nav slide-prev" aria-label="আগের স্লাইড">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button class="slide-nav slide-next" aria-label="পরের স্লাইড">
            <i class="fas fa-chevron-right"></i>
        </button>

        <!-- Pagination -->
        <div class="swiper-pagination slider-pagination"></div>
    </div>

    <!-- Slide Counter -->
    <div class="slide-counter">
        <span id="slideCurrentNum">1</span>
        <span class="counter-sep">/</span>
        <span class="counter-total">3</span>
    </div>

    <!-- Scroll Indicator -->
    <div class="scroll-indicator">
        <a href="#notice" aria-label="নিচে যান">
            <span class="scroll-text">নিচে দেখুন</span>
            <div class="scroll-icon">
                <div class="scroll-dot"></div>
            </div>
        </a>
    </div>

</section>

<!-- Image Modal -->

<div class="image-modal" id="imageModal">
    <div class="modal-content">
        <span class="close-modal" id="closeModal">
            <i class="fas fa-times"></i>
        </span>
        <img id="modalImage" src="" alt="Enlarged Image">
    </div>
</div>