// ====== MOBILE MENU ======
const mobileMenuButton = document.getElementById('mobileMenuButton');
const closeMobileMenu = document.getElementById('closeMobileMenu');
const mobileMenu = document.getElementById('mobileMenu');
const mobileOverlay = document.getElementById('mobileMenuOverlay');
const mobileLinks = document.querySelectorAll('.mobile-nav-link');

function openMenu() {
    mobileMenu.classList.add('active');
    mobileOverlay.classList.add('active');
    document.body.classList.add('menu-open');
}

function closeMenu() {
    mobileMenu.classList.remove('active');
    mobileOverlay.classList.remove('active');
    document.body.classList.remove('menu-open');
}

mobileMenuButton.addEventListener('click', openMenu);
closeMobileMenu.addEventListener('click', closeMenu);
mobileOverlay.addEventListener('click', closeMenu);
mobileLinks.forEach(link => link.addEventListener('click', closeMenu));
document.addEventListener('keydown', e => { if (e.key === 'Escape') closeMenu(); });


document.addEventListener('DOMContentLoaded', function () {
    const items = document.querySelectorAll('.bulletin-item');
    if (items.length < 2) return;

    let currentIndex = 0;

    function updateBulletin() {
        const currentItem = items[currentIndex];

        // বর্তমান আইটেমকে ওপরে পাঠিয়ে দাও
        currentItem.classList.remove('active');
        currentItem.classList.add('exiting');

        // পরবর্তী আইটেম ইনডেক্স
        currentIndex = (currentIndex + 1) % items.length;
        const nextItem = items[currentIndex];

        // পরবর্তী আইটেমকে নিচ থেকে মাঝখানে আনো
        nextItem.classList.remove('exiting');
        nextItem.classList.add('active');

        // এনিমেশন শেষ হলে exiting ক্লাস পরিষ্কার করা (স্মুথনেসের জন্য জরুরি)
        setTimeout(() => {
            items.forEach((item, index) => {
                if (index !== currentIndex) item.classList.remove('exiting');
            });
        }, 800); // এনিমেশন টাইমের সমান
    }

    // ৫ সেকেন্ড পর পর নিউজ আপডেট হবে
    setInterval(updateBulletin, 5000);
});

// ====== SWIPER SLIDER ======
const mainSwiper = new Swiper('.main-swiper', {
    loop: true,
    speed: 900,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
    },
    effect: 'fade',
    fadeEffect: { crossFade: true },
    pagination: {
        el: '.slider-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.slide-next',
        prevEl: '.slide-prev',
    },
    keyboard: { enabled: true },
    on: {
        slideChange: function () {
            const el = document.getElementById('slideCurrentNum');
            if (el) el.textContent = this.realIndex + 1;
        }
    }
});




// ====== TV BULLETIN ANIMATION ======
const bulletinItems = document.querySelectorAll('.bulletin-item');
let currentBulletin = 0;

function rotateBulletin() {
    // Remove active class from all items
    bulletinItems.forEach(item => {
        item.classList.remove('active');
    });

    // Add exiting class to current item
    if (bulletinItems[currentBulletin]) {
        bulletinItems[currentBulletin].classList.add('exiting');
    }

    // Calculate next item
    currentBulletin = (currentBulletin + 1) % bulletinItems.length;

    // Add active class to next item
    setTimeout(() => {
        bulletinItems.forEach(item => {
            item.classList.remove('exiting');
        });
        if (bulletinItems[currentBulletin]) {
            bulletinItems[currentBulletin].classList.add('active');
        }
    }, 500);
}

// Start bulletin rotation
setInterval(rotateBulletin, 5000);

// ====== GALLERY TABS ======
const photoTab = document.getElementById('photoTab');
const videoTab = document.getElementById('videoTab');
const photoGallery = document.getElementById('photoGallery');
const videoGallery = document.getElementById('videoGallery');

photoTab.addEventListener('click', () => {
    photoTab.classList.add('active', 'bg-green-600', 'text-white');
    photoTab.classList.remove('bg-gray-200', 'text-gray-700');
    videoTab.classList.remove('active', 'bg-green-600', 'text-white');
    videoTab.classList.add('bg-gray-200', 'text-gray-700');

    photoGallery.classList.remove('hidden');
    videoGallery.classList.add('hidden');
});

