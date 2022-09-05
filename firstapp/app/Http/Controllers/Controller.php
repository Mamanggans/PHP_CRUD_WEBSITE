<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
 


    public function newData() {
        return view ('create');
    }

    public function create(Request $request) {
        $insert=new User;
        // Profile::create($request->all());
        // $insert->id=$request->input=null;
        $insert->name=$request->input('name');
        $insert->email=$request->input('email');
        $insert->password=hash::make($request->input('password'));
        $insert->age=$request->input('age');
        $insert->phone=$request->input('phone');
        $insert->save();
        return redirect('')
            ->with('success','new profile created successfully.');
    }
    // public function edit(User $user)
    // {
    //     return view('edit',compact('user'));
    // }
    public function update($id)
    {
        $read=User::where('id',$id)->get();
        // dd($read);
        return view ('edit',[
            'read' => $read
        ]);
    }
    
    public function read() {
        $read=User::all();
        return view("welcome",[
            'read' => $read
        ]);
    }

    public function updateData(Request $request) {
        $update = User::where('id', $request->input('id'))->first();
        $update->name=$request->input('name');
        $update->email=$request->input('email');
        $update->password=hash::make($request->input('password'));
        $update->age=$request->input('age');
        $update->phone=$request->input('phone');
        $update->save();
        return redirect('/');
        //     ->with('success','new profile created successfully.');
    }

    public function delete(Request $request, User $user, $id) {
        // $delete=User::where('','')->delete();
        $user = User::where('id', $id)->delete();
        return redirect('');
    }
}


    // public function update(Request $request, profile $product)
    // {
    //     $update->name=$request->input=("name");
    //     $update->email=$request->input=("email");
    //     $insert->password=hash::make($request->input('12132131'));
    //     $insert->age=$request->input=("age");
    //     $insert->phone=$request->input=("phone");
    //     $insert->save();
    //     return redirect()->route('index')
    //                     ->with('success','profile updated successfully');
    // }
    // public function destroy(User $user)
    // {
    //     $user->delete();
    
    //     return redirect()->route('index')
    //                     ->with('success','profile deleted successfully');
    // }

    // public function homePage () {

    //     // for read all the data 
    //         $read = User::all();
    //         foreach($read as $r){
    //             echo "<center>";
    //             echo "<h1> $r->name Profile</h1>";
    //             echo "<p>my name is  $r->name </P></br>";
    //             echo "<p>my email is $r->email </p></br>";
    //             echo "<p> my number phone is $r->phone</p></br>";
    //             echo "<p> my age is $r->age</p></br>";
    //             echo "<button> update </button>&nbsp<button> delete </button>&nbsp<button> create </button>&nbsp";
    //             echo "</center>";
    //         }
        
    //         echo "
    //             <style>
    //             table, thead, tbody, th, td {
    //                 border:1px solid black;
                    
    //             }
    //             table {
    //                 width: 100%;
    //             }
    //             button {
    //                 margin-left=50%;
    //             }
    //             </style>
    //             <h1> Profile</h1>
    //             <table>
    //             <thead>
    //             <tr>
    //               <th>Name</th>
    //               <th>phone</th>
    //               <th>age</th>
    //               <th>button</th>
    //             </tr>";
    //         $read = User::all();
    //         foreach($read as $r){
    //             echo"
    //             <tbody>
    //             <tr>
    //             <td>$r->name</td>
    //               <td>$r->phone</td>
    //               <td>$r->age</td>
    //               <td><center><button> update </button>&nbsp<button> delete </button>&nbsp<center></td>
    //             </tr>
    //             </tbody>";
    //         }
    //         echo"
    //         </table>
    //         <div>
    //         </br>
    //         <center><button> create </button></center>
    //         <div>";
        



