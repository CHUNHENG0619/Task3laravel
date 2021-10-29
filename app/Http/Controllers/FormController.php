<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Rgform;

class FormController extends Controller
{
    // to add record
    function addPerson(Request $request)
    {
        $person = new Rgform;
        $person->name = $request->name;
        $person->email = $request->email;
        $person->password = bcrypt($request->password);
        $person->save();

        echo "<script>alert('Successful to register!');</script>";

        return view('ys.form');
    }

    // to retrieve record
    function viewPerson()
    {
        $tableView = Rgform::all();

        $sql = DB::select('SELECT * FROM rgforms WHERE email =\'ys@gmail.com\'');
        $date_check = DB::table('rgforms')
            ->whereDate('created_at', '>', "2021-10-01")
            ->get();

        return view("ys.personView", ['tableView' => $date_check]);
    }

    function loginUser(Request $request)
    {
        // loop Rgform's data (email & password)
        foreach (Rgform::get(['email', 'password']) as $i) {

            if ($request->email == $i->email) {
                if (Hash::check(($request->password), $i->password)) {
                    echo '<script>alert(\'Login Successfully!\');</script>';
                    return view("ys.welcome");
                }
            }
        }
        echo '<script>alert(\'Failed to Login. Check your email or password.\');</script>';
        return view("ys.login");
    }

    public static function update(Request $request)
    {

        $sql = "UPDATE rgforms SET " . $request->option . " = '$request->value' WHERE id = $request->id";

        DB::update($sql);
    }

    public static function remove(Request $request)
    {

        DB::table('rgforms')->where('id', $request->id)
            ->delete();
    }
}