videoTab.addEventListener('click', () => {
    videoTab.classList.add('active', 'bg-green-600', 'text-white');
    videoTab.classList.remove('bg-gray-200', 'text-gray-700');
    photoTab.classList.remove('active', 'bg-green-600', 'text-white');
    photoTab.classList.add('bg-gray-200', 'text-gray-700');

    videoGallery.classList.remove('hidden');
    photoGallery.classList.add('hidden');
});

// ====== IMAGE MODAL ======
// ====== IMAGE MODAL ======
const imageModal  = document.getElementById('imageModal');
const modalImage  = document.getElementById('modalImage');
const closeModal  = document.getElementById('closeModal');
const galleryItems = document.querySelectorAll('.gallery-item');

function openModal(imgSrc) {
    if (!imgSrc) return;
    modalImage.src = imgSrc;
    imageModal.classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closeModalFn() {
    imageModal.classList.remove('active');
    document.body.style.overflow = 'auto';
    setTimeout(() => { modalImage.src = ''; }, 300);
}

// Slide images — click এ modal open
// Swiper drag conflict এড়াতে pointerup ব্যবহার করছি
let pointerMoved = false;

document.querySelectorAll('.swiper-slide').forEach(slide => {
    slide.addEventListener('pointerdown', () => { pointerMoved = false; });
    slide.addEventListener('pointermove', () => { pointerMoved = true; });
    slide.addEventListener('pointerup', function (e) {
        if (pointerMoved) return; // drag হলে modal খুলবে না
        const img = this.querySelector('.slide-image');
        if (img) openModal(img.dataset.src || img.src);
    });
});

// Gallery items
galleryItems.forEach(item => {
    item.addEventListener('click', function () {
        const img = this.querySelector('img');
        if (img) openModal(img.src);
    });
});

// Close handlers
closeModal.addEventListener('click', closeModalFn);
imageModal.addEventListener('click', e => {
    if (e.target === imageModal) closeModalFn();
});
document.addEventListener('keydown', e => {
    if (e.key === 'Escape' && imageModal.classList.contains('active')) closeModalFn();
});

// ====== BACK TO TOP WITH PROGRESS (NO ARROW) ======
const backToTop = document.getElementById('backToTop');
const percentageText = document.getElementById('percentageText');
const progressCircle = document.querySelector('.progress-ring-circle');
const radius = 30;
const circumference = 2 * Math.PI * radius;

progressCircle.style.strokeDasharray = circumference;
progressCircle.style.strokeDashoffset = circumference;

window.addEventListener('scroll', () => {
    const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
    const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    const scrollPercentage = (scrollTop / scrollHeight) * 100;

    // Update progress circle
    const offset = circumference - (scrollPercentage / 100) * circumference;
    progressCircle.style.strokeDashoffset = offset;

    // Update percentage text
    percentageText.textContent = Math.round(scrollPercentage) + '%';

    // Show/hide button
    if (scrollPercentage > 10) {
        backToTop.classList.add('active');
    } else {
        backToTop.classList.remove('active');
    }
});

backToTop.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});
// ====== MARQUEE CLOSE WITH COOKIE ======
const closeMarqueeBtn = document.getElementById('closeMarquee');
const yellowMarquee = document.querySelector('.yellow-marquee');

// Cookie চেক করুন
function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
}

// পৃষ্ঠা লোড হলে চেক করুন
window.addEventListener('load', () => {
    const marqueeClosed = getCookie('marqueeClosed');
    if (marqueeClosed === 'true' && yellowMarquee) {
        yellowMarquee.style.display = 'none';
    }
});

