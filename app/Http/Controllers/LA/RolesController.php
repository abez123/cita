<?php
/**
 * Controller genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Http\Controllers\LA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use DB;
use Validator;
use Datatables;
use Collective\Html\FormFacade as Form;

use Zizaco\Entrust\EntrustFacade as Entrust;

use App\Role;
use App\Permission;

class RolesController extends Controller
{

	
	public function __construct() {
	
	}
	
	/**
	 * Display a listing of the Roles.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		
			return View('la.roles.index');
		
	}
}