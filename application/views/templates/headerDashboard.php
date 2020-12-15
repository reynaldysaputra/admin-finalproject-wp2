<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="<?= $this->config->base_url()?>assets/style/dashboard.css?<?= time();  ?>">
   <title>Navigation</title>
</head>
<body>
<?= $this->session->flashdata('pesan');?>
   <div class="main">
       <div class="sidebar1">
           <div class="header">
               <h3>Cavenady</h3>
           </div>
           <div class="body">
                <a href="<?= $this->config->base_url()?>">Dashboard</a>
                <hr>
               <a href="<?= $this->config->base_url()?>pages/feedbacks">Feedback</a>
               <hr>
           </div>
       </div>
       <div class="sidebar2">
           <div class="header">
               <a href="<?= base_url('login/logout')?>" class='logout' onclick="return confirm('Anda yakin ingin keluar?');">Logout</a>
           </div>
           <div class="body">
           
