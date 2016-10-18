<?php

use Cake\Core\Plugin;

// move to construct plugin
Plugin::load('Burzum/FileStorage');
include('filestorage.php');
Plugin::load('Burzum/Imagine');