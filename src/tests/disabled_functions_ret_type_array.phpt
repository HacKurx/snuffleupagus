--TEST--
Disable functions check on `ret` by type matching (array).
--SKIPIF--
<?php if (!extension_loaded("snuffleupagus")) die "skip"; ?>
--INI--
sp.configuration_file={PWD}/config/disabled_functions_ret_type_array.ini
--FILE--
<?php 
echo get_loaded_extensions();
?>
--EXPECTF--
[snuffleupagus][0.0.0.0][disabled_function][drop] The execution has been aborted in %a/tests/disabled_functions_ret_type_array.php:2, because the function 'get_loaded_extensions' returned 'ARRAY', which matched the rule 'Return value is an array'.
