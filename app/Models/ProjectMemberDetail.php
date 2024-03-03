<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectMemberDetail extends Model
{
    use HasFactory;

    /**
     * メンバー別プロジェクト詳細を所有しているプロジェクト詳細を取得
     */
    public function ProjectDetail(){
        return $this->belongsTo(ProjectDetail::class);
    }

    /**
     * メンバー別プロジェクト詳細を所有しているユーザーを取得
     */
    public function User(){
        return $this->belongsTo(User::class);
    }    
}
