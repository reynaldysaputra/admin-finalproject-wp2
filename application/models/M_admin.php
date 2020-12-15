<?php 
class M_admin extends CI_Model 
{
    public function cekData($where = null)
    {
        return $this->db->get_where('admin',$where);
    }
}
