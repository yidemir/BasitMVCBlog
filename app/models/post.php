<?php

class post extends model
{
	/**
	 * Bütün gönderiler
	 * @return void
	 */
	public function getAll()
	{
		return $this->fetchAll('SELECT * FROM post ORDER BY created DESC');
	}

	/**
	 * Etikete göre gönderiler
	 * @param string $tag
	 * @return void
	 */
	public function getAllByTags($tag)
	{
		return $this->fetchAll('SELECT * FROM post WHERE FIND_IN_SET(?, tags) ORDER BY created DESC', [$tag]);
	}

	/**
	 * ID'ye göre bir gönderi
	 * @param integer $id
	 * @return void
	 */
	public function get($id)
	{
		return $this->fetch('SELECT * FROM post WHERE id=?', [$id]);
	}

	/**
	 * Yeni gönderi
	 * @param string $title
	 * @param string $body
	 * @param string $tags
	 * @param datetime $created
	 * @return void
	 */
	public function create($title, $body, $tags, $created)
	{
		return $this->query(
			'INSERT INTO post (title, body, tags, created) VALUES (?, ?, ?, ?)', 
			[$title, $body, $tags, $created]
		);
	}

	/**
	 * Gönderi siler
	 * @param integer $id
	 * @return void
	 */
	public function delete($id)
	{
		return $this->query('DELETE FROM post WHERE id=?', [$id]);
	}
}
