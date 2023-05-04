<?php
namespace App\Repositories;

interface RepositoryInterface
{
    public function create(array $data);
    public function update(array $data, $id);
    public function delete($id);
    public function get($id);
    // Thêm các phương thức chức năng khác của repository tại đây
}
