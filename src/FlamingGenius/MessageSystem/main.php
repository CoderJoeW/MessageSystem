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
  $cmd = $command->getName();
  $msg = implode(" " , $args);
  switch($cmd){
   case "broadcast":
    $sc = $this->getConfig()->get("broadcast-shortcut");
    $tag = $this->getConfig()->get("broadcast-tag");
    $color = $this->getConfig()->get("broadcast-color");
    $mcolor = $this->getConfig()->get("brm-color");
    $this->getServer()->broadcastMessage($color . $tag . $mcolor . " " . $msg);
    break;
   case "bgod":
    
    break;
   case "bhero":
    
   break;
   case "announce":
    
   break;
   case "server":
    
   break;
   case "console":
    
   break;
   case "bcia":
    
   break;
  }



}

?>
