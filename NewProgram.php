<?php
/**
 * Created by PhpStorm.
 * User: simonxu14
 * Date: 6/23/2016
 * Time: 10:00 AM
 */

require 'vendor/autoload.php';
$sdk = new Aws\Sdk([
    'endpoint'   => 'http://localhost:8000',  // Use DynamoDB running locally
    'region'   => 'us-west-2',  // US West (Oregon) Region
    'version'  => 'latest'  // Use the latest version of the AWS SDK for PHP
]);

// Create a new DynamoDB client
$dynamodb = $sdk->createDynamoDb();