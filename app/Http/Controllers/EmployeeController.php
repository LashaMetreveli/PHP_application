<?php


namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function createEmployee()
    {
        $employee = new Employee();
        $employee->name = 'employee: ' . uniqid();
        $employee->lastname = 'lastname ' . uniqid();
        $employee->birthdate =  date('Y-m-d');
        $employee->personal_id =  rand(100, 1000);
        $employee->salary =  rand(100, 1000);
        $employee->timestamp('created_at')->default(Employee::raw('CURRENT_TIMESTAMP'));
        $employee->timestamp('updated_at')->default(Employee::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

        return $employee;
    }



    public function viewAllEmployees(Request $request)
    {
        $employee = Employee::orderBy('id', 'ASC');

        $employees = $employee->get();

        return view('view-employees')
            ->with('employees', $employees);
    }

    public function addNewEmployee(Request $request)
    {
        $employee = new Employee();

        $employee->name =  $request->name;
        $employee->lastname =  $request->lastname;
        $employee->birthdate =  $request->birthdate;
        $employee->personal_id =  $request->personal_id;
        $employee->salary =  $request->salary;
        $employee->created_at =  date('Y-m-d');
        $employee->updated_at =  date('Y-m-d');
        $employee->save();

        return redirect()->route('employee.all');
    }


    public function deleteEmployee(Request $request)
    {

        Employee::where('id', $request->employee_id)->delete();
        return redirect()->route('employee.all');
    }

    public function editEmployee(Request $request, $id)
    {

        $employee = Employee::where('id', $id)->first();
        return  view('edit-employee')->with('employee', $employee);
    }

    public function updateEmployee(Request $request, $id)
    {
        Employee::where('id', $id)->update([

            'name' => $request->name,
            'lastname' => $request->lastname,
            'birthdate' =>  $request->birthdate,
            'personal_id' =>  $request->personal_id,
            'salary' =>  $request->salary,
            'created_at' =>  date('Y-m-d'),
            'updated_at' =>  date('Y-m-d'),
        ]);
        return redirect()->route('employee.all');
    }
}
