<?php 
include "./src/functions/numbers/getSquare.php";

describe("getSquare", function() {

    it(' Input: 4 → Expected output: true', function () {

        // Arrange 
            $value = 4;
        // ACT 
            $result = getSquare($value);
        // ASSERT 
            expect($result)->toBeInt()->toBe(16);
           // expect($result)->toBeInt();
    });


    it('Input: 2.5 → Expected output: 6.25', function () {

        // Arrange 
            $value = 2.5;
        // ACT 
            $result = getSquare($value);
        // ASSERT 
            expect($result)->toBeFloat()->toBe(6.25);
           // expect($result)->toBeInt();
    });

    
});