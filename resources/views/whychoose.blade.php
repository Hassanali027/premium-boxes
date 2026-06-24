/* ============================================================
   RESET & BASE
   ============================================================ */
*,
*::before,
*::after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html,
body {
    width: 100%;
    min-height: 100%;
    font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
    background-color: #111111;
    color: #ffffff;
    overflow-x: hidden;
    -webkit-font-smoothing: antialiased;
}

:root {
    --gold: #D4AF37;
    --gold-hover: #F5CC55;
    --bg-card: #1A1A1A;
    --border-color: #2A2A2A;
    --container-max: 1400px;
}

.wc-container {
    width: 100%;
    max-width: var(--container-max);
    margin: 0 auto;
    padding: 0 60px;
}

.wc-gold {
    color: var(--gold);
}

/* ============================================================
   HERO SECTION
   ============================================================ */
.wc-hero {
    position: relative;
    width: 100%;
    min-height: 450px;
    display: flex;
    align-items: stretch;
    background-image: url('./hero-bg.png');
    background-size: cover;
    background-position: center;
}

.wc-hero-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6) 0%, rgba(17, 17, 17, 1) 100%);
    z-index: 1;
}

.wc-hero-inner {
    position: relative;
    z-index: 2;
    padding-top: 60px;
    padding-bottom: 60px;
    display: flex;
    flex-direction: column;
}

.wc-hero-breadcrumb {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 18px;
    color: rgba(255, 255, 255, 0.6);
    align-self: flex-start;
}

.wc-bc-icon {
    color: var(--gold);
    text-decoration: none;
    font-size: 20px;
    transition: color 0.3s;
}

.wc-bc-icon:hover {
    color: #ffffff;
}

.wc-bc-sep {
    font-size: 15px;
    color: rgba(255, 255, 255, 0.4);
}

.wc-bc-current {
    color: rgba(255, 255, 255, 0.8);
}

.wc-hero-content {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.wc-hero-badge {
    display: inline-flex;
    align-items: center;
    border: 1.5px solid var(--gold);
    color: var(--gold);
    font-size: 14px;
    font-weight: 700;
    letter-spacing: 3px;
    text-transform: uppercase;
    padding: 10px 30px;
    border-radius: 50px;
    margin-bottom: 30px;
}

.wc-hero-heading {
    font-size: 42px;
    font-weight: 800;
    line-height: 50px;
    margin-bottom: 25px;
    color: #ffffff;
    letter-spacing: 0.04em;
}

.wc-hero-para {
    font-size: 20px;
    line-height: 1.8;
    color: rgba(255, 255, 255, 0.7);
    max-width: 750px;
}

/* ============================================================
   LOGOS STRIP
   ============================================================ */
.wc-logos-strip {
    background-color: #111111;
    border-top: 1px solid rgba(255, 255, 255, 0.05);
    border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    padding: 50px 0;
    width: 100%;
}

.wc-logos-marquee {
    display: flex;
    width: max-content;
    animation: marquee 20s linear infinite;
}

.wc-logos-marquee:hover {
    animation-play-state: paused;
}

.wc-logos-inner {
    display: flex;
    align-items: center;
    justify-content: space-around;
    min-width: 100%;
    gap: 40px;
    padding-right: 40px;
}

@keyframes marquee {
    0% {
        transform: translateX(0);
    }

    100% {
        transform: translateX(-50%);
    }
}

.wc-logo-item {
    display: flex;
    align-items: center;
    justify-content: center;
}

.wc-logo-item img {
    /* height: 75px; */
    width: auto;
    filter: brightness(0) invert(1);
    transition: transform 0.3s;
}

.wc-logo-item img:hover {
    transform: scale(1.05);
}

/* ============================================================
   SHARED SECTION HEADERS
   ============================================================ */
.wc-section-header {
    text-align: center;
    margin-bottom: 75px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.wc-sec-badge {
    display: inline-flex;
    align-items: center;
    border: 1px solid var(--gold);
    color: var(--gold);
    font-size: 14px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    padding: 8px 25px;
    border-radius: 50px;
    margin-bottom: 25px;
    transition: all 0.3s ease;
}

.wc-sec-badge:hover {
    background-color: var(--gold);
    color: #111111;
}

.wc-sec-heading {
    font-size: 32px;
    font-weight: 700;
    line-height: 30px;
    margin-bottom: 20px;
    color: #ffffff;
    letter-spacing: 0.04em;
}

.wc-sec-sub {
    font-size: 16px;
    font-weight: 400;
    line-height: 26px;
    letter-spacing: 0.02em;
    color: rgba(255, 255, 255, 0.6);
    max-width: 625px;
}

/* ============================================================
   FEATURE BLOCKS SECTION
   ============================================================ */
.wc-features-section {
    padding: 125px 0;
}

.wc-feature-block {
    display: flex;
    align-items: center;
    gap: 100px;
    margin-bottom: 125px;
}

.wc-feature-block:last-child {
    margin-bottom: 0;
}

.wc-feat-img-wrap {
    flex: 1;
    position: relative;
    max-width: 500px;
    aspect-ratio: 1 / 1;
}

.wc-feat-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 0;
    display: block;
    position: relative;
    z-index: 2;
}

.wc-gold-accent-left {
    position: absolute;
    bottom: -20px;
    left: -20px;
    width: 100%;
    height: 100%;
    background-color: var(--gold);
    border-radius: 0;
    z-index: 1;
}

.wc-gold-accent-right {
    position: absolute;
    bottom: -20px;
    right: -20px;
    width: 100%;
    height: 100%;
    background-color: var(--gold);
    border-radius: 0;
    z-index: 1;
}

.wc-feat-content {
    flex: 1;
}

.wc-feat-title {
    font-size: 32px;
    font-weight: 700;
    line-height: 44px;
    letter-spacing: 0.04em;
    margin-bottom: 30px;
    color: #ffffff;
}

.wc-feat-desc {
    font-size: 16px;
    font-weight: 400;
    line-height: 30px;
    letter-spacing: 0.02em;
    text-align: justify;
    color: rgba(255, 255, 255, 0.7);
}

/* ============================================================
   SOLUTIONS SECTION
   ============================================================ */
.wc-solutions-section {
    padding: 125px 0;
    background-color: #161616;
}

.wc-solutions-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 40px;
}

