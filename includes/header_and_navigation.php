<header class="bg-white/95 backdrop-blur-lg shadow-lg sticky top-0 z-30 border-b border-green-100">
    <nav class="container mx-auto px-4 md:px-6 py-3">
        <div class="flex justify-between items-center gap-4">

            <!-- Logo -->
            <div class="flex items-center gap-3 min-w-0">
                <div class="relative flex-shrink-0">
                    <img src="https://pgsc.edu.bd/image/schoollogo.png" alt="PGSC Logo"
                        class="h-14 w-14 md:h-16 md:w-16 lg:h-20 lg:w-20 drop-shadow-lg border-4 border-white rounded-full">
                    <div
                        class="absolute -bottom-1 -right-1 bg-gradient-to-r from-orange-500 to-yellow-500 text-white px-2 py-0.5 text-[10px] font-bold rounded-full shadow-lg whitespace-nowrap">
                        স্থাপিত ১৯৫০
                    </div>
                </div>
                <div class="min-w-0">
                    <h1
                        class="text-base sm:text-lg  lg:text-2xl  font-bold text-green-900 leading-tight school-name-font">
                        পাহাড়তলী গার্লস স্কুল এন্ড কলেজ
                    </h1>
                    <p class="text-xs text-gray-500 hidden sm:block mt-0.5">
                        <i class="fas fa-map-marker-alt text-green-600 mr-1"></i>
                        পাহাড়তলী, আকবরশাহ, চট্টগ্রাম
                    </p>
                </div>
            </div>

            <!-- Desktop Navigation -->
            <ul class="hidden lg:flex items-center space-x-0.5 xl:space-x-1">
                <li><a href="#home" class="nav-link active text-green-700 solaiman-font text-sm xl:text-base">হোম</a>
                </li>
                <li><a href="#notice" class="nav-link text-gray-700 solaiman-font text-sm xl:text-base">নোটিশ</a></li>
                <li><a href="#administration"
                        class="nav-link text-gray-700 solaiman-font text-sm xl:text-base">প্রশাসন</a></li>
                <li><a href="#academic" class="nav-link text-gray-700 solaiman-font text-sm xl:text-base">একাডেমিক</a>
                </li>
                <li><a href="#admission" class="nav-link text-gray-700 solaiman-font text-sm xl:text-base">ভর্তি
                        তথ্য</a></li>
                <li><a href="#results" class="nav-link text-gray-700 solaiman-font text-sm xl:text-base">ফলাফল</a></li>
                <li><a href="#gallery" class="nav-link text-gray-700 solaiman-font text-sm xl:text-base">গ্যালারি</a>
                </li>
                <li><a href="#contact" class="nav-link text-gray-700 solaiman-font text-sm xl:text-base">যোগাযোগ</a>
                </li>
            </ul>

            <!-- Right Side -->
            <div class="flex items-center gap-2 flex-shrink-0">
                <a href="#"
                    class="hidden lg:inline-flex items-center bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white px-4 py-2 xl:px-6 xl:py-2.5 rounded-full font-bold text-sm transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-0.5 whitespace-nowrap">
                    <i class="fas fa-sign-in-alt mr-2"></i>লগইন
                </a>
                <button id="mobileMenuButton"
                    class="lg:hidden flex items-center justify-center w-10 h-10 rounded-full bg-green-50 hover:bg-green-100 text-green-800 transition-colors"
                    aria-label="মেনু খুলুন">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </nav>
</header>

<!-- ✅ OVERLAY — header এর বাইরে, body এর direct child -->
<div id="mobileMenuOverlay"></div>

<!-- ✅ DRAWER — header এর বাইরে, body এর direct child -->
<div id="mobileMenu">

    <!-- Drawer Header -->
    <div class="flex justify-between items-center px-5 py-4 border-b border-green-100 bg-green-50 flex-shrink-0">
        <div class="flex items-center gap-2">
            <img src="https://pgsc.edu.bd/image/schoollogo.png" alt="Logo"
                class="h-9 w-9 rounded-full border-2 border-green-200">
            <span class="text-sm font-bold text-green-900 solaiman-font">মেনু</span>
        </div>
        <button id="closeMobileMenu"
            class="flex items-center justify-center w-8 h-8 rounded-full bg-white hover:bg-red-50 text-gray-500 hover:text-red-500 transition-colors border border-gray-200"
            aria-label="মেনু বন্ধ করুন">
            <i class="fas fa-times text-base"></i>
        </button>
    </div>

    <!-- Nav Links -->
    <ul>
        <li>
            <a href="#home" class="mobile-nav-link active solaiman-font">
                <span class="menu-icon bg-green-100">
                    <i class="fas fa-home text-green-700"></i>
                </span>
                হোম
            </a>
        </li>
        <li>
            <a href="#notice" class="mobile-nav-link solaiman-font">
                <span class="menu-icon bg-blue-100">
                    <i class="fas fa-bullhorn text-blue-700"></i>
                </span>
                নোটিশ
            </a>
        </li>
        <li>
            <a href="#administration" class="mobile-nav-link solaiman-font">
                <span class="menu-icon bg-purple-100">
                    <i class="fas fa-users text-purple-700"></i>
                </span>
                প্রশাসন
            </a>
        </li>
        <li>
            <a href="#academic" class="mobile-nav-link solaiman-font">
                <span class="menu-icon bg-amber-100">
                    <i class="fas fa-graduation-cap text-amber-700"></i>
                </span>
                একাডেমিক
            </a>
        </li>
        <li>
            <a href="#admission" class="mobile-nav-link solaiman-font">
                <span class="menu-icon bg-teal-100">
                    <i class="fas fa-user-plus text-teal-700"></i>
                </span>
                ভর্তি তথ্য
            </a>
        </li>
        <li>
            <a href="#results" class="mobile-nav-link solaiman-font">
                <span class="menu-icon bg-green-100">
                    <i class="fas fa-chart-line text-green-700"></i>
                </span>
                ফলাফল
            </a>
        </li>
        <li>
            <a href="#gallery" class="mobile-nav-link solaiman-font">
                <span class="menu-icon bg-pink-100">
                    <i class="fas fa-images text-pink-700"></i>
                </span>
                গ্যালারি
            </a>
        </li>
        <li>
            <a href="#contact" class="mobile-nav-link solaiman-font">
                <span class="menu-icon bg-red-100">
                    <i class="fas fa-phone-alt text-red-700"></i>
                </span>
                যোগাযোগ
            </a>
        </li>
    </ul>

    <!-- Drawer Footer -->
    <div class="mobile-menu-footer">
        <a href="#" class="menu-login-btn">
            <i class="fas fa-sign-in-alt"></i> লগইন পোর্টাল
        </a>
        <div class="menu-social">
            <a href="https://facebook.com/pgsc.edu.bd" target="_blank" class="menu-social-fb">
                <i class="fab fa-facebook-f"></i> Facebook
            </a>
            <a href="#" class="menu-social-yt">
                <i class="fab fa-youtube"></i> YouTube
            </a>
        </div>
    </div>
</div>