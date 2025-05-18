
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
  


 <main style="height: auto; margin-bottom: 100px;">
            @yield('home')
   </main>  
<section class="countdown-section">
    <div class="countdown-footer">
        <div class="countdown-title">Flash Sale Ending</div>
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
</section>


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
{{-- <script src="{{asset('home_assets/js/main1.js')}}"></script>  --}}
<script src="{{asset('home_assets/js/main.js')}}"></script> 


