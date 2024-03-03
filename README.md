# Sentence To Keywords

[![CS Fixer](https://github.com/cable8mm/sentence-to-keywords/actions/workflows/php-coding-style-fixer.yml/badge.svg)](https://github.com/cable8mm/sentence-to-keywords/actions/workflows/php-coding-style-fixer.yml)
[![Test](https://github.com/cable8mm/sentence-to-keywords/actions/workflows/php-test.yml/badge.svg)](https://github.com/cable8mm/sentence-to-keywords/actions/workflows/php-test.yml)
![GitHub Release](https://img.shields.io/github/v/release/cable8mm/sentence-to-keywords?logo=packagist&color=F28D1A)
![Packagist Downloads](https://img.shields.io/packagist/dt/cable8mm/sentence-to-keywords?logo=packagist&color=F28D1A)
![minimum PHP version](https://img.shields.io/badge/php-%3E%3D_8.0-8892BF.svg?logo=php)
![GitHub License](https://img.shields.io/github/license/cable8mm/sentence-to-keywords)

사용자가 검색창에 검색어를 넣을 경우, 오타 혹은 문장을 단어로 변환하여 검색을 해야 합니다. 자연어 처리 보다 간단하게 국내 검색엔진의 결과를 파싱한 후 중요 단어를 얻을 수 있습니다.

Use a search engine(naver.com) to extract important keywords from sentences and correct typos.

## Features

- [x] 오타도 높은 확률로 수정
- [x] 긴 문장에서도 중요 키워드를 얻을 수 있음
- [x] 데이터베이스 사용 없음
- [x] 인증키 없음

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
