/* ============================================================
   PRODUCT PAGE VARIABLES & FOUNDATION
   ============================================================ */

:root {
    --product-bg: #161616;
    --product-bg-card: #222222;
    --product-gold: #FFC107;
    /* Or matching the yellow from Figma */
    --product-gold-hover: #E0A800;
    --product-text-main: #FFFFFF;
    --product-text-muted: rgba(255, 255, 255, 0.7);
    --product-border: rgba(255, 255, 255, 0.1);
    --product-font: 'Inter', sans-serif;
    --product-container-max: 1200px;
}

body {
    margin: 0;
    padding: 0;
    background-color: var(--product-bg);
    color: var(--product-text-main);
    font-family: var(--product-font);
}

.product-wrapper {
    width: 100%;
    min-height: 100vh;
    background-color: var(--product-bg);
    overflow-x: hidden;
}

.product-container {
    max-width: var(--product-container-max);
    margin: 0 auto;
    padding: 0 50px;
}

/* Base Typography */
h1,
h2,
h3,
h4,
h5,
h6,
p {
    margin: 0;
    padding: 0;
}

ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

a {
    text-decoration: none;
    color: inherit;
}

/* ============================================================
   HERO SECTION
   ============================================================ */
.product-hero-section {
    padding: 75px 0;
}

.product-hero-grid {
    display: grid;
    grid-template-columns: 1.1fr 0.9fr;
    gap: 62.5px;
    align-items: start;
}

/* Breadcrumbs */
.product-breadcrumbs {
    display: flex;
    align-items: center;
    gap: 12.5px;
    font-size: 16.2px;
    color: var(--product-text-muted);
    margin-bottom: 50px;
}

.product-breadcrumbs a {
    color: var(--product-text-muted);
    transition: color 0.3s ease;
    text-decoration: none;
}

.product-breadcrumbs a:first-of-type {
    color: var(--product-gold);
}

.product-breadcrumbs a:hover {
    color: var(--product-gold);
}

.product-bc-sep {
    font-size: 15px;
}

.product-bc-active {
    color: var(--product-text-muted);
}

/* Images */
.product-hero-images {
    display: flex;
    flex-direction: column;
    gap: 25px;
}

.product-main-img-wrap {
    width: 92%;
    margin: 0 auto;
    border-radius: 10px;
    overflow: hidden;
    background-color: var(--product-bg-card);
    aspect-ratio: 5 / 4;
}

.product-main-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.product-thumbnails {
    display: flex;
    justify-content: center;
    gap: 18.8px;
}

.product-thumb {
    width: 100px;
    height: 100px;
    border-radius: 10px;
    overflow: hidden;
    cursor: pointer;
    border: 2.5px solid transparent;
    transition: all 0.3s ease;
}

.product-thumb.active,
.product-thumb:hover {
    border-color: var(--product-gold);
}

.product-thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Trust Badges */
.product-reviews-badges {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 50px;
    margin-top: 25px;
}

.product-review-item {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.product-google-logo {
    display: flex;
    align-items: center;
}

.product-trustpilot-logo {
    display: flex;
    align-items: center;
}

.product-stars-wrap {
    display: flex;
    align-items: center;
    gap: 10px;
}

.product-rating-score {
    font-size: 17.5px;
    font-weight: 700;
}

.product-stars-icons {
    color: var(--product-gold);
    font-size: 15px;
    display: flex;
    gap: 2.5px;
}

.product-trustpilot-stars {
    display: flex;
    gap: 2.5px;
}

.tp-star {
    background-color: #00b67a;
    color: #fff;
    font-size: 12.5px;
    width: 22.5px;
    height: 22.5px;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Details */
.product-hero-details {
    display: flex;
    flex-direction: column;
}

.product-title-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 18.8px;
}

.product-title {
    font-size: 40px;
    font-weight: 700;
}

.product-status-badge {
    color: var(--product-gold);
    font-size: 17.5px;
    font-weight: 600;
}

.product-desc {
    font-size: 17.5px;
    line-height: 1.6;
    color: var(--product-text-muted);
    margin-bottom: 50px;
}

.product-read-more {
    color: var(--product-gold);
    font-weight: 600;
    text-decoration: none;
}

/* Quote Box */
.product-quote-box {
    background-color: var(--product-bg-card);
    border-radius: 15px;
    padding: 25px 25px 18px 25px;
}

.product-quote-title {
    text-align: center;
    font-size: 23px;
    font-weight: 600;
    margin-bottom: 15px;
}

/* Label + input wrapper inside quote form */
.product-qf-group {
    display: flex;
    flex-direction: column;
    gap: 6px;
    width: 100%;
}

.product-qf-label {
    font-size: 13px;
    font-weight: 500;
    color: rgba(255,255,255,0.80);
    font-family: var(--product-font);
}

/* Label + input wrapper — desktop: transparent passthrough, mobile: flex column */
.pf-wrap {
    display: contents; /* on desktop, acts as if the wrapper doesn't exist */
}

/* Mobile labels — hidden on desktop */
.pf-mob-label {
    display: none;
    font-size: 13px;
    font-weight: 500;
    color: rgba(255,255,255,0.80);
    font-family: var(--product-font);
    margin-bottom: 4px;
}

.product-form-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
    margin-bottom: 37.5px;
}

