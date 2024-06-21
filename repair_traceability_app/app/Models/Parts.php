<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ModelID;

class Parts extends Model
{
    use HasFactory;
    protected $table = 'parts_to_repair';
    
    public function getRNO(){
        $rno = ModelID::find($this->RNO_ID);
        return $rno->RNO;
    }
}
