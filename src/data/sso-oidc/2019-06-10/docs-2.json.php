<?php
// This file was auto-generated from sdk-root/src/data/sso-oidc/2019-06-10/docs-2.json
return [ 'version' => '2.0', 'service' => '<p>AWS IAM Identity Center (successor to AWS Single Sign-On) OpenID Connect (OIDC) is a web service that enables a client (such as AWS CLI or a native application) to register with IAM Identity Center. The service also enables the client to fetch the user’s access token upon successful authentication and authorization with IAM Identity Center.</p> <note> <p>Although AWS Single Sign-On was renamed, the <code>sso</code> and <code>identitystore</code> API namespaces will continue to retain their original name for backward compatibility purposes. For more information, see <a href="https://docs.aws.amazon.com/singlesignon/latest/userguide/what-is.html#renamed">IAM Identity Center rename</a>.</p> </note> <p> <b>Considerations for Using This Guide</b> </p> <p>Before you begin using this guide, we recommend that you first review the following important information about how the IAM Identity Center OIDC service works.</p> <ul> <li> <p>The IAM Identity Center OIDC service currently implements only the portions of the OAuth 2.0 Device Authorization Grant standard (<a href="https://tools.ietf.org/html/rfc8628">https://tools.ietf.org/html/rfc8628</a>) that are necessary to enable single sign-on authentication with the AWS CLI. Support for other OIDC flows frequently needed for native applications, such as Authorization Code Flow (+ PKCE), will be addressed in future releases.</p> </li> <li> <p>The service emits only OIDC access tokens, such that obtaining a new token (For example, token refresh) requires explicit user re-authentication.</p> </li> <li> <p>The access tokens provided by this service grant access to all AWS account entitlements assigned to an IAM Identity Center user, not just a particular application.</p> </li> <li> <p>The documentation in this guide does not describe the mechanism to convert the access token into AWS Auth (“sigv4”) credentials for use with IAM-protected AWS service endpoints. For more information, see <a href="https://docs.aws.amazon.com/singlesignon/latest/PortalAPIReference/API_GetRoleCredentials.html">GetRoleCredentials</a> in the <i>IAM Identity Center Portal API Reference Guide</i>.</p> </li> </ul> <p>For general information about IAM Identity Center, see <a href="https://docs.aws.amazon.com/singlesignon/latest/userguide/what-is.html">What is IAM Identity Center?</a> in the <i>IAM Identity Center User Guide</i>.</p>', 'operations' => [ 'CreateToken' => '<p>Creates and returns an access token for the authorized client. The access token issued will be used to fetch short-term credentials for the assigned roles in the AWS account.</p>', 'RegisterClient' => '<p>Registers a client with IAM Identity Center. This allows clients to initiate device authorization. The output should be persisted for reuse through many authentication requests.</p>', 'StartDeviceAuthorization' => '<p>Initiates device authorization by requesting a pair of verification codes from the authorization service.</p>', ], 'shapes' => [ 'AccessDeniedException' => [ 'base' => '<p>You do not have sufficient access to perform this action.</p>', 'refs' => [], ], 'AccessToken' => [ 'base' => NULL, 'refs' => [ 'CreateTokenResponse$accessToken' => '<p>An opaque token to access IAM Identity Center resources assigned to a user.</p>', ], ], 'AuthCode' => [ 'base' => NULL, 'refs' => [ 'CreateTokenRequest$code' => '<p>The authorization code received from the authorization service. This parameter is required to perform an authorization grant request to get access to a token.</p>', ], ], 'AuthorizationPendingException' => [ 'base' => '<p>Indicates that a request to authorize a client with an access user session token is pending.</p>', 'refs' => [], ], 'ClientId' => [ 'base' => NULL, 'refs' => [ 'CreateTokenRequest$clientId' => '<p>The unique identifier string for each client. This value should come from the persisted result of the <a>RegisterClient</a> API.</p>', 'RegisterClientResponse$clientId' => '<p>The unique identifier string for each client. This client uses this identifier to get authenticated by the service in subsequent calls.</p>', 'StartDeviceAuthorizationRequest$clientId' => '<p>The unique identifier string for the client that is registered with IAM Identity Center. This value should come from the persisted result of the <a>RegisterClient</a> API operation.</p>', ], ], 'ClientName' => [ 'base' => NULL, 'refs' => [ 'RegisterClientRequest$clientName' => '<p>The friendly name of the client.</p>', ], ], 'ClientSecret' => [ 'base' => NULL, 'refs' => [ 'CreateTokenRequest$clientSecret' => '<p>A secret string generated for the client. This value should come from the persisted result of the <a>RegisterClient</a> API.</p>', 'RegisterClientResponse$clientSecret' => '<p>A secret string generated for the client. The client will use this string to get authenticated by the service in subsequent calls.</p>', 'StartDeviceAuthorizationRequest$clientSecret' => '<p>A secret string that is generated for the client. This value should come from the persisted result of the <a>RegisterClient</a> API operation.</p>', ], ], 'ClientType' => [ 'base' => NULL, 'refs' => [ 'RegisterClientRequest$clientType' => '<p>The type of client. The service supports only <code>public</code> as a client type. Anything other than public will be rejected by the service.</p>', ], ], 'CreateTokenRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateTokenResponse' => [ 'base' => NULL, 'refs' => [], ], 'DeviceCode' => [ 'base' => NULL, 'refs' => [ 'CreateTokenRequest$deviceCode' => '<p>Used only when calling this API for the device code grant type. This short-term code is used to identify this authentication attempt. This should come from an in-memory reference to the result of the <a>StartDeviceAuthorization</a> API.</p>', 'StartDeviceAuthorizationResponse$deviceCode' => '<p>The short-lived code that is used by the device when polling for a session token.</p>', ], ], 'Error' => [ 'base' => NULL, 'refs' => [ 'AccessDeniedException$error' => NULL, 'AuthorizationPendingException$error' => NULL, 'ExpiredTokenException$error' => NULL, 'InternalServerException$error' => NULL, 'InvalidClientException$error' => NULL, 'InvalidClientMetadataException$error' => NULL, 'InvalidGrantException$error' => NULL, 'InvalidRequestException$error' => NULL, 'InvalidScopeException$error' => NULL, 'SlowDownException$error' => NULL, 'UnauthorizedClientException$error' => NULL, 'UnsupportedGrantTypeException$error' => NULL, ], ], 'ErrorDescription' => [ 'base' => NULL, 'refs' => [ 'AccessDeniedException$error_description' => NULL, 'AuthorizationPendingException$error_description' => NULL, 'ExpiredTokenException$error_description' => NULL, 'InternalServerException$error_description' => NULL, 'InvalidClientException$error_description' => NULL, 'InvalidClientMetadataException$error_description' => NULL, 'InvalidGrantException$error_description' => NULL, 'InvalidRequestException$error_description' => NULL, 'InvalidScopeException$error_description' => NULL, 'SlowDownException$error_description' => NULL, 'UnauthorizedClientException$error_description' => NULL, 'UnsupportedGrantTypeException$error_description' => NULL, ], ], 'ExpirationInSeconds' => [ 'base' => NULL, 'refs' => [ 'CreateTokenResponse$expiresIn' => '<p>Indicates the time in seconds when an access token will expire.</p>', 'StartDeviceAuthorizationResponse$expiresIn' => '<p>Indicates the number of seconds in which the verification code will become invalid.</p>', ], ], 'ExpiredTokenException' => [ 'base' => '<p>Indicates that the token issued by the service is expired and is no longer valid.</p>', 'refs' => [], ], 'GrantType' => [ 'base' => NULL, 'refs' => [ 'CreateTokenRequest$grantType' => '<p>Supports grant types for the authorization code, refresh token, and device code request. For device code requests, specify the following value:</p> <p> <code>urn:ietf:params:oauth:grant-type:<i>device_code</i> </code> </p> <p>For information about how to obtain the device code, see the <a>StartDeviceAuthorization</a> topic.</p>', ], ], 'IdToken' => [ 'base' => NULL, 'refs' => [ 'CreateTokenResponse$idToken' => '<p>Currently, <code>idToken</code> is not yet implemented and is not supported. For more information about the features and limitations of the current IAM Identity Center OIDC implementation, see <i>Considerations for Using this Guide</i> in the <a href="https://docs.aws.amazon.com/singlesignon/latest/OIDCAPIReference/Welcome.html">IAM Identity Center OIDC API Reference</a>.</p> <p>The identifier of the user that associated with the access token, if present.</p>', ], ], 'InternalServerException' => [ 'base' => '<p>Indicates that an error from the service occurred while trying to process a request.</p>', 'refs' => [], ], 'IntervalInSeconds' => [ 'base' => NULL, 'refs' => [ 'StartDeviceAuthorizationResponse$interval' => '<p>Indicates the number of seconds the client must wait between attempts when polling for a session.</p>', ], ], 'InvalidClientException' => [ 'base' => '<p>Indicates that the <code>clientId</code> or <code>clientSecret</code> in the request is invalid. For example, this can occur when a client sends an incorrect <code>clientId</code> or an expired <code>clientSecret</code>.</p>', 'refs' => [], ], 'InvalidClientMetadataException' => [ 'base' => '<p>Indicates that the client information sent in the request during registration is invalid.</p>', 'refs' => [], ], 'InvalidGrantException' => [ 'base' => '<p>Indicates that a request contains an invalid grant. This can occur if a client makes a <a>CreateToken</a> request with an invalid grant type.</p>', 'refs' => [], ], 'InvalidRequestException' => [ 'base' => '<p>Indicates that something is wrong with the input to the request. For example, a required parameter might be missing or out of range.</p>', 'refs' => [], ], 'InvalidScopeException' => [ 'base' => '<p>Indicates that the scope provided in the request is invalid.</p>', 'refs' => [], ], 'LongTimeStampType' => [ 'base' => NULL, 'refs' => [ 'RegisterClientResponse$clientIdIssuedAt' => '<p>Indicates the time at which the <code>clientId</code> and <code>clientSecret</code> were issued.</p>', 'RegisterClientResponse$clientSecretExpiresAt' => '<p>Indicates the time at which the <code>clientId</code> and <code>clientSecret</code> will become invalid.</p>', ], ], 'RefreshToken' => [ 'base' => NULL, 'refs' => [ 'CreateTokenRequest$refreshToken' => '<p>Currently, <code>refreshToken</code> is not yet implemented and is not supported. For more information about the features and limitations of the current IAM Identity Center OIDC implementation, see <i>Considerations for Using this Guide</i> in the <a href="https://docs.aws.amazon.com/singlesignon/latest/OIDCAPIReference/Welcome.html">IAM Identity Center OIDC API Reference</a>.</p> <p>The token used to obtain an access token in the event that the access token is invalid or expired.</p>', 'CreateTokenResponse$refreshToken' => '<p>Currently, <code>refreshToken</code> is not yet implemented and is not supported. For more information about the features and limitations of the current IAM Identity Center OIDC implementation, see <i>Considerations for Using this Guide</i> in the <a href="https://docs.aws.amazon.com/singlesignon/latest/OIDCAPIReference/Welcome.html">IAM Identity Center OIDC API Reference</a>.</p> <p>A token that, if present, can be used to refresh a previously issued access token that might have expired.</p>', ], ], 'RegisterClientRequest' => [ 'base' => NULL, 'refs' => [], ], 'RegisterClientResponse' => [ 'base' => NULL, 'refs' => [], ], 'Scope' => [ 'base' => NULL, 'refs' => [ 'Scopes$member' => NULL, ], ], 'Scopes' => [ 'base' => NULL, 'refs' => [ 'CreateTokenRequest$scope' => '<p>The list of scopes that is defined by the client. Upon authorization, this list is used to restrict permissions when granting an access token.</p>', 'RegisterClientRequest$scopes' => '<p>The list of scopes that are defined by the client. Upon authorization, this list is used to restrict permissions when granting an access token.</p>', ], ], 'SlowDownException' => [ 'base' => '<p>Indicates that the client is making the request too frequently and is more than the service can handle. </p>', 'refs' => [], ], 'StartDeviceAuthorizationRequest' => [ 'base' => NULL, 'refs' => [], ], 'StartDeviceAuthorizationResponse' => [ 'base' => NULL, 'refs' => [], ], 'TokenType' => [ 'base' => NULL, 'refs' => [ 'CreateTokenResponse$tokenType' => '<p>Used to notify the client that the returned token is an access token. The supported type is <code>BearerToken</code>.</p>', ], ], 'URI' => [ 'base' => NULL, 'refs' => [ 'CreateTokenRequest$redirectUri' => '<p>The location of the application that will receive the authorization code. Users authorize the service to send the request to this location.</p>', 'RegisterClientResponse$authorizationEndpoint' => '<p>The endpoint where the client can request authorization.</p>', 'RegisterClientResponse$tokenEndpoint' => '<p>The endpoint where the client can get an access token.</p>', 'StartDeviceAuthorizationRequest$startUrl' => '<p>The URL for the AWS access portal. For more information, see <a href="https://docs.aws.amazon.com/singlesignon/latest/userguide/using-the-portal.html">Using the AWS access portal</a> in the <i>IAM Identity Center User Guide</i>.</p>', 'StartDeviceAuthorizationResponse$verificationUri' => '<p>The URI of the verification page that takes the <code>userCode</code> to authorize the device.</p>', 'StartDeviceAuthorizationResponse$verificationUriComplete' => '<p>An alternate URL that the client can use to automatically launch a browser. This process skips the manual step in which the user visits the verification page and enters their code.</p>', ], ], 'UnauthorizedClientException' => [ 'base' => '<p>Indicates that the client is not currently authorized to make the request. This can happen when a <code>clientId</code> is not issued for a public client.</p>', 'refs' => [], ], 'UnsupportedGrantTypeException' => [ 'base' => '<p>Indicates that the grant type in the request is not supported by the service.</p>', 'refs' => [], ], 'UserCode' => [ 'base' => NULL, 'refs' => [ 'StartDeviceAuthorizationResponse$userCode' => '<p>A one-time user verification code. This is needed to authorize an in-use device.</p>', ], ], ],];
