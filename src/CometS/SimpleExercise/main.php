<?php

namespace CometS\SimpleExercise;

use pocketmine\plugin\PluginBase;

use pocketmine\event\Listener;

use pocketmine\player\Player;

use pocketmine\event\player\PlayerInteractEvent;

use CometS\SimpleExercise\Blocks\TestBlock;

class main extends PluginBase implements Listener {

public function onEnable(): void{

  $this->getServer()->getPluginManager()->registerEvents(new TestBlock(), $this);

}
  }