<?
class Connection{
    function __construct(){
        $name = "root";
        $pas = "";
        $dbname = "newssite";
        $con = new mysqli("localhost", $name, $pas, $dbname);
    }
}?>