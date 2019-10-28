<?php

namespace bbo51dog\trickortreat;

use pocketmine\plugin\PluginBase;
use bbo51dog\trickortreat\api\API;
use bbo51dog\trickortreat\api\instance\APIInstance;

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