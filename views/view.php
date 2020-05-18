<?php
    function GetContactData($Contactos){
        foreach($Contactos as $item){
           echo '
            <tr>
                <th scope="row">'.$item['id'].'</th>
                <td>'.$item['contact_no'].'</td>
                <td>'.$item['lastname'].'</td>
                <td>'.$item['createdtime'].'</td>
            </tr>
           ';
        }
    }
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">contact_no</th>
      <th scope="col">lastname</th>
      <th scope="col">createdtime</th>
    </tr>
  </thead>
  <tbody>
    <?=GetContactData($Contactos)?>
  </tbody>
</table>