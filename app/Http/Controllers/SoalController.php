<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Contracts\Session\Session;
use Excel;
class SoalController extends Controller
{
    public function ambilsoal(Request $req)
    {
        # code...
        if (!Session()->get('login')) {
            return redirect('/login');
        }
        Session()->put('soal',$req->tipe);
        Session()->put('so',$req->nq);
        if ($req->nq == 0) {
        $data = DB::table('soal_mta')->inRandomOrder()->get();    # code...
        }
    $data = DB::table('soal_mta')->inRandomOrder()->limit($req->nq)->get();
    Session()->put('time',$req->time);
    foreach ($data as $d) {
    	$e='x-'.$d->id;

    	$op[$e] = [$d->a,$d->b,$d->c,$d->d,$d->e];
    	 shuffle($op[$e]);
    }
    return view('soal',['soal2' => $data,'op' => $op,'waktu' => $req->time]);
    }

public function soal3()
{
    $data = DB::table('soal_mta')->where('tipe',3)->get();
    foreach ($data as $d) {
        $e='x-'.$d->id;

        $op[$e] = [$d->a,$d->b,$d->c,$d->d];
         shuffle($op[$e]);
    }
    return view('soal3',['soal2' => $data,'op' =>$op]);
}

public function tes2(Request $val)
{
    return response()->json($val);
}

public function ambil4()
{
    return view('soal4');
}

public function ambil3()
{
    return view('yesorno');
}

public function jsoal3(Request $req)
{
    return response()->json($req->all());
}

    public function result(Request $all)
    {       
          // return dd(is_array($all->pilihan9));
        foreach ($all->soal as $X) {
            $xc = 'pilihan'.$X;
            $cekk = DB::table('soal_mta')->where('id',$X)->get();
            //$benar =[]; 
            if(is_array($all->$xc)) {
            $jw = $all->$xc;
            sort($jw);
            $asli = explode(',', $cekk[0]->jawaban);   
            sort($asli);
            if ($jw == $asli) {
                $benar[$X] ='benar';
            }else{
                $salah[$X] ='salah';
            }
            }else{
            if ($all->$xc == $cekk[0]->jawaban) {
                $benar[$X] =$all->$xc.' benar'; 
            }else{
                $salah[$X] =$all->$xc.' salah';
                }    
            }
        }
        //return ($all);
        $xv = count($all->soal);

         $data['user'] = Session()->get('user');
         $data['kategori'] = Session()->get('soal');
         $data['betul'] = count($benar);
         $data['salah'] = count($salah);
         $data['score'] = (count($benar)/$xv)*100;

         $datai['user'] = Session()->get('user');
         $datai['kategori_soal'] = $data['kategori'];
         $datai['benar'] = count($benar);
         $datai['salah'] = count($salah);
         if (((count($benar)/$xv)*100) >=70) {
             
         $datai['status'] = 'lulus';
         }else{
            $datai['status'] = 'gagal';
         }
         $datai['nilai'] = (count($benar)/$xv)*100;
         $datai['jumlah'] = $xv;
         DB::table('nilai_mta')->insert($datai);   


         return view('grapik',['data' => $data,'score' => $data['score']]);
        //[("Betul : ".$betul." Salah : ".$salah." Nilai : ".$betul/count($pilihan)*100);
      //  return array_merge($all->soal,$all->pilihan);

    }

    public function regacc(Request $req){

        $data = [
            'fullname' => $req->name,
            'email' => $req->email,
            'User' => $req->user,
            'Pass' => $req->pass,
            'Level' => 0,
            'phone' => $req->phone,
            'address' => $req->address,
            'ttl' => $req->ttl,
            'perusahaan' => $req->perusahaan,
            'pekerjaan' => $req->pekerjaan,
            'kelamin' => $req->kelamin
        ];
        $cek = DB::table('user')->where('User',$req->user)->get();
        if ($cek->count() > 0) {
            return 'Username Telah Dipakai!';
        }else{
        DB::table('user')->insert($data);
            return 'Akun Berhasil Terdaftar!';
        }
    }

