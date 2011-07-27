<?php


/**
 * Description of DBLayer
 *This class is responsible for making DB Connection , create ,update ,delete or insert operations.
 * This is being used through out application.
 * @author Dishna
 */
class DBLayer 
{
    //Create method to make database connection
    private $i = 0;
    private $colName;
    private $conn;
    private $Collect;
    private $dbObj;
    private $Id;
    function __construct()
    {
    $username = 'kwilliams';
    $password = 'mongo1234';
    $conn = new Mongo("mongodb://${username}:${password}@localhost/test",array("persist" => "x"));
    $this->dbObj = $conn->recipe;
    }
    Function setCollectionObj($colName) 
    {
    $this->Collect=$this->dbObj->selectCollection("$colName");
    }
    //Retrieve Collection Method
    public function get_CollectionObject($colName) 
    {
    $this->Collect=$this->dbObj->selectCollection("$colName");
    $cursor = $this->Collect->find();
    return $cursor;
    }
    public function get_CollectionObjectbyId($colName,$Id) 
    {

    $this->Collect=$this->dbObj->selectCollection("$colName");
    $cursor = $this->Collect->find();
    return $cursor;
    }
    //get object collection by ID
    public function get_CollectionObjectbysearchParameter($colName,$SrchParm,$srchprmval) 
    {

    $this->Collect=$this->dbObj->selectCollection("$colName");
    $cursor = $this->Collect->find(array($SrchParm => $srchprmval));
    return $cursor;
    }
    #End Region 
    //Save collection 
    public function InsertCollection($obj,$id)
    {
    //Insert obj values into Collection
    if(!is_null($obj)|| !is_null($this->Collect))
    $this->Collect->remove();
    if (!is_null($id))
    {
    $obj['_id']=$id;    
    }
    $this->Collect->insert($obj); 
    return  $obj['_id'];
    }
    //Update collection based on Criteria and New data.
    public function UpdateCollection($colName,$criteria,$newData)
    {
    //Insert obj values into Collection
    if(!is_null($colName)|| !is_null($this->Collect))
    $this->Collect=$this->dbObj->selectCollection("$colName");  
    $this->Collect->update($criteria, $newdata);
    }
    //Remove collection Record
    public function RemoveCollection($colName,$criteria)
    {
    //Insert obj values into Collection
    if(!is_null($colName)|| !is_null($this->Collect))
    $this->Collect=$this->dbObj->selectCollection("$colName");  
    $this->Collect->remove($criteria, true );
    }
    
}

?>
