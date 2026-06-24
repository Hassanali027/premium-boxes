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
    h1, h2, h3, h4, h5, h6, 
    nav a, 
    .nav-group > a, 
    .mega-menu-content span, 
    .mega-menu-content a {
        font-family: 'Poppins', sans-serif;
    }
</style>

<header class="w-full relative" style="background-color: #1a1a1a;">

    <!-- ===== TOP BAR ===== -->
    <div style="background-color: #1a1a1a; padding: 14px 40px; display: flex; align-items: center; justify-content: space-between;">

        <!-- Left Group: Logo + Search -->
        <div style="display: flex; align-items: center; gap: 40px;">
            <!-- Logo -->
            <a href="/" style="display: flex; align-items: center; text-decoration: none; flex-shrink: 0; margin-left: 50px;">
                <img src="{{ asset('images/Premium-boxes.svg') }}" alt="Premium Boxes Logo" style="height: 48px; width: auto; filter: var(--logo-filter, none);" />
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
        .nav-group:hover .mega-menu-content {
            display: block !important;
        }
    </style>
    <nav style="background-color: #202020; padding: 0 40px; display: flex; align-items: stretch; justify-content: space-between; border-top: 1px solid var(--border-color); min-height: 48px;">

        <!-- Nav Links -->
        <div style="display: flex; align-items: stretch; gap: 28px; flex: 1; justify-content: center;">
            <a href="/" style="display: flex; align-items: center; color: #ffffff; text-decoration: none; font-size: 14px; font-weight: 600; transition: color 0.2s;" onmouseover="this.style.color='#F5A623'" onmouseout="this.style.color='#ffffff'">Home</a>
            
            <!-- Box By Industry with Mega Menu -->
            <div class="nav-group" style="display: flex; align-items: stretch;">
                <a href="/boxes-by-industry" style="display: flex; align-items: center; color: #ffffff; text-decoration: none; font-size: 14px; font-weight: 600; transition: color 0.2s; padding: 0 10px;" onmouseover="this.style.color='#F5A623'" onmouseout="this.style.color='#ffffff'">Boxes By Industry</a>
                
                <!-- Mega Menu Container -->
                <div class="mega-menu-content" style="display: none; position: absolute; left: 0; width: 100%; background-color: #252525; z-index: 50; box-shadow: 0 25px 50px -12px rgba(0,0,0,0.5); top: 100%; border-top: 1px solid #333;">
                    <div style="padding: 24px 60px 20px;">
                        <div style="display: flex; gap: 40px;">
                            <div style="flex: 1; display: grid; grid-template-columns: repeat(4, 1fr); gap: 14px 10px; align-content: start;">
                                @for ($i = 0; $i < 20; $i++)
                                <a href="#" style="display: flex; align-items: center; gap: 10px; color: #cccccc; text-decoration: none; font-size: 13px; font-weight: 500; transition: color 0.2s;" onmouseover="this.style.color='#F5A623'" onmouseout="this.style.color='#cccccc'">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#F5A623" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l2.4 7.6L22 12l-7.6 2.4L12 22l-2.4-7.6L2 12l7.6-2.4L12 2z"/></svg>
                                    Boxes By Industry
                                </a>
                                @endfor
                            </div>
                            <div style="width: 340px; position: relative; border-radius: 12px; overflow: hidden; flex-shrink: 0; height: 220px;">
                                <img src="{{ asset('images/mega-menu-featured.png') }}" style="width: 100%; height: 100%; object-fit: cover;" alt="Featured Box" />
                                <div style="position: absolute; bottom: 0; left: 0; width: 100%; padding: 40px 20px 20px; background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);">
                                    <span style="color: #fff; font-weight: 700; font-size: 16px;">View All</span>
                                </div>
                            </div>
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
            <div class="nav-group" style="display: flex; align-items: stretch;">
                <a href="/boxes-by-material" style="display: flex; align-items: center; color: #ffffff; text-decoration: none; font-size: 14px; font-weight: 600; transition: color 0.2s; padding: 0 10px;" onmouseover="this.style.color='#F5A623'" onmouseout="this.style.color='#ffffff'">Boxes By Material</a>
                
                <!-- Mega Menu Container -->
                <div class="mega-menu-content" style="display: none; position: absolute; left: 0; width: 100%; background-color: #252525; z-index: 50; box-shadow: 0 25px 50px -12px rgba(0,0,0,0.5); top: 100%; border-top: 1px solid #333;">
                    <div style="padding: 24px 60px 20px;">
                        <div style="display: flex; gap: 40px;">
                            <div style="flex: 1; display: grid; grid-template-columns: repeat(4, 1fr); gap: 14px 10px; align-content: start;">
                                @for ($i = 0; $i < 20; $i++)
                                <a href="#" style="display: flex; align-items: center; gap: 10px; color: #cccccc; text-decoration: none; font-size: 13px; font-weight: 500; transition: color 0.2s;" onmouseover="this.style.color='#F5A623'" onmouseout="this.style.color='#cccccc'">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#F5A623" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l2.4 7.6L22 12l-7.6 2.4L12 22l-2.4-7.6L2 12l7.6-2.4L12 2z"/></svg>
                                    Boxes By Material
                                </a>
                                @endfor
                            </div>
                            <div style="width: 340px; position: relative; border-radius: 12px; overflow: hidden; flex-shrink: 0; height: 220px;">
                                <img src="{{ asset('images/mega-menu-featured.png') }}" style="width: 100%; height: 100%; object-fit: cover;" alt="Featured Box" />
                                <div style="position: absolute; bottom: 0; left: 0; width: 100%; padding: 40px 20px 20px; background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);">
                                    <span style="color: #fff; font-weight: 700; font-size: 16px;">View All</span>
                                </div>
                            </div>
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
            <div class="nav-group" style="display: flex; align-items: stretch;">
                <a href="/boxes-by-style" style="display: flex; align-items: center; color: #ffffff; text-decoration: none; font-size: 14px; font-weight: 600; transition: color 0.2s; padding: 0 10px;" onmouseover="this.style.color='#F5A623'" onmouseout="this.style.color='#ffffff'">Boxes By Style</a>
                
                <!-- Mega Menu Container -->
                <div class="mega-menu-content" style="display: none; position: absolute; left: 0; width: 100%; background-color: #252525; z-index: 50; box-shadow: 0 25px 50px -12px rgba(0,0,0,0.5); top: 100%; border-top: 1px solid #333;">
                    <div style="padding: 24px 60px 20px;">
                        <div style="display: flex; gap: 40px;">
                            <div style="flex: 1; display: grid; grid-template-columns: repeat(4, 1fr); gap: 14px 10px; align-content: start;">
                                @for ($i = 0; $i < 20; $i++)
                                <a href="#" style="display: flex; align-items: center; gap: 10px; color: #cccccc; text-decoration: none; font-size: 13px; font-weight: 500; transition: color 0.2s;" onmouseover="this.style.color='#F5A623'" onmouseout="this.style.color='#cccccc'">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#F5A623" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l2.4 7.6L22 12l-7.6 2.4L12 22l-2.4-7.6L2 12l7.6-2.4L12 2z"/></svg>
                                    Boxes By Style
                                </a>
                                @endfor
                            </div>
                            <div style="width: 340px; position: relative; border-radius: 12px; overflow: hidden; flex-shrink: 0; height: 220px;">
                                <img src="{{ asset('images/mega-menu-featured.png') }}" style="width: 100%; height: 100%; object-fit: cover;" alt="Featured Box" />
                                <div style="position: absolute; bottom: 0; left: 0; width: 100%; padding: 40px 20px 20px; background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);">
                                    <span style="color: #fff; font-weight: 700; font-size: 16px;">View All</span>
                                </div>
                            </div>
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

            <a href="/promotional-products" style="display: flex; align-items: center; color: #ffffff; text-decoration: none; font-size: 14px; font-weight: 600; transition: color 0.2s;" onmouseover="this.style.color='#F5A623'" onmouseout="this.style.color='#ffffff'">Promotional Products</a>
            <a href="/blogs" style="display: flex; align-items: center; color: #ffffff; text-decoration: none; font-size: 14px; font-weight: 600; transition: color 0.2s;" onmouseover="this.style.color='#F5A623'" onmouseout="this.style.color='#ffffff'">Blogs</a>
        </div>

        <!-- Right: Toggle + CTA -->
        <div style="display: flex; align-items: center; gap: 20px; flex-shrink: 0; padding: 10px 0;">

            <!-- Toggle Switch -->
            <div id="theme-toggle" onclick="toggleTheme()"
                style="width: 48px; height: 26px; background-color: var(--border-color); border-radius: 50px; display: flex; align-items: center; padding: 3px; cursor: pointer; transition: background 0.3s; position: relative;">
                <div id="toggle-knob"
                    style="width: 20px; height: 20px; background-color: var(--text-primary); border-radius: 50%; transition: transform 0.3s; transform: translateX(0px); display: flex; align-items: center; justify-content: center;">
                    <!-- Moon Icon -->
                    <svg id="icon-moon" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="var(--bg-main)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="display: block;">
                        <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                    </svg>
                    <!-- Sun Icon -->
                    <svg id="icon-sun" xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="var(--bg-main)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="display: none;">
                        <circle cx="12" cy="12" r="5"></circle>
                        <line x1="12" y1="1" x2="12" y2="3"></line>
                        <line x1="12" y1="21" x2="12" y2="23"></line>
                        <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                        <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                        <line x1="1" y1="12" x2="3" y2="12"></line>
                        <line x1="21" y1="12" x2="23" y2="12"></line>
                        <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                        <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                    </svg>
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

    <!-- Bottom Gold Line -->
    <div style="height: 3px; background: linear-gradient(90deg, #F5A623, #f7c56a, #F5A623);"></div>

</header>

<script>
    function toggleTheme() {
        const knob = document.getElementById('toggle-knob');
        const toggle = document.getElementById('theme-toggle');
        const iconMoon = document.getElementById('icon-moon');
        const iconSun = document.getElementById('icon-sun');
        const isActive = knob.style.transform === 'translateX(22px)';
        
        // Toggle the class on body
        document.body.classList.toggle('light-theme');
        
        if (isActive) {
            knob.style.transform = 'translateX(0px)';
            toggle.style.backgroundColor = 'var(--border-color)';
            iconMoon.style.display = 'block';
            iconSun.style.display = 'none';
        } else {
            knob.style.transform = 'translateX(22px)';
            toggle.style.backgroundColor = '#F5A623';
            iconMoon.style.display = 'none';
            iconSun.style.display = 'block';
        }
    }
</script>
