<?php
/**
 * pages/hr.php
 * Konten panel Dashboard Human Resources
 * KPI Command Center — ServisKu Platform
 */
?>
<div class="dashboard-panel" id="panel-hr">

  <!-- Section Header -->
  <div class="section-header">
    <div>
      <div class="section-title">Dashboard Human Resources</div>
      <div class="section-subtitle">Manajemen SDM, rekrutmen, retensi & performa tim</div>
      <div class="section-accent-bar" style="background:var(--hr)"></div>
    </div>
  </div>

  <!-- KPI Cards -->
  <div class="kpi-grid">
    <div class="kpi-card" style="--card-accent:var(--hr)">
      <div class="kpi-label">Total Karyawan</div>
      <div class="kpi-value">47</div>
      <div class="kpi-change up">↑ 5 dari bulan lalu</div>
      <div class="kpi-target">Target headcount: 55</div>
      <div class="progress-bar-wrap"><div class="progress-bar" style="width:85%"></div></div>
    </div>
    <div class="kpi-card" style="--card-accent:var(--success)">
      <div class="kpi-label">Employee Satisfaction</div>
      <div class="kpi-value">4.2/5</div>
      <div class="kpi-change up">↑ 0.3</div>
      <div class="kpi-target">Target: ≥ 4.0</div>
      <div class="progress-bar-wrap"><div class="progress-bar" style="width:84%"></div></div>
    </div>
    <div class="kpi-card" style="--card-accent:var(--danger)">
      <div class="kpi-label">Turnover Rate</div>
      <div class="kpi-value">8.5%</div>
      <div class="kpi-change down">↓ 1.2% lebih baik</div>
      <div class="kpi-target">Target: &lt; 10%</div>
      <div class="progress-bar-wrap"><div class="progress-bar" style="width:100%"></div></div>
    </div>
    <div class="kpi-card" style="--card-accent:var(--sales)">
      <div class="kpi-label">Time-to-Hire</div>
      <div class="kpi-value">18 hr</div>
      <div class="kpi-change down">↓ 3 hari lebih cepat</div>
      <div class="kpi-target">Target: &lt; 21 hari</div>
      <div class="progress-bar-wrap"><div class="progress-bar" style="width:100%"></div></div>
    </div>
    <div class="kpi-card" style="--card-accent:var(--cs)">
      <div class="kpi-label">Training Completion</div>
      <div class="kpi-value">87.2%</div>
      <div class="kpi-change up">↑ 4.1%</div>
      <div class="kpi-target">Target: 90%</div>
      <div class="progress-bar-wrap"><div class="progress-bar" style="width:97%"></div></div>
    </div>
    <div class="kpi-card" style="--card-accent:var(--marketing)">
      <div class="kpi-label">Mitra Teknisi Aktif</div>
      <div class="kpi-value">312</div>
      <div class="kpi-change up">↑ 28 mitra baru</div>
      <div class="kpi-target">Target: 350 Q1</div>
      <div class="progress-bar-wrap"><div class="progress-bar" style="width:89%"></div></div>
    </div>
  </div>

  <!-- Charts Row 1: Headcount + Dept Distribution -->
  <div class="chart-grid cols-2">
    <div class="chart-card">
      <div class="chart-title">Pertumbuhan Headcount</div>
      <div class="chart-subtitle">Internal staff & mitra teknisi 6 bulan</div>
      <div class="chart-wrap tall"><canvas id="hrHeadcountChart"></canvas></div>
    </div>
    <div class="chart-card">
      <div class="chart-title">Distribusi Departemen</div>
      <div class="chart-subtitle">Komposisi tim saat ini</div>
      <div class="chart-wrap tall"><canvas id="hrDeptChart"></canvas></div>
    </div>
  </div>

  <!-- Charts Row 2: Recruitment Pipeline + Performance Distribution -->
  <div class="chart-grid cols-21">
    <div class="chart-card">
      <div class="chart-title">Status Rekrutmen Aktif</div>
      <div class="chart-subtitle">Pipeline posisi yang sedang dibuka</div>
      <table class="data-table">
        <thead>
          <tr><th>Posisi</th><th>Dept</th><th>Pelamar</th><th>Tahap</th><th>Status</th></tr>
        </thead>
        <tbody>
          <tr><td>Backend Developer</td>  <td>IT</td>    <td>32</td><td>Interview</td>  <td><span class="badge badge-info">Active</span></td></tr>
          <tr><td>CS Agent (2 pos)</td>   <td>CS</td>    <td>58</td><td>Assessment</td> <td><span class="badge badge-info">Active</span></td></tr>
          <tr><td>QC Mitra Teknisi</td>   <td>Ops</td>   <td>21</td><td>Offering</td>   <td><span class="badge badge-success">Final</span></td></tr>
          <tr><td>Digital Marketing</td>  <td>Mktg</td>  <td>45</td><td>Screening</td>  <td><span class="badge badge-warn">Review</span></td></tr>
          <tr><td>Finance Analyst</td>    <td>Finance</td><td>17</td><td>Open</td>       <td><span class="badge badge-purple">New</span></td></tr>
        </tbody>
      </table>
    </div>
    <div class="chart-card">
      <div class="chart-title">Distribusi Performa Karyawan</div>
      <div class="chart-subtitle">Review Q4 2025</div>
      <div class="chart-wrap"><canvas id="hrPerfChart"></canvas></div>
    </div>
  </div>

</div><!-- /#panel-hr -->
