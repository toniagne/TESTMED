<?php

Route::get('/provas/questao/{id}', function ($id) {
    return view('application.questoes',['id'=>$id]);
});

