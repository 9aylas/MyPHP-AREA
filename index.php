<?php
   class MyDB extends SQLite3 {
      function __construct() {
         $this->open('db.db');
      }
   }
   
   $db = new MyDB();
   if(!$db) {
      echo $db->lastErrorMsg();
   } else {
      echo "Connection Success !\n";
   }

   $sql =<<<EOF
      SELECT * from HIM19;
EOF;

   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
      echo "id = ". $row['id'] . "\n";
      echo "user = ". $row['user'] ."\n";
      echo "pass = ". $row['pass'] ."\n";
   }
   echo " Confidential stuffs here :D !\n";
   $db->close();
?>
