<?php

namespace bbo51dog\trickortreat\api\instance;

use pocketmine\entity\Effect;
use pocketmine\entity\EffectInstance;
use pocketmine\level\Position;
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

    public function teleport(Player $player): void{
        $y = $player->y + rand(10, 20);
        $pos = new Position($player->x, $y, $player->z, $player->getLevel());
        $player->teleport($pos);
    }

    private function effect(Player $player, int $id): void{
        $effect = new EffectInstance(Effect::getEffect($id), 300, 1, false);
        $player->addEffect($effect);
    }
}