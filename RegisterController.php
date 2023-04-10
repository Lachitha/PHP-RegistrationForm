use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class RegisterController extends Controller
{
    // ...

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'contact_no' => $data['contact_no'],
            'address' => $data['address'],
            'password' => bcrypt($data['password']),
        ]);
    }

    // ...
}
