<?php

namespace App\Http\Controllers\PanelControl;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Services\MovieService;
use App\Models\Favorite;

class MovieController extends Controller
{
    protected $movieService;

    public function __construct(MovieService $movieService)
    {
        $this->movieService = $movieService;
    }

    public function index(Request $request)
    {
        try {

            $query = $request->get('q', '');
            $page  = $request->get('page', 1);

            if (empty($query)) {

                if ($request->ajax()) {

                    return response()->json([
                        'movies' => [],
                        'total'  => 0,
                        'error'  => null
                    ]);
                }

                return view('panel-control.index', [
                    'movies' => [],
                    'total'  => 0,
                    'error'  => null
                ]);
            }

            $result = $this->movieService->search($query, $page);

            if ($request->ajax()) {
                return response()->json($result);
            }

            return view('panel-control.index', $result);

        } catch (\Throwable $th) {

            Log::error([
                'line'    => $th->getLine(),
                'file'    => $th->getFile(),
                'message' => $th->getMessage(),
            ]);

            return redirect()->back()
                             ->with('error', 'Terjadi kesalahan');
        }
    }

    public function detail($id)
    {
        $movie = $this->movieService->detail($id);

        return view('panel-control.detail', compact('movie'));
    }

    public function deleteFavorite($id)
{
    Favorite::where('id', $id)
        ->where('user_id', auth()->id())
        ->delete();

    return redirect('/Favorites');
}

    public function addFavorite(Request $request)
    {
        Favorite::firstOrCreate(

            [
                'user_id' => auth()->id(),
                'imdb_id' => $request->imdb_id,
            ],

            [
                'title'   => $request->title,
                'year'    => $request->year,
                'poster'  => $request->poster,
                'type'    => $request->type,
            ]

        );

        return redirect('/Favorites');
    }

    public function favorites()
    {
        $favorites = Favorite::where('user_id', auth()->id())->get();

        return view('panel-control.my', compact('favorites'));
    }
}