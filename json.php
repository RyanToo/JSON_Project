<html>
<head>
<title>книга контактов</title>
</head>
<body>
<?php
$data = file_get_contents('json.json');
$res = json_decode($data, true); 

   <table border="2">
   <tr>
      <td>имя</td>
	   <td>фамилия</td>
       <td>адрес, город</td>  
	   <td>телефон</td>
   </tr>
 
      <?php foreach($res as $value){?>
		<tr>
			<td><?= $value['name']?></td>
			<td><?= $value['lastName']?></td>
			<td><?= $value['adr']?></td>
			<td><?= 'г.'. $value['city']?></td>

			<td><?= $value['phoneNumbers'][0] . "<br/>" . $value['phoneNumbers'][1]?></td>
		</tr>	
		
 	   <?php }?>
</table>	
</body>
</html>	