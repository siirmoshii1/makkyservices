/**
 * Makky Services - Cart, Quotation & Order Management System
 * Contact: 09349964142 | Facebook: John Mark Alonzo Romias | Panay Norte, Magsingal
 */

const OrderSystem = {
  items: [],
  contactNumber: '09349964142',
  facebookName: 'John Mark Alonzo Romias',

  init() {
    this.loadStorage();
    this.cacheDom();
    this.bindEvents();
    this.updateUI();
  },

  cacheDom() {
    this.dom = {
      cartBtn: document.getElementById('btnCartModal'),
      cartCount: document.getElementById('navCartCount'),
      modalBackdrop: document.getElementById('orderModal'),
      modalCloseBtn: document.getElementById('btnCloseModal'),
      quoteItemsList: document.getElementById('quoteItemsList'),
      emptyCartMsg: document.getElementById('emptyCartMsg'),
      quoteSubtotal: document.getElementById('quoteSubtotal'),
      quoteTotal: document.getElementById('quoteTotal'),
      
      // Customer inputs
      custName: document.getElementById('orderCustName'),
      custPhone: document.getElementById('orderCustPhone'),
      custNotes: document.getElementById('orderCustNotes'),
      
      // Order Action Buttons
      btnMessenger: document.getElementById('btnSendMessenger'),
      btnSms: document.getElementById('btnSendSms'),
      btnPrintReceipt: document.getElementById('btnPrintReceipt'),
      btnSubmitOnline: document.getElementById('btnSubmitOrderOnline')
    };
  },

  bindEvents() {
    if (this.dom.cartBtn) {
      this.dom.cartBtn.addEventListener('click', () => this.openModal());
    }

    if (this.dom.modalCloseBtn) {
      this.dom.modalCloseBtn.addEventListener('click', () => this.closeModal());
    }

    if (this.dom.modalBackdrop) {
      this.dom.modalBackdrop.addEventListener('click', (e) => {
        if (e.target === this.dom.modalBackdrop) this.closeModal();
      });
    }

    // Messenger checkout
    if (this.dom.btnMessenger) {
      this.dom.btnMessenger.addEventListener('click', () => this.checkoutViaMessenger());
    }

    // SMS checkout
    if (this.dom.btnSms) {
      this.dom.btnSms.addEventListener('click', () => this.checkoutViaSMS());
    }

    // Print Receipt
    if (this.dom.btnPrintReceipt) {
      this.dom.btnPrintReceipt.addEventListener('click', () => this.printReceipt());
    }

    // Submit via API
    if (this.dom.btnSubmitOnline) {
      this.dom.btnSubmitOnline.addEventListener('click', () => this.submitOrderOnline());
    }
  },

  loadStorage() {
    try {
      const saved = localStorage.getItem('makky_quote_items');
      if (saved) this.items = JSON.parse(saved);
    } catch (e) {
      this.items = [];
    }
  },

  saveStorage() {
    try {
      localStorage.setItem('makky_quote_items', JSON.stringify(this.items));
    } catch (e) {}
  },

  addItem(item) {
    this.items.push(item);
    this.saveStorage();
    this.updateUI();
    if (window.showToast) {
      window.showToast(`Added: ${item.title}`);
    }
  },

  removeItem(index) {
    if (this.items[index]) {
      const removed = this.items.splice(index, 1);
      this.saveStorage();
      this.updateUI();
      if (window.showToast && removed[0]) {
        window.showToast(`Removed: ${removed[0].title}`);
      }
    }
  },

  clearCart() {
    this.items = [];
    this.saveStorage();
    this.updateUI();
  },

  calculateTotal() {
    return this.items.reduce((sum, item) => sum + (item.totalPrice || 0), 0);
  },

  updateUI() {
    // Update badge count
    if (this.dom.cartCount) {
      this.dom.cartCount.innerText = this.items.length;
    }

    if (!this.dom.quoteItemsList) return;

    if (this.items.length === 0) {
      if (this.dom.emptyCartMsg) this.dom.emptyCartMsg.style.display = 'block';
      this.dom.quoteItemsList.innerHTML = '';
      if (this.dom.quoteSubtotal) this.dom.quoteSubtotal.innerText = '₱0';
      if (this.dom.quoteTotal) this.dom.quoteTotal.innerText = '₱0';
      return;
    }

    if (this.dom.emptyCartMsg) this.dom.emptyCartMsg.style.display = 'none';
    this.dom.quoteItemsList.innerHTML = '';

    const total = this.calculateTotal();

    this.items.forEach((item, idx) => {
      const div = document.createElement('div');
      div.className = 'quote-item';
      div.innerHTML = `
        <div class="quote-item-details">
          <h4>${item.title} <span style="color:var(--text-muted); font-size:0.8rem;">(×${item.quantity})</span></h4>
          <p>${item.details || ''}</p>
          <strong style="color:var(--accent-cyan); font-family:var(--font-mono); font-size:0.9rem;">₱${Number(item.totalPrice).toLocaleString()}</strong>
        </div>
        <div class="quote-item-actions">
          <button class="btn-remove-item" title="Remove Item" onclick="OrderSystem.removeItem(${idx})">
            <i class="fas fa-trash-alt"></i>
          </button>
        </div>
      `;
      this.dom.quoteItemsList.appendChild(div);
    });

    if (this.dom.quoteSubtotal) this.dom.quoteSubtotal.innerText = `₱${total.toLocaleString()}`;
    if (this.dom.quoteTotal) this.dom.quoteTotal.innerText = `₱${total.toLocaleString()}`;
  },

  openModal() {
    if (this.dom.modalBackdrop) {
      this.dom.modalBackdrop.classList.add('active');
    }
  },

  closeModal() {
    if (this.dom.modalBackdrop) {
      this.dom.modalBackdrop.classList.remove('active');
    }
  },

  formatOrderText() {
    const custName = this.dom.custName ? this.dom.custName.value.trim() : '';
    const custPhone = this.dom.custPhone ? this.dom.custPhone.value.trim() : '';
    const custNotes = this.dom.custNotes ? this.dom.custNotes.value.trim() : '';

    let text = `*MAKKY SERVICES - ORDER & INQUIRY*\n`;
    text += `Location: Panay Norte, Magsingal I.S.\n`;
    text += `Date: ${new Date().toLocaleDateString()}\n`;
    text += `------------------------------------\n`;
    if (custName) text += `Customer: ${custName}\n`;
    if (custPhone) text += `Phone: ${custPhone}\n`;
    text += `\n*ITEMS / SERVICES:*\n`;

    this.items.forEach((item, idx) => {
      text += `${idx + 1}. ${item.title} (×${item.quantity})\n`;
      if (item.details) text += `   Specs: ${item.details}\n`;
      text += `   Price: ₱${Number(item.totalPrice).toLocaleString()}\n`;
    });

    const total = this.calculateTotal();
    text += `------------------------------------\n`;
    text += `*ESTIMATED TOTAL: ₱${total.toLocaleString()}*\n`;
    if (custNotes) text += `Notes: ${custNotes}\n`;
    text += `\n(Sent via Makky Services Online Portal)`;

    return text;
  },

  checkoutViaMessenger() {
    if (this.items.length === 0) {
      alert('Your quote list is empty. Add a tarp or service first!');
      return;
    }

    const message = this.formatOrderText();
    // Facebook Profile or direct Messenger link
    // Standard messenger link or prompt to copy
    const encoded = encodeURIComponent(message);
    const fbUrl = `https://m.me/johnmark.romias?text=${encoded}`;
    
    // Copy order text to clipboard as safety backup
    navigator.clipboard.writeText(message).catch(() => {});
    
    window.open(fbUrl, '_blank');
    if (window.showToast) window.showToast('Order copied! Opening Facebook Messenger...');
  },

  checkoutViaSMS() {
    if (this.items.length === 0) {
      alert('Your quote list is empty. Add a tarp or service first!');
      return;
    }

    const message = this.formatOrderText();
    const smsUrl = `sms:${this.contactNumber}?body=${encodeURIComponent(message)}`;
    window.location.href = smsUrl;
  },

  printReceipt() {
    if (this.items.length === 0) {
      alert('Your quote list is empty.');
      return;
    }

    const custName = (this.dom.custName && this.dom.custName.value.trim()) || 'Valued Customer';
    const custPhone = (this.dom.custPhone && this.dom.custPhone.value.trim()) || 'N/A';
    const total = this.calculateTotal();

    const printWin = window.open('', '_blank');
    let rowsHtml = '';
    this.items.forEach((item, i) => {
      rowsHtml += `
        <tr>
          <td style="padding:8px; border-bottom:1px solid #ddd;">${i+1}</td>
          <td style="padding:8px; border-bottom:1px solid #ddd;">
            <strong>${item.title}</strong><br>
            <small style="color:#666;">${item.details || ''}</small>
          </td>
          <td style="padding:8px; border-bottom:1px solid #ddd; text-align:center;">${item.quantity}</td>
          <td style="padding:8px; border-bottom:1px solid #ddd; text-align:right;">₱${Number(item.totalPrice).toLocaleString()}</td>
        </tr>
      `;
    });

    const receiptHtml = `
      <!DOCTYPE html>
      <html>
      <head>
        <title>Makky Services - Official Quotation</title>
        <style>
          body { font-family: Arial, sans-serif; padding: 25px; color: #222; max-width: 700px; margin: 0 auto; }
          .header { text-align: center; border-bottom: 2px solid #000; padding-bottom: 12px; margin-bottom: 20px; }
          .brand { font-size: 24px; font-weight: bold; letter-spacing: -0.5px; }
          .sub { font-size: 13px; color: #555; margin-top: 4px; }
          .meta { display: flex; justify-content: space-between; margin-bottom: 20px; font-size: 13px; }
          table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
          th { background: #f4f4f4; text-align: left; padding: 8px; border-bottom: 2px solid #ccc; }
          .total-box { text-align: right; font-size: 18px; font-weight: bold; margin-top: 10px; }
          .footer { text-align: center; margin-top: 40px; font-size: 12px; color: #777; border-top: 1px dashed #ccc; padding-top: 15px; }
        </style>
      </head>
      <body>
        <div class="header">
          <div class="brand">MAKKY SERVICES</div>
          <div class="sub">Repair • Fix • Solve | "We offer fair prices and trusted service."</div>
          <div class="sub">Panay Norte, Magsingal, Ilocos Sur | 09349964142 | www.makmak.online</div>
        </div>
        <div class="meta">
          <div>
            <strong>Quotation For:</strong> ${custName}<br>
            <strong>Contact:</strong> ${custPhone}
          </div>
          <div style="text-align:right;">
            <strong>Date:</strong> ${new Date().toLocaleDateString()}<br>
            <strong>Ref #:</strong> MS-${Date.now().toString().slice(-6)}
          </div>
        </div>
        <table>
          <thead>
            <tr>
              <th style="width:30px;">#</th>
              <th>Service / Item</th>
              <th style="width:60px; text-align:center;">Qty</th>
              <th style="width:100px; text-align:right;">Amount</th>
            </tr>
          </thead>
          <tbody>
            ${rowsHtml}
          </tbody>
        </table>
        <div class="total-box">
          TOTAL AMOUNT: ₱${total.toLocaleString()}
        </div>
        <div class="footer">
          Thank you for choosing Makky Services! Present this quotation upon drop-off or pickup.
        </div>
        <script>
          window.onload = function() { window.print(); }
        </script>
      </body>
      </html>
    `;

    printWin.document.write(receiptHtml);
    printWin.document.close();
  },

  async submitOrderOnline() {
    if (this.items.length === 0) {
      alert('Your quote list is empty.');
      return;
    }

    const name = this.dom.custName ? this.dom.custName.value.trim() : '';
    const phone = this.dom.custPhone ? this.dom.custPhone.value.trim() : '';
    const notes = this.dom.custNotes ? this.dom.custNotes.value.trim() : '';

    if (!name || !phone) {
      alert('Please enter your Name and Contact Phone Number to submit.');
      return;
    }

    const payload = {
      customer_name: name,
      customer_phone: phone,
      notes: notes,
      items: this.items,
      total_amount: this.calculateTotal()
    };

    if (this.dom.btnSubmitOnline) {
      this.dom.btnSubmitOnline.disabled = true;
      this.dom.btnSubmitOnline.innerText = 'Submitting...';
    }

    try {
      const res = await fetch('api/submit-order.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(payload)
      });
      const data = await res.json();

      if (data.status === 'success') {
        alert(`Order Received! Reference Code: ${data.order_id}\nWe will contact you at ${phone} to confirm your order details.`);
        this.clearCart();
        this.closeModal();
      } else {
        alert('Notice: Order saved locally. You can also text 09349964142 directly.');
      }
    } catch (e) {
      // Fallback
      alert('Order noted! Please send via SMS (09349964142) or Messenger for immediate confirmation.');
    } finally {
      if (this.dom.btnSubmitOnline) {
        this.dom.btnSubmitOnline.disabled = false;
        this.dom.btnSubmitOnline.innerText = 'Submit Order Request';
      }
    }
  }
};

document.addEventListener('DOMContentLoaded', () => {
  OrderSystem.init();
});
