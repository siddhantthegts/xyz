<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\AcademicFormPartOneMail;
use App\Mail\AcademicFormPartTwoMail;

class AcademicFormMail extends Component
{
    protected $listeners = ['mail_part_one','mail_part_two'];
    public function render()
    {
        return view('livewire.academic-form-mail');
    }

    public function mail_part_one($data){
        Mail::to(config('app.to_mail'))->send(new AcademicFormPartOneMail($data));
    }

    public function mail_part_two($data){
        Mail::to(config('app.to_mail'))->send(new AcademicFormPartTwoMail($data));
    }
}
