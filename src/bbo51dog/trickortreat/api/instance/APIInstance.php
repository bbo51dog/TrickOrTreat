<?php

namespace bbo51dog\trickortreat\api\instance;

use Exception;
use pocketmine\Player;
use bbo51dog\trickortreat\api\API;
use bbo51dog\trickortreat\api\Trick;
use bbo51dog\trickortreat\api\Treat;

class APIInstance implements API{

    /** @var Trick */
    private $trick;

    /** @var Treat */
    private $treat;

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

    public function run(Player $player): int{
        $id = $this->select();
        if($id === static::TRICK){
            $this->trick->run($player);
        }elseif($id === static::TREAT){
            $this->treat->run($player);
        }else{
            throw new Exception('$idの値が不正です');
        }
        return $id;
    }
}