<?php

namespace bbo51dog\trickortreat\api\instance;

use pocketmine\item\Item;
use pocketmine\item\ItemIds;
use bbo51dog\trickortreat\api\Treat;

class TreatInstance implements Treat{

    /** @var Item[] */
    private $item;
    
    public function __construct(){
        $items = [
            Item::get(ItemIds::BEETROOT_SOUP),
            Item::get(ItemIds::BREAD),
            Item::get(ItemIds::CAKE),
            Item::get(ItemIds::COOKIE),
            Item::get(ItemIds::MELON),
            Item::get(ItemIds::PUMPKIN_PIE),
        ];
        $lore = [
            "§l§6Happy Halloween!!",
            "§cTrickOrTreat Plugin",
        ];
        foreach($items as $item){
            $item->setLore($lore);
        }
        $this->item = $items;
    }

    public function run(Player $player): void{
        $item = array_rand($this->item);
        $inv = $player->getInventory();
        if(!$inv->canAddItem($item)){
            throw new \Exception('アイテムを追加できません');
        }
        $inv->addItem($item);
    }
}