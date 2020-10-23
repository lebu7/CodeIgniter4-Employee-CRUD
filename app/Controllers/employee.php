<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\employeeModel;
 
class employee extends Controller
{
 
    public function index()
    {    
        $model = new employeeModel();
 
        $data['employees_detail'] = $model->orderBy('id', 'DESC')->findAll();
        
        return view('list', $data);
    }    
 
    public function create()
    {    
        return view('add');
    }
 
    public function store()
    {  
 
        helper(['form', 'url']);
         
        $model = new employeeModel();
		
        $data = [
            'first_name' => $this->request->getVar('txtFname'),
            'last_name'  => $this->request->getVar('txtLname'),
            'residence'  => $this->request->getVar('txtResidence'),
            'employee_id'  => $this->request->getVar('txtEid'),
            'email'  => $this->request->getVar('txtEmail'),
            'telephone'  => $this->request->getVar('txtMobile'),
            ];
        $save = $model->insert($data);
		return redirect()->to( base_url('employee') );
    }
 
    public function edit($id = null)
    {
      
     $model = new employeeModel();
 
     $data['employee'] = $model->where('id', $id)->first();
 
     return view('edit', $data);
    }
 
    public function update()
    {  
 
		helper(['form', 'url']);
		 
		$model = new employeeModel();

		$id = $this->request->getVar('id');

		 $data = [
			'first_name' => $this->request->getVar('txtFname'),
			'last_name'  => $this->request->getVar('txtLname'),
			'residence'  => $this->request->getVar('txtResidence'),
			'employee_id'  => $this->request->getVar('txtEid'),
            'email'  => $this->request->getVar('txtEmail'),
			'telephone'  => $this->request->getVar('txtMobile'),
			];

		$save = $model->update($id,$data);

		return redirect()->to( base_url('employee') );
    }
 
    public function delete($id = null){
		$model = new employeeModel();
		$data['user'] = $model->where('id', $id)->delete();
		return redirect()->to( base_url('employee') );
    }
}

?>