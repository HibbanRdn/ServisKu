<?php
/**
 * index.php
 * Entry point utama KPI Command Center — ServisKu Platform
 *
 * File ini merakit semua komponen:
 *   includes/header.php   → <head>, CDN, stylesheet
 *   includes/sidebar.php  → navigasi kiri
 *   includes/topbar.php   → bar atas (title + period selector)
 *   pages/*.php           → konten masing-masing panel
 *   includes/footer.php   → script JS + penutup HTML
 */
?>

<?php require_once __DIR__ . '/../includes/header.php'; ?>
<?php require_once __DIR__ . '/../includes/sidebar.php'; ?>

<div class="main">

  <?php require_once __DIR__ . '/../includes/topbar.php'; ?>

  <?php require_once __DIR__ . '/../pages/sales.php'; ?>
  <?php require_once __DIR__ . '/../pages/marketing.php'; ?>
  <?php require_once __DIR__ . '/../pages/cs.php'; ?>
  <?php require_once __DIR__ . '/../pages/finance.php'; ?>
  <?php require_once __DIR__ . '/../pages/hr.php'; ?>
  <?php require_once __DIR__ . '/../pages/it.php'; ?>
  <?php require_once __DIR__ . '/../pages/exec.php'; ?>
  <?php require_once __DIR__ . '/../pages/pm.php'; ?>

</div>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>