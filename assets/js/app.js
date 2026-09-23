/**
 * Makky Services - Main Application Script
 */

// Global Toast System
window.showToast = function(message) {
  let container = document.getElementById('toastContainer');
  if (!container) {
    container = document.createElement('div');
    container.id = 'toastContainer';
    container.className = 'toast-container';
    document.body.appendChild(container);
  }

  const toast = document.createElement('div');
  toast.className = 'toast';
  toast.innerHTML = `<i class="fas fa-check-circle" style="color:#ffffff;"></i> <span>${message}</span>`;
  container.appendChild(toast);

  setTimeout(() => {
    toast.style.opacity = '0';
    toast.style.transform = 'translateX(50px)';
    toast.style.transition = 'all 0.3s ease';
    setTimeout(() => toast.remove(), 300);
  }, 3200);
};

document.addEventListener('DOMContentLoaded', () => {
  // Mobile Navigation Toggle
  const mobileToggle = document.getElementById('mobileNavToggle');
  const navMenu = document.getElementById('navMenu');

  if (mobileToggle && navMenu) {
    mobileToggle.addEventListener('click', () => {
      const isVisible = navMenu.style.display === 'flex';
      navMenu.style.display = isVisible ? 'none' : 'flex';
      if (!isVisible) {
        navMenu.style.flexDirection = 'column';
        navMenu.style.position = 'absolute';
        navMenu.style.top = '100%';
        navMenu.style.left = '0';
        navMenu.style.right = '0';
        navMenu.style.background = '#0a0a0a';
        navMenu.style.padding = '1.5rem';
        navMenu.style.borderBottom = '2px solid var(--border-light)';
      }
    });
  }

  // Printing Service Tabs Filtering
  const tabBtns = document.querySelectorAll('.tab-btn');
  const serviceCards = document.querySelectorAll('.service-card');

  tabBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      tabBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filter = btn.dataset.tab;
      serviceCards.forEach(card => {
        if (filter === 'all' || card.dataset.category === filter) {
          card.style.display = 'flex';
        } else {
          card.style.display = 'none';
        }
      });
    });
  });

  // Cellphone Problem Matrix Category Filter
  const matrixCatBtns = document.querySelectorAll('.cat-btn');
  const symptomCards = document.querySelectorAll('.symptom-card');

  matrixCatBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      matrixCatBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const cat = btn.dataset.category;
      symptomCards.forEach(card => {
        if (cat === 'all' || card.dataset.category === cat) {
          card.style.display = 'flex';
        } else {
          card.style.display = 'none';
        }
      });
    });
  });

  // Direct "Add to Quote" from Service Cards
  document.querySelectorAll('.btn-add-service').forEach(btn => {
    btn.addEventListener('click', () => {
      const title = btn.dataset.name;
      const price = parseFloat(btn.dataset.price) || 0;
      const details = btn.dataset.details || '';

      if (window.OrderSystem) {
        window.OrderSystem.addItem({
          id: 'svc_' + Date.now(),
          type: 'Standard Service',
          title: title,
          details: details,
          quantity: 1,
          unitPrice: price,
          totalPrice: price
        });
      }
    });
  });

  // Inquire on Specific Cellphone Symptom Button
  document.querySelectorAll('.btn-inquire-symptom').forEach(btn => {
    btn.addEventListener('click', () => {
      const symptomTitle = btn.dataset.symptom;
      const estPrice = parseFloat(btn.dataset.price) || 0;
      const issueKey = btn.dataset.issue || 'other';

      // Pre-select issue in booking form
      const repairIssueSelect = document.getElementById('repairIssue');
      if (repairIssueSelect) {
        repairIssueSelect.value = issueKey;
      }

      // Add symptom inquiry to cart
      if (window.OrderSystem) {
        window.OrderSystem.addItem({
          id: 'symptom_' + Date.now(),
          type: 'Phone Repair Diagnosis',
          title: `Phone Issue: ${symptomTitle}`,
          details: `Specific Symptom Diagnostics & Parts Inspection`,
          quantity: 1,
          unitPrice: estPrice,
          totalPrice: estPrice
        });
        window.OrderSystem.openModal();
      }
    });
  });

  // Repair Diagnosis Form Booking
  const repairForm = document.getElementById('repairBookingForm');
  if (repairForm) {
    repairForm.addEventListener('submit', (e) => {
      e.preventDefault();

      const deviceType = document.getElementById('repairDeviceType').value;
      const brandModel = document.getElementById('repairBrandModel').value.trim();
      const issue = document.getElementById('repairIssue').value;
      const details = document.getElementById('repairDetails').value.trim();

      let estPrice = 300;
      if (issue === 'screen') estPrice = 1200;
      if (issue === 'battery') estPrice = 650;
      if (issue === 'charging') estPrice = 450;
      if (issue === 'audio') estPrice = 400;
      if (issue === 'camera') estPrice = 700;
      if (issue === 'water') estPrice = 500;
      if (issue === 'format') estPrice = 500;
      if (issue === 'software') estPrice = 400;

      const title = `${deviceType}: ${brandModel || 'Device'}`;
      const desc = `Issue: ${issue.toUpperCase()} • Notes: ${details || 'Diagnostics needed'}`;

      if (window.OrderSystem) {
        window.OrderSystem.addItem({
          id: 'repair_' + Date.now(),
          type: 'Repair Booking',
          title: title,
          details: desc,
          quantity: 1,
          unitPrice: estPrice,
          totalPrice: estPrice
        });

        window.OrderSystem.openModal();
        window.showToast('Repair diagnostics added to quote!');
      }

      repairForm.reset();
    });
  }

  // Smooth Scrolling for navigation links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      const targetId = this.getAttribute('href');
      if (targetId && targetId !== '#') {
        const targetElem = document.querySelector(targetId);
        if (targetElem) {
          e.preventDefault();
          targetElem.scrollIntoView({ behavior: 'smooth' });
          if (window.innerWidth <= 768 && navMenu) {
            navMenu.style.display = 'none';
          }
        }
      }
    });
  });
});
