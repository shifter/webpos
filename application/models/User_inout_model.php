<?php

class User_inout_model extends CORE_Model {
    protected  $table="user_inout";
    protected  $pk_id="user_inout_id";

    function __construct() {
        parent::__construct();
    }
    function inout($user_id){
        $this->db->select('*');
        $this->db->from('user_inout');
        $this->db->where('is_endbatch', 0);
        $this->db->where('user_id', $user_id);
        return $this->db->get();
    }
    function modify_by_user($user_id, $denomination_id){
        $datenow = date('Y-m-d H:i:s');
        $timein = $this->session->timein;
        $sql = "UPDATE user_inout SET is_endbatch=1, time_out='".$datenow."', denomination_id=".$denomination_id." WHERE time_in='".$timein."' AND user_id=".$user_id;
        return $this->db->query($sql);
    }
}

    

?>