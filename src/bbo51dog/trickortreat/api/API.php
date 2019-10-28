<?php

namespace bbo51dog\trickortreat\api;

use pocketmine\Player;

interface API{

    /** @var int */
    public const TRICK = 0;
    public const TREAT = 1;

    public function select(): int;
    public function trick(Player $player): void;
    public function treat(Player $player): void;
    public function run(Player $player): int;
}