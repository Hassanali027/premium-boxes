@include('include.header')
<style>
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

:root {
    --bg:    #1a1a1a;
    --bg2:   #111111;
    --card:  #222222;
    --gold:  #FFC107;
    --gold2: #e0a800;
    --white: #ffffff;
    --muted: rgba(255,255,255,0.62);
    --bdr:   rgba(255,255,255,0.10);
    --font:  'Inter', sans-serif;
    --max:   1400px;
}

*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

body {
    background: var(--bg);
    color: var(--white);
    font-family: var(--font);
    font-size: 16px;
    -webkit-font-smoothing: antialiased;
}

a { text-decoration: none; color: inherit; }
img { display: block; max-width: 100%; }

/* ── Max-width wrapper ── */
.cp-wrap {
    max-width: var(--max);
    margin: 0 auto;
    padding: 0 60px;
}

/* ── Gold pill button ── */
.cp-cta {
    display: inline-flex;
    align-items: center;
    padding: 14px 32px;
    background: var(--gold);
    color: #111;
    font-family: var(--font);
    font-size: 16px;
    font-weight: 700;
    border-radius: 50px;
    border: none;
    cursor: pointer;
    transition: background .25s, transform .2s;
    white-space: nowrap;
}
.cp-cta:hover { background: var(--gold2); transform: translateY(-2px); }


.cp-badge {
    display: inline-block;
    border: 1px solid var(--gold);
    color: var(--gold);
    padding: 6px 18px;
    border-radius: 50px;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: 1.2px;
    text-transform: uppercase;
    margin-bottom: 16px;
}


.cp-hero {
    background: var(--bg);
    padding: 28px 0 0;
}

/* Breadcrumb */
.cp-bc {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 14px;
    color: var(--muted);
    margin-bottom: 36px;
}
.cp-bc a             { color: var(--muted); transition: color .2s; }
.cp-bc a:first-child { color: var(--gold); }
.cp-bc a:hover       { color: var(--gold); }
.cp-bc-sep           { opacity: .5; }

/* Two-column grid */
.cp-hero-grid {
    margin-top: 40px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    align-items: center;
    gap: 48px;
    margin-bottom: 60px;
}

/* LEFT — text */
.cp-hero-text {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.cp-h1 {
    font-family: var(--font);
    font-size: 42px;
    font-weight: 800;
    line-height: 50px;
    letter-spacing: 0.04em;
    color: #FFFFFF;
    margin-bottom: 20px;
}
.cp-yellow { color: var(--gold); }

.cp-desc {
    font-family: var(--font);
    font-size: 16px;
    font-weight: 400;
    line-height: 30px;
    letter-spacing: 0;
    color: #C5C5C5;
    margin-bottom: 32px;
    text-align: justify;
}

/* RIGHT — image */
.cp-hero-img {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 20px;
    overflow: visible;
}
.cp-hero-photo {
    width: auto;
    max-width: 100%;
    height: auto;
    object-fit: contain;
    display: block;
}

/* Bottom bar */
.cp-hero-bar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 14px 0;
    border-top: 1px solid var(--bdr);
    border-bottom: 1px solid var(--bdr);
    background: #111111;
    gap: 24px;
    flex-wrap: nowrap;
    margin-left: -60px;
    margin-right: -60px;
    padding-left: 60px;
    padding-right: 60px;
}

.cp-stars-group {
    display: flex;
    align-items: center;
    gap: 10px;
    flex-shrink: 0;
    white-space: nowrap;
}
.cp-stars {
    display: flex;
    gap: 3px;
    color: var(--gold);
    font-size: 16px;
}
.cp-rating-link {
    font-size: 13px;
    font-weight: 600;
    color: var(--gold);
    text-decoration: underline;
    white-space: nowrap;
}

/* ── Logo strip — scroll right to left, loop back to start ── */
.cp-logos {
    flex: 1;
    overflow: hidden;
}

.cp-logos-inner {
    display: flex;
    align-items: center;
    gap: 60px;
    animation: cp-rtl 16s linear infinite;
    width: max-content;
}

.cp-logos-inner:hover { animation-play-state: paused; }

.cp-logo-img {
    height: 48px;
    width: auto;
    max-width: 110px;
    object-fit: contain;
    opacity: 0.85;
    transition: opacity 0.2s;
    flex-shrink: 0;
}
.cp-logo-img:hover { opacity: 1; }

/* Scroll from right side → left, loop */
@keyframes cp-rtl {
    0%   { transform: translateX(100%); }
    100% { transform: translateX(-100%); }
}


.cp-products {
    background: var(--bg);
    padding: 90px 0;
}

.cp-sec-head {
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 52px;
}
.cp-sec-title { font-size: 36px; font-weight: 800; margin-bottom: 14px; }
.cp-sec-sub   { font-size: 16px; color: var(--muted); max-width: 460px; line-height: 1.75; }

.cp-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
    margin-bottom: 52px;
}

.cp-card {
    display: flex;
    flex-direction: column;
    gap: 14px;
    cursor: pointer;
}
.cp-card:hover .cp-card-img { border-color: var(--gold); }

.cp-card-img {
    width: 100%;
    aspect-ratio: 1 / 1;
    background: var(--card);
    border-radius: 12px;
    border: 1px solid rgba(212,175,55,0.30);
    transition: border-color .25s;
}
.cp-card-name {
    font-size: 15px;
    font-weight: 500;
    color: var(--white);
    text-align: center;
}

.cp-center { display: flex; justify-content: center; }


.cp-why {
    background: var(--bg2);
    padding: 90px 0;
}

.cp-why-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: center;
}

.cp-why-text {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}
.cp-why-title { font-size: 36px; font-weight: 800; line-height: 1.2; margin-bottom: 22px; }
.cp-why-para  { font-size: 15px; line-height: 1.85; color: var(--muted); margin-bottom: 16px; }

.cp-why-photo-wrap {
    width: 50%;
   
    overflow: hidden;
    aspect-ratio: 4/3;
    background: var(--card);
}
.cp-why-photo { width: 100%; height: 100%; object-fit: cover; display: block; }


.cp-why-quote-btn {
    display: none;
}


@media (max-width: 1100px) {
    .cp-wrap  { padding: 0 36px; }
    .cp-h1    { font-size: 36px; }
    .cp-grid  { grid-template-columns: repeat(2, 1fr); }
    .cp-why-grid { gap: 48px; }
    .cp-trust-row { gap: 28px; }
}


