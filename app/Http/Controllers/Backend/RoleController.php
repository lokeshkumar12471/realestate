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
}