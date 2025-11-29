<?php

use App\Mcp\Servers\TravelPlanner;
use Laravel\Mcp\Facades\Mcp;

Mcp::web('/mcp/demo', TravelPlanner::class);
