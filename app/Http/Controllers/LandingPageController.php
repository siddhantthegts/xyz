<?php

namespace App\Http\Controllers;

use App\Models\LPSOP;
use App\Mail\LPSOPPopupMail;
use Illuminate\Http\Request;
use App\Mail\CustomerSOPMail;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

class LandingPageController extends Controller
{
    public function enquiry_submit(){

        $enquiry = new LPSOP;
        $enquiry->name = request()->name;
        $enquiry->email = request()->email;
        $enquiry->mobile = request()->mobile;
        $files = '';
        if (request()->hasFile('file')) {
            File::isDirectory('storage/sop-files') or File::makeDirectory('storage/files', 0777, true, true);
            $file = request()->file('file');
            $originalName = $file->getClientOriginalName();
            $name = time().'.'.$file->getClientOriginalExtension();
            $files = $file->move('storage/sop-files/', $name);
            $fileInfo = json_encode([
                [
                    "download_link" => 'sop-files/'.$name,
                    "original_name" => $originalName,
                ]
            ]);
            $enquiry->file = $fileInfo;
        }

        $enquiry->url = request()->url;
        $enquiry->source = request()->source;
        $enquiry->save();

        $data = array(
            'id'=> $enquiry->id,
            'name' => $enquiry->name,
            'email' => $enquiry->email,
            'mobile' => $enquiry->mobile,
            'file' => $enquiry->file,
            'source' => $enquiry->source,
            'url' => $enquiry->url,
            'type' => "Enquiry Form",
        );
        Mail::to(config('app.to_mail'))->send(new LPSOPPopupMail($data));

        Mail::to($enquiry->email)->send(new CustomerSOPMail($enquiry->name, config('app.url')));

        return redirect()->route('thank-you');
    }
}
