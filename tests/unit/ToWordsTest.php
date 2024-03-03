<?php

declare(strict_types=1);

use Cable8mm\SentenceToWords\ToWords;
use PHPUnit\Framework\TestCase;

class ToWordsTest extends TestCase
{
    public function test_GetGoodWordsAboutDog()
    {
        // Arrange
        $in = '키우기 좋은 견종';

        // Act
        $toWords = new ToWords($in);

        $words = $toWords->toArray();

        // Assert
        $this->assertContains('견종', $words);
        $this->assertContains('키우기 좋은 견종', $words);
        $this->assertContains('키우기', $words);
    }

    public function test_GetGoodWordsAboutMath()
    {
        // Arrange
        $in = '사칙연산 잘 하는 법';

        // Act
        $toWords = new ToWords($in);

        $words = $toWords->toArray();

        // Assert
        $this->assertContains('연산', $words);
        $this->assertContains('사칙연산', $words);
    }

    public function test_GetGoodWordsAboutTypo()
    {
        // Arrange
        $in = '오스트렐리아 영어 스피킹';

        // Act
        $toWords = new ToWords($in);

        $words = $toWords->toArray();

        // Assert
        $this->assertContains('영어', $words);
        $this->assertContains('오스트레일리아', $words);
        $this->assertContains('스피킹', $words);
    }
}
