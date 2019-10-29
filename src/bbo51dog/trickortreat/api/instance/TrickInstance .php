<?php

namespace bbo51dog\trickortreat\api\instance;

use pocketmine\entity\Effect;
use pocketmine\entity\EffectInstance;
use pocketmine\level\Position;
use bbo51dog\trickortreat\api\Trick;

class TrickInstance implements Trick{

    private function blindness(Player $player): void{
        $this->effect($player, Effect::BLINDNESS);
    }

    private function hunger(Player $player): void{
        $this->effect($player, Effect::HUNGER);
    }

    private function poison(Player $player): void{
        $this->effect($player, Effect::POISON);
    }

    private function slowness(Player $player): void{
        $this->effect($player, Effect::SLOWNESS);
    }

    private function nausea(Player $player): void{
        $this->effect($player, Effect::NAUSEA);
    }
    
    private function title(Player $player): void{
        $player->addTitle("§l§k§4aaaaaaaaaaaa", "§6HALLOWEEN!!", 10, 300, 10);
    }

    private function effect(Player $player, int $id): void{
        $effect = new EffectInstance(Effect::getEffect($id), 300, 1, false);
        $player->addEffect($effect);
    }
}