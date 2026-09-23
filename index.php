<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Makky Services | Polaids Studio, Printing & Cellphone Repair Hub</title>
  <meta name="description" content="Makky Services - Repair • Fix • Solve. Interactive Polaid (polaroid) maker, printing services, and comprehensive cellphone repair diagnostics in Panay Norte, Magsingal I.S.">

  <!-- Google Fonts: Outfit, JetBrains Mono & Caveat (Handwritten) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600;700&family=JetBrains+Mono:wght@500;700;800&family=Outfit:wght@400;600;700;800;900&display=swap" rel="stylesheet">

  <!-- FontAwesome 6 Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <!-- Custom Stylesheet (Black & White Flyer Theme) -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

  <!-- Halftone Dot Pattern Background -->
  <div class="bg-halftone"></div>

  <!-- Navigation Bar -->
  <header class="navbar">
    <div class="container nav-container">
      <a href="#hero" class="brand-logo">
        <div class="brand-logo-img">MS</div>
        <div class="brand-text">
          <h2>MAKKY SERVICES</h2>
          <div class="brand-tagline">Repair • Fix • Solve</div>
        </div>
      </a>

      <nav>
        <ul class="nav-menu" id="navMenu">
          <li><a href="#polaid-studio" class="nav-link">Polaid Studio</a></li>
          <li><a href="#printing-services" class="nav-link">Printing Services</a></li>
          <li><a href="#phone-matrix" class="nav-link">Cellphone Problems</a></li>
          <li><a href="#repair-services" class="nav-link">PC & Repairs</a></li>
          <li><a href="#map-location" class="nav-link">Map & Location</a></li>
        </ul>
      </nav>

      <div class="nav-actions">
        <button class="btn-quote-cart" id="btnCartModal" title="View Order Quote">
          <i class="fas fa-receipt"></i>
          <span>Quote List</span>
          <span class="cart-count" id="navCartCount">0</span>
        </button>
        <button class="mobile-nav-toggle" id="mobileNavToggle" aria-label="Toggle Navigation">
          <i class="fas fa-bars"></i>
        </button>
      </div>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="hero-section" id="hero">
    <div class="container hero-grid">
      <div class="hero-content">
        <div class="badge badge-white">
          <i class="fas fa-map-marker-alt"></i> Panay Norte, Magsingal I.S.
        </div>
        <h1>
          MAKKY SERVICES<br>
          <span class="text-invert-box">PRINTING & REPAIR HUB</span>
        </h1>
        <p class="hero-subtitle">
          “We offer fair prices and trusted service.” Design custom polaids in real time, print sharp documents, and find expert diagnostics for every cellphone hardware or software problem.
        </p>

        <div class="hero-actions">
          <a href="#polaid-studio" class="btn btn-white btn-lg">
            <i class="fas fa-camera-retro"></i> Custom Polaid Studio
          </a>
          <a href="#phone-matrix" class="btn btn-outline btn-lg">
            <i class="fas fa-mobile-screen"></i> Cellphone Issue Guide
          </a>
        </div>

        <div class="hero-stats">
          <div class="stat-item">
            <h4>Polaids</h4>
            <p>From ₱5 / piece</p>
          </div>
          <div class="stat-item">
            <h4>Diagnostics</h4>
            <p>Free In-Shop Checkup</p>
          </div>
          <div class="stat-item">
            <h4>Panay Norte</h4>
            <p>Near Francis D' Great</p>
          </div>
        </div>
      </div>

      <!-- Hero Visual: Exact Black & White Flyer Reproduction -->
      <div class="hero-visual">
        <div class="official-flyer-card">
          <div class="flyer-brand-header">
            <div class="brand-logo-img" style="margin:0 auto 0.5rem; width:52px; height:52px; font-size:1.6rem;">MS</div>
            <h2>MAKKY SERVICES</h2>
            <div class="flyer-tagline-main">Repair • Fix • Solve</div>
          </div>

          <div class="flyer-pillars-grid">
            <!-- Phone Repair -->
            <div class="flyer-pillar">
              <div class="flyer-pillar-icon">
                <i class="fas fa-mobile-screen"></i>
              </div>
              <h3>PHONE REPAIR</h3>
              <ul>
                <li>Screen</li>
                <li>Battery</li>
                <li>Software</li>
              </ul>
            </div>

            <!-- Printing Services -->
            <div class="flyer-pillar">
              <div class="flyer-pillar-icon">
                <i class="fas fa-print"></i>
              </div>
              <h3>PRINTING SERVICES</h3>
              <ul>
                <li>Photo copy / Xerox</li>
                <li>Documents</li>
                <li>Photo albums</li>
                <li>Customize photos</li>
                <li>Polaids</li>
                <li>Invitations</li>
                <li>Certificates</li>
              </ul>
            </div>

            <!-- PC/Laptop Repair -->
            <div class="flyer-pillar">
              <div class="flyer-pillar-icon">
                <i class="fas fa-laptop"></i>
              </div>
              <h3>PC/LAPTOP REPAIR</h3>
              <ul>
                <li>Software</li>
                <li>Installation</li>
                <li>Format</li>
                <li>Battery</li>
              </ul>
            </div>
          </div>

          <!-- Contact Pill from Flyer -->
          <div class="flyer-contact-pillbox">
            <div class="flyer-contact-row">
              <i class="fas fa-map-marker-alt"></i>
              <strong>Location</strong>
              <span>Panay Norte Magsingal I.S.</span>
            </div>
            <div class="flyer-contact-row">
              <i class="fas fa-phone"></i>
              <strong>Call & Text</strong>
              <span>09349964142</span>
            </div>
            <div class="flyer-contact-row">
              <i class="fas fa-globe"></i>
              <strong>Website</strong>
              <span>www.makmak.online</span>
            </div>
            <div class="flyer-contact-row">
              <i class="fab fa-facebook"></i>
              <strong>Facebook</strong>
              <span>John Mark Alonzo Romias</span>
            </div>
          </div>

          <div class="flyer-quote-footer">
            “We offer fair prices and trusted service.”
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- INTERACTIVE POLAID (POLAROID) STUDIO SECTION -->
  <section class="polaid-section" id="polaid-studio">
    <div class="container">
      <div class="section-header">
        <span class="badge badge-white"><i class="fas fa-wand-magic-sparkles"></i> Live Customizer</span>
        <h2>Interactive Polaid Studio</h2>
        <p>Upload your favorite photo, pick a retro frame style, type a handwritten caption, and preview your custom Polaids before ordering!</p>
      </div>

      <div class="polaid-studio-card">
        <div class="polaid-studio-grid">
          <!-- Left: Real-Time Interactive Polaroid Mockup -->
          <div class="polaid-preview-panel">
            <div class="polaid-frame-wrapper theme-white ratio-square" id="polaidFrameWrapper">
              <div class="polaid-photo-area">
                <img src="" id="polaidPreviewImg" class="polaid-preview-img" alt="Polaid Preview">
                <div class="polaid-photo-placeholder" id="polaidPlaceholder">
                  <i class="fas fa-camera"></i>
                  <p style="font-size:0.85rem; font-weight:700;">Drop or Upload Photo</p>
                </div>
              </div>
              <div class="polaid-caption-area">
                <div class="polaid-caption-text" id="polaidCaptionDisplay">Best Memories</div>
                <div class="polaid-date-text" id="polaidDateDisplay">Sep 23, 2026</div>
              </div>
            </div>

            <div style="margin-top:2rem; text-align:center;">
              <span class="badge badge-outline" style="font-size:0.75rem;">
                <i class="fas fa-shield"></i> 260gsm Waterproof Resin Coated
              </span>
            </div>
          </div>

          <!-- Right: Interactive Controls -->
          <div class="polaid-controls-panel">
            <!-- Upload Photo -->
            <div class="control-group">
              <div class="control-label">
                <span>1. Upload Your Photo</span>
                <span style="color:#a3a3a3; font-size:0.75rem;">JPG, PNG, WebP</span>
              </div>
              <div class="file-drop-zone" id="polaidDropZone">
                <input type="file" id="polaidFileInput" accept="image/*">
                <i class="fas fa-cloud-arrow-up" style="font-size:1.5rem; margin-bottom:0.25rem;"></i>
                <p style="font-weight:700; font-size:0.85rem;">Click or drag & drop photo here</p>
              </div>
            </div>

            <!-- Frame Theme Style -->
            <div class="control-group">
              <div class="control-label">
                <span>2. Frame Theme Style</span>
              </div>
              <div class="segment-group">
                <button type="button" class="segment-btn active" data-theme="white">Classic White</button>
                <button type="button" class="segment-btn" data-theme="black">Midnight Black</button>
                <button type="button" class="segment-btn" data-theme="vintage">Vintage Cream</button>
                <button type="button" class="segment-btn" data-theme="film">Retro Film</button>
              </div>
            </div>

            <!-- Aspect Ratio -->
            <div class="control-group">
              <div class="control-label">
                <span>3. Polaid Format & Size</span>
              </div>
              <div class="segment-group">
                <button type="button" class="segment-btn" data-ratio="mini">Instax Mini (2R)</button>
                <button type="button" class="segment-btn active" data-ratio="square">Square (3×3")</button>
                <button type="button" class="segment-btn" data-ratio="wide">Wide (3R)</button>
              </div>
            </div>

            <!-- Photo Filters -->
            <div class="control-group">
              <div class="control-label">
                <span>4. Color Filter</span>
              </div>
              <div class="segment-group">
                <button type="button" class="segment-btn active" data-filter="none">Original</button>
                <button type="button" class="segment-btn" data-filter="bw">B&W Film</button>
                <button type="button" class="segment-btn" data-filter="sepia">Sepia Warm</button>
                <button type="button" class="segment-btn" data-filter="vintage">Vintage</button>
              </div>
            </div>

            <!-- Custom Handwritten Caption & Date -->
            <div class="control-group">
              <div class="control-label">
                <span>5. Custom Caption & Date</span>
              </div>
              <div style="display:grid; grid-template-columns:1.5fr 1fr; gap:0.5rem;">
                <input type="text" id="polaidCaptionInput" class="form-control" placeholder="e.g. Best Memories, Love always..." value="Best Memories">
                <input type="text" id="polaidDateInput" class="form-control" placeholder="e.g. 2026, Summer" value="Sep 23, 2026">
              </div>
            </div>

            <!-- Bundle Pack Selector -->
            <div class="control-group">
              <div class="control-label">
                <span>6. Choose Quantity Pack</span>
              </div>
              <div class="polaid-packs-grid">
                <div class="pack-card" data-qty="1">
                  <h4>1 Trial</h4>
                  <div class="pack-price">₱10</div>
                  <div class="pack-per">₱10 / pc</div>
                </div>
                <div class="pack-card" data-qty="10">
                  <h4>10-Pack</h4>
                  <div class="pack-price">₱80</div>
                  <div class="pack-per">₱8 / pc</div>
                </div>
                <div class="pack-card active" data-qty="20">
                  <h4>20-Pack</h4>
                  <div class="pack-price">₱140</div>
                  <div class="pack-per">₱7 / pc</div>
                </div>
                <div class="pack-card" data-qty="50">
                  <h4>50-Pack</h4>
                  <div class="pack-price">₱250</div>
                  <div class="pack-per">₱5 / pc ⭐</div>
                </div>
              </div>
            </div>

            <!-- Pricing & Add to Quote -->
            <div style="display:flex; justify-content:space-between; align-items:center; background:#000000; border:2px solid var(--border-light); padding:1rem 1.25rem; border-radius:var(--radius-sm); margin-top:0.5rem;">
              <div>
                <span style="color:#a3a3a3; font-size:0.8rem; font-weight:700;">TOTAL ESTIMATE (<span id="polaidSummaryQty">20 pcs</span>):</span>
                <div style="font-size:1.6rem; font-weight:900; font-family:var(--font-mono); color:#ffffff;" id="polaidTotalPrice">₱140</div>
              </div>
              <button type="button" class="btn btn-white" id="btnAddPolaidQuote">
                <i class="fas fa-plus"></i> Add Polaid to Quote
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- DETAILED CELLPHONE PROBLEM MATRIX & DIAGNOSTIC GUIDE -->
  <section class="repair-matrix-section" id="phone-matrix">
    <div class="container">
      <div class="section-header">
        <span class="badge badge-white"><i class="fas fa-stethoscope"></i> Complete Diagnostic Guide</span>
        <h2>Detailed Cellphone Problems & Solutions</h2>
        <p>Having phone troubles? Check our comprehensive breakdown of every major hardware and software issue with expected diagnostics and pricing.</p>
      </div>

      <!-- Categories Filter Bar -->
      <div class="matrix-categories-bar">
        <button class="cat-btn active" data-category="all"><i class="fas fa-layer-group"></i> All Issues</button>
        <button class="cat-btn" data-category="display"><i class="fas fa-mobile-screen"></i> Screen & Display</button>
        <button class="cat-btn" data-category="power"><i class="fas fa-battery-half"></i> Battery & Power</button>
        <button class="cat-btn" data-category="charging"><i class="fas fa-bolt"></i> Charging Port</button>
        <button class="cat-btn" data-category="audio"><i class="fas fa-volume-high"></i> Audio & Mic</button>
        <button class="cat-btn" data-category="camera"><i class="fas fa-camera"></i> Camera & Lens</button>
        <button class="cat-btn" data-category="software"><i class="fas fa-code"></i> Software & Unlock</button>
        <button class="cat-btn" data-category="physical"><i class="fas fa-droplet"></i> Water & Buttons</button>
      </div>

      <!-- Detailed Symptoms Grid -->
      <div class="symptoms-grid">
        <!-- 1. Broken / Cracked Screen -->
        <div class="symptom-card" data-category="display">
          <div>
            <div class="symptom-header">
              <h3>Cracked Screen / Broken Glass</h3>
              <span class="symptom-tag">Display</span>
            </div>
            <div class="symptom-body">
              <p>Front glass shattered from a drop or impact. May have dead touch zones or sharp fractured glass.</p>
              <ul class="symptom-bullets">
                <li><i class="fas fa-check"></i> <strong>Symptom:</strong> Spiderweb glass cracks, touch unresponsive in areas</li>
                <li><i class="fas fa-wrench"></i> <strong>Solution:</strong> OEM LCD / OLED panel assembly replacement</li>
                <li><i class="fas fa-shield"></i> <strong>Warranty:</strong> Tested touch response & display warranty</li>
              </ul>
            </div>
          </div>
          <div class="symptom-footer">
            <div class="symptom-cost">
              <span>Estimated:</span>
              <strong>₱850 – ₱1,800</strong>
            </div>
            <button class="btn btn-outline btn-sm btn-inquire-symptom" data-symptom="Cracked Screen Replacement" data-price="1200" data-issue="screen">
              <i class="fas fa-calendar-check"></i> Inquire
            </button>
          </div>
        </div>

        <!-- 2. Black Screen / Purple Bleed / Green Lines -->
        <div class="symptom-card" data-category="display">
          <div>
            <div class="symptom-header">
              <h3>Black Screen / Green Lines / Ink Bleed</h3>
              <span class="symptom-tag">OLED Matrix</span>
            </div>
            <div class="symptom-body">
              <p>Phone turns on, vibrates, or receives calls, but the screen stays pitch black, shows a vertical green line, or ink spreading.</p>
              <ul class="symptom-bullets">
                <li><i class="fas fa-check"></i> <strong>Symptom:</strong> Internal OLED layer damaged; ink bleeding or green line</li>
                <li><i class="fas fa-wrench"></i> <strong>Solution:</strong> Complete inner display module replacement</li>
                <li><i class="fas fa-shield"></i> <strong>Time:</strong> Same-day drop-off available</li>
              </ul>
            </div>
          </div>
          <div class="symptom-footer">
            <div class="symptom-cost">
              <span>Estimated:</span>
              <strong>₱1,200 – ₱2,500</strong>
            </div>
            <button class="btn btn-outline btn-sm btn-inquire-symptom" data-symptom="Black Screen / Green Lines OLED Fix" data-price="1500" data-issue="screen">
              <i class="fas fa-calendar-check"></i> Inquire
            </button>
          </div>
        </div>

        <!-- 3. Ghost Touch / Glitchy Screen -->
        <div class="symptom-card" data-category="display">
          <div>
            <div class="symptom-header">
              <h3>Ghost Touch / Frozen Digitizer</h3>
              <span class="symptom-tag">Touch Screen</span>
            </div>
            <div class="symptom-body">
              <p>Phone opens apps, types letters by itself, or completely refuses to respond to finger taps and swipes.</p>
              <ul class="symptom-bullets">
                <li><i class="fas fa-check"></i> <strong>Symptom:</strong> Erratic phantom taps, delayed swipe response</li>
                <li><i class="fas fa-wrench"></i> <strong>Solution:</strong> Digitizer flex check, re-seating or screen replacement</li>
                <li><i class="fas fa-shield"></i> <strong>Check:</strong> Free touch calibration test</li>
              </ul>
            </div>
          </div>
          <div class="symptom-footer">
            <div class="symptom-cost">
              <span>Estimated:</span>
              <strong>₱450 – ₱1,200</strong>
            </div>
            <button class="btn btn-outline btn-sm btn-inquire-symptom" data-symptom="Ghost Touch & Digitizer Fix" data-price="850" data-issue="screen">
              <i class="fas fa-calendar-check"></i> Inquire
            </button>
          </div>
        </div>

        <!-- 4. Bloated / Swollen Battery -->
        <div class="symptom-card" data-category="power">
          <div>
            <div class="symptom-header">
              <h3>Swollen / Bloated Battery</h3>
              <span class="symptom-tag" style="background:#ffffff; color:#000;">Urgent Hazard</span>
            </div>
            <div class="symptom-body">
              <p>Battery has expanded inside, pushing the screen up or popping the back cover open. Risk of puncture or fire.</p>
              <ul class="symptom-bullets">
                <li><i class="fas fa-check"></i> <strong>Symptom:</strong> Screen popping out, warped frame, hot phone</li>
                <li><i class="fas fa-wrench"></i> <strong>Solution:</strong> Immediate safe extraction & fresh OEM replacement</li>
                <li><i class="fas fa-shield"></i> <strong>Urgency:</strong> Drop off immediately for safety!</li>
              </ul>
            </div>
          </div>
          <div class="symptom-footer">
            <div class="symptom-cost">
              <span>Starts at:</span>
              <strong>₱650 – ₱950</strong>
            </div>
            <button class="btn btn-outline btn-sm btn-inquire-symptom" data-symptom="Swollen Battery Emergency Replacement" data-price="750" data-issue="battery">
              <i class="fas fa-calendar-check"></i> Inquire
            </button>
          </div>
        </div>

        <!-- 5. Fast Draining / Random Shutdown -->
        <div class="symptom-card" data-category="power">
          <div>
            <div class="symptom-header">
              <h3>Fast Draining & Sudden Shutdowns</h3>
              <span class="symptom-tag">Battery Health</span>
            </div>
            <div class="symptom-body">
              <p>Phone drains from 100% to 0% in just a couple of hours or abruptly shuts down when reaching 20% to 30%.</p>
              <ul class="symptom-bullets">
                <li><i class="fas fa-check"></i> <strong>Symptom:</strong> Battery health degraded below 70%, random power cuts</li>
                <li><i class="fas fa-wrench"></i> <strong>Solution:</strong> High-density 100% capacity replacement battery</li>
                <li><i class="fas fa-shield"></i> <strong>Benefit:</strong> Restores full all-day battery life</li>
              </ul>
            </div>
          </div>
          <div class="symptom-footer">
            <div class="symptom-cost">
              <span>Starts at:</span>
              <strong>₱550 – ₱850</strong>
            </div>
            <button class="btn btn-outline btn-sm btn-inquire-symptom" data-symptom="Battery Health Replacement" data-price="650" data-issue="battery">
              <i class="fas fa-calendar-check"></i> Inquire
            </button>
          </div>
        </div>

        <!-- 6. Totally Dead / Won't Power On -->
        <div class="symptom-card" data-category="power">
          <div>
            <div class="symptom-header">
              <h3>Dead Phone / No Power / Won't Turn On</h3>
              <span class="symptom-tag">Power IC</span>
            </div>
            <div class="symptom-body">
              <p>Device has zero response to charging, power buttons, or computer connections. Completely unresponsive.</p>
              <ul class="symptom-bullets">
                <li><i class="fas fa-check"></i> <strong>Symptom:</strong> No charging light, no vibration, won't boot</li>
                <li><i class="fas fa-wrench"></i> <strong>Solution:</strong> Power IC board diagnostics, battery jump-start or fuse repair</li>
                <li><i class="fas fa-shield"></i> <strong>Diagnostic:</strong> Free bench inspection upon drop-off</li>
              </ul>
            </div>
          </div>
          <div class="symptom-footer">
            <div class="symptom-cost">
              <span>Labor starts at:</span>
              <strong>₱450 – ₱1,100</strong>
            </div>
            <button class="btn btn-outline btn-sm btn-inquire-symptom" data-symptom="Dead Phone Power IC Diagnostics" data-price="500" data-issue="not_powering">
              <i class="fas fa-calendar-check"></i> Inquire
            </button>
          </div>
        </div>

        <!-- 7. Loose or Broken Charging Port -->
        <div class="symptom-card" data-category="charging">
          <div>
            <div class="symptom-header">
              <h3>Loose Charging Port / Must Hold Angle</h3>
              <span class="symptom-tag">USB-C / Lightning</span>
            </div>
            <div class="symptom-body">
              <p>Cable wiggles, disconnects constantly, or you have to tilt the cord at an angle to charge.</p>
              <ul class="symptom-bullets">
                <li><i class="fas fa-check"></i> <strong>Symptom:</strong> Intermittent charging, port packed with lint or bent pins</li>
                <li><i class="fas fa-wrench"></i> <strong>Solution:</strong> Deep pin cleaning or new charging sub-board soldering</li>
                <li><i class="fas fa-shield"></i> <strong>Compatibility:</strong> Type-C, Lightning (iPhone), Micro-USB</li>
              </ul>
            </div>
          </div>
          <div class="symptom-footer">
            <div class="symptom-cost">
              <span>Starts at:</span>
              <strong>₱350 – ₱650</strong>
            </div>
            <button class="btn btn-outline btn-sm btn-inquire-symptom" data-symptom="Charging Port Repair / Replacement" data-price="450" data-issue="charging">
              <i class="fas fa-calendar-check"></i> Inquire
            </button>
          </div>
        </div>

        <!-- 8. Fake Charging / Moisture Warning -->
        <div class="symptom-card" data-category="charging">
          <div>
            <div class="symptom-header">
              <h3>"Moisture Detected" / Fake Charging</h3>
              <span class="symptom-tag">Sensor / IC</span>
            </div>
            <div class="symptom-body">
              <p>Shows lightning bolt charging icon, but battery percentage stays stuck or drops. Or keeps displaying moisture error.</p>
              <ul class="symptom-bullets">
                <li><i class="fas fa-check"></i> <strong>Symptom:</strong> Won't charge past current %, persistent water warning</li>
                <li><i class="fas fa-wrench"></i> <strong>Solution:</strong> Charging IC sensor clean or thermistor component replacement</li>
                <li><i class="fas fa-shield"></i> <strong>Turnaround:</strong> 1-2 hours repair</li>
              </ul>
            </div>
          </div>
          <div class="symptom-footer">
            <div class="symptom-cost">
              <span>Starts at:</span>
              <strong>₱400 – ₱750</strong>
            </div>
            <button class="btn btn-outline btn-sm btn-inquire-symptom" data-symptom="Fake Charging / Moisture Warning Fix" data-price="450" data-issue="charging">
              <i class="fas fa-calendar-check"></i> Inquire
            </button>
          </div>
        </div>

        <!-- 9. Earpiece Speaker / Loudspeaker Distortion -->
        <div class="symptom-card" data-category="audio">
          <div>
            <div class="symptom-header">
              <h3>Muffled Earpiece / Blown Speaker</h3>
              <span class="symptom-tag">Audio</span>
            </div>
            <div class="symptom-body">
              <p>Cannot hear callers during phone calls, or bottom music speaker sounds distorted, crackling, or silent.</p>
              <ul class="symptom-bullets">
                <li><i class="fas fa-check"></i> <strong>Symptom:</strong> Low volume call earpiece, speaker buzzing at high volume</li>
                <li><i class="fas fa-wrench"></i> <strong>Solution:</strong> Acoustic mesh cleaning or new OEM speaker module</li>
                <li><i class="fas fa-shield"></i> <strong>Quality:</strong> Crisp loud sound restored</li>
              </ul>
            </div>
          </div>
          <div class="symptom-footer">
            <div class="symptom-cost">
              <span>Starts at:</span>
              <strong>₱350 – ₱600</strong>
            </div>
            <button class="btn btn-outline btn-sm btn-inquire-symptom" data-symptom="Earpiece & Loudspeaker Repair" data-price="400" data-issue="audio">
              <i class="fas fa-calendar-check"></i> Inquire
            </button>
          </div>
        </div>

        <!-- 10. Microphone Issue / Callers Can't Hear -->
        <div class="symptom-card" data-category="audio">
          <div>
            <div class="symptom-header">
              <h3>Microphone Failure (Muffled Calls)</h3>
              <span class="symptom-tag">Mic Flex</span>
            </div>
            <div class="symptom-body">
              <p>People on the other end of the line cannot hear your voice during calls, voice notes, or video recordings.</p>
              <ul class="symptom-bullets">
                <li><i class="fas fa-check"></i> <strong>Symptom:</strong> Voice is silent or muffled on Messenger/Phone calls</li>
                <li><i class="fas fa-wrench"></i> <strong>Solution:</strong> Primary bottom mic replacement or sub-board repair</li>
                <li><i class="fas fa-shield"></i> <strong>Testing:</strong> Real-time call clarity test before return</li>
              </ul>
            </div>
          </div>
          <div class="symptom-footer">
            <div class="symptom-cost">
              <span>Starts at:</span>
              <strong>₱350 – ₱550</strong>
            </div>
            <button class="btn btn-outline btn-sm btn-inquire-symptom" data-symptom="Microphone Replacement" data-price="400" data-issue="audio">
              <i class="fas fa-calendar-check"></i> Inquire
            </button>
          </div>
        </div>

        <!-- 11. Cracked Camera Glass / Shaking Lens -->
        <div class="symptom-card" data-category="camera">
          <div>
            <div class="symptom-header">
              <h3>Cracked Camera Glass / Shaking Lens</h3>
              <span class="symptom-tag">Optics</span>
            </div>
            <div class="symptom-body">
              <p>External camera lens cover glass is broken, or camera physically shakes and makes buzzing noise due to broken OIS stabilizer.</p>
              <ul class="symptom-bullets">
                <li><i class="fas fa-check"></i> <strong>Symptom:</strong> Blurry hazy photos, shattered lens cap, buzzing camera</li>
                <li><i class="fas fa-wrench"></i> <strong>Solution:</strong> High-clarity optical glass replacement or camera module</li>
                <li><i class="fas fa-shield"></i> <strong>Notice:</strong> Repair quickly to prevent sensor dust damage!</li>
              </ul>
            </div>
          </div>
          <div class="symptom-footer">
            <div class="symptom-cost">
              <span>Glass starts at:</span>
              <strong>₱250 – ₱750</strong>
            </div>
            <button class="btn btn-outline btn-sm btn-inquire-symptom" data-symptom="Camera Lens Glass Fix" data-price="350" data-issue="camera">
              <i class="fas fa-calendar-check"></i> Inquire
            </button>
          </div>
        </div>

        <!-- 12. Bootloop / Stuck on Logo -->
        <div class="symptom-card" data-category="software">
          <div>
            <div class="symptom-header">
              <h3>Bootloop / Stuck on Logo / Freezing</h3>
              <span class="symptom-tag">OS Flashing</span>
            </div>
            <div class="symptom-body">
              <p>Phone keeps restarting endlessly, freezes on the Samsung, Oppo, Vivo, Realme, Xiaomi, or Apple logo.</p>
              <ul class="symptom-bullets">
                <li><i class="fas fa-check"></i> <strong>Symptom:</strong> Corrupted firmware update, boot partition crash</li>
                <li><i class="fas fa-wrench"></i> <strong>Solution:</strong> Official factory stock ROM flashing & unbricking</li>
                <li><i class="fas fa-shield"></i> <strong>Data:</strong> Data recovery attempt supported</li>
              </ul>
            </div>
          </div>
          <div class="symptom-footer">
            <div class="symptom-cost">
              <span>Starts at:</span>
              <strong>₱400 – ₱700</strong>
            </div>
            <button class="btn btn-outline btn-sm btn-inquire-symptom" data-symptom="Bootloop Unbricking & ROM Flash" data-price="450" data-issue="software">
              <i class="fas fa-calendar-check"></i> Inquire
            </button>
          </div>
        </div>

        <!-- 13. Forgotten PIN / FRP Google Lock Bypass -->
        <div class="symptom-card" data-category="software">
          <div>
            <div class="symptom-header">
              <h3>FRP Google Lock Bypass & PIN Unlock</h3>
              <span class="symptom-tag">Account Unlock</span>
            </div>
            <div class="symptom-body">
              <p>Device reset but locked with "Verify your Google account" (FRP) or forgotten screen pattern/PIN.</p>
              <ul class="symptom-bullets">
                <li><i class="fas fa-check"></i> <strong>Symptom:</strong> Cannot bypass setup wizard after factory reset</li>
                <li><i class="fas fa-wrench"></i> <strong>Solution:</strong> Direct FRP bypass & account removal tool</li>
                <li><i class="fas fa-shield"></i> <strong>Requirements:</strong> Proof of device ownership required</li>
              </ul>
            </div>
          </div>
          <div class="symptom-footer">
            <div class="symptom-cost">
              <span>Starts at:</span>
              <strong>₱400 – ₱800</strong>
            </div>
            <button class="btn btn-outline btn-sm btn-inquire-symptom" data-symptom="FRP Google Account Bypass" data-price="500" data-issue="software">
              <i class="fas fa-calendar-check"></i> Inquire
            </button>
          </div>
        </div>

        <!-- 14. Water / Liquid Damage Treatment -->
        <div class="symptom-card" data-category="physical">
          <div>
            <div class="symptom-header">
              <h3>Water / Liquid Spill Treatment</h3>
              <span class="symptom-tag" style="background:#ffffff; color:#000;">Time Sensitive</span>
            </div>
            <div class="symptom-body">
              <p>Dropped in water, rain, or liquid. Do NOT plug in or turn on! Requires immediate ultrasonic chemical dehydration.</p>
              <ul class="symptom-bullets">
                <li><i class="fas fa-check"></i> <strong>Symptom:</strong> Corroding logic board circuits, shorted capacitors</li>
                <li><i class="fas fa-wrench"></i> <strong>Solution:</strong> Disassembly, ultrasonic isopropanol cleaning & drying</li>
                <li><i class="fas fa-shield"></i> <strong>Tip:</strong> DO NOT use rice — bring it to shop ASAP!</li>
              </ul>
            </div>
          </div>
          <div class="symptom-footer">
            <div class="symptom-cost">
              <span>Cleaning starts at:</span>
              <strong>₱500</strong>
            </div>
            <button class="btn btn-outline btn-sm btn-inquire-symptom" data-symptom="Water Damage Ultrasonic Cleaning" data-price="500" data-issue="water">
              <i class="fas fa-calendar-check"></i> Inquire
            </button>
          </div>
        </div>

        <!-- 15. Broken Buttons & Bent Frame -->
        <div class="symptom-card" data-category="physical">
          <div>
            <div class="symptom-header">
              <h3>Stuck Power / Volume Buttons & Bent Frame</h3>
              <span class="symptom-tag">Housing</span>
            </div>
            <div class="symptom-body">
              <p>Power switch or volume buttons stuck, sunken, or don't click. Or aluminum body bent from sitting on it.</p>
              <ul class="symptom-bullets">
                <li><i class="fas fa-check"></i> <strong>Symptom:</strong> Hard to turn screen on/off, volume goes up/down on its own</li>
                <li><i class="fas fa-wrench"></i> <strong>Solution:</strong> Button flex switch replacement & chassis realignment</li>
                <li><i class="fas fa-shield"></i> <strong>Restoration:</strong> Clicky tactile feel restored</li>
              </ul>
            </div>
          </div>
          <div class="symptom-footer">
            <div class="symptom-cost">
              <span>Starts at:</span>
              <strong>₱300 – ₱600</strong>
            </div>
            <button class="btn btn-outline btn-sm btn-inquire-symptom" data-symptom="Button Switch Repair" data-price="350" data-issue="hardware">
              <i class="fas fa-calendar-check"></i> Inquire
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Printing Services Catalog (Matching Flyer Offerings) -->
  <section class="services-section" id="printing-services">
    <div class="container">
      <div class="section-header">
        <span class="badge badge-white"><i class="fas fa-print"></i> Studio Printing</span>
        <h2>Printing Services Catalog</h2>
        <p>Document copying, photo keepsakes, invitations, and certificates crafted with premium materials.</p>
      </div>

      <!-- Filter Tabs -->
      <div class="services-tabs">
        <button class="tab-btn active" data-tab="all"><i class="fas fa-border-all"></i> All Printing</button>
        <button class="tab-btn" data-tab="photo"><i class="fas fa-camera-retro"></i> Photos & Polaids</button>
        <button class="tab-btn" data-tab="cards"><i class="fas fa-envelope-open-text"></i> Invitations & Certificates</button>
        <button class="tab-btn" data-tab="documents"><i class="fas fa-file-lines"></i> Documents & Xerox</button>
      </div>

      <!-- Service Cards Grid -->
      <div class="cards-grid">
        <!-- Photo Copy / Xerox -->
        <div class="service-card" data-category="documents">
          <div>
            <div class="service-card-icon"><i class="fas fa-copy"></i></div>
            <h3>Photo copy / Xerox</h3>
            <p class="description">Crystal-clear document duplication, school modules, identity card copying, and high-resolution scanning.</p>
            <ul class="feature-list">
              <li><i class="fas fa-check"></i> Short, Long, and A4 paper sizes</li>
              <li><i class="fas fa-check"></i> Black & White and Full Color xerox</li>
              <li><i class="fas fa-check"></i> Bulk discounts for school modules & projects</li>
            </ul>
          </div>
          <div class="card-footer">
            <div class="card-price">
              <span>Starts at</span>
              <strong>₱1.50 / page</strong>
            </div>
            <button class="btn btn-outline btn-sm btn-add-service" data-name="Document Copy Pack (50 pages)" data-price="75" data-details="50 pages B&W Document Photocopy">
              <i class="fas fa-plus"></i> Add to Quote
            </button>
          </div>
        </div>

        <!-- Documents Printing -->
        <div class="service-card" data-category="documents">
          <div>
            <div class="service-card-icon"><i class="fas fa-file-contract"></i></div>
            <h3>Documents Printing</h3>
            <p class="description">Print school research, thesis, contracts, resumes, and office reports with sharp text and contrast.</p>
            <ul class="feature-list">
              <li><i class="fas fa-check"></i> Send files via Messenger or drop off USB</li>
              <li><i class="fas fa-check"></i> Ring binding & soft-bind options available</li>
              <li><i class="fas fa-check"></i> Fast rush printing available</li>
            </ul>
          </div>
          <div class="card-footer">
            <div class="card-price">
              <span>Starts at</span>
              <strong>₱3 / page</strong>
            </div>
            <button class="btn btn-outline btn-sm btn-add-service" data-name="Color Report Printing (20 pages)" data-price="100" data-details="20 pages Full Color Document Print">
              <i class="fas fa-plus"></i> Add to Quote
            </button>
          </div>
        </div>

        <!-- Polaids Standard Card -->
        <div class="service-card" data-category="photo">
          <div>
            <div class="service-card-icon"><i class="fas fa-camera-retro"></i></div>
            <h3>Polaids (Polaroid Prints)</h3>
            <p class="description">Vintage-style polaroid photo prints with custom caption text, glossy or matte waterproof finish.</p>
            <ul class="feature-list">
              <li><i class="fas fa-check"></i> 2R / 3R / Instax Mini sizes</li>
              <li><i class="fas fa-check"></i> Premium 260gsm resin-coated photo paper</li>
              <li><i class="fas fa-check"></i> Waterproof & smudge-proof coating</li>
              <li><i class="fas fa-check"></i> Pack of 20 or 50 pieces</li>
            </ul>
          </div>
          <div class="card-footer">
            <div class="card-price">
              <span>Pack rate</span>
              <strong>₱7 / pc (20-Pack)</strong>
            </div>
            <a href="#polaid-studio" class="btn btn-white btn-sm">
              <i class="fas fa-wand-magic-sparkles"></i> Customize
            </a>
          </div>
        </div>

        <!-- Invitations -->
        <div class="service-card" data-category="cards">
          <div>
            <div class="service-card-icon"><i class="fas fa-envelope-open-text"></i></div>
            <h3>Invitations</h3>
            <p class="description">Custom theme invitations for Birthdays, Weddings, Baptisms, Anniversaries, and Special Events.</p>
            <ul class="feature-list">
              <li><i class="fas fa-check"></i> Personalized layout design concept</li>
              <li><i class="fas fa-check"></i> Matte, glossy, or textured board options</li>
              <li><i class="fas fa-check"></i> Matching envelopes & seal stickers</li>
            </ul>
          </div>
          <div class="card-footer">
            <div class="card-price">
              <span>Starts at</span>
              <strong>₱12 / card</strong>
            </div>
            <button class="btn btn-outline btn-sm btn-add-service" data-name="Invitations (25-Pack)" data-price="300" data-details="25 pcs Custom Event Invitations + Envelopes">
              <i class="fas fa-plus"></i> Add to Quote
            </button>
          </div>
        </div>

        <!-- Certificates -->
        <div class="service-card" data-category="cards">
          <div>
            <div class="service-card-icon"><i class="fas fa-award"></i></div>
            <h3>Certificates</h3>
            <p class="description">High-grade parchment & board certificates for schools, seminars, recognition events, and contests.</p>
            <ul class="feature-list">
              <li><i class="fas fa-check"></i> Specialty parchment & linen paper</li>
              <li><i class="fas fa-check"></i> Crisp high-resolution micro-text</li>
              <li><i class="fas fa-check"></i> Batch name merging supported</li>
            </ul>
          </div>
          <div class="card-footer">
            <div class="card-price">
              <span>Starts at</span>
              <strong>₱15 / pc</strong>
            </div>
            <button class="btn btn-outline btn-sm btn-add-service" data-name="Certificates (10-Pack)" data-price="150" data-details="10 pcs High-grade parchment certificates">
              <i class="fas fa-plus"></i> Add to Quote
            </button>
          </div>
        </div>

        <!-- Photo Albums & Customize Photos -->
        <div class="service-card" data-category="photo">
          <div>
            <div class="service-card-icon"><i class="fas fa-images"></i></div>
            <h3>Photo Albums & Customize Photos</h3>
            <p class="description">Preserve family memories with curated photo books, framed portraits, and collage layouts.</p>
            <ul class="feature-list">
              <li><i class="fas fa-check"></i> 4R, 5R, 8R, and A4 enlarged prints</li>
              <li><i class="fas fa-check"></i> Photobook compiling & softcover binding</li>
              <li><i class="fas fa-check"></i> Color-correction & photo enhancement</li>
            </ul>
          </div>
          <div class="card-footer">
            <div class="card-price">
              <span>Starts at</span>
              <strong>₱25 / photo</strong>
            </div>
            <button class="btn btn-outline btn-sm btn-add-service" data-name="Custom Photo Set (4R × 10)" data-price="250" data-details="10 pcs 4R High-Gloss Custom Photo Prints">
              <i class="fas fa-plus"></i> Add to Quote
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PC / Laptop Repair Section -->
  <section class="services-section" id="repair-services" style="background:#080808; border-top:2px solid var(--border-light);">
    <div class="container">
      <div class="section-header">
        <span class="badge badge-white"><i class="fas fa-laptop-code"></i> Computer Workshop</span>
        <h2>PC & Laptop Repair Solutions</h2>
        <p>Expert Windows OS installation, component upgrades, and professional maintenance for all desktop and laptop models.</p>
      </div>

      <div class="cards-grid">
        <!-- PC Format -->
        <div class="service-card">
          <div>
            <div class="service-card-icon"><i class="fas fa-laptop-code"></i></div>
            <h3>PC / Laptop OS Format</h3>
            <p class="description">Clean Windows 10/11 reformatting, full motherboard/audio/GPU driver installation.</p>
            <ul class="feature-list">
              <li><i class="fas fa-check"></i> Clean Windows OS setup</li>
              <li><i class="fas fa-check"></i> Complete hardware driver updates</li>
              <li><i class="fas fa-check"></i> Essential utility software bundle</li>
            </ul>
          </div>
          <div class="card-footer">
            <div class="card-price"><span>Package</span><strong>₱500</strong></div>
            <button class="btn btn-outline btn-sm btn-add-service" data-name="PC Format & OS Reinstall" data-price="500" data-details="Full Windows Format + Drivers + Essential Apps">
              <i class="fas fa-calendar-check"></i> Book
            </button>
          </div>
        </div>

        <!-- Program Installation -->
        <div class="service-card">
          <div>
            <div class="service-card-icon"><i class="fas fa-gears"></i></div>
            <h3>Program & Software Installation</h3>
            <p class="description">Installation and activation of Microsoft Office suite, Photoshop, AutoCAD, and editing tools.</p>
            <ul class="feature-list">
              <li><i class="fas fa-check"></i> MS Office Word, Excel, PowerPoint</li>
              <li><i class="fas fa-check"></i> Graphic editing & design apps</li>
              <li><i class="fas fa-check"></i> Antivirus & security suite</li>
            </ul>
          </div>
          <div class="card-footer">
            <div class="card-price"><span>Starts at</span><strong>₱250</strong></div>
            <button class="btn btn-outline btn-sm btn-add-service" data-name="Software Installation Suite" data-price="250" data-details="MS Office & productivity software installation">
              <i class="fas fa-calendar-check"></i> Book
            </button>
          </div>
        </div>

        <!-- PC Hardware & Battery -->
        <div class="service-card">
          <div>
            <div class="service-card-icon"><i class="fas fa-hard-drive"></i></div>
            <h3>SSD Upgrade & Laptop Battery</h3>
            <p class="description">Accelerate slow laptops by replacing spinning HDD with ultra-fast NVMe/SATA SSD and extra RAM.</p>
            <ul class="feature-list">
              <li><i class="fas fa-check"></i> Fast SSD installation with OS cloning</li>
              <li><i class="fas fa-check"></i> Laptop replacement battery service</li>
              <li><i class="fas fa-check"></i> Thermal cleaning & fan repasting</li>
            </ul>
          </div>
          <div class="card-footer">
            <div class="card-price"><span>Labor starts at</span><strong>₱350</strong></div>
            <button class="btn btn-outline btn-sm btn-add-service" data-name="SSD Upgrade & Laptop Service" data-price="350" data-details="Hardware installation & speed optimization">
              <i class="fas fa-calendar-check"></i> Book
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Landmark & Google Map Section (Panay Norte - Francis D' Great Barbershop) -->
  <section class="map-section" id="map-location">
    <div class="container">
      <div class="section-header">
        <span class="badge badge-white"><i class="fas fa-location-dot"></i> Visit Our Shop</span>
        <h2>Shop Location & Map</h2>
        <p>Find us easily in Panay Norte, Magsingal, Ilocos Sur. Follow the map below right beside our landmark.</p>
      </div>

      <div class="map-card-wrapper">
        <div class="map-grid">
          <!-- Info Panel -->
          <div class="map-info-panel">
            <div>
              <span class="badge badge-white" style="margin-bottom:1rem;">
                <i class="fas fa-store"></i> Panay Norte, Magsingal
              </span>
              <h3 style="font-size:1.75rem; margin-bottom:0.75rem;">MAKKY SERVICES</h3>
              <p style="color:#a3a3a3; font-size:0.92rem; line-height:1.7;">
                We are conveniently located in Panay Norte, Magsingal, Ilocos Sur. Drop off your devices for diagnostics or pick up your printed documents, polaids, and invitations.
              </p>

              <!-- Landmark Box -->
              <div class="landmark-box">
                <h4>
                  <i class="fas fa-scissors"></i>
                  <span>Landmark: Francis D’ Great Barbershop</span>
                </h4>
                <p>
                  Our shop is right at the landmark of <strong>Francis D’ Great Barbershop</strong> along Panay Norte, Magsingal I.S. (Coordinates: 17.6658669, 120.4036044).
                </p>
              </div>

              <div style="display:flex; flex-direction:column; gap:0.6rem; font-size:0.88rem; color:#d4d4d4;">
                <div><i class="fas fa-clock" style="margin-right:0.5rem;"></i> <strong>Hours:</strong> Monday – Saturday: 8:00 AM – 6:00 PM</div>
                <div><i class="fas fa-phone" style="margin-right:0.5rem;"></i> <strong>Contact:</strong> 09349964142</div>
                <div><i class="fas fa-user-tie" style="margin-right:0.5rem;"></i> <strong>Proprietor:</strong> John Mark Alonzo Romias</div>
              </div>
            </div>

            <div style="margin-top:2rem;">
              <a href="https://www.google.com/maps/place/Francis+D%E2%80%99+Great+Barbershop/@17.6623271,120.402594,16.22z/data=!4m6!3m5!1s0x338e63004bbf5f2f:0x4e3174136624de9b!8m2!3d17.6658669!4d120.4036044!16s%2Fg%2F11w9r391wx" target="_blank" rel="noopener noreferrer" class="btn btn-white" style="width:100%;">
                <i class="fas fa-diamond-turn-right"></i> Open in Google Maps (Directions)
              </a>
            </div>
          </div>

          <!-- Embedded Literal Google Map -->
          <div class="map-embed-container">
            <iframe 
              src="https://maps.google.com/maps?q=17.6658669,120.4036044+(Francis+D'+Great+Barbershop+-+Makky+Services)&t=&z=17&ie=UTF8&iwloc=&output=embed"
              width="100%" 
              height="100%" 
              style="border:0;" 
              allowfullscreen="" 
              loading="lazy" 
              referrerpolicy="no-referrer-when-downgrade"
              title="Makky Services Location Map - Panay Norte Landmark Francis D' Great Barbershop">
            </iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Location, About & Footer -->
  <footer class="footer-section" id="contact">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-about">
          <div class="brand-logo" style="margin-bottom:1rem;">
            <div class="brand-logo-img">MS</div>
            <div class="brand-text">
              <h2>MAKKY SERVICES</h2>
              <div class="brand-tagline">Repair • Fix • Solve</div>
            </div>
          </div>
          <p>
            Your trusted digital printing studio and electronics repair workshop in Panay Norte, Magsingal, Ilocos Sur. Offering documents, photo keepsakes, and expert smartphone & PC maintenance.
          </p>
          <div style="font-weight:800; font-size:0.95rem; color:#ffffff; font-style:italic;">
            “We offer fair prices and trusted service.”
          </div>
        </div>

        <div class="footer-col">
          <h4>Printing Services</h4>
          <ul class="footer-links">
            <li><a href="#polaid-studio">Custom Polaid Studio</a></li>
            <li><a href="#printing-services">Photo copy / Xerox</a></li>
            <li><a href="#printing-services">Documents Printing</a></li>
            <li><a href="#printing-services">Event Invitations</a></li>
            <li><a href="#printing-services">Certificates & Parchment</a></li>
            <li><a href="#printing-services">Photo Albums & Custom Photos</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Repair Services</h4>
          <ul class="footer-links">
            <li><a href="#phone-matrix">Cracked Screen Replacement</a></li>
            <li><a href="#phone-matrix">Battery Swelling & Drain</a></li>
            <li><a href="#phone-matrix">Charging Port & Moisture</a></li>
            <li><a href="#phone-matrix">Bootloop & FRP Unlock</a></li>
            <li><a href="#repair-services">PC / Laptop OS Format</a></li>
            <li><a href="#repair-services">SSD & RAM Upgrades</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Shop Information</h4>
          <div class="footer-contact-info">
            <div class="info-item">
              <i class="fas fa-map-pin"></i>
              <div>
                <strong>Location:</strong><br>
                Panay Norte Magsingal I.S.<br>
                <small style="color:#ffffff;">(Landmark: Francis D’ Great Barbershop)</small>
              </div>
            </div>
            <div class="info-item">
              <i class="fas fa-phone"></i>
              <div>
                <strong>Call & Text:</strong><br>
                <a href="tel:09349964142" style="color:#ffffff; font-weight:800;">09349964142</a>
              </div>
            </div>
            <div class="info-item">
              <i class="fas fa-globe"></i>
              <div>
                <strong>Website:</strong><br>
                <a href="https://www.makmak.online" target="_blank" style="color:#ffffff;">www.makmak.online</a>
              </div>
            </div>
            <div class="info-item">
              <i class="fab fa-facebook"></i>
              <div>
                <strong>Facebook:</strong><br>
                <a href="https://www.facebook.com" target="_blank" style="color:#ffffff;">John Mark Alonzo Romias</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="footer-bottom">
        <div>
          &copy; <?php echo date('Y'); ?> MAKKY SERVICES. ALL RIGHTS RESERVED.
        </div>
        <div>
          REPAIR • FIX • SOLVE | PANAY NORTE, MAGSINGAL I.S.
        </div>
      </div>
    </div>
  </footer>

  <!-- Order / Quotation Modal -->
  <div class="modal-backdrop" id="orderModal">
    <div class="modal-card">
      <div class="modal-header">
        <div>
          <h3 style="color:#ffffff;">Your Order & Quotation Summary</h3>
          <span style="font-size:0.8rem; color:#a3a3a3;">Review items and choose submission channel</span>
        </div>
        <button class="btn-close-modal" id="btnCloseModal">&times;</button>
      </div>

      <div class="modal-body">
        <div id="emptyCartMsg" style="text-align:center; padding:2rem; color:#737373;">
          <i class="fas fa-receipt" style="font-size:2.5rem; margin-bottom:0.75rem; display:block;"></i>
          Your quote list is currently empty.<br>Select a printing or repair service to add!
        </div>

        <div class="quote-items-list" id="quoteItemsList">
          <!-- Dynamically populated -->
        </div>

        <div style="background:#141414; padding:1.25rem; border-radius:var(--radius-md); border:1px solid var(--border-light); display:flex; flex-direction:column; gap:0.85rem;">
          <h4 style="font-size:0.95rem; color:#ffffff;"><i class="fas fa-user"></i> Customer Contact Details</h4>
          <div style="display:grid; grid-template-columns:1fr 1fr; gap:0.75rem;">
            <input type="text" id="orderCustName" class="form-control" placeholder="Your Full Name">
            <input type="tel" id="orderCustPhone" class="form-control" placeholder="Mobile # (09349964142)">
          </div>
          <input type="text" id="orderCustNotes" class="form-control" placeholder="Special notes (e.g. drop-off time, urgency)">
        </div>

        <div style="display:flex; justify-content:space-between; align-items:center; border-top:2px solid var(--border-light); padding-top:1rem;">
          <div>
            <span style="color:#a3a3a3; font-size:0.85rem; font-weight:700;">Estimated Subtotal:</span>
            <div style="font-size:1.6rem; font-weight:900; color:#ffffff; font-family:var(--font-mono);" id="quoteTotal">₱0</div>
          </div>
          <button class="btn btn-outline btn-sm" id="btnPrintReceipt">
            <i class="fas fa-print"></i> Print Official Slip
          </button>
        </div>

        <div>
          <span style="font-size:0.85rem; color:#d4d4d4; font-weight:700; margin-bottom:0.6rem; display:block;">
            Choose Order / Inquiry Submission Channel:
          </span>
          <div class="channel-actions">
            <button type="button" class="btn-channel btn-messenger" id="btnSendMessenger">
              <i class="fab fa-facebook-messenger"></i> Send via Messenger
            </button>
            <button type="button" class="btn-channel btn-sms" id="btnSendSms">
              <i class="fas fa-comment-sms"></i> Send via SMS / Text
            </button>
          </div>
        </div>

        <button type="button" class="btn btn-white" id="btnSubmitOrderOnline" style="width:100%;">
          <i class="fas fa-paper-plane"></i> Submit Order Online
        </button>
      </div>
    </div>
  </div>

  <!-- JavaScript Modules -->
  <script src="assets/js/order-system.js"></script>
  <script src="assets/js/polaid-studio.js"></script>
  <script src="assets/js/app.js"></script>
</body>
</html>
