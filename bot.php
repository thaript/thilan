<?php 
@system("clear");
date_default_timezone_set('Asia/Manila');
$b="\033[1;35m";
$red="\033[1;31m";
$green="\033[1;32m";
$puti="\033[1;37m";
print "
[35m---------------------------[32m
$b
╭━╮╭━┳━━━┳━━━┳━━━┳━━━┳╮╱╭┳━╮╱╭╮
┃┃╰╯┃┃╭━━┫╭━╮┃╭━╮┃╭━╮┃┃╱┃┃┃╰╮┃┃
┃╭╮╭╮┃╰━━┫┃╱╰┫┃╱┃┃╰━╯┃┃╱┃┃╭╮╰╯┃
┃┃┃┃┃┃╭━━┫┃╭━┫╰━╯┃╭╮╭┫┃╱┃┃┃╰╮┃┃
┃┃┃┃┃┃╰━━┫╰┻━┃╭━╮┃┃┃╰┫╰━╯┃┃╱┃┃┃
╰╯╰╯╰┻━━━┻━━━┻╯╱╰┻╯╰━┻━━━┻╯╱╰━╯
╭━━━┳╮╱╭┳━━━━┳━━━╮╭━━━━┳━━━┳━━━┳╮
┃╭━╮┃┃╱┃┃╭╮╭╮┃╭━╮┃┃╭╮╭╮┃╭━╮┃╭━╮┃┃
┃┃╱┃┃┃╱┃┣╯┃┃╰┫┃╱┃┃╰╯┃┃╰┫┃╱┃┃┃╱┃┃┃
┃╰━╯┃┃╱┃┃╱┃┃╱┃┃╱┃┃╱╱┃┃╱┃┃╱┃┃┃╱┃┃┃╱╭╮
┃╭━╮┃╰━╯┃╱┃┃╱┃╰━╯┃╱╱┃┃╱┃╰━╯┃╰━╯┃╰━╯┃
╰╯╱╰┻━━━╯╱╰╯╱╰━━━╯╱╱╰╯╱╰━━━┻━━━┻━━━╯ :[31mLION NATION$b |
[35m---------------------------[32m
AUTHOR    :[34m
████████╗██╗░░██╗░█████╗░██████╗░██╗░░░██████╗░████████╗
╚══██╔══╝██║░░██║██╔══██╗██╔══██╗██║░░░██╔══██╗╚══██╔══╝
░░░██║░░░███████║███████║██████╔╝██║░░░██████╔╝░░░██║░░░
░░░██║░░░██╔══██║██╔══██║██╔══██╗██║░░░██╔═══╝░░░░██║░░░
░░░██║░░░██║░░██║██║░░██║██║░░██║██║██╗██║░░░░░░░░██║░░░
░░░╚═╝░░░╚═╝░░╚═╝╚═╝░░╚═╝╚═╝░░╚═╝╚═╝╚═╝╚═╝░░░░░░░░╚═╝░░░[32m
YOUTUBE   :[34mTech world
[32m
DESCRIPTION   :[31mThis file is make by thari.pt for the dialog megarun game[32m
[32m
WARNING:[31m USE AT YOUR OWN RISK - IF YOU WANT TO STOP SCRIPT - press CTRL and d in your key board then enter[32m
[32m
";

echo $green."Login";
$ar=0;$is=5;while($ar<$is){
sleep(1);
$ar++;
echo ".";
}
sleep(6);
echo $green."success"."\n\n";

while (true){
$log = "https://megarun.dialog.lk/api/v2/reward/redeem/5e995b5b8e6f3244f2516f29/aef75d278f8c629d6a0886acb5ce327fcacc520ad69ca2b80b516f4c970e4684";
$data ="";
$curl = curl_init();
curl_setopt_array($curl, array(
   CURLOPT_PORT => "443",
  CURLOPT_URL => "$log",
  CURLOPT_RETURNTRANSFER => false,
  CURLOPT_ENCODING => "",
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_TIMEOUT => 6,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_HTTPHEADER => array("Authorization:JWT eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiI1ZTQwMmE3MTE2NTNjMDY4Njc2Y2RjZmQiLCJtb2JpbGUiOiI3NjQ4NzQxNTIiLCJrZXkiOiI1NDI5Njk5IiwiaWF0IjoxNTg3MTA4Njg1fQ.ESe38u2V9MlDrG0WQUG0g98ARs48ecms4BNzpVFgi6I","X-Unity-Version:2018.3.0f2","User-Agent:Dalvik/2.1.0 (Linux; U; Android 5.1.1; SM-T285YD Build/LMY47V)","Connection:Keep-Alive","Accept-Encoding:gzip","Content-Length:0",

    )

));

$damang = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
$js = json_decode($damang,true);
$xu=$js["response"]["0"]["newtotalbid"];
echo "$green balance:$b"."$xu"."\n";

sleep(300);

}