<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class JobInfo extends Model
{
    use HasFactory;

    protected static function boot()
    {
        parent::boot();

        // Đăng ký sự kiện được gọi khi model được tạo
        static::created(function (JobInfo $jobInfo) {
            // Lấy job_id và tên bảng tương ứng
            $jobId = $jobInfo->job_id;
            $table = 'job_'.$jobId;

            // Tạo dữ liệu giả định cho bảng mới
            DB::table($table)->insert([
                'column1' => $jobInfo->job_name,
                'column2' => $jobInfo->job_description,
                // Thêm các giá trị khác tùy theo nhu cầu
            ]);
        });
    }


}
