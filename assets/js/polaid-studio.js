/**
 * Makky Services - Interactive Polaid (Polaroid) Studio
 */

const PolaidStudio = {
  state: {
    photoUrl: null,
    frameTheme: 'white',   // 'white', 'black', 'vintage', 'film'
    ratio: 'square',       // 'mini', 'square', 'wide'
    filter: 'none',        // 'none', 'bw', 'sepia', 'vintage'
    caption: 'Best Memories',
    date: new Date().toLocaleDateString('en-US', { month: 'short', day: 'numeric', year: 'numeric' }),
    packCount: 20,
    price: 140
  },

  packs: {
    1: { qty: 1, price: 10, label: 'Single Trial' },
    10: { qty: 10, price: 80, label: '10-Pack Mini' },
    20: { qty: 20, price: 140, label: '20-Pack Value' },
    50: { qty: 50, price: 250, label: '50-Pack Party' }
  },

  init() {
    this.cacheDom();
    this.bindEvents();
    this.render();
  },

  cacheDom() {
    this.dom = {
      frameWrapper: document.getElementById('polaidFrameWrapper'),
      previewImg: document.getElementById('polaidPreviewImg'),
      placeholder: document.getElementById('polaidPlaceholder'),
      captionDisplay: document.getElementById('polaidCaptionDisplay'),
      dateDisplay: document.getElementById('polaidDateDisplay'),
      
      fileInput: document.getElementById('polaidFileInput'),
      dropZone: document.getElementById('polaidDropZone'),
      captionInput: document.getElementById('polaidCaptionInput'),
      dateInput: document.getElementById('polaidDateInput'),
      
      themeBtns: document.querySelectorAll('[data-theme]'),
      ratioBtns: document.querySelectorAll('[data-ratio]'),
      filterBtns: document.querySelectorAll('[data-filter]'),
      packCards: document.querySelectorAll('.pack-card'),
      
      totalPriceDisplay: document.getElementById('polaidTotalPrice'),
      summaryQtyDisplay: document.getElementById('polaidSummaryQty'),
      btnAddQuote: document.getElementById('btnAddPolaidQuote')
    };
  },

  bindEvents() {
    // File upload
    if (this.dom.fileInput) {
      this.dom.fileInput.addEventListener('change', (e) => {
        const file = e.target.files[0];
        if (file) this.handleFileUpload(file);
      });
    }

    // Drag and Drop
    if (this.dom.dropZone) {
      ['dragenter', 'dragover'].forEach(name => {
        this.dom.dropZone.addEventListener(name, (e) => {
          e.preventDefault();
          this.dom.dropZone.classList.add('dragover');
        });
      });

      ['dragleave', 'drop'].forEach(name => {
        this.dom.dropZone.addEventListener(name, (e) => {
          e.preventDefault();
          this.dom.dropZone.classList.remove('dragover');
        });
      });

      this.dom.dropZone.addEventListener('drop', (e) => {
        const file = e.dataTransfer.files[0];
        if (file) this.handleFileUpload(file);
      });
    }

    // Caption Input
    if (this.dom.captionInput) {
      this.dom.captionInput.addEventListener('input', (e) => {
        this.state.caption = e.target.value.trim() || 'Your Caption Here';
        this.render();
      });
    }

    // Date Input
    if (this.dom.dateInput) {
      this.dom.dateInput.addEventListener('input', (e) => {
        this.state.date = e.target.value.trim();
        this.render();
      });
    }

    // Theme selector
    this.dom.themeBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        this.dom.themeBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        this.state.frameTheme = btn.dataset.theme;
        this.render();
      });
    });

    // Ratio selector
    this.dom.ratioBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        this.dom.ratioBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        this.state.ratio = btn.dataset.ratio;
        this.render();
      });
    });

    // Filter selector
    this.dom.filterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        this.dom.filterBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        this.state.filter = btn.dataset.filter;
        this.render();
      });
    });

    // Pack Selector
    this.dom.packCards.forEach(card => {
      card.addEventListener('click', () => {
        this.dom.packCards.forEach(c => c.classList.remove('active'));
        card.classList.add('active');
        const qty = parseInt(card.dataset.qty) || 20;
        this.state.packCount = qty;
        this.state.price = this.packs[qty].price;
        this.render();
      });
    });

    // Add to quote
    if (this.dom.btnAddQuote) {
      this.dom.btnAddQuote.addEventListener('click', () => {
        this.addToQuote();
      });
    }
  },

  handleFileUpload(file) {
    if (!file.type.match('image.*')) {
      alert('Please upload an image file (PNG, JPG, WebP).');
      return;
    }

    const reader = new FileReader();
    reader.onload = (e) => {
      this.state.photoUrl = e.target.result;
      this.render();
      if (window.showToast) window.showToast('Photo loaded into Polaroid frame!');
    };
    reader.readAsDataURL(file);
  },

  render() {
    if (!this.dom.frameWrapper) return;

    // Update classes on frame
    this.dom.frameWrapper.className = `polaid-frame-wrapper theme-${this.state.frameTheme} ratio-${this.state.ratio}`;

    // Update image
    if (this.state.photoUrl) {
      this.dom.previewImg.src = this.state.photoUrl;
      this.dom.previewImg.style.display = 'block';
      this.dom.previewImg.className = `polaid-preview-img filter-${this.state.filter}`;
      if (this.dom.placeholder) this.dom.placeholder.style.display = 'none';
    } else {
      this.dom.previewImg.style.display = 'none';
      if (this.dom.placeholder) this.dom.placeholder.style.display = 'block';
    }

    // Update captions
    if (this.dom.captionDisplay) {
      this.dom.captionDisplay.innerText = this.state.caption;
    }
    if (this.dom.dateDisplay) {
      this.dom.dateDisplay.innerText = this.state.date;
    }

    // Update pricing
    if (this.dom.totalPriceDisplay) {
      this.dom.totalPriceDisplay.innerText = `₱${this.state.price}`;
    }
    if (this.dom.summaryQtyDisplay) {
      this.dom.summaryQtyDisplay.innerText = `${this.state.packCount} pcs`;
    }
  },

  addToQuote() {
    const themeNames = {
      white: 'Classic White Border',
      black: 'Midnight Black Border',
      vintage: 'Vintage Cream Border',
      film: 'Retro Film Border'
    };

    const ratioNames = {
      mini: 'Instax Mini (2R)',
      square: 'Square Classic (3×3 in)',
      wide: 'Wide Polaroid (3R)'
    };

    const item = {
      id: 'polaid_' + Date.now(),
      type: 'Polaids Printing',
      title: `Polaids Prints (${this.state.packCount}-Pack)`,
      details: `${ratioNames[this.state.ratio]} • ${themeNames[this.state.frameTheme]} • Caption: "${this.state.caption}"`,
      quantity: 1,
      unitPrice: this.state.price,
      totalPrice: this.state.price
    };

    if (window.OrderSystem) {
      window.OrderSystem.addItem(item);
    }
  }
};

document.addEventListener('DOMContentLoaded', () => {
  PolaidStudio.init();
});
