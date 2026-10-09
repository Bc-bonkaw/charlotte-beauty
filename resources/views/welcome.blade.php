@php
    $booksy = 'https://booksy.com/en-us/1205345_charlotte-beauty-braids_braids-locs_119449_hayward#ba_s=seo';
    $instagram = 'https://www.instagram.com/charlottebeauty_1/';
    // 'real' => true marks photos of Ruffine's own work (from Instagram); false marks stock style inspiration.
    $services = [
        ['name' => 'Box Braids · Mid Back', 'category' => 'braids', 'price' => '$230', 'time' => '3 hr 30 min', 'notes' => ['Hair included', '$40 non-refundable deposit'], 'image' => 'box-braids.jpg', 'real' => true],
        ['name' => 'Medium Knotless Braids', 'category' => 'braids', 'price' => '$330', 'time' => '5 hr 30 min', 'notes' => ['Mid-back length', 'Clean, lightweight finish'], 'image' => 'knotless-braids.jpg', 'real' => true],
        ['name' => 'French Curl Braids', 'category' => 'braids', 'price' => '$380', 'time' => '6 hr 30 min', 'notes' => ['Hair included', 'Small French curls'], 'image' => 'french-curl-braids.jpg', 'real' => true],
        ['name' => 'Knotless Boho · Medium', 'category' => 'braids', 'price' => '$300', 'time' => '5 hr 35 min', 'notes' => ['Mid-back length', 'Soft bohemian finish'], 'image' => 'boho-braids.jpg', 'real' => true],
        ['name' => 'Senegalese Twists', 'category' => 'twists', 'price' => '$235', 'time' => '4 hr', 'notes' => ['Bra-strap length', '$40 deposit'], 'image' => 'senegalese-twists.jpg', 'real' => true],
        ['name' => 'Fulani Braids', 'category' => 'braids', 'price' => '$285', 'time' => '4 hr 30 min', 'notes' => ['Sculpted pattern', 'Custom finish'], 'image' => 'fulani-braids.jpg', 'real' => true],
        ['name' => 'Cornrows', 'category' => 'cornrows', 'price' => '$170', 'time' => '2 hr 30 min', 'notes' => ['Hair included', 'Classic protective style'], 'image' => 'cornrows.jpg', 'real' => true],
        ['name' => 'Faux Locs', 'category' => 'twists', 'price' => '$355', 'time' => '5 hr 30 min', 'notes' => ['Hair included', 'Small size available'], 'image' => 'faux-locs.jpg', 'real' => false],
        ['name' => 'Sew-In Weave', 'category' => 'weaves', 'price' => '$200', 'time' => '2 hr 30 min', 'notes' => ['Professional install', 'Protective finish'], 'image' => 'sew-in-weave.jpg', 'real' => false],
        ['name' => 'Crochet Braids', 'category' => 'weaves', 'price' => '$175', 'time' => '30 min', 'notes' => ['Flexible styling', 'Wash add-on available'], 'image' => 'crochet-braids.jpg', 'real' => false],
        ['name' => 'Jumbo Knotless · Waist', 'category' => 'braids', 'price' => '$250', 'time' => '2 hr 30 min', 'notes' => ['No hair included', 'Waist length'], 'image' => 'jumbo-knotless.jpg', 'real' => false],
        ['name' => 'Boho Locs', 'category' => 'twists', 'price' => '$500', 'time' => '4 hr 30 min', 'notes' => ['Hair included', 'Soft textured finish'], 'image' => 'boho-locs.jpg', 'real' => false],
    ];
