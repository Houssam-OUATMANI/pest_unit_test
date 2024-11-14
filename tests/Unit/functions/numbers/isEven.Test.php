<?php 
include "./src/functions/numbers/isEven.php";

describe("isEven", function() {

    it(' Input: 4 → Expected output: true"', function () {

        // Arrange 
            $value = 4;
        // ACT 
            $result = isEven($value);
        // ASSERT 
            expect($result)->toBeTrue();
            expect($result)->not->toBeFalse();
    });



    it('Input: 7 → Expected output: false', function () {

        // Arrange 
            $value = 7;
        // ACT 
            $result = isEven($value);
        // ASSERT 
            expect($result)->toBeFalse();
            expect($result)->not->toBeTrue();
    });
    


});