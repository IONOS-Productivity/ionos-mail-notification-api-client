#!/bin/bash

required_cli_apps=(curl)

output_file=".openapi-easynextcloud-mail-notification.yaml"

help() {
	echo "Usage: $0 <host>"
	echo "  host: The host where the API spec is hosted"
	echo "  Example: $0 api.example.lan:10443"
	echo "           export API_SPEC_USER=<user> API_SPEC_PASSWORD=<pass>; ./$0 api.example.lan:10443"
}

if [ $# -eq 0 ]; then
	help
	exit 1
fi

for required_cli_apps in "${required_cli_apps[@]}"; do
	which "${required_cli_apps}" >/dev/null
	if [ ! $? -eq 0 ]; then
		echo "[e] ERROR: requirement ${REQ} is missing"
		exit 1
	fi
done

API_SPEC_HOST=$1
API_SPEC="https://${API_SPEC_HOST}/easynextcloud-mail-notification/api-docs.yaml"

echo "Update API client for EasyNextcloud Mail Notification API"
echo "API Spec: ${API_SPEC}"

auth_cli_args=""

if [ -n "${API_SPEC_USER}" ] && [ -n "${API_SPEC_PASSWORD}" ]; then
	auth_cli_args="-u $API_SPEC_USER:$API_SPEC_PASSWORD"
fi

curl --progress-bar "${auth_cli_args}" --insecure "${API_SPEC}" -o "${output_file}"

if [ ! -f "${output_file}" ]; then
	echo "Failed to download API spec"
	exit 1
fi

if grep -q "Bad credentials" "${output_file}"; then
	echo "[e] failed to download API spec: Bad credentials"
	exit 1
fi

echo "Sanitize ${output_file}:"

echo "   - Replace https://${API_SPEC_HOST} with https://API_HOST"
sed -i "s|https://${API_SPEC_HOST}|https://API_HOST|g" "${output_file}"
