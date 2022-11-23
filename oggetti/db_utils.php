<?php 

//CLASSE DI UTILITIES PER LA CONNESSIONE AL DB 

class DBUtils {

    public $hostname;
    public $username;
    public $password;
    public $dbname;
    public $table;

    function __construct($var1, $var2, $var3, $var4)
    {
        $this-> hostname = $var1;
        $this-> username = $var2;
        $this-> password =$var3;
        $this-> dbname = $var4;
        
    }

    function link()
    {
        $link = mysqli_connect($this->hostname, $this->username, $this->password, $this->dbname);

        if (!$link) {
            die ("Connessione non riuscita");
        } else {
            echo "Connessione riuscita sul DB" . " " .$this->dbname;
        }
    }

    function runSQL()
    {
        
    }


}

$dblink = new DBUtils("localhost", "root", "", "dbtest");
$dblink -> link();





?>