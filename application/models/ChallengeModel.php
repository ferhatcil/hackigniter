<?php

class ChallengeModel extends CI_Model
{

    public $tableName = "hi_flags";

    public function __construct()
    {
        parent::__construct();
    }

    public function get($where = array())
    {
        return $this->db->where($where)->get($this->tableName)->row();
    }

    public function get_all($where = array(), $order = "id ASC")
    {
        return $this->db->where($where)->order_by($order)->get($this->tableName)->result();
    }

    public function add($data = array())
    {
        return $this->db->insert($this->tableName, $data);
    }

    public function update($where = array(), $data = array())
    {
        return $this->db->where($where)->update($this->tableName, $data);
    }

    public function delete($where = array())
    {
        return $this->db->where($where)->delete($this->tableName);
    }

    public function idor()
    {
        return $this->db->where(array("identityNumber" => "32992363894"))->get("hi_idor_0")->row();
    }

    public function csrf()
    {
        return $this->db->where(array("identityNumber" => "18362964212"))->get("hi_csrf_0")->row();
    }

    public function missingFunction()
    {
        return $this->db->where(array("username" => "cyberdetails"))->get("hi_missingfunction_0")->row();
    }


}
