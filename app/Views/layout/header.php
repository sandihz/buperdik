<!DOCTYPE html>
<!--<html dir="rtl" lang="ar">-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= 'ADEL CCG - ' . esc($title) ?></title>
    <meta name="description" content="Garment Factory Process">
    <meta name="keyword" content="garment,factory,khonkaen,ocomshop">
    <meta name="author" content="ocomshop">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= csrf_meta()?>

    <!-- Google Font: Thai Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url('asset/plugins/fontawesome-free/css/all.min.css') ?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('asset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('asset/dist/css/adminlte.min.css') ?>">
     <!--<link rel="stylesheet" href="<?php /* echo base_url('asset/css/rtl/adminlte.rtl.min.css') */ ?>"> --> 
	 
    <!-- SweetAlert2 Bootstrap or Dark -->
    <link rel="stylesheet" href="<?= base_url('asset/plugins/sweetalert2-theme-dark/dark.scss') ?>">
    <!-- DataTables -->
 	<link rel="stylesheet" href="<?= base_url('asset/plugins/datatables-bs5/DataTables-1.13.1/css/dataTables.bootstrap5.min.css') ;?>">
	<link rel="stylesheet" href="<?= base_url('asset/plugins/datatables-bs5/Responsive-2.4.0/css/responsive.bootstrap5.min.css') ;?>"> 

    <link rel="stylesheet" href="<?= base_url('asset/plugins/datatables-bs5/StateRestore-1.2.0/css/stateRestore.bootstrap5.min.css') ?>">
    <!-- Dark style -->
    <!--<link rel="stylesheet" href="<?php /* echo base_url('asset/css/dark/adminlte-dark-addon.min.css')*/ ?>">  --> 
</head>