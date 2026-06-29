@include('include.header')
 <style>
/* Base Styles & Variables */
:root {
  --bg-dark: #121212;
  --bg-darker: #0a0a0a;
  --bg-card: #1a1a1a;
  --text-main: #f5f5f5;
  --text-muted: #c5c5c5;
  --accent-gold: #f5c542;
  --accent-gold-hover: #f5c542;
  --border-color: #333;

  --font-heading: "Outfit", sans-serif;
  --font-body: "Inter", sans-serif;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  background-color: var(--bg-dark);
  color: var(--text-main);
  font-family: var(--font-body);
  line-height: 1.6;
  overflow-x: hidden;
  justify-content: center;
  padding-top: 115px; /* Fixed header height (top bar + navbar) */
}
.container {
  width: 100%;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 16px;
}

a {
  text-decoration: none;
  color: inherit;
  transition: color 0.3s ease;
}

/* Typography */
h1,
h2,
h3 {
  font-family: var(--font-heading);
  font-weight: 600;
  line-height: 1.2;
}

.highlight {
  color: var(--accent-gold);
}

.section-badge {
  display: inline-block;
  padding: 6px 12px;
  font-size: 0.75rem;
  font-weight: 600;
  letter-spacing: 1px;
  text-transform: uppercase;
  border-radius: 50px;
  margin-bottom: 20px;
}

.section-badge.outline {
  border: 1px solid var(--accent-gold);
  color: var(--accent-gold);
}

/* Buttons */
.btn {
  display: inline-block;
  padding: 10px 24px;
  font-weight: 600;
  font-size: 0.9rem;
  transition: all 0.3s ease;
  cursor: pointer;
}

.btn-primary {
  background-color: var(--accent-gold);
  color: var(--bg-darker);
}
.hero-buttons a {
  border-radius: 50px;
}

.btn-primary:hover {
  background-color: var(--accent-gold-hover);
  transform: translateY(-2px);
}

.brand-logos img {
  height: 40px; /* adjust as needed */
  width: auto;
  object-fit: contain;
  opacity: 0.7;
  transition: opacity 0.3s ease;
}

.brand-logos img:hover {
  opacity: 1;
}
/* Hero Section */
.hero-section {
  position: relative;
  padding: 80px 0;
  text-align: center;
  min-height: 400px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  overflow: hidden;
}

.hero-bg-image {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  z-index: 0;
}

.hero-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(10, 10, 10, 0.85); /* Dark overlay */
  z-index: 1;
}

.hero-content {
  position: relative;
  z-index: 2;
}

.breadcrumb {
  font-size: 0.85rem;
  color: var(--text-muted);
  margin-bottom: 40px;
  display: flex;
  align-items: center;
  justify-content: flex-start;
  gap: 8px;
}

.breadcrumb a:hover {
  color: var(--accent-gold);
}

.breadcrumb span {
  color: var(--text-main);
}

.hero-text-container {
  max-width: 800px;
  margin: 0 auto;
}

.hero-text-container .section-badge {
  background-color: rgba(212, 175, 55, 0.1);
  color: var(--accent-gold);
  border: 1px solid var(--accent-gold);
}

.hero-text-container h1 {
  font-size: 3rem;
  margin-bottom: 20px;
}

.hero-text-container p {
  font-size: 1.1rem;
  color: var(--text-muted);
  max-width: 600px;
  margin: 0 auto;
}

/* Our Story Section */
.our-story-section {
  padding: 100px 0;
}

.our-story-content {
  display: flex;
  align-items: center;
  gap: 60px;
}

.story-image-container {
  flex: 1;
  position: relative;
}

.image-accent-border {
  position: absolute;
  top: -20px;
  left: -20px;
  width: 100%;
  height: 100%;
  border: 2px solid var(--accent-gold);
  z-index: 0;
}

.story-image {
  position: relative;
  z-index: 1;
  width: 100%;
  height: auto;
  border-radius: 4px;
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
}

.story-text {
  flex: 1;
}

.story-text h2 {
  font-size: 2.5rem;
  margin-bottom: 30px;
}

.story-text p {
  color: var(--text-muted);
  margin-bottom: 20px;
  font-size: 1.05rem;
}

/* Why Choose Us Section */
.why-choose-us-section {
  padding: 80px 0;
}

.why-choose-us-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 30px;
  align-items: stretch;
}

.why-text {
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding-right: 40px;
}

.why-text h2 {
  font-size: 2.5rem;
  margin-bottom: 20px;
}

.why-text p {
  color: var(--text-muted);
  font-size: 1.1rem;
}

.why-cards-row {
  display: flex;
  gap: 30px;
}

.why-image-container {
  height: 100%;
  width: 100%;
  overflow: hidden;
  border-radius: 8px;
  border: 1px solid rgba(255, 255, 255, 0.05);
}

.why-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

.card {
  background-color: var(--bg-card);
  padding: 40px 30px;
  border-radius: 8px;
  border: 1px solid rgba(255, 255, 255, 0.05);
  flex: 1;
  transition:
    transform 0.3s ease,
    border-color 0.3s ease;
  text-align: center;
}

.card:hover {
  transform: translateY(-10px);
  border-color: var(--accent-gold);
}

.card-icon {
  font-size: 2.5rem;
  color: var(--accent-gold);
  margin-bottom: 20px;
}

.card h3 {
  font-size: 1.2rem;
  margin-bottom: 15px;
}

.card p {
  color: var(--text-muted);
  font-size: 0.9rem;
}

/* Numbers Section */
.numbers-section {
  padding: 80px 0;
  background-color: var(--bg-darker);
  border-top: 1px solid rgba(255, 255, 255, 0.05);
  border-bottom: 1px solid rgba(255, 255, 255, 0.05);
}

.numbers-header {
  display: flex;
  justify-content: space-between;
  gap: 60px;
  margin-bottom: 60px;
}

.numbers-title {
  flex: 1;
}

.numbers-title h2 {
  font-size: 2.5rem;
}

.numbers-desc {
  flex: 1;
  color: var(--text-muted);
  font-size: 1rem;
  display: flex;
  align-items: center;
}

.stats-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding-top: 20px;
}

.stat-item {
  text-align: center;
  flex: 1;
}

.stat-item h3 {
  font-size: 3rem;
  color: var(--accent-gold);
  margin-bottom: 10px;
}

.stat-item p {
  font-size: 1rem;
  font-weight: 500;
  color: var(--text-main);
}

.stat-divider {
  width: 1px;
  height: 60px;
  background-color: rgba(255, 255, 255, 0.1);
}

/* Our Process Section */
.process-section {
  padding: 100px 0;
  background-color: var(--bg-dark);
}

.process-header {
  text-align: center;
  max-width: 700px;
  margin: 0 auto 60px auto;
}

.process-header h2 {
  font-size: 2.5rem;
  margin-bottom: 20px;
}

.process-header p {
  color: var(--text-muted);
  font-size: 1.1rem;
}

.process-cards {
  display: flex;
  gap: 30px;
}

.process-card {
  padding: 40px 20px;
}

/* CTA Section */
.cta-section {
  padding: 100px 0;
  background-color: var(--bg-dark);
  border-top: 1px solid rgba(255, 255, 255, 0.05);
  overflow: hidden;
}

.cta-content {
  display: flex;
  align-items: center;
  gap: 60px;
}

.cta-text {
  flex: 1;
}

.cta-text h2 {
  font-size: 32px;
  margin-bottom: 20px;
}

.cta-text p {
  color: var(--text-muted);
  font-size: 16px;
  margin-bottom: 30px;
}

.cta-btn {
  font-size: 1rem;
  width: 270px;
  height: 50px;
  padding: 12px 30px;
  border-radius: 50px;
}
.cta-image-container {
  flex: 1;
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
}

.cta-images-composition {
  position: relative;
  width: 430px;
  height: 320px;
}

/* Main Pink Box */
.cta-img-main {
  position: absolute;
  width: 260px;
  height: auto;
  top: -170px;
  right: 40px;
  transform: rotate(18deg);
  z-index: 3;
  border-radius: 20px;
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.45);
}

/* Left Small Image */
.cta-img-left {
  position: absolute;
  width: 150px;
  height: 110px;
  top: 180px;
  bottom: 20px;
  left: 0px;
  transform: rotate(23deg);
  border-radius: 12px;
  object-fit: cover;
  z-index: 1;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
}

/* Right Small Image */
.cta-img-right {
  position: absolute;
  width: 150px;
  height: 110px;
  top: 200px;
  bottom: 5px;
  left: 200px;
  transform: rotate(23deg);
  border-radius: 12px;
  object-fit: cover;
  z-index: 2;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
}

/* Responsive adjustments */
@media (max-width: 992px) {
  .our-story-content,
  .why-choose-us-grid,
  .numbers-header,
  .process-cards,
  .cta-content {
    flex-direction: column;
  }

  .cta-text {
    text-align: center;
    padding-bottom: 40px;
  }

  .why-choose-us-grid {
    display: flex;
  }

  .why-cards-row {
    flex-direction: column;
  }

  .why-image-container {
    height: 300px;
  }

  .stats-row {
    flex-wrap: wrap;
    gap: 40px;
  }

  .stat-divider {
    display: none;
  }

  .stat-item {
    flex: 1 1 40%;
  }

  .image-accent-border {
    display: none;
  }
}

/* --- HOME PAGE STYLES --- */

/* Home Hero Section */
.home-hero {
  padding: 80px 0;
  border-bottom: 1px solid var(--border-color);
  background: #1A1A1A;
}

.home-hero-content {
  display: flex;
  align-items: center;
  gap: 40px;
}

.home-hero-text {
  flex: 1;
}

.home-hero-text h1 {
  font-size: 3rem;
  margin-bottom: 20px;
}

.home-hero-text p {
  color: var(--text-muted);
  margin-bottom: 30px;
  font-size: 1.1rem;
  max-width: 600px;
}

.hero-buttons {
  display: flex;
  gap: 20px;
}

.btn-outline {
  display: inline-block;
  padding: 10px 24px;
  border-radius: 4px;
  font-weight: 600;
  font-size: 0.9rem;
  border: 1px solid var(--accent-gold);
  color: var(--accent-gold);
  background: transparent;
  transition: all 0.3s ease;
  cursor: pointer;
}

.btn-outline:hover {
  background: var(--accent-gold);
  color: var(--bg-darker);
}

.home-hero-images {
  flex: 1;
  display: flex;
  gap: 20px;
  height: 400px;
}

.img-left {
  flex: 1;
  height: 100%;
}

.img-right {
  flex: 1;
  display: flex;
  flex-direction: column;
  gap: 20px;
  height: 100%;
}

.img-placeholder {
  background-color: var(--bg-card);
  border-radius: 8px;
  width: 100%;
  border: 1px solid #333;
  overflow: hidden;
  position: relative;
}

.img-placeholder img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  position: absolute;
  top: 0;
  left: 0;
}

.img-left .img-placeholder {
  height: 100%;
}

.img-right .img-placeholder.top {
  flex: 1;
}

.img-right .img-placeholder.bottom {
  flex: 1;
}

/* Reviews Strip */
.reviews-strip {
  border-bottom: 1px solid var(--border-color);
  padding: 20px 0;
  background-color: var(--bg-dark);
}

