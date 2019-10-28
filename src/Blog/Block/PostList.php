<?php
declare(strict_types=1);

namespace Blog\Block;

use Blog\Repository\Post;
use Core\AbstractBlock;

class PostList  extends AbstractBlock
{
    private $blogName = 'Blog';

    /**
     * @return Post
     */
    public function getPosts(): Post
    {
        return new Post();
    }

    /**
     * @return string
     */
    public function getPageTitle(): string
    {
        return $this->blogName;
    }

    /**
     * @return string
     */
    public function getTemplate(): string
    {
        return './../templates/blog/post/list.phtml';
    }
}
