<?php
require_once 'BaseService.php';
require_once __DIR__ . "/../dao/EmployeeDao.class.php";


class EmployeeService extends BaseService
{
    public function __construct()
    {
        parent::__construct(new EmployeeDao);
    }


    function getEmployeeByIdAndLocationId($employee_id, $location_id)
    {
        return $this->dao->getEmployeeByIdAndLocationId($employee_id, $location_id);
    }
}
?>
