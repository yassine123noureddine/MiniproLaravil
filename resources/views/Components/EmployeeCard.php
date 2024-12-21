<?php 
namespace App\View\Components;

use Illuminate\View\Component;

class EmployeeCard extends Component
{
    public $employee;

    public function __construct($employee)
    {
        $this->employee = $employee;
    }

    public function render()
    {
        return view('components.employee-card');
    }
}

?>
