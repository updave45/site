<?php 
header("content-type:application/json;charset=utf-8");
$dest = 'postmaster@contact.updave@gmail.com';

$subject = $_POST['subject'];
$name = $_POST['name'] ;
$email = $_POST['email'] ;
$tel = $_POST['tel'] ;
$message = $_POST['message'] ;

/*if(empty($subject) || empty($name) || empty($email) || empty($tel) || empty($message))

    $error = true;
	if($error==false){
		 $data['response'] = 'succes';
		 $data['content'] = 'Merci votre message à été envoyer avec succés.';
	}
	else{
		$data['reponse'] = 'error';
		 $data['content'] = 'Merci de compléter les champs';
		
		}
		
		echo json_encode($data);*/

$content = $subject."\n\n".$name."\n\n" .$email."\n\n" .$tel."\n\n" .$message;

mail($dest, $subject, $content);
header("Location: https://updave.fr/n/#contact");
		?>
	




