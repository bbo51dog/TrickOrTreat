<?php

namespace bbo51dog\trickortreat;

class Message{

    /** @var string */
    public const PREFIX = "§l§c【§6TrickOrTreat_Plugin§c】 §r";
    public const SENDER_NOT_PLAYER = "§cサーバー内で使用してください";
    public const RESULT_TRICK_BROADCAST = Message::PREFIX."%playerさんがイタズラされました！";
    public const RESULT_TREAT_BROADCAST = Message::PREFIX."%playerさんがお菓子をもらいました！";
    public const EXCEPTION = Message::PREFIX."コマンドの実行に失敗しました : %reason";

    /** @var string[] */
    public const RESULT_TRICK = [
        Message::PREFIX."幽霊「悪い子にはいたずらしちゃうからな！！」",
        Message::PREFIX."ドラキュラ「はぁーっはっはっは！」",
        Message::PREFIX."オオカミ男「ｶﾞｫｫｫｫｯｯ！いたずらやっちゃえ！」",
        Message::PREFIX."フランケン「グアァァ……」",
    ];
    public const RESULT_TREAT = [
        Message::PREFIX."お…お菓子あげちゃうんだからねっ！//",
        Message::PREFIX."特別にお菓子をくれてやる、大事に食えよ",
        Message::PREFIX."をお菓子って美味しいよね！たくさん食べちゃう！",
    ];
}