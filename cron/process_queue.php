<?php
/**
 * Background Queue Worker Cron
 * N.A Fresh Fruits & Coconuts
 * Usage: php cron/process_queue.php
 */
require_once __DIR__ . '/../app/bootstrap.php';
if (class_exists('BackgroundTaskService')) {
    $processed = BackgroundTaskService::processQueue(10);
    echo "[" . date("Y-m-d H:i:s") . "] Processed {$processed} background tasks.\n";
}
