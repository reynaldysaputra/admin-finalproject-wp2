<?php
class M_feedback extends CI_Model   
{
    public function simpanData($data = null)
    {
        $this->db->insert('feedback',$data);
    }
    public function getFeedback()
    {
        return $this->db->get('feedback');
    }
    public function hapusFeedback($where = null)
    {
        $this->db->delete('feedback',$where);
    }
}
