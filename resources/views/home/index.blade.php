@extends('layouts.user')

@section('home')

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
                     <div class="product-image imgg">
<img src="{{ asset('home_assets/img/img.jpg') }}" alt="Gaming Equipment" style="width: 2000px; height: auto;">


            </div>
                    <div class="discount-badge">75% Flat Discount</div>
                    <h2>Discover Your Required Product</h2>
                    <p>From 267+ Different Vendors, 30+ Categories</p>
                    <p>Because of store opening carnival, Eclipse providing a huge discounted sell</p>
                </div>
                
                <div class="hero-card">
                     <div class="product-image">
                <img src="{{asset('home_assets/img/img101.jpeg')}}" alt="Gaming Equipment">
            </div>
                    <div class="discount-badge">75% OFF</div>
                    <h2>Comfy Bean Bag Chair</h2>
                    <p>Relax in ultimate comfort with our premium bean bags</p>
                </div>
                
                <div class="hero-card">
                     <div class="product-image">
                <img src="{{asset('home_assets/img/img33.jpeg')}}" alt="Gaming Equipment">
            </div>
                    <h2>VR Glasses</h2>
                    <p>Immerse yourself in virtual worlds with our latest VR technology</p>
                </div>
            </div>
        </section>
        </div>
@livewire('HomeProductFilterComponent')
@endsection

