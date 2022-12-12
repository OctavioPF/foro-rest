<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
class UserController extends Controller
{
    public function index()
    {
        return User::paginate();
    }
    public function show($id)
    {
        $User = User::find($id);
        if (!$User) {
            return response()->json(["message" => "failed"], 404);
        }
        return $User;
    }
    public function store(Request $request)
    {
        $User = new User();/* regsitro User vacio */
        $r = $User->fill($request->all())->save();/* llenar el obj User con el request y hacer el insert*/
        if (!$r) {
            return response()->json(["message" => "failed"], 404);
        }
        return $User;
    }
    public function update(Request $request, $id)
    {
        $User = User::find($id);
        if (!$User) {
            return response()->json(["mesagge"=>"failed"], 404);
        }
        $r = $User->fill($request->all())->save();
        if (!$r) {
            return response()->json(["mesagge"=>"failed"], 404);
        }
        return $User;
    }
    public function destroy($id)
    {
        $User = User::find($id);
        if (!$User) {
            return response()->json(["message"=>"failed"], 404);
        }
        $User->delete();
        return response()->json(["message"=>"success"]);}}
