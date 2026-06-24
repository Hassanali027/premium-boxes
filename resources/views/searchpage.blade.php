// ============================================
//  FORM TITLE LINE — title width ke barabar
// ============================================
window.addEventListener('DOMContentLoaded', () => {
    const title = document.querySelector('.qu-form-title');
    const line = document.querySelector('.qu-form-title-line');
    if (title && line) {
        line.style.width = title.offsetWidth + 'px';
    }
});

// ============================================
//  FILE UPLOAD — filename show karo
// ============================================
const fileInput = document.getElementById('fileInput');
const fileName = document.getElementById('fileName');

if (fileInput) {
    fileInput.addEventListener('change', () => {
        if (fileInput.files.length > 0) {
            fileName.textContent = fileInput.files[0].name;
            fileName.style.color = '#ffffff';
        } else {
            fileName.textContent = 'No file chosen';
            fileName.style.color = '#555555';
        }
    });
}

// ============================================
//  QUOTE FORM — submit handler
// ============================================
const quoteForm = document.getElementById('quoteForm');

if (quoteForm) {
    quoteForm.addEventListener('submit', (e) => {
        e.preventDefault();

        const btn = quoteForm.querySelector('.qu-btn');
        const originalText = btn.textContent;

        btn.textContent = '✓ Quote Request Sent!';
        btn.style.backgroundColor = '#4caf50';
        btn.disabled = true;

        setTimeout(() => {
            btn.textContent = originalText;
            btn.style.backgroundColor = '';
            btn.disabled = false;
            quoteForm.reset();
            if (fileName) {
                fileName.textContent = 'No file chosen';
                fileName.style.color = '#555555';
            }
        }, 3000);
    });
}


    <main class="search-page">

        <!-- CATEGORY SECTION -->
        <section class="result-section">
            <div class="section-header">
                <h1 class="section-title">Search Results For "<span class="highlight">Archive<br class="mob-br"> Boxes</span> In Category"</h1>
                <span class="found-badge" id="catBadge">22 Found!</span>
            </div>
            <div class="grid-4" id="catGrid">
                <div class="cat-card"><div class="card-img"></div><p class="card-label">Lid &amp; Base Boxes</p></div>
                <div class="cat-card"><div class="card-img"></div><p class="card-label">Lid &amp; Base Boxes</p></div>
                <div class="cat-card"><div class="card-img"></div><p class="card-label">Lid &amp; Base Boxes</p></div>
                <div class="cat-card"><div class="card-img"></div><p class="card-label">Lid &amp; Base Boxes</p></div>
            </div>
            <div class="section-divider"></div>
        </section>

        <!-- PRODUCTS SECTION -->
        <section class="result-section">
            <div class="section-header">
                <h1 class="section-title">Search Results For "<span class="highlight">Archive<br class="mob-br"> Boxes</span> In Products"</h1>
                <span class="found-badge" id="prodBadge">22 Found!</span>
            </div>
            <div class="scroll-wrapper">
                <div class="grid-4" id="prodGrid">
                    <div class="prod-card"><div class="prod-img"></div><p class="prod-label">Vino Luxury Gift Box</p></div>
                    <div class="prod-card"><div class="prod-img"></div><p class="prod-label">Vino Luxury Gift Box</p></div>
                    <div class="prod-card"><div class="prod-img"></div><p class="prod-label">Vino Luxury Gift Box</p></div>
                    <div class="prod-card"><div class="prod-img"></div><p class="prod-label">Vino Luxury Gift Box</p></div>
                    <!-- <div class="prod-card"><div class="prod-img"></div><p class="prod-label">Vino Luxury Gift Box</p></div>
                    <div class="prod-card"><div class="prod-img"></div><p class="prod-label">Vino Luxury Gift Box</p></div> -->
                </div>
                <button class="scroll-arrow arrow-next mob-only" id="prodNext">&#8250;</button>
                <button class="scroll-arrow arrow-prev mob-only" id="prodPrev">&#8249;</button>
            </div>
            <div class="section-divider"></div>
        </section>

        <!-- BLOGS SECTION -->
        <section class="result-section">
            <div class="section-header">
                <h1 class="section-title">Search Results For "<span class="highlight">Archive<br class="mob-br"> Boxes</span> In Blogs"</h1>
                <span class="found-badge" id="blogBadge">22 Found!</span>
            </div>
            <div class="scroll-wrapper">
                <div class="grid-3" id="blogGrid">
                    <div class="blog-card">
                        <div class="blog-img" style="background-image:url('./c903f3f775a50e5b56122d5a307158962172018e (1).jpg');background-size:cover;background-position:center;"></div>
                        <div class="blog-body">
                            <div class="blog-meta"><span class="blog-author">Joe Dantey</span><span class="blog-date">Nov 19, 2026</span></div>
                            <h3 class="blog-title">Sustainable Packaging Trends for 2026</h3>
                            <p class="blog-desc">Explore how eco-friendly rigid boxes are transforming luxury packaging with sustainable materials and premium finishes.</p>
                        </div>
                    </div>
                    <div class="blog-card">
                        <div class="blog-img" style="background-image:url('./c903f3f775a50e5b56122d5a307158962172018e (1).jpg');background-size:cover;background-position:center;"></div>
                        <div class="blog-body">
                            <div class="blog-meta"><span class="blog-author">Joe Dantey</span><span class="blog-date">Nov 15, 2026</span></div>
                            <h3 class="blog-title">Sustainable Packaging Trends for 2026</h3>
                            <p class="blog-desc">Explore how eco-friendly rigid boxes are transforming luxury packaging with sustainable materials and premium finishes.</p>
                        </div>
                    </div>
                    <div class="blog-card">
                        <div class="blog-img" style="background-image:url('./c903f3f775a50e5b56122d5a307158962172018e (1).jpg');background-size:cover;background-position:center;"></div>
                        <div class="blog-body">
                            <div class="blog-meta"><span class="blog-author">Joe Dantey</span><span class="blog-date">Nov 15, 2026</span></div>
                            <h3 class="blog-title">Sustainable Packaging Trends for 2026</h3>
                            <p class="blog-desc">Explore how eco-friendly rigid boxes are transforming luxury packaging with sustainable materials and premium finishes.</p>
                        </div>
                    </div>
                </div>
                <button class="scroll-arrow arrow-next mob-only" id="blogNext">&#8250;</button>
                <button class="scroll-arrow arrow-prev mob-only" id="blogPrev">&#8249;</button>
            </div>
        </section>

    </main>


    document.addEventListener('DOMContentLoaded', function () {

    var isMobile = window.innerWidth <= 768;

    if (isMobile) {
        // Category: 4 cards, 2x2 grid, badge = 4
        updateBadge('catBadge', 4);

        // Products: horizontal scroll, 2 visible, badge = 2
        setupScroll('prodGrid', 2, 'prodBadge', 'prodNext', 'prodPrev');

        // Blogs: horizontal scroll, 1 visible, badge = 1
        setupScroll('blogGrid', 1, 'blogBadge', 'blogNext', 'blogPrev');
    }

    function updateBadge(id, count) {
        var el = document.getElementById(id);
        if (el) el.textContent = count + ' Found!';
    }

    function setupScroll(gridId, visibleCount, badgeId, nextId, prevId) {
        var grid = document.getElementById(gridId);
        var nextBtn = document.getElementById(nextId);
        var prevBtn = document.getElementById(prevId);
        if (!grid) return;

        var cards = Array.from(grid.children);
        updateBadge(badgeId, visibleCount);

        // Apply scroll styles
        grid.style.display = 'flex';
        grid.style.flexDirection = 'row';
        grid.style.overflowX = 'auto';
        grid.style.scrollSnapType = 'x mandatory';
        grid.style.webkitOverflowScrolling = 'touch';
        grid.style.gap = '12px';
        grid.style.scrollbarWidth = 'none';
        grid.style.msOverflowStyle = 'none';

        cards.forEach(function (card) {
            var w = visibleCount === 1 ? 'calc(100%)' : 'calc(50% - 6px)';
            card.style.flex = '0 0 ' + w;
            card.style.minWidth = w;
            card.style.scrollSnapAlign = 'start';
        });

        // Show arrows
        if (nextBtn) { nextBtn.style.display = 'flex'; }
        if (prevBtn) { prevBtn.style.display = 'none'; }

        // Card width for scrolling
        function getCardWidth() {
            if (cards.length > 0) {
                return cards[0].offsetWidth + 12;
            }
            return 0;
        }

        // Next arrow
        if (nextBtn) {
            nextBtn.addEventListener('click', function () {
                grid.scrollBy({ left: getCardWidth() * visibleCount, behavior: 'smooth' });
            });
        }

        // Prev arrow
        if (prevBtn) {
            prevBtn.addEventListener('click', function () {
                grid.scrollBy({ left: -getCardWidth() * visibleCount, behavior: 'smooth' });
            });
        }

        // Show/hide arrows based on scroll position
        grid.addEventListener('scroll', function () {
            if (prevBtn) prevBtn.style.display = grid.scrollLeft > 10 ? 'flex' : 'none';
            if (nextBtn) {
                var atEnd = grid.scrollLeft + grid.offsetWidth >= grid.scrollWidth - 10;
                nextBtn.style.display = atEnd ? 'none' : 'flex';
            }
        });
    }
});
