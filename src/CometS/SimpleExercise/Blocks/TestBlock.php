<?php

namespace CometS\SimpleExercise\Blocks;

use CometS\SimpleExercise\main;
use pocketmine\event\Listener;
use pocketmine\block\Block;
use pocketmine\block\Stone;
use pocketmine\item\Durable;
use pocketmine\player\Player;
use pocketmine\block\BlockFactory;
use pocketmine\item\ItemFactory; 
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\block\VanillaBlocks;

class TestBlock implements Listener {

        public function OnInteract(PlayerInteractEvent $event){
        $block = $event->getBlock();
        $player = $event->getPlayer();

 $transformation = BlockFactory::getInstance()->get(0, 0, 5);

                if($block->getId() == 5){ 
                
      \pocketmine\Server::getInstance()->dispatchCommand($player, "bank");

                 }
                              
            } 
               
       } //class?
      
        