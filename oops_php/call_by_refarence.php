  <?php 

   function increment(&$i){

   	$i++;
   }
    $i=9;
    increment($i);
    echo $i;
   echo "<br>";

    function addr(& $str2){

    	$str2.=" Call by Refarence";
    }
    $str="This is";
    addr($str);
    echo $str;


    class Query
{
    private $results;
    private $connection;

    function __construct($host, $user, $password, $database)
    {
        $this->connection = mysqli_connect(
            $host, $user, $password, $database
        );
    }

    function Execute($query)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, $query)
            : false);
        return $this->results !== false;
    }

    function Display()
   {
     while(($row = mysqli_fetch_row($this->results)))
       print_r($row);
   }
};

$host = '127.0.0.1';
$user = 'mysql user';
$password = 'mysql user password';
$database = 'products';
 
$query = new Query( $host, $user, $password, $database);
if($query->Execute(
  'SELECT name, description, price FROM product'
))
{
   $query->Display();
}


  ?>