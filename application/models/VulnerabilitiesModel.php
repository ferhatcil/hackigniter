<?php

class VulnerabilitiesModel extends CI_Model
{

    public $tableName = "users";

    public function __construct()
    {
        parent::__construct();
    }

    public function errorBasedSqliSelectQuery($username, $order = "id ASC")
    {
        $query = "select username from hi_0 where username like '%" . $username . "%'";

        if ($this->db->query($query)) {
            return $this->db->query($query)->result();
        } else {
            return $this->db->error();
        }
    }

    public function timeBasedSqliSelectQuery($username, $order = "id ASC")
    {
        $query = "select username from hi_1 where username like '%" . $username . "%'";
        if ($this->db->query($query)) {
            return $this->db->query($query)->result();
        } else {
            return $this->db->error();
        }
    }

    public function idorSelectQuery($where = array(), $order = "id ASC")
    {
        $this->db->select('h0.id,h0.name,h0.surname,h0.ibanNumber,h0.totalAmount,h1.id1,h1.id2,h1.amount,h1.date');
        $this->db->from('hi_idor_0 as h0');
        $this->db->join('hi_idor_1 as h1', 'h1.id1 = h0.ibanNumber or h1.id2=h0.ibanNumber');
        $this->db->where($where);

        return $this->db->get()->result();

    }

    public function idorGet($where = array())
    {
        return $this->db->where($where)->get("hi_idor_0")->row();
    }

    public function idorİnsert($data = array())
    {
        return $this->db->insert("hi_idor_1", $data);
    }

    public function idorUpdate($where = array(), $data = array())
    {
        return $this->db->where($where)->update("hi_idor_0", $data);
    }

    public function csrfSelectQuery($where = array(), $order = "id ASC")
    {
        $this->db->select('h0.id,h0.name,h0.surname,h0.ibanNumber,h0.totalAmount,h1.id1,h1.id2,h1.amount,h1.date');
        $this->db->from('hi_csrf_0 as h0');
        $this->db->join('hi_csrf_1 as h1', 'h1.id1 = h0.ibanNumber or h1.id2=h0.ibanNumber');
        $this->db->where($where);

        return $this->db->get()->result();

    }

    public function csrfGet($where = array())
    {
        return $this->db->where($where)->get("hi_csrf_0")->row();
    }

    public function csrfİnsert($data = array())
    {
        return $this->db->insert("hi_csrf_1", $data);
    }

    public function csrfUpdate($where = array(), $data = array())
    {
        return $this->db->where($where)->update("hi_csrf_0", $data);
    }

    public function xssLogin($where = array())
    {
        return $this->db->where($where)->get("hi_xss_0")->row();
    }

    public function xssTickets($where = array(), $order_by = "id desc")
    {
        return $this->db->where($where)->order_by($order_by)->get("hi_xss_1")->result();
    }

    public function xssTicket($where = array())
    {
        return $this->db->where($where)->get("hi_xss_1")->row();
    }

    public function xssAddTicket($data = array())
    {
        return $this->db->insert("hi_xss_1", $data);
    }

    public function xssComments($where = array(), $orderby = "idid desc")
    {
        $this->db->select('h0.id,h0.username,h2.ticketId,h2.comment,h2.id as idid');
        $this->db->from('hi_xss_0 as h0');
        $this->db->join('hi_xss_2 as h2', 'h0.id = h2.userID');
        $this->db->where($where);
        $this->db->order_by($orderby);

        return $this->db->get()->result();
    }

    public function xssAddComment($data = array())
    {
        return $this->db->insert("hi_xss_2", $data);
    }

    public function missingFunctionGet()
    {
        return $this->db->where($where = array())->get("hi_missingfunction_0")->row();
    }

    public function missingFunctionGetAll()
    {
        return $this->db->get("hi_missingfunction_0")->result();
    }

    public function missingFunctionUpdateUserPass($where = array(), $data = array())
    {
        return $this->db->where($where)->update("hi_missingfunction_0", $data);
    }

    public function missingFunctionDeleteProfile($where = array())
    {
        return $this->db->where($where)->delete("hi_missingfunction_0");
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

}
