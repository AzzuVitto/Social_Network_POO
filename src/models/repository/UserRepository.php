<?php
class UserRepository extends Db
{
   private  static function request($request)
    {
        $db = self::getInstance();
        return  $db->query($request);
    }

    public static function getUsers()
    {
        return self::request("SELECT * FROM user")->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function getUserById($id)
    {
        return self::request("SELECT * FROM user WHERE id=$id")->fetch(PDO::FETCH_ASSOC);
    }
   
    public static function getUserByUserName($username)
    {
        return self::request("SELECT * FROM user WHERE userName= '$username'")->fetch(PDO::FETCH_ASSOC);
    }
    
    public static function InsertInto(User $user)
    {
        try {
            return self::request("INSERT INTO user(userName, password, firstName, lastName)VALUES(
                '" . $user->getUserName() . "',
                '" . $user->getPassword() . "',
                '" . $user->getFirstName() . "',
                '" . $user->getLastName() . "')");
        } catch (\Throwable $th) {
            var_dump($th) ;
        }
    }
  



//     public function deleteFromDb($user){
//     $request = "DELETE FROM " .$this->user . "WHERE id=" . $this->getId();
//     return self::executeRequest($request);
// }
}
// abstract class Model extends Db
// {
//     protected string $table;
//     protected $columns = [];

//     public static function executeRequest(string $request)
//     {
//         $result = self::getInstance()->query($request);
//         self::disconnect();
//         return $result;
//     }
// public static function findAll(){
// $request = "SELECT * FROM " . strtolower(get_called_class());
// return self::executeRequest($request)->fetchAll(PDO::FETCH_ASSOC);
// }
// public static function findById($id) {
//     $request ="SELECT * FROM " . strtolower(get_called_class()) . " WHERE  id=$id ";
//     return self::executeRequest($request)->fetchAll(PDO::FETCH_ASSOC);
// }
// public static function findBy($column, $value) {
//     if(is_string($value))
//     $request ="SELECT * FROM " . strtolower(get_called_class()) . " WHERE " . $column . "='"  . $value . "'";
//     else 
//     $request = "SELECT * FROM " . strtolower(get_called_class()) . " WHERE " . $column . "="  . $value ;
//     return self::executeRequest($request)->fetchAll(PDO::FETCH_ASSOC);
// }


// }