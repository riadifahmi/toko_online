<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$autoload['packages'] = array();

$autoload['libraries'] = array('pagination' ,'database', 'cart', 'email', 'session', 'xmlrpc');

$autoload['drivers'] = array('session');

$autoload['helper'] = array('url', 'file', 'security', 'form', 'html');

$autoload['config'] = array('');

$autoload['language'] = array();

$autoload['model'] = array('model_barang','model_invoice', 'm_wilayah');
