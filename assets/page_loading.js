document.addEventListener('DOMContentLoaded', function () {
    const loadingBar = document.getElementById('loading-bar');
    const loadingSpinner = document.getElementById('loadingSpinner');
    const loadingPercentage = document.getElementById('loadingPercentage');
    const loadingResource = document.getElementById('loadingResource');
    const progressStage = document.getElementById('progressStage');

    // Loading stages with Bengali text
    const loadingStages = [
        { percent: 10, text: "পৃষ্ঠা প্রস্তুত হচ্ছে...", stage: "প্রাথমিক লোডিং" },
        { percent: 25, text: "ডিজাইন লোড হচ্ছে...", stage: "ডিজাইন স্টাইলস" },
        { percent: 40, text: "স্ক্রিপ্ট লোড হচ্ছে...", stage: "জাভাস্ক্রিপ্ট ফাইল" },
        { percent: 55, text: "ছবি লোড হচ্ছে...", stage: "ইমেজ লোডিং" },
        { percent: 70, text: "ফন্ট লোড হচ্ছে...", stage: "ফন্ট লোডিং" },
        { percent: 85, text: "বিশেষ ফিচার প্রস্তুত হচ্ছে...", stage: "বিশেষ ফিচার" },
        { percent: 95, text: "শেষ পর্যায়...", stage: "শেষ পর্যায়" }
    ];

    let currentProgress = 0;
    let currentStage = 0;

    // Function to update loading display
    function updateLoading(progress, resourceText = "", stageText = "") {
        // Update progress bar
        loadingBar.style.width = progress + '%';

        // Update percentage text with animation
        loadingPercentage.textContent = Math.round(progress) + '%';

        // Add pulse effect on certain percentages
        if (progress % 25 === 0) {
            loadingPercentage.classList.add('loading-complete');
            setTimeout(() => {
                loadingPercentage.classList.remove('loading-complete');
            }, 500);
        }

        // Update resource text if provided
        if (resourceText) {
            loadingResource.textContent = resourceText;
            loadingResource.style.opacity = '0';
            setTimeout(() => {
                loadingResource.style.opacity = '1';
                loadingResource.style.transition = 'opacity 0.3s ease';
            }, 10);
        }

        // Update stage text if provided
        if (stageText) {
            progressStage.textContent = stageText;
        }
    }

    // Start loading animation
    const loadingInterval = setInterval(() => {
        // Simulate loading progress
        const increment = Math.random() * 8 + 3; // 3-10% per interval
        currentProgress = Math.min(currentProgress + increment, 100);

        // Check if we should move to next stage
        if (currentStage < loadingStages.length &&
            currentProgress >= loadingStages[currentStage].percent) {

            updateLoading(
                currentProgress,
                loadingStages[currentStage].text,
                loadingStages[currentStage].stage
            );
            currentStage++;
        } else {
            updateLoading(currentProgress);
        }

        // Complete loading when reached 100%
        if (currentProgress >= 100) {
            clearInterval(loadingInterval);

            // Show completion for 500ms
            setTimeout(() => {
                loadingPercentage.textContent = "100%";
                loadingResource.textContent = "লোডিং সম্পন্ন!";
                progressStage.textContent = "প্রস্তুত";

                // Add completion effect
                loadingPercentage.classList.add('loading-complete');
                loadingSpinner.style.opacity = '0';

                // Hide after animation
                setTimeout(() => {
                    loadingSpinner.style.display = 'none';
                    document.body.style.overflow = 'auto';
                }, 500);
            }, 300);
        }
    }, 200);

    // Real page load as backup
    window.addEventListener('load', function () {
        if (currentProgress < 100) {
            clearInterval(loadingInterval);
            updateLoading(100, "পৃষ্ঠা সম্পূর্ণ লোড হয়েছে!", "সম্পূর্ণ");

            setTimeout(() => {
                loadingSpinner.style.opacity = '0';
                setTimeout(() => {
                    loadingSpinner.style.display = 'none';
                }, 500);
            }, 500);
        }
    });

    // Timeout fallback
    setTimeout(() => {
        if (loadingSpinner.style.display !== 'none') {
            clearInterval(loadingInterval);
            updateLoading(100, "সময়সীমা শেষ, লোডিং সম্পন্ন", "সময়সীমা");

            setTimeout(() => {
                loadingSpinner.style.opacity = '0';
                setTimeout(() => {
                    loadingSpinner.style.display = 'none';
                }, 500);
            }, 500);
        }
    }, 8000); // 8 second timeout
});