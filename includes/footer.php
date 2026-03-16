<?php
/**
 * includes/footer.php
 * Penutup tag HTML + load semua script JS
 * KPI Command Center — ServisKu Platform
 *
 * Urutan load WAJIB dipertahankan:
 *   1. charts-helpers.js  — global defaults & shared utilities (mkGrad, MONTHS, dll)
 *   2. charts-*.js        — inisialisasi chart per departemen
 *   3. navigation.js      — bind event listener navigasi
 */
?>

  <!-- ── Shared chart helpers (load PERTAMA) ──────────── -->
  <script src="assets/js/charts-helpers.js"></script>

  <!-- ── Chart bundles per departemen ─────────────────── -->
  <script src="assets/js/charts-sales.js"></script>
  <script src="assets/js/charts-marketing.js"></script>
  <script src="assets/js/charts-cs.js"></script>
  <script src="assets/js/charts-finance.js"></script>
  <script src="assets/js/charts-hr.js"></script>
  <script src="assets/js/charts-it.js"></script>
  <script src="assets/js/charts-exec.js"></script>
  <script src="assets/js/charts-pm.js"></script>

  <!-- ── Navigation logic (load TERAKHIR) ─────────────── -->
  <script src="assets/js/navigation.js"></script>

</div><!-- /.main -->
</body>
</html>
