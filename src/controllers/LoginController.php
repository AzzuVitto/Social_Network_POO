 <?php

    class LoginController extends Controller
    {
        private static $errors = [];

        public static function getErrors()
        {
            return self::$errors;
        }

        public function index()
        {
            try {
                if (isset($_POST['log'])) {
                    $user = User::getUserByUserName(htmlspecialchars($_POST['userName']));
                    if (!$user) {
                        throw new Exception("Username non trouvé");
                    }
                     else {
                        
                            if ($user['password'] === (htmlspecialchars($_POST['password']))) {
                                $_SESSION['user'] = $user['id'];
                                $this->redirect('/');
                            } else throw new Exception("Mauvais mot de passe");
                        
                    }
                }
            } catch (PDOException | Exception $e) {
                echo $e->getMessage();
            }
            require("../views/login.php");
        }
    }
