<?php
class singleModel extends CI_Model
{
    function singleModel()
    {
        $this->load->database();
    }
    function getProduct($table){
        $sql = "select * from $table";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function getImages($table){
        $sql = "select * from $table";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}
?>