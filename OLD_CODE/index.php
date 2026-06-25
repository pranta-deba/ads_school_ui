<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>পাহাড়তলী গার্লস স্কুল এন্ড কলেজ | শিক্ষার আলোয় উদ্ভাসিত</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <!-- SolaimanLipi Font -->
    <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">

    <!-- Page Loading CSS (Separate File) -->
    <link rel="stylesheet" href="page_loading.css">

    <style>
        :root {
            --primary: #0d4c17;
            --secondary: #166534;
            --accent: #f59e0b;
            --light-green: #dcfce7;
            --dark: #1e293b;
        }

        body {
            font-family: 'Hind Siliguri', sans-serif;
            scroll-behavior: smooth;
            overflow-x: hidden;
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
        }

        .solaiman-font {
            font-family: 'SolaimanLipi', sans-serif;
        }

        .school-name-font {
            font-family: 'SolaimanLipi', sans-serif;
            font-weight: bold;
            letter-spacing: 0.5px;
        }

        /* ====== ENHANCED NAVIGATION MENU ====== */
        .nav-link {
            position: relative;
            padding: 0.75rem 1.25rem;
            transition: all 0.3s ease;
            border-radius: 8px;
            margin: 0 0.25rem;
        }

        .nav-link::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 3px;
            background: linear-gradient(90deg, #f59e0b, #22c55e);
            border-radius: 3px;
            transform: translateX(-50%);
            transition: width 0.3s ease;
        }

        .nav-link:hover::before {
            width: 80%;
        }

        .nav-link:hover {
            background: rgba(13, 76, 23, 0.05);
            transform: translateY(-2px);
        }

        .nav-link.active {
            background: linear-gradient(135deg, rgba(13, 76, 23, 0.1), rgba(34, 197, 94, 0.1));
            color: #0d4c17;
            font-weight: 600;
        }

        .nav-link.active::before {
            width: 80%;
        }

        /* ====== MOBILE MENU ENHANCEMENT ====== */
        .mobile-menu {
            transform: translateX(100%);
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.95), rgba(248, 250, 252, 0.98));
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            box-shadow: -10px 0 30px rgba(0, 0, 0, 0.1);
            border-left: 1px solid rgba(13, 76, 23, 0.1);
        }

        .mobile-menu.active {
            transform: translateX(0);
        }

        .mobile-nav-link {
            padding: 1rem 1.5rem;
            border-radius: 12px;
            margin: 0.75rem 0;
            /* Increased gap */
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
        }

        .mobile-nav-link:hover {
            background: linear-gradient(135deg, rgba(13, 76, 23, 0.1), rgba(34, 197, 94, 0.1));
            border-left: 4px solid #0d4c17;
            transform: translateX(5px);
        }

        .mobile-nav-link.active {
            background: linear-gradient(135deg, rgba(13, 76, 23, 0.15), rgba(34, 197, 94, 0.15));
            border-left: 4px solid #f59e0b;
            color: #0d4c17;
            font-weight: 600;
        }

        /* ====== FULLSCREEN SLIDER WITHOUT ZOOM ====== */
        .fullscreen-slider {
            width: 100%;
            height: 85vh;
            position: relative;
            margin-top: -20px;
        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            position: relative;
            overflow: hidden;
        }

        .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* FIXED: Slide text positioning and background */
        .slide-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 40px;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.5) 50%, rgba(0, 0, 0, 0) 100%);
            color: white;
            display: flex;
            align-items: flex-end;
        }

        .slide-content {
            max-width: 800px;
            text-align: left;
        }

        /* ====== IMAGE MODAL ====== */
        .image-modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.95);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .image-modal.active {
            opacity: 1;
            visibility: visible;
        }

        .modal-content {
            max-width: 90%;
            max-height: 90%;
            position: relative;
        }

        .modal-content img {
            max-width: 100%;
            max-height: 80vh;
            object-fit: contain;
            border-radius: 10px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
        }

        .close-modal {
            position: absolute;
            top: -40px;
            right: 0;
            background: rgba(255, 255, 255, 0.2);
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 24px;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .close-modal:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: rotate(90deg);
        }

        /* ====== BACK TO TOP WITH PROGRESS (NO ARROW) ====== */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #0d4c17, #22c55e);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            cursor: pointer;
            z-index: 999;
            opacity: 0;
            visibility: hidden;
            transform: translateY(20px);
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(13, 76, 23, 0.3);
        }

        .back-to-top.active {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .back-to-top:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(13, 76, 23, 0.4);
        }

        .progress-ring {
            position: absolute;
            top: -5px;
            left: -5px;
            width: 70px;
            height: 70px;
        }

        .progress-ring-circle {
            fill: none;
            stroke: #f59e0b;
            stroke-width: 3;
            stroke-linecap: round;
            transform: rotate(-90deg);
            transform-origin: 50% 50%;
            transition: stroke-dashoffset 0.3s ease;
        }

        .percentage-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 14px;
            font-weight: bold;
            color: white;
        }

        /* ====== JS BACKGROUND EFFECTS ====== */
        .particles-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            pointer-events: none;
        }

        .floating-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .shape {
            position: absolute;
            background: linear-gradient(135deg, rgba(13, 76, 23, 0.05), rgba(34, 197, 94, 0.05));
            border-radius: 50%;
            animation: float 20s infinite linear;
        }

        @keyframes float {

            0%,
            100% {
                transform: translate(0, 0) rotate(0deg);
            }

            25% {
                transform: translate(100px, 50px) rotate(90deg);
            }

            50% {
                transform: translate(50px, 100px) rotate(180deg);
            }

            75% {
                transform: translate(-50px, 50px) rotate(270deg);
            }
        }

        /* ====== SECTION STYLES ====== */
        .section-container {
            padding: 80px 0;
            position: relative;
        }

        .section-title {
            position: relative;
            display: inline-block;
            margin-bottom: 60px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #f59e0b, #22c55e);
            border-radius: 2px;
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        /* ====== ULTRA SMOOTH TV BULLETIN ====== */
        .tv-bulletin {
            position: relative;
            overflow: hidden;
            height: 60px;
            background: linear-gradient(90deg, #b91c1c 0%, #dc2626 50%, #b91c1c 100%);
            display: flex;
            align-items: center;
        }

        .bulletin-container {
            width: 100%;
            height: 100%;
            position: relative;
            margin-top: -15px;
        }

        .bulletin-item {
            position: absolute;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            visibility: hidden;
            /* নিচের দিক থেকে আসার জন্য */
            transform: translateY(100%);
            transition: transform 0.8s cubic-bezier(0.65, 0, 0.35, 1),
                opacity 0.8s ease,
                visibility 0.8s;
            will-change: transform, opacity;
        }

        /* বর্তমানে যা দেখা যাচ্ছে */
        .bulletin-item.active {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        /* যা ওপরের দিকে চলে যাচ্ছে */
        .bulletin-item.exiting {
            opacity: 0;
            visibility: hidden;
            transform: translateY(-100%);
        }

        .bulletin-left,
        .bulletin-right {
            margin-top: -15px;
            width: 60px;
        }

        /* ====== VIDEO GALLERY ====== */
        .video-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }

        .video-item {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            height: 200px;
            cursor: pointer;
        }

        .video-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s ease;
        }

        .video-item:hover .video-overlay {
            background: rgba(0, 0, 0, 0.3);
        }

        .play-button {
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: #0d4c17;
            transition: all 0.3s ease;
        }

        .video-item:hover .play-button {
            transform: scale(1.1);
            background: white;
        }

        /* ====== STATISTICS CARDS ====== */
        .stat-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            border: 1px solid #e5e7eb;
            text-align: center;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: bold;
            color: #0d4c17;
            margin-bottom: 10px;
        }

        /* ====== RESPONSIVE ADJUSTMENTS ====== */
        @media (max-width: 768px) {
            .fullscreen-slider {
                height: 70vh;
            }

            .slide-overlay {
                padding: 30px 20px;
            }

            .slide-content h2 {
                font-size: 1.8rem;
            }

            .slide-content p {
                font-size: 1rem;
            }

            .mobile-menu {
                width: 85%;
            }

            .mobile-nav-link {
                padding: 1.25rem 1.5rem;
                /* Increased padding for mobile */
                margin: 0.5rem 0;
            }

            .section-container {
                padding: 60px 0;
            }

            .video-gallery {
                grid-template-columns: 1fr;
            }

            .stat-number {
                font-size: 2.5rem;
            }

            .tv-bulletin {
                margin-top: -15px;
                height: 50px;
            }

            .bulletin-left,
            .bulletin-right {
                margin-top: -15px;
                width: 50px;
            }
        }

        @media (max-width: 640px) {
            .fullscreen-slider {
                height: 60vh;
            }

            .slide-overlay {
                padding: 20px 15px;
            }

            .slide-content h2 {
                font-size: 1.5rem;
            }

            .slide-content p {
                font-size: 0.9rem;
            }

            .back-to-top {
                bottom: 20px;
                right: 20px;
                width: 50px;
                height: 50px;
            }

            .progress-ring {
                width: 60px;
                height: 60px;
            }

            .percentage-text {
                font-size: 12px;
            }

            .mobile-nav-link {
                padding: 1.5rem 1.5rem;
                /* More padding for very small screens */
                margin: 0.4rem 0;
            }
        }

        /* ====== HERO GRADIENT ====== */
        .hero-gradient {
            background: linear-gradient(135deg,
                    rgba(13, 76, 23, 0.95) 0%,
                    rgba(22, 101, 52, 0.9) 50%,
                    rgba(34, 197, 94, 0.8) 100%);
            position: relative;
            overflow: hidden;
        }

        .hero-gradient::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transform: rotate(45deg);
            animation: shine 8s infinite linear;
        }

        @keyframes shine {
            0% {
                transform: translateX(-100%) translateY(-100%) rotate(45deg);
            }

            100% {
                transform: translateX(100%) translateY(100%) rotate(45deg);
            }
        }

        /* ====== GALLERY GRID ====== */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            height: 250px;
            cursor: pointer;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.05);
        }

        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
            color: white;
            padding: 20px;
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }

        .gallery-item:hover .gallery-overlay {
            transform: translateY(0);
        }

        /* ====== STAFF TABLE ====== */
        .staff-table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .staff-table th {
            background: #0d4c17;
            color: white;
            padding: 15px;
            text-align: left;
            font-weight: 600;
        }

        .staff-table td {
            padding: 12px 15px;
            border-bottom: 1px solid #e5e7eb;
        }

        .staff-table tr:hover {
            background: #f0fdf4;
        }

        /* ====== ATTENDANCE CHART ====== */
        .attendance-chart {
            display: flex;
            align-items: flex-end;
            height: 200px;
            gap: 10px;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .attendance-bar {
            flex: 1;
            background: linear-gradient(to top, #22c55e, #16a34a);
            border-radius: 5px 5px 0 0;
            position: relative;
            min-height: 10px;
        }

        .attendance-bar-label {
            position: absolute;
            bottom: -25px;
            left: 0;
            right: 0;
            text-align: center;
            font-size: 12px;
            color: #4b5563;
        }

        .attendance-bar-value {
            position: absolute;
            top: -25px;
            left: 0;
            right: 0;
            text-align: center;
            font-weight: bold;
            color: #0d4c17;
        }

        /* ====== FACEBOOK POST STYLE ====== */
        .facebook-post {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border: 1px solid #ddd;
        }

        .post-header {
            padding: 15px;
            border-bottom: 1px solid #e5e7eb;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .post-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #0d4c17;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .post-content {
            padding: 15px;
        }

        .post-stats {
            padding: 10px 15px;
            border-top: 1px solid #e5e7eb;
            display: flex;
            justify-content: space-between;
            color: #6b7280;
            font-size: 14px;
        }

        /* ====== FOOTER STYLES ====== */
        footer {
            background: linear-gradient(135deg, #0d4c17 0%, #166534 100%);
            color: white;
            position: relative;
            overflow: hidden;
        }

        .footer-wave {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100px;
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1200 120' preserveAspectRatio='none'%3E%3Cpath d='M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z' fill='%23ffffff'/%3E%3C/svg%3E");
            background-size: 1200px 100px;
            transform: rotate(180deg);
        }

        .footer-content {
            position: relative;
            z-index: 1;
        }

        .footer-links a {
            position: relative;
            transition: all 0.3s ease;
        }

        .footer-links a::before {
            content: '›';
            position: absolute;
            left: -15px;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .footer-links a:hover {
            color: #f59e0b;
            transform: translateX(5px);
        }

        .footer-links a:hover::before {
            opacity: 1;
            left: -10px;
        }

        /* ====== NEW STYLES FROM OLD PAGE ====== */
        .floating-card {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-15px);
            }
        }

        .glow-effect {
            box-shadow: 0 10px 30px rgba(34, 197, 94, 0.3);
            transition: all 0.4s ease;
        }

        .glow-effect:hover {
            box-shadow: 0 15px 40px rgba(34, 197, 94, 0.5);
            transform: translateY(-5px);
        }

        .gradient-text {
            background: linear-gradient(45deg, #f59e0b, #fbbf24, #f97316);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .timeline-item {
            position: relative;
            padding-left: 30px;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 8px;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: var(--accent);
        }

        .parallax-section {
            background: linear-gradient(rgba(13, 76, 23, 0.9), rgba(13, 76, 23, 0.9)),
                url('https://images.unsplash.com/photo-1546410531-bb4caa6b424d?auto=format&fit=crop&w=1920&q=80');
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
        }

        .typewriter-text {
            overflow: hidden;
            border-right: .15em solid orange;
            white-space: nowrap;
            animation: typing 3.5s steps(40, end), blink-caret .75s step-end infinite;
        }

        @keyframes typing {
            from {
                width: 0
            }

            to {
                width: 100%
            }
        }

        @keyframes blink-caret {

            from,
            to {
                border-color: transparent
            }

            50% {
                border-color: orange;
            }
        }

        /* ====== YELLOW MARQUEE ====== */
        .yellow-marquee {
            background: linear-gradient(to right, #fbbf24, #f59e0b);
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 50;
            padding: 12px 0;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
        }

        .animate-marquee {
            animation: marquee 30s linear infinite;
            display: inline-block;
            padding-left: 100%;
            white-space: nowrap;
        }

        @keyframes marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        /* বন্ধ করার বাটনের জন্য */
        #closeMarquee {
            background: rgba(0, 0, 0, 0.1);
            border-radius: 50%;
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        #closeMarquee:hover {
            background: rgba(0, 0, 0, 0.2);
            transform: rotate(90deg);
        }

        /* ====== ENHANCED BACKGROUND ANIMATIONS ====== */
        .animated-bg-element {
            position: absolute;
            border-radius: 50%;
            filter: blur(40px);
            opacity: 0.3;
            z-index: -1;
        }

        .pulse-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            position: absolute;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(0.95);
                opacity: 0.7;
            }

            50% {
                transform: scale(1.1);
                opacity: 0.3;
            }

            100% {
                transform: scale(0.95);
                opacity: 0.7;
            }
        }

        .ripple-effect {
            position: absolute;
            border-radius: 50%;
            border: 2px solid rgba(34, 197, 94, 0.3);
            animation: ripple 3s linear infinite;
        }

        @keyframes ripple {
            0% {
                transform: scale(0);
                opacity: 1;
            }

            100% {
                transform: scale(3);
                opacity: 0;
            }
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800">

    <!-- Page Loading HTML (Included from separate file) -->
    <?php include 'page_loading.php'; ?>

    <!-- JS Background Effects -->
    <div class="particles-container" id="particlesContainer"></div>

    <!-- Top Announcement Bar -->
    <div class="bg-gradient-to-r from-green-900 to-emerald-900 text-white py-3 relative z-40">
        <div class="container mx-auto px-4 md:px-6 flex flex-col md:flex-row justify-between items-center">
            <div class="flex flex-wrap items-center justify-center gap-4 md:gap-6 text-sm md:text-base">
                <span class="flex items-center gap-2">
                    <i class="fas fa-phone-alt text-yellow-300"></i>
                    <span>+৮৮০১৮১৯০৭০৫৮৫</span>
                </span>
                <span class="hidden md:inline">|</span>
                <span class="flex items-center gap-2">
                    <i class="fas fa-envelope text-yellow-300"></i>
                    <span>pgsc1950@gmail.com</span>
                </span>
                <span class="hidden md:inline">|</span>
                <span class="flex items-center gap-2">
                    <i class="fas fa-id-card text-yellow-300"></i>
                    <span>EIIN: ১০৪৬৭৫</span>
                </span>
            </div>
            <div class="mt-2 md:mt-0 flex items-center space-x-4">
                <span class="text-sm hidden md:inline solaiman-font">এসো শিখি, গড়ি সোনার বাংলা</span>
                <a href="https://facebook.com/pgsc.edu.bd" target="_blank"
                    class="touch-button hover:text-yellow-300 transition duration-300" aria-label="Facebook">
                    <i class="fab fa-facebook-f text-lg"></i>
                </a>
                <a href="#" class="touch-button hover:text-yellow-300 transition duration-300" aria-label="YouTube">
                    <i class="fab fa-youtube text-lg"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Header & Navigation -->
    <header class="bg-white/95 backdrop-blur-lg shadow-lg sticky top-0 z-50 border-b border-green-100 relative z-40">
        <nav class="container mx-auto px-4 md:px-6 py-4">
            <div class="flex justify-between items-center">
                <!-- Logo with Established Badge -->
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <img src="https://pgsc.edu.bd/image/schoollogo.png" alt="PGSC Logo"
                            class="h-16 w-16 md:h-20 md:w-20 drop-shadow-lg border-4 border-white rounded-full">
                        <div
                            class="absolute -bottom-2 -right-2 bg-gradient-to-r from-orange-500 to-yellow-500 text-white px-3 py-1 text-xs font-bold rounded-full shadow-lg">
                            স্থাপিত ১৯৫০
                        </div>
                    </div>
                    <div>
                        <h1 class="text-xl md:text-2xl font-bold text-green-900 leading-tight school-name-font">
                            পাহাড়তলী গার্লস স্কুল এন্ড কলেজ
                        </h1>
                        <p class="text-sm text-gray-600 hidden md:block">
                            <i class="fas fa-map-marker-alt text-green-600 mr-1"></i>
                            পাহাড়তলী, আকবরশাহ, চট্টগ্রাম
                        </p>
                    </div>
                </div>

                <!-- Desktop Navigation -->
                <ul class="hidden lg:flex space-x-1">
                    <li><a href="#home" class="nav-link active text-green-700 solaiman-font">হোম</a></li>
                    <li><a href="#notice" class="nav-link text-gray-700 solaiman-font">নোটিশ</a></li>
                    <li><a href="#administration" class="nav-link text-gray-700 solaiman-font">প্রশাসন</a></li>
                    <li><a href="#academic" class="nav-link text-gray-700 solaiman-font">একাডেমিক</a></li>
                    <li><a href="#admission" class="nav-link text-gray-700 solaiman-font">ভর্তি তথ্য</a></li>
                    <li><a href="#results" class="nav-link text-gray-700 solaiman-font">ফলাফল</a></li>
                    <li><a href="#gallery" class="nav-link text-gray-700 solaiman-font">গ্যালারি</a></li>
                    <li><a href="#contact" class="nav-link text-gray-700 solaiman-font">যোগাযোগ</a></li>
                </ul>

                <!-- Mobile Menu Button -->
                <button id="mobileMenuButton" class="lg:hidden touch-button text-green-800">
                    <i class="fas fa-bars text-2xl"></i>
                </button>

                <!-- Desktop Action Button -->
                <a href="#"
                    class="hidden lg:inline bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white px-6 py-3 rounded-full font-bold transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-1">
                    <i class="fas fa-sign-in-alt mr-2"></i>লগইন
                </a>
            </div>
        </nav>

        <!-- Mobile Navigation Menu -->
        <div id="mobileMenu" class="mobile-menu lg:hidden fixed inset-y-0 right-0 w-80 z-50 p-6">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-xl font-bold text-green-900 solaiman-font">মেনু</h2>
                <button id="closeMobileMenu" class="touch-button text-gray-600">
                    <i class="fas fa-times text-2xl"></i>
                </button>
            </div>
            <ul class="space-y-1" style="background-color:red;"> <!-- Reduced space between menu items -->
                <li><a href="#home" class="mobile-nav-link active solaiman-font">
                        <i class="fas fa-home mr-3"></i>হোম
                    </a></li>
                <li><a href="#notice" class="mobile-nav-link solaiman-font">
                        <i class="fas fa-bullhorn mr-3"></i>নোটিশ
                    </a></li>
                <li><a href="#administration" class="mobile-nav-link solaiman-font">
                        <i class="fas fa-users mr-3"></i>প্রশাসন
                    </a></li>
                <li><a href="#academic" class="mobile-nav-link solaiman-font">
                        <i class="fas fa-graduation-cap mr-3"></i>একাডেমিক
                    </a></li>
                <li><a href="#admission" class="mobile-nav-link solaiman-font">
                        <i class="fas fa-user-plus mr-3"></i>ভর্তি তথ্য
                    </a></li>
                <li><a href="#results" class="mobile-nav-link solaiman-font">
                        <i class="fas fa-chart-line mr-3"></i>ফলাফল
                    </a></li>
                <li><a href="#gallery" class="mobile-nav-link solaiman-font">
                        <i class="fas fa-images mr-3"></i>গ্যালারি
                    </a></li>
                <li><a href="#contact" class="mobile-nav-link solaiman-font">
                        <i class="fas fa-phone-alt mr-3"></i>যোগাযোগ
                    </a></li>
            </ul>
            <div class="mt-8 pt-6 border-t border-gray-200">
                <a href="#"
                    class="block w-full bg-gradient-to-r from-orange-500 to-orange-600 text-white text-center py-3 rounded-lg font-bold mb-4 hover:shadow-lg transition">
                    <i class="fas fa-sign-in-alt mr-2"></i>লগইন পোর্টাল
                </a>
                <div class="flex justify-center space-x-4">
                    <a href="https://facebook.com/pgsc.edu.bd" target="_blank"
                        class="bg-green-600 text-white p-3 rounded-full hover:bg-green-700 transition">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="bg-red-600 text-white p-3 rounded-full hover:bg-red-700 transition">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- TV Bulletin Style Breaking News - FIXED -->
    <div class="tv-bulletin">
        <div class="bulletin-left z-10">
            <i class="fas fa-bolt text-yellow-300 text-xl animate-pulse"></i>
        </div>

        <div class="bulletin-container" id="bulletinContainer">
            <div class="bulletin-item active">
                <div class="flex items-center gap-2">
                    <span class="bg-yellow-400 text-red-900 px-2 py-0.5 rounded text-sm font-bold">জরুরি</span>
                    <span class="text-white md:text-lg">ভর্তি কার্যক্রম ২০২৬ শুরু হয়েছে</span>
                </div>
            </div>

            <div class="bulletin-item">
                <div class="flex items-center gap-2">
                    <span class="bg-yellow-400 text-red-900 px-2 py-0.5 rounded text-sm font-bold">নোটিশ</span>
                    <span class="text-white md:text-lg">আগামীকাল স্কুল বন্ধ থাকবে</span>
                </div>
            </div>
        </div>

        <div class="bulletin-right z-10">
            <i class="fas fa-bullhorn text-yellow-300 text-xl"></i>
        </div>
    </div>
    <script>
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
    </script>
    <!-- Yellow Breaking News Marquee - Bottom Fixed -->
    <div class="yellow-marquee fixed bottom-0 left-0 right-0 z-50">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex items-center">
                <span
                    class="bg-red-600 text-white px-4 py-2 text-sm font-bold rounded-lg shadow-lg flex items-center gap-2 flex-shrink-0">
                    <i class="fas fa-bolt"></i>
                    গুরুত্বপূর্ণ
                </span>
                <div class="ml-4 flex-1 overflow-hidden">
                    <div class="animate-marquee whitespace-nowrap">
                        <span class="text-gray-900 font-semibold mx-4">২০২৬ শিক্ষাবর্ষে ভর্তি কার্যক্রম চলছে</span>
                        <span class="text-gray-900 font-semibold mx-4">বার্ষিক ক্রীড়া প্রতিযোগিতা ২০ জানুয়ারি</span>
                        <span class="text-gray-900 font-semibold mx-4">ডিজিটাল ক্লাসরুম চালু</span>
                        <span class="text-gray-900 font-semibold mx-4">সৃজনশীল মেধা অন্বেষণ প্রতিযোগিতা</span>
                    </div>
                </div>
                <!-- Close Button যোগ করা যেতে পারে -->
                <button id="closeMarquee" class="ml-4 text-gray-700 hover:text-gray-900">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Fullscreen Slider -->
    <section id="home" class="fullscreen-slider">
        <!-- Image Modal -->
        <div class="image-modal" id="imageModal">
            <div class="modal-content">
                <span class="close-modal" id="closeModal">
                    <i class="fas fa-times"></i>
                </span>
                <img id="modalImage" src="" alt="Enlarged Image">
            </div>
        </div>

        <!-- Swiper Slider -->
        <div class="swiper">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <img src="https://pgsc.edu.bd/admin/slide/slide1.jpg" alt="প্রধান ভবন" class="slide-image"
                        data-src="https://pgsc.edu.bd/admin/slide/slide1.jpg">
                    <div class="slide-overlay">
                        <div class="slide-content">
                            <div
                                class="inline-block bg-green-600 text-white px-6 py-2 rounded-full text-sm font-bold mb-6 shadow-lg">
                                <i class="fas fa-university mr-2"></i> প্রধান ভবন
                            </div>
                            <h2 class="text-3xl md:text-5xl font-bold mb-4 solaiman-font">আমাদের ঐতিহ্যবাহী প্রধান ভবন
                            </h2>
                            <p class="text-xl opacity-90 mb-6 solaiman-font">১৯৫০ সাল থেকে শিক্ষাদানের এই পবিত্র স্থান,
                                যেখানে তৈরি হচ্ছে আগামী দিনের নারী নেতৃত্ব</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <img src="https://pgsc.edu.bd/admin/slide/slide2.jpg" alt="লাইব্রেরি" class="slide-image"
                        data-src="https://pgsc.edu.bd/admin/slide/slide2.jpg">
                    <div class="slide-overlay">
                        <div class="slide-content">
                            <div
                                class="inline-block bg-blue-600 text-white px-6 py-2 rounded-full text-sm font-bold mb-6 shadow-lg">
                                <i class="fas fa-book mr-2"></i> ডিজিটাল লাইব্রেরি
                            </div>
                            <h2 class="text-3xl md:text-5xl font-bold mb-4 solaiman-font">আধুনিক ডিজিটাল লাইব্রেরি</h2>
                            <p class="text-xl opacity-90 mb-6 solaiman-font">২০,০০০+ বইয়ের সংগ্রহশালা ও ই-লাইব্রেরি
                                সুবিধা, জ্ঞানের অপার সম্ভাবনা</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <img src="https://pgsc.edu.bd/admin/slide/slide3.jpg" alt="বিজ্ঞান ল্যাব" class="slide-image"
                        data-src="https://pgsc.edu.bd/admin/slide/slide3.jpg">
                    <div class="slide-overlay">
                        <div class="slide-content">
                            <div
                                class="inline-block bg-purple-600 text-white px-6 py-2 rounded-full text-sm font-bold mb-6 shadow-lg">
                                <i class="fas fa-flask mr-2"></i> বিজ্ঞান গবেষণাগার
                            </div>
                            <h2 class="text-3xl md:text-5xl font-bold mb-4 solaiman-font">আধুনিক বিজ্ঞান গবেষণাগার</h2>
                            <p class="text-xl opacity-90 mb-6 solaiman-font">প্রযুক্তিগত শিক্ষার জন্য সজ্জিত বিজ্ঞান
                                ল্যাব, হাতে-কলমে শিক্ষার সুযোগ</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation buttons -->
            <div class="swiper-button-next !text-white !bg-green-600/80 hover:!bg-green-600"></div>
            <div class="swiper-button-prev !text-white !bg-green-600/80 hover:!bg-green-600"></div>

            <!-- Pagination -->
            <div class="swiper-pagination !bottom-6"></div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce z-10">
            <a href="#notice" class="text-white text-2xl">
                <i class="fas fa-chevron-down bg-green-600/80 p-3 rounded-full backdrop-blur-sm"></i>
            </a>
        </div>
    </section>

    <!-- Notice & Facebook Section -->
    <section id="notice" class="section-container bg-gray-50">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Notice Board -->
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100 mb-8">
                        <div class="bg-gradient-to-r from-green-700 to-emerald-800 px-6 py-5">
                            <h3 class="text-2xl font-bold text-white flex items-center gap-3 solaiman-font">
                                <i class="fas fa-bullhorn text-yellow-300"></i>
                                নোটিশ বোর্ড
                            </h3>
                        </div>
                        <div class="p-6">
                            <div class="space-y-6">
                                <!-- Notice 1 -->
                                <div
                                    class="group cursor-pointer p-4 bg-green-50 rounded-xl hover:bg-green-100 transition duration-300">
                                    <div class="flex gap-4">
                                        <div
                                            class="bg-white text-green-800 p-3 rounded-lg text-center shadow-sm min-w-[70px]">
                                            <div class="text-lg font-bold">১০</div>
                                            <div class="text-xs solaiman-font">জানুয়ারি</div>
                                        </div>
                                        <div>
                                            <a href="#"
                                                class="font-semibold text-gray-800 hover:text-green-700 transition block mb-1 solaiman-font">
                                                ষষ্ঠ থেকে নবম শ্রেণিতে ভর্তি ফি জমা প্রদান প্রসঙ্গে
                                            </a>
                                            <p class="text-sm text-gray-600 solaiman-font">শেষ তারিখ: ২০ জানুয়ারি ২০২৬
                                            </p>
                                            <span
                                                class="inline-block mt-2 text-xs bg-red-100 text-red-800 px-3 py-1 rounded-full solaiman-font">
                                                <i class="fas fa-exclamation-circle mr-1"></i> জরুরি
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Notice 2 -->
                                <div
                                    class="group cursor-pointer p-4 bg-blue-50 rounded-xl hover:bg-blue-100 transition duration-300">
                                    <div class="flex gap-4">
                                        <div
                                            class="bg-white text-blue-800 p-3 rounded-lg text-center shadow-sm min-w-[70px]">
                                            <div class="text-lg font-bold">০৫</div>
                                            <div class="text-xs solaiman-font">জানুয়ারি</div>
                                        </div>
                                        <div>
                                            <a href="#"
                                                class="font-semibold text-gray-800 hover:text-blue-700 transition block mb-1 solaiman-font">
                                                বার্ষিক পরীক্ষার ফলাফলের মেধাতালিকা প্রকাশ
                                            </a>
                                            <p class="text-sm text-gray-600 solaiman-font">নবম শ্রেণির বার্ষিক পরীক্ষার
                                                ফলাফল</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Notice 3 -->
                                <div
                                    class="group cursor-pointer p-4 bg-orange-50 rounded-xl hover:bg-orange-100 transition duration-300">
                                    <div class="flex gap-4">
                                        <div
                                            class="bg-white text-orange-800 p-3 rounded-lg text-center shadow-sm min-w-[70px]">
                                            <div class="text-lg font-bold">১৫</div>
                                            <div class="text-xs solaiman-font">জানুয়ারি</div>
                                        </div>
                                        <div>
                                            <a href="#"
                                                class="font-semibold text-gray-800 hover:text-orange-700 transition block mb-1 solaiman-font">
                                                বার্ষিক ক্রীড়া প্রতিযোগিতা সম্পর্কিত
                                            </a>
                                            <p class="text-sm text-gray-600 solaiman-font">২০ জানুয়ারি সকাল ৯টায় শুরু
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Notice 4 -->
                                <div
                                    class="group cursor-pointer p-4 bg-purple-50 rounded-xl hover:bg-purple-100 transition duration-300">
                                    <div class="flex gap-4">
                                        <div
                                            class="bg-white text-purple-800 p-3 rounded-lg text-center shadow-sm min-w-[70px]">
                                            <div class="text-lg font-bold">২০</div>
                                            <div class="text-xs solaiman-font">জানুয়ারি</div>
                                        </div>
                                        <div>
                                            <a href="#"
                                                class="font-semibold text-gray-800 hover:text-purple-700 transition block mb-1 solaiman-font">
                                                শিক্ষকদের মাসিক সভা
                                            </a>
                                            <p class="text-sm text-gray-600 solaiman-font">২৫ জানুয়ারি সকাল ১১টায়</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="#"
                                class="block text-center mt-8 text-green-600 font-semibold hover:text-green-700 solaiman-font">
                                <i class="fas fa-list mr-2"></i>সব নোটিশ দেখুন
                            </a>
                        </div>
                    </div>

                    <!-- Facebook Posts Section -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100">
                        <div class="bg-gradient-to-r from-blue-600 to-blue-700 px-6 py-5">
                            <div class="flex justify-between items-center">
                                <h3 class="text-2xl font-bold text-white flex items-center gap-3 solaiman-font">
                                    <i class="fab fa-facebook-square"></i>
                                    ফেইসবুক আপডেট
                                </h3>
                                <a href="https://facebook.com/pgsc.edu.bd" target="_blank"
                                    class="text-white hover:text-yellow-300 text-sm">
                                    <i class="fas fa-external-link-alt mr-1"></i> পেজে যান
                                </a>
                            </div>
                        </div>
                        <div class="p-6">
                            <!-- Facebook Post 1 -->
                            <div class="facebook-post mb-6">
                                <div class="post-header">
                                    <div class="post-avatar">
                                        PGSC
                                    </div>
                                    <div>
                                        <div class="font-bold text-gray-800 solaiman-font">পাহাড়তলী গার্লস স্কুল এন্ড
                                            কলেজ</div>
                                        <div class="text-gray-500 text-sm">২ ঘণ্টা আগে · <i
                                                class="fas fa-globe-asia"></i></div>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <p class="text-gray-800 mb-4 solaiman-font">
                                        🎉 বার্ষিক ক্রীড়া প্রতিযোগিতা ২০২৬-এর জন্য প্রস্তুতি শুরু!
                                        আমাদের ছাত্রীদের অংশগ্রহণে এ বছরও সাফল্যের নতুন ইতিহাস রচিত হবে।
                                        #PGSC_Sports #AnnualSports #PahartaliGirls
                                    </p>
                                    <img src="https://pgsc.edu.bd/admin/slide/slide4.jpg" alt="Sports"
                                        class="w-full rounded-lg mb-4">
                                </div>
                                <div class="post-stats">
                                    <span><i class="fas fa-thumbs-up text-blue-600"></i> ২৩৪</span>
                                    <span><i class="fas fa-comment text-green-600"></i> ৪৫</span>
                                    <span><i class="fas fa-share text-purple-600"></i> ১২</span>
                                </div>
                            </div>

                            <!-- Facebook Post 2 -->
                            <div class="facebook-post">
                                <div class="post-header">
                                    <div class="post-avatar">
                                        PGSC
                                    </div>
                                    <div>
                                        <div class="font-bold text-gray-800 solaiman-font">পাহাড়তলী গার্লস স্কুল এন্ড
                                            কলেজ</div>
                                        <div class="text-gray-500 text-sm">১ দিন আগে · <i class="fas fa-globe-asia"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <p class="text-gray-800 mb-4 solaiman-font">
                                        📚 নতুন একাডেমিক বছরে স্বাগতম!
                                        স্মার্ট ক্লাসরুম ও ডিজিটাল ল্যাব সুবিধা সম্প্রসারণ করা হয়েছে।
                                        শিক্ষার্থীদের জন্য আধুনিক শিক্ষার সকল সুযোগ তৈরি করা হয়েছে।
                                    </p>
                                    <div class="flex gap-2">
                                        <span
                                            class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm solaiman-font">#শিক্ষা</span>
                                        <span
                                            class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm solaiman-font">#প্রযুক্তি</span>
                                        <span
                                            class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm solaiman-font">#আধুনিকতা</span>
                                    </div>
                                </div>
                                <div class="post-stats">
                                    <span><i class="fas fa-thumbs-up text-blue-600"></i> ৩৪৫</span>
                                    <span><i class="fas fa-comment text-green-600"></i> ৬৭</span>
                                    <span><i class="fas fa-share text-purple-600"></i> ২৩</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Services & Stats -->
                <div class="space-y-8">
                    <!-- Quick Services -->
                    <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100">
                        <h3 class="text-xl font-bold text-gray-800 mb-6 solaiman-font">দ্রুত সেবা</h3>
                        <div class="space-y-4">
                            <a href="#"
                                class="flex items-center gap-4 p-4 bg-green-50 hover:bg-green-100 rounded-lg transition duration-300">
                                <div class="p-3 bg-green-100 rounded-lg">
                                    <i class="fas fa-user-graduate text-green-600"></i>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-800 solaiman-font">শিক্ষার্থী তথ্য</div>
                                    <div class="text-sm text-gray-600 solaiman-font">আইডি কার্ড ও প্রোফাইল</div>
                                </div>
                            </a>

                            <a href="#"
                                class="flex items-center gap-4 p-4 bg-blue-50 hover:bg-blue-100 rounded-lg transition duration-300">
                                <div class="p-3 bg-blue-100 rounded-lg">
                                    <i class="fas fa-credit-card text-blue-600"></i>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-800 solaiman-font">অনলাইন পেমেন্ট</div>
                                    <div class="text-sm text-gray-600 solaiman-font">বেতন ও ফি প্রদান</div>
                                </div>
                            </a>

                            <a href="#"
                                class="flex items-center gap-4 p-4 bg-orange-50 hover:bg-orange-100 rounded-lg transition duration-300">
                                <div class="p-3 bg-orange-100 rounded-lg">
                                    <i class="fas fa-poll text-orange-600"></i>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-800 solaiman-font">ফলাফল</div>
                                    <div class="text-sm text-gray-600 solaiman-font">পরীক্ষার মার্কশিট</div>
                                </div>
                            </a>

                            <a href="#"
                                class="flex items-center gap-4 p-4 bg-purple-50 hover:bg-purple-100 rounded-lg transition duration-300">
                                <div class="p-3 bg-purple-100 rounded-lg">
                                    <i class="fas fa-book-open text-purple-600"></i>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-800 solaiman-font">ডিজিটাল কন্টেন্ট</div>
                                    <div class="text-sm text-gray-600 solaiman-font">সিলেবাস ও লেকচার শিট</div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Today's Statistics -->
                    <div class="bg-gradient-to-br from-green-600 to-emerald-700 rounded-2xl p-6 text-white">
                        <h3 class="text-xl font-bold mb-6 solaiman-font">আজকের পরিসংখ্যান</h3>
                        <div class="space-y-6">
                            <div class="flex justify-between items-center">
                                <div>
                                    <div class="text-sm opacity-80 solaiman-font">মোট উপস্থিতি</div>
                                    <div class="text-2xl font-bold">৯৫%</div>
                                </div>
                                <div class="p-3 bg-white/20 rounded-lg">
                                    <i class="fas fa-user-check text-xl"></i>
                                </div>
                            </div>

                            <div class="flex justify-between items-center">
                                <div>
                                    <div class="text-sm opacity-80 solaiman-font">শিক্ষার্থী সংখ্যা</div>
                                    <div class="text-2xl font-bold">১,২৫০</div>
                                </div>
                                <div class="p-3 bg-white/20 rounded-lg">
                                    <i class="fas fa-users text-xl"></i>
                                </div>
                            </div>

                            <div class="flex justify-between items-center">
                                <div>
                                    <div class="text-sm opacity-80 solaiman-font">শিক্ষক সংখ্যা</div>
                                    <div class="text-2xl font-bold">৫৮</div>
                                </div>
                                <div class="p-3 bg-white/20 rounded-lg">
                                    <i class="fas fa-chalkboard-teacher text-xl"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Important Dates -->
                    <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100">
                        <h3 class="text-xl font-bold text-gray-800 mb-6 solaiman-font">গুরুত্বপূর্ণ তারিখ</h3>
                        <div class="space-y-4">
                            <div class="flex items-center gap-3">
                                <div class="p-2 bg-red-100 rounded-lg">
                                    <i class="fas fa-calendar-day text-red-600"></i>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-800 solaiman-font">২০ জানুয়ারি</div>
                                    <div class="text-sm text-gray-600 solaiman-font">বার্ষিক ক্রীড়া</div>
                                </div>
                            </div>

                            <div class="flex items-center gap-3">
                                <div class="p-2 bg-green-100 rounded-lg">
                                    <i class="fas fa-calendar-day text-green-600"></i>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-800 solaiman-font">২৫ জানুয়ারি</div>
                                    <div class="text-sm text-gray-600 solaiman-font">শিক্ষকদের সভা</div>
                                </div>
                            </div>

                            <div class="flex items-center gap-3">
                                <div class="p-2 bg-blue-100 rounded-lg">
                                    <i class="fas fa-calendar-day text-blue-600"></i>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-800 solaiman-font">৩০ জানুয়ারি</div>
                                    <div class="text-sm text-gray-600 solaiman-font">ভর্তির শেষ তারিখ</div>
                                </div>
                            </div>

                            <div class="flex items-center gap-3">
                                <div class="p-2 bg-purple-100 rounded-lg">
                                    <i class="fas fa-calendar-day text-purple-600"></i>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-800 solaiman-font">১৫ ফেব্রুয়ারি</div>
                                    <div class="text-sm text-gray-600 solaiman-font">মধ্যবর্তী পরীক্ষা</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Administration Section with Governing Body -->
    <section id="administration" class="section-container bg-white">
        <div class="container mx-auto px-4 md:px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-green-900 mb-4 solaiman-font section-title">
                    প্রশাসন
                </h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto solaiman-font">
                    অভিজ্ঞ ও দক্ষ প্রশাসনিক দল দ্বারা পরিচালিত আমাদের শিক্ষাপ্রতিষ্ঠান
                </p>
            </div>

            <!-- President & Principal -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
                <!-- President's Message -->
                <div class="bg-white rounded-3xl shadow-xl p-8 border border-gray-100 card-hover">
                    <div class="flex items-center gap-6 mb-8">
                        <div class="relative">
                            <img src="https://pgsc.edu.bd/image/chairman.jpg" alt="সভাপতি"
                                class="rounded-2xl w-32 h-32 object-cover border-4 border-blue-100">
                            <div
                                class="absolute -bottom-3 -right-3 bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-bold shadow-lg">
                                সভাপতি
                            </div>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-2 solaiman-font">সভাপতির বাণী</h3>
                            <div class="text-blue-700 font-bold solaiman-font">জনাব মোঃ আব্দুল জলিল</div>
                            <div class="text-gray-600 text-sm solaiman-font">প্রতিষ্ঠানের সভাপতি</div>
                        </div>
                    </div>
                    <p class="text-gray-700 leading-relaxed solaiman-font mb-6">
                        "পাহাড়তলী গার্লস স্কুল এন্ড কলেজ নারী শিক্ষার উন্নয়নে নিরলস কাজ করে যাচ্ছে। আমরা বিশ্বাস করি,
                        শিক্ষিত নারীই পারে পরিবার, সমাজ ও দেশের উন্নয়নে ভূমিকা রাখতে। আমাদের লক্ষ্য মেধাবী, দক্ষ ও
                        নৈতিকতাসম্পন্ন নাগরিক তৈরি করা।"
                    </p>
                </div>
                <!-- President's Message -->
                <div class="bg-white rounded-3xl shadow-xl p-8 border border-gray-100 card-hover">
                    <div class="flex items-center gap-6 mb-8">
                        <div class="relative">
                            <img src="https://pgsc.edu.bd/image/principal.jpg" alt="অধ্যক্ষ"
                                class="rounded-2xl w-32 h-32 object-cover border-4 border-blue-100">
                            <div
                                class="absolute -bottom-3 -right-3 bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-bold shadow-lg">
                                অধ্যক্ষ
                            </div>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-2 solaiman-font">অধ্যক্ষের বাণী</h3>
                            <div class="text-blue-700 font-bold solaiman-font">জনাব শাহ মোহাম্মদ ইমরান</div>
                            <div class="text-gray-600 text-sm solaiman-font">ভারপ্রাপ্ত অধ্যক্ষ</div>
                        </div>
                    </div>
                    <p class="text-gray-700 leading-relaxed solaiman-font mb-6">
                        "বিসমিল্লাহির রহমানির রহিম। পাহাড়তলী গার্লস স্কুল এন্ড কলেজের সুমহান শিক্ষাঙ্গনে আপনাদের সবাইকে
                        স্বাগতম।" প্রতিষ্ঠার শুরু থেকেই আমরা শুধু পাঠ্যবইয়ের শিক্ষা নয়, বরং সমন্বিত শিক্ষার মাধ্যমে
                        শিক্ষার্থীদের মানসিক, নৈতিক ও আধ্যাত্মিক উন্নয়নে কাজ করে যাচ্ছি। আমাদের লক্ষ্য এমন নাগরিক তৈরি
                        করা যারা জ্ঞান-বিজ্ঞানে সমৃদ্ধ হওয়ার পাশাপাশি দেশপ্রেম ও মানবিক মূল্যবোধে উজ্জ্বল।
                        ডিজিটাল বাংলাদেশের চাহিদা অনুযায়ী আমরা শিক্ষার্থীদের প্রযুক্তি দক্ষ করে গড়ে তুলছি। আমাদের সকল
                        প্রচেষ্টা শিক্ষার্থীদের ভবিষ্যৎ উজ্জ্বল করার জন্য।
                    </p>
                </div>
            </div>

            <!-- Vision & Mission (From Old Page) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
                <div
                    class="bg-gradient-to-br from-green-50 to-emerald-100 p-8 rounded-2xl shadow-lg border border-green-100">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="p-3 bg-green-600 text-white rounded-xl">
                            <i class="fas fa-bullseye text-2xl"></i>
                        </div>
                        <h4 class="text-2xl font-bold text-gray-800 solaiman-font">আমাদের লক্ষ্য</h4>
                    </div>
                    <ul class="space-y-3 text-gray-700">
                        <li class="timeline-item solaiman-font">জ্ঞান-বিজ্ঞানে দক্ষ নারী নেতৃত্ব তৈরি</li>
                        <li class="timeline-item solaiman-font">প্রযুক্তিগত শিক্ষার সম্প্রসারণ</li>
                        <li class="timeline-item solaiman-font">নৈতিক মূল্যবোধের বিকাশ</li>
                        <li class="timeline-item solaiman-font">সৃজনশীলতা ও উদ্ভাবনী শক্তির চর্চা</li>
                    </ul>
                </div>

                <div
                    class="bg-gradient-to-br from-blue-50 to-cyan-100 p-8 rounded-2xl shadow-lg border border-blue-100">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="p-3 bg-blue-600 text-white rounded-xl">
                            <i class="fas fa-eye text-2xl"></i>
                        </div>
                        <h4 class="text-2xl font-bold text-gray-800 solaiman-font">আমাদের ভিশন</h4>
                    </div>
                    <p class="text-gray-700 leading-relaxed solaiman-font">
                        "স্মার্ট বাংলাদেশ বিনির্মাণে স্মার্ট নাগরিক হিসেবে আমাদের ছাত্রীদের গড়ে তোলা। আধুনিক শিক্ষা
                        পদ্ধতি, প্রযুক্তির ব্যবহার এবং নৈতিক মূল্যবোধের সমন্বয়ে একটি আদর্শ শিক্ষাপ্রতিষ্ঠান হিসেবে
                        প্রতিষ্ঠিত হওয়া।"
                    </p>
                </div>
            </div>

            <!-- Governing Body -->
            <div class="mb-16">
                <h3 class="text-2xl font-bold text-center mb-12 solaiman-font">গভর্নিং বডি</h3>
                <div class="overflow-x-auto">
                    <table class="staff-table">
                        <thead>
                            <tr>
                                <th class="solaiman-font">ক্রমিক</th>
                                <th class="solaiman-font">নাম</th>
                                <th class="solaiman-font">পদবী</th>
                                <th class="solaiman-font">যোগাযোগ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>১</td>
                                <td class="solaiman-font">জনাব মোঃ আব্দুল জলিল</td>
                                <td class="solaiman-font">সভাপতি</td>
                                <td>০১৭১১-২৩৪৫৬৭</td>
                            </tr>
                            <tr>
                                <td>২</td>
                                <td class="solaiman-font">জনাব মোঃ রফিকুল ইসলাম</td>
                                <td class="solaiman-font">সদস্য সচিব</td>
                                <td>০১৮১৯-০৭০৫৮৫</td>
                            </tr>
                            <tr>
                                <td>৩</td>
                                <td class="solaiman-font">জনাবা সেলিনা আক্তার</td>
                                <td class="solaiman-font">শিক্ষক প্রতিনিধি</td>
                                <td>০১৭১২-৩৪৫৬৭৮</td>
                            </tr>
                            <tr>
                                <td>৪</td>
                                <td class="solaiman-font">জনাব মোঃ শহীদুল ইসলাম</td>
                                <td class="solaiman-font">অর্থ সম্পাদক</td>
                                <td>০১৯১১-২২৩৩৪৪</td>
                            </tr>
                            <tr>
                                <td>৫</td>
                                <td class="solaiman-font">জনাবা নাসরিন জাহান</td>
                                <td class="solaiman-font">অভিভাবক প্রতিনিধি</td>
                                <td>০১৭১৩-৪৫৬৭৮৯</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Teachers & Staff -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Teachers List -->
                <div>
                    <h3 class="text-2xl font-bold mb-8 solaiman-font">শিক্ষকবৃন্দ</h3>
                    <div class="space-y-6">
                        <div class="flex items-center gap-4 p-4 bg-white rounded-xl shadow-sm border border-gray-100">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-green-100 to-emerald-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-chalkboard-teacher text-green-600 text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 solaiman-font">জনাবা ফাতেমা বেগম</h4>
                                <p class="text-gray-600 text-sm solaiman-font">প্রধান শিক্ষিকা (বিজ্ঞান)</p>
                                <p class="text-gray-500 text-xs">২০ বছর অভিজ্ঞতা</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4 p-4 bg-white rounded-xl shadow-sm border border-gray-100">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-blue-100 to-cyan-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-book text-blue-600 text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 solaiman-font">জনাবা সুরাইয়া আক্তার</h4>
                                <p class="text-gray-600 text-sm solaiman-font">সহকারী প্রধান শিক্ষিকা (মানবিক)</p>
                                <p class="text-gray-500 text-xs">১৫ বছর অভিজ্ঞতা</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4 p-4 bg-white rounded-xl shadow-sm border border-gray-100">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-orange-100 to-amber-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-calculator text-orange-600 text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 solaiman-font">জনাবা রোকসানা আক্তার</h4>
                                <p class="text-gray-600 text-sm solaiman-font">গণিত বিভাগীয় প্রধান</p>
                                <p class="text-gray-500 text-xs">১৮ বছর অভিজ্ঞতা</p>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="inline-flex items-center gap-2 text-green-600 font-semibold mt-6 solaiman-font">
                        <i class="fas fa-list"></i> সকল শিক্ষকের তালিকা
                    </a>
                </div>

                <!-- Staff List -->
                <div>
                    <h3 class="text-2xl font-bold mb-8 solaiman-font">কর্মচারীবৃন্দ</h3>
                    <div class="space-y-6">
                        <div class="flex items-center gap-4 p-4 bg-white rounded-xl shadow-sm border border-gray-100">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-purple-100 to-pink-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-user-tie text-purple-600 text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 solaiman-font">জনাব মোঃ জাহাঙ্গীর আলম</h4>
                                <p class="text-gray-600 text-sm solaiman-font">প্রধান কর্মকর্তা</p>
                                <p class="text-gray-500 text-xs">অফিস প্রশাসন</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4 p-4 bg-white rounded-xl shadow-sm border border-gray-100">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-red-100 to-pink-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-user-shield text-red-600 text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 solaiman-font">জনাব মোঃ সোহেল রানা</h4>
                                <p class="text-gray-600 text-sm solaiman-font">সহকারী কর্মকর্তা</p>
                                <p class="text-gray-500 text-xs">নিরাপত্তা বিভাগ</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4 p-4 bg-white rounded-xl shadow-sm border border-gray-100">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-yellow-100 to-amber-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-broom text-yellow-600 text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 solaiman-font">জনাবা মরিয়ম বেগম</h4>
                                <p class="text-gray-600 text-sm solaiman-font">পরিচ্ছন্নতা কর্মী</p>
                                <p class="text-gray-500 text-xs">সাধারণ বিভাগ</p>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="inline-flex items-center gap-2 text-green-600 font-semibold mt-6 solaiman-font">
                        <i class="fas fa-list"></i> সকল কর্মচারীর তালিকা
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Academic Programs Section (From Old Page) -->
    <section class="parallax-section py-20 text-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 solaiman-font">আমাদের একাডেমিক প্রোগ্রাম</h2>
                <p class="text-xl opacity-90 max-w-3xl mx-auto solaiman-font">
                    শ্রেণি ৬ থেকে ১০ পর্যন্ত বিজ্ঞান, মানবিক ও ব্যবসায় শিক্ষা শাখায় পড়াশোনার সুযোগ
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div
                    class="bg-white/10 backdrop-blur-sm rounded-3xl p-8 border border-white/20 hover:bg-white/15 transition duration-300">
                    <div class="text-center mb-6">
                        <div class="inline-flex p-4 bg-white/20 rounded-2xl mb-4">
                            <i class="fas fa-atom text-4xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-2 solaiman-font">বিজ্ঞান শাখা</h3>
                        <div class="text-yellow-300 font-bold text-lg mb-4">এ+ (গড় ফলাফল)</div>
                    </div>
                    <ul class="space-y-3 text-gray-200">
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-green-300"></i>
                            <span class="solaiman-font">আধুনিক ল্যাব সুবিধা</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-green-300"></i>
                            <span class="solaiman-font">বিজ্ঞান মেলা ও প্রকল্প</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-green-300"></i>
                            <span class="solaiman-font">রোবটিক্স ক্লাব</span>
                        </li>
                    </ul>
                </div>

                <div
                    class="bg-white/10 backdrop-blur-sm rounded-3xl p-8 border border-white/20 hover:bg-white/15 transition duration-300">
                    <div class="text-center mb-6">
                        <div class="inline-flex p-4 bg-white/20 rounded-2xl mb-4">
                            <i class="fas fa-book text-4xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-2 solaiman-font">মানবিক শাখা</h3>
                        <div class="text-yellow-300 font-bold text-lg mb-4">এ (গড় ফলাফল)</div>
                    </div>
                    <ul class="space-y-3 text-gray-200">
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-green-300"></i>
                            <span class="solaiman-font">সাহিত্য ও সংস্কৃতি চর্চা</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-green-300"></i>
                            <span class="solaiman-font">বিতর্ক ও উপস্থাপনা</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-green-300"></i>
                            <span class="solaiman-font">সামাজিক গবেষণা</span>
                        </li>
                    </ul>
                </div>

                <div
                    class="bg-white/10 backdrop-blur-sm rounded-3xl p-8 border border-white/20 hover:bg-white/15 transition duration-300">
                    <div class="text-center mb-6">
                        <div class="inline-flex p-4 bg-white/20 rounded-2xl mb-4">
                            <i class="fas fa-chart-line text-4xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-2 solaiman-font">ব্যবসায় শিক্ষা</h3>
                        <div class="text-yellow-300 font-bold text-lg mb-4">এ (গড় ফলাফল)</div>
                    </div>
                    <ul class="space-y-3 text-gray-200">
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-green-300"></i>
                            <span class="solaiman-font">ব্যবসায়িক দক্ষতা উন্নয়ন</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-green-300"></i>
                            <span class="solaiman-font">ব্যবসায় প্রকল্প প্রস্তুতি</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-green-300"></i>
                            <span class="solaiman-font">আর্থিক সাক্ষরতা</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="#"
                    class="inline-flex items-center gap-3 bg-white text-green-800 hover:bg-gray-100 font-bold px-8 py-4 rounded-xl transition duration-300 shadow-2xl">
                    <i class="fas fa-download"></i>
                    <span class="solaiman-font">একাডেমিক ক্যালেন্ডার ডাউনলোড</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Student Statistics Section -->
    <section class="section-container bg-gray-50">
        <div class="container mx-auto px-4 md:px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-green-900 mb-4 solaiman-font section-title">
                    শিক্ষার্থী পরিসংখ্যান
                </h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto solaiman-font">
                    শ্রেণীভিত্তিক শিক্ষার্থী সংখ্যা ও দৈনিক উপস্থিতি
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Class-wise Student Count -->
                <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100">
                    <h3 class="text-2xl font-bold text-gray-800 mb-8 solaiman-font">শ্রেণীভিত্তিক শিক্ষার্থী সংখ্যা</h3>
                    <div class="space-y-6">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                                    <span class="font-bold text-green-700">৬</span>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-800 solaiman-font">ষষ্ঠ শ্রেণী</div>
                                    <div class="text-gray-500 text-sm solaiman-font">বিজ্ঞান, মানবিক, ব্যবসায় শিক্ষা
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-2xl font-bold text-green-700">১৮০</div>
                                <div class="text-sm text-gray-500 solaiman-font">শিক্ষার্থী</div>
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <span class="font-bold text-blue-700">৭</span>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-800 solaiman-font">সপ্তম শ্রেণী</div>
                                    <div class="text-gray-500 text-sm solaiman-font">বিজ্ঞান, মানবিক, ব্যবসায় শিক্ষা
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-2xl font-bold text-blue-700">২০০</div>
                                <div class="text-sm text-gray-500 solaiman-font">শিক্ষার্থী</div>
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                                    <span class="font-bold text-orange-700">৮</span>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-800 solaiman-font">অষ্টম শ্রেণী</div>
                                    <div class="text-gray-500 text-sm solaiman-font">বিজ্ঞান, মানবিক, ব্যবসায় শিক্ষা
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-2xl font-bold text-orange-700">২২০</div>
                                <div class="text-sm text-gray-500 solaiman-font">শিক্ষার্থী</div>
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                                    <span class="font-bold text-purple-700">৯</span>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-800 solaiman-font">নবম শ্রেণী</div>
                                    <div class="text-gray-500 text-sm solaiman-font">বিজ্ঞান, মানবিক, ব্যবসায় শিক্ষা
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-2xl font-bold text-purple-700">২৫০</div>
                                <div class="text-sm text-gray-500 solaiman-font">শিক্ষার্থী</div>
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center">
                                    <span class="font-bold text-red-700">১০</span>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-800 solaiman-font">দশম শ্রেণী</div>
                                    <div class="text-gray-500 text-sm solaiman-font">বিজ্ঞান, মানবিক, ব্যবসায় শিক্ষা
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-2xl font-bold text-red-700">৪০০</div>
                                <div class="text-sm text-gray-500 solaiman-font">শিক্ষার্থী</div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 pt-6 border-t border-gray-200">
                        <div class="flex justify-between items-center">
                            <div class="font-bold text-gray-800 solaiman-font">মোট শিক্ষার্থী</div>
                            <div class="text-3xl font-bold text-green-700">১,২৫০</div>
                        </div>
                    </div>
                </div>

                <!-- Daily Attendance Chart -->
                <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100">
                    <h3 class="text-2xl font-bold text-gray-800 mb-8 solaiman-font">দৈনিক উপস্থিতি চার্ট</h3>

                    <div class="attendance-chart">
                        <div class="attendance-bar" style="height: 85%">
                            <div class="attendance-bar-value">৮৫%</div>
                            <div class="attendance-bar-label solaiman-font">ষষ্ঠ</div>
                        </div>
                        <div class="attendance-bar" style="height: 90%">
                            <div class="attendance-bar-value">৯০%</div>
                            <div class="attendance-bar-label solaiman-font">সপ্তম</div>
                        </div>
                        <div class="attendance-bar" style="height: 88%">
                            <div class="attendance-bar-value">৮৮%</div>
                            <div class="attendance-bar-label solaiman-font">অষ্টম</div>
                        </div>
                        <div class="attendance-bar" style="height: 92%">
                            <div class="attendance-bar-value">৯২%</div>
                            <div class="attendance-bar-label solaiman-font">নবম</div>
                        </div>
                        <div class="attendance-bar" style="height: 95%">
                            <div class="attendance-bar-value">৯৫%</div>
                            <div class="attendance-bar-label solaiman-font">দশম</div>
                        </div>
                    </div>

                    <div class="mt-8 grid grid-cols-2 gap-4">
                        <div class="text-center p-4 bg-green-50 rounded-lg">
                            <div class="text-2xl font-bold text-green-700">৯২%</div>
                            <div class="text-sm text-gray-600 solaiman-font">গড় উপস্থিতি</div>
                        </div>
                        <div class="text-center p-4 bg-blue-50 rounded-lg">
                            <div class="text-2xl font-bold text-blue-700">১,১৫০</div>
                            <div class="text-sm text-gray-600 solaiman-font">আজ উপস্থিত</div>
                        </div>
                    </div>

                    <div class="mt-6 text-center">
                        <div class="text-sm text-gray-500 solaiman-font">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            তারিখ: ১৫ জানুয়ারি ২০২৬
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Photo & Video Gallery Section -->
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

    <!-- Academic Section -->
    <section id="academic" class="section-container bg-gray-50">
        <div class="container mx-auto px-4 md:px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-green-900 mb-4 solaiman-font section-title">
                    একাডেমিক তথ্য
                </h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto solaiman-font">
                    শ্রেণীভিত্তিক শিক্ষাক্রম ও পড়ালেখার মানসম্পন্ন পরিবেশ
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Class Information -->
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100">
                        <div class="bg-gradient-to-r from-purple-700 to-purple-800 px-6 py-5">
                            <h3 class="text-2xl font-bold text-white flex items-center gap-3 solaiman-font">
                                <i class="fas fa-graduation-cap"></i>
                                শ্রেণী তথ্য
                            </h3>
                        </div>
                        <div class="p-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="bg-purple-50 p-6 rounded-xl">
                                    <h4 class="text-xl font-bold text-purple-800 mb-4 solaiman-font">ষষ্ঠ থেকে অষ্টম
                                        শ্রেণী</h4>
                                    <ul class="space-y-2">
                                        <li class="flex items-center gap-2">
                                            <i class="fas fa-check text-green-600"></i>
                                            <span class="solaiman-font">সাধারণ শিক্ষা কার্যক্রম</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <i class="fas fa-check text-green-600"></i>
                                            <span class="solaiman-font">বিজ্ঞান, মানবিক ও ব্যবসায় শিক্ষা বিভাগ</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <i class="fas fa-check text-green-600"></i>
                                            <span class="solaiman-font">মাধ্যমিক শিক্ষা বোর্ড সিলেবাস</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="bg-blue-50 p-6 rounded-xl">
                                    <h4 class="text-xl font-bold text-blue-800 mb-4 solaiman-font">নবম-দশম শ্রেণী</h4>
                                    <ul class="space-y-2">
                                        <li class="flex items-center gap-2">
                                            <i class="fas fa-check text-green-600"></i>
                                            <span class="solaiman-font">বিজ্ঞান, মানবিক, ব্যবসায় শিক্ষা বিভাগ</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <i class="fas fa-check text-green-600"></i>
                                            <span class="solaiman-font">এসএসসি পরীক্ষার প্রস্তুতি</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <i class="fas fa-check text-green-600"></i>
                                            <span class="solaiman-font">বিশেষ কোচিং ক্লাস</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Academic Calendar -->
                <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 solaiman-font">একাডেমিক ক্যালেন্ডার</h3>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between p-3 bg-green-50 rounded-lg">
                            <span class="font-medium solaiman-font">শিক্ষাবর্ষ শুরু</span>
                            <span class="font-bold text-green-700">১ জানুয়ারি</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-blue-50 rounded-lg">
                            <span class="font-medium solaiman-font">মধ্যবর্তী পরীক্ষা</span>
                            <span class="font-bold text-blue-700">১৫-২৫ ফেব্রুয়ারি</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-orange-50 rounded-lg">
                            <span class="font-medium solaiman-font">বার্ষিক পরীক্ষা</span>
                            <span class="font-bold text-orange-700">১-১৫ নভেম্বর</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-purple-50 rounded-lg">
                            <span class="font-medium solaiman-font">শিক্ষাবর্ষ শেষ</span>
                            <span class="font-bold text-purple-700">৩১ ডিসেম্বর</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Admission Section -->
    <section id="admission" class="section-container bg-white">
        <div class="container mx-auto px-4 md:px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-green-900 mb-4 solaiman-font section-title">
                    ভর্তি তথ্য
                </h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto solaiman-font">
                    ২০২৬ শিক্ষাবর্ষে ভর্তি কার্যক্রম সম্পর্কিত গুরুত্বপূর্ণ তথ্য
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Admission Process -->
                <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6 solaiman-font">ভর্তি প্রক্রিয়া</h3>
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div
                                class="w-10 h-10 bg-green-100 text-green-700 rounded-full flex items-center justify-center font-bold flex-shrink-0">
                                ১
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 mb-2 solaiman-font">আবেদন ফরম সংগ্রহ</h4>
                                <p class="text-gray-600 solaiman-font">অফিস থেকে সরাসরি বা ওয়েবসাইট থেকে ডাউনলোড</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div
                                class="w-10 h-10 bg-blue-100 text-blue-700 rounded-full flex items-center justify-center font-bold flex-shrink-0">
                                ২
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 mb-2 solaiman-font">আবেদন জমা</h4>
                                <p class="text-gray-600 solaiman-font">পূরণকৃত ফরম সাথে প্রয়োজনীয় কাগজপত্র জমা দিন</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div
                                class="w-10 h-10 bg-orange-100 text-orange-700 rounded-full flex items-center justify-center font-bold flex-shrink-0">
                                ৩
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 mb-2 solaiman-font">ভর্তি পরীক্ষা</h4>
                                <p class="text-gray-600 solaiman-font">নির্ধারিত তারিখে ভর্তি পরীক্ষায় অংশগ্রহণ</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div
                                class="w-10 h-10 bg-purple-100 text-purple-700 rounded-full flex items-center justify-center font-bold flex-shrink-0">
                                ৪
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 mb-2 solaiman-font">ফলাফল ও ভর্তি</h4>
                                <p class="text-gray-600 solaiman-font">মেধাতালিকা প্রকাশ ও নির্বাচিতদের ভর্তি সম্পন্ন
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Admission Requirements -->
                <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6 solaiman-font">ভর্তির প্রয়োজনীয় কাগজপত্র</h3>
                    <div class="space-y-4">
                        <div class="flex items-center gap-3 p-3 bg-green-50 rounded-lg">
                            <i class="fas fa-file-alt text-green-600"></i>
                            <span class="solaiman-font">ভর্তি ফরম (সঠিকভাবে পূরণকৃত)</span>
                        </div>

                        <div class="flex items-center gap-3 p-3 bg-blue-50 rounded-lg">
                            <i class="fas fa-certificate text-blue-600"></i>
                            <span class="solaiman-font">সর্বশেষ ক্লাসের পাস সার্টিফিকেট</span>
                        </div>

                        <div class="flex items-center gap-3 p-3 bg-orange-50 rounded-lg">
                            <i class="fas fa-id-card text-orange-600"></i>
                            <span class="solaiman-font">জন্ম নিবন্ধন সার্টিফিকেট</span>
                        </div>

                        <div class="flex items-center gap-3 p-3 bg-purple-50 rounded-lg">
                            <i class="fas fa-user text-purple-600"></i>
                            <span class="solaiman-font">২ কপি পাসপোর্ট সাইজ ছবি</span>
                        </div>

                        <div class="flex items-center gap-3 p-3 bg-red-50 rounded-lg">
                            <i class="fas fa-file-invoice text-red-600"></i>
                            <span class="solaiman-font">অভিভাবকের জাতীয় পরিচয়পত্রের ফটোকপি</span>
                        </div>
                    </div>

                    <div class="mt-8 p-4 bg-yellow-50 rounded-lg border border-yellow-200">
                        <div class="flex items-start gap-3">
                            <i class="fas fa-exclamation-triangle text-yellow-600 mt-1"></i>
                            <div>
                                <h4 class="font-bold text-yellow-800 mb-1 solaiman-font">গুরুত্বপূর্ণ নোট</h4>
                                <p class="text-yellow-700 text-sm solaiman-font">ভর্তি ফরম জমার শেষ তারিখ: ৩০ জানুয়ারি
                                    ২০২৬</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Results Section -->
    <section id="results" class="section-container bg-gray-50">
        <div class="container mx-auto px-4 md:px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-green-900 mb-4 solaiman-font section-title">
                    ফলাফল
                </h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto solaiman-font">
                    বার্ষিক পরীক্ষা ও বোর্ড পরীক্ষার ফলাফল
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Recent Results -->
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100">
                        <div class="bg-gradient-to-r from-red-700 to-red-800 px-6 py-5">
                            <h3 class="text-2xl font-bold text-white flex items-center gap-3 solaiman-font">
                                <i class="fas fa-chart-line"></i>
                                সাম্প্রতিক ফলাফল
                            </h3>
                        </div>
                        <div class="p-6">
                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead>
                                        <tr class="bg-gray-50">
                                            <th class="py-3 px-4 text-left font-semibold text-gray-700 solaiman-font">
                                                পরীক্ষা</th>
                                            <th class="py-3 px-4 text-left font-semibold text-gray-700 solaiman-font">
                                                সাল</th>
                                            <th class="py-3 px-4 text-left font-semibold text-gray-700 solaiman-font">
                                                পাসের হার</th>
                                            <th class="py-3 px-4 text-left font-semibold text-gray-700 solaiman-font">
                                                জিপিএ-৫</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-100">
                                        <tr class="hover:bg-gray-50">
                                            <td class="py-3 px-4 solaiman-font">এসএসসি</td>
                                            <td class="py-3 px-4">২০২৫</td>
                                            <td class="py-3 px-4">
                                                <span class="font-bold text-green-700">৯৮.৫%</span>
                                            </td>
                                            <td class="py-3 px-4">
                                                <span class="font-bold text-blue-700">৪৫ জন</span>
                                            </td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="py-3 px-4 solaiman-font">জেএসসি</td>
                                            <td class="py-3 px-4">২০২৫</td>
                                            <td class="py-3 px-4">
                                                <span class="font-bold text-green-700">৯৯.২%</span>
                                            </td>
                                            <td class="py-3 px-4">
                                                <span class="font-bold text-blue-700">৬৮ জন</span>
                                            </td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="py-3 px-4 solaiman-font">বার্ষিক পরীক্ষা</td>
                                            <td class="py-3 px-4">২০২৫</td>
                                            <td class="py-3 px-4">
                                                <span class="font-bold text-green-700">৯৭.৮%</span>
                                            </td>
                                            <td class="py-3 px-4">
                                                <span class="font-bold text-blue-700">৮৫ জন</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Merit List -->
                <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 solaiman-font">মেধাতালিকা (২০২৫ এসএসসি)</h3>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between p-3 bg-yellow-50 rounded-lg">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-8 h-8 bg-yellow-100 text-yellow-800 rounded-full flex items-center justify-center font-bold">
                                    ১
                                </div>
                                <span class="font-medium solaiman-font">সাবা সুলতানা</span>
                            </div>
                            <span class="font-bold text-yellow-700">জিপিএ-৫</span>
                        </div>

                        <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-8 h-8 bg-gray-100 text-gray-800 rounded-full flex items-center justify-center font-bold">
                                    ২
                                </div>
                                <span class="font-medium solaiman-font">ফারিহা তাসনিম</span>
                            </div>
                            <span class="font-bold text-gray-700">জিপিএ-৫</span>
                        </div>

                        <div class="flex items-center justify-between p-3 bg-orange-50 rounded-lg">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-8 h-8 bg-orange-100 text-orange-800 rounded-full flex items-center justify-center font-bold">
                                    ৩
                                </div>
                                <span class="font-medium solaiman-font">আফসানা আক্তার</span>
                            </div>
                            <span class="font-bold text-orange-700">জিপিএ-৫</span>
                        </div>

                        <div class="flex items-center justify-between p-3 bg-green-50 rounded-lg">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-8 h-8 bg-green-100 text-green-800 rounded-full flex items-center justify-center font-bold">
                                    ৪
                                </div>
                                <span class="font-medium solaiman-font">নুসরাত জাহান</span>
                            </div>
                            <span class="font-bold text-green-700">জিপিএ-৫</span>
                        </div>
                    </div>

                    <a href="#"
                        class="block text-center mt-6 text-blue-600 font-semibold hover:text-blue-700 solaiman-font">
                        <i class="fas fa-list mr-2"></i>সম্পূর্ণ মেধাতালিকা দেখুন
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section with Emergency Contact (From Old Page) -->
    <section id="contact" class="section-container bg-white">
        <div class="container mx-auto px-4 md:px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-green-900 mb-4 solaiman-font section-title">
                    যোগাযোগ
                </h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto solaiman-font">
                    আমাদের সাথে যোগাযোগের সকল মাধ্যম
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- Contact Information -->
                <div class="space-y-8">
                    <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6 solaiman-font">যোগাযোগ তথ্য</h3>

                        <div class="space-y-6">
                            <div class="flex items-start gap-4">
                                <div class="p-3 bg-green-100 rounded-lg">
                                    <i class="fas fa-map-marker-alt text-green-600 text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-1 solaiman-font">ঠিকানা</h4>
                                    <p class="text-gray-600 solaiman-font">পাহাড়তলী গার্লস স্কুল এন্ড কলেজ<br>
                                        পাহাড়তলী, আকবরশাহ, চট্টগ্রাম</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="p-3 bg-blue-100 rounded-lg">
                                    <i class="fas fa-phone-alt text-blue-600 text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-1 solaiman-font">ফোন</h4>
                                    <p class="text-gray-600 solaiman-font">+৮৮০১৮১৯০৭০৫৮৫<br>
                                        +৮৮০১৮১৯০৭০৫৮৬ (অফিস)</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="p-3 bg-orange-100 rounded-lg">
                                    <i class="fas fa-envelope text-orange-600 text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-1 solaiman-font">ইমেইল</h4>
                                    <p class="text-gray-600 solaiman-font">pgsc1950@gmail.com<br>
                                        info@pgsc.edu.bd</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="p-3 bg-purple-100 rounded-lg">
                                    <i class="fas fa-clock text-purple-600 text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-1 solaiman-font">অফিস সময়</h4>
                                    <p class="text-gray-600 solaiman-font">রবি - বৃহস্পতিবার: সকাল ৯টা - বিকাল ৫টা<br>
                                        শুক্রবার: সকাল ৯টা - দুপুর ১টা</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Emergency Contact (From Old Page) -->
                    <div class="bg-gradient-to-br from-green-600 to-emerald-700 rounded-2xl shadow-xl p-6 text-white">
                        <h3 class="text-xl font-bold mb-6 flex items-center gap-3 solaiman-font">
                            <i class="fas fa-headset"></i>
                            জরুরি যোগাযোগ
                        </h3>
                        <div class="space-y-4">
                            <div class="flex items-center gap-3">
                                <div class="p-2 bg-white/20 rounded-lg">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div>
                                    <div class="text-sm opacity-80 solaiman-font">জরুরি নাম্বার</div>
                                    <div class="font-bold">+৮৮০১৮১৯০৭০৫৮৫</div>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="p-2 bg-white/20 rounded-lg">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div>
                                    <div class="text-sm opacity-80 solaiman-font">কার্যকাল</div>
                                    <div class="font-bold solaiman-font">সকাল ৯টা - বিকাল ৫টা</div>
                                </div>
                            </div>
                        </div>
                        <button
                            class="w-full mt-6 bg-white text-green-700 hover:bg-gray-100 font-bold py-3 rounded-xl transition duration-300 solaiman-font">
                            <i class="fas fa-comment-dots mr-2"></i>অনলাইন পরামর্শ
                        </button>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100 lg:col-span-2">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6 solaiman-font">মেসেজ পাঠান</h3>
                    <form class="space-y-6">
                        <div>
                            <label class="block text-gray-700 mb-2 solaiman-font">আপনার নাম</label>
                            <input type="text"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent"
                                placeholder="পুরো নাম লিখুন">
                        </div>

                        <div>
                            <label class="block text-gray-700 mb-2 solaiman-font">ইমেইল ঠিকানা</label>
                            <input type="email"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent"
                                placeholder="example@email.com">
                        </div>

                        <div>
                            <label class="block text-gray-700 mb-2 solaiman-font">ফোন নম্বর</label>
                            <input type="tel"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent"
                                placeholder="+৮৮০XXXXXXXXXX">
                        </div>

                        <div>
                            <label class="block text-gray-700 mb-2 solaiman-font">বিষয়</label>
                            <select
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                <option value="">বিষয় নির্বাচন করুন</option>
                                <option value="admission">ভর্তি সম্পর্কিত</option>
                                <option value="academic">একাডেমিক সম্পর্কিত</option>
                                <option value="result">ফলাফল সম্পর্কিত</option>
                                <option value="other">অন্যান্য</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-gray-700 mb-2 solaiman-font">মেসেজ</label>
                            <textarea rows="5"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent"
                                placeholder="আপনার মেসেজ লিখুন..."></textarea>
                        </div>

                        <button type="submit"
                            class="w-full bg-gradient-to-r from-green-600 to-emerald-700 hover:from-green-700 hover:to-emerald-800 text-white py-3 rounded-lg font-bold transition duration-300 solaiman-font">
                            মেসেজ পাঠান
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer (From Old Page) -->
    <footer class="bg-gray-900 text-white pt-16 pb-8">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                <!-- School Info -->
                <div>
                    <div class="flex items-center gap-4 mb-8">
                        <img src="https://pgsc.edu.bd/images/schoollogo.png" class="h-16 bg-white p-2 rounded-xl"
                            alt="Logo">
                        <div>
                            <h3 class="text-xl font-bold solaiman-font">পাহাড়তলী গার্লস স্কুল এন্ড কলেজ</h3>
                            <p class="text-sm text-gray-400 mt-1 solaiman-font">স্থাপিত: ১৯৫০</p>
                        </div>
                    </div>
                    <p class="text-gray-400 leading-relaxed mb-6 solaiman-font">
                        নারী শিক্ষা বিস্তারে অগ্রণী ভূমিকা পালনকারী একটি ঐতিহ্যবাহী শিক্ষাপ্রতিষ্ঠান। আমরা শিক্ষার্থীদের
                        সুনাগরিক হিসেবে গড়ে তুলতে প্রতিশ্রুতিবদ্ধ।
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="bg-gray-800 hover:bg-green-600 p-3 rounded-full transition duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="bg-gray-800 hover:bg-red-600 p-3 rounded-full transition duration-300">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="#" class="bg-gray-800 hover:bg-blue-400 p-3 rounded-full transition duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-xl font-bold mb-8 text-yellow-300 solaiman-font">দ্রুত লিংক</h4>
                    <ul class="space-y-4">
                        <li><a href="#"
                                class="text-gray-400 hover:text-white transition duration-300 flex items-center gap-3">
                                <i class="fas fa-chevron-right text-green-500"></i>
                                <span class="solaiman-font">অনলাইন ভর্তি</span>
                            </a></li>
                        <li><a href="#"
                                class="text-gray-400 hover:text-white transition duration-300 flex items-center gap-3">
                                <i class="fas fa-chevron-right text-green-500"></i>
                                <span class="solaiman-font">একাডেমিক ক্যালেন্ডার</span>
                            </a></li>
                        <li><a href="#"
                                class="text-gray-400 hover:text-white transition duration-300 flex items-center gap-3">
                                <i class="fas fa-chevron-right text-green-500"></i>
                                <span class="solaiman-font">শিক্ষকবৃন্দ</span>
                            </a></li>
                        <li><a href="#"
                                class="text-gray-400 hover:text-white transition duration-300 flex items-center gap-3">
                                <i class="fas fa-chevron-right text-green-500"></i>
                                <span class="solaiman-font">কর্মচারী তথ্য</span>
                            </a></li>
                    </ul>
                </div>

                <!-- Academic Links -->
                <div>
                    <h4 class="text-xl font-bold mb-8 text-yellow-300 solaiman-font">একাডেমিক</h4>
                    <ul class="space-y-4">
                        <li><a href="#"
                                class="text-gray-400 hover:text-white transition duration-300 flex items-center gap-3">
                                <i class="fas fa-book text-green-500"></i>
                                <span class="solaiman-font">শ্রেণি রুটিন</span>
                            </a></li>
                        <li><a href="#"
                                class="text-gray-400 hover:text-white transition duration-300 flex items-center gap-3">
                                <i class="fas fa-file-alt text-green-500"></i>
                                <span class="solaiman-font">পরীক্ষার সিলেবাস</span>
                            </a></li>
                        <li><a href="#"
                                class="text-gray-400 hover:text-white transition duration-300 flex items-center gap-3">
                                <i class="fas fa-calendar-alt text-green-500"></i>
                                <span class="solaiman-font">ইভেন্ট ক্যালেন্ডার</span>
                            </a></li>
                        <li><a href="#"
                                class="text-gray-400 hover:text-white transition duration-300 flex items-center gap-3">
                                <i class="fas fa-trophy text-green-500"></i>
                                <span class="solaiman-font">অর্জনসমূহ</span>
                            </a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-xl font-bold mb-8 text-yellow-300 solaiman-font">যোগাযোগ</h4>
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <i class="fas fa-map-marker-alt text-green-400 mt-1"></i>
                            <div>
                                <h5 class="font-semibold solaiman-font">ঠিকানা</h5>
                                <p class="text-gray-400 text-sm mt-1 solaiman-font">
                                    শহীদ লেন, পাহাড়তলী<br>
                                    আকবরশাহ, চট্টগ্রাম-৪২০২<br>
                                    বাংলাদেশ
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <i class="fas fa-phone-alt text-green-400 mt-1"></i>
                            <div>
                                <h5 class="font-semibold solaiman-font">ফোন</h5>
                                <p class="text-gray-400 text-sm mt-1 solaiman-font">
                                    +৮৮০১৮১৯০৭০৫৮৫<br>
                                    +৮৮০২২-৭৭৪৫৬
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <i class="fas fa-envelope text-green-400 mt-1"></i>
                            <div>
                                <h5 class="font-semibold solaiman-font">ইমেইল</h5>
                                <p class="text-gray-400 text-sm mt-1 solaiman-font">
                                    pgsc1950@gmail.com<br>
                                    info@pgsc.edu.bd
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Government Links -->
            <div class="bg-gray-800 rounded-2xl p-6 mb-12">
                <h4 class="text-lg font-bold mb-6 text-center text-yellow-300 solaiman-font">সরকারি ওয়েবসাইট লিংক</h4>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <a href="#"
                        class="bg-gray-700 hover:bg-gray-600 p-4 rounded-xl text-center transition duration-300">
                        <i class="fas fa-university text-green-400 text-xl mb-2"></i>
                        <div class="text-sm solaiman-font">শিক্ষা মন্ত্রণালয়</div>
                    </a>
                    <a href="#"
                        class="bg-gray-700 hover:bg-gray-600 p-4 rounded-xl text-center transition duration-300">
                        <i class="fas fa-school text-green-400 text-xl mb-2"></i>
                        <div class="text-sm solaiman-font">চট্টগ্রাম শিক্ষা বোর্ড</div>
                    </a>
                    <a href="#"
                        class="bg-gray-700 hover:bg-gray-600 p-4 rounded-xl text-center transition duration-300">
                        <i class="fas fa-globe text-green-400 text-xl mb-2"></i>
                        <div class="text-sm solaiman-font">মাধ্যমিক শিক্ষা অধিদপ্তর</div>
                    </a>
                    <a href="#"
                        class="bg-gray-700 hover:bg-gray-600 p-4 rounded-xl text-center transition duration-300">
                        <i class="fas fa-desktop text-green-400 text-xl mb-2"></i>
                        <div class="text-sm solaiman-font">শিক্ষক বাতায়ন</div>
                    </a>
                </div>
            </div>

            <!-- Copyright -->
            <div class="pt-8 border-t border-gray-800">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="text-center md:text-left mb-4 md:mb-0">
                        <p class="text-gray-500 text-sm solaiman-font">
                            &copy; ২০২৬ পাহাড়তলী গার্লস স্কুল এন্ড কলেজ। সর্বস্বত্ব সংরক্ষিত।
                        </p>
                        <p class="text-gray-600 text-xs mt-2 solaiman-font">
                            এই ওয়েবসাইটটি স্কুল কর্তৃপক্ষ দ্বারা পরিচালিত
                        </p>
                    </div>
                    <div class="flex flex-wrap justify-center gap-6 text-sm text-gray-500">
                        <a href="#" class="hover:text-white transition solaiman-font">গোপনীয়তা নীতি</a>
                        <a href="#" class="hover:text-white transition solaiman-font">ব্যবহারের শর্তাবলী</a>
                        <a href="#" class="hover:text-white transition solaiman-font">সাইট ম্যাপ</a>
                        <a href="#" class="hover:text-white transition solaiman-font">সহায়তা</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top with Progress (No Arrow) -->
    <div class="back-to-top" id="backToTop">
        <svg class="progress-ring" viewBox="0 0 70 70">
            <circle class="progress-ring-circle" cx="35" cy="35" r="30"></circle>
        </svg>
        <div class="percentage-text" id="percentageText">0%</div>
    </div>

    <!-- Back to Top Button (From Old Page) -->
    <button id="backToTopOld"
        class="fixed bottom-8 right-8 bg-green-600 text-white p-4 rounded-full shadow-2xl hover:bg-green-700 transition duration-300 transform hover:scale-110 hidden z-40">
        <i class="fas fa-chevron-up"></i>
    </button>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Page Loading JavaScript (Separate File) -->
    <script src="page_loading.js"></script>

    <!-- Main JavaScript -->
    <script>
        // ====== MOBILE MENU FIX ======
        const mobileMenuButton = document.getElementById('mobileMenuButton');
        const closeMobileMenu = document.getElementById('closeMobileMenu');
        const mobileLinks = document.querySelectorAll('.mobile-nav-link');


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


        mobileMenuButton.addEventListener('click', (e) => {
            e.stopPropagation();
            mobileMenu.classList.add('active');
            document.body.style.overflow = 'hidden';
        });

        closeMobileMenu.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
            document.body.style.overflow = 'auto';
        });

        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('active');
                document.body.style.overflow = 'auto';
            });
        });

        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!mobileMenu.contains(e.target) && !mobileMenuButton.contains(e.target)) {
                mobileMenu.classList.remove('active');
                document.body.style.overflow = 'auto';
            }
        });

        // ====== SWIPER SLIDER ======
        const swiper = new Swiper('.swiper', {
            direction: 'horizontal',
            loop: true,
            speed: 1000,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },

            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                dynamicBullets: true,
            },

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            keyboard: {
                enabled: true,
            },

            mousewheel: {
                forceToAxis: true,
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
        const imageModal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');
        const closeModal = document.getElementById('closeModal');
        const slideImages = document.querySelectorAll('.slide-image');
        const galleryItems = document.querySelectorAll('.gallery-item');

        function openModal(imgSrc) {
            modalImage.src = imgSrc;
            imageModal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        slideImages.forEach(img => {
            img.addEventListener('click', function () {
                openModal(this.dataset.src);
            });
        });

        galleryItems.forEach(item => {
            item.addEventListener('click', function () {
                const imgSrc = this.querySelector('img').src;
                openModal(imgSrc);
            });
        });

        closeModal.addEventListener('click', () => {
            imageModal.classList.remove('active');
            document.body.style.overflow = 'auto';
        });

        imageModal.addEventListener('click', (e) => {
            if (e.target === imageModal) {
                imageModal.classList.remove('active');
                document.body.style.overflow = 'auto';
            }
        });

        // Close modal with ESC key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && imageModal.classList.contains('active')) {
                imageModal.classList.remove('active');
                document.body.style.overflow = 'auto';
            }
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

        // ====== BACK TO TOP FROM OLD PAGE ======
        const backToTopOld = document.getElementById('backToTopOld');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                backToTopOld.classList.remove('hidden');
            } else {
                backToTopOld.classList.add('hidden');
            }
        });

        backToTopOld.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

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
    </script>

</body>

</html>