<?php
defined('BASEPATH') or exit('Error!');
/**
 * @package  : Calendar Apps
 * @author   : Fika Ridaul Maulayya <ridaulmaulayya@gmail.com>
 * @since    : 2017
 */
class App extends CI_Controller
{

    private $data;

    public function __construct()
    {
        parent::__construct();
        //load library, helper and model
        $this->load->library(array('session', 'form_validation', 'mydateconverter'));
        $this->load->helper(array('url','file'));
        $this->load->model('apps');
    }

    public function login()
    {
        if($this->apps->apps_id())
        {
            redirect('/');
        }else{
            $data = array(
                'title' => 'Login - Calendar Apps System'
            );
            //set form validation
            $this->form_validation->set_rules('key', 'Key Authorize', 'trim|required');
            //set semmage
            $this->form_validation->set_message('required', '<div class="alert alert-danger alert-dismissible" style="margin-top: 5px"> 
                                                               <i class="fa fa-exclamation-circle"></i> {field} is required.
                                                              </div>');
            if ($this->form_validation->run() == TRUE) {

            $key = $this->input->post('key', TRUE);

             //checking data via model
             $checking = $this->apps->check_one('tbl_users', array('key' => $key));

                //jika ditemukan, maka create session
                if ($checking != FALSE) {
                    foreach ($checking as $apps) {

                        $session_data = array(
                            'apps_id'       => $apps->key,
                            'apps_nama' => $apps->nama,
                        );
                        //set session userdata
                        $this->session->set_userdata($session_data);

                        //calback sesion
                        //return TRUE;

                        redirect('/');
                    }
                } else {
                    //create data array
                    $data = array(
                        'error' => '<div class="alert alert-danger alert-dismissible" style="margin-top: 5px">
                                      <i class="fa fa-exclamation-circle"></i> Key is wrong
                                    </div>',
                        'title' => "Login - Calendar Apps System"
                    );
                    $this->load->view('apps/layout/login', $data);
                }

            }else{
                $this->load->view('apps/layout/login', $data);
            }

        }
    }

    public function logout()
    {
        if($this->apps->apps_id())
        {
            $this->session->sess_destroy();
            redirect('/');
        }else{
            show_404();
            return FALSE;
        }
    }

    public function index()
    {
        if($this->apps->apps_id())
        {
            //title
            $this->data['title'] = 'Calendar Apps ';
            //load header
            $this->load->view('apps/part/header', $this->data);
            //get data
            $this->data['tasks']  = $this->apps->get_all_task();
            //load calendar data
            $this->load->view('apps/layout/calendar', $this->data);
            //load footer
            $this->load->view('apps/part/footer', $this->data);
        }else{
           redirect('index.php/app/login/');
        }


    }

    //ajax event!
    public function addtask()
    {
        $response = $this->apps->addTask($this->input->post('title'),
            $this->input->post('description'),
            $this->mydateconverter->convertDate($this->input->post('date')));
        echo $response;

    }

    //ajax event!
    public function deletetask()
    {
        $response = $this->apps->deleteTask($this->input->get('id'));
        echo $response;
    }

    //ajax event!
    public function editask()
    {
        $response = $this->apps->editTask($this->input->post('title'),
            $this->input->post('description'),
            $this->input->post('id')
        );
        echo $response;
    }
}