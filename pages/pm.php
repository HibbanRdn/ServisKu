<?php
/**
 * pages/pm.php
 * Konten panel Dashboard Project Management
 * KPI Command Center — ServisKu Platform
 */
?>
<div class="dashboard-panel" id="panel-pm">

  <!-- Section Header -->
  <div class="section-header">
    <div>
      <div class="section-title">Dashboard Project Management</div>
      <div class="section-subtitle">Status proyek, milestone, risiko & alokasi sumber daya</div>
      <div class="section-accent-bar" style="background:var(--pm)"></div>
    </div>
  </div>

  <!-- KPI Cards -->
  <div class="kpi-grid">
    <div class="kpi-card" style="--card-accent:var(--pm)">
      <div class="kpi-label">Proyek Aktif</div>
      <div class="kpi-value">8</div>
      <div class="kpi-change up">3 on-track</div>
      <div class="kpi-target">Total: 11 proyek</div>
      <div class="progress-bar-wrap"><div class="progress-bar" style="width:73%"></div></div>
    </div>
    <div class="kpi-card" style="--card-accent:var(--success)">
      <div class="kpi-label">On-Time Delivery</div>
      <div class="kpi-value">72.7%</div>
      <div class="kpi-change down">↓ 4.3% vs target</div>
      <div class="kpi-target">Target: 80%</div>
      <div class="progress-bar-wrap"><div class="progress-bar" style="width:91%; background:var(--warn)"></div></div>
    </div>
    <div class="kpi-card" style="--card-accent:var(--sales)">
      <div class="kpi-label">Budget Utilization</div>
      <div class="kpi-value">84.2%</div>
      <div class="kpi-change neutral">→ Normal</div>
      <div class="kpi-target">Efisiensi baik</div>
      <div class="progress-bar-wrap"><div class="progress-bar" style="width:84%"></div></div>
    </div>
    <div class="kpi-card" style="--card-accent:var(--warn)">
      <div class="kpi-label">Scope Creep Rate</div>
      <div class="kpi-value">18.4%</div>
      <div class="kpi-change down">↑ naik dari 12%</div>
      <div class="kpi-target">Target: &lt; 15%</div>
      <div class="progress-bar-wrap"><div class="progress-bar" style="width:70%; background:var(--warn)"></div></div>
    </div>
    <div class="kpi-card" style="--card-accent:var(--cs)">
      <div class="kpi-label">Sprint Velocity</div>
      <div class="kpi-value">48 SP</div>
      <div class="kpi-change up">↑ 6 SP</div>
      <div class="kpi-target">Target: 45 SP</div>
      <div class="progress-bar-wrap"><div class="progress-bar" style="width:100%"></div></div>
    </div>
    <div class="kpi-card" style="--card-accent:var(--marketing)">
      <div class="kpi-label">Proyek Selesai (Q1)</div>
      <div class="kpi-value">3 / 5</div>
      <div class="kpi-change neutral">→ 60% Q1 target</div>
      <div class="kpi-target">2 proyek berjalan</div>
      <div class="progress-bar-wrap"><div class="progress-bar" style="width:60%"></div></div>
    </div>
  </div>

  <!-- Alert Banner -->
  <div class="alert-banner warn">
    ⚠️ Proyek "Fitur Antar-Jemput v2" dan "AI Rekomendasi Teknisi" berisiko terlambat. Scope creep naik ke 18.4%. Perlu sprint planning ulang.
  </div>

  <!-- Charts Row 1: Project Status Table + Doughnut -->
  <div class="chart-grid cols-12">
    <div class="chart-card">
      <div class="chart-title">Status & Progress Semua Proyek</div>
      <div class="chart-subtitle">Progres aktual vs target Q1 2026</div>
      <table class="data-table">
        <thead>
          <tr><th>Proyek</th><th>Owner</th><th>Progress</th><th>Deadline</th><th>Status</th></tr>
        </thead>
        <tbody>
          <tr>
            <td>🚀 App v2.0 Launch</td><td>IT</td>
            <td><div class="progress-bar-wrap" style="min-width:80px"><div class="progress-bar" style="width:88%; background:var(--pm)"></div></div></td>
            <td>31 Mar</td><td><span class="badge badge-info">On Track</span></td>
          </tr>
          <tr>
            <td>🔧 Fitur Antar-Jemput v2</td><td>Prod</td>
            <td><div class="progress-bar-wrap" style="min-width:80px"><div class="progress-bar" style="width:45%; background:var(--warn)"></div></div></td>
            <td>28 Mar</td><td><span class="badge badge-warn">At Risk</span></td>
          </tr>
          <tr>
            <td>🤖 AI Rekomendasi Teknisi</td><td>IT</td>
            <td><div class="progress-bar-wrap" style="min-width:80px"><div class="progress-bar" style="width:32%; background:var(--danger)"></div></div></td>
            <td>15 Apr</td><td><span class="badge badge-danger">Behind</span></td>
          </tr>
          <tr>
            <td>💳 Integrasi Xendit v3</td><td>IT</td>
            <td><div class="progress-bar-wrap" style="min-width:80px"><div class="progress-bar" style="width:100%; background:var(--success)"></div></div></td>
            <td>10 Mar</td><td><span class="badge badge-success">Done</span></td>
          </tr>
          <tr>
            <td>📊 Admin Dashboard</td><td>Prod</td>
            <td><div class="progress-bar-wrap" style="min-width:80px"><div class="progress-bar" style="width:76%; background:var(--pm)"></div></div></td>
            <td>5 Apr</td><td><span class="badge badge-info">On Track</span></td>
          </tr>
          <tr>
            <td>🎯 Mitra Premium Feature</td><td>Mktg</td>
            <td><div class="progress-bar-wrap" style="min-width:80px"><div class="progress-bar" style="width:100%; background:var(--success)"></div></div></td>
            <td>1 Mar</td><td><span class="badge badge-success">Done</span></td>
          </tr>
          <tr>
            <td>📱 iOS App Optimization</td><td>IT</td>
            <td><div class="progress-bar-wrap" style="min-width:80px"><div class="progress-bar" style="width:60%; background:var(--pm)"></div></div></td>
            <td>30 Apr</td><td><span class="badge badge-info">On Track</span></td>
          </tr>
          <tr>
            <td>🔒 Security Audit</td><td>IT</td>
            <td><div class="progress-bar-wrap" style="min-width:80px"><div class="progress-bar" style="width:100%; background:var(--success)"></div></div></td>
            <td>28 Feb</td><td><span class="badge badge-success">Done</span></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="chart-card">
      <div class="chart-title">Distribusi Status Proyek</div>
      <div class="chart-subtitle">Ringkasan Q1 2026</div>
      <div class="chart-wrap"><canvas id="pmStatusChart"></canvas></div>
    </div>
  </div>

  <!-- Charts Row 2: Burndown + Resource Allocation -->
  <div class="chart-grid cols-2">
    <div class="chart-card">
      <div class="chart-title">Burn Down Chart — Sprint 14</div>
      <div class="chart-subtitle">Story points remaining vs ideal</div>
      <div class="chart-wrap"><canvas id="pmBurndownChart"></canvas></div>
    </div>
    <div class="chart-card">
      <div class="chart-title">Resource Allocation</div>
      <div class="chart-subtitle">Distribusi jam tim per proyek</div>
      <div class="chart-wrap"><canvas id="pmResourceChart"></canvas></div>
    </div>
  </div>

</div><!-- /#panel-pm -->