    public function gologin(Request $req)
    {
        $c = DB::table('user')->where('User',$req->user)->where('Pass',$req->pass)->get();

        if($c->count() > 0)
        {
            if ($c[0]->Level == 0) {
                foreach ($c as $x) {
                Session()->put('login', true);
                Session()->put('user', $x->User);
            }
            DB::table('user')->where('User',$req->user)->where('Pass',$req->pass)->update(['aktif' => 'yes']);
            return redirect('/prof');
            }elseif ($c[0]->Level == 1) {
                foreach ($c as $x) {
                Session()->put('admin', true);
                Session()->put('user', $x->User);
                Session()->put('level', $c[0]->Level);
            }
                DB::table('user')->where('User',$req->user)->where('Pass',$req->pass)->update(['aktif' =>'yes']);
            return redirect('/d_admin');
            }
            

        }
        else{
            return redirect('/sl')->with('info','Salah Password atau Username');
        }
    }
    public function login()
    {
        if (Session()->get('login')  ) {
            if (Session()->get('level') == 1  ){
                return  redirect('/d_admin');
            }
            elseif (Session()->get('level') == 0  ){
                return  redirect('/prof');
            }
        }else{
            return view('login');
        }
    }
    public function profile(){

        if (Session()->has('user')) {
            $data = DB::table('user')->where('User',Session()->get('user'))->get();
            $data2 = DB::table('nilai_mta')->where('user',Session()->get('user'))->paginate(10);
            return view('profile',['data' => $data,'data2' => $data2]);
        }
        return view('profile');
    }
    public function upprofil(Request $r)
        {
            $data = [
                    'fullname' => $r->nama,
                    'ttl' =>  $r->ttl,
                    'kelamin' => $r->kelamin,
                    'email' =>$r->email,
                    'phone' => $r->hp,
                    'address' => $r->alamat,
                    'pekerjaan' => $r->pekerjaan,
                    'perusahaan' =>$r->perusahaan
            ];
            $data = DB::table('user')->where('User',Session()->get('user'))->update($data);
            return redirect('prof');
        }

    public function getresult(Request $req){
        return view('result');
    }
    public function input(Request $val)
    {
        if($val->tipe == 4){
            //return dd($val->file('gsoal')->getClientOriginalName());
            $val->gsoal->move(public_path('tampilan/images'),$val->file('gsoal')->getClientOriginalName());
          //  return 'ok';
            $data = [
                'soal41' => $val->soal1,
                'soal42' => $val->soal2,
                'pilihan1' => $val->pilihan1,
                'pilihan2' => $val->pilihan2,
                'jenis' => $val->jenis,
                'gambar' => $val->file('gsoal')->getClientOriginalName(),
                'tipe' => $val->tipe,
                'soal' => $val->soal,
                'a' =>'-',
                'b' => '-',
                'c' => '-',
                'd' => '-',
                'jawaban' => $val->jawaban
            ];
            $in = DB::table('soal_mta')->insert($data);
        return  redirect('/i_soal');
            //return dd($val);
        }
        $data = [];
        if ($val->tipe == 2 || $val->tipe == 3) {
          $jawaban_baru= implode(',', $val->jawaban);
          $data = [
                'jenis' => $val->jenis,
                'tipe' => $val->tipe,
                'soal' => $val->soal,
                'a' =>$val->pilihan_a,
                'b' => $val->pilihan_b,
                'c' => $val->pilihan_c,
                'd' => $val->pilihan_d,
                'e' => $val->pilihan_e,
                'jawaban' => $jawaban_baru
                ];      

            
        }else if ($val->tipe == 1) {
            $data = [
                'jenis' => $val->jenis,
                'tipe' => $val->tipe,
                'soal' => $val->soal,
                'a' =>$val->pilihan_a,
                'b' => $val->pilihan_b,
                'c' => $val->pilihan_c,
                'd' => $val->pilihan_d,
                'e' => $val->pilihan_e,
                'jawaban' => $val->jawaban
                ];
        }
           $in = DB::table('soal_mta')->insert($data);
            return  redirect('/i_soal');
                
    }
     public function updates(Request $val)
    {

           if($val->tipe == 4){
            //return dd($val->file('gsoal')->getClientOriginalName());
            
            if($val->gsoal == null) {
            $data = [
                'soal41' => $val->soal1,
                'soal42' => $val->soal2,
                'pilihan1' => $val->pilihan1,
                'pilihan2' => $val->pilihan2,
                'jenis' => $val->jenis,
                'tipe' => $val->tipe,
                'soal' => $val->soal,
                'a' =>'-',
                'b' => '-',
                'c' => '-',
                'd' => '-',
                'jawaban' => $val->jawaban
                        ];
                         $in = DB::table('soal_mta')->insert($data);
                    return  redirect('/i_soal');
            }
            $val->gsoal->move(public_path('tampilan/images'),$val->file('gsoal')->getClientOriginalName());
          //  return 'ok';
            $data = [
                'soal41' => $val->soal1,
                'soal42' => $val->soal2,
                'pilihan1' => $val->pilihan1,
                'pilihan2' => $val->pilihan2,
                'jenis' => $val->jenis,
                'gambar' => $val->file('gsoal')->getClientOriginalName(),
                'tipe' => $val->tipe,
                'soal' => $val->soal,
                'a' =>'-',
                'b' => '-',
                'c' => '-',
                'd' => '-',
                'jawaban' => $val->jawaban
            ];
            $in = DB::table('soal_mta')->insert($data);
        return  redirect('/i_soal');
            //return dd($val);
        }else{
            
        $data = [
        'jenis' => $val->jenis,
        'tipe' => $val->tipe,
        'soal' => $val->soal,
        'a' =>$val->a,
        'b' => $val->b,
        'c' => $val->c,
        'd' => $val->d,
        'jawaban' => $val->jawaban
        ];
        $in = DB::table('soal_mta')->where('id',$val->id)->update($data);
        return  redirect('/d_admin');
        }

    }
     public function admin(Request $val)
    {
        if (!Session()->get('admin')) {
            return view('login');
        }
        $soal = DB::table('soal_mta')->orderBy('id','DESC')->paginate(20);
        return view('/d_admin',['soal'=>$soal]);
    }

