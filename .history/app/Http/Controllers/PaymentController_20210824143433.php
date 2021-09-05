<?php

namespace App\Http\Controllers;

use App\Repositories\Payment\PaymentRepositoryInterface;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    protected $repo;

    public function __construct(PaymentRepositoryInterface $paymentRepository)
    {
        $this->repo = $paymentRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        return view('test.payment.index');
    }

    public function indexData()
    {
        return response()->json($this->repo->getAll(['id', 'name']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('test.payment.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Redirect
     */
    public function store(Request $request)
    {
        $rs = $this->repo->store($request);
        toast($rs['msg'], $rs['stt']);

        return redirect()->route('admin.payment.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $paymentId
     * @return \Illuminate\Http\Response
     */
    public function show($paymentId)
    {
        $payment = $this->repo->show($paymentId);

        return response()->json($payment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $paymentId
     * @return View
     */
    public function edit($paymentId)
    {
        $payment = $this->repo->find($paymentId);

        return view('test.payment.edit', compact('payment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $paymentId
     * @return Redirect
     */
    public function update(Request $request, $paymentId)
    {
        $rs = $this->repo->update($request, $paymentId);
        toast($rs['msg'], $rs['stt']);

        return redirect()->route('admin.payment.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $paymentId
     * @return Redirect
     */
    public function destroy($paymentId)
    {
        $rs = $this->repo->destroy($paymentId);
        if ($rs['stt'] == 'error') {
            return response()->json($rs, 500);
        }

        return response()->json($rs);
    }
}
