<?php
class homeModel extends CI_Model
{

    function homeModel()
    {
        $this->load->database();
    }
    function slider($table,$start,$end){
        $sql = "select imgUrl from $table where img_id BETWEEN $start AND $end";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function static_small_slider($table,$start,$end){
        $sql = "select imgUrl,product_id from $table where img_id BETWEEN $start AND $end";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function dynamics_small_slider($table,$start,$end){
        $sql = "select imgUrl,product_id from $table where img_id BETWEEN $start AND $end";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function productId($table,$productId){
        $sql = "select product_id,title,price from $table where product_id =$productId";
        $query = $this->db->query($sql);
        return $query->result_array();
    }


}
?>