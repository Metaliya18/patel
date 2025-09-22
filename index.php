<?php
/**
 * Brioni Premium Ecommerce Website
 * COMPLETE REWRITE - With Custom Logo
 */

session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Simple routing without external files
$page = isset($_GET['url']) ? $_GET['url'] : 'home';
$parts = explode('/', $page);
$controller = isset($parts[0]) ? $parts[0] : 'home';
$action = isset($parts[1]) ? $parts[1] : 'index';

// Database connection (optional - no status display)
try {
    $pdo = new PDO("mysql:host=localhost;dbname=brioni_ecommerce;charset=utf8mb4", 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    // Silent connection - no error display
}

// Function to display pages
function showPage($page_name, $action = '') {
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brioni | Official Website - Premium Italian Luxury</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: #ffffff;
            color: #1a1a1a;
            line-height: 1.6;
            font-size: 15px;
            overflow-x: hidden;
        }
        
        /* HEADER SECTION */
        .brioni-header {
            background: #ffffff;
            border-bottom: 1px solid #e0e0e0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 20px rgba(0,0,0,0.08);
            backdrop-filter: blur(10px);
        }
        
        .header-announcement {
            background: linear-gradient(135deg, #1a1a1a, #2c2c2c);
            color: #ffffff;
            padding: 10px 0;
            text-align: center;
            font-size: 13px;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-weight: 500;
        }
        
        .header-main {
            padding: 25px 0;
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-left: 50px;
            padding-right: 50px;
        }
        
        /* CUSTOM BRIONI LOGO */
        .brioni-logo-container {
            display: flex;
            align-items: center;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .brioni-logo-container:hover {
            transform: scale(1.05);
        }
        
        .brioni-logo {
            font-size: 32px;
            font-weight: 700;
            letter-spacing: 8px;
            color: #1a1a1a;
            font-family: 'Cormorant Garamond', serif;
            position: relative;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }
        
        .brioni-logo::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, #d4af37, #f4d03f, #d4af37);
            border-radius: 1px;
        }
        
        .brioni-tagline {
            font-size: 10px;
            color: #666;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-top: 5px;
            text-align: center;
        }
        
        /* NAVIGATION */
        .main-navigation {
            display: flex;
            list-style: none;
            gap: 45px;
            align-items: center;
        }
        
        .main-navigation a {
            color: #1a1a1a;
            text-decoration: none;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
            padding: 10px 0;
        }
        
        .main-navigation a::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #d4af37, #f4d03f);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }
        
        .main-navigation a:hover {
            color: #d4af37;
            transform: translateY(-2px);
        }
        
        .main-navigation a:hover::before {
            width: 100%;
        }
        
        /* HEADER ACTIONS */
        .header-actions {
            display: flex;
            align-items: center;
            gap: 30px;
        }
        
        .header-icon {
            color: #1a1a1a;
            font-size: 18px;
            cursor: pointer;
            transition: all 0.3s ease;
            padding: 10px;
            border-radius: 50%;
        }
        
        .header-icon:hover {
            color: #d4af37;
            background: rgba(212, 175, 55, 0.1);
            transform: scale(1.1);
        }
        
        /* MAIN CONTENT CONTAINER */
        .main-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 50px;
        }
        
        /* HERO SECTION */
        .hero-section {
            background: linear-gradient(135deg, #fafafa 0%, #f0f0f0 100%);
            text-align: center;
            padding: 80px 0;
            margin-bottom: 0;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="%23000" opacity="0.02"/><circle cx="75" cy="25" r="1" fill="%23000" opacity="0.02"/><circle cx="50" cy="75" r="1" fill="%23000" opacity="0.02"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
        }
        
        .hero-title {
            font-size: 64px;
            font-weight: 300;
            color: #1a1a1a;
            margin-bottom: 25px;
            font-family: 'Cormorant Garamond', serif;
            line-height: 1.1;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        }
        
        .hero-subtitle {
            font-size: 16px;
            text-transform: uppercase;
            letter-spacing: 3px;
            color: #666;
            margin-bottom: 50px;
            font-weight: 400;
        }
        
        .hero-cta {
            display: inline-block;
            background: linear-gradient(135deg, #1a1a1a, #2c2c2c);
            color: #ffffff;
            padding: 18px 45px;
            text-decoration: none;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 600;
            border-radius: 5px;
            transition: all 0.4s ease;
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
        }
        
        .hero-cta:hover {
            background: linear-gradient(135deg, #d4af37, #f4d03f);
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(212, 175, 55, 0.4);
        }
        
        /* CATEGORY SHOWCASE */
        .category-showcase {
            padding: 100px 0;
        }
        
        .showcase-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
        }
        
        .category-card {
            background: #ffffff;
            border-radius: 15px;
            padding: 40px 25px;
            text-align: center;
            transition: all 0.4s ease;
            cursor: pointer;
            border: 1px solid #f0f0f0;
            position: relative;
            overflow: hidden;
        }
        
        .category-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(212, 175, 55, 0.1), transparent);
            transition: left 0.6s;
        }
        
        .category-card:hover::before {
            left: 100%;
        }
        
        .category-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
            border-color: #d4af37;
        }
        
        .category-icon {
            font-size: 48px;
            color: #d4af37;
            margin-bottom: 20px;
        }
        
        .category-title {
            font-size: 18px;
            font-weight: 600;
            color: #1a1a1a;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .category-desc {
            font-size: 14px;
            color: #666;
            line-height: 1.5;
        }
        
        /* PRODUCT SECTIONS */
        .product-section {
            padding: 100px 0;
            background: #fafafa;
        }
        
        .section-header {
            text-align: center;
            margin-bottom: 70px;
        }
        
        .section-title {
            font-size: 48px;
            font-weight: 400;
            color: #1a1a1a;
            margin-bottom: 20px;
            font-family: 'Cormorant Garamond', serif;
        }
        
        .section-subtitle {
            font-size: 16px;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: #666;
        }
        
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 40px;
        }
        
        .product-card {
            background: #ffffff;
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.4s ease;
            cursor: pointer;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }
        
        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 50px rgba(0,0,0,0.2);
        }
        
        .product-image {
            width: 100%;
            height: 400px;
            background: linear-gradient(135deg, #f8f8f8, #e8e8e8);
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }
        
        .product-image::before {
            content: 'Premium Product';
            color: #999;
            font-size: 16px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }
        
        .product-badge {
            position: absolute;
            top: 20px;
            left: 20px;
            background: linear-gradient(135deg, #d4af37, #f4d03f);
            color: #ffffff;
            padding: 8px 16px;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 700;
            border-radius: 20px;
            box-shadow: 0 4px 15px rgba(212, 175, 55, 0.3);
        }
        
        .product-info {
            padding: 30px;
        }
        
        .product-name {
            font-size: 18px;
            font-weight: 500;
            color: #1a1a1a;
            margin-bottom: 15px;
            line-height: 1.4;
            font-family: 'Cormorant Garamond', serif;
        }
        
        .product-price {
            font-size: 24px;
            font-weight: 700;
            color: #1a1a1a;
            font-family: 'Inter', sans-serif;
        }
        
        /* COLLECTION HIGHLIGHTS */
        .collections-highlight {
            padding: 120px 0;
            background: #1a1a1a;
            color: #ffffff;
        }
        
        .collections-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }
        
        .collection-feature {
            padding: 60px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 20px;
            text-align: center;
            transition: all 0.4s ease;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .collection-feature:hover {
            background: rgba(212, 175, 55, 0.1);
            transform: translateY(-5px);
        }
        
        .collection-feature h3 {
            font-size: 36px;
            font-weight: 400;
            margin-bottom: 20px;
            font-family: 'Cormorant Garamond', serif;
        }
        
        .collection-feature p {
            font-size: 16px;
            color: #cccccc;
            margin-bottom: 30px;
            line-height: 1.6;
        }
        
        .collection-link {
            display: inline-block;
            background: transparent;
            color: #ffffff;
            border: 2px solid #d4af37;
            padding: 15px 35px;
            text-decoration: none;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 600;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        
        .collection-link:hover {
            background: #d4af37;
            color: #1a1a1a;
        }
        
        /* TESTIMONIAL SECTION */
        .testimonial-section {
            padding: 100px 0;
            background: #f8f8f8;
            text-align: center;
        }
        
        .testimonial-content {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .testimonial-quote {
            font-size: 32px;
            font-style: italic;
            color: #1a1a1a;
            margin-bottom: 30px;
            font-family: 'Cormorant Garamond', serif;
            line-height: 1.4;
        }
        
        .testimonial-author {
            font-size: 16px;
            color: #666;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        
        /* PREMIUM FOOTER */
        .brioni-footer {
            background: linear-gradient(135deg, #1a1a1a, #2c2c2c);
            color: #ffffff;
            padding: 100px 0 40px;
        }
        
        .footer-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 50px;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: 1.5fr 1fr 1fr 1fr 1.5fr;
            gap: 60px;
            margin-bottom: 60px;
        }
        
        .footer-brand {
            max-width: 350px;
        }
        
        .footer-logo {
            font-size: 28px;
            font-weight: 700;
            letter-spacing: 6px;
            color: #ffffff;
            margin-bottom: 20px;
            font-family: 'Cormorant Garamond', serif;
        }
        
        .footer-brand-desc {
            font-size: 16px;
            line-height: 1.7;
            color: #cccccc;
            margin-bottom: 30px;
        }
        
        .footer-social {
            display: flex;
            gap: 20px;
        }
        
        .social-icon {
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.1);
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        
        .social-icon:hover {
            background: #d4af37;
            color: #1a1a1a;
            transform: translateY(-3px);
        }
        
        .footer-section h4 {
            font-size: 16px;
            font-weight: 600;
            color: #ffffff;
            margin-bottom: 30px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 15px;
        }
        
        .footer-links a {
            color: #cccccc;
            text-decoration: none;
            font-size: 15px;
            transition: color 0.3s ease;
            line-height: 1.6;
        }
        
        .footer-links a:hover {
            color: #d4af37;
        }
        
        /* NEWSLETTER */
        .newsletter-section {
            max-width: 400px;
        }
        
        .newsletter-title {
            font-size: 20px;
            color: #ffffff;
            margin-bottom: 20px;
            font-weight: 600;
        }
        
        .newsletter-desc {
            font-size: 15px;
            color: #cccccc;
            margin-bottom: 30px;
            line-height: 1.6;
        }
        
        .newsletter-form {
            display: flex;
            margin-bottom: 20px;
        }
        
        .newsletter-input {
            flex: 1;
            padding: 15px 20px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            background: rgba(255, 255, 255, 0.1);
            color: #ffffff;
            font-size: 14px;
            border-radius: 8px 0 0 8px;
            backdrop-filter: blur(10px);
        }
        
        .newsletter-input::placeholder {
            color: #999;
        }
        
        .newsletter-btn {
            padding: 15px 25px;
            background: linear-gradient(135deg, #d4af37, #f4d03f);
            color: #1a1a1a;
            border: none;
            cursor: pointer;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 700;
            transition: all 0.3s ease;
            border-radius: 0 8px 8px 0;
        }
        
        .newsletter-btn:hover {
            background: linear-gradient(135deg, #f4d03f, #d4af37);
            transform: translateX(2px);
        }
        
        .newsletter-terms {
            font-size: 12px;
            color: #999;
            line-height: 1.5;
        }
        
        /* FOOTER BOTTOM */
        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding: 30px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 14px;
            color: #999;
        }
        
        .footer-bottom-links {
            display: flex;
            gap: 40px;
            list-style: none;
        }
        
        .footer-bottom-links a {
            color: #999;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .footer-bottom-links a:hover {
            color: #d4af37;
        }
        
        /* RESPONSIVE DESIGN */
        @media (max-width: 768px) {
            .header-main, .main-container, .footer-container {
                padding-left: 25px;
                padding-right: 25px;
            }
            
            .header-main {
                flex-direction: column;
                gap: 25px;
                padding-top: 20px;
                padding-bottom: 20px;
            }
            
            .main-navigation {
                gap: 25px;
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .hero-title {
                font-size: 42px;
            }
            
            .showcase-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
            }
            
            .product-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .collections-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
                gap: 40px;
                text-align: center;
            }
            
            .footer-bottom {
                flex-direction: column;
                gap: 25px;
                text-align: center;
            }
            
            .footer-bottom-links {
                flex-direction: column;
                gap: 20px;
            }
        }
    </style>
</head>
<body>
    <header class="brioni-header">
        <div class="header-announcement">
            ✨ Free Worldwide Shipping on Orders Over €500 • Bespoke Consultations Available ✨
        </div>
        <div class="header-main">
            <a href="/brioni_ecommerce/" class="brioni-logo-container">
                <div>
                    <div class="brioni-logo">BRIONI</div>
                    <div class="brioni-tagline">Since 1945</div>
                </div>
            </a>
            <nav>
                <ul class="main-navigation">
                    <li><a href="/brioni_ecommerce/?url=product/suits">Suits</a></li>
                    <li><a href="/brioni_ecommerce/?url=product/knitwear">Knitwear</a></li>
                    <li><a href="/brioni_ecommerce/?url=product/shirts">Shirts</a></li>
                    <li><a href="/brioni_ecommerce/?url=collection/trama">Collections</a></li>
                    <li><a href="/brioni_ecommerce/?url=bespoke">Bespoke</a></li>
                </ul>
            </nav>
            <div class="header-actions">
                <i class="fas fa-search header-icon" title="Search"></i>
                <i class="fas fa-user header-icon" title="Account"></i>
                <a href="/brioni_ecommerce/?url=cart" style="color: inherit;">
                    <i class="fas fa-shopping-bag header-icon" title="Shopping Bag"></i>
                </a>
            </div>
        </div>
    </header>

    <main class="main-container">
        <?php if ($page_name === 'home' || $page_name === '') { ?>
            <section class="hero-section">
                <div class="hero-content">
                    <h1 class="hero-title">Tailored Perfection</h1>
                    <p class="hero-subtitle">Discover Italian Excellence</p>
                    <a href="#products" class="hero-cta">Explore Collection</a>
                </div>
            </section>
            
            <section class="category-showcase">
                <div class="showcase-grid">
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h3 class="category-title">Suits</h3>
                        <p class="category-desc">Timeless elegance meets modern sophistication</p>
                    </div>
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-tshirt"></i>
                        </div>
                        <h3 class="category-title">Knitwear</h3>
                        <p class="category-desc">Luxurious comfort in premium materials</p>
                    </div>
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-shirt"></i>
                        </div>
                        <h3 class="category-title">Shirts</h3>
                        <p class="category-desc">Impeccable craftsmanship in every detail</p>
                    </div>
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-gem"></i>
                        </div>
                        <h3 class="category-title">Accessories</h3>
                        <p class="category-desc">Perfect finishing touches for the modern gentleman</p>
                    </div>
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-cut"></i>
                        </div>
                        <h3 class="category-title">Bespoke</h3>
                        <p class="category-desc">Completely personalized luxury experience</p>
                    </div>
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <h3 class="category-title">Legends</h3>
                        <p class="category-desc">Iconic pieces that define luxury</p>
                    </div>
                </div>
            </section>
            
            <section class="product-section" id="products">
                <div class="section-header">
                    <h2 class="section-title">Featured Collection</h2>
                    <p class="section-subtitle">Fall/Winter 2025</p>
                </div>
                <div class="product-grid">
                    <div class="product-card">
                        <div class="product-image">
                            <span class="product-badge">New Arrival</span>
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">Essential Navy Wool Suit</h3>
                            <p class="product-price">€3,950</p>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image"></div>
                        <div class="product-info">
                            <h3 class="product-name">Cashmere Turtleneck Sweater</h3>
                            <p class="product-price">€1,295</p>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <span class="product-badge">Limited Edition</span>
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">Italian Cotton Dress Shirt</h3>
                            <p class="product-price">€695</p>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image"></div>
                        <div class="product-info">
                            <h3 class="product-name">Silk Pocket Square Collection</h3>
                            <p class="product-price">€250</p>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="collections-highlight">
                <div class="collections-grid">
                    <div class="collection-feature">
                        <h3>Trama Collection</h3>
                        <p>La selezione autunno/inverno 2025 - Experience the pinnacle of Italian craftsmanship</p>
                        <a href="/brioni_ecommerce/?url=collection/trama" class="collection-link">Discover Trama</a>
                    </div>
                    <div class="collection-feature">
                        <h3>Bespoke Experience</h3>
                        <p>Create your masterpiece with our legendary tailoring service - Since 1945</p>
                        <a href="/brioni_ecommerce/?url=bespoke" class="collection-link">Book Consultation</a>
                    </div>
                </div>
            </section>
            
            <section class="testimonial-section">
                <div class="testimonial-content">
                    <blockquote class="testimonial-quote">
                        "Brioni represents the perfect synthesis of tradition and innovation in luxury menswear."
                    </blockquote>
                    <cite class="testimonial-author">Fashion Director, Vogue</cite>
                </div>
            </section>
            
        <?php } elseif ($page_name === 'collection' && $action === 'trama') { ?>
            <section class="hero-section">
                <div class="hero-content">
                    <h1 class="hero-title">Trama Collection</h1>
                    <p class="hero-subtitle">La selezione autunno/inverno 2025</p>
                </div>
            </section>
            <div style="text-align: center; padding: 60px 0; max-width: 900px; margin: 0 auto;">
                <p style="font-size: 20px; line-height: 1.8; color: #666; font-family: 'Cormorant Garamond', serif;">The Trama collection represents the pinnacle of Italian craftsmanship, featuring organic cotton, cashmere and silk blends that embody luxury comfort and timeless elegance. Each piece is meticulously crafted to deliver unparalleled sophistication.</p>
            </div>
            
        <?php } elseif ($page_name === 'product' && $action === 'suits') { ?>
            <section class="hero-section">
                <div class="hero-content">
                    <h1 class="hero-title">Suits Collection</h1>
                    <p class="hero-subtitle">Tailored Excellence</p>
                </div>
            </section>
            <div style="text-align: center; padding: 60px 0; max-width: 900px; margin: 0 auto;">
                <p style="font-size: 20px; line-height: 1.8; color: #666; font-family: 'Cormorant Garamond', serif;">Discover our complete range of premium suits, from classic business attire to contemporary formal wear, all crafted with uncompromising attention to detail and the finest Italian materials.</p>
            </div>
            
        <?php } elseif ($page_name === 'product' && $action === 'knitwear') { ?>
            <section class="hero-section">
                <div class="hero-content">
                    <h1 class="hero-title">Knitwear Collection</h1>
                    <p class="hero-subtitle">Luxury Comfort</p>
                </div>
            </section>
            <div style="text-align: center; padding: 60px 0; max-width: 900px; margin: 0 auto;">
                <p style="font-size: 20px; line-height: 1.8; color: #666; font-family: 'Cormorant Garamond', serif;">Experience the finest in luxury knitwear, featuring premium cashmere, silk, and organic cotton pieces that combine unmatched comfort with sophisticated Italian style.</p>
            </div>
            
        <?php } elseif ($page_name === 'bespoke') { ?>
            <section class="hero-section">
                <div class="hero-content">
                    <h1 class="hero-title">Bespoke Experience</h1>
                    <p class="hero-subtitle">The Art of Tailoring</p>
                </div>
            </section>
            <div style="text-align: center; padding: 60px 0; max-width: 900px; margin: 0 auto;">
                <p style="font-size: 20px; line-height: 1.8; color: #666; font-family: 'Cormorant Garamond', serif;">Each client is different. Discover the art of tailoring and create your masterpiece with our legendary bespoke service. Experience true Italian craftsmanship since 1945.</p>
            </div>
            
        <?php } elseif ($page_name === 'cart') { ?>
            <section class="hero-section">
                <div class="hero-content">
                    <h1 class="hero-title">Shopping Bag</h1>
                    <p class="hero-subtitle">Your Selection</p>
                </div>
            </section>
            <div style="text-align: center; padding: 60px 0;">
                <p style="font-size: 18px; color: #666; margin-bottom: 30px;">Your shopping bag is currently empty.</p>
                <a href="/brioni_ecommerce/" style="background: linear-gradient(135deg, #1a1a1a, #2c2c2c); color: #ffffff; padding: 15px 35px; text-decoration: none; border-radius: 5px; text-transform: uppercase; letter-spacing: 1px; font-weight: 600;">Start Shopping</a>
            </div>
            
        <?php } else { ?>
            <section class="hero-section">
                <div class="hero-content">
                    <h1 class="hero-title"><?php echo ucfirst($page_name); ?></h1>
                    <p class="hero-subtitle">Brioni Official Store</p>
                </div>
            </section>
        <?php } ?>
    </main>

    <footer class="brioni-footer">
        <div class="footer-container">
            <div class="footer-content">
                <div class="footer-brand">
                    <h2 class="footer-logo">BRIONI</h2>
                    <p class="footer-brand-desc">Italian luxury menswear since 1945. Crafting the world's finest suits with uncompromising attention to detail, timeless elegance, and exceptional quality.</p>
                    <div class="footer-social">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <div class="footer-section">
                    <h4>Client Care</h4>
                    <ul class="footer-links">
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Size Guide</a></li>
                        <li><a href="#">Shipping & Returns</a></li>
                        <li><a href="#">Payment Methods</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Live Chat</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>The Company</h4>
                    <ul class="footer-links">
                        <li><a href="#">About Brioni</a></li>
                        <li><a href="#">Heritage</a></li>
                        <li><a href="#">Sustainability</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">Legal</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>Services</h4>
                    <ul class="footer-links">
                        <li><a href="/brioni_ecommerce/?url=bespoke">Bespoke</a></li>
                        <li><a href="#">Made-to-Order</a></li>
                        <li><a href="#">Personal Shopping</a></li>
                        <li><a href="#">Store Locator</a></li>
                        <li><a href="#">Alterations</a></li>
                        <li><a href="#">Gift Cards</a></li>
                    </ul>
                </div>
                
                <div class="footer-section newsletter-section">
                    <h4 class="newsletter-title">Stay Connected</h4>
                    <p class="newsletter-desc">Be the first to know about our latest collections, exclusive events, and special offers. Join the Brioni community.</p>
                    <form class="newsletter-form" action="#" method="POST">
                        <input type="email" class="newsletter-input" placeholder="Your email address" required>
                        <button type="submit" class="newsletter-btn">Subscribe</button>
                    </form>
                    <p class="newsletter-terms">By subscribing, you agree to our Terms & Conditions and Privacy Policy. Unsubscribe anytime.</p>
                </div>
            </div>
            
            <div class="footer-bottom">
                <div class="footer-copyright">
                    <p>&copy; <?php echo date('Y'); ?> Brioni S.p.A. All rights reserved.</p>
                </div>
                <ul class="footer-bottom-links">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Cookie Settings</a></li>
                    <li><a href="#">Sitemap</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>
    <?php
}

// Display the page
showPage($controller, $action);
?>
