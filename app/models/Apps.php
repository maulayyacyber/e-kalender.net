<?php
defined('BASEPATH') or exit('Error!');
/**
 * @package  : Calendar Apps
 * @author   : Fika Ridaul Maulayya <ridaulmaulayya@gmail.com>
 * @since    : 2017
 */
class Apps extends CI_Model
{

	public function __construct(){
		parent::__construct();
		$this->load->database();

	}

    //fungsi check username
    function check_one($table, $where)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }

	public function apps_id()
	{
	    return $this->session->userdata('apps_id');
	}

	public function addTask($title,$details,$date)
	{
		$task = array(
		        'task_id'       =>mt_rand(1,9999999999),
				'task_name'     =>$title,
				'task_details'  =>$details,
				'date'          =>$date
		 );
		return $this->db->insert('tbl_task',$task);
	}
	public function get_all_task()
	{
		$sql = $this->db->get("tbl_task");
		return $sql->result_array();
	}


	public function deleteTask($id)
	{
		$this->db->where('task_id',$id);
		return $this->db->delete('tbl_task');
	}

	public function editTask($title,$details,$id)
	{
		$new_task_details  =array(
		        'task_name'     =>$title,
		        'task_details'  =>$details
		);

		$this->db->where('tbl_task.task_id',$id);
		return $this->db->update('tbl_task',$new_task_details);
	}
}