<?php 
include "./src/functions/strings/getWelcomeMessage.php";

describe("getWelcomeMessage", function() {

    it("Input: 'john' → Expected output: 'Welcome, John!'", function () {

        // Arrange 
            $name = "John";
        // ACT 
            $result = getWelcomeMessage($name);
        // ASSERT 
            expect($result)->toBe("Welcome, John!");
    });
    
});