<?php
// Config
$data_folder = "p";

// Gather Information from Client
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$host = "https://paste.sniperoj.com";

// Random String
function randomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

// Store
if (strpos($user_agent, "curl/") == 0 && !empty($_FILES['f'])) {
	$filename=randomString(4);
	$folder=randomString(2);
	mkdir("$data_folder/$folder");
	move_uploaded_file($_FILES['f']['tmp_name'], "$data_folder/$folder/$filename");
	$url = "$host/$data_folder/$folder/$filename";
	echo "$url\n";
}else{
	echo "ifconfig | curl -F 'f=@-' $host\n";
	echo "</br>\n";
	echo "<a href='https://github.com/WangYihang/Pastebin'>GitHub</a>\n";
	echo "</br>\n";
}
