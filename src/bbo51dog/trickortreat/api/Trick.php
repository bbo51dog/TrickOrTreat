<?php

namespace bbo51dog\trickortreat\api;

use pocketmine\Player;

interface Trick{
    public function blindness(Player $player): void;
    public function hunger(Player $player): void;
    public function poison(Player $player): void;
    public function slowness(Player $player): void;
    public function nausea(Player $player): void;
    public function teleport(Player $player): void;
}