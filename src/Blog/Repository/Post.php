<?php
declare(strict_types=1);

namespace Blog\Repository;

class Post implements \IteratorAggregate
{
    /**
     * @inheritDoc
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->getPostList());
    }

    /**
     * @return \Blog\Model\Post[]
     */
    public function getPostList(): array
    {
        $postsList = [];

        foreach ($this->getFromDatabase() as $postData) {
            $post = new \Blog\Model\Post();
            $post->setName($postData['name'])
                ->setImage($postData['image'])
                ->setShortDescription($postData['shortDescription']);
            $postsList[] = $post;
        }

        return $postsList;
    }

    /**
     * @TODO: implement reas interaction with database
     * @return array
     */
    private function getFromDatabase(): array
    {
        return [
            [
                'name' => 'will Galaxy Note 10 blow in your pocket?',
                'image' => '/images/galaxy_note_10.jpg',
                'shortDescription' => 'Did Samsung fix the battery in Notes?'
            ],
            [
                'name' => 'iPhone 11 and it\'s strange cameras',
                'image' => '/images/iphone_11.jpg',
                'shortDescription' => 'Can new iPhone be more ridiculous?'
            ],
            [
                'name' => 'will Galaxy Note 10 blow in your pocket?',
                'image' => '/images/galaxy_note_10.jpg',
                'shortDescription' => 'Did Samsung fix the battery in Notes?'
            ],
            [
                'name' => 'iPhone 11 and it\'s strange cameras',
                'image' => '/images/iphone_11.jpg',
                'shortDescription' => 'Can new iPhone be more ridiculous?'
            ]
        ];
    }
}
