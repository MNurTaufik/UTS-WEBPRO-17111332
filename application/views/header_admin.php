<!DOCTYPE html>
<html>
<html lang="en" dir="ltr">
<head>
   <meta charset="utf-8">
   <title><?php echo $title ?></title>
   <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css');?>"> <!-- pemanggilan bootstrap -->
   <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css');?>"> <!-- pemanggilan css -->
   <style media="screen">
      .btn, .form-control{
         border-radius: 0; 
      }
   </style>
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
         <a class="navbar-brand" href="<?= base_url("MyAdmin") ?>">ReINKUN.com </a>
         <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            
            <li class="nav-item">
               <a class="nav-link" href="<?= base_url('MyAdmin') ?>">Home  </a>
            </li>

            <li class="nav-item active">
               <a class="nav-link" href="<?= base_url('MyAdmin/insert') ?>">Input <span class="sr-only">(current)</span></a>
            </li>
            
         </ul>
         <a href="">
            <button class="btn btn-outline-success my-2 my-sm-0" type="">Logout</button>
         </a>
      </div>
   </nav>