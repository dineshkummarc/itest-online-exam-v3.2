<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once "Classes_m.php";

class Subject_m extends MY_Model {

	protected $_table_name = 'subject';
	protected $_primary_key = 'subjectID';
	protected $_primary_filter = 'intval';
	protected $_order_by = "classesID asc";

	public function __construct() 
	{
		parent::__construct();
	}

	public function get_join_subject($id) 
	{
		$this->db->select('*');
		$this->db->from('subject');
		$this->db->join('classes', 'classes.ClassesID = subject.classesID', 'LEFT');
		$this->db->where('subject.ClassesID', $id);
		$query = $this->db->get();
		return $query->result();
	}

	public function general_get_subject($array=NULL, $signal=FALSE) 
	{
		$query = parent::get($array, $signal);
		return $query;
	}

	public function general_get_order_by_subject($array=NULL) 
	{
		$query = parent::get_order_by($array);
		return $query;
	}

	public function get_join_where_subject($id) 
	{
		$this->db->select('*');
		$this->db->from('subject');
		$this->db->join('classes', 'classes.ClassesID = subject.classesID', 'LEFT');
		$this->db->where("subject.classesID", $id);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_subject($array=NULL, $signal=FALSE) 
	{
		$query = parent::get($array, $signal);
		return $query;
	}

	public function get_single_subject($array) 
	{
		$query = parent::get_single($array);
		return $query;
	}

	public function get_order_by_subject($array=NULL) 
	{
		$query = parent::get_order_by($array);
		return $query;
	}

	public function insert_subject($array) 
	{
		$error = parent::insert($array);
		return TRUE;
	}

	public function update_subject($data, $id = NULL) 
	{
		parent::update($data, $id);
		return $id;
	}

	public function delete_subject($id)
	{
		parent::delete($id);
	}
}