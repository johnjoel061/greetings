<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License.
// along with Moodle. If not, see <https://www.gnu.org/licenses/>.

/**
 * Local Greetings Plugin
 *
 * @package     local_greetings
 * @copyright   2025 John Joel Alfabete <alfabetejohnjoel@gmail.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later.
 */

require_once('../../config.php');
require_login();
require_once($CFG->dirroot . '/local/greetings/lib.php');

$context = context_system::instance();
$PAGE->set_context($context);
$PAGE->set_url(new moodle_url('/local/greetings/index.php'));
$PAGE->set_pagelayout('standard');
$PAGE->set_title(get_string('pluginname', 'local_greetings'));
$PAGE->set_heading(get_string('pluginname', 'local_greetings'));

echo $OUTPUT->header();

echo local_greetings_get_greeting($USER);

echo get_string('greetinguser', 'local_greetings');

echo $OUTPUT->footer();

