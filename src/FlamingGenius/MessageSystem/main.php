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
  $msg = implode(" " , $args);
  if(strtolower($cmd) == "ms"){
   if($args[0] == "broadcast"){
    $this->getServer()->broadcastMessage($msg);
   }
   elseif($args[0] == "bgod"){
    $this->getServer()->broadcastMessage($msg);
   }
   elseif($args[0] == "bhero"){
    $this->getServer()->broadcastMessage($msg);
   }
   elseif($args[0] == "announce"){
    $this->getServer()->broadcastMessage($msg);
   }
   elseif($args[0] == "server"){
    $this->getServer()->broadcastMessage($msg);
   }
   elseif($args[0] == "console"){
    $this->getServer()->broadcastMessage($msg);
   }
   elseif($args[0] == "bcia"){
    $this->getServer()->broadcastMessage($msg);
   }
   elseif($args[0] == "help"){
    $help = $this->getConfig()->get("help-list");
    $sender->sendMessage($help);
   }
   elseif($args[0] != "help" or "bcia" or "console" or "server" or "announce" or "bhero" or "bgod" or "broadcast"){
    $sender->sendMessage("That is not a configured command");
   }
  }
 }
 
 

}

?>
