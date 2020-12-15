<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="<?= $this->config->base_url()?>assets/style/login.css">
   <!-- SweetAlert -->
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
   <title>Form V.1.1</title>
</head>
<body>

   <form action="<?= base_url('login')?>" method="post">
      <div id="boxForm">
         <img src="<?= $this->config->base_url()?>assets/img/orang.png" alt="orang">
         
         <label>
            <?= $this->session->flashdata('pesan');?>
            <input type="text" placeholder="Masukan Email" name="email" value="<?= set_value('email');?>"><br>
            <?= form_error('email','<medium class="text-danger pl-3" style="color:red;">','</medium>')?><br><br>
            <input type="password" placeholder="Masukan Password" name="password"><br><br>
            <?= form_error('password','<medium class="text-danger pl-3" style="color:red;">','</medium>')?><br>
            <button type="submit">Login</button>
         </label>
      </div>
   </form>

</body>
</html>