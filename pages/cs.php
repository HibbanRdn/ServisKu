<?php
/**
 * pages/cs.php
 * Konten panel Dashboard Customer Service
 * KPI Command Center — ServisKu Platform
 */
?>
<div class="dashboard-panel" id="panel-cs">

  <!-- Section Header -->
  <div class="section-header">
    <div>
      <div class="section-title">Dashboard Customer Service</div>
      <div class="section-subtitle">Kualitas layanan, kepuasan pelanggan & dispute resolution</div>
      <div class="section-accent-bar" style="background:var(--cs)"></div>
    </div>
  </div>

  <!-- KPI Cards -->
  <div class="kpi-grid">
    <div class="kpi-card" style="--card-accent:var(--cs)">
      <div class="kpi-label">CSAT Score</div>
      <div class="kpi-value">4.71</div>
      <div class="kpi-change up">↑ 0.12 vs bulan lalu</div>
      <div class="kpi-target">Target: ≥ 4.5 / 5.0</div>
      <div class="progress-bar-wrap"><div class="progress-bar" style="width:94%"></div></div>
    </div>
    <div class="kpi-card" style="--card-accent:var(--sales)">
      <div class="kpi-label">NPS Score</div>
      <div class="kpi-value">+62</div>
      <div class="kpi-change up">↑ 5 poin</div>
      <div class="kpi-target">Target: ≥ +60</div>
      <div class="progress-bar-wrap"><div class="progress-bar" style="width:100%"></div></div>
    </div>
    <div class="kpi-card" style="--card-accent:var(--success)">
      <div class="kpi-label">First Response Time</div>
      <div class="kpi-value sm">&lt; 4 mnt</div>
      <div class="kpi-change up">↓ 1.2 mnt lebih cepat</div>
      <div class="kpi-target">Target: &lt; 5 menit</div>
      <div class="progress-bar-wrap"><div class="progress-bar" style="width:100%"></div></div>
    </div>
    <div class="kpi-card" style="--card-accent:var(--hr)">
      <div class="kpi-label">Ticket Resolution</div>
      <div class="kpi-value">91.3%</div>
      <div class="kpi-change up">↑ 2.1%</div>
      <div class="kpi-target">Target: 90%</div>
      <div class="progress-bar-wrap"><div class="progress-bar" style="width:100%"></div></div>
    </div>
    <div class="kpi-card" style="--card-accent:var(--marketing)">
      <div class="kpi-label">Dispute Rate</div>
      <div class="kpi-value">2.8%</div>
      <div class="kpi-change down">↑ 0.3% (naik)</div>
      <div class="kpi-target">Target: &lt; 2.5%</div>
      <div class="progress-bar-wrap"><div class="progress-bar" style="width:80%; background:var(--warn)"></div></div>
    </div>
    <div class="kpi-card" style="--card-accent:var(--it)">
      <div class="kpi-label">Tiket Masuk / Hari</div>
      <div class="kpi-value">184</div>
      <div class="kpi-change up">↑ 22 tiket</div>
      <div class="kpi-target">Kapasitas: 250/hari</div>
      <div class="progress-bar-wrap"><div class="progress-bar" style="width:73%"></div></div>
    </div>
  </div>

  <!-- Alert Banner -->
  <div class="alert-banner info">
    ℹ️ NPS mencapai +62, melampaui target. Dispute rate perlu perhatian — 68% disebabkan ketidaksesuaian estimasi harga teknisi.
  </div>

  <!-- Charts Row 1: Ticket Volume + Complaint Category -->
  <div class="chart-grid cols-12">
    <div class="chart-card">
      <div class="chart-title">Volume Tiket & Resolution Rate</div>
      <div class="chart-subtitle">6 bulan terakhir</div>
      <div class="chart-wrap tall"><canvas id="csTicketChart"></canvas></div>
    </div>
    <div class="chart-card">
      <div class="chart-title">Kategori Keluhan</div>
      <div class="chart-subtitle">Distribusi tipe masalah</div>
      <div class="chart-wrap tall"><canvas id="csComplaintChart"></canvas></div>
    </div>
  </div>

  <!-- Charts Row 2: CSAT Trend + SLA Table -->
  <div class="chart-grid cols-2">
    <div class="chart-card">
      <div class="chart-title">Tren CSAT Bulanan</div>
      <div class="chart-subtitle">Skor kepuasan pelanggan 6 bulan</div>
      <div class="chart-wrap"><canvas id="csCSATChart"></canvas></div>
    </div>
    <div class="chart-card">
      <div class="chart-title">SLA Performance</div>
      <div class="chart-subtitle">Kepatuhan waktu respons</div>
      <table class="data-table">
        <thead>
          <tr><th>Prioritas</th><th>Target SLA</th><th>Rata-Rata</th><th>Kepatuhan</th></tr>
        </thead>
        <tbody>
          <tr><td>🔴 Critical</td><td>1 jam</td>  <td>47 mnt</td>  <td><span class="badge badge-success">97.2%</span></td></tr>
          <tr><td>🟠 High</td>    <td>4 jam</td>  <td>2j 18m</td>  <td><span class="badge badge-success">94.8%</span></td></tr>
          <tr><td>🟡 Medium</td>  <td>24 jam</td> <td>9j 40m</td>  <td><span class="badge badge-success">98.1%</span></td></tr>
          <tr><td>🟢 Low</td>     <td>72 jam</td> <td>28j 15m</td> <td><span class="badge badge-success">99.3%</span></td></tr>
        </tbody>
      </table>
    </div>
  </div>

</div><!-- /#panel-cs -->
