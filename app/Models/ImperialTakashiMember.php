<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ImperialTakashiMember extends Model
{
    protected $table = 'imperial_takashi_members_master';

    public function get(){
        return \Cache::remember('ImeprialTakashiMemberModel:get:',900 ,function(){ return DB::table($this->table)->get();});
    }

    public function getRecords($ids){
        $query = DB::table($this->table);
        foreach ($ids as $id) {
            $query->orWhere('id', $id);
        }
        return $query->get();
    }
}
