<?php
/* 
 * Generated by CRUDigniter v1.3 Beta 
 * www.crudigniter.com
 */
 
class Report extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Report_model');
    }
    
    /*
     * Listing of reports
     */
    function index()
    {
        $data['reports'] = $this->Report_model->get_all_reports();
        $this->load->view('report/index',$data);
    }
    
    /*
     * Adding new reports
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('general_details_id','General Details Id','integer');
		//$this->form_validation->set_rules('police_report_flag','Police Report Flag','required');
		$this->form_validation->set_rules('police_station_details','Police Station Details','required|max_length[255]');
		$this->form_validation->set_rules('report_no','Report No','required|max_length[255]');
		$this->form_validation->set_rules('date_of_loss','Date Of Loss','required');
		$this->form_validation->set_rules('date_of_loss_nep','Date Of Loss','required');
		$this->form_validation->set_rules('place_of_accident','Place Of Accident','required|max_length[255]');
		$this->form_validation->set_rules('casualty','Casualty','required|max_length[255]');
		$this->form_validation->set_rules('casualty_desc','Casualty Desc','required');
		$this->form_validation->set_rules('media_report','Media Report','max_length[255]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'general_details_id' => $this->input->post('general_details_id'),
				'police_report_flag' => $this->input->post('police_report_flag'),
				'police_station_details' => $this->input->post('police_station_details'),
				'report_no' => $this->input->post('report_no'),
				'date_of_loss' => $this->input->post('date_of_loss'),
				'date_of_loss_nep' => $this->input->post('date_of_loss_nep'),
				'place_of_accident' => $this->input->post('place_of_accident'),
				'police_report_description' => $this->input->post('police_report_description'),
				'casualty' => $this->input->post('casualty'),
				'casualty_desc' => $this->input->post('casualty_desc'),
				'media_report' => $this->input->post('media_report'),
            );
            
            $reports_id = $this->Report_model->add_reports($params);
            redirect('details/index/'.$this->input->post('general_details_id'));
        }
        else
        {
            $data['general_details_id']= $this->uri->segment(3);
            $this->load->view('includes/header.php');
            $this->load->view('includes/sidebar.php');
            $this->load->view('report/add',$data);
            $this->load->view('includes/footer.php');
            
        }
    }
    
    /*
     * Editing reports
     */
    function edit($report_id)
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('general_details_id','General Details Id','integer');
		//$this->form_validation->set_rules('police_report_flag','Police Report Flag','required');
		$this->form_validation->set_rules('police_station_details','Police Station Details','required|max_length[255]');
		$this->form_validation->set_rules('report_no','Report No','required|max_length[255]');
		$this->form_validation->set_rules('date_of_loss','Date Of Loss','required');
		$this->form_validation->set_rules('date_of_loss_nep','Date Of Loss','required');
		$this->form_validation->set_rules('place_of_accident','Place Of Accident','required|max_length[255]');
		$this->form_validation->set_rules('casualty','Casualty','required|max_length[255]');
		$this->form_validation->set_rules('casualty_desc','Casualty Desc','required');
		$this->form_validation->set_rules('media_report','Media Report','max_length[255]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'general_details_id' => $this->input->post('general_details_id'),
				'police_report_flag' => $this->input->post('police_report_flag'),
				'police_station_details' => $this->input->post('police_station_details'),
				'report_no' => $this->input->post('report_no'),
				'date_of_loss' => $this->input->post('date_of_loss'),
				'date_of_loss_nep' => $this->input->post('date_of_loss_nep'),
				'place_of_accident' => $this->input->post('place_of_accident'),
				'police_report_description' => $this->input->post('police_report_description'),
				'casualty' => $this->input->post('casualty'),
				'casualty_desc' => $this->input->post('casualty_desc'),
				'media_report' => $this->input->post('media_report'),
            );

            $this->Report_model->update_reports($report_id,$params);            
            redirect('details/index/'.$this->input->post('general_details_id'));
        }
        else
        {   
            $data['reports'] = $this->Report_model->get_reports($report_id);
            $data['general_details_id']= $this->uri->segment(3);
            $this->load->view('includes/header.php');
            $this->load->view('includes/sidebar.php');
            $this->load->view('report/edit',$data);
            $this->load->view('includes/footer.php');
            
        }
    }
    
    /*
     * Deleting reports
     */
    function remove($report_id, $general_details_id)
    {
        $this->Report_model->delete_reports($report_id);
        redirect('details/index/'.$general_details_id);
    }
}
