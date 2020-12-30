## Installation
```
composer.sh require --dev codeception/module-asserts
composer.sh require --dev codeception/module-db
composer.sh require --dev codeception/module-webdriver
```

**Create Bootstrap Files (Only in first installation)**
```
 php vendor/bin/codecept bootstrap
 ```
and move codeception.yml and tests folder under customer

## Usage:

Generate Cest (Acceptance TEst)
```
 php vendor/bin/codecept -c codeception.yml generate:cest acceptance Account/StepB/Addresse
```

Run all Tests
```
 php vendor/bin/codecept -c codeception.yml run
```

Run only one Tests or all Tests under one Directory
```
php vendor/bin/codecept -c codeception.yml run tests/acceptance/Account
```

Clean everything(cache, results, error logs, screenshots, etc.) from last Test 
```
php vendor/bin/codecept -c codeception.yml clean
```
