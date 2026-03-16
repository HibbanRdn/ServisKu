/**
 * charts-cs.js
 * Chart.js logic untuk Dashboard Customer Service
 * KPI Command Center — ServisKu Platform
 */

'use strict';

(function initCSCharts() {
  // --- Volume Tiket & Resolution Rate (Bar) ---
  const c1 = document.getElementById('csTicketChart');
  if (c1) {
    new Chart(c1.getContext('2d'), {
      type: 'bar',
      data: {
        labels: MONTHS,
        datasets: [
          {
            label: 'Tiket Masuk',
            data: [310, 340, 380, 420, 468, 552],
            backgroundColor: 'rgba(167,139,250,0.5)',
            borderRadius: 5,
          },
          {
            label: 'Resolved',
            data: [285, 318, 360, 398, 434, 503],
            backgroundColor: 'rgba(52,211,153,0.5)',
            borderRadius: 5,
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

  // --- Kategori Keluhan (Doughnut) ---
  const c2 = document.getElementById('csComplaintChart');
  if (c2) {
    new Chart(c2.getContext('2d'), {
      type: 'doughnut',
      data: {
        labels: ['Estimasi Harga', 'Kualitas Servis', 'Keterlambatan', 'Spare Part', 'Komunikasi', 'Lainnya'],
        datasets: [{
          data: [28, 22, 18, 14, 10, 8],
          backgroundColor: ['#f87171', '#fbbf24', '#a78bfa', '#60a5fa', '#34d399', '#6b7a99'],
          borderWidth: 0,
          hoverOffset: 8,
        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        cutout: '60%',
        plugins: {
          legend: { position: 'bottom', labels: { padding: 12, boxWidth: 10, font: { size: 11 } } },
        },
      },
    });
  }

  // --- Tren CSAT Bulanan (Line) ---
  const c3 = document.getElementById('csCSATChart');
  if (c3) {
    const ctx = c3.getContext('2d');
    new Chart(ctx, {
      type: 'line',
      data: {
        labels: MONTHS,
        datasets: [
          {
            label: 'CSAT',
            data: [4.21, 4.30, 4.38, 4.45, 4.59, 4.71],
            borderColor: '#a78bfa',
            fill: true,
            backgroundColor: mkGrad(ctx, 'rgba(167,139,250,0.2)', 'rgba(167,139,250,0)'),
            tension: 0.4,
            borderWidth: 2.5,
            pointRadius: 4,
          },
          {
            label: 'Target 4.5',
            data: [4.5, 4.5, 4.5, 4.5, 4.5, 4.5],
            borderColor: 'rgba(255,255,255,0.2)',
            borderDash: [4, 4],
            fill: false,
            pointRadius: 0,
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: { legend: { labels: { boxWidth: 10, font: { size: 11 } } } },
        scales: {
          y: { min: 4.0, max: 5.0, grid: { color: 'rgba(255,255,255,0.04)' } },
        },
      },
    });
  }
})();
