/**
 * charts-marketing.js
 * Chart.js logic untuk Dashboard Marketing
 * KPI Command Center — ServisKu Platform
 */

'use strict';

(function initMarketingCharts() {
  // --- Tren Leads & Downloads (Line dual-axis) ---
  const c1 = document.getElementById('mktLeadsChart');
  if (c1) {
    const ctx = c1.getContext('2d');
    new Chart(ctx, {
      type: 'line',
      data: {
        labels: MONTHS,
        datasets: [
          {
            label: 'Leads',
            data: [820, 940, 1080, 1240, 1520, 1847],
            borderColor: '#ff6b35',
            fill: true,
            backgroundColor: mkGrad(ctx, 'rgba(255,107,53,0.25)', 'rgba(255,107,53,0)'),
            tension: 0.4,
            borderWidth: 2.5,
            pointRadius: 3,
          },
          {
            label: 'Downloads',
            data: [3200, 4100, 5200, 6400, 7800, 9241],
            borderColor: '#a78bfa',
            fill: false,
            tension: 0.4,
            borderWidth: 2,
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
          y:  { position: 'left',  grid: { color: 'rgba(255,255,255,0.04)' } },
          y2: { position: 'right', grid: { drawOnChartArea: false } },
        },
      },
    });
  }

  // --- Distribusi Sumber Traffic (Pie) ---
  const c2 = document.getElementById('mktChannelChart');
  if (c2) {
    new Chart(c2.getContext('2d'), {
      type: 'pie',
      data: {
        labels: ['Google Search', 'TikTok Organic', 'Meta Ads', 'Referral', 'Direct'],
        datasets: [{
          data: [32, 28, 18, 14, 8],
          backgroundColor: ['#00d4ff', '#ff6b35', '#a78bfa', '#34d399', '#fbbf24'],
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

  // --- Budget vs Spend (Bar) ---
  const c3 = document.getElementById('mktBudgetChart');
  if (c3) {
    new Chart(c3.getContext('2d'), {
      type: 'bar',
      data: {
        labels: MONTHS,
        datasets: [
          {
            label: 'Budget',
            data: [35, 38, 40, 41, 43, 43],
            backgroundColor: 'rgba(255,255,255,0.08)',
            borderRadius: 4,
          },
          {
            label: 'Actual Spend',
            data: [31, 36, 38, 44, 48, 43],
            backgroundColor: 'rgba(255,107,53,0.65)',
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
            ticks: { callback: v => 'Rp' + v + 'M' },
          },
        },
      },
    });
  }
})();
