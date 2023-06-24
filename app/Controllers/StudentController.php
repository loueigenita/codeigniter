<?php

namespace App\Controllers;

use App\Models\StudentsModel;
use App\Controllers\BaseController;

class StudentController extends BaseController
{
    public function index()
    {
        $fetchStudents = new StudentsModel();
        $data['students'] = $fetchStudents->findAll();

        return view('student/index', $data);
    }

    public function createStudent()
    {
        return view('student/create');
    }

    public function storeStudent()
    {
        $insertStudents  = new StudentsModel();
        $data = array(
            'first_name' => $this->request->getPost('first_name'),
            'last_name' => $this->request->getPost('last_name'),
            'age' => $this->request->getPost('age'),
            'address' => $this->request->getPost('address'),
            'course' => $this->request->getPost('course'),
            'adviser' => $this->request->getPost('adviser'),
        );
        $insertStudents->insert($data);

        return redirect()->to('/students')->with('success', 'Student Added Successfully!');
    }

    // public function showStudent()
    // {
    //     return view('student/show');
    // }


    public function editStudent($id)

    {
        $fetchStudents = new StudentsModel();
        $data['student'] = $fetchStudents->where('id', $id)->first();
        return view('student/edit', $data);
    }
    public function updateStudent($id)
    {
        $updateStudents = new StudentsModel();
        $data = array(
            'first_name' => $this->request->getPost('first_name'),
            'last_name' => $this->request->getPost('last_name'),
            'age' => $this->request->getPost('age'),
            'address' => $this->request->getPost('address'),
            'course' => $this->request->getPost('course'),
            'adviser' => $this->request->getPost('adviser'),
        );
        $updateStudents->update($id, $data);

        return redirect()->back()->with('success', 'Student Updated Successfully');
    }

    public function deleteStudent($id)
    {
        $deleteStudent = new StudentsModel();
        $deleteStudent->delete($id);

        return redirect()->back()->with('success', 'Student Deleted Successfully!');
    }
}
