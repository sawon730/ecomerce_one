
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickCart - Online Shopping</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('home_assets/css/style.css')}}">
    
   
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo">QuickCart</div>
            
            <div class="search-bar">
                <input type="text" placeholder="Search Product...">
                <i class="fas fa-search"></i>
            </div>
            
            <div class="auth-buttons">
                <a href="#" class="sign-in">Sign In</a>
            </div>
        </div>
    </header>
    
    <div class="main-container">
        <section class="hero-section">
            <div class="sidebar-nav">
                <h3 class="nav-title">Categories</h3>
                <ul class="nav-list">
                    <li><a href="#">Trending</a></li>
                    <li><a href="#">Discounts</a></li>
                    <li><a href="#">Gift Collections</a></li>
                    <li><a href="#">Stores</a></li>
                </ul>
            </div>
            
            <div class="hero-content">
                <div class="hero-card large">
                    <div class="discount-badge">75% Flat Discount</div>
                    <h2>Discover Your Required Product</h2>
                    <p>From 267+ Different Vendors, 30+ Categories</p>
                    <p>Because of store opening carnival, Eclipse providing a huge discounted sell</p>
                </div>
                
                <div class="hero-card">
                    <div class="discount-badge">75% OFF</div>
                    <h2>Comfy Bean Bag Chair</h2>
                    <p>Relax in ultimate comfort with our premium bean bags</p>
                </div>
                
                <div class="hero-card">
                    <h2>VR Glasses</h2>
                    <p>Immerse yourself in virtual worlds with our latest VR technology</p>
                </div>
            </div>
        </section>
        
        <h2 class="section-title">Featured Categories</h2>
        <div class="categories-grid">
            <div class="category-card">
                <div class="category-icon">
                    <i class="fas fa-gamepad"></i>
                </div>
                <div class="category-name">Gaming Equipment</div>
            </div>
            
            <div class="category-card">
                <div class="category-icon">
                    <i class="fas fa-shoe-prints"></i>
                </div>
                <div class="category-name">Shoes</div>
            </div>
            
            <div class="category-card">
                <div class="category-icon">
                    <i class="fas fa-tshirt"></i>
                </div>
                <div class="category-name">Men's Fashion</div>
            </div>
            
            <div class="category-card">
                <div class="category-icon">
                    <i class="fas fa-home"></i>
                </div>
                <div class="category-name">Home Decor</div>
            </div>
            
            <div class="category-card">
                <div class="category-icon">
                    <i class="fas fa-vr-cardboard"></i>
                </div>
                <div class="category-name">VR Accessories</div>
            </div>
            
            <div class="category-card">
                <div class="category-icon">
                    <i class="fas fa-laptop"></i>
                </div>
                <div class="category-name">Electronics</div>
            </div>
        </div>
        
        <h2 class="section-title">Not in Sale</h2>
        <div class="products-grid">
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('home_assets/img/download.png')}}" alt="Gaming Equipment">
                </div>
                <div class="product-info">
                    <h3 class="product-title">Gaming Equipment</h3>
                    <div class="product-price">$299.99</div>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>
            
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('home_assets/img/img33.jpeg')}}" alt="Running Shoes">
                </div>
                <div class="product-info">
                    <h3 class="product-title">Running Shoes</h3>
                    <div class="product-price">$89.99</div>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>
            
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('home_assets/img/img77.jpeg')}}" alt="Men's Jacket">
                </div>
                <div class="product-info">
                    <h3 class="product-title">Men's Jacket</h3>
                    <div class="product-price">$129.99</div>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>
            
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('home_assets/img/img99.jpeg')}}" alt="Home Decor">
                </div>
                <div class="product-info">
                    <h3 class="product-title">Home Decor</h3>
                    <div class="product-price">$59.99</div>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('home_assets/img/img88.jpeg')}}" alt="Home Decor">
                </div>
                <div class="product-info">
                    <h3 class="product-title">Home Decor</h3>
                    <div class="product-price">$59.99</div>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('home_assets/img/img22.jpeg')}}" alt="Home Decor">
                </div>
                <div class="product-info">
                    <h3 class="product-title">Home Decor</h3>
                    <div class="product-price">$59.99</div>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('home_assets/img/img55.jpeg')}}" alt="Home Decor">
                </div>
                <div class="product-info">
                    <h3 class="product-title">Home Decor</h3>
                    <div class="product-price">$59.99</div>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('home_assets/img/img66.jpeg')}}" alt="Home Decor">
                </div>
                <div class="product-info">
                    <h3 class="product-title">Home Decor</h3>
                    <div class="product-price">$59.99</div>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="countdown-footer">
            <div class="countdown-title">Flash Sell Ending</div>
            <div class="countdown-display">
                <div class="countdown-unit">
                    <div class="countdown-value" id="footer-days">07</div>
                    <div class="countdown-label">Days</div>
                </div>
                <div class="countdown-unit">
                    <div class="countdown-value" id="footer-hours">12</div>
                    <div class="countdown-label">Hours</div>
                </div>
                <div class="countdown-unit">
                    <div class="countdown-value" id="footer-minutes">59</div>
                    <div class="countdown-label">Mins</div>
                </div>
                <div class="countdown-unit">
                    <div class="countdown-value" id="footer-seconds">59</div>
                    <div class="countdown-label">Secs</div>
                </div>
            </div>
        </div>
    </div>
  <main>
   @yield('home')
</main>
 <!-- New Footer Section -->
 <footer>
    <div class="footer-container">
        <div class="footer-about">
            <div class="footer-logo">QuickCart</div>
            <p class="footer-description">Where brands meets happiness.<br>Customer smile is our first priority.</p>
           
        </div>
        
        <div class="footer-section">
            <h3 class="footer-heading">About Us</h3>
            <ul class="footer-links">
                <li><a href="#"><i class="fas fa-chevron-right"></i> About QuickCart</a></li>
                <li><a href="#"><i class="fas fa-chevron-right"></i> Corner</a></li>
                <li><a href="#"><i class="fas fa-chevron-right"></i> Sponsors</a></li>
                <li><a href="#"><i class="fas fa-chevron-right"></i> Campaigns</a></li>
            </ul>
        </div>
        
        <div class="footer-section">
            <h3 class="footer-heading">Stores</h3>
            <ul class="footer-links">
                <li><a href="#"><i class="fas fa-chevron-right"></i> Nick's Tshirt</a></li>
                <li><a href="#"><i class="fas fa-chevron-right"></i> Vloda Sports</a></li>
                <li><a href="#"><i class="fas fa-chevron-right"></i> IQ 350</a></li>
                <li><a href="#"><i class="fas fa-chevron-right"></i> Decor Plus+</a></li>
            </ul>
        </div>
        
        <div class="footer-section">
            <h3 class="footer-heading">Important</h3>
            <ul class="footer-links">
                <li><a href="#"><i class="fas fa-chevron-right"></i> Privacy</a></li>
                <li><a href="#"><i class="fas fa-chevron-right"></i> Cookie Policy</a></li>
                <li><a href="#"><i class="fas fa-chevron-right"></i> Terms & Conditions</a></li>
                <li><a href="#"><i class="fas fa-chevron-right"></i> Refund Policy</a></li>
            </ul>
        </div>
    </div>
    
    <div class="footer-bottom">
        &copy; 2025 QuickCart. All Rights Reserved.
    </div>
</footer>

</body>
</html>

<script src="{{asset('home_assets/js/main1.js')}}"></script> 





 