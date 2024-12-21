<?php 
namespace App\View\Components;

use Illuminate\View\Component;

class EmployeeList extends Component
{
    public $employees;

    public function __construct($employees)
    {
        $this->employees = $employees;
    }

    public function render()
    {
        return view('components.employee-list');
    }
}

?>