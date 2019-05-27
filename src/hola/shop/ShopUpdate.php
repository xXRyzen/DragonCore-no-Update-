<?php
namespace hola\shop;
use pocketmine\{Server,Player};
use pocketmine\level\Level;
use pocketmine\scheduler\Task;
use pocketmine\utils\Config;
use pocketmine\math\Vector3;
use hola\Main;
use hola\shop\{ShopEntity,ShopEntity1,ShopEntity2,ShopEntity3};
class ShopUpdate extends Task {


public function __construct(Main $eid){

		$this->plugin = $eid;

	}
public function onRun(int $currentTick){
	 $shop = new Config($this->plugin->getDataFolder() . "/shop.yml", Config::YAML);
foreach($this->plugin->getServer()->getLevels() as $level) {
			foreach($level->getEntities() as $entity) {
	if($entity instanceof ShopEntity){
$coins = "20000";

	$lock = "§l§a✔§2ULTRA COSMETICO§r\n§7KIT FFA FULL§r\n §6Costo §b: §e".$coins."§6 coins".$br = "\n\n\n\n\n";
$entity->setNameTag($lock);
$entity->setNameTagAlwaysVisible(true);
$entity->setScale(1.5);
}
}
}

foreach($this->plugin->getServer()->getLevels() as $level) {

			foreach($level->getEntities() as $entity) {
	if($entity instanceof ShopEntity1){
foreach($this->plugin->getServer()->getLevelByName($shop->get('level'))->getPlayers() as $pl){
$lock = null;
$coins = "80000";

	$lock = "§l§a✔§2ULTRA COSMETICO§r\n§7PACK PET BASIC§r\n §6Costo §b: §e".$coins."§6 coins".$br = "\n\n\n\n\n";
$entity->setNameTagAlwaysVisible(true);
$entity->setNameTag($lock);
$entity->setScale(1.5);
}
}
}
}
foreach($this->plugin->getServer()->getLevels() as $level) {
			foreach($level->getEntities() as $entity) {
	if($entity instanceof ShopEntity2){



$lock = null;
$coins = "100000";

		$lock = "§l§a✔§2ULTRA COSMETICO§r\n§7PACK GADGETS BASIC§r\n §6Costo §b: §e".$coins."§6 coins".$br = "\n\n\n\n\n";

$entity->setNameTagAlwaysVisible(true);
$entity->setNameTag($lock);
$entity->setScale(1.5);

}
}
}

foreach($this->plugin->getServer()->getLevels() as $level) {
			foreach($level->getEntities() as $entity) {
	if($entity instanceof ShopEntity3){


$lock = null;
$coins = "50000";

		$lock = "§l§a✔§2ULTRA COSMETICO§r\n§7RANGO ENGINNER§r\n §6Costo §b: §e".$coins."§6 coins".$br = "\n\n\n\n\n";
$entity->setNameTagAlwaysVisible(true);
$entity->setNameTag($lock);
$entity->setScale(1.5);
}
}
}
}


	}