if (closeMarqueeBtn && yellowMarquee) {
    closeMarqueeBtn.addEventListener('click', () => {
        // Cookie সেট করুন (7 দিনের জন্য)
        const expires = new Date();
        expires.setTime(expires.getTime() + (7 * 24 * 60 * 60 * 1000));
        document.cookie = `marqueeClosed=true; expires=${expires.toUTCString()}; path=/`;

        // মার্কুই লুকান
        yellowMarquee.style.transform = 'translateY(100%)';
        yellowMarquee.style.transition = 'transform 0.3s ease';

        setTimeout(() => {
            yellowMarquee.style.display = 'none';
        }, 300);
    });
}
// ====== ENHANCED JS BACKGROUND EFFECTS ======
const particlesContainer = document.getElementById('particlesContainer');
const floatingShapes = document.createElement('div');
floatingShapes.className = 'floating-shapes';
particlesContainer.appendChild(floatingShapes);

// Create enhanced floating shapes
for (let i = 0; i < 20; i++) {
    const shape = document.createElement('div');
    shape.className = 'shape';

    // Random size and position
    const size = Math.random() * 150 + 50;
    const x = Math.random() * 100;
    const y = Math.random() * 100;
    const duration = Math.random() * 40 + 20;
    const delay = Math.random() * 10;
    const blur = Math.random() * 20 + 10;

    shape.style.width = size + 'px';
    shape.style.height = size + 'px';
    shape.style.left = x + '%';
    shape.style.top = y + '%';
    shape.style.animationDuration = duration + 's';
    shape.style.animationDelay = delay + 's';
    shape.style.opacity = Math.random() * 0.1 + 0.05;
    shape.style.filter = `blur(${blur}px)`;

    // Random gradient
    const colors = [
        'linear-gradient(135deg, rgba(13, 76, 23, 0.05), rgba(34, 197, 94, 0.05))',
        'linear-gradient(135deg, rgba(245, 158, 11, 0.05), rgba(251, 191, 36, 0.05))',
        'linear-gradient(135deg, rgba(59, 130, 246, 0.05), rgba(96, 165, 250, 0.05))',
        'linear-gradient(135deg, rgba(168, 85, 247, 0.05), rgba(192, 132, 252, 0.05))'
    ];
    shape.style.background = colors[Math.floor(Math.random() * colors.length)];

    floatingShapes.appendChild(shape);
}

// Create pulse dots
for (let i = 0; i < 15; i++) {
    const dot = document.createElement('div');
    dot.className = 'pulse-dot';

    dot.style.left = Math.random() * 100 + '%';
    dot.style.top = Math.random() * 100 + '%';
    dot.style.animationDelay = Math.random() * 2 + 's';
    dot.style.backgroundColor = i % 3 === 0 ? '#f59e0b' : i % 3 === 1 ? '#22c55e' : '#3b82f6';
    dot.style.opacity = Math.random() * 0.5 + 0.2;

    particlesContainer.appendChild(dot);
}

// Create ripple effects
for (let i = 0; i < 5; i++) {
    const ripple = document.createElement('div');
    ripple.className = 'ripple-effect';

    ripple.style.left = Math.random() * 100 + '%';
    ripple.style.top = Math.random() * 100 + '%';
    ripple.style.animationDelay = Math.random() * 3 + 's';
    ripple.style.borderColor = i % 2 === 0 ? 'rgba(34, 197, 94, 0.3)' : 'rgba(245, 158, 11, 0.3)';

    particlesContainer.appendChild(ripple);
}

// Create animated background elements
for (let i = 0; i < 8; i++) {
    const element = document.createElement('div');
    element.className = 'animated-bg-element';

    element.style.width = Math.random() * 300 + 100 + 'px';
    element.style.height = Math.random() * 300 + 100 + 'px';
    element.style.left = Math.random() * 100 + '%';
    element.style.top = Math.random() * 100 + '%';

    // Random gradient
    const gradients = [
        'linear-gradient(135deg, rgba(13, 76, 23, 0.1), rgba(34, 197, 94, 0.05))',
        'linear-gradient(135deg, rgba(245, 158, 11, 0.1), rgba(251, 191, 36, 0.05))',
        'linear-gradient(135deg, rgba(59, 130, 246, 0.1), rgba(96, 165, 250, 0.05))'
    ];
    element.style.background = gradients[Math.floor(Math.random() * gradients.length)];

    // Animate
    element.animate([
        { transform: 'translate(0, 0) rotate(0deg)' },
        { transform: `translate(${Math.random() * 200 - 100}px, ${Math.random() * 200 - 100}px) rotate(${Math.random() * 360}deg)` }
    ], {
        duration: Math.random() * 20000 + 10000,
        iterations: Infinity,
        direction: 'alternate'
    });

    particlesContainer.appendChild(element);
}

