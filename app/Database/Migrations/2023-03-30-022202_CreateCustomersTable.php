<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCustomersTable extends Migration
{
   public function up()
   {
      $this->forge->addField([
         'id'                 => [
            'type'              => 'INT',
            'constraint'        => 11,
            'unsigned'          => true,
            'auto_increment'    => true,
         ],
         'company_name'        => [
            'type'              => 'VARCHAR',
            'constraint'        => 255,
            'null'              => true,
         ],
         'first_name'        => [
            'type'              => 'VARCHAR',
            'constraint'        => 100,
            'null'              => true,
         ],
         'last_name'         => [
            'type'              => 'VARCHAR',
            'constraint'        => 100,
            'null'              => true,
         ],
         'email_address'        => [
            'type'              => 'VARCHAR',
            'constraint'        => 150,
            'null'              => false,
         ],
         'phone_number' => [
            'type'              => 'VARCHAR',
            'constraint'        => 100,
            'null'              => false,
         ],
         'complete_address' => [
            'type'              => 'TEXT',
            'null'              => false,
         ],
         'customer_username'        => [
            'type'              => 'VARCHAR',
            'constraint'        => 150,
            'null'              => false,
         ],
         'customer_password'     => [
            'type'              => 'VARCHAR',
            'constraint'        => 100,
            'null'              => true,
         ],
         'auth_code' =>[
            'type'              => 'VARCHAR',
            'constraint'        => 100,
            'null'              => true,
         ],
         'id_number'          => [
            'type'              => 'VARCHAR',
            'constraint'        => 100,
            'null'              => true,
         ],
         'id_picture'          => [
            'type'              => 'VARCHAR',
            'constraint'        => 100,
            'null'              => true,
         ],
         'season_pass_picture' => [
            'type'              => 'TEXT',
            'null'              => false,
         ],
         'season_pass_expiration' => [
            'type'              => 'DATETIME',
            'null'              => true,
         ],
         'season_pass_status' => [
            'type'              => 'ENUM',
            'constraint'        => ['active','expired'],
            'null'              => true,
         ],
         'referred_by'        => [
            'type'              => 'VARCHAR',
            'constraint'        => 100,
            'null'              => true,
         ],
         'customer_status'    => [
            'type'              => 'ENUM',
            'constraint'        => ['1','0'],
            'null'              => true,
         ],
         'created_by'         => [
             'type'              => 'INT',
             'constraint'        => 11,
             'unsigned'          => true,
             'null'              => true,
         ],
         'created_date'       => [
             'type'              => 'DATETIME',
             'null'              => true,
         ],
         'updated_by'         => [
             'type'              => 'INT',
             'constraint'        => 11,
             'unsigned'          => true,
             'null'              => true,
         ],
         'updated_date'       => [
             'type'              => 'DATETIME',
             'null'              => true,
         ],
      ]);
      $this->forge->addKey('id', true);
      $this->forge->createTable('customers');
   }

   public function down()
   {
      $this->forge->dropTable('customers');
   }
}


// customers
// id == season_pass_number
// company_name
// first_name
// last_name
// email_address
// customer_username
// customer_password
// auth_code
// phone_number
// Street Address
// Town / City
// State / Country
// Post Code / zip
// id_number
// id_picture
// season_pass_picture => text
// season_pass_expiration (date)
// season_pass_status => [expired | active]
// status

// referred by (optional)
// Order Notes (optional)