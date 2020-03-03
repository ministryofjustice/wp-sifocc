# SIFoCC (Standing International Forum of Criminal Courts)

* Production: https://www.sifocc.org/
* Staging: https://sifocc.staging.dxw.net/

Please use `master/develop` branches

## Project management

* [Trello](https://trello.com/b/yzBEaU3x/sifocc-sprints)

## Ghost Inspector tests

None yet.

## Browser support

* Front-end: https://www.gov.uk/service-manual/technology/designing-for-different-browsers-and-devices (assumed)
* Back-end: Unknown

## Development

[`whippet`](https://github.com/dxw/whippet) and [`wpc`](https://github.com/dxw/wpc)

### Install dependencies

`composer install`
`npm install`

### Run tests

`vendor/bin/peridot spec`
`vendor/bin/php-cs-fixer fix --dry-run`

## Set up

- Run `docker-compose up -d`
- If you haven't run the site before, run `bin/setup`