.wc-solution-card {
    background-color: var(--bg-card);
    border: 1px solid rgba(212, 175, 55, 0.4);
    border-radius: 12px;
    padding: 50px 40px;
    text-align: center;
    transition: all 0.3s ease;
}

.wc-solution-card:hover {
    border-color: var(--gold);
    transform: translateY(-5px);
}

.wc-sol-icon {
    font-size: 40px;
    color: var(--gold);
    margin-bottom: 30px;
}

.wc-sol-title {
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 20px;
    color: #ffffff;
}

.wc-sol-desc {
    font-size: 18px;
    line-height: 1.8;
    color: rgba(255, 255, 255, 0.6);
}

/* ============================================================
   FAQS SECTION
   ============================================================ */
.wc-faqs-section {
    padding: 100px 0;
    background-color: #1A1A1A;
}

.wc-faqs-wrapper {
    display: flex;
    gap: 100px;
    align-items: flex-start;
}

.wc-faqs-left {
    flex: 1.3;
    max-width: 600px;
}

.wc-faqs-badge {
    margin-bottom: 25px;
}

.wc-faqs-heading {
    margin-bottom: 30px;
    text-align: left;
    font-size: 40px;
    white-space: nowrap;
}

.wc-faqs-img-wrap {
    width: 100%;
    border-radius: 12px;
    overflow: hidden;
}

.wc-faqs-img {
    width: 100%;
    height: auto;
    display: block;
}

