<?php

namespace zs\Task;

use pocketmine\scheduler\Task as TSK;
use pocketmine\console\ConsoleCommandSender;
use zs\Loader;

class Task extends TSK {

    public function __construct(protected readonly Loader $plugin) {}

    public function onRun(): void {
        $this->plugin->getServer()->getCommandMap()->dispatch(new ConsoleCommandSender($this->plugin->getServer(), $this->plugin->getServer()->getLanguage()), "save-all");
    }
}
