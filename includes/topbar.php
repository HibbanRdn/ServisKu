<?php
/**
 * includes/topbar.php
 * Navigasi bar atas: judul halaman, breadcrumb, period selector
 * KPI Command Center — ServisKu Platform
 */
?>
<div class="topbar">
  <div class="topbar-left">
    <div class="page-title" id="page-title">KPI Penjualan</div>
    <div class="page-path"  id="page-path">dashboard / penjualan</div>
  </div>
  <div class="topbar-right">
    <select
      class="period-selector"
      id="period-selector"
      onchange="updatePeriod(this.value)"
    >
      <option value="monthly">Bulanan</option>
      <option value="quarterly" selected>Kuartalan</option>
      <option value="yearly">Tahunan</option>
    </select>
    <div class="date-badge">Q1 2026</div>
  </div>
</div>
