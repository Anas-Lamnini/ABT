<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Student extends Model
{
    protected $fillable = [
        'nomStudent', 'exo1', 'exo2', 'exo3', 'exo4', 'exo5'
    ];
}
