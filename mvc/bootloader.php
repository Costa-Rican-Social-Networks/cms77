<?php

# Loading configurations
include 'config/app.config.php';

# Loading libraries
include('lib/util.php');
include('lib/router.php');
zzlog('Configurations files have been loaded');
zzlog('Core libraries are loaded and ready to work');

# Routing process
zzlog('Getting the router information');
zzrouter();
