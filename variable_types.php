<html>
<head>...</head>
<body>
    <?php
      $name="okly";
      $age=25;
     $myeyes_color="white";
    $am_hungry=true;
     $names_family=array('bangizo','okly','brama','jiji','nene');
      echo "<p>Hi! My name is $name.</p>"; 
      echo "<p>i am $age years old</p>";
      echo "<p>my eyes are $myeyes_color</p>";
      echo "<p>the first person in my family is $names_family[0] </p>";
      if($am_hungry==true){
        echo  "true: eat now";
      }else{
        echo "not yet";
      }
       
         
        
       ?>  
</body>
</html>