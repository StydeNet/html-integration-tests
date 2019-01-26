<?php

Route::view('form-a', 'forms.a');

Route::post('form-a', function () {
    request()->validate([
            'name'=>'required|string|max:6',
            'description'=>'required',
            'avatar' => 'required',
            'edad'=>'required',
            'status'=>'required'
        ]);
    return back();
});

Route::view('form-b', 'forms.b');

Route::post('form-b', function () {
    request()->validate([
            'name'=>'required|string|max:6',
            'status_inline'=>'required',
            'status'=>'required',
            'preferencias'=>'required',
            'preferencias_inline'=>'required'
        ]);
    return back();
});
