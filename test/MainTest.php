<?php

class MainTest extends WebTestCase {
    public function testHello() {
        $client = $this->createClient();
        $crawler = $client->request('GET', '/hello/world');

        $this->assertTrue($client->getResponse()->isOk());
        $this->assertCount(1, $crawler->filter('h1:contains("World")'));
    }
}
