<?php

namespace JoinLeave;

use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\event;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener
{
    public function onEnable()
    {
        $this->getlogger()->info("JoinLeave by GeistFan and GodWeedZao");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    public function onPlayerJoin(PlayerJoinEvent $event)
    {
        $player = $event->getPlayer();
        $event->setJoinMessage("[§c-§f]");
    }

    public function onPlayerQuit(PlayerQuitEvent $event)
    {
        $player = $event->getPlayer();
        $event->setQuitMessage("[§a+§f]");
    }

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args, Player $player):bool
    {
        if($cmd->getName() === "tjl")
        {
            if($sender->hasPermission("JoinLeaveTest.cmd"))
            {
                $sender->sendMessage("JoinLeave is enabled!");
            }
        }return true;
    }

}
