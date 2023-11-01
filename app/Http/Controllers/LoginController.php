class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->input('email'))->first();

        if(!$user)
            return to_route('loginPage')->with('error', 'Email atau Password tidak sesuai');

        if(!Hash::check($request->input('password'), $user->password))
            return to_route('loginPage')->with('error', 'Email atau Password tidak sesuai');

        if($user->role == 'Admin') {
            Auth::login($user);
            return to_route('adminPage');
        } else {
            Auth::login($user);
            return to_route('customerPage');
        }
    }

    public function registerPage() {
        return view('register');
    }

    public function register(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'Customer'
        ]);

        Auth::login($user);
        return to_route('customerPage');
    }

    public function logout()
    {
        Auth::logout();

        return to_route('loginPage');
    }
}