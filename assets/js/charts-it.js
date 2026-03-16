/**
 * charts-it.js
 * Chart.js logic untuk Dashboard IT & Development
 * KPI Command Center — ServisKu Platform
 */

'use strict';

(function initITCharts() {
  // --- Response Time & Error Rate (Line dual-axis, 30 hari) ---
  const c1 = document.getElementById('itResponseChart');
  if (c1) {
    const ctx = c1.getContext('2d');
    const respData = Array.from({ length: 30 }, () => Math.floor(Math.random() * 60) + 110);
    const errData  = Array.from({ length: 30 }, () => +(Math.random() * 0.6).toFixed(2));

    new Chart(ctx, {
      type: 'line',
      data: {
        labels: DAYS_30,
        datasets: [
          {
            label: 'Response (ms)',
            data: respData,
            borderColor: '#f472b6',
            fill: true,
            backgroundColor: mkGrad(ctx, 'rgba(244,114,182,0.2)', 'rgba(244,114,182,0)'),
            tension: 0.4,
            borderWidth: 2,
            pointRadius: 0,
          },
          {
            label: 'Error Rate (%)',
            data: errData,
            borderColor: '#fbbf24',
            fill: false,
            tension: 0.4,
            borderWidth: 1.5,
            pointRadius: 0,
            yAxisID: 'y2',
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: { legend: { labels: { boxWidth: 10, font: { size: 11 } } } },
        scales: {
          y:  { grid: { color: 'rgba(255,255,255,0.04)' }, ticks: { callback: v => v + 'ms' } },
          y2: { position: 'right', grid: { drawOnChartArea: false }, ticks: { callback: v => v + '%' } },
        },
      },
    });
  }

  // --- Incident Severity (Doughnut) ---
  const c2 = document.getElementById('itIncidentChart');
  if (c2) {
    new Chart(c2.getContext('2d'), {
      type: 'doughnut',
      data: {
        labels: ['P1 Critical', 'P2 High', 'P3 Medium', 'P4 Low'],
        datasets: [{
          data: [2, 8, 22, 41],
          backgroundColor: ['#f87171', '#fbbf24', '#a78bfa', '#34d399'],
          borderWidth: 0,
          hoverOffset: 8,
        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        cutout: '65%',
        plugins: {
          legend: { position: 'bottom', labels: { padding: 12, boxWidth: 10, font: { size: 11 } } },
        },
      },
    });
  }

  // --- Sprint Velocity (Bar) ---
  const c3 = document.getElementById('itSprintChart');
  if (c3) {
    new Chart(c3.getContext('2d'), {
      type: 'bar',
      data: {
        labels: ['S8', 'S9', 'S10', 'S11', 'S12', 'S13', 'S14'],
        datasets: [
          {
            label: 'Committed',
            data: [42, 44, 44, 46, 45, 46, 48],
            backgroundColor: 'rgba(255,255,255,0.1)',
            borderRadius: 4,
          },
          {
            label: 'Completed',
            data: [38, 41, 40, 45, 42, 43, 48],
            backgroundColor: 'rgba(244,114,182,0.6)',
            borderRadius: 4,
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: { legend: { labels: { boxWidth: 10, font: { size: 11 } } } },
        scales: {
          y: {
            grid: { color: 'rgba(255,255,255,0.04)' },
            ticks: { callback: v => v + ' SP' },
          },
        },
      },
    });
  }
})();
