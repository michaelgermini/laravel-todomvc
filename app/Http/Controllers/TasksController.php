<?php

namespace App\Http\Controllers;

use DB;
use App\Quotation;
use App\Task;

use Illuminate\Fondation\Http\FormRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class TasksController extends Controller
{
          //  private $tasks;
        //    public function __construct() {
          //  $this->tasks = collect([
        //    ['id' => 2, 'name' => 'Learn Laravel', 'duration' => 12],
          //  ['id' => 3, 'name' => 'Learn RubyOnRails', 'duration' => 24]     ])->keyBy('id');

    public function index()
    {
        return view ('tasks.index')->with('task', Task::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return "I am the method that creates";
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        //$task = Task::create($request->all());
        $task = new Task();
        $task->name = $request->name;
        $task->save();
        return redirect(route('tasks.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         return view ('tasks.show')->with('task', Task::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     
    public function destroy($id)
    {
        //
    }

    
    public function contact()
        {
               // $people = ['id' => 2, 'name' => 'Learn Laravel', 'duration' => 12];
        
        
        //return view('contact', compact('people'));
    }

        
    
    
    public function show_post()
        {
       //return view('post');
    }
        

       
    
    
        //public function show_post($id){
        
        //return view('post')->with('id',$id);
    
        public function read()
        {
            //$results = DB::select('select * from post where id = ?', [1]);
        
        //return view('read', compact('results'));
       // }
}}