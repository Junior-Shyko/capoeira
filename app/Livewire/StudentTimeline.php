<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Student;

class StudentTimeline extends Component
{
    public Student $student;

    public function mount(Student $student)
    {
        $this->student = $student;
    }

    public function render()
    {
        $timeline = $this->student->timeline;
        return view('livewire.student-timeline', compact('timeline'));
    }
}