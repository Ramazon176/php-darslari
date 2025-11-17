<?php
     $foydalanuvchilar = [
     ['ism'=> 'shamshod','rol' => 'manager', "status"=> "faol","email"=>"test@gmail.com"],
     ['ism'=> 'shamshod','rol' => 'manager', "status"=> "faol","email"=>"test@gmail.com"],
     ['ism'=> 'shamshod','rol' => 'manager', "status"=> "faol","email"=>"test@gmail.com"],
     ['ism'=> 'shamshod','rol' => 'manager', "status"=> "faol","email"=>"test@gmail.com"],
     ['ism'=> 'shamshod','rol' => 'manager', "status"=> "faol","email"=>"test@gmail.com"],
     ['ism'=> 'shamshod','rol' => 'manager', "status"=> "faol","email"=>"test@gmail.com"],




     ]



?>
<!DOCTYPE html>
<html lang="uz">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ixcham Jadval</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background: #f5f6fa;
    padding: 30px;
  }

  table {
    border-collapse: collapse;
    width: 400px;
    margin: auto;
    background: #fff;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    border-radius: 6px;
    overflow: hidden;
  }

  th, td {
    text-align: left;
    padding: 10px 15px;
  }

  th {
    background-color: #2f3640;
    color: white;
    font-weight: 600;
  }

  tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  tr:hover {
    background-color: #dcdde1;
  }
</style>
</head>
<body>

<table>
  <tr>
    <th>#</th>
    <th>Ism</th>
    <th>Yosh</th>
    <th>Kasb</th>
  </tr>
  <?php foreach($foydalanuvchilar as $x => $item): ?>
  <tr>
    <td><?php echo ++$x   ?></td>
    <td><?= $item['ism'] ?></td>
    <td><?= $item['rol'] ?></td>
    <td><?= $item['status'] ?></td>
  </tr>
  <?php endforeach; ?>
 
</table>

</body>
</html>