@media (max-width: 768px) {
    .cp-wrap { padding: 0 5vw; }

   
    .cp-hero { padding: 0; }
    .cp-bc   { display: none; }

    .cp-hero-grid {
        grid-template-columns: 1fr;
        gap: 0;
        margin-bottom: 5vw;
    }

    /* Image — centered with padding, transparent bg shows through */
    .cp-hero-img {
        order: -1;
        margin-top: 36vw;
        margin-bottom: -77px;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0 8vw;
    }
    .cp-hero-photo {
        width: 100%;
        height: auto;
        display: block;
        object-fit: contain;
    }

    /* Text area */
    .cp-hero-text { padding-top: 5vw; }

    .cp-h1   { font-size: 7.5vw; margin-bottom: 4vw; line-height: 1.2; }
    .cp-desc { font-size: 3.8vw; margin-bottom: 6vw; }

    /* Button — centered */
    .cp-cta  {
        font-size: 4.5vw;
        padding: 3.5vw 8vw;
        display: block;
        width: fit-content;
        margin: 0 auto;
        text-align: center;
    }

    /* Hero bar — hide stars/reviews, show logos only */
    .cp-hero-bar {
        padding: 5vw;
        gap: 0;
        justify-content: space-between;
        border-top: 1px solid rgba(255,255,255,0.1);
        margin-left: 0;
        margin-right: 0;
    }
    .cp-stars-group { display: none; } /* remove reviews on mobile */

    .cp-logos {
        flex: unset;
        width: 100%;
        justify-content: space-evenly;
    }
    .cp-logo-img {
        height: 10vw;
        max-width: 18vw;
    }

    /* Products */
    .cp-products  { padding: 10vw 0; }
    .cp-sec-title { font-size: 6vw; }
    .cp-sec-sub   { font-size: 3.8vw; }
    .cp-grid      { grid-template-columns: repeat(2, 1fr); gap: 4vw; margin-bottom: 7vw; }
    .cp-card-name { font-size: 3.5vw; }

    /* Why choose */
    .cp-why { padding: 10vw 0; }
    .cp-why-grid {
        grid-template-columns: 1fr;
        gap: 7vw;
    }
    .cp-why-title { font-size: 6vw; }
    .cp-why-para  { font-size: 3.8vw; }
    .cp-why-photo-wrap {
        width: 100%;
        margin-bottom: 10vw;
    }
    .cp-why-quote-btn {
        display: inline-flex;
        margin-bottom: 5vw;
        font-size: 4.5vw;
        padding: 3.5vw 8vw;
    }
}


.cp-testi {
    background: var(--bg2);
    padding: 90px 0;
}

.cp-testi-head {
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 60px;
}
.cp-testi-title {
    font-size: 36px;
    font-weight: 800;
    margin-bottom: 12px;
    color: var(--white);
}
.cp-testi-sub {
    font-size: 15px;
    color: var(--muted);
    max-width: 420px;
    line-height: 1.7;
}

/* Slider wrapper — clips the track, 3 cards visible */
.cp-testi-slider {
    overflow: hidden;
    margin-bottom: 40px;
    padding-top: 40px;
}

/* Track — all cards in ONE horizontal row, no wrap */
.cp-testi-track {
    display: flex;
    flex-wrap: nowrap;
    gap: 24px;
    transition: transform 0.4s ease;
    will-change: transform;
    width: max-content;
}

/* Card — fixed width so 3 fit in the container */
.cp-testi-card {
    flex: 0 0 calc((min(100vw, 1400px) - 120px - 48px) / 3);
    width: calc((min(100vw, 1400px) - 120px - 48px) / 3);
    background: #1e1e1e;
    border: 1px solid rgba(212,175,55,0.25);
    border-radius: 16px;
    padding: 60px 28px 32px;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    position: relative;
}

