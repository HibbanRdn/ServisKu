<?php
/**
 * pages/it.php
 * Konten panel Dashboard IT & Development
 * KPI Command Center — ServisKu Platform
 */
?>
<div class="dashboard-panel" id="panel-it">

  <!-- Section Header -->
  <div class="section-header">
    <div>
      <div class="section-title">Dashboard IT & Development</div>
      <div class="section-subtitle">Performa sistem, uptime, pipeline deployment & tech debt</div>
      <div class="section-accent-bar" style="background:var(--it)"></div>
    </div>
  </div>

  <!-- KPI Cards -->
  <div class="kpi-grid">
    <div class="kpi-card" style="--card-accent:var(--it)">
      <div class="kpi-label">System Uptime</div>
      <div class="kpi-value">99.92%</div>
      <div class="kpi-change up">↑ 0.04%</div>
      <div class="kpi-target">Target: 99.9% SLA</div>
      <div class="progress-bar-wrap"><div class="progress-bar" style="width:100%"></div></div>
    </div>
    <div class="kpi-card" style="--card-accent:var(--success)">
      <div class="kpi-label">API Response Time</div>
      <div class="kpi-value">142ms</div>
      <div class="kpi-change up">↓ 18ms lebih cepat</div>
      <div class="kpi-target">Target: &lt; 200ms</div>
      <div class="progress-bar-wrap"><div class="progress-bar" style="width:100%"></div></div>
    </div>
    <div class="kpi-card" style="--card-accent:var(--sales)">
      <div class="kpi-label">Deploy Frequency</div>
      <div class="kpi-value">2.4/hr</div>
      <div class="kpi-change up">↑ DORA Elite</div>
      <div class="kpi-target">Target: ≥ 1/hari</div>
      <div class="progress-bar-wrap"><div class="progress-bar" style="width:100%"></div></div>
    </div>
    <div class="kpi-card" style="--card-accent:var(--warn)">
      <div class="kpi-label">Bug Rate (Open)</div>
      <div class="kpi-value">23</div>
      <div class="kpi-change down">↑ 5 tiket baru</div>
      <div class="kpi-target">Target: &lt; 15 open</div>
      <div class="progress-bar-wrap"><div class="progress-bar" style="width:65%; background:var(--warn)"></div></div>
    </div>
    <div class="kpi-card" style="--card-accent:var(--cs)">
      <div class="kpi-label">MTTR</div>
      <div class="kpi-value">34 mnt</div>
      <div class="kpi-change up">↓ 8 mnt</div>
      <div class="kpi-target">Target: &lt; 45 mnt</div>
      <div class="progress-bar-wrap"><div class="progress-bar" style="width:100%"></div></div>
    </div>
    <div class="kpi-card" style="--card-accent:var(--marketing)">
      <div class="kpi-label">App Crash Rate</div>
      <div class="kpi-value">0.42%</div>
      <div class="kpi-change up">↓ 0.18%</div>
      <div class="kpi-target">Target: &lt; 0.5%</div>
      <div class="progress-bar-wrap"><div class="progress-bar" style="width:100%"></div></div>
    </div>
  </div>

  <!-- Charts Row 1: Response Time + Incident Severity -->
  <div class="chart-grid cols-12">
    <div class="chart-card">
      <div class="chart-title">Response Time & Error Rate</div>
      <div class="chart-subtitle">30 hari terakhir</div>
      <div class="chart-wrap tall"><canvas id="itResponseChart"></canvas></div>
    </div>
    <div class="chart-card">
      <div class="chart-title">Incident Severity</div>
      <div class="chart-subtitle">Distribusi insiden bulan ini</div>
      <div class="chart-wrap tall"><canvas id="itIncidentChart"></canvas></div>
    </div>
  </div>

  <!-- Charts Row 2: Sprint Velocity + Service Health -->
  <div class="chart-grid cols-2">
    <div class="chart-card">
      <div class="chart-title">Sprint Velocity</div>
      <div class="chart-subtitle">Story points completed per sprint</div>
      <div class="chart-wrap"><canvas id="itSprintChart"></canvas></div>
    </div>
    <div class="chart-card">
      <div class="chart-title">Status Layanan Saat Ini</div>
      <div class="chart-subtitle">Real-time service health</div>
      <table class="data-table">
        <thead>
          <tr><th>Layanan</th><th>Status</th><th>Uptime</th><th>Latensi</th></tr>
        </thead>
        <tbody>
          <tr><td>API Gateway</td>          <td><span class="badge badge-success">Operational</span></td><td>99.98%</td><td>88ms</td></tr>
          <tr><td>Database (PostgreSQL)</td><td><span class="badge badge-success">Operational</span></td><td>99.99%</td><td>12ms</td></tr>
          <tr><td>Auth Service</td>         <td><span class="badge badge-success">Operational</span></td><td>99.95%</td><td>45ms</td></tr>
          <tr><td>Payment Gateway</td>      <td><span class="badge badge-success">Operational</span></td><td>99.90%</td><td>210ms</td></tr>
          <tr><td>Push Notification</td>    <td><span class="badge badge-warn">Degraded</span></td>     <td>98.2%</td> <td>890ms</td></tr>
          <tr><td>Maps API</td>             <td><span class="badge badge-success">Operational</span></td><td>99.80%</td><td>120ms</td></tr>
        </tbody>
      </table>
    </div>
  </div>

</div><!-- /#panel-it -->
