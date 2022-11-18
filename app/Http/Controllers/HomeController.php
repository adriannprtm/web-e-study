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

    public function edit_pengguna($id)
    {
        
        $doc = self::$db->collection('users')->document($id);
        $snapshot = $doc->snapshot();
        $user = $snapshot;

        return view('pengguna.edit', compact('user'));
    }

    public function update_pengguna($id, Request $request)
    {
        $doc = self::$db->collection('users')->document($id);
        $snapshot = $doc->snapshot();
        $user = $snapshot;
        $doc->set([
            'age' => $request->age,
            'email' => $request->email,
            'gender' => $request->j_kel,
            'name' => $request->name,
            'ttl' => $request->tl
        ]);

        return redirect('/pengguna');
    }

    public function hapus_pengguna($id)
    {
        $doc = self::$db->collection('users')->document($id);
        $doc->delete();

        return redirect('/pengguna');
    }

    public function intro()
    {
        $doc = self::$db->collection('intro')->document('intro1');
        $snapshot = $doc->snapshot();
        $intro = $snapshot;
        return view ('tampilan.intro', compact('intro'));
    }

    public function intro1()
    {
        $doc = self::$db->collection('intro')->document('intro2');
        $snapshot = $doc->snapshot();
        $intro = $snapshot;
        return view ('tampilan.intro1', compact('intro'));
    }

    public function intro2()
    {
        $doc = self::$db->collection('intro')->document('intro3');
        $snapshot = $doc->snapshot();
        $intro = $snapshot;
        return view ('tampilan.intro2', compact('intro'));
    }

    

}
