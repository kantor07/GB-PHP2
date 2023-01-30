<?php

namespace GB\API\Article;

use GB\API\User\User;

class Article 
{
    private int $id;
    private int $authorId;
    private string $title;
    private string $description;

    public function __construct(string $description) {
        $this->description = $description;
    }


	/**
	 * @return int
	 */
	public function getId(): int {
		return $this->id;
	}

	/**
	 * @param int $id 
	 * @return self
	 */
	public function setId(int $id): self {
		$this->id = $id;
		return $this;
	}

	/**
	 * @param User $user 
	 * @return self
	 */
	public function getAuthorId(User $user): self  {
		$this->authorId = $user->getId();
        return $this;
	}

	/**
	 * @param int $authorId 
	 * @return self
	 */
	public function setAuthorId(int $authorId): self {
		$this->authorId = $authorId;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * @param mixed $title 
	 * @return self
	 */
	public function setTitle($title): self {
		$this->title = $title;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getDescription(): string {
		return $this->description;
	}

	/**
	 * @param string $description 
	 * @return self
	 */
	public function setDescription(string $description): self {
		$this->description = $description;
		return $this;
	}
}