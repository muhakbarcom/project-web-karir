<?php

/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2019 - 2022, CodeIgniter Foundation
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2019, British Columbia Institute of Technology (https://bcit.ca/)
 * @copyright	Copyright (c) 2019 - 2022, CodeIgniter Foundation (https://codeigniter.com/)
 * @license	https://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') or exit('No direct script access allowed');

$lang['form_validation_required']    = ' {field} kolom dibutuhkan.';
$lang['form_validation_isset']      = ' {field} kolom harus have a value.';
$lang['form_validation_valid_email']    = ' {field} kolom harus mengandung sebuah valid email address.';
$lang['form_validation_valid_emails']    = ' {field} kolom harus mengandung all valid email addresses.';
$lang['form_validation_valid_url']    = ' {field} kolom harus mengandung sebuah valid URL.';
$lang['form_validation_valid_ip']    = ' {field} kolom harus mengandung sebuah valid IP.';
$lang['form_validation_valid_base64']    = ' {field} kolom harus mengandung sebuah valid Base64 string.';
$lang['form_validation_min_length']    = ' {field} kolom harus be at least {param} characters in length.';
$lang['form_validation_max_length']    = ' {field} kolom cannot exceed {param} characters in length.';
$lang['form_validation_exact_length']    = ' {field} kolom harus be exactly {param} characters in length.';
$lang['form_validation_alpha']      = ' {field} kolom may only mengandung alphabetical characters.';
$lang['form_validation_alpha_numeric']    = ' {field} kolom may only mengandung alpha-numeric characters.';
$lang['form_validation_alpha_numeric_spaces']  = ' {field} kolom may only mengandung alpha-numeric characters and spaces.';
$lang['form_validation_alpha_dash']    = ' {field} kolom may only mengandung alpha-numeric characters, underscores, and dashes.';
$lang['form_validation_numeric']    = ' {field} kolom harus mengandung only numbers.';
$lang['form_validation_is_numeric']    = ' {field} kolom harus mengandung only numeric characters.';
$lang['form_validation_integer']    = ' {field} kolom harus mengandung an integer.';
$lang['form_validation_regex_match']    = ' {field} kolom is not in the correct format.';
$lang['form_validation_matches']    = ' {field} kolom does not match the {param} kolom.';
$lang['form_validation_differs']    = ' {field} kolom harus differ from the {param} kolom.';
$lang['form_validation_is_unique']     = ' {field} kolom harus mengandung a unique value.';
$lang['form_validation_is_natural']    = ' {field} kolom harus only mengandung digits.';
$lang['form_validation_is_natural_no_zero']  = ' {field} kolom harus only mengandung digits and harus be greater than zero.';
$lang['form_validation_decimal']    = ' {field} kolom harus mengandung a decimal number.';
$lang['form_validation_less_than']    = ' {field} kolom harus mengandung a number less than {param}.';
$lang['form_validation_less_than_equal_to']  = ' {field} kolom harus mengandung a number less than or equal to {param}.';
$lang['form_validation_greater_than']    = ' {field} kolom harus mengandung a number greater than {param}.';
$lang['form_validation_greater_than_equal_to']  = ' {field} kolom harus mengandung a number greater than or equal to {param}.';
$lang['form_validation_error_message_not_set']  = 'Unable to access an error message corresponding to your kolom name {field}.';
$lang['form_validation_in_list']    = ' {field} kolom harus be one of: {param}.';
