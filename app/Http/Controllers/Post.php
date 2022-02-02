<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use function GuzzleHttp\Promise\all;

class PostController extends Controller
{

    protected $user;

    public function __construct(User $user, Filter ...$filters)
    {
        $this->user = $user;
    }

}
?>
