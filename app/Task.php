<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Task
 *
 * @package App
 * @property string $title
 * @property string $project
 * @property string $link
 * @property string $description
 * @property string $time_needed
*/
class Task extends Model
{
    use SoftDeletes;

    
    protected $fillable = ['title', 'project', 'link', 'description', 'time_needed'];
    

    public static function storeValidation($request)
    {
        return [
            'title' => 'max:191|nullable',
            'project' => 'max:191|nullable',
            'link' => 'max:191|nullable',
            'description' => 'max:191|nullable',
            'time_needed' => 'max:191|nullable'
        ];
    }

    public static function updateValidation($request)
    {
        return [
            'title' => 'max:191|nullable',
            'project' => 'max:191|nullable',
            'link' => 'max:191|nullable',
            'description' => 'max:191|nullable',
            'time_needed' => 'max:191|nullable'
        ];
    }

    

    
    
    
}
