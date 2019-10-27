<?php

namespace bboyyu51\trickortreat;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase{

    /** @var API */
    private $api;

    public function onLoad(){
        $this->api = new APIInstance();
    }

    public function onEnable(){
        $this->getServer()->getCommandMap()->register("halloween", new HalloweenCommand($this->api));
    }
}