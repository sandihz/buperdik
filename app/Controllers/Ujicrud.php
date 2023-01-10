<?php
// ADEL CODEIGNITER 4 CRUD GENERATOR

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\UjicrudModel;

class Ujicrud extends BaseController
{
	
    protected $ujicrudModel;
    protected $validation;
	
	public function __construct()
	{
	    $this->ujicrudModel = new UjicrudModel();
       	$this->validation =  \Config\Services::validation();
		
	}
	
	public function index()
	{

	    $data = [
                'controller'    	=> 'ujicrud',
                'title'     		=> 'ujicrud'				
			];
		
		return view('ujicrud', $data);
			
	}

	public function getAll()
	{
 		$response = $data['data'] = array();	

		$result = $this->ujicrudModel->select()->findAll();
		
		foreach ($result as $key => $value) {
							
			$ops = '<div class="dropdown">
  						<a class="btn btn-sm btn-secondary dropdown-toggle btn-info" href="#" role="button" id="dropdownMenuButton'. $value->id .'" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    						<i class="fa-solid fa-pen-square"></i>  </a>
  						</a>
  						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton'. $value->id .'">
    						<a class="dropdown-item text-info" onClick="save('. $value->id .')"><i class="fa-solid fa-pen-to-square"></i>   ' .  lang("App.edit")  . '</a>
    						<a class="dropdown-item text-orange"><i class="fa-solid fa-copy"></i>   ' .  lang("App.copy")  . '</a>
    						<div class="dropdown-divider"></div>
    						<a class="dropdown-item text-danger" onClick="remove('. $value->id .')"><i class="fa-solid fa-trash"></i>   ' .  lang("App.delete")  . '</a>
  						</div>
					</div>';

			$data['data'][$key] = array(
				$value->id,
$value->nama,
$value->alamat,
$value->tanggal,

				$ops				
			);
		} 

		return $this->response->setJSON($data);		
	}
	
	public function getOne()
	{
 		$response = array();
		
		$id = $this->request->getPost('id');
		
		if ($this->validation->check($id, 'required|numeric')) {
			
			$data = $this->ujicrudModel->where('id' ,$id)->first();
			
			return $this->response->setJSON($data);	
				
		} else {
			throw new \CodeIgniter\Exceptions\PageNotFoundException();
		}	
		
	}	

	public function add()
	{
        $response = array();

		$fields['id'] = $this->request->getPost('id');
$fields['nama'] = $this->request->getPost('nama');
$fields['alamat'] = $this->request->getPost('alamat');
$fields['tanggal'] = $this->request->getPost('tanggal');


        $this->validation->setRules([
			            'nama' => ['label' => 'Nama', 'rules' => 'permit_empty|min_length[0]|max_length[256]'],
            'alamat' => ['label' => 'Alamat', 'rules' => 'permit_empty|min_length[0]|max_length[256]'],
            'tanggal' => ['label' => 'Tanggal', 'rules' => 'permit_empty|valid_date|min_length[0]|max_length[256]'],

        ]);

        if ($this->validation->run($fields) == FALSE) {

            $response['success'] = false;
			$response['messages'] = $this->validation->getErrors();//Show Error in Input Form
			
        } else {

            if ($this->ujicrudModel->insert($fields)) {
												
                $response['success'] = true;
                $response['messages'] = lang("App.insert-success") ;	
				
            } else {
				
                $response['success'] = false;
                $response['messages'] = lang("App.insert-error") ;
				
            }
        }
		
        return $this->response->setJSON($response);
	}

	public function edit()
	{
        $response = array();
		
		$fields['id'] = $this->request->getPost('id');
$fields['nama'] = $this->request->getPost('nama');
$fields['alamat'] = $this->request->getPost('alamat');
$fields['tanggal'] = $this->request->getPost('tanggal');


        $this->validation->setRules([
			            'nama' => ['label' => 'Nama', 'rules' => 'permit_empty|min_length[0]|max_length[256]'],
            'alamat' => ['label' => 'Alamat', 'rules' => 'permit_empty|min_length[0]|max_length[256]'],
            'tanggal' => ['label' => 'Tanggal', 'rules' => 'permit_empty|valid_date|min_length[0]|max_length[256]'],

        ]);

        if ($this->validation->run($fields) == FALSE) {

            $response['success'] = false;
			$response['messages'] = $this->validation->getErrors();//Show Error in Input Form

        } else {

            if ($this->ujicrudModel->update($fields['id'], $fields)) {
				
                $response['success'] = true;
                $response['messages'] = lang("App.update-success");	
				
            } else {
				
                $response['success'] = false;
                $response['messages'] = lang("App.update-error");
				
            }
        }
		
        return $this->response->setJSON($response);	
	}
	
	public function remove()
	{
		$response = array();
		
		$id = $this->request->getPost('id');
		
		if (!$this->validation->check($id, 'required|numeric')) {

			throw new \CodeIgniter\Exceptions\PageNotFoundException();
			
		} else {	
		
			if ($this->ujicrudModel->where('id', $id)->delete()) {
								
				$response['success'] = true;
				$response['messages'] = lang("App.delete-success");	
				
			} else {
				
				$response['success'] = false;
				$response['messages'] = lang("App.delete-error");
				
			}
		}	
	
        return $this->response->setJSON($response);		
	}	
		
}	
