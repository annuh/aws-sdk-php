<?php
// This file was auto-generated from sdk-root/src/data/oam/2022-06-10/docs-2.json
return [ 'version' => '2.0', 'service' => '<p>Use Amazon CloudWatch Observability Access Manager to create and manage links between source accounts and monitoring accounts by using <i>CloudWatch cross-account observability</i>. With CloudWatch cross-account observability, you can monitor and troubleshoot applications that span multiple accounts within a Region. Seamlessly search, visualize, and analyze your metrics, logs, traces, and Application Insights applications in any of the linked accounts without account boundaries.</p> <p>Set up one or more Amazon Web Services accounts as <i>monitoring accounts</i> and link them with multiple <i>source accounts</i>. A monitoring account is a central Amazon Web Services account that can view and interact with observability data generated from source accounts. A source account is an individual Amazon Web Services account that generates observability data for the resources that reside in it. Source accounts share their observability data with the monitoring account. The shared observability data can include metrics in Amazon CloudWatch, logs in Amazon CloudWatch Logs, traces in X-Ray, and applications in Amazon CloudWatch Application Insights.</p>', 'operations' => [ 'CreateLink' => '<p>Creates a link between a source account and a sink that you have created in a monitoring account.</p> <p>Before you create a link, you must create a sink in the monitoring account and create a sink policy in that account. The sink policy must permit the source account to link to it. You can grant permission to source accounts by granting permission to an entire organization or to individual accounts.</p> <p>For more information, see <a href="https://docs.aws.amazon.com/OAM/latest/APIReference/API_CreateSink.html">CreateSink</a> and <a href="https://docs.aws.amazon.com/OAM/latest/APIReference/API_PutSinkPolicy.html">PutSinkPolicy</a>.</p> <p>Each monitoring account can be linked to as many as 100,000 source accounts.</p> <p>Each source account can be linked to as many as five monitoring accounts.</p>', 'CreateSink' => '<p>Use this to create a <i>sink</i> in the current account, so that it can be used as a monitoring account in CloudWatch cross-account observability. A sink is a resource that represents an attachment point in a monitoring account. Source accounts can link to the sink to send observability data.</p> <p>After you create a sink, you must create a sink policy that allows source accounts to attach to it. For more information, see <a href="https://docs.aws.amazon.com/OAM/latest/APIReference/API_PutSinkPolicy.html">PutSinkPolicy</a>.</p> <p>Each account can contain one sink. If you delete a sink, you can then create a new one in that account.</p>', 'DeleteLink' => '<p>Deletes a link between a monitoring account sink and a source account. You must run this operation in the source account.</p>', 'DeleteSink' => '<p>Deletes a sink. You must delete all links to a sink before you can delete that sink.</p>', 'GetLink' => '<p>Returns complete information about one link.</p> <p>To use this operation, provide the link ARN. To retrieve a list of link ARNs, use <a href="https://docs.aws.amazon.com/OAM/latest/APIReference/API_ListLinks.html">ListLinks</a>.</p>', 'GetSink' => '<p>Returns complete information about one monitoring account sink.</p> <p>To use this operation, provide the sink ARN. To retrieve a list of sink ARNs, use <a href="https://docs.aws.amazon.com/OAM/latest/APIReference/API_ListSinks.html">ListSinks</a>.</p>', 'GetSinkPolicy' => '<p>Returns the current sink policy attached to this sink. The sink policy specifies what accounts can attach to this sink as source accounts, and what types of data they can share.</p>', 'ListAttachedLinks' => '<p>Returns a list of source account links that are linked to this monitoring account sink.</p> <p>To use this operation, provide the sink ARN. To retrieve a list of sink ARNs, use <a href="https://docs.aws.amazon.com/OAM/latest/APIReference/API_ListSinks.html">ListSinks</a>.</p> <p>To find a list of links for one source account, use <a href="https://docs.aws.amazon.com/OAM/latest/APIReference/API_ListLinks.html">ListLinks</a>.</p>', 'ListLinks' => '<p>Use this operation in a source account to return a list of links to monitoring account sinks that this source account has.</p> <p>To find a list of links for one monitoring account sink, use <a href="https://docs.aws.amazon.com/OAM/latest/APIReference/API_ListAttachedLinks.html">ListAttachedLinks</a> from within the monitoring account.</p>', 'ListSinks' => '<p>Use this operation in a monitoring account to return the list of sinks created in that account.</p>', 'ListTagsForResource' => '<p>Displays the tags associated with a resource. Both sinks and links support tagging.</p>', 'PutSinkPolicy' => '<p>Creates or updates the resource policy that grants permissions to source accounts to link to the monitoring account sink. When you create a sink policy, you can grant permissions to all accounts in an organization or to individual accounts.</p> <p>You can also use a sink policy to limit the types of data that is shared. The three types that you can allow or deny are:</p> <ul> <li> <p> <b>Metrics</b> - Specify with <code>AWS::CloudWatch::Metric</code> </p> </li> <li> <p> <b>Log groups</b> - Specify with <code>AWS::Logs::LogGroup</code> </p> </li> <li> <p> <b>Traces</b> - Specify with <code>AWS::XRay::Trace</code> </p> </li> <li> <p> <b>Application Insights - Applications</b> - Specify with <code>AWS::ApplicationInsights::Application</code> </p> </li> </ul> <p>See the examples in this section to see how to specify permitted source accounts and data types.</p>', 'TagResource' => '<p>Assigns one or more tags (key-value pairs) to the specified resource. Both sinks and links can be tagged. </p> <p>Tags can help you organize and categorize your resources. You can also use them to scope user permissions by granting a user permission to access or change only resources with certain tag values.</p> <p>Tags don\'t have any semantic meaning to Amazon Web Services and are interpreted strictly as strings of characters.</p> <p>You can use the <code>TagResource</code> action with a resource that already has tags. If you specify a new tag key for the alarm, this tag is appended to the list of tags associated with the alarm. If you specify a tag key that is already associated with the alarm, the new tag value that you specify replaces the previous value for that tag.</p> <p>You can associate as many as 50 tags with a resource.</p> <important> <p>Unlike tagging permissions in other Amazon Web Services services, to tag or untag links and sinks you must have the <code>oam:ResourceTag</code> permission. The <code>iam:ResourceTag</code> permission does not allow you to tag and untag links and sinks.</p> </important>', 'UntagResource' => '<p>Removes one or more tags from the specified resource.</p> <important> <p>Unlike tagging permissions in other Amazon Web Services services, to tag or untag links and sinks you must have the <code>oam:ResourceTag</code> permission. The <code>iam:TagResource</code> permission does not allow you to tag and untag links and sinks.</p> </important>', 'UpdateLink' => '<p>Use this operation to change what types of data are shared from a source account to its linked monitoring account sink. You can\'t change the sink or change the monitoring account with this operation.</p> <p>To update the list of tags associated with the sink, use <a href="https://docs.aws.amazon.com/OAM/latest/APIReference/API_TagResource.html">TagResource</a>.</p>', ], 'shapes' => [ 'Arn' => [ 'base' => NULL, 'refs' => [ 'ListTagsForResourceInput$ResourceArn' => '<p>The ARN of the resource that you want to view tags for.</p> <p>The ARN format of a sink is <code>arn:aws:oam:<i>Region</i>:<i>account-id</i>:sink/<i>sink-id</i> </code> </p> <p>The ARN format of a link is <code>arn:aws:oam:<i>Region</i>:<i>account-id</i>:link/<i>link-id</i> </code> </p> <p>For more information about ARN format, see <a href="https://docs.aws.amazon.com/AmazonCloudWatch/latest/logs/iam-access-control-overview-cwl.html">CloudWatch Logs resources and operations</a>.</p> <important> <p>Unlike tagging permissions in other Amazon Web Services services, to retrieve the list of tags for links or sinks you must have the <code>oam:RequestTag</code> permission. The <code>aws:ReguestTag</code> permission does not allow you to tag and untag links and sinks.</p> </important>', 'TagResourceInput$ResourceArn' => '<p>The ARN of the resource that you\'re adding tags to.</p> <p>The ARN format of a sink is <code>arn:aws:oam:<i>Region</i>:<i>account-id</i>:sink/<i>sink-id</i> </code> </p> <p>The ARN format of a link is <code>arn:aws:oam:<i>Region</i>:<i>account-id</i>:link/<i>link-id</i> </code> </p> <p>For more information about ARN format, see <a href="https://docs.aws.amazon.com/AmazonCloudWatch/latest/logs/iam-access-control-overview-cwl.html">CloudWatch Logs resources and operations</a>.</p>', 'UntagResourceInput$ResourceArn' => '<p>The ARN of the resource that you\'re removing tags from.</p> <p>The ARN format of a sink is <code>arn:aws:oam:<i>Region</i>:<i>account-id</i>:sink/<i>sink-id</i> </code> </p> <p>The ARN format of a link is <code>arn:aws:oam:<i>Region</i>:<i>account-id</i>:link/<i>link-id</i> </code> </p> <p>For more information about ARN format, see <a href="https://docs.aws.amazon.com/AmazonCloudWatch/latest/logs/iam-access-control-overview-cwl.html">CloudWatch Logs resources and operations</a>.</p>', ], ], 'ConflictException' => [ 'base' => '<p>A resource was in an inconsistent state during an update or a deletion.</p>', 'refs' => [], ], 'CreateLinkInput' => [ 'base' => NULL, 'refs' => [], ], 'CreateLinkOutput' => [ 'base' => NULL, 'refs' => [], ], 'CreateSinkInput' => [ 'base' => NULL, 'refs' => [], ], 'CreateSinkOutput' => [ 'base' => NULL, 'refs' => [], ], 'DeleteLinkInput' => [ 'base' => NULL, 'refs' => [], ], 'DeleteLinkOutput' => [ 'base' => NULL, 'refs' => [], ], 'DeleteSinkInput' => [ 'base' => NULL, 'refs' => [], ], 'DeleteSinkOutput' => [ 'base' => NULL, 'refs' => [], ], 'GetLinkInput' => [ 'base' => NULL, 'refs' => [], ], 'GetLinkOutput' => [ 'base' => NULL, 'refs' => [], ], 'GetSinkInput' => [ 'base' => NULL, 'refs' => [], ], 'GetSinkOutput' => [ 'base' => NULL, 'refs' => [], ], 'GetSinkPolicyInput' => [ 'base' => NULL, 'refs' => [], ], 'GetSinkPolicyOutput' => [ 'base' => NULL, 'refs' => [], ], 'InternalServiceFault' => [ 'base' => '<p>Unexpected error while processing the request. Retry the request.</p>', 'refs' => [], ], 'InvalidParameterException' => [ 'base' => '<p>A parameter is specified incorrectly.</p>', 'refs' => [], ], 'LabelTemplate' => [ 'base' => NULL, 'refs' => [ 'CreateLinkInput$LabelTemplate' => '<p>Specify a friendly human-readable name to use to identify this source account when you are viewing data from it in the monitoring account.</p> <p>You can use a custom label or use the following variables:</p> <ul> <li> <p> <code>$AccountName</code> is the name of the account</p> </li> <li> <p> <code>$AccountEmail</code> is the globally unique email address of the account</p> </li> <li> <p> <code>$AccountEmailNoDomain</code> is the email address of the account without the domain name</p> </li> </ul>', 'UpdateLinkOutput$LabelTemplate' => '<p>The exact label template that was specified when the link was created, with the template variables not resolved.</p>', ], ], 'ListAttachedLinksInput' => [ 'base' => NULL, 'refs' => [], ], 'ListAttachedLinksItem' => [ 'base' => '<p>A structure that contains information about one link attached to this monitoring account sink.</p>', 'refs' => [ 'ListAttachedLinksItems$member' => NULL, ], ], 'ListAttachedLinksItems' => [ 'base' => NULL, 'refs' => [ 'ListAttachedLinksOutput$Items' => '<p>An array of structures that contain the information about the attached links.</p>', ], ], 'ListAttachedLinksMaxResults' => [ 'base' => NULL, 'refs' => [ 'ListAttachedLinksInput$MaxResults' => '<p>Limits the number of returned links to the specified number.</p>', ], ], 'ListAttachedLinksOutput' => [ 'base' => NULL, 'refs' => [], ], 'ListLinksInput' => [ 'base' => NULL, 'refs' => [], ], 'ListLinksItem' => [ 'base' => '<p>A structure that contains information about one of this source account\'s links to a monitoring account.</p>', 'refs' => [ 'ListLinksItems$member' => NULL, ], ], 'ListLinksItems' => [ 'base' => NULL, 'refs' => [ 'ListLinksOutput$Items' => '<p>An array of structures that contain the information about the returned links.</p>', ], ], 'ListLinksMaxResults' => [ 'base' => NULL, 'refs' => [ 'ListLinksInput$MaxResults' => '<p>Limits the number of returned links to the specified number.</p>', ], ], 'ListLinksOutput' => [ 'base' => NULL, 'refs' => [], ], 'ListSinksInput' => [ 'base' => NULL, 'refs' => [], ], 'ListSinksItem' => [ 'base' => '<p>A structure that contains information about one of this monitoring account\'s sinks.</p>', 'refs' => [ 'ListSinksItems$member' => NULL, ], ], 'ListSinksItems' => [ 'base' => NULL, 'refs' => [ 'ListSinksOutput$Items' => '<p>An array of structures that contain the information about the returned sinks.</p>', ], ], 'ListSinksMaxResults' => [ 'base' => NULL, 'refs' => [ 'ListSinksInput$MaxResults' => '<p>Limits the number of returned links to the specified number.</p>', ], ], 'ListSinksOutput' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForResourceInput' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForResourceOutput' => [ 'base' => NULL, 'refs' => [], ], 'MissingRequiredParameterException' => [ 'base' => '<p>A required parameter is missing from the request.</p>', 'refs' => [], ], 'NextToken' => [ 'base' => NULL, 'refs' => [ 'ListAttachedLinksInput$NextToken' => '<p>The token for the next set of items to return. You received this token from a previous call.</p>', 'ListLinksInput$NextToken' => '<p>The token for the next set of items to return. You received this token from a previous call.</p>', 'ListSinksInput$NextToken' => '<p>The token for the next set of items to return. You received this token from a previous call.</p>', ], ], 'PutSinkPolicyInput' => [ 'base' => NULL, 'refs' => [], ], 'PutSinkPolicyOutput' => [ 'base' => NULL, 'refs' => [], ], 'ResourceIdentifier' => [ 'base' => NULL, 'refs' => [ 'CreateLinkInput$SinkIdentifier' => '<p>The ARN of the sink to use to create this link. You can use <a href="https://docs.aws.amazon.com/OAM/latest/APIReference/API_ListSinks.html">ListSinks</a> to find the ARNs of sinks.</p> <p>For more information about sinks, see <a href="https://docs.aws.amazon.com/OAM/latest/APIReference/API_CreateSink.html">CreateSink</a>.</p>', 'DeleteLinkInput$Identifier' => '<p>The ARN of the link to delete.</p>', 'DeleteSinkInput$Identifier' => '<p>The ARN of the sink to delete.</p>', 'GetLinkInput$Identifier' => '<p>The ARN of the link to retrieve information for.</p>', 'GetSinkInput$Identifier' => '<p>The ARN of the sink to retrieve information for.</p>', 'GetSinkPolicyInput$SinkIdentifier' => '<p>The ARN of the sink to retrieve the policy of.</p>', 'ListAttachedLinksInput$SinkIdentifier' => '<p>The ARN of the sink that you want to retrieve links for.</p>', 'PutSinkPolicyInput$SinkIdentifier' => '<p>The ARN of the sink to attach this policy to.</p>', 'UpdateLinkInput$Identifier' => '<p>The ARN of the link that you want to update.</p>', ], ], 'ResourceNotFoundException' => [ 'base' => '<p>The request references a resource that does not exist.</p>', 'refs' => [], ], 'ResourceType' => [ 'base' => NULL, 'refs' => [ 'ResourceTypesInput$member' => NULL, ], ], 'ResourceTypesInput' => [ 'base' => NULL, 'refs' => [ 'CreateLinkInput$ResourceTypes' => '<p>An array of strings that define which types of data that the source account shares with the monitoring account.</p>', 'UpdateLinkInput$ResourceTypes' => '<p>An array of strings that define which types of data that the source account will send to the monitoring account.</p> <p>Your input here replaces the current set of data types that are shared.</p>', ], ], 'ResourceTypesOutput' => [ 'base' => NULL, 'refs' => [ 'CreateLinkOutput$ResourceTypes' => '<p>The resource types supported by this link.</p>', 'GetLinkOutput$ResourceTypes' => '<p>The resource types supported by this link.</p>', 'ListAttachedLinksItem$ResourceTypes' => '<p>The resource types supported by this link.</p>', 'ListLinksItem$ResourceTypes' => '<p>The resource types supported by this link.</p>', 'UpdateLinkOutput$ResourceTypes' => '<p>The resource types now supported by this link.</p>', ], ], 'ServiceQuotaExceededException' => [ 'base' => '<p>The request would cause a service quota to be exceeded.</p>', 'refs' => [], ], 'SinkName' => [ 'base' => NULL, 'refs' => [ 'CreateSinkInput$Name' => '<p>A name for the sink.</p>', ], ], 'SinkPolicy' => [ 'base' => NULL, 'refs' => [ 'PutSinkPolicyInput$Policy' => '<p>The JSON policy to use. If you are updating an existing policy, the entire existing policy is replaced by what you specify here.</p> <p>The policy must be in JSON string format with quotation marks escaped and no newlines.</p> <p>For examples of different types of policies, see the <b>Examples</b> section on this page.</p>', ], ], 'String' => [ 'base' => NULL, 'refs' => [ 'ConflictException$Message' => NULL, 'ConflictException$amznErrorType' => '<p>The name of the exception.</p>', 'CreateLinkOutput$Arn' => '<p>The ARN of the link that is newly created.</p>', 'CreateLinkOutput$Id' => '<p>The random ID string that Amazon Web Services generated as part of the link ARN.</p>', 'CreateLinkOutput$Label' => '<p>The label that you assigned to this link. If the <code>labelTemplate</code> includes variables, this field displays the variables resolved to their actual values.</p>', 'CreateLinkOutput$LabelTemplate' => '<p>The exact label template that you specified, with the variables not resolved.</p>', 'CreateLinkOutput$SinkArn' => '<p>The ARN of the sink that is used for this link.</p>', 'CreateSinkOutput$Arn' => '<p>The ARN of the sink that is newly created.</p>', 'CreateSinkOutput$Id' => '<p>The random ID string that Amazon Web Services generated as part of the sink ARN.</p>', 'CreateSinkOutput$Name' => '<p>The name of the sink.</p>', 'GetLinkOutput$Arn' => '<p>The ARN of the link.</p>', 'GetLinkOutput$Id' => '<p>The random ID string that Amazon Web Services generated as part of the link ARN.</p>', 'GetLinkOutput$Label' => '<p>The label that you assigned to this link, with the variables resolved to their actual values.</p>', 'GetLinkOutput$LabelTemplate' => '<p>The exact label template that was specified when the link was created, with the template variables not resolved.</p>', 'GetLinkOutput$SinkArn' => '<p>The ARN of the sink that is used for this link.</p>', 'GetSinkOutput$Arn' => '<p>The ARN of the sink.</p>', 'GetSinkOutput$Id' => '<p>The random ID string that Amazon Web Services generated as part of the sink ARN.</p>', 'GetSinkOutput$Name' => '<p>The name of the sink.</p>', 'GetSinkPolicyOutput$SinkArn' => '<p>The ARN of the sink.</p>', 'GetSinkPolicyOutput$SinkId' => '<p>The random ID string that Amazon Web Services generated as part of the sink ARN.</p>', 'GetSinkPolicyOutput$Policy' => '<p>The policy that you specified, in JSON format.</p>', 'InternalServiceFault$Message' => NULL, 'InternalServiceFault$amznErrorType' => '<p>The name of the exception.</p>', 'InvalidParameterException$message' => NULL, 'InvalidParameterException$amznErrorType' => '<p>The name of the exception.</p>', 'ListAttachedLinksItem$Label' => '<p>The label that was assigned to this link at creation, with the variables resolved to their actual values.</p>', 'ListAttachedLinksItem$LinkArn' => '<p>The ARN of the link.</p>', 'ListAttachedLinksOutput$NextToken' => '<p>The token to use when requesting the next set of links.</p>', 'ListLinksItem$Arn' => '<p>The ARN of the link.</p>', 'ListLinksItem$Id' => '<p>The random ID string that Amazon Web Services generated as part of the link ARN.</p>', 'ListLinksItem$Label' => '<p>The label that was assigned to this link at creation, with the variables resolved to their actual values.</p>', 'ListLinksItem$SinkArn' => '<p>The ARN of the sink that this link is attached to.</p>', 'ListLinksOutput$NextToken' => '<p>The token to use when requesting the next set of links.</p>', 'ListSinksItem$Arn' => '<p>The ARN of the sink.</p>', 'ListSinksItem$Id' => '<p>The random ID string that Amazon Web Services generated as part of the sink ARN.</p>', 'ListSinksItem$Name' => '<p>The name of the sink.</p>', 'ListSinksOutput$NextToken' => '<p>The token to use when requesting the next set of sinks.</p>', 'MissingRequiredParameterException$message' => NULL, 'MissingRequiredParameterException$amznErrorType' => '<p>The name of the exception.</p>', 'PutSinkPolicyOutput$SinkArn' => '<p>The ARN of the sink.</p>', 'PutSinkPolicyOutput$SinkId' => '<p>The random ID string that Amazon Web Services generated as part of the sink ARN.</p>', 'PutSinkPolicyOutput$Policy' => '<p>The policy that you specified.</p>', 'ResourceNotFoundException$Message' => NULL, 'ResourceNotFoundException$amznErrorType' => '<p>The name of the exception.</p>', 'ResourceTypesOutput$member' => NULL, 'ServiceQuotaExceededException$Message' => NULL, 'ServiceQuotaExceededException$amznErrorType' => '<p>The name of the exception.</p>', 'TagMapOutput$key' => NULL, 'TagMapOutput$value' => NULL, 'TooManyTagsException$Message' => NULL, 'UpdateLinkOutput$Arn' => '<p>The ARN of the link that you have updated.</p>', 'UpdateLinkOutput$Id' => '<p>The random ID string that Amazon Web Services generated as part of the sink ARN.</p>', 'UpdateLinkOutput$Label' => '<p>The label assigned to this link, with the variables resolved to their actual values.</p>', 'UpdateLinkOutput$SinkArn' => '<p>The ARN of the sink that is used for this link.</p>', 'ValidationException$Message' => NULL, ], ], 'TagKey' => [ 'base' => NULL, 'refs' => [ 'TagKeys$member' => NULL, 'TagMapInput$key' => NULL, ], ], 'TagKeys' => [ 'base' => NULL, 'refs' => [ 'UntagResourceInput$TagKeys' => '<p>The list of tag keys to remove from the resource.</p>', ], ], 'TagMapInput' => [ 'base' => NULL, 'refs' => [ 'CreateLinkInput$Tags' => '<p>Assigns one or more tags (key-value pairs) to the link. </p> <p>Tags can help you organize and categorize your resources. You can also use them to scope user permissions by granting a user permission to access or change only resources with certain tag values.</p> <p>For more information about using tags to control access, see <a href="https://docs.aws.amazon.com/IAM/latest/UserGuide/access_tags.html">Controlling access to Amazon Web Services resources using tags</a>.</p>', 'CreateSinkInput$Tags' => '<p>Assigns one or more tags (key-value pairs) to the link. </p> <p>Tags can help you organize and categorize your resources. You can also use them to scope user permissions by granting a user permission to access or change only resources with certain tag values.</p> <p>For more information about using tags to control access, see <a href="https://docs.aws.amazon.com/IAM/latest/UserGuide/access_tags.html">Controlling access to Amazon Web Services resources using tags</a>.</p>', 'TagResourceInput$Tags' => '<p>The list of key-value pairs to associate with the resource.</p>', ], ], 'TagMapOutput' => [ 'base' => NULL, 'refs' => [ 'CreateLinkOutput$Tags' => '<p>The tags assigned to the link.</p>', 'CreateSinkOutput$Tags' => '<p>The tags assigned to the sink.</p>', 'GetLinkOutput$Tags' => '<p>The tags assigned to the link.</p>', 'GetSinkOutput$Tags' => '<p>The tags assigned to the sink.</p>', 'ListTagsForResourceOutput$Tags' => '<p>The list of tags associated with the requested resource.&gt;</p>', 'UpdateLinkOutput$Tags' => '<p>The tags assigned to the link.</p>', ], ], 'TagResourceInput' => [ 'base' => NULL, 'refs' => [], ], 'TagResourceOutput' => [ 'base' => NULL, 'refs' => [], ], 'TagValue' => [ 'base' => NULL, 'refs' => [ 'TagMapInput$value' => NULL, ], ], 'TooManyTagsException' => [ 'base' => '<p>A resource can have no more than 50 tags.</p>', 'refs' => [], ], 'UntagResourceInput' => [ 'base' => NULL, 'refs' => [], ], 'UntagResourceOutput' => [ 'base' => NULL, 'refs' => [], ], 'UpdateLinkInput' => [ 'base' => NULL, 'refs' => [], ], 'UpdateLinkOutput' => [ 'base' => NULL, 'refs' => [], ], 'ValidationException' => [ 'base' => '<p>The value of a parameter in the request caused an error.</p>', 'refs' => [], ], ],];
