<?php
class Details extends CI_Controller {

	public function index()
	{
		$generalid= $this->uri->segment(3);
		echo $generalid;
                
                $this->load->model('field_assessment_model');
                $data['general_details_id']=$generalid;
		#type of case		
		$data['case_type']= $this->field_assessment_model->get_type_by_generalid($generalid);
		
		print_r ("case type: ".$data['case_type']['type_of_case']);                
		//foreach ($data['type_of_case'] as $key=>$value){		
		if ($data['case_type']['type_of_case']=='OD' || $data['case_type']['type_of_case']=='Both OD+TP'){                
		$data['field_assessment_info']= $this->field_assessment_model->get_field_assessment_by_general_id($generalid);
		$data['second_od_field_assessment_info']= $this->field_assessment_model->get_second_od_field_assessment_info_by_generalid($generalid);
		$data['final_od_field_assessment_info']= $this->field_assessment_model->get_final_od_field_assessment_by_general_id($generalid);
		



			//print_r($data['second_od_field_assessment_info']);
			//print_r($data['final_od_field_assessment_info']);
			
			}else if ($data['case_type']['type_of_case']=='Only TP'){                
			$data['first_od_field_assessment_info']= $this->field_assessment_model->get_first_od_field_assessment_by_general_id($generalid);
			
		$data['first_tp_field_assessment_info']= $this->field_assessment_model->get_field_assessment_tp_by_general_id($generalid);	
		//print_r($data['first_tp_field_assessment_info']);
		$data['second_tp_field_assessment_info']= $this->field_assessment_model->get_second_tp_field_assessment_info_by_generalid($generalid);
		print_r($data['second_tp_field_assessment_info']);
	
		$data['final_tp_field_assessment_info']= $this->field_assessment_model->get_final_tp_field_assessment_info_by_general_id($generalid);
		//print_r($data['final_tp_field_assessment_info']);			
			}
		if ($data['case_type']['type_of_case']=='Both OD+TP'){                
			$data['od_tp_field_assessment_info']= $this->field_assessment_model->get_od_tp_field_assessment_by_general_id($generalid);
			//print_r($data['od_tp_field_assessment_info']);
			$data['od_tp_second_field_assessment_info_tp']= $this->field_assessment_model->get_second_od_tp_tp_field_assessment_info($generalid);
		
			$data['od_tp_third_field_assessment_info_tp']= $this->field_assessment_model->get_third_od_tp_tp_field_assessment_info($generalid);
		}

		//}
		$this->load->model('policy_paper_model');
                #$data['policy_paper_info']= $this->policy_paper_model->get_policy_paper_by_generalid($generalid);
                $data['policy_paper_info_od']= $this->policy_paper_model->get_policy_paper_by_generalid_od($generalid);
                $data['policy_paper_info_tp']= $this->policy_paper_model->get_policy_paper_by_generalid_tp($generalid);
                
                $this->load->model('bill_book_model');
                #$data['bill_book_info']= $this->bill_book_model->get_bill_book_by_generalid($generalid);
                $data['bill_book_info_od']= $this->bill_book_model->get_bill_book_by_generalid_od($generalid);
                $data['bill_book_info_tp']= $this->bill_book_model->get_bill_book_by_generalid_tp($generalid);
                
                $this->load->model('driving_licence_model');
                $data['driving_licence_info_od']= $this->driving_licence_model->get_driving_licence_by_generalid_od($generalid);
                $data['driving_licence_info_tp']= $this->driving_licence_model->get_driving_licence_by_generalid_tp($generalid);
                
                $this->load->model('other_details_cv_model');
                $data['other_details_cv_info']= $this->other_details_cv_model->get_other_details_cv_by_generalid($generalid);
                
                $this->load->model('report_model');
                $data['report_info']= $this->report_model->get_reports_by_generalid($generalid);
                
                
                $this->load->view('includes/header1.php');
		$this->load->view('includes/sidebar.php');
                $this->load->view('all_details.php', $data);
                $this->load->view('includes/footer1.php');
                
	}
	
	public function add(){
		
		$this->load->view('add_form.php');
		
	}
	
	public function list_all(){
		$this->load->model('All_details');
		$data=$this->All_details->get_list();
		echo "<pre/>";
		print_r($data);
		
		
	}
	
	public function generate_xls(){
		$file="./templates/pv_tp_only.xlsx";
		$this->load->library('excel');
		$objPHPExcel = PHPExcel_IOFactory::load($file);

		$objPHPExcel->setActiveSheetIndex(0)
                            ->setCellValue('A2', "No")
                            ->setCellValue('B11', "Name")
                            ->setCellValue('C11', "Email")
                            ->setCellValue('D13', "2015-02-15")
                            ->setCellValue('D15', "2015-02-25")
							->setCellValue('A11', "No")
                            
							
							;
	
	
		$filename='just_some_random_name.xlsx'; //save our workbook as this file name
		header('Content-Type: application/vnd.ms-excel'); //mime type
		header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
		header('Cache-Control: max-age=0'); //no cache
					
		//save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
		//if you want to save it as .XLSX Excel 2007 format
		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');  
		//force user to download the Excel file without writing it to server's HD
		$objWriter->save('php://output');
	
	}
	
}
?>