.reviews-content {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.reviews-rating {
  display: flex;
  align-items: center;
  gap: 15px;
}

.reviews-rating .stars {
  color: var(--accent-gold);
}
.reviews-link {
  font-family: Inter;
  font-weight: 500;
  font-style: Medium;
  font-size: 16px;
  padding-bottom: NONE;
  line-height: 24px;
  letter-spacing: 0%;
  text-align: justify;
  vertical-align: middle;
  text-decoration: underline;
  text-decoration-style: solid;
  text-decoration-inset: 0%;
  text-decoration-thickness: 0%;
  text-decoration-skip-ink: auto;
}

.brand-logos {
  display: flex;
  gap: 40px;
  font-size: 2rem;
  color: #555;
}

.brand-logos i:hover {
  color: #888;
}

/* Sectors Section */
.sectors-section {
  padding: 80px 0;
  background-color: var(--bg-darker);
}

.sectors-header {
  text-align: center;
  margin-bottom: 50px;
}

.section-badge-text {
  color: var(--accent-gold);
  font-size: 0.85rem;
  font-weight: 600;
  letter-spacing: 1px;
  text-transform: uppercase;
  margin-bottom: 10px;
  display: block;
}

.sectors-header h2 {
  font-size: 2.5rem;
  margin-bottom: 15px;
}

.sectors-header p {
  color: var(--text-muted);
  margin-bottom: 0;
}

.sectors-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 20px;
  margin-bottom: 50px;
}

.sector-card {
  background-color: var(--bg-dark);
  border-radius: 8px;
  overflow: hidden;
  border: 1px solid #222;
  transition:
    transform 0.3s ease,
    border-color 0.3s ease;
}

.sector-card:hover {
  transform: translateY(-5px);
  border-color: #444;
}

.sector-img-placeholder {
  width: 100%;
  aspect-ratio: 4 / 3;
  height: auto;
  background-color: #242424;
  overflow: hidden;
  position: relative;
}

.sector-img-placeholder img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  position: absolute;
  top: 0;
  left: 0;
}

.sector-info {
  padding: 20px;
}

.sector-info h3 {
  font-size: 1.1rem;
  margin-bottom: 10px;
}

.sector-info p {
  font-size: 0.85rem;
  color: var(--text-muted);
  /* line-height: 1.4; */
  font-family: Inter;
  font-weight: 400;
  font-style: Regular;
  font-size: 14px;
  padding-bottom: NONE;
  line-height: 20px;
  letter-spacing: 2%;
  vertical-align: middle;
}

.sectors-action {
  text-align: center;
}
.sectors-action .btn-primary {
  border-radius: 50px;
}
/* Discount CTA Banner */
.discount-cta {
  padding: 40px 0 80px;
  background: var(--bg-dark);
}

.discount-cta-box {
  text-align: center;
  padding: 50px 30px;
  border-radius: 16px;
  background: linear-gradient(
    180deg,
    rgba(35, 35, 35, 0.95) 0%,
    rgba(20, 20, 20, 1) 100%
  );
  border-top: 1px solid rgba(212, 175, 55, 0.15);
  border-bottom: 1px solid rgba(212, 175, 55, 0.08);
}

.discount-cta-box h2 {
  color: var(--accent-gold);
  font-size: 2rem;
  margin-bottom: 12px;
}

.discount-cta-box p {
  color: var(--text-muted);
  max-width: 700px;
  margin: 0 auto 25px;
  font-size: 0.95rem;
}

.discount-btn {
  border-radius: 50px;
  padding: 12px 30px;
}

@media (max-width: 768px) {
  .discount-cta-box {
    padding: 35px 20px;
  }

  .discount-cta-box h2 {
    font-size: 1.5rem;
  }
}
/* Premium Addons Section */
.premium-addons-section {
  padding: 90px 0;
  background: var(--bg-dark);
}

.premium-header {
  text-align: center;
  margin-bottom: 50px;
}

.premium-header h2 {
  font-size: 2.5rem;
  margin: 15px 0;
}

.premium-header p {
  color: var(--text-muted);
}

.premium-gallery {
  position: relative;
  max-width: 900px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: 1fr 0.8fr 1fr;
  grid-template-rows: 220px 220px;
  gap: 20px;
}

.premium-item {
  overflow: hidden;
  border-radius: 24px;
  background: #1a1a1a;
}

.premium-item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

/* Layout matching Figma */
.large {
  grid-row: span 1;
}

.small-top {
  height: 150px;
}

.small-bottom {
  height: 150px;
  align-self: end;
}

.large-bottom {
  grid-column: 2 / 4;
}

.premium-center-circle {
  position: absolute;
  width: 170px;
  height: 170px;
  background: #19194b;
  border-radius: 50%;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 10;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: 20px;
  border: 6px solid #121212;
}

.premium-center-circle h3 {
  font-size: 1.5rem;
  line-height: 1.3;
  color: #fff;
}

@media (max-width: 768px) {
  .premium-gallery {
    display: flex;
    flex-direction: column;
  }

  .premium-center-circle {
    position: relative;
    top: auto;
    left: auto;
    transform: none;
    margin: 20px auto;
  }

  .premium-item {
    height: 250px;
  }
}

@media (max-width: 992px) {
  .home-hero-content {
    flex-direction: column;
  }
  .sectors-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 768px) {
  .reviews-content {
    flex-direction: column;
    gap: 20px;
  }
  .brand-logos {
    flex-wrap: wrap;
    justify-content: center;
  }
  .sectors-grid {
    grid-template-columns: 1fr;
  }
}

/* Craftsmanship Section */
.craftsmanship-section {
  padding: 80px 0;
  background-color: var(--bg-darker);
}

.craftsmanship-wrapper {
  position: relative;
  border-radius: 12px;
  overflow: hidden;
  display: flex;
  align-items: center;
  min-height: 480px;
  background-image: url("./assets/rigid\ boxes.png");
  background-size: cover;
  background-position: right center;
  background-repeat: no-repeat;
}

.craftsmanship-wrapper::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(
    to right,
    rgba(15, 15, 15, 0.95) 0%,
    rgba(15, 15, 15, 0.7) 45%,
    rgba(0, 0, 0, 0) 100%
  );
  z-index: 1;
}

.craftsmanship-text-overlay {
  position: relative;
  z-index: 2;
  width: 55%;
  padding: 60px;
}

.craftsmanship-text-overlay h2 {
  font-size: 2.5rem;
  margin-bottom: 20px;
  line-height: 1.2;
}

.craftsmanship-text-overlay p {
  color: #ccc;
  font-size: 0.95rem;
  line-height: 1.6;
}

@media (max-width: 992px) {
  .craftsmanship-text-overlay {
    width: 80%;
  }
}

@media (max-width: 768px) {
  .craftsmanship-text-overlay {
    width: 100%;
    padding: 30px;
  }
  .craftsmanship-wrapper::after {
    background: linear-gradient(
      to right,
      rgba(15, 15, 15, 0.95) 0%,
      rgba(15, 15, 15, 0.8) 100%
    );
  }
}

/* Box By Style Section */
.styles-section {
  padding: 80px 0;
}

.sectors-header,
.premium-header,
.testimonials-header .blog-header {
  text-align: center;
}
.section-badge-text {
  display: inline-flex;
  align-items: center;
  justify-content: center;

  padding: 8px 16px;
  border: 1px solid var(--accent-gold);
  border-radius: 50px;

  color: var(--accent-gold);
  font-size: 0.85rem;
  font-weight: 600;
  letter-spacing: 1px;
  text-transform: uppercase;
}
.styles-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 30px;
  margin-bottom: 50px;
}

.style-card {
  text-align: center;
}

.style-img-placeholder {
  background-color: #1a1a1a;
  border-radius: 12px;
  aspect-ratio: 1 / 1.1;
  margin-bottom: 15px;
  position: relative;
  overflow: hidden;
}

.style-img-placeholder img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  position: absolute;
  top: 0;
  left: 0;
}

.style-card h4 {
  font-size: 0.95rem;
  font-weight: 600;
  color: var(--text-main);
  margin: 0;
}

@media (max-width: 992px) {
  .styles-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 768px) {
  .styles-grid {
    grid-template-columns: 1fr;
  }
}
/* WHY CHOOSE US */
.why-home-section {
  padding: 26px 0 52px !important;
  background: #181818;
}

.why-home-section .container {
  max-width: 1164px;
  padding: 0 16px;
}

.why-title {
  margin-bottom: 28px;
  font-size: 1.9rem;
  line-height: 1.2;
  text-align: left;
}

.why-home-wrapper {
  display: grid;
  grid-template-columns: minmax(0, 680px) minmax(0, 1fr);
  gap: 48px;
  align-items: center;
}

.why-cards-grid {
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: 28px 27px;
}

.why-box {
  display: grid;
  grid-template-columns: 45px minmax(0, 1fr);
  grid-template-rows: auto 1fr;
  column-gap: 11px;
  align-items: start;
  min-height: 134px;
  padding: 26px 18px 22px;
  background: #242424;
  border-radius: 8px;
}

.why-box i {
  grid-row: 1 / 3;
  display: grid;
  place-items: center;
  width: 45px;
  height: 45px;
  color: #ffc928;
  background: #181818;
  border-radius: 6px;
  font-size: 1.35rem;
}

.why-box h4 {
  margin: 0 0 3px;
  font-size: 0.91rem;
  line-height: 1.35;
  font-weight: 700;
}

.why-box p {
  color: #bcbcbc;
  font-size: 0.84rem;
  line-height: 1.55;
  text-align: justify;
}

.why-image {
  display: flex;
  align-items: center;
  justify-content: center;
  min-width: 0;
}

.why-image img {
  display: block;
  width: min(100%, 420px);
  height: 420px;
  object-fit: cover;
  object-position: center 50%;
  mix-blend-mode: normal;
  filter: brightness(1.08) contrast(1.04) saturate(1.08);
  opacity: 1;
}

@media (max-width: 992px) {
  .why-home-wrapper {
    grid-template-columns: 1fr;
    gap: 32px;
  }

  .why-cards-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .why-image img {
    height: min(520px, 70vw);
  }
}

@media (max-width: 640px) {
  .why-home-section {
    padding: 32px 0 40px !important;
  }

  .why-title {
    margin-bottom: 22px;
    font-size: 1.75rem;
  }

  .why-cards-grid {
    grid-template-columns: 1fr;
    gap: 16px;
  }

  .why-box {
    min-height: 0;
    padding: 20px 16px;
  }

  .why-box p {
    text-align: left;
  }

  .why-image img {
    width: min(100%, 390px);
    height: min(470px, 112vw);
  }
}

/* TESTIMONIALS */
.testimonials-section {
  padding: 90px 0;
  background: #161616;
}

.testimonials-header {
  text-align: center;
  margin-bottom: 50px;
}

.testimonials-header h2 {
  margin: 15px 0;
  font-size: 2.4rem;
}

.testimonials-header p {
  color: var(--text-muted);
}

.testimonial-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 25px;
}

.testimonial-card {
  position: relative;
  background: #171717;
  border: 1px solid rgba(212, 175, 55, 0.25);
  border-radius: 18px;
  padding: 50px 25px 25px;
  text-align: center;
}

.testimonial-card img {
  width: 55px;
  height: 55px;
  border-radius: 50%;
  object-fit: cover;
  position: absolute;
  top: -27px;
  left: 50%;
  transform: translateX(-50%);
  border: 3px solid #222;
}

.testimonial-card p {
  color: var(--text-muted);
  font-size: 0.9rem;
  margin-bottom: 20px;
}

