<?php
/**
 * sysPass
 *
 * @author    nuxsmin
 * @link      http://syspass.org
 * @copyright 2012-2016 Rubén Domínguez nuxsmin@$syspass.org
 *
 * This file is part of sysPass.
 *
 * sysPass is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * sysPass is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with sysPass.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace SP\Mgmt;

defined('APP_ROOT') || die(_('No es posible acceder directamente a este archivo'));

/**
 * Interface Item para la implementación de clases de elementos
 *
 * @package SP\Mgmt
 */
interface ItemInterface
{
    /**
     * @param $itemData
     * @return static
     */
    public static function getItem($itemData = null);

    /**
     * @return mixed
     */
    public function add();

    /**
     * @param $id int|array
     * @return mixed
     */
    public function delete($id);

    /**
     * @return mixed
     */
    public function update();

    /**
     * @param $id int
     * @return mixed
     */
    public function getById($id);

    /**
     * @return mixed
     */
    public function getAll();

    /**
     * @param $itemData
     * @return mixed
     */
    public function setItemData($itemData);

    /**
     * @return mixed
     */
    public function getItemData();

    /**
     * @param $id int
     * @return mixed
     */
    public function checkInUse($id);

    /**
     * @return bool
     */
    public function checkDuplicatedOnUpdate();

    /**
     * @return bool
     */
    public function checkDuplicatedOnAdd();
}