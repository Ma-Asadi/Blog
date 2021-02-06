<?php
class DAO{
    private $host ="127.0.0.1";
    private $user ="root";
    private $password="";
    private $db="blog";
    private $con="";
    function _construc()
    {
        $this->con-=new mysqli($this->host,$host ->user,$this->password,$this->db);
    }
}
function insert($dto)
{
    return  $this->con->query($query);

}
function delete($id,$table)
{
    $query="DELETE FROM".$table."WHERE ID=".$id;
    return  $this->con->query($query);

}
function update($query)
{
    return  $this->con->query($query);
}
function selectAll($$table)
{
    query ="SELECT * FROM".$table;
    return  $this->con->query($query);

}
?>