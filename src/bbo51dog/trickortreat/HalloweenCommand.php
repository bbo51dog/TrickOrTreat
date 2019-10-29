<?php

namespace bbo51dog\trickortreat;

use Exception;
use pocketmine\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use bbo51dog\trickortreat\api\API;

class HalloweenCommand extends Command{

    /** @var API */
    private $api;
    
    public function __construct(API $api){
        $this->api = $api;
        parent::__construct("halloween", "Halloween Command", "/halloween");
        $this->setPermission("command.halloween");
    } 

    public function execute(CommandSender $sender, string $commandLabel, array $args){
        if(!$sender instanceof Player){
            $sender->sendMessage("サーバー内で使用してください");
            return;
        }
        try{
            $result = $this->api->run($sender);
            switch($result){
                case API::TRICK:
                    $messages = Message::RESULT_TRICK;
                    $broadcast = Message::RESULT_TRICK_BROADCAST;
                    break;

                case API::TREAT:
                    $messages = Message::RESULT_TREAT;
                    $broadcast = Message::RESULT_TREAT_BROADCAST;
                    break;

                default:
                    throw new Exception('$resultの値が不正です');
                    break;
            }
        }catch(Exception $e){
            $sender->sendMessage(str_replace("%reason", $e->getMessage(), Message::EXCEPTION));
            return;
        }
        $sender->sendMessage(array_rand($messages));
        Server::getInstance()->broadcastMessage(str_replace("%player", $sender->getName(), $broadcast));
    }
}