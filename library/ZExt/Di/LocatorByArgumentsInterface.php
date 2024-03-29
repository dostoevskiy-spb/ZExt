<?php
/**
 * ZExt Framework (http://z-ext.com)
 * Copyright (C) 2012 Mike.Mirten
 * 
 * LICENSE
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 * 
 * @copyright (c) 2012, Mike.Mirten
 * @license   http://www.gnu.org/licenses/gpl.html GPL License
 * @category  ZExt
 * @version   1.0
 */

namespace ZExt\Di;

/**
 * A service locator extended interface
 * 
 * Able to provide a services by a custom arguments set
 */
interface LocatorByArgumentsInterface extends LocatorInterface {
	
	/**
	 * Get the service with the custom arguments set
	 * 
	 * @param  string $id            An id of a service
	 * @param  mixed  $args          Argument or an arguments set
	 * @param  int    $failBehaviour On a service locate fail behaviour
	 * @return mixed
	 */
	public function getByArguments($id, $args, $failBehaviour = LocatorInterface::BEHAVIOUR_FAIL_EXCEPTION);
	
	/**
	 * Check for a service has been initialized with the arguments set
	 * 
	 * @param  string $name An id of a service
	 * @param  mixed  $args Argument or an arguments set
	 * @return boolean
	 */
	public function hasInitializedByArguments($id, $args);
	
}