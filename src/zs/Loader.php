<?php

namespace zs;

use pocketmine\plugin\PluginBase;
use zs\Task\Task;

class Loader extends PluginBase {

    public function onEnable(): void {
        $this->saveDefaultConfig();
        $this->getScheduler()->scheduleRepeatingTask(new Task($this), 20 * 60 * $this->getConfig()->get("interval"));
    }
}