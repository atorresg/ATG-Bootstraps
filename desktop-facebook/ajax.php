<?php
header('Content-type: text/plain; charset=UTF-8');

require_once("inc/config.php");

try {
	$db = new PDO("mysql:host=".$config['db']['host'].";dbname=".$config['db']['dbase'].", ".$config['db']['user_db'].", ".$config['db']['password']);
} catch(PDOException $e) {
	echo $e->getMessage();
}

function get_ip() {
	if (!empty($_SERVER["HTTP_CLIENT_IP"]))
		return $_SERVER["HTTP_CLIENT_IP"];
	if (!empty($_SERVER["HTTP_X_FORWARDED_FOR"]))
		return $_SERVER["HTTP_X_FORWARDED_FOR"];
	return $_SERVER["REMOTE_ADDR"];
};
if(isset($_POST["accion"]) && $_POST["accion"]){
	switch($_POST["accion"]){
		case "usuario_ins":
			usuario_ins();
			break;
        default:
            break;
	}
}
else{
    echo "{accion: 'No existe parámetro accion'}";
}

function usuario_ins(){
    global $db,$prefix;

    $sql = "INSERT INTO usuarios (nombre, fb_id, base, comentario, email, ip) VALUES (:nombre, :fb_id, :base, :comentario, :email, '".get_ip()."')";
    $cmd = $db->prepare($sql);

    $cmd->bindParam(':nombre', strip_tags($_POST["nombre"]), PDO::PARAM_STR);
    $cmd->bindParam(':comentario', strip_tags($_POST["comentario"]), PDO::PARAM_STR);
    $cmd->bindParam(':base', strip_tags($_POST["base"]), PDO::PARAM_STR);
    $cmd->bindParam(':fb_id', strip_tags($_POST["fb_id"]), PDO::PARAM_STR);
	$cmd->bindParam(':email', strip_tags($_POST["email"]), PDO::PARAM_STR);

    $r = $cmd->execute();
    $res = '{"success":'.$r.'}';
    echo $res;
};

?>