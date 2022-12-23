<?php
// This file was auto-generated from sdk-root/src/data/cloudfront/2020-05-31/endpoint-tests-1.json
return [ 'testCases' => [ [ 'documentation' => 'For region aws-cn-global with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'properties' => [ 'authSchemes' => [ [ 'signingRegion' => 'cn-northwest-1', 'signingName' => 'cloudfront', 'name' => 'sigv4', ], ], ], 'url' => 'https://cloudfront.cn-northwest-1.amazonaws.com.cn', ], ], 'params' => [ 'UseFIPS' => false, 'Region' => 'aws-cn-global', 'UseDualStack' => false, ], ], [ 'documentation' => 'For region aws-global with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'properties' => [ 'authSchemes' => [ [ 'signingRegion' => 'us-east-1', 'signingName' => 'cloudfront', 'name' => 'sigv4', ], ], ], 'url' => 'https://cloudfront.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'Region' => 'aws-global', 'UseDualStack' => false, ], ], [ 'documentation' => 'For custom endpoint with fips disabled and dualstack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://example.com', ], ], 'params' => [ 'UseFIPS' => false, 'Region' => 'us-east-1', 'UseDualStack' => false, 'Endpoint' => 'https://example.com', ], ], [ 'documentation' => 'For custom endpoint with fips enabled and dualstack disabled', 'expect' => [ 'error' => 'Invalid Configuration: FIPS and custom endpoint are not supported', ], 'params' => [ 'UseFIPS' => true, 'Region' => 'us-east-1', 'UseDualStack' => false, 'Endpoint' => 'https://example.com', ], ], [ 'documentation' => 'For custom endpoint with fips disabled and dualstack enabled', 'expect' => [ 'error' => 'Invalid Configuration: Dualstack and custom endpoint are not supported', ], 'params' => [ 'UseFIPS' => false, 'Region' => 'us-east-1', 'UseDualStack' => true, 'Endpoint' => 'https://example.com', ], ], ], 'version' => '1.0',];
