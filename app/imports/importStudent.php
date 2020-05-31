<?php
 
namespace App\imports;
 
use App\Student;
use Maatwebsite\Excel\Concerns\ToModel;
 
class importStudent implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
           'nomStudent' => @$row[0],
           'exo1' => @$row[1],
           'exo2' => @$row[2],
           'exo3' => @$row[3],
           'exo4' => @$row[4],
           'exo5' => @$row[5]
        ]);
    }
}