<?php 
include "./src/functions/strings/generateGreeting.php";

describe("generateGreeting", function() {

    it('  Input: ("John", "09:00") → Expected output: "Good morning, John!"', function () {

        // Arrange 
            $name = "John";
            $time = "09:00";
        // ACT 
            $result = generateGreeting($name, $time);
        // ASSERT 
            expect($result)->toBe("Good morning, John!");
    });


    it('Input: ("Alice", "15:00") → Expected output: "Good afternoon, Alice!"', function () {

        // Arrange 
            $name = "Alice";
            $time = "15:00";
        // ACT 
            $result = generateGreeting($name, $time);
        // ASSERT 
            expect($result)->toBe("Good afternoon, Alice!");
    });


    it('Input: ("Bob", "20:30") → Expected output: "Good evening, Bob!"', function () {

        // Arrange 
            $name = "Bob";
            $time = "20:30";
        // ACT 
            $result = generateGreeting($name, $time);
        // ASSERT 
            expect($result)->toBe("Good evening, Bob!");
    });
    
});