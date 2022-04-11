# Freshwork-Laravel

## Installation

```shell
composer require ahmedd-ibrahim/freshwork
```
## ENV


```
FRESHWORK_API_KEY=
FRESHWORK_APP_TOKEN=
FRESHWORK_DOMAIN=
```


## Usage

```
<?php

$record = new Record();
$record->setFieldValue('email', User::find(1)->email);
Freshwork::contact()->create($record);

```
