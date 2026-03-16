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

<?php require_once 'includes/header.php'; ?>

<?php require_once 'includes/sidebar.php'; ?>

<div class="main">

  <?php require_once 'includes/topbar.php'; ?>

  <?php require_once 'pages/sales.php';     ?>
  <?php require_once 'pages/marketing.php'; ?>
  <?php require_once 'pages/cs.php';        ?>
  <?php require_once 'pages/finance.php';   ?>
  <?php require_once 'pages/hr.php';        ?>
  <?php require_once 'pages/it.php';        ?>
  <?php require_once 'pages/exec.php';      ?>
  <?php require_once 'pages/pm.php';        ?>

<?php require_once 'includes/footer.php'; ?>
