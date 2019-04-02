<?PHP
class Abonne{
    private $cin;
    private $nom;
    private $prenom;
    private $sexe;
    private $dateNaissance;
    private $longueur;
    private $poids;
    private $numTel;
    
    function __construct($cin, $nom, $prenom, $sexe, $dateNaissance, $longueur, $poids, $numTel)
    {
        $this->cin = $cin;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->dateNaissance = $dateNaissance;
        $this->longueur = $longueur;
        $this->poids = $poids;
        $this->numTel = $numTel;
    }
    
    //Getters
    function getCin(){
        return $this->cin;
    }
    function getNom(){
        return $this->nom;
    }
    function getPrenom(){
        return $this->prenom;
    }
    function getSexe(){
        return $this->sexe;
    }
    function getDateNaissance(){
        return $this->dateNaissance;
    }
    function getLongueur(){
        return $this->longueur;
    }
    function getPoids(){
        return $this->poids;
    }
    function getNumTel(){
        return $this->numTel;
    }
    
    //Setters
    function setNom($nom){
        $this->nom = $nom;
    }
    function setPrenom($prenom){
        $this->prenom = $prenom;
    }
    function setSexe($sexe){
        $this->sexe = $sexe;
    }
    function setDateNaissance($dateNaissance){
        $this->dateNaissance = $dateNaissance;
    }
    function setLongueur($longueur){
        $this->longueur = $longueur;
    }
    function setPoids($poids){
        $this->poids = $poids;
    }
    function setNumTel($numTel){
        $this->numTel = $numTel;
}
}
?>
