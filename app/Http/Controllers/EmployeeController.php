<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Designation;
use App\Models\Position;
use App\Models\Agency;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class EmployeeController extends Controller
{
    protected $uploadPath;


    public function __construct()
    {
        
        $this->uploadPath = public_path(config('cms.image.directory'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        // $employees = Employee::paginate(5);
        return view('employee.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $designation = Designation::all();
        $position = Position::all();
        $agency = Agency::all();
        return view('employee.create',compact('designation','position','agency'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->cid = $request->cid;
        $employee->email= $request->email;
        $employee->emp_id = $request->emp_id;
        $employee->dob = $request->dob;
        $employee->gender = $request->gender;
        $employee->designation_id = $request->designation;
        $employee->position_id = $request->position;
        $employee->agency_id = $request->agency;
        $employee->gender = $request->gender;
        $employee->permenant_address = $request->permenant_address;
        $employee->contact = $request->contact;
        $employee->employee_type= $request->employee_type;

        $employee->profile_uri = $this->handleRequest($request);
        $employee->contact = $request->contact;
        $employee->save();

        return redirect('/employee')->with('successMsg','Item Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        // $employee = Employee::where('id',$id)->first();
        return view('employee.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */ public function edit(Employee $employee)
    {
        $designation = Designation::all();
        $position = Position::all();
        $agency = Agency::all();
        return view('employee.edit',compact('employee','designation','position','agency'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $employee->update($request->all());
        $employee->profile_uri = $this->handleRequest($request);
        $employee->save();

        return redirect('/employee')->with('successMsg','Item Successfully Added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect('/employee')->with('successMsg','Item deleted');
    }


    private function handleRequest($request){
            
            
                $data = $request->image;
            
                if ($request->hasFile('image')) {
                    $image = $request ->file('image');
                    $fileName = $image->getClientOriginalName();
                    $destination = $this ->uploadPath;
                    $successUploaded = $image->move($destination, $fileName);
            
                    if ($successUploaded){
            
                        $width = config('cms.image.thumbnail.width');
                        $height = config('cms.image.thumbnail.height');
                        $extenstion = $image->getClientOriginalExtension();
                        $thumbnail = str_replace(".{$extenstion}", "_thumb.{$extenstion}", $fileName);
            
                        Image::make($destination .'/'. $fileName )
                                            ->resize($width, $height)
                                            ->save($destination .'/'. $thumbnail);
                    }
            
            
                    $data = $thumbnail;
                    $data = $fileName;
            
                }
            
                return $data;
    }
}
