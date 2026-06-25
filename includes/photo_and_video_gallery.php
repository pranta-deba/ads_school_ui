 <section id="gallery" class="section-container bg-white">
        <div class="container mx-auto px-4 md:px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-green-900 mb-4 solaiman-font section-title">
                    ফটো ও ভিডিও গ্যালারি
                </h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto solaiman-font">
                    আমাদের শিক্ষাঙ্গনের স্মরণীয় মুহূর্ত ও কার্যক্রম
                </p>
            </div>

            <!-- Gallery Tabs -->
            <div class="flex flex-wrap justify-center gap-3 mb-12">
                <button id="photoTab"
                    class="px-6 py-2 bg-green-600 text-white rounded-full font-medium hover:bg-green-700 transition duration-300 solaiman-font active">
                    ফটো গ্যালারি
                </button>
                <button id="videoTab"
                    class="px-6 py-2 bg-gray-200 text-gray-700 rounded-full font-medium hover:bg-gray-300 transition duration-300 solaiman-font">
                    ভিডিও গ্যালারি
                </button>
            </div>

            <!-- Photo Gallery -->
            <div id="photoGallery" class="gallery-grid">
                <!-- Gallery Item 1 -->
                <div class="gallery-item" data-category="event">
                    <img src="https://pgsc.edu.bd/admin/slide/slide1.jpg" alt="বার্ষিক ক্রীড়া" loading="lazy">
                    <div class="gallery-overlay">
                        <h4 class="font-bold text-lg mb-1 solaiman-font">বার্ষিক ক্রীড়া প্রতিযোগিতা</h4>
                        <p class="text-sm">২০২৫ সালের বার্ষিক ক্রীড়া</p>
                    </div>
                </div>

                <!-- Gallery Item 2 -->
                <div class="gallery-item" data-category="academic">
                    <img src="https://pgsc.edu.bd/admin/slide/slide2.jpg" alt="বিজ্ঞান মেলা" loading="lazy">
                    <div class="gallery-overlay">
                        <h4 class="font-bold text-lg mb-1 solaiman-font">বিজ্ঞান মেলা</h4>
                        <p class="text-sm">শিক্ষার্থীদের বিজ্ঞান প্রকল্প</p>
                    </div>
                </div>

                <!-- Gallery Item 3 -->
                <div class="gallery-item" data-category="sports">
                    <img src="https://pgsc.edu.bd/admin/slide/slide3.jpg" alt="ফুটবল টুর্নামেন্ট" loading="lazy">
                    <div class="gallery-overlay">
                        <h4 class="font-bold text-lg mb-1 solaiman-font">ফুটবল টুর্নামেন্ট</h4>
                        <p class="text-sm">বার্ষিক ফুটবল প্রতিযোগিতা</p>
                    </div>
                </div>

                <!-- Gallery Item 4 -->
                <div class="gallery-item" data-category="event">
                    <img src="https://pgsc.edu.bd/admin/slide/slide4.jpg" alt="সাংস্কৃতিক অনুষ্ঠান" loading="lazy">
                    <div class="gallery-overlay">
                        <h4 class="font-bold text-lg mb-1 solaiman-font">সাংস্কৃতিক অনুষ্ঠান</h4>
                        <p class="text-sm">জাতীয় দিবস উদযাপন</p>
                    </div>
                </div>

                <!-- Gallery Item 5 -->
                <div class="gallery-item" data-category="campus">
                    <img src="https://pgsc.edu.bd/admin/slide/slide5.jpg" alt="স্কুল ভবন" loading="lazy">
                    <div class="gallery-overlay">
                        <h4 class="font-bold text-lg mb-1 solaiman-font">প্রধান ভবন</h4>
                        <p class="text-sm">আমাদের ঐতিহ্যবাহী ভবন</p>
                    </div>
                </div>

                <!-- Gallery Item 6 -->
                <div class="gallery-item" data-category="academic">
                    <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?auto=format&fit=crop&w=800&q=80"
                        alt="লাইব্রেরি" loading="lazy">
                    <div class="gallery-overlay">
                        <h4 class="font-bold text-lg mb-1 solaiman-font">লাইব্রেরি</h4>
                        <p class="text-sm">আধুনিক লাইব্রেরি সুবিধা</p>
                    </div>
                </div>
            </div>

            <!-- Video Gallery -->
            <div id="videoGallery" class="video-gallery hidden">
                <!-- Video Item 1 -->
                <div class="video-item">
                    <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?auto=format&fit=crop&w=800&q=80"
                        alt="ভিডিও থাম্বনেল">
                    <div class="video-overlay">
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-4">
                        <h4 class="text-white font-bold solaiman-font">স্কুল ভার্চুয়াল ট্যুর</h4>
                    </div>
                </div>

                <!-- Video Item 2 -->
                <div class="video-item">
                    <img src="https://images.unsplash.com/photo-1542744095-fcf48d80b0fd?auto=format&fit=crop&w=800&q=80"
                        alt="ভিডিও থাম্বনেল">
                    <div class="video-overlay">
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-4">
                        <h4 class="text-white font-bold solaiman-font">বার্ষিক ক্রীড়া প্রতিযোগিতা</h4>
                    </div>
                </div>

                <!-- Video Item 3 -->
                <div class="video-item">
                    <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?auto=format&fit=crop&w=800&q=60"
                        alt="ভিডিও থাম্বনেল">
                    <div class="video-overlay">
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-4">
                        <h4 class="text-white font-bold solaiman-font">সাংস্কৃতিক অনুষ্ঠান</h4>
                    </div>
                </div>

                <!-- Video Item 4 -->
                <div class="video-item">
                    <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?auto=format&fit=crop&w=800&q=40"
                        alt="ভিডিও থাম্বনেল">
                    <div class="video-overlay">
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-4">
                        <h4 class="text-white font-bold solaiman-font">বিজ্ঞান মেলা ২০২৫</h4>
                    </div>
                </div>

                <!-- Video Item 5 -->
                <div class="video-item">
                    <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?auto=format&fit=crop&w=800&q=20"
                        alt="ভিডিও থাম্বনেল">
                    <div class="video-overlay">
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-4">
                        <h4 class="text-white font-bold solaiman-font">শিক্ষক দিবস উদযাপন</h4>
                    </div>
                </div>

                <!-- Video Item 6 -->
                <div class="video-item">
                    <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?auto=format&fit=crop&w=800&q=10"
                        alt="ভিডিও থাম্বনেল">
                    <div class="video-overlay">
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-4">
                        <h4 class="text-white font-bold solaiman-font">বই মেলা ২০২৫</h4>
                    </div>
                </div>
            </div>

            <!-- View More Button -->
            <div class="text-center mt-12">
                <a href="#"
                    class="inline-flex items-center gap-3 bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white px-8 py-3 rounded-full font-bold transition-all duration-300 shadow-lg hover:shadow-xl">
                    <i class="fas fa-images"></i>
                    <span class="solaiman-font">আরও দেখুন</span>
                </a>
            </div>
        </div>
    </section>