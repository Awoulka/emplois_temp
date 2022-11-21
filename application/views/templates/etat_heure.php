<!DOCTYPE html>
<html>
<head>
	<title> etat des heures effectuees</title>
</head>
<body>
		<table border="1" style="width: 100%; ">
			<tr >
				<td colspan="8"  align="center">Etat des heures effectuees par des enseignants en <?php foreach ($niv_par as $value) {echo $value->rendu; break;}?> au semestre <?php foreach ($niv_par as $value) {echo $value->semestre[0]->semestre;break;}?>  et <?php foreach ($niv_par as $value) {echo  $value->semestre[1]->semestre;break;}?> annees <?php foreach ($annees as $value) {echo  $value->annee;
				
				 break;}?> </td>
			</tr>
			<tr>
				<td align="center">
					Code
				</td>
				<td>
					Intitule EC 
				</td align="center">
				<td>
					Nom de l'enseignant
				</td>
				<td align="center">
					CM
				</td>
				<td align="center">
					TD
				</td>
				<td align="center" colspan="2">
					TP
				</td>
				<td align="center">
					Total des heures effectuees
				</td>
			</tr>
			<tr>
				<td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"><td align="center">groupes</td><td align="center">heures</td><td align="center"></td>
			</tr>
			<tr>
				<td colspan="8" align="center">Semestre <?php foreach ($niv_par as $value) {echo  $value->semestre[0]->semestre;break;}?></td>
			</tr>
			<?php foreach ($ec as $value) {
				
				if ($value->semestre[0]->id_semestre==$value->semestre_id) {
						      		 $n=0;
				                 foreach ($value->enseignant as $row) {
				                  	$n++;
				                 }
						echo "<tr>
							<td align='center' rowspan='".($n+1)."'>".$value->code_ec."</td>
							<td align='center' rowspan='".($n+1)."'>".$value->intitule_ec."</td>";
								    $trouve=0;
				               for ($i=0; $i < $n; $i++) { 
				               	
				               	echo "<td align='center'>".$value->enseignant[$i]->nom_prenom."</td>
							          <td align='center'>".$value->heure_cm."</td>
									  <td align='center'>".$value->heure_td."</td>
									  <td align='center'>/</td>
									  <td align='center'>".$value->heure_tp."</td>";
                                       if ($trouve==0) {
                                       	 echo" <td align='center'rowspan='".($n+1)."'>".$value->evolution."/".$value->heure."</td>";
                                       	 $trouve=1;
                                       }
									

									  if ($i<$n) {
									  	echo "</tr><tr>";
									  }
								              
				               }			

						echo "</tr>";
					    
			}} ?>
			<tr>
				<td colspan="8" align="center">Semestre <?php foreach ($niv_par as $value) {echo  $value->semestre[1]->semestre;break;}?></td>
			</tr>
			<?php foreach ($ec as $value) {
				if ($value->semestre[1]->id_semestre==$value->semestre_id) {
					      		 $n=0;
				                 foreach ($value->enseignant as $row) {
				                  	$n++;
				                 }
						echo "<tr>
							<td align='center' rowspan='".($n+1)."'>".$value->code_ec."</td>
							<td align='center' rowspan='".($n+1)."'>".$value->intitule_ec."</td>";
							    $trouve=0;
				               for ($i=0; $i < $n; $i++) { 
				               	
				               	echo "<td align='center'>".$value->enseignant[$i]->nom_prenom."</td>
							          <td align='center'>".$value->heure_cm."</td>
									  <td align='center'>".$value->heure_td."</td>
									  <td align='center'>/</td>
									  <td align='center'>".$value->heure_tp."</td>";
                                       if ($trouve==0) {
                                       	 echo" <td align='center'rowspan='".($n+1)."'>".$value->evolution."/".$value->heure."</td>";
                                       	 $trouve=1;
                                       }
									

									  if ($i<$n) {
									  	echo "</tr><tr>";
									  }
								              
				               }
							 				

						echo "</tr>";
					    
			}} ?>
			
		</table>
		
</body>
</html>