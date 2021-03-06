<?php
/* 
 * Generated by CRUDigniter v1.3 Beta 
 * www.crudigniter.com
 */
 
class Policy_paper extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Policy_paper_model');
    }
    
    /*
     * Listing of policy_paper
     */
    function index()
    {
        $data['policy_paper'] = $this->Policy_paper_model->get_all_policy_paper();
        $this->load->view('policy_paper/index',$data);
    }
    
    /*
     * Adding new policy_paper
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('general_details_id','General Details Id','integer|required');
		$this->form_validation->set_rules('policy_no','Policy No','max_length[20]');
		$this->form_validation->set_rules('insured','Insured','max_length[255]');
		$this->form_validation->set_rules('account','Account','max_length[255]');
		$this->form_validation->set_rules('sum_insured','Sum Insured','integer');
		$this->form_validation->set_rules('risk_covered','Risk Covered','max_length[255]');
		$this->form_validation->set_rules('endorsement_no','Endorsement No','max_length[255]');
		$this->form_validation->set_rules('type_of_policy','Type Of Policy','required|max_length[255]');
		$this->form_validation->set_rules('claim_no','Claim No','max_length[255]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'general_details_id' => $this->input->post('general_details_id'),
				'policy_no' => $this->input->post('policy_no'),
				'insured' => $this->input->post('insured'),
				'account' => $this->input->post('account'),
				'sum_insured' => $this->input->post('sum_insured'),
				'risk_covered' => $this->input->post('risk_covered'),
				'endorsement_no' => $this->input->post('endorsement_no'),
				'type_of_policy' => $this->input->post('type_of_policy'),
				'period_of_cover' => $this->input->post('period_of_cover'),
                'period_of_cover_nep' => $this->input->post('period_of_cover_nep'),
				'date_of_loss' => $this->input->post('date_of_loss'),
                'date_of_loss_nep' => $this->input->post('date_of_loss_nep'),
				'claim_no' => $this->input->post('claim_no'),
				'date_of_loss_claim_form' => $this->input->post('date_of_loss_claim_form'),
		'date_of_loss_claim_form_nep' => $this->input->post('date_of_loss_claim_form_nep'),		
                'od_or_tp' => $this->input->post('od_or_tp'),
            );
            
            $policy_paper_id = $this->Policy_paper_model->add_policy_paper($params);
            redirect('details/index/'.$this->input->post('general_details_id'));
        }
        else
        {
            $data['general_details_id']= $this->uri->segment(3);
            $data['od_or_tp']= $this->uri->segment(4);
            $this->load->view('includes/header.php');
            $this->load->view('includes/sidebar.php');
            $this->load->view('policy_paper/add',$data);
            $this->load->view('includes/footer.php');
        }
    }
    
    /*
     * Editing policy_paper
     */
    function edit($policy_id)
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('general_details_id','General Details Id','integer|required');
		$this->form_validation->set_rules('policy_no','Policy No','max_length[20]');
		$this->form_validation->set_rules('insured','Insured','max_length[20]');
		$this->form_validation->set_rules('account','Account','max_length[30]');
		$this->form_validation->set_rules('sum_insured','Sum Insured','integer');
		$this->form_validation->set_rules('risk_covered','Risk Covered','max_length[20]');
		$this->form_validation->set_rules('endorsement_no','Endorsement No','max_length[30]');
		$this->form_validation->set_rules('type_of_policy','Type Of Policy','required|max_length[30]');
		$this->form_validation->set_rules('claim_no','Claim No','max_length[10]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'general_details_id' => $this->input->post('general_details_id'),
				'policy_no' => $this->input->post('policy_no'),
				'insured' => $this->input->post('insured'),
				'account' => $this->input->post('account'),
				'sum_insured' => $this->input->post('sum_insured'),
				'risk_covered' => $this->input->post('risk_covered'),
				'endorsement_no' => $this->input->post('endorsement_no'),
				'type_of_policy' => $this->input->post('type_of_policy'),
				'period_of_cover' => $this->input->post('period_of_cover'),
                'period_of_cover_nep' => $this->input->post('period_of_cover_nep'),
				'date_of_loss' => $this->input->post('date_of_loss'),
		'date_of_loss_nep' => $this->input->post('date_of_loss_nep'),
						
                'claim_no' => $this->input->post('claim_no'),
				'date_of_loss_claim_form' => $this->input->post('date_of_loss_claim_form'),
		'date_of_loss_claim_form_nep' => $this->input->post('date_of_loss_claim_form_nep'),
						
                'od_or_tp' => $this->input->post('od_or_tp'),
            );

            $this->Policy_paper_model->update_policy_paper($policy_id,$params);            
            redirect('details/index/'.$this->input->post('general_details_id'));
        }
        else
        {   
            $data['policy_paper'] = $this->Policy_paper_model->get_policy_paper($policy_id);
            $data['general_details_id']= $this->uri->segment(3);
            $this->load->view('includes/header.php');
            $this->load->view('includes/sidebar.php');
            $this->load->view('policy_paper/edit',$data);
            $this->load->view('includes/footer.php');
        }
    }
    
    /*
     * Deleting policy_paper
     */
    function remove($policy_id, $general_details_id)
    {
        $this->Policy_paper_model->delete_policy_paper($policy_id);
        redirect('details/index/'.$general_details_id);
    }
}
