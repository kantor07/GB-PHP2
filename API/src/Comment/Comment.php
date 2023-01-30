<?php

namespace GB\API\Comment;

use GB\API\Article\Article;
use GB\API\User\User;

class Comment 
{
    private int $id;
    private int $authorId;
    private int $articleId;
    private string $description;

    public function __construct(string $description){
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
	public function getAuthorId(User $user): self {
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
     * @param Article $article 
	 * @return self
	 */
	public function getArticleId(Article $article): self {
        $this->articleId = $article->getId();
		return $this;
	}
	
	/**
	 * @param int $articleId 
	 * @return self
	 */
	public function setArticleId(int $articleId): self {
		$this->articleId = $articleId;
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