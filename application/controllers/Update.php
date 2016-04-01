<?php
/* 
 * Generated by CRUDigniter v1.3 Beta 
 * www.crudigniter.com
 */
 
class Update extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Update_detail_model');
        $this->load->model('bill_book_model');
    }
    
    /*
     * Listing of general_details
     */
    function update($general_details_id)
    {   
        $this->load->library('form_validation');

	if($this->form_validation->run())     
        {   
	    $datas = array(
		'general_details_id'=> $general_details_id,			    	
		'update_remarks'=> $this->input->post('remarks')
   	    );					
            $params = array(
				//'general_details_id'=> $general_details_id;
				'assign_user' => $this->input->post('user'),
				'assign_date' => $this->input->post('assign_date'),
				'site' => $this->input->post('site'),
				'case_prority' => $this->input->post('case_prority'),
				'prioritize_from_date' => $this->input->post('prioritize_from_date'),
				'prioritize_to_date' => $this->input->post('prioritize_to_date'),
				'update_status' => $this->input->post('update_status'),
				'consent_date' => $this->input->post('consent_date'),
				'date_of_submission' => $this->input->post('date_of_submission')
            );
            $this->Update_detail_model->update_remarks($datas);
            $this->Update_detail_model->update_general_details($general_details_id,$params);   
            redirect('general_detail/index');
        }
        else
        {   
            $data['bill_book_status'] = $this->Update_detail_model->get_bill_book_status($general_details_id);
	    $data['driving_licence_status'] = $this->Update_detail_model->get_driving_licence_status($general_details_id);
	    $data['policy_paper_status'] = $this->Update_detail_model->get_policy_paper_status($general_details_id);
	    $data['route_permit_status'] = $this->Update_detail_model->get_route_permit_status($general_details_id);
	    $data['fitness_certificate_status'] = $this->Update_detail_model->get_fitness_certificate_status($general_details_id);
	    $data['bill_od_status'] = $this->Update_detail_model->get_bill_od_status($general_details_id);
	    $data['bill_tp_status'] = $this->Update_detail_model->get_bill_tp_status($general_details_id);
            $data['quotation_status'] = $this->Update_detail_model->get_bill_od_status($general_details_id);
	    $data['police_report_status'] = $this->Update_detail_model->get_bill_tp_status($general_details_id);
    	    $data['claim_form_status'] = $this->Update_detail_model->get_claim_form_status($general_details_id);
	//Added for Reference number not implemented
       	    //$data['reference_number_status'] = $this->Update_detail_model->get_reference_number_status($general_details_id);
	//Added content ends here for reference number 

	   $data['remarks']=$this->Update_detail_model->get_remarks($general_details_id);
	    //$this->load->model('insurer_lu_model');
            //$data['insurer_list']=$this->insurer_lu_model->get_all_insurer_lu();
            
            //$data['selected_insurer']=$this->insurer_lu_model->get_insurer_lu($data['general_details']['insurer_id']);
            
            #echo "<pre/>";
            #print_r($data);
            #die;
                
            $this->load->view('includes/header.php');
            $this->load->view('includes/sidebar.php');
            $this->load->view('update_detail/update',$data);
            $this->load->view('includes/footer.php');
	
        }
    }
}
