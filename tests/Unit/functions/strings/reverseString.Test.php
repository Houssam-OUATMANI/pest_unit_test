<?php 
include "./src/functions/strings/reverseString.php";

describe("reverseString", function() {

    it(' Input: "abcd" → Expected output: "dcba"', function () {

        // Arrange 
            $name = "abcd";
        // ACT 
            $result = reverseString($name);
        // ASSERT 
            expect($result)->toBe("dcba");
    });
    
});