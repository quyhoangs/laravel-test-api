<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    public $id ;
    protected $table = 'job_'; // tên bảng mặc định
    protected $primaryKey = 'id'; // tên cột khóa chính mặc định
    public function __construct($id)
    {
        $this->table = $this->table . $id;
        parent::__construct();
    }

    // get job info
    public static function getJob_Jobid($id)
    {
        $job = new Job($id);
       //select * from job_1 where id = 1
        $jobInfo = $job->where('id', $id)->first();
        dd($jobInfo);
        return $jobInfo;
    }

}
