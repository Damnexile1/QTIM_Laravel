<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    public function __construct(array $attributes = [], $title = '', $content = '', $description = '', $image = '')
    {
        parent::__construct($attributes);
        $this->title = $title;
        $this->content = $content;
        $this->description = $description;
        $this->image = $image;

    }

    use HasFactory;
    use SoftDeletes;


    protected $table = 'posts';
    protected $guarded = false;


    public string $title;
    public string $content;
    public string $description;
    public string $image;


    /**
     * @return array
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param $title
     * @return void
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param $content
     * @return void
     */
    public function setContent($content): void
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param $description
     * @return void
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param $image
     * @return void
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }

}
