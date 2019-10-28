<?php

namespace bbo51dog\trickortreat\api\instance;

use pocketmine\entity\Effect;
use pocketmine\entity\EffectInstance;
use bbo51dog\trickortreat\api\Trick;

class TrickInstance implements Trick{

    public function blindness(Player $player): void{
        $this->effect($player, Effect::BLINDNESS);
    }

    public function hunger(Player $player): void{
        $this->effect($player, Effect::HUNGER);
    }

    public function poison(Player $player): void{
        $this->effect($player, Effect::POISON);
    }

    public function slowness(Player $player): void{
        $this->effect($player, Effect::SLOWNESS);
    }

    public function nausea(Player $player): void{
        $this->effect($player, Effect::NAUSEA);
    }

    private function effect(Player $player, int $id): void{
        $effect = new EffectInstance(Effect::getEffect($id), 300, 1, false);
        $player->addEffect($effect);
    }
}