/* Avatar — sits on top of card, overlapping border */
.cp-testi-avatar-wrap {
    position: absolute;
    top: -36px;
    left: 50%;
    transform: translateX(-50%);
    width: 72px;
    height: 72px;
    border-radius: 50%;
    overflow: hidden;
    border: 3px solid #1e1e1e;
    background: #333;
}
.cp-testi-avatar {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.cp-testi-text {
    font-size: 14px;
    line-height: 1.75;
    color: var(--muted);
    margin-bottom: 20px;
}

.cp-testi-name {
    font-size: 16px;
    font-weight: 700;
    color: var(--gold);
    margin-bottom: 4px;
}
.cp-testi-role {
    font-size: 13px;
    color: var(--muted);
}

/* Nav buttons */
.cp-testi-nav {
    display: flex;
    justify-content: center;
    gap: 16px;
}
.cp-testi-btn {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    background: transparent;
    border: 1px solid rgba(255,255,255,0.2);
    color: var(--white);
    font-size: 16px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: border-color 0.2s, color 0.2s;
}
.cp-testi-btn:hover {
    border-color: var(--gold);
    color: var(--gold);
}


@media (max-width: 1024px) {
    .cp-testi-card { flex: 0 0 calc(50% - 12px); }
}
@media (max-width: 768px) {
    .cp-testi { padding: 10vw 0; }
    .cp-testi-title { font-size: 6vw; }
    .cp-testi-sub { font-size: 3.8vw; }
    .cp-testi-card { flex: 0 0 80vw; }
    .cp-testi-slider { gap: 4vw; }
}


.cp-testi {
    background: var(--bg2);
    padding: 90px 0;
}

.cp-testi-head {
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 70px;
}
.cp-testi-title {
    font-size: 36px;
    font-weight: 800;
    color: var(--white);
    margin-bottom: 12px;
}
.cp-testi-sub {
    font-size: 15px;
    color: var(--muted);
    line-height: 1.7;
}

/* Viewport — clips to show exactly 3 cards */
.cp-testi-viewport {
    overflow: hidden;
    padding-top: 44px;
    margin-bottom: 40px;
    width: 100%;
}

/* Track — single horizontal row */
.cp-testi-track {
    display: flex;
    flex-wrap: nowrap;
    gap: 24px;
    transition: transform 0.45s ease;
    will-change: transform;
}

/* Card — exactly 1/3 of the wrap container */
.cp-testi-card {
    flex: 0 0 calc((var(--cp-max) - 120px - 48px) / 3);
    width: calc((var(--cp-max) - 120px - 48px) / 3);
    min-width: 0;
    background: #1e1e1e;
    border: 1px solid rgba(212,175,55,0.22);
    border-radius: 16px;
    padding: 56px 24px 28px;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    position: relative;
}

/* Override card width at smaller screens */
@media (max-width: 1400px) {
    .cp-testi-card {
        flex: 0 0 calc((100vw - 120px - 48px) / 3);
        width: calc((100vw - 120px - 48px) / 3);
    }
}

/* Avatar circle — centered on top edge of card */
.cp-testi-av {
    position: absolute;
    top: -36px;
    left: 50%;
    transform: translateX(-50%);
    width: 72px;
    height: 72px;
    border-radius: 50%;
    overflow: hidden;
    border: 3px solid var(--bg2);
    flex-shrink: 0;
}
.cp-testi-av img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.cp-testi-txt {
    font-size: 14px;
    line-height: 1.75;
    color: var(--muted);
    margin-bottom: 18px;
}
.cp-testi-name {
    font-size: 16px;
    font-weight: 700;
    color: var(--gold);
    margin-bottom: 4px;
}
.cp-testi-role {
    font-size: 13px;
    color: var(--muted);
}

/* Prev / Next nav */
.cp-testi-nav {
    display: flex;
    justify-content: center;
    gap: 16px;
}
.cp-testi-btn {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    background: transparent;
    border: 1px solid rgba(255,255,255,0.2);
    color: var(--white);
    font-size: 15px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: border-color 0.2s, color 0.2s;
}
.cp-testi-btn:hover { border-color: var(--gold); color: var(--gold); }

/* Responsive */
@media (max-width: 900px) {
    .cp-testi-card { flex: 0 0 calc((100% - 24px) / 2); }
}
@media (max-width: 600px) {
    .cp-testi-card { flex: 0 0 100%; }
    .cp-testi-title { font-size: 6vw; }
    .cp-testi-sub   { font-size: 3.8vw; }
}


:root {
    --product-bg:        #161616;
    --product-bg-card:   #222222;
    --product-gold:      #FFC107;
    --product-gold-hover:#E0A800;
    --product-text-main: #FFFFFF;
    --product-text-muted:rgba(255,255,255,0.7);
    --product-border:    rgba(255,255,255,0.1);
    --product-font:      'Inter', sans-serif;
}


.product-customize-section { padding: 75px 0; }

.product-customize-header {
    text-align: center;
    margin-bottom: 50px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.product-outline-badge {
    display: inline-block;
    border: 1px solid var(--product-gold);
    color: var(--product-gold);
    padding: 8px 20px;
    border-radius: 62.5px;
    font-size: 13px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 20px;
    transition: all 0.3s ease;
    cursor: default;
}
.product-outline-badge:hover { background-color: var(--product-gold); color: #111; }

.product-section-title  { font-size: 40px; font-weight: 700; margin-bottom: 18px; }
.product-section-subtitle { font-size: 20px; color: var(--product-text-muted); }

.product-customize-filters {
    display: flex;
    justify-content: center;
    gap: 18px;
    margin-bottom: 50px;
    flex-wrap: wrap;
}

.product-filter-btn {
    background-color: transparent;
    border: 1px solid var(--product-border);
    color: var(--product-text-main);
    padding: 15px 0;
    width: 240px;
    text-align: center;
    border-radius: 6px;
    font-size: 17px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s ease;
}
.product-filter-btn:hover,
.product-filter-btn.active {
    background-color: var(--product-gold);
    color: #111;
    border-color: var(--product-gold);
}

.product-materials-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 25px;
}

.product-material-card {
    background-color: #1a1a1a;
    border-radius: 8px;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    border: 1px solid transparent;
    transition: transform 0.3s ease, border-color 0.3s ease;
    cursor: pointer;
    aspect-ratio: 4 / 5;
}
.product-material-card:hover {
    transform: translateY(-6px);
    border-color: var(--product-gold);
}

.material-img-placeholder { flex: 1; background-color: #2a2a2a; }
.material-title-bar {
    padding: 15px 10px;
    text-align: center;
    font-size: 15px;
    font-weight: 600;
    color: #fff;
}


.product-testimonials-section {
    padding: 100px 0;
    background-color: #111111;
}

.product-testimonials-header {
    text-align: center;
    margin-bottom: 87px;
}

.product-sec-badge {
    display: inline-block;
    color: var(--product-gold);
    border: 1px solid var(--product-gold);
    padding: 6px 18px;
    border-radius: 62.5px;
    font-size: 15px;
    font-weight: 600;
    letter-spacing: 1px;
    margin-bottom: 25px;
}

.product-testimonials-grid {
    display: flex;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
    scrollbar-width: none;
    gap: 30px;
    margin-bottom: 50px;
    padding-top: 55px;
    padding-bottom: 10px;
    position: relative;
}
.product-testimonials-grid::-webkit-scrollbar { display: none; }

.product-testimonial-card {
    background-color: var(--product-bg-card);
    border-radius: 15px;
    padding: 62px 37px 50px;
    text-align: center;
    position: relative;
    margin-top: 0;
    border: 1px solid rgba(255,193,7,0.3);
    flex: 0 0 calc(33.333% - 20px);
    scroll-snap-align: start;
    min-width: 0;
}

.product-avatar-wrap {
    width: 87px;
    height: 87px;
    border-radius: 50%;
    overflow: hidden;
    position: absolute;
    top: -44px;
    left: 50%;
    transform: translateX(-50%);
    border: 4px solid var(--product-bg-card);
}
.product-avatar { width: 100%; height: 100%; object-fit: cover; }

.product-testimonial-text {
    font-size: 18px;
    line-height: 1.8;
    color: var(--product-text-muted);
    font-style: italic;
    margin-bottom: 25px;
}

.product-stars {
    color: var(--product-gold);
    font-size: 17px;
    margin-bottom: 25px;
    display: flex;
    justify-content: center;
    gap: 6px;
}

.product-testimonial-name {
    font-size: 22px;
    font-weight: 700;
    color: var(--product-gold);
    margin-bottom: 6px;
}
.product-testimonial-role { font-size: 17px; color: rgba(255,255,255,0.4); }

.product-slider-nav { display: flex; justify-content: center; gap: 18px; }

.product-nav-btn {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: transparent;
    border: 1px solid var(--product-border);
    color: var(--product-text-main);
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s ease;
}
.product-nav-btn:hover { border-color: var(--product-gold); color: var(--product-gold); }

/* product-container reuse */
.product-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 50px;
}

/* Testimonials viewport wrapper */
.product-testi-viewport {
    overflow: hidden;
    padding-top: 55px;
}

/* ================================================
   REQUEST A FREE QUOTE SECTION
   ================================================ */
.cq-section {
    background: #161616;
    padding: 80px 0;
}

.cq-wrap {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 60px;
    display: grid;
    grid-template-columns: 1fr 1.6fr;
    gap: 60px;
    align-items: stretch;
}


.cq-steps {
    display: flex;
    flex-direction: column;
    gap: 46px;
}

.cq-step {
    display: flex;
    gap: 16px;
    align-items: flex-start;
}

.cq-num {
    font-size: 18px;
    font-weight: 800;
    color: #FFC107;
    flex-shrink: 0;
    min-width: 36px;
}

.cq-step-title {
    font-size: 16px;
    font-weight: 700;
    color: #ffffff;
    margin-bottom: 8px;
}

.cq-step-text {
    font-size: 13px;
    line-height: 1.8;
    color: rgba(255,255,255,0.6);
    text-align: justify;
}


.cq-form-box {
    background: #1e1e1e;
    border-radius: 14px;
    padding: 24px 32px;
    height: 100%;
    display: flex;
    flex-direction: column;
    box-sizing: border-box;
}

.cq-form-title {
    font-size: 22px;
    font-weight: 800;
    color: #ffffff;
    text-align: center;
    margin-bottom: 10px;
}

.cq-form {
    display: flex;
    flex-direction: column;
    gap: 8px;
    flex: 1;
}

.cq-row {
    display: grid;
    gap: 10px;
}
.cq-row-2 { grid-template-columns: 1fr 1fr; }
.cq-row-3 { grid-template-columns: 1fr 1fr 1fr; }
.cq-row-mat-col   { grid-template-columns: 1fr 1fr; }
.cq-row-addon-qty { grid-template-columns: 1fr 1fr; }
.cq-row-upload-full { grid-template-columns: 1fr; }
.cq-row-4 { grid-template-columns: 1fr 1fr 1fr 1fr; }

.cq-field {
    display: flex;
    flex-direction: column;
    gap: 3px;
}

.cq-field label {
    font-size: 12px;
    font-weight: 500;
    color: rgba(255,255,255,0.75);
}

.cq-field input,
.cq-field select,
.cq-field textarea {
    background: #141414;
    border: 1px solid rgba(255,255,255,0.12);
    border-radius: 8px;
    padding: 5px 12px;
    color: #ffffff;
    font-size: 13px;
    font-family: 'Inter', sans-serif;
    outline: none;
    transition: border-color 0.2s;
    width: 100%;
    box-sizing: border-box;
}

.cq-field input::placeholder,
.cq-field textarea::placeholder { color: rgba(255,255,255,0.35); }

.cq-field input:focus,
.cq-field select:focus,
.cq-field textarea:focus { border-color: #FFC107; }

.cq-field select {
    appearance: none;
    cursor: pointer;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8'%3E%3Cpath d='M1 1l5 5 5-5' stroke='%23FFC107' stroke-width='1.5' fill='none' stroke-linecap='round'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 12px center;
    padding-right: 32px;
}

.cq-upload {
    display: flex;
    gap: 0;
}
.cq-upload input {
    flex: 1;
    border-radius: 8px 0 0 8px;
}
.cq-upload-btn {
    background: #FFC107;
    color: #111;
    border: none;
    border-radius: 0 8px 8px 0;
    padding: 0 18px;
    font-size: 13px;
    font-weight: 700;
    cursor: pointer;
    transition: background 0.2s;
    flex-shrink: 0;
}
.cq-upload-btn:hover { background: #e0a800; }

.cq-field textarea { resize: none; }

.cq-submit-wrap { display: flex; justify-content: center; margin-top: 8px; }

.cq-submit-btn {
    background: #FFC107;
    color: #111;
    border: none;
    border-radius: 50px;
    padding: 14px 60px;
    font-size: 16px;
    font-weight: 700;
    cursor: pointer;
    transition: background 0.2s, transform 0.2s;
    font-family: 'Inter', sans-serif;
}
.cq-submit-btn:hover { background: #e0a800; transform: translateY(-2px); }


@media (max-width: 1024px) {
    .cq-wrap { grid-template-columns: 1fr; gap: 40px; padding: 0 30px; }
    .cq-row-4 { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 768px) {
    .cq-section { padding: 10vw 0; }
    .cq-wrap { padding: 0 5vw; }
    .cq-row-2,
    .cq-row-3,
    .cq-row-4 { grid-template-columns: 1fr; }
    .cq-form-title { font-size: 6vw; }
    .cq-step-title { font-size: 4vw; }
    .cq-step-text  { font-size: 3.5vw; }
}


.pg-section {
    background: #161616;
    padding: 80px 0;
}

.pg-wrap {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 60px;
    display: grid;
    grid-template-columns: 1.3fr 1fr;
    gap: 60px;
    align-items: start;
}

/* Left */
.pg-left { display: flex; flex-direction: column; gap: 18px; }

.pg-badge {
    display: inline-block;
    border: 1px solid #FFC107;
    color: #FFC107;
    padding: 5px 16px;
    border-radius: 50px;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 1.2px;
    text-transform: uppercase;
    width: fit-content;
}

.pg-title {
    font-size: 26px;
    font-weight: 800;
    color: #ffffff;
    line-height: 1.3;
}

.pg-text {
    font-size: 14px;
    line-height: 1.85;
    color: rgba(255,255,255,0.6);
    text-align: justify;
}

.pg-subtitle {
    font-size: 18px;
    font-weight: 700;
    color: #ffffff;
    text-align: justify;
}

.pg-list {
    display: flex;
    flex-direction: column;
    gap: 12px;
    padding-left: 20px;
    list-style: disc;
}

.pg-list li {
    font-size: 13px;
    line-height: 1.75;
    color: rgba(255,255,255,0.6);
    text-align: justify;
}

.pg-list li strong { color: #ffffff; }

/* Right */
.pg-right { display: flex; flex-direction: column; gap: 24px; }

.pg-steps-box {
    background: #1e1e1e;
    border-radius: 12px;
    padding: 28px 24px;
    display: flex;
    flex-direction: column;
    gap: 0;
}

.pg-steps-title {
    font-size: 17px;
    font-weight: 700;
    color: #ffffff;
    margin-bottom: 20px;
}

.pg-step-item {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    padding: 14px 0;
    border-bottom: 1px solid rgba(255,255,255,0.08);
}
.pg-step-item:last-child { border-bottom: none; }

.pg-step-num {
    font-size: 14px;
    font-weight: 700;
    color: #FFC107;
    flex-shrink: 0;
    min-width: 20px;
}

.pg-step-item p {
    font-size: 13px;
    line-height: 1.65;
    color: rgba(255,255,255,0.65);
}

/* CTA box */
.pg-cta-box {
    background: #1e1e1e;
    border-radius: 12px;
    padding: 28px 24px;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    gap: 8px;
}

.pg-cta-title {
    font-size: 18px;
    font-weight: 700;
    color: #ffffff;
}

.pg-cta-sub {
    font-size: 13px;
    color: rgba(255,255,255,0.55);
    margin-bottom: 8px;
}

.pg-cta-btn {
    display: inline-block;
    background: #FFC107;
    color: #111;
    font-size: 14px;
    font-weight: 700;
    padding: 12px 32px;
    border-radius: 50px;
    text-decoration: none;
    transition: background 0.2s, transform 0.2s;
}
.pg-cta-btn:hover { background: #e0a800; transform: translateY(-2px); }

/* Responsive */
@media (max-width: 1024px) {
    .pg-wrap { grid-template-columns: 1fr; padding: 0 30px; gap: 40px; }
}
@media (max-width: 768px) {
    .pg-section { padding: 40px 0; }
    .pg-wrap { padding: 0 20px; }
    .pg-title { font-size: 20px; }
    .pg-text, .pg-list li, .pg-step-item p { font-size: 14px; }
    .pg-subtitle { font-size: 16px; }
}


@media (max-width: 768px) {
    .product-testimonials-section { padding: 10vw 0; }

    /* Wrapper clips the sliding track */
    .testi-slider-wrap {
        overflow: hidden;
        width: 100%;
        padding-top: 55px;
        margin-bottom: 8vw;
    }


    .product-testimonials-section .product-container {
        padding: 0 4vw;
    }
    .product-testimonials-section .product-testimonials-header {
        padding: 0;
    }
    .product-testimonials-section .product-slider-nav {
        padding: 0;
    }

    /* Track slides horizontally */
    .product-testimonials-grid {
        display: flex;
        flex-wrap: nowrap;
        gap: 4vw;
        overflow: visible;
        scroll-snap-type: none;
        padding-top: 0;
        padding-bottom: 0;
        margin-bottom: 0;
        padding-left: 0;
        transition: transform 0.4s ease;
        will-change: transform;
    }

    .product-testimonial-card {
        flex: 0 0 100%;
        width: 100%;
        padding: 12vw 5vw 4vw;
        margin-top: 0;
        max-height: none;
        border-radius: 6vw;
    }

    .product-testimonial-text { font-size: 4vw; }
    .product-testimonial-name { font-size: 5vw; }
    .product-testimonial-role { font-size: 3.5vw; }
    .product-section-title    { font-size: 6vw; }
    .product-section-subtitle { font-size: 3.8vw; }
}


@media (max-width: 768px) {
    .cq-section  { padding: 10vw 0; }
    .cq-wrap     {
        grid-template-columns: 1fr;
        padding: 0 4.5vw;
        gap: 8vw;
    }

  
    .cq-step-title { font-size: 4.5vw; font-weight: 700; }
    .cq-step-text  { font-size: 3.8vw; line-height: 1.8; }
    .cq-num        { font-size: 4.5vw; }
    .cq-steps      { gap: 7vw; }

  
    .cq-form-box   { padding: 6vw 4.5vw; border-radius: 12px; }
    .cq-form-title { font-size: 6vw; font-weight: 800; margin-bottom: 6vw; }

   
    .cq-row-2,
    .cq-row-3 { grid-template-columns: 1fr; gap: 4vw; }

   
    .cq-row-4 { grid-template-columns: 1fr 1fr; gap: 3.5vw 4vw; }

  
    .cq-row-mat-col { grid-template-columns: 1fr 1fr !important; gap: 3.5vw 4vw; }

    
    .cq-row-addon-qty { grid-template-columns: 1fr 1fr !important; gap: 3.5vw 4vw; }

    /* Upload — full width */
    .cq-row-upload-full { grid-template-columns: 1fr; gap: 4vw; }

    
    .cq-field label {
        font-size: 3.5vw;
        font-weight: 600;
        color: rgba(255,255,255,0.85);
        margin-bottom: 1.5vw;
    }

    
    .cq-field input,
    .cq-field select,
    .cq-field textarea {
        font-size: 3.8vw;
        padding: 3vw 3.5vw;
        border-radius: 8px;
    }

    
    .cq-upload-btn {
        font-size: 3.8vw;
        padding: 3vw 5vw;
        font-weight: 700;
    }

    
    .cq-submit-btn {
        font-size: 4.5vw;
        padding: 4vw 0;
        width: 100%;
        border-radius: 50px;
        font-weight: 700;
    }
}


.pg-accordion-btn {
    display: flex;
    align-items: center;
    gap: 10px;
    width: 100%;
    background: none;
    border: none;
    color: inherit;
    font-family: inherit;
    cursor: default;
    padding: 0;
    pointer-events: none;
}
.pg-accordion-icon { display: none; }
.pg-accordion-q {
    font-size: 13px;
    line-height: 1.65;
    color: rgba(255,255,255,0.65);
    flex: 1;
    text-align: left;
}
.pg-accordion-body { display: block; padding: 0 0 0 20px; }
.pg-accordion-body p {
    font-size: 13px;
    line-height: 1.65;
    color: rgba(255,255,255,0.65);
    margin-top: 6px;
}


@media (max-width: 768px) {
    .pg-section { display: block !important; padding: 10vw 0; }
    .pg-wrap {
        grid-template-columns: 1fr;
        padding: 0 4.5vw;
        gap: 8vw;
    }
    .pg-left { display: none; }   /* hide article text on mobile */

    .pg-steps-box {
        padding: 5vw 4vw;
        border-radius: 12px;
    }
    .pg-steps-title {
        font-size: 5vw;
        font-weight: 800;
        margin-bottom: 4vw;
    }

    .pg-step-item {
        border-bottom: 1px solid rgba(255,255,255,0.1);
        padding: 0;
        display: flex;
        flex-direction: column;
    }
    .pg-step-item:last-child { border-bottom: none; }

    .pg-accordion-btn {
        pointer-events: all;
        cursor: pointer;
        padding: 4vw 0;
        gap: 3vw;
        display: flex;
        align-items: center;
        width: 100%;
    }

    .pg-step-num {
        font-size: 4vw;
        font-weight: 700;
        color: #FFC107;
        flex-shrink: 0;
    }

    .pg-accordion-q {
        font-size: 4vw;
        color: #ffffff;
        font-weight: 500;
        flex: 1;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        text-align: left;
    }

    .pg-accordion-item.open .pg-accordion-icon {
        color: #FFC107;
    }
    .pg-accordion-icon {
        display: block;
        font-size: 5vw;
        color: rgba(255,255,255,0.6);
        margin-left: auto;
        flex-shrink: 0;
        transition: color 0.25s;
    }

    .pg-accordion-body {
        display: none;
        padding: 0 0 4vw 7vw;
    }
    .pg-accordion-body p {
        font-size: 3.8vw;
        line-height: 1.8;
        color: rgba(255,255,255,0.6);
        margin-top: 0;
    }
    .pg-accordion-item.open .pg-accordion-body {
        display: block;
    }

  
    .pg-cta-box { padding: 5vw; border-radius: 12px; }
    .pg-cta-title { font-size: 5vw; }
    .pg-cta-sub   { font-size: 3.8vw; }
    .pg-cta-btn   { font-size: 4vw; padding: 3vw 7vw; }
}


</style>

<section class="cp-hero">

    <div class="cp-wrap">

        <!-- Breadcrumb -->
        <nav class="cp-bc">
            <a href="#"><i class="fas fa-home"></i></a>
            <span class="cp-bc-sep">&raquo;</span>
            <a href="#">Box By Style</a>
            <span class="cp-bc-sep">&raquo;</span>
            <span>Lid & Base</span>
        </nav>

        <!-- Two-column: text left, image right -->
        <div class="cp-hero-grid">

            <!-- LEFT -->
            <div class="cp-hero-text">
                <h1 class="cp-h1">
                    <span class="cp-yellow">Lid & Base</span> Rigid Boxes
                </h1>
                <p class="cp-desc">
                    The timeless two-piece rigid box design that exudes luxury and
                    sophistication. Featuring a separate lid and base, it creates a
                    premium unboxing experience with a satisfying reveal. Ideal for
                    high-end retail products, luxury gifts, and exclusive collectibles,
                    this style combines elegance, durability, and lasting brand appeal.
                </p>
                <a href="#" class="cp-cta">Design Custom Boxes</a>
            </div>

            <!-- RIGHT -->
            <div class="cp-hero-img">
                <img
                    src="./d0c351c2ffcf90b259b75dffee3b9432dfeba2b5 (2).png"
                    alt="Lid and Base Rigid Boxes"
                    class="cp-hero-photo"
                >
            </div>

        </div>

        <!-- Bottom bar: stars left | trust logos marquee right -->
        <div class="cp-hero-bar">

            <div class="cp-stars-group">
                <div class="cp-stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="#" class="cp-rating-link">5.0 Google Reviews</a>
            </div>

            <!-- Logo strip — scroll right to left -->
            <div class="cp-logos">
                <div class="cp-logos-inner">
                    <img src="./Group (5).png"      alt="logo" class="cp-logo-img">
                    <img src="./Group (6).png"       alt="logo" class="cp-logo-img">
                    <img src="./Group (7).png"       alt="logo" class="cp-logo-img">
                    <img src="./356354463_4f4644b6-0228-4c73-b750-cddfd26d083b 2 (1).png" alt="logo" class="cp-logo-img">
                    <img src="./Group (7).png"       alt="logo" class="cp-logo-img">
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ================================================
     PRODUCTS SECTION
     ================================================ -->
<section class="cp-products">
    <div class="cp-wrap">

        <div class="cp-sec-head">
            <span class="cp-badge">OUR PRODUCTS</span>
            <h2 class="cp-sec-title">Lid & Base Boxes Collection</h2>
            <p class="cp-sec-sub">Browse our ready-to-order lid and base rigid boxes, fully customizable to your brand.</p>
        </div>

        <div class="cp-grid">
            <div class="cp-card"><div class="cp-card-img"></div><p class="cp-card-name">Vino Luxury Gift Box</p></div>
            <div class="cp-card"><div class="cp-card-img"></div><p class="cp-card-name">Vino Luxury Gift Box</p></div>
            <div class="cp-card"><div class="cp-card-img"></div><p class="cp-card-name">Vino Luxury Gift Box</p></div>
            <div class="cp-card"><div class="cp-card-img"></div><p class="cp-card-name">Vino Luxury Gift Box</p></div>
            <div class="cp-card"><div class="cp-card-img"></div><p class="cp-card-name">Vino Luxury Gift Box</p></div>
            <div class="cp-card"><div class="cp-card-img"></div><p class="cp-card-name">Vino Luxury Gift Box</p></div>
            <div class="cp-card"><div class="cp-card-img"></div><p class="cp-card-name">Vino Luxury Gift Box</p></div>
            <div class="cp-card"><div class="cp-card-img"></div><p class="cp-card-name">Vino Luxury Gift Box</p></div>
        </div>

        <div class="cp-center">
            <a href="#" class="cp-cta">Explore All Products</a>
        </div>

    </div>
</section>

<!-- ================================================
     WHY CHOOSE SECTION
     ================================================ -->
<section class="cp-why">
    <div class="cp-wrap">
        <div class="cp-why-grid">

            <div class="cp-why-text">
                <span class="cp-badge">OVERVIEW</span>
                <h2 class="cp-why-title">Why Choose Lid & Base?</h2>
                <p class="cp-why-para">
                    This style offers the ultimate unboxing experience. The lift-off lid creates a
                    moment of anticipation, while the robust construction speaks of quality. Ideal
                    for brands that want to make a lasting impression.
                </p>
                <p class="cp-why-para">
                    We use premium materials like velvet, leatherette, and textured paper to wrap
                    both lid and base. Add gold foil stamping or embossing for that extra luxury touch.
                </p>
            </div>

            <div class="cp-why-img">
                <a href="#" class="cp-cta cp-why-quote-btn">Get a Quote</a>
                <div class="cp-why-photo-wrap">
                    <img src="./c903f3f775a50e5b56122d5a307158962172018e (1).jpg" alt="Why Choose" class="cp-why-photo">
                </div>
            </div>

        </div>
    </div>
</section>

   
        <section class="product-testimonials-section">
            <div class="product-container">
                <div class="product-testimonials-header">
                    <div class="product-sec-badge">TESTIMONIALS</div>
                    <h2 class="product-section-title">What Our Customers Say</h2>
                    <p class="product-section-subtitle">But don't just take our word for it, read what our clients say.</p>
                </div>
                
                <div class="testi-slider-wrap">
                <div class="product-testimonials-grid" id="testimonialsGrid">
                    <!-- Original 3 Cards -->
                    <div class="product-testimonial-card">
                        <div class="product-avatar-wrap">
                            <img src="./c903f3f775a50e5b56122d5a307158962172018e (1).jpg" alt="Alice" class="product-avatar">
                        </div>
                        <p class="product-testimonial-text">"Outstanding quality! The Premium Boxes team provided exactly what we needed for our new product line. The structural integrity is flawless."</p>
                        <div class="product-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <h4 class="product-testimonial-name">Alice Smith</h4>
                        <span class="product-testimonial-role">CEO, Beauty Brand</span>
                    </div>
                    
                    <div class="product-testimonial-card">
                        <div class="product-avatar-wrap">
                            <img src="./c903f3f775a50e5b56122d5a307158962172018e (1).jpg" alt="John" class="product-avatar">
                        </div>
                        <p class="product-testimonial-text">"Their customer service is unmatched. From design to delivery, they kept us informed. The boxes arrived on time and looked phenomenal."</p>
                        <div class="product-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <h4 class="product-testimonial-name">John Davis</h4>
                        <span class="product-testimonial-role">Marketing Director</span>
                    </div>
                    
                    <div class="product-testimonial-card">
                        <div class="product-avatar-wrap">
                            <img src="./c903f3f775a50e5b56122d5a307158962172018e (1).jpg" alt="Sarah" class="product-avatar">
                        </div>
                        <p class="product-testimonial-text">"We've seen a noticeable increase in unboxing videos from our customers since switching to these custom mailers. Highly recommend!"</p>
                        <div class="product-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <h4 class="product-testimonial-name">Sarah Jenkins</h4>
                        <span class="product-testimonial-role">E-commerce Owner</span>
                    </div>

                    <!-- Duplicated 3 Cards for slider effect -->
                    <div class="product-testimonial-card">
                        <div class="product-avatar-wrap">
                            <img src="./c903f3f775a50e5b56122d5a307158962172018e (1).jpg" alt="Mike" class="product-avatar">
                        </div>
                        <p class="product-testimonial-text">"The print quality is extraordinary. Our branding has never looked sharper and more professional on our packaging."</p>
                        <div class="product-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <h4 class="product-testimonial-name">Mike Peterson</h4>
                        <span class="product-testimonial-role">Creative Lead</span>
                    </div>

                    <div class="product-testimonial-card">
                        <div class="product-avatar-wrap">
                            <img src="./c903f3f775a50e5b56122d5a307158962172018e (1).jpg" alt="Elena" class="product-avatar">
                        </div>
                        <p class="product-testimonial-text">"We saved so much time with their quick turnaround. The rigid boxes elevate our jewelry brand to the next level."</p>
                        <div class="product-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <h4 class="product-testimonial-name">Elena Rodriguez</h4>
                        <span class="product-testimonial-role">Founder</span>
                    </div>

                    <div class="product-testimonial-card">
                        <div class="product-avatar-wrap">
                            <img src="./c903f3f775a50e5b56122d5a307158962172018e (1).jpg" alt="David" class="product-avatar">
                        </div>
                        <p class="product-testimonial-text">"Unbelievable precision and sturdiness. The soft-touch lamination on these boxes feels incredibly premium."</p>
                        <div class="product-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <h4 class="product-testimonial-name">David Chen</h4>
                        <span class="product-testimonial-role">Product Manager</span>
                    </div>
                </div>
                </div><!-- /.testi-slider-wrap -->
                
                <div class="product-slider-nav">
                    <button class="product-nav-btn" id="prevTestimonialBtn"><i class="fas fa-chevron-left"></i></button>
                    <button class="product-nav-btn" id="nextTestimonialBtn"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        </section>


<section class="cq-section">
    <div class="cq-wrap">

        <!-- Left: steps -->
        <div class="cq-steps">
            <div class="cq-step">
                <span class="cq-num">01.</span>
                <div>
                    <h4 class="cq-step-title">Submit Your Brief</h4>
                    <p class="cq-step-text">Share your product dimensions, quantities, and vision. We respond within 24 hours with initial recommendations and a structural concept tailored to your needs.</p>
                </div>
            </div>
            <div class="cq-step">
                <span class="cq-num">02.</span>
                <div>
                    <h4 class="cq-step-title">Design & Quote</h4>
                    <p class="cq-step-text">You receive a structural die line, finish spec sheet, and transparent pricing. Revisions are included at no extra cost — no surprises, no hidden fees.</p>
                </div>
            </div>
            <div class="cq-step">
                <span class="cq-num">03.</span>
                <div>
                    <h4 class="cq-step-title">Approve & Produce</h4>
                    <p class="cq-step-text">Once artwork is approved, production begins immediately in our certified manufacturing facility. Pre-production physical samples available before full run.</p>
                </div>
            </div>
            <div class="cq-step">
                <span class="cq-num">04.</span>
                <div>
                    <h4 class="cq-step-title">Ship & Arrive</h4>
                    <p class="cq-step-text">Your order ships with full tracking and quality documentation. Custom orders take approximately 15 days production, plus shipping.</p>
                </div>
            </div>
        </div>

      
        <div class="cq-form-box">
            <h2 class="cq-form-title">Request a Free Quote</h2>
            <form class="cq-form">

                <div class="cq-row cq-row-2">
                    <div class="cq-field">
                        <label>Name *</label>
                        <input type="text" placeholder="Enter your name">
                    </div>
                    <div class="cq-field">
                        <label>Email Address *</label>
                        <input type="email" placeholder="Enter your email">
                    </div>
                </div>

                <div class="cq-row cq-row-2">
                    <div class="cq-field">
                        <label>Phone *</label>
                        <input type="tel" placeholder="Enter your number">
                    </div>
                    <div class="cq-field">
                        <label>Physical Address</label>
                        <input type="text" placeholder="Enter your address">
                    </div>
                </div>

                <div class="cq-row cq-row-4">
                    <div class="cq-field">
                        <label>Width *</label>
                        <input type="text" placeholder="Width">
                    </div>
                    <div class="cq-field">
                        <label>Length *</label>
                        <input type="text" placeholder="Length">
                    </div>
                    <div class="cq-field">
                        <label>Depth *</label>
                        <input type="text" placeholder="Depth">
                    </div>
                    <div class="cq-field">
                        <label>Units *</label>
                        <select><option>mm</option><option>cm</option><option>inches</option></select>
                    </div>
                </div>

                <div class="cq-row cq-row-3 cq-row-mat-col">
                    <div class="cq-field">
                        <label>Select Material</label>
                        <select><option>Choose option</option></select>
                    </div>
                    <div class="cq-field">
                        <label>Color Options</label>
                        <select><option>Choose option</option></select>
                    </div>
                </div>

                <div class="cq-row cq-row-2 cq-row-addon-qty">
                    <div class="cq-field">
                        <label>Addons</label>
                        <select><option>Choose option</option></select>
                    </div>
                    <div class="cq-field">
                        <label>Quantity *</label>
                        <input type="text" placeholder="Enter quantity">
                    </div>
                </div>

                <div class="cq-row cq-row-upload-full">
                    <div class="cq-field">
                        <label>Upload File Here</label>
                        <div class="cq-upload">
                            <input type="text" placeholder="No file choosen" readonly>
                            <button type="button" class="cq-upload-btn">Upload</button>
                        </div>
                    </div>
                </div>

                <div class="cq-row">
                    <div class="cq-field cq-full">
                        <label>Message</label>
                        <textarea placeholder="Enter your message" rows="2"></textarea>
                    </div>
                </div>

                <div class="cq-submit-wrap">
                    <button type="button" class="cq-submit-btn">Instant Quote</button>
                </div>

            </form>
        </div>

    </div>
</section>


<section class="pg-section">
    <div class="pg-wrap">

        <!-- Left: article content -->
        <div class="pg-left">
            <span class="pg-badge">PACKAGING GUIDE</span>
            <h2 class="pg-title">Everything you need to know about custom boxes</h2>
            <p class="pg-text">Custom packaging is one of the most powerful tools a brand can use to create a lasting impression. Research shows that 72% of consumers say that packaging design influences their purchase decision, and 40% share photos of exciting unboxing experiences on social media.</p>
            <p class="pg-text">At KayPackaging, we believe every business — no matter the size — deserves packaging that reflects the quality of what's inside. Whether you're a solo founder shipping your first 10 orders or a growing brand sending thousands of packages per week, our custom box solutions are built to scale with you.</p>

            <h3 class="pg-subtitle">What to consider when choosing custom packaging:</h3>
            <ul class="pg-list">
                <li><strong>Box style</strong> — mailer, rigid, folding carton, or corrugated shipping box depending on product type and fragility</li>
                <li><strong>Size</strong> — always measure your product first, then add 1–2cm clearance on each side for a snug fit</li>
                <li><strong>Material</strong> — E-flute corrugated for mailers, SBS paperboard for cosmetics, kraft for eco-friendly positioning</li>
                <li><strong>Finish</strong> — matte gives a premium feel, gloss increases vibrancy, soft touch adds texture, foil elevates luxury perception</li>
                <li><strong>Quantity</strong> — higher quantities dramatically reduce per-unit cost; order samples first to validate quality</li>
            </ul>
        </div>

        <!-- Right: steps + CTA -->
        <div class="pg-right">
            <div class="pg-steps-box">
                <h3 class="pg-steps-title">How to order in 4 steps</h3>

                <div class="pg-step-item pg-accordion-item">
                    <button class="pg-accordion-btn">
                        <span class="pg-step-num">1.</span>
                        <span class="pg-accordion-q">What is your minimum order quantity?</span>
                        <span class="pg-accordion-icon">+</span>
                    </button>
                    <div class="pg-accordion-body">
                        <p>Choose your box type and configure size, quantity, and finish</p>
                    </div>
                </div>

                <div class="pg-step-item pg-accordion-item">
                    <button class="pg-accordion-btn">
                        <span class="pg-step-num">2.</span>
                        <span class="pg-accordion-q">Can I customize the size and design?</span>
                        <span class="pg-accordion-icon">+</span>
                    </button>
                    <div class="pg-accordion-body">
                        <p>Upload your design or request free artwork from our design team</p>
                    </div>
                </div>

                <div class="pg-step-item pg-accordion-item">
                    <button class="pg-accordion-btn">
                        <span class="pg-step-num">3.</span>
                        <span class="pg-accordion-q">How long does production take?</span>
                        <span class="pg-accordion-icon">+</span>
                    </button>
                    <div class="pg-accordion-body">
                        <p>Approve your digital proof — sent within 24 hours of ordering</p>
                    </div>
                </div>

                <div class="pg-step-item pg-accordion-item">
                    <button class="pg-accordion-btn">
                        <span class="pg-step-num">4.</span>
                        <span class="pg-accordion-q">Do you offer free design support?</span>
                        <span class="pg-accordion-icon">+</span>
                    </button>
                    <div class="pg-accordion-body">
                        <p>Receive your custom boxes in 7 business days, shipped free</p>
                    </div>
                </div>

            </div>

            <div class="pg-cta-box">
                <h4 class="pg-cta-title">Need help choosing?</h4>
                <p class="pg-cta-sub">Our team responds within 2 hours</p>
                <a href="#" class="pg-cta-btn">Chat with an expert</a>
            </div>
        </div>

    </div>
</section>

document.addEventListener('DOMContentLoaded', function () {

    // ── Product cards ──
    const cpCards = document.querySelectorAll('.cp-card');
    cpCards.forEach(function (card) {
        card.addEventListener('click', function () {
            window.location.href = 'product-page.html';
        });
    });

    // ── Testimonials slider — desktop: scroll-based | mobile: 1-card JS ──
    const testimonialsGrid = document.getElementById('testimonialsGrid');
    const prevTestimonialBtn = document.getElementById('prevTestimonialBtn');
    const nextTestimonialBtn = document.getElementById('nextTestimonialBtn');

    if (testimonialsGrid && prevTestimonialBtn && nextTestimonialBtn) {
        let currentIdx = 0;

        function isMobile() {
            return window.innerWidth <= 768;
        }

        function getCards() {
            return testimonialsGrid.querySelectorAll('.product-testimonial-card');
        }

        function slideTo(idx) {
            const cards = getCards();
            if (!cards.length) return;
            currentIdx = Math.max(0, Math.min(idx, cards.length - 1));
            const cardWidth = cards[0].offsetWidth;
            const gap = window.innerWidth * 0.04; // 4vw
            testimonialsGrid.style.transform = 'translateX(-' + (currentIdx * (cardWidth + gap)) + 'px)';
        }

        prevTestimonialBtn.addEventListener('click', function () {
            if (isMobile()) {
                slideTo(currentIdx - 1);
            } else {
                const card = testimonialsGrid.querySelector('.product-testimonial-card');
                const scrollAmount = card ? (card.offsetWidth + 30) : 300;
                testimonialsGrid.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
            }
        });

        nextTestimonialBtn.addEventListener('click', function () {
            if (isMobile()) {
                slideTo(currentIdx + 1);
            } else {
                const card = testimonialsGrid.querySelector('.product-testimonial-card');
                const scrollAmount = card ? (card.offsetWidth + 30) : 300;
                testimonialsGrid.scrollBy({ left: scrollAmount, behavior: 'smooth' });
            }
        });

        window.addEventListener('resize', function () {
            if (!isMobile()) {
                currentIdx = 0;
                testimonialsGrid.style.transform = '';
            }
        });
    }

  
    const cpTrack  = document.getElementById('cpTestiTrack');
    const cpPrev   = document.getElementById('cpTestiPrev');
    const cpNext   = document.getElementById('cpTestiNext');

    if (cpTrack && cpPrev && cpNext) {
        const cards  = cpTrack.querySelectorAll('.cp-testi-card');
        const total  = cards.length;
        let idx = 0;

        function updateSlide() {
            const cardW = cards[0].getBoundingClientRect().width + 24;
            cpTrack.style.transform = 'translateX(-' + (idx * cardW) + 'px)';
        }

        cpNext.addEventListener('click', function () {
            if (idx < total - 3) { idx++; updateSlide(); }
        });
        cpPrev.addEventListener('click', function () {
            if (idx > 0) { idx--; updateSlide(); }
        });
    }

  
    document.querySelectorAll('.pg-accordion-btn').forEach(function(btn) {
        btn.addEventListener('click', function() {
            if (window.innerWidth > 768) return;
            var item = btn.closest('.pg-accordion-item');
            var isOpen = item.classList.contains('open');

            // close all, reset icons to +
            document.querySelectorAll('.pg-accordion-item').forEach(function(i) {
                i.classList.remove('open');
                var icon = i.querySelector('.pg-accordion-icon');
                if (icon) {
                    icon.innerHTML = '+';
                    icon.style.color = 'rgba(255,255,255,0.6)';
                }
            });

          
            if (!isOpen) {
                item.classList.add('open');
                var icon = btn.querySelector('.pg-accordion-icon');
                if (icon) {
                    icon.innerHTML = '&#8722;';
                    icon.style.color = '#FFC107';
                }
            }
        });
    });

});



