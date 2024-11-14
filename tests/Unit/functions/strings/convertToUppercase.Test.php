<?php 
include "./src/functions/strings/convertToUppercase.php";

describe("convertToUppercase", function() {

    it('Input: "hello" → Expected output: "HELLO"', function () {

        // Arrange 
            $value = "hello";
        // ACT 
            $result = convertToUppercase($value);
        // ASSERT 
            expect($result)->toBe("HELLO");
    });
    
});