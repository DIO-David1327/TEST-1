<?php

$error = urldecode($_POST[error]);
$function = urldecode($_POST["function"]);
$browser = urldecode($_POST[browser]);
$version = urldecode($_POST[version]);

$query = $pdo->prepare('SELECT * FROM rumeur, ville WHERE rumeur.id_ville = ville.id ORDER BY rumeur.id_rumeur DESC LIMIT 5');
$query->execute();
$result = $query->fetchAll();

echo json_encode($result);

// foreach($result as $results) {                        
// echo $results['rumeur'];
// }
?>
