<?php
/**
 * pages/sales.php
 * Konten panel Dashboard Penjualan
 * KPI Command Center — ServisKu Platform
 */
?>
<div class="dashboard-panel active" id="panel-sales">

  <!-- Section Header -->
  <div class="section-header">
    <div>
      <div class="section-title">Dashboard Penjualan</div>
      <div class="section-subtitle">Metrik performa transaksi & revenue platform ServisKu</div>
      <div class="section-accent-bar" style="background:var(--sales)"></div>
    </div>
  </div>

  <!-- KPI Cards -->
  <div class="kpi-grid">
    <div class="kpi-card" style="--card-accent:var(--sales)">
      <div class="kpi-label">Total Revenue</div>
      <div class="kpi-value">Rp847M</div>
      <div class="kpi-change up">↑ 23.4% vs bulan lalu</div>
      <div class="kpi-target">Target: Rp900M</div>
      <div class="progress-bar-wrap"><div class="progress-bar" style="width:94%"></div></div>
    </div>
    <div class="kpi-card" style="--card-accent:var(--success)">
      <div class="kpi-label">Total Transaksi</div>
      <div class="kpi-value">4,218</div>
      <div class="kpi-change up">↑ 18.2% vs bulan lalu</div>
      <div class="kpi-target">Target: 4.500</div>
      <div class="progress-bar-wrap"><div class="progress-bar" style="width:93%"></div></div>
    </div>
    <div class="kpi-card" style="--card-accent:var(--marketing)">
      <div class="kpi-label">Avg Order Value</div>
      <div class="kpi-value sm">Rp200.8K</div>
      <div class="kpi-change up">↑ 4.1%</div>
      <div class="kpi-target">Target: Rp195K</div>
      <div class="progress-bar-wrap"><div class="progress-bar" style="width:100%"></div></div>
    </div>
    <div class="kpi-card" style="--card-accent:var(--cs)">
      <div class="kpi-label">Conversion Rate</div>
      <div class="kpi-value">38.6%</div>
      <div class="kpi-change up">↑ 2.3%</div>
      <div class="kpi-target">Target: 40%</div>
      <div class="progress-bar-wrap"><div class="progress-bar" style="width:96%"></div></div>
    </div>
    <div class="kpi-card" style="--card-accent:var(--hr)">
      <div class="kpi-label">Repeat Order Rate</div>
      <div class="kpi-value">62.4%</div>
      <div class="kpi-change up">↑ 5.8%</div>
      <div class="kpi-target">Target: 65%</div>
      <div class="progress-bar-wrap"><div class="progress-bar" style="width:96%"></div></div>
    </div>
    <div class="kpi-card" style="--card-accent:var(--it)">
      <div class="kpi-label">Gross Margin</div>
      <div class="kpi-value">28.3%</div>
      <div class="kpi-change down">↓ 1.2%</div>
      <div class="kpi-target">Target: 30%</div>
      <div class="progress-bar-wrap"><div class="progress-bar" style="width:94%"></div></div>
    </div>
  </div>

  <!-- Charts Row 1: Revenue + Service Distribution -->
  <div class="chart-grid cols-12">
    <div class="chart-card">
      <div class="chart-title">Revenue Bulanan</div>
      <div class="chart-subtitle">6 bulan terakhir (Rp Juta)</div>
      <div class="chart-wrap tall"><canvas id="salesRevenueChart"></canvas></div>
    </div>
    <div class="chart-card">
      <div class="chart-title">Distribusi Layanan</div>
      <div class="chart-subtitle">Berdasarkan tipe servis</div>
      <div class="chart-wrap tall"><canvas id="salesServiceChart"></canvas></div>
    </div>
  </div>

  <!-- Charts Row 2: Daily Volume + Top Teknisi Table -->
  <div class="chart-grid cols-2">
    <div class="chart-card">
      <div class="chart-title">Volume Transaksi Harian</div>
      <div class="chart-subtitle">30 hari terakhir</div>
      <div class="chart-wrap"><canvas id="salesDailyChart"></canvas></div>
    </div>
    <div class="chart-card">
      <div class="chart-title">Top 5 Teknisi by Revenue</div>
      <div class="chart-subtitle">Maret 2026</div>
      <table class="data-table">
        <thead>
          <tr><th>#</th><th>Teknisi</th><th>Revenue</th><th>Order</th><th>Status</th></tr>
        </thead>
        <tbody>
          <tr><td>1</td><td>Budi Santoso</td>  <td>Rp42.1M</td><td>210</td><td><span class="badge badge-success">Top</span></td></tr>
          <tr><td>2</td><td>Rina Wijaya</td>   <td>Rp38.7M</td><td>193</td><td><span class="badge badge-success">Top</span></td></tr>
          <tr><td>3</td><td>Agus Purnama</td>  <td>Rp31.2M</td><td>156</td><td><span class="badge badge-info">Good</span></td></tr>
          <tr><td>4</td><td>Dewi Lestari</td>  <td>Rp28.9M</td><td>144</td><td><span class="badge badge-info">Good</span></td></tr>
          <tr><td>5</td><td>Hendra Gunawan</td><td>Rp22.5M</td><td>112</td><td><span class="badge badge-warn">Fair</span></td></tr>
        </tbody>
      </table>
    </div>
  </div>

</div><!-- /#panel-sales -->
