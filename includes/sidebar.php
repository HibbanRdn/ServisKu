<?php
/**
 * includes/sidebar.php
 * Navigasi sidebar kiri dengan nav items per departemen
 * KPI Command Center — ServisKu Platform
 */
?>
<nav class="sidebar">
  <div class="sidebar-brand">
    <div class="brand-logo">Servis<span>Ku</span></div>
    <div class="brand-sub">KPI Command Center</div>
  </div>

  <div class="nav-section-label">Dashboards</div>

  <div class="nav-item active" data-panel="sales" style="--accent-color: var(--sales)">
    <div class="nav-dot" style="background:var(--sales)"></div>
    <span>Penjualan</span>
  </div>

  <div class="nav-item" data-panel="marketing" style="--accent-color: var(--marketing)">
    <div class="nav-dot" style="background:var(--marketing)"></div>
    <span>Marketing</span>
  </div>

  <div class="nav-item" data-panel="cs" style="--accent-color: var(--cs)">
    <div class="nav-dot" style="background:var(--cs)"></div>
    <span>Customer Service</span>
  </div>

  <div class="nav-item" data-panel="finance" style="--accent-color: var(--finance)">
    <div class="nav-dot" style="background:var(--finance)"></div>
    <span>Financial</span>
  </div>

  <div class="nav-item" data-panel="hr" style="--accent-color: var(--hr)">
    <div class="nav-dot" style="background:var(--hr)"></div>
    <span>Human Resources</span>
  </div>

  <div class="nav-item" data-panel="it" style="--accent-color: var(--it)">
    <div class="nav-dot" style="background:var(--it)"></div>
    <span>IT & Dev</span>
  </div>

  <div class="nav-item" data-panel="exec" style="--accent-color: var(--exec)">
    <div class="nav-dot" style="background:var(--exec)"></div>
    <span>Executive</span>
  </div>

  <div class="nav-item" data-panel="pm" style="--accent-color: var(--pm)">
    <div class="nav-dot" style="background:var(--pm)"></div>
    <span>Project Mgmt</span>
  </div>

  <div class="sidebar-footer">
    <div class="status-live">LIVE DATA</div>
    <div class="last-update" style="margin-top:4px">Upd: <?= date('d M Y') ?></div>
  </div>
</nav>
