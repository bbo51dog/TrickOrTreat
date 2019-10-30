<?php

namespace bbo51dog\trickortreat\api;

use pocketmine\Player;

interface Treat{
    public function run(Player $player): void;
}