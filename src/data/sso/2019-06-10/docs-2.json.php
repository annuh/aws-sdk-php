<?php
// This file was auto-generated from sdk-root/src/data/sso/2019-06-10/docs-2.json
return [ 'version' => '2.0', 'service' => '<p>Amazon Web Services Single Sign On Portal is a web service that makes it easy for you to assign user access to Amazon Web Services SSO resources such as the AWS access portal. Users can get Amazon Web Services account applications and roles assigned to them and get federated into the application.</p> <note> <p>Although Amazon Web Services Single Sign-On was renamed, the <code>sso</code> and <code>identitystore</code> API namespaces will continue to retain their original name for backward compatibility purposes. For more information, see <a href="https://docs.aws.amazon.com/singlesignon/latest/userguide/what-is.html#renamed">Amazon Web Services SSO rename</a>.</p> </note> <p>This API reference guide describes the Amazon Web Services SSO Portal operations that you can call programatically and includes detailed information on data types and errors.</p> <note> <p>Amazon Web Services provides SDKs that consist of libraries and sample code for various programming languages and platforms, such as Java, Ruby, .Net, iOS, or Android. The SDKs provide a convenient way to create programmatic access to Amazon Web Services SSO and other Amazon Web Services services. For more information about the Amazon Web Services SDKs, including how to download and install them, see <a href="http://aws.amazon.com/tools/">Tools for Amazon Web Services</a>.</p> </note>', 'operations' => [ 'GetRoleCredentials' => '<p>Returns the STS short-term credentials for a given role name that is assigned to the user.</p>', 'ListAccountRoles' => '<p>Lists all roles that are assigned to the user for a given Amazon Web Services account.</p>', 'ListAccounts' => '<p>Lists all Amazon Web Services accounts assigned to the user. These Amazon Web Services accounts are assigned by the administrator of the account. For more information, see <a href="https://docs.aws.amazon.com/singlesignon/latest/userguide/useraccess.html#assignusers">Assign User Access</a> in the <i>Amazon Web Services SSO User Guide</i>. This operation returns a paginated response.</p>', 'Logout' => '<p>Removes the locally stored SSO tokens from the client-side cache and sends an API call to the Amazon Web Services SSO service to invalidate the corresponding server-side Amazon Web Services SSO sign in session.</p> <note> <p>If a user uses Amazon Web Services SSO to access the AWS CLI, the user’s Amazon Web Services SSO sign in session is used to obtain an IAM session, as specified in the corresponding Amazon Web Services SSO permission set. More specifically, Amazon Web Services SSO assumes an IAM role in the target account on behalf of the user, and the corresponding temporary Amazon Web Services credentials are returned to the client.</p> <p>After user logout, any existing IAM role sessions that were created by using Amazon Web Services SSO permission sets continue based on the duration configured in the permission set. For more information, see <a href="https://docs.aws.amazon.com/singlesignon/latest/userguide/authconcept.html">User authentications</a> in the <i>Amazon Web Services SSO User Guide</i>.</p> </note>', ], 'shapes' => [ 'AccessKeyType' => [ 'base' => NULL, 'refs' => [ 'RoleCredentials$accessKeyId' => '<p>The identifier used for the temporary security credentials. For more information, see <a href="https://docs.aws.amazon.com/IAM/latest/UserGuide/id_credentials_temp_use-resources.html">Using Temporary Security Credentials to Request Access to Amazon Web Services Resources</a> in the <i>Amazon Web Services IAM User Guide</i>.</p>', ], ], 'AccessTokenType' => [ 'base' => NULL, 'refs' => [ 'GetRoleCredentialsRequest$accessToken' => '<p>The token issued by the <code>CreateToken</code> API call. For more information, see <a href="https://docs.aws.amazon.com/singlesignon/latest/OIDCAPIReference/API_CreateToken.html">CreateToken</a> in the <i>Amazon Web Services SSO OIDC API Reference Guide</i>.</p>', 'ListAccountRolesRequest$accessToken' => '<p>The token issued by the <code>CreateToken</code> API call. For more information, see <a href="https://docs.aws.amazon.com/singlesignon/latest/OIDCAPIReference/API_CreateToken.html">CreateToken</a> in the <i>Amazon Web Services SSO OIDC API Reference Guide</i>.</p>', 'ListAccountsRequest$accessToken' => '<p>The token issued by the <code>CreateToken</code> API call. For more information, see <a href="https://docs.aws.amazon.com/singlesignon/latest/OIDCAPIReference/API_CreateToken.html">CreateToken</a> in the <i>Amazon Web Services SSO OIDC API Reference Guide</i>.</p>', 'LogoutRequest$accessToken' => '<p>The token issued by the <code>CreateToken</code> API call. For more information, see <a href="https://docs.aws.amazon.com/singlesignon/latest/OIDCAPIReference/API_CreateToken.html">CreateToken</a> in the <i>Amazon Web Services SSO OIDC API Reference Guide</i>.</p>', ], ], 'AccountIdType' => [ 'base' => NULL, 'refs' => [ 'AccountInfo$accountId' => '<p>The identifier of the Amazon Web Services account that is assigned to the user.</p>', 'GetRoleCredentialsRequest$accountId' => '<p>The identifier for the Amazon Web Services account that is assigned to the user.</p>', 'ListAccountRolesRequest$accountId' => '<p>The identifier for the Amazon Web Services account that is assigned to the user.</p>', 'RoleInfo$accountId' => '<p>The identifier of the Amazon Web Services account assigned to the user.</p>', ], ], 'AccountInfo' => [ 'base' => '<p>Provides information about your Amazon Web Services account.</p>', 'refs' => [ 'AccountListType$member' => NULL, ], ], 'AccountListType' => [ 'base' => NULL, 'refs' => [ 'ListAccountsResponse$accountList' => '<p>A paginated response with the list of account information and the next token if more results are available.</p>', ], ], 'AccountNameType' => [ 'base' => NULL, 'refs' => [ 'AccountInfo$accountName' => '<p>The display name of the Amazon Web Services account that is assigned to the user.</p>', ], ], 'EmailAddressType' => [ 'base' => NULL, 'refs' => [ 'AccountInfo$emailAddress' => '<p>The email address of the Amazon Web Services account that is assigned to the user.</p>', ], ], 'ErrorDescription' => [ 'base' => NULL, 'refs' => [ 'InvalidRequestException$message' => NULL, 'ResourceNotFoundException$message' => NULL, 'TooManyRequestsException$message' => NULL, 'UnauthorizedException$message' => NULL, ], ], 'ExpirationTimestampType' => [ 'base' => NULL, 'refs' => [ 'RoleCredentials$expiration' => '<p>The date on which temporary security credentials expire.</p>', ], ], 'GetRoleCredentialsRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetRoleCredentialsResponse' => [ 'base' => NULL, 'refs' => [], ], 'InvalidRequestException' => [ 'base' => '<p>Indicates that a problem occurred with the input to the request. For example, a required parameter might be missing or out of range.</p>', 'refs' => [], ], 'ListAccountRolesRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListAccountRolesResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListAccountsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListAccountsResponse' => [ 'base' => NULL, 'refs' => [], ], 'LogoutRequest' => [ 'base' => NULL, 'refs' => [], ], 'MaxResultType' => [ 'base' => NULL, 'refs' => [ 'ListAccountRolesRequest$maxResults' => '<p>The number of items that clients can request per page.</p>', 'ListAccountsRequest$maxResults' => '<p>This is the number of items clients can request per page.</p>', ], ], 'NextTokenType' => [ 'base' => NULL, 'refs' => [ 'ListAccountRolesRequest$nextToken' => '<p>The page token from the previous response output when you request subsequent pages.</p>', 'ListAccountRolesResponse$nextToken' => '<p>The page token client that is used to retrieve the list of accounts.</p>', 'ListAccountsRequest$nextToken' => '<p>(Optional) When requesting subsequent pages, this is the page token from the previous response output.</p>', 'ListAccountsResponse$nextToken' => '<p>The page token client that is used to retrieve the list of accounts.</p>', ], ], 'ResourceNotFoundException' => [ 'base' => '<p>The specified resource doesn\'t exist.</p>', 'refs' => [], ], 'RoleCredentials' => [ 'base' => '<p>Provides information about the role credentials that are assigned to the user.</p>', 'refs' => [ 'GetRoleCredentialsResponse$roleCredentials' => '<p>The credentials for the role that is assigned to the user.</p>', ], ], 'RoleInfo' => [ 'base' => '<p>Provides information about the role that is assigned to the user.</p>', 'refs' => [ 'RoleListType$member' => NULL, ], ], 'RoleListType' => [ 'base' => NULL, 'refs' => [ 'ListAccountRolesResponse$roleList' => '<p>A paginated response with the list of roles and the next token if more results are available.</p>', ], ], 'RoleNameType' => [ 'base' => NULL, 'refs' => [ 'GetRoleCredentialsRequest$roleName' => '<p>The friendly name of the role that is assigned to the user.</p>', 'RoleInfo$roleName' => '<p>The friendly name of the role that is assigned to the user.</p>', ], ], 'SecretAccessKeyType' => [ 'base' => NULL, 'refs' => [ 'RoleCredentials$secretAccessKey' => '<p>The key that is used to sign the request. For more information, see <a href="https://docs.aws.amazon.com/IAM/latest/UserGuide/id_credentials_temp_use-resources.html">Using Temporary Security Credentials to Request Access to Amazon Web Services Resources</a> in the <i>Amazon Web Services IAM User Guide</i>.</p>', ], ], 'SessionTokenType' => [ 'base' => NULL, 'refs' => [ 'RoleCredentials$sessionToken' => '<p>The token used for temporary credentials. For more information, see <a href="https://docs.aws.amazon.com/IAM/latest/UserGuide/id_credentials_temp_use-resources.html">Using Temporary Security Credentials to Request Access to Amazon Web Services Resources</a> in the <i>Amazon Web Services IAM User Guide</i>.</p>', ], ], 'TooManyRequestsException' => [ 'base' => '<p>Indicates that the request is being made too frequently and is more than what the server can handle.</p>', 'refs' => [], ], 'UnauthorizedException' => [ 'base' => '<p>Indicates that the request is not authorized. This can happen due to an invalid access token in the request.</p>', 'refs' => [], ], ],];
