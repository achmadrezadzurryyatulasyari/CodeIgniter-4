<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Data Dosen</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <style>
        html, body{
            height: 100%;
        }
        body{
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body class="bg-body-tertiary">
  <?= $this->include('layouts/navbar'); ?>

  <div class="container py-5">
    <?= $this->renderSection('content'); ?>
  </div>

<footer class="footer mt-auto py-3 bg-secondary">
    <div class="container text-center">
        <span class="text-white">UAS PEMOGRAMAN WEB 2 ACHMAD REZA DZURRYYATUL ASY'ARI</span>
    </div>
</footer>
<script src="/assets/js/bootstrap.bundle.min.js"></script>    
</body>

</html>