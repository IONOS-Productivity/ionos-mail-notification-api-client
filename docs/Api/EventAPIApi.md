# IONOS\MailNotificationAPI\Client\EventAPIApi

All URIs are relative to https://productivityqa.icaas.server.lan:10443/easynextcloud-mail-notification, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**processRemoteWipeFinishedEvent()**](EventAPIApi.md#processRemoteWipeFinishedEvent) | **POST** /event/{brand}/remote-wipe-finished | Nextlcoud user gets informed that a remote wipe for a specific device has finished |
| [**processRemoteWipeStartedEvent()**](EventAPIApi.md#processRemoteWipeStartedEvent) | **POST** /event/{brand}/remote-wipe-started | Nextlcoud user started a remote wipe for a specific device |
| [**processShareByLinkEvent()**](EventAPIApi.md#processShareByLinkEvent) | **POST** /event/{brand}/share-by-link | Nextlcoud user shared a file with other users via list of receiver email addresses |
| [**processShareWithOtherUsersEvent()**](EventAPIApi.md#processShareWithOtherUsersEvent) | **POST** /event/{brand}/share-with-other-users | Nextlcoud user shared a file with other users via list of receiver user ids in uuid format |


## `processRemoteWipeFinishedEvent()`

```php
processRemoteWipeFinishedEvent($brand, $wipe_message)
```

Nextlcoud user gets informed that a remote wipe for a specific device has finished

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IONOS\MailNotificationAPI\Client\Api\EventAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$brand = 'brand_example'; // string
$wipe_message = new \IONOS\MailNotificationAPI\Client\Model\WipeMessage(); // \IONOS\MailNotificationAPI\Client\Model\WipeMessage

try {
    $apiInstance->processRemoteWipeFinishedEvent($brand, $wipe_message);
} catch (Exception $e) {
    echo 'Exception when calling EventAPIApi->processRemoteWipeFinishedEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **brand** | **string**|  | |
| **wipe_message** | [**\IONOS\MailNotificationAPI\Client\Model\WipeMessage**](../Model/WipeMessage.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `processRemoteWipeStartedEvent()`

```php
processRemoteWipeStartedEvent($brand, $wipe_message)
```

Nextlcoud user started a remote wipe for a specific device

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IONOS\MailNotificationAPI\Client\Api\EventAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$brand = 'brand_example'; // string
$wipe_message = new \IONOS\MailNotificationAPI\Client\Model\WipeMessage(); // \IONOS\MailNotificationAPI\Client\Model\WipeMessage

try {
    $apiInstance->processRemoteWipeStartedEvent($brand, $wipe_message);
} catch (Exception $e) {
    echo 'Exception when calling EventAPIApi->processRemoteWipeStartedEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **brand** | **string**|  | |
| **wipe_message** | [**\IONOS\MailNotificationAPI\Client\Model\WipeMessage**](../Model/WipeMessage.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `processShareByLinkEvent()`

```php
processShareByLinkEvent($brand, $share_message_by_link)
```

Nextlcoud user shared a file with other users via list of receiver email addresses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IONOS\MailNotificationAPI\Client\Api\EventAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$brand = 'brand_example'; // string
$share_message_by_link = new \IONOS\MailNotificationAPI\Client\Model\ShareMessageByLink(); // \IONOS\MailNotificationAPI\Client\Model\ShareMessageByLink

try {
    $apiInstance->processShareByLinkEvent($brand, $share_message_by_link);
} catch (Exception $e) {
    echo 'Exception when calling EventAPIApi->processShareByLinkEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **brand** | **string**|  | |
| **share_message_by_link** | [**\IONOS\MailNotificationAPI\Client\Model\ShareMessageByLink**](../Model/ShareMessageByLink.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `processShareWithOtherUsersEvent()`

```php
processShareWithOtherUsersEvent($brand, $share_message_with_other_user)
```

Nextlcoud user shared a file with other users via list of receiver user ids in uuid format

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IONOS\MailNotificationAPI\Client\Api\EventAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$brand = 'brand_example'; // string
$share_message_with_other_user = new \IONOS\MailNotificationAPI\Client\Model\ShareMessageWithOtherUser(); // \IONOS\MailNotificationAPI\Client\Model\ShareMessageWithOtherUser

try {
    $apiInstance->processShareWithOtherUsersEvent($brand, $share_message_with_other_user);
} catch (Exception $e) {
    echo 'Exception when calling EventAPIApi->processShareWithOtherUsersEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **brand** | **string**|  | |
| **share_message_with_other_user** | [**\IONOS\MailNotificationAPI\Client\Model\ShareMessageWithOtherUser**](../Model/ShareMessageWithOtherUser.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
