<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function showForm()
    {
        return view('about.index'); // Carga la vista index.blade.php dentro de la carpeta 'about'
    }

    public function submitForm(ContactFormRequest $request)
    {
        $formData = $request->validated();

        Mail::to('proviturismonarino@gmail.com')->send(new ContactFormMail($formData));

        return redirect()->route('contacto.formulario')->with('success', '¡Mensaje enviado correctamente!');
    }
}