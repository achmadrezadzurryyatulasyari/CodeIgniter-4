<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JabatanModel;
use CodeIgniter\HTTP\ResponseInterface;

class JabatanController extends BaseController
{
    protected $modelJabatan;

    public function __construct()
    {
        if(!session()->get('login')){
            redirect()->to('/login')->with('error', 'harus login dulu')
            ->send();
            exit;
        }
        $this->modelJabatan = new JabatanModel();
    }

    public function index()
    {
        
        $data['jabatan'] = $this->modelJabatan->findAll();
        return view('jabatan/index', $data);
    }

    public function show($id)
    {
        //
    }

    public function create()
    {
        return view('jabatan/create');
    }

    public function store()
    {
        $data = [
            'nama_jabatan' => $this->request->getpost('nama_jabatan'),
            'deskripsi_jabatan' => $this->request->getpost('deskripsi_jabatan'),
        ];

        $this->modelJabatan->save($data);
        return redirect()->to('jabatan');
    }

    public function edit($id)
    {
        $data['jabatan'] = $this->modelJabatan->find($id);
        return view('jabatan/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'id' => $id,
            'nama_jabatan' => $this->request->getpost('nama_jabatan'),
            'deskripsi_jabatan' => $this->request->getpost('deskripsi_jabatan'),
        ];

        $this->modelJabatan->save($data);
        return redirect()->to('jabatan');
    }

    public function delete($id)
    {
        $this->modelJabatan->delete($id);
        return redirect()->to('jabatan');
    }
}
