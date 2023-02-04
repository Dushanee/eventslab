<?php

class user extends Controller
{
    public function addCustomer()


        {
             if (isset($_POST['ID'])) {

                    $ID= $_POST['ID'];
                    $Email = $_POST['Email'];
                    $FirstName = $_POST['FirstName'];
                    $SecondName = $_POST['SecondName'];
                    $Password = $_POST['Password'];
                    $PhoneNumber = $_POST['PhoneNumber'];

                    $this->model('insertModel')->insertCustomer($ID, $Email, $FirstName ,$SecondName, $Password,$PhoneNumber);
                    header("Location: " . BASEURL."/adminFunction/customer");
                   
                } else {
                    header("Location: " . BASEURL."/adminFunction/index");
                }
            }
            public function  addServiceProvider()
            {
                if (isset($_POST['service_provider_id'])) {
   
                       $service_provider_id= $_POST['service_provider_id'];
                       $sp_email = $_POST['sp_email'];
                       $sp_name = $_POST['sp_name'];
                       $password = $_POST['password'];
                
   
                       $this->model('insertModel')->insertServiceProvider($service_provider_id, $sp_email, $sp_name , $password);
                       header("Location: " . BASEURL."/adminFunction/service");
                      
                   } else {
                       header("Location: " . BASEURL."/adminFunction/index");
                   }
               }

            // public function newAdmin()
            // {
            //     $this->view('login/register');
            // }
        
            // public function regAdmin()


            // {
            //      if (isset($_POST['username'])) {
    
                 
            //              $name = $_POST['name'];
            //             $email = $_POST['email'];
            //             $username = $_POST['username'];
            //             $password = $_POST['password'];
    
            //             $this->model('insertModel')->insertAdmin($name, $email, $username, $password);
            //             header("Location: " . BASEURL."/adminFunction/welcome");
            //             echo "username";
    
            //         } else {
            //             header("Location: " . BASEURL."/adminFunction/welcome");
            //         }
            //     }

        }
    