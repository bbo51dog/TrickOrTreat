<?php

namespace bbo51dog\trickortreat\api\instance;

use Exception;
use pocketmine\Player;
use bbo51dog\trickortreat\api\API;
use bbo51dog\trickortreat\api\Trick;
use bbo51dog\trickortreat\api\Treat;

class APIInstance implements API{

    /**
     * コマンドを使える頻度を定義。単位は分。
     *
     * @var int 
     */
    public const LIMIT_TIME = 5;

    /** @var Trick */
    private $trick;

    /** @var Treat */
    private $treat;

    /** @car int[] */
    private $time;

    public function __construct(){
        $this->trick = new TrickInstance();
        $this->treat = new TreatInstance();
    }

    private function select(): int{
        $num = rand(0, 1);
        if($num === 0){
            return static::TRICK;
        }elseif($num === 1){
            return static::TREAT;
        }else{
            throw new Exception('$numの値が不正です');
        }
    }

    public function canUse(Player $player): bool{
        $name = strtolower($player->getName());
        if(empey($this->time[$name])){
            return true;
        }
        $now = time();
        if($now - $this->time[$name] < self::LIMIT_TIME * 60){
            return false;
        }
        return true;
    }

    public function run(Player $player): int{
        $id = $this->select();
        if(!$this->canUse($player)){
            throw new Exception(self::LINIT_TIME.'分に一回使用できます');
        }
        if($id === static::TRICK){
            $this->trick->run($player);
        }elseif($id === static::TREAT){
            $this->treat->run($player);
        }else{
            throw new Exception('$idの値が不正です');
        }
        $this->time[strtolower($player->getName())] = time();
        return $id;
    }
}