<?php

namespace bbo51dog\trickortreat\api;

interface API{

    /** @var int */
    public const TRICK = 0;
    public const TREAT = 1;

    public function select(): int;
    public function trick(): void;
    public function treat(): void;
}