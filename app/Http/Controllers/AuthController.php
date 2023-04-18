<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\client_new;
use DB;
class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
	

    public function login(Request $request){
        // validate data 
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        // login code 
        
        if(\Auth::attempt($request->only('email','password'))){
            return redirect('home');
        }

        return redirect('login')->withError('Login details are not valid');

    }

    public function register_view()
    {
        return view('auth.register');
    }

    public function register(Request $request){
        // validate 
        $request->validate([
            'name'=>'required',
            'email' => 'required|unique:users|email',
            'password'=>'required|confirmed'
        ]);

        // save in users table 
        
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=> \Hash::make($request->password)
        ]);

        // login user here 
        
        if(\Auth::attempt($request->only('email','password'))){
            return redirect('home');
        }

        return redirect('register')->withError('Error');


    }

    public function storess(Request $request)
    {
		// echo "storess";exit;
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'description' => 'required',
        ]);
        //$path = $request->file('image')->store('public/images');
        
		$imageName = '';
	 if($request->image){
		$imageName = time().'.'.$request->image->extension();
		
		$request->image->move(public_path('upload'),$imageName);
	 }
		
		$post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->image = $imageName;
        $post->save();
        
        $request->session()->flash('success','Post has been created successfully.');
		  return redirect('report_management');		
        //return redirect()->route('/posts')
                        //->with('success','Post has been created successfully.');
    } 

    public function home(){
        return view('home');
    }
	public function report_management(){
        return view('report_management');
    }

    public function reports()
    {
        $posts = Post::orderBy('id','desc')->paginate(5);
        $titled = DB::table('client_news')->select('id','name')->get();
        return view('report_management',compact('posts','titled'));
		//return view('report_management', $data);
    }
	
	public function edit(Post $post,$id)
    {
		$post = Post::find($id);
		//$data['posts'] = Post::orderBy('id','desc')->paginate(5);
		// $title = DB::table('client_news')->select('id','name')->get();
		$title = client_new::orderBy('id','desc')->paginate(5);
		// $title = client_new::orderBy('id','desc');
		// dd($title);
		
		//$title = ['PHP','JAVA','ANGULAR'];
		return view('edit',compact('post','title'));
		
		/*$post = Post::find($id);
		$title = ['PHP','JAVA','ANGULAR'];
		return view('edit',compact('post','title'));*/

    }
	
	
	public function update(Request $request, $id)
    {
		// return $id;
		
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        
        $post = Post::find($id);
        if($request->hasFile('image')){
            $request->validate([
              'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            //$path = $request->file('image')->store('public/images');
            
			
			//$post->image = $imageName;
        }
		$imageName = '';
	 if($request->image){
		$imageName = time().'.'.$request->image->extension();
		$request->image->move(public_path('upload'),$imageName);
        $post->image=$imageName;	
	 }
	 
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
		
		$request->session()->flash('success','Post updated successfully');
		
		  return redirect('report_management');	
    echo "test";exit;
        //return redirect()->route('/posts')
                        //->with('success','Post updated successfully');
    }
	
	//Start Search
	
	function AjaxIndex()
    {
     return view('live_search');
    }
	function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('posts')
         ->where('id', 'like', '%'.$query.'%')
         ->orWhere('title', 'like', '%'.$query.'%')
         ->orWhere('description', 'like', '%'.$query.'%')
         ->orderBy('id', 'desc')
         ->get();
         
      }
      else
      {
	  /* $data = DB::table('posts')
         ->orderBy('id', 'desc')
		 ->limit(20)
         ->get();*/
		 
	$data = DB::table('posts')
    ->join('client_news', 'posts.title', '=', 'client_news.id')
	->select('posts.*','client_news.name as name')
    ->get();
	
	
      }
      $total_row = $data->count();
      // print_r($total_row);exit;
	  if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->id.'</td>
         <td>'.$row->name.'</td>
         <td><img style="width:50px;" src="upload/'.$row->image.'" /></td>
         <td>'.$row->description.'</td>
		 <td>
		  <form action="/destroy" method="POST">
    
                    <a class="btn btn-primary" href="edit/'.$row->id.'">Edit</a>
                    <a class="btn btn-danger" href="destroy/'.$row->id.'">Delete</a>
   
                    
                    
      
                    <!--<button type="submit" class="btn btn-danger">Delete</button>-->
                </form>
		 </td>
         </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
	
	
	//End Search
	
	
	
	
     public function logout(){
        \Session::flush();
        \Auth::logout();
        return redirect('');
    }

    
}
