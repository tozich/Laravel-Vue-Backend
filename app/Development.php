<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Development
 *
 * @package App
 * @property string $title
 * @property string $description
 * @property string $link
 * @property string $start_date
 * @property string $end_date
*/
class Development extends Model
{
    use SoftDeletes;

    
    protected $fillable = ['title', 'description', 'link', 'start_date', 'end_date'];
    

    public static function storeValidation($request)
    {
        return [
            'title' => 'max:191|required',
            'description' => 'max:191|nullable',
            'link' => 'max:191|nullable',
            'start_date' => 'max:191|nullable',
            'end_date' => 'max:191|nullable'
        ];
    }

    public static function updateValidation($request)
    {
        return [
            'title' => 'max:191|required',
            'description' => 'max:191|nullable',
            'link' => 'max:191|nullable',
            'start_date' => 'max:191|nullable',
            'end_date' => 'max:191|nullable'
        ];
    }

    

    
    
    
}
