<?php

use phpDocumentor\Reflection\DocBlock\Tags\InvalidTag;

include "./src/functions/numbers/calculateFactorial.php";

describe("calculateFactorial", function() {

    it('Input: 5 → Expected output: 120', function () {

        // Arrange 
            $value = 5;
        // ACT 
            $result = calculateFactorial($value);
        // ASSERT 
            expect($result)->toBe(120);

    });
    
    it(' Input: 0 → Expected output: 1', function () {

        // Arrange 
            $value = 0;
        // ACT 
            $result = calculateFactorial($value);
        // ASSERT 
            expect($result)->toBe(1);

    });

    it('Input: -1 → Expected output: Exception', function () {

        // Arrange 
            $value = -1;
            expect(fn () => calculateFactorial(-1))->toThrow(InvalidArgumentException::class);
    });


});