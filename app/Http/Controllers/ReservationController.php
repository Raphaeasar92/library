<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelBook;
use App\Models\ModelReservation;
use App\Http\Requests\ReservationRequest;
use App\Models\User;

class ReservationController extends Controller
{

    private $objBook;
    private $objReservation;

    public function __construct()
    {
        $this->middleware('auth');
        $this->objBook = new ModelBook();
        $this->objReservation = new ModelReservation();

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
     public function index()
    {
        $reservation=$this->objReservation->paginate(5);
        return view('reservation_index',compact('reservation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $books=$this->objBook->all();
        return view('reservation_create',compact('books'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReservationRequest $request)
    {
        $cad=$this->objReservation->create([
           'id_book'=>$request->id_book,
           'days'=>$request->days
        ]);
        if($cad){
            return redirect('reservations');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reservation=$this->objReservation->find($id);
        return view('reservation_show',compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reservation=$this->objReservation->find($id);
        $books=$this->objBook->all();
        return view('reservation_create',compact('reservation','books'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReservationRequest $request, $id)
    {
        $this->objReservation->where(['id'=>$id])->update([
            'id_book'=>$request->id_book,
            'days'=>$request->days
        ]);
        return redirect('reservations');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=$this->objReservation->destroy($id);
        return($del)?"sim":"não";
    }
}
