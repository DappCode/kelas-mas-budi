<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;   // --> untuk mendapatkan data dari inputan kita ( Menangkap data ) 
use Illuminate\Filesystem\Filesystem;   //--> untuk memindahkan gambarnya
use App\Http\Requests\StudentRequest;
use Intervention\Image\ImageManager;
use App\Student;

class StudentController extends Controller
{
    private $student;
    private $filesystem;
    private $imageManager;

    public function __construct(Student $student, Filesystem $filesystem, ImageManager $imageManager)
    {
        $this->student = $student;
        $this->filesystem = $filesystem;
        $this->imageManager = $imageManager;
    }

    public function index()
    {
        $students = $this->student->orderBy('id','DESC')->paginate(10);
        // paginate = membuat batasan penampilan data 

        return view('student.index', compact('students'));
    }

    public function create()
    {

        return view('student.create');
    }

    public function store(StudentRequest $request)
    {
        // dapetin data inputan kecuali photo
        $student = $request->except("photo");

        // Cek Mengupload photo
        if($request->hasFile('photo')) {
            $student['photo'] = $this->generatePhoto($request->file('photo'), $request->except('photo'));
        }
        $this->student->create($student);

        session()->flash('succses_message', 'Data udah tercreate C4hKuPlUk!');
        return redirect('/student');  // --> untuk memindahkan nya ke student

        // dd($request->all());  // --> sama fungsinya dengan echo
    }

    public function destroy($id)
    {
        // dd($id);   //--> Gabungan antara var_dump & die

        $student = $this->student->find($id);

        if($student) {
            $student->delete();
        }

        return redirect()->back();
    }

    public function edit($id)
    {
        $student = $this->student->find($id);

        return view('student.edit', compact('student'));
    }

    public function update($id, StudentRequest $request)
    {
        $studentForm = $request->except('photo');
        if($request->hasFile('photo')) {
           
           $studentForm['photo'] = $this->generatePhoto($request->file('photo'), $studentForm);
        }

        $student = $this->student->find($id);

        if($student) {
            $student->update($studentForm);
        }

        session()->flash('succses_message', 'Data udah terupdate C4hKuPlUk!');

        return redirect('/student');
    }

    public function search(Request $request)
    {

        $keyword = $request->input('keyword');
        

        $students =  $this->student->where('nama', 'LIKE', "%$keyword%")
                    ->orWhere('id', 'LIKE', "%$keyword%")
                    ->orWhere('address', 'LIKE', "%$keyword%")
                    ->orWhere('age', 'LIKE', "%$keyword%")
                    ->orWhere('email', 'LIKE', "%$keyword%")
                    ->orderBy('id', 'DESC')->paginate(10); 
                    
        $students->appends(['keyword' => $keyword]); //--> masukin ke parameternya
        //--> mencari kata yang mirip,
        // % = mencari di awal kata atau di akhr kata, teganrung pada penempatannya

        return view('student.search', compact('students'));
        
        
    }

    // untuk menampilkan photo
    private function generatePhoto($photo, $data)
    {   
        // --> snake_case = otomatis membuat underscor di namanya!!
        // ex : "muamar kadapi" = muamar_kadapi
        $filename = date('YmdHiS').'-'.snake_case($data['nama']).".".$this->filesystem->extension($photo->getClientOriginalName());
        $path = public_path("photos/").$filename;

        $this->imageManager->make($photo->getRealPath())->save($path);
        
        return "/photos/".$filename;
       
    }


}
