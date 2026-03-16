/**
 * charts-sales.js
 * Chart.js logic untuk Dashboard Penjualan
 * KPI Command Center — ServisKu Platform
 */

'use strict';

(function initSalesCharts() {
  // --- Revenue Bulanan (Bar + Line Target) ---
  const c1 = document.getElementById('salesRevenueChart');
  if (c1) {
    const ctx = c1.getContext('2d');
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: MONTHS,
        datasets: [
          {
            label: 'Revenue',
            data: [520, 580, 610, 680, 740, 847],
            backgroundColor: mkGrad(ctx, 'rgba(0,212,255,0.7)', 'rgba(0,212,255,0.05)'),
            borderRadius: 6,
            borderSkipped: false,
          },
          {
            label: 'Target',
            data: [600, 620, 650, 700, 750, 900],
            type: 'line',
            borderColor: 'rgba(0,212,255,0.4)',
            borderDash: [4, 4],
            pointRadius: 0,
            fill: false,
            tension: 0.4,
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: { legend: { labels: { boxWidth: 10, font: { size: 11 } } } },
        scales: {
          y: {
            grid: { color: 'rgba(255,255,255,0.05)' },
            ticks: { callback: v => 'Rp' + v + 'M' },
          },
        },
      },
    });
  }

  // --- Distribusi Layanan (Doughnut) ---
  const c2 = document.getElementById('salesServiceChart');
  if (c2) {
    new Chart(c2.getContext('2d'), {
      type: 'doughnut',
      data: {
        labels: ['Servis HP', 'Servis Laptop', 'Servis PC', 'Tablet', 'Aksesoris'],
        datasets: [{
          data: [42, 31, 14, 8, 5],
          backgroundColor: ['#00d4ff', '#a78bfa', '#34d399', '#fbbf24', '#f472b6'],
          borderWidth: 0,
          hoverOffset: 8,
        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        cutout: '68%',
        plugins: {
          legend: { position: 'bottom', labels: { padding: 14, boxWidth: 10, font: { size: 11 } } },
        },
      },
    });
  }

  // --- Volume Transaksi Harian (Line) ---
  const c3 = document.getElementById('salesDailyChart');
  if (c3) {
    const ctx = c3.getContext('2d');
    const dailyData = Array.from({ length: 30 }, () => Math.floor(Math.random() * 60) + 80);
    new Chart(ctx, {
      type: 'line',
      data: {
        labels: DAYS_30,
        datasets: [{
          label: 'Transaksi',
          data: dailyData,
          borderColor: '#00d4ff',
          borderWidth: 2,
          fill: true,
          backgroundColor: mkGrad(ctx, 'rgba(0,212,255,0.2)', 'rgba(0,212,255,0)'),
          tension: 0.4,
          pointRadius: 0,
        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: { legend: { display: false } },
        scales: {
          y: { grid: { color: 'rgba(255,255,255,0.05)' } },
          x: { ticks: { maxTicksLimit: 8 } },
        },
      },
    });
  }
})();