.testimonial-card h4 {
  color: var(--accent-gold);
}

.testimonial-card span {
  font-size: 0.8rem;
  color: var(--text-muted);
}

.testimonial-nav {
  display: flex;
  justify-content: center;
  gap: 15px;
  margin-top: 35px;
}

.testimonial-nav button {
  width: 45px;
  height: 45px;
  border-radius: 50%;
  background: transparent;
  border: 1px solid #333;
  color: white;
  cursor: pointer;
}

/* @media (max-width: 992px) {
  .testimonial-grid {
    grid-template-columns: 1fr;
  }
} */
/* @media (max-width: 992px) {
  .testimonial-grid {
    display: flex;
    overflow-x: auto;
    padding-top: 30px;
    gap: 20px;
    scroll-snap-type: x mandatory;
    scrollbar-width: none;
  }

  .testimonial-grid::-webkit-scrollbar {
    display: none;
  }

  .testimonial-card {
    flex: 0 0 100%;
    min-width: 100%;
    scroll-snap-align: start;
  }
} */
@media (max-width: 992px) {
  .testimonial-grid {
    display: flex;
    overflow-x: auto;
    overflow-y: hidden;
    gap: 0;
    padding-top: 30px;
    scroll-snap-type: x mandatory;
  }

  .testimonial-card {
    flex: 0 0 100%;
    min-width: 100%;
    scroll-snap-align: start;
  }
  .testimonial-grid::-webkit-scrollbar {
    height: 6px;
  }

  .testimonial-grid::-webkit-scrollbar-thumb {
    background: var(--accent-gold);
    border-radius: 10px;
  }
}
/* ORDER + QUOTE SECTION */
.quote-process-section {
  padding: 90px 0;
  background: var(--bg-dark);
}

.quote-process-grid {
  display: grid;
  grid-template-columns: 0.8fr 1.2fr;
  gap: 40px;
  margin-bottom: 80px;
}

.steps-column h2,
.quote-form-wrapper h2 {
  margin-bottom: 35px;
  font-size: 2rem;
}

/* Steps */

.step-item {
  display: flex;
  gap: 18px;
  margin-bottom: 35px;
}

.step-number {
  color: var(--accent-gold);
  font-size: 1.8rem;
  font-weight: 700;
  min-width: 55px;
}

.step-item h4 {
  margin-bottom: 8px;
}

.step-item p {
  color: var(--text-muted);
  font-size: 0.9rem;
}

/* Form */

.quote-form-wrapper {
  background: #181818;
  padding: 40px;
  border-radius: 12px;
}

.quote-form input,
.quote-form select,
.quote-form textarea {
  width: 100%;
  background: #111;
  border: 1px solid #222;
  color: white;
  padding: 12px;
  border-radius: 6px;
}

.quote-form textarea {
  height: 120px;
  resize: none;
}

.form-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 15px;
  margin-bottom: 15px;
}

.dimension-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 15px;
  margin-bottom: 15px;
}

.quote-btn {
  width: 220px;
  display: block;
  margin: 25px auto 0;
  border-radius: 40px;
}

/* Packaging Guide */

.packaging-guide {
  display: grid;
  grid-template-columns: 2fr 1fr;
  gap: 30px;
}

.guide-content,
.guide-sidebar {
  background: #181818;
  padding: 30px;
  border-radius: 12px;
}

.guide-badge {
  display: inline-block;
  color: var(--accent-gold);
  border: 1px solid var(--accent-gold);
  padding: 6px 12px;
  border-radius: 30px;
  font-size: 12px;
  margin-bottom: 15px;
}

.guide-content h2 {
  margin-bottom: 20px;
}

.guide-content p,
.guide-content li,
.guide-sidebar li {
  color: var(--text-muted);
}

.guide-content ul,
.guide-sidebar ol {
  padding-left: 20px;
  margin-top: 15px;
}

@media (max-width: 992px) {
  .quote-process-grid,
  .packaging-guide {
    grid-template-columns: 1fr;
  }

  .form-grid,
  .dimension-grid {
    grid-template-columns: 1fr;
  }
}
.guide-sidebar {
  background: #181818;
  padding: 30px;
  border-radius: 12px;
  display: flex;
  flex-direction: column;
}

.guide-sidebar hr {
  border: none;
  height: 1px;
  background: rgba(255, 255, 255, 0.08);
  margin: 25px 0;
}

.sidebar-block h3 {
  margin-bottom: 15px;
  font-size: 1.1rem;
}

.sidebar-block p,
.sidebar-block li {
  color: var(--text-muted);
  font-size: 0.9rem;
  line-height: 1.7;
}

.sidebar-btn {
  margin-top: 25px;
  align-self: flex-start;
  border-radius: 40px;
  padding: 12px 25px;
}

.custom-box-section {
  padding: 60px 20px;
}
.custom-box {
  width: 100%;
  display: flex;
  justify-content: center;
  padding: 0 20px; /* spacing from screen edges */
  box-sizing: border-box;
}

.custom-box-img {
  width: 100%;
  max-width: 1200px;
}

.custom-box img {
  display: block;
  width: 100%;
  height: auto;
  margin: 0 auto;
}
/* ==========================================================================
   BLOG SECTION (Figma Exact Match)
   ========================================================================== */

.blog-section {
  padding: 90px 0;
  background: #111111; /* Matches dark context theme background */
}

.blog-header {
  text-align: center;
  margin-bottom: 50px;
}

.blog-header h2 {
  font-size: 2.5rem;
  margin: 15px 0;
  font-family: var(--font-heading);
}

.blog-header p {
  color: var(--text-muted);
  font-family: var(--font-body);
}

/* 2-Column Responsive Grid Layout */
.blog-grid {
  display: grid;
  grid-template-columns: 1.15fr 0.85fr;
  gap: 50px;
  align-items: start;
}

/* --- Left Side: Featured Card --- */
.blog-main-card {
  display: flex;
  flex-direction: column;
}

.main-image-wrapper {
  width: 100%;
  height: 312px;
  background: #d9d9d9;
  border-radius: 10px;
  border: 1px solid #000000;
  overflow: hidden;
  margin-bottom: 15px;
}

.main-image-wrapper img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.blog-main-card h4 {
  font-family: var(--font-heading);
  font-size: 1.5rem;
  font-weight: 600;
  margin: 10px 0;
  line-height: 1.3;
}

.blog-main-card p {
  color: var(--text-muted);
  font-family: var(--font-body);
  font-size: 0.95rem;
  line-height: 1.6;
}

/* Shared Meta Data Styling (Author & Date) */
.card-meta {
  display: flex;
  justify-content: space-between;
  width: 100%;
  margin-bottom: 4px;
}

.card-meta .author,
.card-meta .date {
  font-family: var(--font-body);
  font-weight: 400;
  font-size: 14px;
  color: var(--text-muted);
  line-height: 28px;
}

/* --- Right Side: Sidebar List Stack --- */
.blog-sidebar-list {
  display: flex;
  flex-direction: column;
  gap: 30px;
}

.blog-side-card {
  display: flex;
  gap: 20px;
  align-items: flex-start;
}

/* Exact dimensions & parameters from Rectangle 8222 inspection panel */
.side-card-img {
  width: 139px;
  height: 140px;
  background: #d9d9d9;
  border-radius: 10px;
  border: 0.5px solid #000000;
  object-fit: cover;
  flex-shrink: 0;
}

.side-card-content {
  flex-grow: 1;
}

.side-card-content h4 {
  font-family: var(--font-heading);
  font-size: 1rem;
  font-weight: 600;
  line-height: 1.4;
  margin: 4px 0 6px 0;
  color: var(--text-main);
}

.side-card-content p {
  color: var(--text-muted);
  font-family: var(--font-body);
  font-size: 0.85rem;
  line-height: 1.5;
}

/* Right-aligned "View All" matching link styling */
.view-all-wrapper {
  text-align: right;
  margin-top: 5px;
}

.view-all-link {
  color: var(--accent-gold);
  font-family: var(--font-body);
  font-weight: 600;
  font-size: 0.9rem;
  display: inline-flex;
  align-items: center;
  gap: 5px;
}

.view-all-link:hover {
  color: #ffffff;
}

/* Mobile & Tablet Responsiveness */
@media (max-width: 992px) {
  .blog-grid {
    grid-template-columns: 1fr;
    gap: 40px;
  }
}

@media (max-width: 576px) {
  .blog-side-card {
    flex-direction: column;
  }
  .side-card-img {
    width: 100%;
    height: 180px;
  }
}
/* ==========================================================================
   EXTRAORDINARY CTA SECTION (Figma Exact Match)
   ========================================================================== */

.extraordinary-cta-section {
  position: relative;
  padding: 100px 0;
  background-color: #141414; /* Dark gray tint base */

  /* Stacks your dark radial lighting gradient, an 85% opacity dimming overlay, and the box image together */
  background:
    radial-gradient(
      circle at center,
      rgba(30, 30, 30, 0.85) 0%,
      rgba(13, 13, 13, 0.85) 100%
    ),
    url("./assets/CTA\ section\ bg.png");

  /* Keeps the rigid box centered, uncropped, and prevents it from duplicating */
  background-position: center center;
  background-repeat: no-repeat;
  background-size: contain;

  text-align: center;
  border-top: 1px solid rgba(255, 255, 255, 0.03);
}

.extraordinary-content {
  max-width: 850px;
  margin: 0 auto;
}

.extraordinary-content h2 {
  font-family: var(--font-heading);
  font-size: 2.5rem;
  font-weight: 600;
  margin-bottom: 20px;
  letter-spacing: -0.5px;
}

.extraordinary-content p {
  color: var(--text-muted);
  font-family: var(--font-body);
  font-size: 1.05rem;
  line-height: 1.6;
  max-width: 680px;
  margin: 0 auto 45px auto;
}

/* Feature Icons Row Grid */
.extraordinary-features {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 50px;
  margin-bottom: 50px;
  flex-wrap: wrap;
}

.ex-feature-item {
  display: flex;
  align-items: center;
  gap: 10px;
  font-family: var(--font-body);
  font-size: 0.95rem;
  color: var(--text-main);
  font-weight: 500;
}

.ex-icon {
  color: var(--accent-gold);
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 32px;
  height: 32px;
  background-color: rgba(245, 197, 66, 0.08); /* Transparent gold tint */
  border-radius: 50%;
  padding: 6px;
}

.ex-icon svg {
  width: 100%;
  height: 100%;
}

/* Yellow Quote Button Custom Parameters */
.extraordinary-btn {
  border-radius: 50px;
  font-size: 1rem;
  padding: 14px 36px;
  letter-spacing: 0.2px;
  box-shadow: 0 10px 25px rgba(245, 197, 66, 0.15);
  background-color: var(--accent-gold);
  color: #000000;
  font-weight: 600;
}

.extraordinary-btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 12px 30px rgba(245, 197, 66, 0.25);
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .extraordinary-cta-section {
    padding: 70px 0;
  }

  .extraordinary-content h2 {
    font-size: 2rem;
  }

  .extraordinary-features {
    flex-direction: column;
    gap: 25px;
    align-items: flex-start;
    max-width: 280px;
    margin: 0 auto 40px auto;
  }
}
/* Compact section spacing */
section {
  padding-top: 35px !important;
  padding-bottom: 35px !important;
}

