<?php

namespace hola\Pet;
use pocketmine\math\Vector3;
use pocketmine\entity\{Entity,Villager,Human};
use pocketmine\Player;
use hola\Main;
use pocketmine\item\Item;
class MePet extends Human{

public function getName(): string{

return "";

}	
public function entityBaseTick(int $tickDiff = 1): bool{
        $this->ticksLived++;

        if ($this->getTargetEntity() !== null) {

            $entidad = $this->getTargetEntity();

            $ticks = 1 / 20;

            $this->x = $entidad->x-1;
            $this->y = $entidad->y;
            $this->z = $entidad->z-2;
           $this->yaw = $entidad->yaw+10;

            $this->updateMovement();
        }

        return true;
    }




}