<?php

namespace App\Controllers\Portal;

use App\Controllers\BaseController;

class CustomerController extends BaseController
{
   public function __construct()
   {
      $this->customers = model('Portal/Customers');
   }

   public function signUp()
   {
      $fields = $this->request->getPost();

      
   }
}
