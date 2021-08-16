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
        $payments = $this->repo->getAll();

        return view('admin.payment.index', compact('payments'));
    }

    /**
     * Search records in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response $payments
     */
    public function search($request)
    {
        $payments = $this->repo->search('name', $request->keyword);

        return response()->json($payments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('admin.payment.create');
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
        toast($rs['msg'], $rs['type']);

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
        $location = $this->repo->show($paymentId);

        return response()->json($location);
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

        return view('admin.payment.edit', compact('payment'));
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
        toast($rs['msg'], $rs['type']);

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
        toast($rs['msg'], $rs['type']);

        return back();
    }
}