    public function logo()
    {
        
        $c = DB::table('user')->where('User',Session()->get('user'))->update(['aktif' => 'no']);
        Session()->flush();
        return view('dashboard');
    }

    public function edits($val)
    {
       //return $val; 
        $soal = DB::table('soal_mta')->where('id',$val)->first();
        if ($soal->tipe == 1 or $soal->tipe == 2) {
        return view('/edit_s',['soal'=>$soal]);
            # code...
        }
        elseif ($soal->tipe == 3) {
        return view('/upsoal3',['data'=>$soal]);
            # code...
        }
        elseif ($soal->tipe == 4) {
        return view('/upsoal4',['soal'=>$soal]);
            # code...
        }
    }

    public function isoal()
    {
        if (!Session()->get('admin')) {
            return view('login');

        }else{
           return view('manage_soal'); 
        }
    }
    public function users()
    {
        if (!Session()->get('admin')) {
            return view('login');

        }
        $user = DB::table('user')->get();
        return view('users',['user' => $user]);
    }
     public function hapuss($user)
    {
         DB::table('user')->where('User',$user)->delete();
        $users = DB::table('user')->get();
        return view('tabeluser',['user' => $users]);
    }
    public function ceku($user)
    {
        $user = DB::table('user')->where('User',$user)->get();
            if ($user->count() > 0) {
                return 'User Tidak Tersedia';
            }else{
                return 'User Tersedia';
            }
        //return redirect('/users');
    }
    public function tambahu(Request  $req)
    {
        $data = [
                'User' => $req->user,
                'Pass' => $req->pass,
                'Level' => 1
        ];
        $user = DB::table('user')->insert($data);
            // if ($user->count() > 0) {
            //     return 'User Tidak Tersedia';
            // }else{
            //     return 'User Tersedia';
            // }
        return redirect('/users');
    }
    public function saya()
    {
        # code...
         $data2 = DB::table('nilai_mta')->where('user',Session()->get('user'))->paginate(10);
         return view('saya',['data2'=> $data2]);
    }

}
