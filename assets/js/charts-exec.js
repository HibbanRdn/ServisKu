/**
 * charts-exec.js
 * Chart.js logic untuk Executive Dashboard
 * KPI Command Center — ServisKu Platform
 */

'use strict';

(function initExecCharts() {
  // --- North Star Metrics (Line) ---
  const c1 = document.getElementById('execNorthStarChart');
  if (c1) {
    new Chart(c1.getContext('2d'), {
      type: 'line',
      data: {
        labels: MONTHS,
        datasets: [
          {
            label: 'Revenue Index',
            data: [100, 111.5, 117.3, 130.7, 142.3, 162.9],
            borderColor: '#34d399',
            fill: false,
            tension: 0.4,
            borderWidth: 2.5,
            pointRadius: 4,
          },
          {
            label: 'MAU Index',
            data: [100, 114, 128, 146, 162, 188],
            borderColor: '#00d4ff',
            fill: false,
            tension: 0.4,
            borderWidth: 2.5,
            pointRadius: 4,
          },
          {
            label: 'Transaksi Index',
            data: [100, 108, 118, 130, 146, 162],
            borderColor: '#a78bfa',
            fill: false,
            tension: 0.4,
            borderWidth: 2.5,
            pointRadius: 4,
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: { legend: { labels: { boxWidth: 10, font: { size: 11 } } } },
        scales: { y: { grid: { color: 'rgba(255,255,255,0.04)' } } },
      },
    });
  }

  // --- Unit Economics (Bar) ---
  const c2 = document.getElementById('execUnitChart');
  if (c2) {
    new Chart(c2.getContext('2d'), {
      type: 'bar',
      data: {
        labels: ['LTV', 'AOV (x10)', 'CAC'],
        datasets: [{
          data: [285, 200.8, 45.2],
          backgroundColor: ['#34d399', '#00d4ff', '#f87171'],
          borderRadius: 6,
        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: { legend: { display: false } },
        scales: {
          y: {
            grid: { color: 'rgba(255,255,255,0.04)' },
            ticks: { callback: v => 'Rp' + v + 'K' },
          },
        },
      },
    });
  }

  // --- Growth Engine: Organic vs Paid (Line) ---
  const c3 = document.getElementById('execGrowthChart');
  if (c3) {
    const ctx = c3.getContext('2d');
    new Chart(ctx, {
      type: 'line',
      data: {
        labels: MONTHS,
        datasets: [
          {
            label: 'Organic',
            data: [40, 44, 50, 55, 64, 72],
            borderColor: '#34d399',
            fill: true,
            backgroundColor: mkGrad(ctx, 'rgba(52,211,153,0.2)', 'rgba(52,211,153,0)'),
            tension: 0.4,
            borderWidth: 2,
            pointRadius: 3,
          },
          {
            label: 'Paid',
            data: [60, 56, 50, 45, 36, 28],
            borderColor: '#ff6b35',
            fill: true,
            backgroundColor: mkGrad(ctx, 'rgba(255,107,53,0.15)', 'rgba(255,107,53,0)'),
            tension: 0.4,
            borderWidth: 2,
            pointRadius: 3,
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
            ticks: { callback: v => v + '%' },
          },
        },
      },
    });
  }
})();
