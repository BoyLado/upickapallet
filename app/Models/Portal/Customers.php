<?php

namespace App\Models\Portal;

use CodeIgniter\Model;

class Customers extends Model
{
   protected $DBGroup          = 'default';
   protected $table            = 'customers';
   protected $primaryKey       = 'id';
   protected $useAutoIncrement = true;
   protected $insertID         = 0;
   protected $returnType       = 'array';
   protected $useSoftDeletes   = false;
   protected $protectFields    = true;
   protected $allowedFields    = [];

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

   ////////////////////////////////////////////////////////////
   ///// IndexController->signUp();
   ////////////////////////////////////////////////////////////
   public function validateCustomerEmail($emailAddress)
   {
      $columns = [
        'id',
        'first_name',
        'last_name'
      ];

      $where = [
         'email_address'     => $emailAddress
      ];

      $builder = $this->db->table('customers')->select($columns)->where($where);
      $query = $builder->get();
      return  $query->getRowArray();
   }

   ////////////////////////////////////////////////////////////
   ///// IndexController->signUp();
   ////////////////////////////////////////////////////////////
   public function addCustomer($arrData)
   {
      try {
          $this->db->transStart();
              $builder = $this->db->table('customers');
              $builder->insert($arrData);
              $insertId = $this->db->insertID();
          $this->db->transComplete();
          return ($this->db->transStatus() === TRUE)? $insertId : 0;
      } catch (PDOException $e) {
          throw $e;
      }
   }

   ////////////////////////////////////////////////////////////
   ///// IndexController->login();
   ////////////////////////////////////////////////////////////
   public function validateLogIn($logInRequirements)
   {
       $columns = [
         'id',
         'first_name',
         'last_name'
       ];

       $where = [
           'customer_password' => $logInRequirements['customer_password'],
           'customer_status'   => 1 
       ];

       $orWhere = [
           'email_address'       => $logInRequirements['email_address'],
           'customer_username'   => $logInRequirements['customer_username']
       ];

       $builder = $this->db->table('customers')->select($columns)->where($where)->groupStart()->orWhere($orWhere)->groupEnd();
       $query = $builder->get();
       return  $query->getRowArray();
   }
   

}
