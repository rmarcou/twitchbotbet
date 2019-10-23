<?php



// Twitch authentication requires an oath token for logging in to the IRC chat. You can generate 
// a token at: https://twitchapps.com/tmi/
// if you plan to use the Bot under a different username than your personal account, make sure that when you 
// use the above tool and get redirected to Twitch to authenticate, you provide the dedicated Twitch account for the Bot.
// please check the README.md for more info.
$config['oath_pass'] = 'oauth:zzx24c6st6drspg8gdutsqtyp85b1q';


// Fill in the username associated to the account you used to generate the oath token
// for the previous step.
$config['nickname'] = 'woolrick';


// Fill in the name of the Twitch Channel you want the Bot to connect to. You can use the name you see 
// in the URL of your stream, for example if your stream is : https://www.twitch.tv/abc123, you need
// to fill in: abc123
$config['channel'] = 'woolrick';
