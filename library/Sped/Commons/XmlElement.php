<?php

/**
 * Sped
 *
 * Copyright (c) 2012 Sped
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   Sped
 * @package    Sped
 * @copyright  Copyright (c) 2012 Sped (https://github.com/tonicospinelli/Sped)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt    LGPL
 * @version    ##VERSION##, ##DATE##
 */

namespace Sped\Commons;

use Sped\Types\StringHelper;

/**
 * @category   Sped
 * @package    Sped
 * @copyright  Copyright (c) 2012
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @author     Antonio Spinelli <tonicospinelli85@gmail.com>
 */
class XmlElement extends \DOMElement {

    protected $defaultNamespace = '';

    public function __call($name, $arguments) {
        var_dump(get_class($this));
        list($action) = \Sped\Types\StringHelper::splitCamel($name);
        $elementName = str_replace($action, '', $name);
        switch ($action) {
            case 'get':
                return $this->get($elementName, $arguments[0]);
                break;
            case 'set':
                $this->set($elementName, $arguments[0]);
                break;
            case 'add':
                return $this->add($elementName);
                break;
            case 'remove':
                $this->remove($elementName, 0);
                break;
            case 'removeall':
                $this->removeAll($elementName);
                break;
        }
        return $this;
    }

    /**
     *
     * @param string $name
     * @return type 
     */
    protected function get($name, $index = 0) {
        if (is_null($index))
            return $this->getElementsByTagName(lcfirst($name));
        return $this->getElementsByTagName(lcfirst($name))->item($index);
    }

    /**
     *
     * @param string $name
     * @param string $argument
     * @return \Sped\Commons\XmlElement 
     */
    protected function set($name, $argument) {
        $element = $this->get($name);
        if ($element == null)
            $this->appendChild($argument);
        else
            $this->replaceChild($argument, $element);
        return $this;
    }

    /**
     *
     * @param type $name
     * @return type 
     */
    protected function add($name) {
        echo $name = $this->defaultNamespace . $name;
        
        return $this->appendChild(new $name());
    }

    /**
     *
     * @param type $name
     * @return type 
     */
    protected function remove($name, $index) {
        $element = $this->get($name, $index);
        $this->removeChild($element);
    }

    /**
     *
     * @param type $name
     * @return type 
     */
    protected function removeall($name) {
        $elements = $this->get($name, null);
        foreach ($elements as $element) {
            $this->removeChild($element);
        }
    }

}