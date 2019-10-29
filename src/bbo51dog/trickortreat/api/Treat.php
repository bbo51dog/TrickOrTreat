<?php

namespace bbo51dog\trickortreat\api;

interface Treat{
    public function run(Player $player): void;
}