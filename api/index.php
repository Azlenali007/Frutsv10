<?php
/**
 * API Direct Entry Point
 * N.A Fresh Fruits & Coconuts
 */
$pathInfo = $_SERVER['PATH_INFO'] ?? '';
$_SERVER['REQUEST_URI'] = '/api' . $pathInfo . (isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] ? '?' . $_SERVER['QUERY_STRING'] : '');
require_once __DIR__ . '/../public/index.php';
