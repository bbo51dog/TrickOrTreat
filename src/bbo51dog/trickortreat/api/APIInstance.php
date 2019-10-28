<?php

namespace bbo51dog\trickortreat\api;

class APIInstance implements API{

    public function select(): int{
        $num = rand(0, 1);
        if($num === 0){
            return static::TRICK;
        }elseif($num === 1){
            return static::TREAT;
        }else{
            throw new \Exception('$numの値が不正です');
        }
    }

    public function trick(Player $player): void{

    }

    public function treat(Player $player): void{

    }

    public function run(Player $player): int{
        $id = $this->select();
        if($id === static::TRICK){
            $this->trick($player);
        }elseif($id === static::TREAT){
            $this->treat($player);
        }else{
            throw new \Exception('$idの値が不正です');
        }
        return $id;
    }
}