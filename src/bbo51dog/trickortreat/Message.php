<?php

namespace bbo51dog\trickortreat;

class Message{

    /** @var string */
    public const PREFIX = "§l§c【§6TrickOrTreat_Plugin§c】 §r";
    public const SENDER_NOT_PLAYER = "§cサーバー内で使用してください";
    public const RESULT_TRICK_BROADCAST = Message::PREFIX."%playerさんがイタズラされました！";
    public const RESULT_TREAT_BROADCAST = Message::PREFIX."%playerさんがお菓子をもらいました！";

    /** @var string[] */
    public const RESULT_TRICK = [
        
    ];
    public const RESULT_TREAT = [

    ];
}