<?php
ob_start();
// Config Bot
define('API_KEY','278836889:AAGPnLZKesFvcTaGEQmo9zvM-DlFp_GMO6M'); // ex; 249472322:AAErkOx2Sm_yJdR2vx_s0xW_A9uU8_xPjp8 //
define('ADMIN','{249010980,216137613}'); // ex; {24853314,216137613,0} //
// end Config //

// utils bot --> //
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
},
function pwr($method1,$datas1=[]){
    $url1 = "https://api.pwrtelegram.xyz/bot".API_KEY."/".$method1;
    $ch1 = curl_init();
    curl_setopt($ch1,CURLOPT_URL,$url1);
    curl_setopt($ch1,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch1,CURLOPT_POSTFIELDS,$datas1);
    $res1 = curl_exec($ch1);
    if(curl_error($ch1)){
        var_dump(curl_error($ch1));
    }else{
        return json_decode($res1);
    }
}
////////////////
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$editm = $update->edited_message;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$id = $message->from->id;
$fristname = $message->from->frist_name;
$lastname = $message->from->last_name;
$usernmae = $message->from->username;
$text1 = $message->text;
$fadmin = $message->from->id;
$admin = ADMIN;
$file_o = $mid.'.json';
file_put_contents($file_o,json_encode($update->message->text));
chmod($file_o,0777);
  $file_o = $eid.'.json';
  file_put_contents($file_o,json_encode($update->edited_message->text));
}if(preg_match('/^\/([Ss]tart)/',$text1)){
  $text = "*Hi,* [".$fristname."](https://tekegram.me/".$usernmae.") \n *Welcome to* [Beez 🐝](https://telegram.me/beez_z)!\n *Governor:* [Wathiq](https://telegram.me/iluli) [`249010980`] \n - @WathiqApi \n - @Beezinc \n Moderators:\n• Wathiq [249010980]\n• Copy [216137613]\n\n - No pornography\n- No advertising\n- No spam";
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$text,
    'disable_web_page_preview'=>'true',
	'disable_notification'=>'false',
    'parse_mode'=>'Markdown',
	'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
          ['text'=>'Channel','url'=>'https://telegram.me/joinchat/DtebJD-YicabzaggOWIHeQ']
        ]
      ]
    ])
  ]);
}elseif( $fadmin == $admin |  $fadmin == $admin2 and $update->message->text == '/stats'){
    $txtt = file_get_contents('member.txt');
    $member_id = explode("\n",$txtt);
    $mmemcount = count($member_id) -1;
  bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"users: $mmemcount 👤 "
    ]);
}elseif(preg_match('/^\/([Rr]ules)/',$text1)){
  $text = "
  *Welcome to* [Beez 🐝](https://telegram.me/beez_z)
  
  *Message of the Day:*
   _Whatever your level do not laugh, at least you level :)_
  
  *Rules:*
*1. Read the fucking manual.*
*2.* Don't ask to ask; just ask.
*3.* Don't feed the noobs. They'll only come back for more.
*4.* Use English and Arabic only.
*5.* Stay on-topic.
*6.* Do not abuse the bots.
*7.* No spam or advertisement.
*8.* Please keep stickers and audio messages to a minimum.

*Flags:*
• This group does not allow users to add bots.
• This group automatically removes users who flood.
• This group does not allow posting join links to outside groups.
• This group allows moderators to set the group photo, title, motd, and link.


Governor: Wathiq `[249010980]`

*Moderators:*
• Wathiq `[249010980]`
• Copy `[216137613]`

  ";
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$text,
    'disable_web_page_preview'=>'true',
    'parse_mode'=>'Markdown',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
          ['text'=>'Channel','url'=>'https://telegram.me/joinchat/DtebJD-YicabzaggOWIHeQ']
        ]
      ]
    ])
  ]);
}elseif(isset($update->message-> new_chat_member )){
	$textr = "*Hi,* [".$fristname."](https://tekegram.me/".$usernmae.") \n *Welcome to* [Beez 🐝](https://telegram.me/beez_z)!\n\n /`rulse` - Show rulse group\n"
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>$textr,
	'disable_web_page_preview'=>'true',
    'parse_mode'=>'Markdown',
    ]);
}elseif($fadmin == $admin |  $fadmin == $admin2 and $update->message->text == '/del'){
  pwr('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid,
  ]);
  
$txxt = file_get_contents('member.txt');
    $pmembersid= explode("\n",$txxt);
    if (!in_array($chat_id,$pmembersid)){
      $aaddd = file_get_contents('member.txt');
      $aaddd .= $chat_id."\n";
      file_put_contents('member.txt',$aaddd);
    }
