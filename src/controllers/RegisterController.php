<?php
class RegisterController extends Controller
{
    public function index()
    {
        if (isset($_POST['createAccount'])) {
           
            $user = new User($_POST['userName'], $_POST['password'], $_POST['firstName'], $_POST['lastName']);

            User::InsertInto($user);
          $this->redirect("/login");
        }
        require('../views/register.php');
    }
}
