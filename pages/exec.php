<?php
/**
 * pages/exec.php
 * Konten panel Executive Dashboard
 * KPI Command Center — ServisKu Platform
 */
?>
<div class="dashboard-panel" id="panel-exec">

  <!-- Section Header -->
  <div class="section-header">
    <div>
      <div class="section-title">Executive Dashboard</div>
      <div class="section-subtitle">Ringkasan eksekutif performa bisnis ServisKu — Q1 2026</div>
      <div class="section-accent-bar" style="background:var(--exec)"></div>
    </div>
  </div>

  <!-- Executive Big Number Cards -->
  <div class="exec-grid">
    <div class="exec-card">
      <div class="exec-card-glow" style="background:var(--finance)"></div>
      <div class="exec-label">Total Revenue</div>
      <div class="exec-num" style="color:var(--finance)">Rp847M</div>
      <div class="exec-trend" style="color:var(--success)">↑ 23.4% MoM</div>
    </div>
    <div class="exec-card">
      <div class="exec-card-glow" style="background:var(--sales)"></div>
      <div class="exec-label">Active Users (MAU)</div>
      <div class="exec-num" style="color:var(--sales)">28,412</div>
      <div class="exec-trend" style="color:var(--success)">↑ 19.8% MoM</div>
    </div>
    <div class="exec-card">
      <div class="exec-card-glow" style="background:var(--cs)"></div>
      <div class="exec-label">Mitra Teknisi</div>
      <div class="exec-num" style="color:var(--cs)">312</div>
      <div class="exec-trend" style="color:var(--success)">↑ 28 bulan ini</div>
    </div>
    <div class="exec-card">
      <div class="exec-card-glow" style="background:var(--hr)"></div>
      <div class="exec-label">NPS Score</div>
      <div class="exec-num" style="color:var(--hr)">+62</div>
      <div class="exec-trend" style="color:var(--success)">↑ 5 poin MoM</div>
    </div>
  </div>

  <!-- Charts Row 1: North Star Metrics + OKR Progress -->
  <div class="chart-grid cols-12">
    <div class="chart-card">
      <div class="chart-title">North Star Metrics — Tren 6 Bulan</div>
      <div class="chart-subtitle">Revenue, MAU, Transaksi (indeks 100 = baseline)</div>
      <div class="chart-wrap tall"><canvas id="execNorthStarChart"></canvas></div>
    </div>
    <div class="chart-card">
      <div class="chart-title">OKR Progress Q1 2026</div>
      <div class="chart-subtitle">Status pencapaian tujuan</div>
      <div style="display:flex; flex-direction:column; gap:14px; margin-top:8px">
        <div>
          <div style="display:flex; justify-content:space-between; margin-bottom:6px">
            <span style="font-size:13px">📈 Revenue Rp900M/bulan</span>
            <span style="font-family:'Space Mono',monospace; font-size:12px; color:var(--finance)">94%</span>
          </div>
          <div class="progress-bar-wrap"><div class="progress-bar" style="width:94%; background:var(--finance)"></div></div>
        </div>
        <div>
          <div style="display:flex; justify-content:space-between; margin-bottom:6px">
            <span style="font-size:13px">👥 MAU 35K pengguna</span>
            <span style="font-family:'Space Mono',monospace; font-size:12px; color:var(--sales)">81%</span>
          </div>
          <div class="progress-bar-wrap"><div class="progress-bar" style="width:81%; background:var(--sales)"></div></div>
        </div>
        <div>
          <div style="display:flex; justify-content:space-between; margin-bottom:6px">
            <span style="font-size:13px">🔧 350 Mitra Teknisi</span>
            <span style="font-family:'Space Mono',monospace; font-size:12px; color:var(--cs)">89%</span>
          </div>
          <div class="progress-bar-wrap"><div class="progress-bar" style="width:89%; background:var(--cs)"></div></div>
        </div>
        <div>
          <div style="display:flex; justify-content:space-between; margin-bottom:6px">
            <span style="font-size:13px">⭐ CSAT ≥ 4.5</span>
            <span style="font-family:'Space Mono',monospace; font-size:12px; color:var(--success)">100%</span>
          </div>
          <div class="progress-bar-wrap"><div class="progress-bar" style="width:100%; background:var(--success)"></div></div>
        </div>
        <div>
          <div style="display:flex; justify-content:space-between; margin-bottom:6px">
            <span style="font-size:13px">💰 Net Margin 15%</span>
            <span style="font-family:'Space Mono',monospace; font-size:12px; color:var(--warn)">78%</span>
          </div>
          <div class="progress-bar-wrap"><div class="progress-bar" style="width:78%; background:var(--warn)"></div></div>
        </div>
      </div>
    </div>
  </div>

  <!-- Charts Row 2: Unit Economics + Growth Engine + Key Alerts -->
  <div class="chart-grid cols-3">
    <div class="chart-card">
      <div class="chart-title">Unit Economics</div>
      <div class="chart-subtitle">LTV vs CAC vs AOV</div>
      <div class="chart-wrap"><canvas id="execUnitChart"></canvas></div>
    </div>
    <div class="chart-card">
      <div class="chart-title">Growth Engine</div>
      <div class="chart-subtitle">Organic vs Paid acquisition</div>
      <div class="chart-wrap"><canvas id="execGrowthChart"></canvas></div>
    </div>
    <div class="chart-card">
      <div class="chart-title">Key Alerts</div>
      <div class="chart-subtitle">Hal yang perlu diperhatikan</div>
      <ul class="timeline">
        <li class="timeline-item">
          <div class="timeline-dot" style="background:var(--danger)"></div>
          <div>
            <div class="timeline-text">Marketing burn rate 12% di atas budget</div>
            <div class="timeline-time">Perlu review segera</div>
          </div>
        </li>
        <li class="timeline-item">
          <div class="timeline-dot" style="background:var(--warn)"></div>
          <div>
            <div class="timeline-text">Dispute rate 2.8% — di atas target 2.5%</div>
            <div class="timeline-time">Root cause: estimasi harga</div>
          </div>
        </li>
        <li class="timeline-item">
          <div class="timeline-dot" style="background:var(--warn)"></div>
          <div>
            <div class="timeline-text">Push notification degraded</div>
            <div class="timeline-time">IT sedang investigasi</div>
          </div>
        </li>
        <li class="timeline-item">
          <div class="timeline-dot" style="background:var(--success)"></div>
          <div>
            <div class="timeline-text">NPS +62 melampaui target +60</div>
            <div class="timeline-time">Pertahankan kualitas CS</div>
          </div>
        </li>
        <li class="timeline-item">
          <div class="timeline-dot" style="background:var(--success)"></div>
          <div>
            <div class="timeline-text">TikTok ROAS 6.4x — channel terbaik</div>
            <div class="timeline-time">Tingkatkan budget TikTok</div>
          </div>
        </li>
      </ul>
    </div>
  </div>

</div><!-- /#panel-exec -->
