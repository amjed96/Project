<?PHP
class Compte{
    private $id;
    private $username;
    private $email;
    private $password;
    
    function __construct($id, $username, $email, $password)
    {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }
    
    //Getters
    function getId(){
        return $this->id;
    }
    function getUsername(){
        return $this->username;
    }
    function getEmail(){
        return $this->email;
    }
    function getPassword(){
        return $this->password;
    }
    
    //Setters
    function setUsername($username){
        $this->nom = $nom;
    }
    function setEmail($email){
        $this->email = $email;
    }
    function setPassword($password){
        $this->password = $password;
    }
}
?>
