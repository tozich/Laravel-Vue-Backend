<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Receipt
 *
 * @package App
 * @property string $title
 * @property string $description
 * @property string $technologies
 * @property string $project_duration
 * @property string $working_hours
 * @property string $price
*/
class Receipt extends Model
{
    use SoftDeletes;

    
    protected $fillable = ['title', 'description', 'technologies', 'project_duration', 'working_hours', 'price'];
    

    public static function storeValidation($request)
    {
        return [
            'title' => 'max:191|nullable',
            'description' => 'max:191|nullable',
            'technologies' => 'max:191|nullable',
            'project_duration' => 'max:191|nullable',
            'working_hours' => 'max:191|nullable',
            'price' => 'max:191|nullable'
        ];
    }

    public static function updateValidation($request)
    {
        return [
            'title' => 'max:191|nullable',
            'description' => 'max:191|nullable',
            'technologies' => 'max:191|nullable',
            'project_duration' => 'max:191|nullable',
            'working_hours' => 'max:191|nullable',
            'price' => 'max:191|nullable'
        ];
    }

    

    
    
    
}
