/**
 * charts-pm.js
 * Chart.js logic untuk Dashboard Project Management
 * KPI Command Center — ServisKu Platform
 */

'use strict';

(function initPMCharts() {
  // --- Distribusi Status Proyek (Doughnut) ---
  const c1 = document.getElementById('pmStatusChart');
  if (c1) {
    new Chart(c1.getContext('2d'), {
      type: 'doughnut',
      data: {
        labels: ['Done', 'On Track', 'At Risk', 'Behind'],
        datasets: [{
          data: [3, 3, 1, 1],
          backgroundColor: ['#34d399', '#60a5fa', '#fbbf24', '#f87171'],
          borderWidth: 0,
          hoverOffset: 8,
        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        cutout: '65%',
        plugins: {
          legend: { position: 'bottom', labels: { padding: 14, boxWidth: 10, font: { size: 11 } } },
        },
      },
    });
  }

  // --- Burn Down Chart Sprint 14 (Line) ---
  const c2 = document.getElementById('pmBurndownChart');
  if (c2) {
    const ctx = c2.getContext('2d');
    const idealBurn  = [96, 88, 80, 72, 64, 56, 48, 40, 32, 24, 16, 8, 0, 0];
    const actualBurn = [96, 90, 85, 80, 74, 70, 62, 58, 54, 46, 40, null, null, null];

    new Chart(ctx, {
      type: 'line',
      data: {
        labels: Array.from({ length: 14 }, (_, i) => `Day ${i + 1}`),
        datasets: [
          {
            label: 'Ideal',
            data: idealBurn,
            borderColor: 'rgba(255,255,255,0.2)',
            borderDash: [4, 4],
            fill: false,
            tension: 0,
            pointRadius: 0,
          },
          {
            label: 'Actual',
            data: actualBurn,
            borderColor: '#60a5fa',
            fill: true,
            backgroundColor: mkGrad(ctx, 'rgba(96,165,250,0.2)', 'rgba(96,165,250,0)'),
            tension: 0.3,
            borderWidth: 2.5,
            pointRadius: 3,
            spanGaps: false,
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

  // --- Resource Allocation (Horizontal Bar) ---
  const c3 = document.getElementById('pmResourceChart');
  if (c3) {
    new Chart(c3.getContext('2d'), {
      type: 'bar',
      data: {
        labels: ['App v2.0', 'Antar-Jemput v2', 'AI Rekomendasi', 'Admin Dashboard', 'iOS Opt'],
        datasets: [{
          label: 'Jam Tim',
          data: [240, 160, 130, 90, 80],
          backgroundColor: [
            'rgba(96,165,250,0.7)',
            'rgba(251,191,36,0.7)',
            'rgba(248,113,113,0.7)',
            'rgba(96,165,250,0.5)',
            'rgba(52,211,153,0.7)',
          ],
          borderRadius: 6,
        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        indexAxis: 'y',
        plugins: { legend: { display: false } },
        scales: {
          x: {
            grid: { color: 'rgba(255,255,255,0.04)' },
            ticks: { callback: v => v + 'h' },
          },
        },
      },
    });
  }
})();
