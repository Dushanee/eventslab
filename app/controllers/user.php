<?php

class user extends Controller
{
    public function addCustomer()


        {
             if (isset($_POST['username'])) {

                     $id= $_POST['id'];
                     $name = $_POST['name'];
                    $email = $_POST['email'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    $this->model('insertModel')->insertCustomer($id,$name, $email, $username, $password);
                    header("Location: " . BASEURL."/adminFunction/customer");
                    echo "username";

                } else {
                    header("Location: " . BASEURL."/adminFunction/customer");
                }
            }
       

        }
    