<?php

namespace App\Controllers\Portal;

use App\Controllers\BaseController;

class NavigationController extends BaseController
{
    public function __construct()
    {
        // $this->campaigns        = model('Portal/Campaigns');
        // $this->contacts         = model('Portal/Contacts');
        // $this->organizations    = model('Portal/Organizations');
        $this->users        = model('Portal/Users');
    }

    public function home()
    {
        if($this->session->has('upp_customer_loggedIn'))
        {
            if($this->session->get('upp_customer_loggedIn'))
            {
                $data['pageTitle'] = "Home | U Pick A Pallet";
                $data['customScripts'] = "home";
                return $this->slice->view('portal.home', $data);
            }
            else
            {
                return redirect()->to(base_url());
            }
        }
        else
        {
            return redirect()->to(base_url());
        }
    }

    public function whoWeAre()
    {
      if($this->session->has('upp_customer_loggedIn'))
      {
          if($this->session->get('upp_customer_loggedIn'))
          {
              $data['pageTitle'] = "Who We Are? | U Pick A Pallet";
               return $this->slice->view('portal.who_we_are', $data);
          }
          else
          {
              return redirect()->to(base_url());
          }
      }
      else
      {
          return redirect()->to(base_url());
      }
    }

    public function contactUs()
    {
      if($this->session->has('upp_customer_loggedIn'))
      {
          if($this->session->get('upp_customer_loggedIn'))
          {
              $data['pageTitle'] = "Contact Us | U Pick A Pallet";
              $data['customScripts'] = "contact_us";
              return $this->slice->view('portal.contact_us', $data);
          }
          else
          {
              return redirect()->to(base_url());
          }
      }
      else
      {
          return redirect()->to(base_url());
      }
    }

    public function faqs()
    {
      if($this->session->has('upp_customer_loggedIn'))
      {
          if($this->session->get('upp_customer_loggedIn'))
          {
              $data['pageTitle'] = "FAQs | U Pick A Pallet";
              $data['customScripts'] = "faqs";
              return $this->slice->view('portal.faqs', $data);
          }
          else
          {
              return redirect()->to(base_url());
          }
      }
      else
      {
          return redirect()->to(base_url());
      }
    }

    public function auctionBidders()
    {
        if($this->session->has('upp_customer_loggedIn'))
        {
            if($this->session->get('upp_customer_loggedIn'))
            {
                $data['pageTitle'] = "Bidders | UPP Auction Services";
                $data['customScripts'] = 'auction_bidders';
                return $this->slice->view('portal.auction_bidders', $data);
            }
            else
            {
                return redirect()->to(base_url());
            }
        }
        else
        {
            return redirect()->to(base_url());
        }
    }

    public function auctionItems()
    {
        if($this->session->has('upp_customer_loggedIn'))
        {
            if($this->session->get('upp_customer_loggedIn'))
            {
                $data['pageTitle'] = "Items | UPP Auction Services";
                $data['customScripts'] = 'auction_items';
                return $this->slice->view('portal.auction_items', $data);
            }
            else
            {
                return redirect()->to(base_url());
            }
        }
        else
        {
            return redirect()->to(base_url());
        }
    }

    public function auctionWinners()
    {
        if($this->session->has('upp_customer_loggedIn'))
        {
            if($this->session->get('upp_customer_loggedIn'))
            {
                $data['pageTitle'] = "Winners | UPP Auction Services";
                $data['customScripts'] = 'auction_winners';
                return $this->slice->view('portal.auction_winners', $data);
            }
            else
            {
                return redirect()->to(base_url());
            }
        }
        else
        {
            return redirect()->to(base_url());
        }
    }

    public function auctionPayments()
    {
        if($this->session->has('upp_customer_loggedIn'))
        {
            if($this->session->get('upp_customer_loggedIn'))
            {
                $data['pageTitle'] = "Payments | UPP Auction Services";
                $data['customScripts'] = 'auction_payments';
                return $this->slice->view('portal.auction_payments', $data);
            }
            else
            {
                return redirect()->to(base_url());
            }
        }
        else
        {
            return redirect()->to(base_url());
        }
    }

    public function auctionCalendar()
    {
        if($this->session->has('upp_customer_loggedIn'))
        {
            if($this->session->get('upp_customer_loggedIn'))
            {
                $data['pageTitle'] = "Auction Calendar | UPP Auction Services";
                $data['customScripts'] = 'auction_calendar';
                return $this->slice->view('portal.auction_calendar', $data);
            }
            else
            {
                return redirect()->to(base_url());
            }
        }
        else
        {
            return redirect()->to(base_url());
        }
    }

    public function registeredBidders()
    {
        if($this->session->has('upp_customer_loggedIn'))
        {
            if($this->session->get('upp_customer_loggedIn'))
            {
                $data['pageTitle'] = "Registered Bidders | UPP Auction Services";
                $data['customScripts'] = 'auction_bidders';
                return $this->slice->view('portal.registered_bidders', $data);
            }
            else
            {
                return redirect()->to(base_url());
            }
        }
        else
        {
            return redirect()->to(base_url());
        }
    }

    public function myAccount()
    {
        if($this->session->has('upp_customer_loggedIn'))
        {
            if($this->session->get('upp_customer_loggedIn'))
            {
                $data['pageTitle'] = "My Account | UPP Auction Services";
                $data['customScripts'] = 'my_account';
                return $this->slice->view('portal.my_account', $data);
            }
            else
            {
                return redirect()->to(base_url());
            }
        }
        else
        {
            return redirect()->to(base_url());
        }
    }
}
