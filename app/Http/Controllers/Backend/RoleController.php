<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleController extends Controller
{
    public function AllPermission(){
        $permissions=Permission::get();
        return view('backend.pages.permission.all_permission',compact('permissions'));
    }

    public function AddPermission(){
        return view('backend.pages.permission.add_permission');
    }

    public function StorePermission(Request $request){

        $permission=Permission::create([
            'name'=>$request->name,
            'group_name'=>$request->group_name,
        ]);
        $notification= array(
            'message'=>'Permission Created Successfully',
            'alert-type'=>'success'
        );
        return redirect()->route('all.permission')->with($notification);

    }
    public function EditPermission($id){
        $permission=Permission::findOrFail($id);
     return view('backend.pages.permission.edit_permission',compact('permission'));
    }

    public function UpdatePermission(Request $request){
        $per_id=$request->id;
        $permission=Permission::findOrFail($per_id)->update([
            'name'=>$request->name,
            'group_name'=>$request->group_name
        ]);
        $notification=array(
            'message'=>'Permission Updated Successfully',
            'alert-type'=>'success'
        );
            return redirect()->route('all.permission')->with($notification);
    }

    public function DeletePermission($id){
   $permission=Permission::findOrFail($id)->delete();
    $notification=array(
    'message'=>'Permission Deleted Successfully',
    'alert-type'=>'success'
);
    return redirect()->back()->with($notification);
    }
}