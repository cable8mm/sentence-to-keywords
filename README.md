[![CS Fixer](https://github.com/cable8mm/sentence-to-keywords/actions/workflows/php-coding-style-fixer.yml/badge.svg)](https://github.com/cable8mm/sentence-to-keywords/actions/workflows/php-coding-style-fixer.yml)
[![Test](https://github.com/cable8mm/sentence-to-keywords/actions/workflows/php-test.yml/badge.svg)](https://github.com/cable8mm/sentence-to-keywords/actions/workflows/php-test.yml)
[![Latest Stable Version](http://poser.pugx.org/cable8mm/sentence-to-keywords/v)](https://packagist.org/packages/cable8mm/sentence-to-keywords)
[![Total Downloads](http://poser.pugx.org/cable8mm/sentence-to-keywords/downloads)](https://packagist.org/packages/cable8mm/sentence-to-keywords)
[![Latest Unstable Version](http://poser.pugx.org/cable8mm/sentence-to-keywords/v/unstable)](https://packagist.org/packages/cable8mm/sentence-to-keywords)
[![License](http://poser.pugx.org/cable8mm/sentence-to-keywords/license)](https://packagist.org/packages/cable8mm/sentence-to-keywords)
[![PHP Version Require](http://poser.pugx.org/cable8mm/sentence-to-keywords/require/php)](https://packagist.org/packages/cable8mm/sentence-to-keywords)

## About

Use a search engine(naver.com) to extract important keywords from sentences and correct typos.

## Installation

```sh
composer require cable8mm/sentence-to-keywords
```

## Usage

```php
print_r(new ToWords('사칙연산 잘 하는 법));
```

    Array
    (
        [0] => 사칙연산
        [1] => 하는
        [2] => 연산
        [3] => 잘
        [4] => 하는법
        [5] => 사칙연산잘하는법
        [6] => 법
        [7] => 사칙 연산
    )

```php
print_r(new ToWords('키우기 좋은 견종));
```

    Array
    (
        [0] => 견종
        [1] => 키우기 좋은 견종
        [2] => 키우기
        [3] => 좋은
        [4] => 키우기좋은견종
        [5] => 키우기 좋은
        [6] => 기르기
        [7] => 좋은 견종
    )

```php
print_r(new ToWords('오스트렐리아 영어 스픽킹));
```

    Array
    (
        [0] => 영어
        [1] => 스피킹
        [2] => 오스트레일리아
    )

## Fix coding style

```sh
composer lint
```

## Test

```sh
composer test
```

## License

The Sentence To Keywords is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
