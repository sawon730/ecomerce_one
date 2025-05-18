
document.addEventListener('DOMContentLoaded', function() {
    // Add to cart functionality
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    addToCartButtons.forEach(button => {
        button.addEventListener('click', function() {
            const productCard = this.closest('.product-card');
            if (productCard) {
                const productName = productCard.querySelector('.product-title')?.textContent || 'Unnamed';
                const productPrice = productCard.querySelector('.product-price')?.textContent || '$0';
                alert(`Added to cart: ${productName} - ${productPrice}`);
            } else {
                alert('Quip Sports X19 has been added to your cart!');
            }
        });
    });

    // Search functionality
    const searchInput = document.querySelector('.search-bar input');
    if (searchInput) {
        searchInput.addEventListener('keyup', function(e) {
            if (e.key === 'Enter') {
                const searchTerm = this.value.trim();
                if (searchTerm) {
                    alert(`Searching for: ${searchTerm}`);
                }
            }
        });
    }

    // Navigation menu hover effects
    const navItems = document.querySelectorAll('.nav-list li a');
    navItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            this.style.color = '#0066cc';
            this.style.backgroundColor = '#f0f7ff';
        });
        item.addEventListener('mouseleave', function() {
            this.style.color = '#555';
            this.style.backgroundColor = 'transparent';
        });
    });

    // Toggle sidebar sections
    const sidebarTitles = document.querySelectorAll('.sidebar-title');
    sidebarTitles.forEach(title => {
        title.addEventListener('click', function() {
            const list = this.nextElementSibling;
            if (list && list.classList.contains('sidebar-list')) {
                list.style.display = list.style.display === 'none' ? 'block' : 'none';
                const icon = this.querySelector('i');
                if (icon) {
                    icon.classList.toggle('fa-chevron-down');
                    icon.classList.toggle('fa-chevron-up');
                }
            }
        });
    });

    // Price range slider functionality
    const priceRangeFill = document.querySelector('.price-range-fill');
    let isDragging = false;

    if (priceRangeFill) {
        priceRangeFill.addEventListener('mousedown', () => isDragging = true);

        document.addEventListener('mousemove', function(e) {
            if (isDragging) {
                const priceRange = document.querySelector('.price-range');
                const rect = priceRange.getBoundingClientRect();
                let width = e.clientX - rect.left;
                width = Math.max(0, Math.min(width, rect.width));
                priceRangeFill.style.width = (width / rect.width * 100) + '%';

                const maxPrice = 1040;
                const currentPrice = Math.round(width / rect.width * maxPrice);
                const priceDisplay = document.querySelector('.price-values span:last-child');
                if (priceDisplay) {
                    priceDisplay.textContent = '$' + currentPrice;
                }
            }
        });

        document.addEventListener('mouseup', () => isDragging = false);
    }

    // Countdown Timer Initialization
    updateCountdown();
});

// Change product image when thumbnail is clicked
function changeImage(src) {
    document.getElementById('mainImage').src = src;
    const thumbnails = document.querySelectorAll('.thumbnail');
    thumbnails.forEach(thumb => thumb.classList.remove('active'));
    event.currentTarget.classList.add('active');
}

// Tab functionality
function openTab(tabId) {
    const tabContents = document.querySelectorAll('.tab-content');
    const tabButtons = document.querySelectorAll('.tab-button');
    tabContents.forEach(content => content.classList.remove('active'));
    tabButtons.forEach(button => button.classList.remove('active'));
    document.getElementById(tabId).classList.add('active');
    event.currentTarget.classList.add('active');
}

// Countdown timer logic
function updateCountdown() {
    const countDownDate = new Date();
    countDownDate.setDate(countDownDate.getDate() + 7);

    const x = setInterval(function() {
        const now = new Date().getTime();
        const distance = countDownDate - now;

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("days").textContent = days.toString().padStart(2, '0');
        document.getElementById("hours").textContent = hours.toString().padStart(2, '0');
        document.getElementById("minutes").textContent = minutes.toString().padStart(2, '0');
        document.getElementById("seconds").textContent = seconds.toString().padStart(2, '0');

        if (distance < 0) {
            clearInterval(x);
            ["days", "hours", "minutes", "seconds"].forEach(id => {
                document.getElementById(id).textContent = "00";
            });
        }
    }, 1000);
}
