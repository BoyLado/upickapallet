<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use Square\SquareClient;
use Square\Environment;
use Square\Exceptions\ApiException;
use Square\Models\Money;
use Square\Models\CreatePaymentRequest;

class IndexController extends BaseController
{
    public function __construct()
    {
        $this->customers = model('Portal/Customers');
        $this->payments  = model('Portal/Payments');
    }

    public function login()
    {
        $this->validation->setRules([
            'txt_userEmail' => [
                'label'  => 'User Email',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'User Email/Username is required'
                ],
            ],
            'txt_userPassword' => [
                'label'  => 'User Password',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Password is Incorrect',
                ],
            ]
        ]);

        if($this->validation->withRequest($this->request)->run())
        {
            $fields = $this->request->getPost();

            $logInRequirements = [
              'user_email'      => $fields['txt_userEmail'],
              'user_name'       => $fields['txt_userEmail'],
              'user_password'   => encrypt_code($fields['txt_userPassword']),
              'user_status'     => '1', //meaning active
            ];

            $validateLogInResult = $this->users->validateLogIn($logInRequirements);

            if(!empty($validateLogInResult))
            {
              $userData = [
                'upp_user_id'        => $validateLogInResult['user_id'],
                'upp_user_firstName' => $validateLogInResult['first_name'],
                'upp_user_lastName'  => $validateLogInResult['last_name'],
                'upp_user_loggedIn'  => true
              ];
              $this->session->set($userData);

              $msgResult[] = "Success";
            }
            else
            {
              $msgResult[] = "Access denied, please try again or contact our administrator";
            }
        }
        else
        {
            $msgResult[] = $this->validation->getErrors();
        }

        return $this->response->setJSON($msgResult);
    }

    public function forgotPassword()
    {
        $this->validation->setRules([
            'txt_userEmail' => [
                'label'  => 'User Email',
                'rules'  => 'required|valid_email',
                'errors' => [
                    'required' => 'User Email is required',
                    'valid_email' => 'User Email must be valid'
                ],
            ]
        ]);

        if($this->validation->withRequest($this->request)->run())
        {
            $fields = $this->request->getPost();

            $arrData = [
                'password_auth_code' => encrypt_code(generate_code())
            ];
            $result = $this->users->createPasswordAuthCode($arrData, $fields['txt_userEmail']);
            if($result > 0)
            {
                $emailSender    = 'ajhay.work@gmail.com';
                $emailReceiver  = $fields['txt_userEmail'];

                $arrResult = $this->users->loadUser(['user_email'=>$emailReceiver]);

                $data['subjectTitle']       = 'Forgot Password';
                $data['userId']             = $arrResult['user_id'];
                $data['userName']           = $arrResult['first_name'] . " " . $arrResult['last_name'];
                $data['userAuthCode']       = decrypt_code($arrResult['user_auth_code']);
                $data['passwordAuthCode']   = decrypt_code($arrResult['password_auth_code']);

                $emailResult = sendSliceMail('forgot_password',$emailSender,$emailReceiver,$data);
                $msgResult[] = ($emailResult == 1)? "Success" : $emailResult;
            }
            else
            {
                $msgResult[] = "Error! <br>Your email was not recognized!";
            }  
        }
        else
        {
            $msgResult[] = $this->validation->getErrors();
        }

        return $this->response->setJSON($msgResult);
    }

    public function changePassword()
    {
        $this->validation->setRules([
            'txt_newPassword' => [
                'label'  => 'New Password',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'New password is required'
                ],
            ],
            'txt_confirmPassword' => [
                'label'  => 'Confirm Password',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Confirm password is required'
                ],
            ]
        ]);

        if($this->validation->withRequest($this->request)->run())
        {
            $fields = $this->request->getPost();
            
            $arrData = [
                'user_password' => encrypt_code($fields['txt_newPassword'])
            ];

            $whereParams = [
                'id' => $fields['txt_userId'],
                'password_auth_code' => encrypt_code($fields['txt_passwordAuthCode'])
            ];

            $result = $this->users->changePassword($arrData, $whereParams);
            $msgResult[] = ($result == 1)? "Success" : "Database error";
        }
        else
        {
            $msgResult[] = $this->validation->getErrors();
        }

        return $this->response->setJSON($msgResult);
    }

    public function signUp()
    {
      $this->validation->setRules([
            'txt_firstName' => [
                'label'  => 'First Name',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'First Name is required'
                ],
            ],
            'txt_lastName' => [
                'label'  => 'Last Name',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Last Name is required'
                ],
            ],
            'txt_emailAddress' => [
                'label'  => 'Email Address',
                'rules'  => 'required|valid_email',
                'errors' => [
                    'required' => 'Email is required',
                    'valid_email' => 'Email must be valid'
                ],
            ],
            'txt_phoneNumber' => [
                'label'  => 'Phone Number',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Phone Number is required'
                ],
            ],
            'txt_driverLicenseNumber' => [
               'label'  => 'Drivers License Number',
               'rules'  => 'required',
               'errors' => [
                   'required' => 'Drivers License Number is required'
               ],
            ],
            'txt_userName' => [
               'label'  => 'User Name',
               'rules'  => 'required',
               'errors' => [
                   'required' => 'User Name is required'
               ],
            ],
            'txt_password' => [
                'label'  => 'Password',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Password is required'
                ],
            ]
        ]);

        if($this->validation->withRequest($this->request)->run())
        {
            $fields = $this->request->getPost();

            if($fields['txt_productCode'] == 'asd123' || $fields['txt_productCode'] == 'fgh123')
            {
               $cardToken = $fields['cardToken'];
               if($fields['txt_productCode'] == 'asd123')
               {
                  $subTotal = 19.99;
                  $productName = 'Season Pass';
               }
               else
               {
                  $subTotal = 4.99;
                  $productName = 'Daily Pass';
               }

               $validationResult = $this->customers->validateCustomerEmail($fields['txt_emailAddress']);

               if($validationResult == null)
               {
                  $tax = $subTotal * 0.0954;
                  $subTotalPlusTax = $subTotal + $tax;
                  $transactionFee = $subTotalPlusTax * 0.0435;

                  $totalPayment = $subTotalPlusTax + $transactionFee;

                  $paymentAmount = number_format($totalPayment,2);
                  $paymentAmount = preg_replace('/\./', '', $paymentAmount);

                  $client = new SquareClient([
                      'accessToken' => getenv('SQUARE_ACCESS_TOKEN'),
                      'environment' => getenv('SQUARE_ENVIRONMENT'),
                  ]);

                  $amount_money = new \Square\Models\Money();
                  $amount_money->setAmount($paymentAmount);
                  $amount_money->setCurrency('USD');

                  $billing_address = new \Square\Models\Address();
                  $billing_address->setCountry('US');
                  $billing_address->setFirstName($fields['txt_firstName']);
                  $billing_address->setLastName($fields['txt_lastName']);

                  $idempotencyKey = uniqid('upp_'); 
                  $body = new \Square\Models\CreatePaymentRequest(
                      $cardToken,
                      $idempotencyKey,
                      $amount_money
                  );
                  $body->setAutocomplete(true);
                  $body->setLocationId(getenv('SQUARE_LOCATION_ID'));
                  $body->setBuyerEmailAddress($fields['txt_emailAddress']);
                  $body->setBillingAddress($billing_address);

                  $api_response = $client->getPaymentsApi()->createPayment($body);
                  if ($api_response->isSuccess()) 
                  {
                     // customers
                     $arrData = [
                        'company_name'       => $fields['txt_companyName'],
                        'first_name'         => $fields['txt_firstName'],
                        'last_name'          => $fields['txt_lastName'],
                        'email_address'      => $fields['txt_emailAddress'],
                        'phone_number'       => $fields['txt_phoneNumber'],
                        'complete_address'   => $fields['txt_completeAddress'],
                        'customer_username'  => $fields['txt_userName'],
                        'customer_password'  => encrypt_code($fields['txt_password']),
                        'id_number'          => $fields['txt_driverLicenseNumber'],
                        'season_pass_status' => 'active',
                        'referred_by'        => $fields['txt_referredBy'],
                        'customer_status'    => '1',
                        'created_date'       => date('Y-m-d H:i:s') 
                     ];
                     $customerId = $this->customers->addCustomer($arrData);

                     // payments
                      $arrData = [
                          'customer_id'           => $customerId,
                          'product_id'            => null,
                          'card_payment'          => number_format((float)$totalPayment,2),
                          'sub_total'             => number_format($subTotal,2),
                          'tax_fee'               => number_format($tax,2),
                          'transaction_fee'       => number_format($transactionFee,2),
                          'total_payment'         => number_format($totalPayment,2),
                          'payment_status'        => 1,
                          'created_by'            => null,
                          'created_date'          => date('Y-m-d H:i:s')
                      ];
                      $paymentId = $this->payments->addPayment($arrData);
                      if($paymentId > 0)
                      {
                          $receipt = '';
                          if($paymentId < 10)
                          {
                              $receipt = '00000'.$paymentId;
                          }
                          else if($paymentId < 100)
                          {
                              $receipt = '0000'.$paymentId;
                          }
                          else if($paymentId < 1000)
                          {
                              $receipt = '000'.$paymentId;
                          }
                          else if($paymentId < 10000)
                          {
                              $receipt = '00'.$paymentId;
                          }
                          else if($paymentId < 100000)
                          {
                              $receipt = '0'.$paymentId;
                          }
                          else
                          {
                              $receipt = $paymentId;
                          }

                          //email
                          $emailSender    = 'customerservice@upickapallet.com';
                          $emailReceiver  = $fields['txt_emailAddress'];

                          $data['subjectTitle']           = 'UPP Registration';
                          $data['receiptNumber']          = $receipt;
                          $data['customerName']           = $fields['txt_firstName'] . " " . $fields['txt_lastName'];
                          $data['customerEmailAddress']   = $fields['txt_emailAddress'];
                          $data['customerPhoneNumber']    = $fields['txt_phoneNumber'];
                          $data['customerAddress']        = $fields['txt_completeAddress'];
                          $data['productName']            = $productName;
                          $data['subTotal']               = number_format($subTotal,2);
                          $data['tax']                    = number_format($tax,2);
                          $data['transactionFee']         = number_format($transactionFee,2);
                          $data['totalPayment']           = number_format($totalPayment,2);
                          $data['dateSent']               = date('F d, Y');

                          $emailResult = sendSliceMail('sign_up',$emailSender,$emailReceiver,$data);
                      }
                      $msgResult = ['Success',$api_response->getResult()];
                  }
                  else 
                  {
                      $msgResult = ['Error',$api_response->getErrors()];
                  }
               }
               else
               {
                  $msgResult = ['Error','Email is already exist!'];
               }
            }
            else
            {
               $msgResult = ['Error','Product Code is Unknown'];
            }
        }
        else
        {
            $msgResult = strip_tags(validation_errors());
        }

        return $this->response->setJSON($msgResult);
    }

    public function logout()
    {
        $userData = [
            'upp_user_id',
            'upp_user_firstName',
            'upp_user_lastName',
            'upp_user_loggedIn'
        ];
        $this->session->destroy();
        return redirect()->to(base_url());
    }
}
