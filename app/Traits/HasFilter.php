<?php
namespace App\Traits;

trait HasFilter
{
    public function scopeIsActive($query)
    {
        return $query->where('status', config('constant.notDelete'));
    }

    public function scopeSearchBy($query, $request)
    {
        if(!empty($request->search_key)){
            $query->where('name', 'like', '%'.$request->search_key.'%');
        }

        return $query;
    }

    public function scopeSingle($query, $id){
        return $query->where('id', $id);
    }
}


?>
