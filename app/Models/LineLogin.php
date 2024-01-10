<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LineLogin extends Model
{
    use HasFactory;

    protected $fillable = ['line_user_id', 'display_name', 'picture_url'];
}

