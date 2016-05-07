<?php
/**
 * src/pocketmine/inventory/FakeBlockMenu.php
 *
 * @package default
 */


/*
 *
 *  _                       _           _ __  __ _
 * (_)                     (_)         | |  \/  (_)
 *  _ _ __ ___   __ _  __ _ _  ___ __ _| | \  / |_ _ __   ___
 * | | '_ ` _ \ / _` |/ _` | |/ __/ _` | | |\/| | | '_ \ / _ \
 * | | | | | | | (_| | (_| | | (_| (_| | | |  | | | | | |  __/
 * |_|_| |_| |_|\__,_|\__, |_|\___\__,_|_|_|  |_|_|_| |_|\___|
 *                     __/ |
 *                    |___/
 *
 * This program is a third party build by ImagicalMine.
 *
 * PocketMine is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author ImagicalMine Team
 * @link http://forums.imagicalcorp.ml/
 *
 *
*/

namespace pocketmine\inventory;

use pocketmine\level\Position;

class FakeBlockMenu extends Position implements InventoryHolder
{

    private $inventory;

    /**
     *
     * @param Inventory $inventory
     * @param Position  $pos
     */
    public function __construct(Inventory $inventory, Position $pos)
    {
        $this->inventory = $inventory;
        parent::__construct($pos->x, $pos->y, $pos->z, $pos->level);
    }


    /**
     *
     * @return unknown
     */
    public function getInventory()
    {
        return $this->inventory;
    }
}
