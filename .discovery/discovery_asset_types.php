<?php
return array (
  'botman/driver-config' => 
  array (
    0 => 
    array (
      'value' => 'stubs/slack.php',
      'package' => 'opendialog/driver-slack',
      'packageDir' => './',
      'priority' => 0.0,
      'metadata' => 
      array (
      ),
    ),
  ),
  'botman/driver' => 
  array (
    0 => 
    array (
      'value' => 'BotMan\\Drivers\\Slack\\SlackDriver',
      'package' => 'opendialog/driver-slack',
      'packageDir' => './',
      'priority' => 0.0,
      'metadata' => 
      array (
      ),
    ),
  ),
  'botman/commands' => 
  array (
    0 => 
    array (
      'value' => 'BotMan\\Drivers\\Slack\\Commands\\SlackRTMListenCommand',
      'package' => 'opendialog/driver-slack',
      'packageDir' => './',
      'priority' => 0.0,
      'metadata' => 
      array (
      ),
    ),
  ),
);
