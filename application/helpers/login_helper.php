<?php

function cek_login()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        $ci->session->set_flashdata('pesan','<script>Swal.fire("Gagal!","Anda Belum Login , Akses Ditolak!","error")</script>');
        redirect('login');
    }
}