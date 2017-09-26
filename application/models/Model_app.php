<?php

class Model_app extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->library('table');
    }

	function login($xss_data) {
		//create query to connect user login database
        $email = $xss_data['email'];
        $password = $xss_data['password'];

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where("(username='$email' OR email='$email')");
        $this->db->where('password', $password);
        $this->db->limit(1);

        //get query and processing
        $query = $this->db->get();
        $jumlah = $query->num_rows();

        $pass = $this->db->query("SELECT * FROM user WHERE username='$email' OR email='$email'");
        $row = $pass->row_array();
        $pwd = $row['password'];
        $mail = $row['email'];
        $user = $row['username'];

        if($jumlah == 0) {
             //if data is true
            if($this->input->post('email') <> $user && $this->input->post('email') <> $mail) {
                $this->session->set_flashdata('notif', 'Maaf username/email yang anda masukkan tidak terdaftar!');
                redirect('account/admin', 'refresh');
                return FALSE;
            }
            else if($this->input->post('password') <> $pwd) {
                $this->session->set_flashdata('danger', 'Maaf password yang anda masukkan salah!');
                redirect('account/admin','refresh');
                return FALSE;
            }
        }
        
        else if($query->num_rows() == 1) {
            return $query->result();
            redirect('admin', 'refresh');
            return TRUE;
        }

        else {
            return $query->result();
            redirect('admin','refresh');
            return TRUE;
        }
	}

	/* ====== AUTO NUMBER ============ */

    public function auto_number($namatabel, $namakolom, $prefix, $digit){
        $lastCounter = 0;

        $lastId = "";
        $counter = 0;
        $date = date("md");
        $prefixs = $prefix.$date."-";
        $query = $this->db->query("SELECT $namakolom FROM $namatabel WHERE $namakolom lIKE '$prefixs%' ORDER BY $namakolom DESC limit 1");
        if ($query->num_rows() == 0) {
            $counter = 1;
        } else{

            foreach ($query->result() as $row) {
                $lastId = $row->$namakolom;
                $lastCounter = intval(str_replace($prefixs,"", $lastId));

            }
        }

        $counter = $lastCounter +1;

        $newId = $prefixs . str_pad($counter, $digit,"0", STR_PAD_LEFT);
        return $newId ;
    }

    /* ========= AUTO NUMBER ============ */

	function getAllDataTwoTableTwoWhere($data, $table, $join1, $wjoin1, $kolom1, $where1, $kolom2, $where2) {
     
        $this->db->select($data);
        $this->db->from($table);
        $this->db->join($join1, $wjoin1);
        $this->db->where($kolom1, $where1);
        $this->db->where($kolom2, $where2);

        return $this->db->get();
    }

    function getAllDataTwoTable($data, $table, $join1, $wjoin1) {
        
        $this->db->select($data);
        $this->db->from($table);
        $this->db->join($join1, $wjoin1);

        return $this->db->get();
    }

    function getAllDataThreeTableOneWhere($data, $table, $join1, $wjoin1, $join2, $wjoin2, $kolom1, $where1) {
        
        $this->db->select($data);
        $this->db->from($table);
        $this->db->join($join1, $wjoin1);
        $this->db->join($join2, $wjoin2);
        $this->db->where($kolom1, $where1);

        return $this->db->get();
    }


    function getAllData($table) {
        $this->db->select("*");
        $this->db->from($table);

        return $this->db->get();
    }

    function getDataWhere($data, $table, $kolom, $where) {
        $this->db->select($data);
        $this->db->from($table);
        $this->db->where($kolom, $where);

        return $this->db->get();
    }

    function getDataAndWhere($data, $table, $kolomf, $wheref, $koloms, $wheres){
        $this->db->select($data);
        $this->db->from($table);
        $this->db->where($kolomf, $wheref);
        $this->db->where($koloms, $wheres);

        return $this->db->get();

    }

    function getDataThreeWhere($data, $table, $kolomf, $wheref, $koloms, $wheres, $kolomt, $wheret){
        $this->db->select($data);
        $this->db->from($table);
        $this->db->where($kolomf, $wheref);
        $this->db->where($koloms, $wheres);
        $this->db->where($kolomt, $wheret);

        return $this->db->get();

    }

    function getDataFourWhere($data, $table, $kolomf, $wheref, $koloms, $wheres, $kolomt, $wheret, $koloma, $wherea){
        $this->db->select($data);
        $this->db->from($table);
        $this->db->where($kolomf, $wheref);
        $this->db->where($koloms, $wheres);
        $this->db->where($kolomt, $wheret);
        $this->db->where($koloma, $wherea);

        return $this->db->get();

    }

    function getGroupOrderBy($data, $table, $kolomf, $wheref, $group1, $group2, $order1) {
        $this->db->select($data);
        $this->db->from($table);
        $this->db->where($kolomf, $wheref);
        $this->db->group_by(array($group1, $group2));
        $this->db->order_by($order1, 'DESC');

        return $this->db->get();
    }

    function getDataGroupOrderBy($data, $table, $kolomf, $wheref, $koloms, $wheres, $group1, $group2, $order1) {
        $this->db->select($data);
        $this->db->from($table);
        $this->db->where($kolomf, $wheref);
        $this->db->where($koloms, $wheres);
        $this->db->group_by(array($group1, $group2));
        $this->db->order_by($order1, 'DESC');

        return $this->db->get();
    }

    function getDataGroupOrderByList($data, $table, $kolomf, $wheref, $koloms, $wheres, $kolomp, $wherep, $group1, $group2, $order1) {
        $this->db->select($data);
        $this->db->from($table);
        $this->db->where($kolomf, $wheref);
        $this->db->where($koloms, $wheres);
        $this->db->where($kolomp, $wherep);
        $this->db->group_by(array($group1, $group2));
        $this->db->order_by($order1, 'DESC');

        return $this->db->get();
    }

    function getUpdate($table, $kolom, $xss_update, $iduser) {
        $this->db->where($kolom, $iduser);
        return $this->db->update($table,$xss_update);
    }

    function getInsert($table,$data) {
        return $this->db->insert($table,$data);
    }

    function getDelete($table, $kolom, $iduser) {
        $this->db->where($kolom, $iduser);
        return $this->db->delete($table);
    }

}