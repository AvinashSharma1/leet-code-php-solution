# Use build arguments to select PHP version
# Default is 7.4.33, can override with --build-arg PHP_VERSION=8.4-rc
ARG PHP_VERSION=7.4.33
FROM php:${PHP_VERSION}-cli

WORKDIR /app
COPY . /app

CMD ["php", "217 Contains Duplicate/Solution1.php"]
