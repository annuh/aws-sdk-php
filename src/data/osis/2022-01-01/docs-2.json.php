<?php
// This file was auto-generated from sdk-root/src/data/osis/2022-01-01/docs-2.json
return [ 'version' => '2.0', 'service' => '<p>Use the Amazon OpenSearch Ingestion API to create and manage ingestion pipelines. OpenSearch Ingestion is a fully managed data collector that delivers real-time log and trace data to OpenSearch Service domains. For more information, see <a href="https://docs.aws.amazon.com/opensearch-service/latest/developerguide/ingestion.html">Getting data into your cluster using OpenSearch Ingestion</a>.</p>', 'operations' => [ 'CreatePipeline' => '<p>Creates an OpenSearch Ingestion pipeline. For more information, see <a href="https://docs.aws.amazon.com/opensearch-service/latest/developerguide/creating-pipeline.html">Creating Amazon OpenSearch Ingestion pipelines</a>.</p>', 'DeletePipeline' => '<p>Deletes an OpenSearch Ingestion pipeline. For more information, see <a href="https://docs.aws.amazon.com/opensearch-service/latest/developerguide/delete-pipeline.html">Deleting Amazon OpenSearch Ingestion pipelines</a>.</p>', 'GetPipeline' => '<p>Retrieves information about an OpenSearch Ingestion pipeline.</p>', 'GetPipelineBlueprint' => '<p>Retrieves information about a specific blueprint for OpenSearch Ingestion. Blueprints are templates for the configuration needed for a <code>CreatePipeline</code> request. For more information, see <a href="https://docs.aws.amazon.com/opensearch-service/latest/developerguide/creating-pipeline.html#pipeline-blueprint">Using blueprints to create a pipeline</a>.</p>', 'GetPipelineChangeProgress' => '<p>Returns progress information for the current change happening on an OpenSearch Ingestion pipeline. Currently, this operation only returns information when a pipeline is being created.</p> <p>For more information, see <a href="https://docs.aws.amazon.com/opensearch-service/latest/developerguide/creating-pipeline.html#get-pipeline-progress">Tracking the status of pipeline creation</a>.</p>', 'ListPipelineBlueprints' => '<p>Retrieves a list of all available blueprints for Data Prepper. For more information, see <a href="https://docs.aws.amazon.com/opensearch-service/latest/developerguide/creating-pipeline.html#pipeline-blueprint">Using blueprints to create a pipeline</a>.</p>', 'ListPipelines' => '<p>Lists all OpenSearch Ingestion pipelines in the current Amazon Web Services account and Region. For more information, see <a href="https://docs.aws.amazon.com/opensearch-service/latest/developerguide/list-pipeline.html">Viewing Amazon OpenSearch Ingestion pipelines</a>.</p>', 'ListTagsForResource' => '<p>Lists all resource tags associated with an OpenSearch Ingestion pipeline. For more information, see <a href="https://docs.aws.amazon.com/opensearch-service/latest/developerguide/tag-pipeline.html">Tagging Amazon OpenSearch Ingestion pipelines</a>.</p>', 'StartPipeline' => '<p>Starts an OpenSearch Ingestion pipeline. For more information, see <a href="https://docs.aws.amazon.com/opensearch-service/latest/developerguide/pipeline--stop-start.html#pipeline--start">Starting an OpenSearch Ingestion pipeline</a>.</p>', 'StopPipeline' => '<p>Stops an OpenSearch Ingestion pipeline. For more information, see <a href="https://docs.aws.amazon.com/opensearch-service/latest/developerguide/pipeline--stop-start.html#pipeline--stop">Stopping an OpenSearch Ingestion pipeline</a>.</p>', 'TagResource' => '<p>Tags an OpenSearch Ingestion pipeline. For more information, see <a href="https://docs.aws.amazon.com/opensearch-service/latest/developerguide/tag-pipeline.html">Tagging Amazon OpenSearch Ingestion pipelines</a>.</p>', 'UntagResource' => '<p>Removes one or more tags from an OpenSearch Ingestion pipeline. For more information, see <a href="https://docs.aws.amazon.com/opensearch-service/latest/developerguide/tag-pipeline.html">Tagging Amazon OpenSearch Ingestion pipelines</a>.</p>', 'UpdatePipeline' => '<p>Updates an OpenSearch Ingestion pipeline. For more information, see <a href="https://docs.aws.amazon.com/opensearch-service/latest/developerguide/update-pipeline.html">Updating Amazon OpenSearch Ingestion pipelines</a>.</p>', 'ValidatePipeline' => '<p>Checks whether an OpenSearch Ingestion pipeline configuration is valid prior to creation. For more information, see <a href="https://docs.aws.amazon.com/opensearch-service/latest/developerguide/creating-pipeline.html">Creating Amazon OpenSearch Ingestion pipelines</a>.</p>', ], 'shapes' => [ 'AccessDeniedException' => [ 'base' => '<p>You don\'t have permissions to access the resource.</p>', 'refs' => [], ], 'Boolean' => [ 'base' => NULL, 'refs' => [ 'BufferOptions$PersistentBufferEnabled' => '<p>Whether persistent buffering should be enabled.</p>', 'LogPublishingOptions$IsLoggingEnabled' => '<p>Whether logs should be published.</p>', 'ValidatePipelineResponse$isValid' => '<p>A boolean indicating whether or not the pipeline configuration is valid.</p>', ], ], 'BufferOptions' => [ 'base' => '<p>Options that specify the configuration of a persistent buffer. To configure how OpenSearch Ingestion encrypts this data, set the EncryptionAtRestOptions.</p>', 'refs' => [ 'CreatePipelineRequest$BufferOptions' => '<p>Key-value pairs to configure persistent buffering for the pipeline.</p>', 'Pipeline$BufferOptions' => NULL, 'UpdatePipelineRequest$BufferOptions' => '<p>Key-value pairs to configure persistent buffering for the pipeline.</p>', ], ], 'ChangeProgressStage' => [ 'base' => '<p>Progress details for a specific stage of a pipeline configuration change.</p>', 'refs' => [ 'ChangeProgressStageList$member' => NULL, ], ], 'ChangeProgressStageList' => [ 'base' => NULL, 'refs' => [ 'ChangeProgressStatus$ChangeProgressStages' => '<p>Information about the stages that the pipeline is going through to perform the configuration change.</p>', ], ], 'ChangeProgressStageStatuses' => [ 'base' => NULL, 'refs' => [ 'ChangeProgressStage$Status' => '<p>The current status of the stage that the change is in.</p>', ], ], 'ChangeProgressStatus' => [ 'base' => '<p>The progress details of a pipeline configuration change.</p>', 'refs' => [ 'ChangeProgressStatusList$member' => NULL, ], ], 'ChangeProgressStatusList' => [ 'base' => NULL, 'refs' => [ 'GetPipelineChangeProgressResponse$ChangeProgressStatuses' => '<p>The current status of the change happening on the pipeline.</p>', ], ], 'ChangeProgressStatuses' => [ 'base' => NULL, 'refs' => [ 'ChangeProgressStatus$Status' => '<p>The overall status of the pipeline configuration change.</p>', ], ], 'CloudWatchLogDestination' => [ 'base' => '<p>The destination for OpenSearch Ingestion logs sent to Amazon CloudWatch.</p>', 'refs' => [ 'LogPublishingOptions$CloudWatchLogDestination' => '<p>The destination for OpenSearch Ingestion logs sent to Amazon CloudWatch Logs. This parameter is required if <code>IsLoggingEnabled</code> is set to <code>true</code>.</p>', ], ], 'ConflictException' => [ 'base' => '<p>The client attempted to remove a resource that is currently in use.</p>', 'refs' => [], ], 'CreatePipelineRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreatePipelineResponse' => [ 'base' => NULL, 'refs' => [], ], 'DeletePipelineRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeletePipelineResponse' => [ 'base' => NULL, 'refs' => [], ], 'EncryptionAtRestOptions' => [ 'base' => '<p>Options to control how OpenSearch encrypts all data-at-rest.</p>', 'refs' => [ 'CreatePipelineRequest$EncryptionAtRestOptions' => '<p>Key-value pairs to configure encryption for data that is written to a persistent buffer.</p>', 'Pipeline$EncryptionAtRestOptions' => NULL, 'UpdatePipelineRequest$EncryptionAtRestOptions' => '<p>Key-value pairs to configure encryption for data that is written to a persistent buffer.</p>', ], ], 'GetPipelineBlueprintRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetPipelineBlueprintResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetPipelineChangeProgressRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetPipelineChangeProgressResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetPipelineRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetPipelineResponse' => [ 'base' => NULL, 'refs' => [], ], 'IngestEndpointUrlsList' => [ 'base' => NULL, 'refs' => [ 'Pipeline$IngestEndpointUrls' => '<p>The ingestion endpoints for the pipeline, which you can send data to.</p>', ], ], 'Integer' => [ 'base' => NULL, 'refs' => [ 'ChangeProgressStatus$TotalNumberOfStages' => '<p>The total number of stages required for the pipeline configuration change.</p>', 'Pipeline$MinUnits' => '<p>The minimum pipeline capacity, in Ingestion Compute Units (ICUs).</p>', 'Pipeline$MaxUnits' => '<p>The maximum pipeline capacity, in Ingestion Compute Units (ICUs).</p>', ], ], 'InternalException' => [ 'base' => '<p>The request failed because of an unknown error, exception, or failure (the failure is internal to the service).</p>', 'refs' => [], ], 'InvalidPaginationTokenException' => [ 'base' => '<p>An invalid pagination token provided in the request.</p>', 'refs' => [], ], 'KmsKeyArn' => [ 'base' => NULL, 'refs' => [ 'EncryptionAtRestOptions$KmsKeyArn' => '<p>The ARN of the KMS key used to encrypt data-at-rest in OpenSearch Ingestion. By default, data is encrypted using an AWS owned key.</p>', ], ], 'LimitExceededException' => [ 'base' => '<p>You attempted to create more than the allowed number of tags.</p>', 'refs' => [], ], 'ListPipelineBlueprintsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListPipelineBlueprintsResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListPipelinesRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListPipelinesResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'LogGroup' => [ 'base' => NULL, 'refs' => [ 'CloudWatchLogDestination$LogGroup' => '<p>The name of the CloudWatch Logs group to send pipeline logs to. You can specify an existing log group or create a new one. For example, <code>/aws/OpenSearchService/IngestionService/my-pipeline</code>.</p>', ], ], 'LogPublishingOptions' => [ 'base' => '<p>Container for the values required to configure logging for the pipeline. If you don\'t specify these values, OpenSearch Ingestion will not publish logs from your application to CloudWatch Logs.</p>', 'refs' => [ 'CreatePipelineRequest$LogPublishingOptions' => '<p>Key-value pairs to configure log publishing.</p>', 'Pipeline$LogPublishingOptions' => '<p>Key-value pairs that represent log publishing settings.</p>', 'UpdatePipelineRequest$LogPublishingOptions' => '<p>Key-value pairs to configure log publishing.</p>', ], ], 'MaxResults' => [ 'base' => NULL, 'refs' => [ 'ListPipelinesRequest$MaxResults' => '<p>An optional parameter that specifies the maximum number of results to return. You can use <code>nextToken</code> to get the next page of results.</p>', ], ], 'NextToken' => [ 'base' => NULL, 'refs' => [ 'ListPipelinesRequest$NextToken' => '<p>If your initial <code>ListPipelines</code> operation returns a <code>nextToken</code>, you can include the returned <code>nextToken</code> in subsequent <code>ListPipelines</code> operations, which returns results in the next page.</p>', 'ListPipelinesResponse$NextToken' => '<p>When <code>nextToken</code> is returned, there are more results available. The value of <code>nextToken</code> is a unique pagination token for each page. Make the call again using the returned token to retrieve the next page.</p>', ], ], 'Pipeline' => [ 'base' => '<p>Information about an existing OpenSearch Ingestion pipeline.</p>', 'refs' => [ 'CreatePipelineResponse$Pipeline' => '<p>Container for information about the created pipeline.</p>', 'GetPipelineResponse$Pipeline' => '<p>Detailed information about the requested pipeline.</p>', 'StartPipelineResponse$Pipeline' => NULL, 'StopPipelineResponse$Pipeline' => NULL, 'UpdatePipelineResponse$Pipeline' => '<p>Container for information about the updated pipeline.</p>', ], ], 'PipelineArn' => [ 'base' => NULL, 'refs' => [ 'ListTagsForResourceRequest$Arn' => '<p>The Amazon Resource Name (ARN) of the pipeline to retrieve tags for.</p>', 'PipelineSummary$PipelineArn' => '<p>The Amazon Resource Name (ARN) of the pipeline.</p>', 'TagResourceRequest$Arn' => '<p>The Amazon Resource Name (ARN) of the pipeline to tag.</p>', 'UntagResourceRequest$Arn' => '<p>The Amazon Resource Name (ARN) of the pipeline to remove tags from.</p>', ], ], 'PipelineBlueprint' => [ 'base' => '<p>Container for information about an OpenSearch Ingestion blueprint.</p>', 'refs' => [ 'GetPipelineBlueprintResponse$Blueprint' => '<p>The requested blueprint in YAML format.</p>', ], ], 'PipelineBlueprintSummary' => [ 'base' => '<p>A summary of an OpenSearch Ingestion blueprint.</p>', 'refs' => [ 'PipelineBlueprintsSummaryList$member' => NULL, ], ], 'PipelineBlueprintsSummaryList' => [ 'base' => NULL, 'refs' => [ 'ListPipelineBlueprintsResponse$Blueprints' => '<p>A list of available blueprints for Data Prepper.</p>', ], ], 'PipelineConfigurationBody' => [ 'base' => NULL, 'refs' => [ 'CreatePipelineRequest$PipelineConfigurationBody' => '<p>The pipeline configuration in YAML format. The command accepts the pipeline configuration as a string or within a .yaml file. If you provide the configuration as a string, each new line must be escaped with <code>\\n</code>.</p>', 'UpdatePipelineRequest$PipelineConfigurationBody' => '<p>The pipeline configuration in YAML format. The command accepts the pipeline configuration as a string or within a .yaml file. If you provide the configuration as a string, each new line must be escaped with <code>\\n</code>.</p>', 'ValidatePipelineRequest$PipelineConfigurationBody' => '<p>The pipeline configuration in YAML format. The command accepts the pipeline configuration as a string or within a .yaml file. If you provide the configuration as a string, each new line must be escaped with <code>\\n</code>.</p>', ], ], 'PipelineName' => [ 'base' => NULL, 'refs' => [ 'CreatePipelineRequest$PipelineName' => '<p>The name of the OpenSearch Ingestion pipeline to create. Pipeline names are unique across the pipelines owned by an account within an Amazon Web Services Region.</p>', 'DeletePipelineRequest$PipelineName' => '<p>The name of the pipeline to delete.</p>', 'GetPipelineChangeProgressRequest$PipelineName' => '<p>The name of the pipeline.</p>', 'GetPipelineRequest$PipelineName' => '<p>The name of the pipeline to get information about.</p>', 'PipelineSummary$PipelineName' => '<p>The name of the pipeline.</p>', 'StartPipelineRequest$PipelineName' => '<p>The name of the pipeline to start.</p>', 'StopPipelineRequest$PipelineName' => '<p>The name of the pipeline to stop.</p>', 'UpdatePipelineRequest$PipelineName' => '<p>The name of the pipeline to update.</p>', ], ], 'PipelineStatus' => [ 'base' => NULL, 'refs' => [ 'Pipeline$Status' => '<p>The current status of the pipeline.</p>', 'PipelineSummary$Status' => '<p>The current status of the pipeline.</p>', ], ], 'PipelineStatusReason' => [ 'base' => '<p>Information about a pipeline\'s current status.</p>', 'refs' => [ 'Pipeline$StatusReason' => '<p>The reason for the current status of the pipeline.</p>', 'PipelineSummary$StatusReason' => NULL, ], ], 'PipelineSummary' => [ 'base' => '<p>Summary information for an OpenSearch Ingestion pipeline.</p>', 'refs' => [ 'PipelineSummaryList$member' => NULL, ], ], 'PipelineSummaryList' => [ 'base' => NULL, 'refs' => [ 'ListPipelinesResponse$Pipelines' => '<p>A list of all existing Data Prepper pipelines.</p>', ], ], 'PipelineUnits' => [ 'base' => NULL, 'refs' => [ 'CreatePipelineRequest$MinUnits' => '<p>The minimum pipeline capacity, in Ingestion Compute Units (ICUs).</p>', 'CreatePipelineRequest$MaxUnits' => '<p>The maximum pipeline capacity, in Ingestion Compute Units (ICUs).</p>', 'PipelineSummary$MinUnits' => '<p>The minimum pipeline capacity, in Ingestion Compute Units (ICUs).</p>', 'PipelineSummary$MaxUnits' => '<p>The maximum pipeline capacity, in Ingestion Compute Units (ICUs).</p>', 'UpdatePipelineRequest$MinUnits' => '<p>The minimum pipeline capacity, in Ingestion Compute Units (ICUs).</p>', 'UpdatePipelineRequest$MaxUnits' => '<p>The maximum pipeline capacity, in Ingestion Compute Units (ICUs)</p>', ], ], 'ResourceAlreadyExistsException' => [ 'base' => '<p>You attempted to create a resource that already exists.</p>', 'refs' => [], ], 'ResourceNotFoundException' => [ 'base' => '<p>You attempted to access or delete a resource that does not exist.</p>', 'refs' => [], ], 'SecurityGroupId' => [ 'base' => NULL, 'refs' => [ 'SecurityGroupIds$member' => NULL, ], ], 'SecurityGroupIds' => [ 'base' => NULL, 'refs' => [ 'VpcOptions$SecurityGroupIds' => '<p>A list of security groups associated with the VPC endpoint.</p>', ], ], 'ServiceVpcEndpoint' => [ 'base' => '<p>A container for information about VPC endpoints that were created to other services</p>', 'refs' => [ 'ServiceVpcEndpointsList$member' => NULL, ], ], 'ServiceVpcEndpointsList' => [ 'base' => NULL, 'refs' => [ 'Pipeline$ServiceVpcEndpoints' => '<p>A list of VPC endpoints that OpenSearch Ingestion has created to other AWS services.</p>', ], ], 'StartPipelineRequest' => [ 'base' => NULL, 'refs' => [], ], 'StartPipelineResponse' => [ 'base' => NULL, 'refs' => [], ], 'StopPipelineRequest' => [ 'base' => NULL, 'refs' => [], ], 'StopPipelineResponse' => [ 'base' => NULL, 'refs' => [], ], 'String' => [ 'base' => NULL, 'refs' => [ 'ChangeProgressStage$Name' => '<p>The name of the stage.</p>', 'ChangeProgressStage$Description' => '<p>A description of the stage.</p>', 'GetPipelineBlueprintRequest$BlueprintName' => '<p>The name of the blueprint to retrieve.</p>', 'IngestEndpointUrlsList$member' => NULL, 'Pipeline$PipelineName' => '<p>The name of the pipeline.</p>', 'Pipeline$PipelineArn' => '<p>The Amazon Resource Name (ARN) of the pipeline.</p>', 'Pipeline$PipelineConfigurationBody' => '<p>The Data Prepper pipeline configuration in YAML format.</p>', 'PipelineBlueprint$BlueprintName' => '<p>The name of the blueprint.</p>', 'PipelineBlueprint$PipelineConfigurationBody' => '<p>The YAML configuration of the blueprint.</p>', 'PipelineBlueprintSummary$BlueprintName' => '<p>The name of the blueprint.</p>', 'PipelineStatusReason$Description' => '<p>A description of why a pipeline has a certain status.</p>', 'ServiceVpcEndpoint$VpcEndpointId' => '<p>The ID of the VPC endpoint that was created.</p>', 'StringList$member' => NULL, 'ValidationMessage$Message' => '<p>The validation message.</p>', 'VpcEndpoint$VpcEndpointId' => '<p>The unique identifier of the endpoint.</p>', 'VpcEndpoint$VpcId' => '<p>The ID for your VPC. Amazon Web Services PrivateLink generates this value when you create a VPC.</p>', ], ], 'StringList' => [ 'base' => NULL, 'refs' => [ 'UntagResourceRequest$TagKeys' => '<p>The tag keys to remove.</p>', ], ], 'SubnetId' => [ 'base' => NULL, 'refs' => [ 'SubnetIds$member' => NULL, ], ], 'SubnetIds' => [ 'base' => NULL, 'refs' => [ 'VpcOptions$SubnetIds' => '<p>A list of subnet IDs associated with the VPC endpoint.</p>', ], ], 'Tag' => [ 'base' => '<p>A tag (key-value pair) for an OpenSearch Ingestion pipeline.</p>', 'refs' => [ 'TagList$member' => NULL, ], ], 'TagKey' => [ 'base' => NULL, 'refs' => [ 'Tag$Key' => '<p>The tag key. Tag keys must be unique for the pipeline to which they are attached.</p>', ], ], 'TagList' => [ 'base' => NULL, 'refs' => [ 'CreatePipelineRequest$Tags' => '<p>List of tags to add to the pipeline upon creation.</p>', 'ListTagsForResourceResponse$Tags' => '<p>A list of tags associated with the given pipeline.</p>', 'Pipeline$Tags' => '<p>A list of tags associated with the given pipeline.</p>', 'PipelineSummary$Tags' => '<p>A list of tags associated with the given pipeline.</p>', 'TagResourceRequest$Tags' => '<p>The list of key-value tags to add to the pipeline.</p>', ], ], 'TagResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'TagResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'TagValue' => [ 'base' => NULL, 'refs' => [ 'Tag$Value' => '<p>The value assigned to the corresponding tag key. Tag values can be null and don\'t have to be unique in a tag set. For example, you can have a key value pair in a tag set of <code>project : Trinity</code> and <code>cost-center : Trinity</code> </p>', ], ], 'Timestamp' => [ 'base' => NULL, 'refs' => [ 'ChangeProgressStage$LastUpdatedAt' => '<p>The most recent updated timestamp of the stage.</p>', 'ChangeProgressStatus$StartTime' => '<p>The time at which the configuration change is made on the pipeline.</p>', 'Pipeline$CreatedAt' => '<p>The date and time when the pipeline was created.</p>', 'Pipeline$LastUpdatedAt' => '<p>The date and time when the pipeline was last updated.</p>', 'PipelineSummary$CreatedAt' => '<p>The date and time when the pipeline was created.</p>', 'PipelineSummary$LastUpdatedAt' => '<p>The date and time when the pipeline was last updated.</p>', ], ], 'UntagResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'UntagResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'UpdatePipelineRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdatePipelineResponse' => [ 'base' => NULL, 'refs' => [], ], 'ValidatePipelineRequest' => [ 'base' => NULL, 'refs' => [], ], 'ValidatePipelineResponse' => [ 'base' => NULL, 'refs' => [], ], 'ValidationException' => [ 'base' => '<p>An exception for missing or invalid input fields.</p>', 'refs' => [], ], 'ValidationMessage' => [ 'base' => '<p>A validation message associated with a <code>ValidatePipeline</code> request in OpenSearch Ingestion.</p>', 'refs' => [ 'ValidationMessageList$member' => NULL, ], ], 'ValidationMessageList' => [ 'base' => NULL, 'refs' => [ 'ValidatePipelineResponse$Errors' => '<p>A list of errors if the configuration is invalid.</p>', ], ], 'VpcEndpoint' => [ 'base' => '<p>An OpenSearch Ingestion-managed VPC endpoint that will access one or more pipelines.</p>', 'refs' => [ 'VpcEndpointsList$member' => NULL, ], ], 'VpcEndpointServiceName' => [ 'base' => NULL, 'refs' => [ 'ServiceVpcEndpoint$ServiceName' => '<p>The name of the service for which a VPC endpoint was created.</p>', ], ], 'VpcEndpointsList' => [ 'base' => NULL, 'refs' => [ 'Pipeline$VpcEndpoints' => '<p>The VPC interface endpoints that have access to the pipeline.</p>', ], ], 'VpcOptions' => [ 'base' => '<p>Options that specify the subnets and security groups for an OpenSearch Ingestion VPC endpoint.</p>', 'refs' => [ 'CreatePipelineRequest$VpcOptions' => '<p>Container for the values required to configure VPC access for the pipeline. If you don\'t specify these values, OpenSearch Ingestion creates the pipeline with a public endpoint.</p>', 'VpcEndpoint$VpcOptions' => '<p>Information about the VPC, including associated subnets and security groups.</p>', ], ], ],];
