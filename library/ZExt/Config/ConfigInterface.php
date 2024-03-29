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

namespace ZExt\Config;

use IteratorAggregate, Countable;

/**
 * Configuration holder interface
 * 
 * @category   ZExt
 * @package    Config
 * @subpackage Config
 * @author     Mike.Mirten
 * @version    1.0
 */
interface ConfigInterface extends IteratorAggregate, Countable {
	
	/**
	 * Is the config in the read only mode
	 * 
	 * @return bool
	 */
	public function isReadOnly();
	
	/**
	 * Merge a config into this config
	 * 
	 * @param ConfigInterface $config
	 */
	public function merge(ConfigInterface $config);
	
	/**
	 * Get the config as an array
	 * 
	 * @return array
	 */
	public function toArray();
	
	/**
	 * Set a config's property
	 * 
	 * @param  string | int $name
	 * @param  mixed        $value
	 */
	public function __set($name, $value);
	
	/**
	 * Get a config's property
	 * 
	 * @param  string | int $name
	 * @return mixed
	 */
	public function __get($name);
	
	/**
	 * Has a config's property
	 * 
	 * @param  string | int $name
	 * @return bool
	 */
	public function __isset($name);
	
	/**
	 * Remove a config's property
	 * 
	 * @param  string | int $name
	 */
	public function __unset($name);
	
}