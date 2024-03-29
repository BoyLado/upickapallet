<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class NavigationController extends BaseController
{
    public function index()
    {
        if($this->session->has('upp_customer_loggedIn'))
        {
            if($this->session->get('upp_customer_loggedIn'))
            {
                return redirect()->to(base_url() . '/portal/home');
            }
        }
        $data['pageTitle'] = "Home | U Pick A Pallet";
        $data['customScripts'] = "home";
        return $this->slice->view('home', $data);
    }

    public function home()
    {
      if($this->session->has('upp_customer_loggedIn'))
      {
          if($this->session->get('upp_customer_loggedIn'))
          {
              return redirect()->to(base_url() . '/portal/home');
          }
      }
      $data['pageTitle'] = "Home | U Pick A Pallet";
      $data['customScripts'] = "home";
      return $this->slice->view('home', $data);
    }

    public function whoWeAre()
    {
      if($this->session->has('upp_customer_loggedIn'))
      {
          if($this->session->get('upp_customer_loggedIn'))
          {
              return redirect()->to(base_url() . '/portal/home');
          }
      }
      $data['pageTitle'] = "Who We Are? | U Pick A Pallet";
      return $this->slice->view('who_we_are', $data);
    }

    public function contactUs()
    {
      if($this->session->has('upp_customer_loggedIn'))
      {
          if($this->session->get('upp_customer_loggedIn'))
          {
              return redirect()->to(base_url() . '/portal/home');
          }
      }
      $data['pageTitle'] = "Contact Us | U Pick A Pallet";
      $data['customScripts'] = "contact_us";
      return $this->slice->view('contact_us', $data);
    }

    public function faqs()
    {
      if($this->session->has('upp_customer_loggedIn'))
      {
          if($this->session->get('upp_customer_loggedIn'))
          {
              return redirect()->to(base_url() . '/portal/home');
          }
      }
      $data['pageTitle'] = "FAQs | U Pick A Pallet";
      $data['customScripts'] = "faqs";
      return $this->slice->view('faqs', $data);
    }

    public function signUp()
    {
     $data['pageTitle'] = "Sign Up  | U Pick A Pallet";
     return $this->slice->view('sign_up', $data);
    }

    public function login()
    {
        if($this->session->has('upp_customer_loggedIn'))
        {
            if($this->session->get('upp_customer_loggedIn'))
            {
                return redirect()->to(base_url() . '/portal/auction-dashboard');
            }
        }
        $data['pageTitle'] = "Login | U Pick A Pallet";
        $data['userAuthCode'] = "";
        return $this->slice->view('login', $data);
    }

    

    public function forgotPassword()
    {
        if($this->session->has('upp_customer_loggedIn'))
        {
            if($this->session->get('upp_customer_loggedIn'))
            {
                return redirect()->to(base_url() . '/portal/auction-dashboard');
            }
        }
        $data['pageTitle'] = "Forgot Password | U Pick A Pallet";
        return $this->slice->view('forgot_password', $data);
    }

    public function changePassword($userId, $userAuthCode, $passwordAuthCode)
    {
        if($this->session->has('upp_customer_loggedIn'))
        {
            if($this->session->get('upp_customer_loggedIn'))
            {
                return redirect()->to(base_url() . '/portal/auction-dashboard');
            }
        }
        $data['pageTitle'] = "Change Password | U Pick A Pallet";
        $data['userId'] = $userId;
        $data['userAuthCode'] = $userAuthCode;
        $data['passwordAuthCode'] = $passwordAuthCode;
        return $this->slice->view('change_password', $data);
    }

    
}
