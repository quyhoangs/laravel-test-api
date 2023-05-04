<?php
// app/Repositories/BaseRepository.php
namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements RepositoryInterface
{
    /*  Một lớp trừu tượng là một lớp không thể được khởi tạo, mà chỉ có thể được kế thừa bởi các lớp con
        Một Interface là một bộ các phương thức trừu tượng mà một lớp có thể triển khai để định nghĩa hành vi cụ thể
        Bằng cách sử dụng implements, lớp BaseRepository cam kết (commit)
        rằng nó sẽ triển khai các phương thức được định nghĩa trong RepositoryInterface,
        và nếu không triển khai đúng các phương thức này,
        PHP sẽ hiển thị một lỗi và yêu cầu lớp định nghĩa lại các phương thức này để đảm bảo tính nhất quán về Interface.
    */
    protected $model;

    public function __construct(Model $model)
    {
        dump('Model');
        $this->model = $model;
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(array $data, $id)
    {
        $model = $this->model->findOrFail($id);
        $model->update($data);
        return $model;
    }

    public function delete($id)
    {
        $model = $this->model->findOrFail($id);
        $model->delete();
        return true;
    }

    public function get($id)
    {
        return $this->model->findOrFail($id);
    }

    // Triển khai các phương thức chức năng khác của repository tại đây
}
