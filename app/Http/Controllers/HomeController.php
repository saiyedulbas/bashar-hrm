<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\expense;
use Carbon\Carbon;
use App\Charts\expenseChart;
use App\notice;
use App;
use App\User;
use Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Image;
use PDF;

class HomeController extends Controller
{
     
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('usertype')->except(['test','intervention']);
		
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		$nao = Auth::user()->lang;
		
		App::setLocale($nao);
		$chart = new expenseChart;
		$chart->labels(['today','yesterday','2 days ago']);
        
        
		$first = expense::sum('item_price');
		$second =  carbon::now()->format('Y-m-d');
		$third = expense::where('purchase_date','=',$second)->sum('item_price');
		$yesterday = expense::whereDate('purchase_date','=',today()->subDays(1))->sum('item_price');
		$two_days_ago = expense::whereDate('purchase_date','=',today()->subDays(2))->sum('item_price');
		$chart->dataset('Expense', 'bar', [$third,$yesterday,$two_days_ago])->backgroundColor(['red','green','blue']);
        return view('home',compact('chart','first','third'));
    }
	public function notice(){
		$nao = Auth::user()->lang;
		
		App::setLocale($nao);
		$bador = notice::all();
		
		return view('notice/view',compact('bador'));
	}
	public function noticenew(Request $request){
		notice::insert([
		    'notice_title' => $request->notice_title,
			'notice_content' => $request->cktext,
			'created_at' => carbon::now(),
			
		]);
		return back();
	}
	public function documentation(){
		return view('documentation');
	}
	public function activenotice($active){
		$beauty = notice::find($active);
		$naughty = $beauty->notice_status;
		echo $naughty;
		if($naughty == 2){
			notice::where('id','=',$active)->update([
			    'notice_status' => 1,
			]);
		}
		if($naughty == 1){
			notice::where('id','=',$active)->update([
			    'notice_status' => 2,
			]);
		}
		return back();
	}
	public function deletenotice($delete){
		notice::find($delete)->delete();
		return back();
	}
	public function languagechange(Request $request){
		$lin = Auth::user()->id;
		
		User::find($lin)->update([
		   'lang' => $request->language,
		]);
		return back();
	}
	public function test(){
		
		$pdf = PDF::loadView('welcome');
        return $pdf->stream('invoice.pdf');
		
	}
	public function intervention(Request $request){
		
        $img_file = $request->file('image');
        $bina = $request->file('image')->getClientOriginalName();
		
        // $filename = 'jata.'. $img_file->getClientOriginalExtension();
		// echo $filename;
        Image::make($img_file)->resize(150, 195)->save( base_path( 'public/uploads/' . $bina ),40 );
        
	}
	public function permissionsetting(){
		
		$nao = Auth::user()->lang;
		
		App::setLocale($nao);
		$users = User::all();
		
		$tank = Role::all();
		$bina = Permission::all();
		return view('permission/view',compact('tank','bina','users'));
	}
	public function roleadd(Request $request){
		
		 
		foreach($request->permission_name as $permission){
			
			$role = Role::find($request->role_name);
		    $permission = Permission::find($permission);
		    $role->givePermissionTo($permission);
		}
		return back();
		
	}
	public function roleagain(Request $request){
		Role::create([
		   'name' => $request->try
		]);
		return back();
	}
	public function roleassign(Request $request){
		
		    $user = User::find($request->user_name);
            $user->syncRoles($request->role_take);
		    return back();
	}
	public function expense_list(){
		$ami = User::all();
		foreach($ami as $tumi){
			echo '<p>'.'<span style="width:100%" class="btn btn-info">'.$tumi->name.'</span>'.'</p>';
		}
	}
	
}
