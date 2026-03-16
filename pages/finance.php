<?php
/**
 * pages/finance.php
 * Konten panel Dashboard Financial
 * KPI Command Center — ServisKu Platform
 */
?>
<div class="dashboard-panel" id="panel-finance">

  <!-- Section Header -->
  <div class="section-header">
    <div>
      <div class="section-title">Dashboard Financial</div>
      <div class="section-subtitle">Kesehatan keuangan, profitabilitas & arus kas platform</div>
      <div class="section-accent-bar" style="background:var(--finance)"></div>
    </div>
  </div>

  <!-- KPI Cards -->
  <div class="kpi-grid">
    <div class="kpi-card" style="--card-accent:var(--finance)">
      <div class="kpi-label">MRR</div>
      <div class="kpi-value sm">Rp847M</div>
      <div class="kpi-change up">↑ 23.4%</div>
      <div class="kpi-target">Target: Rp900M</div>
      <div class="progress-bar-wrap"><div class="progress-bar" style="width:94%"></div></div>
    </div>
    <div class="kpi-card" style="--card-accent:var(--success)">
      <div class="kpi-label">Net Profit Margin</div>
      <div class="kpi-value">14.2%</div>
      <div class="kpi-change up">↑ 1.8%</div>
      <div class="kpi-target">Target: 15%</div>
      <div class="progress-bar-wrap"><div class="progress-bar" style="width:94%"></div></div>
    </div>
    <div class="kpi-card" style="--card-accent:var(--sales)">
      <div class="kpi-label">Gross Profit</div>
      <div class="kpi-value sm">Rp239M</div>
      <div class="kpi-change up">↑ 28.2%</div>
      <div class="kpi-target">GPM: 28.3%</div>
      <div class="progress-bar-wrap"><div class="progress-bar" style="width:95%"></div></div>
    </div>
    <div class="kpi-card" style="--card-accent:var(--warn)">
      <div class="kpi-label">Monthly Burn Rate</div>
      <div class="kpi-value sm">Rp148M</div>
      <div class="kpi-change down">↑ 12% (naik)</div>
      <div class="kpi-target">Target: &lt; Rp135M</div>
      <div class="progress-bar-wrap"><div class="progress-bar" style="width:82%; background:var(--warn)"></div></div>
    </div>
    <div class="kpi-card" style="--card-accent:var(--cs)">
      <div class="kpi-label">Cash Runway</div>
      <div class="kpi-value">14 bln</div>
      <div class="kpi-change neutral">→ Stabil</div>
      <div class="kpi-target">Target: ≥ 12 bln</div>
      <div class="progress-bar-wrap"><div class="progress-bar" style="width:100%"></div></div>
    </div>
    <div class="kpi-card" style="--card-accent:var(--it)">
      <div class="kpi-label">LTV : CAC Ratio</div>
      <div class="kpi-value">6.3x</div>
      <div class="kpi-change up">↑ 0.8x</div>
      <div class="kpi-target">Target: ≥ 5x</div>
      <div class="progress-bar-wrap"><div class="progress-bar" style="width:100%"></div></div>
    </div>
  </div>

  <!-- Charts Row 1: P&L + Revenue Structure -->
  <div class="chart-grid cols-12">
    <div class="chart-card">
      <div class="chart-title">P&L Overview</div>
      <div class="chart-subtitle">Revenue, Biaya & Profit 6 bulan (Rp Juta)</div>
      <div class="chart-wrap tall"><canvas id="finPLChart"></canvas></div>
    </div>
    <div class="chart-card">
      <div class="chart-title">Struktur Pendapatan</div>
      <div class="chart-subtitle">Proporsi Revenue Stream</div>
      <div class="chart-wrap tall"><canvas id="finRevenueChart"></canvas></div>
    </div>
  </div>

  <!-- Charts Row 2: Cash Flow + Opex Breakdown -->
  <div class="chart-grid cols-2">
    <div class="chart-card">
      <div class="chart-title">Cash Flow Bulanan</div>
      <div class="chart-subtitle">Arus kas masuk & keluar</div>
      <div class="chart-wrap"><canvas id="finCashChart"></canvas></div>
    </div>
    <div class="chart-card">
      <div class="chart-title">Rincian Biaya Operasional</div>
      <div class="chart-subtitle">Breakdown pengeluaran Maret 2026</div>
      <table class="data-table">
        <thead>
          <tr><th>Kategori</th><th>Anggaran</th><th>Realisasi</th><th>Status</th></tr>
        </thead>
        <tbody>
          <tr><td>Infrastruktur IT</td> <td>Rp35M</td><td>Rp33.2M</td><td><span class="badge badge-success">On</span></td></tr>
          <tr><td>Gaji & SDM</td>       <td>Rp65M</td><td>Rp67.5M</td><td><span class="badge badge-warn">Slight Over</span></td></tr>
          <tr><td>Marketing & Ads</td>  <td>Rp43M</td><td>Rp48.3M</td><td><span class="badge badge-danger">Over</span></td></tr>
          <tr><td>Legal & Perizinan</td><td>Rp8M</td> <td>Rp5.1M</td> <td><span class="badge badge-success">Under</span></td></tr>
          <tr><td>Ops & Lainnya</td>    <td>Rp12M</td><td>Rp11.8M</td><td><span class="badge badge-success">On</span></td></tr>
        </tbody>
      </table>
    </div>
  </div>

</div><!-- /#panel-finance -->
