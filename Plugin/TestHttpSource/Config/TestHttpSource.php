<?php

/**
 * Author: imsamurai <im.samuray@gmail.com>
 * Date: Oct 29, 2013
 * Time: 5:54:32 PM
 *
 */
$config['TestHttpSource']['config_version'] = 2;

$CF = HttpSourceConfigFactory::instance();
$Config = $CF->config();

$Config
		->add(
				$CF->endpoint()
				->id(1)
				->methodRead()
				->table('default')
				->path('/imsamurai/cakephp-httpsource-datasource/master/Test/Data/default.json')
				->result($CF->result()
						->map(function($result) {
							return array($result);
						})
				)
		)
		->add(
				$CF->endpoint()
				->id(2)
				->methodRead()
				->table('documents')
				->path('/imsamurai/cakephp-httpsource-datasource/master/Test/Data/documents:id.json')
				->addCondition($CF->condition()->name('id')
						->map(function($v) {
							return implode('.', $v);
						})
				)
				->result($CF->result()
						->map(function($result) {
							return $result;
						})
				)
);

$config['TestHttpSource']['config'] = $Config;


$config['TestHttpSource']['cache_name'] = false;
