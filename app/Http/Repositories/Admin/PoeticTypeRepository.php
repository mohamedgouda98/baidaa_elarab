<?php
 namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\PoeticTypeInterface;
use App\Http\Traits\PoeticTypeTrait;
use App\Models\poetic_type;
use RealRashid\SweetAlert\Facades\Alert;


class poeticTypeRepository implements PoeticTypeInterface{

  use PoeticTypeTrait;
    private $poeticTypeModel;
    public function __construct(poetic_type $poeticType)
    {
         $this->poeticTypeModel=$poeticType;
    }

    public function index()
    {
       $poeticTypes= $this->getAllPoeticTypes();
        return view( 'admin.poeticType.index',compact('poeticTypes'));
    }

    public function create(){
        return view('admin.poeticType.create');
    }
    
    public function store($request){
        $this->poeticTypeModel::create([
            'name'=>$request->name,
        ]);
        Alert::success('success', 'poeticType Added Successfully');
        return redirect(route('admin.poeticType.index'));

    }

    public function edit($poeticType){
        return view('admin.poeticType.edit',compact('poeticType'));

    }

    public function update($poeticType, $request){
        $poeticType->update([
            'name'=>$request->name,
        ]);
        Alert::success('success', 'poeticType Updated Successfully');
        return redirect(route('admin.poeticType.index'));

    }

    public function destroy($poeticType){
        $poeticType->delete($poeticType->id);
        Alert::success('success', 'poeticType Deleted Successfully');
        return redirect()->back();

    }
}