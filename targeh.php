<?php
flush();
ob_start();
set_time_limit(0);
error_reporting(0);
ob_implicit_flush(1);


if($data == "mnas"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$developer) or in_array($from_id2,$eri)) {
if (!in_array($idcarlos,$nazar)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->first_name;
file_put_contents("data/nazar/$chat_id.txt",$idcarlos . "\n" , FILE_APPEND);
file_put_contents("data/nazar/$chat_id/nazr.txt" , " *๐ฉ* [" . "@". $userr ."] *๐ช* " . "ยป" . " *๐ฉ* `". $idcarlos ."` *๐ช* ". "\n" , FILE_APPEND);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"".$em."ุงูุนุถู โ [$namee](tg://user?id=$idcarlos)
".$em." ุชู ุชุฑููู ููุตุจุญ ููุดุฆ ุงุณุงุณู",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'โ ุชูุฒูู โ' ,'callback_data'=>"delmnas"]],
[['text'=>'โ ุฑุฌูุน โ' ,'callback_data'=>"rafaa"]],
]])
]); 
}}}
if ($data == "mnas"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$developer) or in_array($from_id2,$eri)) {
if (in_array($idcarlos,$nazar)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->first_name;
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"".$em." ุงูุนุถู โ [$namee](tg://user?id=$idcarlos)
".$em." ูู ุจุงููุนู ููุดุฆ ุงุณุงุณู",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'โ ุชูุฒูู โ' ,'callback_data'=>"delmnas"]],
[['text'=>'โ ุฑุฌูุน โ' ,'callback_data'=>"rafaa"]],
]])
]); 
}}}
if ($data == "delmnas"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$developer) or in_array($from_id2,$eri)) {
if (in_array($idcarlos,$nazar)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->first_name;
$re_id_info = file_get_contents("data/carlos/$chat_id.txt");
	$mdrs = file_get_contents("data/carlos/$chat_id/crlo.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($idcarlos,"",$re_id_info);
	$str2 = str_replace(" *๐ฉ* [" . "@". $userr ."] *๐ช* " . "ยป" . " *๐ฉ* `". $idcarlos ."` *๐ช* ","",$mdrs1);
	file_put_contents("data/carlos/$chat_id.txt",$str);
	file_put_contents("data/carlos/$chat_id/crlo.txt",$str2);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"".$em." ุงูุนุถู โ [$namee](tg://user?id=$idcarlos)
".$em." ุชู ุชูุฒููุฉ ูู ุงูููุดูุฆู ุงูุงุณุงุณูู",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'โ ุฑุฌูุน โ' ,'callback_data'=>"rafaa"]],
]])
]); 
}
}}
if ($data == "delmnas"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$developer) or in_array($from_id2,$eri)) {
if (!in_array($idcarlos,$nazar)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->first_name;
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"".$em." ุงูุนุถู โ [$namee](tg://user?id=$idcarlos)
".$em." ูุง ุงุณุชุทูุน ุชูุฒููู ูู ููุณ ููุดุฆ ุงุณุงุณู",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'โ ุฑุฌูุน โ' ,'callback_data'=>"rafaa"]],
]])
]); 
}
}}
if($data == "mn"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$developer) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (!in_array($idcarlos,$carlos)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->first_name;
file_put_contents("data/carlos/$chat_id.txt",$idcarlos . "\n" , FILE_APPEND);
file_put_contents("data/carlos/$chat_id/crlo.txt" , " *๐ฉ* [" . "@". $userr ."] *๐ช* " . "ยป" . " *๐ฉ* `". $idcarlos ."` *๐ช* ". "\n" , FILE_APPEND);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"".$em." ุงูุนุถู โ [$namee](tg://user?id=$idcarlos)
".$em." ุชู ุชุฑููู ููุตุจุญ ููุดุฆ",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'โ ุชูุฒูู โ' ,'callback_data'=>"delmn"]],
[['text'=>'โ ุฑุฌูุน โ' ,'callback_data'=>"rafaa"]],
]])
]); 
}}}
if ($data == "mn"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$developer) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (in_array($idcarlos,$carlos)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->first_name;
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"".$em." ุงูุนุถู โ [$namee](tg://user?id=$idcarlos)
".$em." ูู ุจุงููุนู โ ููุดุฆ",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'โ ุชูุฒูู โ' ,'callback_data'=>"delmn"]],
[['text'=>'โ ุฑุฌูุน โ' ,'callback_data'=>"rafaa"]],
]])
]); 
}}}
if ($data == "delmn"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$developer) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (in_array($idcarlos,$carlos)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->first_name;
$re_id_info = file_get_contents("data/carlos/$chat_id.txt");
	$mdrs = file_get_contents("data/carlos/$chat_id/crlo.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($idcarlos,"",$re_id_info);
	$str2 = str_replace(" *๐ฉ* [" . "@". $userr ."] *๐ช* " . "ยป" . " *๐ฉ* `". $idcarlos ."` *๐ช* ","",$mdrs1);
	file_put_contents("data/carlos/$chat_id.txt",$str);
	file_put_contents("data/carlos/$chat_id/crlo.txt",$str2);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"".$em." ุงูุนุถู โ [$namee](tg://user?id=$idcarlos)
".$em." ุชู ุชูุฒููุฉ ูู ุงูููุดุฆูู",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'โ ุฑุฌูุน โ' ,'callback_data'=>"rafaa"]],
]])
]); 
}
}}
if ($data == "delmn"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$developer) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (!in_array($idcarlos,$carlos)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->first_name;
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"โ๏ธุงูุนุถู โ [$namee](tg://user?id=$idcarlos)
โ๏ธูุง ุงุณุชุทูุน ุชูุฒููู ููู ููุณ  โ ููุดุฆ",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'โ ุฑุฌูุน โ' ,'callback_data'=>"rafaa"]],
]])
]); 
}
}}
if($data == "md"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$developer) or in_array($from_id2,$carlos) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (!in_array($idcarlos,$manger)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->first_name;
file_put_contents("data/manger/$chat_id.txt",$idcarlos . "\n" , FILE_APPEND);
file_put_contents("data/manger/$chat_id/mange.txt" , " *๐ฉ* [" . "@". $userr ."] *๐ช* " . "ยป" . " *๐ฉ* `". $idcarlos ."` *๐ช* ". "\n" , FILE_APPEND);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"โ๏ธุงูุนุถู โ [$namee](tg://user?id=$idcarlos)
โ๏ธุชู ุชุฑููู ููุตุจุญ โ ูุฏูุฑ",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'โ ุชูุฒูู โ' ,'callback_data'=>"delmd"]],
[['text'=>'โ ุฑุฌูุน โ' ,'callback_data'=>"rafaa"]],
]])
]); 
}}}
if ($data == "md"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$developer) or in_array($from_id2,$carlos) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (in_array($idcarlos,$manger)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->first_name;
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"โ๏ธุงูุนุถู โ [$namee](tg://user?id=$idcarlos)
โ๏ธููู ุจุงููุนู โ ูุฏูุฑ",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'โ ุชูุฒูู โ' ,'callback_data'=>"delmd"]],
[['text'=>'โ ุฑุฌูุน โ' ,'callback_data'=>"rafaa"]],
]])
]); 
}}}
if ($data == "delmd"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$developer) or in_array($from_id2,$carlos) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (in_array($idcarlos,$manger)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->first_name;
$re_id_info = file_get_contents("data/manger/$chat_id.txt");
	$mdrs = file_get_contents("data/manger/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($idcarlos,"",$re_id_info);
	$str2 = str_replace(" *๐ฉ* [" . "@". $userr ."] *๐ช* " . "ยป" . " *๐ฉ* `". $idcarlos ."` *๐ช* ","",$mdrs1);
	file_put_contents("data/manger/$chat_id.txt",$str);
	file_put_contents("data/manger/$chat_id/mange.txt",$str2);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"โ๏ธุงูุนุถู โ [$namee](tg://user?id=$idcarlos)
โ๏ธุชู ุชูุฒูู ูู โ ุงููุฏุฑุงุก",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'โ ุฑุฌูุน โ' ,'callback_data'=>"rafaa"]],
]])
]); 
}
}
}
if ($data == "delmd"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$developer) or in_array($from_id2,$carlos) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (!in_array($idcarlos,$manger)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->first_name;
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"โ๏ธุงูุนุถู โ [$namee](tg://user?id=$idcarlos)
โ๏ธูุง ุงุณุชุทูุน ุชูุฒููู ููู ููุณ  โ ูุฏูุฑ",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'โ ุฑุฌูุน โ' ,'callback_data'=>"rafaa"]],
]])
]); 
}
}
}
if($data == "ad"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$developer) or in_array($from_id2,$carlos) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (!in_array($idcarlos,$admin_user)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->first_name;
file_put_contents("data/admin_user/$chat_id.txt",$idcarlos . "\n" , FILE_APPEND);
file_put_contents("data/admin_user/$chat_id/mange.txt" , " *๐ฉ* [" . "@". $userr ."] *๐ช* " . "ยป" . " *๐ฉ* ". $idcarlos ." *๐ช* ". "\n" , FILE_APPEND);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"โ๏ธุงูุนุถู โ [$namee](tg://user?id=$idcarlos)
โ๏ธุชู ุชุฑููู ููุตุจุญ โ ุงุฏูู",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'โ ุชูุฒูู โ' ,'callback_data'=>"delad"]],
[['text'=>'โ ุฑุฌูุน โ' ,'callback_data'=>"rafaa"]],
]])
]); 
}}}
if ($data == "ad"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$developer) or in_array($from_id2,$carlos) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (in_array($idcarlos,$admin_user)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->first_name;
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"โ๏ธุงูุนุถู โ [$namee](tg://user?id=$idcarlos)
โ๏ธููู ุจุงููุนู โ ุงุฏูู",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'โ ุชูุฒูู โ' ,'callback_data'=>"delad"]],
[['text'=>'โ ุฑุฌูุน โ' ,'callback_data'=>"rafaa"]],
]])
]); 
}}}
if ($data == "delad"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$developer) or in_array($from_id2,$carlos) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (in_array($idcarlos,$admin_user)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->first_name;
$re_id_info = file_get_contents("data/admin_user/$chat_id.txt");
 $admn = file_get_contents("data/admin_user/$chat_id/mange.txt");
 $admn1 = explode("             \n",$admn);
 $str = str_replace($idcarlos,"",$re_id_info);
 $str2 = str_replace(" *๐ฉ* [" . "@". $userr ."] *๐ช* " . "ยป" . " *๐ฉ* ". $idcarlos ." *๐ช* ","",$admn1);
 file_put_contents("data/admin_user/$chat_id.txt",$str);
 file_put_contents("data/admin_user/$chat_id/mange.txt",$str2);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"โ๏ธุงูุนุถู โ [$namee](tg://user?id=$idcarlos)
โ๏ธุชู ุชูุฒูู ูู โ ุงูุงุฏูููู",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'โ ุฑุฌูุน โ' ,'callback_data'=>"rafaa"]],
]])
]); 
}
}
}
if ($data == "delad"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$developer) or in_array($from_id2,$carlos) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (in_array($idcarlos,$admin_user)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->first_name;
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"โ๏ธุงูุนุถู โ [$namee](tg://user?id=$idcarlos)
โ๏ธูุง ุงุณุชุทูุน ุชูุฒููู ููู ููุณ  โ ุงุฏูู",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'โ ุฑุฌูุน โ' ,'callback_data'=>"rafaa"]],
]])
]); 
}
}
}
if($data == "mz"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$carlos) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (!in_array($idcarlos,$mmyaz)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->first_name;
file_put_contents("data/mmyaz/$chat_id.txt",$idcarlos . "\n" , FILE_APPEND);
file_put_contents("data/mmyaz/$chat_id/mange.txt" , " *๐ฉ* [" . "@". $userr ."] *๐ช* " . "ยป" . " *๐ฉ* `". $idcarlos ."` *๐ช* ". "\n" , FILE_APPEND);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"โ๏ธุงูุนุถู โ [$namee](tg://user?id=$idcarlos)
โ๏ธุชู ุชุฑููู ููุตุจุญ โ ูููุฒ",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'โ ุชูุฒูู โ' ,'callback_data'=>"delmz"]],
[['text'=>'โ ุฑุฌูุน โ' ,'callback_data'=>"rafaa"]],
]])
]); 
}}}
if ($data == "mz"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$carlos) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (in_array($idcarlos,$mmyaz)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->first_name;
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"โ๏ธุงูุนุถู โ [$namee](tg://user?id=$idcarlos)
โ๏ธููู ุจุงููุนู โ ูููุฒ",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'โ ุชูุฒูู โ' ,'callback_data'=>"delmz"]],
[['text'=>'โ ุฑุฌูุน โ' ,'callback_data'=>"rafaa"]],
]])
]); 
}}}
if ($data == "delmz"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$carlos) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (in_array($idcarlos,$mmyaz)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->first_name;
$re_id_info = file_get_contents("data/mmyaz/$chat_id.txt");
	$mdrs = file_get_contents("data/mmyaz/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($idcarlos,"",$re_id_info);
	$str2 = str_replace(" *๐ฉ* [" . "@". $userr ."] *๐ช* " . "ยป" . " *๐ฉ* `". $idcarlos ."` *๐ช* ","",$mdrs1);
	file_put_contents("data/mmyaz/$chat_id.txt",$str);
	file_put_contents("data/mmyaz/$chat_id/mange.txt",$str2);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"โ๏ธุงูุนุถู โ [$namee](tg://user?id=$idcarlos)
โ๏ธุชู ุชูุฒูู ูู โ ุงููููุฒูู",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'โ ุฑุฌูุน โ' ,'callback_data'=>"rafaa"]],
]])
]); 
}
}
}
if ($data == "delmz"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$carlos) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (!in_array($idcarlos,$mmyaz)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->first_name;
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"โ๏ธุงูุนุถู โ [$namee](tg://user?id=$idcarlos)
โ๏ธูุง ุงุณุชุทูุน ุชูุฒููู ููู ููุณ  โ ูููุฒ",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'โ ุฑุฌูุน โ' ,'callback_data'=>"rafaa"]],
]])
]); 
}
}
}
if ($data == "rafaa"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$carlos) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"โ๏ธุนุฒูุฒู โ [$name2](tg://user?id=$from_id2)
โ๏ธุงูุงู ูู ุจ ุชุญุฏูุฏ ุงูุฑุชุจู",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'โ ูุงุฆูุฉ ุงูุฑูุน โ' ,'callback_data'=>"mnas"],['text'=>'โ ูุงุฆูุฉ ุชูุฒูู โ' ,'callback_data'=>"mnas"]],
[['text'=>'โ ููุดุฆ ุงุณุงุณู โ' ,'callback_data'=>"mnas"],['text'=>'โ ููุดุฆ ุงุณุงุณู โ' ,'callback_data'=>"mnas"]],
[['text'=>'โ ููุดุฆ โ' ,'callback_data'=>"mn"],['text'=>'โ ููุดุฆ โ' ,'callback_data'=>"delmd"]],
[['text'=>'โ ูุฏูุฑ โ' ,'callback_data'=>"md"],['text'=>'โ ูุฏูุฑ โ' ,'callback_data'=>"delmd"]],
[['text'=>'โ ุงุฏูู โ' ,'callback_data'=>"ad"],['text'=>'โ ุงุฏูู โ' ,'callback_data'=>"delad"]],
[['text'=>'โ ูููุฒ โ' ,'callback_data'=>"mz"],['text'=>'โ ูููุฒ โ' ,'callback_data'=>"delmz"]],
[['text'=>'โ ุงูุบุงุก โ' ,'callback_data'=>"deletmil"]],
[['text'=>"โ ููุงุฉ ุงูุณูุฑุณ โ",'url'=>"t.me/$devchink"]],
]])
]); 
}
}
if (strpos($text, 'ุจูุน ููุงุทู') !== false or strpos($text, 'ุจูุน ูููุฏู') !== false){
if($game['game'][$chat_id][$from_id] >= 1 and $game['game'][$chat_id][$from_id] != null){
$num= str_replace(['ุจูุน ูููุฏู','ุจูุน ููุงุทู'],'',$text);
if ($num <= 300 && $num >= 1){ 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." ุชู ุฎุตู ~ { $num } ูู ูุฌููุฑุงุชู 
".$em." ูุชู ุฒูุงุฏุฉ ุชูุงุนูู ูู ุงููุฌููุนู",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, ]);
$msgs = json_decode(file_get_contents('data/msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+$num*5);
file_put_contents('data/msgs.json', json_encode($msgs));
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]-$num);file_put_contents('data/game.json', json_encode($game));
}
}
}
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)){
if ($rt && strpos($text, 'ุงุถู ุฑุณุงุฆู') !== false){
$num= str_replace('ุงุถู ุฑุณุงุฆู','',$text);
if ($num <= 300000000 && $num >= 1){ 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." ุชู ุงุถุงูุฉ ูู {$num} ูู ุงูุฑุณุงุฆู
",
'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id,
]);
$msgs = json_decode(file_get_contents('data/msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$re_id] = ($msgs['msgs'][$chat_id][$re_id]+$num);
file_put_contents('data/msgs.json', json_encode($msgs));
}
}
}
$ngat = file_get_contents("data/ngt.json");
$n = file_get_contents("data/sero.json");
if($status == "craetor" or in_array($from_id,$Dev) or in_array($from_id,$developer)){
if(strpos($text, "ุงุถู ููุงุท ") !== false){
$an = str_replace("ุงุถู ููุงุท ", "", $text);
if($tc == "supergroup"){
file_put_contents("data/ngt.json","ngat");
file_put_contents("data/sero.json","$an");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
".$em." ุนุฒูุฒู ~โชผ $info
".$em." ุดุฎุต ุงููุทููุจ ~โชผ $an
".$em." ูู ุจุฃุฑุณุงู ุนุฏุฏ ุงูููุงุท ููุชู ุชูุตูููู
",
 'reply_to_message_id'=>$message_id
,]);}}}
if($text and preg_match('/([0-9])/i',$text) && $ngat =="ngat"){
if($status == "craetor" or in_array($from_id,$Dev) or in_array($from_id,$developer)){
if($tc == "supergroup"){
bot("sendmessage",[
"chat_id"=>$chat_id,
'text'=>"
".$em." ุนุฒูุฒู ~โชผ $info
".$em." ุงูุนุถู ุงููุทููุจ ~โชผ $n
".$em." ุนุฏุฏ ุงูููุงุท ~โชผ $text
".$em." ุชู ุชูุตูู ุงูุทูุจ 
",
 'reply_to_message_id'=>$message_id
,]);
file_put_contents("data/ngt.json","");
$game['game'][$chat_id][$n] = ($game['game'][$chat_id][$n]+$text);file_put_contents('data/game.json', json_encode($game));
}}}

