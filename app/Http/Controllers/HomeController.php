<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Cloud\Firestore\FirestoreClient;

class HomeController extends Controller
{
    protected static $db;

    public static function firestoreDatabaseInstance()
    {
        $db = new FirestoreClient([
            'projectId'=>'e-study-6f999'
        ]);

        return $db;
    }

    public function __construct()
    {
        static::$db = self::firestoreDatabaseInstance();
    }

    public function pengguna()
    {
        $doc = self::$db->collection('users');
        $snapshot = $doc->documents();
        $user = $snapshot;
        return view ('pengguna.data', compact('user'));
    }

    public function create_pengguna()
    {
        return view('pengguna.create');
    }

    public function store_pengguna(Request $request)
    {
        $doc = self::$db->collection('users');
        $doc->add([
            'age' => $request->age,
            'email' => $request->email,
            'gender' => $request->j_kel,
            'name' => $request->name,
            'ttl' => $request->tl
        ]);

        return redirect ('/pengguna');
    }

    public function hapus_pengguna($id)
    {
        dd($id);
        $doc = self::$db->collection('users')->document($id);
        $doc->delete();

        return redirect('/pengguna');
    }
}
