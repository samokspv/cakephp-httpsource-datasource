<?php

/**
 * Author: imsamurai <im.samuray@gmail.com>
 * Date: 04.12.2012
 * Time: 23:04:01
 *
 */

App::uses('HttpSourceEndpointItem', 'HttpSource.Lib/Config');

class HttpSourceField extends HttpSourceEndpointItem {
    protected $_name = null;
    protected $_mapToName = null;

    public function name($name = null) {
        if (is_null($name)) {
            if (is_null($this->_name)) {
                throw new HttpSourceConfigException('Field or condition name is null!');
            }
           return $this->_name;
        }
        $this->_name = (string)$name;
        return $this;
    }

    /**
     *
     * @param callable $callback
     * @param type $map_to_name
     * @return HttpSourceField
     */
    public function map(callable $callback = null, $map_to_name = null) {
        if (is_null($callback) && is_null($map_to_name)) {
            return array($this->_map, $this->_mapToName ? $this->_mapToName : $this->name());
        }
        $this->_mapToName = $map_to_name;
        parent::map($callback);
        return $this;
    }

    public function __toString() {
        return $this->name();
    }
}