/* Remove large gaps between consecutive sections */
section + section {
  margin-top: 4px;
}
@media (max-width: 576px) {
  .brand-logos {
    gap: 15px;
    justify-content: center;
  }

  .brand-logos img {
    height: 28px;
  }
}
/* ===================================
   MOBILE HERO FIX
   =================================== */

@media screen and (max-width: 576px) {
  .home-hero {
    padding: 30px 0;
  }

  .home-hero-content {
    display: flex;
    flex-direction: column;
    gap: 20px;
  }

  .home-hero-text {
    width: 100%;
  }

  .home-hero-text h1 {
    font-size: 2.4rem;
    line-height: 1.15;
    word-break: break-word;
  }

  .home-hero-text p {
    font-size: 1rem;
    max-width: 100%;
  }

  .hero-buttons {
    flex-direction: column;
    width: 100%;
  }

  .hero-buttons .btn {
    width: 100%;
    text-align: center;
  }

  /* Images stack vertically */
  .home-hero-images {
    width: 100%;
    height: auto;
    flex-direction: column;
    gap: 15px;
  }

  .img-left,
  .img-right {
    width: 100%;
  }

  .img-right {
    flex-direction: column;
  }

  .img-placeholder {
    height: 220px;
    position: relative;
  }

  .img-left .img-placeholder {
    height: 280px;
  }

  .img-placeholder img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
}

/* Mobile Responsive Styles for Premium Addons Section */
@media (max-width: 768px) {
  /* Reduce padding for smaller screens */
  .premium-addons-section {
    padding: 40px 0;
  }

  /* Change the 3-column grid to a clean 2-column layout */
  .premium-gallery {
    grid-template-columns: repeat(2, 1fr) !important;
    gap: 15px !important;
    position: relative;
  }

  /* Reset tracks to let them flow naturally in the 2-column layout */
  .premium-item.track-1,
  .premium-item.track-2,
  .premium-item.track-3,
  .premium-item.track-4,
  .premium-item.track-5,
  .premium-item.track-6 {
    grid-column: auto !important;
    grid-row: auto !important;
    height: 200px; /* Adjust height for mobile view cards */
  }

  /* Handle the center circle badge so it doesn't overlap images awkwardly */
  .premium-center-circle {
    grid-column: span 2 !important; /* Make it take full width of the mobile grid */
    grid-row: auto !important;
    position: static !important; /* Remove absolute centering */
    transform: none !important;
    margin: 15px auto;
    width: 100% !important;
    max-width: 280px;
    height: auto !important;
    aspect-ratio: 1 / 1;
    border-radius: 50%;
    padding: 20px;
    box-sizing: border-box;
  }
}

/* Extra small devices (phones down to 480px) */
@media (max-width: 480px) {
  .premium-gallery {
    grid-template-columns: 1fr !important; /* Stack images in a single column */
  }

  .premium-center-circle {
    grid-column: span 1 !important;
  }
}
/* ==========================================================================
   MASTER MOBILE & TABLET RESPONSIVENESS (Agressive Cut-Off Fix)
   ========================================================================== */

/* 1. Global Reset Safety Measures for All Screen Sizes */
@media (max-width: 992px) {
  html,
  body {
    width: 100% !important;
    max-width: 100% !important;
    overflow-x: hidden !important;
    position: relative;
  }

  /* Force everything to wrap text naturally instead of forcing horizontal clips */
  h1,
  h2,
  h3,
  h4,
  h5,
  h6,
  p,
  span,
  a,
  div {
    white-space: normal !important;
    word-wrap: break-word !important;
    overflow-wrap: break-word !important;
  }

  .container {
    width: 100% !important;
    max-width: 100% !important;
    padding-left: 20px !important;
    padding-right: 20px !important;
    box-sizing: border-box !important;
    overflow: hidden !important;
  }
}

/* 2. Tablet Viewports (max-width: 992px) */
@media (max-width: 992px) {
  /* Break all horizontal layouts into clean vertical rows */
  .our-story-content,
  .why-choose-us-grid,
  .numbers-header,
  .process-cards,
  .cta-content,
  .home-hero-content,
  .why-home-wrapper,
  .quote-process-grid,
  .packaging-guide {
    flex-direction: column !important;
    display: flex !important;
    width: 100% !important;
  }

  /* Convert grids to standard vertical flow blocks */
  .sectors-grid,
  .styles-grid {
    grid-template-columns: repeat(2, 1fr) !important;
    gap: 20px !important;
    width: 100% !important;
  }

  .blog-grid {
    grid-template-columns: 1fr !important;
    gap: 40px;
    width: 100% !important;
  }

  .why-cards-grid,
  .form-grid,
  .dimension-grid,
  .testimonial-grid {
    grid-template-columns: 1fr !important;
    width: 100% !important;
  }

  /* Content Structural Tweaks */
  .cta-text {
    text-align: center;
    padding-bottom: 40px;
  }

  .why-image-container,
  .why-image,
  .why-image img {
    height: auto !important;
    width: 100% !important;
    max-width: 100% !important;
  }

  .stats-row {
    flex-wrap: wrap;
    gap: 40px;
  }

  .stat-divider {
    display: none;
  }

  .stat-item {
    flex: 1 1 40%;
  }

  .image-accent-border {
    display: none !important; /* Prevents rogue absolute borders from clipping edges */
  }

  .craftsmanship-text-overlay {
    width: 100% !important;
    padding: 40px 20px !important;
  }
}

/* 3. Mobile Viewports (max-width: 768px) */
@media (max-width: 768px) {
  .reviews-content {
    flex-direction: column !important;
    gap: 20px;
    text-align: center;
  }

  .brand-logos {
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px !important;
  }

  .sectors-grid,
  .styles-grid {
    grid-template-columns: 1fr !important;
  }

  .craftsmanship-wrapper {
    background-position: center !important;
    min-height: auto !important;
  }

  .craftsmanship-wrapper::after {
    background: rgba(15, 15, 15, 0.85) !important;
  }

  /* Fixes the overlap/cut off in Premium Addons Gallery */
  .premium-gallery {
    display: flex !important;
    flex-direction: column !important;
    gap: 15px !important;
    height: auto !important; /* Overrides any desktop height limits */
  }

  .premium-item {
    height: 200px !important;
    width: 100% !important;
  }

  .premium-center-circle {
    position: relative !important;
    top: auto !important;
    left: auto !important;
    transform: none !important;
    margin: 20px auto !important;
    width: 150px !important;
    height: 150px !important;
  }

  /* Fixes the multi-layered stacked images layout in CTA section */
  .cta-images-composition {
    display: flex !important;
    flex-direction: column !important;
    gap: 15px !important;
    width: 100% !important;
    height: auto !important; /* Crucial: kills the static desktop layout canvas */
  }

  .cta-img-main,
  .cta-img-left,
  .cta-img-right {
    position: relative !important;
    top: auto !important;
    left: auto !important;
    right: auto !important;
    bottom: auto !important;
    transform: none !important;
    width: 100% !important;
    height: auto !important;
    border-radius: 12px !important;
  }

  .extraordinary-cta-section {
    padding: 60px 0;
  }

  .extraordinary-content h2 {
    font-size: 1.8rem;
  }

  .extraordinary-features {
    flex-direction: column;
    gap: 20px;
    align-items: center;
    width: 100%;
  }
}

/* 4. Small Devices / Phone Views (max-width: 576px) */
@media screen and (max-width: 576px) {
  .home-hero {
    padding: 30px 0;
  }

  /* Shrink text sizing down so words don't overflow viewport boundaries */
  .home-hero-text h1,
  .hero-text-container h1,
  .story-text h2,
  .why-text h2,
  .sectors-header h2,
  .premium-header h2,
  .blog-header h2 {
    font-size: 2rem !important;
    line-height: 1.2 !important;
  }

  .hero-buttons {
    flex-direction: column;
    width: 100% !important;
    gap: 12px;
  }

  .hero-buttons .btn,
  .cta-btn,
  .discount-btn,
  .quote-btn {
    width: 100% !important;
    text-align: center;
    box-sizing: border-box;
  }

  /* Fixes Home Page multi-image placeholder container cut-offs */
  .home-hero-images {
    width: 100% !important;
    height: auto !important;
    flex-direction: column !important;
    gap: 15px;
  }

  .img-left,
  .img-right {
    width: 100% !important;
    height: auto !important;
    flex-direction: column !important;
  }

  .img-placeholder {
    height: 200px !important;
    position: relative !important;
  }

  .img-placeholder img {
    position: absolute !important;
  }

  /* Make sure side blogs stack elegantly */
  .blog-side-card {
    flex-direction: column !important;
    align-items: stretch !important;
    gap: 12px;
  }

  .side-card-img {
    width: 100% !important;
    height: 180px !important;
  }

  .brand-logos img {
    height: 24px !important;
  }

  /* Stop custom box image row from getting weird margins */
  .custom-box-section,
  .custom-box {
    padding: 20px 0 !important;
    margin: 0 !important;
  }
}

/* Keep the Why Choose Us layout intact after the global responsive overrides. */
@media (min-width: 641px) and (max-width: 992px) {
  .why-cards-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
  }

  .why-image img {
    width: min(100%, 420px) !important;
    height: min(520px, 70vw) !important;
    object-fit: cover;
  }
}

@media (max-width: 640px) {
  .why-cards-grid {
    grid-template-columns: 1fr !important;
  }

  .why-image img {
    width: min(100%, 390px) !important;
    height: min(470px, 112vw) !important;
    object-fit: cover;
  }
}

/* Home hero: single image first on tablet and mobile */
@media (min-width: 577px) and (max-width: 992px) {
  .home-hero-content {
    display: flex !important;
    flex-direction: column !important;
    gap: 34px !important;
  }

  .home-hero-images {
    order: 1;
    display: block !important;
    width: 100% !important;
    height: clamp(320px, 52vw, 430px) !important;
  }

  .home-hero-images .img-left,
  .home-hero-images .img-left .img-placeholder {
    display: block !important;
    width: 100% !important;
    height: 100% !important;
  }

  .home-hero-images .img-right {
    display: none !important;
  }

  .home-hero-images .img-left img {
    width: 100% !important;
    height: 100% !important;
    object-fit: cover;
    object-position: center 72%;
  }

  .home-hero-text {
    order: 2;
  }
}

