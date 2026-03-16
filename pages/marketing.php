<?php
/**
 * pages/marketing.php
 * Konten panel Dashboard Marketing
 * KPI Command Center — ServisKu Platform
 */
?>
<div class="dashboard-panel" id="panel-marketing">

  <!-- Section Header -->
  <div class="section-header">
    <div>
      <div class="section-title">Dashboard Marketing</div>
      <div class="section-subtitle">Performa kampanye, akuisisi pelanggan & brand awareness</div>
      <div class="section-accent-bar" style="background:var(--marketing)"></div>
    </div>
  </div>

  <!-- KPI Cards -->
  <div class="kpi-grid">
    <div class="kpi-card" style="--card-accent:var(--marketing)">
      <div class="kpi-label">New Leads</div>
      <div class="kpi-value">1,847</div>
      <div class="kpi-change up">↑ 31.5%</div>
      <div class="kpi-target">Target: 2.000</div>
      <div class="progress-bar-wrap"><div class="progress-bar" style="width:92%"></div></div>
    </div>
    <div class="kpi-card" style="--card-accent:var(--danger)">
      <div class="kpi-label">CAC</div>
      <div class="kpi-value sm">Rp45.2K</div>
      <div class="kpi-change down">↑ 8.3% (naik)</div>
      <div class="kpi-target">Target: &lt; Rp40K</div>
      <div class="progress-bar-wrap"><div class="progress-bar" style="width:75%; background:var(--danger)"></div></div>
    </div>
    <div class="kpi-card" style="--card-accent:var(--success)">
      <div class="kpi-label">ROAS</div>
      <div class="kpi-value">4.2x</div>
      <div class="kpi-change up">↑ 0.6x</div>
      <div class="kpi-target">Target: 4.0x</div>
      <div class="progress-bar-wrap"><div class="progress-bar" style="width:100%"></div></div>
    </div>
    <div class="kpi-card" style="--card-accent:var(--sales)">
      <div class="kpi-label">CTR (Avg)</div>
      <div class="kpi-value">3.74%</div>
      <div class="kpi-change up">↑ 0.4%</div>
      <div class="kpi-target">Target: 4%</div>
      <div class="progress-bar-wrap"><div class="progress-bar" style="width:93%"></div></div>
    </div>
    <div class="kpi-card" style="--card-accent:var(--cs)">
      <div class="kpi-label">App Downloads</div>
      <div class="kpi-value">9,241</div>
      <div class="kpi-change up">↑ 44%</div>
      <div class="kpi-target">Target: 10.000</div>
      <div class="progress-bar-wrap"><div class="progress-bar" style="width:92%"></div></div>
    </div>
    <div class="kpi-card" style="--card-accent:var(--hr)">
      <div class="kpi-label">Organic Traffic</div>
      <div class="kpi-value sm">28,400</div>
      <div class="kpi-change up">↑ 19.2%</div>
      <div class="kpi-target">Target: 30K/bulan</div>
      <div class="progress-bar-wrap"><div class="progress-bar" style="width:94%"></div></div>
    </div>
  </div>

  <!-- Alert Banner -->
  <div class="alert-banner warn">
    ⚠️ CAC naik 8.3% melebihi target. Evaluasi anggaran Meta Ads — pertimbangkan realokasi ke konten organik TikTok.
  </div>

  <!-- Charts Row 1: Leads & Downloads + Channel Distribution -->
  <div class="chart-grid cols-2">
    <div class="chart-card">
      <div class="chart-title">Tren Leads & Downloads</div>
      <div class="chart-subtitle">Perbandingan 6 bulan</div>
      <div class="chart-wrap tall"><canvas id="mktLeadsChart"></canvas></div>
    </div>
    <div class="chart-card">
      <div class="chart-title">Distribusi Sumber Traffic</div>
      <div class="chart-subtitle">Channel akuisisi utama</div>
      <div class="chart-wrap tall"><canvas id="mktChannelChart"></canvas></div>
    </div>
  </div>

  <!-- Charts Row 2: Budget vs Spend + Campaign Table -->
  <div class="chart-grid cols-2">
    <div class="chart-card">
      <div class="chart-title">Budget vs Spend vs Revenue</div>
      <div class="chart-subtitle">Realisasi anggaran marketing (Rp Juta)</div>
      <div class="chart-wrap"><canvas id="mktBudgetChart"></canvas></div>
    </div>
    <div class="chart-card">
      <div class="chart-title">Performa Kampanye Aktif</div>
      <div class="chart-subtitle">Status Maret 2026</div>
      <table class="data-table">
        <thead>
          <tr><th>Kampanye</th><th>Spend</th><th>ROAS</th><th>CTR</th><th>Status</th></tr>
        </thead>
        <tbody>
          <tr><td>Google Search — HP Rusak</td>  <td>Rp12M</td><td>5.1x</td><td>4.8%</td><td><span class="badge badge-success">On</span></td></tr>
          <tr><td>Meta Ads — Laptop Servis</td>  <td>Rp18M</td><td>2.9x</td><td>2.1%</td><td><span class="badge badge-warn">Review</span></td></tr>
          <tr><td>TikTok — Tips Gadget</td>      <td>Rp5M</td> <td>6.4x</td><td>7.2%</td><td><span class="badge badge-success">On</span></td></tr>
          <tr><td>Google Display</td>             <td>Rp8M</td> <td>1.8x</td><td>0.9%</td><td><span class="badge badge-danger">Pause</span></td></tr>
        </tbody>
      </table>
    </div>
  </div>

</div><!-- /#panel-marketing -->
