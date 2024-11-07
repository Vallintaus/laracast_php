<?php

use PHPUnit\Framework\TestCase;


            class IndexTest extends TestCase
            {
                public function testBookAuthorIsAyam()
                {
                    $books = [
                        [
                            "title" => "Wau",
                            "author" => "Kucing",
                            "home" => "Kuda",
                            'url' => 'https://www.google.com'
                        ],
                        [
                            "title" => "Kambing",
                            "author" => "Ayam",
                            "home" => "Kuda",
                            'url' => 'https://www.google.com'
                        ]
                    ];

                    $filteredBooks = array_filter($books, function($book) {
                        return $book['author'] === 'Ayam';
                    });

                    $this->assertCount(1, $filteredBooks);
                    $this->assertEquals('Kambing', array_values($filteredBooks)[0]['title']);
                }
            }

            ?>