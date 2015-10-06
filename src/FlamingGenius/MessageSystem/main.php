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
  $sc = $this->getConfig->()->get("broadcast-shortcut");
  $player = $this->getServer()->getPlayer()->getName();
  if($player->hasPermission("ms.command"){
   if(strtolower($cmd) == $sc){
    $tag = $this->getConfig()->get("broadcast-tag");
    $color = $this->getConfig()->get("broadcast-color");
    $mcolor = $this->getConfig()->get("brm-color");
    $this->getServer()->broadcastMessage($color . $tag . $mcolor . " " . $msg);
   }

   elseif(strtolower($cmd) == $sc){
    $tag = $this->getConfig()->get("bgod-tag");
    $sc = $this->getConfig->()->get("bgod-shortcut");
    $color = $this->getConfig()->get("bgod-color");
    $mcolor= $this->getConfig()->get("bgm-color");
    $this->getServer()->broadcastMessage($color . $tag . $mcolor . " " . $msg);
   }

   elseif(strtolower($cmd) == $sc){
    $sc = $this->getConfig->()->get("bhero-shortcut");
    $tag = $this->getConfig()->get("bhero-tag");
    $color = $this->getConfig()->get("bhero-color");
    $mcolor= $this->getConfig()->get("bhm-color");
    $this->getServer()->broadcastMessage($color . $tag . $mcolor . " " . $msg);
   }

   elseif(strtolower($cmd) == $sc){
    $sc = $this->getConfig->()->get("announce-shortcut");
    $tag = $this->getConfig()->get("announce-tag");
    $color = $this->getConfig()->get("announce-color");
    $mcolor= $this->getConfig()->get("anm-color");
    $this->getServer()->broadcastMessage($color . $tag . $mcolor . " " . $msg);
   }

   elseif(strtolower($cmd) == $sc){
    $sc = $this->getConfig->()->get("server-shortcut");
    $tag = $this->getConfig()->get("server-tag");
    $color = $this->getConfig()->get("server-color");
    $mcolor= $this->getConfig()->get("sem-color");
    $this->getServer()->broadcastMessage($color . $tag . $mcolor . " " . $msg);
   }

   elseif(strtolower($cmd) == $sc){
    $sc = $this->getConfig->()->get("console-shortcut");
    $tag = $this->getConfig()->get("console-tag");
    $color = $this->getConfig()->get("console-color");
    $mcolor= $this->getConfig()->get("com-color");
    $this->getServer()->broadcastMessage($color . $tag . $mcolor ." " . $msg);
   }
  
   elseif(strtolower($cmd) == $sc){
    $sc = $this->getConfig->()->get("bcia-shortcut");
    $tag = $this->getConfig()->get("bcia-tag");
    $color = $this->getConfig()->get("bcia-color");
    $mcolor= $this->getConfig()->get("bcm-color");
    $this->getServer()->broadcastMessage($color . $tag . $mcolor . " " . $msg);
   }


 }
  else{
   $this->getServer()->broadcastMessage("§4You do not have permission");
  }
}



}

?>
