<?php


include "./src/functions/numbers/calculateAverage.php";

describe("calculateAverage", function() {

    it(' Input: [1, 2, 3, 4, 5] → Expected output: 3.0', function () {

        // Arrange 
            $value = [1, 2, 3, 4, 5];
        // ACT 
            $result = calculateAverage($value);
        // ASSERT 
            expect($result)->toBe(3.0);

    });


    it(' Input: [] → Expected output: Exception', function () {

        // Arrange 
            $value = [];
            expect(fn () => calculateAverage($value))->toThrow(InvalidArgumentException::class);

    });
    
   


});