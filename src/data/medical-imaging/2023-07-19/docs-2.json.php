<?php
// This file was auto-generated from sdk-root/src/data/medical-imaging/2023-07-19/docs-2.json
return [ 'version' => '2.0', 'service' => '<p>This is the <i>AWS HealthImaging API Reference</i>. AWS HealthImaging is an AWS service for storing, accessing, and analyzing medical images. For an introduction to the service, see the <a href="https://docs.aws.amazon.com/medical-imaging/latest/devguide"> <i>AWS HealthImaging Developer Guide</i> </a>.</p> <note> <p>We recommend using one of the AWS Software Development Kits (SDKs) for your programming language, as they take care of request authentication, serialization, and connection management. For more information, see <a href="http://aws.amazon.com/developer/tools">Tools to build on AWS</a>.</p> <p>For information about using AWS HealthImaging API actions in one of the language-specific AWS SDKs, refer to the <i>See Also</i> link at the end of each section that describes an API action or data type.</p> </note> <p>The following sections list AWS HealthImaging API actions categorized according to functionality. Links are provided to actions within this Reference, along with links back to corresponding sections in the <i>AWS HealthImaging Developer Guide</i> so you can view console procedures and CLI/SDK code examples.</p> <p class="title"> <b>Data store actions</b> </p> <ul> <li> <p> <a href="https://docs.aws.amazon.com/medical-imaging/latest/APIReference/API_CreateDatastore.html">CreateDatastore</a> – See <a href="https://docs.aws.amazon.com/medical-imaging/latest/devguide/create-data-store.html">Creating a data store</a>.</p> </li> <li> <p> <a href="https://docs.aws.amazon.com/medical-imaging/latest/APIReference/API_GetDatastore.html">GetDatastore</a> – See <a href="https://docs.aws.amazon.com/medical-imaging/latest/devguide/get-data-store.html">Getting data store properties</a>.</p> </li> <li> <p> <a href="https://docs.aws.amazon.com/medical-imaging/latest/APIReference/API_ListDatastores.html">ListDatastores</a> – See <a href="https://docs.aws.amazon.com/medical-imaging/latest/devguide/list-data-stores.html">Listing data stores</a>.</p> </li> <li> <p> <a href="https://docs.aws.amazon.com/medical-imaging/latest/APIReference/API_DeleteDatastore.html">DeleteDatastore</a> – See <a href="https://docs.aws.amazon.com/medical-imaging/latest/devguide/delete-data-store.html">Deleting a data store</a>.</p> </li> </ul> <p class="title"> <b>Import job actions</b> </p> <ul> <li> <p> <a href="https://docs.aws.amazon.com/medical-imaging/latest/APIReference/API_StartDICOMImportJob.html">StartDICOMImportJob</a> – See <a href="https://docs.aws.amazon.com/medical-imaging/latest/devguide/start-dicom-import-job.html">Starting an import job</a>.</p> </li> <li> <p> <a href="https://docs.aws.amazon.com/medical-imaging/latest/APIReference/API_GetDICOMImportJob.html">GetDICOMImportJob</a> – See <a href="https://docs.aws.amazon.com/medical-imaging/latest/devguide/get-dicom-import-job.html">Getting import job properties</a>.</p> </li> <li> <p> <a href="https://docs.aws.amazon.com/medical-imaging/latest/APIReference/API_ListDICOMImportJobs.html">ListDICOMImportJobs</a> – See <a href="https://docs.aws.amazon.com/medical-imaging/latest/devguide/list-dicom-import-jobs.html">Listing import jobs</a>.</p> </li> </ul> <p class="title"> <b>Image set access actions</b> </p> <ul> <li> <p> <a href="https://docs.aws.amazon.com/medical-imaging/latest/APIReference/API_SearchImageSets.html">SearchImageSets</a> – See <a href="https://docs.aws.amazon.com/medical-imaging/latest/devguide/search-image-sets.html">Searching image sets</a>.</p> </li> <li> <p> <a href="https://docs.aws.amazon.com/medical-imaging/latest/APIReference/API_GetImageSet.html">GetImageSet</a> – See <a href="https://docs.aws.amazon.com/medical-imaging/latest/devguide/get-image-set-properties.html">Getting image set properties</a>.</p> </li> <li> <p> <a href="https://docs.aws.amazon.com/medical-imaging/latest/APIReference/API_GetImageSetMetadata.html">GetImageSetMetadata</a> – See <a href="https://docs.aws.amazon.com/medical-imaging/latest/devguide/get-image-set-metadata.html">Getting image set metadata</a>.</p> </li> <li> <p> <a href="https://docs.aws.amazon.com/medical-imaging/latest/APIReference/API_GetImageFrame.html">GetImageFrame</a> – See <a href="https://docs.aws.amazon.com/medical-imaging/latest/devguide/get-image-frame.html">Getting image set pixel data</a>.</p> </li> </ul> <p class="title"> <b>Image set modification actions</b> </p> <ul> <li> <p> <a href="https://docs.aws.amazon.com/medical-imaging/latest/APIReference/API_ListImageSetVersions.html">ListImageSetVersions</a> – See <a href="https://docs.aws.amazon.com/medical-imaging/latest/devguide/list-image-set-versions.html">Listing image set versions</a>.</p> </li> <li> <p> <a href="https://docs.aws.amazon.com/medical-imaging/latest/APIReference/API_UpdateImageSetMetadata.html">UpdateImageSetMetadata</a> – See <a href="https://docs.aws.amazon.com/medical-imaging/latest/devguide/update-image-set-metadata.html">Updating image set metadata</a>.</p> </li> <li> <p> <a href="https://docs.aws.amazon.com/medical-imaging/latest/APIReference/API_CopyImageSet.html">CopyImageSet</a> – See <a href="https://docs.aws.amazon.com/medical-imaging/latest/devguide/copy-image-set.html">Copying an image set</a>.</p> </li> <li> <p> <a href="https://docs.aws.amazon.com/medical-imaging/latest/APIReference/API_DeleteImageSet.html">DeleteImageSet</a> – See <a href="https://docs.aws.amazon.com/medical-imaging/latest/devguide/delete-image-set.html">Deleting an image set</a>.</p> </li> </ul> <p class="title"> <b>Tagging actions</b> </p> <ul> <li> <p> <a href="https://docs.aws.amazon.com/medical-imaging/latest/APIReference/API_TagResource.html">TagResource</a> – See <a href="https://docs.aws.amazon.com/medical-imaging/latest/devguide/tag-list-untag-data-store.html">Tagging a data store</a> and <a href="https://docs.aws.amazon.com/medical-imaging/latest/devguide/tag-list-untag-image-set.html">Tagging an image set</a>.</p> </li> <li> <p> <a href="https://docs.aws.amazon.com/medical-imaging/latest/APIReference/API_ListTagsForResource.html">ListTagsForResource</a> – See <a href="https://docs.aws.amazon.com/medical-imaging/latest/devguide/tag-list-untag-data-store.html">Tagging a data store</a> and <a href="https://docs.aws.amazon.com/medical-imaging/latest/devguide/tag-list-untag-image-set.html">Tagging an image set</a>.</p> </li> <li> <p> <a href="https://docs.aws.amazon.com/medical-imaging/latest/APIReference/API_UntagResource.html">UntagResource</a> – See <a href="https://docs.aws.amazon.com/medical-imaging/latest/devguide/tag-list-untag-data-store.html">Tagging a data store</a> and <a href="https://docs.aws.amazon.com/medical-imaging/latest/devguide/tag-list-untag-image-set.html">Tagging an image set</a>.</p> </li> </ul>', 'operations' => [ 'CopyImageSet' => '<p>Copy an image set.</p>', 'CreateDatastore' => '<p>Create a data store.</p>', 'DeleteDatastore' => '<p>Delete a data store.</p> <note> <p>Before a data store can be deleted, you must first delete all image sets within it.</p> </note>', 'DeleteImageSet' => '<p>Delete an image set.</p>', 'GetDICOMImportJob' => '<p>Get the import job properties to learn more about the job or job progress.</p>', 'GetDatastore' => '<p>Get data store properties.</p>', 'GetImageFrame' => '<p>Get an image frame (pixel data) for an image set.</p>', 'GetImageSet' => '<p>Get image set properties.</p>', 'GetImageSetMetadata' => '<p>Get metadata attributes for an image set.</p>', 'ListDICOMImportJobs' => '<p>List import jobs created by this AWS account for a specific data store.</p>', 'ListDatastores' => '<p>List data stores created by this AWS account.</p>', 'ListImageSetVersions' => '<p>List image set versions.</p>', 'ListTagsForResource' => '<p>Lists all tags associated with a medical imaging resource.</p>', 'SearchImageSets' => '<p>Search image sets based on defined input attributes.</p>', 'StartDICOMImportJob' => '<p>Start importing bulk data into an <code>ACTIVE</code> data store. The import job imports DICOM P10 files found in the S3 prefix specified by the <code>inputS3Uri</code> parameter. The import job stores processing results in the file specified by the <code>outputS3Uri</code> parameter.</p>', 'TagResource' => '<p>Adds a user-specifed key and value tag to a medical imaging resource.</p>', 'UntagResource' => '<p>Removes tags from a medical imaging resource.</p>', 'UpdateImageSetMetadata' => '<p>Update image set metadata attributes.</p>', ], 'shapes' => [ 'AccessDeniedException' => [ 'base' => '<p>The user does not have sufficient access to perform this action.</p>', 'refs' => [], ], 'Arn' => [ 'base' => NULL, 'refs' => [ 'CopyDestinationImageSetProperties$imageSetArn' => '<p>The Amazon Resource Name (ARN) assigned to the destination image set.</p>', 'CopySourceImageSetProperties$imageSetArn' => '<p>The Amazon Resource Name (ARN) assigned to the source image set.</p>', 'DatastoreProperties$datastoreArn' => '<p>The Amazon Resource Name (ARN) for the data store.</p>', 'DatastoreSummary$datastoreArn' => '<p>The Amazon Resource Name (ARN) for the data store.</p>', 'GetImageSetResponse$imageSetArn' => '<p>The Amazon Resource Name (ARN) assigned to the image set.</p>', 'ListTagsForResourceRequest$resourceArn' => '<p>The Amazon Resource Name (ARN) of the medical imaging resource to list tags for.</p>', 'TagResourceRequest$resourceArn' => '<p>The Amazon Resource Name (ARN) of the medical imaging resource that tags are being added to.</p>', 'UntagResourceRequest$resourceArn' => '<p>The Amazon Resource Name (ARN) of the medical imaging resource that tags are being removed from.</p>', ], ], 'ClientToken' => [ 'base' => NULL, 'refs' => [ 'CreateDatastoreRequest$clientToken' => '<p>A unique identifier for API idempotency.</p>', 'StartDICOMImportJobRequest$clientToken' => '<p>A unique identifier for API idempotency.</p>', ], ], 'ConflictException' => [ 'base' => '<p>Updating or deleting a resource can cause an inconsistent state.</p>', 'refs' => [], ], 'CopyDestinationImageSet' => [ 'base' => '<p>Copy the destination image set.</p>', 'refs' => [ 'CopyImageSetInformation$destinationImageSet' => '<p>The destination image set.</p>', ], ], 'CopyDestinationImageSetProperties' => [ 'base' => '<p>Copy the image set properties of the destination image set.</p>', 'refs' => [ 'CopyImageSetResponse$destinationImageSetProperties' => '<p>The properties of the destination image set.</p>', ], ], 'CopyImageSetInformation' => [ 'base' => '<p>Copy image set information.</p>', 'refs' => [ 'CopyImageSetRequest$copyImageSetInformation' => '<p>Copy image set information.</p>', ], ], 'CopyImageSetRequest' => [ 'base' => NULL, 'refs' => [], ], 'CopyImageSetResponse' => [ 'base' => NULL, 'refs' => [], ], 'CopySourceImageSetInformation' => [ 'base' => '<p>Copy source image set information.</p>', 'refs' => [ 'CopyImageSetInformation$sourceImageSet' => '<p>The source image set.</p>', ], ], 'CopySourceImageSetProperties' => [ 'base' => '<p>Copy source image set properties.</p>', 'refs' => [ 'CopyImageSetResponse$sourceImageSetProperties' => '<p>The properties of the source image set.</p>', ], ], 'CreateDatastoreRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateDatastoreResponse' => [ 'base' => NULL, 'refs' => [], ], 'DICOMAccessionNumber' => [ 'base' => NULL, 'refs' => [ 'DICOMTags$DICOMAccessionNumber' => '<p>The accession number for the DICOM study.</p>', 'SearchByAttributeValue$DICOMAccessionNumber' => '<p>The DICOM accession number for search.</p>', ], ], 'DICOMAttribute' => [ 'base' => NULL, 'refs' => [ 'DICOMUpdates$removableAttributes' => '<p>The DICOM tags to be removed from <code>ImageSetMetadata</code>.</p>', 'DICOMUpdates$updatableAttributes' => '<p>The DICOM tags that need to be updated in <code>ImageSetMetadata</code>.</p>', ], ], 'DICOMImportJobProperties' => [ 'base' => '<p>Properties of the import job.</p>', 'refs' => [ 'GetDICOMImportJobResponse$jobProperties' => '<p>The properties of the import job.</p>', ], ], 'DICOMImportJobSummaries' => [ 'base' => NULL, 'refs' => [ 'ListDICOMImportJobsResponse$jobSummaries' => '<p>A list of job summaries.</p>', ], ], 'DICOMImportJobSummary' => [ 'base' => '<p>Summary of import job.</p>', 'refs' => [ 'DICOMImportJobSummaries$member' => NULL, ], ], 'DICOMNumberOfStudyRelatedInstances' => [ 'base' => NULL, 'refs' => [ 'DICOMTags$DICOMNumberOfStudyRelatedInstances' => '<p>The total number of instances in the DICOM study.</p>', ], ], 'DICOMNumberOfStudyRelatedSeries' => [ 'base' => NULL, 'refs' => [ 'DICOMTags$DICOMNumberOfStudyRelatedSeries' => '<p>The total number of series in the DICOM study.</p>', ], ], 'DICOMPatientBirthDate' => [ 'base' => NULL, 'refs' => [ 'DICOMTags$DICOMPatientBirthDate' => '<p>The patient birth date.</p>', ], ], 'DICOMPatientId' => [ 'base' => NULL, 'refs' => [ 'DICOMTags$DICOMPatientId' => '<p>The unique identifier for a patient in a DICOM Study.</p>', 'SearchByAttributeValue$DICOMPatientId' => '<p>The patient ID input for search.</p>', ], ], 'DICOMPatientName' => [ 'base' => NULL, 'refs' => [ 'DICOMTags$DICOMPatientName' => '<p>The patient name.</p>', ], ], 'DICOMPatientSex' => [ 'base' => NULL, 'refs' => [ 'DICOMTags$DICOMPatientSex' => '<p>The patient sex.</p>', ], ], 'DICOMStudyDate' => [ 'base' => NULL, 'refs' => [ 'DICOMStudyDateAndTime$DICOMStudyDate' => '<p>The DICOM study date provided in <code>yyMMdd</code> format.</p>', 'DICOMTags$DICOMStudyDate' => '<p>The study date.</p>', ], ], 'DICOMStudyDateAndTime' => [ 'base' => '<p>The aggregated structure to store DICOM study date and study time for search capabilities.</p>', 'refs' => [ 'SearchByAttributeValue$DICOMStudyDateAndTime' => '<p>The aggregated structure containing DICOM study date and study time for search.</p>', ], ], 'DICOMStudyDescription' => [ 'base' => NULL, 'refs' => [ 'DICOMTags$DICOMStudyDescription' => '<p>The description of the study.</p>', ], ], 'DICOMStudyId' => [ 'base' => NULL, 'refs' => [ 'DICOMTags$DICOMStudyId' => '<p>The DICOM provided studyId.</p>', 'SearchByAttributeValue$DICOMStudyId' => '<p>The DICOM study ID for search.</p>', ], ], 'DICOMStudyInstanceUID' => [ 'base' => NULL, 'refs' => [ 'DICOMTags$DICOMStudyInstanceUID' => '<p>The DICOM provided identifier for studyInstanceUid.&gt;</p>', 'SearchByAttributeValue$DICOMStudyInstanceUID' => '<p>The DICOM study instance UID for search.</p>', ], ], 'DICOMStudyTime' => [ 'base' => NULL, 'refs' => [ 'DICOMStudyDateAndTime$DICOMStudyTime' => '<p>The DICOM study time provided in <code>HHmmss.FFFFFF</code> format.</p>', 'DICOMTags$DICOMStudyTime' => '<p>The study time.</p>', ], ], 'DICOMTags' => [ 'base' => '<p>The DICOM attributes returned as a part of a response. Each image set has these properties as part of a search result.</p>', 'refs' => [ 'ImageSetsMetadataSummary$DICOMTags' => '<p>The DICOM tags associated with the image set.</p>', ], ], 'DICOMUpdates' => [ 'base' => '<p>The object containing <code>removableAttributes</code> and <code>updatableAttributes</code>.</p>', 'refs' => [ 'MetadataUpdates$DICOMUpdates' => '<p>The object containing <code>removableAttributes</code> and <code>updatableAttributes</code>.</p>', ], ], 'DatastoreId' => [ 'base' => NULL, 'refs' => [ 'CopyImageSetRequest$datastoreId' => '<p>The data store identifier.</p>', 'CopyImageSetResponse$datastoreId' => '<p>The data store identifier.</p>', 'CreateDatastoreResponse$datastoreId' => '<p>The data store identifier.</p>', 'DICOMImportJobProperties$datastoreId' => '<p>The data store identifier.</p>', 'DICOMImportJobSummary$datastoreId' => '<p>The data store identifier.</p>', 'DatastoreProperties$datastoreId' => '<p>The data store identifier.</p>', 'DatastoreSummary$datastoreId' => '<p>The data store identifier.</p>', 'DeleteDatastoreRequest$datastoreId' => '<p>The data store identifier.</p>', 'DeleteDatastoreResponse$datastoreId' => '<p>The data store identifier.</p>', 'DeleteImageSetRequest$datastoreId' => '<p>The data store identifier.</p>', 'DeleteImageSetResponse$datastoreId' => '<p>The data store identifier.</p>', 'GetDICOMImportJobRequest$datastoreId' => '<p>The data store identifier.</p>', 'GetDatastoreRequest$datastoreId' => '<p>The data store identifier.</p>', 'GetImageFrameRequest$datastoreId' => '<p>The data store identifier.</p>', 'GetImageSetMetadataRequest$datastoreId' => '<p>The data store identifier.</p>', 'GetImageSetRequest$datastoreId' => '<p>The data store identifier.</p>', 'GetImageSetResponse$datastoreId' => '<p>The data store identifier.</p>', 'ListDICOMImportJobsRequest$datastoreId' => '<p>The data store identifier.</p>', 'ListImageSetVersionsRequest$datastoreId' => '<p>The data store identifier.</p>', 'SearchImageSetsRequest$datastoreId' => '<p>The identifier of the data store where the image sets reside.</p>', 'StartDICOMImportJobRequest$datastoreId' => '<p>The data store identifier.</p>', 'StartDICOMImportJobResponse$datastoreId' => '<p>The data store identifier.</p>', 'UpdateImageSetMetadataRequest$datastoreId' => '<p>The data store identifier.</p>', 'UpdateImageSetMetadataResponse$datastoreId' => '<p>The data store identifier.</p>', ], ], 'DatastoreName' => [ 'base' => NULL, 'refs' => [ 'CreateDatastoreRequest$datastoreName' => '<p>The data store name.</p>', 'DatastoreProperties$datastoreName' => '<p>The data store name.</p>', 'DatastoreSummary$datastoreName' => '<p>The data store name.</p>', ], ], 'DatastoreProperties' => [ 'base' => '<p>The properties associated with the data store.</p>', 'refs' => [ 'GetDatastoreResponse$datastoreProperties' => '<p>The data store properties.</p>', ], ], 'DatastoreStatus' => [ 'base' => NULL, 'refs' => [ 'CreateDatastoreResponse$datastoreStatus' => '<p>The data store status.</p>', 'DatastoreProperties$datastoreStatus' => '<p>The data store status.</p>', 'DatastoreSummary$datastoreStatus' => '<p>The data store status.</p>', 'DeleteDatastoreResponse$datastoreStatus' => '<p>The data store status.</p>', 'ListDatastoresRequest$datastoreStatus' => '<p>The data store status.</p>', ], ], 'DatastoreSummaries' => [ 'base' => NULL, 'refs' => [ 'ListDatastoresResponse$datastoreSummaries' => '<p>The list of summaries of data stores.</p>', ], ], 'DatastoreSummary' => [ 'base' => '<p>List of summaries of data stores.</p>', 'refs' => [ 'DatastoreSummaries$member' => NULL, ], ], 'Date' => [ 'base' => NULL, 'refs' => [ 'CopyDestinationImageSetProperties$createdAt' => '<p>The timestamp when the destination image set properties were created.</p>', 'CopyDestinationImageSetProperties$updatedAt' => '<p>The timestamp when the destination image set properties were last updated.</p>', 'CopySourceImageSetProperties$createdAt' => '<p>The timestamp when the source image set properties were created.</p>', 'CopySourceImageSetProperties$updatedAt' => '<p>The timestamp when the source image set properties were updated.</p>', 'DICOMImportJobProperties$endedAt' => '<p>The timestamp for when the import job was ended.</p>', 'DICOMImportJobProperties$submittedAt' => '<p>The timestamp for when the import job was submitted.</p>', 'DICOMImportJobSummary$endedAt' => '<p>The timestamp when an import job ended.</p>', 'DICOMImportJobSummary$submittedAt' => '<p>The timestamp when an import job was submitted.</p>', 'DatastoreProperties$createdAt' => '<p>The timestamp when the data store was created.</p>', 'DatastoreProperties$updatedAt' => '<p>The timestamp when the data store was last updated.</p>', 'DatastoreSummary$createdAt' => '<p>The timestamp when the data store was created.</p>', 'DatastoreSummary$updatedAt' => '<p>The timestamp when the data store was last updated.</p>', 'GetImageSetResponse$createdAt' => '<p>The timestamp when image set properties were created.</p>', 'GetImageSetResponse$updatedAt' => '<p>The timestamp when image set properties were updated.</p>', 'GetImageSetResponse$deletedAt' => '<p>The timestamp when the image set properties were deleted.</p>', 'ImageSetProperties$createdAt' => '<p>The timestamp when the image set properties were created.</p>', 'ImageSetProperties$updatedAt' => '<p>The timestamp when the image set properties were updated.</p>', 'ImageSetProperties$deletedAt' => '<p>The timestamp when the image set properties were deleted.</p>', 'ImageSetsMetadataSummary$createdAt' => '<p>The time an image set is created in AWS HealthImaging. Sample creation date is provided in <code>1985-04-12T23:20:50.52Z</code> format.</p>', 'ImageSetsMetadataSummary$updatedAt' => '<p>The time when an image was last updated in AWS HealthImaging.</p>', 'SearchByAttributeValue$createdAt' => '<p>The created at time of the image set provided for search.</p>', 'StartDICOMImportJobResponse$submittedAt' => '<p>The timestamp when the import job was submitted.</p>', 'UpdateImageSetMetadataResponse$createdAt' => '<p>The timestamp when image set metadata was created.</p>', 'UpdateImageSetMetadataResponse$updatedAt' => '<p>The timestamp when image set metadata was updated.</p>', ], ], 'DeleteDatastoreRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteDatastoreResponse' => [ 'base' => NULL, 'refs' => [], ], 'DeleteImageSetRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteImageSetResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetDICOMImportJobRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetDICOMImportJobResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetDatastoreRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetDatastoreResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetImageFrameRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetImageFrameResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetImageSetMetadataRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetImageSetMetadataResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetImageSetRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetImageSetResponse' => [ 'base' => NULL, 'refs' => [], ], 'ImageFrameId' => [ 'base' => NULL, 'refs' => [ 'ImageFrameInformation$imageFrameId' => '<p>The image frame (pixel data) identifier.</p>', ], ], 'ImageFrameInformation' => [ 'base' => '<p>Information about the image frame (pixel data) identifier.</p>', 'refs' => [ 'GetImageFrameRequest$imageFrameInformation' => '<p>Information about the image frame (pixel data) identifier.</p>', ], ], 'ImageSetExternalVersionId' => [ 'base' => NULL, 'refs' => [ 'CopyDestinationImageSet$latestVersionId' => '<p>The latest version identifier for the destination image set.</p>', 'CopyDestinationImageSetProperties$latestVersionId' => '<p>The latest version identifier for the destination image set properties.</p>', 'CopySourceImageSetInformation$latestVersionId' => '<p>The latest version identifier for the source image set.</p>', 'CopySourceImageSetProperties$latestVersionId' => '<p>The latest version identifier for the copied source image set.</p>', 'GetImageSetMetadataRequest$versionId' => '<p>The image set version identifier.</p>', 'GetImageSetRequest$versionId' => '<p>The image set version identifier.</p>', 'GetImageSetResponse$versionId' => '<p>The image set version identifier.</p>', 'ImageSetProperties$versionId' => '<p>The image set version identifier.</p>', 'UpdateImageSetMetadataRequest$latestVersionId' => '<p>The latest image set version identifier.</p>', 'UpdateImageSetMetadataResponse$latestVersionId' => '<p>The latest image set version identifier.</p>', ], ], 'ImageSetId' => [ 'base' => NULL, 'refs' => [ 'CopyDestinationImageSet$imageSetId' => '<p>The image set identifier for the destination image set.</p>', 'CopyDestinationImageSetProperties$imageSetId' => '<p>The image set identifier of the copied image set properties.</p>', 'CopyImageSetRequest$sourceImageSetId' => '<p>The source image set identifier.</p>', 'CopySourceImageSetProperties$imageSetId' => '<p>The image set identifier for the copied source image set.</p>', 'DeleteImageSetRequest$imageSetId' => '<p>The image set identifier.</p>', 'DeleteImageSetResponse$imageSetId' => '<p>The image set identifier.</p>', 'GetImageFrameRequest$imageSetId' => '<p>The image set identifier.</p>', 'GetImageSetMetadataRequest$imageSetId' => '<p>The image set identifier.</p>', 'GetImageSetRequest$imageSetId' => '<p>The image set identifier.</p>', 'GetImageSetResponse$imageSetId' => '<p>The image set identifier.</p>', 'ImageSetProperties$imageSetId' => '<p>The image set identifier.</p>', 'ImageSetsMetadataSummary$imageSetId' => '<p>The image set identifier.</p>', 'ListImageSetVersionsRequest$imageSetId' => '<p>The image set identifier.</p>', 'UpdateImageSetMetadataRequest$imageSetId' => '<p>The image set identifier.</p>', 'UpdateImageSetMetadataResponse$imageSetId' => '<p>The image set identifier.</p>', ], ], 'ImageSetMetadataBlob' => [ 'base' => NULL, 'refs' => [ 'GetImageSetMetadataResponse$imageSetMetadataBlob' => '<p>The blob containing the aggregated metadata information for the image set.</p>', ], ], 'ImageSetProperties' => [ 'base' => '<p>The image set properties.</p>', 'refs' => [ 'ImageSetPropertiesList$member' => NULL, ], ], 'ImageSetPropertiesList' => [ 'base' => NULL, 'refs' => [ 'ListImageSetVersionsResponse$imageSetPropertiesList' => '<p>Lists all properties associated with an image set.</p>', ], ], 'ImageSetState' => [ 'base' => NULL, 'refs' => [ 'CopyDestinationImageSetProperties$imageSetState' => '<p>The image set state of the destination image set properties.</p>', 'CopySourceImageSetProperties$imageSetState' => '<p>The image set state of the copied source image set.</p>', 'DeleteImageSetResponse$imageSetState' => '<p>The image set state.</p>', 'GetImageSetResponse$imageSetState' => '<p>The image set state.</p>', 'ImageSetProperties$imageSetState' => '<p>The image set state.</p>', 'UpdateImageSetMetadataResponse$imageSetState' => '<p>The image set state.</p>', ], ], 'ImageSetWorkflowStatus' => [ 'base' => NULL, 'refs' => [ 'CopyDestinationImageSetProperties$imageSetWorkflowStatus' => '<p>The image set workflow status of the destination image set properties.</p>', 'CopySourceImageSetProperties$imageSetWorkflowStatus' => '<p>The workflow status of the copied source image set.</p>', 'DeleteImageSetResponse$imageSetWorkflowStatus' => '<p>The image set workflow status.</p>', 'GetImageSetResponse$imageSetWorkflowStatus' => '<p>The image set workflow status.</p>', 'ImageSetProperties$ImageSetWorkflowStatus' => '<p>The image set workflow status.</p>', 'UpdateImageSetMetadataResponse$imageSetWorkflowStatus' => '<p>The image set workflow status.</p>', ], ], 'ImageSetsMetadataSummaries' => [ 'base' => NULL, 'refs' => [ 'SearchImageSetsResponse$imageSetsMetadataSummaries' => '<p>The model containing the image set results.</p>', ], ], 'ImageSetsMetadataSummary' => [ 'base' => '<p>Summary of the image set metadata.</p>', 'refs' => [ 'ImageSetsMetadataSummaries$member' => NULL, ], ], 'Integer' => [ 'base' => NULL, 'refs' => [ 'ImageSetsMetadataSummary$version' => '<p>The image set version.</p>', ], ], 'InternalServerException' => [ 'base' => '<p>An unexpected error occurred during processing of the request.</p>', 'refs' => [], ], 'JobId' => [ 'base' => NULL, 'refs' => [ 'DICOMImportJobProperties$jobId' => '<p>The import job identifier.</p>', 'DICOMImportJobSummary$jobId' => '<p>The import job identifier.</p>', 'GetDICOMImportJobRequest$jobId' => '<p>The import job identifier.</p>', 'StartDICOMImportJobResponse$jobId' => '<p>The import job identifier.</p>', ], ], 'JobName' => [ 'base' => NULL, 'refs' => [ 'DICOMImportJobProperties$jobName' => '<p>The import job name.</p>', 'DICOMImportJobSummary$jobName' => '<p>The import job name.</p>', 'StartDICOMImportJobRequest$jobName' => '<p>The import job name.</p>', ], ], 'JobStatus' => [ 'base' => NULL, 'refs' => [ 'DICOMImportJobProperties$jobStatus' => '<p>The filters for listing import jobs based on status.</p>', 'DICOMImportJobSummary$jobStatus' => '<p>The filters for listing import jobs based on status.</p>', 'ListDICOMImportJobsRequest$jobStatus' => '<p>The filters for listing import jobs based on status.</p>', 'StartDICOMImportJobResponse$jobStatus' => '<p>The import job status.</p>', ], ], 'KmsKeyArn' => [ 'base' => '<p>ARN referencing a KMS key or KMS key alias.</p>', 'refs' => [ 'CreateDatastoreRequest$kmsKeyArn' => '<p>The Amazon Resource Name (ARN) assigned to the AWS Key Management Service (AWS KMS) key for accessing encrypted data.</p>', 'DatastoreProperties$kmsKeyArn' => '<p>The Amazon Resource Name (ARN) assigned to the AWS Key Management Service (AWS KMS) key for accessing encrypted data.</p>', ], ], 'ListDICOMImportJobsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListDICOMImportJobsRequestMaxResultsInteger' => [ 'base' => NULL, 'refs' => [ 'ListDICOMImportJobsRequest$maxResults' => '<p>The max results count. The upper bound is determined by load testing.</p>', ], ], 'ListDICOMImportJobsResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListDatastoresRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListDatastoresRequestMaxResultsInteger' => [ 'base' => NULL, 'refs' => [ 'ListDatastoresRequest$maxResults' => '<p>Valid Range: Minimum value of 1. Maximum value of 50.</p>', ], ], 'ListDatastoresResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListImageSetVersionsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListImageSetVersionsRequestMaxResultsInteger' => [ 'base' => NULL, 'refs' => [ 'ListImageSetVersionsRequest$maxResults' => '<p>The max results count.</p>', ], ], 'ListImageSetVersionsResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'Message' => [ 'base' => NULL, 'refs' => [ 'DICOMImportJobProperties$message' => '<p>The error message thrown if an import job fails.</p>', 'DICOMImportJobSummary$message' => '<p>The error message thrown if an import job fails.</p>', 'GetImageSetResponse$message' => '<p>The error message thrown if an image set action fails.</p>', 'ImageSetProperties$message' => '<p>The error message thrown if an image set action fails.</p>', 'UpdateImageSetMetadataResponse$message' => '<p>The error message thrown if an update image set metadata action fails.</p>', ], ], 'MetadataUpdates' => [ 'base' => '<p>Contains DICOMUpdates.</p>', 'refs' => [ 'UpdateImageSetMetadataRequest$updateImageSetMetadataUpdates' => '<p>Update image set metadata updates.</p>', ], ], 'NextToken' => [ 'base' => NULL, 'refs' => [ 'ListDICOMImportJobsRequest$nextToken' => '<p>The pagination token used to request the list of import jobs on the next page.</p>', 'ListDICOMImportJobsResponse$nextToken' => '<p>The pagination token used to retrieve the list of import jobs on the next page.</p>', 'ListDatastoresRequest$nextToken' => '<p>The pagination token used to request the list of data stores on the next page.</p>', 'ListDatastoresResponse$nextToken' => '<p>The pagination token used to retrieve the list of data stores on the next page.</p>', 'ListImageSetVersionsRequest$nextToken' => '<p>The pagination token used to request the list of image set versions on the next page.</p>', 'ListImageSetVersionsResponse$nextToken' => '<p>The pagination token used to retrieve the list of image set versions on the next page.</p>', 'SearchImageSetsRequest$nextToken' => '<p>The token used for pagination of results returned in the response. Use the token returned from the previous request to continue results where the previous request ended.</p>', 'SearchImageSetsResponse$nextToken' => '<p>The token for pagination results.</p>', ], ], 'Operator' => [ 'base' => NULL, 'refs' => [ 'SearchFilter$operator' => '<p>The search filter operator for <code>imageSetDateTime</code>.</p>', ], ], 'PayloadBlob' => [ 'base' => NULL, 'refs' => [ 'GetImageFrameResponse$imageFrameBlob' => '<p>The blob containing the aggregated image frame information.</p>', ], ], 'ResourceNotFoundException' => [ 'base' => '<p>The request references a resource which does not exist.</p>', 'refs' => [], ], 'RoleArn' => [ 'base' => NULL, 'refs' => [ 'DICOMImportJobProperties$dataAccessRoleArn' => '<p>The Amazon Resource Name (ARN) that grants permissions to access medical imaging resources.</p>', 'DICOMImportJobSummary$dataAccessRoleArn' => '<p>The Amazon Resource Name (ARN) that grants permissions to access medical imaging resources.</p>', 'StartDICOMImportJobRequest$dataAccessRoleArn' => '<p>The Amazon Resource Name (ARN) of the IAM role that grants permission to access medical imaging resources.</p>', ], ], 'S3Uri' => [ 'base' => NULL, 'refs' => [ 'DICOMImportJobProperties$inputS3Uri' => '<p>The input prefix path for the S3 bucket that contains the DICOM P10 files to be imported.</p>', 'DICOMImportJobProperties$outputS3Uri' => '<p>The output prefix of the S3 bucket to upload the results of the DICOM import job.</p>', 'StartDICOMImportJobRequest$inputS3Uri' => '<p>The input prefix path for the S3 bucket that contains the DICOM files to be imported.</p>', 'StartDICOMImportJobRequest$outputS3Uri' => '<p>The output prefix of the S3 bucket to upload the results of the DICOM import job.</p>', ], ], 'SearchByAttributeValue' => [ 'base' => '<p>The search input attribute value.</p>', 'refs' => [ 'SearchFilterValuesList$member' => NULL, ], ], 'SearchCriteria' => [ 'base' => '<p>The search criteria.</p>', 'refs' => [ 'SearchImageSetsRequest$searchCriteria' => '<p>The search criteria that filters by applying a maximum of 1 item to <code>SearchByAttribute</code>.</p>', ], ], 'SearchCriteriaFiltersList' => [ 'base' => NULL, 'refs' => [ 'SearchCriteria$filters' => '<p>The filters for the search criteria.</p>', ], ], 'SearchFilter' => [ 'base' => '<p>The search filter.</p>', 'refs' => [ 'SearchCriteriaFiltersList$member' => NULL, ], ], 'SearchFilterValuesList' => [ 'base' => NULL, 'refs' => [ 'SearchFilter$values' => '<p>The search filter values.</p>', ], ], 'SearchImageSetsRequest' => [ 'base' => NULL, 'refs' => [], ], 'SearchImageSetsRequestMaxResultsInteger' => [ 'base' => NULL, 'refs' => [ 'SearchImageSetsRequest$maxResults' => '<p>The maximum number of results that can be returned in a search.</p>', ], ], 'SearchImageSetsResponse' => [ 'base' => NULL, 'refs' => [], ], 'ServiceQuotaExceededException' => [ 'base' => '<p>The request caused a service quota to be exceeded.</p>', 'refs' => [], ], 'StartDICOMImportJobRequest' => [ 'base' => NULL, 'refs' => [], ], 'StartDICOMImportJobResponse' => [ 'base' => NULL, 'refs' => [], ], 'String' => [ 'base' => NULL, 'refs' => [ 'AccessDeniedException$message' => NULL, 'ConflictException$message' => NULL, 'GetImageFrameResponse$contentType' => '<p>The format in which the image frame information is returned to the customer. Default is <code>application/octet-stream</code>.</p>', 'GetImageSetMetadataResponse$contentType' => '<p>The format in which the study metadata is returned to the customer. Default is <code>text/plain</code>.</p>', 'GetImageSetMetadataResponse$contentEncoding' => '<p>The compression format in which image set metadata attributes are returned.</p>', 'InternalServerException$message' => NULL, 'ResourceNotFoundException$message' => NULL, 'ServiceQuotaExceededException$message' => NULL, 'ThrottlingException$message' => NULL, 'ValidationException$message' => NULL, ], ], 'TagKey' => [ 'base' => NULL, 'refs' => [ 'TagKeyList$member' => NULL, 'TagMap$key' => NULL, ], ], 'TagKeyList' => [ 'base' => NULL, 'refs' => [ 'UntagResourceRequest$tagKeys' => '<p>The keys for the tags to be removed from the medical imaging resource.</p>', ], ], 'TagMap' => [ 'base' => NULL, 'refs' => [ 'CreateDatastoreRequest$tags' => '<p>The tags provided when creating a data store.</p>', 'ListTagsForResourceResponse$tags' => '<p>A list of all tags associated with a medical imaging resource.</p>', 'TagResourceRequest$tags' => '<p>The user-specified key and value tag pairs added to a medical imaging resource.</p>', ], ], 'TagResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'TagResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'TagValue' => [ 'base' => NULL, 'refs' => [ 'TagMap$value' => NULL, ], ], 'ThrottlingException' => [ 'base' => '<p>The request was denied due to throttling.</p>', 'refs' => [], ], 'UntagResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'UntagResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'UpdateImageSetMetadataRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateImageSetMetadataResponse' => [ 'base' => NULL, 'refs' => [], ], 'ValidationException' => [ 'base' => '<p>The input fails to satisfy the constraints specified by an AWS service.</p>', 'refs' => [], ], ],];