$oopp = file_get_contents("data/ngt.json");
$n = file_get_contents("data/sero.json");
if($status == "craetor" or in_array($from_id,$Dev) or in_array($from_id,$developer)){
if ($rt && $text == "ุงุถู ููุงุท" ){
if($tc == "supergroup"){
file_put_contents("data/ngt.json","nnam");
file_put_contents("data/sero.json","$re_id");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
".$em." ุนุฒูุฒู ~โชผ $info
".$em." ุดุฎุต ุงููุทููุจ ~โชผ $re_id
".$em." ูู ุจุฃุฑุณุงู ุนุฏุฏ ุงูููุงุท ููุชู ุชูุตูููู
",
 'reply_to_message_id'=>$message_id
,]);}}}
if($text && $oopp =="nnam"){
if($status == "craetor" or in_array($from_id,$Dev) or in_array($from_id,$developer)){
if($tc == "supergroup"){
bot("sendmessage",[
"chat_id"=>$chat_id,
'text'=>"
".$em." ุนุฒูุฒู ~โชผ $info
".$em." ุงูุนุถู ุงููุทููุจ ~โชผ $n
".$em." ุนุฏุฏ ุงูููุงุท ~โชผ $text
".$em." ุชู ุชูุตูู ุงูุทูุจ 
",
 'reply_to_message_id'=>$message_id
,]);
file_put_contents("data/ngt.json","");
$game['game'][$chat_id][$n] = ($game['game'][$chat_id][$n]+$text);file_put_contents('data/game.json', json_encode($game));
}}}
if($text == "ููุงุทู" and $game['game'][$chat_id][$from_id]!== NULL || $game['game'][$chat_id][$from_id]!== 0){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." ุงููุฃ ุนุฒูุฒู โ $info
".$em." ูููุฏู ุงูุญุงููุฃ โ .".$game['game'][$chat_id][$from_id].".
",
'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id,
]);
}
if($message and $tc == "supergroup"){
$msgs = json_decode(file_get_contents('data/msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+1);
file_put_contents('data/msgs.json', json_encode($msgs));
}
if($text == "msg" or $text == "ุฑุณุงุฆูู"){bot('sendmessage',['chat_id'=>$chat_id,'text'=>"*๐ฌ โ ุฑุณุงุฆูู ยป{ ".$msgs['msgs'][$chat_id][$from_id]." } โบ*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id,]);}
if($text == "ูุณุญ ุฑุณุงููู" or $text == "ูุณุญ ุฑุณุงุฆูู" || $text == "ุฑุณ"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"".$em." ุชู ูุณุญ ุฌููุน ุฑุณุงุฆูู",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, ]);
$msgs = json_decode(file_get_contents('data/msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]=0);
file_put_contents('data/msgs.json', json_encode($msgs));
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]-20);file_put_contents('data/game.json', json_encode($game));
}
$chatid = $update->edited_message->chat->id;
$fromid = $update->edited_message->from->id;
$edit = json_decode(file_get_contents('data/edit.json'),true);
$editMessage = $update->edited_message;
if($editMessage){
$edit['edit'][$chatid][$fromid] = ($edit['edit'][$chatid][$fromid]+1);
file_put_contents('data/edit.json', json_encode($edit));
}
if($edit['edit'][$chat_id][$from_id] == null){
$editt = 0;
}else{
$editt = $edit['edit'][$chat_id][$from_id];
}
if($text == 'ุณุญูุงุชู'){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>'".$em." ุณุญูุงุชู : '.$editt,
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
if($text == "ูุณุญ ุณุญูุงุชู" or $text == "ูุณุญ ุชุนุฏููุงุชู" || $text == "ุณุญ"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"".$em." ุชู ูุณุญ ุฌููุน ุชุนุฏููุงุชู",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, ]);
$edit = json_decode(file_get_contents('data/edit.json'),true);
$update = json_decode(file_get_contents('php://input'));
$edit['edit'][$chat_id][$from_id] = ($edit['edit'][$chat_id][$from_id]=0);
file_put_contents('data/edit.json', json_encode($edit));
}
if($msgs['msgs'][$chat_id][$from_id] > 8000){
$rate = array("100%",);
$rate1 = array_rand($rate,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 7000){
$rate = array("97%","90%","99%",);
$rate1 = array_rand($rate,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 6000){
$rate = array("83%","80%","87%",);
$rate1 = array_rand($rate,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 3000){
$rate = array("77%","70%",);
$rate1 = array_rand($rate,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 500){
$rate = array('69%','56%',);
$rate1 = array_rand($rate,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 200){
$rate = array("40%","43%","39%",);
$rate1 = array_rand($rate,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 100){
$rate = array("36%","29%",);
$rate1 = array_rand($rate,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 1){
$rate = array('18%','20%','6%',);
$rate1 = array_rand($rate,1);
}
if($msgs['msgs'][$chat_id][$from_id] > 8000){
$active = array("ุญุงุฑู ุงููุฑูุจ ",);
$abstfal = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 7000){
$active = array("ูุนูู ูุฑุจู ",);
$abstfal = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 6000){
$active = array("ุฌููู ุญุจู ","ูุงุฑ ูุดุฑุงุฑ ",);
$abstfal = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 3000){
$active = array("ุฎูุด ูุชูุงุนู ","ุงุณุทูุฑุฉ ุงูุชูุงุนู ","ุงููู ูุงู ุชูุงุนู ","ูุงูุณ ุงูุชูุงุนู ","ููู ุงูุชูุงุนู ",);
$abstfal = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 500){
$active = array('ูุชูุณุท ','ูุชูุงุนู ',);
$abstfal = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 1){
$active = array('ุถุนูู ',);
$abstfal = array_rand($active,1);
}
$new = json_decode(file_get_contents('data/new.json'),true);
if($message->new_chat_member){
$new['new'][$chat_id][$from_id] = ($new['new'][$chat_id][$from_id]+1);
file_put_contents('data/new.json', json_encode($new));
}

if($new['new'][$chat_id][$from_id] == null){
$new = 0;
}else{
$new = $new['new'][$chat_id][$from_id];
}
if($text == 'ุฌูุงุชู'){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." ุนุฏุฏ ุฌูุงุชู ุงููุถุงูู ููุง ~ $new
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
]);
}
if(in_array($from_id,$eri)){
$info = "ูุทูุฑ ุงูุณูุฑุณ";
}
elseif(in_array($from_id,$developer) ){
$info = "ูุทูุฑ ุซุงููู";
}
elseif(in_array($from_id,$Dev) ){
$info = "ูุทูุฑ ุงูุงุณุงุณู";
}
elseif(in_array($from_id,$nazar) ){
$info = "ููุดุฆ ุงุณุงุณู";
}
elseif(in_array($from_id,$carlos) ){
$info = "ููุดุฆ";
}
elseif($status == "creator"){
$info = "ุงููุงูู";
}
elseif(in_array($from_id,$manger) ){
$info = "ุงููุฏูุฑ";
}
elseif(in_array($from_id,$admin_user) ){
$info = "ุงุฏูู";
}
elseif(in_array($from_id,$mmyaz) ){
$info = "ุนุถู ูููุฒ";
}elseif($status == "member" ){
$info = "ุนุถู ููุท";
}
if(!$username){
$casss = "ูุงููุฌุฏ ููุฒุฑ";
}elseif($username){
$casss = "$username";
}

if(!$bio){
$biio = "ูุงููุฌุฏ ุจุงูู";
}elseif($bio){
$biio = "$bio";
}

if(!$username){
$usr = "ูุง ููุฌุฏ ูุนุฑู";
}elseif($username){
$usr = "@$username";
}
$usr = "@$username";

$armofom = $settings["information"]["textaddid"];
$idchange = file_get_contents("data/ok.txt");
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)){
if($text == "ุชุนููู ุงูุงูุฏู" or $text == "ุชุนูู ุงูุงูุฏู" || $text == "ุชุบ"){
file_put_contents("data/ok.txt",$chat_id);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"โ๏ธุงุฑุณู ุงูุงู ุงููุต
โ๏ธ ุงุถุบุท ูููุณุฎ
โ๏ธ  ููููู ุงุถุงูู :
- ูุนุฑุถ ุงููุนุฑู > `{ุงููุนุฑู}`
- ูุนุฑุถ ุงูุฑุณุงุฆู > `{ุงูุฑุณุงุฆู}`
- ูุนุฑุถ ุงูุตูุฑ > `{ุงูุตูุฑ}`
- ูุนุฑุถ ุงูุงูุฏู > `{ุงูุงูุฏู}`
- ูุนุฑุถ ุงูุฑุชุจู > `{ุงูุฑุชุจู}`
- ูุนุฑุถ ูุฌููุฑุงุช > `{ุงููุฌููุฑุงุช}`
- ูุนุฑุถ ุฌูุงุช > `{ุฌูุงุชู}`
- ูุนุฑุถ ุชูุงุนู > `{ุชูุงุนู}`
- ูุนุฑุถ ุชุนููู > `{ูุงูู}`
- ูุนุฑุถ ูุณุจุฉ ุชูุงุนู > `{ูุณุจุฉ ุชูุงุนู}`
- ูุนุฑุถ ุจุงูู > `{ุจุงูู}`
- ูุนุฑุถ ุณุญูุงุช > `{ุณุญูุงุชู}`
- ูุนุฑุถ ุงุณู ูุฌููุนู > `{ุงุณู ุงูุฌููุนุฉ}`

โ๏ธ ููุงุฉ ููุงูุด ุงูุงูุฏู : [@$devchink]
",'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
}
}
if($text and $idchange == $chat_id){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer)){
file_put_contents("data/ok.txt","none");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." ุชู ุชุนููู ุงูุงูุฏู ุจูุฌุงุญ
",'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
$settings["information"]["textaddid"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
elseif($text == "ุญุฐู ุงูุงูุฏู" or $text == "ูุณุญ ุงูุงูุฏู"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." ุงููุง ุนุฒูุฒู ~โชผ $info 
".$em." ุชู ุญุฐู ุงูุงูุฏู
",'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
$settings["information"]["textaddid"]="";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
$armofom = $settings["information"]["textaddid"];
if($text=="ุงูุฏู" or $text=="ุงูุฏูู" or $text=="id"){
$like = array("ููุด ุตูุฑู ุบูุจูู โน๏ธโค๏ธ","ุดูู ุนุณู ุโ๐ฏ๐ปโพ","ูููุง ุจูุนุงููู๐","ูุงุฑุชุงุญูู๐","ุชุญุจููุ๐","ูุฏูุช ุงูุญูู๐๐น","ูููู ูุงููู๐ฅบ","ุญูุบูู ูุงูููโน๏ธ","ููุงู ููุงุณูู ุจูุฑูุจูู๐","ูุงุฒู ุจููุง ุบูุฑูุง ุนุงุฏ๐");
$likee = array_rand($like,1);
$iduser = $settings["lock"]["iduser"];
$armofom = $settings["information"]["textaddid"];
if($armofom !== null){
if($iduser == "ููุชูุญ"){
$result = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id = $result["result"]["photos"][0][0]["file_id"];
$count = $result["result"]["total_count"];
$a = str_replace('{ุงูุงุณู}',"$first_name",$armofom);
$a = str_replace('{ุงูุงูุฏู}',$from_id,$a);
$a = str_replace('{ุงุณู ุงููุฌููุนุฉ}',$namegroup,$a);
$a = str_replace('{ุงููุนุฑู}',$usr,$a);
$a = str_replace('{ุงูุฑุชุจู}',$info,$a);
$a = str_replace('{ุงููุฌููุฑุงุช}',$game['game'][$chat_id][$from_id],$a);
$a = str_replace('{ุงูุฑุณุงุฆู}',$msgs['msgs'][$chat_id][$from_id],$a);
$a = str_replace('{ุงูุตูุฑ}',$count,$a);
$a = str_replace('{ุณุญูุงุชู}',$editt,$a);
$a = str_replace('{ุฌูุงุชู}',$new,$a);
$a = str_replace('{ุชูุงุนู}',$active[$abstfal],$a);
$a = str_replace('{ูุงูู}',$like[$likee],$a);
$a = str_replace('{ุจุงูู}',$biio,$a);
$a = str_replace('{ูุณุจุฉ ุชูุงุนู}',$rate[$rate1],$a);
$g = $a;
var_dump(
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"$file_id",
'caption'=>"$g",
'reply_to_message_id'=>$message->message_id,
]));
}
}
}
$armofom = $settings["information"]["textaddid"];
if($text == "ุงูุฏู" or $text=="ุงูุฏูู" or $text=="ุง"){
$likeee = array("ุงูุงูุฏู ุจุงูุตูุฑุฉ ูุนุทู ุญุงููุฃ","ุงูุงูุฏู ุจุงูุตูุฑุฉ ูุนุทู ุญุงููุฃ");
$likeeee = array_rand($likeee,1);
$armofom = $settings["information"]["textaddid"];
if($armofom !== null){
if($iduser !== "ููุชูุญ"){
$result = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id = $result["result"]["photos"][0][0]["file_id"];
$count = $result["result"]["total_count"];
$g = array_rand($a,1);
$a = str_replace('{ุงูุงุณู}',"$first_name",$armofom);
$a = str_replace('{ุงูุงูุฏู}',$from_id,$a);
$a = str_replace('{ุงุณู ุงููุฌููุนุฉ}',$namegroup,$a);
$a = str_replace('{ุงููุนุฑู}',$usr,$a);
$a = str_replace('{ุงูุฑุชุจู}',$info,$a);
$a = str_replace('{ุงููุฌููุฑุงุช}',$game['game'][$chat_id][$from_id],$a);
$a = str_replace('{ุงูุฑุณุงุฆู}',$msgs['msgs'][$chat_id][$from_id],$a);
$a = str_replace('{ุงูุตูุฑ}',$count,$a);
$a = str_replace('{ุณุญูุงุชู}',$editt,$a);
$a = str_replace('{ุฌูุงุชู}',$new,$a);
$a = str_replace('{ุชูุงุนู}',$active[$abstfal],$a);
$a = str_replace('{ูุงูู}',$likeeee[$likeee],$a);
$a = str_replace('{ุจุงูู}',$biio,$a);
$a = str_replace('{ูุณุจุฉ ุชูุงุนู}',$rate[$rate1],$a);
$g = $a;
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"$g",
'reply_to_message_id'=>$message->message_id,
]);
}
}
}
$armofom = $settings["information"]["textaddid"];
if($text=="ุงูุฏู" or $text=="ุงูุฏูู" or $text=="ุง"){
$iduser = $settings["lock"]["iduser"];
$armofom = $settings["information"]["textaddid"];
$result = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id = $result["result"]["photos"][0][0]["file_id"];
$count = $result["result"]["total_count"];
if($armofom == null){
if($iduser == "ููุชูุญ"){
$result=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id=$result["result"]["photos"][0][0]["file_id"];
$count=$result["result"]["total_count"];
var_dump(
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"$file_id",
'caption'=>"*
".$em." ุงูุฏูู โ *`$from_id`*.
".$em." ูุนุฑูู โ $usr.
".$em." ุฑุชุจุชู โ $info.
".$em." ุชุนุฏููุงุชู โ $editt.
".$em." ุตูุฑู โ $count.
".$em." ุฑุณุงุฆูู โ.".$msgs['msgs'][$chat_id][$from_id].".
*",'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
]));
}
}
}
$armofom = $settings["information"]["textaddid"];
if($text == "ุงูุฏู" or $text=="ุงูุฏูู" or $text=="ุง"){
$armofom = $settings["information"]["textaddid"];
$result = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id = $result["result"]["photos"][0][0]["file_id"];
$count = $result["result"]["total_count"];
if($armofom == null){
if($iduser !== "ููุชูุญ"){
$result=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id=$result["result"]["photos"][0][0]["file_id"];
$count=$result["result"]["total_count"];
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"*
".$em." ุงูุฏูู โ *`$from_id`*.
".$em." ูุนุฑูู โ $usr.
".$em." ุฑุชุจุชู โ $info.
".$em." ุชุนุฏููุงุชู โ $editt.
".$em." ุตูุฑู โ $count.
".$em." ุฑุณุงุฆูู โ.".$msgs['msgs'][$chat_id][$from_id].".
*",'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
}
if($text == "๐"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ููุด ุงูุญูู ุถุงูุฌ โค๏ธ๐",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "๐ณ"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ูุง ุจุณ ูุง ุดูุช ุฎุงูุชู ุงูุดูุฑู ๐ณ๐น๐ท",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "๐ญ"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ูุชุจุฌู ุญูุงุชู ๐ญ๐ญ",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "๐ก"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ุงุจุฑุฏ  ๐",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "๐"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ูููููฬฬท ุฅุขููุญููโคููุจ ูููููฬฬท โค๏ธ๐",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "๐"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ุจุงุน ุงูุบูุฒู ๐ ุชููุช ๐๐",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "๐"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ุทุจุจ ูุณุงูู ุฌูู ุนูุจ ๐",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "โน๏ธ"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ูุถูุฌ ุญุจูุจู ๐ขโค๏ธ๐",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "๐ฅบ"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ุงูู ููเขชูุญูู ุดุจูฺช ุถูุงููุฌ๐๐ฅบ",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ุงูุณูุงู ุนูููู"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ูุนูููู ุงูุณูุงู ูุฑุญูุฉ ุงููู ูุจุฑูุงุชู๐๐",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ููู ุญุงูู"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ุชูููุงู ุนูเขชูู ูุชุง ฺชููฺช๐๐",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ุดูููู"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ุนูเขชเขชูู ุจุฎูเขช ุงุฐุง ุงููุชู ุจุฎูเขช๐๐",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ุดูููุฌ"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ุนูเขชเขชูู ุจุฎูเขช ุงุฐุง ุงููุชู ุจุฎูเขช๐๐",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ุดูููุฌ"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ุนูเขชเขชูู ุจุฎูเขช ุงุฐุง ุงููุชู ุจุฎูเขช๐๐",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ุฏูู"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ุฏูู ููุนุฏ ุน ุนูุงุฏ ุงููุงูููู ๐คท๐ผโโ๏ธ๐",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ุฏููุฌ"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ุงุฏูู ุงูุงูู ูุงูุบุงูู  โค๏ธ",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ุฏููู"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ูุฏูู ูุจุถู ูุงูุญุจ ๐โบ๏ธ",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ุจุฎูุฑ"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ุฏููฺช ุจุฎูเขช ุญูุงุชู? ๐๐ฏ",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ููุฑุช"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ููููเขชู/ุฌ ุญูุงุชู? ๐ฅบ๐",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ููุฑุชู"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ููููเขชู/ุฌ ุญูุงุชู? ๐ฅบ๐",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ููุฑุชู"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ููููเขชู/ุฌ ุญูุงุชู? ๐ฅบ๐",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ุดูุฑุฃ"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ุงุฏูู ูููุููเขชูู ุ๐ค",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ุดูุฑุง"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ุงุฏูู ูููุููเขชูู ุ๐ค",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ุดูู"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ุดูุููููฺช ๐๐น",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ุดุชุฑูุฏ"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ุงุฑูุฏ ุงุณูุท ุฑุงุณ ุงูุฒูุงุญู ๐น๐๐",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ููู"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ูููุงูุงุช ูุญุงุช ๐๐ป",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ูุญ"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ูุญุงุช ุญูุงุชู๐โค",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ุชู"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ุนูุจ ุงุจูู/ุจุชู ุงุชูู/ู ุงูุจุฑ ูููุง ุดููุฉ ๐๐น",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ุชุฎูููู"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ุงุฎููู ุจุฒุงููู 380 ุฏุฑุฌู ูุงูุชู ุชุนุฑู ุงูุจุงูู ๐ธ",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ุงูุฑูู"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ุฏููู ุดููู ุงุทูู ุฎููุชู ุงูู๐พ๐๐ฟ๐ท",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ุจุงู"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ุจุงูุงุช ุญูุงุชู ๐",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ุฒุงุญู"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ุฒุงุญู ุนูู ุฎุงูุชู ุงูุดูุฑู ๐",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ูุงู"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ูููู ๐๐ฟ",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ุดูู ูุงูู"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ุบูุฑู/ุฌ ุจู ููุจ ูุงูู ูุจุนุฏ ููุจู๐โค๏ธ๏ธ",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ุดูู"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ูููุงุฎููู? ุดูุููููฺช ๐๐น๐๐ฏ",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ูุนุฒููู"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ุทุฑุทุงุง ุทุฑุทุงุง ุทุฑุทุงุง ๐๐",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ุฒุงุญูู"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ูู ุฒุงุญูุชูู ุฌุงู ูุงููุช ุฒุงุญูู ๐๐ธ",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ุญููุด"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ุงููุด ุฑุงุณู ๐ค",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ุถูุฌู"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ุดู ุงููุฏ ุงููุจู ูุงูู ๐ ูู ุจุนุฏู/ุฌ ูุงุฒุงุญู/ุฉ ๐๐",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ุตุจุงุญูู"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ููููู ููุฏููุช ุตุจุงุญฺช ๐๐",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ุตุจุงุญ ุงูุฎูุฑ"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ููููู ููุฏููุช ุตุจุงุญฺช ๐๐",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "๐๐"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ุถฺชู ุชเขชุฏ เขชูุญ ุฏุงูููู ุนูุบเขชูู๐๐",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ูููู"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ุถฺชู ุชเขชุฏ เขชูุญ ุฏุงูููู ุนูุบเขชูู๐๐",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ูุณุงุก ุงูุฎูุฑ"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ูุณูุขุก ุงูููุงุณูููู ๐",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ุทุฑุฏ"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendvoice',[
'chat_id'=>$chat_id,
'voice'=>"https://t.me/R_EIII/2",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ุญุธุฑ"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendvoice',[
'chat_id'=>$chat_id,
'voice'=>"https://t.me/R_EIII/4",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ุญุจุฌ"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendvoice',[
'chat_id'=>$chat_id,
'voice'=>"https://t.me/R_EIII/3",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ุฎุงุต"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendvoice',[
'chat_id'=>$chat_id,
'voice'=>"https://t.me/R_EIII/5",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ุฎุงุตุฌ"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendvoice',[
'chat_id'=>$chat_id,
'voice'=>"https://t.me/R_EIII/5",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ุฎุงุตู"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendvoice',[
'chat_id'=>$chat_id,
'voice'=>"https://t.me/R_EIII/5",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ุชุซุจูุช"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendvoice',[
'chat_id'=>$chat_id,
'voice'=>"https://t.me/R_EIII/6",
'reply_to_message_id'=>$message->message_id, 
]);
}}
$message_id = $update->message->message_id;
if($text == "ุงูุฑุงูู ุฏุนุงุก"){
if($settings["lock"]["rdona"] == "ููููู"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ุงูููู ุนุฐุจ ุงููุฏุฑุณูู ๐ข ูููู ุงูุงุญูุงุก ูุงูุงููุงุช ๐ญ๐ฅ ุงูููู ุนุฐุจ ุงู ุงูุงููููุฒู ๐ญ๐ ูููุฑุจูุง ุจูุชูุงุฑ ุงูุฑุฆูุณู ๐ ุงูููู ุนุฐุจ ุงู ุงูุฑูุงุถูุงุช ูุญูููุง ุงูู ุบุณุงูู ุจุทุงููุงุช ๐ ุงูููู ุนุฐุจ ุงู ุงูุงุณูุงููู ูุงุฌุนููุง ุจุงุฆุนุฉ ุงูุดุงููู ๐ญ๐ ุงูููู ุนุฐุจ ุงู ุงูุนุฑุจู ูุญูููุง ุงูู ุจุงุฆุนู ุงูุจูุจู ุงูููู ุนุฐุจ ุงู ุงูุฌุบุฑุงููู ูุงุฌุนููุง ููุฏุฌุงุฌู ุงูุญุงููุฉ ุงูููู ุนุฐุจ ุงู ุงูุชุงุฑูุฎ ูุฒุญูููุง ุจูุดุฑู ูู ุงูุจุทูุฎ ูุงุฑุณููุง ุงูู ุงููุฑูุฎ ุงูููู ุนุฐุจ ุงู ุงูุงุญูุงุก ูุงุฌุนููุง ูู ููููุงุก ุงูููู ุนุฐุจ ุงููุนุงูู ุงูุชูู ุจููุฏุฑุณู ุจูุงูู ๐๐๐ุ",
'reply_to_message_id'=>$message->message_id, 
]);
}
}


