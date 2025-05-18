document.addEventListener('DOMContentLoaded', function() {
    // Initialize all functionality
    initAddToCart();
    initSearch();
    initNavHover();
    initCountdown();
});

function initAddToCart() {
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    
    if (!addToCartButtons.length) return;
    
    addToCartButtons.forEach(button => {
        button.addEventListener('click', function() {
            try {
                const productCard = this.closest('.product-card');
                if (!productCard) throw new Error('Product card not found');
                
                const productName = productCard.querySelector('.product-title')?.textContent || 'Unknown Product';
                const productPrice = productCard.querySelector('.product-price')?.textContent || '$0.00';
                
                // In a real app, you would add to cart logic here
                alert(`Added to cart: ${productName} - ${productPrice}`);
                
                // Optional: Add visual feedback
                this.textContent = 'Added!';
                setTimeout(() => {
                    this.textContent = 'Add to Cart';
                }, 2000);
            } catch (error) {
                console.error('Add to cart error:', error);
                alert('Could not add item to cart. Please try again.');
            }
        });
    });
}

function initSearch() {
    const searchInput = document.querySelector('.search-bar input');
    
    if (!searchInput) return;
    
    searchInput.addEventListener('keyup', function(e) {
        if (e.key === 'Enter') {
            const searchTerm = this.value.trim();
            if (searchTerm) {
                // In a real app, you would implement search functionality
                console.log(`Searching for: ${searchTerm}`);
                alert(`Searching for: ${searchTerm}`);
            }
        }
    });
}

function initNavHover() {
    const navItems = document.querySelectorAll('.nav-list li a');
    
    if (!navItems.length) return;
    
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
}

function initCountdown() {
    const countdownElement = document.getElementById('footer-days');
    if (!countdownElement) return;
    
    updateCountdown();
}

function updateCountdown() {
    // Set the date we're counting down to (7 days from now)
    const countDownDate = new Date();
    countDownDate.setDate(countDownDate.getDate() + 7);
    
    // Update the countdown every 1 second
    const timer = setInterval(function() {
        try {
            // Get today's date and time
            const now = new Date().getTime();
            
            // Find the distance between now and the countdown date
            const distance = countDownDate - now;
            
            // Time calculations
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
            // Update display
            updateCountdownDisplay(days, hours, minutes, seconds);
            
            // If the countdown is finished
            if (distance < 0) {
                clearInterval(timer);
                updateCountdownDisplay(0, 0, 0, 0);
            }
        } catch (error) {
            console.error('Countdown error:', error);
            clearInterval(timer);
        }
    }, 1000);
}

function updateCountdownDisplay(days, hours, minutes, seconds) {
    const elements = {
        days: document.getElementById("footer-days"),
        hours: document.getElementById("footer-hours"),
        minutes: document.getElementById("footer-minutes"),
        seconds: document.getElementById("footer-seconds")
    };
    
    for (const [key, element] of Object.entries(elements)) {
        if (element) {
            const value = String(Math.floor({days, hours, minutes, seconds}[key])).padStart(2, '0');
            element.textContent = value;
        }
    }
}