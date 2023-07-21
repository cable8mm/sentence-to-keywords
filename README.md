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

## License

The Sentence To Keywords is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
