<?php
declare(strict_types=1);

namespace Blog\Model;

class Post
{
    /**
     * @var string $name
     */
    private $name;

    /**
     * @var string
     */
    private $image;

    /**
     * @var string
     */
    private $shortDescription;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Post
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     * @return Post
     */
    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return string
     */
    public function getShortDescription(): string
    {
        return $this->shortDescription;
    }

    /**
     * @param string $shortDescription
     * @return Post
     */
    public function setShortDescription(string $shortDescription): self
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }
}
