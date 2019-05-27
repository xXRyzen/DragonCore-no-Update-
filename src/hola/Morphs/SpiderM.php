<?php

namespace hola\Morphs;

use pocketmine\entity\Animal;
use pocketmine\math\Vector3;
use pocketmine\level\particle\ExplodeParticle;
class SpiderM extends Animal{
    const NETWORK_ID = self::CAVE_SPIDER;

    public $width = 0.9;
    public $height = 1.4;

    public function getName(): string{
    	return "Loading";
    }
 public function entityBaseTick(int $tickDiff = 1): bool{

        $this->ticksLived++;

        if ($this->getTargetEntity() !== null) {

            $entidad = $this->getTargetEntity();

            $ticks = 1 / 20;

            $this->x = $entidad->x;
            $this->y = $entidad->y;
            $this->z = $entidad->z;
            $this->yaw =$entidad->yaw;
 $this->pitch = $entidad->pitch;
            $this->updateMovement();
        }

        return true;
    }
   
}