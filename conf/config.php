<?php

// define your Computer's timezone. Accepted values can be found at: http://php.net/manual/en/timezones.php
$config['timezone'] = 'UTC';


// to configure the Bot to suppress any messages being sent out, set to TRUE:
$config['listen_only_mode'] = FALSE;


// bot essential commands definition:
$config['admin_addcommand_keyword'] = '!addcmd';
$config['admin_editcommand_keyword'] = '!editcmd';
$config['admin_removecommand_keyword'] = '!removecmd';
$config['admin_addadmin_keyword'] = '!addadmin';
$config['admin_removeadmin_keyword'] = '!removeadmin';
$config['helpcommand_keyword'] = '!help';
$config['uptimecommand_keyword'] = '!uptime';
$config['helpcommandbet_keyword'] = '!bethelp';


// reply format:
// set to
// 1: to reply to users command with @<username>
// 2: to reply to users command with <username>
// 3: to reply to users command without reference to the user who triggered the response.
$config['reply_format'] = 3;

// Twitch Oauth token scope: read more at: https://dev.twitch.tv/docs/authentication/#scopes
$config['oath_token_scope'] = 'chat_login+channel_editor+channel_check_subscription';

// periodic messages config:
$config['admin_addperiodicmsg_keyword'] = '!addperiodicmsg';
$config['admin_removeperiodicmsg_keyword'] = '!removeperiodicmsg';

// to enable the feature, set the threshold to a value greater than 0 seconds:
$config['periodic_messages_interval_seconds'] = 600;

// quotes config:
$config['admin_addquote_keyword'] = '!addquote';
$config['admin_removequote_keyword'] = '!removequote';
$config['quote_keyword'] = '!quote';


// giveaways config:
// for Admins:
$config['admin_giveaway_start_keyword'] = '!giveaway-start';
$config['admin_giveaway_stop_keyword'] = '!giveaway-end';
// $config['admin_giveaway_subs_start_keyword'] = '!giveaway-subs-start';
// $config['admin_giveaway_subs_stop_keyword'] = '!giveaway-subs-end';
$config['admin_giveaway_find_winner_keyword'] = '!giveaway-winner';
$config['admin_giveaway_status_keyword'] = '!giveaway-status';
$config['admin_giveaway_reset_keyword'] = '!giveaway-reset';
// for viewers to join:
$config['giveaway_join_keyword'] = '!giveaway';


// if you want to suppress Bot responses to same commands for a few seconds, 
// set the desired thresh in seconds. If you want to disable this feature, set the value to 0 seconds.
$config['duplicate_message_cuttoff_seconds'] = 20;


// logging information:
// just how to name the log files
$config['log_file_prefix'] = 'ChocoboBot';
$config['log_file_prefix_IRC'] = 'ChocoboBot_IRC';
$config['log_file_prefix_TwitchAPI'] = 'ChocoboBot_TwitchAPI';


// The name that you want the bot to identify itself in your Twitch Chat.
$config['bot_name'] = 'ChocoboBot';


// Polls config:
// 
$config['poll_help_message'] = '<poll\'s duration in minutes> <free text describing the poll>';
$config['admin_makepoll_keyword'] = '!poll-start';
$config['admin_cancelpoll_keyword'] = '!poll-cancel';
$config['votecommand_keyword'] = '!vote';
$config['new_poll_announcement_message'] = 'New poll is running';
$config['poll_closure_announcement_message'] = 'Poll was closed.';
$config['admin_poll_getwinner'] = '!poll-winner';


// Bets config:
//
$config['admin_startbet_keyword'] = '!startbet';
$config['admin_endbet_keyword'] = '!endbet';
$config['admin_cancelbet_keyword'] = '!cancelbet';
$config['bet_place_keyword'] = '!bet';
$config['bet_maximum_allowed_amount'] = 1000; // 0 for unlimited max amount
$config['betstart_announcement_message'] = 'Bet is open!';
$config['betend_announcement_message'] = 'Bet has ended.';
$config['bet_accept_period_over_announcement_message'] = 'Bet period is over, no more bets will be accepted.';
$config['bet_help_message'] = 'Betting work => !bet <Value to bet> <GP amount bet cost> | 
Place a bet on value <Value to bet> for <GP amount bet cost> to win more GP points. 
Example : !bet 41 150 where 41 is the order of Chocobo number 4 in first and 1 in second for 150 ChocoKWEH. 
List of possible bet : 12 13 14 15 16 23 24 25 26 34 35 36 45 46 56';


// loyalty config:
// 
// how many points a viewers is awarded per check interval. if you set it to 0, feature is disabled:
$config['loyalty_points_per_interval'] = 5;
$config['loyalty_currency'] = 'GP';
$config['loyalty_check_interval'] = 120; // in seconds
$config['loyalty_points_welcome_award'] = 1000; // amount of LP(Loyality point) => GP awarded to new viewers
$config['loyaltypoints_keyword'] = '!gp';


// twitch API related commands:
$config['admin_twitchapi_set_stream_title'] = '!title';
$config['admin_twitchapi_set_stream_game'] = '!game';
$config['admin_twitchapi_is_user_a_sub'] = '!issub';

// twitch VIP commands:
$config['admin_addvip_command'] = '!addvip';
$config['admin_removevip_command'] = '!removevip';
