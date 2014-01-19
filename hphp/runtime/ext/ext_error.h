/*
   +----------------------------------------------------------------------+
   | HipHop for PHP                                                       |
   +----------------------------------------------------------------------+
   | Copyright (c) 2010-2013 Facebook, Inc. (http://www.facebook.com)     |
   | Copyright (c) 1997-2010 The PHP Group                                |
   +----------------------------------------------------------------------+
   | This source file is subject to version 3.01 of the PHP license,      |
   | that is bundled with this package in the file LICENSE, and is        |
   | available through the world-wide-web at the following url:           |
   | http://www.php.net/license/3_01.txt                                  |
   | If you did not receive a copy of the PHP license and are unable to   |
   | obtain it through the world-wide-web, please send a note to          |
   | license@php.net so we can mail you a copy immediately.               |
   +----------------------------------------------------------------------+
*/

#ifndef incl_HPHP_EXT_ERROR_H_
#define incl_HPHP_EXT_ERROR_H_

// >>>>>> Generated by idl.php. Do NOT modify. <<<<<<

#include "hphp/runtime/base/base-includes.h"

namespace HPHP {
///////////////////////////////////////////////////////////////////////////////

Array f_debug_backtrace(int64_t options = 1, int64_t limit = 0);
Array f_hphp_debug_caller_info();
void f_debug_print_backtrace(int64_t options = 0, int64_t limit = 0);
String debug_string_backtrace(bool skip, bool ignore_args = false,
                              int limit = 0);
Array f_error_get_last();
bool f_error_log(
  const String& message, int message_type = 0,
  const String& destination = null_string,
  const String& extra_headers = null_string);
int64_t f_error_reporting(CVarRef level = uninit_null());
bool f_restore_error_handler();
bool f_restore_exception_handler();
Variant f_set_error_handler(CVarRef error_handler, int error_types = k_E_ALL);
Variant f_set_exception_handler(CVarRef exception_handler);
void f_hphp_set_error_page(const String& page);
void f_hphp_throw_fatal_error(const String& error_msg);
void f_hphp_clear_unflushed();
bool f_trigger_error(const String& error_msg, int error_type = k_E_USER_NOTICE);
bool f_user_error(const String& error_msg, int error_type = k_E_USER_NOTICE);
extern const int64_t k_DEBUG_BACKTRACE_PROVIDE_OBJECT;
extern const int64_t k_DEBUG_BACKTRACE_IGNORE_ARGS;
///////////////////////////////////////////////////////////////////////////////
}

#endif // incl_HPHP_EXT_ERROR_H_