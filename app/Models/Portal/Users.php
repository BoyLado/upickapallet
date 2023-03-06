<?php

namespace App\Models\Portal;

use CodeIgniter\Model;

class Users extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'first_name',
        'last_name',
        'position',
        'picture',
        'user_name',
        'user_email',
        'user_password',
        'user_status',
        'created_date',
        'updated_date'
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    ///////////////////////////////////////////// OUTSIDE SCRIPTS ///////////////////////////////////

    ////////////////////////////////////////////////////////////
    ///// IndexController->login();
    ///// UserController->editPassword();
    ////////////////////////////////////////////////////////////
    public function validateLogIn($logInRequirements)
    {
        $columns = [
          'id as user_id',
          'first_name',
          'last_name'
        ];

        $where = [
            'user_password' => $logInRequirements['user_password'],
            'user_status'   => 1 
        ];

        $orWhere = [
            'user_email' => $logInRequirements['user_email'],
            'user_name'  => $logInRequirements['user_name']
        ];

        $builder = $this->db->table('users')->select($columns)->where($where)->groupStart()->orWhere($orWhere)->groupEnd();
        $query = $builder->get();
        return  $query->getRowArray();
    }

    ////////////////////////////////////////////////////////////
    ///// IndexController->forgotPassword();
    ////////////////////////////////////////////////////////////
    public function createPasswordAuthCode($arrData, $emailReceiver)
    {
        try {
            $this->db->transStart();
                $builder = $this->db->table('users');
                $builder->where('user_email',$emailReceiver);
                $builder->update($arrData);
            $this->db->transComplete();
            return ($this->db->transStatus() === TRUE)? 1 : 0;
        } catch (PDOException $e) {
            throw $e;
        }
    }

    ////////////////////////////////////////////////////////////
    ///// IndexController->forgotPassword();
    ///// UserController->inviteNewUser();
    ////////////////////////////////////////////////////////////
    public function loadUser($whereParams)
    {
        $columns = [
            'id as user_id',
            'first_name',
            'last_name',
            'position',
            'picture'
        ];

        $builder = $this->db->table('users');
        $builder->where($whereParams);
        $builder->select($columns);        
        $query = $builder->get();
        return  $query->getRowArray();
    }

    ////////////////////////////////////////////////////////////
    ///// IndexController->changePassword()
    ////////////////////////////////////////////////////////////
    public function changePassword($arrData, $whereParams)
    {
        try {
            $this->db->transStart();
                $builder = $this->db->table('users');
                $builder->where($whereParams);
                $builder->update($arrData);
            $this->db->transComplete();
            return ($this->db->transStatus() === TRUE)? 1 : 0;
        } catch (PDOException $e) {
            throw $e;
        }
    }

    ////////////////////////////////////////////////////////////
    ///// IndexController->signUp();
    ////////////////////////////////////////////////////////////
    public function signUp($arrData, $whereParams)
    {
        try {
            $this->db->transStart();
                $builder = $this->db->table('users');
                $builder->where($whereParams);
                $builder->update($arrData);
                $result = $this->db->affectedRows();
            $this->db->transComplete();
            return ($this->db->transStatus() === TRUE)? $result : 0;
        } catch (PDOException $e) {
            throw $e;
        }
    }



    ///////////////////////////////////////////// INSIDE SCRIPTS ///////////////////////////////////



    ////////////////////////////////////////////////////////////
    ///// UserController->loadUsers();
    ///// UserController->loadPendingInvites();
    ////////////////////////////////////////////////////////////
    public function loadUsers($whereParams)
    {
        $columns = [
            'id as user_id',
            'first_name',
            'last_name',
            'user_email',
            'user_status'
        ];

        $builder = $this->db->table('users')->select($columns)->where($whereParams);
        $query = $builder->get();
        return  $query->getResultArray();
    }

    ////////////////////////////////////////////////////////////
    ///// UserController->inviteNewUser();
    ////////////////////////////////////////////////////////////
    public function inviteNewUser($arrData)
    {
        try {
            $this->db->transStart();
                $builder = $this->db->table('users');
                $builder->insert($arrData);
            $this->db->transComplete();
            return ($this->db->transStatus() === TRUE)? 1 : 0;
        } catch (PDOException $e) {
            throw $e;
        }
    }


    ////////////////////////////////////////////////////////////
    ///// UserController->loadProfile()
    ////////////////////////////////////////////////////////////
    public function loadProfile($userId)
    {
        $columns = [
          'id as user_id',
          'CONCAT(first_name," ",last_name) as complete_name',
          'position',
          'picture'
        ];

        $builder = $this->db->table('users')->select($columns)->where('id',$userId);
        $query = $builder->get();
        return  $query->getRowArray();
    }

    ////////////////////////////////////////////////////////////
    ///// UserController->changeProfilePicture()
    ////////////////////////////////////////////////////////////
    public function changeProfilePicture($arrData, $userId)
    {
        try {
            $this->db->transStart();
                $builder = $this->db->table('users');
                $builder->where('id',$userId);
                $builder->update($arrData);
            $this->db->transComplete();
            return ($this->db->transStatus() === TRUE)? 1 : 0;
        } catch (PDOException $e) {
            throw $e;
        }
    }

    ////////////////////////////////////////////////////////////
    ///// UserController->loadDetails()
    ////////////////////////////////////////////////////////////
    public function loadDetails($userId)
    {
        $columns = [
          'id as user_id',
          'first_name',
          'last_name',
          'position',
          'user_email',
          'user_name'
        ];

        $builder = $this->db->table('users')->select($columns)->where('id',$userId);
        $query = $builder->get();
        return  $query->getRowArray();
    }

    ////////////////////////////////////////////////////////////
    ///// UserController->editDetails()
    ////////////////////////////////////////////////////////////
    public function editDetails($arrData, $userId)
    {
        try {
            $this->db->transStart();
                $builder = $this->db->table('users');
                $builder->where('id',$userId);
                $builder->update($arrData);
            $this->db->transComplete();
            return ($this->db->transStatus() === TRUE)? 1 : 0;
        } catch (PDOException $e) {
            throw $e;
        }
    }

    ////////////////////////////////////////////////////////////
    ///// UserController->editPassword()
    ////////////////////////////////////////////////////////////
    public function editPassword($arrData, $userId)
    {
        try {
            $this->db->transStart();
                $builder = $this->db->table('users');
                $builder->where('id',$userId);
                $builder->update($arrData);
            $this->db->transComplete();
            return ($this->db->transStatus() === TRUE)? 1 : 0;
        } catch (PDOException $e) {
            throw $e;
        }
    }

    // Sample on user roles
    public function addRole($arrRole)
    {
        try {
            $this->db->transStart();
                $builder = $this->db->table('roles');
                $builder->insert($arrRole);
            $this->db->transComplete();
            return ($this->db->transStatus() === TRUE)? 1 : 0;
        } catch (PDOException $e) {
            throw $e;
        }
    }

    public function selectRole($roleId)
    {
        $columns = [
          'id',
          'role_name',
          'access_modules',
          'access_fields'
        ];

        $builder = $this->db->table('roles')->select($columns)->where('id',$roleId);
        $query = $builder->get();
        return  $query->getRowArray();
    }
}
