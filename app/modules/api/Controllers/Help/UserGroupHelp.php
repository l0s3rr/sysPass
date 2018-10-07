<?php
/**
 * sysPass
 *
 * @author    nuxsmin
 * @link      https://syspass.org
 * @copyright 2012-2018, Rubén Domínguez nuxsmin@$syspass.org
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
 *  along with sysPass.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace SP\Modules\Api\Controllers\Help;

/**
 * Class UserGroupHelp
 *
 * @package SP\Modules\Api\Controllers\Help
 */
final class UserGroupHelp implements HelpInterface
{
    use HelpTrait;

    /**
     * @return array
     */
    public static function view()
    {
        return
            [
                self::getItem('id', __('Id de grupo'), true)
            ];
    }

    /**
     * @return array
     */
    public static function create()
    {
        return
            [
                self::getItem('name', __('Nombre del grupo'), true),
                self::getItem('description', __('Descripción del grupo')),
                self::getItem('usersId', __('Array con Ids de usuarios'))
            ];
    }

    /**
     * @return array
     */
    public static function edit()
    {
        return
            [
                self::getItem('id', __('Id de grupo'), true),
                self::getItem('name', __('Nombre del grupo'), true),
                self::getItem('description', __('Descripción del grupo')),
                self::getItem('usersId', __('Array con Ids de usuarios'))
            ];
    }

    /**
     * @return array
     */
    public static function search()
    {
        return
            [
                self::getItem('text', __('Texto a buscar')),
                self::getItem('count', __('Número de resultados a mostrar'))
            ];
    }

    /**
     * @return array
     */
    public static function delete()
    {
        return
            [
                self::getItem('id', __('Id de grupo'), true)
            ];
    }
}