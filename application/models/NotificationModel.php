<?php
class NotificationModel extends CI_Model
{
    public function insert($data,$table)
    {
     return $this->db->insert($table,$data);
    }
    public function fetch($table){
       
        return $this->db->get($table)->result_array();
    }
    public function fetchnotification( $compare = null)
    {
       return $this->db->select('t1.*, t2.userName, t2.profileImageUrl')
     ->from('mstnotification as t1')
     ->where($compare)
     ->join('mstuser as t2', 't1.senderId = t2.userId', 'LEFT')
     ->order_by("t1.addDate","desc")
     ->get()->result_array();
    }
    public function fetchToken($receiverId){
        $this->db->where('userId',$receiverId);
        return $this->db->get('mstdevicedata')->result_array();
    } 
    public function update($data,$compare,$table){
       $this->db->where($compare);
        return $this->db->update($table,$data);
    }
}


?>