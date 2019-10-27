<?php

namespace bboyyu51\trickortreat;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase{
    public function onEnable(){
        $this->getServer()->getCommandMap()->register("halloween", new HalloweenCommand());
    }
}