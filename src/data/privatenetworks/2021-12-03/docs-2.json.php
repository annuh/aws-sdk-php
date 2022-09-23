<?php
// This file was auto-generated from sdk-root/src/data/privatenetworks/2021-12-03/docs-2.json
return [ 'version' => '2.0', 'service' => '<p>Amazon Web Services Private 5G is a managed service that makes it easy to deploy, operate, and scale your own private mobile network at your on-premises location. Private 5G provides the pre-configured hardware and software for mobile networks, helps automate setup, and scales capacity on demand to support additional devices as needed.</p>', 'operations' => [ 'AcknowledgeOrderReceipt' => '<p>Acknowledges that the specified network order was received.</p>', 'ActivateDeviceIdentifier' => '<p>Activates the specified device identifier.</p>', 'ActivateNetworkSite' => '<p>Activates the specified network site.</p>', 'ConfigureAccessPoint' => '<p>Configures the specified network resource. </p> <p> Use this action to specify the geographic position of the hardware. You must provide Certified Professional Installer (CPI) credentials in the request so that we can obtain spectrum grants. For more information, see <a href="https://docs.aws.amazon.com/private-networks/latest/userguide/radio-units.html">Radio units</a> in the <i>Amazon Web Services Private 5G User Guide</i>. </p>', 'CreateNetwork' => '<p>Creates a network.</p>', 'CreateNetworkSite' => '<p>Creates a network site.</p>', 'DeactivateDeviceIdentifier' => '<p>Deactivates the specified device identifier.</p>', 'DeleteNetwork' => '<p>Deletes the specified network. You must delete network sites before you delete the network. For more information, see <a href="https://docs.aws.amazon.com/private-networks/latest/APIReference/API_DeleteNetworkSite.html">DeleteNetworkSite</a> in the <i>API Reference for Amazon Web Services Private 5G</i>.</p>', 'DeleteNetworkSite' => '<p>Deletes the specified network site. Return the hardware after you delete the network site. You are responsible for minimum charges. For more information, see <a href="https://docs.aws.amazon.com/private-networks/latest/userguide/hardware-maintenance.html">Hardware returns</a> in the <i>Amazon Web Services Private 5G User Guide</i>. </p>', 'GetDeviceIdentifier' => '<p>Gets the specified device identifier.</p>', 'GetNetwork' => '<p>Gets the specified network.</p>', 'GetNetworkResource' => '<p>Gets the specified network resource.</p>', 'GetNetworkSite' => '<p>Gets the specified network site.</p>', 'GetOrder' => '<p>Gets the specified order.</p>', 'ListDeviceIdentifiers' => '<p>Lists device identifiers. Add filters to your request to return a more specific list of results. Use filters to match the Amazon Resource Name (ARN) of an order, the status of device identifiers, or the ARN of the traffic group.</p> <pre><code> &lt;p&gt;If you specify multiple filters, filters are joined with an OR, and the request </code></pre> <p>returns results that match all of the specified filters.</p></p>', 'ListNetworkResources' => '<p>Lists network resources. Add filters to your request to return a more specific list of results. Use filters to match the Amazon Resource Name (ARN) of an order or the status of network resources.</p> <p>If you specify multiple filters, filters are joined with an OR, and the request returns results that match all of the specified filters.</p>', 'ListNetworkSites' => '<p>Lists network sites. Add filters to your request to return a more specific list of results. Use filters to match the status of the network site.</p>', 'ListNetworks' => '<p>Lists networks. Add filters to your request to return a more specific list of results. Use filters to match the status of the network.</p>', 'ListOrders' => '<p>Lists orders. Add filters to your request to return a more specific list of results. Use filters to match the Amazon Resource Name (ARN) of the network site or the status of the order.</p> <p>If you specify multiple filters, filters are joined with an OR, and the request returns results that match all of the specified filters.</p>', 'ListTagsForResource' => '<p>Lists the tags for the specified resource.</p>', 'Ping' => '<p>Checks the health of the service.</p>', 'TagResource' => '<p> Adds tags to the specified resource. </p>', 'UntagResource' => '<p>Removes tags from the specified resource.</p>', 'UpdateNetworkSite' => '<p>Updates the specified network site.</p>', 'UpdateNetworkSitePlan' => '<p>Updates the specified network site plan.</p>', ], 'shapes' => [ 'AccessDeniedException' => [ 'base' => '<p>You do not have permission to perform this operation.</p>', 'refs' => [], ], 'AcknowledgeOrderReceiptRequest' => [ 'base' => NULL, 'refs' => [], ], 'AcknowledgeOrderReceiptResponse' => [ 'base' => NULL, 'refs' => [], ], 'AcknowledgmentStatus' => [ 'base' => NULL, 'refs' => [ 'Order$acknowledgmentStatus' => '<p>The acknowledgement status of the order.</p>', ], ], 'ActivateDeviceIdentifierRequest' => [ 'base' => NULL, 'refs' => [], ], 'ActivateDeviceIdentifierResponse' => [ 'base' => NULL, 'refs' => [], ], 'ActivateNetworkSiteRequest' => [ 'base' => NULL, 'refs' => [], ], 'ActivateNetworkSiteResponse' => [ 'base' => NULL, 'refs' => [], ], 'Address' => [ 'base' => '<p>Information about an address.</p>', 'refs' => [ 'ActivateNetworkSiteRequest$shippingAddress' => '<p>The shipping address of the network site.</p>', 'Order$shippingAddress' => '<p>The shipping address of the order.</p>', ], ], 'AddressContent' => [ 'base' => NULL, 'refs' => [ 'Address$city' => '<p>The city for this address.</p>', 'Address$company' => '<p>The company name for this address.</p>', 'Address$country' => '<p>The country for this address.</p>', 'Address$name' => '<p>The recipient\'s name for this address.</p>', 'Address$phoneNumber' => '<p>The phone number for this address.</p>', 'Address$postalCode' => '<p>The postal code for this address.</p>', 'Address$stateOrProvince' => '<p>The state or province for this address.</p>', 'Address$street1' => '<p>The first line of the street address.</p>', 'Address$street2' => '<p>The second line of the street address.</p>', 'Address$street3' => '<p>The third line of the street address.</p>', ], ], 'Arn' => [ 'base' => NULL, 'refs' => [ 'AcknowledgeOrderReceiptRequest$orderArn' => '<p>The Amazon Resource Name (ARN) of the order.</p>', 'ActivateDeviceIdentifierRequest$deviceIdentifierArn' => '<p>The Amazon Resource Name (ARN) of the device identifier.</p>', 'ActivateNetworkSiteRequest$networkSiteArn' => '<p>The Amazon Resource Name (ARN) of the network site.</p>', 'ConfigureAccessPointRequest$accessPointArn' => '<p>The Amazon Resource Name (ARN) of the network resource.</p>', 'CreateNetworkSiteRequest$networkArn' => '<p>The Amazon Resource Name (ARN) of the network.</p>', 'DeactivateDeviceIdentifierRequest$deviceIdentifierArn' => '<p>The Amazon Resource Name (ARN) of the device identifier.</p>', 'DeleteNetworkRequest$networkArn' => '<p>The Amazon Resource Name (ARN) of the network.</p>', 'DeleteNetworkSiteRequest$networkSiteArn' => '<p>The Amazon Resource Name (ARN) of the network site.</p>', 'DeviceIdentifier$deviceIdentifierArn' => '<p>The Amazon Resource Name (ARN) of the device identifier.</p>', 'DeviceIdentifier$networkArn' => '<p>The Amazon Resource Name (ARN) of the network on which the device identifier appears.</p>', 'DeviceIdentifier$trafficGroupArn' => '<p>The Amazon Resource Name (ARN) of the traffic group to which the device identifier belongs.</p>', 'GetDeviceIdentifierRequest$deviceIdentifierArn' => '<p>The Amazon Resource Name (ARN) of the device identifier.</p>', 'GetNetworkRequest$networkArn' => '<p>The Amazon Resource Name (ARN) of the network.</p>', 'GetNetworkResourceRequest$networkResourceArn' => '<p>The Amazon Resource Name (ARN) of the network resource.</p>', 'GetNetworkSiteRequest$networkSiteArn' => '<p>The Amazon Resource Name (ARN) of the network site.</p>', 'GetOrderRequest$orderArn' => '<p>The Amazon Resource Name (ARN) of the order.</p>', 'ListDeviceIdentifiersRequest$networkArn' => '<p>The Amazon Resource Name (ARN) of the network.</p>', 'ListNetworkResourcesRequest$networkArn' => '<p>The Amazon Resource Name (ARN) of the network.</p>', 'ListNetworkSitesRequest$networkArn' => '<p>The Amazon Resource Name (ARN) of the network.</p>', 'ListOrdersRequest$networkArn' => '<p>The Amazon Resource Name (ARN) of the network.</p>', 'ListTagsForResourceRequest$resourceArn' => '<p>The Amazon Resource Name (ARN) of the resource.</p>', 'Network$networkArn' => '<p>The Amazon Resource Name (ARN) of the network.</p>', 'NetworkResource$networkArn' => '<p>The Amazon Resource Name (ARN) of the network on which this network resource appears.</p>', 'NetworkResource$networkResourceArn' => '<p>The Amazon Resource Name (ARN) of the network resource.</p>', 'NetworkResource$networkSiteArn' => '<p>The Amazon Resource Name (ARN) of the network site on which this network resource appears.</p>', 'NetworkResource$orderArn' => '<p>The Amazon Resource Name (ARN) of the order used to purchase this network resource.</p>', 'NetworkSite$networkArn' => '<p>The Amazon Resource Name (ARN) of the network to which the network site belongs.</p>', 'NetworkSite$networkSiteArn' => '<p>The Amazon Resource Name (ARN) of the network site.</p>', 'Order$networkArn' => '<p>The Amazon Resource Name (ARN) of the network associated with this order.</p>', 'Order$networkSiteArn' => '<p>The Amazon Resource Name (ARN) of the network site associated with this order.</p>', 'Order$orderArn' => '<p>The Amazon Resource Name (ARN) of the order.</p>', 'TagResourceRequest$resourceArn' => '<p> The Amazon Resource Name (ARN) of the resource. </p>', 'UntagResourceRequest$resourceArn' => '<p>The Amazon Resource Name (ARN) of the resource.</p>', 'UpdateNetworkSitePlanRequest$networkSiteArn' => '<p>The Amazon Resource Name (ARN) of the network site.</p>', 'UpdateNetworkSiteRequest$networkSiteArn' => '<p>The Amazon Resource Name (ARN) of the network site.</p>', ], ], 'ClientToken' => [ 'base' => NULL, 'refs' => [ 'ActivateDeviceIdentifierRequest$clientToken' => '<p>Unique, case-sensitive identifier that you provide to ensure the idempotency of the request. For more information, see <a href="https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/Run_Instance_Idempotency.html">How to ensure idempotency</a>.</p>', 'ActivateNetworkSiteRequest$clientToken' => '<p>Unique, case-sensitive identifier that you provide to ensure the idempotency of the request. For more information, see <a href="https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/Run_Instance_Idempotency.html">How to ensure idempotency</a>.</p>', 'CreateNetworkRequest$clientToken' => '<p>Unique, case-sensitive identifier that you provide to ensure the idempotency of the request. For more information, see <a href="https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/Run_Instance_Idempotency.html">How to ensure idempotency</a>.</p>', 'CreateNetworkSiteRequest$clientToken' => '<p>Unique, case-sensitive identifier that you provide to ensure the idempotency of the request. For more information, see <a href="https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/Run_Instance_Idempotency.html">How to ensure idempotency</a>.</p>', 'DeactivateDeviceIdentifierRequest$clientToken' => '<p>Unique, case-sensitive identifier that you provide to ensure the idempotency of the request. For more information, see <a href="https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/Run_Instance_Idempotency.html">How to ensure idempotency</a>.</p>', 'DeleteNetworkRequest$clientToken' => '<p>Unique, case-sensitive identifier that you provide to ensure the idempotency of the request. For more information, see <a href="https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/Run_Instance_Idempotency.html">How to ensure idempotency</a>.</p>', 'DeleteNetworkSiteRequest$clientToken' => '<p>Unique, case-sensitive identifier that you provide to ensure the idempotency of the request. For more information, see <a href="https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/Run_Instance_Idempotency.html">How to ensure idempotency</a>.</p>', 'UpdateNetworkSitePlanRequest$clientToken' => '<p>Unique, case-sensitive identifier that you provide to ensure the idempotency of the request. For more information, see <a href="https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/Run_Instance_Idempotency.html">How to ensure idempotency</a>.</p>', 'UpdateNetworkSiteRequest$clientToken' => '<p>Unique, case-sensitive identifier that you provide to ensure the idempotency of the request. For more information, see <a href="https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/Run_Instance_Idempotency.html">How to ensure idempotency</a>.</p>', ], ], 'ConfigureAccessPointRequest' => [ 'base' => NULL, 'refs' => [], ], 'ConfigureAccessPointRequestCpiSecretKeyString' => [ 'base' => NULL, 'refs' => [ 'ConfigureAccessPointRequest$cpiSecretKey' => '<p>A Base64 encoded string of the CPI certificate associated with the CPI user who is certifying the coordinates of the network resource. </p>', ], ], 'ConfigureAccessPointRequestCpiUserIdString' => [ 'base' => NULL, 'refs' => [ 'ConfigureAccessPointRequest$cpiUserId' => '<p>The CPI user ID of the CPI user who is certifying the coordinates of the network resource. </p>', ], ], 'ConfigureAccessPointRequestCpiUserPasswordString' => [ 'base' => NULL, 'refs' => [ 'ConfigureAccessPointRequest$cpiUserPassword' => '<p>The CPI password associated with the CPI certificate in <code>cpiSecretKey</code>.</p>', ], ], 'ConfigureAccessPointRequestCpiUsernameString' => [ 'base' => NULL, 'refs' => [ 'ConfigureAccessPointRequest$cpiUsername' => '<p>The CPI user name of the CPI user who is certifying the coordinates of the radio unit.</p>', ], ], 'ConfigureAccessPointResponse' => [ 'base' => NULL, 'refs' => [], ], 'CreateNetworkRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateNetworkResponse' => [ 'base' => NULL, 'refs' => [], ], 'CreateNetworkSiteRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateNetworkSiteResponse' => [ 'base' => NULL, 'refs' => [], ], 'DeactivateDeviceIdentifierRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeactivateDeviceIdentifierResponse' => [ 'base' => NULL, 'refs' => [], ], 'DeleteNetworkRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteNetworkResponse' => [ 'base' => NULL, 'refs' => [], ], 'DeleteNetworkSiteRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteNetworkSiteResponse' => [ 'base' => NULL, 'refs' => [], ], 'Description' => [ 'base' => NULL, 'refs' => [ 'CreateNetworkRequest$description' => '<p>The description of the network.</p>', 'CreateNetworkSiteRequest$description' => '<p>The description of the site.</p>', 'Network$description' => '<p>The description of the network.</p>', 'NetworkResource$description' => '<p>The description of the network resource.</p>', 'NetworkSite$description' => '<p>The description of the network site.</p>', 'UpdateNetworkSiteRequest$description' => '<p>The description.</p>', ], ], 'DeviceIdentifier' => [ 'base' => '<p>Information about a subscriber of a device that can use a network.</p>', 'refs' => [ 'ActivateDeviceIdentifierResponse$deviceIdentifier' => '<p>Information about the device identifier.</p>', 'DeactivateDeviceIdentifierResponse$deviceIdentifier' => '<p>Information about the device identifier.</p>', 'DeviceIdentifierList$member' => NULL, 'GetDeviceIdentifierResponse$deviceIdentifier' => '<p>Information about the device identifier.</p>', ], ], 'DeviceIdentifierFilterKeys' => [ 'base' => NULL, 'refs' => [ 'DeviceIdentifierFilters$key' => NULL, ], ], 'DeviceIdentifierFilterValues' => [ 'base' => NULL, 'refs' => [ 'DeviceIdentifierFilters$value' => NULL, ], ], 'DeviceIdentifierFilters' => [ 'base' => NULL, 'refs' => [ 'ListDeviceIdentifiersRequest$filters' => '<p>The filters.</p> <ul> <li> <p> <code>ORDER</code> - The Amazon Resource Name (ARN) of the order.</p> </li> <li> <p> <code>STATUS</code> - The status (<code>ACTIVE</code> | <code>INACTIVE</code>).</p> </li> <li> <p> <code>TRAFFIC_GROUP</code> - The Amazon Resource Name (ARN) of the traffic group.</p> </li> </ul> <p>Filter values are case sensitive. If you specify multiple values for a filter, the values are joined with an <code>OR</code>, and the request returns all results that match any of the specified values.</p>', ], ], 'DeviceIdentifierImsiString' => [ 'base' => NULL, 'refs' => [ 'DeviceIdentifier$imsi' => '<p>The International Mobile Subscriber Identity of the device identifier.</p>', ], ], 'DeviceIdentifierList' => [ 'base' => NULL, 'refs' => [ 'ListDeviceIdentifiersResponse$deviceIdentifiers' => '<p>Information about the device identifiers.</p>', ], ], 'DeviceIdentifierStatus' => [ 'base' => NULL, 'refs' => [ 'DeviceIdentifier$status' => '<p>The status of the device identifier.</p>', ], ], 'Double' => [ 'base' => NULL, 'refs' => [ 'Position$elevation' => '<p>The elevation of the equipment at this position.</p>', 'Position$latitude' => '<p>The latitude of the position.</p>', 'Position$longitude' => '<p>The longitude of the position.</p>', ], ], 'ElevationReference' => [ 'base' => NULL, 'refs' => [ 'Position$elevationReference' => '<p>The reference point from which elevation is reported.</p>', ], ], 'ElevationUnit' => [ 'base' => NULL, 'refs' => [ 'Position$elevationUnit' => '<p>The units used to measure the elevation of the position.</p>', ], ], 'GetDeviceIdentifierRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetDeviceIdentifierResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetNetworkRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetNetworkResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetNetworkResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetNetworkResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetNetworkSiteRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetNetworkSiteResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetOrderRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetOrderResponse' => [ 'base' => NULL, 'refs' => [], ], 'HealthStatus' => [ 'base' => NULL, 'refs' => [ 'NetworkResource$health' => '<p>The health of the network resource.</p>', ], ], 'Integer' => [ 'base' => NULL, 'refs' => [ 'InternalServerException$retryAfterSeconds' => '<p>Advice to clients on when the call can be safely retried.</p>', ], ], 'InternalServerException' => [ 'base' => '<p>Information about an internal error.</p>', 'refs' => [], ], 'LimitExceededException' => [ 'base' => '<p>The limit was exceeded.</p>', 'refs' => [], ], 'ListDeviceIdentifiersRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListDeviceIdentifiersRequestMaxResultsInteger' => [ 'base' => NULL, 'refs' => [ 'ListDeviceIdentifiersRequest$maxResults' => '<p>The maximum number of results to return.</p>', ], ], 'ListDeviceIdentifiersResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListNetworkResourcesRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListNetworkResourcesRequestMaxResultsInteger' => [ 'base' => NULL, 'refs' => [ 'ListNetworkResourcesRequest$maxResults' => '<p>The maximum number of results to return.</p>', ], ], 'ListNetworkResourcesResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListNetworkSitesRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListNetworkSitesRequestMaxResultsInteger' => [ 'base' => NULL, 'refs' => [ 'ListNetworkSitesRequest$maxResults' => '<p>The maximum number of results to return.</p>', ], ], 'ListNetworkSitesResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListNetworksRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListNetworksRequestMaxResultsInteger' => [ 'base' => NULL, 'refs' => [ 'ListNetworksRequest$maxResults' => '<p>The maximum number of results to return.</p>', ], ], 'ListNetworksResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListOrdersRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListOrdersRequestMaxResultsInteger' => [ 'base' => NULL, 'refs' => [ 'ListOrdersRequest$maxResults' => '<p>The maximum number of results to return.</p>', ], ], 'ListOrdersResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'Name' => [ 'base' => NULL, 'refs' => [ 'CreateNetworkRequest$networkName' => '<p>The name of the network. You can\'t change the name after you create the network.</p>', 'CreateNetworkSiteRequest$networkSiteName' => '<p>The name of the site. You can\'t change the name after you create the site.</p>', 'Network$networkName' => '<p>The name of the network.</p>', 'NetworkSite$networkSiteName' => '<p>The name of the network site.</p>', ], ], 'NameValuePair' => [ 'base' => '<p>Information about a name/value pair.</p>', 'refs' => [ 'NameValuePairs$member' => NULL, 'Options$member' => NULL, ], ], 'NameValuePairs' => [ 'base' => NULL, 'refs' => [ 'NetworkResource$attributes' => '<p>The attributes of the network resource.</p>', ], ], 'Network' => [ 'base' => '<p>Information about a network.</p>', 'refs' => [ 'CreateNetworkResponse$network' => '<p>Information about the network.</p>', 'DeleteNetworkResponse$network' => '<p>Information about the network.</p>', 'GetNetworkResponse$network' => '<p>Information about the network.</p>', 'NetworkList$member' => NULL, ], ], 'NetworkFilterKeys' => [ 'base' => NULL, 'refs' => [ 'NetworkFilters$key' => NULL, ], ], 'NetworkFilterValues' => [ 'base' => NULL, 'refs' => [ 'NetworkFilters$value' => NULL, ], ], 'NetworkFilters' => [ 'base' => NULL, 'refs' => [ 'ListNetworksRequest$filters' => '<p>The filters.</p> <ul> <li> <p> <code>STATUS</code> - The status (<code>AVAILABLE</code> | <code>CREATED</code> | <code>DELETED</code> | <code>DEPROVISIONING</code> | <code>PROVISIONING</code>).</p> </li> </ul> <p>Filter values are case sensitive. If you specify multiple values for a filter, the values are joined with an <code>OR</code>, and the request returns all results that match any of the specified values.</p>', ], ], 'NetworkList' => [ 'base' => NULL, 'refs' => [ 'ListNetworksResponse$networks' => '<p>The networks.</p>', ], ], 'NetworkResource' => [ 'base' => '<p>Information about a network resource.</p>', 'refs' => [ 'ConfigureAccessPointResponse$accessPoint' => '<p>Information about the network resource.</p>', 'GetNetworkResourceResponse$networkResource' => '<p>Information about the network resource.</p>', 'NetworkResourceList$member' => NULL, ], ], 'NetworkResourceDefinition' => [ 'base' => '<p>Information about a network resource definition.</p>', 'refs' => [ 'NetworkResourceDefinitions$member' => NULL, ], ], 'NetworkResourceDefinitionCountInteger' => [ 'base' => NULL, 'refs' => [ 'NetworkResourceDefinition$count' => '<p>The count in the network resource definition.</p>', ], ], 'NetworkResourceDefinitionType' => [ 'base' => NULL, 'refs' => [ 'NetworkResourceDefinition$type' => '<p>The type in the network resource definition.</p>', ], ], 'NetworkResourceDefinitions' => [ 'base' => NULL, 'refs' => [ 'SitePlan$resourceDefinitions' => '<p>The resource definitions of the plan.</p>', ], ], 'NetworkResourceFilterKeys' => [ 'base' => NULL, 'refs' => [ 'NetworkResourceFilters$key' => NULL, ], ], 'NetworkResourceFilterValues' => [ 'base' => NULL, 'refs' => [ 'NetworkResourceFilters$value' => NULL, ], ], 'NetworkResourceFilters' => [ 'base' => NULL, 'refs' => [ 'ListNetworkResourcesRequest$filters' => '<p>The filters.</p> <ul> <li> <p> <code>ORDER</code> - The Amazon Resource Name (ARN) of the order.</p> </li> <li> <p> <code>STATUS</code> - The status (<code>AVAILABLE</code> | <code>DELETED</code> | <code>DELETING</code> | <code>PENDING</code> | <code>PENDING_RETURN</code> | <code>PROVISIONING</code> | <code>SHIPPED</code>).</p> </li> </ul> <p>Filter values are case sensitive. If you specify multiple values for a filter, the values are joined with an <code>OR</code>, and the request returns all results that match any of the specified values.</p>', ], ], 'NetworkResourceList' => [ 'base' => NULL, 'refs' => [ 'ListNetworkResourcesResponse$networkResources' => '<p>Information about network resources.</p>', ], ], 'NetworkResourceStatus' => [ 'base' => NULL, 'refs' => [ 'NetworkResource$status' => '<p>The status of the network resource.</p>', ], ], 'NetworkResourceType' => [ 'base' => NULL, 'refs' => [ 'NetworkResource$type' => '<p>The type of the network resource.</p>', ], ], 'NetworkSite' => [ 'base' => '<p>Information about a network site.</p>', 'refs' => [ 'ActivateNetworkSiteResponse$networkSite' => '<p>Information about the network site.</p>', 'CreateNetworkSiteResponse$networkSite' => '<p>Information about the network site.</p>', 'DeleteNetworkSiteResponse$networkSite' => '<p>Information about the network site.</p>', 'GetNetworkSiteResponse$networkSite' => '<p>Information about the network site.</p>', 'NetworkSiteList$member' => NULL, 'UpdateNetworkSiteResponse$networkSite' => '<p>Information about the network site.</p>', ], ], 'NetworkSiteFilterKeys' => [ 'base' => NULL, 'refs' => [ 'NetworkSiteFilters$key' => NULL, ], ], 'NetworkSiteFilterValues' => [ 'base' => NULL, 'refs' => [ 'NetworkSiteFilters$value' => NULL, ], ], 'NetworkSiteFilters' => [ 'base' => NULL, 'refs' => [ 'ListNetworkSitesRequest$filters' => '<p>The filters. Add filters to your request to return a more specific list of results. Use filters to match the status of the network sites.</p> <ul> <li> <p> <code>STATUS</code> - The status (<code>AVAILABLE</code> | <code>CREATED</code> | <code>DELETED</code> | <code>DEPROVISIONING</code> | <code>PROVISIONING</code>).</p> </li> </ul> <p>Filter values are case sensitive. If you specify multiple values for a filter, the values are joined with an <code>OR</code>, and the request returns all results that match any of the specified values.</p>', ], ], 'NetworkSiteList' => [ 'base' => NULL, 'refs' => [ 'ListNetworkSitesResponse$networkSites' => '<p>Information about the network sites.</p>', ], ], 'NetworkSiteStatus' => [ 'base' => NULL, 'refs' => [ 'NetworkSite$status' => '<p>The status of the network site.</p>', ], ], 'NetworkStatus' => [ 'base' => NULL, 'refs' => [ 'Network$status' => '<p>The status of the network.</p>', ], ], 'Options' => [ 'base' => NULL, 'refs' => [ 'NetworkResourceDefinition$options' => '<p>The options in the network resource definition.</p>', 'SitePlan$options' => '<p>The options of the plan.</p>', ], ], 'Order' => [ 'base' => '<p>Information about an order.</p>', 'refs' => [ 'AcknowledgeOrderReceiptResponse$order' => '<p>Information about the order.</p>', 'GetOrderResponse$order' => '<p>Information about the order.</p>', 'OrderList$member' => NULL, ], ], 'OrderFilterKeys' => [ 'base' => NULL, 'refs' => [ 'OrderFilters$key' => NULL, ], ], 'OrderFilterValues' => [ 'base' => NULL, 'refs' => [ 'OrderFilters$value' => NULL, ], ], 'OrderFilters' => [ 'base' => NULL, 'refs' => [ 'ListOrdersRequest$filters' => '<p>The filters.</p> <ul> <li> <p> <code>NETWORK_SITE</code> - The Amazon Resource Name (ARN) of the network site.</p> </li> <li> <p> <code>STATUS</code> - The status (<code>ACKNOWLEDGING</code> | <code>ACKNOWLEDGED</code> | <code>UNACKNOWLEDGED</code>).</p> </li> </ul> <p>Filter values are case sensitive. If you specify multiple values for a filter, the values are joined with an <code>OR</code>, and the request returns all results that match any of the specified values.</p>', ], ], 'OrderList' => [ 'base' => NULL, 'refs' => [ 'ListOrdersResponse$orders' => '<p>Information about the orders.</p>', ], ], 'PaginationToken' => [ 'base' => NULL, 'refs' => [ 'ListDeviceIdentifiersRequest$startToken' => '<p>The token for the next page of results.</p>', 'ListDeviceIdentifiersResponse$nextToken' => '<p>The token for the next page of results.</p>', 'ListNetworkResourcesRequest$startToken' => '<p>The token for the next page of results.</p>', 'ListNetworkResourcesResponse$nextToken' => '<p>The token for the next page of results.</p>', 'ListNetworkSitesRequest$startToken' => '<p>The token for the next page of results.</p>', 'ListNetworkSitesResponse$nextToken' => '<p>The token for the next page of results.</p>', 'ListNetworksRequest$startToken' => '<p>The token for the next page of results.</p>', 'ListNetworksResponse$nextToken' => '<p>The token for the next page of results.</p>', 'ListOrdersRequest$startToken' => '<p>The token for the next page of results.</p>', 'ListOrdersResponse$nextToken' => '<p>The token for the next page of results.</p>', ], ], 'PingResponse' => [ 'base' => NULL, 'refs' => [], ], 'Position' => [ 'base' => '<p>Information about a position.</p>', 'refs' => [ 'ConfigureAccessPointRequest$position' => '<p>The position of the network resource.</p>', 'NetworkResource$position' => '<p>The position of the network resource.</p>', ], ], 'ResourceNotFoundException' => [ 'base' => '<p>The resource was not found.</p>', 'refs' => [], ], 'SitePlan' => [ 'base' => '<p>Information about a site plan.</p>', 'refs' => [ 'CreateNetworkSiteRequest$pendingPlan' => '<p>Information about the pending plan for this site.</p>', 'NetworkSite$currentPlan' => '<p>The current plan of the network site.</p>', 'NetworkSite$pendingPlan' => '<p>The pending plan of the network site.</p>', 'UpdateNetworkSitePlanRequest$pendingPlan' => '<p>The pending plan.</p>', ], ], 'String' => [ 'base' => NULL, 'refs' => [ 'AccessDeniedException$message' => NULL, 'CreateNetworkSiteRequest$availabilityZone' => '<p>The Availability Zone that is the parent of this site. You can\'t change the Availability Zone after you create the site.</p>', 'CreateNetworkSiteRequest$availabilityZoneId' => '<p>The ID of the Availability Zone that is the parent of this site. You can\'t change the Availability Zone after you create the site.</p>', 'DeviceIdentifier$iccid' => '<p>The Integrated Circuit Card Identifier of the device identifier.</p>', 'DeviceIdentifier$orderArn' => '<p>The Amazon Resource Name (ARN) of the order used to purchase the device identifier.</p>', 'DeviceIdentifier$vendor' => '<p>The vendor of the device identifier.</p>', 'DeviceIdentifierFilterValues$member' => NULL, 'InternalServerException$message' => '<p>Description of the error.</p>', 'LimitExceededException$message' => NULL, 'NameValuePair$name' => '<p>The name of the pair.</p>', 'NameValuePair$value' => '<p>The value of the pair.</p>', 'Network$statusReason' => '<p>The status reason of the network.</p>', 'NetworkFilterValues$member' => NULL, 'NetworkResource$model' => '<p>The model of the network resource.</p>', 'NetworkResource$serialNumber' => '<p>The serial number of the network resource.</p>', 'NetworkResource$statusReason' => '<p>The status reason of the network resource.</p>', 'NetworkResource$vendor' => '<p>The vendor of the network resource.</p>', 'NetworkResourceFilterValues$member' => NULL, 'NetworkSite$availabilityZone' => '<p> The parent Availability Zone for the network site. </p>', 'NetworkSite$availabilityZoneId' => '<p> The parent Availability Zone ID for the network site. </p>', 'NetworkSite$statusReason' => '<p>The status reason of the network site.</p>', 'NetworkSiteFilterValues$member' => NULL, 'OrderFilterValues$member' => NULL, 'PingResponse$status' => '<p>Information about the health of the service.</p>', 'ResourceNotFoundException$message' => '<p>Description of the error.</p>', 'ResourceNotFoundException$resourceId' => '<p>Identifier of the affected resource.</p>', 'ResourceNotFoundException$resourceType' => '<p>Type of the affected resource.</p>', 'ThrottlingException$message' => NULL, 'TrackingInformation$trackingNumber' => '<p>The tracking number of the shipment.</p>', 'ValidationException$message' => '<p>Description of the error.</p>', 'ValidationExceptionField$message' => '<p>The message about the validation failure.</p>', 'ValidationExceptionField$name' => '<p>The field name that failed validation.</p>', ], ], 'TagKey' => [ 'base' => NULL, 'refs' => [ 'TagKeyList$member' => NULL, 'TagMap$key' => NULL, ], ], 'TagKeyList' => [ 'base' => NULL, 'refs' => [ 'UntagResourceRequest$tagKeys' => '<p>The tag keys.</p>', ], ], 'TagMap' => [ 'base' => NULL, 'refs' => [ 'ActivateDeviceIdentifierResponse$tags' => '<p> The tags on the device identifier. </p>', 'CreateNetworkRequest$tags' => '<p> The tags to apply to the network. </p>', 'CreateNetworkResponse$tags' => '<p> The network tags. </p>', 'CreateNetworkSiteRequest$tags' => '<p> The tags to apply to the network site. </p>', 'CreateNetworkSiteResponse$tags' => '<p> The network site tags. </p>', 'GetDeviceIdentifierResponse$tags' => '<p> The device identifier tags. </p>', 'GetNetworkResourceResponse$tags' => '<p> The network resource tags. </p>', 'GetNetworkResponse$tags' => '<p> The network tags. </p>', 'GetNetworkSiteResponse$tags' => '<p> The network site tags. </p>', 'GetOrderResponse$tags' => '<p> The order tags. </p>', 'ListTagsForResourceResponse$tags' => '<p>The resource tags.</p>', 'TagResourceRequest$tags' => '<p>The tags to add to the resource.</p>', 'UpdateNetworkSiteResponse$tags' => '<p> The network site tags. </p>', ], ], 'TagResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'TagResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'TagValue' => [ 'base' => NULL, 'refs' => [ 'TagMap$value' => NULL, ], ], 'ThrottlingException' => [ 'base' => '<p> The request was denied due to request throttling. </p>', 'refs' => [], ], 'Timestamp' => [ 'base' => NULL, 'refs' => [ 'DeviceIdentifier$createdAt' => '<p>The creation time of this device identifier.</p>', 'Network$createdAt' => '<p>The creation time of the network.</p>', 'NetworkResource$createdAt' => '<p>The creation time of the network resource.</p>', 'NetworkSite$createdAt' => '<p>The creation time of the network site.</p>', 'Order$createdAt' => '<p>The creation time of the order.</p>', ], ], 'TrackingInformation' => [ 'base' => '<p>Information about tracking a shipment.</p>', 'refs' => [ 'TrackingInformationList$member' => NULL, ], ], 'TrackingInformationList' => [ 'base' => NULL, 'refs' => [ 'Order$trackingInformation' => '<p>The tracking information of the order.</p>', ], ], 'UntagResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'UntagResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'UpdateNetworkSitePlanRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateNetworkSiteRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateNetworkSiteResponse' => [ 'base' => NULL, 'refs' => [], ], 'ValidationException' => [ 'base' => '<p>The request failed validation.</p>', 'refs' => [], ], 'ValidationExceptionField' => [ 'base' => '<p>Information about a field that failed validation.</p>', 'refs' => [ 'ValidationExceptionFieldList$member' => NULL, ], ], 'ValidationExceptionFieldList' => [ 'base' => NULL, 'refs' => [ 'ValidationException$fieldList' => '<p>The list of fields that caused the error, if applicable.</p>', ], ], 'ValidationExceptionReason' => [ 'base' => NULL, 'refs' => [ 'ValidationException$reason' => '<p>Reason the request failed validation.</p>', ], ], ],];
