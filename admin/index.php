<?php
/**
 * Administrator Portal Direct Entry Point
 * N.A Fresh Fruits & Coconuts
 */
$_SERVER['REQUEST_URI'] = '/admin' . (isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : (isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] ? '?' . $_SERVER['QUERY_STRING'] : ''));
require_once __DIR__ . '/../public/index.php';
