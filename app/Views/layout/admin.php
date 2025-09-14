<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta19
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title><?='Administration|muslum-code'?></title>
    <!-- CSS files -->
     <?= link_tag('admin/css/tabler.min.css?1684106062') ?>
     <?= link_tag('admin/css/tabler-flags.min.css?1684106062') ?>
     <?= link_tag('admin/css/tabler-payments.min.css?1684106062') ?>
     <?= link_tag('admin/css/tabler-payments.min.css?1684106062') ?>
     <?= link_tag('admin/css/tabler-vendors.min.css?1684106062') ?>
     <?= link_tag('admin/css/demo.min.css?1684106062') ?>
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/css/tom-select.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>
  </head>
  <body >
    <?= script_tag('admin/js/demo-theme.min.js?1684106062') ?>
    <div class="page">
      <!-- Sidebar -->
      <?= $this->include('elements/admin/sidebar') ?>
      <?= $this->include('elements/admin/navbar') ?>
      
      <div class="page-wrapper">

        <!-- Page body -->
        <div class="page-body" >
          <div class="container">
            <?= $this->include('elements/flash/admin/flash') ?>
            <?= $this->renderSection('content') ?> 
          </div>
        </div>
        <?= $this->include('elements/admin/footer') ?>
      </div>
    </div>

    <!-- Tabler Core -->
    <?= script_tag('admin/js/tabler.min.js?1684106062') ?>
    <?= script_tag('admin/js/demo.js?1684106062') ?>


  </body>
</html>