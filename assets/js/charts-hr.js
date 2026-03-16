/**
 * charts-hr.js
 * Chart.js logic untuk Dashboard Human Resources
 * KPI Command Center — ServisKu Platform
 */

'use strict';

(function initHRCharts() {
  // --- Pertumbuhan Headcount (Bar + Line Mitra) ---
  const c1 = document.getElementById('hrHeadcountChart');
  if (c1) {
    new Chart(c1.getContext('2d'), {
      type: 'bar',
      data: {
        labels: MONTHS,
        datasets: [
          {
            label: 'Staff Internal',
            data: [32, 34, 36, 39, 42, 47],
            backgroundColor: 'rgba(251,191,36,0.6)',
            borderRadius: 5,
          },
          {
            label: 'Mitra Teknisi',
            data: [220, 248, 268, 284, 284, 312],
            type: 'line',
            borderColor: '#fbbf24',
            fill: false,
            tension: 0.4,
            borderWidth: 2.5,
            pointRadius: 3,
            yAxisID: 'y2',
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: { legend: { labels: { boxWidth: 10, font: { size: 11 } } } },
        scales: {
          y:  { grid: { color: 'rgba(255,255,255,0.04)' } },
          y2: { position: 'right', grid: { drawOnChartArea: false } },
        },
      },
    });
  }

  // --- Distribusi Departemen (Pie) ---
  const c2 = document.getElementById('hrDeptChart');
  if (c2) {
    new Chart(c2.getContext('2d'), {
      type: 'pie',
      data: {
        labels: ['IT & Dev', 'Customer Service', 'Marketing', 'Operations', 'Finance', 'HR'],
        datasets: [{
          data: [14, 11, 7, 8, 4, 3],
          backgroundColor: ['#f472b6', '#a78bfa', '#ff6b35', '#00d4ff', '#34d399', '#fbbf24'],
          borderWidth: 0,
          hoverOffset: 8,
        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: { position: 'bottom', labels: { padding: 12, boxWidth: 10, font: { size: 11 } } },
        },
      },
    });
  }

  // --- Distribusi Performa Karyawan (Bar) ---
  const c3 = document.getElementById('hrPerfChart');
  if (c3) {
    new Chart(c3.getContext('2d'), {
      type: 'bar',
      data: {
        labels: ['Outstanding', 'Exceed', 'Meet', 'Below', 'Poor'],
        datasets: [{
          label: 'Karyawan',
          data: [8, 14, 18, 5, 2],
          backgroundColor: ['#34d399', '#00d4ff', '#a78bfa', '#fbbf24', '#f87171'],
          borderRadius: 6,
        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: { legend: { display: false } },
        scales: { y: { grid: { color: 'rgba(255,255,255,0.04)' } } },
      },
    });
  }
})();