/* Home hero: mobile composition */
@media (max-width: 576px) {
  .home-hero {
    padding: 32px 0 24px !important;
    background: #171717;
    border-bottom: 0;
  }

  .home-hero .container {
    padding-right: 30px !important;
    padding-left: 30px !important;
  }

  .home-hero-content {
    display: flex !important;
    flex-direction: column !important;
    gap: 30px !important;
  }

  .home-hero-images {
    order: 1;
    display: block !important;
    width: 100% !important;
    height: 318px !important;
  }

  .home-hero-images .img-left {
    display: block !important;
    width: 100% !important;
    height: 100% !important;
  }

  .home-hero-images .img-right {
    display: none !important;
  }

  .home-hero-images .img-placeholder,
  .home-hero-images .img-left .img-placeholder,
  .home-hero-images .img-right .img-placeholder {
    width: 100% !important;
    height: 100% !important;
    min-height: 0;
    border: 0;
    border-radius: 6px;
  }

  .home-hero-images .img-placeholder img {
    inset: 0;
    display: block;
    width: 100% !important;
    height: 100% !important;
    object-fit: cover;
    object-position: center 72%;
  }

  .home-hero-text {
    order: 2;
    width: 100%;
    text-align: center;
  }

  .home-hero-text h1 {
    max-width: 420px;
    margin: 0 auto 18px;
    font-size: 1.92rem !important;
    line-height: 1.2 !important;
  }

  .home-hero-text p {
    max-width: 100%;
    margin: 0 0 24px;
    color: #c5c5c5;
    font-size: 0.97rem;
    line-height: 1.65;
    text-align: justify;
  }

  .home-hero .hero-buttons {
    display: flex;
    flex-direction: row;
    gap: 12px;
    width: 100% !important;
  }

  .home-hero .hero-buttons .btn {
    flex: 1 1 0;
    width: auto !important;
    min-width: 0;
    padding: 12px 8px;
    border-radius: 999px;
    font-size: 0.79rem;
    line-height: 1.2;
    white-space: nowrap !important;
  }

  .reviews-strip {
    padding: 30px 0 !important;
    background: #141414;
  }

  .reviews-strip .reviews-rating {
    display: none;
  }

  .reviews-strip .reviews-content {
    display: block !important;
  }

  .reviews-strip .brand-logos {
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 24px !important;
    width: 100%;
    align-items: center;
  }

  .reviews-strip .brand-logos img {
    width: 100%;
    max-width: 62px;
    height: 42px !important;
    margin: 0 auto;
    object-fit: contain;
    opacity: 0.82;
  }

  .reviews-strip .brand-logos img:nth-child(n + 5) {
    display: none;
  }
}

@media (max-width: 390px) {
  .home-hero .container {
    padding-right: 20px !important;
    padding-left: 20px !important;
  }

  .home-hero-images {
    height: 280px !important;
  }

  .home-hero-text h1 {
    font-size: 1.7rem !important;
  }

  .home-hero .hero-buttons {
    gap: 8px;
  }

  .home-hero .hero-buttons .btn {
    padding: 11px 6px;
    font-size: 0.7rem;
  }
}

/* Box By Style: Figma mobile layout */
@media (max-width: 768px) {
  .styles-section {
    padding: 30px 0 50px !important;
    background: #202020;
  }

  .styles-section .container {
    padding-right: 20px !important;
    padding-left: 20px !important;
  }

  .styles-section .sectors-header {
    margin-bottom: 46px;
  }

  .styles-section .section-badge-text {
    min-width: 148px;
    margin-bottom: 16px;
    padding: 8px 16px;
    font-size: 0.75rem;
    line-height: 1.4;
  }

  .styles-section .sectors-header h2 {
    margin-bottom: 12px;
    font-size: 1.72rem !important;
    line-height: 1.25 !important;
  }

  .styles-section .sectors-header p {
    max-width: 410px;
    margin: 0 auto;
    color: #c5c5c5;
    font-size: 0.96rem;
    line-height: 1.7;
  }

  .styles-section .styles-grid {
    display: grid !important;
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
    gap: 32px 18px !important;
    width: 100% !important;
    margin-bottom: 48px;
  }

  .styles-section .style-card {
    min-width: 0;
  }

  .styles-section .style-img-placeholder {
    width: 100%;
    aspect-ratio: 1 / 1;
    margin-bottom: 14px;
    background: #242424;
    border: 1px solid #2d2b24;
    border-radius: 16px;
  }

  .styles-section .style-img-placeholder img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .styles-section .style-card h4 {
    font-size: 0.98rem;
    line-height: 1.35;
    font-weight: 700;
  }

  .styles-section .sectors-action .btn {
    padding: 12px 28px;
    border-radius: 999px;
  }
}

@media (max-width: 390px) {
  .styles-section .styles-grid {
    gap: 26px 14px !important;
  }

  .styles-section .style-card h4 {
    font-size: 0.86rem;
  }
}

/* Show the same desktop hero artwork above the copy on smaller screens. */
@media (max-width: 992px) {
  .home-hero::before {
    content: "";
    display: block;
    width: calc(100% - 40px);
    max-width: 760px;
    height: clamp(280px, 48vw, 390px);
    margin: 0 auto 32px;
    background-image: url("./assets/Home banner center image.png");
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
  }

  .home-hero .home-hero-images {
    display: none !important;
  }
}

@media (max-width: 576px) {
  .home-hero::before {
    width: calc(100% - 40px);
    height: 270px;
    margin-bottom: 28px;
  }
}

/* Craftsmanship: Figma mobile layout */
@media (max-width: 768px) {
  .craftsmanship-section {
    padding: 64px 0 0 !important;
    background: #1b1b1b;
  }

  .craftsmanship-section .container {
    padding-right: 0 !important;
    padding-left: 0 !important;
    overflow: visible !important;
  }

  .craftsmanship-wrapper {
    min-height: 656px !important;
    border-radius: 0;
    align-items: center;
    background-size: cover;
    background-position: center center !important;
  }

  .craftsmanship-wrapper::after {
    background: linear-gradient(
      90deg,
      rgba(12, 12, 12, 0.78) 0%,
      rgba(12, 12, 12, 0.62) 58%,
      rgba(12, 12, 12, 0.5) 100%
    ) !important;
  }

  .craftsmanship-text-overlay {
    width: 100% !important;
    padding: 0 20px !important;
  }

  .craftsmanship-text-overlay .section-badge-text {
    margin-bottom: 16px;
    padding: 8px 16px;
    font-size: 0.73rem;
    line-height: 1.35;
  }

  .craftsmanship-text-overlay h2 {
    margin-bottom: 14px;
    font-size: 1.72rem !important;
    line-height: 1.2 !important;
  }

  .craftsmanship-text-overlay p {
    margin: 0;
    color: #d0d0d0;
    font-size: 0.97rem;
    line-height: 1.72;
    text-align: justify;
  }
}

@media (max-width: 390px) {
  .craftsmanship-wrapper {
    min-height: 610px !important;
  }

  .craftsmanship-text-overlay {
    padding: 0 18px !important;
  }

  .craftsmanship-text-overlay h2 {
    font-size: 1.55rem !important;
  }

  .craftsmanship-text-overlay p {
    font-size: 0.9rem;
    line-height: 1.65;
  }
}

/* Explore categories button: Figma mobile sizing */
@media (max-width: 768px) {
  .sectors-section .sectors-action .btn {
    width: 268px;
    max-width: 100%;
    min-height: 52px;
    padding: 14px 24px;
    border-radius: 999px;
    font-size: 1rem;
    line-height: 1.45;
    text-align: center;
  }

  .premium-center-circle {
    display: none !important;
  }
}

/* Quote form field structure */
.quote-full-fields,
.quote-field-pair {
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: 15px;
  margin-bottom: 15px;
}

.quote-field {
  display: flex;
  min-width: 0;
  flex-direction: column;
  gap: 9px;
}

.quote-field label {
  font-size: 0.9rem;
  line-height: 1.4;
}

.quote-form .file-input {
  display: none !important;
}

.upload-control {
  display: flex;
  align-items: center;
  justify-content: space-between;
  min-height: 52px;
  overflow: hidden;
  color: #777;
  background: #111;
  border: 1px solid #2e2e2e;
  border-radius: 6px;
  cursor: pointer;
}

.upload-control span {
  padding: 0 22px;
}

.upload-control strong {
  align-self: stretch;
  display: grid;
  min-width: 110px;
  place-items: center;
  color: #111;
  background: var(--accent-gold);
}

/* Quote form: Figma mobile layout */
@media (max-width: 768px) {
  .quote-process-section {
    padding: 28px 0 64px !important;
    background: #161616;
  }

  .quote-process-section > .container {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }

  .quote-process-grid {
    gap: 36px;
    margin-bottom: 48px;
  }

  .quote-process-section .steps-column,
  .quote-process-section .packaging-guide {
    margin-right: 20px;
    margin-left: 20px;
  }

  .quote-form-wrapper {
    width: 100%;
    padding: 34px 20px 36px;
    background: #202020;
    border-radius: 8px;
  }

  .quote-form-wrapper h2 {
    margin-bottom: 34px;
    font-size: 1.65rem;
    line-height: 1.25;
    text-align: center;
  }

  .quote-full-fields {
    grid-template-columns: 1fr;
    gap: 16px;
    margin-bottom: 16px;
  }

  .quote-field-pair {
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 8px;
    margin-bottom: 16px;
  }

  .quote-field {
    gap: 9px;
  }

  .quote-field label {
    color: #f2f2f2;
    font-size: 0.94rem;
  }

  .quote-form input,
  .quote-form select,
  .quote-form textarea {
    min-width: 0;
    min-height: 52px;
    padding: 13px 22px;
    color: #f4f4f4;
    background: #181818;
    border: 1px solid #343434;
    border-radius: 8px;
    font-family: var(--font-body);
    font-size: 0.9rem;
  }

  .quote-form select {
    padding-right: 34px;
  }

  .quote-form textarea {
    height: 92px;
  }

  .upload-control {
    min-height: 52px;
    background: #181818;
    border-color: #343434;
    border-radius: 8px;
  }

  .upload-control span {
    min-width: 0;
    padding: 0 22px;
    overflow: hidden;
    font-size: 0.9rem;
    text-overflow: ellipsis;
    white-space: nowrap !important;
  }

  .upload-control strong {
    min-width: 110px;
    font-size: 0.9rem;
  }

  .quote-form .quote-btn {
    width: min(80%, 320px) !important;
    min-height: 54px;
    margin: 38px auto 0;
    padding: 13px 24px;
    border: 0;
    border-radius: 999px;
    font-size: 1rem;
  }
}

@media (max-width: 390px) {
  .quote-form-wrapper {
    padding-right: 16px;
    padding-left: 16px;
  }

  .quote-field-pair {
    gap: 7px;
  }

  .quote-form input,
  .quote-form select,
  .quote-form textarea {
    padding-right: 14px;
    padding-left: 14px;
    font-size: 0.82rem;
  }

  .upload-control span {
    padding: 0 14px;
  }

  .upload-control strong {
    min-width: 94px;
  }
}

/* Packaging guide: Figma mobile layout */
@media (max-width: 768px) {
  .quote-process-section .packaging-guide {
    display: flex !important;
    flex-direction: column !important;
    gap: 44px;
    width: auto !important;
    margin: 0 28px;
  }

  .guide-content {
    padding: 0;
    background: transparent;
    border-radius: 0;
  }

  .guide-badge {
    margin-bottom: 34px;
    padding: 10px 26px;
    border-radius: 999px;
    font-size: 0.78rem;
    line-height: 1.4;
  }

  .guide-content h2 {
    margin-bottom: 4px;
    font-size: 1.65rem;
    line-height: 1.85;
  }

  .guide-content p {
    margin: 0;
    color: #c9c9c9;
    font-size: 1rem;
    line-height: 1.75;
    text-align: justify;
  }

  .guide-content p + p {
    margin-top: 4px;
  }

  .guide-content > h3,
  .guide-content > ul {
    display: none;
  }

  .guide-sidebar {
    gap: 22px;
    padding: 26px;
    background: #202020;
    border-radius: 8px;
  }

  .guide-faq h3 {
    margin-bottom: 10px;
    font-size: 1.2rem;
    line-height: 1.35;
  }

  .guide-faq ol {
    margin: 0;
    padding: 0;
    list-style: none;
    counter-reset: guide-faq;
  }

  .guide-faq li {
    counter-increment: guide-faq;
    display: grid;
    grid-template-columns: auto minmax(0, 1fr) auto;
    gap: 10px;
    align-items: center;
    min-height: 56px;
    padding: 10px 0;
    color: #c9c9c9;
    border-bottom: 1px solid #404040;
    font-size: 0.94rem;
    line-height: 1.4;
  }

  .guide-faq li::before {
    content: counter(guide-faq) ".";
    color: var(--accent-gold);
    font-weight: 700;
  }

  .guide-faq .faq-plus {
    color: #d8d8d8;
    font-size: 1.15rem;
  }

  .guide-help {
    padding: 16px 14px 14px;
    text-align: center;
    background: #181818;
    border-radius: 8px;
  }

  .guide-help h3 {
    margin: 0 0 2px;
    font-size: 1.1rem;
    font-weight: 500;
  }

  .guide-help p {
    margin: 0;
    color: #bdbdbd;
    font-size: 0.72rem;
    line-height: 1.4;
  }

  .guide-help .sidebar-btn {
    align-self: auto;
    display: block;
    width: min(230px, 100%);
    margin: 10px auto 0;
    padding: 10px 20px;
    border-radius: 999px;
    font-size: 0.86rem;
    line-height: 1.35;
  }
}

