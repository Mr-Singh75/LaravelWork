<?php

namespace App\Repository\Implementation;
use App\Repository\Interface\UserInterface;
use App\Models\UserProfile;
use App\Models\User;

class DataImplementation implements UserInterface
{
    // private $model;
    // public function __construct(User $model)
    // {
    //     $this->model=$model;
    // }
    public  function getAllData()
    {
        return UserProfile::all();
    }
    public function addUser($input)
    {
        $data=User::create([
            'name'=>$input['fname'],
            'email'=>$input['email'],
            'password'=>$input['passward']
        ]);
        Userprofile::create([
            'user_id'=>$data->id,
"FirstName"=>$input['fname'],
'LastName'=>$input['lname'],
'Salary'=>$input['salary'],
'address'=>$input['address']
        ]);
        //return redirect('user');
    }
    public function delete($id)
    {
        UserProfile::find($id)->delete();
        return redirect()->back();
        //return $id;
    }
    public function getById($id)
    {
        return UserProfile::where('user_id','=',$id)->get();
        // return redirect()->back();
        //return $id;
    }
    public function update($input,$id)
    {
        UserProfile::where('user_id','=',$id)->update([
"FirstName"=>$input['fname'],
'LastName'=>$input['lname'],
'Salary'=>$input['salary'],
'address'=>$input['address']
        ]);
    }
}