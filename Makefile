
.PHONY: help php

help: ## This help.
	@echo "Usage: make [target]"
	@echo ""
	@awk 'BEGIN {FS = ":.*?## "} /^[a-zA-Z_-]+:.*?## / {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}' $(MAKEFILE_LIST)

php: ## Generate PHP client
	./node_modules/.bin/openapi-generator-cli generate \
	--skip-validate-spec \
	-i .openapi-easynextcloud-mail-notification.yaml \
	-g php \
	-o . \
	-c ./openapi-generator/php_lang.yaml
