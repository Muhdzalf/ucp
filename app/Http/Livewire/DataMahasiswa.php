<?php

namespace App\Http\Livewire;

use App\Models\Mahasiswa;
use Livewire\Component;

class DataMahasiswa extends Component
{
    public $data_mahasiswa;
    public $mahasiswaid;
    public $isOpen;

    public function render()
    {
        $this->data_mahasiswa = Mahasiswa::all();
        return view('livewire.data-mahasiswa');
    }

    public function edit($id)
    {
        $data_mahasiswa = Mahasiswa::findOrFail($id);
        $this->mahasiswaid = $id;
        $this->nim = $data_mahasiswa->nim;
        $this->nama = $data_mahasiswa->nama;
        $this->alamat = $data_mahasiswa->alamat;

        $this->openModal();
    }

    public function delete($id)
    {
        Mahasiswa::find($id)->delete();
        session()->flash('message', 'Data Mahasiswa Berhasil dihapus.');
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }
}
