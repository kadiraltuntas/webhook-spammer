<?php 

$baslangic = 0;
$sayi = $_POST["adet"];
$mesaj = $_POST["mesaj"];
$webhook_url = $_POST["webhook_url"];
$random = $_POST["random"];
$username = $_POST["username"];
$renk = $_POST["renk"];
$embed = $_POST["embed"];
$baslik = $_POST["baslik"];
$title = $_POST["yazi"];
$foother = $_POST["foother"];
while($baslangic < $sayi) {

    if($random == 1){
        $rand = rand(0,9999);
        $rand = crc32($rand);

        $username = $rand;
    }

    $webhookurl = "$webhook_url";



$timestamp = date("c", strtotime("now"));
if ($embed == 1){


    $json_data = json_encode([
    
        "content" => "$mesaj",
        
       
        "username" => "$username",
    
       
        "avatar_url" => "https://pbs.twimg.com/media/DL4P6oBW0AAAIbK.jpg",
    
        
        "tts" => false,
    
        
        //"file" => "",
            
        "embeds" => [
            [
                
                "title" => "$title",
    
                
                "type" => "rich",
    
                
                "url" => "",
    
               
                "timestamp" => $timestamp,
    
                
                "color" => hexdec( "$renk" ),
    
                
                "footer" => [
                    "text" => "$foother",
                    "icon_url" => "https://cdn.discordapp.com/avatars/750016258216296449/a_7164e8b781898f859aa16ed3489284f0.gif?size=512"
                ],
              
                "author" => [
                    "name" => "$baslik",
                    
                ]
    
            ]
        ]
    
       
    
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

}else{
$json_data = json_encode([
    
    "content" => "$mesaj",
    
   
    "username" => "$username",

   
    "avatar_url" => "https://pbs.twimg.com/media/DL4P6oBW0AAAIbK.jpg",

    
    "tts" => false,

    
    //"file" => "",


   

], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

}

$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);

curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec( $ch );
curl_close( $ch );
$baslangic++;

 }

 header('Location: index.php?mesaj='.$sayi.' mesaj gönderildi');


?>