<!--
    name
    email
    phone
    location
      size 
    type
-->

<?php
//error_reporting(0);
if(isset($_POST['name']) && strlen($_POST['name'])){
  $name=$_POST['name'];
  if(isset($_POST['email']) && strlen($_POST['email'])){
    $email=$_POST['email'];
    if(isset($_POST['phone']) && strlen($_POST['phone'])){
      $phone=$_POST['phone'];
      if(isset($_POST['location']) && strlen($_POST['location'])){
        $location=$_POST['location'];
        if(isset($_POST['sol']) && strlen($_POST['sol'])){
          $sol=$_POST['sol'];
          if(isset($_POST['type']) && strlen($_POST['type'])){
            $type=$_POST['type'];

          $UID = uniqid();
          $entry = array(
            $UID => array(
              'name' => $name,
              'email' => $email,
              'phone' => $phone,
              'location' => $location,
              'size' => $sol,
              'type' => $type
            )
          );
          $writeEntry = fopen('requests.json', 'a');
          fputs($writeEntry, json_encode($entry));
          fclose($writeEntry);
          echo '<div style="color:#0f0">Sumitted!</div>';
        } else echo '<div style="color:#f00">Enter the type of land</div>';
        } else echo '<div style="color:#f00">Enter the size of land</div>';
      } else echo '<div style="color:#f00">Enter your location</div>';
    } else echo '<div style="color:#f00">Enter your phone</div>';
  } else echo '<div style="color:#f00">Enter your email</div>';
} else echo '<div style="color:#f00">Enter your name</div>';

?>