if($text == "ุฑุงุจุท ุญุฐู" or $text == "ุฑุงุจุท ุงูุญุฐู" or $text == "ุฑุงุจุท ุญุฐู ุชูุฌุฑุงู" and in_array($from_id, $Dev)){
bot("sendmessage",['chat_id'=>$chat_id,'text'=>"โ๏ธุญุญุฐู ู ุนูุด ุญูุงุชู ูุฑุชุงุญ
๊นโ โ โ โ โ โ โ๊น
โ๏ธ[ุฑุงุจุท ุญุฐู ุชูุฌุฑุงู](https://telegram.org/deactivate)
",'parse_mode'=>"Markdown",
'disable_web_page_preview'=> true ,
]); 
}
if ( $rt && $text =="ุชุซุจูุช"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) { bot('pinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$replyid
      ]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
".$em." ุชู ุชุซุจูุช ุงูุฑุณุงูู
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
elseif($text =="ุงูุบุงุก ุงูุชุซุจูุช"){
if( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) { bot('unpinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$replyid
      ]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
".$em." ุชู ุงูุบุงุก ุชุซุจูุช ุงูุฑุณุงูู
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}

if ($text =="ุชูุนูู ุงูุจุญุซ" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$carlos) || in_array($from_id,$eri) || in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
".$em." ุจูุงุณุทุฉ โ [$first_name](tg://user?id=$from_id)
".$em." ุชู ุชูุนูู ุงูุจุญุซ ุจูุฌุงุญ
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["serhi"]="ููููู";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"ุนุฐุฑุง ุนุฒูุฒู ุงููุฌููุนุฉ ููุณ ููุนูุฉ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="ุชุนุทูู ุงูุจุญุซ" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)|| in_array($from_id,$carlos) || in_array($from_id,$eri) || in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
".$em." ุจูุงุณุทุฉ โ [$first_name](tg://user?id=$from_id)
".$em." ุชู ุชุนุทูู ุงูุจุญุซ ุจูุฌุงุญ
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["serhi"]="ููุชูุญ";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"ุนุฐุฑุง ุนุฒูุฒู ุงููุฌููุนุฉ ููุณ ููุนูุฉ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif( $text =="ุชูุนูู ุงุบุงูู" or $text == "ุชูุนูู ุงูุงุบุงูู"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
".$em." ุจูุงุณุทุฉ โ [$first_name](tg://user?id=$from_id)
".$em." ุชู ุชูุนูู ุงูุงุบุงูู ุจูุฌุงุญ
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["ahbgii"]="ููููู";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"ุนุฐุฑุง ุนุฒูุฒู ุงููุฌููุนุฉ ููุณ ููุนูุฉ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
if ( $text =="ุชุนุทูู ุงูุงุบุงูู" or $text == "ุชุนุทูู ุงุบุงูู"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
".$em." ุจูุงุณุทุฉ โ [$first_name](tg://user?id=$from_id)
".$em." ุชู ุชุนุทูู ุงูุงุบุงูู ุจูุฌุงุญ
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["ahbgii"]="ููุชูุญ";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"ุนุฐุฑุง ุนุฒูุฒู ุงููุฌููุนุฉ ููุณ ููุนูุฉ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif( $text =="ุชูุนูู ุงูุฑูุน" or $text == "ุชูุนูู ุงูุฑูุน"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
".$em." ุจูุงุณุทุฉ โ [$first_name](tg://user?id=$from_id)
".$em." ุชู ุชูุนูู ุงูุฑูุน ุจูุฌุงุญ
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["rfaabot"]="ููููู";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"ุนุฐุฑุง ุนุฒูุฒู ุงููุฌููุนุฉ ููุณ ููุนูุฉ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
if ( $text =="ุชุนุทูู ุงูุฑูุน" or $text == "ุชุนุทูู ุงูุฑูุน"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
".$em." ุจูุงุณุทุฉ โ [$first_name](tg://user?id=$from_id)
".$em." ุชู ุชุนุทูู ุงูุฑูุน ุจูุฌุงุญ
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["rfaabot"]="ููุชูุญ";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"ุนุฐุฑุง ุนุฒูุฒู ุงููุฌููุนุฉ ููุณ ููุนูุฉ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif( $text =="ุชูุนูู ูุฒููู" or $text == "ุชูุนูู ูุฒู"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
".$em." ุจูุงุณุทุฉ โ [$first_name](tg://user?id=$from_id)
".$em." ุชู ุชูุนูู ุงูุฑ ูุฒููู
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["rfabot"]="ููููู";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"ุนุฐุฑุง ุนุฒูุฒู ุงููุฌููุนุฉ ููุณ ููุนูุฉ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
if ( $text =="ุชุนุทูู ูุฒููู" or $text == "ุชุนุทูู ูุฒู"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
".$em." ุจูุงุณุทุฉ โ [$first_name](tg://user?id=$from_id)
".$em." ุชู ุชุนุทูู ุงูุฑ ูุฒููู
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["rfabot"]="ููุชูุญ";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"ุนุฐุฑุง ุนุฒูุฒู ุงููุฌููุนุฉ ููุณ ููุนูุฉ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif( $text =="ุชูุนูู ุญุณุงุจ ุงูุนูุฑ" or $text == "ุชูุนูู ุงูุนูุฑ"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
".$em." ุจูุงุณุทุฉ โ [$first_name](tg://user?id=$from_id)
".$em." ุชู ุชูุนูู ุญุณุงุจ ุงูุนูุฑ
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["zkrf"]="ููููู";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"ุนุฐุฑุง ุนุฒูุฒู ุงููุฌููุนุฉ ููุณ ููุนูุฉ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
if ( $text =="ุชุนุทูู ุญุณุงุจ ุงูุนูุฑ" or $text == "ุชุนุทูู ุงูุนูุฑ"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
".$em." ุจูุงุณุทุฉ โ [$first_name](tg://user?id=$from_id)
".$em." ุชู ุชุนุทูู ุญุณุงุจ ุงูุนูุฑ
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["zkrf"]="ููุชูุญ";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"ุนุฐุฑุง ุนุฒูุฒู ุงููุฌููุนุฉ ููุณ ููุนูุฉ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif( $text =="ุชูุนูู ุถุงููู" or $text == "ุชูุนูู ูู ุถุงููู"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
".$em." ุจูุงุณุทุฉ โ [$first_name](tg://user?id=$from_id)
".$em." ุชู ุชูุนูู ุงูุฑ ุถุงููู
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["nweadd"]="ููููู";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"ุนุฐุฑุง ุนุฒูุฒู ุงููุฌููุนุฉ ููุณ ููุนูุฉ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
if ( $text =="ุชุนุทูู ุถุงููู" or $text == "ุชุนุทูู ูู ุถุงููู"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
".$em." ุจูุงุณุทุฉ โ [$first_name](tg://user?id=$from_id)
".$em." ุชู ุชุนุทูู ุงูุฑ ุถุงููู
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["nweadd"]="ููุชูุญ";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"ุนุฐุฑุง ุนุฒูุฒู ุงููุฌููุนุฉ ููุณ ููุนูุฉ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="ุชูุนูู ุงูุงูุนุงุจ"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
".$em." ุจูุงุณุทุฉ โ [$first_name](tg://user?id=$from_id)
".$em." ุชู ุชูุนูู ุงูุงูุนุงุจ ุจูุฌุงุญ
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["game"]="ููุชูุญ";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"ุนุฐุฑุง ุนุฒูุฒู ุงููุฌููุนุฉ ููุณ ููุนูุฉ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
if ($text =="ุชุนุทูู ุงูุงูุนุงุจ" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
".$em." ุจูุงุณุทุฉ โ [$first_name](tg://user?id=$from_id)
".$em." ุชู ุชุนุทูู ุงูุงูุนุงุจ ุจูุฌุงุญ
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["game"]="ููููู";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"ุนุฐุฑุง ุนุฒูุฒู ุงููุฌููุนุฉ ููุณ ููุนูุฉ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}