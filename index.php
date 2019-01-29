<? php $people = array(
   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);

$pTable = "";

foreach($people as $p)
{
  $pFirst = $p['first_name'];
  $pLast = $p['last_name'];
  $pEmail = $p['email']
  
  $out = "This is ". "{$pFirst} {$pLast}"."'s email: "."{$pEmail}";
  
  $tRow ="<tr><td>{$pFirst}</td><td>{$pLast}</td><td>{$pEmail}</td><td><button type=\"button\" onclick=\"alert('{$out}')\">Show Email</button></td></tr>
    
   $pTable .= $tRow;
}
?>

<html>
  <head><title>John VanGeemen</title></head>
  <body>
    <table>
      <tr> 
        <th>First</th>
        <th>Last</th>
         <th>Email</th>
      </tr>
      <?php echo $pTable; ?>
    </table>
  </body>
</html>
