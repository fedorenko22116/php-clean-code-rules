# php-clean-code-rules
This repository contains the most respectful (by the author meaning) rules for linters and static code analysers.

This ruleset aims to transform the code to be like it was written by a single man improving readability and 
security of the whole project.

It covers `psr-12`,  `symfony` and a lot of modern PHP features thanks to `slevomat` project.
## Installation

```shell script
composer require lsbproject/php-clean-code-rules --dev
```

## Usage

Include in your project a `phpcs.xml` file with the following code:
```xml
<?xml version="1.0"?>
<ruleset name="AcmeApp">
    <config name="installed_paths" value="vendor/lsbproject/php-clean-code-rules" />
    <rule ref="LSBProject" />
</ruleset>
```
