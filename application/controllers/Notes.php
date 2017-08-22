<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notes extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        $this->validate_session();
        // if($this->session->userdata('right_discount_view') == 0 || $this->session->userdata('right_discount_view') == null) {
        //     redirect('../Homepage');
        // }
        $this->load->model('Users_model');
        $this->load->model('Notes_model');
    }

    public function index() {
        // $m_users=$this->Users_model;
        // $data2['users']=$m_users->get_list(
        //   'user_accounts.is_deleted=0 AND user_accounts.user_id!=1',
        //   'user_accounts.*,CONCAT(user_accounts.user_fname," ",user_accounts.user_mname," ",user_accounts.user_lname) as full_name,'
        // );
        //default resources of the active view
        $data['_def_css_files']=$this->load->view('template/assets/css_files','',TRUE);
        $data['_def_js_files']=$this->load->view('template/assets/js_files','',TRUE);
        $data['_top_navigation']=$this->load->view('template/elements/top_navigation','',TRUE);
        $data['_side_navigation']=$this->load->view('template/elements/side_bar_navigation','',TRUE);
        $data['_right_navigation']=$this->load->view('template/elements/right_bar_navigation.php','',TRUE);
        $data['_rights']=$this->load->view('template/elements/rights','',TRUE);
        $data['_title'] = 'Notes - Information';
        $info=$this->Notes_model->get_list(null,'notes.*');
		    $data['notes']=$info[0];
        $this->load->view('notes_view.php', $data);
    }

    function transaction($txn = null) {
        switch ($txn) {
          case 'list':
              $m_notes=$this->Notes_model;
              $response['data']=$m_notes->get_list(
                  null,
                  'notes.*'
              );
              echo json_encode($response);
            break;

            case 'update' :
                $m_notes=$this->Notes_model;
                $note_id=$this->input->post('note_id',TRUE);
                $m_notes->note1=$this->input->post('note_1',TRUE);
                $m_notes->note2=$this->input->post('note_2',TRUE);
                $m_notes->note3=$this->input->post('note_3',TRUE);
                $m_notes->note4=$this->input->post('note_4',TRUE);
                $m_notes->note5=$this->input->post('note_5',TRUE);
                $m_notes->note6=$this->input->post('note_6',TRUE);
                $m_notes->note7=$this->input->post('note_7',TRUE);
                $m_notes->note8=$this->input->post('note_8',TRUE);
                $m_notes->note9=$this->input->post('note_9',TRUE);
                $m_notes->note10=$this->input->post('note_10',TRUE);
                $m_notes->modify($note_id);

                $response['title']='Success!';
                $response['stat']='success';
                $response['msg']='Notes information successfully updated.';
                echo json_encode($response);

              break;
        }
    }
}
