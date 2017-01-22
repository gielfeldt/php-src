--TEST--
Test session_cache_limiter() function : variation
--SKIPIF--
<?php include('skipif.inc'); ?>
--INI--
session.cache_limiter=nocache
--FILE--
<?php

ob_start();

/* 
 * Prototype : string session_cache_limiter([string $cache_limiter])
 * Description : Get and/or set the current cache limiter
 * Source code : ext/session/session.c 
 */

echo "*** Testing session_cache_limiter() : variation ***\n";

var_dump(session_cache_limiter());
var_dump(session_start());
var_dump(session_cache_limiter());
var_dump(session_cache_limiter("public"));
var_dump(session_cache_limiter());
var_dump(session_destroy());
var_dump(session_cache_limiter());

echo "Done";
ob_end_flush();
?>
--EXPECTF--
*** Testing session_cache_limiter() : variation ***
string(7) "nocache"
bool(true)

Warning: session_cache_limiter(): Cannot change cache limiter when session is active in %s on line 15
bool(false)

Warning: session_cache_limiter(): Cannot change cache limiter when session is active in %s on line 16
bool(false)

Warning: session_cache_limiter(): Cannot change cache limiter when session is active in %s on line 17
bool(false)
bool(true)
string(7) "nocache"
Done