@endphp
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Charlotte Beauty Braids | Hayward, CA</title>
<meta name="description" content="Charlotte Beauty Braids in Hayward — braids, twists, locs, cornrows and sew-ins by Ruffine Bonkaw.">
<meta name="theme-color" content="#3d2130">
<meta property="og:type" content="website">
<meta property="og:title" content="Charlotte Beauty Braids | Hayward, CA">
<meta property="og:description" content="Protective styles with a polished finish — braids, twists, locs and cornrows by Ruffine Bonkaw.">
<meta property="og:image" content="{{ asset('images/hero.jpg') }}">
<meta property="og:url" content="{{ url('/') }}">
<meta name="twitter:card" content="summary_large_image">
<link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
<link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
<style>
:root{
    --plum:#3d2130; --plum-2:#5a3245; --paper:#fbf1f3; --card:#fffafb; --blush:#f0dce2;
    --rose:#b55772; --rose-dark:#9b4560; --gold:#c49a52; --line:#e6cfd6; --ink:#3d2130; --muted:#745d66;
}
*{box-sizing:border-box}
html{scroll-behavior:smooth;scroll-padding-top:72px}
body{margin:0;background:var(--paper);color:var(--ink);font:15px/1.55 'Libre Franklin',sans-serif}
a{color:inherit;text-decoration:none}
img{max-width:100%;display:block}
button,input,select,textarea{font:inherit}
h1,h2,h3{font-family:'Playfair Display',serif;margin-top:0}
.kicker{font-size:11px;font-weight:700;letter-spacing:.16em;text-transform:uppercase;color:var(--rose)}

