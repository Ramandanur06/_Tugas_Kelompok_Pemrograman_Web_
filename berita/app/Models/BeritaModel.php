<?php
namespace App\Models;

use CodeIgniter\Model;

class BeritaModel extends Model
{
    protected $table = 'berita';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'slug', 'content', 'created_at', 'updated_at', 'featured_image'];
    protected $useTimestamps = true;
}
