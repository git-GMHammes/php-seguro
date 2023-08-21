<?php

namespace App\Models;

use CodeIgniter\Database\Query;
use CodeIgniter\Model;
// use system\Database\Exceptions\DatabaseException;

class Dbe40f447aa4cbaf1536e61702514b60 extends Model
{

    protected $DBGroup = DATABASE_CONNECTION_DATA;

    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $allowedFields = [];
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $dbInsert;
    protected $dbReplace;
    protected $dbRead;
    protected $message;
    protected $affectedRows;

    public function dbRead($keyVariable = NULL, $keyValue = NULL)
    {
        $allowedFields = [
            'id',
            'profile',
            'login',
            'password'
        ];
        try {
            if ($keyVariable !== NULL && $keyValue !== NULL) {
                $this->dbRead = $this->where($keyVariable, $keyValue);
            } elseif ($keyVariable !== NULL && $keyValue == NULL) {
                $this->dbRead = $this->select($allowedFields);
            } else {
                $this->dbRead = $this->select($allowedFields);
                $this->affectedRows = $this->db->affectedRows();
            }
        } catch (\Throwable $th) {
            $this->message['message']['danger'] = array(
                $th->getMessage(),
            );
            session()->set('message',  $this->message);
            session()->markAsTempdata('message', 5);
        }
        return $this;
    }
}