.product-form-group {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.product-form-group.span-2 {
    grid-column: span 2;
}

.product-form-group label {
    font-size: 17.5px;
    color: var(--product-text-muted);
}

.product-form-group input,
.product-form-group select {
    background-color: rgba(0, 0, 0, 0.2);
    border: 1px solid var(--product-border);
    border-radius: 7.5px;
    padding: 15px 18.8px;
    color: var(--product-text-main);
    font-family: var(--product-font);
    font-size: 17.5px;
    outline: none;
    transition: border-color 0.3s ease;
}

.product-form-group select {
    appearance: none;
    cursor: pointer;
}

.product-form-group input:focus,
.product-form-group select:focus {
    border-color: var(--product-gold);
}

/* New Hero Form Layout */
.product-form-row {
    display: grid;
    gap: 14px;
    margin-bottom: 14px;
}

.product-form-row-3 {
    grid-template-columns: repeat(3, 1fr);
}

.product-form-row-4 {
    grid-template-columns: repeat(4, 1fr);
}

.product-form-row-2col {
    grid-template-columns: 1fr 1fr;
}

/* Options row — 2-col on desktop (Material | Printing) */
.product-form-row-options {
    grid-template-columns: repeat(2, 1fr);
}

/* Upload row — 3-col on desktop: Finishing | Quantity | Upload */
.product-form-row-upload {
    grid-template-columns: 1fr 1fr 1.5fr;
}

/* Ensure upload group fills its cell on desktop */
.product-form-row-upload .product-upload-group {
    display: flex;
    width: 100%;
    gap: 0;
}

.product-form-row-upload .product-upload-group input {
    flex: 1;
    min-width: 0;
}

.product-quote-form input,
.product-quote-form select,
.product-quote-form textarea {
    background-color: rgba(255, 255, 255, 0.04);
    border: 1px solid rgba(255, 255, 255, 0.15);
    border-radius: 10px;
    padding: 12px 10px;
    color: var(--product-text-main);
    font-family: var(--product-font);
    font-size: 12px;
    outline: none;
    transition: border-color 0.3s ease;
    width: 100%;
    box-sizing: border-box;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.product-quote-form input::placeholder,
.product-quote-form textarea::placeholder {
    color: rgba(255, 255, 255, 0.4);
    font-size: 12px;
}

.product-quote-form select {
    appearance: none;
    cursor: pointer;
    color: rgba(255, 255, 255, 0.5);
    background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='rgba(255,255,255,0.5)' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: right 14px center;
    background-size: 16px;
    padding-right: 36px;
}

.product-quote-form select option {
    background-color: var(--product-bg-card);
    color: var(--product-text-main);
}

.product-quote-form input:focus,
.product-quote-form select:focus,
.product-quote-form textarea:focus {
    border-color: var(--product-gold);
}

.product-upload-group {
    display: flex;
    gap: 0;
    width: 100%;
}

.product-upload-group input {
    flex: 1;
    min-width: 0;
    border-radius: 10px 0 0 10px;
}

.product-btn-upload {
    background-color: var(--product-gold);
    color: #111;
    border: none;
    border-radius: 0 10px 10px 0;
    padding: 0 22px;
    font-weight: 700;
    font-size: 15px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    white-space: nowrap;
    flex-shrink: 0;
}

.product-btn-upload:hover {
    background-color: var(--product-gold-hover);
}

.product-quote-form textarea {
    resize: vertical;
    min-height: 100px;
    white-space: normal;
    overflow: auto;
}

.product-submit-wrap {
    display: flex;
    justify-content: center;
    margin-top: 18px;
}

.product-btn-primary {
    width: 100%;
    background-color: var(--product-gold);
    color: #111;
    border: none;
    border-radius: 62.5px;
    padding: 18.8px 37.5px;
    font-size: 20px;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.product-btn-primary:hover {
    background-color: var(--product-gold-hover);
}

/* ============================================================
   INFO TABS SECTION
   ============================================================ */
.product-info-section {
    padding: 25px 0 75px;
}

.product-tabs-wrapper {
    border-bottom: 1px solid var(--product-border);
    margin-bottom: 50px;
    overflow-x: auto;
    scrollbar-width: none;
}

.product-tabs-wrapper::-webkit-scrollbar {
    display: none;
}

.product-tabs-nav {
    display: flex;
    gap: 100px;
    white-space: nowrap;
    list-style: none;
    margin: 0;
    padding: 0;
}

.product-tab-item {
    font-size: 20px;
    font-weight: 500;
    color: var(--product-text-muted);
    padding: 18.8px 0;
    cursor: pointer;
    position: relative;
    transition: color 0.3s ease;
}

.product-tab-item:hover {
    color: var(--product-text-main);
}

.product-tab-item.active {
    color: var(--product-gold);
}

.product-tab-item.active::after {
    content: '';
    position: absolute;
    bottom: -1px;
    left: 0;
    width: 100%;
    height: 2.5px;
    background-color: var(--product-gold);
}

.product-tab-content {
    width: 100%;
}

.product-info-heading {
    font-size: 30px;
    font-weight: 700;
    margin-bottom: 25px;
}

.product-info-text {
    font-size: 20px;
    line-height: 1.8;
    color: var(--product-text-muted);
    margin-bottom: 37.5px;
}

.product-info-subheading {
    font-size: 25px;
    font-weight: 600;
    margin-bottom: 25px;
}

.product-info-list {
    display: flex;
    flex-direction: column;
    gap: 18.8px;
}

.product-info-list li {
    font-size: 20px;
    line-height: 1.6;
    color: var(--product-text-muted);
    position: relative;
    padding-left: 25px;
}

.product-info-list li::before {
    content: '•';
    color: var(--product-gold);
    position: absolute;
    left: 0;
    top: 0;
}

.product-info-list li strong {
    color: var(--product-text-main);
}

/* ============================================================
   CUSTOMIZE YOUR BOX SECTION
   ============================================================ */
.product-customize-section {
    padding: 75px 0;
}

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

.product-outline-badge:hover {
    background-color: var(--product-gold);
    color: #111;
}

.product-section-title {
    font-size: 40px;
    font-weight: 700;
    margin-bottom: 18.8px;
}

.product-section-subtitle {
    font-size: 20px;
    color: var(--product-text-muted);
}

.product-customize-filters {
    display: flex;
    justify-content: center;
    gap: 18.8px;
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
    font-size: 17.5px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s ease;
}

.product-filter-btn:hover {
    background-color: var(--product-gold);
    color: #111;
    border-color: var(--product-gold);
}

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
    transform: translateY(-6.2px);
    border-color: var(--product-gold);
}

.material-img-placeholder {
    flex: 1;
    background-color: #2a2a2a;
}

.material-title-bar {
    padding: 15px 10px;
    text-align: center;
    font-size: 15px;
    font-weight: 600;
    color: #fff;
}

/* ============================================================
   TESTIMONIALS SECTION
   ============================================================ */
.product-testimonials-section {
    padding: 100px 0;
    background-color: #111111;
}

.product-testimonials-header {
    text-align: center;
    margin-bottom: 87.5px;
}

.product-sec-badge {
    display: inline-block;
    color: var(--product-gold);
    border: 1px solid var(--product-gold);
    padding: 6.2px 18.8px;
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
    padding-bottom: 20px;
}

.product-testimonials-grid::-webkit-scrollbar {
    display: none;
}

.product-testimonial-card {
    background-color: var(--product-bg-card);
    border-radius: 15px;
    padding: 62.5px 37.5px 50px;
    text-align: center;
    position: relative;
    margin-top: 50px;
    border: 1px solid rgba(255, 193, 7, 0.3);
    flex: 0 0 calc(33.333% - 20px);
    scroll-snap-align: start;
    max-width: 298px;
    max-height: 298px;
}

.product-avatar-wrap {
    width: 87.5px;
    height: 87.5px;
    border-radius: 50%;
    overflow: hidden;
    position: absolute;
    top: -43.8px;
    left: 50%;
    transform: translateX(-50%);
    border: 3.8px solid var(--product-bg-card);
}

.product-avatar {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.product-testimonial-text {
    font-size: 18.8px;
    line-height: 1.8;
    color: var(--product-text-muted);
    font-style: italic;
    margin-bottom: 25px;
}

.product-stars {
    color: var(--product-gold);
    font-size: 17.5px;
    margin-bottom: 25px;
    display: flex;
    justify-content: center;
    gap: 6.2px;
}

.product-testimonial-name {
    font-size: 22.5px;
    font-weight: 700;
    color: var(--product-gold);
    margin-bottom: 6.2px;
}

.product-testimonial-role {
    font-size: 17.5px;
    color: rgba(255, 255, 255, 0.4);
}

.product-slider-nav {
    display: flex;
    justify-content: center;
    gap: 18.8px;
}

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

.product-nav-btn:hover {
    border-color: var(--product-gold);
    color: var(--product-gold);
}

/* ============================================================
   FINAL QUOTE SECTION
   ============================================================ */
.product-final-quote-section {
    padding: 80px 0;
    background-color: var(--product-bg-main);
}

/* Outer card — dark rounded box */
.product-final-quote-wrapper {
    display: grid;
    grid-template-columns: 1fr 323px;
    gap: 0;
    align-items: stretch;
    background-color: #1e1e1e;
    border-radius: 14px;
    overflow: hidden;
    border: 1px solid var(--product-border);
}

/* ── FORM AREA ── */
.product-final-quote-form-area {
    padding: 24px 24px 24px;
}

.product-final-quote-form-area .product-section-title {
    font-size: 20px;
    font-weight: 800;
    color: #ffffff;
    text-align: left;
    margin-bottom: 18px;
    line-height: 1.2;
}

/* 3-col label-above form grid */
.product-form-grid-3 {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px 28px;
    margin-bottom: 0;
}

.product-form-group {
    display: flex;
    flex-direction: column;
    gap: 5px;
}

.product-form-group label {
    font-size: 11px;
    font-weight: 500;
    color: rgba(255,255,255,0.75);
    font-family: var(--product-font);
}

.product-form-group input,
.product-form-group select {
    background-color: #141414;
    border: 1px solid #333333;
    border-radius: 6px;
    padding: 7px 10px;
    color: #ffffff;
    font-family: var(--product-font);
    font-size: 11.5px;
    outline: none;
    transition: border-color 0.25s;
    width: 100%;
    appearance: none;
    -webkit-appearance: none;
}

.product-form-group input::placeholder { color: #555; }
.product-form-group input:focus,
.product-form-group select:focus { border-color: var(--product-gold); }

.product-form-group select {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8'%3E%3Cpath d='M1 1l5 5 5-5' stroke='%23c9a84c' stroke-width='1.5' fill='none' stroke-linecap='round'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 12px center;
    padding-right: 34px;
    cursor: pointer;
}
.product-form-group select option { background-color: #1e1e1e; color: #fff; }

/* Box style (wider) + quantity row — 2 col, box style takes more space */
.product-form-row-box-qty {
    display: grid;
    grid-template-columns: 1.2fr 1fr;
    gap: 10px 14px;
    margin-top: 12px;
    margin-bottom: 0;
}

/* Span 2 columns */
.product-form-group.span-2 { grid-column: span 2; }

/* Message textarea */
.product-final-form textarea {
    width: 100%;
    max-width: 100%;
    background-color: #141414;
    border: 1px solid #333333;
    border-radius: 6px;
    padding: 7px 10px;
    color: #ffffff;
    font-family: var(--product-font);
    font-size: 11.5px;
    outline: none;
    resize: none;
    transition: border-color 0.25s;
    margin-bottom: 16px;
}
.product-final-form textarea::placeholder { color: #555; }
.product-final-form textarea:focus { border-color: var(--product-gold); }

/* Submit button — gold pill, centered, narrower */
.product-submit-btn {
    display: block;
    margin: 0 auto;
    background-color: var(--product-gold);
    color: #111111;
    border: none;
    border-radius: 50px;
    padding: 13px 36px;
    font-size: 14px;
    font-weight: 700;
    cursor: pointer;
    font-family: var(--product-font);
    transition: background-color 0.25s, transform 0.2s;
    letter-spacing: 0.3px;
    min-width: 160px;
    width: auto;
}
.product-submit-btn:hover {
    background-color: #e0bc60;
    transform: translateY(-2px);
}

/* ── IMAGE PANEL — equal gap all sides, image centered ── */
.product-final-quote-image {
    background-color: #1e1e1e;
    display: flex;
    align-items: center;
    justify-content: center;
    border-left: 1px solid var(--product-border);
    width: 323px;
    flex-shrink: 0;
    padding: 24px 32px;
}

/* Image box — fixed size, centered by flex parent */
.product-placeholder-img {
    margin-left: -92px;
    width: 220px;
    height: 260px;
    background-color: #2a2a2a;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    color: rgba(255,255,255,0.25);
    font-weight: 500;
    flex-shrink: 0;
}

/* ============================================================
   RELATED PRODUCTS SECTION
   ============================================================ */
.product-related-section {
    padding: 100px 0;
}

.product-related-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 25px;
}

.product-related-card {
    display: flex;
    flex-direction: column;
    gap: 18.8px;
}

.product-related-img {
    width: 100%;
    aspect-ratio: 1 / 1;
    background-color: var(--product-bg-card);
    border-radius: 10px;
    border: 1px solid rgba(212, 175, 55, 0.45);
    transition: border-color 0.25s;
}

.product-related-card:hover .product-related-img {
    border-color: var(--product-gold);
}

.product-related-title {
    font-size: 17.5px;
    font-weight: 500;
    color: var(--product-text-main);
    text-align: center;
}

/* ============================================================
   RESPONSIVE CONTAINERS
   ============================================================ */
@media (max-width: 1240px) {
    .product-container {
        padding: 0 0px;
    }

    .product-hero-grid {
        grid-template-columns: 1fr;
    }

    .product-materials-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .product-testimonials-grid {
        grid-template-columns: 1fr;
    }

    .product-final-quote-wrapper {
        grid-template-columns: 1fr;
    }

    .product-related-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

/* ============================================================
   MOBILE  ≤ 768px — vw based
   ============================================================ */
@media (max-width: 768px) {
    .product-container { padding: 0 4.5vw; }

    /* Hero section */
    .product-hero-section { padding: 6vw 0; }

    .product-hero-grid {
        grid-template-columns: 1fr;
        gap: 6vw;
    }

    /* Breadcrumbs */
    .product-breadcrumbs {
        display: none;
    }

    /* Main image — full width */
    .product-main-img-wrap {
        width: 100%;
        aspect-ratio: 4 / 3;
        border-radius: 12px;
    }

    /* Thumbnails — 4 in a row */
    .product-thumbnails {
        gap: 3vw;
        justify-content: center;
    }

    .product-thumb {
        width: 20vw;
        height: 20vw;
        border-radius: 8px;
    }

    /* Review badges */
    .product-reviews-badges {
        gap: 6vw;
        margin-top: 5vw;
        flex-wrap: wrap;
        justify-content: center;
    }

    /* Product details */
    .product-title { font-size: 7vw; }
    .product-desc  { font-size: 3.8vw; line-height: 1.75; }

    /* Quote box */
    .product-quote-box { padding: 5vw 4.5vw; border-radius: 12px; }
    .product-quote-title { font-size: 6vw; font-weight: 800; text-align: center; margin-bottom: 6vw; }

    /* Show labels on mobile */
    .pf-mob-label { display: block; font-size: 3.5vw; font-weight: 600; margin-bottom: 1.5vw; color: rgba(255,255,255,0.85); }

    /* pf-wrap becomes a real flex column on mobile */
    .pf-wrap {
        display: flex;
        flex-direction: column;
        width: 100%;
    }

    .pf-upload-wrap { width: 100%; }

    /* Name, Email, Phone — 1-col stacked */
    .product-form-row-3:not(.product-form-row-options) {
        display: grid;
        grid-template-columns: 1fr;
        gap: 4vw;
    }

    /* Width+Length / Depth+Units — 2-col pairs */
    .product-form-row-4 {
        display: grid;
        grid-template-columns: 1fr 1fr !important;
        gap: 3.5vw 4vw;
    }

    /* Material | Printing — 2-col on mobile */
    .product-form-row-options {
        display: grid !important;
        grid-template-columns: 1fr 1fr !important;
        gap: 3.5vw 4vw;
    }

    /* Upload row on mobile: Finishing | Quantity (2-col), Upload full width below */
    .product-form-row-upload {
        display: grid !important;
        grid-template-columns: 1fr 1fr !important;
        gap: 3.5vw 4vw;
    }
    .product-form-row-upload .pf-wrap {
        display: flex;
        flex-direction: column;
        width: 100%;
    }
    /* Upload spans full width on its own row */
    .product-form-row-upload .pf-upload-wrap {
        grid-column: 1 / -1;
    }    .product-upload-group {
        display: flex;
        gap: 0;
        width: 100%;
    }
    .product-upload-group input {
        flex: 1;
        border-radius: 8px 0 0 8px !important;
    }

    .product-quote-form input,
    .product-quote-form select,
    .product-quote-form textarea {
        font-size: 3.8vw;
        padding: 3vw 3.5vw;
        border-radius: 8px;
    }

    .product-btn-upload {
        font-size: 3.8vw;
        padding: 3vw 5vw;
        border-radius: 0 8px 8px 0;
        white-space: nowrap;
        flex-shrink: 0;
        font-weight: 700;
    }

    .product-btn-primary {
        font-size: 4.5vw;
        padding: 4vw 0;
        border-radius: 50px;
        width: 100%;
        font-weight: 700;
    }

    /* Final quote section */
    .product-final-quote-section { padding: 8vw 0; }

    .product-final-quote-wrapper {
        grid-template-columns: 1fr;
        border-radius: 12px;
    }

    .product-final-quote-image { display: none; }

    .product-final-quote-form-area { padding: 5vw; }

    .product-form-grid-3 {
        grid-template-columns: 1fr 1fr;
        gap: 3vw;
    }

    .product-form-group label { font-size: 3.5vw; }

    .product-form-group input,
    .product-form-group select {
        font-size: 3.8vw;
        padding: 2.5vw 3vw;
    }

    .product-final-form textarea {
        font-size: 3.8vw;
        padding: 2.5vw 3vw;
    }

    .product-submit-btn {
        font-size: 4vw;
        padding: 3.5vw 8vw;
    }

    /* ── INFO TABS — 2 visible at a time, one-by-one snap scroll ── */
    .product-tabs-wrapper {
        margin-bottom: 6vw;
        /* bleed to screen edges */
        margin-left: -4.5vw;
        margin-right: -4.5vw;
    }

    .product-tabs-nav {
        display: flex;
        flex-wrap: nowrap;
        gap: 3vw;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none;
        scroll-snap-type: x mandatory;
        padding-left: 4.5vw;
        padding-right: 4.5vw;
        padding-bottom: 0;
        /* let it grow as wide as needed */
        width: 100%;
        box-sizing: border-box;
    }
    .product-tabs-nav::-webkit-scrollbar { display: none; }

    .product-tab-item {
        flex: 0 0 44vw;
        width: 44vw;
        font-size: 4vw;
        padding: 3.5vw 2vw;
        white-space: nowrap;
        text-align: center;
        box-sizing: border-box;
        scroll-snap-align: start;
        scroll-snap-stop: always;
        list-style: none;
    }

    /* Tab content text */
    .product-info-heading {
        font-size: 6vw;
        line-height: 1.25;
        margin-bottom: 4vw;
        font-weight: 800;
        text-align: justify;
    }

    .product-info-text {
        font-size: 3.8vw;
        line-height: 1.8;
        text-align: justify;
    }

    .product-info-subheading {
        font-size: 5vw;
        font-weight: 700;
        margin: 5vw 0 3vw;
        text-align: justify;
    }

    .product-info-list {
        padding-left: 5vw;
    }

    .product-info-list li {
        font-size: 3.8vw;
        line-height: 1.8;
        margin-bottom: 2vw;
        text-align: justify;
    }

    /* Specs table */
    .product-specs-table {
        grid-template-columns: 35vw 1fr;
        font-size: 3.5vw;
    }

    .spec-label { padding: 3vw 3vw 3vw 0; font-size: 3.5vw; }
    .spec-value { padding: 3vw 0 3vw 3vw; font-size: 3.5vw; }

    /* FAQ accordion */
    .faq-question { font-size: 3.8vw; padding: 4vw; }
    .faq-answer p { font-size: 3.5vw; }

    /* Process grid — horizontal scroll carousel on mobile */
    .product-process-grid {
        display: flex;
        flex-direction: row;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none;
        gap: 4vw;
        padding-bottom: 2vw;
    }
    .product-process-grid::-webkit-scrollbar { display: none; }

    .process-card {
        flex: 0 0 80vw;
        min-width: 80vw;
        scroll-snap-align: start;
    }
    .process-title { font-size: 4.5vw; }
    .process-text  { font-size: 3.8vw; line-height: 1.7; }

    /* Review form — full width */
    .product-review-form-container {
        max-width: 100%;
        padding: 5vw;
    }
    .product-review-form-title { font-size: 5vw; }
    .product-review-rating-input label { font-size: 3.8vw; }
    .product-review-form-group label { font-size: 3.8vw; }
    .product-review-form input,
    .product-review-form textarea {
        font-size: 3.8vw;
        padding: 3vw;
    }

    /* Testimonials — 1 card at a time */
    .product-testimonials-section { padding: 10vw 0; }

    .product-testimonials-grid {
        gap: 0;
        scroll-snap-type: x mandatory;
        scroll-snap-stop: always;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        /* bleed full width */
        margin-left: -4.5vw;
        margin-right: -4.5vw;
        padding: 14vw 4.5vw 4vw;
    }

    .product-testimonial-card {
        flex: 0 0 91vw;   /* full container width */
        max-width: 91vw;
        max-height: none;
        scroll-snap-align: center;
        margin-top: 0;
        padding: 14vw 6vw 6vw;
    }

    .product-avatar-wrap {
        width: 18vw;
        height: 18vw;
        top: -9vw;
    }

    .product-testimonial-text { font-size: 4vw; line-height: 1.7; }
    .product-testimonial-name { font-size: 5vw; }
    .product-testimonial-role { font-size: 3.5vw; }
    .product-stars { font-size: 4vw; }

    /* Related products — horizontal scroll, 2 cards visible, swipe for more */
    .product-related-section { padding: 8vw 0; }

    .product-related-grid {
        display: flex;
        flex-wrap: nowrap;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        scroll-snap-type: x mandatory;
        scrollbar-width: none;
        gap: 4vw;
        /* bleed to screen edges */
        margin-left: -4.5vw;
        margin-right: -4.5vw;
        padding-left: 4.5vw;
        padding-right: 4.5vw;
        padding-bottom: 2vw;
        /* reset grid */
        grid-template-columns: unset;
    }
    .product-related-grid::-webkit-scrollbar { display: none; }

    .product-related-card {
        flex: 0 0 44vw;   /* 2 visible, 3rd peeks */
        width: 44vw;
        scroll-snap-align: start;
        scroll-snap-stop: always;
    }

    .product-related-title { font-size: 3.8vw; }

    /* Customize section — filter buttons horizontal scroll, 2 visible at a time */
    .product-customize-section { padding: 8vw 0; }

    .product-customize-filters {
        display: flex;
        flex-wrap: nowrap;
        justify-content: flex-start;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none;
        gap: 3vw;
        margin-bottom: 6vw;
        padding-bottom: 1vw;
        /* negative margin so buttons bleed to screen edge */
        margin-left: -4.5vw;
        margin-right: -4.5vw;
        padding-left: 4.5vw;
        padding-right: 4.5vw;
    }
    .product-customize-filters::-webkit-scrollbar { display: none; }

    .product-filter-btn {
        flex: 0 0 44vw;        /* 2 visible at a time, 3rd peeks */
        width: 44vw;
        font-size: 3.8vw;
        padding: 3.5vw 2vw;
        border-radius: 8px;
        scroll-snap-align: start;   /* every button is its own snap point */
        scroll-snap-stop: always;   /* never skip a snap point while scrolling */
        white-space: nowrap;
        text-align: center;
    }

    /* Materials grid */
    .product-materials-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 3.5vw;
    }

    .material-title-bar {
        font-size: 3.2vw;
        padding: 2.5vw 2vw;
    }

    /* Customize header */
    .product-customize-header { margin-bottom: 6vw; }
    .product-section-title { font-size: 6.5vw; }
    .product-section-subtitle { font-size: 3.8vw; }
    .product-outline-badge { font-size: 3vw; padding: 2vw 4vw; }
}

/* Specifications Table */
.product-specs-table {
    display: grid;
    grid-template-columns: 250px 1fr;
    font-size: 17.5px;
}

.spec-label {
    border-right: 1px solid rgba(255, 255, 255, 0.1);
    padding: 18.8px 25px 18.8px 0;
    font-weight: 600;
    color: var(--product-text-main);
}

.spec-value {
    padding: 18.8px 0 18.8px 25px;
    color: var(--product-text-muted);
}

/* FAQs Accordion */
.product-faq-accordion {
    display: flex;
    flex-direction: column;
    gap: 18.8px;
    max-width: 812.5px;
}

.faq-item {
    background-color: var(--product-bg-card);
    border-radius: 10px;
    overflow: hidden;
}

.faq-question {
    width: 100%;
    text-align: left;
    background: none;
    border: none;
    padding: 22.5px 25px;
    color: var(--product-text-muted);
    font-family: var(--product-font);
    font-size: 17.5px;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: color 0.3s ease;
}

.faq-question:hover {
    color: var(--product-text-main);
}

.faq-icon {
    font-size: 22.5px;
    font-weight: 300;
}

.faq-item.active .faq-question {
    color: var(--product-text-main);
}

.faq-answer {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease, padding 0.3s ease;
    padding: 0 25px;
    color: var(--product-text-muted);
    font-size: 16.2px;
    line-height: 1.6;
}

.faq-item.active .faq-answer {
    max-height: 250px;
    padding: 0 25px 25px 25px;
}

/* Order Process Grid */
.product-process-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 25px;
}

.process-card {
    background-color: var(--product-bg-card);
    border: 1px solid rgba(255, 193, 7, 0.2);
    border-radius: 10px;
    padding: 25px 20px;
    text-align: center;
    transition: transform 0.3s ease, border-color 0.3s ease;
}

.process-card:hover {
    transform: translateY(-6.2px);
    border-color: var(--product-gold);
}

.process-icon {
    margin-bottom: 15px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.process-icon svg {
    width: 45px;
    height: 45px;
    stroke: var(--product-gold);
}

.process-title {
    font-size: 18.8px;
    font-weight: 600;
    color: var(--product-text-main);
    margin-bottom: 12px;
}

.process-text {
    font-size: 16.2px;
    color: var(--product-text-muted);
    line-height: 1.6;
}

/* Review Form */
.product-review-form-container {
    background-color: var(--product-bg-card);
    border-radius: 10px;
    padding: 25px 30px;
    max-width: 650px;
}

.product-review-form-title {
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 15px;
    color: var(--product-text-main);
}

.product-review-rating-input {
    margin-bottom: 15px;
}

.product-review-rating-input label {
    display: block;
    font-size: 15px;
    font-weight: 500;
    margin-bottom: 10px;
    color: var(--product-text-main);
}

.product-review-form-group {
    margin-bottom: 15px;
}

.product-review-form-group label {
    display: block;
    font-size: 15px;
    font-weight: 500;
    margin-bottom: 10px;
    color: var(--product-text-main);
}

.product-review-form input,
.product-review-form textarea {
    background-color: #1a1a1a;
    border: none;
    border-radius: 8px;
    padding: 12px 15px;
    color: var(--product-text-main);
    width: 100%;
    font-family: var(--product-font);
    font-size: 15px;
    outline: none;
    box-sizing: border-box;
    transition: box-shadow 0.3s ease;
}

.product-review-form input:focus,
.product-review-form textarea:focus {
    box-shadow: 0 0 0 1px var(--product-gold);
}

.product-review-form textarea {
    resize: none;
}

@media (max-width: 1240px) {
    .product-process-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 960px) {
    .product-container {
        padding: 0px 0px;
    }

    .product-form-grid,
    .product-form-grid-3 {
        grid-template-columns: 1fr;
    }

    /* Keep form rows at 2-col down to 768px — 768px media handles further */
    .product-form-row-3:not(.product-form-row-options) {
        grid-template-columns: 1fr;
    }

    .product-form-group.span-2 {
        grid-column: span 1;
    }

    .product-materials-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}



    <div class="product-wrapper">
        <!-- ==========================================
             HERO SECTION
        =========================================== -->
        <section class="product-hero-section">
            <div class="product-container">
                
                <!-- Breadcrumbs -->
                <div class="product-breadcrumbs">
                    <a href="#"><i class="fas fa-home"></i></a>
                    <span class="product-bc-sep">&raquo;</span>
                    <a href="#">Box By Industry</a>
                    <span class="product-bc-sep">&raquo;</span>
                    <a href="#">Apparel Boxes</a>
                    <span class="product-bc-sep">&raquo;</span>
                    <span class="product-bc-active">Archive Boxes</span>
                </div>

                <div class="product-hero-grid">
                    
                    <!-- Left: Product Images & Reviews -->
                    <div class="product-hero-images">
                        <div class="product-main-img-wrap">
                            <img src="./c903f3f775a50e5b56122d5a307158962172018e (1).jpg" alt="Archive Box Main" class="product-main-img">
                        </div>
                        <div class="product-thumbnails">
                            <div class="product-thumb"><img src="./c903f3f775a50e5b56122d5a307158962172018e (1).jpg" alt="Thumb 1"></div>
                            <div class="product-thumb"><img src="./c903f3f775a50e5b56122d5a307158962172018e (1).jpg" alt="Thumb 2"></div>
                            <div class="product-thumb"><img src="./c903f3f775a50e5b56122d5a307158962172018e (1).jpg" alt="Thumb 3"></div>
                            <div class="product-thumb"><img src="./c903f3f775a50e5b56122d5a307158962172018e (1).jpg" alt="Thumb 4"></div>
                        </div>
                        
                        <!-- Trust Badges -->
                        <div class="product-reviews-badges">
                            <!-- Google Review Item -->
                            <div class="product-review-item">
                                <div class="product-google-logo">
                                    <svg viewBox="0 0 24 24" width="26" height="26" style="margin-right: 6px;">
                                        <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                                        <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                                        <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                                        <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                                    </svg>
                                    <span style="font-size: 14px; font-weight: 500;">Business Reviews</span>
                                </div>
                                <div class="product-stars-wrap">
                                    <span class="product-rating-score">5.0</span>
                                    <div class="product-stars-icons">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Trustpilot Review Item -->
                            <div class="product-review-item">
                                <div class="product-trustpilot-logo">
                                    <i class="fas fa-star" style="color: #00b67a; font-size: 20px; margin-right: 6px;"></i>
                                    <span style="font-size: 16px; font-weight: 700;">Trustpilot</span>
                                </div>
                                <div class="product-trustpilot-stars">
                                    <div class="tp-star"><i class="fas fa-star"></i></div>
                                    <div class="tp-star"><i class="fas fa-star"></i></div>
                                    <div class="tp-star"><i class="fas fa-star"></i></div>
                                    <div class="tp-star"><i class="fas fa-star"></i></div>
                                    <div class="tp-star" style="background: linear-gradient(to right, #00b67a 50%, #dcdce6 50%); color: white;"><i class="fas fa-star"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Product Details & Quote Form -->
                    <div class="product-hero-details">
                        <div class="product-title-row">
                            <h1 class="product-title">Archive Boxes</h1>
                            <span class="product-status-badge">In Stock</span>
                        </div>
                        <p class="product-desc">
                            Archives are the most amazing method of organizing things in a certain manner so that they appear neat and are easily accessible for everyone. Other uses include safe storage and a clutter-free <span class="product-desc-dots">....</span><span class="product-desc-more" style="display: none;"> environment. They offer excellent durability and protection against dust, moisture, and wear over time, making them ideal for long-term document preservation.</span> <a href="#" class="product-read-more">Read More</a>
                        </p>
                        
                        <div class="product-quote-box">
                            <h3 class="product-quote-title">Get Custom Quote</h3>
                            <form class="product-quote-form">
                                
                                <!-- Row 1: Name | Email | Phone -->
                                <div class="product-form-row product-form-row-3">
                                    <div class="pf-wrap">
                                        <label class="pf-mob-label">Name *</label>
                                        <input type="text" placeholder="Enter your name">
                                    </div>
                                    <div class="pf-wrap">
                                        <label class="pf-mob-label">Email Address *</label>
                                        <input type="email" placeholder="Enter your email">
                                    </div>
                                    <div class="pf-wrap">
                                        <label class="pf-mob-label">Phone *</label>
                                        <input type="tel" placeholder="Enter your number">
                                    </div>
                                </div>

                                <!-- Row 2: Width | Length | Depth | Units -->
                                <div class="product-form-row product-form-row-4">
                                    <div class="pf-wrap">
                                        <label class="pf-mob-label">Width *</label>
                                        <input type="text" placeholder="Width">
                                    </div>
                                    <div class="pf-wrap">
                                        <label class="pf-mob-label">Length *</label>
                                        <input type="text" placeholder="Length">
                                    </div>
                                    <div class="pf-wrap">
                                        <label class="pf-mob-label">Depth *</label>
                                        <input type="text" placeholder="Depth">
                                    </div>
                                    <div class="pf-wrap">
                                        <label class="pf-mob-label">Units *</label>
                                        <select>
                                            <option>mm</option>
                                            <option>cm</option>
                                            <option>inches</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Row 3: Material | Printing (desktop also shows Finishing here via 3-col) -->
                                <div class="product-form-row product-form-row-3 product-form-row-options">
                                    <div class="pf-wrap">
                                        <label class="pf-mob-label">Select Material</label>
                                        <select><option>Choose option</option></select>
                                    </div>
                                    <div class="pf-wrap">
                                        <label class="pf-mob-label">Printing Options</label>
                                        <select><option>Choose option</option></select>
                                    </div>
                                </div>

                                <!-- Row 4: Finishing | Quantity | Upload -->
                                <div class="product-form-row product-form-row-upload">
                                    <div class="pf-wrap">
                                        <label class="pf-mob-label">Finishing Options</label>
                                        <select><option>Choose option</option></select>
                                    </div>
                                    <div class="pf-wrap">
                                        <label class="pf-mob-label">Quantity *</label>
                                        <input type="text" placeholder="Enter quantity">
                                    </div>
                                    <div class="pf-wrap pf-upload-wrap">
                                        <label class="pf-mob-label">Upload File Here</label>
                                        <div class="product-upload-group">
                                            <input type="text" placeholder="No file choosen" readonly>
                                            <button type="button" class="product-btn-upload">Upload</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-form-row">
                                    <textarea placeholder="Enter your message" rows="4"></textarea>
                                </div>
                                
                                <div class="product-submit-wrap">
                                    <button type="button" class="product-btn-primary product-form-submit">Send Instant Quote</button>
                                </div>
                                
                            </form>

                </div>
            </div>
        </section>
        
        <!-- ==========================================
             INFO TABS SECTION
        =========================================== -->
        <section class="product-info-section">
            <div class="product-container">
                <div class="product-tabs-wrapper">
                    <ul class="product-tabs-nav">
                        <li class="product-tab-item active" data-tab="tab-desc">Description</li>
                        <li class="product-tab-item" data-tab="tab-specs">Product Specifications</li>
                        <li class="product-tab-item" data-tab="tab-faqs">FAQs</li>
                        <li class="product-tab-item" data-tab="tab-process">Order Process</li>
                        <li class="product-tab-item" data-tab="tab-reviews">Review</li>
                    </ul>
                </div>
                
                <div class="product-tab-content">
                    <!-- Description Tab -->
                    <div class="product-tab-pane" id="tab-desc">
                        <h2 class="product-info-heading">Everything you need to know about custom boxes.</h2>
                        <p class="product-info-text">
                            Custom design your box that shows off the true value of your items and brand. When making decisions about the size and styling, keep in mind that custom boxes are sturdy and tough. Whether you're sending out promotional kits or shipping items directly to your customers, these custom mailer boxes are a great way to elevate your brand.
                        </p>
                        
                        <h3 class="product-info-subheading">What to consider when choosing custom packaging:</h3>
                        <ul class="product-info-list">
                            <li><strong>Box Style:</strong> Look closely at the styles offered and find the one that fits your brand.</li>
                            <li><strong>Print Options:</strong> Consider whether your design requires full-color print or just simple text.</li>
                            <li><strong>Materials:</strong> Select corrugated boards, kraft boxes, or premium cardstock.</li>
                            <li><strong>Quantity:</strong> Pricing depends on the quantity of boxes ordered, higher volumes usually cost less per box.</li>
                        </ul>
                    </div>

                    <!-- Specifications Tab -->
                    <div class="product-tab-pane" id="tab-specs" style="display: none;">
                        <div class="product-specs-table">
                            <div class="spec-label">Box Style</div>
                            <div class="spec-value">Apparel Boxes</div>

                            <div class="spec-label">Dimension (L x W x H)</div>
                            <div class="spec-value">All Custom Sizes And Shapes</div>

                            <div class="spec-label">Quantities</div>
                            <div class="spec-value">No Minimum Order Required</div>

                            <div class="spec-label">Stock</div>
                            <div class="spec-value">10pt to 28pt (60lb to 400lb) Eco-Friendly Kraft, E-flute Corrugated, Bux Board, Cardstock</div>

                            <div class="spec-label">Printing</div>
                            <div class="spec-value">No Printing, CMYK, CMYK + 1 PMS Color, CMYK + 2 PMS Colors</div>

                            <div class="spec-label">Finishing</div>
                            <div class="spec-value">Gloss Lamination, Matte Lamination, Gloss AQ, Gloss UV, Matte UV, Spot UV, Embossing, Foiling</div>

                            <div class="spec-label">Included Options</div>
                            <div class="spec-value">Die Cutting, Gluing, Scored, Perforation</div>

                            <div class="spec-label">Additional Options</div>
                            <div class="spec-value">Eco-Friendly, Recycled Boxes, Biodegradable</div>

                            <div class="spec-label">Proof</div>
                            <div class="spec-value">Flat View, 3D Mock-up, Physical Sampling (On request)</div>

                            <div class="spec-label">Turnaround</div>
                            <div class="spec-value">4 - 8 Business Days, RUSH</div>

                            <div class="spec-label">Shipping</div>
                            <div class="spec-value">FLAT</div>
                        </div>
                    </div>

                    <!-- FAQs Tab -->
                    <div class="product-tab-pane" id="tab-faqs" style="display: none;">
                        <div class="product-faq-accordion">
                            <div class="faq-item">
                                <button class="faq-question">
                                    <span>Which printing method is best for small orders?</span>
                                    <span class="faq-icon">+</span>
                                </button>
                                <div class="faq-answer">
                                    <p>Digital printing is usually the best and most cost-effective method for short runs and small orders, allowing for full color without setup fees.</p>
                                </div>
                            </div>
                            
                            <div class="faq-item">
                                <button class="faq-question">
                                    <span>Do you offer free design support?</span>
                                    <span class="faq-icon">+</span>
                                </button>
                                <div class="faq-answer">
                                    <p>Yes, we offer free basic design support and supply a digital 3D proof before production begins.</p>
                                </div>
                            </div>
                            
                            <div class="faq-item">
                                <button class="faq-question">
                                    <span>What is the minimum order quantity?</span>
                                    <span class="faq-icon">+</span>
                                </button>
                                <div class="faq-answer">
                                    <p>Our minimum order quantity is typically 100 units for custom printed boxes, though this may vary depending on the exact style.</p>
                                </div>
                            </div>

                            <div class="faq-item">
                                <button class="faq-question">
                                    <span>What is your turnaround time?</span>
                                    <span class="faq-icon">+</span>
                                </button>
                                <div class="faq-answer">
                                    <p>Standard turnaround is 10-12 business days, but we also offer RUSH options (4-8 business days) if you need them faster.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Order Process Tab -->
                    <div class="product-tab-pane" id="tab-process" style="display: none;">
                        <div class="product-process-grid">
                            <div class="process-card">
                                <div class="process-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg>
                                </div>
                                <h3 class="process-title">Submit Your Brief</h3>
                                <p class="process-text">Share your product dimensions, quantities, and vision. We respond within 24 hours with initial recommendations and a structural concept tailored to your needs.</p>
                            </div>
                            
                            <div class="process-card">
                                <div class="process-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 19l7-7 3 3-7 7-3-3zM18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5zM2 2l7.586 7.586"/><circle cx="11" cy="11" r="2"/></svg>
                                </div>
                                <h3 class="process-title">Design & Quote</h3>
                                <p class="process-text">You receive a structural die line, finish spec sheet, and transparent pricing. Revisions are included at no extra cost — no surprises, no hidden fees.</p>
                            </div>
                            
                            <div class="process-card">
                                <div class="process-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14M22 4L12 14.01l-3-3"/></svg>
                                </div>
                                <h3 class="process-title">Approve & Produce</h3>
                                <p class="process-text">Once artwork is approved, production begins immediately in our certified manufacturing facility. Pre-production physical samples available before full run.</p>
                            </div>
                            
                            <div class="process-card">
                                <div class="process-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
                                </div>
                                <h3 class="process-title">Ship & Arrive</h3>
                                <p class="process-text">Your order ships with full tracking and quality documentation. Custom orders take approximately 15 days production, plus shipping.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Reviews Tab -->
                    <div class="product-tab-pane" id="tab-reviews" style="display: none;">
                        <div class="product-review-form-container">
                            <h3 class="product-review-form-title">Add a Review</h3>
                            
                            <div class="product-review-rating-input">
                                <label>Add Your Rating *</label>
                                <div class="product-stars-icons" style="font-size: 18px;">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            
                            <form class="product-review-form">
                                <div class="product-review-form-group">
                                    <label>Name *</label>
                                    <input type="text" placeholder="Name">
                                </div>
                                
                                <div class="product-review-form-group">
                                    <label>Email Address *</label>
                                    <input type="email" placeholder="Email">
                                </div>
                                
                                <div class="product-review-form-group">
                                    <label>Write Your Review *</label>
                                    <textarea placeholder="Write here" rows="4"></textarea>
                                </div>
                                
                                <div class="product-submit-wrap" style="justify-content: center; margin-top: 15px;">
                                    <button type="button" class="product-btn-primary" style="width: 250px; padding: 12px; font-size: 16px; border-radius: 30px;">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- ==========================================
             CUSTOMIZE YOUR BOX SECTION
        =========================================== -->
        <section class="product-customize-section">
            <div class="product-container">
                <div class="product-customize-header">
                    <div class="product-outline-badge">OPTIONS & MATERIALS</div>
                    <h2 class="product-section-title">Customize Your Box</h2>
                    <p class="product-section-subtitle">Choose materials, finishes, and add-ons to build your perfect rigid box.</p>
                </div>
                
                <div class="product-customize-filters">
                    <button class="product-filter-btn active" data-filter="grid-materials">Materials</button>
                    <button class="product-filter-btn" data-filter="grid-printing">Printing Options</button>
                    <button class="product-filter-btn" data-filter="grid-finishes">Special Finishes</button>
                    <button class="product-filter-btn" data-filter="grid-coatings">Coating & Laminations</button>
                </div>
                
                <div class="product-customize-content">
                    <!-- Materials Grid -->
                    <div class="product-materials-grid" id="grid-materials">
                        <div class="product-material-card"><div class="material-img-placeholder"></div><div class="material-title-bar">Kraft Card</div></div>
                        <div class="product-material-card"><div class="material-img-placeholder"></div><div class="material-title-bar">SBS Card</div></div>
                        <div class="product-material-card"><div class="material-img-placeholder"></div><div class="material-title-bar">C1S</div></div>
                        <div class="product-material-card"><div class="material-img-placeholder"></div><div class="material-title-bar">Fully Recycled C2S</div></div>
                        <div class="product-material-card"><div class="material-img-placeholder"></div><div class="material-title-bar">Textured Uncoated Card</div></div>
                        <div class="product-material-card"><div class="material-img-placeholder"></div><div class="material-title-bar">e-Flute Corrugated</div></div>
                        <div class="product-material-card"><div class="material-img-placeholder"></div><div class="material-title-bar">B-Flute Corrugated</div></div>
                        <div class="product-material-card"><div class="material-img-placeholder"></div><div class="material-title-bar">Premium White Corrugated</div></div>
                        <div class="product-material-card"><div class="material-img-placeholder"></div><div class="material-title-bar">Clay Coated Kraft Back</div></div>
                        <div class="product-material-card"><div class="material-img-placeholder"></div><div class="material-title-bar">Clay Natural Kraft</div></div>
                        <div class="product-material-card"><div class="material-img-placeholder"></div><div class="material-title-bar">Metallic</div></div>
                        <div class="product-material-card"><div class="material-img-placeholder"></div><div class="material-title-bar">Holographic</div></div>
                        <div class="product-material-card"><div class="material-img-placeholder"></div><div class="material-title-bar">Natural Kraft Board</div></div>
                        <div class="product-material-card"><div class="material-img-placeholder"></div><div class="material-title-bar">Coated White Board</div></div>
                        <div class="product-material-card"><div class="material-img-placeholder"></div><div class="material-title-bar">Extra White Board</div></div>
                        <div class="product-material-card"><div class="material-img-placeholder"></div><div class="material-title-bar">Bleached White Board</div></div>
                        <div class="product-material-card"><div class="material-img-placeholder"></div><div class="material-title-bar">Grey Chipboard</div></div>
                        <div class="product-material-card"><div class="material-img-placeholder"></div><div class="material-title-bar">Unlined Chipboard</div></div>
                    </div>
                    
                    <!-- Printing Options Grid -->
                    <div class="product-materials-grid" id="grid-printing" style="display: none;">
                        <div class="product-material-card"><div class="material-img-placeholder"></div><div class="material-title-bar">Option 1</div></div>
                        <div class="product-material-card"><div class="material-img-placeholder"></div><div class="material-title-bar">Option 2</div></div>
                        <div class="product-material-card"><div class="material-img-placeholder"></div><div class="material-title-bar">Option 3</div></div>
                        <div class="product-material-card"><div class="material-img-placeholder"></div><div class="material-title-bar">Option 4</div></div>
                        <div class="product-material-card"><div class="material-img-placeholder"></div><div class="material-title-bar">Option 5</div></div>
                        <div class="product-material-card"><div class="material-img-placeholder"></div><div class="material-title-bar">Option 6</div></div>
                        <div class="product-material-card"><div class="material-img-placeholder"></div><div class="material-title-bar">Option 7</div></div>
                        <div class="product-material-card"><div class="material-img-placeholder"></div><div class="material-title-bar">Option 8</div></div>
                    </div>

                    <!-- Special Finishes Grid -->
                    <div class="product-materials-grid" id="grid-finishes" style="display: none;">
                        <div class="product-material-card"><div class="material-img-placeholder"></div><div class="material-title-bar">Finish 1</div></div>
                        <div class="product-material-card"><div class="material-img-placeholder"></div><div class="material-title-bar">Finish 2</div></div>
                        <div class="product-material-card"><div class="material-img-placeholder"></div><div class="material-title-bar">Finish 3</div></div>
                        <div class="product-material-card"><div class="material-img-placeholder"></div><div class="material-title-bar">Finish 4</div></div>
                        <div class="product-material-card"><div class="material-img-placeholder"></div><div class="material-title-bar">Finish 5</div></div>
                        <div class="product-material-card"><div class="material-img-placeholder"></div><div class="material-title-bar">Finish 6</div></div>
                        <div class="product-material-card"><div class="material-img-placeholder"></div><div class="material-title-bar">Finish 7</div></div>
                        <div class="product-material-card"><div class="material-img-placeholder"></div><div class="material-title-bar">Finish 8</div></div>
                    </div>

                    <!-- Coating & Laminations Grid -->
                    <div class="product-materials-grid" id="grid-coatings" style="display: none;">
                        <div class="product-material-card"><div class="material-img-placeholder"></div><div class="material-title-bar">Coating 1</div></div>
                        <div class="product-material-card"><div class="material-img-placeholder"></div><div class="material-title-bar">Coating 2</div></div>
                        <div class="product-material-card"><div class="material-img-placeholder"></div><div class="material-title-bar">Coating 3</div></div>
                        <div class="product-material-card"><div class="material-img-placeholder"></div><div class="material-title-bar">Coating 4</div></div>
                        <div class="product-material-card"><div class="material-img-placeholder"></div><div class="material-title-bar">Coating 5</div></div>
                        <div class="product-material-card"><div class="material-img-placeholder"></div><div class="material-title-bar">Coating 6</div></div>
                        <div class="product-material-card"><div class="material-img-placeholder"></div><div class="material-title-bar">Coating 7</div></div>
                        <div class="product-material-card"><div class="material-img-placeholder"></div><div class="material-title-bar">Coating 8</div></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================
             TESTIMONIALS SECTION
        =========================================== -->
        <section class="product-testimonials-section">
            <div class="product-container">
                <div class="product-testimonials-header">
                    <div class="product-sec-badge">TESTIMONIALS</div>
                    <h2 class="product-section-title">What Our Customers Say</h2>
                    <p class="product-section-subtitle">But don't just take our word for it, read what our clients say.</p>
                </div>
                
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
                
                <div class="product-slider-nav">
                    <button class="product-nav-btn" id="prevTestimonialBtn"><i class="fas fa-chevron-left"></i></button>
                    <button class="product-nav-btn" id="nextTestimonialBtn"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        </section>

        <!-- ==========================================
             FINAL QUOTE SECTION
        =========================================== -->
        <section class="product-final-quote-section">
            <div class="product-container">
                <div class="product-final-quote-wrapper">
                    <div class="product-final-quote-form-area">
                        <h2 class="product-section-title" style="text-align: left;">Instant Quotes, Quick Service</h2>
                        <form class="product-final-form">
                            <!-- Row 1: Name, Email, Phone -->
                            <div class="product-form-grid-3">
                                <div class="product-form-group">
                                    <label>Name *</label>
                                    <input type="text" placeholder="Name">
                                </div>
                                <div class="product-form-group">
                                    <label>Email Address *</label>
                                    <input type="email" placeholder="Email">
                                </div>
                                <div class="product-form-group">
                                    <label>Phone *</label>
                                    <input type="tel" placeholder="Phone number">
                                </div>
                            </div>

                            <!-- Row 2: Company, Website, Physical Address -->
                            <div class="product-form-grid-3" style="margin-top:18px;">
                                <div class="product-form-group">
                                    <label>Company Name</label>
                                    <input type="text" placeholder="Company">
                                </div>
                                <div class="product-form-group">
                                    <label>Website</label>
                                    <input type="text" placeholder="Website">
                                </div>
                                <div class="product-form-group">
                                    <label>Physical Address</label>
                                    <input type="text" placeholder="Address">
                                </div>
                            </div>

                            <!-- Row 3: Box Style (wider) + Quantity -->
                            <div class="product-form-row-box-qty" style="margin-top:18px;">
                                <div class="product-form-group">
                                    <label>Box Style *</label>
                                    <select>
                                        <option value="">Select your box style</option>
                                        <option>Archive Boxes</option>
                                        <option>Mailer Boxes</option>
                                        <option>Rigid Boxes</option>
                                    </select>
                                </div>
                                <div class="product-form-group">
                                    <label>Quantity *</label>
                                    <input type="text" placeholder="Enter quantity">
                                </div>
                            </div>

                            <!-- Row 4: Message -->
                            <div class="product-form-group" style="margin-top:18px;">
                                <label>Message</label>
                                <textarea rows="4" placeholder="Enter your message"></textarea>
                            </div>

                            <button type="button" class="product-submit-btn">Instant Quote</button>
                        </form>
                    </div>
                    <div class="product-final-quote-image">
                        <div class="product-placeholder-img">Image</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================
             RELATED PRODUCTS SECTION
        =========================================== -->
        <section class="product-related-section">
            <div class="product-container">
                <h2 class="product-section-title" style="text-align: left;">Related Products</h2>
                <div class="product-related-grid">
                    <div class="product-related-card">
                        <div class="product-related-img"></div>
                        <h4 class="product-related-title">Title of product here</h4>
                    </div>
                    <div class="product-related-card">
                        <div class="product-related-img"></div>
                        <h4 class="product-related-title">Title of product here</h4>
                    </div>
                    <div class="product-related-card">
                        <div class="product-related-img"></div>
                        <h4 class="product-related-title">Title of product here</h4>
                    </div>
                    <div class="product-related-card">
                        <div class="product-related-img"></div>
                        <h4 class="product-related-title">Title of product here</h4>
                    </div>
                </div>
            </div>
        </section>

    </div>

    document.addEventListener("DOMContentLoaded", function() {
    const readMoreBtn = document.querySelector('.product-read-more');
    const moreText = document.querySelector('.product-desc-more');
    const dots = document.querySelector('.product-desc-dots');

    if (readMoreBtn && moreText && dots) {
        readMoreBtn.addEventListener('click', function(e) {
            e.preventDefault();
            if (moreText.style.display === "none") {
                moreText.style.display = "inline";
                dots.style.display = "none";
                readMoreBtn.textContent = "Read Less";
            } else {
                moreText.style.display = "none";
                dots.style.display = "inline";
                readMoreBtn.textContent = "Read More";
            }
        });
    }

    // Tabs logic
    const tabItems = document.querySelectorAll('.product-tab-item');
    const tabPanes = document.querySelectorAll('.product-tab-pane');
    const tabsNav = document.querySelector('.product-tabs-nav');

    function activateTab(tab, fromScroll) {
        tabItems.forEach(t => t.classList.remove('active'));
        tabPanes.forEach(p => p.style.display = 'none');

        tab.classList.add('active');

        const targetPane = document.getElementById(tab.getAttribute('data-tab'));
        if (targetPane) targetPane.style.display = 'block';

        // On mobile: snap so clicked tab is the second visible one
        // (previous tab stays on screen), except for the first tab
        if (!fromScroll && tabsNav && window.innerWidth <= 768) {
            const padLeft = parseFloat(getComputedStyle(tabsNav).paddingLeft) || 0;
            const idx = Array.from(tabItems).indexOf(tab);

            if (idx === 0) {
                tabsNav.scrollTo({ left: 0, behavior: 'smooth' });
            } else {
                const prevTab = tabItems[idx - 1];
                tabsNav.scrollTo({
                    left: prevTab.offsetLeft - padLeft,
                    behavior: 'smooth'
                });
            }
        }
    }

    if (tabItems.length > 0 && tabPanes.length > 0) {
        tabItems.forEach(tab => {
            tab.addEventListener('click', () => activateTab(tab, false));
        });

        // On mobile scroll: activate whichever tab snapped to the left edge
        if (tabsNav) {
            let tabScrollTimer;
            tabsNav.addEventListener('scroll', () => {
                clearTimeout(tabScrollTimer);
                tabScrollTimer = setTimeout(() => {
                    if (window.innerWidth > 768) return;

                    const navLeft = tabsNav.getBoundingClientRect().left;
                    let closest = null;
                    let minDist = Infinity;

                    tabItems.forEach(tab => {
                        const dist = Math.abs(tab.getBoundingClientRect().left - navLeft);
                        if (dist < minDist) { minDist = dist; closest = tab; }
                    });

                    if (closest && !closest.classList.contains('active')) {
                        activateTab(closest, true);
                    }
                }, 120);
            });
        }
    }

    // FAQ Accordion logic
    const faqQuestions = document.querySelectorAll('.faq-question');
    faqQuestions.forEach(btn => {
        btn.addEventListener('click', () => {
            const item = btn.parentElement;
            item.classList.toggle('active');
            
            const icon = btn.querySelector('.faq-icon');
            if (item.classList.contains('active')) {
                icon.textContent = '-';
            } else {
                icon.textContent = '+';
            }
        });
    });

    // Customize Filters logic
    const filterBtns = document.querySelectorAll('.product-filter-btn');
    const filterGrids = document.querySelectorAll('.product-materials-grid');
    const filterStrip = document.querySelector('.product-customize-filters');

    // Activate a filter button: update active state, show grid, snap scroll strip
    function activateFilter(btn, fromScroll) {
        filterBtns.forEach(b => b.classList.remove('active'));
        filterGrids.forEach(g => g.style.display = 'none');

        btn.classList.add('active');

        const targetId = btn.getAttribute('data-filter');
        const targetGrid = document.getElementById(targetId);
        if (targetGrid) targetGrid.style.display = 'grid';

        // On mobile: scroll so the clicked button is always the SECOND visible one
        // (previous button stays on screen to the left), except for the first button
        // which snaps to the very start.
        if (!fromScroll && filterStrip && window.innerWidth <= 768) {
            const stripPaddingLeft = parseFloat(getComputedStyle(filterStrip).paddingLeft) || 0;
            const btnIndex = Array.from(filterBtns).indexOf(btn);

            if (btnIndex === 0) {
                // First button — snap to start
                filterStrip.scrollTo({ left: 0, behavior: 'smooth' });
            } else {
                // All other buttons — snap so the PREVIOUS button is at the left edge
                const prevBtn = filterBtns[btnIndex - 1];
                filterStrip.scrollTo({
                    left: prevBtn.offsetLeft - stripPaddingLeft,
                    behavior: 'smooth'
                });
            }
        }
    }

    if (filterBtns.length > 0 && filterGrids.length > 0) {
        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => activateFilter(btn, false));
        });

        // On mobile: when the user manually scrolls the strip, activate the first
        // fully-visible button so the active state always matches what's on screen.
        if (filterStrip) {
            let scrollTimer;
            filterStrip.addEventListener('scroll', () => {
                clearTimeout(scrollTimer);
                scrollTimer = setTimeout(() => {
                    if (window.innerWidth > 768) return;

                    // Find the button whose left edge is closest to the strip's scroll position
                    const stripLeft = filterStrip.getBoundingClientRect().left;
                    let closest = null;
                    let minDist = Infinity;

                    filterBtns.forEach(btn => {
                        const dist = Math.abs(btn.getBoundingClientRect().left - stripLeft);
                        if (dist < minDist) { minDist = dist; closest = btn; }
                    });

                    if (closest && !closest.classList.contains('active')) {
                        activateFilter(closest, true);
                    }
                }, 120); // slight debounce so it fires after scroll settles
            });
        }
    }

    // Related Products — click 2nd card → scroll forward, click 1st card → scroll back (mobile)
    const relatedGrid = document.querySelector('.product-related-grid');
    if (relatedGrid) {
        relatedGrid.addEventListener('click', (e) => {
            if (window.innerWidth > 768) return;

            const card = e.target.closest('.product-related-card');
            if (!card) return;

            const cards = Array.from(relatedGrid.querySelectorAll('.product-related-card'));
            const clickedIndex = cards.indexOf(card);
            const padLeft = parseFloat(getComputedStyle(relatedGrid).paddingLeft) || 0;

            // Find which card is currently snapped at the left edge
            const gridLeft = relatedGrid.getBoundingClientRect().left;
            let firstVisibleIndex = 0;
            let minDist = Infinity;
            cards.forEach((c, i) => {
                const dist = Math.abs(c.getBoundingClientRect().left - gridLeft);
                if (dist < minDist) { minDist = dist; firstVisibleIndex = i; }
            });

            const secondVisibleIndex = firstVisibleIndex + 1;

            if (clickedIndex === secondVisibleIndex && secondVisibleIndex + 1 < cards.length) {
                // Clicked 2nd card → scroll forward: 2nd becomes 1st
                const nextCard = cards[secondVisibleIndex];
                relatedGrid.scrollTo({
                    left: nextCard.offsetLeft - padLeft,
                    behavior: 'smooth'
                });
            } else if (clickedIndex === firstVisibleIndex && firstVisibleIndex > 0) {
                // Clicked 1st card → scroll back: previous card becomes 1st
                const prevCard = cards[firstVisibleIndex - 1];
                relatedGrid.scrollTo({
                    left: prevCard.offsetLeft - padLeft,
                    behavior: 'smooth'
                });
            }
        });
    }
    const testimonialsGrid = document.getElementById('testimonialsGrid');
    const prevTestimonialBtn = document.getElementById('prevTestimonialBtn');
    const nextTestimonialBtn = document.getElementById('nextTestimonialBtn');

    if (testimonialsGrid && prevTestimonialBtn && nextTestimonialBtn) {
        prevTestimonialBtn.addEventListener('click', () => {
            if (window.innerWidth <= 768) {
                // Mobile: scroll exactly one card width
                const card = testimonialsGrid.firstElementChild;
                const cardWidth = card ? card.offsetWidth : testimonialsGrid.offsetWidth;
                testimonialsGrid.scrollBy({ left: -cardWidth, behavior: 'smooth' });
            } else {
                const cardElement = testimonialsGrid.firstElementChild;
                const scrollAmount = cardElement ? (cardElement.offsetWidth + 30) : 300;
                testimonialsGrid.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
            }
        });

        nextTestimonialBtn.addEventListener('click', () => {
            if (window.innerWidth <= 768) {
                const card = testimonialsGrid.firstElementChild;
                const cardWidth = card ? card.offsetWidth : testimonialsGrid.offsetWidth;
                testimonialsGrid.scrollBy({ left: cardWidth, behavior: 'smooth' });
            } else {
                const cardElement = testimonialsGrid.firstElementChild;
                const scrollAmount = cardElement ? (cardElement.offsetWidth + 30) : 300;
                testimonialsGrid.scrollBy({ left: scrollAmount, behavior: 'smooth' });
            }
        });
    }
});