// ====== SMOOTH SCROLLING ======
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const targetId = this.getAttribute('href');
        if (targetId === '#') return;

        const targetElement = document.querySelector(targetId);
        if (targetElement) {
            window.scrollTo({
                top: targetElement.offsetTop - 80,
                behavior: 'smooth'
            });
        }
    });
});

// ====== NAVIGATION ACTIVE STATE ======
const sections = document.querySelectorAll('section[id]');
const navLinks = document.querySelectorAll('.nav-link, .mobile-nav-link');

window.addEventListener('scroll', () => {
    let current = '';
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        if (scrollY >= (sectionTop - 100)) {
            current = section.getAttribute('id');
        }
    });

    navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === '#' + current) {
            link.classList.add('active');
        }
    });
});

// ====== CURRENT YEAR UPDATE ======
const currentYear = new Date().getFullYear();
const currentYearElement = document.querySelector('footer .text-gray-500');
if (currentYearElement) {
    currentYearElement.textContent = `© ${currentYear} পাহাড়তলী গার্লস স্কুল এন্ড কলেজ। সর্বস্বত্ব সংরক্ষিত।`;
}

// ====== VIDEO PLAY FUNCTIONALITY ======
const videoItems = document.querySelectorAll('.video-item');
videoItems.forEach(item => {
    item.addEventListener('click', function () {
        // In a real implementation, this would open a video player
        // For now, we'll show an alert
        const videoTitle = this.querySelector('h4').textContent;
        alert(`ভিডিও প্লেয়ার খোলা হবে: ${videoTitle}\n\nএটি একটি ডেমো সংস্করণ। আসল ওয়েবসাইটে ভিডিও দেখা যাবে।`);
    });
});

// ====== ATTENDANCE CHART ANIMATION ======
const attendanceBars = document.querySelectorAll('.attendance-bar');
attendanceBars.forEach(bar => {
    const originalHeight = bar.style.height;
    bar.style.height = '0%';

    setTimeout(() => {
        bar.style.transition = 'height 1s ease';
        bar.style.height = originalHeight;
    }, 500);
});

// ====== FORM SUBMISSION ======
const contactForm = document.querySelector('form');
if (contactForm) {
    contactForm.addEventListener('submit', function (e) {
        e.preventDefault();
        alert('ধন্যবাদ! আপনার মেসেজটি সফলভাবে জমা হয়েছে। আমরা শীঘ্রই আপনার সাথে যোগাযোগ করব।');
        this.reset();
    });
}



// ====== GLOW EFFECT ON SERVICE CARDS ======
const cards = document.querySelectorAll('.glow-effect');
cards.forEach(card => {
    card.addEventListener('mouseenter', () => {
        cards.forEach(c => {
            if (c !== card) {
                c.style.opacity = '0.8';
            }
        });
    });

    card.addEventListener('mouseleave', () => {
        cards.forEach(c => {
            c.style.opacity = '1';
        });
    });
});

// ====== ANIMATED COUNTERS ======
function animateCounter(element, target) {
    let count = 0;
    const increment = target / 100;
    const timer = setInterval(() => {
        count += increment;
        if (count >= target) {
            count = target;
            clearInterval(timer);
        }
        element.textContent = Math.floor(count);
    }, 20);
}

// Initialize counters when in viewport
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const stats = entry.target.querySelectorAll('.stat-number');
            stats.forEach(stat => {
                const target = parseInt(stat.textContent);
                animateCounter(stat, target);
            });
        }
    });
});

// Observe stats section
const statsSection = document.querySelector('.bg-gradient-to-br.from-green-600.to-emerald-700');
if (statsSection) {
    observer.observe(statsSection);
}