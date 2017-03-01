<?php

// Set Variables
$LOCAL_ROOT         = "";
$LOCAL_REPO_NAME    = "";
$LOCAL_REPO         = "{$LOCAL_ROOT}/{$LOCAL_REPO_NAME}";
$REMOTE_REPO        = "https://github.com/dfalcon/dev3.git .";
$BRANCH             = "master";

if ( $_POST['payload'] ) {
// Only respond to POST requests from Github

    if( file_exists($LOCAL_REPO) ) {

// If there is already a repo, just run a git pull to grab the latest changes
        shell_exec("git fetch --all && git reset --hard origin/master");

        die("done " . mktime());
    } else {

// If the repo does not exist, then clone it into the parent directory
        shell_exec("cd {$LOCAL_ROOT} && git clone {$REMOTE_REPO}");

        die("done " . mktime());
    }
}