# IONOS\MailNotificationAPI\Client\EventAPIApi

All URIs are relative to https://API_HOST/easynextcloud-mail-notification, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**processRemoteWipeFinishedEvent()**](EventAPIApi.md#processRemoteWipeFinishedEvent) | **POST** /event/{brand}/remote-wipe-finished | Nextlcoud user gets informed that a remote wipe for a specific device has finished |
| [**processRemoteWipeStartedEvent()**](EventAPIApi.md#processRemoteWipeStartedEvent) | **POST** /event/{brand}/remote-wipe-started | Nextlcoud user started a remote wipe for a specific device |
| [**processShareByLinkEvent()**](EventAPIApi.md#processShareByLinkEvent) | **POST** /event/{brand}/share-by-link | Nextlcoud user shared a file with other users via list of receiver email addresses |
| [**processShareWithOtherUsersEvent()**](EventAPIApi.md#processShareWithOtherUsersEvent) | **POST** /event/{brand}/share-with-other-users | Nextlcoud user shared a file with other users via list of receiver user ids in uuid format |


## `processRemoteWipeFinishedEvent()`

```php
processRemoteWipeFinishedEvent($brand, $wipeMessage)
```

Nextlcoud user gets informed that a remote wipe for a specific device has finished

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic_auth
$config = IONOS\MailNotificationAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new IONOS\MailNotificationAPI\Client\Api\EventAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$brand = 'brand_example'; // string
$wipeMessage = new \IONOS\MailNotificationAPI\Client\Model\WipeMessage(); // \IONOS\MailNotificationAPI\Client\Model\WipeMessage

try {
    $apiInstance->processRemoteWipeFinishedEvent($brand, $wipeMessage);
} catch (Exception $e) {
    echo 'Exception when calling EventAPIApi->processRemoteWipeFinishedEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **brand** | **string**|  | |
| **wipeMessage** | [**\IONOS\MailNotificationAPI\Client\Model\WipeMessage**](../Model/WipeMessage.md)|  | |

### Return type

void (empty response body)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `processRemoteWipeStartedEvent()`

```php
processRemoteWipeStartedEvent($brand, $wipeMessage)
```

Nextlcoud user started a remote wipe for a specific device

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic_auth
$config = IONOS\MailNotificationAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new IONOS\MailNotificationAPI\Client\Api\EventAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$brand = 'brand_example'; // string
$wipeMessage = new \IONOS\MailNotificationAPI\Client\Model\WipeMessage(); // \IONOS\MailNotificationAPI\Client\Model\WipeMessage

try {
    $apiInstance->processRemoteWipeStartedEvent($brand, $wipeMessage);
} catch (Exception $e) {
    echo 'Exception when calling EventAPIApi->processRemoteWipeStartedEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **brand** | **string**|  | |
| **wipeMessage** | [**\IONOS\MailNotificationAPI\Client\Model\WipeMessage**](../Model/WipeMessage.md)|  | |

### Return type

void (empty response body)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `processShareByLinkEvent()`

```php
processShareByLinkEvent($brand, $shareMessageByLink)
```

Nextlcoud user shared a file with other users via list of receiver email addresses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic_auth
$config = IONOS\MailNotificationAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new IONOS\MailNotificationAPI\Client\Api\EventAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$brand = 'brand_example'; // string
$shareMessageByLink = new \IONOS\MailNotificationAPI\Client\Model\ShareMessageByLink(); // \IONOS\MailNotificationAPI\Client\Model\ShareMessageByLink

try {
    $apiInstance->processShareByLinkEvent($brand, $shareMessageByLink);
} catch (Exception $e) {
    echo 'Exception when calling EventAPIApi->processShareByLinkEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **brand** | **string**|  | |
| **shareMessageByLink** | [**\IONOS\MailNotificationAPI\Client\Model\ShareMessageByLink**](../Model/ShareMessageByLink.md)|  | |

### Return type

void (empty response body)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `processShareWithOtherUsersEvent()`

```php
processShareWithOtherUsersEvent($brand, $shareMessageWithOtherUser)
```

Nextlcoud user shared a file with other users via list of receiver user ids in uuid format

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic_auth
$config = IONOS\MailNotificationAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new IONOS\MailNotificationAPI\Client\Api\EventAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$brand = 'brand_example'; // string
$shareMessageWithOtherUser = new \IONOS\MailNotificationAPI\Client\Model\ShareMessageWithOtherUser(); // \IONOS\MailNotificationAPI\Client\Model\ShareMessageWithOtherUser

try {
    $apiInstance->processShareWithOtherUsersEvent($brand, $shareMessageWithOtherUser);
} catch (Exception $e) {
    echo 'Exception when calling EventAPIApi->processShareWithOtherUsersEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **brand** | **string**|  | |
| **shareMessageWithOtherUser** | [**\IONOS\MailNotificationAPI\Client\Model\ShareMessageWithOtherUser**](../Model/ShareMessageWithOtherUser.md)|  | |

### Return type

void (empty response body)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
