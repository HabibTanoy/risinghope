<?php





Route::get('/', function (){
    return redirect()->route('pledges.index');
});

Route::resource('pledges','\App\Http\Controllers\PledgeController');
