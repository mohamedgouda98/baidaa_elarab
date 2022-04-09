<?php
 namespace App\Http\Repositories\Admin;

use App\Models\era;
use App\Http\Traits\EraTrait;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Interfaces\Admin\EraInterface;

class EraRepository implements EraInterface{

    use EraTrait;
    private $eraModel;
    public function __construct(era $era)
    {
         $this->eraModel=$era;
    }

    public function index()
    {
       $eras= $this->getAllEras();
        return view( 'admin.era.index',compact('eras'));
    }

    public function create(){
        return view('admin.era.create');
    }
    
    public function store($request){
        $this->eraModel::create([
            'name'=>$request->name,
        ]);
        Alert::success('success', 'Era Added Successfully');
        return redirect(route('admin.era.index'));

    }

    public function edit($era){
        return view('admin.era.edit',compact('era'));

    }

    public function update($era, $request){
        $era->update([
            'name'=>$request->name,
        ]);
        Alert::success('success', 'Era Updated Successfully');
        return redirect(route('admin.era.index'));

    }

    public function destroy($era){
        $era->delete($era->id);
        Alert::success('success', 'Era DeletedSuccessfully');
        return redirect()->back();

    }
}