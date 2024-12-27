<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JabatanModel;
use App\Models\PegawaiModel;
use CodeIgniter\HTTP\ResponseInterface;

class PegawaiController extends BaseController
{
    protected $modelPegawai;

    public function __construct()
    {
        $this->modelPegawai = new PegawaiModel();
    }

    public function index()
    {
        $data['pegawai'] = $this->modelPegawai->getPegawaiWithJabatan();
        return view('pegawai/index', $data);
    }

    public function show($id)
    {
        //
    }

    public function create()
    {
        $modelJabatan = new JabatanModel();
        $data['jabatan'] = $modelJabatan->findAll();
        return view('pegawai/create', $data);
    }

    public function store()
    {
        $data = [
            'nama_pegawai' => $this->request->getpost('nama_pegawai'),
            'alamat' => $this->request->getpost('alamat'),
            'telepon' => $this->request->getpost('telepon'),
            'jabatan_id' => $this->request->getpost('jabatan_id'),
        ];

        $this->modelPegawai->save($data);
        return redirect()->to('pegawai');
    }

    public function edit($id)
    {
        $modelJabatan = new JabatanModel();
        $data['jabatan'] = $modelJabatan->findAll();

        $data['pegawai'] = $this->modelPegawai->find($id);
        return view('pegawai/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'id' => $id,
            'nama_pegawai' => $this->request->getpost('nama_pegawai'),
            'alamat' => $this->request->getpost('alamat'),
            'telepon' => $this->request->getpost('telepon'),
            'jabatan_id' => $this->request->getpost('jabatan_id'),
        ];

        $this->modelPegawai->save($data);
        return redirect()->to('pegawai');
    }

    public function delete($id)
    {
        $this->modelPegawai->delete($id);
        return redirect()->to('pegawai');
    }
}