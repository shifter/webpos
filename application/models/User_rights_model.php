<?php

class User_rights_model extends CORE_Model{

    protected  $table="user_groups_permission"; //table name
    protected  $pk_id="permission_id"; //primary key id


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }



}




?>