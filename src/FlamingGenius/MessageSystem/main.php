<?php

namespace FlamingGenius\MessageSystem;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\Config;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\TextFormat;


class main extends PluginBase{

 public function onEnable(){
  $this->saveDefaultConfig();
 
 }

 public function onCommand(CommandSender $sender, Command $command, $label, array $args){
  $cmd = $this->command->getName();
  if(strtolower($cmd) == "ms"){
   if($args[0] == "broadcast"){
    //broadcast code
   }
   elseif($args[0] == "bgod"){

   }
   elseif($args[0] == "bhero"){

   }
   elseif($args[0] == "announce"){

   }
   elseif($args[0] == "server"){

   }
   elseif($args[0] == "console"){

   }
   elseif($args[0] == "bcia"){

   }
   elseif($args[0] == "help"){
    $help = $this->getConfig()->get("help-list");
    $sender->sendMessage($help);
   }
   else($args[0] == " "){
    $sender->sendMessage("That is not a configured command");
   }
  }
 }
 
 

}

?>
