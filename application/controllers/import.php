<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

	
    class Import extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->library('form_validation');
			
		}
	
		public function index()
		{
			$data['title'] = 'Import Excel';
			$data['siswa'] = $this->db->get('siswa')->result();
			$this->load->view('import/index', $data);
		}
	
		public function create()
		{
			$data['title'] = "Upload File Excel";
			$this->load->view('import/create', $data);
		}
        public function excel()
        {
            if(isset($_FILES["file"]["name"])){
                  // upload
                $file_tmp = $_FILES['file']['tmp_name'];
                $file_name = $_FILES['file']['name'];
                $file_size =$_FILES['file']['size'];
                $file_type=$_FILES['file']['type'];
                // move_uploaded_file($file_tmp,"uploads/".$file_name); // simpan filenya di folder uploads
                
                $object = PHPExcel_IOFactory::load($file_tmp);
        
                foreach($object->getWorksheetIterator() as $worksheet){
        
                    $highestRow = $worksheet->getHighestRow();
                    $highestColumn = $worksheet->getHighestColumn();
        
                    for($row=2; $row<=$highestRow; $row++){
        
                        $tugas = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
                        $uts = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                        $uas = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                        $ketidakhadiran = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
                        $ekskul = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
                        $class = $worksheet->getCellByColumnAndRow(5, $row)->getValue();

                        $data[] = array(
                            'tugas'          => $tugas,
                            'uts'          =>$uts,
                            'uas'         =>$uas,
                            'ketidakhadiran'  =>$ketidakhadiran,
                            'ekskul'         =>$ekskul,
                            'class'  =>$class,
                        );
        
                    } 
        
                }
        
                $this->db->insert_batch('siswa', $data);
        
                $message = array(
                    'message'=>'<div class="alert alert-success">Import file excel berhasil disimpan di database</div>',
                );
                
                $this->session->set_flashdata($message);
                redirect('import');
            }
            else
            {
                 $message = array(
                    'message'=>'<div class="alert alert-danger">Import file gagal, coba lagi</div>',
                );
                
                $this->session->set_flashdata($message);
                redirect('import');
            }
        }

    }
?>

                