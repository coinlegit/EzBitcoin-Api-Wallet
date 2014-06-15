<?php

class Address_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function insert_new_address($user_id, $new_wallet_addres, $crypto_type) {
        $this->db->insert('addresses', array(
            'address' => $new_wallet_addres, 'user_id' => $user_id, 'crypto_type' => $crypto_type)
        );
        return $this->db->insert_id();
    }

}