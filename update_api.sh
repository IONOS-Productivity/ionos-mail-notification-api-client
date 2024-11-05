#!/bin/bash

required_cli_apps=( wget podman )

help() {
	echo "Usage: $0 <host>"
	echo "  host: The host where the API spec is hosted"
	echo "  Example: $0 api.example.lan:10443"
}

if [ $# -eq 0 ]; then
	help
	exit 1
fi

for required_cli_apps in "${required_cli_apps[@]}"
do
  which "${required_cli_apps}" >/dev/null
  if [ ! $? -eq 0 ]; then
    echo "[e] ERROR: requirement ${REQ} is missing"
    exit 1
  fi
done


API_SPEC_HOST=$1
API_SPEC="https://${API_SPEC_HOST}/easynextcloud-mail-notification/api-docs/default"

echo "Update API client for EasyNextcloud Mail Notification API"
echo "API Spec: ${API_SPEC}"

wget --no-check-certificate  ${API_SPEC} -O .openapi-easynextcloud-mail-notification.json

echo "Sanitize .openapi-easynextcloud-mail-notification.json"
sed -i "s|https://${API_SPEC_HOST}|https://API_HOST|g" .openapi-easynextcloud-mail-notification.json

echo "Generate API client"
podman run --rm -v "${PWD}:/local" openapitools/openapi-generator-cli generate \
-i /local/.openapi-easynextcloud-mail-notification.json \
-g php \
--skip-validate-spec \
--additional-properties=\
invokerPackage=IONOS\\MailNotificationAPI\\Client\
,composerPackageName=ionos-productivity/ionos-mail-notification-api-client\
,licenseName=AGPL-3.0-or-later\
,variableNamingConvention=camelCase\
,packageName=IONOSEventNotificationHandler\
,artifactUrl=https://github.com/ionos-productivity/ionos-mail-notification-api-client/\
,developerOrganizationUrl=https://github.com/ionos-productivity/ionos-mail-notification-api-client/\
 -o /local/

echo "Cleanup .php-cs-fixer.dist.php"
sed -i '/strict_comparison/d' ./.php-cs-fixer.dist.php
sed -i '/strict_param/d' ./.php-cs-fixer.dist.php

echo "Reformat code"
if [ -f ./vendor-bin/cs-fixer/vendor/php-cs-fixer/shim/php-cs-fixer ]; then
	./vendor-bin/cs-fixer/vendor/php-cs-fixer/shim/php-cs-fixer fix
else
	echo "php-cs-fixer not found. Install it with 'composer require friendsofphp/php-cs-fixer --dev'"
fi
