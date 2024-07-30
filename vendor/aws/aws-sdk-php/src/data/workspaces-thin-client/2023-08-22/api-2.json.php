<?php
// This file was auto-generated from sdk-root/src/data/workspaces-thin-client/2023-08-22/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2023-08-22', 'endpointPrefix' => 'thinclient', 'protocol' => 'rest-json', 'protocols' => [ 'rest-json', ], 'serviceFullName' => 'Amazon WorkSpaces Thin Client', 'serviceId' => 'WorkSpaces Thin Client', 'signatureVersion' => 'v4', 'signingName' => 'thinclient', 'uid' => 'workspaces-thin-client-2023-08-22', ], 'operations' => [ 'CreateEnvironment' => [ 'name' => 'CreateEnvironment', 'http' => [ 'method' => 'POST', 'requestUri' => '/environments', 'responseCode' => 201, ], 'input' => [ 'shape' => 'CreateEnvironmentRequest', ], 'output' => [ 'shape' => 'CreateEnvironmentResponse', ], 'errors' => [ [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'InternalServerException', ], ], 'endpoint' => [ 'hostPrefix' => 'api.', ], ], 'DeleteDevice' => [ 'name' => 'DeleteDevice', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/devices/{id}', 'responseCode' => 204, ], 'input' => [ 'shape' => 'DeleteDeviceRequest', ], 'output' => [ 'shape' => 'DeleteDeviceResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'InternalServerException', ], ], 'endpoint' => [ 'hostPrefix' => 'api.', ], 'idempotent' => true, ], 'DeleteEnvironment' => [ 'name' => 'DeleteEnvironment', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/environments/{id}', 'responseCode' => 204, ], 'input' => [ 'shape' => 'DeleteEnvironmentRequest', ], 'output' => [ 'shape' => 'DeleteEnvironmentResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'InternalServerException', ], ], 'endpoint' => [ 'hostPrefix' => 'api.', ], 'idempotent' => true, ], 'DeregisterDevice' => [ 'name' => 'DeregisterDevice', 'http' => [ 'method' => 'POST', 'requestUri' => '/deregister-device/{id}', 'responseCode' => 202, ], 'input' => [ 'shape' => 'DeregisterDeviceRequest', ], 'output' => [ 'shape' => 'DeregisterDeviceResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'InternalServerException', ], ], 'endpoint' => [ 'hostPrefix' => 'api.', ], 'idempotent' => true, ], 'GetDevice' => [ 'name' => 'GetDevice', 'http' => [ 'method' => 'GET', 'requestUri' => '/devices/{id}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetDeviceRequest', ], 'output' => [ 'shape' => 'GetDeviceResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], 'endpoint' => [ 'hostPrefix' => 'api.', ], ], 'GetEnvironment' => [ 'name' => 'GetEnvironment', 'http' => [ 'method' => 'GET', 'requestUri' => '/environments/{id}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetEnvironmentRequest', ], 'output' => [ 'shape' => 'GetEnvironmentResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], 'endpoint' => [ 'hostPrefix' => 'api.', ], ], 'GetSoftwareSet' => [ 'name' => 'GetSoftwareSet', 'http' => [ 'method' => 'GET', 'requestUri' => '/softwaresets/{id}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetSoftwareSetRequest', ], 'output' => [ 'shape' => 'GetSoftwareSetResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], 'endpoint' => [ 'hostPrefix' => 'api.', ], ], 'ListDevices' => [ 'name' => 'ListDevices', 'http' => [ 'method' => 'GET', 'requestUri' => '/devices', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListDevicesRequest', ], 'output' => [ 'shape' => 'ListDevicesResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], 'endpoint' => [ 'hostPrefix' => 'api.', ], ], 'ListEnvironments' => [ 'name' => 'ListEnvironments', 'http' => [ 'method' => 'GET', 'requestUri' => '/environments', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListEnvironmentsRequest', ], 'output' => [ 'shape' => 'ListEnvironmentsResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], 'endpoint' => [ 'hostPrefix' => 'api.', ], ], 'ListSoftwareSets' => [ 'name' => 'ListSoftwareSets', 'http' => [ 'method' => 'GET', 'requestUri' => '/softwaresets', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListSoftwareSetsRequest', ], 'output' => [ 'shape' => 'ListSoftwareSetsResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], 'endpoint' => [ 'hostPrefix' => 'api.', ], ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'GET', 'requestUri' => '/tags/{resourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListTagsForResourceRequest', ], 'output' => [ 'shape' => 'ListTagsForResourceResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], 'endpoint' => [ 'hostPrefix' => 'api.', ], ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/tags/{resourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'TagResourceRequest', ], 'output' => [ 'shape' => 'TagResourceResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'InternalServerException', ], ], 'endpoint' => [ 'hostPrefix' => 'api.', ], ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/tags/{resourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UntagResourceRequest', ], 'output' => [ 'shape' => 'UntagResourceResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'InternalServerException', ], ], 'endpoint' => [ 'hostPrefix' => 'api.', ], 'idempotent' => true, ], 'UpdateDevice' => [ 'name' => 'UpdateDevice', 'http' => [ 'method' => 'PATCH', 'requestUri' => '/devices/{id}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UpdateDeviceRequest', ], 'output' => [ 'shape' => 'UpdateDeviceResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], 'endpoint' => [ 'hostPrefix' => 'api.', ], 'idempotent' => true, ], 'UpdateEnvironment' => [ 'name' => 'UpdateEnvironment', 'http' => [ 'method' => 'PATCH', 'requestUri' => '/environments/{id}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UpdateEnvironmentRequest', ], 'output' => [ 'shape' => 'UpdateEnvironmentResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], 'endpoint' => [ 'hostPrefix' => 'api.', ], 'idempotent' => true, ], 'UpdateSoftwareSet' => [ 'name' => 'UpdateSoftwareSet', 'http' => [ 'method' => 'PATCH', 'requestUri' => '/softwaresets/{id}', 'responseCode' => 204, ], 'input' => [ 'shape' => 'UpdateSoftwareSetRequest', ], 'output' => [ 'shape' => 'UpdateSoftwareSetResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], 'endpoint' => [ 'hostPrefix' => 'api.', ], 'idempotent' => true, ], ], 'shapes' => [ 'AccessDeniedException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'error' => [ 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], 'ActivationCode' => [ 'type' => 'string', 'pattern' => '[a-z]{2}[a-z0-9]{6}', ], 'ApplyTimeOf' => [ 'type' => 'string', 'enum' => [ 'UTC', 'DEVICE', ], ], 'Arn' => [ 'type' => 'string', 'max' => 2048, 'min' => 20, 'pattern' => 'arn:[\\w+=\\/,.@-]+:[a-zA-Z0-9\\-]+:[a-zA-Z0-9\\-]*:[0-9]{0,12}:[a-zA-Z0-9\\-\\/\\._]+', ], 'ClientToken' => [ 'type' => 'string', 'max' => 512, 'min' => 1, ], 'ConflictException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], 'resourceId' => [ 'shape' => 'ResourceId', ], 'resourceType' => [ 'shape' => 'ResourceType', ], ], 'error' => [ 'httpStatusCode' => 409, 'senderFault' => true, ], 'exception' => true, ], 'CreateEnvironmentRequest' => [ 'type' => 'structure', 'required' => [ 'desktopArn', ], 'members' => [ 'name' => [ 'shape' => 'EnvironmentName', ], 'desktopArn' => [ 'shape' => 'Arn', ], 'desktopEndpoint' => [ 'shape' => 'DesktopEndpoint', ], 'softwareSetUpdateSchedule' => [ 'shape' => 'SoftwareSetUpdateSchedule', ], 'maintenanceWindow' => [ 'shape' => 'MaintenanceWindow', ], 'softwareSetUpdateMode' => [ 'shape' => 'SoftwareSetUpdateMode', ], 'desiredSoftwareSetId' => [ 'shape' => 'SoftwareSetId', ], 'kmsKeyArn' => [ 'shape' => 'KmsKeyArn', ], 'clientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, ], 'tags' => [ 'shape' => 'TagsMap', ], 'deviceCreationTags' => [ 'shape' => 'DeviceCreationTagsMap', ], ], ], 'CreateEnvironmentResponse' => [ 'type' => 'structure', 'members' => [ 'environment' => [ 'shape' => 'EnvironmentSummary', ], ], ], 'DayOfWeek' => [ 'type' => 'string', 'enum' => [ 'MONDAY', 'TUESDAY', 'WEDNESDAY', 'THURSDAY', 'FRIDAY', 'SATURDAY', 'SUNDAY', ], ], 'DayOfWeekList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DayOfWeek', ], 'max' => 7, 'min' => 1, ], 'DeleteDeviceRequest' => [ 'type' => 'structure', 'required' => [ 'id', ], 'members' => [ 'id' => [ 'shape' => 'DeviceId', 'location' => 'uri', 'locationName' => 'id', ], 'clientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, 'location' => 'querystring', 'locationName' => 'clientToken', ], ], ], 'DeleteDeviceResponse' => [ 'type' => 'structure', 'members' => [], ], 'DeleteEnvironmentRequest' => [ 'type' => 'structure', 'required' => [ 'id', ], 'members' => [ 'id' => [ 'shape' => 'EnvironmentId', 'location' => 'uri', 'locationName' => 'id', ], 'clientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, 'location' => 'querystring', 'locationName' => 'clientToken', ], ], ], 'DeleteEnvironmentResponse' => [ 'type' => 'structure', 'members' => [], ], 'DeregisterDeviceRequest' => [ 'type' => 'structure', 'required' => [ 'id', ], 'members' => [ 'id' => [ 'shape' => 'DeviceId', 'location' => 'uri', 'locationName' => 'id', ], 'targetDeviceStatus' => [ 'shape' => 'TargetDeviceStatus', ], 'clientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, ], ], ], 'DeregisterDeviceResponse' => [ 'type' => 'structure', 'members' => [], ], 'DesktopEndpoint' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, 'pattern' => '(https:\\/\\/)[a-z0-9]+([\\-\\.]{1}[a-z0-9]+)*\\.[a-z]{2,32}(:[0-9]{1,5})?(\\/.*)?', 'sensitive' => true, ], 'DesktopType' => [ 'type' => 'string', 'enum' => [ 'workspaces', 'appstream', 'workspaces-web', ], ], 'Device' => [ 'type' => 'structure', 'members' => [ 'id' => [ 'shape' => 'DeviceId', ], 'serialNumber' => [ 'shape' => 'String', ], 'name' => [ 'shape' => 'DeviceName', ], 'model' => [ 'shape' => 'String', ], 'environmentId' => [ 'shape' => 'EnvironmentId', ], 'status' => [ 'shape' => 'DeviceStatus', ], 'currentSoftwareSetId' => [ 'shape' => 'SoftwareSetId', ], 'currentSoftwareSetVersion' => [ 'shape' => 'String', ], 'desiredSoftwareSetId' => [ 'shape' => 'SoftwareSetId', ], 'pendingSoftwareSetId' => [ 'shape' => 'SoftwareSetId', ], 'pendingSoftwareSetVersion' => [ 'shape' => 'String', ], 'softwareSetUpdateSchedule' => [ 'shape' => 'SoftwareSetUpdateSchedule', ], 'softwareSetComplianceStatus' => [ 'shape' => 'DeviceSoftwareSetComplianceStatus', ], 'softwareSetUpdateStatus' => [ 'shape' => 'SoftwareSetUpdateStatus', ], 'lastConnectedAt' => [ 'shape' => 'Timestamp', ], 'lastPostureAt' => [ 'shape' => 'Timestamp', ], 'createdAt' => [ 'shape' => 'Timestamp', ], 'updatedAt' => [ 'shape' => 'Timestamp', ], 'arn' => [ 'shape' => 'Arn', ], 'kmsKeyArn' => [ 'shape' => 'KmsKeyArn', ], 'tags' => [ 'shape' => 'TagsMap', ], ], ], 'DeviceCreationTagKey' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '(?!aws:)[A-Za-z0-9 _=@:.+-/]+', ], 'DeviceCreationTagValue' => [ 'type' => 'string', 'max' => 256, 'min' => 0, 'pattern' => '[A-Za-z0-9 _=@:.+-/]+', ], 'DeviceCreationTagsMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'DeviceCreationTagKey', ], 'value' => [ 'shape' => 'DeviceCreationTagValue', ], 'max' => 50, 'min' => 0, 'sensitive' => true, ], 'DeviceId' => [ 'type' => 'string', 'pattern' => '[a-zA-Z0-9]{24}', ], 'DeviceList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DeviceSummary', ], ], 'DeviceName' => [ 'type' => 'string', 'pattern' => '[0-9\\p{IsAlphabetic}+:,.@\'" -]{1,64}', 'sensitive' => true, ], 'DeviceSoftwareSetComplianceStatus' => [ 'type' => 'string', 'enum' => [ 'NONE', 'COMPLIANT', 'NOT_COMPLIANT', ], ], 'DeviceStatus' => [ 'type' => 'string', 'enum' => [ 'REGISTERED', 'DEREGISTERING', 'DEREGISTERED', 'ARCHIVED', ], ], 'DeviceSummary' => [ 'type' => 'structure', 'members' => [ 'id' => [ 'shape' => 'DeviceId', ], 'serialNumber' => [ 'shape' => 'String', ], 'name' => [ 'shape' => 'DeviceName', ], 'model' => [ 'shape' => 'String', ], 'environmentId' => [ 'shape' => 'EnvironmentId', ], 'status' => [ 'shape' => 'DeviceStatus', ], 'currentSoftwareSetId' => [ 'shape' => 'SoftwareSetId', ], 'desiredSoftwareSetId' => [ 'shape' => 'SoftwareSetId', ], 'pendingSoftwareSetId' => [ 'shape' => 'SoftwareSetId', ], 'softwareSetUpdateSchedule' => [ 'shape' => 'SoftwareSetUpdateSchedule', ], 'lastConnectedAt' => [ 'shape' => 'Timestamp', ], 'lastPostureAt' => [ 'shape' => 'Timestamp', ], 'createdAt' => [ 'shape' => 'Timestamp', ], 'updatedAt' => [ 'shape' => 'Timestamp', ], 'arn' => [ 'shape' => 'Arn', ], ], ], 'Environment' => [ 'type' => 'structure', 'members' => [ 'id' => [ 'shape' => 'EnvironmentId', ], 'name' => [ 'shape' => 'EnvironmentName', ], 'desktopArn' => [ 'shape' => 'Arn', ], 'desktopEndpoint' => [ 'shape' => 'DesktopEndpoint', ], 'desktopType' => [ 'shape' => 'DesktopType', ], 'activationCode' => [ 'shape' => 'ActivationCode', ], 'registeredDevicesCount' => [ 'shape' => 'Integer', ], 'softwareSetUpdateSchedule' => [ 'shape' => 'SoftwareSetUpdateSchedule', ], 'maintenanceWindow' => [ 'shape' => 'MaintenanceWindow', ], 'softwareSetUpdateMode' => [ 'shape' => 'SoftwareSetUpdateMode', ], 'desiredSoftwareSetId' => [ 'shape' => 'SoftwareSetId', ], 'pendingSoftwareSetId' => [ 'shape' => 'SoftwareSetId', ], 'pendingSoftwareSetVersion' => [ 'shape' => 'String', ], 'softwareSetComplianceStatus' => [ 'shape' => 'EnvironmentSoftwareSetComplianceStatus', ], 'createdAt' => [ 'shape' => 'Timestamp', ], 'updatedAt' => [ 'shape' => 'Timestamp', ], 'arn' => [ 'shape' => 'Arn', ], 'kmsKeyArn' => [ 'shape' => 'KmsKeyArn', ], 'tags' => [ 'shape' => 'TagsMap', ], 'deviceCreationTags' => [ 'shape' => 'DeviceCreationTagsMap', ], ], ], 'EnvironmentId' => [ 'type' => 'string', 'pattern' => '[a-z0-9]{9}', ], 'EnvironmentList' => [ 'type' => 'list', 'member' => [ 'shape' => 'EnvironmentSummary', ], ], 'EnvironmentName' => [ 'type' => 'string', 'pattern' => '[0-9\\p{IsAlphabetic}+:,.@\'" -][0-9\\p{IsAlphabetic}+=:,.@\'" -]{0,63}', 'sensitive' => true, ], 'EnvironmentSoftwareSetComplianceStatus' => [ 'type' => 'string', 'enum' => [ 'NO_REGISTERED_DEVICES', 'COMPLIANT', 'NOT_COMPLIANT', ], ], 'EnvironmentSummary' => [ 'type' => 'structure', 'members' => [ 'id' => [ 'shape' => 'EnvironmentId', ], 'name' => [ 'shape' => 'EnvironmentName', ], 'desktopArn' => [ 'shape' => 'Arn', ], 'desktopEndpoint' => [ 'shape' => 'DesktopEndpoint', ], 'desktopType' => [ 'shape' => 'DesktopType', ], 'activationCode' => [ 'shape' => 'ActivationCode', ], 'softwareSetUpdateSchedule' => [ 'shape' => 'SoftwareSetUpdateSchedule', ], 'maintenanceWindow' => [ 'shape' => 'MaintenanceWindow', ], 'softwareSetUpdateMode' => [ 'shape' => 'SoftwareSetUpdateMode', ], 'desiredSoftwareSetId' => [ 'shape' => 'SoftwareSetId', ], 'pendingSoftwareSetId' => [ 'shape' => 'SoftwareSetId', ], 'createdAt' => [ 'shape' => 'Timestamp', ], 'updatedAt' => [ 'shape' => 'Timestamp', ], 'arn' => [ 'shape' => 'Arn', ], ], ], 'ExceptionMessage' => [ 'type' => 'string', ], 'FieldName' => [ 'type' => 'string', ], 'GetDeviceRequest' => [ 'type' => 'structure', 'required' => [ 'id', ], 'members' => [ 'id' => [ 'shape' => 'DeviceId', 'location' => 'uri', 'locationName' => 'id', ], ], ], 'GetDeviceResponse' => [ 'type' => 'structure', 'members' => [ 'device' => [ 'shape' => 'Device', ], ], ], 'GetEnvironmentRequest' => [ 'type' => 'structure', 'required' => [ 'id', ], 'members' => [ 'id' => [ 'shape' => 'EnvironmentId', 'location' => 'uri', 'locationName' => 'id', ], ], ], 'GetEnvironmentResponse' => [ 'type' => 'structure', 'members' => [ 'environment' => [ 'shape' => 'Environment', ], ], ], 'GetSoftwareSetRequest' => [ 'type' => 'structure', 'required' => [ 'id', ], 'members' => [ 'id' => [ 'shape' => 'SoftwareSetId', 'location' => 'uri', 'locationName' => 'id', ], ], ], 'GetSoftwareSetResponse' => [ 'type' => 'structure', 'members' => [ 'softwareSet' => [ 'shape' => 'SoftwareSet', ], ], ], 'Hour' => [ 'type' => 'integer', 'box' => true, 'max' => 23, 'min' => 0, ], 'Integer' => [ 'type' => 'integer', 'box' => true, ], 'InternalServerException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], 'retryAfterSeconds' => [ 'shape' => 'RetryAfterSeconds', 'location' => 'header', 'locationName' => 'Retry-After', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], 'KmsKeyArn' => [ 'type' => 'string', 'max' => 2048, 'min' => 20, 'pattern' => 'arn:[\\w+=\\/,.@-]+:kms:[a-zA-Z0-9\\-]*:[0-9]{0,12}:key\\/[a-zA-Z0-9-]+', ], 'ListDevicesRequest' => [ 'type' => 'structure', 'members' => [ 'nextToken' => [ 'shape' => 'PaginationToken', 'location' => 'querystring', 'locationName' => 'nextToken', ], 'maxResults' => [ 'shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'maxResults', ], ], ], 'ListDevicesResponse' => [ 'type' => 'structure', 'members' => [ 'devices' => [ 'shape' => 'DeviceList', ], 'nextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'ListEnvironmentsRequest' => [ 'type' => 'structure', 'members' => [ 'nextToken' => [ 'shape' => 'PaginationToken', 'location' => 'querystring', 'locationName' => 'nextToken', ], 'maxResults' => [ 'shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'maxResults', ], ], ], 'ListEnvironmentsResponse' => [ 'type' => 'structure', 'members' => [ 'environments' => [ 'shape' => 'EnvironmentList', ], 'nextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'ListSoftwareSetsRequest' => [ 'type' => 'structure', 'members' => [ 'nextToken' => [ 'shape' => 'PaginationToken', 'location' => 'querystring', 'locationName' => 'nextToken', ], 'maxResults' => [ 'shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'maxResults', ], ], ], 'ListSoftwareSetsResponse' => [ 'type' => 'structure', 'members' => [ 'softwareSets' => [ 'shape' => 'SoftwareSetList', ], 'nextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'ListTagsForResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', ], 'members' => [ 'resourceArn' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'resourceArn', ], ], ], 'ListTagsForResourceResponse' => [ 'type' => 'structure', 'members' => [ 'tags' => [ 'shape' => 'TagsMap', ], ], ], 'MaintenanceWindow' => [ 'type' => 'structure', 'members' => [ 'type' => [ 'shape' => 'MaintenanceWindowType', ], 'startTimeHour' => [ 'shape' => 'Hour', ], 'startTimeMinute' => [ 'shape' => 'Minute', ], 'endTimeHour' => [ 'shape' => 'Hour', ], 'endTimeMinute' => [ 'shape' => 'Minute', ], 'daysOfTheWeek' => [ 'shape' => 'DayOfWeekList', ], 'applyTimeOf' => [ 'shape' => 'ApplyTimeOf', ], ], ], 'MaintenanceWindowType' => [ 'type' => 'string', 'enum' => [ 'SYSTEM', 'CUSTOM', ], ], 'MaxResults' => [ 'type' => 'integer', 'box' => true, 'max' => 50, 'min' => 1, ], 'Minute' => [ 'type' => 'integer', 'box' => true, 'max' => 59, 'min' => 0, ], 'PaginationToken' => [ 'type' => 'string', 'max' => 2048, 'min' => 0, 'pattern' => '\\S*', ], 'QuotaCode' => [ 'type' => 'string', ], 'ResourceId' => [ 'type' => 'string', ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], 'resourceId' => [ 'shape' => 'ResourceId', ], 'resourceType' => [ 'shape' => 'ResourceType', ], ], 'error' => [ 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], 'ResourceType' => [ 'type' => 'string', ], 'RetryAfterSeconds' => [ 'type' => 'integer', 'box' => true, ], 'ServiceCode' => [ 'type' => 'string', ], 'ServiceQuotaExceededException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], 'resourceId' => [ 'shape' => 'ResourceId', ], 'resourceType' => [ 'shape' => 'ResourceType', ], 'serviceCode' => [ 'shape' => 'ServiceCode', ], 'quotaCode' => [ 'shape' => 'QuotaCode', ], ], 'error' => [ 'httpStatusCode' => 402, 'senderFault' => true, ], 'exception' => true, ], 'Software' => [ 'type' => 'structure', 'members' => [ 'name' => [ 'shape' => 'String', ], 'version' => [ 'shape' => 'String', ], ], ], 'SoftwareList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Software', ], ], 'SoftwareSet' => [ 'type' => 'structure', 'members' => [ 'id' => [ 'shape' => 'SoftwareSetId', ], 'version' => [ 'shape' => 'String', ], 'releasedAt' => [ 'shape' => 'Timestamp', ], 'supportedUntil' => [ 'shape' => 'Timestamp', ], 'validationStatus' => [ 'shape' => 'SoftwareSetValidationStatus', ], 'software' => [ 'shape' => 'SoftwareList', ], 'arn' => [ 'shape' => 'Arn', ], 'tags' => [ 'shape' => 'TagsMap', ], ], ], 'SoftwareSetId' => [ 'type' => 'string', 'pattern' => '[0-9]{1,9}', ], 'SoftwareSetIdOrEmptyString' => [ 'type' => 'string', 'pattern' => '[0-9]{0,9}', ], 'SoftwareSetList' => [ 'type' => 'list', 'member' => [ 'shape' => 'SoftwareSetSummary', ], ], 'SoftwareSetSummary' => [ 'type' => 'structure', 'members' => [ 'id' => [ 'shape' => 'SoftwareSetId', ], 'version' => [ 'shape' => 'String', ], 'releasedAt' => [ 'shape' => 'Timestamp', ], 'supportedUntil' => [ 'shape' => 'Timestamp', ], 'validationStatus' => [ 'shape' => 'SoftwareSetValidationStatus', ], 'arn' => [ 'shape' => 'Arn', ], ], ], 'SoftwareSetUpdateMode' => [ 'type' => 'string', 'enum' => [ 'USE_LATEST', 'USE_DESIRED', ], ], 'SoftwareSetUpdateSchedule' => [ 'type' => 'string', 'enum' => [ 'USE_MAINTENANCE_WINDOW', 'APPLY_IMMEDIATELY', ], ], 'SoftwareSetUpdateStatus' => [ 'type' => 'string', 'enum' => [ 'AVAILABLE', 'IN_PROGRESS', 'UP_TO_DATE', ], ], 'SoftwareSetValidationStatus' => [ 'type' => 'string', 'enum' => [ 'VALIDATED', 'NOT_VALIDATED', ], ], 'String' => [ 'type' => 'string', ], 'TagKeys' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], 'sensitive' => true, ], 'TagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tags', ], 'members' => [ 'resourceArn' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'resourceArn', ], 'tags' => [ 'shape' => 'TagsMap', ], ], ], 'TagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'TagsMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'String', ], 'value' => [ 'shape' => 'String', ], 'sensitive' => true, ], 'TargetDeviceStatus' => [ 'type' => 'string', 'enum' => [ 'DEREGISTERED', 'ARCHIVED', ], ], 'ThrottlingException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], 'serviceCode' => [ 'shape' => 'ServiceCode', ], 'quotaCode' => [ 'shape' => 'QuotaCode', ], 'retryAfterSeconds' => [ 'shape' => 'RetryAfterSeconds', 'location' => 'header', 'locationName' => 'Retry-After', ], ], 'error' => [ 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, ], 'Timestamp' => [ 'type' => 'timestamp', ], 'UntagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tagKeys', ], 'members' => [ 'resourceArn' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'resourceArn', ], 'tagKeys' => [ 'shape' => 'TagKeys', 'location' => 'querystring', 'locationName' => 'tagKeys', ], ], ], 'UntagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'UpdateDeviceRequest' => [ 'type' => 'structure', 'required' => [ 'id', ], 'members' => [ 'id' => [ 'shape' => 'DeviceId', 'location' => 'uri', 'locationName' => 'id', ], 'name' => [ 'shape' => 'DeviceName', ], 'desiredSoftwareSetId' => [ 'shape' => 'SoftwareSetId', ], 'softwareSetUpdateSchedule' => [ 'shape' => 'SoftwareSetUpdateSchedule', ], ], ], 'UpdateDeviceResponse' => [ 'type' => 'structure', 'members' => [ 'device' => [ 'shape' => 'DeviceSummary', ], ], ], 'UpdateEnvironmentRequest' => [ 'type' => 'structure', 'required' => [ 'id', ], 'members' => [ 'id' => [ 'shape' => 'EnvironmentId', 'location' => 'uri', 'locationName' => 'id', ], 'name' => [ 'shape' => 'EnvironmentName', ], 'desktopArn' => [ 'shape' => 'Arn', ], 'desktopEndpoint' => [ 'shape' => 'DesktopEndpoint', ], 'softwareSetUpdateSchedule' => [ 'shape' => 'SoftwareSetUpdateSchedule', ], 'maintenanceWindow' => [ 'shape' => 'MaintenanceWindow', ], 'softwareSetUpdateMode' => [ 'shape' => 'SoftwareSetUpdateMode', ], 'desiredSoftwareSetId' => [ 'shape' => 'SoftwareSetIdOrEmptyString', ], 'deviceCreationTags' => [ 'shape' => 'DeviceCreationTagsMap', ], ], ], 'UpdateEnvironmentResponse' => [ 'type' => 'structure', 'members' => [ 'environment' => [ 'shape' => 'EnvironmentSummary', ], ], ], 'UpdateSoftwareSetRequest' => [ 'type' => 'structure', 'required' => [ 'id', 'validationStatus', ], 'members' => [ 'id' => [ 'shape' => 'SoftwareSetId', 'location' => 'uri', 'locationName' => 'id', ], 'validationStatus' => [ 'shape' => 'SoftwareSetValidationStatus', ], ], ], 'UpdateSoftwareSetResponse' => [ 'type' => 'structure', 'members' => [], ], 'ValidationException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], 'reason' => [ 'shape' => 'ValidationExceptionReason', ], 'fieldList' => [ 'shape' => 'ValidationExceptionFieldList', ], ], 'error' => [ 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'ValidationExceptionField' => [ 'type' => 'structure', 'required' => [ 'name', 'message', ], 'members' => [ 'name' => [ 'shape' => 'FieldName', ], 'message' => [ 'shape' => 'ExceptionMessage', ], ], ], 'ValidationExceptionFieldList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ValidationExceptionField', ], ], 'ValidationExceptionReason' => [ 'type' => 'string', 'enum' => [ 'unknownOperation', 'cannotParse', 'fieldValidationFailed', 'other', ], ], ],];
