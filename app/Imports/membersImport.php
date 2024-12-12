<?php

namespace App\Imports;

use App\Models\GymMember;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class membersImport implements ToCollection,WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach($rows as $row){
           $GymMember=GymMember::where('email',$row['email'])->first();
           if($GymMember){
            GymMember->update([
                'name'=>$row['name'],       
                "date_of_join"=>$row['date_of_join'],
                "expiration_date"=>$row['expiration_date'],
                "phone"=>$row['phone'],
                    ]);
                    
           }else{
            GymMember::create([
                'name'=>$row['name'],       
                "date_of_join"=>$row['date_of_join'],
                "expiration_date"=>$row['expiration_date'],
                "phone"=>$row['phone'],
                    ]);
           }
        }
    }
}
