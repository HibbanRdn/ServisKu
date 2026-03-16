/**
 * charts-helpers.js
 * Shared utilities & Chart.js global defaults
 * KPI Command Center — ServisKu Platform
 */

'use strict';

// -------------------------------------------------------
// Chart.js global defaults
// -------------------------------------------------------
Chart.defaults.color        = '#6b7a99';
Chart.defaults.borderColor  = 'rgba(255,255,255,0.06)';
Chart.defaults.font.family  = "'DM Sans', sans-serif";

// -------------------------------------------------------
// Shared label arrays
// -------------------------------------------------------
const MONTHS  = ['Okt', 'Nov', 'Des', 'Jan', 'Feb', 'Mar'];
const DAYS_30 = Array.from({ length: 30 }, (_, i) => String(i + 1));

// -------------------------------------------------------
// Helper: create a vertical linear gradient for chart fills
// -------------------------------------------------------
function mkGrad(ctx, colorTop, colorBottom) {
  const gradient = ctx.createLinearGradient(0, 0, 0, 300);
  gradient.addColorStop(0, colorTop);
  gradient.addColorStop(1, colorBottom);
  return gradient;
}
