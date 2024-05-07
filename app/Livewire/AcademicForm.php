<?php

namespace App\Livewire;

use App\Models\LPSOP;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\File;

class AcademicForm extends Component
{
    use WithFileUploads;

    public $form_step = 1;
    public $name;
    public $email;
    public $mobile;

    public $country;
    public $university;
    public $course;
    public $experience;

    public $file;
    public $requirement;

    public $checkbox = true;

    public $academic_data;

    // public $disabled1 = "";
    public $disabled = "";
    public $files = "";

    public function render()
    {
        return view('livewire.academic-form');
    }

    public function checkbox(){

        if($this->disabled == ""){
            $this->disabled = "disabled";
        }else{
            $this->disabled = "";
        }
    }

    // public function disable_1() {
    //     $this->disabled1 =  "disabled";
    // }

    public function submit_form1(){

        $validatedData = $this->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'mobile' => 'required',
        ],[
            'name.required' => 'The Full Name field is required',
            'name.min' => 'The Full name must be at least 2 characters.',
            'mobile.required' => 'The Mobile field is required',
            'email.required' => 'The Email field is required',
            'email.email' => 'The Email must be a valid email address.',
        ]);

        if(isset($validatedData)){
            $this->form_step = 2;
        }

        $academic = new LPSOP();
        $academic->name = $validatedData['name'];
        $academic->email = $validatedData['email'];
        $academic->mobile = $validatedData['mobile'];
        $academic->save();

        $data = array(
            'id'=> $academic->id,
            'name' => $academic->name,
            'email' => $academic->email,
            'mobile' => $academic->mobile,
            'source' => "SOP LP Partial Header Form",
            'type' => "SOP",
        );

        $this->dispatch('mail_part_one', $data);

        $this->academic_data = $academic;
    }

    public function submit_form2(){

        $academic = $this->academic_data;
        $academic->country = $this->country;
        $academic->university = $this->university;
        $academic->course = $this->course;
        $academic->experience = $this->experience;
        $academic->requirement =$this->requirement;
        $academic->source = "SOP LP Full Header Form";
        $academic->url = URL::full();

        if(isset($this->file)){
            File::isDirectory('storage/files') or File::makeDirectory('storage/files', 0777, true, true);
            $originalName = $this->file->getClientOriginalName();
            $this->files = $this->file;
            $file_name = time().'.'.$this->file->getClientOriginalExtension();
            $this->file->storeAs('files', $file_name, 'public');
            $fileInfo = json_encode([
                [
                    "download_link" => 'files/'.$file_name,
                    "original_name" => $originalName,
                ]
            ]);
            $academic->file = $fileInfo;
        }

        $academic->save();

        $data = array(
            'id'=> $academic->id,
            'name' => $academic->name,
            'email' => $academic->email,
            'mobile' => $academic->mobile,
            'country' => $academic->country,
            'university' => $academic->university,
            'course' => $academic->course,
            'experience' => $academic->experience,
            'requirement' => $academic->requirement,
            'file' => $academic->file,
            'type' => "SOP",
            'source' => "SOP LP Full Header Form",
        );

        $this->dispatch('mail_part_two', $data);

        return redirect()->route('thank-you');

    }
}
