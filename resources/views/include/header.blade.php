<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Boxes</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@500;600;700;800&display=swap" rel="stylesheet">
    <style>
        html {
            overflow-y: scroll;
        }
        body, header {
            font-family: 'Inter', sans-serif;
        }
        /* Global offset for fixed header — applies to ALL pages */
        body {
            padding-top: 115px;
        }
        h1, h2, h3, h4, h5, h6, 
        nav a, 
        .nav-group > a, 
        .mega-menu-content span, 
        .mega-menu-content a {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>

<header id="site-header" class="w-full" style="background-color: #1a1a1a; position: fixed; top: 0; left: 0; width: 100%; z-index: 9999; box-shadow: 0 2px 20px rgba(0,0,0,0.5);">

    <!-- ===== TOP BAR ===== -->
    <div style="background-color: #1a1a1a; padding: 14px 40px; display: flex; align-items: center; justify-content: space-between;">

        <!-- Left Group: Logo + Search -->
        <div style="display: flex; align-items: center; gap: 40px;">
            <!-- Logo -->
            <a href="/" style="display: flex; align-items: center; text-decoration: none; flex-shrink: 0; margin-left: 50px;">
                <img src="{{ asset('images/home/Premium-boxes-logo.svg') }}" alt="Premium Boxes Logo" style="height: 48px; width: auto; filter: var(--logo-filter, none);" />
            </a>

            <!-- Search Bar -->
            <div style="width: 260px;">
                <div style="display: flex; align-items: center; background-color: #333333; border-radius: 50px; height: 38px; padding: 0 16px; gap: 8px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="#F5A623" stroke-width="2">
                        <circle cx="11" cy="11" r="7"/><line x1="16.5" y1="16.5" x2="22" y2="22"/>
                    </svg>
                    <input type="text" placeholder="Search products..."
                        style="background: transparent; border: none; outline: none; color: #ffffff; font-size: 14px; width: 100%;"
                        onfocus="this.parentElement.style.boxShadow='0 0 0 1.5px #F5A623'"
                        onblur="this.parentElement.style.boxShadow='none'">
                </div>
            </div>
        </div>

        <!-- Contact Info -->
        <div style="display: flex; align-items: center; gap: 28px; flex-shrink: 0;">
            <!-- Phone -->
            <a href="tel:18005189441" style="display: flex; align-items: center; gap: 10px; text-decoration: none; color: var(--text-muted-light);">
                <div style="width: 38px; height: 38px; border-radius: 50%; background-color: #333333; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="none" viewBox="0 0 24 24" stroke="#F5A623" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                </div>
                <span style="font-size: 14px; font-weight: 600; color: #ffffff;">1800-518-9441</span>
            </a>

            <!-- Email -->
            <a href="mailto:support@myboxpackaging.com" style="display: flex; align-items: center; gap: 10px; text-decoration: none; color: var(--text-muted-light);">
                <div style="width: 38px; height: 38px; border-radius: 50%; background-color: #333333; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="none" viewBox="0 0 24 24" stroke="#F5A623" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <span style="font-size: 14px; font-weight: 600; color: #ffffff;">support@myboxpackaging.com</span>
            </a>
        </div>

    </div>

    <!-- ===== NAVBAR ===== -->
    <style>
        .nav-group {
            position: static;
            display: flex;
            align-items: stretch;
        }
        .mega-menu-content {
            display: none;
            position: fixed;
            left: 0;
            width: 100%;
            background-color: #252525;
            z-index: 999;
            box-shadow: 0 25px 50px -12px rgba(0,0,0,0.7);
            border-top: 2px solid #F5A623;
            animation: megaSlideDown 0.2s ease;
        }
        @keyframes megaSlideDown {
            from { opacity: 0; transform: translateY(-8px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .nav-group:hover .mega-menu-content {
            display: block !important;
        }
        .nav-group > a:hover {
            color: #F5A623 !important;
        }
    </style>
    <nav style="background-color: #202020; padding: 0 40px; display: flex; align-items: stretch; justify-content: space-between; border-top: 1px solid #333; min-height: 48px; position: relative; z-index: 100;">

        <!-- Nav Links -->
        <div style="display: flex; align-items: stretch; gap: 28px; flex: 1; justify-content: center;">
            <a href="/" style="display: flex; align-items: center; color: #ffffff; text-decoration: none; font-size: 14px; font-weight: 600; transition: color 0.2s;" onmouseover="this.style.color='#F5A623'" onmouseout="this.style.color='#ffffff'">Home</a>
            
            <!-- Box By Industry with Mega Menu -->
            <div class="nav-group">
                <a href="{{ route('box-by-industry') }}" style="display: flex; align-items: center; color: #ffffff; text-decoration: none; font-size: 14px; font-weight: 600; transition: color 0.2s; padding: 0 10px;">Boxes By Industry</a>
                
                <!-- Mega Menu Container -->
                <div class="mega-menu-content">
                    <div style="padding: 24px 60px 20px;">
                        <div style="display: flex; gap: 40px;">
                            <div style="flex: 1; display: grid; grid-template-columns: repeat(4, 1fr); gap: 14px 10px; align-content: start;">
                                @php
                                $industries = ['Cosmetics & Beauty','Food & Beverage','Electronics','Jewellery & Luxury','Retail & Fashion','Healthcare & Pharma','Toys & Games','Candles & Lifestyle','Subscription Boxes','Corporate Gifts','Apparel & Clothing','Bakery & Confectionery','Automotive','Sports & Fitness','Books & Stationery','Home & Garden','Pet Products','Supplements & Wellness','Technology & Gadgets','Wine & Spirits'];
                                @endphp
                                @foreach($industries as $industry)
                                <a href="{{ route('category.page', ['type' => 'industry', 'slug' => Str::slug($industry)]) }}" style="display: flex; align-items: center; gap: 10px; color: #cccccc; text-decoration: none; font-size: 13px; font-weight: 500; transition: color 0.2s;" onmouseover="this.style.color='#F5A623'" onmouseout="this.style.color='#cccccc'">
                                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#F5A623" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M10 2.5L11.5 7.5L16.5 9L11.5 10.5L10 15.5L8.5 10.5L3.5 9L8.5 7.5L10 2.5Z"></path>
                                        <path d="M19 14.5L19.5 16.5L21.5 17L19.5 17.5L19 19.5L18.5 17.5L16.5 17L18.5 16.5L19 14.5Z"></path>
                                        <path d="M19 3.5L19.5 5.5L21.5 6L19.5 6.5L19 8.5L18.5 6.5L16.5 6L18.5 5.5L19 3.5Z"></path>
                                    </svg>
                                    {{ $industry }}
                                </a>
                                @endforeach
                            </div>
                            <a href="{{ route('box-by-industry') }}" style="width: 340px; position: relative; border-radius: 12px; overflow: hidden; flex-shrink: 0; height: 220px; display: block; text-decoration: none;">
                                <img src="{{ asset('images/mega-menu-featured.png') }}" style="width: 100%; height: 100%; object-fit: cover;" alt="Featured Box" />
                                <div style="position: absolute; bottom: 0; left: 0; width: 100%; padding: 40px 20px 20px; background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);">
                                    <span style="color: #fff; font-weight: 700; font-size: 16px;">View All Industries →</span>
                                </div>
                            </a>
                        </div>
                        <div style="margin-top: 24px; padding-top: 16px; border-top: 1px solid #333; display: flex; align-items: center; justify-content: space-between;">
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#F5A623" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M3 18v-6a9 9 0 0118 0v6"></path>
                                    <path d="M21 19a2 2 0 01-2 2h-1a2 2 0 01-2-2v-3a2 2 0 012-2h3zM3 19a2 2 0 002 2h1a2 2 0 002-2v-3a2 2 0 00-2-2H3z"></path>
                                </svg>
                                <div>
                                    <span style="font-weight: 600; color: #ffffff; margin-right: 8px;">Need a custom packaging solution?</span>
                                    <span style="color: #aaaaaa; font-size: 13px;">Get your custom packaging plan within 24 hours.</span>
                                </div>
                            </div>
                            <a href="/contact" style="background-color: #F5A623; color: #111; font-weight: 700; padding: 10px 28px; border-radius: 50px; text-decoration: none; font-size: 14px; transition: background 0.2s;" onmouseover="this.style.backgroundColor='#d4891a'" onmouseout="this.style.backgroundColor='#F5A623'">Talk to us</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Box By Material with Mega Menu -->
            <div class="nav-group">
                <a href="{{ route('box-by-material') }}" style="display: flex; align-items: center; color: #ffffff; text-decoration: none; font-size: 14px; font-weight: 600; transition: color 0.2s; padding: 0 10px;">Boxes By Material</a>
                
                <!-- Mega Menu Container -->
                <div class="mega-menu-content">
                    <div style="padding: 24px 60px 20px;">
                        <div style="display: flex; gap: 40px;">
                            <div style="flex: 1; display: grid; grid-template-columns: repeat(4, 1fr); gap: 14px 10px; align-content: start;">
                                @php
                                $materials = ['Rigid Board','Kraft Paper','Corrugated E-Flute','Corrugated B-Flute','Duplex Board','SBS Paperboard','Recycled Board','Foil Board','Textured Paper','Velvet Finish','Soft Touch Board','Laminated Board','Chipboard','Grey Board','Linen Wrap','Leather Wrap','Magnetic Closure Board','Wood Effect Board','Pearlescent Board','Biodegradable Material'];
                                @endphp
                                @foreach($materials as $material)
                                <a href="{{ route('category.page', ['type' => 'material', 'slug' => Str::slug($material)]) }}" style="display: flex; align-items: center; gap: 10px; color: #cccccc; text-decoration: none; font-size: 13px; font-weight: 500; transition: color 0.2s;" onmouseover="this.style.color='#F5A623'" onmouseout="this.style.color='#cccccc'">
                                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#F5A623" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M10 2.5L11.5 7.5L16.5 9L11.5 10.5L10 15.5L8.5 10.5L3.5 9L8.5 7.5L10 2.5Z"></path>
                                        <path d="M19 14.5L19.5 16.5L21.5 17L19.5 17.5L19 19.5L18.5 17.5L16.5 17L18.5 16.5L19 14.5Z"></path>
                                        <path d="M19 3.5L19.5 5.5L21.5 6L19.5 6.5L19 8.5L18.5 6.5L16.5 6L18.5 5.5L19 3.5Z"></path>
                                    </svg>
                                    {{ $material }}
                                </a>
                                @endforeach
                            </div>
                            <a href="{{ route('box-by-material') }}" style="width: 340px; position: relative; border-radius: 12px; overflow: hidden; flex-shrink: 0; height: 220px; display: block; text-decoration: none;">
                                <img src="{{ asset('images/mega-menu-featured.png') }}" style="width: 100%; height: 100%; object-fit: cover;" alt="Featured Box" />
                                <div style="position: absolute; bottom: 0; left: 0; width: 100%; padding: 40px 20px 20px; background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);">
                                    <span style="color: #fff; font-weight: 700; font-size: 16px;">View All Materials →</span>
                                </div>
                            </a>
                        </div>
                        <div style="margin-top: 24px; padding-top: 16px; border-top: 1px solid #333; display: flex; align-items: center; justify-content: space-between;">
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#F5A623" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M3 18v-6a9 9 0 0118 0v6"></path>
                                    <path d="M21 19a2 2 0 01-2 2h-1a2 2 0 01-2-2v-3a2 2 0 012-2h3zM3 19a2 2 0 002 2h1a2 2 0 002-2v-3a2 2 0 00-2-2H3z"></path>
                                </svg>
                                <div>
                                    <span style="font-weight: 600; color: #ffffff; margin-right: 8px;">Need a custom packaging solution?</span>
                                    <span style="color: #aaaaaa; font-size: 13px;">Get your custom packaging plan within 24 hours.</span>
                                </div>
                            </div>
                            <a href="/contact" style="background-color: #F5A623; color: #111; font-weight: 700; padding: 10px 28px; border-radius: 50px; text-decoration: none; font-size: 14px; transition: background 0.2s;" onmouseover="this.style.backgroundColor='#d4891a'" onmouseout="this.style.backgroundColor='#F5A623'">Talk to us</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Box By Style with Mega Menu -->
            <div class="nav-group">
                <a href="{{ route('box-by-style') }}" style="display: flex; align-items: center; color: #ffffff; text-decoration: none; font-size: 14px; font-weight: 600; transition: color 0.2s; padding: 0 10px;">Boxes By Style</a>
                
                <!-- Mega Menu Container -->
                <div class="mega-menu-content">
                    <div style="padding: 24px 60px 20px;">
                        <div style="display: flex; gap: 40px;">
                            <div style="flex: 1; display: grid; grid-template-columns: repeat(4, 1fr); gap: 14px 10px; align-content: start;">
                                @php
                                $styles = ['Lid & Base Box','Magnetic Closure Box','Drawer Box','Shoulder Box','Book Style Box','Hinged Lid Box','Collapsible Box','Clamshell Box','Pillow Box','Tuck End Box','Sleeve Box','Cigar Style Box','Presentation Box','Neck & Shoulder Box','Folding Carton','Rigid Mailer Box','Window Box','Suitcase Box','Pyramid Box','Cylindrical Box'];
                                @endphp
                                @foreach($styles as $style)
                                <a href="{{ route('category.page', ['type' => 'style', 'slug' => Str::slug($style)]) }}" style="display: flex; align-items: center; gap: 10px; color: #cccccc; text-decoration: none; font-size: 13px; font-weight: 500; transition: color 0.2s;" onmouseover="this.style.color='#F5A623'" onmouseout="this.style.color='#cccccc'">
                                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#F5A623" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M10 2.5L11.5 7.5L16.5 9L11.5 10.5L10 15.5L8.5 10.5L3.5 9L8.5 7.5L10 2.5Z"></path>
                                        <path d="M19 14.5L19.5 16.5L21.5 17L19.5 17.5L19 19.5L18.5 17.5L16.5 17L18.5 16.5L19 14.5Z"></path>
                                        <path d="M19 3.5L19.5 5.5L21.5 6L19.5 6.5L19 8.5L18.5 6.5L16.5 6L18.5 5.5L19 3.5Z"></path>
                                    </svg>
                                    {{ $style }}
                                </a>
                                @endforeach
                            </div>
                            <a href="{{ route('box-by-style') }}" style="width: 340px; position: relative; border-radius: 12px; overflow: hidden; flex-shrink: 0; height: 220px; display: block; text-decoration: none;">
                                <img src="{{ asset('images/mega-menu-featured.png') }}" style="width: 100%; height: 100%; object-fit: cover;" alt="Featured Box" />
                                <div style="position: absolute; bottom: 0; left: 0; width: 100%; padding: 40px 20px 20px; background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);">
                                    <span style="color: #fff; font-weight: 700; font-size: 16px;">View All Styles →</span>
                                </div>
                            </a>
                        </div>
                        <div style="margin-top: 24px; padding-top: 16px; border-top: 1px solid #333; display: flex; align-items: center; justify-content: space-between;">
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#F5A623" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M3 18v-6a9 9 0 0118 0v6"></path>
                                    <path d="M21 19a2 2 0 01-2 2h-1a2 2 0 01-2-2v-3a2 2 0 012-2h3zM3 19a2 2 0 002 2h1a2 2 0 002-2v-3a2 2 0 00-2-2H3z"></path>
                                </svg>
                                <div>
                                    <span style="font-weight: 600; color: #ffffff; margin-right: 8px;">Need a custom packaging solution?</span>
                                    <span style="color: #aaaaaa; font-size: 13px;">Get your custom packaging plan within 24 hours.</span>
                                </div>
                            </div>
                            <a href="/contact" style="background-color: #F5A623; color: #111; font-weight: 700; padding: 10px 28px; border-radius: 50px; text-decoration: none; font-size: 14px; transition: background 0.2s;" onmouseover="this.style.backgroundColor='#d4891a'" onmouseout="this.style.backgroundColor='#F5A623'">Talk to us</a>
                        </div>
                    </div>
                </div>
            </div>

            <a href="{{ route('promotional') }}" style="display: flex; align-items: center; color: #ffffff; text-decoration: none; font-size: 14px; font-weight: 600; transition: color 0.2s;" onmouseover="this.style.color='#F5A623'" onmouseout="this.style.color='#ffffff'">Promotional Products</a>
            <a href="/blogs" style="display: flex; align-items: center; color: #ffffff; text-decoration: none; font-size: 14px; font-weight: 600; transition: color 0.2s;" onmouseover="this.style.color='#F5A623'" onmouseout="this.style.color='#ffffff'">Blogs</a>
        </div>

        <!-- Right: Toggle + CTA -->
        <div style="display: flex; align-items: center; gap: 20px; flex-shrink: 0; padding: 10px 0;">

            <!-- Toggle Switch -->
            <div id="theme-toggle" onclick="toggleTheme()"
                style="width: 44px; height: 22px; background-color: #ffffff; border-radius: 50px; display: flex; align-items: center; padding: 3px; cursor: pointer; transition: background 0.3s; position: relative;">
                <div id="toggle-knob"
                    style="width: 16px; height: 16px; background-color: #1a1a1a; border-radius: 50%; transition: transform 0.3s; transform: translateX(22px); display: flex; align-items: center; justify-content: center;">
                </div>
            </div>

            <!-- Get Instant Quote -->
            <a href="/get-quote"
                style="background-color: #F5A623; color: #111; font-size: 14px; font-weight: 800; padding: 10px 22px; border-radius: 50px; text-decoration: none; white-space: nowrap; transition: background 0.2s;"
                onmouseover="this.style.backgroundColor='#d4891a'"
                onmouseout="this.style.backgroundColor='#F5A623'">
                Get Instant Quote
            </a>
        </div>

    </nav>

    <!-- Bottom Gold Line
    <div style="height: 3px; background: linear-gradient(90deg, #F5A623, #f7c56a, #F5A623);"></div> -->

</header>

<script>
    function toggleTheme() {
        const knob = document.getElementById('toggle-knob');
        const toggle = document.getElementById('theme-toggle');
        const isActive = knob.style.transform === 'translateX(22px)';
        
        // Toggle the class on body
        document.body.classList.toggle('light-theme');
        
        if (isActive) {
            knob.style.transform = 'translateX(0px)';
            toggle.style.backgroundColor = '#333333';
            knob.style.backgroundColor = '#ffffff';
        } else {
            knob.style.transform = 'translateX(22px)';
            toggle.style.backgroundColor = '#ffffff';
            knob.style.backgroundColor = '#1a1a1a';
        }
    }

    // Set mega menu top = bottom of header
    function setMegaMenuTop() {
        const header = document.getElementById('site-header');
        const menus = document.querySelectorAll('.mega-menu-content');
        if (header) {
            const bottom = header.getBoundingClientRect().bottom + window.scrollY;
            menus.forEach(m => m.style.top = bottom + 'px');
        }
    }

    document.addEventListener('DOMContentLoaded', setMegaMenuTop);
    window.addEventListener('resize', setMegaMenuTop);
    window.addEventListener('scroll', setMegaMenuTop);
</script>
