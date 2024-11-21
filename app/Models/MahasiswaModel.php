<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';

    public function getAllData() {
        $builder = $this->db->table($this->table);
        $returnData = $builder->get()->getResult() ?? "-";
        return $returnData ?? "-";
    }

    public function insertData($data){
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function findData($nim){
        $builder = $this->db->table($this->table);
    }
}
