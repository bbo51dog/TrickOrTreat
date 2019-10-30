<?php

namespace bbo51dog\trickortreat\api;

use pocketmine\Player;

interface Trick{
    public function run(Player $player): void;
}