@media (max-width: 390px) {
  .quote-process-section .packaging-guide {
    margin-right: 18px;
    margin-left: 18px;
  }

  .guide-sidebar {
    padding: 20px 16px;
  }

  .guide-content h2 {
    font-size: 1.45rem;
  }

  .guide-content p {
    font-size: 0.92rem;
  }

  .guide-faq li {
    gap: 7px;
    font-size: 0.84rem;
  }
}

/* Blog: show one featured article on mobile */
@media (max-width: 768px) {
  .blog-section {
    padding: 50px 0 60px !important;
    background: #181818;
  }

  .blog-section .container {
    padding-right: 20px !important;
    padding-left: 20px !important;
  }

  .blog-header {
    margin-bottom: 34px;
  }

  .blog-header .section-badge-text {
    margin-bottom: 14px;
    padding: 8px 22px;
    font-size: 0.75rem;
  }

  .blog-header h2 {
    margin: 0 0 12px;
    font-size: 1.75rem !important;
    line-height: 1.25 !important;
  }

  .blog-header p {
    max-width: 410px;
    margin: 0 auto;
    font-size: 0.94rem;
    line-height: 1.65;
  }

  .blog-grid {
    display: block !important;
  }

  .blog-sidebar-list {
    display: none !important;
  }

  .blog-main-card {
    width: 100%;
  }

  .main-image-wrapper {
    width: 100%;
    height: auto;
    aspect-ratio: 16 / 10;
    border-radius: 8px;
  }

  .blog-main-card .card-meta {
    margin-top: 13px;
    margin-bottom: 2px;
  }

  .blog-main-card .card-meta span {
    font-size: 0.78rem;
    line-height: 1.5;
  }

  .blog-main-card h4 {
    margin: 8px 0;
    font-size: 1.25rem;
    line-height: 1.35;
  }

  .blog-main-card p {
    font-size: 0.9rem;
    line-height: 1.65;
  }
}

/* Quote process: Figma desktop layout */
@media (min-width: 993px) {
  .quote-process-section {
    padding: 28px 0 60px !important;
    background: #181818;
  }

  .quote-process-section > .container {
    max-width: 1056px;
  }

  .quote-process-grid {
    display: grid;
    grid-template-columns: 310px minmax(0, 664px);
    gap: 50px;
    align-items: start;
    margin-bottom: 80px;
  }

  .steps-column h2 {
    margin-bottom: 30px;
    font-size: 1.75rem;
    line-height: 1.25;
  }

  .step-item {
    gap: 14px;
    margin-bottom: 54px;
  }

  .step-number {
    min-width: 32px;
    font-size: 1.45rem;
    line-height: 1.2;
  }

  .step-item h4 {
    margin-bottom: 6px;
    font-size: 0.78rem;
    line-height: 1.35;
  }

  .step-item p {
    color: #c5c5c5;
    font-size: 0.77rem;
    line-height: 1.45;
    text-align: justify;
  }

  .quote-form-wrapper {
    width: 100%;
    padding: 30px 46px 24px;
    background: #202020;
    border-radius: 8px;
  }

  .quote-form-wrapper h2 {
    margin-bottom: 24px;
    font-size: 1.75rem;
    line-height: 1.25;
    text-align: center;
  }

  .quote-full-fields {
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 10px;
    margin-bottom: 10px;
  }

  .quote-dimensions {
    grid-template-columns: repeat(4, minmax(0, 1fr));
  }

  .quote-options {
    grid-template-columns: repeat(3, minmax(0, 1fr));
  }

  .quote-order-fields {
    grid-template-columns: 1.15fr 0.85fr;
  }

  .quote-field-pair {
    gap: 10px;
    margin-bottom: 10px;
  }

  .quote-turnaround-field {
    display: none;
  }

  .quote-field {
    gap: 6px;
  }

  .quote-field label {
    font-size: 0.7rem;
    line-height: 1.25;
  }

  .quote-form input,
  .quote-form select,
  .quote-form textarea {
    min-width: 0;
    min-height: 41px;
    padding: 10px 16px;
    background: #181818;
    border: 1px solid #343434;
    border-radius: 6px;
    font-family: var(--font-body);
    font-size: 0.72rem;
  }

  .quote-form textarea {
    height: 90px;
  }

  .upload-control {
    min-height: 41px;
    background: #181818;
    border-color: #343434;
  }

  .upload-control span {
    padding: 0 16px;
    font-size: 0.72rem;
  }

  .upload-control strong {
    min-width: 76px;
    font-size: 0.72rem;
  }

  .quote-form .quote-btn {
    width: 246px;
    min-height: 41px;
    margin: 24px auto 0;
    padding: 10px 22px;
    border: 0;
    border-radius: 999px;
    font-size: 0.78rem;
  }
}

