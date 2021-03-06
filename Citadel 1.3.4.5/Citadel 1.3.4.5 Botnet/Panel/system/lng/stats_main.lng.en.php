<?php if(!defined('__CP__'))die();
define('LNG_STATS',                   'Summary statistics');
define('LNG_STATS_TOTAL_INFO',        'Information');
define('LNG_STATS_TOTAL_REPORTS',     'Total reports in database:');
define('LNG_STATS_TOTAL_BOTS24',      'Total active bots in 24 hours (click for details):');
define('LNG_STATS_TOTAL_BOTS',        'Total bots:');
define('LNG_STATS_TOTAL_VERSIONS',    'Bot versions (click for details):');
define('LNG_STATS_TOTAL_VERSIONS_ALL',          'All');
define('LNG_STATS_TOTAL_VERSIONS_DAY',          'Day');
define('LNG_STATS_TOTAL_VERSIONS_WEEK',         'Week');
define('LNG_STATS_TOTAL_VERSIONS_MONTH',        'Month');
define('LNG_STATS_TOTAL_MIN_VERSION', 'Minimal version of bot:');
define('LNG_STATS_TOTAL_MAX_VERSION', 'Maximal version of bot:');
define('LNG_STATS_FIRST_BOT',         'Time of first activity:');
define('LNG_STATS_RESET_NEWBOTS',     'Reset &quot;New bots&quot;');
define('LNG_STATS_RESET_NEWBOTS_Q',   'You really want to reset list of new bots?');
define('LNG_STATS_COUNTRYLIST_EMPTY', '-- Empty --');
define('LNG_STATS_COLUMN_NEWBOTS',    'New bots (%s)');
define('LNG_STATS_COLUMN_ONLINEBOTS', 'Online bots (%s)');
define('LNG_STATS_BOTNET',            'Current botnet:');
define('LNG_STATS_BOTNET_ACTIONS',    'Actions:');

define('LNG_CRON_WARNING',				'For advanced features to function correctly, you need to add this cron job at your host:');
define('LNG_CRON_WARNING_DESCR',		'The script gets executed every minute and does system tasks');

define('LNG_STATS_EXELIST',           'Efficiency & Security');
define('LNG_STATS_EXELIST_SETUP',     '[ Setup ]');
define('LNG_STATS_EXELIST_SETUP_CRON','[ cron ]');
define('LNG_STATS_EXELIST_FILE',      'Filename');
define('LNG_STATS_EXELIST_FILECTIME', 'Creation');
define('LNG_STATS_EXELIST_FILEAGE',   'Age');
define('LNG_STATS_EXELIST_FILEAVIR',  'Virus Check');
define('LNG_STATS_EXELIST_DAYS',      ' days old');
define('LNG_STATS_EXELIST_DAYSHINT',  'Since last re-encryption');
define('LNG_STATS_EXELIST_VIRUS',     ' avirs');
define('LNG_STATS_EXELIST_NAVIR',     'NOT SCANNED');
define('LNG_STATS_EXELIST_AGEALERT',  'It is recommended to re-crypt this file because it is at least 3 days old!');
define('LNG_STATS_EXELIST_AVIRALERT', 'Several antivirus-apps detect a threat! It is recommended to re-crypt this file.');

define('LNG_STATS_EXELIST_CRONBOX', 'To enable auto-scanning with multiple antivirus software, you need to add this cron job at your host:');
define('LNG_STATS_EXELIST_CRONBOX_HTTP', 'Alternatively, you can launch this URL manually once a day:');
define('LNG_STATS_EXELIST_CRONBOX_SCAN4YOU', 'The feature will not function until you specify Scan4you ID & Token <a href="?m=ajax_config&action=scan4you" class="ajax_colorbox">here</a>! Please dont forget to add jabber server,login,password to Jabber notifier section if you want to receive messages to your JID.');

define('LNG_STATS_ACTIVITY',                  'Activity');
define('LNG_STATS_ACTIVITY_7DAYS',            '7 days');
define('LNG_STATS_ACTIVITY_14DAYS',           '14 days');
define('LNG_STATS_ACTIVITY_30DAYS',           '30 days');
define('LNG_STATS_ACTIVITY_TH_DATE',          'Date');
define('LNG_STATS_ACTIVITY_TH_TOTAL',         'Total');
define('LNG_STATS_ACTIVITY_TH_ACTIVE',        'Active');
define('LNG_STATS_ACTIVITY_TH_PERCENT',       '%');
