<?php

class user extends Controller
{
    public function addMesage()


        {
             if (isset($_POST['ID'])) {

                    $ID= $_POST['ID'];
                   
                    $title = $_POST['Password'];
                    $message = $_POST['PhoneNumber'];

                    $this->model('insertModel')->insertMessage($ID, $Email, $FirstName ,$SecondName, $Password,$PhoneNumber);
                    header("Location: " . BASEURL."/adminFunction/customer");
                   
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
    