@media (max-width: 768px) {
  .quote-addons-field {
    display: none;
  }

  .quote-dimensions,
  .quote-options,
  .quote-order-fields {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .quote-upload-field {
    grid-column: 1 / -1;
  }
}

/* Hero trust strip: matching icons on desktop and mobile */
.reviews-strip {
  padding: 18px 0;
  background: #181818;
}

.reviews-content {
  gap: 42px;
}

.reviews-rating {
  flex: 0 0 auto;
}

.reviews-rating .stars {
  display: flex;
  gap: 4px;
  font-size: 1.35rem;
}

.brand-logos {
  flex: 1;
  display: grid;
  grid-template-columns: repeat(5, minmax(70px, 1fr));
  gap: 34px;
  align-items: center;
}

.brand-logos img {
  display: block;
  width: 100%;
  max-width: 92px;
  height: 48px;
  margin: 0 auto;
  object-fit: contain;
  filter: grayscale(1);
  opacity: 0.72;
}

@media (max-width: 768px) {
  .reviews-strip {
    padding: 24px 0 !important;
  }

  .reviews-strip .reviews-content {
    display: flex !important;
    flex-direction: column !important;
    gap: 24px;
  }

  .reviews-strip .reviews-rating {
    display: flex;
    justify-content: center;
    gap: 12px;
  }

  .reviews-rating .stars {
    font-size: 1rem;
  }

  .reviews-link {
    font-size: 0.86rem;
  }

  .reviews-strip .brand-logos {
    display: grid;
    grid-template-columns: repeat(5, minmax(0, 1fr));
    gap: 14px !important;
    width: 100%;
  }

  .reviews-strip .brand-logos img,
  .reviews-strip .brand-logos img:nth-child(n + 5) {
    display: block;
    width: 100%;
    max-width: 58px;
    height: 36px !important;
    object-fit: contain;
  }
}

.blog-mobile-action {
  display: none;
}

@media (max-width: 768px) {
  .blog-section {
    padding-top: 52px !important;
    padding-bottom: 64px !important;
  }

  .blog-header {
    margin-bottom: 44px;
  }

  .blog-header .section-badge-text {
    min-width: 84px;
    border-radius: 999px;
  }

  .main-image-wrapper {
    aspect-ratio: 5 / 3;
    border-radius: 8px;
  }

  .blog-main-card .card-meta {
    margin-top: 12px;
  }

  .blog-main-card .card-meta span {
    font-size: 0.88rem;
  }

  .blog-main-card h4 {
    margin: 12px 0 10px;
    font-size: 1.18rem;
  }

  .blog-main-card p {
    display: -webkit-box;
    overflow: hidden;
    font-size: 0.92rem;
    line-height: 1.65;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
  }

  .blog-mobile-action {
    display: flex;
    justify-content: center;
    margin-top: 42px;
  }

  .blog-mobile-action .btn {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 9px;
    width: 270px;
    max-width: 100%;
    min-height: 54px;
    padding: 13px 24px;
    border-radius: 999px;
    font-size: 1rem;
    line-height: 1.4;
  }

  .blog-mobile-action .btn span {
    font-size: 1.45rem;
    line-height: 1;
  }
}

 </style>
 <body>
    <section class="home-hero">
        <div class="container home-hero-content">
            <div class="home-hero-text">
                <h1>Premium <span class="highlight">Rigid Boxes</span><br>That Elevate Your Brand</h1>
                <p>We create custom rigid packaging solutions designed to protect your products while delivering a
                    premium luxury experience. Our boxes combine durability with elegant, high-quality presentation to
                    strengthen your brand identity and leave a lasting impression worldwide.</p>
                <div class="hero-buttons">
                    <a href="#" class="btn btn-primary">Design Custom Boxes</a>
                    <a href="#" class="btn btn-outline">Explore Your Industry</a>
                </div>
            </div>
            <div class="home-hero-images">
                <div class="img-left">
                    <div class="img-placeholder bg-darker">
                        <img src="./assets/Home banner center image.png" alt="Premium Box 1">

                    </div>
                </div>
                <div class="img-right">
                    <div class="img-placeholder top bg-darker">
                        <img src="./assets/home banner img2.jpg" alt="Premium Box 2">
                    </div>
                    <div class="img-placeholder bottom bg-darker">
                        <img src="./assets/home banner image3.jpg" alt="Premium Box 3">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="reviews-strip">
        <div class="container reviews-content">
            <div class="reviews-rating">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="#" class="reviews-link">5.0 Google Reviews</a>
            </div>
            <div class="brand-logos">
                <img src="./assets/adidas-logo.png" alt="Logo 1">
                <img src="./assets/Google-logo.png" alt="Logo 3">
                <img src="./assets/hp-logo.png" alt="Logo 4">
                <img src="./assets/Premium-boxes.svg" alt="Logo 5">
                <img src="./assets/unilever-logo.webp" alt="Logo 6">
            </div>
        </div>
    </div>

    <section class="sectors-section">
        <div class="container">
            <div class="sectors-header">
                <span class="section-badge-text">BOXES BY INDUSTRY</span>
                <h2>Tailored For Every Sector</h2>
                <p>We specialize in rigid packaging solutions across diverse industries, each with<br>unique
                    requirements.</p>
            </div>
            <div class="sectors-grid">
                <div class="sector-card">
                    <div class="sector-img-placeholder">
                        <img src="./assets/jewellry and watch.jfif" alt="">
                    </div>
                    <div class="sector-info">
                        <h3>Jewellery & Watches</h3>
                        <p>Premium packaging for elegant jewelry and luxury watches.</p>
                    </div>
                </div>
                <div class="sector-card">
                    <div class="sector-img-placeholder">
                        <img src="./assets/jewellry and watch.jfif" alt="">
                    </div>
                    <div class="sector-info">
                        <h3>Jewellery & Watches</h3>
                        <p>Premium packaging for elegant jewelry and luxury watches.</p>
                    </div>
                </div>
                <div class="sector-card">
                    <div class="sector-img-placeholder">
                        <img src="./assets/jewellry and watch.jfif" alt="">
                    </div>
                    <div class="sector-info">
                        <h3>Jewellery & Watches</h3>
                        <p>Premium packaging for elegant jewelry and luxury watches.</p>
                    </div>
                </div>
                <div class="sector-card">
                    <div class="sector-img-placeholder">
                        <img src="./assets/jewellry and watch.jfif" alt="">
                    </div>
                    <div class="sector-info">
                        <h3>Jewellery & Watches</h3>
                        <p>Premium packaging for elegant jewelry and luxury watches.</p>
                    </div>
                </div>
                <div class="sector-card">
                    <div class="sector-img-placeholder">
                        <img src="./assets/jewellry and watch.jfif" alt="">
                    </div>
                    <div class="sector-info">
                        <h3>Jewellery & Watches</h3>
                        <p>Premium packaging for elegant jewelry and luxury watches.</p>
                    </div>
                </div>
                <div class="sector-card">
                    <div class="sector-img-placeholder">
                        <img src="./assets/jewellry and watch.jfif" alt="">
                    </div>
                    <div class="sector-info">
                        <h3>Jewellery & Watches</h3>
                        <p>Premium packaging for elegant jewelry and luxury watches.</p>
                    </div>
                </div>
                <div class="sector-card">
                    <div class="sector-img-placeholder">
                        <img src="./assets/jewellry and watch.jfif" alt="">
                    </div>
                    <div class="sector-info">
                        <h3>Jewellery & Watches</h3>
                        <p>Premium packaging for elegant jewelry and luxury watches.</p>
                    </div>
                </div>
                <div class="sector-card">
                    <div class="sector-img-placeholder">
                        <img src="./assets/jewellry and watch.jfif" alt="">
                    </div>
                    <div class="sector-info">
                        <h3>Jewellery & Watches</h3>
                        <p>Premium packaging for elegant jewelry and luxury watches.</p>
                    </div>
                </div>
            </div>
            <div class="sectors-action">
                <a href="#" class="btn btn-primary">Explore All Categories</a>
            </div>
        </div>
    </section>

    <section class="craftsmanship-section">
        <div class="container">
            <div class="craftsmanship-wrapper">
                <div class="craftsmanship-text-overlay">
                    <span class="section-badge-text">LUXURY PACKAGING SOLUTIONS</span>
                    <h2>Where Craftsmanship Meets<br>Elegance</h2>
                    <p>We deliver luxury packaging solutions where craftsmanship meets elegance, creating boxes that
                        reflect true premium quality. Every design is carefully developed to enhance your product
                        presentation, strengthen brand identity, and provide a refined unboxing experience. From
                        material selection to final detailing, we focus on durability, aesthetics, and sophistication
                        that help your brand stand out in a competitive market.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="styles-section">
        <div class="container">
            <div class="sectors-header">
                <span class="section-badge-text">BOX BY STYLE</span>
                <h2>Tailored For Every Sector</h2>
                <p>We specialize in rigid packaging solutions across diverse industries, each with unique requirements.
                </p>
            </div>
            <div class="styles-grid">
                <div class="style-card">
                    <div class="style-img-placeholder">
                        <img src="./assets/lid and base box.jfif" alt="">
                    </div>
                    <h4>Lid & Base Boxes</h4>
                </div>
                <div class="style-card">
                    <div class="style-img-placeholder">
                        <img src="./assets/lid and base box.jfif" alt="">
                    </div>
                    <h4>Lid & Base Boxes</h4>
                </div>
                <div class="style-card">
                    <div class="style-img-placeholder">
                        <img src="./assets/lid and base box.jfif" alt="">
                    </div>
                    <h4>Lid & Base Boxes</h4>
                </div>
                <div class="style-card">
                    <div class="style-img-placeholder">
                        <img src="./assets/lid and base box.jfif" alt="">
                    </div>
                    <h4>Lid & Base Boxes</h4>
                </div>
                <div class="style-card">
                    <div class="style-img-placeholder">
                        <img src="./assets/lid and base box.jfif" alt="">
                    </div>
                    <h4>Lid & Base Boxes</h4>
                </div>
                <div class="style-card">
                    <div class="style-img-placeholder">
                        <img src="./assets/lid and base box.jfif" alt="">
                    </div>
                    <h4>Lid & Base Boxes</h4>
                </div>
                <div class="style-card">
                    <div class="style-img-placeholder">
                        <img src="./assets/lid and base box.jfif" alt="">
                    </div>
                    <h4>Lid & Base Boxes</h4>
                </div>
                <div class="style-card">
                    <div class="style-img-placeholder">
                        <img src="./assets/lid and base box.jfif" alt="">
                    </div>
                    <h4>Lid & Base Boxes</h4>
                </div>
            </div>
            <div class="sectors-action">
                <a href="#" class="btn btn-primary">Explore All Styles</a>
            </div>
        </div>
    </section>
    <section class="discount-cta">
        <div class="container">
            <div class="discount-cta-box">
                <h2>Up to 50% Off Your First Order</h2>
                <p>
                    New clients get exclusive pricing on bulk rigid box orders.
                    Claim your discount before it's gone!
                </p>
                <a href="#" class="btn btn-primary discount-btn">
                    Get a Free Quote
                </a>
            </div>
        </div>
    </section>

    <section class="premium-addons-section">
        <div class="container">

            <div class="premium-header">
                <span class="section-badge-text">PREMIUM ADDONS</span>
                <h2>Elevate With Exclusive Finishes</h2>
                <p>Add that extra touch of luxury with our range of premium finishing options.</p>
            </div>

            <div class="premium-gallery">
                <div class="premium-item track-1">
                    <img src="./assets/rigid boxes.png" alt="Rigid Box 1">
                </div>

                <div class="premium-item track-2">
                    <img src="./assets/rigid boxes.png" alt="Rigid Box 2">
                </div>

                <div class="premium-item track-3">
                    <img src="./assets/rigid boxes.png" alt="Rigid Box 3">
                </div>

                <div class="premium-item track-4">
                    <img src="./assets/rigid boxes.png" alt="Rigid Box 4">
                </div>

                <div class="premium-item track-5">
                    <img src="./assets/rigid boxes.png" alt="Rigid Box 5">
                </div>

                <div class="premium-item track-6">
                    <img src="./assets/rigid boxes.png" alt="Rigid Box 6">
                </div>

                <div class="premium-center-circle">
                    <h3>Rigid Boxes<br>Image</h3>
                    <div class="circle-status-badge">S</div>
                </div>
            </div>

        </div>
    </section>

    <section class="why-home-section">
        <div class="container">
            <h2 class="why-title">Why Choose Us?</h2>

            <div class="why-home-wrapper">

                <div class="why-cards-grid">

                    <div class="why-box">
                        <i class="fas fa-edit"></i>
                        <h4>Custom Sizes & Shapes</h4>
                        <p>Fully customized packaging tailored to fit your products perfectly.</p>
                    </div>

                    <div class="why-box">
                        <i class="fas fa-dollar-sign"></i>
                        <h4>Competitive Pricing</h4>
                        <p>Premium packaging solutions at affordable and market-competitive rates.</p>
                    </div>

                    <div class="why-box">
                        <i class="fas fa-cog"></i>
                        <h4>Premium Finishing</h4>
                        <p>From matte to glossy textures, we add the perfect premium finishing touch.</p>
                    </div>

                    <div class="why-box">
                        <i class="fas fa-print"></i>
                        <h4>High-Quality Printing</h4>
                        <p>Sharp colours and premium print finishes that create a lasting impression.</p>
                    </div>

                    <div class="why-box">
                        <i class="fas fa-recycle"></i>
                        <h4>Circular Packaging Solutions</h4>
                        <p>Innovative eco-friendly packaging solutions designed for modern brands.</p>
                    </div>

                    <div class="why-box">
                        <i class="fas fa-truck"></i>
                        <h4>Fast & Reliable Delivery</h4>
                        <p>On-time production and shipping you can always count on.</p>
                    </div>

                </div>

                <div class="why-image">
                    <img src="./assets/lumina-box.png" alt="Luxury Box">
                </div>

            </div>
        </div>
    </section>
    <section class="testimonials-section">
        <div class="container">

            <div class="testimonials-header">
                <span class="section-badge-text">TESTIMONIALS</span>
                <h2>What Our Customers Say</h2>
                <p>Hear from brands who trust us with their packaging needs.</p>
            </div>

            <div class="testimonial-grid">

                <div class="testimonial-card">
                    <img src="./assets/profile picture.jfif" alt="">
                    <p>
                        We've been working with RigidBox Pro for 3 years now.
                        Their consistency and attention to detail make them our
                        go-to packaging partner.
                    </p>

                    <h4>Mike Torello</h4>
                    <span>CEO, Jewels Co.</span>
                </div>

                <div class="testimonial-card">
                    <img src="./assets/profile picture.jfif" alt="">
                    <p>
                        We've been working with RigidBox Pro for 3 years now.
                        Their consistency and attention to detail make them our
                        go-to packaging partner.
                    </p>

                    <h4>Mike Torello</h4>
                    <span>CEO, Jewels Co.</span>
                </div>

                <div class="testimonial-card">
                    <img src="./assets/profile picture.jfif" alt="">
                    <p>
                        We've been working with RigidBox Pro for 3 years now.
                        Their consistency and attention to detail make them our
                        go-to packaging partner.
                    </p>

                    <h4>Mike Torello</h4>
                    <span>CEO, Jewels Co.</span>
                </div>

            </div>

            <div class="testimonial-nav">
                <button><i class="fas fa-chevron-left"></i></button>
                <button><i class="fas fa-chevron-right"></i></button>
            </div>

        </div>
    </section>



    <section class="quote-process-section">
        <div class="container">

            <div class="quote-process-grid">

                <div class="steps-column">
                    <h2>Order In 4 Easy Steps</h2>

                    <div class="step-item">
                        <span class="step-number">01.</span>
                        <div>
                            <h4>Submit Your Brief</h4>
                            <p>Share your product dimensions, quantities, and vision. We respond within 24 hours with
                                initial recommendations and a structural concept tailored to your needs.</p>
                        </div>
                    </div>

                    <div class="step-item">
                        <span class="step-number">02.</span>
                        <div>
                            <h4>Design & Quote</h4>
                            <p>You receive a structural die line, finish spec sheet, and transparent pricing. Revisions
                                are included at no extra cost — no surprises, no hidden fees.</p>
                        </div>
                    </div>

                    <div class="step-item">
                        <span class="step-number">03.</span>
                        <div>
                            <h4>Approve & Produce</h4>
                            <p>Once artwork is approved, production begins immediately in our certified manufacturing
                                facility. Pre-production physical samples are available before full run.</p>
                        </div>
                    </div>

                    <div class="step-item">
                        <span class="step-number">04.</span>
                        <div>
                            <h4>Ship & Arrive</h4>
                            <p>Your order ships with full tracking and quality documentation. Custom orders take
                                approximately 15 days production, plus shipping.</p>
                        </div>
                    </div>
                </div>

                <div class="quote-form-wrapper">

                    <h2>Request a Free Quote</h2>

                    <form class="quote-form">

                        <div class="quote-full-fields">
                            <div class="quote-field">
                                <label for="quote-name">Name *</label>
                                <input id="quote-name" type="text" placeholder="Enter your name" required>
                            </div>

                            <div class="quote-field">
                                <label for="quote-email">Email Address *</label>
                                <input id="quote-email" type="email" placeholder="Enter your email" required>
                            </div>

                            <div class="quote-field">
                                <label for="quote-phone">Phone *</label>
                                <input id="quote-phone" type="tel" placeholder="Enter your number" required>
                            </div>

                            <div class="quote-field">
                                <label for="quote-address">Physical Address</label>
                                <input id="quote-address" type="text" placeholder="Enter your address">
                            </div>
                        </div>

                        <div class="quote-field-pair quote-dimensions">
                            <div class="quote-field">
                                <label for="quote-width">Width *</label>
                                <input id="quote-width" type="text" placeholder="Width" required>
                            </div>
                            <div class="quote-field">
                                <label for="quote-length">Length *</label>
                                <input id="quote-length" type="text" placeholder="Length" required>
                            </div>
                            <div class="quote-field">
                                <label for="quote-depth">Depth *</label>
                                <input id="quote-depth" type="text" placeholder="Depth" required>
                            </div>
                            <div class="quote-field">
                                <label for="quote-units">Units *</label>
                                <select id="quote-units" required>
                                    <option value="mm">mm</option>
                                    <option value="cm">cm</option>
                                    <option value="inch">inch</option>
                                </select>
                            </div>
                        </div>

                        <div class="quote-field-pair quote-options">
                            <div class="quote-field">
                                <label for="quote-material">Select Material</label>
                                <select id="quote-material">
                                    <option value="">Choose option</option>
                                </select>
                            </div>
                            <div class="quote-field">
                                <label for="quote-color">Color Options</label>
                                <select id="quote-color">
                                    <option value="">Choose option</option>
                                </select>
                            </div>
                            <div class="quote-field quote-addons-field">
                                <label for="quote-addons">Addons</label>
                                <select id="quote-addons">
                                    <option value="">Choose option</option>
                                </select>
                            </div>
                        </div>

                        <div class="quote-field-pair quote-order-fields">
                            <div class="quote-field quote-turnaround-field">
                                <label for="quote-turnaround">Turn Around Time</label>
                                <select id="quote-turnaround">
                                    <option value="">Choose option</option>
                                </select>
                            </div>
                            <div class="quote-field">
                                <label for="quote-quantity">Quantity *</label>
                                <input id="quote-quantity" type="text" placeholder="Enter quantity" required>
                            </div>
                            <div class="quote-field quote-upload-field">
                                <label for="quote-file">Upload File Here</label>
                                <label class="upload-control" for="quote-file">
                                    <span>No file chosen</span>
                                    <strong>Upload</strong>
                                </label>
                                <input id="quote-file" class="file-input" type="file">
                            </div>
                        </div>

                        <div class="quote-field">
                            <label for="quote-message">Message</label>
                            <textarea id="quote-message" placeholder="Enter your message"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary quote-btn">
                            Instant Quote
                        </button>

                    </form>

                </div>

            </div>

            <div class="packaging-guide">

                <div class="guide-content">

                    <span class="guide-badge">PACKAGING GUIDE</span>

                    <h2>Everything you need to know about custom boxes</h2>

                    <p>
                        Custom packaging is one of the most powerful tools a brand can use to create a lasting
                        impression. Research shows that 72% of consumers say that packaging design influences their
                        purchase decision, and 40% share photos of exciting unboxing experiences on social media.
                    </p>

                    <p>
                        At KayPackaging, we believe every business — no matter the size — deserves packaging that
                        reflects the quality of what's inside. Whether you're a solo founder shipping your first 10
                        orders or a growing brand sending thousands of packages per week, our custom box solutions are
                        built to scale with you.
                    </p>

                    <h3>What to consider when choosing custom packaging:</h3>

                    <ul>
                        <li>Choose the right box style for your product.</li>
                        <li>Select durable materials that protect the contents.</li>
                        <li>Consider premium finishing options.</li>
                        <li>Match packaging with your brand identity.</li>
                        <li>Balance quality with production costs.</li>
                    </ul>

                </div>
                <div class="guide-sidebar">

                    <div class="sidebar-block guide-faq">
                        <h3>How to order in 4 steps</h3>

                        <ol>
                            <li><span>What is your minimum order quantity?</span><span class="faq-plus">+</span></li>
                            <li><span>Can I customize the size and design?</span><span class="faq-plus">+</span></li>
                            <li><span>How long does production take?</span><span class="faq-plus">+</span></li>
                            <li><span>Do you offer free design support?</span><span class="faq-plus">+</span></li>
                        </ol>
                    </div>

                    <div class="sidebar-block guide-help">
                        <h3>Need help choosing?</h3>
                        <p>Our team responds within 2 hours</p>
                        <a href="#" class="btn btn-primary sidebar-btn">Chat with an expert</a>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <section class="custom-box-section">
        <div class="container">
            <div class="custom-box">
                <div class="custom-box-img">
                    <img src="./assets/Custom rigid boxes.png" alt="Rigid Box">
                </div>
            </div>
        </div>
    </section>

    <section class="blog-section">
        <div class="container">

            <div class="blog-header">
                <span class="section-badge-text">BLOG</span>
                <h2>Insights & Inspiration</h2>
                <p>Stay updated with the latest trends, tips, and insights in the world of custom packaging.</p>
            </div>

            <div class="blog-grid">

                <div class="blog-main-card">
                    <div class="main-image-wrapper">
                        <img src="./assets/home banner img2.jpg" alt="Sustainable Packaging Trends">
                    </div>
                    <div class="card-meta">
                        <span class="author">Joe Danley</span>
                        <span class="date">Nov 15, 2024</span>
                    </div>
                    <h4>Sustainable Packaging Trends for 2026</h4>
                    <p>Explore how eco-friendly rigid boxes are transforming luxury packaging with sustainable materials
                        and premium design.</p>
                </div>

                <div class="blog-mobile-action">
                    <a href="#" class="btn btn-primary">View All <span aria-hidden="true">&rarr;</span></a>
                </div>

                <div class="blog-sidebar-list">

                    <div class="blog-side-card">
                        <img src="./assets/headsets.jfif" alt="Rigid Packaging Gluing" class="side-card-img">
                        <div class="side-card-content">
                            <div class="card-meta">
                                <span class="author">Joe Danley</span>
                                <span class="date">Nov 15, 2024</span>
                            </div>
                            <h4>Rigid Packaging Gluing: Adhesive Types, Spot vs. Full Glue, and Curing Methods</h4>
                            <p>Explore how eco-friendly rigid boxes are transforming luxury...</p>
                        </div>
                    </div>

                    <div class="blog-side-card">
                        <img src="./assets/headsets.jfif" alt="Rigid Packaging Gluing" class="side-card-img">
                        <div class="side-card-content">
                            <div class="card-meta">
                                <span class="author">Joe Danley</span>
                                <span class="date">Nov 15, 2024</span>
                            </div>
                            <h4>Rigid Packaging Gluing: Adhesive Types, Spot vs. Full Glue, and Curing Methods</h4>
                            <p>Explore how eco-friendly rigid boxes are transforming luxury...</p>
                        </div>
                    </div>

                    <div class="blog-side-card">
                        <img src="./assets/headsets.jfif" alt="Rigid Packaging Gluing" class="side-card-img">
                        <div class="side-card-content">
                            <div class="card-meta">
                                <span class="author">Joe Danley</span>
                                <span class="date">Nov 15, 2024</span>
                            </div>
                            <h4>Rigid Packaging Gluing: Adhesive Types, Spot vs. Full Glue, and Curing Methods</h4>
                            <p>Explore how eco-friendly rigid boxes are transforming luxury...</p>
                        </div>
                    </div>

                    <div class="view-all-wrapper">
                        <a href="#" class="view-all-link">View All &rarr;</a>
                    </div>

                </div>

            </div>

        </div>
    </section>
    <section class="extraordinary-cta-section">
        <div class="container">
            <div class="extraordinary-content">

                <h2>Ready to Create Something <span class="highlight">Extraordinary?</span></h2>
                <p>Let's bring your packaging vision to life. Our team of experts is ready to design and deliver rigid
                    boxes that will make your brand unforgettable.</p>

                <div class="extraordinary-features">
                    <div class="ex-feature-item">
                        <span class="ex-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path
                                    d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                    /path>
                                    <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                    <line x1="12" y1="22.08" x2="12" y2="12"></line>
                            </svg>
                        </span>
                        <span>End-To-End Services</span>
                    </div>

                    <div class="ex-feature-item">
                        <span class="ex-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <circle cx="12" cy="8" r="7"></circle>
                                <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline>
                            </svg>
                        </span>
                        <span>Premium Quality</span>
                    </div>

                    <div class="ex-feature-item">
                        <span class="ex-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path d="M21.5 2v6h-6M21.34 15.57a10 10 0 1 1-.57-8.38l5.67-5.67"></path>
                            </svg>
                        </span>
                        <span>Circular Packaging Solutions</span>
                    </div>
                </div>

                <div class="extraordinary-action">
                    <a href="#" class="btn btn-primary extraordinary-btn">Get Your Free Quote Today</a>
                </div>

            </div>
        </div>
    </section>

<script>
document.addEventListener("DOMContentLoaded", () => {

    const cards = document.querySelectorAll(".testimonial-card");
    const prevBtn = document.querySelector(".testimonial-nav button:first-child");
    const nextBtn = document.querySelector(".testimonial-nav button:last-child");

    let current = 0;

    function showCard(index) {
        cards.forEach(card => card.style.display = "none");
        cards[index].style.display = "block";
    }

    if (window.innerWidth <= 768) {
        showCard(current);

        nextBtn.addEventListener("click", () => {
            current = (current + 1) % cards.length;
            showCard(current);
        });

        prevBtn.addEventListener("click", () => {
            current = (current - 1 + cards.length) % cards.length;
            showCard(current);
        });
    }
});

//file upload
const fileInput = document.getElementById("quote-file");
const fileText = document.querySelector(".upload-control span");

if (fileInput) {
    fileInput.addEventListener("change", () => {
        if (fileInput.files.length > 0) {
            fileText.textContent = fileInput.files[0].name;
        } else {
            fileText.textContent = "No file chosen";
        }
    });
}
//faq
const faqItems = document.querySelectorAll(".guide-faq li");

faqItems.forEach(item => {

    item.addEventListener("click", () => {

        const plus = item.querySelector(".faq-plus");

        if (plus.textContent === "+") {
            plus.textContent = "−";
        } else {
            plus.textContent = "+";
        }

    });

});
//form submission
const quoteForm = document.querySelector(".quote-form");

if (quoteForm) {

    quoteForm.addEventListener("submit", function (e) {

        e.preventDefault();

        alert("Thank you! Your quote request has been submitted.");

        this.reset();

        const fileText = document.querySelector(".upload-control span");
        if (fileText) {
            fileText.textContent = "No file chosen";
        }

    });

}
//smooth scroll
document.querySelectorAll('a[href^="#"]').forEach(link => {

    link.addEventListener("click", function (e) {

        e.preventDefault();

        const target = document.querySelector(this.getAttribute("href"));

        if (target) {
            target.scrollIntoView({
                behavior: "smooth"
            });
        }

    });

});
</script>

</body>