/* Header */
.topbar{height:72px;background:var(--plum);color:#fff;display:flex;align-items:center;padding:0 0 0 24px;position:sticky;top:0;z-index:30}
.logo img{height:56px;width:auto}
.nav{display:flex;margin-left:auto;align-self:stretch}
.nav a{display:flex;align-items:center;padding:0 22px;font-size:11px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;transition:background .2s}
.nav a:hover{background:var(--plum-2)}
.nav .book-nav{background:var(--rose);color:#fff;padding:0 32px}
.nav .book-nav:hover{background:var(--rose-dark)}
.menu{display:none;margin-left:auto;align-self:stretch;background:transparent;color:#fff;border:0;width:64px;font-size:24px;cursor:pointer}
.utility{min-height:34px;border-bottom:1px solid var(--line);display:flex;align-items:center;justify-content:space-between;gap:16px;padding:0 24px;background:var(--card);font-size:10px;font-weight:700;letter-spacing:.1em;text-transform:uppercase}
.utility-links{display:flex;align-items:center;gap:18px}
.utility-links a:hover{color:var(--rose)}
.rating{border-left:1px solid var(--line);padding-left:18px;color:var(--rose)}

/* Hero */
.hero{display:grid;grid-template-columns:1.15fr .85fr;background:var(--card);border-bottom:1px solid var(--line)}
.hero-copy{padding:80px 6vw 64px;align-self:center}
h1{font-size:clamp(46px,6.4vw,90px);line-height:.95;margin:18px 0 24px}
h1 em{font-style:normal;color:var(--rose)}
.hero-copy p{font-size:17px;max-width:560px;color:var(--muted)}
.hero-actions{display:flex;flex-wrap:wrap;gap:10px;margin-top:32px}
.hero-image{position:relative;background:linear-gradient(180deg,var(--paper),var(--blush));min-height:520px;overflow:hidden}
.hero-image img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;object-position:center bottom}
.hero-image figcaption{position:absolute;left:0;bottom:24px;background:var(--plum);color:#fff;padding:10px 18px;font-size:11px;font-weight:700;letter-spacing:.12em;text-transform:uppercase}

/* Buttons */
.btn{display:inline-flex;align-items:center;justify-content:center;min-height:46px;border:1px solid var(--plum);padding:0 22px;background:var(--card);color:var(--plum);font-size:11px;font-weight:700;letter-spacing:.08em;text-transform:uppercase;cursor:pointer;transition:background .2s,color .2s}
.btn:hover{background:var(--plum);color:#fff}
.btn.dark{background:var(--plum);color:#fff}
.btn.dark:hover{background:var(--plum-2)}

/* Sections */
.section{padding:72px 24px}
.section-head{display:flex;align-items:end;justify-content:space-between;gap:24px;margin-bottom:28px;border-bottom:1px solid var(--plum);padding-bottom:16px}
.section-head h2{font-size:clamp(32px,4vw,42px);margin:6px 0 0}
.section-head p{max-width:520px;margin:0;color:var(--muted)}

/* Services */
.filters{display:flex;flex-wrap:wrap;gap:8px;margin-bottom:22px}
.filter{border:1px solid var(--line);border-radius:999px;background:var(--card);padding:9px 18px;font-size:10px;letter-spacing:.12em;text-transform:uppercase;font-weight:700;cursor:pointer;color:var(--plum)}
.filter:hover{border-color:var(--rose)}
.filter.active{background:var(--rose);border-color:var(--rose);color:#fff}
.services{display:grid;grid-template-columns:repeat(3,1fr);gap:18px}
.service{background:var(--card);border:1px solid var(--line);display:flex;flex-direction:column;transition:box-shadow .2s,transform .2s}
.service:hover{box-shadow:0 14px 30px -18px #3d213066;transform:translateY(-2px)}
.service-photo{position:relative;aspect-ratio:4/5;background:linear-gradient(180deg,var(--paper),var(--blush));overflow:hidden}
.service-photo img{width:100%;height:100%;object-fit:cover;object-position:center bottom}
.tag{position:absolute;top:12px;left:12px;background:#fffafbe6;color:var(--plum);padding:5px 10px;font-size:9px;font-weight:700;letter-spacing:.12em;text-transform:uppercase}
.tag.real{background:var(--plum);color:#fff}
.service-body{padding:18px 18px 0;flex:1}
.service-body h3{font-size:21px;margin:0 0 8px}
.meta{display:flex;align-items:baseline;gap:10px;margin-bottom:10px}
.price{font-weight:700;font-size:17px}
.time{font-size:11px;letter-spacing:.08em;text-transform:uppercase;color:var(--muted)}
.service-body ul{margin:0;padding-left:16px;color:var(--muted);font-size:13px}
.service-body li{margin:3px 0}
.service-book{display:flex;justify-content:space-between;align-items:center;margin-top:16px;padding:14px 18px;border-top:1px solid var(--line);font-size:11px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--rose)}
.service-book:hover{background:var(--rose);color:#fff}
.more{text-align:center;margin-top:28px}
.credit-note{text-align:center;color:var(--muted);font-size:12px;margin-top:14px}

/* About */
.about{display:grid;grid-template-columns:1fr 1fr;background:var(--plum);color:#fff}
.about-photo{position:relative;background:linear-gradient(180deg,var(--paper),var(--blush));min-height:520px;overflow:hidden}
.about-photo img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;object-position:center bottom}
.about-copy{padding:72px 7vw;align-self:center}
.about-copy h2{font-size:clamp(34px,4vw,48px);line-height:1.05;margin:14px 0 24px}
.about-copy p{color:#e6d4da}
.stats{display:grid;grid-template-columns:repeat(3,1fr);border-top:1px solid #7b5664;margin-top:34px;padding-top:24px}
.stats strong{display:block;font:30px 'Playfair Display',serif;color:#fff}
.stats span{font-size:10px;text-transform:uppercase;letter-spacing:.1em;color:#d8bbc5}
.about-copy .btn{margin-top:30px;background:transparent;color:#fff;border-color:#fff}
.about-copy .btn:hover{background:#fff;color:var(--plum)}

/* Reviews */
.reviews{display:grid;grid-template-columns:repeat(3,1fr);gap:18px}
.review{background:var(--card);border:1px solid var(--line);padding:30px}
.stars{color:var(--gold);letter-spacing:3px;font-size:16px}
.review blockquote{font:20px/1.45 'Playfair Display',serif;margin:18px 0 22px}
.review small{color:var(--muted)}

/* Booking */
.booking{display:grid;grid-template-columns:.8fr 1.2fr;border:1px solid var(--line);background:var(--card)}
.booking-info{background:var(--blush);padding:52px}
.booking-info h2{font-size:clamp(34px,4vw,44px);line-height:1.05;margin:14px 0 20px}
.booking-info .btn{margin-top:8px}
.address{margin:26px 0 6px;font-weight:700}
.directions{color:var(--rose);font-weight:600}
.form{padding:44px;display:grid;grid-template-columns:1fr 1fr;gap:16px;align-content:start}
.field{display:flex;flex-direction:column;gap:7px}
.full{grid-column:1/-1}
label{font-size:10px;letter-spacing:.1em;text-transform:uppercase;font-weight:700}
input,select,textarea{border:1px solid #cdb3bc;border-radius:0;padding:12px;background:#fff;width:100%;color:var(--ink)}
input:focus,select:focus,textarea:focus{outline:2px solid var(--rose);outline-offset:-1px;border-color:var(--rose)}
textarea{min-height:96px;resize:vertical}
.flash{grid-column:1/-1;padding:12px 14px;background:#f3dce5;color:#653146;font-weight:600}
.flash.error{background:#fde8e8;color:#8a1f2b}
.field-error{color:#8a1f2b;font-size:12px}
.form small{color:var(--muted)}

/* Footer */
.footer{background:var(--plum);color:#fff;padding:48px 24px 28px}
.footer-inner{display:grid;grid-template-columns:auto 1fr auto;gap:40px;align-items:center}
.footer-logo{width:140px}
.footer-links{display:flex;gap:20px;flex-wrap:wrap}
.footer-links a{font-size:11px;font-weight:700;letter-spacing:.08em;text-transform:uppercase;color:#f0d8e0}
.footer-links a:hover{color:#fff}
.footer address{font-style:normal;color:#e6d4da;text-align:right}
.footer-bottom{border-top:1px solid #5d3a4b;margin-top:32px;padding-top:18px;font-size:12px;color:#c9aab5}
.hidden{display:none!important}

@media(max-width:900px){
    .nav{display:none;position:absolute;top:72px;left:0;right:0;background:var(--plum);flex-direction:column}
    .nav.open{display:flex}
    .nav a{min-height:52px;padding:0 24px}
    .menu{display:block}
    .hero,.about,.booking{grid-template-columns:1fr}
    .hero-image{min-height:460px}
    .about-photo{min-height:420px}
    .services,.reviews{grid-template-columns:1fr 1fr}
    .section{padding:60px 18px}
    .footer-inner{grid-template-columns:1fr}
    .footer address{text-align:left}
}
@media(max-width:600px){
    .topbar{padding-left:14px}
    .logo img{height:50px}
    .utility{padding:8px 14px;justify-content:center}
    .utility .city,.utility-links .ig{display:none}
    .hero-copy{padding:52px 20px 44px}
    .hero-image{min-height:420px}
    .services,.reviews,.form{grid-template-columns:1fr}
    .section-head{display:block}
    .section-head p{margin-top:10px}
    .about-copy,.booking-info,.form{padding:36px 22px}
}
</style>
</head>
<body>
<header class="topbar">
    <a class="logo" href="#top" aria-label="Charlotte Beauty Braids home"><img src="{{ asset('images/logo-light.png') }}" alt="Charlotte Beauty Braids" width="57" height="56"></a>
    <button class="menu" aria-label="Open menu" aria-expanded="false" aria-controls="site-nav">☰</button>
    <nav class="nav" id="site-nav">
        <a href="#top">Home</a>
        <a href="#services">Services</a>
        <a href="#about">About</a>
        <a href="#reviews">Reviews</a>
        <a href="#visit">Visit</a>
        <a class="book-nav" href="{{ $booksy }}" target="_blank" rel="noopener">Book now</a>
    </nav>
</header>
<div class="utility">
    <span class="city">Hayward, California</span>
    <span class="utility-links">
        <a href="tel:+15105387311">(510) 538-7311</a>
        <a class="ig" href="{{ $instagram }}" target="_blank" rel="noopener">Instagram</a>
        <span class="rating">5.0 ★ · 23 reviews</span>
    </span>
</div>

<main id="top">
<section class="hero">
    <div class="hero-copy">
        <span class="kicker">Charlotte Beauty Braids · Hayward</span>
        <h1>Protective styles. <em>Polished finish.</em></h1>
        <p>Custom braids, twists, locs and cornrows by Ruffine Bonkaw. Designed with care and finished for confidence.</p>
        <div class="hero-actions">
            <a class="btn dark" href="{{ $booksy }}" target="_blank" rel="noopener">Book on Booksy</a>
            <a class="btn" href="#services">See styles &amp; prices</a>
        </div>
    </div>
    <figure class="hero-image" style="margin:0">
        <img src="{{ asset('images/hero.jpg') }}" alt="Long blonde curly twists by Ruffine" fetchpriority="high">
        <figcaption>Styled by Ruffine</figcaption>
    </figure>
</section>

<section class="section" id="services">
    <div class="section-head">
        <div><span class="kicker">Service menu</span><h2>Choose your style</h2></div>
        <p>Prices are starting points. Final time and price depend on braid size, length, hair choice and prep.</p>
    </div>
    <div class="filters">
        <button class="filter active" data-filter="all">All</button>
        <button class="filter" data-filter="braids">Braids</button>
        <button class="filter" data-filter="twists">Twists &amp; locs</button>
        <button class="filter" data-filter="cornrows">Cornrows</button>
        <button class="filter" data-filter="weaves">Weaves &amp; crochet</button>
    </div>
    <div class="services">
        @foreach ($services as $i => $s)
            <article class="service {{ $i > 5 ? 'extra hidden' : '' }}" data-category="{{ $s['category'] }}">
                <div class="service-photo">
                    <img src="{{ asset('images/services/'.$s['image']) }}" alt="{{ $s['name'] }}{{ $s['real'] ? ' styled by Ruffine' : ' style inspiration' }}" loading="lazy" width="900" height="1125">
                    <span class="tag {{ $s['real'] ? 'real' : '' }}">{{ $s['real'] ? "Ruffine's work" : 'Style inspiration' }}</span>
                </div>
                <div class="service-body">
                    <h3>{{ $s['name'] }}</h3>
                    <div class="meta"><span class="price">from {{ $s['price'] }}</span><span class="time">{{ $s['time'] }}</span></div>
                    <ul>@foreach ($s['notes'] as $note)<li>{{ $note }}</li>@endforeach</ul>
                </div>
                <a class="service-book" href="#booking" data-service="{{ $s['name'] }}">Request this style <span aria-hidden="true">→</span></a>
            </article>
        @endforeach
    </div>
    <div class="more"><button class="btn" id="showMore">View all services</button></div>
    <p class="credit-note">“Ruffine's work” photos are real clients from <a href="{{ $instagram }}" target="_blank" rel="noopener">@charlottebeauty_1</a>. “Style inspiration” photos are stock references.</p>
</section>

<section class="about" id="about">
    <div class="about-photo"><img src="{{ asset('images/about.jpg') }}" alt="Blonde ombré knotless braids by Ruffine" loading="lazy"></div>
    <div class="about-copy">
        <span class="kicker">About the studio</span>
        <h2>Braiding is care, craft, and confidence.</h2>
        <p>Charlotte Beauty Braids is a welcoming Hayward studio known for fast, polished work and a friendly atmosphere. Ruffine brings years of experience and an eye for detail to every appointment.</p>
        <div class="stats">
            <div><strong>5.0</strong><span>Rating</span></div>
            <div><strong>23</strong><span>Reviews</span></div>
            <div><strong>40+</strong><span>Styles</span></div>
        </div>
        <a class="btn" href="{{ $instagram }}" target="_blank" rel="noopener">See more on Instagram</a>
    </div>
</section>

<section class="section" id="reviews">
    <div class="section-head"><div><span class="kicker">Client notes</span><h2>They leave glowing</h2></div></div>
    <div class="reviews">
        <article class="review"><div class="stars" aria-label="5 stars">★★★★★</div><blockquote>“My braids came out great. And she was done in the 3 hours!”</blockquote><small>Brittany · Box Braids</small></article>
        <article class="review"><div class="stars" aria-label="5 stars">★★★★★</div><blockquote>“The best experience ever! Love my hair to the fullest!”</blockquote><small>Maurisha · Bohemian Braids</small></article>
        <article class="review"><div class="stars" aria-label="5 stars">★★★★★</div><blockquote>“Quick, proficient, kind and very easy to work with.”</blockquote><small>Teresa · Box Braids</small></article>
    </div>
</section>

<section class="section" id="booking">
    <div class="booking">
        <div class="booking-info" id="visit">
            <span class="kicker">Book your visit</span>
            <h2>Request an appointment.</h2>
            <p>The fastest way to book is Booksy. Prefer to ask first? Send a request and we’ll follow up to confirm availability and deposit details.</p>
            <a class="btn dark" href="{{ $booksy }}" target="_blank" rel="noopener">Book on Booksy</a>
            <p class="address">762 A St<br>Hayward, CA 94541</p>
            <a class="directions" href="https://www.google.com/maps/search/?api=1&query=762+A+St+Hayward+CA+94541" target="_blank" rel="noopener">Get directions →</a>
        </div>
        <form class="form" method="post" action="{{ route('booking.store') }}">
            @csrf
            @if (session('success'))<div class="flash" role="status">{{ session('success') }}</div>@endif
            @if ($errors->any())<div class="flash error" role="alert">Please check the highlighted fields and try again.</div>@endif
            <div class="field">
                <label for="name">Your name</label>
                <input id="name" name="name" required maxlength="100" autocomplete="name" value="{{ old('name') }}">
                @error('name')<span class="field-error">{{ $message }}</span>@enderror
            </div>
            <div class="field">
                <label for="contact">Phone or email</label>
                <input id="contact" name="contact" required maxlength="150" autocomplete="tel" value="{{ old('contact') }}">
                @error('contact')<span class="field-error">{{ $message }}</span>@enderror
            </div>
            <div class="field">
                <label for="service">Style</label>
                <select id="service" name="service" required>
                    <option value="">Choose a service</option>
                    @foreach ($services as $s)<option @selected(old('service') === $s['name'])>{{ $s['name'] }}</option>@endforeach
                    <option @selected(old('service') === 'Something else')>Something else</option>
                </select>
                @error('service')<span class="field-error">{{ $message }}</span>@enderror
            </div>
            <div class="field">
                <label for="date">Preferred date</label>
                <input id="date" type="date" name="date" min="{{ now()->format('Y-m-d') }}" required value="{{ old('date') }}">
                @error('date')<span class="field-error">{{ $message }}</span>@enderror
            </div>
            <div class="field full">
                <label for="notes">Length, color &amp; notes</label>
                <textarea id="notes" name="notes" maxlength="1000">{{ old('notes') }}</textarea>
                @error('notes')<span class="field-error">{{ $message }}</span>@enderror
            </div>
            <div class="field full">
                <button class="btn dark" type="submit">Send appointment request</button>
                <small>A request does not confirm an appointment. A $40 non-refundable deposit may be required.</small>
            </div>
        </form>
    </div>
</section>
</main>

<footer class="footer">
    <div class="footer-inner">
        <img class="footer-logo" src="{{ asset('images/logo-light.png') }}" alt="Charlotte Beauty Braids" loading="lazy">
        <nav class="footer-links" aria-label="Contact">
            <a href="tel:+15105387311">Call (510) 538-7311</a>
            <a href="{{ $instagram }}" target="_blank" rel="noopener">Instagram</a>
            <a href="{{ $booksy }}" target="_blank" rel="noopener">Book on Booksy</a>
        </nav>
        <address>762 A St<br>Hayward, CA 94541</address>
    </div>
    <div class="footer-bottom">© {{ date('Y') }} Charlotte Beauty Braids · Protective styles in Hayward, California</div>
</footer>

<script>
const menu = document.querySelector('.menu'), nav = document.querySelector('.nav');
menu.onclick = () => menu.setAttribute('aria-expanded', nav.classList.toggle('open'));
nav.querySelectorAll('a').forEach(a => a.addEventListener('click', () => { nav.classList.remove('open'); menu.setAttribute('aria-expanded', 'false'); }));

const filters = document.querySelectorAll('.filter'), cards = document.querySelectorAll('.service'), more = document.querySelector('#showMore');
filters.forEach(b => b.onclick = () => {
    filters.forEach(x => x.classList.toggle('active', x === b));
    cards.forEach(c => c.classList.toggle('hidden', b.dataset.filter !== 'all' && c.dataset.category !== b.dataset.filter));
    more.classList.add('hidden');
});
more.onclick = () => { document.querySelectorAll('.extra').forEach(c => c.classList.remove('hidden')); more.classList.add('hidden'); };
document.querySelectorAll('[data-service]').forEach(a => a.onclick = () => document.querySelector('#service').value = a.dataset.service);
</script>
</body>
</html>