.wc-faqs-right {
    flex: 1.2;
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.wc-faq-item {
    background-color: #242424;
    border: 1px solid transparent;
    border-radius: 6px;
    overflow: hidden;
    transition: border-color 0.3s;
}

.wc-faq-item.active {
    border-color: var(--gold);
}

.wc-faq-btn {
    width: 100%;
    min-height: 60px;
    background: none;
    border: none;
    padding: 10px 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #C5C5C5;
    font-size: 16px;
    font-weight: 400;
    line-height: 1.2;
    cursor: pointer;
    text-align: left;
    font-family: inherit;
    transition: color 0.3s;
}

.wc-faq-btn:hover {
    color: #ffffff;
}

.wc-icon-plus {
    color: rgba(255, 255, 255, 0.4);
    font-size: 18px;
    transition: transform 0.3s ease, color 0.3s ease;
}

.wc-faq-item.active .wc-icon-plus {
    transform: rotate(45deg);
    color: var(--gold);
}

.wc-faq-content {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.4s ease;
}

.wc-faq-inner {
    padding: 0 40px 30px;
    font-size: 19px;
    line-height: 1.8;
    color: rgba(255, 255, 255, 0.6);
}

/* ============================================================
   UTILITIES
   ============================================================ */
.wc-mobile-break {
    display: none;
}

.wc-desktop-break {
    display: initial;
}

/* ============================================================
   RESPONSIVE DESIGN
   ============================================================ */
@media (max-width: 1400px) {
    .wc-container {
        padding: 0 48px;
    }

    .wc-hero-heading {
        font-size: 40px;
        line-height: 48px;
    }

    .wc-feature-block {
        gap: 60px;
    }

    .wc-faqs-wrapper {
        gap: 60px;
    }
}

@media (max-width: 992px) {
    .wc-container {
        padding: 0 40px;
    }

    .wc-hero-heading {
        font-size: 36px;
        line-height: 44px;
    }

    .wc-sec-heading {
        font-size: 28px;
    }

    .wc-feat-title {
        font-size: 30px;
        line-height: 40px;
    }

    .wc-feature-block {
        flex-direction: column;
        text-align: center;
        gap: 60px;
    }

    .wc-block-right-img {
        flex-direction: column-reverse;
    }

    .wc-feat-img-wrap {
        width: 100%;
        max-width: none;
    }

    .wc-gold-accent-right {
        right: auto;
        left: -20px;
    }

    .wc-solutions-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .wc-faqs-wrapper {
        flex-direction: column;
    }

    .wc-faqs-left,
    .wc-faqs-right {
        max-width: 100%;
        width: 100%;
    }

    .wc-faqs-heading {
        text-align: center;
        white-space: nowrap;
        font-size: 32px;
    }

    .wc-faqs-left {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
}

@media (max-width: 768px) {
    .wc-container {
        padding: 0 24px;
    }

    .wc-hero-heading {
        font-size: 32px;
        line-height: 40px;
    }

    .wc-hero-para br {
        display: none;
    }

    .wc-hero-breadcrumb {
        display: none;
    }



    .wc-desktop-break {
        display: none;
    }

    .wc-mobile-break {
        display: initial;
    }

    .wc-hero-para {
        font-size: 16px;
    }

    .wc-sec-heading {
        font-size: 26px;
    }

    .wc-feat-title {
        font-size: 26px;
        line-height: 36px;
        white-space: nowrap;
    }

    .wc-faqs-heading {
        font-size: 26px;
    }

    .wc-solutions-grid {
        grid-template-columns: 1fr;
    }

    .wc-faq-btn {
        padding: 20px 24px;
        font-size: 16px;
    }

    .wc-faq-inner {
        padding: 0 24px 20px;
        font-size: 15px;
    }
}

@media (max-width: 480px) {
    .wc-hero-heading {
        font-size: 28px;
        line-height: 36px;
    }

    .wc-sec-heading {
        font-size: 24px;
    }

    .wc-feat-title {
        font-size: 20px;
        line-height: 28px;
        white-space: nowrap;
    }

    .wc-faqs-heading {
        font-size: 20px;
    }

    .wc-logo-item img {
        height: 50px;
    }
}

/* ============================================================
   WHY CHOOSE US SECTION
   ============================================================ */
.wc-why-section {
    width: 100%;
    background-color: #111111;
    padding: 125px 0;
}

.wc-why-inner {
    max-width: var(--container-max);
    margin: 0 auto;
    padding: 0 60px;
    display: flex;
    gap: 52px;
    align-items: stretch;
}

.wc-why-left {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    gap: 16px;
}

.wc-why-left .wc-why-cards-row {
    margin-top: 8px;
    width: 100%;
}

.wc-why-left .wc-why-card {
    height: auto;
    width: 100%;
}

.wc-why-badge {
    display: inline-flex;
    align-items: center;
    border: 1px solid var(--gold);
    color: var(--gold);
    font-size: 14px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    padding: 8px 25px;
    border-radius: 50px;
    margin-bottom: 16px;
    width: fit-content;
    cursor: pointer;
    transition: all 0.3s ease;
}

.wc-why-badge:hover {
    background-color: var(--gold);
    color: #111111;
}

.wc-why-title {
    font-size: 32px;
    font-weight: 700;
    line-height: 1.25;
    color: #ffffff;
    margin-bottom: 12px;
}

.wc-why-desc {
    font-size: 16px;
    line-height: 1.75;
    color: rgba(255, 255, 255, 0.65);
    margin-bottom: 0;
}

.wc-why-right {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.wc-why-cards-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
    align-items: stretch;
}

.wc-why-card {
    background-color: var(--bg-card);
    border: 1px solid var(--border-color);
    border-radius: 12px;
    padding: 28px 22px;
    display: flex;
    flex-direction: column;
    gap: 14px;
    align-items: center;
    text-align: center;
    transition: border-color 0.2s;
    overflow: hidden;
}

.wc-why-card:hover {
    border-color: var(--gold);
}

.wc-why-icon {
    width: 44px;
    height: 44px;
    border-radius: 50%;
    border: 1.5px solid var(--gold);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--gold);
    font-size: 17px;
}

.wc-why-card h3 {
    font-size: 16px;
    font-weight: 700;
    color: #ffffff;
    line-height: 1.3;
}

.wc-why-card p {
    font-size: 14px;
    color: rgba(255, 255, 255, 0.55);
    line-height: 1.7;
}

.wc-why-feature-img {
    border-radius: 12px;
    overflow: hidden;
    flex: 1;
    min-height: 200px;
}

.wc-why-feature-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

@media (max-width: 1400px) {
    .wc-why-inner { padding: 0 48px; }
}

@media (max-width: 992px) {
    .wc-why-inner  { padding: 0 40px; flex-direction: column; gap: 30px; }
    .wc-why-title  { font-size: 28px; }
    .wc-why-desc   { font-size: 15px; }
}

@media (max-width: 768px) {
    .wc-why-section       { padding: 80px 0; }
    .wc-why-inner         { padding: 0 24px; }
    .wc-why-title         { font-size: 26px; }
    .wc-why-cards-row     { grid-template-columns: 1fr; }
    .wc-why-card          { padding: 24px 20px; }
    .wc-why-feature-img   { display: none; }
}

    <!-- HERO SECTION -->
    <section class="wc-hero">
        <div class="wc-hero-overlay"></div>
        <div class="wc-container wc-hero-inner">
            <nav class="wc-hero-breadcrumb" aria-label="Breadcrumb">
                <a href="premiumboxes.html" class="wc-bc-icon" aria-label="Home"><i class="fas fa-house"></i></a>
                <span class="wc-bc-sep">&#187;</span>
                <span class="wc-bc-current">Why Us</span>
            </nav>

            <div class="wc-hero-content">
                <div class="wc-hero-badge">WHY PREMIUM PACKAGING</div>
                <h1 class="wc-hero-heading">
                    Built for <span class="wc-gold">Brands</span> That<br>Demand Excellence
                </h1>
                <p class="wc-hero-para">
                    We combine quality, innovation, and reliability to create<br>
                    packaging that enhances product presentation and<br>
                    strengthens brand value.
                </p>
            </div>
        </div>
    </section>

    <!-- LOGOS STRIP -->
    <div class="wc-logos-strip">
        <div class="wc-container" style="overflow: hidden;">
            <div class="wc-logos-marquee">
                <div class="wc-logos-inner">
                    <div class="wc-logo-item"><img src="./logo-company.png" alt="Company Awesome"></div>
                    <div class="wc-logo-item"><img src="./logo-lorem.png" alt="Lorem Ipsum"></div>
                    <div class="wc-logo-item"><img src="./logo-abstract.png" alt="Abstract"></div>
                    <div class="wc-logo-item"><img src="./logo-lorem.png" alt="Lorem Ipsum"></div>
                    <div class="wc-logo-item"><img src="./logo-company.png" alt="Company Awesome"></div>
                    <div class="wc-logo-item"><img src="./logo-company.png" alt="Company Awesome"></div>
                    <div class="wc-logo-item"><img src="./logo-abstract.png" alt="Abstract"></div>
                    <div class="wc-logo-item"><img src="./logo-lorem.png" alt="Lorem Ipsum"></div>
                </div>
                <div class="wc-logos-inner" aria-hidden="true">
                    <div class="wc-logo-item"><img src="./logo-company.png" alt="Company Awesome"></div>
                    <div class="wc-logo-item"><img src="./logo-lorem.png" alt="Lorem Ipsum"></div>
                    <div class="wc-logo-item"><img src="./logo-abstract.png" alt="Abstract"></div>
                    <div class="wc-logo-item"><img src="./logo-lorem.png" alt="Lorem Ipsum"></div>
                    <div class="wc-logo-item"><img src="./logo-company.png" alt="Company Awesome"></div>
                    <div class="wc-logo-item"><img src="./logo-company.png" alt="Company Awesome"></div>
                    <div class="wc-logo-item"><img src="./logo-abstract.png" alt="Abstract"></div>
                    <div class="wc-logo-item"><img src="./logo-lorem.png" alt="Lorem Ipsum"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- FEATURE BLOCKS SECTION -->
    <section class="wc-features-section">
        <div class="wc-container">
            <div class="wc-section-header">
                <div class="wc-sec-badge">OUR COMMITMENT</div>
                <h2 class="wc-sec-heading">Committed to Quality, Driven by Responsibility</h2>
                <p class="wc-sec-sub">Committed to quality, craftsmanship, and sustainable packaging solutions.</p>
            </div>

            <div class="wc-feature-block wc-block-left-img">
                <div class="wc-feat-img-wrap">
                    <div class="wc-gold-accent-left"></div>
                    <img src="./c903f3f775a50e5b56122d5a307158962172018e%20(1).jpg" alt="High Quality Packaging"
                        class="wc-feat-img">
                </div>
                <div class="wc-feat-content">
                    <h3 class="wc-feat-title">High-Quality Materials, <br class="wc-mobile-break">Exceptional<br
                            class="wc-desktop-break"> Finishing</h3>
                    <p class="wc-feat-desc">
                        We use carefully selected materials and advanced finishing techniques to create packaging that
                        reflects exceptional quality, durability, and attention to detail. From premium rigid boards to
                        luxury finishing options, every element is chosen to ensure a refined appearance and exceptional
                        unboxing experience.
                    </p>
                </div>
            </div>

            <div class="wc-feature-block wc-block-right-img">
                <div class="wc-feat-content">
                    <h3 class="wc-feat-title">Corporate Social Responsibility</h3>
                    <p class="wc-feat-desc">
                        Sustainability is an integral part of our packaging philosophy. Through the use of recyclable
                        materials, responsible sourcing, and environmentally conscious production practices, we aim to
                        minimize waste and reduce our environmental footprint. Our commitment to circular packaging
                        allows brands to embrace sustainable solutions without compromising on quality, functionality,
                        or visual appeal.
                    </p>
                </div>
                <div class="wc-feat-img-wrap">
                    <div class="wc-gold-accent-right"></div>
                    <img src=".//c903f3f775a50e5b56122d5a307158962172018e (1).jpg" alt="Corporate Social Responsibility"
                        class="wc-feat-img">
                </div>
            </div>
        </div>
    </section>

    <!-- SOLUTIONS SECTION -->
    <section class="wc-solutions-section">
        <div class="wc-container">
            <div class="wc-section-header">
                <div class="wc-sec-badge">OUR SERVICES</div>
                <h2 class="wc-sec-heading">Packaging Solutions <br class="wc-mobile-break">We Offer</h2>
                <p class="wc-sec-sub">Discover packaging designs tailored for your product and industry needs.</p>
            </div>

            <div class="wc-solutions-grid">
                <div class="wc-solution-card">
                    <div class="wc-sol-icon"><i class="fas fa-cube"></i></div>
                    <h3 class="wc-sol-title">Custom Rigid Boxes</h3>
                    <p class="wc-sol-desc">Our custom luxury rigid boxes are carefully constructed from premium
                        materials designed to elevate your brand.</p>
                </div>
                <div class="wc-solution-card">
                    <div class="wc-sol-icon"><i class="fas fa-fill-drip"></i></div>
                    <h3 class="wc-sol-title">Luxury Printing</h3>
                    <p class="wc-sol-desc">Elevate your packaging with luxury custom printing techniques, adding a touch
                        of brilliance and dimension.</p>
                </div>
                <div class="wc-solution-card">
                    <div class="wc-sol-icon"><i class="fas fa-layer-group"></i></div>
                    <h3 class="wc-sol-title">Custom Inserts</h3>
                    <p class="wc-sol-desc">Our completely customized inserts effectively secure and present your product
                        beautifully within its rigid box.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQS SECTION -->
    <section class="wc-faqs-section">
        <div class="wc-container">
            <div class="wc-faqs-wrapper">
                <div class="wc-faqs-left">
                    <div class="wc-sec-badge wc-faqs-badge">FAQ's</div>
                    <h2 class="wc-sec-heading wc-faqs-heading">Frequently Asked Questions</h2>
                    <div class="wc-faqs-img-wrap">
                        <img src="./c903f3f775a50e5b56122d5a307158962172018e%20(1).jpg" alt="FAQ Packaging"
                            class="wc-faqs-img">
                    </div>
                </div>

                <div class="wc-faqs-right">
                    <div class="wc-faq-item">
                        <button class="wc-faq-btn">
                            Which printing method is best for small orders?
                            <i class="fas fa-plus wc-icon-plus"></i>
                        </button>
                        <div class="wc-faq-content">
                            <div class="wc-faq-inner">
                                We offer various printing methods tailored to small runs, ensuring cost-efficiency and quality.
                            </div>
                        </div>
                    </div>

                    <div class="wc-faq-item">
                        <button class="wc-faq-btn">
                            Do you offer free design support?
                            <i class="fas fa-plus wc-icon-plus"></i>
                        </button>
                        <div class="wc-faq-content">
                            <div class="wc-faq-inner">
                                Yes, our expert design team can help you create structural and artwork designs tailored to your brand identity.
                            </div>
                        </div>
                    </div>

                    <div class="wc-faq-item">
                        <button class="wc-faq-btn">
                            What is the minimum order quantity?
                            <i class="fas fa-plus wc-icon-plus"></i>
                        </button>
                        <div class="wc-faq-content">
                            <div class="wc-faq-inner">
                                Our standard minimum order quantity (MOQ) typically starts at 500 units to ensure cost-efficiency, though custom runs can be discussed.
                            </div>
                        </div>
                    </div>

                    <div class="wc-faq-item">
                        <button class="wc-faq-btn">
                            Which printing method is best for small orders?
                            <i class="fas fa-plus wc-icon-plus"></i>
                        </button>
                        <div class="wc-faq-content">
                            <div class="wc-faq-inner">
                                Custom rigid boxes typically take 15 to 20 business days for full production after the final artwork is approved.
                            </div>
                        </div>
                    </div>

                    <div class="wc-faq-item">
                        <button class="wc-faq-btn">
                            Which printing method is best for small orders?
                            <i class="fas fa-plus wc-icon-plus"></i>
                        </button>
                        <div class="wc-faq-content">
                            <div class="wc-faq-inner">
                                Yes, we offer physical pre-production samples so you can review the structural integrity and print quality.
                            </div>
                        </div>
                    </div>

                    <div class="wc-faq-item">
                        <button class="wc-faq-btn">
                            Which printing method is best for small orders?
                            <i class="fas fa-plus wc-icon-plus"></i>
                        </button>
                        <div class="wc-faq-content">
                            <div class="wc-faq-inner">
                                We ship internationally to almost any destination worldwide.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    document.addEventListener('DOMContentLoaded', () => {
    const faqItems = document.querySelectorAll('.wc-faq-item');

    faqItems.forEach(item => {
        const btn = item.querySelector('.wc-faq-btn');
        const content = item.querySelector('.wc-faq-content');

        btn.addEventListener('click', () => {
            const isActive = item.classList.contains('active');

            // Close all items
            faqItems.forEach(otherItem => {
                otherItem.classList.remove('active');
                otherItem.querySelector('.wc-faq-content').style.maxHeight = null;
            });

            // If it wasn't active, open it
            if (!isActive) {
                item.classList.add('active');
                content.style.maxHeight = content.scrollHeight + "px";
            }
        });
    });
});

