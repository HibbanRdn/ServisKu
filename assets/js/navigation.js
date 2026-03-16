/**
 * navigation.js
 * Logika sidebar navigation & period selector
 * KPI Command Center — ServisKu Platform
 */

'use strict';

// -------------------------------------------------------
// Panel metadata: title & breadcrumb path per panel
// -------------------------------------------------------
const PANELS = {
  sales:     { title: 'KPI Penjualan',         path: 'dashboard / penjualan' },
  marketing: { title: 'KPI Marketing',          path: 'dashboard / marketing' },
  cs:        { title: 'KPI Customer Service',   path: 'dashboard / customer-service' },
  finance:   { title: 'KPI Financial',          path: 'dashboard / financial' },
  hr:        { title: 'KPI Human Resources',    path: 'dashboard / human-resources' },
  it:        { title: 'KPI IT & Development',   path: 'dashboard / it-dev' },
  exec:      { title: 'Executive Dashboard',    path: 'dashboard / executive' },
  pm:        { title: 'KPI Project Management', path: 'dashboard / project-management' },
};

// -------------------------------------------------------
// Activate a panel by name
// -------------------------------------------------------
function activatePanel(panelName) {
  const meta = PANELS[panelName];
  if (!meta) return;

  // Deactivate all nav items & panels
  document.querySelectorAll('.nav-item').forEach(n => n.classList.remove('active'));
  document.querySelectorAll('.dashboard-panel').forEach(p => p.classList.remove('active'));

  // Activate selected nav item
  const navItem = document.querySelector(`.nav-item[data-panel="${panelName}"]`);
  if (navItem) navItem.classList.add('active');

  // Activate selected panel
  const panel = document.getElementById('panel-' + panelName);
  if (panel) panel.classList.add('active');

  // Update topbar title & breadcrumb
  const titleEl = document.getElementById('page-title');
  const pathEl  = document.getElementById('page-path');
  if (titleEl) titleEl.textContent = meta.title;
  if (pathEl)  pathEl.textContent  = meta.path;
}

// -------------------------------------------------------
// Period selector handler
// -------------------------------------------------------
function updatePeriod(value) {
  const badge = document.querySelector('.date-badge');
  if (!badge) return;

  const labels = {
    monthly:   'Mar 2026',
    quarterly: 'Q1 2026',
    yearly:    'FY 2026',
  };

  badge.textContent = labels[value] ?? 'Mar 2026';
}

// -------------------------------------------------------
// Bootstrap: bind nav item click events on DOM ready
// -------------------------------------------------------
document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.nav-item').forEach(item => {
    item.addEventListener('click', function () {
      activatePanel(this.dataset.panel);
    });
  });
});
