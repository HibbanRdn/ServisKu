/**
 * charts-finance.js
 * Chart.js logic untuk Dashboard Financial
 * KPI Command Center — ServisKu Platform
 */

'use strict';

(function initFinanceCharts() {
  // --- P&L Overview (Bar + Line Profit) ---
  const c1 = document.getElementById('finPLChart');
  if (c1) {
    new Chart(c1.getContext('2d'), {
      type: 'bar',
      data: {
        labels: MONTHS,
        datasets: [
          {
            label: 'Revenue',
            data: [520, 580, 610, 680, 740, 847],
            backgroundColor: 'rgba(52,211,153,0.6)',
            borderRadius: 5,
          },
          {
            label: 'Biaya',
            data: [420, 465, 490, 542, 592, 648],
            backgroundColor: 'rgba(248,113,113,0.5)',
            borderRadius: 5,
          },
          {
            label: 'Profit',
            data: [100, 115, 120, 138, 148, 120],
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
          y:  { grid: { color: 'rgba(255,255,255,0.04)' }, ticks: { callback: v => 'Rp' + v + 'M' } },
          y2: { position: 'right', grid: { drawOnChartArea: false }, ticks: { callback: v => 'Rp' + v + 'M' } },
        },
      },
    });
  }

  // --- Struktur Pendapatan (Doughnut) ---
  const c2 = document.getElementById('finRevenueChart');
  if (c2) {
    new Chart(c2.getContext('2d'), {
      type: 'doughnut',
      data: {
        labels: ['Komisi Transaksi', 'Biaya Layanan', 'Fitur Premium', 'Antar-Jemput'],
        datasets: [{
          data: [58, 22, 12, 8],
          backgroundColor: ['#34d399', '#00d4ff', '#a78bfa', '#fbbf24'],
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

  // --- Cash Flow Bulanan (Line) ---
  const c3 = document.getElementById('finCashChart');
  if (c3) {
    const ctx = c3.getContext('2d');
    new Chart(ctx, {
      type: 'line',
      data: {
        labels: MONTHS,
        datasets: [
          {
            label: 'Cash In',
            data: [520, 580, 610, 680, 740, 847],
            borderColor: '#34d399',
            fill: true,
            backgroundColor: mkGrad(ctx, 'rgba(52,211,153,0.2)', 'rgba(52,211,153,0)'),
            tension: 0.4,
            borderWidth: 2,
            pointRadius: 3,
          },
          {
            label: 'Cash Out',
            data: [420, 465, 490, 542, 592, 648],
            borderColor: '#f87171',
            fill: true,
            backgroundColor: mkGrad(ctx, 'rgba(248,113,113,0.1)', 'rgba(248,113,113,0)'),
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
            ticks: { callback: v => 'Rp' + v + 'M' },
          },
        },
      },
    });
  }
})();
