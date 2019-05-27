<?php
namespace hola\Pet;
use pocketmine\{Server,Player};
use pocketmine\level\Level;
use pocketmine\scheduler\Task;
use pocketmine\utils\Config;
use pocketmine\math\Vector3;
use hola\Main;
use pocketmine\utils\Color;
use pocketmine\item\Item;
use hola\Pet\{Armor};
use pocketmine\entity\{Entity,Villager};
class Stand extends Task {


public function __construct(Main $eid){

		$this->plugin = $eid;

	}
public function onRun(int $currentTick){
	foreach($this->plugin->getServer()->getLevels() as $level) {
            foreach($level->getEntities() as $entity) {
                if($entity instanceof Armor) {

$entity->setNametagVisible(true);
$entity->setNameTagAlwaysVisible(true);
 $entity->getArmorInventory()->setHelmet(Item::get(397,4,1));
 $c = Item::get(298,0,1);
 $c->setCustomColor(new Color(0,128,0));
            $entity->getArmorInventory()->setChestplate($c);
            $b = Item::get(301,0,1);
            $b->setCustomColor(new Color(0,128,0));
            $entity->getArmorInventory()->setBoots($b);



                }
            }
        }

	}





}